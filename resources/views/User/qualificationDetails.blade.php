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
                                        src="{{asset('js/dv/qualification.js?v1?.V1.0')}}"></script>

                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            var dateToday = new Date();
                                            $(".datepicker").datepicker({
                                                changeMonth: true,
                                                changeYear: true,
                                                yearRange: "1960:2023",
                                                dateFormat: 'dd/mm/yy',
                                                //maxDate: dateToday,
                                                maxDate: new Date(2023, 11, 01),
                                                defaultDate: new Date(2023, 11, 01),
                                            });
                                        });
                                    </script>

                                    <style>
                                        .Postddl option {
                                            position: absolute !important;
                                        }

                                        .shortenedSelect {
                                            max-width: 250px;
                                        }

                                        .shortenedSelect option {
                                            max-width: 250px !important;
                                            overflow-x: scroll;
                                        }
                                    </style>

                                    <style>
                                        .custom-dropBtn {
                                            position: relative;
                                            border: 1px solid #74B1EC;
                                            width: 100%;
                                            height: 26px;
                                            /* padding: 0.375rem 0.75rem; */
                                            font-size: 14px;
                                            font-weight: 400;
                                            line-height: 1.5;
                                            color: #495057;
                                            padding-right: 35px;
                                            background-color: #fff;
                                            background-clip: padding-box;
                                            border-radius: 0.25rem;
                                            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
                                            white-space: nowrap;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                        }

                                        .custom-dropBtn:hover,
                                        .custom-dropBtn:focus {
                                            background-color: #2980B9;
                                        }

                                        .custom-dropdown {
                                            position: relative;
                                            display: inline-block;
                                            margin: 0 15px;

                                        }

                                        .custom-dropdown .dropdown-content {
                                            display: none;
                                            position: absolute;
                                            background-color: #ffffff;
                                            overflow: auto;
                                            box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.2);
                                            z-index: 1;
                                            border: 1px solid #a7a7a7;
                                            max-height: 300px;
                                            overflow: scroll;
                                        }

                                        .custom-dropdown .dropdown-content .option {
                                            color: black;
                                            padding: 12px 16px;
                                            text-decoration: none;
                                            display: block;
                                            cursor: pointer;
                                        }

                                        .custom-dropdown .dropdown-content .option p {
                                            margin: 0;
                                        }

                                        .custom-dropdown .option:hover {
                                            background-color: #ddd;
                                        }

                                        .custom-dropdown .dropdown-content.show {
                                            display: block;
                                        }

                                        .triangle_down {
                                            width: 0;
                                            height: 0;
                                            border-left: 7px solid transparent;
                                            border-right: 7px solid transparent;
                                            border-top: 7px solid #2f2f2f;
                                            font-size: 0;
                                            line-height: 0;
                                            position: absolute;
                                            right: 10px;
                                            top: 0;
                                            bottom: 0;
                                            margin: auto;
                                        }

                                        .d-none {
                                            display: none;
                                        }
                                    </style>

                                    <script>
                                        function myFunction() {
                                            document.getElementById("ddlLstQlfyExm").classList.toggle("show");
                                        }
                                        function myOptionClick(id) {
                                            fnBindSecondQuli(id);
                                            GetExperienceName(id);
                                            if (id == "103" || id == "104" || id == "105")
                                                $("#divDeputyGeneralManager").show();
                                            else
                                                $("#divDeputyGeneralManager").hide();

                                            $('#hdnQuelificationid').val(id);
                                            var dropvalue = $("#" + id).find("p").html();
                                            $($("#" + id).closest(".custom-dropdown").find(".custom-dropBtn").html(dropvalue + "<span class='triangle_down'></span>"));

                                        }
                                        window.onclick = function (event) {
                                            if (!event.target.matches('.custom-dropBtn')) {
                                                var dropdowns = document.getElementsByClassName("dropdown-content");
                                                var i;
                                                for (i = 0; i < dropdowns.length; i++) {
                                                    var openDropdown = dropdowns[i];
                                                    if (openDropdown.classList.contains('show')) {
                                                        openDropdown.classList.remove('show');
                                                    }
                                                }
                                            }
                                        }
                                    </script>

                                    <input type="hidden" id="hdnIsReOpen" value="0">
                                    <input type="hidden" id="hdnQuelificationid" value="1">
                                    <input type="hidden" id="hdnSId" value="1040876">
                                    <div class="mar10">
                                        <h2 class="bgDBlue marB10 pad5 fontWhite f15" style="height: auto; border: 0;">
                                            Qualification &amp; Address Details</h2>
                                        <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">Qualifying Examination Details
                                            (Essential)</h3>
                                        <div class="bor1pxSolid">
                                            <div class="form-group row">
                                                <div class="custom-dropdown">
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-4 form-control-label">Qualifying Exam:<span
                                                                class="label">*</span></label>
                                                        <select name="qualifying_exam" id="" class="form-control">
                                                            <option value="">[Choose One]</option>
                                                            <option value="">10th Class/Standard or equivalent </option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <form action="{{route('user.qualificationDetails.store')}}" method="post"
                                            id="qualificationDetailsForm">
                                            @csrf
                                            <div id="divUnivDetails">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="txtUniversityName"
                                                            class="col-sm-4 form-control-label">
                                                            University/Board Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="board_name" id="txtUniversityName"
                                                                maxlength="80" class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="txtCollageName" class="col-sm-4 form-control-label">
                                                            Institute Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtCollageName" name="institute_name"
                                                                maxlength="80" class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="txtAdmissionDate"
                                                            class="col-sm-4 form-control-label">
                                                            Admission Date:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="date" id="txtAdmissionDate" maxlength="10"
                                                                name="admission_date"
                                                                class="form-control datepicker hasDatepicker">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="txtPassingDate" class="col-sm-4 form-control-label">
                                                            Passing Date:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="date" id="txtPassingDate" maxlength="10"
                                                                name="passing_date"
                                                                class="form-control datepicker hasDatepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="ddlState" class="col-sm-4 form-control-label">
                                                            State Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlState" name="state_name"
                                                                class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                                <option value="1">ANDAMAN &amp; NICOBAR ISLANDS</option>
                                                                <option value="2">ANDHRA PRADESH</option>
                                                                <option value="3">ARUNACHAL PRADESH</option>
                                                                <option value="4">ASSAM</option>
                                                                <option value="5">BIHAR</option>
                                                                <option value="6">CHANDIGARH</option>
                                                                <option value="7">CHATTISGARH</option>
                                                                <option value="8">DADRA &amp; NAGAR HAVELI</option>
                                                                <option value="9">DAMAN &amp; DIU</option>
                                                                <option value="10">DELHI</option>
                                                                <option value="11">GOA</option>
                                                                <option value="12">GUJARAT</option>
                                                                <option value="13">HARYANA</option>
                                                                <option value="14">HIMACHAL PRADESH</option>
                                                                <option value="15">JAMMU &amp; KASHMIR</option>
                                                                <option value="16">JHARKHAND</option>
                                                                <option value="17">KARNATAKA</option>
                                                                <option value="18">KERALA</option>
                                                                <option value="19">LAKSHADWEEP</option>
                                                                <option value="20">MADHYA PRADESH</option>
                                                                <option value="21">MAHARASHTRA</option>
                                                                <option value="22">MANIPUR</option>
                                                                <option value="23">MEGHALAYA</option>
                                                                <option value="24">MIZORAM</option>
                                                                <option value="25">NAGALAND</option>
                                                                <option value="26">ODISHA</option>
                                                                <option value="27">PONDICHERRY</option>
                                                                <option value="28">PUNJAB</option>
                                                                <option value="29">RAJASTHAN</option>
                                                                <option value="30">SIKKIM</option>
                                                                <option value="31">TAMIL NADU</option>
                                                                <option value="32">TELANGANA</option>
                                                                <option value="33">TRIPURA</option>
                                                                <option value="34">UTTAR PRADESH</option>
                                                                <option value="35">UTTARAKHAND</option>
                                                                <option value="36">WEST BENGAL</option>
                                                                <option value="9999">OTHER</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row" style=" padding-left: 12px;">
                                                <div class="col-sm-12">


                                                    <span id="spn_notes"></span>
                                                </div>
                                                <br>
                                                <div class="col-md-12" style=" margin-top: 12px; ">
                                                    <span id="spn_Desirable"></span>
                                                </div>

                                            </div>
                                            <h3 class="fontDarkRed bgGrey pad10 marT10 b f13 SecondDegree"
                                                style="display: none;">Second Degree Qualification Details</h3>

                                            <div class="form-group row SecondDegree" style="display: none;">
                                                <div class="col-sm-10">
                                                    <label class="col-sm-4 form-control-label"> You have any Second
                                                        Degree
                                                        Qualification</label>
                                                    <div class="col-sm-8">
                                                        <input type="radio" value="1" id="RdSecYes"
                                                            name="RdSecondDegree"
                                                            onclick="funSecondDegreeStatus('1', '1')">Yes
                                                        <input type="radio" value="0" id="RdSecNo" name="RdSecondDegree"
                                                            class="marL20" onclick="funSecondDegreeStatus('1', '0')">No

                                                    </div>
                                                </div>

                                            </div>

                                            <h3 class="fontDarkRed bgGrey pad10 marT10 b f13" id="SecondDegreeheader"
                                                style="display: none">Second Educational Qualification (Essential)</h3>
                                            <div class="bor1pxSolid" id="SecondDegree" style="display: none">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-4 form-control-label">Qualifying Exam:<span
                                                                class="label">*</span></label>
                                                        <div class="col-sm-8">
                                                            <select style="cursor: pointer;" id="ddlSecondLstQlfyExm"
                                                                class="form-control"></select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6" id="divDegreeName" style="display: none;">
                                                        <label class="col-sm-4 form-control-label">Degree Name:<span
                                                                class="label">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtDegreeName" maxlength="80"
                                                                name="degree_name" class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6" id="divSecondOtherExamName"
                                                        style="display: none;">
                                                        <label class="col-sm-4 form-control-label">Qualifying Exam
                                                            Status:<span class="label">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtSecondOtherQualificationExam"
                                                                name="other_exam_name" readonly="true" value="Passed"
                                                                maxlength="80" class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="txtSecondUniversityName"
                                                            class="col-sm-4 form-control-label">
                                                            University/Board Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtSecondUniversityName"
                                                                maxlength="80" class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="txtSecondCollageName"
                                                            class="col-sm-4 form-control-label">
                                                            Institute Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtSecondCollageName" maxlength="80"
                                                                class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="txtSecondAdmissionDate"
                                                            class="col-sm-4 form-control-label">
                                                            Admission Date:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="date" id="txtSecondAdmissionDate"
                                                                maxlength="10"
                                                                class="form-control datepicker hasDatepicker">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="txtSecondPassingDate"
                                                            class="col-sm-4 form-control-label">
                                                            Passing Date:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="date" id="txtSecondPassingDate" maxlength="10"
                                                                class="form-control datepicker hasDatepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="ddlSecondState" class="col-sm-4 form-control-label">
                                                            State Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlSecondState" class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                                <option value="1">ANDAMAN &amp; NICOBAR ISLANDS</option>
                                                                <option value="2">ANDHRA PRADESH</option>
                                                                <option value="3">ARUNACHAL PRADESH</option>
                                                                <option value="4">ASSAM</option>
                                                                <option value="5">BIHAR</option>
                                                                <option value="6">CHANDIGARH</option>
                                                                <option value="7">CHATTISGARH</option>
                                                                <option value="8">DADRA &amp; NAGAR HAVELI</option>
                                                                <option value="9">DAMAN &amp; DIU</option>
                                                                <option value="10">DELHI</option>
                                                                <option value="11">GOA</option>
                                                                <option value="12">GUJARAT</option>
                                                                <option value="13">HARYANA</option>
                                                                <option value="14">HIMACHAL PRADESH</option>
                                                                <option value="15">JAMMU &amp; KASHMIR</option>
                                                                <option value="16">JHARKHAND</option>
                                                                <option value="17">KARNATAKA</option>
                                                                <option value="18">KERALA</option>
                                                                <option value="19">LAKSHADWEEP</option>
                                                                <option value="20">MADHYA PRADESH</option>
                                                                <option value="21">MAHARASHTRA</option>
                                                                <option value="22">MANIPUR</option>
                                                                <option value="23">MEGHALAYA</option>
                                                                <option value="24">MIZORAM</option>
                                                                <option value="25">NAGALAND</option>
                                                                <option value="26">ODISHA</option>
                                                                <option value="27">PONDICHERRY</option>
                                                                <option value="28">PUNJAB</option>
                                                                <option value="29">RAJASTHAN</option>
                                                                <option value="30">SIKKIM</option>
                                                                <option value="31">TAMIL NADU</option>
                                                                <option value="32">TELANGANA</option>
                                                                <option value="33">TRIPURA</option>
                                                                <option value="34">UTTAR PRADESH</option>
                                                                <option value="35">UTTARAKHAND</option>
                                                                <option value="36">WEST BENGAL</option>
                                                                <option value="9999">OTHER</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="divRegistrationDetails" style="display: none;">
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <b><span class="col-sm-12 form-control-label"
                                                                id="lblMsgHeader"></span></b>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-4 form-control-label">
                                                            <span class="col-sm-12 form-control-label"
                                                                id="lblStateCouncil"></span>

                                                        </label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlStateCouncil" class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                                <option value="1">ANDAMAN &amp; NICOBAR ISLANDS</option>
                                                                <option value="2">ANDHRA PRADESH</option>
                                                                <option value="3">ARUNACHAL PRADESH</option>
                                                                <option value="4">ASSAM</option>
                                                                <option value="5">BIHAR</option>
                                                                <option value="6">CHANDIGARH</option>
                                                                <option value="7">CHATTISGARH</option>
                                                                <option value="8">DADRA &amp; NAGAR HAVELI</option>
                                                                <option value="9">DAMAN &amp; DIU</option>
                                                                <option value="10">DELHI</option>
                                                                <option value="11">GOA</option>
                                                                <option value="12">GUJARAT</option>
                                                                <option value="13">HARYANA</option>
                                                                <option value="14">HIMACHAL PRADESH</option>
                                                                <option value="15">JAMMU &amp; KASHMIR</option>
                                                                <option value="16">JHARKHAND</option>
                                                                <option value="17">KARNATAKA</option>
                                                                <option value="18">KERALA</option>
                                                                <option value="19">LAKSHADWEEP</option>
                                                                <option value="20">MADHYA PRADESH</option>
                                                                <option value="21">MAHARASHTRA</option>
                                                                <option value="22">MANIPUR</option>
                                                                <option value="23">MEGHALAYA</option>
                                                                <option value="24">MIZORAM</option>
                                                                <option value="25">NAGALAND</option>
                                                                <option value="26">ODISHA</option>
                                                                <option value="27">PONDICHERRY</option>
                                                                <option value="28">PUNJAB</option>
                                                                <option value="29">RAJASTHAN</option>
                                                                <option value="30">SIKKIM</option>
                                                                <option value="31">TAMIL NADU</option>
                                                                <option value="32">TELANGANA</option>
                                                                <option value="33">TRIPURA</option>
                                                                <option value="34">UTTAR PRADESH</option>
                                                                <option value="35">UTTARAKHAND</option>
                                                                <option value="36">WEST BENGAL</option>
                                                                <option value="9999">OTHER</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-4 form-control-label">
                                                            <span class="col-sm-12 form-control-label"
                                                                id="lblRegistrationNumber"></span>

                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtRegistrationNumber" maxlength="25"
                                                                required="" class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-4 form-control-label">
                                                            <span class="col-sm-12 form-control-label"
                                                                id="lblRegistrationDate"></span>

                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtRegistrationDate" readonly="true"
                                                                maxlength="10"
                                                                class="form-control datepicker f12 hasDatepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <h3 class="fontDarkRed bgGrey pad10 marT10 b f13" id="DesirableDegreeheader"
                                                style="display: none">Desirable Qualification</h3>
                                            <div class="bor1pxSolid" id="divDesirableDegree" style="display: none">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-4 form-control-label">Qualifying Exam:<span
                                                                class="label">*</span></label>
                                                        <div class="col-sm-8">

                                                            <select style="cursor: pointer;" id="ddlDesirableQlfyExm"
                                                                class="form-control"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="txtDesirableUniversityName"
                                                            class="col-sm-4 form-control-label">
                                                            University/Board Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtDesirableExamUniversityName"
                                                                maxlength="80" class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="txtDesirableCollageName"
                                                            class="col-sm-4 form-control-label">
                                                            Institute Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtDesirableCollageName"
                                                                maxlength="80" class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="txtDesirableAdmissionDate"
                                                            class="col-sm-4 form-control-label">
                                                            Admission Date:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="date" id="txtDesirableAdmissionDate"
                                                                maxlength="10"
                                                                class="form-control datepicker hasDatepicker">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="txtDesirablePassingDate"
                                                            class="col-sm-4 form-control-label">
                                                            Passing Date:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="date" id="txtDesirablePassingDate"
                                                                maxlength="10"
                                                                class="form-control datepicker hasDatepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="ddlDesirableState"
                                                            class="col-sm-4 form-control-label">
                                                            State Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlDesirableState" class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                                <option value="1">ANDAMAN &amp; NICOBAR ISLANDS</option>
                                                                <option value="2">ANDHRA PRADESH</option>
                                                                <option value="3">ARUNACHAL PRADESH</option>
                                                                <option value="4">ASSAM</option>
                                                                <option value="5">BIHAR</option>
                                                                <option value="6">CHANDIGARH</option>
                                                                <option value="7">CHATTISGARH</option>
                                                                <option value="8">DADRA &amp; NAGAR HAVELI</option>
                                                                <option value="9">DAMAN &amp; DIU</option>
                                                                <option value="10">DELHI</option>
                                                                <option value="11">GOA</option>
                                                                <option value="12">GUJARAT</option>
                                                                <option value="13">HARYANA</option>
                                                                <option value="14">HIMACHAL PRADESH</option>
                                                                <option value="15">JAMMU &amp; KASHMIR</option>
                                                                <option value="16">JHARKHAND</option>
                                                                <option value="17">KARNATAKA</option>
                                                                <option value="18">KERALA</option>
                                                                <option value="19">LAKSHADWEEP</option>
                                                                <option value="20">MADHYA PRADESH</option>
                                                                <option value="21">MAHARASHTRA</option>
                                                                <option value="22">MANIPUR</option>
                                                                <option value="23">MEGHALAYA</option>
                                                                <option value="24">MIZORAM</option>
                                                                <option value="25">NAGALAND</option>
                                                                <option value="26">ODISHA</option>
                                                                <option value="27">PONDICHERRY</option>
                                                                <option value="28">PUNJAB</option>
                                                                <option value="29">RAJASTHAN</option>
                                                                <option value="30">SIKKIM</option>
                                                                <option value="31">TAMIL NADU</option>
                                                                <option value="32">TELANGANA</option>
                                                                <option value="33">TRIPURA</option>
                                                                <option value="34">UTTAR PRADESH</option>
                                                                <option value="35">UTTARAKHAND</option>
                                                                <option value="36">WEST BENGAL</option>
                                                                <option value="9999">OTHER</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">Additional Qualification
                                                Details</h3>
                                            <div class="bor1pxSolid">
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label class="col-sm-4 form-control-label">Do You have any Extra
                                                            Qualification</label>
                                                        <div class="col-sm-8">
                                                            <input type="radio" value="1" id="RdExpYes"
                                                                name="RdExperience"
                                                                onclick="funIsOptionalStatus('1', '1')">Yes
                                                            <input type="radio" value="0" id="RdExpNo"
                                                                name="RdExperience" class="marL20"
                                                                onclick="funIsOptionalStatus('1', '0')">No

                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="ExtraQ1" style="display: none;" class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-4 form-control-label">Degree Name<span
                                                                class="label">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtDegreeNameExtra" maxlength="80"
                                                                name="extra_degree_name" class="form-control"
                                                                onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6" id="">
                                                        <label class="col-sm-4 form-control-label">Admission Date <span
                                                                class="label">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input type="date" id="txtAdmissionDateExtRa" maxlength="10"
                                                                name="extra_admission_date"
                                                                class="form-control datepicker hasDatepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="ExtraQ2" style="display: none;" class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-4 form-control-label">Passing Date <span
                                                                class="label">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input type="date" id="txtPassingDateExtra" maxlength="10"
                                                                class="form-control datepicker hasDatepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">
                                                Address Details:
                                                <label class="checkbox-inline pull-right f12">
                                                    <input type="checkbox" id="LinkSameAddress" name="chkSameAddress"
                                                        style="margin-top: -4px; background: none">
                                                    (Check here if Correspondence Address is same as filled Permanent
                                                    Address)
                                                </label>
                                            </h3>
                                            <div class="bor1pxSolid">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 addressBg">
                                                        <div class="col-sm-12 ">
                                                            <span id="spnMainHdPrmntAdrs" class="blue">(A) Permanent
                                                                Address</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 addressBg">
                                                        <div class="col-sm-12">
                                                            <span id="spnMainHdPstlAdrs" class="blue">(B) Correspondence
                                                                Address</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Country</label>
                                                            <div class="col-sm-8">
                                                                <select id="ddlPCountry" class="form-control"
                                                                    name="p_country_name">
                                                                    <option value="0">--Select--</option>
                                                                    <option value="1" selected>India</option>
                                                                </select>
                                                            </div>
                                                            <div id="TrtxtPCountry" style="display: none">
                                                                <label class="col-sm-4 form-control-label">Country
                                                                    Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" id="txtPCountry" maxlength="100"
                                                                        name="p_country_name" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div id="TrtxtPState" style="display: none">
                                                                <label class="col-sm-4 form-control-label">State/UT
                                                                    #</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" id="txtPState" maxlength="100"
                                                                        name="p_state_name" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Pin Code</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPPCde"
                                                                    onkeypress="return isNumberKeyOnly(event);"
                                                                    maxlength="6" name="p_pin_code"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix" id="divPState">
                                                            <label class="col-sm-4 form-control-label">State/UT</label>
                                                            <div class="col-sm-8">
                                                                <select id="ddlPState" class="form-control"
                                                                    name="p_state_name">
                                                                    <option value="{{Auth::user()->userDetail()->state ??
                                                                        ''}}">
                                                                        {{Auth::user()->userDetail()->state ?? ''}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix" id="divPDistrict">
                                                            <label class="col-sm-4 form-control-label">District</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPDistrict" maxlength="100"
                                                                    name="p_district_name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div id="TrtxtPDistrict" style="display: none">
                                                            <label class="col-sm-4 form-control-label">District
                                                                Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPDistrict" maxlength="100"
                                                                    name="p_district_namex" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix" id="divPCty">
                                                            <label class="col-sm-4 form-control-label">City</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPCty" maxlength="100"
                                                                    name="p_city_name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div id="TrtxtPCty" style="display: none">
                                                            <label class="col-sm-4 form-control-label">City Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPCty" maxlength="100"
                                                                    name="p_cxity_name" class="form-control">

                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Address Line
                                                                1:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPAdrs" maxlength="100"
                                                                    name="p_address_line1" class="form-control"
                                                                    onkeypress="return isAlphaNumeric(event)"
                                                                    onblur="return isAlphaNumeric(event)">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Address Line 2
                                                                #</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPAdrs2" maxlength="100"
                                                                    name="p_address_line2" class="form-control"
                                                                    onkeypress="return isAlphaNumeric(event)"
                                                                    onblur="return isAlphaNumeric(event)">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Address Line 3
                                                                #</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPAdrs3" maxlength="100"
                                                                    name="p_address_line3" class="form-control"
                                                                    onkeypress="return isAlphaNumeric(event)"
                                                                    onblur="return isAlphaNumeric(event)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Country</label>
                                                            <div class="col-sm-8">
                                                                <select id="ddlMCountry" name="c_country_name"
                                                                    class="form-control">
                                                                    <option value="0">--Select--</option>
                                                                    <option value="1">India</option>
                                                                    <option value="2">Other</option>
                                                                </select>
                                                            </div>
                                                            <div id="TrtxtMCountry" style="display: none">
                                                                <label class="col-sm-4 form-control-label">Country
                                                                    Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" id="txtMCountry" maxlength="100"
                                                                        name="c_country_name" class="form-control"
                                                                        disabled="">
                                                                </div>
                                                            </div>
                                                            <div id="TrtxtMState" style="display: none">
                                                                <label class="col-sm-4 form-control-label">State/UT Name
                                                                    #</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" id="txtMState" maxlength="100"
                                                                        name="c_state_name" class="form-control"
                                                                        disabled="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Pin Code</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMPCde"
                                                                    onkeypress="return isNumberKeyOnly(event);"
                                                                    maxlength="6" name="c_pin_code" class="form-control"
                                                                    disabled="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix" id="divMState">
                                                            <label class="col-sm-4 form-control-label">State/UT</label>
                                                            <div class="col-sm-8">
                                                                <select id="ddlMState" class="form-control"
                                                                    name="c_state_name">
                                                                    <option
                                                                        value="{{Auth::user()->userDetail()->state ?? ''}}">
                                                                        {{Auth::user()->userDetail()->state ?? ''}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix" id="divMDistrict">
                                                            <label class="col-sm-4 form-control-label">District</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMDistrict" maxlength="100"
                                                                    name="c_district_name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div id="TrtxtMDistrict" style="display: none">
                                                            <label class="col-sm-4 form-control-label">District
                                                                Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMDistrict" maxlength="100"
                                                                    name="c_district_name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix" id="divMCty">
                                                            <label class="col-sm-4 form-control-label">City</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMCty" maxlength="100"
                                                                    name="c_city_name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div id="TrtxtMCty" style="display: none">
                                                            <label class="col-sm-4 form-control-label">City Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMCty" maxlength="100"
                                                                    class="form-control" name="c_city_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Address Line
                                                                1:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMAdrs" maxlength="100"
                                                                    class="form-control"
                                                                    onkeypress="return isAlphaNumeric(event);"
                                                                    onblur="return isAlphaNumeric(event)" disabled=""
                                                                    name="c_address_line1">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Address Line 2
                                                                #</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMAdrs2" maxlength="100"
                                                                    class="form-control"
                                                                    onkeypress="return isAlphaNumeric(event)"
                                                                    onblur="return isAlphaNumeric(event)" disabled=""
                                                                    name="c_address_line2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-sm-4 form-control-label">Address Line 3
                                                                #</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMAdrs3" maxlength="100"
                                                                    class="form-control"
                                                                    onkeypress="return isAlphaNumeric(event)"
                                                                    onblur="return isAlphaNumeric(event)" disabled=""
                                                                    name="c_address_line3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div id="divSaveProceed" class="btnR" style="text-align: center;">
                                                <!-- <input type="submit" id="btnSave" value="Save &amp; Exit" class="button"> -->
                                                <input type="button" id="btnProceedStep3" value="Proceed to Step 3"
                                                    class="button">
                                            </div>
                                        </form>

                                        <script>

                                            // submit qualificationDetailsForm form on click of proceed button
                                            $('#btnProceedStep3').click(function () {
                                                $('#qualificationDetailsForm').submit();
                                            });
                                        </script>

                                        <input type="hidden" id="hdnRStatus" value="0">
                                        <input type="hidden" id="hdnCategoryId" value="3">
                                        <input type="hidden" id="hdnOPH" value="false">
                                        <input type="hidden" id="hdnOphPercent" value="0">
                                        <input type="hidden" id="hdnAppliedPostId" value="0">

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