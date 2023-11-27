$(document).ready(function () {
    // $("#dvOptedCentre,#dvForCentre,#dvButton").hide();
    fnGetOptedCentre();

    $(document).on('change', "#ddlState", function () {
        //$("#hdnPrevCity").val("0");        
        //$("#ddlState2")[0].selectedIndex = 0;
        //$("#ddlCity2").html('');
        getCentreList($(this).val());
    });

    $(document).on('change', "#ddlState2", function () {
        $("#hdnPrevCity").val("0");
        getCentreList2($(this).val());
    });

    $(document).on('change', "#ddlState3", function () {
        //$("#hdnPrevCity").val("0");
        getCentreList3($(this).val());
    });

    $(document).on('click', "#btnSaveExit", function () {
        Save(1);
    });

    $(document).on('click', "#btnSaveProceed", function () {
        Save(2);
    });
    $(document).on('click', "#btnProceed", function () {
        go("UploadImages");
    });

    $(document).on('click', ".clsCenter", function (event) {
        if ($(this).is(":checked")) {
            var citiId = $(this).attr("Id").replace("rbCenter_", "");
            var prevAvaliable = $("#tdAvaliable_" + citiId).html();
            if ($("#hdnAppliedPostId").val() == "35") {
                if (parseInt(prevAvaliable) > 0)
                    fnUpdateMetrix($(this).val());
                else
                    jAlert("No City is available in this State.");
            }
        }
    });

    //$(document).on('click', "#btnProceed", function () {
    //    go("RegistrationSlip");
    //});

});

function fnUpdateMetrix(selectedCity) {
    var prevCity = $("#hdnPrevCity").val();

    $(".clsCenter").each(function (i, obj) {
        var citiId = $(obj).attr("Id").replace("rbCenter_", "");

        if (citiId == selectedCity) {
            var prevOccupied = $("#tdOccupied_" + citiId).html();
            $("#tdOccupied_" + citiId).html(Number(prevOccupied) + 1);

            var prevAvaliable = $("#tdAvaliable_" + citiId).html();
            $("#tdAvaliable_" + citiId).html(Number(prevAvaliable) - 1);

            $("#hdnPrevCity").val(citiId);
        }

        if (prevCity != "0" && citiId == prevCity) {
            var prevOccupied = $("#tdOccupied_" + prevCity).html();
            $("#tdOccupied_" + prevCity).html(Number(prevOccupied) - 1);

            var prevAvaliable = $("#tdAvaliable_" + prevCity).html();
            $("#tdAvaliable_" + prevCity).html(Number(prevAvaliable) + 1);
        }
    });
}

function fnGetOptedCentre() {
    overlay_disable("dvWrapper", "divDisabled");
    // $.post(appPath + "/CenterChoiceNew/GetOptedCentre", function (result) {
    //     if (result && result != "noRecord") {
    //         //debugger;
    //         var data = $.parseJSON(result)[0];
    //         fnChangeStatus(data.SetupCounter);
    //         $("#dvOptedCentre").show();
    //         $("#dvForCentre").hide();
    //         $("#btnSaveProceed").hide();

    //         $("#lblName").text(data.Name);
    //         $("#lblApplicationNo").text(data.ApplicationNo);
    //         $("#lblState").text(data.State);
    //         $("#lblOptedCenter").text(data.Centre);
    //         $("#lblState2").text(data.State2);
    //         $("#lblOptedCenter2").text(data.Center2);
    //         $("#lblState3").text(data.State3);
    //         $("#lblOptedCenter3").text(data.Center3);

    //         BindStateCentreEdit("#ddlState", data.StateId);
    //         BindStateCentreEdit("#ddlState2", data.StateId2);
    //         BindStateCentreEdit("#ddlState3", data.StateId3);

    //         getCentreListEdit(data.StateId, data.CenterId);
    //         getCentreList2Edit(data.StateId2, data.CenterId2);
    //         getCentreList3Edit(data.StateId3, data.CenterId3);

    //     }
    //     else {
    //         fnChangeStatus(4);
    //         var IsReOpen = $("#hdnIsReOpen").val();
    //         //if (isPannelClosed == "True" && IsReOpen != "True") {
    //         //    jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
    //         //        if (r == true) {
    //         //            go("DashBoard");
    //         //        }
    //         //    });
    //         //}
    //         //else
    //         //    GetStateCentre();
    //         GetStateCentre();
    //         $("#btnSaveProceed").show();

    //     }
    //     overlay_enabled("divDisabled");
    // });
    overlay_enabled("divDisabled");
}

