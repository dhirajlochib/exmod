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
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"><strong>Helpline Number (Timings: 9:30 AM to 6:00 PM - Monday to
                            Saturday)</strong></h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-responsive table-bordered">
                        <tbody>
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
                        </tbody>
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
                            <label class="welUser"><b>Welcome: </b><span
                                    id="lblApplicantName">{{Auth::user()->name}}</span></label><label class="welUser"
                                style="padding-left: 20px;"><b>Candidate ID: </b><span
                                    id="lblCandidateId">{{Auth::user()->candidate_id}}</span></label>
                        </div>
                        <div class="col-sm-6">
                            <span class="helpLine">

                                <span style="color: #ffffff; font-weight: bold; font-size: 12px; ">Toll Free Number:
                                    1800117898,<br>(Timings: 9:30 AM to 5:00 PM - Monday to Friday &amp; 09:30 AM to
                                    01:00 PM - Saturday)</span>
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
                    <input type="hidden" id="hdnStudentId" value="1040876">
                    <input type="hidden" id="hdnCurrentStudentId"
                        value="4mjY5mbt1FwiJQVVoZP9rfewsXYvTLAKrEgyA7ch5oYkYOw882zI">
                    <input type="hidden" id="hdnIsReOpen" value="">
                    <input type="hidden" id="hdnAppliedPostId" value="1">
                    <section class="userProfile">
                        <footer><a id="lnkLogout" title="Click here to LogOut" class="logout"
                                href="{{route('logout')}}">Logout</a><a id="lnkDashboard"
                                title="Click here to Go Dashboard" class="dashboard" href="#">My Page</a> </footer>

                        <figure>
                            <img id="imgStudentMImg" src="{{asset('img/image_upload.jpg')}}" alt="Candidate Image"
                                style="height: 130px; border-width: 0px;">
                        </figure>
                    </section>

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

                        .lPanel nav ul li {
                            background: #fff !important;
                            border-radius: 2px;
                            padding: 1px 3px;
                            margin-bottom: 5px;
                            line-height: 20px;
                            font-size: 14px !important;
                        }

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
                    </style>

                    <div class="lPanel" style="top: 250px;">
                        <aside class="pointer innerPointer"><span></span></aside>
                        <nav>
                            <h2>General Links</h2>

                            <ul>
                                <li><a href="#" class="clsLink">Home</a></li>
                                <!-- set home.notification route here -->
                                <li><a href="{{route('home.notification')}}" class="clsLink">Notification</a></li>
                                <li><a href="{{asset('sites/CRE-AIIMS_Advertisement_v7.pdf')}}" class="clsLink"
                                        target="_blank">Advertisement</a></li>

                                <li><a href="{{asset('pdf/Introduction.pdf')}}" target="_blank"
                                        class="clsLink">Introduction</a>
                                </li>


                                <!-- <li><a href="" class="clsLink">Registration/Login</a></li> -->

                                <li><a href="#" target="_blank" class="clsLink">User Manual</a></li>
                                <li>

                                    <a id="lnkRaise" href="Support/Index?id=1" style="cursor: pointer;">
                                        <b>Raise your Query</b>
                                        <i class="fa fa-question-circle fa-5" aria-hidden="true"></i>


                                    </a>
                                </li>




                            </ul>
                        </nav>
                        <script src="{{asset('js/dv/Common.js')}}"></script>

                        <script>
                            $(document).ready(function () {
                                // fnGetApplicantById1();

                            });
                            function fnGetApplicantById1() {

                                $.post(appPath + "/DashBoard/GetApplicantById", function (result) {

                                    if (result && result != "error") {
                                        var studentJson = $.parseJSON(result.StudentDetails)[0];

                                        if (studentJson.GroupBC > 0) {
                                            $("#GroupBC").show();
                                        } else {
                                            $("#GroupBC").hide();
                                        }
                                        if (studentJson.admitcard > 0) {
                                            $("#admitcard").show();
                                        } else {
                                            $("#admitcard").hide();
                                        }
                                        if (studentJson.SecurityGuard > 0) {
                                            $("#SecurityGuard").show();
                                        } else {
                                            $("#SecurityGuard").hide();
                                        }
                                        if (studentJson.Index_JAA > 0) {
                                            $("#Index_JAA").show();
                                        } else {
                                            $("#Index_JAA").hide();
                                        }
                                        if (studentJson.Index_Steno > 0) {
                                            $("#Index_Steno").show();
                                        } else {
                                            $("#Index_Steno").hide();
                                        }


                                        if (studentJson.vacificationletterjaa > 0) {
                                            $("#liDocvarification").show();
                                        } else {
                                            $("#liDocvarification").hide();
                                        }

                                    }
                                    else {
                                        jAlert("Your action could not be completed due to an exception. Please try again later.");
                                    }


                                });


                            }
                        </script>
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
                                                <a class="liLink" id="a1"
                                                    href="EditRegistration?id=4mjY5mbt1FwiJQVVoZP9rfewsXYvTLAKrEgyA7ch5oYkYOw882zI">
                                                    <div id="tbRegistration" class="icon active_btn">
                                                        1
                                                    </div>
                                                    <div class="detail">
                                                        Registration<br>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="liLink" id="a2"
                                                    href="Qualification?id=4mjY5mbt1FwiJQVVoZP9rfewsXYvTLAKrEgyA7ch5oYkYOw882zI">
                                                    <div id="tbQualification" class="icon active_btn">
                                                        2
                                                    </div>
                                                    <div class="detail">
                                                        Qualification &amp; Address Details<br>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="liLink" id="a3"
                                                    href="Experience?id=4mjY5mbt1FwiJQVVoZP9rfewsXYvTLAKrEgyA7ch5oYkYOw882zI">
                                                    <div id="tbExperience" class="icon active_btn">
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
                                                    <div id="tbPayment" class="icon active_btn">
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
                                                    <div id="tbCenterChoice" class="icon active_btn">
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

                                    <script type="text/javascript"
                                        src="{{asset('js/dv/centerchoicenew.js?v1?.V1.0')}}"></script>

                                    <div class="mar10" id="dvOptedCentre" style="display: none;">
                                        <h3 class="fontDarkRed lightBlue pad4 marT10 b f16">Opted City Details</h3>
                                        <div class="bor1pxSolid table-responsive">
                                            <div class="container-fluid">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr class="bg-info">
                                                            <th>Candidate Name</th>
                                                            <th>Candidate ID</th>
                                                            <th>State</th>
                                                            <th>Exam City (Preference 1)</th>
                                                            <th>State</th>
                                                            <th>Exam City (Preference 2)</th>
                                                            <th>State</th>
                                                            <th>Exam City (Preference 3)</th>
                                                            <th>Exam City (Preference 4)</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label id="lblName"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblApplicationNo"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblState"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblOptedCenter"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblState2"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblOptedCenter2"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblState3"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblOptedCenter3"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblOptedCenter4">Any Other City</label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="marT20 btnR " style="text-align: center;">
                                            <input type="button" id="btnProceed" value=" Proceed " class="button">
                                        </div>
                                    </div>



                                    <div class="mar10" id="dvForCentre" style="display: block;">
                                        <h3 class="fontDarkRed lightBlue pad4 marT10 b f16">City Choice</h3>
                                        <div class="bor1pxSolid table-responsive">
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 form-control-label b f14">
                                                            Select State:
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select id="ddlState"
                                                                class="form-control select2-hidden-accessible"
                                                                tabindex="-1" aria-hidden="true">
                                                                <option value="0">[Choose One]</option>
                                                                <option value="1">Andhra Pradesh</option>
                                                                <option value="2">Assam</option>
                                                                <option value="3">Bihar</option>
                                                                <option value="4">Chandigarh</option>
                                                                <option value="5">Chhattisgarh</option>
                                                                <option value="6">Delhi</option>
                                                                <option value="7">Gujarat</option>
                                                                <option value="8">Haryana</option>
                                                                <option value="9">Himachal Pradesh</option>
                                                                <option value="10">Jammu and Kashmir</option>
                                                                <option value="11">Jharkhand</option>
                                                                <option value="12">Karnataka</option>
                                                                <option value="13">Kerala</option>
                                                                <option value="14">Madhya Pradesh</option>
                                                                <option value="15">Maharashtra</option>
                                                                <option value="16">Odisha</option>
                                                                <option value="17">Punjab</option>
                                                                <option value="18">Rajasthan</option>
                                                                <option value="19">Tamil Nadu</option>
                                                                <option value="20">Telangana</option>
                                                                <option value="21">Uttar Pradesh</option>
                                                                <option value="22">Uttarakhand</option>
                                                                <option value="23">West Bengal</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--default select2-container--below"
                                                                dir="ltr" style="width: 100px;"><span
                                                                    class="selection"><span
                                                                        class="select2-selection select2-selection--single"
                                                                        role="combobox" aria-autocomplete="list"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        tabindex="0"
                                                                        aria-labelledby="select2-ddlState-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-ddlState-container"
                                                                            title="Delhi">Delhi</span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 form-control-label b f14">
                                                            Exam City (Preference 1):
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select id="ddlCity1"
                                                                class="form-control select2-hidden-accessible"
                                                                tabindex="-1" aria-hidden="true">
                                                                <option value="0">[Choose One]</option>
                                                                <option value="9">New Delhi</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--default select2-container--below"
                                                                dir="ltr" style="width: 443px;"><span
                                                                    class="selection"><span
                                                                        class="select2-selection select2-selection--single"
                                                                        role="combobox" aria-autocomplete="list"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        tabindex="0"
                                                                        aria-labelledby="select2-ddlCity1-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-ddlCity1-container"
                                                                            title="[Choose One]">[Choose
                                                                            One]</span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="marT10"></div>

                                            </div>
                                        </div>
                                        <div class="bor1pxSolid table-responsive">
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 form-control-label b f14">
                                                            Select State:
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select id="ddlState2"
                                                                class="form-control select2-hidden-accessible"
                                                                tabindex="-1" aria-hidden="true">
                                                                <option value="0">[Choose One]</option>
                                                                <option value="1">Andhra Pradesh</option>
                                                                <option value="2">Assam</option>
                                                                <option value="3">Bihar</option>
                                                                <option value="4">Chandigarh</option>
                                                                <option value="5">Chhattisgarh</option>
                                                                <option value="6">Delhi</option>
                                                                <option value="7">Gujarat</option>
                                                                <option value="8">Haryana</option>
                                                                <option value="9">Himachal Pradesh</option>
                                                                <option value="10">Jammu and Kashmir</option>
                                                                <option value="11">Jharkhand</option>
                                                                <option value="12">Karnataka</option>
                                                                <option value="13">Kerala</option>
                                                                <option value="14">Madhya Pradesh</option>
                                                                <option value="15">Maharashtra</option>
                                                                <option value="16">Odisha</option>
                                                                <option value="17">Punjab</option>
                                                                <option value="18">Rajasthan</option>
                                                                <option value="19">Tamil Nadu</option>
                                                                <option value="20">Telangana</option>
                                                                <option value="21">Uttar Pradesh</option>
                                                                <option value="22">Uttarakhand</option>
                                                                <option value="23">West Bengal</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--default select2-container--below"
                                                                dir="ltr" style="width: 100px;"><span
                                                                    class="selection"><span
                                                                        class="select2-selection select2-selection--single"
                                                                        role="combobox" aria-autocomplete="list"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        tabindex="0"
                                                                        aria-labelledby="select2-ddlState2-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-ddlState2-container"
                                                                            title="[Choose One]">[Choose
                                                                            One]</span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-3 form-control-label b f14">
                                                            Exam City (Preference 2):
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select id="ddlCity2" class="form-control"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bor1pxSolid table-responsive">
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 form-control-label b f14">
                                                            Select State:
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select id="ddlState3"
                                                                class="form-control select2-hidden-accessible"
                                                                tabindex="-1" aria-hidden="true">
                                                                <option value="0">[Choose One]</option>
                                                                <option value="1">Andhra Pradesh</option>
                                                                <option value="2">Assam</option>
                                                                <option value="3">Bihar</option>
                                                                <option value="4">Chandigarh</option>
                                                                <option value="5">Chhattisgarh</option>
                                                                <option value="6">Delhi</option>
                                                                <option value="7">Gujarat</option>
                                                                <option value="8">Haryana</option>
                                                                <option value="9">Himachal Pradesh</option>
                                                                <option value="10">Jammu and Kashmir</option>
                                                                <option value="11">Jharkhand</option>
                                                                <option value="12">Karnataka</option>
                                                                <option value="13">Kerala</option>
                                                                <option value="14">Madhya Pradesh</option>
                                                                <option value="15">Maharashtra</option>
                                                                <option value="16">Odisha</option>
                                                                <option value="17">Punjab</option>
                                                                <option value="18">Rajasthan</option>
                                                                <option value="19">Tamil Nadu</option>
                                                                <option value="20">Telangana</option>
                                                                <option value="21">Uttar Pradesh</option>
                                                                <option value="22">Uttarakhand</option>
                                                                <option value="23">West Bengal</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--default select2-container--below"
                                                                dir="ltr" style="width: 100px;"><span
                                                                    class="selection"><span
                                                                        class="select2-selection select2-selection--single"
                                                                        role="combobox" aria-autocomplete="list"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        tabindex="0"
                                                                        aria-labelledby="select2-ddlState3-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-ddlState3-container"
                                                                            title="[Choose One]">[Choose
                                                                            One]</span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-3 form-control-label b f14">
                                                            Exam City (Preference 3):
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select id="ddlCity3" class="form-control"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bor1pxSolid table-responsive">
                                            <div class="container-fluid">
                                                <div class="form-group">

                                                    <div class="row">
                                                        <div class="col-sm-3 form-control-label b f14">
                                                            Exam City (Preference 4):
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <select id="ddlCity4" class="form-control">
                                                                <option value="0">--Select--</option>
                                                                <option value="1">Any Other City</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>







                                    </div>
                                    <div class="btnR" style="text-align: center; margin-top: 5px;" id="dvButton1">
                                        <input type="button" id="btnSaveExit" value="Save &amp; Exit"
                                            class="button hide">
                                        <input type="button" id="btnSaveProceed" value="Save &amp; Proceed"
                                            class="button">

                                    </div>
                                    <input type="hidden" id="hdnPrevCity" value="0">
                                    <input type="hidden" id="hdnAppliedPostId" value="0">

                                    <div class="mar10">
                                        <b>Note:</b> AIIMS will make all efforts to ensure that the candidate is
                                        allotted a centre in the cities chosen by the applicant, due to circumstances
                                        such as lack of sufficient number of candidates, logistic, administrative and
                                        other reasons, an Examination Centre in another city may be allotted
                                        finally.<br>
                                        Applicants are therefore required to be prepared to appear for the examination
                                        in the Examination Centre allotted to them.
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
                    Copyright @ All India Institute of Medical Sciences, New Delhi. All rights Reserved.
                </center>
            </div>
        </footer>


    </div>
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
    </div>
</body>

</html>