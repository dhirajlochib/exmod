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

    </script>

<body style="display: block;">
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
                            <!-- <ul>
                                <li><a href="http://aiimsexams.ac.in/index.html" class="clsLink">Home</a></li>
                                <li><a href="/Home/Notification">Notification</a></li>
                                <li><a href="https://docs.aiimsexams.ac.in/sites/CRE-AIIMS_Advertisement_v7.pdf"
                                        class="clsLink" target="_blank">Advertisement</a></li>
                                <li><a href="https://www.aiimsexams.ac.in/pdf/Introduction.pdf" target="_blank"
                                        class="clsLink">Introduction</a></li>
                                <li><a href="/Home/UploadImages" class="clsLink">Upload Images Instructions</a></li>
                                <li><a href="#" target="_blank" class="clsLink">User Manual</a></li>
                                <li><a href="/Login" class="clsLink">Registration/Login</a></li>
                                <li><a class="disabled" href="javascript:void(0)">Admit Card</a></li>
                                <li><a class="disabled" href="javascript:void(0)">Result</a></li>
                            </ul> -->

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
                            <form action="{{route('registration.save')}}" method="post" id="frmMain"> @csrf

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
                                        <script type="text/javascript">
                                            function isPannelClosed() {
                                                return "False";
                                            }

                                            $(document).ready(function () {
                                                $("#hdnStudentId").val("0");
                                                LogOutIfLogin();
                                                $("#guidelines").hide();
                                                if (isPannelClosed == "True" && $("#hdnIsAdmin").val() == "0") {
                                                    jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
                                                        if (r == true) {
                                                            go("Login");
                                                        }
                                                    });
                                                } else
                                                    BindStates("#ddlDomicile");

                                                $(document).on('click', "#btnShowInstruction", function () {
                                                    fnFirstGuideLineShow();
                                                });
                                            });

                                            function fnFirstGuideLineShow() {
                                                $("#guidelines").show();
                                                $("#Firstguidelines").hide();
                                            }
                                        </script>
                                        <div id="Firstguidelines" class="mar10" style="">
                                            <div class="bor1pxSolid">
                                                <div class="row">
                                                    <div class="col-sm-12 mar10">
                                                        <strong>Before proceeding to fill the Application form, please
                                                            ensure that you have the following information ready at
                                                            hand:</strong><br>
                                                        <ul class="guidelineList marT10">
                                                            <li>Valid E-mail ID and Mobile/Phone number (These are
                                                                essential
                                                                for registration and subsequent communication).</li>
                                                            <li>Credit Card/Debit Card/Netbanking facility. </li>
                                                            <li>Personal details</li>
                                                            <li>Valid Photo ID (as mentioned in the Prospectus): This ID
                                                                (in
                                                                original) is required to be produced on the day of
                                                                examination.</li>
                                                            <li>Scanned/digital image of recent colour size photograph
                                                                with
                                                                white background</li>
                                                            <li>Image of signature</li>
                                                            <li>Image of Left thumb impression</li>
                                                        </ul>
                                                        <strong>If applicable,</strong><br>
                                                        <ul class="guidelineList marT10">
                                                            <li>Category Certificate </li>
                                                            <li>PWBD(Persons With Disability) Certificate</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="btnR" style="text-align: center;">
                                                    <input type="button" id="btnShowInstruction" value="Proceed"
                                                        class="button">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="guidelines" class="mar10" style="">
                                            <h2 class="bgDBlue marB10  pad4 fontWhite" style="font-size: 13px;">
                                                <span id="ctl00_ContentPlaceHolder1_lblHeading">Instructions for
                                                    Application
                                                    Process</span>
                                            </h2>
                                            <div class="bor1pxSolid">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <table border="1" cellspacing="0" cellpadding="0"
                                                            class="table table100"
                                                            style="color: #000; line-height: 16px; font-size: 12px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="top" style="background-color: #F1F1F1;">
                                                                        <ul class="guidelineList">
                                                                            <li>Online Registration is a 7 Step process.
                                                                                All
                                                                                Seven (7) Steps of Online Registration
                                                                                Process should be completed before
                                                                                closing
                                                                                date as per the Advertisement. To avoid
                                                                                last
                                                                                day rush and disappointment, it is
                                                                                advisable
                                                                                to complete online registration well
                                                                                before
                                                                                closing date. Incomplete application
                                                                                form or
                                                                                with wrong or deliberately concealed
                                                                                information is liable to be straight
                                                                                away
                                                                                rejected without any intimation.</li>
                                                                            <li>Before proceeding to register for Common
                                                                                Recruitment Examination for AIIMS
                                                                                (CRE-AIIMS)(For Group B &amp; C Posts)
                                                                                you
                                                                                must ensure that you have read and
                                                                                understood the eligibility criteria of
                                                                                Common Recruitment Examination for AIIMS
                                                                                (CRE-AIIMS)(For Group B &amp; C Posts)
                                                                                as
                                                                                your form can be rejected at any stage
                                                                                due
                                                                                to ineligibility</li>
                                                                        </ul>
                                                                        <div
                                                                            style="margin-left: -7px; width: 45px; float: left;">
                                                                            <strong>Step 1.</strong>
                                                                        </div>
                                                                        <ul class="guidelineList">
                                                                            <li style="list-style: none;">
                                                                                <strong>Registration:</strong> Applicant
                                                                                should fill correct basic details like
                                                                                Full
                                                                                Name, DOB, Category, Gender, Email,
                                                                                Contact
                                                                                No. etc. subsequently to get Login
                                                                                credentials.
                                                                            </li>
                                                                            <li>After completion of 1st Step of
                                                                                Registration, Applicant will get SMS and
                                                                                Email intimating about Login Credentials
                                                                                (If
                                                                                SMS or Email is not received, Call
                                                                                Helpline
                                                                                immediately).</li>
                                                                            <li>Login with the credentials provided and
                                                                                change password on first time login.
                                                                                Password length should be between 6-10
                                                                                characters. Please remember your
                                                                                password
                                                                                and do not share it with others.</li>
                                                                            <li>After completion of 1st step of
                                                                                Registration
                                                                                process, My Page will be generated for
                                                                                each
                                                                                applicant bearing his/her entire
                                                                                information
                                                                                as filled by him/her. My Page will
                                                                                provide
                                                                                information regarding Due Steps; those
                                                                                should be completed before closing date,
                                                                                Admit Card &amp; Result.</li>
                                                                        </ul>
                                                                        <div
                                                                            style="margin-left: -7px; width: 45px; float: left;">
                                                                            <strong>Step 2.</strong>
                                                                        </div>
                                                                        <ul class="guidelineList">
                                                                            <li style="list-style: none;">
                                                                                <strong><u>Qualification &amp; Address
                                                                                        details:</u></strong> Fill
                                                                                correct
                                                                                Qualification &amp; Address details like
                                                                                Qualifying Examination Name, Status etc.
                                                                                and
                                                                                also fill Address details.
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            style="margin-left: -7px; width: 45px; float: left;">
                                                                            <strong>Step 3.</strong>
                                                                        </div>
                                                                        <ul class="guidelineList">
                                                                            <li style="list-style: none;">
                                                                                <strong><u>Experience
                                                                                        Details:</u></strong>
                                                                                Fill Experience Details like
                                                                                Organisation
                                                                                Name, Designation, Start Date etc. as
                                                                                applicable.
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            style="margin-left: -7px; width: 45px; float: left;">
                                                                            <strong>Step 4.</strong>
                                                                        </div>
                                                                        <ul class="guidelineList">
                                                                            <li style="list-style: none;"><strong><u>Fee
                                                                                        Payment:</u></strong> Payment of
                                                                                Registration Fee can be done online
                                                                                through
                                                                                Debit card/Credit card and Net Banking.
                                                                            </li>
                                                                            <li>After successful payment of registration
                                                                                fee, take printout of payment receipt
                                                                                bearing Unique Registration Number which
                                                                                can
                                                                                be used for future correspondence. </li>
                                                                        </ul>
                                                                        <div
                                                                            style="margin-left: -7px; width: 45px; float: left;">
                                                                            <strong>Step 5.</strong>
                                                                        </div>
                                                                        <ul class="guidelineList">
                                                                            <li style="list-style: none;">
                                                                                <strong><u>City
                                                                                        Choice:</u></strong> Select
                                                                                Examination City from available City
                                                                                list
                                                                                carefully. City availability list shows
                                                                                the
                                                                                real time status of seats in a city.
                                                                                City
                                                                                once selected cannot be changed later.
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            style="margin-left: -7px; width: 45px; float: left;">
                                                                            <strong>Step 6.</strong>
                                                                        </div>
                                                                        <ul class="guidelineList">
                                                                            <li style="list-style: none;">
                                                                                <strong><u>Upload
                                                                                        Images:</u></strong> Applicant
                                                                                is
                                                                                required to upload a recently taken
                                                                                digital/scanned Photograph, Signature
                                                                                and
                                                                                Thumb Impression in JPG/ JPEG format.
                                                                                The
                                                                                digital size of the Photograph file must
                                                                                be
                                                                                between 50 KB-100 KB and digital size of
                                                                                Signature and Left Thumb Impression file
                                                                                must be between 10 KB-50 KB, failing
                                                                                which
                                                                                applicant will not be able to upload
                                                                                images
                                                                                and complete registration process. The
                                                                                photograph to be uploaded must be taken
                                                                                within 6 months from on-line
                                                                                registration
                                                                                opening date.
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            style="margin-left: -7px; width: 45px; float: left;">
                                                                            <strong>Step 7.</strong>
                                                                        </div>
                                                                        <ul class="guidelineList">
                                                                            <li style="list-style: none;">
                                                                                <strong><u>Print
                                                                                        Registration Form:</u></strong>
                                                                                Applicant must take print of
                                                                                registration
                                                                                form and must check all information
                                                                                filled
                                                                                in the registration form carefully
                                                                                before
                                                                                final submission of registration form.
                                                                                After
                                                                                submission of Registration form no
                                                                                request
                                                                                for correction/changes will be
                                                                                entertained.
                                                                                Taking print of Registration form is
                                                                                essential.
                                                                            </li>
                                                                            <li>Applicant need not to send hardcopy of
                                                                                registration Form or any other document
                                                                                to
                                                                                Exam Section, AIIMS. Always keep
                                                                                Registration form and payment receipt
                                                                                with
                                                                                you for future references.</li>
                                                                            <li>No written acknowledgement will be
                                                                                issued
                                                                                for the receipt of the application.
                                                                                However,
                                                                                the applicant can verify Registration
                                                                                completion status on
                                                                                www.aiimsexams.ac.in
                                                                                after submission by login. If you see
                                                                                any
                                                                                discrepancy, call us on Helpline No.
                                                                                1800117898 </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <img src="{{asset('img/AIIMS_Instruction.jpg')}}"
                                                            alt="Instruction">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btnR" style="text-align: center;">
                                                <input type="button" id="btnShowForm" value="Proceed" class="button">
                                            </div>
                                        </div>
                                        <div class="mar10" id="divRegForm" style="">
                                            <script type="text/javascript"
                                                src="{{asset('js/dv/registraion.js?v5.4?.V1.0')}}"></script>
                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    var dateToday = new Date();
                                                    $(".datepicker").datepicker({
                                                        changeMonth: true,
                                                        changeYear: true,
                                                        yearRange: "1940:2006",
                                                        dateFormat: 'dd/mm/yy',
                                                        maxDate: new Date(2006, 11, 06), // yyyy-mm-DD
                                                        defaultDate: new Date(2006, 11, 06)
                                                    });

                                                    $(".Certdatepicker").datepicker({
                                                        changeMonth: true,
                                                        changeYear: true,
                                                        yearRange: "1960:2023",
                                                        dateFormat: 'dd/mm/yy',
                                                        maxDate: dateToday,
                                                        maxDate: new Date(2023, 11, 01),
                                                        defaultDate: new Date(2023, 11, 01),
                                                    });

                                                    $(".Validdatepicker").datepicker({
                                                        changeMonth: true,
                                                        changeYear: true,
                                                        yearRange: "2023:2050",
                                                        dateFormat: 'dd/mm/yy',
                                                        minDate: dateToday,
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
                                                    background-color: #fff;
                                                    color: #000;
                                                }

                                                .custom-dropdown {
                                                    position: relative;
                                                    display: inline-block;
                                                    margin: 0 15px;
                                                    width: 100%;
                                                }

                                                .custom-dropdown .dropdown-content {

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

                                                .helpLine {
                                                    text-align: right;
                                                    float: right;
                                                    color: #fffcb8;
                                                    font-size: 11px;
                                                    line-height: 16px !important;
                                                }

                                                .d-none {}
                                            </style>
                                            <script>
                                                function myFunction() {
                                                    document.getElementById("ddlPost").classList.toggle("show");
                                                }

                                                function myOptionClick(id) {
                                                    $("#txtDOB").val('');
                                                    $("#txtPWDType").val('');
                                                    //$("#ddlOPHSubCategory,#ddlPWD")[0].selectedIndex = 0;
                                                    //$("#ddlOPHSubCategory").html('');
                                                    $("#divScribe").hide();
                                                    $("#divUploadPWBDCertificate").hide();
                                                    $("#divPWDTypeText").hide();
                                                    $("#div_rbtnlstPWD").hide();
                                                    $("#div_PWDType").hide();
                                                    $("#div_PWDPercent").hide();
                                                    $("#divLCSubCategory").hide();
                                                    $("#divCategoryEWS").hide();
                                                    $('input[name=rbtnlstScribe]').prop('checked', false);
                                                    $('input[name=rbtnlstPWD]').prop('checked', false);
                                                    $('input[name=rbtnlstCategory]').prop('checked', false);
                                                    $('input[name=rbtnlstCategory1]').prop('checked', false);
                                                    $("#ddlPWD,#ddlOPHPercent,#ddlPWDType")[0].selectedIndex = 0;
                                                    $('#hdnPostValue').val(id);
                                                    var dropvalue = $("#" + id).find("p").html();
                                                    $($("#" + id).closest(".custom-dropdown").find(".custom-dropBtn").html(dropvalue + "<span class='triangle_down'></span>"));
                                                    fnBindCategory(id);
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
                                            <script src="{{asset('js/dv/comJS.js')}}"></script>
                                            <input type="hidden" id="hdnStudentId">
                                            <input type="hidden" id="hdnCategoryId">
                                            <input type="hidden" id="hdnOPH">
                                            <input type="hidden" id="hdnOphPercent">
                                            <input type="hidden" id="hdnRowId">
                                            <input type="hidden" id="hdnSId" value="0">
                                            <input type="hidden" id="hdnobc">
                                            <input type="hidden" id="hdnSC">
                                            <input type="hidden" id="hdnST">
                                            <input type="hidden" id="hdnEWS">
                                            <input type="hidden" id="hdnUR">
                                            <input type="hidden" id="hdnPWBD">
                                            <input type="hidden" id="hdnEX_ServiceMan">
                                            <input type="hidden" id="hdnUpperAgeUr">
                                            <input type="hidden" id="hdnAiimsRes">
                                            <input type="hidden" id="hdnPostValue">
                                            <?php
                                            $candidate_id = rand(1000000000, 9999999999);
                                            ?>
                                            <input type="hidden" name="candidate_id" id="candidate_id"
                                                value="<?php echo $candidate_id; ?>">
                                            <div class="mar10" id="div_MainForm">
                                                <h2 class="bgDBlue marB10 pad4 fontWhite"
                                                    style=" width: 102%; margin-left: -10px; ">
                                                    <span id="">Registration Form</span>
                                                    <span class="pageSubTitle right f12"
                                                        style="font-weight: bold; color: #FFED00; padding-top: 0px;">All
                                                        fields are mandatory except (#) marked
                                                        fields.&nbsp;&nbsp;</span>
                                                </h2>
                                                <div class="bor1pxSolid" style=" width: 102%; margin-left: -10px; ">
                                                    <div class="form-group row">
                                                        <div class="col-sm-6" hidden="">
                                                            <label class="col-sm-5 form-control-label b"
                                                                style="padding-top: 2px;">Select Group for Post:</label>
                                                            <div class="col-sm-7">
                                                                <select id="ddlGroup" class="form-control">
                                                                    <option value="0">--Select--</option>
                                                                    <option value="37" selected="">Group - A(Non
                                                                        Faculty)
                                                                    </option>
                                                                    <option value="38">Group - B</option>
                                                                    <option value="57">Group - C</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">

                                                            <div class="custom-dropdown">
                                                                <label class="col-sm-5 form-control-label b"
                                                                    style="padding-top: 2px;">Post Applying for
                                                                    :</label>
                                                                <select class="custom-dropBtn"
                                                                    onchange="myOptionClick(this.value)"
                                                                    name="post_name" required>
                                                                    <option value="Assistant Administrative Officer"
                                                                        selected="" disabled>Choose</option>
                                                                    <option value="Assistant Administrative Officer">
                                                                        Assistant Administrative Officer</option>
                                                                    <option value="Assistant Dietician">Assistant
                                                                        Dietician</option>
                                                                    <option value="Assistant Engineer (A/C & R)">
                                                                        Assistant Engineer (A/C & R)</option>
                                                                    <option value="Assistant Engineer (Civil)">Assistant
                                                                        Engineer (Civil)</option>
                                                                    <option value="Assistant Engineer (Electrical)">
                                                                        Assistant Engineer (Electrical)</option>
                                                                    <option value="Assistant Laundry Supervisor">
                                                                        Assistant Laundry Supervisor</option>
                                                                    <option
                                                                        value="Assistant Store Officer/Assistant Stores Officer">
                                                                        Assistant Store Officer/Assistant Stores Officer
                                                                    </option>
                                                                    <option
                                                                        value="Audiologist & Speech Therapist/Junior Audiologist/Speech Therapist/Technical Assistant (ENT)/Jr. Audiologist/Speech Therapist">
                                                                        Audiologist & Speech Therapist/Junior
                                                                        Audiologist/Speech Therapist/Technical Assistant
                                                                        (ENT)/Jr. Audiologist/Speech Therapist</option>
                                                                    <option value="Audiologist/Speech Pathologist">
                                                                        Audiologist/Speech Pathologist</option>
                                                                    <option value="Bio Medical Engineer">Bio Medical
                                                                        Engineer</option>
                                                                    <option value="Cashier">Cashier</option>
                                                                    <option value="Chief Cashier">Chief Cashier</option>
                                                                    <option
                                                                        value="Coding Clerk/Medical Record Technicians/Junior Medical Record Officer/Junior Medical Record Officer (Receptionists)/Medical Record Technicians/Medical Record Technician(Record Clerk)">
                                                                        Coding Clerk/Medical Record Technicians/Junior
                                                                        Medical Record Officer/Junior Medical Record
                                                                        Officer (Receptionists)/Medical Record
                                                                        Technicians/Medical Record Technician(Record
                                                                        Clerk)</option>
                                                                    <option value="CSSD Technicians">CSSD Technicians
                                                                    </option>
                                                                    <option value="Dark Room Assistant Grade II">Dark
                                                                        Room Assistant Grade II</option>
                                                                    <option value="Data Entry Operator Grade - A">Data
                                                                        Entry Operator Grade - A</option>
                                                                    <option
                                                                        value="Dental Hygieneist/Technical Officer/Technical Officer (Dental)/Dental Technical/Dental Technician (Hygienist)/Dental Technician (Mechanic)/Technical Officer (Dental)/Dental Technician">
                                                                        Dental Hygieneist/Technical Officer/Technical
                                                                        Officer (Dental)/Dental Technical/Dental
                                                                        Technician (Hygienist)/Dental Technician
                                                                        (Mechanic)/Technical Officer (Dental)/Dental
                                                                        Technician</option>
                                                                    <option value="Dietician">Dietician</option>
                                                                    <option value="Dissection Hall Attendant">Dissection
                                                                        Hall Attendant</option>
                                                                    <option value="Driver">Driver</option>
                                                                    <option value="Electrician">Electrician</option>
                                                                    <option value="Embryologist">Embryologist</option>
                                                                    <option
                                                                        value="Fire Technician/Security cum Fire Jamadar">
                                                                        Fire Technician/Security cum Fire Jamadar
                                                                    </option>
                                                                    <option value="Gas/Pump Mechanic">Gas/Pump Mechanic
                                                                    </option>
                                                                    <option
                                                                        value="Health Educator (Social Psychologist)">
                                                                        Health Educator (Social Psychologist)</option>
                                                                    <option value="Hindi Officer">Hindi Officer</option>
                                                                    <option
                                                                        value="Hospital Attendant Grade III (Nursing Orderly)/Hospital Attendant Grade III (Nursing Orderly)/Hospital Attendant Grade III (Stretcher Bearers)">
                                                                        Hospital Attendant Grade III (Nursing
                                                                        Orderly)/Hospital Attendant Grade III (Nursing
                                                                        Orderly)/Hospital Attendant Grade III (Stretcher
                                                                        Bearers)</option>
                                                                    <option
                                                                        value="Junior Accounts Officer/Junior Accounts Officer (Accountant)">
                                                                        Junior Accounts Officer/Junior Accounts Officer
                                                                        (Accountant)</option>
                                                                    <option
                                                                        value="Junior Administrative Assistant/Lower Divisional Clerk/Jr. Administrative Assistant(LDC)/Lower Division Clerk">
                                                                        Junior Administrative Assistant/Lower Divisional
                                                                        Clerk/Jr. Administrative Assistant(LDC)/Lower
                                                                        Division Clerk</option>
                                                                    <option
                                                                        value="Junior Administrative Officer/Office Assistant (N.S.)/Executive Assistant (N.S.)">
                                                                        Junior Administrative Officer/Office Assistant
                                                                        (N.S.)/Executive Assistant (N.S.)</option>
                                                                    <option
                                                                        value="Junior Engineer (A/C&R)/Junior Engineer (AC&R)">
                                                                        Junior Engineer (A/C&R)/Junior Engineer (AC&R)
                                                                    </option>
                                                                    <option value="Junior Engineer (Civil)">Junior
                                                                        Engineer (Civil)</option>
                                                                    <option value="Junior Engineer (Electrical)">Junior
                                                                        Engineer (Electrical)</option>
                                                                    <option
                                                                        value="Junior Hindi Translator/Junior Hindi Officer">
                                                                        Junior Hindi Translator/Junior Hindi Officer
                                                                    </option>
                                                                    <option value="Junior Physiotherapist">Junior
                                                                        Physiotherapist</option>
                                                                    <option value="Junior Reception Officer">Junior
                                                                        Reception Officer</option>
                                                                    <option value="Junior Scale Steno (Hindi)">Junior
                                                                        Scale Steno (Hindi)</option>
                                                                    <option value="Junior Store Officer/Store Keeper">
                                                                        Junior Store Officer/Store Keeper</option>
                                                                    <option value="Junior Warden (House Keepers)">Junior
                                                                        Warden (House Keepers)</option>
                                                                    <option
                                                                        value="Lab Attendants Grade II/Lab Attendant Grade II">
                                                                        Lab Attendants Grade II/Lab Attendant Grade II
                                                                    </option>
                                                                    <option value="Lab Technician">Lab Technician
                                                                    </option>
                                                                    <option value="Laundry Manager">Laundry Manager
                                                                    </option>
                                                                    <option value="Laundry Supervisor">Laundry
                                                                        Supervisor</option>
                                                                    <option value="Legal Assistant">Legal Assistant
                                                                    </option>
                                                                    <option
                                                                        value="Librarian Grade I/Librarian Grade I (Documentalist)">
                                                                        Librarian Grade I/Librarian Grade I
                                                                        (Documentalist)</option>
                                                                    <option
                                                                        value="Library And Information Assistant (Librarian Grade III)">
                                                                        Library And Information Assistant (Librarian
                                                                        Grade III)</option>
                                                                    <option value="Library Attendant Grade II">Library
                                                                        Attendant Grade II</option>
                                                                    <option value="Lineman (Electrical)">Lineman
                                                                        (Electrical)</option>
                                                                    <option value="Manager/Supervisor/Gas Officer">
                                                                        Manager/Supervisor/Gas Officer</option>
                                                                    <option value="Manifold Room Attendant">Manifold
                                                                        Room Attendant</option>
                                                                    <option
                                                                        value="Manifold Technician (Gas Steward)/Manifold Technician (Gas Steward)/Gas Keeper">
                                                                        Manifold Technician (Gas Steward)/Manifold
                                                                        Technician (Gas Steward)/Gas Keeper</option>
                                                                    <option
                                                                        value="Mechanic (A/C & R)/Mechanic (Air Conditioning & Refrigeration)">
                                                                        Mechanic (A/C & R)/Mechanic (Air Conditioning &
                                                                        Refrigeration)</option>
                                                                    <option value="Mechanic (E & M)">Mechanic (E & M)
                                                                    </option>
                                                                    <option value="Medical Record Officer">Medical
                                                                        Record Officer</option>
                                                                    <option
                                                                        value="Medical Social Service Officer Grade I/Medico Social Service Officer Grade I">
                                                                        Medical Social Service Officer Grade I/Medico
                                                                        Social Service Officer Grade I</option>
                                                                    <option
                                                                        value="Medical Social Service Officer Grade II">
                                                                        Medical Social Service Officer Grade II</option>
                                                                    <option
                                                                        value="Medical Social Worker/Medical Social Worker (MSW)/Medico Social Worker">
                                                                        Medical Social Worker/Medical Social Worker
                                                                        (MSW)/Medico Social Worker</option>
                                                                    <option value="Modellar (Artist)/Artist (Modellar)">
                                                                        Modellar (Artist)/Artist (Modellar)</option>
                                                                    <option value="Mortuary Attendant">Mortuary
                                                                        Attendant</option>
                                                                    <option
                                                                        value="Multi-Rehabilitation Worker (Physiotherapist)">
                                                                        Multi-Rehabilitation Worker (Physiotherapist)
                                                                    </option>
                                                                    <option value="Multi-Tasking Staff">Multi-Tasking
                                                                        Staff</option>
                                                                    <option value="Nuclear Medicine Technologist">
                                                                        Nuclear Medicine Technologist</option>
                                                                    <option value="Occupational Therapist">Occupational
                                                                        Therapist</option>
                                                                    <option value="Office Attendant Grade II">Office
                                                                        Attendant Grade II</option>
                                                                    <option value="Operator (E&M)/Lift Operator">
                                                                        Operator (E&M)/Lift Operator</option>
                                                                    <option
                                                                        value="Optometrist/Technical Officer Ophthalmology (Refractionist)/Technical Officer Ophthalmology">
                                                                        Optometrist/Technical Officer Ophthalmology
                                                                        (Refractionist)/Technical Officer Ophthalmology
                                                                    </option>
                                                                    <option value="PACS Administrator">PACS
                                                                        Administrator</option>
                                                                    <option value="Perfusionist">Perfusionist</option>
                                                                    <option
                                                                        value="Personal Assistant (PA)/Personal Assistant/PA to Principal (S)">
                                                                        Personal Assistant (PA)/Personal Assistant/PA to
                                                                        Principal (S)</option>
                                                                    <option
                                                                        value="Pharmacist/Pharmacist Grade II/Pharma Chemist/Chemical Examiner/Dispensing Attendant/Dispensing Attendants">
                                                                        Pharmacist/Pharmacist Grade II/Pharma
                                                                        Chemist/Chemical Examiner/Dispensing
                                                                        Attendant/Dispensing Attendants</option>
                                                                    <option value="Physiotherapist">Physiotherapist
                                                                    </option>
                                                                    <option value="Plumber">Plumber</option>
                                                                    <option value="Private Secretary">Private Secretary
                                                                    </option>
                                                                    <option value="Programmer">Programmer</option>
                                                                    <option value="Psychiatric Social Worker">
                                                                        Psychiatric Social Worker</option>
                                                                    <option value="Public Health Nurse">Public Health
                                                                        Nurse</option>
                                                                    <option value="Sanitary Inspector Grade II">Sanitary
                                                                        Inspector Grade II</option>
                                                                    <option
                                                                        value="Senior Administrative Assistant/Upper Division Clerk/Senior Administrative Assistant (UDC)">
                                                                        Senior Administrative Assistant/Upper Division
                                                                        Clerk/Senior Administrative Assistant (UDC)
                                                                    </option>
                                                                    <option
                                                                        value="Senior Mechanic (Air Conditioning & Refrigeration)">
                                                                        Senior Mechanic (Air Conditioning &
                                                                        Refrigeration)</option>
                                                                    <option
                                                                        value="Senior Nursing Officer/Staff Nurse Grade I">
                                                                        Senior Nursing Officer/Staff Nurse Grade I
                                                                    </option>
                                                                    <option
                                                                        value="Senior Technician (Laboratory)/Technical Officer (Technical Supervisor)">
                                                                        Senior Technician (Laboratory)/Technical Officer
                                                                        (Technical Supervisor)</option>
                                                                    <option value="Social Worker">Social Worker</option>
                                                                    <option value="Statistical Assistant">Statistical
                                                                        Assistant</option>
                                                                    <option value="Stenographer">Stenographer</option>
                                                                    <option value="Store Attendant Grade II">Store
                                                                        Attendant Grade II</option>
                                                                    <option value="Store Keeper-cum-clerk">Store
                                                                        Keeper-cum-clerk</option>
                                                                    <option value="Tailor Grade III">Tailor Grade III
                                                                    </option>
                                                                    <option value="TB & Chest Disease Health Assistant">
                                                                        TB & Chest Disease Health Assistant</option>
                                                                    <option
                                                                        value="Technical Assistant/Technician(Laboratory)/Technicians(Laboratory)/Laboratory Technician/Technician (Laboratory)">
                                                                        Technical
                                                                        Assistant/Technician(Laboratory)/Technicians(Laboratory)/Laboratory
                                                                        Technician/Technician (Laboratory)</option>
                                                                    <option
                                                                        value="Technician (OT)/Technicians(Laboratory)(OT)/Technical Assistant/Technician(OT)/Technical Assistant/Technician (Anesthesia/Operation theatre)">
                                                                        Technician
                                                                        (OT)/Technicians(Laboratory)(OT)/Technical
                                                                        Assistant/Technician(OT)/Technical
                                                                        Assistant/Technician (Anesthesia/Operation
                                                                        theatre)</option>
                                                                    <option
                                                                        value="Technician (Prosthetics and Orthotics)">
                                                                        Technician (Prosthetics and Orthotics)</option>
                                                                    <option
                                                                        value="Technician (Radiology Radiographic Technician Grade II)">
                                                                        Technician (Radiology Radiographic Technician
                                                                        Grade II)</option>
                                                                    <option
                                                                        value="Technician (Radiotherapy)/Technicians (Radiotherapy)">
                                                                        Technician (Radiotherapy)/Technicians
                                                                        (Radiotherapy)</option>
                                                                    <option
                                                                        value="Technician(Radiographic Technician Grade I)/Technicians (Radiology)">
                                                                        Technician(Radiographic Technician Grade
                                                                        I)/Technicians (Radiology)</option>
                                                                    <option value="Transplant Coordinator">Transplant
                                                                        Coordinator</option>
                                                                    <option value="Transport Supervisor">Transport
                                                                        Supervisor</option>
                                                                    <option value="Vocation Counsellor">Vocation
                                                                        Counsellor</option>
                                                                    <option value="Warden (Hostel Warden)">Warden
                                                                        (Hostel Warden)</option>
                                                                    <option value="Wireman">Wireman</option>
                                                                    <option value="Yoga Instructor">Yoga Instructor
                                                                    </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row" id="divDepartment"
                                                        style="display: none">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-5 form-control-label b"
                                                                style="padding-top: 2px;">Name of the Deptt./
                                                                Centre:</label>
                                                            <div class="col-sm-7">
                                                                <select id="ddlDepartment" class="form-control">
                                                                    <option value="0">--Select--</option>
                                                                    <option value="58">Dr.BRAIRCH (Medical Physics)
                                                                    </option>
                                                                    <option value="59">NMR</option>
                                                                    <option value="60">Pediatrics</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="fontDarkRed bgGrey pad4 marT10 b f13"
                                                    style=" width: 102%; margin-left: -10px; ">Personal Details</h3>
                                                <div class="bor1pxSolid" style=" width: 102%; margin-left: -10px; ">
                                                    <div class="form-group col-sm-12">
                                                        <span class="blue">(Enter Full Name as per your Univeristy
                                                            Degree)</span>
                                                    </div>
                                                    <div class="form-group row ">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">Full
                                                                Name:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtFirstName"
                                                                    class="form-control" required name="full_name"
                                                                    maxlength="150" onkeypress="return isAlpha(event);">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">Re enter Full
                                                                Name:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtConfirmName"
                                                                    class="form-control" maxlength="150"
                                                                    onkeypress="return isAlpha(event);">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <span class="blue">(Do not add salutation for Father’s/Mother’s
                                                            name.)</span>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">Father/Guardian's
                                                                Name:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtFatherName" maxlength="150"
                                                                    required name="father_name" class="form-control"
                                                                    onkeypress="return isAlpha(event);">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="tbRollNo" class="col-sm-4 form-control-label">
                                                                Mother's Name:
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtMotherName" maxlength="150"
                                                                    required name="mother_name" class="form-control"
                                                                    onkeypress="return isAlpha(event);">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <span class="blue">(All OBC Creamy Layer Candidate will be
                                                            consider
                                                            as General)</span>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Category:
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <label class="checkbox-inline" id="lblSC_1">
                                                                    <input type="radio" id="rbtnlstCategory_SCN1"
                                                                        value="SC" name="rbtnlstCategory1"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>SC</span>
                                                                </label>
                                                                <label class="checkbox-inline" id="lblST_1">
                                                                    <input type="radio" id="rbtnlstCategory_ST1"
                                                                        value="ST" name="rbtnlstCategory1"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>ST</span>
                                                                </label>
                                                                <label class="checkbox-inline" id="lblOBC_1">
                                                                    <input type="radio" id="rbtnlstCategory_OPH1"
                                                                        value="OBC(NCL)" name="rbtnlstCategory1"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>OBC(NCL)</span>
                                                                </label>
                                                                <label class="checkbox-inline" id="lblGen_1">
                                                                    <input type="radio" id="rbtnlstCategory_Gen1"
                                                                        value="GEN" name="rbtnlstCategory1"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>General</span>
                                                                </label>
                                                                <label class="checkbox-inline" id="lblEWS_1">
                                                                    <input type="radio" id="rbtnlstCategory_EWS1"
                                                                        value="EWS" name="rbtnlstCategory1"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>EWS</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Confirm Category:
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <label class="checkbox-inline" id="lblSC">
                                                                    <input type="radio" id="rbtnlstCategory_SC"
                                                                        value="1" name="rbtnlstCategory"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>SC</span>
                                                                </label>
                                                                <label class="checkbox-inline" id="lblST">
                                                                    <input type="radio" id="rbtnlstCategory_ST"
                                                                        value="2" name="rbtnlstCategory"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>ST</span>
                                                                </label>
                                                                <label class="checkbox-inline" id="lblOBC">
                                                                    <input type="radio" id="rbtnlstCategory_OPH"
                                                                        value="3" name="rbtnlstCategory"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>OBC(NCL)</span>
                                                                </label>
                                                                <label class="checkbox-inline" id="lblGen">
                                                                    <input type="radio" id="rbtnlstCategory_Gen"
                                                                        value="4" name="rbtnlstCategory"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>General</span>
                                                                </label>
                                                                <label class="checkbox-inline" id="lblEWS">
                                                                    <input type="radio" id="rbtnlstCategory_EWS"
                                                                        value="67" name="rbtnlstCategory"
                                                                        onchange="return fnIsConfirmCategory(event);"><span>EWS</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row hide" id="divCategoryEWS"
                                                        style="display: none;">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-8 form-control-label">
                                                                Economically Weaker Section (EWS):
                                                            </label>
                                                            <div class="col-sm-4 gencheckBox"
                                                                style="padding: 0px 0px; margin-top: -3px;">
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstEWS_Yes" value="1"
                                                                        name="rbtnlstEWS"><span>Yes</span>
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstEWS_No" value="0"
                                                                        name="rbtnlstEWS"><span>No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" id="divCategory" style="display: none;">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Category Certificate No.:#(Optional)
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtCertificateNo"
                                                                    name="category_certificate_no" maxlength="30"
                                                                    class="form-control"
                                                                    onkeypress="return isAlphaNumeric(event);">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6" id="div1">
                                                            <label class="col-sm-4 form-control-label">
                                                                Category Certificate Issue Date:#(Optional)
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="date" id="txtCertificateDate"
                                                                    name="category_certificate_date" maxlength="10"
                                                                    class="form-control Certdatepicker f12 hasDatepicker">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6" style="font-size: 12px;">
                                                            <label class="col-sm-8 form-control-label">

                                                                Are you in the category of PWBD :<br>
                                                                (Persons with benchmark disability as per the rights of
                                                                persons with disability act, 2016)

                                                            </label>
                                                            <div class="col-sm-4 gencheckBox"
                                                                style="padding: 0px 0px; margin-top: -3px;">
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstPWD_yes" value="1"
                                                                        name="rbtnlstPWD"><span>Yes</span>
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstPWD_no" value="0"
                                                                        name="rbtnlstPWD"><span>No</span>
                                                                </label>
                                                            </div>
                                                            <div id="divOPHPoupup" style="display: none;">
                                                                <div class="OPHPoupup">
                                                                    <p>
                                                                        Eligibility under PWBD will be subjected to
                                                                        production of valid certificate of specified
                                                                        disability issued by competent authority and
                                                                        declaration of medical fitness to pursue the
                                                                        course
                                                                        by a duly constituted Medical Board of
                                                                        respective
                                                                        AIIMS.
                                                                    </p>
                                                                    <p>
                                                                        <u><a href="{{asset('pdf/Annexure-Ipwbdcategories.pdf')}}"
                                                                                target="_blank">Please Read the
                                                                                "Specified
                                                                                Disability" as under Section 2 of PWBD
                                                                                Act</a></u>
                                                                    </p>
                                                                    <div class="checkbox-inline marB10">
                                                                        <input type="checkbox" id="chkAgree"
                                                                            name="IAgree"><span>I agree</span>
                                                                    </div>
                                                                    <div class="center">
                                                                        <input type="button" value="OK" id="close"
                                                                            class="okBtn">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div id="div_PWDPercent" style="display: none;">
                                                                <label class="col-sm-4 form-control-label">
                                                                    Disability %:
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <select id="ddlOPHPercent" name="disability_per">
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <div id="div_rbtnlstPWD" style="display: none;">
                                                                <label class="col-sm-4 form-control-label"
                                                                    style="font-size: 12px;">
                                                                    PWBD Category:
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <select id="ddlPWD" style="width: 100%"
                                                                        name="pwd_category">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6" id="div_PWDType" style="display: none;">
                                                            <label class="col-sm-4 form-control-label">
                                                                PWBD Sub Category:
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <select id="ddlPWDType" style="display: none;"
                                                                    name="pwd_sub_category">
                                                                    <option value="--Select--" selected="" disabled>
                                                                        --Select--</option>
                                                                    <option value="01 - LV(Low vision)">01 - LV(Low
                                                                        vision)</option>
                                                                    <option value="02 - HH(Hard of Hearing)">02 -
                                                                        HH(Hard of Hearing)</option>
                                                                    <option value="03 - OA(One Arm)">03 - OA(One Arm)
                                                                    </option>
                                                                    <option value="04 - BA(Both Arms)">04 - BA(Both
                                                                        Arms)</option>
                                                                    <option value="05 - OAL(One Arm and One Leg)">05 -
                                                                        OAL(One Arm and One Leg)</option>
                                                                    <option value="06 - BLA(Both legs & Arms)">06 -
                                                                        BLA(Both legs & Arms)</option>
                                                                    <option value="07 - OL(One Leg)">07 - OL(One Leg)
                                                                    </option>
                                                                    <option value="08 - BL(Both Legs)">08 - BL(Both
                                                                        Legs)</option>
                                                                    <option value="09 - LC(Leprosy Cured)">09 -
                                                                        LC(Leprosy Cured)</option>
                                                                    <option value="10 - Dw(Dwarfism)">10 - Dw(Dwarfism)
                                                                    </option>
                                                                    <option value="11 - AAV(Acid Attack Victims)">11 -
                                                                        AAV(Acid Attack Victims)</option>
                                                                    <option
                                                                        value="12 - ASD(Autism Spectrum Disability)">12
                                                                        - ASD(Autism Spectrum Disability)</option>
                                                                    <option value="13 - MI(Mental Illness)">13 -
                                                                        MI(Mental Illness)</option>
                                                                    <option value="14 - MD(Multiple Disabilities)">14 -
                                                                        MD(Multiple Disabilities)</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row" id="divLCSubCategory"
                                                        style="display: none;">
                                                        <div class="col-sm-6">
                                                            <div>
                                                                <label class="col-sm-4 form-control-label"
                                                                    style="font-size: 12px;">
                                                                    Leprosy Cured Sub Category :
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <select id="ddlLCSubCategory" style="width: 100%"
                                                                        name="leprosy_cured_sub_category">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row" id="divScribe" style="display: none;">
                                                        <p style=" margin-left: 30px; ">Which
                                                            facility(Scribe/Compensatory
                                                            time) do you require to appear in the Exam?</p>
                                                        <div class="col-sm-12">
                                                            <label class="col-sm-3 form-control-label"
                                                                for="rbtnlstScribe_yes">

                                                                <span style=" font-weight: 600;">A.</span> I need Scribe
                                                                and
                                                                compensatory time to appear in the Exam:
                                                            </label>
                                                            <div class="col-sm-3 gencheckBox">
                                                                <label class="checkbox-inline">
                                                                    <input style=" width: 20px;" type="radio"
                                                                        id="rbtnlstScribe_yes" value="1"
                                                                        name="rbtnlstScribe">
                                                                </label>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-sm-3 form-control-label" for="rbtnlstCto">
                                                                <span style=" font-weight: 600;">B.</span> I need
                                                                Compensatory time only :
                                                            </label>
                                                            <div class="col-sm-3 gencheckBox">
                                                                <label class="checkbox-inline">
                                                                    <input style=" width: 20px;" type="radio"
                                                                        id="rbtnlstCto" value="2" name="rbtnlstScribe">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">

                                                            <label class="col-sm-3 form-control-label" for="rbtnlstNot">
                                                                <span style=" font-weight: 600;">C.</span> Neither
                                                                scribe
                                                                nor compensatory time required :
                                                            </label>
                                                            <div class="col-sm-3 gencheckBox">
                                                                <label class="checkbox-inline">
                                                                    <input style=" width: 20px;" type="radio"
                                                                        id="rbtnlstNot" value="3" name="rbtnlstScribe">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="divScribePoupup" class="Popup_Div" style="display: none;">
                                                        <div class="OPHPoupup">
                                                            <p>
                                                                Please download and sumbit Certificate for scribe in
                                                                prescribed format issued by competent authority as
                                                                mentioned
                                                                and e-mail us at aiims.recruitmentexam2020@gmail.com
                                                                with
                                                                clearly mentioning candidate id and name of post in
                                                                subject
                                                                line.
                                                            </p>
                                                            <p>
                                                                <u><a href="{{asset('pdf/Annexure-Ipwbdcategories.pdf')}}"
                                                                        target="_blank">Please Read the Scribe
                                                                        Details</a></u>
                                                            </p>
                                                            <div class="checkbox-inline marB10">
                                                                <input type="checkbox" id="chkAgreeScribe"
                                                                    name="IAgreeScribe"><span>I agree</span>
                                                            </div>
                                                            <div class="center">
                                                                <input type="button" value="OK" id="closeScribe"
                                                                    class="okBtn">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row" id="divUploadPWBDCertificate"
                                                        style="display: none;">
                                                        <div class="col-sm-12">
                                                            <label class="col-sm-12 form-control-label"
                                                                style="color: red;">
                                                                <strong>(It is mandatory to upload PWBD Certificate by
                                                                    clicking on Upload Images link/Button)</strong>
                                                            </label>
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Nationality:
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstNationality_Indian"
                                                                        value="5" name="rbtnlstNationality"
                                                                        checked="checked">
                                                                    <span>Indian</span>
                                                                </label>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                State of Domicile:
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <select id="ddlDomicile" class="form-control" required
                                                                    name="state">
                                                                    <option value="0" selected disabled>[Choose One]
                                                                    </option>
                                                                    <option value="ANDAMAN & NICOBAR ISLANDS">ANDAMAN &
                                                                        NICOBAR ISLANDS</option>
                                                                    <option value="ANDHRA PRADESH">ANDHRA PRADESH
                                                                    </option>
                                                                    <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH
                                                                    </option>
                                                                    <option value="ASSAM">ASSAM</option>
                                                                    <option value="BIHAR">BIHAR</option>
                                                                    <option value="CHANDIGARH">CHANDIGARH</option>
                                                                    <option value="CHATTISGARH">CHATTISGARH</option>
                                                                    <option value="DADRA & NAGAR HAVELI">DADRA & NAGAR
                                                                        HAVELI</option>
                                                                    <option value="DAMAN & DIU">DAMAN & DIU</option>
                                                                    <option value="DELHI">DELHI</option>
                                                                    <option value="GOA">GOA</option>
                                                                    <option value="GUJARAT">GUJARAT</option>
                                                                    <option value="HARYANA">HARYANA</option>
                                                                    <option value="HIMACHAL PRADESH">HIMACHAL PRADESH
                                                                    </option>
                                                                    <option value="JAMMU & KASHMIR">JAMMU & KASHMIR
                                                                    </option>
                                                                    <option value="JHARKHAND">JHARKHAND</option>
                                                                    <option value="KARNATAKA">KARNATAKA</option>
                                                                    <option value="KERALA">KERALA</option>
                                                                    <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                                                                    <option value="MADHYA PRADESH">MADHYA PRADESH
                                                                    </option>
                                                                    <option value="MAHARASHTRA">MAHARASHTRA</option>
                                                                    <option value="MANIPUR">MANIPUR</option>
                                                                    <option value="MEGHALAYA">MEGHALAYA</option>
                                                                    <option value="MIZORAM">MIZORAM</option>
                                                                    <option value="NAGALAND">NAGALAND</option>
                                                                    <option value="ODISHA">ODISHA</option>
                                                                    <option value="PONDICHERRY">PONDICHERRY</option>
                                                                    <option value="PUNJAB">PUNJAB</option>
                                                                    <option value="RAJASTHAN">RAJASTHAN</option>
                                                                    <option value="SIKKIM">SIKKIM</option>
                                                                    <option value="TAMIL NADU">TAMIL NADU</option>
                                                                    <option value="TELANGANA">TELANGANA</option>
                                                                    <option value="TRIPURA">TRIPURA</option>
                                                                    <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                                                    <option value="UTTARAKHAND">UTTARAKHAND</option>
                                                                    <option value="WEST BENGAL">WEST BENGAL</option>
                                                                    <option value="OTHER">OTHER</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                ID Proof:
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <select id="ddlIDProof" class="form-control"
                                                                    name="id_proof">
                                                                    <option value="--Select--" selected disabled>
                                                                        --Select--</option>
                                                                    <option value="Aadhaar Card">Aadhaar Card</option>
                                                                    <option value="Armed Force ID Card">Armed Force ID
                                                                        Card</option>
                                                                    <option value="Driving Licence">Driving Licence
                                                                    </option>
                                                                    <option value="Med. Reg.ID Card">Med. Reg.ID Card
                                                                    </option>
                                                                    <option value="PAN Card">PAN Card</option>
                                                                    <option value="Passport">Passport</option>
                                                                    <option value="Voter ID/EPIC Card">Voter ID/EPIC
                                                                        Card</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                ID No.:
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtIDNo" class="form-control"
                                                                    maxlength="30"
                                                                    onkeypress="return isAlphaNumeric(event);" required
                                                                    name="id_no">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <span class="blue">(Please bring along this ID Proof at the time
                                                            of
                                                            examination)</span>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Place of Issue:
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" id="txtPlaceOfIssue"
                                                                    class="form-control" maxlength="50"
                                                                    onkeypress="return isAlpha(event);"
                                                                    name="place_of_issue_id">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Issue Date:#(Optional)
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="date" id="IssueDate" maxlength="10"
                                                                    class="form-control Certdatepicker hasDatepicker"
                                                                    name="issue_date_id">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Valid Till:#(Optional)
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <input type="date" id="txtValidTill" maxlength="10"
                                                                    class="form-control Validdatepicker hasDatepicker"
                                                                    name="valid_till_id">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Gender:
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <label class="checkbox-inline" id="lblGenderMale">
                                                                    <input type="radio" id="rbtnlstGender_Male"
                                                                        value="Male" name="rbtnlstGender">
                                                                    <span>Male</span>
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstGender_Female"
                                                                        value="Female"
                                                                        name="rbtnlstGender"><span>Female</span>
                                                                </label>
                                                                <label class="checkbox-inline" id="lblGenderThird">
                                                                    <input type="radio" id="rbtnlstGender_Third"
                                                                        value="Third" name="rbtnlstGender"><span>Third
                                                                        Gender</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" id="dvMaritalStatus"
                                                        style="display: none">
                                                        <div class="col-sm-6">

                                                            <label class="col-sm-4 form-control-label">
                                                                Marital Status:
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <select id="ddlMaritalStatus" class="form-control"
                                                                    name="marital_status">
                                                                    <option value="--Select--" selected disabled>
                                                                        --Select--</option>
                                                                    <option value="Married">Married</option>
                                                                    <option value="Unmarried">Unmarried</option>
                                                                    <option value="Widows">Widows</option>
                                                                    <option value="Divorced Women">Divorced Women
                                                                    </option>
                                                                    <option
                                                                        value="Women judicially separated and who are not remarried">
                                                                        Women judicially separated and who are not
                                                                        remarried</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="dvGovernmentEmployee" style="">
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <label class="col-sm-4 form-control-label">
                                                                    Are you a Government Employee ?:
                                                                </label>
                                                                <div class="col-sm-8 gencheckBox">
                                                                    <label class="checkbox-inline">
                                                                        <input type="radio" id="rbtnlstGovEmp_Yes"
                                                                            value="1"
                                                                            name="rbtnlstGovEmp"><span>Yes</span>
                                                                    </label>
                                                                    <label class="checkbox-inline">
                                                                        <input type="radio" id="rbtnlstGovEmp_No"
                                                                            value="0"
                                                                            name="rbtnlstGovEmp"><span>No</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="divGovEmpDetails" style="display: none;">
                                                            <div class="form-group row">
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Name of Institution / Organisation :
                                                                    </label>
                                                                    <div class="col-sm-8 gencheckBox">
                                                                        <input type="text" id="txtInstitution"
                                                                            class="form-control" maxlength="100"
                                                                            onkeypress="return isAlpha(event);"
                                                                            name="name_of_org_or_institution">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Type of Organisation :
                                                                    </label>

                                                                    <div class="col-sm-8 gencheckBox">

                                                                        <select id="ddlTypeOfOrgination"
                                                                            class="form-control" name="type_of_org">
                                                                            <option value="0">--Select--</option>
                                                                            <option value="Central Government">Central
                                                                                Government</option>
                                                                            <option value="State Government">State
                                                                                Government</option>
                                                                            <option
                                                                                value="Central Government Autonomous">
                                                                                Central Government Autonomous</option>
                                                                            <option value="State Government Autonomous">
                                                                                State Government Autonomous</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Type of Job Status:
                                                                    </label>
                                                                    <div class="col-sm-8 gencheckBox">
                                                                        <select id="ddlJobtype" class="form-control"
                                                                            name="type_of_job">
                                                                            <option value="0">--Select--</option>
                                                                            <option value="Regular">Regular</option>



                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Present Position Held:
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" id="txtCurntPosition"
                                                                            class="form-control" maxlength="50"
                                                                            onkeypress="return isAlpha(event);"
                                                                            name="present_position_held">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Date Of Appointment: From :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" id="txtAppntmntDate"
                                                                            maxlength="10"
                                                                            class="form-control Certdatepicker hasDatepicker"
                                                                            name="job_date_of_appointment">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Till Date :
                                                                    </label>
                                                                    <div class="col-sm-8">

                                                                        <input type="text" id="txtRelievingDate"
                                                                            maxlength="10"
                                                                            class="form-control Certdatepicker hasDatepicker"
                                                                            name="job_till_date">
                                                                        <input type="hidden" id="hdnCountServiceYear">
                                                                        <input type="hidden"
                                                                            id="hdnCountAiimsServiceYear">
                                                                        <input type="hidden"
                                                                            id="hdnCountAiimsServiceYearEX">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div id="divAIIMSEmployee1" style="display: none" hidden="">
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <label class="col-sm-4 form-control-label">
                                                                    Are you an AIIMS Employee?:
                                                                </label>
                                                                <div class="col-sm-8 gencheckBox">
                                                                    <label class="checkbox-inline">
                                                                        <input type="radio" id="rbtnlstAIIMSEmp_Yes"
                                                                            value="1"
                                                                            name="rbtnlstAIIMSEmp"><span>Yes</span>
                                                                    </label>
                                                                    <label class="checkbox-inline">
                                                                        <input type="radio" id="rbtnlstAIIMSEmp_No"
                                                                            value="0"
                                                                            name="rbtnlstAIIMSEmp"><span>No</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="divAIIMSEmployeeDetails" style="display: none;">
                                                            <div class="form-group row">
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Joining Date :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="date" id="txtJoinDate"
                                                                            maxlength="10"
                                                                            class="form-control Certdatepicker hasDatepicker"
                                                                            name="aiims_joining_date">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Post Name:
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" id="txtPostName"
                                                                            class="form-control" maxlength="50"
                                                                            onkeypress="return isAlpha(event);"
                                                                            name="aiims_post_name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Department Name :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" id="txtDepartmentName"
                                                                            class="form-control" maxlength="30"
                                                                            onkeypress="return isAlphaNumeric(event);"
                                                                            name="aiims_department_name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        Type of Job Status:
                                                                    </label>
                                                                    <div class="col-sm-8 gencheckBox">
                                                                        <select id="ddlAIIMSJobStatus"
                                                                            class="form-control"
                                                                            name="aiims_job_status">
                                                                            <option value="0">--Select--</option>
                                                                            <option value="39">Regular</option>
                                                                            <option value="60">Contractual</option>

                                                                            <option value="42">Project</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6">
                                                                    <label class="col-sm-4 form-control-label">
                                                                        AIIMS Name :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <select id="ddlAiimsName" class="form-control"
                                                                            name="aiims_center_name">
                                                                            <option value="-1" selected disabled>[Choose
                                                                                One]</option>
                                                                            <option value="AIIMS BATHINDA">AIIMS
                                                                                BATHINDA</option>
                                                                            <option value="AIIMS BHOPAL">AIIMS BHOPAL
                                                                            </option>
                                                                            <option value="AIIMS BIBINAGAR">AIIMS
                                                                                BIBINAGAR</option>
                                                                            <option value="AIIMS BILASPUR">AIIMS
                                                                                BILASPUR</option>
                                                                            <option value="AIIMS DEOGHAR">AIIMS DEOGHAR
                                                                            </option>
                                                                            <option value="AIIMS GUWAHATI">AIIMS
                                                                                GUWAHATI</option>
                                                                            <option value="AIIMS JODHPUR">AIIMS JODHPUR
                                                                            </option>
                                                                            <option value="AIIMS KALYANI">AIIMS KALYANI
                                                                            </option>
                                                                            <option value="AIIMS MANGALAGIRI">AIIMS
                                                                                MANGALAGIRI</option>
                                                                            <option value="AIIMS NAGPUR">AIIMS NAGPUR
                                                                            </option>
                                                                            <option value="AIIMS PATNA">AIIMS PATNA
                                                                            </option>
                                                                            <option value="AIIMS RAE BARELI">AIIMS RAE
                                                                                BARELI</option>
                                                                            <option value="AIIMS RISHIKESH">AIIMS
                                                                                RISHIKESH</option>
                                                                            <option value="AIIMS VIJAYPUR">AIIMS
                                                                                VIJAYPUR</option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Are you a Ex-Service men?:
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstExSerMan_Yes"
                                                                        value="1"
                                                                        name="rbtnlstExSerMan"><span>Yes</span>
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstExSerMan_No"
                                                                        value="0" name="rbtnlstExSerMan"><span>No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="divExSerManDetails" style="display: none;">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr style="background-color: #EAE8E8;">
                                                                                <th class="b">
                                                                                    Service Provided in(Name of Armed
                                                                                    forces)
                                                                                </th>
                                                                                <th class="b">
                                                                                    Service Start Date
                                                                                </th>
                                                                                <th class="b">
                                                                                    Service End Date
                                                                                </th>
                                                                                <th class="b">
                                                                                    Length of Service (In Days)
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="text" id="txtServiceIn"
                                                                                        maxlength="50"
                                                                                        onkeypress="return isAlphaNumeric(event);"
                                                                                        name="name_of_armed_service">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="date"
                                                                                        id="txtSerStartDate"
                                                                                        maxlength="10"
                                                                                        class="form-control Certdatepicker hasDatepicker"
                                                                                        name="armed_service_start_date">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="date"
                                                                                        id="txtServEndDate"
                                                                                        maxlength="10"
                                                                                        class="form-control Certdatepicker hasDatepicker"
                                                                                        name="armed_service_end_date">
                                                                                </td>
                                                                                <th>
                                                                                    <span id="spnLenService"></span>
                                                                                </th>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row" id="divDefencePersonnel" style="">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Are you a Defence personnel disabled in operation during
                                                                hostilities ?:
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstDefenceDisabled_Yes"
                                                                        value="1"
                                                                        name="rbtnlstDefenceDisabled"><span>Yes</span>
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstDefenceDisabled_No"
                                                                        value="0"
                                                                        name="rbtnlstDefenceDisabled"><span>No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Are you Service Clerks in Armed Forces in the last
                                                                year?:
                                                            </label>
                                                            <div class="col-sm-8 gencheckBox">
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstSerInArmedForces_Yes"
                                                                        value="1"
                                                                        name="rbtnlstSerInArmedForces"><span>Yes</span>
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" id="rbtnlstSerInArmedForces_No"
                                                                        value="0"
                                                                        name="rbtnlstSerInArmedForces"><span>No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <span class="blue">(Fill in your date of birth as recorded in
                                                            Secondary School Leaving Certificate or equivalent
                                                            examination.
                                                            Date of Birth should be in 'dd/mm/yyyy' format.)</span>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-sm-4 form-control-label">
                                                                Date of Birth:
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="date" id="txtDOB"
                                                                    class="form-control datepicker hasDatepicker"
                                                                    name="dob">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <h3 class="fontDarkRed bgGrey pad4 marT10 b f13">Contact Details</h3>
                                            <div class="bor1pxSolid">
                                                <div class="form-group col-sm-12">
                                                    <span class="blue">(Your Email ID and Mobile Number will be used for
                                                        Communication and Notification through SMS and E-mail)</span>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sx-12 col-sm-6">
                                                        <label class="col-sm-5 form-control-label">
                                                            Email ID:
                                                        </label>
                                                        <div class="col-sm-7">
                                                            <input type="text" id="txtEmail" maxlength="50"
                                                                class="form-control" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-sx-12 col-sm-6">
                                                        <label class="col-sm-5 form-control-label">
                                                            Confirm Email ID:
                                                        </label>
                                                        <div class="col-sm-7">
                                                            <input type="text" id="txtCEmail" maxlength="50"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-5 form-control-label">
                                                            Mobile No.:
                                                            <span
                                                                style="float: right; margin-right: -27px; padding-top: 5px;">+91</span>
                                                        </label>
                                                        <div class="col-sm-7">
                                                            <input type="text" id="txtMobileNo" maxlength="10"
                                                                class="form-control"
                                                                onkeypress="return isNumberKeyOnly(event);"
                                                                name="mobile_no">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-5 form-control-label">
                                                            Confirm Mobile No.:
                                                            <span
                                                                style="float: right; margin-right: -27px; padding-top: 5px;">+91</span>
                                                        </label>
                                                        <div class="col-sm-7">
                                                            <input type="text" id="txtCMobileNo" maxlength="10"
                                                                class="form-control"
                                                                onkeypress="return isNumberKeyOnly(event);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <span class="blue">
                                                        Please enter your 10 digit mobile number only. Don't add "0" or
                                                        "+91"
                                                        before it. For Landline number please enter the "STD" code of
                                                        that
                                                        area.
                                                    </span>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label class="col-sm-5 form-control-label">
                                                            Alternate Number: #(Optional)
                                                        </label>
                                                        <div class="col-sm-7 gencheckBox">
                                                            <label class="checkbox-inline">
                                                                <input type="radio" id="rbtnlstAlternateNumber_Mobile"
                                                                    value="1" name="rbtnlstAlternateNumber">
                                                                <span>Mobile</span>
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" id="rbtnlstAlternateNumber_Landline"
                                                                    value="2" name="rbtnlstAlternateNumber">
                                                                <span>Landline</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div id="div_OtherMobileNo" style="">
                                                            <label class="col-sm-5 form-control-label">
                                                                Mobile No.:
                                                                <span
                                                                    style="float: right; margin-right: -27px; padding-top: 5px;">+91</span>
                                                            </label>
                                                            <div class="col-sm-7">
                                                                <input type="text" id="txtAlternateMobileNo"
                                                                    maxlength="10"
                                                                    onkeypress="return isNumberKeyOnly(event);"
                                                                    name="alternate_mobile_no">
                                                            </div>
                                                        </div>
                                                        <div id="div_OtherLandline" style="">
                                                            <label class="col-sm-5 form-control-label">
                                                                STD Code with No.:
                                                            </label>
                                                            <div class="col-sm-7">
                                                                <input type="text" id="txtSTDCode" style="width: 20%;"
                                                                    maxlength="6"
                                                                    onkeypress="return isNumberKeyOnly(event);">&nbsp;&nbsp;
                                                                <input type="text" id="txtLandlineNo" maxlength="10"
                                                                    onkeypress="return isNumberKeyOnly(event);"
                                                                    style="width: 70%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="bor1pxSolid" style="padding: 7px;">
                                                <div class="f11">
                                                    <div class="bgGrey pad4 marT15">
                                                        <span class="fontDarkRed b f13">DECLARATION :</span> <b
                                                            class="floatR">Kindly read the declaration carefully and
                                                            give
                                                            consent on it</b>
                                                    </div>
                                                    <label class="checkbox-inline" style="margin-top: 10px;">
                                                        <input type="checkbox" id="chkDecl">
                                                        <span style="font-size: 13px;">
                                                            I, hereby declare that the information filled in the form is
                                                            correct and true to best of my knowledge. I further declare
                                                            that
                                                            I understand and fullfill the eligibility condition for
                                                            Common
                                                            Recruitment Examination for AIIMS (CRE-AIIMS)(For Group B
                                                            &amp;
                                                            C Posts).
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="btnR" style="text-align: center; margin-top: 5px;">
                                                <!-- <input type="button" id="" type="submit" value="Register"
                                                    class="button"> -->
                                                <!-- <input type="button" id="btnSave_Old" value="Save &amp; Exit" -->
                                                <!-- class="button hide"> -->
                                                <input type="button" id="btnProceed" value="Update" class="button"
                                                    style="">
                                                <input type="button" type="submit" value="Register" id="finalSubmit"
                                                    class=" button">
                                            </div>
                            </form>
                            <script>
                                // frmMain submit when click on final submit button
                                $('#finalSubmit').click(function () {
                                    // show candidate_id before submit form
                                    var candidate_id = $('#candidate_id').val();
                                    jAlert('Kindly note your <span class="contentGreen b f18">Candidate ID : ' + candidate_id + ' </span>  <br /><br /> An Email & SMS has been sent to your Email ID and Mobile No. with login credentials which are required at the time of login. <br /><br />Your first step of application is completed, Your application is still incomplete, complete Due Steps before Registration closing date.<br /><br />Note: If you have not received E-mail in Inbox, kindly check mail in SPAM folder.', 'Message', function (r) {
                                        if (r == true) {
                                            $('#frmMain').submit();
                                        }

                                    });

                                });
                            </script>
                        </div>
                    </div>
                    <div class="modal fade" id="divAfterRegistration" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="width: 701px;">
                                <div class="">
                                    <div
                                        style="width: 700px; margin: auto; border: 1px solid #ccc; padding: 5px 14px 14px 14px;">
                                        <p>
                                            <strong>Dear Candidate,</strong><br>
                                            <br>
                                            You have completed the&nbsp;<strong>1st
                                                Step</strong><strong>&nbsp;</strong>of Registration process
                                            for AIIMS-Recruitment to the Posts of(Group - A (Non Faculty),
                                            Group - B &amp; Group - C &amp; Group B) - 2018 Examination. You
                                            are now required to proceed with further steps of Registration
                                            in order to successfully register yourself for the
                                            AIIMS-Recruitment to various Posts (Group - A (Non Faculty),
                                            Group - B &amp; Group - C) - 2023 Examination.&nbsp;<br>
                                            <br>
                                            Kindly read Advertisement/Instructions carefully, specifically
                                            the instructions related to choice of city for entrance
                                            examination and the&nbsp;<a href="/Home/UploadImages"
                                                target="_blank">procedure of preparing images of
                                                Photograph/Signature/Thumb Impression&nbsp;</a>.&nbsp;<br>
                                            <br>
                                            <strong>Complete following steps before closing date(22th
                                                September, 5.00,2019):</strong><br>
                                            <br>
                                            Step 2: Qualification and Address Details<br>
                                            Step 3: Experience Details<br>
                                            Step 4: Make Payment&nbsp;<br>
                                            Step 5: City Choice<br>
                                            Step 6: Upload Images<br>
                                            Step 7: Print Registration Form.
                                        </p>
                                        <p>Kindly visit &nbsp;<a href="https://aiimsexams.ac.in/"
                                                target="_blank">https://aiimsexams.ac.in</a> &nbsp; and
                                            login to Recruitment to the posts of(Group - A (Non Faculty),
                                            Group - B &amp; Group - C) - 2019 using your Candidate ID &amp;
                                            Password to complete Application, before Application closing
                                            date. </p>
                                        <p style="text-align: center; margin-top: 10px;">
                                            <input type="button" value="Proceed" id="btnPopUpProceed"
                                                style="background: #3d8bcc; color: #fff; border: none; padding: 5px 10px; border-radius: 5px; font-weight: bold; font-size: 13px; cursor: pointer;">
                                        </p>
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
    </div>
    </div>
    <footer>
        <div class="container">
            <center class="f11">
                Copyright @ All India Institute of Medical Sciences, New Delhi. All rights Reserved.
            </center>
        </div>
    </footer>
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
    </div>
</body>