var sortColumn = "", sortBy = "", pageIndex = 0, pageSize = 0;
jQuery(function ($) {
    $.ajaxSetup({
        cache: false,
        global: true,
        headers: { 'x-studentId': $('#hdnCurrentStudentId').val() },
        complete: function (xhr, err) {
            CheckJQueryResponse(xhr, err);
        }
    });

    $("body").transit();

    $(document).on('click', ".clsLink", function () {
        $.when($.ajax(appPath + "/Registration/ValidateSession")).then(function (result) {
            //if (href != "")
            //    go(href); 
            //else
            //    go("Logout");
        });
    });

});

/* --------- Utility Function to show business days only ----------- */
/* create an array of days which need to be disabled */
/*Format must be ["12-21-2012","2-24-2013"]*/
var disabledDays = [];

function nationalDays(date) {
    var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
    if (disabledDays.length > 0 && $.inArray((m + 1) + '-' + d + '-' + y, disabledDays) != -1) {
        return [false];
    }
    return [true];
}
function noWeekendsOrHolidays(date) {
    var noWeekend = jQuery.datepicker.noWeekends(date);
    return noWeekend[0] ? nationalDays(date) : noWeekend[0];
}
//Date Picker
function DatePicker(disableHolidays, maxCurrent, minCurrent) {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();
    $(".datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: new Date(1970, 1 - 1, 1)
    }).blur(function () {
        if ($(this).val() != '') {
            try {
                var pDate = jQuery.datepicker.parseDate('mm/dd/yy', $(this).val());
                $(this).val($.datepicker.formatDate("mm/dd/yy", pDate));
                if (maxCurrent && new Date($(this).val()) > new Date(currentYear, currentMonth, currentDate)) { jAlert('Please enter valid Date.'); $(this).val(''); }
                if (minCurrent && new Date($(this).val()) < new Date(currentYear, currentMonth, currentDate)) { jAlert('Please enter valid Date.'); $(this).val(''); }
                if (pDate < new Date(1970, 1 - 1, 1)) { jAlert('Please enter valid Date.'); $(this).val(''); }
            }
            catch (error) { jAlert('Please enter valid Date.'); $(this).val(''); }
        }
        if (disableHolidays && $(this).val() != '' && !noWeekendsOrHolidays(new Date($(this).val()))) {
            jAlert('Please enter valid Business Day.'); $(this).val('');
        }
    });

    if (maxCurrent) $(".datepicker").datepicker("option", "maxDate", new Date(currentYear, currentMonth, currentDate));
    if (minCurrent) $(".datepicker").datepicker("option", "minDate", new Date(currentYear, currentMonth, currentDate));
    if (disableHolidays) $('.datepicker').datepicker('option', 'beforeShowDay', noWeekendsOrHolidays);
}

function CheckJQueryResponse(xhr, err) {
    try {
        if (xhr.getResponseHeader("Session-Expired")) {
            var isJASON = (xhr.getResponseHeader("Content-Type") && xhr.getResponseHeader("Content-Type").indexOf("application/json") >= 0);
            var $sessionExpiredPath = isJASON ? jQuery.parseJSON(xhr.responseText)[0].SessionExpired : jQuery(jQuery.parseXML(xhr.responseText)).find("SessionExpired").text();

            if ($sessionExpiredPath != undefined && $sessionExpiredPath != "") {
                window.location = appPath + $sessionExpiredPath;
                return false;
            }
        } else if (xhr.getResponseHeader("Unauthorize-Access")) {
            var isJASON = (xhr.getResponseHeader("Content-Type") && xhr.getResponseHeader("Content-Type").indexOf("application/json") >= 0);
            var $unauthorizeAccessMsg = isJASON ? jQuery.parseJSON(xhr.responseText)[0].UnauthorizeAccess : jQuery(jQuery.parseXML(xhr.responseText)).find("UnauthorizeAccess").text();

            if ($unauthorizeAccessMsg != undefined && $unauthorizeAccessMsg != "") {
                jAlert($unauthorizeAccessMsg);
                return false;
            }
        }
    } catch (e) {
    }
    return true;
}

