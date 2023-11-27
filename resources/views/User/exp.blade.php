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


                                    <script type="text/javascript"
                                        src="{{asset('js/dv/experience.js?v1?.V1.0')}}"></script>
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            //var dateToday = new Date(2021, 11, 19);
                                            var dateToday = new Date();
                                            $(".datepicker").datepicker({
                                                changeMonth: true,
                                                changeYear: true,
                                                yearRange: "1960:2023",
                                                dateFormat: 'dd/mm/yy',
                                                maxDate: new Date(2023, 11, 01),
                                                defaultDate: new Date(2023, 11, 01),
                                            });

                                        });
                                    </script>
                                    <input type="hidden" id="hdnSId" value="1049178">
                                    <input type="hidden" id="hdnRStatus" value="0">
                                    <input type="hidden" id="hdnCategoryId" value="0">
                                    <input type="hidden" id="hdnOPH" value="0">
                                    <input type="hidden" id="hdnOphPercent" value="0">
                                    <input type="hidden" id="hdnAppliedPostId" value="0">
                                    <input type="hidden" id="hdnIsReOpen" value="0">
                                    <input type="hidden" id="hdnQuelificationid" value="0">
                                    <input type="hidden" id="hdnTotalexperience" value="0">
                                    <input type="hidden" id="hdnTotalDays" value="666125">

                                    <div class="mar10">
                                        <h3 class="fontDarkRed lightBlue pad4 marT10 b f16">Experience Details</h3>
                                        <div class="bor1pxSolid table-responsive">
                                            <div class="container-fluid">

                                                <div class="form-group row" style="display: none;">
                                                    <div class="col-sm-10">

                                                        <label id="lblEx">Practical experience of 5 Years in erection
                                                            and running/maintenance of different types of HT and LT
                                                            electrical installations including UG cable systems</label>
                                                    </div>
                                                    <div class="col-sm-2 gencheckBox">
                                                        <label class="checkbox-inline" id="lblYes">
                                                            <input type="radio" id="rbExperience_Yes" value="1"
                                                                name="rbExperience" onclick="onChangerbExperience();"
                                                                disabled="" checked="checked">
                                                            <span>Yes</span>
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="radio" id="rbExperience_No" value="0"
                                                                name="rbExperience" onclick="onChangerbExperience();"
                                                                disabled=""><span>No</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="form-group col-sm-12">
                                                        <span class="blue">(Internship experience is not countable as a
                                                            work experience.)</span>
                                                    </div>
                                                </div>
                                                <form action="{{route('user.experienceDetails.store')}}" method="post"
                                                    id="frmExperience">
                                                    @csrf
                                                    <div class="bor1pxSolid dispnone" id="dvExperience">
                                                        <table class="table table-bordered" id="myTblExp">
                                                            <tbody>
                                                                <tr class="bg-info">
                                                                    <th>Organisation Name</th>
                                                                    <th>Designation</th>
                                                                    <th>Start Date</th>
                                                                    <th>End Date</th>
                                                                    <th hidden="">ID No</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </tbody>
                                                            <tbody id="dvExperienceGroup">
                                                                <tr id="trExperience1">
                                                                    <td>
                                                                        <input type="text" id="txtOrganisationName1"
                                                                            maxlength="200" required="required"
                                                                            class="form-control clsExperience"
                                                                            onkeypress="return isAlphaNumeric(event);">
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" id="txtDesignation1"
                                                                            maxlength="200" class="form-control"
                                                                            onkeypress="return isAlphaNumeric(event);">
                                                                    </td>
                                                                    <td>
                                                                        <input type="date" id="txtStartDate1"
                                                                            name="ExpFrom" maxlength="10"
                                                                            class="form-control datepicker hasDatepicker">
                                                                    </td>
                                                                    <td>
                                                                        <input type="date" id="txtEndDate1" name="ExpTo"
                                                                            maxlength="10"
                                                                            class="form-control datepicker hasDatepicker">
                                                                    </td>

                                                                    <td hidden="">
                                                                        <input type="date" id="txtIDNO1" name="txtIDNO"
                                                                            maxlength="15" class="form-control clsIDNo">
                                                                    </td>
                                                                    <td>
                                                                        <img id="aRemove1" title="Remove"
                                                                            src="{{asset('img/icon_delete.png')}}"
                                                                            onclick="remove(this);"
                                                                            style="height:25px; width:25px; cursor:pointer;"
                                                                            class="del-icon">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <div class="form-group row">
                                                            <div class="col-sm-12" style="text-align: center;">
                                                                <a id="aAdd" title="Add" class="button small_btn clear"
                                                                    style="color: white !important; font-size: 14px !important; min-width: 100PX;"
                                                                    onclick="add();">Add</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" id="hdnAppliedPostId" value="0">
                                                    <input type="hidden" id="hdnExperienceDetail" value="">
                                                    <input type="hidden" id="hdnTotalExp" value="0">
                                                    <input type="hidden" id="hdnIsGovEmp" value="false">
                                                    <input type="hidden" id="hdnJobStatusId" value="0">
                                                    <input type="hidden" id="hdnQualificationExamId" value="21">
                                                    <input type="hidden" id="hdnStartDate" value="16/11/2023">
                                                    <input type="hidden" id="hdnStartDate1" value="0">
                                                    <input type="hidden" id="hdEndDate" value="0">
                                                    <input type="hidden" id="hdnIsExp" value="0">
                                            </div>
                                        </div>

                                        <div class="marT20 btnR" style="text-align: center;">
                                            <!-- <input type="button" id="btnSaveExit" value="Save &amp; Exit"
                                                class="button"> -->
                                            <input type="button" id="btnSaveProceed" value="Save &amp; Proceed"
                                                class="button">
                                            <!-- <input type="button" id="btnProceed" value=" Proceed " class="button"
                                                style="display: none;"> -->
                                        </div>
                                    </div>
                                    </form>

                                    <script>

                                        $(document).ready(function () {
                                            $("#btnSaveProceed").click(function () {
                                                $("#frmExperience").submit();
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