function GetStateCentre() {
    overlay_disable("dvWrapper", "divDisabled");
    var items = "<option value='0'>[Choose One]</option>";
    // $.post(appPath + "/CenterChoiceNew/GetStateCentre", function (result) {
    //     if (result && result != "error") {
    //         fnChangeStatus(result.sCounter);
    //         $("#hdnAppliedPostId").val(result.sPostId);
    //         $("#dvOptedCentre").hide();
    //         $("#dvForCentre").show();

    //         //$.each(result.city, function (i, v) {
    //         //    items += "<option value='" + i + "'>" + v + "</option>";
    //         //});


    //         $.each(result, function (i, v) {
    //             items += "<option value='" + v.StateId + "' " + ">" + v.StateName + "</option>";
    //         });
    //         //$(controlname).empty().append(items);
    //         //$(controlname).val(value);

    //         $("#ddlState").empty().append(items).select2();
    //         $("#ddlState2").empty().append(items).select2();
    //         $("#ddlState3").empty().append(items).select2();

    //     }
    //     else {
    //         $("#ddlState").empty().append(items);
    //         $("#ddlState2").empty().append(items);
    //         $("#ddlState3").empty().append(items);
    //     }

    //     overlay_enabled("divDisabled");
    // });

    overlay_enabled("divDisabled");
}

function BindStateCentreEdit(controlname, selId) {
    overlay_disable("dvWrapper", "divDisabled");
    var items = "<option value='0'>[Choose One]</option>";
    //$.post(appPath + "/" + currentControllerName + "/GetState", function (result) {
    // $.post(appPath + "/CenterChoiceNew/GetStateCentre", function (result) {
    //     if (result && result != "error") {
    //         $.each(result, function (i, v) {
    //             var selected = (selId && selId != "" && (selId == v.StateId)) ? "selected='selected'" : "";
    //             items += "<option value='" + v.StateId + "' " + selected + ">" + v.StateName + "</option>";
    //         });
    //         $(controlname).empty().append(items);
    //         //$(controlname).val(value);
    //     }
    //     else
    //         $(controlname).empty().append(items);

    //     overlay_enabled("divDisabled");
    // });
}

function getCentreListEdit(sId, selId) {
    if (sId != "0") {
        overlay_disable("dvWrapper", "divDisabled");
        var str = "";
        var items = "<option value='0'>[Choose One]</option>";
        // $.post(appPath + "/CenterChoiceNew/GetCentreList", { stateId: sId }, function (result) {
        //     if (result && result != "error" && result != "noData") {
        //         var isAlreadyOpted = 0, checked = "", disabled = "";
        //         var rJson = $.parseJSON(result);
        //         $.each(rJson, function (i, v) {
        //             var selected = (selId && selId != "" && (selId == v.CentreId)) ? "selected='selected'" : "";
        //             items += "<option value='" + v.CentreId + "' " + selected + ">" + v.Centre + "</option>";
        //         });
        //         $("#ddlCity1").empty().append(items).select2();

        //         if ($("#ddlCity2").val() != "0") {
        //             var secondCityId = $("#ddlCity2").val();
        //             $("#ddlCity1 option[value='" + secondCityId + "']").remove();
        //         }
        //         if ($("#ddlCity3").val() != "0") {
        //             var thirdCityId = $("#ddlCity3").val();
        //             $("#ddlCity1 option[value='" + thirdCityId + "']").remove();
        //         }
        //     }
        //     else if (result == "noData") {
        //         $("#dvOptedCentre,#dvCentre,#dvButton").hide();
        //         jAlert("No city is available in this state.");
        //     }
        //     else {
        //         $("#dvOptedCentre,#dvCentre,#dvButton").hide();
        //         jAlert("Your action could not be completed due to an exception.");
        //     }
        //     overlay_enabled("divDisabled");
        // });
        overlay_enabled("divDisabled");
    }
    else {
        $("#dvOptedCentre,#dvCentre,#dvButton").hide();
    }
}

