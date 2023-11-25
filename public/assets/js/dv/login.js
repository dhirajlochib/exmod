$(document).ready(function () {
    // use this to collapse the login form
    // if (isPannelClosed == "True") {
    //     $("#divClosedRegistration").show();
    //     $("#divNewRegistration").hide();
    // }
    // else {
    //     $("#divClosedRegistration").hide();
    //     $("#divNewRegistration").show();
    // }

    $("#status").hide();
    RefreshCaptcha("#txtCaptcha,#txtCaptchaR");
    $("#btnSubmit").focus();
    $(document).on('click', "#btnSubmit", function () {
        if (fnValidate())
            fnsave();
    });

    //$.getJSON("https://jsonip.com/?callback=?", function (data) {
    //    var ipAddress = (data.ip);
    //    $("#hdnIPAddress").val(data.ip);
    //});

    //For forgot password
    $(document).on('click', ".forgotPassword", function () {
        clearForgotPasswordField();
        $("#myModalForgot").modal('show');
    });

    $(document).on('click', "#close", function () {
        $("#myModalForgot").modal('hide');
    });

    $(document).on('blur', "#txtREmailId", function () {
        IsValidEmail("txtREmailId");
    });

    $(document).on('blur', "#txtRMobileNo", function () {
        IsValidMobile("txtRMobileNo");
    });

    $(document).on('click', "#btnGetPassword", function () {
        if (fnValidatePassword())
            fnGetPassword();
    });

});

function RefreshCaptcha(cName) {
    var number = Math.floor((Math.random() * 10000) + 1000);
    $(cName).val(number).attr('disabled', true);
}

function fnValidate() {
    if ($("#txtRegiEnroll").val() == "") {
        jAlert("Enter Application No. !!", 'Message');
        return false;
    }
    else if ($("#txtPassword").val() == "") {
        jAlert("Enter Password !!", 'Message');
        return false;
    }
    else if ($("#txtCaptchaCheck").val() == "") {
        jAlert('Enter Captcha !!', 'Message');
        return false;
    }
    else if ($("#txtCaptcha").val() != $("#txtCaptchaCheck").val()) {
        jAlert('Captcha does not match !!', 'Message');
        return false;
    }
    else {
        return true;
    }
}

function fnsave() {
    var log = {};
    log.ApplicationNo = $("#txtRegiEnroll").val();
    log.Password = $("#txtPassword").val();
    log.IPAddress = $("#hdnIPAddress").val();

    // overlay_disable("dvWrapper", "divDisabled");
    $.post(appPath + "/Login/GetRegisteredApplicant", { logData: JSON.stringify(log) }, function (result) {
        if (result && result.msg != "failure" && result.msg != "error" && result.msg != "Allready") {
            window.location.href = "../" + result;
        }
        else if (result.msg == "failure") {
            RefreshCaptcha("#txtCaptcha");
            jAlert("Invalid credentials .");
        }
        else if (result.msg == "Allready") {
            window.location.href = appPath + "/Error/AllreadyLogin";
        }
        else {
            RefreshCaptcha("#txtCaptcha");
            jAlert("Your action could not be completed due to an exception.");
        }

        overlay_enabled("divDisabled");
    });
    //overlay_enabled("divDisabled");
}

function fnValidatePassword() {
    var cid = $("#txtRCandidateID").val();
    var mNo = $("#txtRMobileNo").val();
    var eId = $("#txtREmailId").val();
    var DOB = $("#txtDOB").val();

    if (cid == "" && DOB == "") {
        jAlert("Enter either Candidate ID Or Date of Birth.", 'Message');
        return false;
    }
    else if (mNo == "") {
        jAlert("Enter Mobile No.", 'Message');
        return false;
    }
    else if (eId == "") {
        jAlert("Enter Email ID.", 'Message');
        return false;
    }
    //else if (DOB == "" || (mNo != "" && eId != "")) {
    //    jAlert("Enter DOB.", 'Message');
    //    return false;
    //}
    else if (DOB == "" && (mNo == "" && eId == "")) {
        jAlert("Enter Email Id.", 'Message');
        return false;
    }
    else if (cid == "" && (mNo != "" && eId == "")) {
        jAlert("Enter Email Id.", 'Message');
        return false;
    }
    else if (cid == "" && (mNo == "" && eId != "")) {
        jAlert("Enter Mobile No.", 'Message');
        return false;
    }
    else if ($("#txtCaptchaCheckR").val() == "") {
        jAlert('Enter Captcha !!', 'Message');
        return false;
    }
    else if ($("#txtCaptchaR").val() != $("#txtCaptchaCheckR").val()) {
        jAlert('Captcha does not match !!', 'Message');
        return false;
    }
    return true;
}

function fnGetPassword() {
    $("#dvSpinner").show();
    $("#dvFmain,#dvFfooter").hide();

    $.post(appPath + "/Login/GetPassword", { candidateId: $("#txtRCandidateID").val(), mobileNo: $("#txtRMobileNo").val(), emailId: $("#txtREmailId").val(), DOB: $("#txtDOB").val() }, function (result) {
        $("#dvSpinner").hide();
        $("#dvFmain,#dvFfooter").show();

        if (result && result != "invalid" && result != "noData" && result != "error") {
            jAlert('Dear ' + result + ',<br> Your <b>Password</b> has been mailed to registered email id.<br> Please note down the Candidate ID and Password for future references. <br /><br /> <b>Note:</b> <span class=contentRed>If you have not received confirmation mail in Inbox, kindly check you mail in SPAM also for login details.<span>', 'Recover your Password !!', function (r) {
                if (r == true) {
                    $("#myModal").modal('hide');
                }
            });
        }
        else if (result == "invalid" || result == "noData")
            jAlert("Either You are not Registered with us Or Your account is blocked by admin.");
        else if (result == "error")
            jAlert("Your action could not be completed due to an exception.");

        $("#dvSpinner").hide();
    });
    $("#dvSpinner").hide();
}

function clearForgotPasswordField() {
    $("#txtRCandidateID,#txtCaptchaCheckR,#txtRMobileNo,#txtREmailI,d#btnGetPassword").val('');
    $("#dvFmain,#dvFfooter").show();
    $("#dvSpinner").hide();
    RefreshCaptcha("#txtCaptchaR");
}