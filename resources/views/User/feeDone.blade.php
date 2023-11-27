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
                                    <!-- <script type="text/javascript"
                                            src="{{asset('js/dv/feepayment.js?.V1.0')}}"></script> -->
                                    <div class="mar10" id="dvPersonalDetails" style="display: none;">
                                        <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">Candidate Details</h3>
                                        <div class="bor1pxSolid">
                                            <div class="container-fluid">
                                                <table class="table table-bordered text-center">
                                                    <tbody>
                                                        <tr class="bg-info">
                                                            <th style="text-align: center">Name</th>
                                                            <th style="text-align: center">Candidate ID</th>
                                                            <th style="text-align: center">Amount</th>
                                                            <th class="hide">Payment Status</th>
                                                            <th style="text-align: center">Proceed for Payment</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label id="lblName"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblApplicationNo"></label>
                                                            </td>
                                                            <td>
                                                                <label id="lblAmount"></label>
                                                            </td>
                                                            <td class="hide">
                                                                <label id="lblPaymentStatus"></label>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" id="hdnRepayment" value="0">
                                                                <input type="hidden" id="hdnFeeAmount" value="0">
                                                                <a href="javascript:void(0)" id="aPayment" class="btn">
                                                                    <img src="https://www.onlinesbi.com/sbijava/images/sbi_logo.gif"
                                                                        style="height: 40px;" alt="Online Payment"></a>
                                                                <a href="javascript:void(0)" id="aPaymentPayGov"
                                                                    class="btn marL5">
                                                                    <img src="http://2.bp.blogspot.com/-en51g18uOjY/VewTDPn4O9I/AAAAAAAACQE/OJA2LFWJdF0/s1600/paygov.JPG"
                                                                        style="height: 49px; width: 104px;"
                                                                        alt="Online Payment"></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="bor1pxSolid hide" id="dvChoiceStatus">
                                            <div style="padding:0px 10px;">
                                                <div class="alert alert-danger">
                                                    <strong>Note:</strong> This is only indicative seat availability.
                                                    The number of available seats may change in the time when payment is
                                                    made. <img
                                                        src="http://www.animatedimages.org/data/media/111/animated-arrow-image-0311.gif">
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-sm-12 marL10">
                                                    <input type="hidden" id="hdnAppliedPostId" value="0">
                                                    Check City Choice Status : <a href="javascript:void(0)"
                                                        id="aCityChoice" class="btn">Click here</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="clear: both;"></div>
                                        <div id="myModal" class="modal fade res-modal"
                                            style="margin-top: 4.5%; display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <a href="javascript:void(0);" title="Close" class="close"
                                                            id="close">X</a>
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
                                                                            <select id="ddlState"
                                                                                class="form-control"></select>
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

                                    <div class="mar10" id="dvPaymentDetails" style="display: block;">
                                        <h3 class="fontDarkRed bgGrey pad10 marT10 b f13">Payment Details</h3>
                                        <div class="bor1pxSolid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form printForm table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr class="alert alert-info headerprint">
                                                                    <td align="center">
                                                                        <img
                                                                            src="{{asset('img/pay-slip-logoSml.png')}}">
                                                                    </td>
                                                                    <td align="center" colspan="4"
                                                                        style="padding-top: 27px;" class="">
                                                                        <span class="contentBlue b"
                                                                            style="font-size: 17px">ALL INDIA INSTITUTE
                                                                            OF MEDICAL SCIENCES</span><br>
                                                                        <span class="font20 b"
                                                                            style="font-size: 15px">Ansari Nagar, New
                                                                            Delhi - 110608</span><br>
                                                                    </td>
                                                                </tr>
                                                                <tr class="alert alert-danger paymentprint">
                                                                    <td align="center" colspan="4">
                                                                        <span
                                                                            style="font-weight: bold; font-size: 16px;">Payment
                                                                            Receipt - <b>Common Recruitment Examination
                                                                                for AIIMS (CRE-AIIMS) for post of
                                                                                (<label
                                                                                    style="font-weight: bold; font-size: 16px;"
                                                                                    id="lblPostName">{{Auth::user()->userDetail()->post_name
                                                                                    ?? ''}}</label>)</b></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Candidate ID:</th>
                                                                    <td>
                                                                        <label
                                                                            id="lblPApplicationNo">{{Auth::user()->candidate_id}}</label>
                                                                    </td>
                                                                    <th style="width: 20%">Registration No:
                                                                    </th>
                                                                    <td style="width: 50%">
                                                                        <label id="lblPRegistrationNo">
                                                                            <?php echo Auth::user()->registration_no ?? '' ?>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 18%">Candidate Name:
                                                                    </th>
                                                                    <td style="width: 32%">
                                                                        <label
                                                                            id="lblStudName">{{Auth::user()->name}}</label>
                                                                    </td>
                                                                    <th>Category:
                                                                    </th>
                                                                    <td>
                                                                        <label
                                                                            id="lblCategory">{{Auth::user()->userDetail()->rbtnlstCategory1
                                                                            ?? ''}}</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Date of Birth:
                                                                    </th>
                                                                    <td>
                                                                        <label
                                                                            id="lblDOB">{{Auth::user()->userDetail()->dob
                                                                            ?? ''}}</label>
                                                                    </td>
                                                                    <th>Persons with benchmark disability Status:
                                                                    </th>
                                                                    <td>
                                                                        <label
                                                                            id="lblOPH">{{Auth::user()->userDetail()->rbtnlstPWD
                                                                            ==
                                                                            'Yes' ? 'Yes' : 'No'
                                                                            ?? ''}}</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Gender:
                                                                    </th>
                                                                    <td>
                                                                        <label id="lblGender">Male</label>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr class="alert alert-danger paymentprint">
                                                                    <td align="center" colspan="4">
                                                                        <span
                                                                            style="font-weight: bold; font-size: 16px;">Amount:
                                                                            Rs.
                                                                            <label
                                                                                id="lblPAmount">{{Auth::user()->fee_amount
                                                                                ?? ''}}</label></span>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Mode of Payment:
                                                                    </th>
                                                                    <td>
                                                                        <label id="lblPayMode">Online</label>
                                                                    </td>
                                                                    <th>Date:
                                                                    </th>
                                                                    <td>
                                                                        <label
                                                                            id="lblPayDate">{{Auth::user()->payment_date
                                                                            ?? ''}}</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Transaction ID:
                                                                    </th>
                                                                    <td>
                                                                        <label
                                                                            id="lblTransactionID">{{Auth::user()->tx_id
                                                                            ?? ''}}</label>
                                                                    </td>
                                                                    <th>Status:
                                                                    </th>
                                                                    <td>
                                                                        <label id="lblFeeStatus">Completed</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="marT10 btnR hideOnPrint" style="text-align: center;">
                                            <input type="button" id="btnPrintPayment" value=" Print "
                                                class="button hideOnPrint">
                                            <a type="button" id="btnProceed" value=" Proceed to Step 5 "
                                                href="{{route('user.centerChoiceNew')}}" class="button hideOnPrint">
                                                Proceed to Step 5
                                            </a>
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
        <!-- print doc only payment done area -->
        <script type="text/javascript">

            $(document).ready(function () {
                $("#btnPrintPayment").click(function () {
                    var printContents = document.getElementById("dvPaymentDetails").innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    // remove print button and submit button
                    $("#btnPrintPayment").remove();
                    $("#btnProceed").remove();
                    window.print();
                    document.body.innerHTML = originalContents;
                });
            });
        </script>

    </div>
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
    </div>
</body>

</html>