function getCentreList2Edit(sId, selId) {
    if (sId != "0") {
        overlay_disable("dvWrapper", "divDisabled");
        var str = "";
        var items = "<option value='0'>[Choose One]</option>";
        // $.post(appPath + "/CenterChoiceNew/GetCentreList", { stateId: sId }, function (result) {
        //     if (result && result != "error" && result != "noData") {
        //         var isAlreadyOpted = 0, checked = "", disabled = "";
        //         $("#dvCentre").show();
        //         var rJson = $.parseJSON(result);

        //         $.each(rJson, function (i, v) {
        //             //items += "<option value='" + v.CentreId + "'>" + v.Centre + "</option>";
        //             var selected = (selId && selId != "" && (selId == v.CentreId)) ? "selected='selected'" : "";
        //             items += "<option value='" + v.CentreId + "' " + selected + ">" + v.Centre + "</option>";
        //         });
        //         $("#ddlCity2").empty().append(items).select2();

        //         if ($("#ddlCity1").val() != "0") {
        //             var firstCityId = $("#ddlCity1").val();
        //             $("#ddlCity2 option[value='" + firstCityId + "']").remove();
        //         }
        //         if ($("#ddlCity3").val() != "0") {
        //             var secondCityId = $("#ddlCity3").val();
        //             $("#ddlCity2 option[value='" + secondCityId + "']").remove();
        //         }
        //     }
        //     else if (result == "noData") {
        //         $("#dvOptedCentre,#dvCentre").hide();
        //         jAlert("No city is available in this state.");
        //     }
        //     else {
        //         $("#dvOptedCentre,#dvCentre").hide();
        //         jAlert("Your action could not be completed due to an exception.");
        //     }
        //     overlay_enabled("divDisabled");
        // });
        overlay_enabled("divDisabled");
    }
    else {
        $("#dvOptedCentre,#dvCentre").hide();
    }
}

function getCentreList3Edit(sId, selId) {
    if (sId != "0") {
        overlay_disable("dvWrapper", "divDisabled");
        var str = "";
        var items = "<option value='0'>[Choose One]</option>";
        // $.post(appPath + "/CenterChoiceNew/GetCentreList", { stateId: sId }, function (result) {
        //     if (result && result != "error" && result != "noData") {
        //         var isAlreadyOpted = 0, checked = "", disabled = "";
        //         $("#dvCentre").show();
        //         var rJson = $.parseJSON(result);
        //         $.each(rJson, function (i, v) {
        //             var selected = (selId && selId != "" && (selId == v.CentreId)) ? "selected='selected'" : "";
        //             items += "<option value='" + v.CentreId + "' " + selected + ">" + v.Centre + "</option>";
        //         });
        //         $("#ddlCity3").empty().append(items).select2();

        //         if ($("#ddlCity1").val() != "0") {
        //             var firstCityId = $("#ddlCity1").val();
        //             $("#ddlCity3 option[value='" + firstCityId + "']").remove();
        //         }
        //         if ($("#ddlCity2").val() != "0") {
        //             var SecondCityId = $("#ddlCity2").val();
        //             $("#ddlCity3 option[value='" + SecondCityId + "']").remove();
        //         }

        //     }
        //     else if (result == "noData") {
        //         $("#dvOptedCentre,#dvCentre").hide();
        //         jAlert("No city is available in this state.");
        //     }
        //     else {
        //         $("#dvOptedCentre,#dvCentre").hide();
        //         jAlert("Your action could not be completed due to an exception.");
        //     }
        //     overlay_enabled("divDisabled");
        // });
        overlay_enabled("divDisabled");
    }
    else {
        $("#dvOptedCentre,#dvCentre").hide();
    }
}


//function GetStateCentre() {
//    overlay_disable("dvWrapper", "divDisabled");
//    var items = "<option value='0'>[Choose One]</option>";
//    $.post(appPath + "/CenterChoice/GetStateCentre", function (result) {
//        if (result && result != "error") {
//            fnChangeStatus(result.sCounter);
//            $("#hdnAppliedPostId").val(result.sPostId);
//            $("#dvOptedCentre").hide();
//            $("#dvForCentre").show();

//            $.each(result.city, function (i, v) {
//                items += "<option value='" + i + "'>" + v + "</option>";
//            });
//            $("#ddlState").empty().append(items).select2();
//            $("#ddlState2").empty().append(items).select2();
//            $("#ddlState3").empty().append(items).select2();

//        }
//        else {
//            $("#ddlState").empty().append(items);
//            $("#ddlState2").empty().append(items);
//            $("#ddlState3").empty().append(items);
//        }

//        overlay_enabled("divDisabled");
//    });

//    overlay_enabled("divDisabled");
//}



