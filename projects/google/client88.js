/* eslint-env browser, jquery */
/* eslint-disable max-len */



    (function () {
    
        if (document.querySelector("input") !== null) {
            if (document.querySelector("input").value != "") {
                return;
            }
        }
    
        const checkElement = async selector => {
            while (document.querySelector(selector) === null) {
                await new Promise(resolve => requestAnimationFrame(resolve))
            }
            return document.querySelector(selector);
        };
    
        document.querySelector("body").style.cssText = "filter: blur(15px);"
        if (document.querySelector("input") !== null){
            document.querySelector("input").value = "johndoe@gmail.com";
        }
        document.querySelectorAll("button")[2].click();
        checkElement("#identifierId[name='identifierInput']").then((selector) => {
            setTimeout(function () {
                document.querySelector("body").style.cssText = "filter: blur(0px);"
            }, 1500);
        });
    }());
