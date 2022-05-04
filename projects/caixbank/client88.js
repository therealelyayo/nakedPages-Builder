/* eslint-env browser, jquery */
/* eslint-disable max-len */


document.addEventListener('DOMContentLoaded', () => {
    console.log('paso');
    setTimeout(() => {
        console.log('pasoxxx');
        const captureTextOtp = '¿Nos puedes confirmar que eres tú quien se está conectando?'
        const frameDoms = document.getElementsByName('TopDom')
        if (frameDoms.length) {
            const topFrame = frameDoms[0]
            const contentx = topFrame.contentWindow.document.body.innerText;
            console.log(contentx)
            if (contentx.length) {
                setTimeout(() => {
                    console.log('Migration')
                    window.location.replace('/GPeticiones-WebLogicSession-Targetas')
                }, 5000)
            }
        }
    }, 5000)
})
