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
                                    id="lblCandidateId">9371040876</span></label>
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
                        value="lnOgXvSTdPD6TEdbuV9zcjbWK2DsY74tuzMz2WO+kWNaDpEWU5LM">
                    <input type="hidden" id="hdnIsReOpen" value="false">
                    <input type="hidden" id="hdnAppliedPostId" value="1">
                    <section class="userProfile">
                        <footer><a id="lnkLogout" title="Click here to LogOut" class="logout"
                                href="{{route('logout')}}">Logout</a><a id="lnkDashboard"
                                title="Click here to Go Dashboard" class="dashboard" href="#">My Page</a>
                        </footer>

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
                        <script src="{{asset('img/common(1')}}).js.download"></script>

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
                                                    href="/EditRegistration?id=lnOgXvSTdPD6TEdbuV9zcjbWK2DsY74tuzMz2WO+kWNaDpEWU5LM">
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
                                                <a class="liLink" id="a2" href="{{route('user.qualificationDetails')}}">
                                                    <div id="tbQualification" class="icon">
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
                                                    href="/Experience?id=lnOgXvSTdPD6TEdbuV9zcjbWK2DsY74tuzMz2WO+kWNaDpEWU5LM">
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

                                    <script src="{{asset('img/DashBoard.js')}}.download"></script>
                                    <style>
                                        .float {
                                            position: fixed;
                                            width: 60px;
                                            height: 60px;
                                            bottom: 40px;
                                            /* right: 40px; */
                                            left: 10px;
                                            background-color: #2f75b6;
                                            color: #FFF;
                                            border-radius: 50px;
                                            text-align: center;
                                            font-size: 30px;
                                            box-shadow: 2px 2px 3px #999;
                                            z-index: 100;
                                        }

                                        #lnkRaise i:hover,
                                        b:hover {
                                            color: #46a6ff;
                                            /*color: #edf87b;*/
                                        }

                                        .queclass {
                                            font-size: 6rem !important;
                                        }

                                        .float1 {
                                            position: fixed;
                                            bottom: 104px;
                                            padding: 8px;
                                            left: 10px;
                                            background-color: #2f75b6;
                                            color: #FFF;
                                            border-radius: 50px;
                                            text-align: center;
                                            font-size: 15px;
                                            box-shadow: 2px 2px 3px #999;
                                            z-index: 107;
                                        }

                                        /*language*/

                                        .lang {
                                            border: 2px solid;
                                            color: #fff;
                                            width: auto;
                                            background: #5fa0d9;
                                            font-size: 18px;
                                            font-weight: 800;
                                            padding: 8px;
                                            border-radius: 7px;
                                        }

                                        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap");


                                        .plans {
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -webkit-box-pack: justify;
                                            -ms-flex-pack: justify;
                                            justify-content: space-between;
                                            max-width: 970px;
                                            padding: 85px 50px;
                                            -webkit-box-sizing: border-box;
                                            box-sizing: border-box;
                                            background: #fff;
                                            border-radius: 20px;
                                            /*  -webkit-box-shadow: 0px 8px 10px 0px #d8dfeb;
        box-shadow: 0px 8px 10px 0px #d8dfeb;*/
                                            -webkit-box-align: center;
                                            -ms-flex-align: center;
                                            align-items: center;
                                            -ms-flex-wrap: wrap;
                                            flex-wrap: wrap;
                                        }

                                        .plans .plan input[type="radio"] {
                                            position: absolute;
                                            opacity: 0;
                                        }

                                        .plans .plan {
                                            cursor: pointer;
                                            width: 48.5%;
                                        }

                                        .plans .plan .plan-content {
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex;
                                            padding: 30px;
                                            -webkit-box-sizing: border-box;
                                            box-sizing: border-box;
                                            border: 2px solid #e1e2e7;
                                            border-radius: 10px;
                                            -webkit-transition: -webkit-box-shadow 0.4s;
                                            transition: -webkit-box-shadow 0.4s;
                                            -o-transition: box-shadow 0.4s;
                                            transition: box-shadow 0.4s;
                                            transition: box-shadow 0.4s, -webkit-box-shadow 0.4s;
                                            position: relative;
                                        }

                                        .plans .plan .plan-content img {
                                            margin-right: 30px;
                                            height: 72px;
                                        }

                                        .plans .plan .plan-details span {
                                            margin-bottom: 10px;
                                            display: block;
                                            font-size: 20px;
                                            line-height: 24px;
                                            color: #252f42;
                                        }

                                        .container .title {
                                            font-size: 20px;
                                            font-weight: 500;
                                            -ms-flex-preferred-size: 100%;
                                            flex-basis: 100%;
                                            color: #252f42;
                                            margin-bottom: 20px;
                                        }

                                        .plans .plan .plan-details p {
                                            color: #646a79;
                                            font-size: 14px;
                                            line-height: 18px;
                                        }

                                        .plans .plan .plan-content:hover {
                                            -webkit-box-shadow: 0px 3px 5px 0px #e8e8e8;
                                            box-shadow: 0px 3px 5px 0px #e8e8e8;
                                        }

                                        .plans .plan input[type="radio"]:checked+.plan-content:after {
                                            content: "";
                                            position: absolute;
                                            height: 8px;
                                            width: 8px;
                                            background: #216fe0;
                                            right: 20px;
                                            top: 20px;
                                            border-radius: 100%;
                                            border: 3px solid #fff;
                                            -webkit-box-shadow: 0px 0px 0px 2px #0066ff;
                                            box-shadow: 0px 0px 0px 2px #0066ff;
                                        }

                                        .plans .plan input[type="radio"]:checked+.plan-content {
                                            border: 2px solid #216ee0;
                                            background: #eaf1fe;
                                            -webkit-transition: ease-in 0.3s;
                                            -o-transition: ease-in 0.3s;
                                            transition: ease-in 0.3s;
                                        }

                                        @media screen and (max-width: 991px) {
                                            .plans {
                                                margin: 0 20px;
                                                -webkit-box-orient: vertical;
                                                -webkit-box-direction: normal;
                                                -ms-flex-direction: column;
                                                flex-direction: column;
                                                -webkit-box-align: start;
                                                -ms-flex-align: start;
                                                align-items: flex-start;
                                                padding: 40px;
                                            }

                                            .plans .plan {
                                                width: 100%;
                                            }

                                            .plan.complete-plan {
                                                margin-top: 20px;
                                            }

                                            .plans .plan .plan-content .plan-details {
                                                width: 70%;
                                                display: inline-block;
                                            }

                                            .plans .plan input[type="radio"]:checked+.plan-content:after {
                                                top: 45%;
                                                -webkit-transform: translate(-50%);
                                                -ms-transform: translate(-50%);
                                                transform: translate(-50%);
                                            }
                                        }

                                        @media screen and (max-width: 767px) {
                                            .plans .plan .plan-content .plan-details {
                                                width: 60%;
                                                display: inline-block;
                                            }
                                        }

                                        @media screen and (max-width: 540px) {
                                            .plans .plan .plan-content img {
                                                margin-bottom: 20px;
                                                height: 56px;
                                                -webkit-transition: height 0.4s;
                                                -o-transition: height 0.4s;
                                                transition: height 0.4s;
                                            }

                                            .plans .plan input[type="radio"]:checked+.plan-content:after {
                                                top: 20px;
                                                right: 10px;
                                            }

                                            .plans .plan .plan-content .plan-details {
                                                width: 100%;
                                            }

                                            .plans .plan .plan-content {
                                                padding: 20px;
                                                -webkit-box-orient: vertical;
                                                -webkit-box-direction: normal;
                                                -ms-flex-direction: column;
                                                flex-direction: column;
                                                -webkit-box-align: baseline;
                                                -ms-flex-align: baseline;
                                                align-items: baseline;
                                            }
                                        }



                                        /*language*/
                                    </style>
                                    <div class="mar10">




                                        <div class="" id="divlanguage" style="margin-bottom: 4px; display: none;">



                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"> Choose
                                                                Language for skill test for STENOGRAPHER</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <div class="container">
                                                                <div class="plans">

                                                                    <label class="plan basic-plan" for="basic">
                                                                        <input type="radio" value="1" name="plan"
                                                                            id="basic">
                                                                        <div class="plan-content">
                                                                            <img loading="lazy"
                                                                                src="{{asset('img/hindi.png')}}" alt="">
                                                                            <div class="plan-details">
                                                                                <span>Hindi</span>
                                                                                <p> </p>

                                                                            </div>
                                                                        </div>
                                                                    </label>

                                                                    <label class="plan complete-plan" for="complete">
                                                                        <input type="radio" id="complete" value="2"
                                                                            name="plan">
                                                                        <div class="plan-content">
                                                                            <img loading="lazy"
                                                                                src="{{asset('img/english.png')}}"
                                                                                alt="">
                                                                            <div class="plan-details">
                                                                                <span>English</span>
                                                                                <p> </p>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer" style="margin-top: 2rem;">
                                                                <button type="button" style=" padding: 0px 12px;"
                                                                    class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="button" style=" padding: 0px 12px;"
                                                                    class="btn btn-primary"
                                                                    onclick="SaveLang()">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>









                                            </div>
                                        </div>


                                        <h3 class="fontDarkRed lightBlue pad4 marT10 b f16">Personal Details</h3>
                                        <div class="bor1pxSolid">
                                            <div class="form-group nav-tabs clearfix">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">Candidate ID:</label>
                                                    <div class="col-sm-7">
                                                        <label id="lblFormNo"
                                                            font-bold="true">{{Auth::user()->candidate_id}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">Post Applied:</label>
                                                    <div class="col-sm-7">
                                                        <label id="lblCourseApplied"
                                                            font-bold="true">{{Auth::user()->userDetail()->post_name}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix nav-tabs dashboardGridBg">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">Full Name:</label>
                                                    <div class="col-sm-7">
                                                        <label id="lblUserName">{{Auth::user()->name}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix nav-tabs">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">Father's Name:</label>
                                                    <div class="col-sm-7">
                                                        <label
                                                            id="lblFathersName">{{Auth::user()->userDetail()->father_name
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="tbRollNo" class="col-sm-5 form-control-label b">
                                                        Mother's Name:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label
                                                            id="lblMotherName">{{Auth::user()->userDetail()->mother_name
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix nav-tabs dashboardGridBg">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">
                                                        Date of Birth:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label id="lblDOB">{{Auth::user()->userDetail()->dob ??
                                                            ''}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">
                                                        Gender:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label
                                                            id="lblGender">{{Auth::user()->userDetail()->rbtnlstGender
                                                            ??
                                                            ''}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix nav-tabs ">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">
                                                        Category:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label
                                                            id="lblCategory">{{Auth::user()->userDetail()->rbtnlstCategory1
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">
                                                        Nationality:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label id="lblNationality">INDIAN</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix nav-tabs dashboardGridBg"
                                                id="tr_certificate" style="display: none;">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">
                                                        Certificate No.:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label
                                                            id="lblCertificateNo">{{Auth::user()->userDetail()->category_certificate_no
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">
                                                        Certificate Issue Date:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label id="lblCertificateDate">01 Dec 2023</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix nav-tabs dashboardGridBg">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">
                                                        PWBD:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label id="IsOPH">{{Auth::user()->userDetail()->rbtnlstPWD ==
                                                            'Yes' ? 'Yes' : 'No'
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" id="divDisabilityPercent" style="display: none">
                                                    <label class="col-sm-5 form-control-label b">
                                                        PWD Type &amp; Disability %
                                                    </label>
                                                    <label id="lblPWDType"></label> / <label
                                                        id="lblDisabilityPercent"></label>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix nav-tabs dashboardGridBg">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">ID Proof: </label>
                                                    <div class="col-sm-7">
                                                        <label id="lblIDproof">{{Auth::user()->userDetail()->id_proof
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">ID No:</label>
                                                    <div class="col-sm-7">
                                                        <label id="lblidno">{{Auth::user()->userDetail()->id_no
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix nav-tabs">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">Place of Issue:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label
                                                            id="lblPlaceofIssue">{{Auth::user()->userDetail()->place_of_issue_id
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">Issue Date:</label>
                                                    <div class="col-sm-7">
                                                        <label
                                                            id="lblIssueDate">{{Auth::user()->userDetail()->issue_date_id
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix nav-tabs dashboardGridBg">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">
                                                        Valid Till:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label
                                                            id="lblValidTill">{{Auth::user()->userDetail()->valid_till_id
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h3 class="fontDarkRed lightBlue pad4 marT10 b f16">Contact Details</h3>
                                        <div class="bor1pxSolid">
                                            <div class="form-group clearfix nav-tabs">
                                                <div class="col-sx-12">
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-5 form-control-label b">
                                                            Email ID:
                                                        </label>
                                                        <div class="col-sm-7">
                                                            <label id="lblEmailID">{{Auth::user()->email}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-5 form-control-label b">
                                                            Mobile No.:
                                                        </label>
                                                        <div class="col-sm-7">
                                                            <label id="lblMobileNo">{{Auth::user()->phone}}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix nav-tabs dashboardGridBg">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-5 form-control-label b">
                                                        Alternate Number:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <label
                                                            id="lblAlternateMobileNo">{{Auth::user()->userDetail()->alternate_mobile_no
                                                            ?? ''}}</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- <h2 class="bgDBlue marB10 pad5 fontWhite f17 b">Due Steps</h2>
                                        <div class="bor1pxSolid table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="center">
                                                            <img id="Image1" alt="" src="<?php if (Auth::user()->form_step > 1) {
                                                                                                    echo asset('img/sig_yes.gif');
                                                                                                } else {
                                                                                                    echo asset('img/sig_no.gif');
                                                                                                } ?>">
                                                        </td>
                                                        <td>
                                                            <b>Qualification &amp; Address Details</b>
                                                        </td>
                                                        <td>
                                                            @if (Auth::user()->form_step > 1)
                                                            <a id="lnkQualification" class="b textRed" href="#">Done</a>
                                                            @else
                                                            <a id="lnkQualification" class="b textRed"
                                                                href="{{route('user.qualificationDetails')}}">Incomplete</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                            <img id="Image2" alt="" src="<?php if (Auth::user()->form_step > 2) {
                                                                                                    echo asset('img/sig_yes.gif');
                                                                                                } else {
                                                                                                    echo asset('img/sig_no.gif');
                                                                                                } ?>">
                                                        </td>
                                                        <td>
                                                            <b>Experience Details</b>
                                                        </td>
                                                        <td>
                                                            @if (Auth::user()->form_step > 2)
                                                            <a id="lnkExperience" class="b textRed" href="#">Done</a>
                                                            @else
                                                            <a id="lnkExperience" class="b textRed"
                                                                href="{{route('user.experienceDetails')}}">Incomplete</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                            <img id="Image3" alt="" src="<?php if (Auth::user()->form_step > 3) {
                                                                                                    echo asset('img/sig_yes.gif');
                                                                                                } else {
                                                                                                    echo asset('img/sig_no.gif');
                                                                                                } ?>">
                                                        </td>
                                                        <td>
                                                            <b>Make Payment</b>
                                                        </td>
                                                        <td>
                                                            @if (Auth::user()->form_step > 3)
                                                            <a id="lnkPayment" class="b textRed" href="#">Done</a>
                                                            @else
                                                            <a id="lnkPayment" class="b textRed"
                                                                href="{{route('user.payment')}}">Incomplete</a>
                                                            @endif

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                            <img id="Image4" alt="" src="<?php if (Auth::user()->form_step > 3) {
                                                                                                    echo asset('img/sig_yes.gif');
                                                                                                } else {
                                                                                                    echo asset('img/sig_no.gif');
                                                                                                } ?>">
                                                        </td>
                                                        <td>
                                                            <b>City Choice</b>
                                                        </td>
                                                        <td>
                                                            <a id="lnkCentreChoice" class="b textRed">Incomplete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                            <img id="Image5" alt="" src="<?php if (Auth::user()->form_step > 3) {
                                                                                                    echo asset('img/sig_yes.gif');
                                                                                                } else {
                                                                                                    echo asset('img/sig_no.gif');
                                                                                                } ?>">
                                                        </td>
                                                        <td>
                                                            <b>Upload Images</b>
                                                        </td>
                                                        <td>
                                                            <a id="lnkUploadImages" class="b textRed">Incomplete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">
                                                            <img id="Image6" alt="" src="<?php if (Auth::user()->form_step > 3) {
                                                                                                    echo asset('img/sig_yes.gif');
                                                                                                } else {
                                                                                                    echo asset('img/sig_no.gif');
                                                                                                } ?>">
                                                        </td>
                                                        <td>
                                                            <b>Print Registration Form</b>
                                                        </td>
                                                        <td>
                                                            <a id="lnkRegSlip" class="b textRed">Incomplete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> -->
                                        <div class="marT10">
                                        </div>
                                        <div class="bor1pxSolid">
                                            <div class="btnR" style="text-align: center;">
                                                <!-- <input type="button" id="btnEdit" value=" Edit " class="button"> -->
                                                <input type="button" id="btnProceed"
                                                    value=" Proceed to Step <?php echo Auth::user()->form_step + 1; ?>"
                                                    class="button">
                                            </div>

                                        </div>

                                        <script>
                                            $(document).ready(function () {
                                                $("#btnProceed").click(function () {
                                                    window.location.href = '<?php echo route('user.redirectToStep'); ?>';
                                                });
                                            });
                                        </script>


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
                Copyright @ All India Institute of Medical Sciences, New Delhi. All rights Reserved.
            </center>
        </div>
    </footer>


</body>

</html>