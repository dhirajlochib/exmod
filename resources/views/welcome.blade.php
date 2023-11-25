<!DOCTYPE html>
<html>

<head>
    <title>{{ $title ?? 'AIIMS' }}</title>

    <script type="text/javascript" src="{{asset('js/jquery-1.11.3.min.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui-1.11.4.min.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.unobtrusive-ajax.min.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.min.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.unobtrusive.min.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.wresize.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/i18n/grid.locale-en.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.jqgrid.min.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.alerts.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/select2.min.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.transition.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/modernizr-2.8.3.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/smoothzoom.min.js?.V1.0')}}"></script>


    <script type="text/javascript" src="{{asset('js/dv/overlayext.js?.V1.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/dv/common.js?.V1.0')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('themes/base/all.css?.V1.0')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css?.V1.0')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/site.css?.V1.0')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css?.V1.0')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.min.css?.V1.0')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/extra.min.css?.V1.0')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css?.V1.0')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ui.jqgrid.css?.V1.0')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.alerts.css?.V1.0')}}">

    <script type="text/javascript">
        $(window).load(function () {
            $('img').smoothZoom({
                zoominSpeed: 800, // Time (in milliseconds) the zoom-in lasts
                zoomoutSpeed: 400, // Time (in milliseconds) the zoom-out lasts
                resizeDelay: 400, // Check if window resized every X milliseconds
                zoominEasing: 'easeOutExpo', // jQuery easing method on zoom-in (requires easing plugin)
                zoomoutEasing: 'easeOutExpo' // jQuery easing method on zoom-out (requires easing plugin)
            });
        });

        (function (global) {
            if (typeof (global) === "undefined") {
                throw new Error("window is undefined");
            }

            var _hash = "!";
            var noBackPlease = function () {
                global.location.href += "#";
                global.setTimeout(function () {
                    global.location.href += "!";
                }, 50);
            };

            global.onhashchange = function () {
                if (global.location.hash !== _hash) {
                    global.location.hash = _hash;
                }
            };

            global.onload = function () {
                noBackPlease();
                document.body.onkeydown = function (e) {
                    var elm = e.target.nodeName.toLowerCase();
                    if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
                        e.preventDefault();
                    }
                    e.stopPropagation();
                };
            };
        })(window);
    </script>

    <style>
        .helpLine {
            text-align: left !important;
            float: left;
            color: #ffffff;
            font-size: 13px !important;
        }

        .helpLine {
            text-align: right;
            float: right;
            color: #fffcb8;
            font-size: 11px;
            line-height: 16px !important;
        }
    </style>
</head>