function scrollToId(id, id2) {
    var dest = $("#" + id).offset().top;
    $("html:not(:animated),body:not(:animated)").animate({
        scrollTop: dest
    }, 2000);
    if (id2) {
        $(".anchorGoTop").click(function () {
            var dest = jQuery("#" + id2).offset().top;
            $("html:not(:animated),body:not(:animated)").animate({
                scrollTop: dest
            }, 2000);
        });
    }
}

function inArrayCaseInSensitive(matchString, array) {
    var rslt = null;
    $.each(array, function (index, value) {
        if (rslt == null && value.toLowerCase() == matchString.toLowerCase()) {
            rslt = index;
            return false;
        }
    });
    return rslt == null ? -1 : rslt;
}

//Move Selected List Item
function MoveSelected(fromGroup, toGroup) {
    $('#' + fromGroup + ' option:selected').appendTo('#' + toGroup);
    Sortlist(toGroup);
    Sortlist(fromGroup);
    try {
        $('#' + fromGroup + ' option:selected,#' + toGroup + ' option:selected').removeAttr('selected');
    }
    catch (ex) {
    }
}

//Move All List Item
function MoveAll(fromGroup, toGroup) {
    $('#' + fromGroup + ' option').not(":disabled").appendTo('#' + toGroup);
    Sortlist(toGroup);
    Sortlist(fromGroup);
    try {
        $('#' + fromGroup + ' option:selected,#' + toGroup + ' option:selected').removeAttr('selected');
    }
    catch (ex) {
    }
}

//Sort list
function Sortlist(id) {
    var $r = $('#' + id + ' option');
    $r.sort(function (a, b) {
        if (a.text && b.text) {
            if (a.text.toLowerCase() < b.text.toLowerCase()) return -1;
            if (a.text.toLowerCase() == b.text.toLowerCase()) return 0;
        }
        return 1;
    });
    $($r).remove();
    $('#' + id).append($($r));
}

var ajaxError = function (xhr, ajaxOptions, thrownError) {
    if (xhr && thrownError) {
        jAlert('Status: ' + xhr.status + ' Error: ' + thrownError);
    }
}

//impose Max Length
function imposeMaxLength(Object, MaxLen) {
    return (Object.value.length <= MaxLen);
}

