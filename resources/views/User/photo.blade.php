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

                                    <script type="text/javascript" src="/Scripts/jquery.form.js?.V1.0"></script>
                                    <script type="text/javascript" src="/Scripts/jquery.blockui.js?.V1.0"></script>
                                    <script type="text/javascript" src="/Scripts/dv/uploadimages.js?.V1.0"></script>
                                    <style>
                                        #uldPhoto {
                                            margin-bottom: 10px;
                                        }

                                        #Div2 {
                                            margin-bottom: 10px;
                                            font-size: 11px;
                                        }

                                        #Div3 {
                                            margin-bottom: 10px;
                                            text-align: center;
                                        }

                                        .text-center,
                                        .form-group {}
                                    </style>
                                    <div class="mar10">
                                        <input type="hidden" id="IsPWBD" value="True">
                                        <input type="hidden" id="IsPhoto" value="0">
                                        <input type="hidden" id="IsSign" value="0">
                                        <input type="hidden" id="IsThumb" value="0">
                                        <input type="hidden" id="IsPWBDCertificate" value="0">
                                        <input type="hidden" id="RStatus" value="0">
                                        <input type="hidden" id="hdnIsReOpen" value="0">
                                        <div id="pnlUpload">
                                            <h2 class="fontDarkRed lightBlue pad4 marT10 b f16">
                                                <span id="">Upload Photo</span>
                                                <span class="pageSubTitle right f14"
                                                    style="font-weight: bold; color: #FFED00; padding-top: 0px;">Photograph
                                                    once uploaded cannot be changed, unless rejected by
                                                    AIIMS.&nbsp;&nbsp;</span>
                                            </h2>
                                            <div class="bor1pxSolid">
                                                <form action="/UploadImages/UploadPhoto" enctype="multipart/form-data"
                                                    id="uploadPhotoForm" method="post" novalidate="novalidate">
                                                    <div id="pnlPhoto">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-sm-3 form-group text-center">
                                                                    <div id="uldPhoto" class="clearfix center">
                                                                        <img id="imgStudPhoto" class="clsPhoto"
                                                                            alt="Photograph" src="/Images/noPhoto.jpg">

                                                                    </div>
                                                                    <strong>For Preview click on Image</strong>
                                                                </div>
                                                                <div class="col-sm-6 form-group">
                                                                    <input type="file" id="filePhoto" name="filePhoto"
                                                                        onchange="fnShowImagePreview(this, '#imgStudPhoto');">

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkPhotoSave1">
                                                                        Background colour of photograph is white.
                                                                    </label>

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkPhotoSave2">
                                                                        Photograph is not blurred.
                                                                    </label>

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkPhotoSave3">
                                                                        Photograph size is as per instructions.
                                                                    </label>

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkPhotoSave4">
                                                                        This Photograph is mine.
                                                                    </label>
                                                                    <div class="marT10">
                                                                        <input type="submit" id="btnPhotoSave"
                                                                            value="Accept" class="button">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 form-group">
                                                                    <div id="PicSampleDv" class="clear center">
                                                                        <img id="PicSampleimg" alt="Uploaded photo"
                                                                            src="/Images/dummy-photo.png">
                                                                        <p style="font-weight: bold;">
                                                                            Sample Image
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-sm-12 form-group">
                                                            <p class="f11 fontDGrey pad4">
                                                                <strong>Instruction for photo upload:</strong><br>
                                                                <br>
                                                                1. Photograph must be a passport size colour photograph
                                                                without border and clearly showing the face.<br>
                                                                2. Photograph must be a recently clicked or should not
                                                                be more than 6 months old. The dimension of photograph
                                                                must be 3.5*4.5 cm (width*height).<br>
                                                                3. Photograph must be clicked in colour with white
                                                                background only.
                                                                <br>
                                                                4. Draw a box of 3.5*4.5 cm (width*height) on A4 white
                                                                paper sheet and paste the photo in the box.<br>
                                                                5. Scan the box with photograph pasted in it, not the
                                                                whole paper sheet. Save the image as
                                                                .jpg/.jpeg/.gif/.png image<br>
                                                                6. The size of image should be between 50-100 kb. Size
                                                                of the image can be checked by right click on the image
                                                                and then go to “Properties” link.<br>
                                                                7. If the size of the image is more than 100 kb, then
                                                                adjust the settings of scanner such as set the dpi of
                                                                the scanner to 200 dpi and quality of image at low. If
                                                                image size is still more than 100 kb then resize the
                                                                image to the given specifications.<br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h2 class="fontDarkRed lightBlue pad4 marT10 b f16">
                                                <span id="">Upload Signature</span>
                                                <span class="pageSubTitle right f14"
                                                    style="font-weight: bold; color: #FFED00; padding-top: 0px;">Signature
                                                    once uploaded cannot be changed, unless rejected by
                                                    AIIMS.&nbsp;&nbsp;</span>
                                            </h2>
                                            <div class="bor1pxSolid">
                                                <form action="/UploadImages/UploadSign" enctype="multipart/form-data"
                                                    id="uploadSignForm" method="post" novalidate="novalidate">
                                                    <div id="pnlSignature">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-sm-3 form-group">
                                                                    <div id="Div2" class="clear center">
                                                                        <img id="imgStudSign" alt="signature"
                                                                            class="clsSign" src="/Images/noSign.jpg">
                                                                    </div>
                                                                    <strong>For Preview click on Image</strong>
                                                                </div>
                                                                <div class="col-sm-6 form-group">
                                                                    <input type="file" id="fileSign" name="fileSign"
                                                                        class=""
                                                                        onchange="fnShowImagePreview(this, '#imgStudSign');">
                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkSign1">
                                                                        Background colour of signature is white.
                                                                    </label>

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkSign2">
                                                                        Signature is not blurred.
                                                                    </label>

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkSign3">
                                                                        Signature size is as per instructions.
                                                                    </label>

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkSign4">
                                                                        This Signature is mine.
                                                                    </label>
                                                                    <div class="marT10">
                                                                        <input type="submit" id="btnSign" value="Accept"
                                                                            class="button">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 form-group">
                                                                    <div id="SignSampleDv" class="clear center">
                                                                        <img id="SignSampleImg" class=""
                                                                            src="/Images/dummy-signature.png"
                                                                            alt="Uploaded photo">
                                                                        <p style="font-weight: bold;">
                                                                            Sample Signature
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-sm-12 form-group">
                                                            <p class="f11 fontDGrey pad4">
                                                                <strong>Instruction for Signature upload:</strong><br>
                                                                <br>
                                                                1. Draw a box of 6*3 cm (width*height) on a white paper
                                                                sheet.<br>
                                                                2. Take a thick tip black/blue ink pen (preferably
                                                                fountain pen).
                                                                <br>
                                                                3. The applicant has to put his/her signature in full in
                                                                the box drawn.
                                                                <br>
                                                                4. Following king of signatures are NOT acceptable:<br>

                                                            </p>
                                                            <ul class="f11 fontDGrey">
                                                                <li>Signature containing Initials only</li>
                                                                <li>Signature in CAPITAL LETTERS</li>
                                                                <li>Signature with overwriting</li>
                                                            </ul>
                                                            <p class="f11 fontDGrey pad4">
                                                                5. Signature must be signed by the applicant, not by any
                                                                other person.Signature should be done in the center of
                                                                the box.<br>
                                                                6. Scan the box with signature only, not the whole
                                                                sheet. Save the signature as .jpg/.jpeg/.gif/.png image.
                                                                <br>
                                                                7. The size of image should be between 20-100 kb. Size
                                                                of the image can be checked by right click on the image
                                                                and then go to “Properties” link.<br>
                                                                8. If the size of the image is more than 100 kb, then
                                                                adjust the settings of scanner such as set the dpi of
                                                                the scanner to 200 dpi and quality of image at low. If
                                                                image size is still more than 50 kb then resize the
                                                                image to the given specifications.
                                                                <br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h2 class="fontDarkRed lightBlue pad4 marT10 b f16">
                                                <span id="">Upload Left Thumb Impression</span>
                                                <span class="pageSubTitle right f14"
                                                    style="font-weight: bold; color: #FFED00; padding-top: 0px;">Left
                                                    Thumb Impression once uploaded cannot be changed, unless rejected by
                                                    AIIMS.&nbsp;&nbsp;</span>
                                            </h2>
                                            <div class="bor1pxSolid">
                                                <form action="/UploadImages/UploadThumb" enctype="multipart/form-data"
                                                    id="uploadThumbForm" method="post" novalidate="novalidate">
                                                    <div id="pnlThumbImpression">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-sm-3 form-group">
                                                                    <div id="Div3" class="clear center">
                                                                        <img id="imgThumbImpression"
                                                                            alt="Thumb Impression" class="clsThumb"
                                                                            src="/Images/noImpression.jpg">
                                                                    </div>
                                                                    <strong>For Preview click on Image</strong>
                                                                </div>
                                                                <div class="col-sm-6 form-group">
                                                                    <input type="file" id="fileThumb" name="fileThumb"
                                                                        class=""
                                                                        onchange="fnShowImagePreview(this, '#imgThumbImpression')">
                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkThumb1">
                                                                        Background colour of Thumb Impression is white.
                                                                    </label>

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkThumb2">
                                                                        Thumb Impression is not blurred and lines are
                                                                        clearly visible.
                                                                    </label>

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkThumb3">
                                                                        Thumb Impression size is as per instructions.
                                                                    </label>

                                                                    <label class="checkbox padL20">
                                                                        <input type="checkbox" id="ChkThumb4">
                                                                        This Thumb Impression is mine.
                                                                    </label>
                                                                    <div class="marT10">
                                                                        <input type="submit" id="btnThumb"
                                                                            value="Accept" class="button">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 form-group">

                                                                    <div id="TmbImpSampleDv" class="clear center">
                                                                        <img id="TmbImpSampleImg" class=""
                                                                            alt="Uploaded photo"
                                                                            src="/Images/dummy-thumb.png">
                                                                        <p style="font-weight: bold;">
                                                                            Sample Thumb Impression
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-sm-12 form-group">
                                                            <p class="f11 fontDGrey marT20 pad4">
                                                                <strong>Instruction for Thump Print upload:</strong><br>
                                                                <br>
                                                                1. Draw a box of 4*3 cm (width*height) on a white paper
                                                                sheet.<br>
                                                                2. Put your left thumb on a blue/black ink pad. Ink
                                                                should have covered your entire thumb.<br>
                                                                3. Put your left thumb print in the box drawn on paper
                                                                sheet. Do not press thumb too hard.<br>
                                                                4. Thumb print should be clear such that the lines of
                                                                thumb can be clearly seen by naked eyes.<br>
                                                                5. Scan the box with thumb print only, not the whole
                                                                sheet. Save the thump print as.jpg/.jpeg/.gif/.png
                                                                image.<br>
                                                                6. The size of image should be between 20-100 kb. Size
                                                                of the image can be checked by right click on the image
                                                                and then go to “Properties” link.<br>
                                                                7. If the size of the image is more than 100 kb, then
                                                                adjust the settings of scanner such as set the dpi of
                                                                the scanner to 200 dpi and quality of image at low. If
                                                                image size is still more than 50 kb then resize the
                                                                image to the given specifications.<br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="divPwbdCertificateUpload" style="">
                                                <h2 class="fontDarkRed lightBlue pad4 marT10 b f16">
                                                    <span id="">Upload Persons With Benchmark Disablity(PWBD)
                                                        Certificate &amp; Appendix A-1 &amp; Appendix A-2 &amp; Appendix
                                                        A-3</span>
                                                </h2>
                                                <div class="bor1pxSolid">
                                                    <form action="/UploadImages/UploadPWBDCertificate"
                                                        enctype="multipart/form-data" id="uploadPWBDCertificateForm"
                                                        method="post" novalidate="novalidate">
                                                        <div id="pnlPWBDCertificate">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div>
                                                                        <label id="ImageName"
                                                                            style="color: red; font-size: 17px; padding-left: 30px;"></label>
                                                                    </div>
                                                                    <div class="col-sm-12 form-group text-center">
                                                                        <input type="file" id="filePWBDCertificate"
                                                                            name="filePWBDCertificate" class=""
                                                                            onchange="fnShowImagePreview(this, '#imgThumbImpression')"
                                                                            style="display: inline">
                                                                        <div class="marT10">
                                                                            <input type="submit" required=""
                                                                                accept=".pdf" id="btnPWBDCertificate"
                                                                                value="Accept" class="button"
                                                                                aria-required="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3 form-group hide">

                                                                        <div id="TmbImpSampleD" class="clear center">
                                                                            <img id="TmbImpSampleIm" class=""
                                                                                alt="Uploaded photo"
                                                                                src="/Images/dummy-thumb.png">
                                                                            <p style="font-weight: bold;">
                                                                                Sample Thumb Impression
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-sm-12 form-group">
                                                                <p class="marT20 pad4"
                                                                    style="color: red; font-size: 17px;">
                                                                    Note*- Please upload certificate in .pdf format
                                                                    between (100 to 500 KB)<br>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="checkbox-inline" id="dvDECLARATION" style="display: none;">
                                            <input type="checkbox" id="chkDECLARATION">
                                            <span class="f12 lineH18">
                                                <b>DECLARATION:</b> I hereby declare that the information
                                                furnished by me in the Registration/Application Form is correct and
                                                nothing has
                                                been concealed. In case any information furnished by me is found to be
                                                false/incorrect/untrue
                                                then i shall be liable to civil/criminal prosecution and my claim to
                                                admission/appointment/registration/
                                                service in the Institute may be cancelled/terminated.
                                            </span>
                                        </label>

                                        <div class="btnR" style="text-align: center; margin-top: 5px;" id="dvButtons">
                                            <input type="button" id="imgbtn1" value="Save &amp; Exit"
                                                tooltip="Need changes, I want to edit my Registration details. !!"
                                                class="button hide">
                                            <input type="button" id="imgbtn2" value="Proceed for Step 7"
                                                tooltip="Confirm, Save &amp; Proceed !!" class="button">
                                        </div>
                                        <div class="btnR" style="text-align: center; margin-top: 5px; display: none;"
                                            id="dvProceed">
                                            <input type="button" id="btnProceed" value=" Proceed to Step 7 "
                                                class="button">
                                        </div>

                                        <div class="zoomPic">
                                            <div class="imgWrap">
                                                <div class="posRel">
                                                    <div id="close" style="cursor: pointer;">
                                                    </div>
                                                    <div id="divLargeImage" style="display: none;">
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


    </div>
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
    </div>
</body>

</html>