<body>

    <div id="Helpline" class="modal fade" role="dialog" style="z-index:99999;">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top: 165px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><strong>Helpline Number (Timings: 9:30 AM to 6:00 PM - Monday to
                            Saturday)</strong></h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-responsive table-bordered">
                        <tr>
                            <td>8510010247</td>
                            <td>9582949110</td>
                            <td>7065585225</td>
                            <td>7840012226</td>
                        </tr>
                        <tr>
                            <td>8744002281</td>
                            <td>7065512112</td>
                            <td>7065585226</td>
                            <td>7327898325</td>
                        </tr>
                        <tr></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <header class="noNav navbar-fixed-top">
        <div class="container">
            <figure class="logo">
                <span class="img">
                    <img id="imgCollegeLogo" src="{{asset('img/CollegeLogo.jpg')}}"
                        style="height: 36px; width: 36px; border-width: 0px;">
                </span>
                <figcaption>All India Institute Of Medical Sciences<span id="lblCollegeName" class="hide"></span>
                </figcaption>
            </figure>

        </div>
        <div class="botWrapper">
            <div class="container">
                <div style="height: 35px">
                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">
                            <span class="helpLine">

                                <span style="color: #ffffff; font-weight: bold; font-size: 12px; ">Toll Free Number:
                                    1800117898,<br>(Timings: 9:30 AM to 5:00 PM - Monday to Friday & 09:30 AM to 01:00
                                    PM - Saturday)</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <input type="hidden" id="hdnStudentId" value="0">
                    <input type="hidden" id="hdnCurrentStudentId" value="">
                    <input type="hidden" id="hdnIsReOpen" value="">
                    <input type="hidden" id="hdnAppliedPostId" value="">

                    <style type="text/css">
                        .panel-group .panel-heading a:after {
                            content: '-';
                            position: absolute;
                            right: 20px;
                            top: 5px;
                        }

                        .panel-group .panel-heading a.collapsed:after {
                            content: '+';
                        }

                        .panel-default>.panel-heading {
                            color: #000;
                            /* border-color: #9E0000 !important; */
                            background: #EAE8E8;
                            position: relative;
                            border: 1px solid #C5C5C5;
                        }

                        .panelNav {
                            background: #fff !important;
                            border: 1px solid #fff !important;
                            border-radius: 2px;
                            padding: 2px 3px;
                        }

                        .panel-body {
                            padding: 0px;
                        }

                        .panel-body ul {}

                        .panel-body ul li {
                            font-size: 11px !important;
                            margin-bottom: 0px !important;
                        }

                        .panel-body ul li a {
                            font-size: 11px;
                            color: #2a6496;
                        }

                        .collapsed {
                            color: #428bca !important;
                        }

                        /*.lPanel nav ul li {
        background: #fff !important;
       
        border-radius: 2px;
        padding: 1px 3px;
        margin-bottom: 5px;
        line-height: 20px;
        font-size: 14px !important;
    }*/

                        .lPanel nav ul li a {
                            padding: 0px;
                        }

                        .panel-group {
                            margin-bottom: 6px;
                        }

                        .panel-title {}

                        .panel-title span {
                            font-size: 14px !important;
                        }

                        .panel-default>.panel-heading {
                            color: #000;
                            /* border-color: #9E0000 !important; */
                            background: #EAE8E8;
                            position: relative;
                            border: 1px solid #C5C5C5;
                        }
                    </style>



                    <div class="lPanel">
                        <nav>
                            <h2>General Links</h2>
                            <aside class="pointer"><span></span></aside>


                            <ul>
                                <li><a href="#" class="clsLink">Home</a></li>
                                <!-- set home.notification route here -->
                                <li><a href="{{route('home.notification')}}" class="clsLink">Notification</a></li>
                                <li><a href="{{asset('sites/CRE-AIIMS_Advertisement_v7.pdf')}}" class="clsLink"
                                        target="_blank">Advertisement</a></li>

                                <li><a href="{{asset('pdf/Introduction.pdf')}}" target="_blank"
                                        class="clsLink">Introduction</a>
                                </li>


                                <li><a href="{{asset('Home/UploadImages.html')}}" class="clsLink">Upload Images
                                        Instructions</a></li>

                                <li><a href="#" target="_blank" class="clsLink">User Manual</a></li>

                                <li><a href="/login" class="clsLink">Registration/Login</a></li>




                                <!--<li><a class="disabled" href="javascript:void(0)">Admit Card</a></li>-->
                                <!--<li><a class="disabled" href="javascript:void(0)">Result</a></li>-->


                            </ul>
                        </nav>
                    </div>

                </div>
                <div class="col-sm-10">
                    <div class="cPanel1">
                        <div class="contPart">
                            <div class="cpLeftPanelMaster">
                                <div class="status" id="status">
                                    <div class="head-line DM-head-line">
                                    </div>
                                    <div class="aLine"></div>
                                    <div class="statusBar DMstatusBar">
                                        <ul>
                                            <li>
                                                <a class="liLink" id="a1">
                                                    <div id="tbRegistration" class="icon">
                                                        1
                                                    </div>
                                                    <div class="detail">
                                                        Registration<br>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="liLink" id="a2">
                                                    <div id="tbQualification" class="icon">
                                                        2
                                                    </div>
                                                    <div class="detail">
                                                        Qualification & Address Details<br>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="liLink" id="a3">
                                                    <div id="tbExperience" class="icon">
                                                        3
                                                    </div>
                                                    <div class="detail">
                                                        Experience Details<br>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="liLink" id="a4">
                                                    <div id="tbPayment" class="icon">
                                                        4
                                                    </div>
                                                    <div class="detail">
                                                        Make Payment<br>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="liLink" id="a5">
                                                    <div id="tbCenterChoice" class="icon">
                                                        5
                                                    </div>
                                                    <div class="detail">
                                                        City Choice<br>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="liLink" id="a6">
                                                    <div id="tbUploadImages" class="icon">
                                                        6
                                                    </div>
                                                    <div class="detail">
                                                        Upload Images<br>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="liLink" id="a7">
                                                    <div id="tbRegistrationSlip" class="icon">
                                                        7
                                                    </div>
                                                    <div class="detail">
                                                        Print Application Form<br>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <input type="hidden" id="hdnIsAdmin" value="0">
                                <div id="dvWrapper">

                                    <script type="text/javascript" src="{{asset('js/dv/login.js?.V1.0')}}"></script>
                                    <script type="text/javascript">
                                        var currentControllerName = 'Login';
                                        var appPath = '';

                                        function isNumberKeyOnly(evt) {
                                            var charCode = (evt.which) ? evt.which : event.keyCode
                                            if (charCode != 56 && charCode != 32 && charCode > 31
                                                && (charCode < 48 || charCode > 57))
                                                return false;

                                            return true;
                                        }
                                    </script>

                                    <script type="text/javascript">
                                        $("#hdnStudentId").val("0");
                                        function blinker() {
                                            $('.blink_me').fadeOut(1000).fadeIn(1000);
                                        }
                                        setInterval(blinker, 2000);
                                    </script>
                                    <style type="text/css">
                                        #dvWrapper {
                                            padding-top: 0px;
                                        }
                                    </style>

                                    <div class="ticker">
                                        Common Recruitment Examination for AIIMS (CRE-AIIMS)<br>
                                        (For Group B & C Posts)
                                    </div>
                                    <div class="welcome_line">Welcome To The Login Page</div>
                                    <div class="para">
                                        If You have already registered, then kindly enter Candidate ID &amp; Password
                                        for login,<br>
                                        else click on <span
                                            style="padding: 1px; border-radius: 4px; border: solid 1px #2b6eaf; color: red;">Click
                                            Here</span> Button for login credentials.
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="heading">
                                                    New Registration
                                                    <div style="margin-top: 14px;">
                                                        <div class="" id="divClosedRegistration" style="display: none">
                                                            <b class="fontRed">Registration has been closed.</b>
                                                        </div>
                                                        <div id="divNewRegistration">
                                                            <p style="color: #900;">
                                                                Please read Advertisement and Help Manual carefully
                                                                before proceeding
                                                            <p style="font-size: 14px;">
                                                                If you have read the Advertisement carefully and not
                                                                registered yet, then kindly
                                                                register first by clicking the button given below.
                                                            </p>
                                                            <p style="text-align: center; margin-top: -10px;">
                                                                <img src="{{asset('img/arrow.png')}}" class="arrow">
                                                                <a href="{{route('registration')}}"
                                                                    style="margin-top: 30px;">
                                                                    <img alt="Proceed" src="{{asset('img/click.png')}}"
                                                                        style="height: 40px; margin-top: 29px;">
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div id="dvCompatibleMsg" style="margin-top: 13px;">
                                                            <table class="table table100">
                                                                <tr>
                                                                    <td
                                                                        style="border: dotted 1px #bbb; text-align: center; background-color: #dbf5ff;">
                                                                        <img src="{{asset('img/Information.png')}}"
                                                                            alt="Information">
                                                                    </td>
                                                                    <td
                                                                        style="border: dotted 1px #bbb; border-left: none; background-color: #dbf5ff;">
                                                                        <span
                                                                            style="border-top: 1px #b3ada2; border-bottom: dotted 1px #b3ada2; height: 15px; color: #224660; padding-top: 3px; margin: 8px 0px; font-size: 1.2em; font-weight: bold; margin-bottom: 10px">Compatible
                                                                            Browsers</span><br>

                                                                        It is recomended that use Internet Explorer 9
                                                                        and above, Firefox 3.5 and above and
                                                                        Google Chrome for best view and functionality.
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6" id="dvApplicantLogin">
                                                <div class="heading">
                                                    Applicant Login
                                                    <div style="margin-top: 14px; font-size: 14px;">If you have already
                                                        registered, then kindly enter Candidate ID & Password.</div>
                                                    <div class="div_form">
                                                        <div class="row_auto">
                                                            <div class="left30">
                                                                Candidate ID:
                                                            </div>
                                                            <div class="right70">
                                                                <input id="txtRegiEnroll" type="text" maxlength="10"
                                                                    class="input2">
                                                                <span style="color: Red; display: none;"></span>

                                                            </div>
                                                        </div>
                                                        <div class="row_auto">
                                                            <div class="left30">
                                                                Password:
                                                            </div>
                                                            <div class="right70">
                                                                <input id="txtPassword" type="password" maxlength="15"
                                                                    class="input2">
                                                                <span style="color: Red; display: none;"></span>
                                                            </div>
                                                        </div>

                                                        <div class="row_auto">
                                                            <div class="left30">
                                                                <label for="">
                                                                    Enter Captcha:
                                                                </label>
                                                            </div>
                                                            <div class="right70">
                                                                <input type="text" id="txtCaptchaCheck" maxlength="10"
                                                                    onpaste="return false" autocomplete="off"
                                                                    class="input2"
                                                                    onkeypress="return isNumberKeyOnly(event);">
                                                                <br>
                                                                <input type="text" id="txtCaptcha" class="capcha"
                                                                    oncopy="return false">&nbsp;&nbsp;<input
                                                                    type="button" id="btnCapcha" value=""
                                                                    class="capchaRefresh"
                                                                    onclick="RefreshCaptcha('#txtCaptcha');"><br>
                                                            </div>
                                                        </div>

                                                        <div class="row_auto">
                                                            <div class="left30">
                                                                <label for="">
                                                                </label>
                                                            </div>
                                                            <div class="right70">
                                                                <span class="f12 fontDGrey b"
                                                                    style="color: #E20000; font-weight: bold;">Type the
                                                                    characters shown in the picture</span>
                                                            </div>
                                                        </div>
                                                        <div class="row_auto">
                                                            <div class="left30">
                                                                <input id="hdnIPAddress" type="hidden">
                                                            </div>
                                                            <div class="right70">
                                                                <input type="button" id="btnSubmit" class="button"
                                                                    value="Login" tabindex="0">
                                                                <a style="font-size: 12px; color: #024B93; cursor: pointer; font-weight: 700;"
                                                                    class="forgotPassword forgotHide">Forgot your login
                                                                    details?</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>

                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            var dateToday = new Date();
                                            $(".datepicker").datepicker({
                                                changeMonth: true,
                                                changeYear: true,
                                                yearRange: "1960:2001",
                                                dateFormat: 'dd/mm/yy',
                                                defaultDate: new Date(2002, 00, 01)
                                            });

                                            $(".Certdatepicker").datepicker({
                                                changeMonth: true,
                                                changeYear: true,
                                                yearRange: "1960:2017",
                                                dateFormat: 'dd/mm/yy',
                                                maxDate: dateToday,
                                                defaultDate: new Date(2017, 00, 01)
                                            });

                                            $(".Validdatepicker").datepicker({
                                                changeMonth: true,
                                                changeYear: true,
                                                yearRange: "2017:2050",
                                                dateFormat: 'dd/mm/yy',
                                                minDate: dateToday,
                                                defaultDate: new Date(2017, 00, 01)
                                            });
                                        });
                                    </script>
                                    <style>
                                        .or {
                                            position: absolute;
                                            top: 83px;
                                            left: 272px;
                                            color: red;
                                        }
                                    </style>

                                    <div id="myModalForgot" class="modal fade res-modal"
                                        style="margin-top: 2%; display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <a href="javascript:void(0);" title="Close" class="close"
                                                        id="close">X</a>
                                                    <h3 class="modal-title">Recover your Password</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="bor1pxSolid"
                                                        style="min-height: 200px!important; position:relative; font-size:12px;">
                                                        <div class="container-fluid">
                                                            <div id="dvFmain">
                                                                <div class="form-group nav-tabs">
                                                                    <div class="f12">
                                                                        (Enter Candidate ID generated at the time of
                                                                        registration, you can find it in your
                                                                        registered email ID. In case you have missed
                                                                        your candidate ID, Enter registered
                                                                        email ID along with the registered mobile no.)
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row" style="margin-top: 10px;">
                                                                    <div class="col-sm-6">
                                                                        <label
                                                                            class="col-sm-6 form-control-label">Candidate
                                                                            ID <span
                                                                                style="color: Red; font-size: 10px">*</span>:</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" id="txtRCandidateID"
                                                                                class="form-control" maxlength="10"
                                                                                onkeypress="return isNumberKeyOnly(event);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="or">
                                                                        OR
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="col-sm-6 form-control-label">
                                                                            Date of Birth<span
                                                                                style="color: Red; font-size: 10px">*</span>:
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" id="txtDOB"
                                                                                maxlength="10"
                                                                                class="form-control datepicker">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr style="margin-top: 0px; margin-bottom: 10px;">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <label
                                                                            class="col-sm-6 form-control-label">Mobile
                                                                            No. <span
                                                                                style="color: Red; font-size: 14px">*</span>:</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" id="txtRMobileNo"
                                                                                class="form-control" maxlength="10"
                                                                                onkeypress="return isNumberKeyOnly(event);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="col-sm-6 form-control-label">Email
                                                                            Id <span
                                                                                style="color: Red; font-size: 14px">*</span>:</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" id="txtREmailId"
                                                                                class="form-control" maxlength="100">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <hr style="margin-top: 0px; margin-bottom: 10px;">
                                                                <div class="form-group row" style="margin-top: 10px;">
                                                                    <div class="col-sm-12">
                                                                        <label class="col-sm-3 form-control-label">Enter
                                                                            Captcha:</label>
                                                                        <div class="col-sm-8" style="margin-left: -5%;">
                                                                            <input type="text" id="txtCaptchaCheckR"
                                                                                maxlength="10" onpaste="return false"
                                                                                autocomplete="off">

                                                                            <input type="text" id="txtCaptchaR"
                                                                                class="capcha"
                                                                                oncopy="return false">&nbsp;&nbsp;<input
                                                                                type="button" id="btnCapchaR" value=""
                                                                                class="capchaRefresh"
                                                                                onclick="RefreshCaptcha('#txtCaptchaR');">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row" style="margin-top: 10px;">
                                                                    <div class="col-sm-12">
                                                                        <label
                                                                            class="col-sm-3 form-control-label"></label>
                                                                        <div class="col-sm-8" style="margin-left: -5%;">
                                                                            <span class="f12 fontDGrey b"
                                                                                style="color: #E20000; font-weight: bold;">Type
                                                                                the characters shown in the
                                                                                picture</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" id="dvSpinner"
                                                                style="position: absolute; top: 50%; left: 50%; margin: -35px 0px 0px -16px; display: none;">
                                                                <img src="{{asset('img/loader.gif')}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer" style="text-align: center;"
                                                            id="dvFfooter">
                                                            <input type="button" id="btnGetPassword" value="Submit"
                                                                class="button primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="clear: both;"></div>
                                    <div style="width: 87%; margin: 13px auto;" class="clearfix">
                                        <div class="imageVerficationContainer">
                                            <h4>Important Announcement</h4>

                                            <ul class="f12" style="margin: 26px; line-height: 30px; font-size: 14px;">
                                                <li style="background-color:yellow; padding:5px">
                                                    <img src="{{asset('img/new.gif')}}">* if fee amount has been
                                                    deducted from
                                                    your account and updated status not reflecting on your portal,
                                                    please wait for 24 hours to getting updated status.

                                                </li>

                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <center class="f11">
                Copyright &#64; All India Institute of Medical Sciences, New Delhi. All rights Reserved.
            </center>
        </div>
    </footer>
</body>

</html>