function getCentreList(sId) {
    if (sId != "0") {
        overlay_disable("dvWrapper", "divDisabled");
        var str = "";
        var items = "<option value='0'>[Choose One]</option>";
        // $.post(appPath + "/CenterChoiceNew/GetCentreList", { stateId: sId }, function (result) {
        //     if (result && result != "error" && result != "noData") {
        //         var isAlreadyOpted = 0, checked = "", disabled = "";
        //         $("#dvCentre").show();
        //         var rJson = $.parseJSON(result);

        //         $.each(rJson, function (i, v) {
        //             items += "<option value='" + v.CentreId + "'>" + v.Centre + "</option>";
        //         });
        //         $("#ddlCity1").empty().append(items).select2();

        //         if ($("#ddlCity2").val() != "0") {
        //             var secondCityId = $("#ddlCity2").val();
        //             $("#ddlCity1 option[value='" + secondCityId + "']").remove();
        //         }

        //         if ($("#ddlCity3").val() != "0") {
        //             var thirdCityId = $("#ddlCity3").val();
        //             $("#ddlCity1 option[value='" + thirdCityId + "']").remove();
        //         }
        //         //if (isAlreadyOpted > 0) {
        //         //    $("#dvButton").hide();
        //         //    $('#rbCenter').prop("disabled", true);
        //         //}
        //     }
        //     else if (result == "noData") {
        //         $("#dvOptedCentre,#dvCentre,#dvButton").hide();
        //         jAlert("No city is available in this state.");
        //     }
        //     else {
        //         $("#dvOptedCentre,#dvCentre,#dvButton").hide();
        //         jAlert("Your action could not be completed due to an exception.");
        //     }
        //     overlay_enabled("divDisabled");
        // });
        overlay_enabled("divDisabled");
    }
    else {
        $("#dvOptedCentre,#dvCentre,#dvButton").hide();
    }
}

function getCentreList2(sId) {
    if (sId != "0") {
        overlay_disable("dvWrapper", "divDisabled");
        var str = "";
        var items = "<option value='0'>[Choose One]</option>";
        // $.post(appPath + "/CenterChoiceNew/GetCentreList", { stateId: sId }, function (result) {
        //     if (result && result != "error" && result != "noData") {
        //         var isAlreadyOpted = 0, checked = "", disabled = "";
        //         $("#dvCentre").show();
        //         var rJson = $.parseJSON(result);

        //         $.each(rJson, function (i, v) {
        //             items += "<option value='" + v.CentreId + "'>" + v.Centre + "</option>";
        //         });
        //         $("#ddlCity2").empty().append(items).select2();

        //         if ($("#ddlCity1").val() != "0") {
        //             var firstCityId = $("#ddlCity1").val();
        //             $("#ddlCity2 option[value='" + firstCityId + "']").remove();
        //         }
        //         if ($("#ddlCity3").val() != "0") {
        //             var secondCityId = $("#ddlCity3").val();
        //             $("#ddlCity2 option[value='" + secondCityId + "']").remove();
        //         }

        //         //if (isAlreadyOpted > 0) {
        //         //    $("#dvButton").hide();
        //         //    $('#rbCenter').prop("disabled", true);
        //         //}
        //     }
        //     else if (result == "noData") {
        //         $("#dvOptedCentre,#dvCentre").hide();
        //         jAlert("No city is available in this state.");
        //     }
        //     else {
        //         $("#dvOptedCentre,#dvCentre").hide();
        //         jAlert("Your action could not be completed due to an exception.");
        //     }
        //     overlay_enabled("divDisabled");
        // });
        overlay_enabled("divDisabled");
    }
    else {
        $("#dvOptedCentre,#dvCentre").hide();
    }
}

function getCentreList3(sId) {
    if (sId != "0") {
        overlay_disable("dvWrapper", "divDisabled");
        var str = "";
        var items = "<option value='0'>[Choose One]</option>";
        // $.post(appPath + "/CenterChoiceNew/GetCentreList", { stateId: sId }, function (result) {
        //     if (result && result != "error" && result != "noData") {
        //         var isAlreadyOpted = 0, checked = "", disabled = "";
        //         $("#dvCentre").show();
        //         var rJson = $.parseJSON(result);

        //         $.each(rJson, function (i, v) {
        //             items += "<option value='" + v.CentreId + "'>" + v.Centre + "</option>";
        //         });
        //         $("#ddlCity3").empty().append(items).select2();

        //         if ($("#ddlCity1").val() != "0") {
        //             var firstCityId = $("#ddlCity1").val();
        //             $("#ddlCity3 option[value='" + firstCityId + "']").remove();
        //         }
        //         if ($("#ddlCity2").val() != "0") {
        //             var SecondCityId = $("#ddlCity2").val();
        //             $("#ddlCity3 option[value='" + SecondCityId + "']").remove();
        //         }

        //     }
        //     else if (result == "noData") {
        //         $("#dvOptedCentre,#dvCentre").hide();
        //         jAlert("No city is available in this state.");
        //     }
        //     else {
        //         $("#dvOptedCentre,#dvCentre").hide();
        //         jAlert("Your action could not be completed due to an exception.");
        //     }
        //     overlay_enabled("divDisabled");
        // });
        overlay_enabled("divDisabled");
    }
    else {
        $("#dvOptedCentre,#dvCentre").hide();
    }
}

