<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><style lang="en" type="text/css" id="dark-mode-native-sheet"></style><head>
        <script type="text/javascript">
            var currentControllerName = 'FeePayment';
            var appPath = '';
            var isPannelClosed = 'False';

            window.history.forward();
            function preventBack() { window.history.forward(1); }
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
    <title>Fee Payment</title>

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
                    <tbody><tr>
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
                </tbody></table>
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

    .panel-default > .panel-heading {
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

        .panel-body ul {
        }

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

    .panel-title {
    }

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
        $(document).ready(function () {
            fnGetApplicantById1();

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
                                                <a class="liLink" id="a2" href="Qualification?id=KLeYLVfolBAlX08Qxr30F28XEq9hTkCEDKpGYSNJVSGlIUxjfySL">
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
                                                <a class="liLink" id="a3" href="Experience?id=KLeYLVfolBAlX08Qxr30F28XEq9hTkCEDKpGYSNJVSGlIUxjfySL">
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
                                
<input type="hidden" id="hdnSId" value="0">
<script type="text/javascript" src="/Scripts/dv/feepayment.js?.V1.0"></script>
<div class="mar10" id="dvPersonalDetails" style="display: block;">
    <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">Candidate Details</h3>
    <div class="bor1pxSolid">
        <div class="container-fluid">
            <table class="table table-bordered text-center">
                <tbody><tr class="bg-info">
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Candidate ID</th>
                    <th style="text-align: center">Amount</th>
                    <th class="hide">Payment Status</th>
                    <th style="text-align: center">Proceed for Payment</th>
                </tr>
                <tr>
                    <td>
                        <label id="lblName">SUNIL</label>
                    </td>
                    <td>
                        <label id="lblApplicationNo">9371040876</label>
                    </td>
                    <td>
                        <label id="lblAmount">3000</label>
                    </td>
                    <td class="hide">
                        <label id="lblPaymentStatus">Pending</label>
                    </td>
                    <td>
                        <input type="hidden" id="hdnRepayment" value="0">
                        <input type="hidden" id="hdnFeeAmount" value="3000">
                        <a href="javascript:void(0)" id="aPayment" class="btn">
                            <img src="https://www.onlinesbi.com/sbijava/images/sbi_logo.gif" style="height: 40px;" alt="Online Payment"></a>
                        <a href="javascript:void(0)" id="aPaymentPayGov" class="btn marL5">
                            <img src="http://2.bp.blogspot.com/-en51g18uOjY/VewTDPn4O9I/AAAAAAAACQE/OJA2LFWJdF0/s1600/paygov.JPG" style="height: 49px; width: 104px;" alt="Online Payment"></a>
                    </td>
                </tr>
            </tbody></table>
        </div>
    </div>
    <div class="bor1pxSolid hide" id="dvChoiceStatus">
        <div style="padding:0px 10px;">
                <div class="alert alert-danger">
                    <strong>Note:</strong>  This is only indicative seat availability. The number of available seats may change in the time when payment is made. <img src="http://www.animatedimages.org/data/media/111/animated-arrow-image-0311.gif">
                </div>
            </div>
        <div class="row">
            
            <div class="col-sm-12 marL10">
                <input type="hidden" id="hdnAppliedPostId" value="0">
                Check City Choice Status  : <a href="javascript:void(0)" id="aCityChoice" class="btn">Click here</a>
            </div>
        </div>
    </div>

    <div style="clear: both;"></div>
    <div id="myModal" class="modal fade res-modal" style="margin-top: 4.5%; display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="javascript:void(0);" title="Close" class="close" id="close">X</a>
                <h3 class="modal-title">City Choice</h3>
            </div>
            <div class="modal-body">
                <div class="bor1pxSolid table-responsive">
                    <div class="container-fluid">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 form-control-label b f14">
                                    Select State:
                                </div>
                                <div class="col-sm-6">
                                    <select id="ddlState" class="form-control"></select>
                                </div>
                            </div>
                        </div>
                        <div class="marT10"></div>
                        <div id="dvCentre" class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<div class="mar10" id="dvPaymentDetails" style="display: none;">
    <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">Payment Details</h3>
    <div class="bor1pxSolid">
        <div class="row">
            <div class="col-sm-12">
                <div class="form printForm table-responsive">
                    <table class="table">
                        <tbody><tr class="alert alert-info headerprint">
                            <td align="center">
                                <img src="Images/pay-slip-logoSml.png">
                            </td>
                            <td align="center" colspan="4" style="padding-top: 27px;" class="">
                                <span class="contentBlue b" style="font-size: 17px">ALL INDIA INSTITUTE OF MEDICAL SCIENCES</span><br>
                                <span class="font20 b" style="font-size: 15px">Ansari Nagar, New Delhi - 110608</span><br>
                            </td>
                        </tr>
                        <tr class="alert alert-danger paymentprint">
                            <td align="center" colspan="4">
                                <span style="font-weight: bold; font-size: 16px;">Payment Receipt - <b>Common Recruitment Examination for AIIMS (CRE-AIIMS) for post of (<label style="font-weight: bold; font-size: 16px;" id="lblPostName"></label>)</b></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Candidate ID:</th>
                            <td>
                                <label id="lblPApplicationNo"></label>
                            </td>
                            <th style="width: 20%">Registration No:
                            </th>
                            <td style="width: 50%">
                                <label id="lblPRegistrationNo"></label>
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 18%">Candidate Name:
                            </th>
                            <td style="width: 32%">
                                <label id="lblStudName"></label>
                            </td>
                            <th>Category:
                            </th>
                            <td>
                                <label id="lblCategory"></label>
                            </td>
                        </tr>
                        <tr>
                            <th>Date of Birth:
                            </th>
                            <td>
                                <label id="lblDOB"></label>
                            </td>
                            <th>Persons with benchmark disability Status:
                            </th>
                            <td>
                                <label id="lblOPH"></label>
                            </td>
                        </tr>
                        <tr>
                            <th>Gender:
                            </th>
                            <td>
                                <label id="lblGender"></label>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="alert alert-danger paymentprint">
                            <td align="center" colspan="4">
                                <span style="font-weight: bold; font-size: 16px;">Amount: Rs.
                                     <label id="lblPAmount"></label>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Mode of Payment:
                            </th>
                            <td>
                                <label id="lblPayMode"></label>
                            </td>
                            <th>Date:
                            </th>
                            <td>
                                <label id="lblPayDate"></label>
                            </td>
                        </tr>
                        <tr>
                            <th>Transaction ID:
                            </th>
                            <td>
                                <label id="lblTransactionID"></label>
                            </td>
                            <th>Status:
                            </th>
                            <td>
                                <label id="lblFeeStatus"></label>
                            </td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
    </div>
    <div class="marT10 btnR hideOnPrint" style="text-align: center;">
        <input type="button" id="btnPrintPayment" value=" Print " class="button hideOnPrint">
            <input type="button" id="btnProceed" value=" Proceed to Step 5 " class="button hideOnPrint">
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


</body></html>