//impose Max Length Copy
function imposeMaxLengthCopy(Object, MaxLen) {
    Object.value = Object.value.replace(/<([a-zA-Z!])/g, "< $1");
    Object.value = Object.value.replace(/&([#])/g, "& $1");

    if (Object.value.length > MaxLen) {
        Object.value = Object.value.substr(0, MaxLen);
        jAlert("Cannot copy more than " + eval(MaxLen) + ".\nText has been truncated to " + eval(MaxLen) + " characters.");
    }
}

//Apply break
function nl2br(str, is_xhtml) {
    if (!str) return '';
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}

function LoadPartialView(id, url, id2, fn) {
    $('#' + id).html("").show().load(url, function () {
        //if (fn)
        //    scrollToId(id, id2);
    }).hide().fadeIn('slow');
}

//==================================Old==================
function isNumberKeyOnly(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode != 56 && charCode != 32 && charCode > 31
        && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function isNumberKeyWthDecimal(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode != 46 && charCode != 32 && charCode > 31
        && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function isAlpha(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32) || (charCode == 8)) {
        return true;
    }
    else {
        return false;
    }
}

function isAlphaNumeric(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    var keychar = String.fromCharCode(key);
    var keycheck = /[a-zA-Z0-9 ()-,]$/;
    if (!(key == 8 || key == 27 || key == 45 || key == 46 || key == 9 || key == 13 || key == 47)) // backspace delete  escape arrows
    {
        if (!keycheck.test(keychar)) {
            theEvent.returnValue = false; //for IE
            if (theEvent.preventDefault) theEvent.preventDefault(); //Firefox

        }
    }
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode > 47 && charCode < 58) || (charCode > 7 && charCode < 47)) { //charCode != 56 && charCode != 32 && charCode > 31 &&
        return true;
    }
    return false;
}

function onlyAlphabets(e, t) {
    if (window.event) {
        var charCode = window.event.keyCode;
    }
    else if (e) {
        var charCode = e.which;
    }
    else { return true; }

    if ((charCode > 47 && charCode < 58) || (charCode > 90 && charCode < 222) || charCode == 16)
        return false;
    else
        return true;
}

function validateAlpha(e) {
    var regex = new RegExp("[a-zA-Z]");
    var key = e.keyCode || e.which;
    key = String.fromCharCode(key);
    var charCode = (e.which) ? e.which : e.keyCode

    if (e.keyCode > 7 && e.keyCode < 47) {
        e.returnValue = true;
    }
    else if (charCode == 32) {
        e.returnValue = true;
    }
    else if (!regex.test(key)) {
        e.returnValue = false;
        if (e.preventDefault) {
            e.preventDefault();
        }
    }
}

function validateAlphaNumaric(e) {
    var regex = new RegExp("[a-zA-Z0-9]");
    var key = e.keyCode || e.which;
    key = String.fromCharCode(key);
    var charCode = (e.which) ? e.which : e.keyCode

    if (e.keyCode > 7 && e.keyCode < 47) {
        e.returnValue = true;
    }
    else if (charCode == 32) {
        e.returnValue = true;
    }
    else if (!regex.test(key)) {
        e.returnValue = false;
        if (e.preventDefault) {
            e.preventDefault();
        }
    }
}

function validateNumaric(e) {
    var regex = new RegExp("[0-9]");
    var key = e.keyCode || e.which;
    key = String.fromCharCode(key);
    var charCode = (e.which) ? e.which : e.keyCode

    if ((e.keyCode != 44 && e.keyCode != 45 && e.keyCode != 46) && (e.keyCode > 7 && e.keyCode < 47)) {
        e.returnValue = true;
    }
    else if (!regex.test(key)) {
        e.returnValue = false;
        if (e.preventDefault) {
            e.preventDefault();
        }
    }
}

function validateEmail(e) {
    var regex = new RegExp("[a-zA-Z0-9@._]");
    var key = e.keyCode || e.which;
    key = String.fromCharCode(key);
    var charCode = (e.which) ? e.which : e.keyCode

    if (e.keyCode > 7 && e.keyCode < 47) {
        e.returnValue = true;
    }
    else if (!regex.test(key)) {
        e.returnValue = false;
        if (e.preventDefault) {
            e.preventDefault();
        }
    }
}

function IsValidEmail(obj) {
    if ($(obj).val() != "") {
        var sEmail = $(obj).val();
        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

        if (sEmail && sEmail != "") {
            if (filter.test(sEmail)) {
                return true;
            }
            else {
                jAlert("Invalid email id.");
                $(obj).val("");
                return false;
            }
        }
    }
}

function mobileNoValidation(obj) {
    if ($(obj).val() != "") {
        var mobileNo = $(obj).val();
        if (mobileNo.length != 10) {
            $(obj).val("");
            jAlert("Mobile No. should be 10 Digits");
            return false;
        }
        if (mobileNo.substring(0, 1) < 6 && mobileNo.substring(0, 1) >= 0) {
            $(obj).val("");
            jAlert("Invalid mobile number.");
            return false;
        }
    }
}

function IsValidMobile(txtMobile) {
    var txtMobileValue = $("#" + txtMobile).val();
    if (txtMobileValue && txtMobileValue != "") {
        var indNum = /^\d{10}$/;
        if (indNum.test(txtMobileValue)) {
            if (txtMobileValue.substring(0, 1) == "0") {
                jAlert("Invalid mobile number.");
                $("#" + txtMobile).val("");
                return false;
            }
            else {
                return true;
            }
        }
        else {
            jAlert("Invalid mobile number.");
            $("#" + txtMobile).val("");
            return false;
        }
    }
}

function validateCalender(e) {
    e.returnValue = false;
    if (e.preventDefault) {
        e.preventDefault();
    }
}

function DisableFileUploadEnterKey() {
    if (event.keyCode == 13) {
        return false;
    }
}

function round(value, decimals) {
    return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
}

//function BindCountry(controlname, selId) {
////     overlay_disable("dvWrapper", "divDisabled");
//    var items = "<option value='0'>[Choose One]</option>";
//    $.post(appPath + "/" + currentControllerName + "/GetCountry", function (result) {
//        if (result && result != "error") {
//            $.each(result, function (i, v) {
//                //debugger;
//                var selected = (selId && selId != "" && (selId == v.CountryId)) ? "selected='selected'" : "";
//                items += "<option value='" + v.CountryId + "' " + selected + ">" + v.CountryName + "</option>";
//            });
//            var selected = (selId && selId != "" && (selId == "9999")) ? "selected='selected'" : "";
//            items += "<option value='9999' " + selected + ">OTHER</option>";
//            $(controlname).empty().append(items);
//        }
//        else
//            $(controlname).empty().append(items);

//        overlay_enabled("divDisabled"); 
//    });
//}
function BindStates(controlname, selId) {
    //     overlay_disable("dvWrapper", "divDisabled");
    var items = "<option value='0'>[Choose One]</option>";
    // $.post(appPath + "/" + currentControllerName + "/GetState", function (result) {
    //     if (result && result != "error") {
    //         $.each(result, function (i, v) {
    //             var selected = (selId && selId != "" && (selId == v.StateId)) ? "selected='selected'" : "";
    //             items += "<option value='" + v.StateId + "' " + selected + ">" + v.StateName + "</option>";
    //         });
    //         var selected = (selId && selId != "" && (selId == "9999")) ? "selected='selected'" : "";
    //         items += "<option value='9999' " + selected + ">OTHER</option>";
    //         $(controlname).empty().append(items);
    //     }
    //     else
    //         $(controlname).empty().append(items);

    //     overlay_enabled("divDisabled");
    // });
    return items;
}

function BindCities(controlname, sId, selId) {
    //     overlay_disable("dvWrapper", "divDisabled");
    var items = "<option value='0'>[Choose One]</option>";
    $.post(appPath + "/" + currentControllerName + "/GetCity", { stateId: sId }, function (result) {
        if (result && result != "error") {
            $.each(result, function (i, v) {
                var selected = (selId && selId != "" && (selId == v.CityId)) ? "selected='selected'" : "";
                items += "<option value='" + v.CityId + "' " + selected + ">" + v.CityName + "</option>";
            });
            var selected = (selId && selId != "" && (selId == "9999")) ? "selected='selected'" : "";
            items += "<option value='9999' " + selected + ">OTHER</option>";
            $(controlname).empty().append(items);
        }
        else
            $(controlname).empty().append(items);

        overlay_enabled("divDisabled");
    });

    overlay_enabled("divDisabled");
}

function isVisible(ele) {
    var element = $(ele);
    if (element.length > 0 && element.css('visibility') !== 'hidden' && element.css('display') !== 'none') {
        return true;
    } else {
        return false;
    }
}

function go(nurl) {
    //     overlay_disable("dvWrapper", "divDisabled");
    window.location.href = (nurl == "http://aiimsexams.ac.in/index.html") ? nurl : appPath + "/" + nurl + "?id=" + $('#hdnCurrentStudentId').val();
    overlay_enabled("divDisabled");
}

function setGridResize(GridTable, ParentDiv, pw, exactWidth, option) {
    $(window).bind('resize', function () {
        var availableWidth = $("#dvWrapper").width() - 20;
        if (exactWidth) {
            $("#" + GridTable).setGridWidth(exactWidth, false);
        } else if (option && option.mw) {
            var usedWidth = option.mw;
            var remainingWidth = availableWidth - usedWidth;
            var noOfGrids = 3 - 1;
            $("#" + GridTable).setGridWidth(remainingWidth / noOfGrids - noOfGrids * 9, false);
        } else {
            $("#" + GridTable).setGridWidth(availableWidth, false);
        }

        var usedHeight = eval($("#" + GridTable).attr("OffsetTop") ? $("#" + GridTable).attr("OffsetTop") : 0);
        usedHeight = 155;
        var requiredHeight = $("#gbox_" + GridTable + " .ui-jqgrid-btable").height();
        var availableHeight = (window.innerHeight || document.documentElement.clientHeight) - usedHeight;
        var currentHeight = $("#gbox_" + GridTable + " .ui-jqgrid-bdiv").height();
        $("#" + GridTable).parents('div.ui-jqgrid-bdiv').css("max-height", availableHeight + "px !important");
        $("#gbox_" + GridTable + " .ui-jqgrid-bdiv").css("height", availableHeight > requiredHeight ? requiredHeight + 20 : availableHeight);
    }).trigger('resize');
    if (!$("#" + GridTable)[0].Loaded) SearchWatermark();
    $("#" + GridTable)[0].Loaded = true;
}

function SetGridPagerWidth(gridPager) {
    $("#" + gridPager + "_left").css("width", "10%");
    $("#" + gridPager + "_center").css("width", "30%");
    $("#" + gridPager + "_right").css("width", "14%");
}

function SearchWatermark() {
    var watermark = "Search...";
    $("tr.ui-search-toolbar input").val(watermark).addClass('watermark');
    $("tr.ui-search-toolbar input").focus(function () {
        if ($(this).val() == watermark) {
            $("tr.ui-search-toolbar input").val('').removeClass('watermark');
        }
    });
    $("tr.ui-search-toolbar input").css("padding", "0px 0px 0px 20px")
        .css("background-image", "url(" + appPath + "'/Content/themes/base/images/input_search_icon_18x12.png')")
        .css("background-position", "left center")
        .css("background-repeat", "no-repeat");
}

function fnChangeStatus(result, rStatus, isreOpen) {

    $("#hdnIsReOpen").val(isreOpen);
    var IsReOpen = $("#hdnIsReOpen").val();
    if (result == "1") {
        $("#a1").attr("href", "EditRegistration?id=" + $('#hdnCurrentStudentId').val());
        $("#tbRegistration").addClass("active_btn");

        $("#lnkQualification").attr("href", "Qualification?id=" + $('#hdnCurrentStudentId').val()).css("cursor", "pointer");
        $("#Image1,#Image2,#Image3,#Image4,#Image5,#Image6").attr("src", appPath + "/Images/sig_no.gif");
        //$("##Image1,#Image2,#Image3,#Image4,#Image5,#Image6").attr("src", "Images/sig_no.gif");

    }
    else if (result == "2") {
        $("#a1").attr("href", "EditRegistration?id=" + $('#hdnCurrentStudentId').val()); $("#a2").attr("href", "Qualification?id=" + $('#hdnCurrentStudentId').val());
        $("#tbRegistration,#tbQualification").addClass("active_btn");


        $("#lnkQualification").text('Done').css('color', 'green').removeAttr("href");
        $("#lnkExperience").attr("href", "Experience?id=" + $('#hdnCurrentStudentId').val()).css("cursor", "pointer");

        $("#Image1").attr("src", appPath + "/Images/sig_yes.gif");
        $("#Image2,#Image3,#Image4,#Image5,#Image6").attr("src", appPath + "/Images/sig_no.gif");
    }
    else if (result == "3") {
        //$("#a1").attr("href", "EditRegistration"); $("#a2").attr("href", "Qualification"); $("#a3").attr("href", "Experience");
        $("#a1").attr("href", "EditRegistration?id=" + $('#hdnCurrentStudentId').val()); $("#a2").attr("href", "Qualification?id=" + $('#hdnCurrentStudentId').val()); $("#a3").attr("href", "Experience?id=" + $('#hdnCurrentStudentId').val());
        $("#tbRegistration,#tbQualification,#tbExperience").addClass("active_btn");

        $("#lnkQualification,#lnkExperience").text('Done').css('color', 'green').removeAttr("href");
        $("#lnkMakePayment").attr("href", "FeePayment?id=" + $('#hdnCurrentStudentId').val()).css("cursor", "pointer");

        $("#Image1,#Image2").attr("src", appPath + "/Images/sig_yes.gif");
        $("#Image3,#Image4,#Image5,#Image6").attr("src", appPath + "/Images/sig_no.gif");
    }
    else if (result == "4") {
        //$("#a1").attr("href", "EditRegistration"); $("#a2").attr("href", "Qualification"); $("#a3").attr("href", "Experience"); $("#a4").attr("href", "FeePayment");
        $("#a1").attr("href", "EditRegistration?id=" + $('#hdnCurrentStudentId').val()); $("#a2").attr("href", "Qualification?id=" + $('#hdnCurrentStudentId').val());
        $("#a3").attr("href", "Experience?id=" + $('#hdnCurrentStudentId').val()); $("#a4").attr("href", "FeePayment?id=" + $('#hdnCurrentStudentId').val());
        $("#tbRegistration,#tbQualification,#tbExperience, #tbPayment").addClass("active_btn");

        $("#lnkQualification,#lnkExperience, #lnkMakePayment").text('Done').css('color', 'green').removeAttr("href");
        $("#lnkCentreChoice").attr("href", "CenterChoiceNew?id=" + $('#hdnCurrentStudentId').val()).css("cursor", "pointer");

        $("#Image1,#Image2,#Image3").attr("src", appPath + "/Images/sig_yes.gif");
        $("#Image4,#Image5,#Image6").attr("src", appPath + "/Images/sig_no.gif");
    }
    else if (result == "5") {
        //$("#a1").attr("href", "EditRegistration"); $("#a2").attr("href", "Qualification"); $("#a3").attr("href", "Experience"); $("#a4").attr("href", "FeePayment");
        //$("#a5").attr("href", "CenterChoice");
        $("#a1").attr("href", "EditRegistration?id=" + $('#hdnCurrentStudentId').val()); $("#a2").attr("href", "Qualification?id=" + $('#hdnCurrentStudentId').val());
        $("#a3").attr("href", "Experience?id=" + $('#hdnCurrentStudentId').val()); $("#a4").attr("href", "FeePayment?id=" + $('#hdnCurrentStudentId').val());
        $("#a5").attr("href", "CenterChoiceNew?id=" + $('#hdnCurrentStudentId').val());
        $("#tbRegistration,#tbQualification,#tbExperience, #tbPayment,#tbCenterChoice").addClass("active_btn");

        $("#lnkQualification,#lnkExperience, #lnkMakePayment,#lnkCentreChoice").text('Done').css('color', 'green').removeAttr("href");
        $("#lnkUploadImages").attr("href", "UploadImages?id=" + $('#hdnCurrentStudentId').val()).css("cursor", "pointer");

        $("#Image1,#Image2,#Image3,#Image4").attr("src", appPath + "/Images/sig_yes.gif");
        $("#Image5,#Image6").attr("src", appPath + "/Images/sig_no.gif");
    }
    else if (result == "6") {
        //$("#a1").attr("href", "EditRegistration"); $("#a2").attr("href", "Qualification"); $("#a3").attr("href", "Experience"); $("#a4").attr("href", "FeePayment");
        //$("#a5").attr("href", "CenterChoice"); $("#a6").attr("href", "UploadImages");
        $("#a1").attr("href", "EditRegistration?id=" + $('#hdnCurrentStudentId').val()); $("#a2").attr("href", "Qualification?id=" + $('#hdnCurrentStudentId').val());
        $("#a3").attr("href", "Experience?id=" + $('#hdnCurrentStudentId').val()); $("#a4").attr("href", "FeePayment?id=" + $('#hdnCurrentStudentId').val());
        $("#a5").attr("href", "CenterChoiceNew?id=" + $('#hdnCurrentStudentId').val()); $("#a6").attr("href", "UploadImages?id=" + $('#hdnCurrentStudentId').val());
        //$("#a5").attr("href", "CenterChoice?id=" + $('#hdnCurrentStudentId').val()); $("#a6").attr("href", "UploadImages?id=" + $('#hdnCurrentStudentId').val());
        $("#tbRegistration,#tbQualification,#tbExperience, #tbPayment,#tbCenterChoice,#tbUploadImages").addClass("active_btn");

        $("#lnkQualification,#lnkExperience, #lnkMakePayment,#lnkCentreChoice,#lnkUploadImages").text('Done').css('color', 'green').removeAttr("href");
        $("#lnkRegSlip").attr("href", "RegistrationSlip?id=" + $('#hdnCurrentStudentId').val()).css("cursor", "pointer");

        $("#Image1,#Image2,#Image3,#Image4,#Image5").attr("src", appPath + "/Images/sig_yes.gif");
        $("#Image6").attr("src", appPath + "/Images/sig_no.gif");
    }
    else if (result == "7") {
        //$("#a1").attr("href", "EditRegistration"); $("#a2").attr("href", "Qualification"); $("#a3").attr("href", "Experience"); $("#a4").attr("href", "FeePayment");
        //$("#a5").attr("href", "CenterChoice"); $("#a6").attr("href", "UploadImages"); $("#a7").attr("href", "RegistrationSlip");

        $("#a1").attr("href", "EditRegistration?id=" + $('#hdnCurrentStudentId').val()); $("#a2").attr("href", "Qualification?id=" + $('#hdnCurrentStudentId').val());
        $("#a3").attr("href", "Experience?id=" + $('#hdnCurrentStudentId').val()); $("#a4").attr("href", "FeePayment?id=" + $('#hdnCurrentStudentId').val());
        $("#a5").attr("href", "CenterChoiceNew?id=" + $('#hdnCurrentStudentId').val()); $("#a6").attr("href", "UploadImages?id=" + $('#hdnCurrentStudentId').val());
        //$("#a5").attr("href", "CenterChoice?id=" + $('#hdnCurrentStudentId').val()); $("#a6").attr("href", "UploadImages?id=" + $('#hdnCurrentStudentId').val());

        $("#a7").attr("href", "RegistrationSlip?id=" + $('#hdnCurrentStudentId').val());

        $("#tbRegistration,#tbQualification,#tbExperience, #tbPayment,#tbCenterChoice,#tbUploadImages,#tbRegistrationSlip").addClass("active_btn");

        $("#lnkQualification,#lnkExperience, #lnkMakePayment,#lnkCentreChoice,#lnkUploadImages,#lnkRegSlip").text('Done').css('color', 'green').removeAttr("href");

        $("#Image1,#Image2,#Image3,#Image4,#Image5,#Image6").attr("src", appPath + "/Images/sig_yes.gif");
    }

    $("#lnkRaise").attr("href", "Support/Index?id=1").css("cursor", "pointer");
    //if (isPannelClosed == "True" && $("#hdnIsAdmin").val() == "0") {
    //    if (isreOpen != true)
    //        $("#a1").removeAttr("href").css("cursor", "not-allowed");
    //        $("#btnEdit, #dvADetails").hide();

    //    //var IsReOpen = $("#hdnIsReOpen").val();
    //    //if (isreOpen == "True")
    //    //    $("#lnkMakePayment").removeAttr("href").css("cursor", "not-allowed");
    //    //else if (rStatus == "3")
    //    //    $("#lnkMakePayment,#lnkCentreChoice,#lnkQualification").removeAttr("href").css("cursor", "not-allowed");
    //    //else
    //    //    $("#lnkMakePayment,#lnkCentreChoice,#lnkQualification,#lnkUploadImages,#lnkRegSlip").removeAttr("href").css("cursor", "not-allowed");
    //}

    //if ($("#hdnIsInterViewCall").val() != "0")
    //    $("#liInterViewCall").show();
    //else
    //    $("#liInterViewCall").hide();

    //var IsImgVerified = $("#hdnImgVerified").val();
    //if (IsImgVerified == "True") {
    //    $("#a1").removeAttr("href"); $("#btnEdit, #dvADetails").hide();
    //    $("#lnkMakePayment,#lnkCentreChoice,#lnkQualification,#lnkUploadImages,#lnkRegSlip").removeAttr("href");
    //}
}

function LogOutIfLogin() {
    //     overlay_disable("dvWrapper", "divDisabled");
    // $.post(appPath + "/Registration/ValidateSession", function (result) {
    //     if (result == "Logout")
    //         go("Logout");

    //     overlay_enabled("divDisabled");
    // });
    overlay_enabled("divDisabled");
}

$(document).ajaxError(function (a, b) {
    if (b.status == 403) {
        window.location.href = appPath + '/Login/Index';
    }
});