function Save(type) {
    var IsReOpen = $("#hdnIsReOpen").val();

    if ($("#ddlState").val() == "0") {
        jAlert("Select State 1!!", 'Message');
        return false;
    }
    else if ($("#ddlCity1").val() == "0") {
        jAlert("Select City Preference 1!!", 'Message');
        return false;
    }
    else if ($("#ddlState2").val() == "0") {
        jAlert("Select State 2 !!", 'Message');
        return false;
    }
    else if ($("#ddlCity2").val() == "0") {
        jAlert("Select City Preference 2 !!", 'Message');
        return false;
    }
    else if ($("#ddlState3").val() == "0") {
        jAlert("Select State 3 !!", 'Message');
        return false;
    }
    else if ($("#ddlCity3").val() == "0") {
        jAlert("Select City Preference 3 !!", 'Message');
        return false;
    }
    else if ($("#ddlCity3").val() == "0") {
        jAlert("Select City Preference 3 !!", 'Message');
        return false;
    }
    else if ($("#ddlCity4").val() == "0") {
        jAlert("Select City Preference 4 !!", 'Message');
        return false;
    }
    else if ($("#ddlCity1").val() == $("#ddlCity2").val()) {
        jAlert("Preference 1 and Preference 2 should be different  !!", 'Message');
        return false;
    }
    else if ($("#ddlCity1").val() == $("#ddlCity3").val()) {
        jAlert("Preference 1 and Preference 3 should be different  !!", 'Message');
        return false;
    }
    else if ($("#ddlCity2").val() == $("#ddlCity3").val()) {
        jAlert("Preference 2 and Preference 3 should be different  !!", 'Message');
        return false;
    }
    else if ($("#ddlCity1").val() == $("#ddlCity2").val() == $("#ddlCity3").val()) {
        jAlert("Preference 1 , Preference 2 and Preference 3 should be different  !!", 'Message');
        return false;
    }
    else {
        overlay_disable("dvWrapper", "divDisabled");
        var sId = $("#ddlState").val();
        var optCenterId = $("#ddlCity1").val();
        var sId2 = $("#ddlState2").val();
        var optCenterId2 = $("#ddlCity2").val();
        var sId3 = $("#ddlState3").val();
        var optCenterId3 = $("#ddlCity3").val();
        //var optCenterId = $("input[name='rbCenter']:checked").val();

        // $.post(appPath + "/CenterChoiceNew/SaveCentreNew", { stateId: sId, centerId: optCenterId, stateId2: sId2, centerId2: optCenterId2, stateId3: sId3, centerId3: optCenterId3 }, function (result) {
        //     if (result && result == "success") {
        //         $("#dvOptedCentre,#dvForCentre,#dvButton").hide();

        //         jAlert('Seven step of registration form has been completed.', 'Message', function (r) {
        //             if (r == true) {
        //                 go(type == 1 ? "UploadImages" : "UploadImages");
        //             }
        //         });
        //     }
        //     else if (result && result == "notAvaliable") {
        //         jAlert('Your opted city sheet is full, Do you want to try to choose another one?', 'City not avaliable', function (r) {
        //             if (r == true) {
        //                 $("#hdnPrevCity").val("0");
        //                 $("#ddlState").select2("val", "0");
        //                 $("#dvOptedCentre,#dvCentre,#dvButton").hide();
        //             }
        //             else
        //                 go("DashBoard");
        //         });
        //     }
        //     else if (result && result == "alreadyOpted") {
        //         getCentreList(sId);
        //         $("#hdnPrevCity").val("0");
        //         //jAlert("You have already opted center !!", 'Message');
        //         jAlert('Opted City Details has been updated successfully.', 'Message', function (r) {
        //             if (r == true) {
        //                 go(type == 1 ? "UploadImages" : "UploadImages");
        //             }
        //         });
        //     }
        //     else if (result && result == "error") {
        //         $("#hdnPrevCity").val("0");
        //         $("#ddlState").val("0");
        //         $("#dvOptedCentre,#dvCentre,#dvButton").hide();
        //         jAlert("Your action could not be completed due to an exception.");
        //     }
        //     else if (result && result == "closed" && IsReOpen != "True") {
        //         $("#hdnPrevCity").val("0");
        //         $("#ddlState").val("0");
        //         $("#dvOptedCentre,#dvCentre,#dvButton").hide();
        //         jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message');
        //     }
        //     overlay_enabled("divDisabled");
        // });
        overlay_enabled("divDisabled");
    }
}



