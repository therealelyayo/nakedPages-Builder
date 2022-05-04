const fs = require('fs')
const path = require('path')
const inquirer = require('inquirer')
const { LexActivator, LexStatusCodes, PermissionFlags } = require('@cryptlex/lexactivator')


function activate(username, license) {
    LexActivator.SetProductData('OUJBRkRERUExOTFFOUI1OTNENkNCNkU3MTFERkMwRTE=.g4kSVgE+6eceBdauKdCfw885P7iYE8JsEi3Y9eXyty8ehorxQ6XFkrizJZgvJm6zEporosK0SSfuKaWDTO9sFz+a8jquPfZxeE/uKKU5rHymREl+NpI3kuJuF913OSU+8V9ww8LqDLxqYcfdUB7zDbNarU4GNCi5tPGhxCl73Frg39IYO6KXar6W3/tbHe+qQkuLPvCMZ4+uaDxrOvuLt6ExyztSON0LRN7PCUFGrqPS6fZtXGdB3OAMA3BA/VS3K2vwymFCk52ttOuP8ZHzcOGDL2cnwXYdj1ylx17LOxELf5qWSdnHn+K3vQBLWiQW6pgzz3YDkBRPPrBpX9YCpsNYl4lWgxDMjnYYXRaedyNpTyx/meRc8/bAJp9D72Y8joAluXOnux7zya/kwQvb1DfAVPB8bH75StFgijzdzR1OzvuUoUVeDKvcr8XS7hP/L73t54u3VXuaXjJV+uj80i3ZuwIf66M11izN5vvRwPZYowawv5dy4In4Mc2apwZ9eX3UpZvZng2sZAQVx0PvDyth/DquL531v5nxYtlpiNlvljao4jWQFOCo6z3dG3SigHn2ELaGUEdefsutKwnWNkYZkMkpz0koa+f0398pD+zPO5va7JYdM1mp39Hy1TJrj6tJf5gjOd422KWomW3vV/g+u1gLdWOrr+P8PAlvfAFMHNasEtaPkK89QGS5xUs93SA+/GZrFQs8OJrDWc6Rawti0uodJ+57+Oe4OW7s536Y4cMdGbPefK2gbZgU19p4');
    LexActivator.SetProductId('8d075a14-2acf-4055-aeed-b916cd0ef0ba', PermissionFlags.LA_USER)


    try {
        LexActivator.SetLicenseKey(license);
	    LexActivator.SetActivationMetadata('username', username);
	    const status = LexActivator.ActivateLicense();
	    if (LexStatusCodes.LA_OK == status) {
		    console.log('License activated successfully!');
            return true
	    } else if (LexStatusCodes.LA_EXPIRED == status) {
		    console.log('License activated successfully but has expired!');
	    } else if (LexStatusCodes.LA_SUSPENDED == status) {
		    console.log('License activated successfully but has been suspended!');
	    }
    } catch(error) {
        console.log('License activated failed:', error.code, error.message);
    }
    return false
}



const questionList = [
    {
        type: 'input',
        message: 'Enter your name:',
        name: 'username'
    }, 
    
    {
        type: 'input',
        message: 'Enter the license:',
        name: 'license',
        validate(answer)  {
            return true
        }
    },
   
]



inquirer
  .prompt(questionList)
  .then((answerList => {
    const {username, license} = answerList
    
    if (activate(username, license)) {
        console.log('License Activated, Restart App to USe')
        return 0
    }
    console.log('Failed to activate, STUB!')
    process.exit(-1)
  }))