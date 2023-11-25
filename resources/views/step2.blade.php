<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>

<head>
    <script type="text/javascript">
        var currentControllerName = 'Qualification';
        var appPath = '';
        var isPannelClosed = 'False';

        window.history.forward();

        function preventBack() {
            window.history.forward(1);
        }
    </script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Page-Exit" content="Alpha(opacity=100)">

    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <meta content="BlendTrans(Duration=0.1)" http-equiv="Page-Exit">
    <meta content="text/html; charset=windows-1252" http-equiv="Content-Type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Qualification</title>

    <script type="text/javascript" src="/Scripts/jquery-1.11.3.min.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/jquery-migrate-1.2.1.min.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/jquery-ui-1.11.4.min.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/jquery.unobtrusive-ajax.min.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/jquery.validate.min.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/jquery.validate.unobtrusive.min.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/jquery.wresize.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/i18n/grid.locale-en.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/jquery.jqgrid.min.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/jquery.alerts.js?.V1.0"></script>

    <script type="text/javascript" src="/Scripts/bootstrap.min.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/select2.min.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/jquery.transition.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/modernizr-2.8.3.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/smoothzoom.min.js?.V1.0"></script>


    <script type="text/javascript" src="/Scripts/dv/overlayext.js?.V1.0"></script>
    <script type="text/javascript" src="/Scripts/dv/common.js?.V1.0"></script>
    <link rel="stylesheet" type="text/css" href="/Content/themes/base/all.css?.V1.0">
    <link rel="stylesheet" type="text/css" href="/Content/css/font-awesome.min.css?.V1.0">
    <link rel="stylesheet" type="text/css" href="/Content/site.css?.V1.0">
    <link rel="stylesheet" type="text/css" href="/Content/bootstrap.min.css?.V1.0">
    <link rel="stylesheet" type="text/css" href="/Content/main.min.css?.V1.0">
    <link rel="stylesheet" type="text/css" href="/Content/extra.min.css?.V1.0">
    <link rel="stylesheet" type="text/css" href="/Content/css/select2.min.css?.V1.0">
    <link rel="stylesheet" type="text/css" href="/Content/jquery.jqgrid/ui.jqgrid.css?.V1.0">
    <link rel="stylesheet" type="text/css" href="/Content/jquery.alerts.css?.V1.0">

    <script type="text/javascript">
        $(window).load(function() {
            $('img').smoothZoom({
                zoominSpeed: 800, // Time (in milliseconds) the zoom-in lasts
                zoomoutSpeed: 400, // Time (in milliseconds) the zoom-out lasts
                resizeDelay: 400, // Check if window resized every X milliseconds
                zoominEasing: 'easeOutExpo', // jQuery easing method on zoom-in (requires easing plugin)
                zoomoutEasing: 'easeOutExpo' // jQuery easing method on zoom-out (requires easing plugin)
            });
        });

        (function(global) {
            if (typeof(global) === "undefined") {
                throw new Error("window is undefined");
            }

            var _hash = "!";
            var noBackPlease = function() {
                global.location.href += "#";
                global.setTimeout(function() {
                    global.location.href += "!";
                }, 50);
            };

            global.onhashchange = function() {
                if (global.location.hash !== _hash) {
                    global.location.hash = _hash;
                }
            };

            global.onload = function() {
                noBackPlease();
                document.body.onkeydown = function(e) {
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

<body onload="preventBack();" onpageshow="if (event.persisted) preventBack();" onunload="" oncontextmenu="return false;" style="display: block;">

    <div id="Helpline" class="modal fade" role="dialog" style="z-index:99999;">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top: 165px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"><strong>Helpline Number (Timings: 9:30 AM to 6:00 PM - Monday to Saturday)</strong></h4>
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
                    <img id="imgCollegeLogo" src="/Images/CollegeLogo.jpg" style="height: 36px; width: 36px; border-width: 0px;">
                </span>
                <figcaption>All India Institute Of Medical Sciences<span id="lblCollegeName" class="hide"></span></figcaption>
            </figure>

        </div>
        <div class="botWrapper">
            <div class="container">
                <div style="height: 35px">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="welUser"><b>Welcome: </b><span id="lblApplicantName">SUNIL</span></label><label class="welUser" style="padding-left: 20px;"><b>Candidate ID: </b><span id="lblCandidateId">9371040876</span></label>
                        </div>
                        <div class="col-sm-6">
                            <span class="helpLine">

                                <span style="color: #ffffff; font-weight: bold; font-size: 12px; ">Toll Free Number: 1800117898,<br>(Timings: 9:30 AM to 5:00 PM - Monday to Friday &amp; 09:30 AM to 01:00 PM - Saturday)</span>
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
                    <input type="hidden" id="hdnCurrentStudentId" value="KLeYLVfolBAlX08Qxr30F28XEq9hTkCEDKpGYSNJVSGlIUxjfySL">
                    <input type="hidden" id="hdnIsReOpen" value="">
                    <input type="hidden" id="hdnAppliedPostId" value="1">
                    <section class="userProfile">
                        <footer><a id="lnkLogout" title="Click here to LogOut" class="logout" href="/Logout">Logout</a><a id="lnkDashboard" title="Click here to Go Dashboard" class="dashboard" href="/Dashboard">My Page</a> </footer>

                        <figure>
                            <img id="imgStudentMImg" src="/Images/image_upload.jpg" alt="Candidate Image" style="height: 130px; border-width: 0px;">
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

                                <li><a href="http://aiimsexams.ac.in/index.html" class="clsLink">Home</a></li>



                                <li><a href="/Home/Notification">Notification</a></li>








                                <li><a href="https://docs.aiimsexams.ac.in/sites/CRE-AIIMS_Advertisement_v7.pdf" class="clsLink" target="_blank">Advertisement</a></li>

                                <li><a href="https://www.aiimsexams.ac.in/pdf/Introduction.pdf" target="_blank" class="clsLink">Introduction</a></li>

                                <li><a href="/Login" class="clsLink">Registration/Login</a></li>

                                <li><a href="/Home/UploadImages" class="clsLink">Upload Images Instructions</a></li>

                                <li><a href="#" target="_blank" class="clsLink">User Manual</a></li>
                                <li>

                                    <a id="lnkRaise" href="Support/Index?id=1" style="cursor: pointer;">
                                        <b>Raise your Query</b>
                                        <i class="fa fa-question-circle fa-5" aria-hidden="true"></i>


                                    </a>
                                </li>




                            </ul>
                        </nav>
                        <script src="/Scripts/dv/Common.js"></script>

                        <script>
                            $(document).ready(function() {
                                fnGetApplicantById1();

                            });

                            function fnGetApplicantById1() {

                                $.post(appPath + "/DashBoard/GetApplicantById", function(result) {

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

                                    } else {
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
                                                <a class="liLink" id="a1" href="EditRegistration?id=KLeYLVfolBAlX08Qxr30F28XEq9hTkCEDKpGYSNJVSGlIUxjfySL">
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
                                                <a class="liLink" id="a2">
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

                                    <script type="text/javascript" src="/Scripts/dv/qualification.js?v1?.V1.0"></script>

                                    <script type="text/javascript">
                                        $(document).ready(function() {
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
                                        /*    select {
        width: 100%;
    }*/

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
                                            width: 96%;
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
                                            width: 100%;
                                        }

                                        .custom-dropdown .dropdown-content {
                                            display: none;
                                            position: absolute;
                                            background-color: #ffffff;
                                            min-width: 160px;
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
                                        window.onclick = function(event) {
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
                                        <h2 class="bgDBlue marB10 pad5 fontWhite f15" style="height: auto; border: 0;">Qualification &amp; Address Details</h2>
                                        <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">Qualifying Examination Details (Essential)</h3>
                                        <div class="bor1pxSolid">
                                            <div class="form-group row">
                                                <div class="custom-dropdown">
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-4 form-control-label">Qualifying Exam:<span class="label">*</span></label>
                                                        <button onclick="myFunction()" class="custom-dropBtn">Degree from recognized University or its equivalent<span class="triangle_down"></span></button>
                                                        <div id="ddlLstQlfyExm" class="dropdown-content">
                                                            <div class="option" onclick="myOptionClick(1)" id="1">
                                                                <p>Degree from recognized University or its equivalent</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div id="divUnivDetails">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="txtUniversityName" class="col-sm-4 form-control-label">
                                                            University/Board Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtUniversityName" maxlength="80" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="txtCollageName" class="col-sm-4 form-control-label">
                                                            Institute Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtCollageName" maxlength="80" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="txtAdmissionDate" class="col-sm-4 form-control-label">
                                                            Admission Date:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtAdmissionDate" maxlength="10" class="form-control datepicker hasDatepicker" readonly="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="txtPassingDate" class="col-sm-4 form-control-label">
                                                            Passing Date:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtPassingDate" maxlength="10" class="form-control datepicker hasDatepicker" readonly="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="ddlState" class="col-sm-4 form-control-label">
                                                            State Name:
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlState" class="form-control">
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
                                        </div>
                                        <h3 class="fontDarkRed bgGrey pad10 marT10 b f13 SecondDegree" style="display: none;">Second Degree Qualification Details</h3>

                                        <div class="form-group row SecondDegree" style="display: none;">
                                            <div class="col-sm-10">
                                                <label class="col-sm-4 form-control-label"> You have any Second Degree Qualification</label>
                                                <div class="col-sm-8">
                                                    <input type="radio" value="1" id="RdSecYes" name="RdSecondDegree" onclick="funSecondDegreeStatus('1', '1')">Yes
                                                    <input type="radio" value="0" id="RdSecNo" name="RdSecondDegree" class="marL20" onclick="funSecondDegreeStatus('1', '0')">No

                                                </div>
                                            </div>

                                        </div>

                                        <h3 class="fontDarkRed bgGrey pad10 marT10 b f13" id="SecondDegreeheader" style="display: none">Second Educational Qualification (Essential)</h3>
                                        <div class="bor1pxSolid" id="SecondDegree" style="display: none">
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-4 form-control-label">Qualifying Exam:<span class="label">*</span></label>
                                                    <div class="col-sm-8">
                                                        <select style="cursor: pointer;" id="ddlSecondLstQlfyExm" class="form-control"></select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" id="divDegreeName" style="display: none;">
                                                    <label class="col-sm-4 form-control-label">Degree Name:<span class="label">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtDegreeName" maxlength="80" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" id="divSecondOtherExamName" style="display: none;">
                                                    <label class="col-sm-4 form-control-label">Qualifying Exam Status:<span class="label">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtSecondOtherQualificationExam" readonly="true" value="Passed" maxlength="80" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="txtSecondUniversityName" class="col-sm-4 form-control-label">
                                                        University/Board Name:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtSecondUniversityName" maxlength="80" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="txtSecondCollageName" class="col-sm-4 form-control-label">
                                                        Institute Name:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtSecondCollageName" maxlength="80" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="txtSecondAdmissionDate" class="col-sm-4 form-control-label">
                                                        Admission Date:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtSecondAdmissionDate" maxlength="10" class="form-control datepicker hasDatepicker" readonly="true">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="txtSecondPassingDate" class="col-sm-4 form-control-label">
                                                        Passing Date:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtSecondPassingDate" maxlength="10" class="form-control datepicker hasDatepicker" readonly="true">
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
                                                    <b><span class="col-sm-12 form-control-label" id="lblMsgHeader"></span></b>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-4 form-control-label">
                                                        <span class="col-sm-12 form-control-label" id="lblStateCouncil"></span>

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
                                                        <span class="col-sm-12 form-control-label" id="lblRegistrationNumber"></span>

                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtRegistrationNumber" maxlength="25" required="" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-4 form-control-label">
                                                        <span class="col-sm-12 form-control-label" id="lblRegistrationDate"></span>

                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtRegistrationDate" readonly="true" maxlength="10" class="form-control datepicker f12 hasDatepicker">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h3 class="fontDarkRed bgGrey pad10 marT10 b f13" id="DesirableDegreeheader" style="display: none">Desirable Qualification</h3>
                                        <div class="bor1pxSolid" id="divDesirableDegree" style="display: none">
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-4 form-control-label">Qualifying Exam:<span class="label">*</span></label>
                                                    <div class="col-sm-8">

                                                        <select style="cursor: pointer;" id="ddlDesirableQlfyExm" class="form-control"></select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="txtDesirableUniversityName" class="col-sm-4 form-control-label">
                                                        University/Board Name:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtDesirableExamUniversityName" maxlength="80" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="txtDesirableCollageName" class="col-sm-4 form-control-label">
                                                        Institute Name:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtDesirableCollageName" maxlength="80" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="txtDesirableAdmissionDate" class="col-sm-4 form-control-label">
                                                        Admission Date:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtDesirableAdmissionDate" maxlength="10" class="form-control datepicker hasDatepicker" readonly="true">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="txtDesirablePassingDate" class="col-sm-4 form-control-label">
                                                        Passing Date:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtDesirablePassingDate" maxlength="10" class="form-control datepicker hasDatepicker" readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="ddlDesirableState" class="col-sm-4 form-control-label">
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



                                        <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">Additional Qualification Details</h3>
                                        <div class="bor1pxSolid">
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <label class="col-sm-4 form-control-label">Do You have any Extra Qualification</label>
                                                    <div class="col-sm-8">
                                                        <input type="radio" value="1" id="RdExpYes" name="RdExperience" onclick="funIsOptionalStatus('1', '1')">Yes
                                                        <input type="radio" value="0" id="RdExpNo" name="RdExperience" class="marL20" onclick="funIsOptionalStatus('1', '0')">No

                                                    </div>
                                                </div>

                                            </div>
                                            <div id="ExtraQ1" style="display: none;" class="form-group row">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-4 form-control-label">Degree Name<span class="label">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtDegreeNameExtra" maxlength="80" class="form-control" onkeypress="return isAlphaNumeric(event);">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" id="">
                                                    <label class="col-sm-4 form-control-label">Admission Date <span class="label">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtAdmissionDateExtRa" maxlength="10" class="form-control datepicker hasDatepicker" readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ExtraQ2" style="display: none;" class="form-group row">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-4 form-control-label">Passing Date <span class="label">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" id="txtPassingDateExtra" maxlength="10" class="form-control datepicker hasDatepicker" readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">
                                            Address Details:
                                            <label class="checkbox-inline pull-right f12">
                                                <input type="checkbox" id="LinkSameAddress" name="chkSameAddress" style="margin-top: -4px; background: none">
                                                (Check here if Correspondence Address is same as filled Permanent Address)
                                            </label>
                                        </h3>
                                        <div class="bor1pxSolid">
                                            <div class="form-group row">
                                                <div class="col-sm-6 addressBg">
                                                    <div class="col-sm-12 ">
                                                        <span id="spnMainHdPrmntAdrs" class="blue">(A) Permanent Address</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 addressBg">
                                                    <div class="col-sm-12">
                                                        <span id="spnMainHdPstlAdrs" class="blue">(B) Correspondence Address</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Country</label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlPCountry" onchange="funPCountry(this.value,'1');" class="form-control">
                                                                <option value="0">--Select--</option>
                                                                <option value="1">India</option>
                                                                <option value="2">Other</option>
                                                            </select>
                                                        </div>
                                                        <div id="TrtxtPCountry" style="display: none">
                                                            <label class="col-sm-4 form-control-label">Country Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPCountry" maxlength="100" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div id="TrtxtPState" style="display: none">
                                                            <label class="col-sm-4 form-control-label">State/UT #</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPState" maxlength="100" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Pin Code</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtPPCde" onkeypress="return isNumberKeyOnly(event);" maxlength="6" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix" id="divPState">
                                                        <label class="col-sm-4 form-control-label">State/UT</label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlPState" class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix" id="divPDistrict">
                                                        <label class="col-sm-4 form-control-label">District</label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlPDistrict" class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div id="TrtxtPDistrict" style="display: none">
                                                        <label class="col-sm-4 form-control-label">District Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtPDistrict" maxlength="100" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix" id="divPCty">
                                                        <label class="col-sm-4 form-control-label">City</label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlPCty" class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div id="TrtxtPCty" style="display: none">
                                                        <label class="col-sm-4 form-control-label">City Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtPCty" maxlength="100" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Address Line 1:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtPAdrs" maxlength="100" class="form-control" onkeypress="return isAlphaNumeric(event)" onblur="return isAlphaNumeric(event)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Address Line 2 #</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtPAdrs2" maxlength="100" class="form-control" onkeypress="return isAlphaNumeric(event)" onblur="return isAlphaNumeric(event)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Address Line 3 #</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtPAdrs3" maxlength="100" class="form-control" onkeypress="return isAlphaNumeric(event)" onblur="return isAlphaNumeric(event)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Country</label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlMCountry" onchange="funMCountry(this.value,'1');" class="form-control">
                                                                <option value="0">--Select--</option>
                                                                <option value="1">India</option>
                                                                <option value="2">Other</option>
                                                            </select>
                                                        </div>
                                                        <div id="TrtxtMCountry" style="display: none">
                                                            <label class="col-sm-4 form-control-label">Country Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMCountry" maxlength="100" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div id="TrtxtMState" style="display: none">
                                                            <label class="col-sm-4 form-control-label">State/UT Name #</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMState" maxlength="100" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Pin Code</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtMPCde" onkeypress="return isNumberKeyOnly(event);" maxlength="6" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix" id="divMState">
                                                        <label class="col-sm-4 form-control-label">State/UT</label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlMState" class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix" id="divMDistrict">
                                                        <label class="col-sm-4 form-control-label">District</label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlMDistrict" class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div id="TrtxtMDistrict" style="display: none">
                                                        <label class="col-sm-4 form-control-label">District Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtMDistrict" maxlength="100" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix" id="divMCty">
                                                        <label class="col-sm-4 form-control-label">City</label>
                                                        <div class="col-sm-8">
                                                            <select id="ddlMCty" class="form-control">
                                                                <option value="0">[Choose One]</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div id="TrtxtMCty" style="display: none">
                                                        <label class="col-sm-4 form-control-label">City Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtMCty" maxlength="100" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Address Line 1:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtMAdrs" maxlength="100" class="form-control" onkeypress="return isAlphaNumeric(event);" onblur="return isAlphaNumeric(event)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Address Line 2 #</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtMAdrs2" maxlength="100" class="form-control" onkeypress="return isAlphaNumeric(event)" onblur="return isAlphaNumeric(event)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-sm-4 form-control-label">Address Line 3 #</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="txtMAdrs3" maxlength="100" class="form-control" onkeypress="return isAlphaNumeric(event)" onblur="return isAlphaNumeric(event)">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div id="divSaveProceed" class="btnR" style="text-align: center;">
                                            <input type="button" id="btnSave" value="Save &amp; Exit" class="button">
                                            <input type="button" id="btnProceed" value="Proceed to Step 3" class="button">
                                        </div>


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
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="position: absolute; top: 400.4px; left: 554px; z-index: 1; display: none;">
        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all ui-state-disabled" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a>
            <div class="ui-datepicker-title"><select class="ui-datepicker-month" data-handler="selectMonth" data-event="change">
                    <option value="0">Jan</option>
                    <option value="1">Feb</option>
                    <option value="2">Mar</option>
                    <option value="3">Apr</option>
                    <option value="4">May</option>
                    <option value="5">Jun</option>
                    <option value="6">Jul</option>
                    <option value="7">Aug</option>
                    <option value="8">Sep</option>
                    <option value="9">Oct</option>
                    <option value="10">Nov</option>
                    <option value="11" selected="selected">Dec</option>
                </select><select class="ui-datepicker-year" data-handler="selectYear" data-event="change">
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023" selected="selected">2023</option>
                </select></div>
        </div>
        <table class="ui-datepicker-calendar">
            <thead>
                <tr>
                    <th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
                    <th scope="col"><span title="Monday">Mo</span></th>
                    <th scope="col"><span title="Tuesday">Tu</span></th>
                    <th scope="col"><span title="Wednesday">We</span></th>
                    <th scope="col"><span title="Thursday">Th</span></th>
                    <th scope="col"><span title="Friday">Fr</span></th>
                    <th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-days-cell-over " data-handler="selectDay" data-event="click" data-month="11" data-year="2023"><a class="ui-state-default" href="#">1</a></td>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td>
                </tr>
                <tr>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">7</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td>
                </tr>
                <tr>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">13</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">14</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">15</span></td>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">16</span></td>
                </tr>
                <tr>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">17</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">18</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">19</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">20</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">21</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">22</span></td>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">23</span></td>
                </tr>
                <tr>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">24</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">25</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">26</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">27</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">28</span></td>
                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">29</span></td>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">30</span></td>
                </tr>
                <tr>
                    <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">31</span></td>
                    <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                    <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>