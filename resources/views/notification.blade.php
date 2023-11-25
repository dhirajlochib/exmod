<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript">
        var currentControllerName = 'Home';
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
    <title>Notification</title>

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

<body onload="preventBack();" onpageshow="if (event.persisted) preventBack();" onunload=""
    oncontextmenu="return false;">

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
                                <li><a href="{{route('welcome')}}" class="clsLink">Home</a></li>
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


                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $("#status").hide();

                                            //var foo = getParameterByName('Q');
                                            //$("#hdnIscourseType").val(foo);
                                            //document.getElementById(foo).style.display = "block";

                                            //document.getElementById("myHref").onclick = function() { window.location.href };
                                        });

                                        //var urlink = window.location.href;

                                        //function show(link) {
                                        //    return link;
                                        //}

                                        //show(urlink);

                                        function getParameterByName(name, url) {
                                            if (!url) url = window.location.href;
                                            name = name.replace(/[\[\]]/g, '\\$&');
                                            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                                                results = regex.exec(url);
                                            if (!results) return null;
                                            if (!results[2]) return '';
                                            return (results[2].replace(/\+/g, ' '));
                                        }

                                    </script>

                                    <style>
                                        ul.noticeLink {
                                            line-height: 22px;
                                            font-weight: bold;
                                        }

                                        ul.noticeLink li {
                                            font-weight: bold;
                                        }

                                        .noticeSection {
                                            display: none;
                                        }
                                    </style>

                                    <div class="innerSection">
                                        <h3>Notification</h3>


                                        <table class="table table-bordered" style="font-weight:bold">
                                            <tr style="text-align:center; background:#e6e6e6">
                                                <th>Date of Uploading</th>
                                                <th>
                                                    Notification
                                                </th>
                                                <th>View/Download</th>
                                            </tr>
                                            <tr>
                                                <td>24/11/2023</td>
                                                <td>
                                                    Addendum regarding Group Post Code No.69 in Annexure-II of
                                                    Advertisement Notice No.239/2023 for CRE-AIIMS
                                                </td>
                                                <td style="text-align:center">
                                                    <a href="../sites/Addendum%20No.45.pdf" target="_blank">
                                                        <img src="{{asset('img/pdfIcon.png')}}" style="height:25px">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18/11/2023</td>
                                                <td>
                                                    Corrigendum regarding vacancy position of Hostel Warden/Junior
                                                    Warden(House Keeper)/Warden(Hostel) for CRE-AIIMS
                                                </td>
                                                <td style="text-align:center">
                                                    <a href="../sites/Corrigendum%20No%2042.pdf" target="_blank">
                                                        <img src="{{asset('img/pdfIcon.png')}}" style="height:25px">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18/11/2023</td>
                                                <td>
                                                    Common Recruitment Examination for AIIMS (CRE-AIIMS) for Recruitment
                                                    to the various Group B & C posts
                                                </td>
                                                <td style="text-align:center">
                                                    <a href="../sites/advertisement%20CRE-AIIMS%202023.pdf"
                                                        target="_blank">
                                                        <img src="{{asset('img/pdfIcon.png')}}" style="height:25px">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20/11/2023</td>
                                                <td>
                                                    Corrigendum regarding clause for Central Govt. Employee in
                                                    advertisement for CRE-AIIMS
                                                </td>
                                                <td style="text-align:center">
                                                    <a href="../sites/Corrigendum%20No%2044.pdf" target="_blank">
                                                        <img src="{{asset('img/pdfIcon.png')}}" style="height:25px">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20/11/2023</td>
                                                <td>
                                                    Addendum regarding vacancy position of Store Keeper - cum- clerk at
                                                    AIIMS Rishikesh for CRE-AIIMS
                                                </td>
                                                <td style="text-align:center">
                                                    <a href="../sites/Corrigendum%20No%2043.pdf" target="_blank">
                                                        <img src="{{asset('img/pdfIcon.png')}}" style="height:25px">
                                                    </a>
                                                </td>
                                            </tr>

                                        </table>

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