$(document).ready(function () {
    $("#dvPersonalDetails,#dvPaymentDetails").hide();

    //----For View Chenter Choice----------
    GetStateCentre();
    $(document).on('click', "#aCityChoice", function () {
        $("#ddlState").select2("val", "0");
        $("#dvCentre").hide();
        $("#myModal").modal('show');
    });

    $(document).on('click', "#close", function () {
        $("#myModal").modal('hide');
    });

    $(document).on('change', "#ddlState", function () {
        getCentreList($(this).val());
    });
    //-------------------

    $(document).on('click', "#btnProceed", function () {
        go("CenterChoiceNew");
        // go("CenterChoice");
    });

    //$(document).on('click', "#aPayment", function () {
    //    fnCallPaymnet();
    //});
    $(document).on('click', "#aPayment", function () {
        fnCallPaymnet("MakePaymentSBI");
    });

    $(document).on('click', "#aPaymentPayGov", function () {
        fnCallPaymnet("MakePaymentPayGov");
    });

    fnLoadPaymentDetails();

    $(document).on("click", "#btnPrintPayment", function () {
        var dvToPrint = document.getElementById("dvPaymentDetails");
        var printWindow = window.open('', '_blank', 'height=550,width=800,toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no');
        printWindow.document.write('<!DOCTYPE html> <html class="dj_windows is-not-mobile dj_webkit dj_chrome dj_contentbox has-webkit has-no-quirks"> <head>');
        printWindow.document.write('<meta charset="utf-8" /> <meta content="text/html; charset=windows-1252" http-equiv="Content-Type" />');
        printWindow.document.write('<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />');
        printWindow.document.write('<meta name="viewport" content="width=device-width" /> <meta content="BlendTrans(Duration=0.1)" http-equiv="Page-Exit" />');
        // printWindow.document.write('<script src=' + appPath + '"/Scripts/jquery-1.11.3.min.js"></script>');
        // printWindow.document.write('<link rel="stylesheet" href=' + appPath + '"/Content/css/font-awesome.min.css" type="text/css" />');
        // printWindow.document.write('<link rel="stylesheet" href=' + appPath + '"/Content/bootstrap.css" type="text/css" />');
        // printWindow.document.write('<link rel="stylesheet" href=' + appPath + '"/Content/main.css" type="text/css" />');
        // printWindow.document.write('<link rel="stylesheet" href=' + appPath + '"/Content/extra.css" type="text/css" />');
        printWindow.document.write('<style type="text/css"> .hideOnPrint { display:none; }');
        printWindow.document.write('@media print {');
        printWindow.document.write('.headerprint {background-color: #d9edf7 !important; -webkit-print-color-adjust: exact;   }');
        printWindow.document.write('.paymentprint{background-color: #f2dede !important; -webkit-print-color-adjust: exact; }');
        printWindow.document.write('}');
        printWindow.document.write('</style>');
        printWindow.document.write('<title></title>');
        printWindow.document.write(dvToPrint.innerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        setTimeout(function () {
            printWindow.print();
        }, 500);
        return false;
    });

});

function fnCallPaymnet(cAction) {
    var fAmount = $("#hdnFeeAmount").val();

    //var IsClosedPostWise = "0";
    //var appliedPostId = $("#hdnAppliedPostId").val();
    //if (appliedPostId == 10 || appliedPostId == 11) {
    //    IsClosedPostWise = "0";
    //}
    //else
    //    IsClosedPostWise = "1";

    //if (IsClosedPostWise == "1") {
    //    jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
    //        if (r == true) {
    //            go("DashBoard");
    //        }
    //    });
    //}

    if (fAmount > 0) {
        overlay_disable("dvWrapper", "divDisabled");
        //$.post(appPath + "/FeePayment/" + cAction, { amount: fAmount, IsAdmin: $("#hdnIsAdmin").val() }, function (result) {
        // $.post(appPath + "/FeePayment/" + cAction, { amount: fAmount, IsAdmin: $("#hdnRepayment").val() }, function (result) {
        //     if (result && result != "error" && result != "closed") {
        //         if (result.length > 0)
        //             $(result).appendTo('body').submit().remove();
        //         else
        //             jAlert("Your action could not be completed due to an exception. Please try again later.");
        //     }
        //     else if (result == "closed") {
        //         jAlert('<span class="contentRed b f18">Registration has been closed.....</span>', 'Message', function (r) {
        //             if (r == true) {
        //                 go("DashBoard");
        //             }
        //         });
        //     }
        //     else
        //         jAlert("Your action could not be completed due to an exception. Please try again later.", "Message");

        //     overlay_enabled("divDisabled");
        // });
        overlay_enabled("divDisabled");
    }
    else
        jAlert("Fee amount can not be 0.");
}
//function fnCallPaymnet(cAction) {
//    var fAmount = $("#hdnFeeAmount").val();
//    if (fAmount > 0) {
//        overlay_disable("dvWrapper", "divDisabled");
//        $.post(appPath + "/FeePayment/MakePayment", { amount: fAmount, IsAdmin: $("#hdnIsAdmin").val() }, function (result) {
//            if (result && result != "error" && result != "closed") {
//                if (result.length > 0)
//                    $(result).appendTo('body').submit().remove();
//                else
//                    jAlert("Your action could not be completed due to an exception.");
//            }
//            else if (result == "closed") {
//                jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message');
//            }
//            else
//                jAlert("Your action could not be completed due to an exception.");

//            overlay_enabled("divDisabled");
//        });
//        overlay_enabled("divDisabled");
//    }
//    else
//        jAlert("Fee amount can not be 0.");
//}

function fnLoadPaymentDetails() {
    var sNId = $("#hdnSId").val() != "0" ? $("#hdnSId").val() : "";
    overlay_disable("dvWrapper", "divDisabled");
    // $.post(appPath + "/FeePayment/GetPaymentDetails", { sId: sNId }, function (result) {
    //     if (result && result != "error" && result != 'sessionout') {
    //         var stJson = $.parseJSON(result)[0];
    //         fnChangeStatus(stJson.SetupCounter);
    //         //debugger;
    //         if (stJson.IsPaid == false) {
    //             //if (stJson.AppliedPostId != "11") {
    //             //    jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
    //             //        if (r == true) {
    //             //            go("DashBoard");
    //             //        }
    //             //    });
    //             //}
    //             if (isPannelClosed == "True") {
    //                 jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
    //                     if (r == true) {
    //                         go("DashBoard");
    //                     }
    //                 });
    //             }
    //             $("#dvPersonalDetails").show();
    //             $("#dvPaymentDetails").hide();

    //             $("#lblName").html(stJson.Name);
    //             $("#lblApplicationNo").html(stJson.ApplicationNo);
    //             $("#lblAmount").html(stJson.Amount);
    //             $("#hdnFeeAmount").val(stJson.Amount);
    //             $("#lblPaymentStatus").html(stJson.PaymentStatus);
    //             ////////////////ADD Payment RePayment
    //             $("#hdnRepayment").val(stJson.IsRepayment);
    //             //if (stJson.IsRepayment == "1") {
    //             //    if (stJson.Amount == 1500) {
    //             //        $("#lblAmount").text('1000');
    //             //    }
    //             //    if (stJson.Amount == 1200) {
    //             //        $("#lblAmount").text('1100');
    //             //    }
    //             //}
    //             /////////////END
    //             // fnGetPaymentStatus();
    //         }
    //         else {
    //             var str = (stJson.IsPaidCheck == 0) ? " payment " : "";
    //             if (str != "") {
    //                 jAlert('<span class="contentRed b f18">Your ' + str + ' details are still incomplete, Please complete due steps.</span>', 'Message', function (r) {
    //                     if (r == true) {
    //                         $("#dvPersonalDetails").show();
    //                         $("#dvPaymentDetails").hide();

    //                         $("#lblName").html(stJson.Name);
    //                         $("#lblApplicationNo").html(stJson.ApplicationNo);
    //                         $("#lblAmount").html(stJson.Amount);
    //                         $("#hdnFeeAmount").val(stJson.Amount);
    //                         $("#lblPaymentStatus").html(stJson.PaymentStatus);
    //                     }
    //                 });
    //             }
    //             else {
    //                 $("#dvPersonalDetails, #btnSaveExit, #btnSaveProceed").hide();
    //                 $("#dvPaymentDetails").show();
    //                 $("#lblPostName").html(stJson.PostName);
    //                 $("#lblStudName").html(stJson.Name);
    //                 $("#lblPApplicationNo").html(stJson.ApplicationNo);
    //                 $("#lblPRegistrationNo").html(stJson.RegistrationNo);
    //                 $("#lblDOB").html(stJson.DOB);
    //                 $("#lblCategory").html(stJson.Category);
    //                 $("#lblGender").html(stJson.Gender);
    //                 $("#lblOPH").html(stJson.Disability);
    //                 $("#lblPAmount").html(stJson.Amount);

    //                 $("#lblPayMode").html("Online");
    //                 $("#lblPayDate").html(stJson.PaymentDate);
    //                 $("#lblTransactionID").html(stJson.TxId);
    //                 $("#lblFeeStatus").html(stJson.PaymentStatus);
    //                 ////////////////ADD Payment RePayment
    //                 $("#hdnRepayment").val(stJson.IsRepayment);
    //                 //if (stJson.IsRepayment == "1") {
    //                 //    if (stJson.Amount == 1000) {
    //                 //        $("#lblPAmount").text('1500');
    //                 //    }
    //                 //    if (stJson.Amount == 1100) {
    //                 //        $("#lblPAmount").text('1200');
    //                 //    }
    //                 //}
    //             }
    //         }
    //     }
    //     else {
    //         jAlert("Your action could not be completed due to an exception.");
    //     }
    //     overlay_enabled("divDisabled");
    // });
    overlay_enabled("divDisabled");
}


//------Functions For View Center Choice----------------------
function GetStateCentre() {
    overlay_disable("dvWrapper", "divDisabled");
    var items = "<option value='0'>[Choose One]</option>";
    // $.post(appPath + "/CenterChoiceNew/GetStateCentre", function (result) {
    //     if (result && result != "error") {
    //         $.each(result.city, function (i, v) {
    //             items += "<option value='" + i + "'>" + v + "</option>";
    //         });
    //         $("#ddlState").empty().append(items).select2();
    //     }
    //     else
    //         $("#ddlState").empty().append(items);

    //     overlay_enabled("divDisabled");
    // });

    overlay_enabled("divDisabled");
}

function getCentreList(sId) {
    if (sId != "0") {
        overlay_disable("dvWrapper", "divDisabled");
        var str = "";
        // $.post(appPath + "/CenterChoiceNew/GetSeatAvailability", { stateId: sId }, function (result) {
        //     if (result && result != "error" && result != "noData") {
        //         $("#dvCentre").show();
        //         var rJson = $.parseJSON(result);
        //         str += "<div class='bor1pxSolid clearfix' style='padding-top:0px !important;'>";
        //         str += "<table class='table'> <tr>";
        //         str += "<th>Sr.No</th>";
        //         str += "<th>City</th>";
        //         str += "<th>Total Seats</th>";
        //         str += "<th>Occupied</th>";
        //         str += "<th>Available</th>";
        //         str += "</tr>";

        //         str += "<div class='form-group col-sm-12' style='margin-top:10px !important;'>";
        //         $.each(rJson, function (i, v) {
        //             str += "<tr> <td>" + (i + 1) + "</td>";
        //             str += "<td>" + v.Centre + "</td>";
        //             str += "<td>" + v.Strength + "</td>";
        //             str += "<td>" + v.Occupied + "</td>";
        //             str += "<td>" + v.Avaliable + "</td>";
        //             str += "</tr>";
        //         });
        //         str += "</table></div>";
        //         $("#dvCentre").html('').html(str);
        //     }
        //     else if (result == "noData") {
        //         $("#dvCentre").hide();
        //         jAlert("No city is available in this state.");
        //     }
        //     else {
        //         $("#dvCentre").hide();
        //         jAlert("Your action could not be completed due to an exception.");
        //     }
        //     overlay_enabled("divDisabled");
        // });
        overlay_enabled("divDisabled");
    }
    else {
        $("#dvCentre").hide();
    }
}