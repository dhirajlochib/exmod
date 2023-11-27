/// <reference path="uploadimages.js" />
$(document).ready(function () {


    var IsReOpen = $("#hdnIsReOpen").val();

    // if (isPannelClosed == "true" && IsReOpen.toLowerCase() != "true" && $("#hdnIsAdmin").val() == "0") {
    //     $("#divSaveProceed").hide();
    //     $("#divProceed").show();
    // }
    // else {
    //     $("#divSaveProceed").show();
    //     $("#divProceed").hide();
    // }
    //$("#ddlLstQlfyExm").change(function () {
    //    GetExperienceName($("#ddlLstQlfyExm").val());
    //});
    //  fnGetBasicDetails();
    BindStates("#ddlState");
    BindStates("#ddlStateCouncil");
    BindStates("#ddlSecondState");
    BindStates("#ddlDesirableState");

    //$(document).on('change', "#ddlLstQlfyExm", function () {
    //    fnBindSecondQuli($(this).val());
    //    if ($(this).val() == "103" || $(this).val() == "104" || $(this).val() == "105")
    //        $("#divDeputyGeneralManager").show();
    //    else
    //        $("#divDeputyGeneralManager").hide();
    //});


    $(".SecondDegree").hide();
    //$(document).on('change', "#ddlLstQlfyExm", function () {
    //    fnBindSecondQuli($(this).val());
    //    //debugger
    //    if ($(this).val() == "196") {
    //        $("#RdSecYes").prop('checked', true);
    //        $(".SecondDegree").show();
    //    }
    //    else {
    //        $(".SecondDegree").hide();
    //        //$("#RdSecNo").prop('checked', true); 
    //    }
    //});



    $(document).on('change', "#ddlPState", function () {
        if ($(this).val() != "0") {
            BindCities('#ddlPCty', $(this).val()), fnGetSameAddress();
        }
        else {
            $('#ddlPCty').empty().append('<option value="0">[Choose One]</option>');
        }
    });

    $(document).on('change', "#ddlMState", function () {
        if ($(this).val() != "0") {
            BindCities('#ddlMCty', $(this).val());
        }
        else {
            $('#ddlMCty').empty().append('<option value="0">[Choose One]</option>');
        }

    });

    $(document).on('change', "#ddlPCty", function () {
        fnGetPermanentOtherCity(), fnGetSameAddress();
    });

    $(document).on('change', "#ddlMCty", function () {
        fnGetPostalOtherCity();
    });

    $(document).on('change', "#txtAdmissionDate,#txtPassingDate", function () {
        DateCompare('0', 'txtAdmissionDate', 'txtPassingDate');
    });

    //$(document).on('change', "#txtPassingDate,#txtSecondAdmissionDate", function () {
    //    DateCompare('1', 'txtPassingDate', 'txtSecondAdmissionDate');
    //});

    $(document).on('change', "#txtSecondAdmissionDate,#txtSecondPassingDate", function () {
        DateCompare('2', 'txtSecondAdmissionDate', 'txtSecondPassingDate');
    });

    $(document).on('change', "#LinkSameAddress,#txtPAdrs,#txtPAdrs2,#txtPAdrs3,#ddlPCountry,#txtPPCde,#txtPCountry,#txtPState,#txtPCty", function () {
        fnGetSameAddress();
    });

    $(document).on('blur', "#txtPAdrs,#txtPAdrs2,#txtPAdrs3,#txtPPCde,#txtPCountry,#txtPState,#txtPCty", function () {
        fnGetSameAddress();
    });

    $(document).on('change', "#ddlPCty", function () {
        fnGetPermanentOtherCity(), fnGetSameAddress();
    });

    $(document).on('change', "#ddlMCty", function () {
        fnGetPostalOtherCity();
    });

    $(document).on('change', "#ddlPDistrict", function () {
        fnGetSameAddress();
    });

    $(document).on('blur', "#txtPPCde", function () {
        BindAddressList("#ddlPState", "#ddlPDistrict", '#ddlPCty', $(this).val(), $('#ddlPState').val(), $('#ddlPDistrict').val(), $('#ddlPCty').val());
    });

    $(document).on('blur', "#txtMPCde", function () {
        BindAddressList("#ddlMState", "#ddlMDistrict", '#ddlMCty', $(this).val(), $('#ddlMState').val(), $('#ddlMDistrict').val(), $('#ddlMCty').val());
    });

    $(document).on('keyup', "#txtPAdrs,#txtPAdrs2,#txtPAdrs3,#txtPCountry,#txtPState,#txtPCty,#txtMAdrs,#txtMAdrs2,#txtMAdrs3,#txtMCountry,#txtMState,#txtMCty,#txtUniversityName,#txtCollageName,#txtSecondUniversityName,#txtSecondCollageName", function () {
        $(this).val($(this).val().toUpperCase());
    });

    $(document).on('click', "#btnSave", function () {
        fnValidate(1);
    });

    $(document).on('click', "#btnProceed", function () {
        //added on 23-02-2017
        var IsReOpen = $("#hdnIsReOpen").val();
        var IsClosedPostWise = "0";
        var appliedPostId = $("#hdnAppliedPostId").val();
        var isAdmin = $("#hdnIsAdmin").val();

        //if ((appliedPostId == 1 || appliedPostId == 2 || appliedPostId == 20) || isAdmin == "1") {
        //    IsClosedPostWise = "1";
        //}
        //else
        //    IsClosedPostWise = "0";

        // if (isPannelClosed == "True" && IsReOpen.toLowerCase() != "true" && $("#hdnIsAdmin").val() == "0") {
        //     jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
        //         if (r == true) {
        //             go("DashBoard");
        //         }
        //     });
        // }
        // if (IsClosedPostWise == "1") {
        //    jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
        //        if (r == true) {
        //            go("DashBoard");
        //        }
        //    });
        //}
        // else
        // fnValidate(2);
    });

    $(document).on('click', "#btnProceed1", function () {
        var IsReOpen = $("#hdnIsReOpen").val();
        // if (isPannelClosed == "True" && $("#hdnRStatus").val() != "3" && IsReOpen.toLowerCase() != "true" && $("#hdnIsAdmin").val() == "0") {
        //     jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
        //         if (r == true) {
        //             go("DashBoard");
        //         }
        //     });
        // }
        // else if (appliedPostId != 10 && appliedPostId != 11) {
        //     jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
        //         if (r == true) {
        //             go("DashBoard");
        //         }
        //     });
        // }
        // else
        //     go("UploadImages");
    });



});

// function fnGetQualificationDetailsOnLoad() {
//     overlay_disable("dvWrapper", "divDisabled");
//     var sNId = $("#hdnSId").val() != "0" ? $("#hdnSId").val() : "";
//     $.post("Qualification/GetQualificationDetails", { sId: sNId, adminId: $("#hdnIsAdmin").val() }, function (result) {
//         //$.post("Qualification/GetQualificationDetails", function (result) {
//         if (result && result != "error" && result != "nodata") {
//             //debugger
//             var data = $.parseJSON(result)[0];
//             fnChangeStatus(data.SetupCounter);
//             //fnGetPreviousStatus();

//             var hdnAppliedPostId = $("#hdnAppliedPostId").val();
//             fnBindSecondQuli(data.QualificationExamId);
//             $("#hdnRStatus").val(data.RStatus);

//             $("#txtPAdrs").val(data.PAddress);
//             $("#txtPAdrs2").val(data.PAddress2);
//             $("#txtPAdrs3").val(data.PAddress3);
//             $("#ddlPCountry option[value=" + data.PCountryId + "]").prop('selected', true);

//             var QlfyExm = data.QualificationExamId;

//             editBindFirstDegree(hdnAppliedPostId, data.QualificationExamId);

//             $('#hdnQuelificationid').val(data.QualificationExamId);


//             //if ($("#ddlLstQlfyExm").val() == "196" && QlfyExm == "196") {
//             if (QlfyExm == "196") {
//                 $("#RdSecYes").prop('checked', true);
//                 $(".SecondDegree").show();
//             }
//             else {
//                 $("#RdSecYes").prop('checked', false);
//                 $(".SecondDegree").hide();
//             }

//             if (data.PCountryId == "1") {
//                 $("#divPState,#divPDistrict,#divPCty").show();
//                 $("#TrtxtPCountry,#TrtxtPState,#TrtxtPDistrict,#TrtxtPCty").hide();
//                 BindAddressList("#ddlPState", "#ddlPDistrict", '#ddlPCty', data.PPinCode, data.PStateId, data.PDistrictId, data.PCityId);
//                 $("#txtPCountry,#txtPState,#txtPDistrict,#txtPCty").val('');
//                 if (data.PCityId == 9999) {
//                     $("#ddlPCty option[value=" + data.PCityId + "]").prop('selected', true);
//                     $("#TrtxtPCty").show();
//                     $("#txtPCty").val(data.POtherCity);
//                 }
//             }
//             else {
//                 $("#TrtxtPCountry,#TrtxtPState,#TrtxtPDistrict,#TrtxtPCty").show();
//                 $("#divPState,#divPDistrict,#divPCty").hide();
//                 $("#txtPCountry").val(data.POtherCountry);
//                 $("#txtPState").val(data.POtherState);
//                 $("#txtPDistrict").val(data.POtherDistrict);
//                 $("#txtPCty").val(data.POtherCity);
//             }
//             $("#txtPPCde").val(data.PPinCode);
//             $("#txtMAdrs").val(data.MAddress);
//             $("#txtMAdrs2").val(data.MAddress2);
//             $("#txtMAdrs3").val(data.MAddress3);
//             $("#ddlMCountry option[value=" + data.MCountryId + "]").prop('selected', true);
//             if (data.MCountryId == "1") {
//                 $("#divMState,#divMDistrict,#divMCty").show();
//                 $("#TrtxtMCountry,#TrtxtMState,#TrtxtMDistrict,#TrtxtMCty").hide();
//                 BindAddressList("#ddlMState", "#ddlMDistrict", '#ddlMCty', data.MPinCode, data.MStateId, data.MDistrictId, data.MCityId);
//                 $("#txtMCountry,#txtMState,#txtMDistrict,#txtMCty").val('');
//                 if (data.MCityId == 9999) {
//                     $("#ddlMCty option[value=" + data.MCityId + "]").prop('selected', true);
//                     $("#TrtxtMCty").show();
//                     $("#txtMCty").val(data.MOtherCity);
//                 }
//             }
//             else {
//                 $("#divMState,#divMDistrict,#divMCty").hide();
//                 $("#TrtxtMCountry,#TrtxtMState,#TrtxtMDistrict,#TrtxtMCty").show();
//                 $("#txtMCountry").val(data.MOtherCountry);
//                 $("#txtMState").val(data.MOtherState);
//                 $("#txtMDistrict").val(data.MOtherDistrict);
//                 $("#txtMCty").val(data.MOtherCity);
//             }
//             $("#txtMPCde").val(data.MPinCode);

//             if (data.IsSameAddress == "1") {
//                 $("#LinkSameAddress").prop('checked', true);
//                 $('#txtMAdrs,#txtMAdrs2,#txtMAdrs3,#txtMPCde,#ddlMCountry,#ddlMState,#ddlMDistrict,#txtMDistrict,#ddlMCty,#txtMCountry,#txtMState,#txtMCty').prop('disabled', true);
//             }
//             else {
//                 $("#LinkSameAddress").prop('checked', false);
//                 $('#txtMAdrs,#txtMAdrs2,#txtMAdrs3,#txtMPCde,#ddlMCountry,#ddlMState,#ddlMDistrict,#txtMDistrict,#ddlMCty,#txtMCountry,#txtMState,#txtMCty').prop('disabled', false);
//             }

//             BindFirstDegreeEdit('#ddlLstQlfyExm', hdnAppliedPostId, data.QualificationExamId);
//             GetExperienceName(data.QualificationExamId);
//             //$("#ddlLstQlfyExm option[value=" + data.QualificationExamId + "]").prop('selected', true);

//             $("#txtUniversityName").val(data.UnivName);
//             $("#txtCollageName").val(data.CollegeName);
//             $("#txtAdmissionDate").val(data.AdmissionDate == "01/01/1900" ? '' : data.AdmissionDate);
//             $("#txtPassingDate").val(data.PassingDate == "01/01/1900" ? '' : data.PassingDate);
//             BindStatesEdit("#ddlState", data.DegreeStateId);

//             if (data.QualificationExamId == "21") {
//                 $("#divLibrarianGrade3").show();
//                 $("input:radio[name=rbtnlstTypingSpeed][value=" + data.TypingSpeed + "]").attr('checked', true);
//             }
//             else {
//                 $("#divLDC").hide();
//                 $('input[name=rbtnlstTypingSpeed]').prop('checked', false);
//             }

//             if (data.QualificationExamId == "73") {
//                 $("#divPharmacist").show();
//                 $("#txtDrivingLicenseNo").val(data.DrivingLicenseNo);
//             }
//             else {
//                 $("#divPharmacist").hide();
//                 $("#txtDrivingLicenseNo").val('');
//             }

//             GetExperienceName(data.QualificationExamId);

//             if (data.RegistrationNumber != '' && data.RegistrationDate != "01/01/1900" && data.RegistrationNumber != 'N/A') {
//                 fnShowDegree();
//                 $("#txtRegistrationNumber").val(data.RegistrationNumber);
//                 $("#txtRegistrationDate").val(data.RegistrationDate == "01/01/1900" ? '' : data.RegistrationDate);
//                 BindStatesEdit("#ddlStateCouncil", data.StateCouncilId);

//             }

//             //-----------------Bind Registration Details------------------
//             //if (hdnAppliedPostId == "3" || hdnAppliedPostId == "21" || hdnAppliedPostId == "35"|| hdnAppliedPostId == "56" || hdnAppliedPostId == "36" || hdnAppliedPostId == "39") {
//             //    $("#txtRegistrationNumber").val(data.RegistrationNumber);
//             //    $("#txtRegistrationDate").val(data.RegistrationDate == "01/01/1900" ? '' : data.RegistrationDate);
//             //    BindStatesEdit("#ddlStateCouncil", data.StateCouncilId);
//             //}
//             //else {
//             //    $("#txtRegistrationNumber").val('');
//             //    $("#txtRegistrationDate").val('');
//             //    $("#ddlStateCouncil").val(0);
//             //}

//             //if (data.QualificationExamId == "21") {
//             //    $("#divLibrarianGrade3").show();
//             //    $("input:radio[name=rbtnlstTypingSpeed][value=" + data.TypingSpeed + "]").attr('checked', true);
//             //}
//             //else {
//             //    $("#divLDC").hide();
//             //    $('input[name=rbtnlstTypingSpeed]').prop('checked', false);
//             //}

//             //-----------------Bind Additional Qualification Details Details------------------
//             if (data.DegreeName != "NA") {
//                 $("#ExtraQ1,#ExtraQ2").show();
//                 $("#RdExpYes").prop('checked', true);
//                 $("#txtDegreeNameExtra").val(data.DegreeName);
//                 $("#txtAdmissionDateExtRa").val(data.AdmissionDateExtRa == "01/01/1900" ? '' : data.AdmissionDateExtRa);
//                 $("#txtPassingDateExtra").val(data.PassingDateExtra == "01/01/1900" ? '' : data.PassingDateExtra);
//             }
//             else {
//                 $("#ExtraQ1,#ExtraQ2").hide();
//                 $("#RdExpNo").prop('checked', true);
//                 $("#txtDegreeNameExtra").val('');
//                 $("#txtAdmissionDateExtRa").val('');
//                 $("#txtPassingDateExtra").val('');
//             }

//             ////-----------------Bind Second Education Qualification------------------
//             if (data.SecondQualifyingExamId > "0") {
//                 fnBindSecondQuliEdit(hdnAppliedPostId, data.SecondQualifyingExamId);
//                 $("#txtSecondUniversityName").val(data.SecondUniversityName);
//                 $("#txtSecondCollageName").val(data.SecondCollageName);
//                 $("#txtSecondAdmissionDate").val(data.SecondAdmissionDate == "01/01/1900" ? '' : data.SecondAdmissionDate);
//                 $("#txtSecondPassingDate").val(data.SecondPassingDate == "01/01/1900" ? '' : data.SecondPassingDate);
//                 //$("#ddlSecondQlfyStatus option[value=" + data.SecondQualificationStatusId + "]").prop('selected', true);
//                 BindStatesEdit("#ddlSecondState", data.SecondDegreeStateId);
//             }
//             else {
//                 $("#txtSecondUniversityName").val('');
//                 $("#txtSecondCollageName").val('');
//                 $("#txtSecondAdmissionDate").val('');
//                 $("#txtSecondPassingDate").val('');
//                 $("#ddlSecondQlfyStatus").val(0);
//                 $("#ddlSecondState").val(0);
//             }


//             //else if (data.SecondQualifyingExamId == "152" || data.SecondQualifyingExamId == "158" || data.SecondQualifyingExamId == "160" || data.SecondQualifyingExamId == "161" || data.SecondQualifyingExamId == "162" || data.SecondQualifyingExamId == "163") {
//             //    $("#divDegreeName").show();
//             //    $("#txtDegreeName").val(data.HigherPGDegreeName);
//             //}
//             ////else {
//             //    $("#divRegistrationDetails").hide();
//             //    $("#txtRegistrationNumber").val('');
//             //    $("#txtRegistrationDate").val('');
//             //    $("#ddlStateCouncil").val(0);
//             //}


//             //if (data.DesirableQualifyingExamId > "0") {
//             //    $("#txtDesirableExamUniversityName").val(data.DesirableUniversityName);
//             //    $("#txtDesirableCollageName").val(data.DesirableCollageName);
//             //    $("#txtDesirableAdmissionDate").val(data.DesirableAdmissionDate == "01/01/1900" ? '' : data.DesirableAdmissionDate);
//             //    $("#txtDesirablePassingDate").val(data.DesirablePassingDate == "01/01/1900" ? '' : data.DesirablePassingDate);

//             //    $("#ddlDesirableQlfyExm option[value=" + data.DesirableQualifyingExamId + "]").prop('selected', true);
//             //    BindStatesEdit("#ddlDesirableState", data.DesirableDegreeStateId);
//             //}
//             //else {
//             //    $("#txtDesirableExamUniversityName").val('');
//             //    $("#txtDesirableCollageName").val('');
//             //    $("#txtDesirableAdmissionDate").val('');
//             //    $("#txtDesirablePassingDate").val('');
//             //    $("#ddlDesirableState").val(0);
//             //}

//             //if (hdnAppliedPostId == "14") {
//             //    fnBindSecondQuli(100);
//             //    $("#SecondDegreeheader").show();
//             //    $("#SecondDegree").show();
//             //}

//             //-----------------Payment Check------------------

//             //if ((data.IsPayment == "1" || data.IsPayment == "true") && $("#hdnIsAdmin").val() == "0") {
//             ////if (data.IsPayment == "2") {
//             //    $('#ddlLstQlfyExm,#ddlLstDiscipline,#txtUniversityName,#txtCollageName,#txtAdmissionDate,#txtPassingDate,#ddlState,#txtPharmacistRegNo, #ddlSecondLstQlfyExm,#txtSecondOtherQualificationExam').prop('disabled', true);
//             //    $('#txtSecondUniversityName,#txtSecondCollageName,#txtSecondAdmissionDate,#txtSecondPassingDate,#ddlSecondState#txtDegreeNameExtra,#txtAdmissionDateExtRa,#txtPassingDateExtra').prop('disabled', true);
//             //    $("input:radio[name=rbtnlstTypingSpeed]").prop('disabled', true);
//             //    $("input:radio[name=rbtnlstOTA]").prop('disabled', true);
//             //    $("input:radio[name=rbtnlstWarden]").prop('disabled', true);
//             //    $("input:radio[name=rbtnlstJHTranslator]").prop('disabled', true);
//             //    $("input:radio[name=rbtnlstStoreKeeperGeneral]").prop('disabled', true);
//             //    $("input:radio[name=RdExperience]").prop('disabled', true); 
//             //    $('#ddlPCountry,#txtPCountry,#txtPState,#txtPPCde,#ddlPState,#ddlPDistrict,#txtPDistrict,#ddlPCty,#txtPCty,#txtPAdrs,#txtPAdrs2,#txtPAdrs3').prop('disabled', true);
//             //    $('#ddlMCountry,#txtMCountry,#txtMState,#txtMPCde,#ddlMState,#ddlMDistrict,#txtMDistrict,#ddlMCty,#txtMCty,#txtMAdrs,#txtMAdrs2,#txtMAdrs3').prop('disabled', true);
//             //    $("#LinkSameAddress").prop("disabled", true);
//             //}
//             //else {
//             //    $('#ddlLstQlfyExm,#ddlLstDiscipline,#txtUniversityName,#txtCollageName,#txtAdmissionDate,#txtPassingDate,#ddlState,#txtPharmacistRegNo, #ddlSecondLstQlfyExm,#txtSecondOtherQualificationExam').prop('disabled', false);
//             //    $('#txtSecondUniversityName,#txtSecondCollageName,#txtSecondAdmissionDate,#txtSecondPassingDate,#ddlSecondState#txtDegreeNameExtra,#txtAdmissionDateExtRa,#txtPassingDateExtra').prop('disabled', false);
//             //    $("input:radio[name=rbtnlstTypingSpeed]").prop('disabled', false);
//             //    $("input:radio[name=rbtnlstOTA]").prop('disabled', false);
//             //    $("input:radio[name=rbtnlstWarden]").prop('disabled', false);
//             //    $("input:radio[name=rbtnlstJHTranslator]").prop('disabled', false);
//             //    $("input:radio[name=rbtnlstStoreKeeperGeneral]").prop('disabled', false);
//             //    $("input:radio[name=RdExperience]").prop('disabled', false);
//             //    $('#ddlPCountry,#txtPCountry,#txtPState,#txtPPCde,#ddlPState,#ddlPDistrict,#txtPDistrict,#ddlPCty,#txtPCty,#txtPAdrs,#txtPAdrs2,#txtPAdrs3').prop('disabled', false);
//             //    $('#ddlMCountry,#txtMCountry,#txtMState,#txtMPCde,#ddlMState,#ddlMDistrict,#txtMDistrict,#ddlMCty,#txtMCty,#txtMAdrs,#txtMAdrs2,#txtMAdrs3').prop('disabled', false);
//             //    $("#LinkSameAddress").prop("disabled", false);
//             //}

//         }
//         else {
//             fnChangeStatus(1);
//             //fnGetPreviousStatus();
//         }
//         overlay_enabled("divDisabled");
//     });

//     overlay_enabled("divDisabled");
// }

// function fnGetBasicDetails() {
//     overlay_disable("dvWrapper", "divDisabled");
//     var sNId = $("#hdnSId").val() != "0" ? $("#hdnSId").val() : "";
//     $.post("Qualification/fnGetPreviousStatus", { sId: sNId }, function (result) {
//         if (result && result != "noRecord") {
//             var data = $.parseJSON(result)[0];
//             $("#hdnCategoryId").val(data.CategoryId);
//             $("#hdnOPH").val(data.IsOPH);
//             $("#hdnOphPercent").val(data.DisabilityPercent);
//             $("#hdnIsReOpen").val(data.IsReOpen);
//             $("#hdnAppliedPostId").val(data.AppliedPostId);
//         }
//         fnShowDegree();
//         fnGetQualificationDetailsOnLoad();
//         overlay_enabled("divDisabled");
//     });
//     overlay_enabled("divDisabled");
// }


// function BindStatesEdit(controlname, value, selId) {
//     overlay_disable("dvWrapper", "divDisabled");
//     var items = "<option value='0'>[Choose One]</option>";
//     $.post("" + currentControllerName + "/GetState", function (result) {
//         if (result && result != "error") {
//             $.each(result, function (i, v) {
//                 var selected = (selId && selId != "" && (selId == v.StateId)) ? "selected='selected'" : "";
//                 items += "<option value='" + v.StateId + "' " + selected + ">" + v.StateName + "</option>";
//             });
//             var selected = (selId && selId != "" && (selId == "9999")) ? "selected='selected'" : "";
//             items += "<option value='9999' " + selected + ">OTHER</option>";
//             $(controlname).empty().append(items);
//             $(controlname).val(value);
//         }
//         else
//             $(controlname).empty().append(items);

//         overlay_enabled("divDisabled");
//     });
// }

// function fnGetPreviousStatus() {
//     overlay_disable("dvWrapper", "divDisabled");
//     $.post("Qualification/fnGetPreviousStatus", function (result) {
//         if (result && result != "noRecord") {
//             var data = $.parseJSON(result)[0];
//             var str = (data.IsPaid == 0) ? " payment, " : "";
//             var str1 = (data.IsCenterOpted == 0) ? " city choice" : "";
//             if (str != "" || str1 != "") {
//                 jAlert('<span class="contentRed b f18">Your ' + str + str1 + ' details are still incomplete, Please complete due steps.</span>', 'Message', function (r) {
//                     if (r == true) {
//                         go(str != "" ? "FeePayment" : "CenterChoice");
//                     }
//                 });
//             }
//         }
//         overlay_enabled("divDisabled");
//     });
//     overlay_enabled("divDisabled");
// }
//-->> =================== Qualification ===========================
// function fnShowDegree() {
//     var AppliedPostId = $("#hdnAppliedPostId").val();
//     BindFirstDegree('#ddlLstQlfyExm', AppliedPostId);
//     $("#divQualiExamStatus,#divSecondUnivDetails,#divDegree,#divSecondQualiExamStatus, #divSecondDegree").hide();
//     $("#divUnivDetails").show();

//     $("#ddlDesirableQlfyExm").html('');
//     var listItems = "";

//     $.post("Qualification/fnGetRegistration", { Q1id: AppliedPostId }, function (result) {
//         if (result && result != "noRecord") {
//             var data = $.parseJSON(result)[0];
//             //$("#hdnCategoryId").val(data.CategoryId);
//             //$("#hdnOPH").val(data.IsOPH);
//             //$("#hdnOphPercent").val(data.DisabilityPercent);
//             //$("#hdnIsReOpen").val(data.IsReOpen);
//             //$("#hdnAppliedPostId").val(data.AppliedPostId);


//             $("#lblMsgHeader").text(data.RegistrationName);
//             $("#lblStateCouncil").text('State');
//             $("#lblRegistrationNumber").text('Registration Number.');
//             $("#lblRegistrationDate").text('Registration Date.');
//             $("#divRegistrationDetails").show();
//         }


//     });


//     //if (AppliedPostId == "1") {
//     //    listItems += "<option value='0'>--Select--</option>";
//     //    listItems += "<option value='2'>A Post-graduate Degree  from a recognized University/ Institute or equivalent</option>";
//     //    listItems += "<option value='107'>A Diploma in genetics from a recognized University/ Institute or equivalent</option>";
//     //    $("#ddlDesirableQlfyExm").html(listItems);
//     //    $("#DesirableDegreeheader").show();
//     //    $("#divDesirableDegree").show();
//     //    $("#divVeterinaryOfficer").show();
//     //}
//     //else if (AppliedPostId == "2") {
//     //    $("#divChemist").show();
//     //}
//     //else if (AppliedPostId == "3") {
//     //    $("#divClinicalPsychologistPsychologist").show();
//     //    $("#divRegistrationDetails").show();
//     //    $("#lblMsgHeader").text('Registered with Rehabilitation Council of India (RCI).');
//     //    $("#lblStateCouncil").text('State of Rehabilitation Council of India.');
//     //    $("#lblRegistrationNumber").text('Registration Number.');
//     //    $("#lblRegistrationDate").text('Registration Date.');
//     //    //$("#divDisplayMsg1").show();
//     //    //$("#divMsg1").text('Desirable : Experience of teaching Psychology in recognized teaching institution for at least three year');
//     //    //$("#lblRegisteredMsg").text('Registered with Rehabilitation Council of India (RCI).');
//     //}
//     //else if (AppliedPostId == "5" || AppliedPostId == "6" || AppliedPostId == "7" || AppliedPostId == "8" || AppliedPostId == "9" || AppliedPostId == "10" || AppliedPostId == "11" || AppliedPostId == "12" || AppliedPostId == "45" || AppliedPostId == "46") {
//     //    $("#divScientist1").show();
//     //}


//     //else if (AppliedPostId == "13") {
//     //    $("#divSeniorChemist").show();
//     //}
//     ////else if (AppliedPostId == "14") {
//     ////    listItems += "<option value='0'>--Select--</option>";
//     ////    listItems += "<option value='98'>Diploma in Journalism</option>";
//     ////    $("#ddlDesirableQlfyExm").html(listItems);
//     ////    $("#DesirableDegreeheader").show();
//     ////    $("#divDesirableDegree").show();
//     ////    $("#divSeniorTechnicalEditor").show();
//     ////}
//     //else if (AppliedPostId == "15") {
//     //    $("#divWelfareOfficer").show();
//     //}
//     //else if (AppliedPostId == "16") {
//     //    $("#divAssistantDietician").show();
//     //}
//     //else if (AppliedPostId == "18") {
//     //    $("#divLibrarianGrade3").show();
//     //}
//     //else if (AppliedPostId == "19") {
//     //    $("#divAssistantStoresOfficer").show();
//     //}
//     //else if (AppliedPostId == "21" ) {
//     //    //$("#divPharmacist").show();
//     //    $("#divTechnicalAssistantENT").show();
//     //    $("#divMsg1").text('Desirable : Clinical experience in a hospital (ENT)');
//     //    //listItems += "<option value='0'>--Select--</option>";
//     //    //listItems += "<option value='99'>M.Sc. (Hons.) in Speech and Hearing</option>";
//     //    //$("#ddlDesirableQlfyExm").html(listItems);
//     //    //$("#DesirableDegreeheader").show();
//     //    //$("#divDesirableDegree").show();
//     //    // $("#lblRegisteredMsg").text('Registered with Rehabilitation Council of India (RCI).');

//     ////    $("#divRegistrationDetails").show();
//     ////    $("#lblMsgHeader").text('Registered with Rehabilitation Council of India (RCI).');
//     ////    $("#lblStateCouncil").text('State of Rehabilitation Council of India.');
//     ////    $("#lblRegistrationNumber").text('Registration Number.');
//     ////    $("#lblRegistrationDate").text('Registration Date.');
//     //}
//     //else if (AppliedPostId == "26") {
//     //    $("#divPhysicalTrainingInstructor").show();
//     //}
//     //else if (AppliedPostId == "27") {
//     //    $("#divStoreKeeperDrugs").show();
//     //}
//     //else if (AppliedPostId == "29") {
//     //    $("#divJrEngineerAcR").show();
//     //}
//     //else if (AppliedPostId == "32") {
//     //    $("#divBariatricCoordinator").show();
//     //}
//     //else if (AppliedPostId == "33") {
//     //    $("#divGeneticCounsellor").show();
//     //}
//     ////else if (AppliedPostId == "34") {
//     ////    $("#divOTA").show();
//     ////}
//     //else if (AppliedPostId == "35" ) {
//     //    //$("#divPharmacist").show();
//     //    $("#divRegistrationDetails").show();
//     //    $("#divDentalTechnicianGrade2").show();
//     //    //$("#lblRegisteredMsg").text('Registered as Dental Mechanic with Dental Council.');
//     //    $("#lblMsgHeader").text('Registered as Dental Mechanic with Dental Council.');
//     //    $("#lblStateCouncil").text('State of  Council.');
//     //    $("#lblRegistrationNumber").text('Registration Number.');
//     //    $("#lblRegistrationDate").text('Registration Date.');


//     //}
//     //else if (AppliedPostId == "56" ) {
//     //    //$("#divPharmacist").show();
//     //    $("#divRegistrationDetails").show();
//     //    $("#divDentalTechnicianGrade2").show();
//     //    //$("#lblRegisteredMsg").text('Registered as Dental Mechanic with Dental Council.');
//     //    $("#lblMsgHeader").text('Should be a registered Pharmacist under the Pharmacy Act, 1948.');
//     //    $("#lblStateCouncil").text('State of Dental Council.');
//     //    $("#lblRegistrationNumber").text('Registration Number.');
//     //    $("#lblRegistrationDate").text('Registration Date.');


//     //}
//     //else if (AppliedPostId == "36" ) {
//     //    //$("#divPharmacist").show();
//     //    //$("#lblRegisteredMsg").text('Registered with Rehabilitation Council of India (RCI).');
//     //    $("#divRegistrationDetails").show();
//     //    $("#lblMsgHeader").text('Registered with Rehabilitation Council of India (RCI).');
//     //    $("#lblStateCouncil").text('State of Rehabilitation Council of India.');
//     //    $("#lblRegistrationNumber").text('Registration Number.');
//     //    $("#lblRegistrationDate").text('Registration Date.');
//     //}
//     //else if (AppliedPostId == "37") {
//     //    $("#divDriverOrdinaryGrade").show();
//     //}
//     //else if (AppliedPostId == "38") {
//     //    $("#divReceptionist").show();
//     //}
//     //else if (AppliedPostId == "40") {
//     //    $("#divJuniorPhotographer").show();
//     //}
//     //else if (AppliedPostId == "42")
//     //    $("#divJuniorMedicalLabTechnologist").show();
//     //else if (AppliedPostId == "43") {
//     //    $("#divDraftsmanGrade3").show();
//     //}
//     //else if (AppliedPostId == "44") {
//     //    $("#divTechnicianTelephoneGrade4").show();
//     //}


// }

function BindFirstDegree(controlname, pId, selId) {
    overlay_disable("dvWrapper", "divDisabled");
    //var items = "<option value='0'>[Choose One]</option>";
    $("#ddlLstQlfyExm").html("");
    var listItems = '';
    // $.post("" + currentControllerName + "/GetFirstDegree", { postId: pId == null ? 0 : pId }, function (result) {
    //     if (result && result != "error") {

    //         //  var listItems = "<div class='option' onclick='myOptionClick(" + 0 + ")'><p>[Choose One]</p></div>";
    //         for (var i = 0; i < result.length; i++) {
    //             listItems += "<div class='option' onclick='myOptionClick(" + result[i].Id + ")' id='" + result[i].Id + "'><p>" + result[i].Name + "</p></div>";
    //         }

    //         $("#ddlLstQlfyExm").html(listItems);


    //         //var selected = (selId && selId != "" && (selId == v.Id)) ? "selected='selected'" : "";
    //         ////items += "<option value='" + v.Id + "' " + selected + ">" + v.Name + "</option>";
    //         //items += "<option value='" + v.Id + "' " + " title= " + '"' + v.Name + '"' + selected + ">" + v.Name + "</option>";

    //         //$(controlname).empty().append(items);

    //         //var data = $.parseJSON(result)[0];
    //         //var isIsExperience = data.IsExperience;
    //         //if (isIsExperience == "1" || isIsExperience == true) {
    //         //    $("#divInstruments").show();
    //         //    $("#spnExpMsg").text(data.ExperienceName);
    //         //}

    //     }
    //     //else
    //     //    $(controlname).empty().append(items);

    //     overlay_enabled("divDisabled");
    // });
}
function editBindFirstDegree(pId, selId) {
    overlay_disable("dvWrapper", "divDisabled");
    //var items = "<option value='0'>[Choose One]</option>";
    $("#ddlLstQlfyExm").html("");
    var listItems = '';
    // $.post("" + currentControllerName + "/GetFirstDegree", { postId: pId == null ? 0 : pId }, function (result) {
    //     if (result && result != "error") {

    //         //  var listItems = "<div class='option' onclick='myOptionClick(" + 0 + ")'><p>[Choose One]</p></div>";
    //         for (var i = 0; i < result.length; i++) {
    //             listItems += "<div class='option' onclick='myOptionClick(" + result[i].Id + ")' id='" + result[i].Id + "'><p>" + result[i].Name + "</p></div>";
    //         }

    //         $("#ddlLstQlfyExm").html(listItems);
    //         var dropvalue = $("#" + selId).find("p").html();
    //         $($("#" + selId).closest(".custom-dropdown").find(".custom-dropBtn").html(dropvalue + "<span class='triangle_down'></span>"));

    //         //var selected = (selId && selId != "" && (selId == v.Id)) ? "selected='selected'" : "";
    //         ////items += "<option value='" + v.Id + "' " + selected + ">" + v.Name + "</option>";
    //         //items += "<option value='" + v.Id + "' " + " title= " + '"' + v.Name + '"' + selected + ">" + v.Name + "</option>";

    //         //$(controlname).empty().append(items);

    //         //var data = $.parseJSON(result)[0];
    //         //var isIsExperience = data.IsExperience;
    //         //if (isIsExperience == "1" || isIsExperience == true) {
    //         //    $("#divInstruments").show();
    //         //    $("#spnExpMsg").text(data.ExperienceName);
    //         //}

    //     }
    //     //else
    //     //    $(controlname).empty().append(items);

    //     overlay_enabled("divDisabled");
    // });
}
function GetExperienceName(Id) {
    var postid = $("#hdnAppliedPostId").val();
    $("#spn_notes").html('');
    $.post("Qualification/GetExperienceName", { Id: Id, postid: postid }, function (result) {
        if (result && result != "error") {
            var data = $.parseJSON(result)[0];
            //console.log(result);


            $("#spn_notes").html('Notes: ' + data.experience);
            //$("#spn_Desirable").html('Desirable: ' + data.Desirable);

        }
        else { console.log("error"); }

    });
    //var data = {

    //};
}


function BindFirstDegreeEdit(controlname, pId, selId) {
    overlay_disable("dvWrapper", "divDisabled");
    /*  var items = "<option value='0'>[Choose One]</option>";*/
    // $.post("" + currentControllerName + "/GetFirstDegree", { postId: pId == null ? 0 : pId }, function (result) {
    //     if (result && result != "error") {
    //         //$.each(result, function (i, v) {
    //         //    var selected = (selId && selId != "" && (selId == v.Id)) ? "selected='selected'" : "";
    //         //    //items += "<option value='" + v.Id + "' " + selected + ">" + v.Name + "</option>";
    //         //    items += "<option value='" + v.Id + "' " + " title= " + '"' + v.Name + '"' + selected + ">" + v.Name + "</option>";
    //         //});
    //         var listItems = "<div class='option' onclick='myOptionClick(" + 0 + ")'><p>[Choose One]</p></div>";
    //         for (var i = 0; i < result.length; i++) {
    //             listItems += "<div class='option' onclick='myOptionClick(" + result[i].Id + ")' id='" + result[i].Id + "'><p>" + result[i].Name + "</p></div>";
    //         }
    //         //$(controlname).empty().append(items);
    //         // $(controlname).val(selId);
    //         $(controlname).html(listItems);
    //     }
    //     else
    //         $(controlname).empty().append(items);

    //     overlay_enabled("divDisabled");
    // });
}

function DateCompare(filter, id1, id2) {
    if ($("#" + id1).val() != "" && $("#" + id2).val() != "") {
        var dt1 = $("#" + id1).val().split('/');
        var Exactdt1 = new Date(dt1[1] + '/' + dt1[0] + '/' + dt1[2]);

        var dt2 = $("#" + id2).val().split('/');
        var Exactdt2 = new Date(dt2[1] + '/' + dt2[0] + '/' + dt2[2]);

        var d = new Date(+dt1[2], dt1[1] - 1, +dt1[0]);
        var d1 = new Date(+dt2[2], dt2[1] - 1, +dt2[0]);
        if (Object.prototype.toString.call(d) === "[object Date]" && Object.prototype.toString.call(d1) === "[object Date]") {
            if (Exactdt1 > Exactdt2) {
                if (filter == "0") {
                    jAlert('<b>Note:</b> Admission date should be lesser than passing date !!', 'Alert');
                    $("#" + id1).val(''); $("#" + id2).val('');
                }
                else if (filter == "1") {
                    jAlert('<b>Note:</b>Second degree admission date should be lesser than first degree passing Ddate !!', 'Alert');
                    $("#" + id2).val('');
                }
                else if (filter == "2") {
                    jAlert('<b>Note:</b> Admission date of Second degree should be lesser than passing date Second degree !!', 'Alert');
                    $("#" + id2).val('');
                }
            }
        }
    }
}
//-->> ==================== Address ==========================

function fnGetPermanentOtherCity() {
    if ($("#ddlPCty option:selected").text() == "OTHER")
        $("#TrtxtPCty").show();
    else
        $("#TrtxtPCty").hide();
}

function fnGetPostalOtherCity() {
    if ($("#ddlMCty option:selected").text() == "OTHER")
        $("#TrtxtMCty").show();
    else
        $("#TrtxtMCty").hide();
}

function fnGetSameAddress() {
    if ($('#LinkSameAddress').attr('checked')) {
        if ($("#txtPAdrs").val() == "") {
            jAlert('Enter Permanent Address first', 'Message');
            return false;
        }
        else if ($("#ddlPCountry")[0].selectedIndex == 0) {
            jAlert('Select Permanent Country first', 'Message');
            return false;
        }
        // else if ($("#ddlPCty")[0].selectedIndex == 0 && $("#ddlPCountry option:selected").text() != "Other") {
        //     jAlert('Select Permanent City first', 'Message');
        //     return false;
        // }

        else {
            $("#txtMAdrs").val($("#txtPAdrs").val());
            $("#txtMAdrs2").val($("#txtPAdrs2").val());
            $("#txtMAdrs3").val($("#txtPAdrs3").val());
            $("#ddlMCountry").val($("#ddlPCountry").val());
            $("#ddlMCty").val($("#ddlPCty").val());
            if ($("#ddlPCountry option:selected").text() == "Other") {
                $("#txtMCountry").val($("#txtPCountry").val());
                $("#txtMState").val($("#txtPState").val());
                $("#txtMCty").val($("#txtPCty").val());
                $("#TrtxtMCountry,#TrtxtMState,#TrtxtMDistrict,#TrtxtMCty").show();
                $("#divMState,#divPDistrict,#divMCty").hide();
            }
            else {
                $("#ddlMState").empty().html($("#ddlPState").html());
                $("#ddlMDistrict").empty().html($("#ddlPDistrict").html());
                $("#ddlMCty").empty().html($("#ddlPCty").html());
                $("#ddlMState").val($("#ddlPState").val());
                $("#ddlMDistrict").val($("#ddlPDistrict").val());
                $("#ddlMCty").val($("#ddlPCty").val());
                $("#TrtxtMCountry,#TrtxtMState,#TrtxtMDistrict,#TrtxtMCty").hide();
                $("#divMState,#divMCty").show();
            }
            $("#txtMPCde").val($("#txtPPCde").val());
            if ($("#ddlPCty option:selected").text() == "OTHER") {
                BindCities('#ddlMCty', $("#ddlPState").val(), $("#ddlPCty").val());
                $("#TrtxtMCty").show();
                $("#txtMCty").val($("#txtPCty").val());
            }
            $('#txtMAdrs,#txtMAdrs2,#txtMAdrs3,#txtMPCde,#ddlMCountry,#ddlMState,#ddlMDistrict,#txtMDistrict,#ddlMCty,#txtMCountry,#txtMState,#txtMCty').prop('disabled', true);

        }
    }
    else {
        $('#txtMAdrs,#txtMAdrs2,#txtMAdrs3,#txtMPCde,#ddlMCountry,#ddlMState,#ddlMDistrict,#ddlMCty,#txtMCountry,#txtMState,#txtMDistrict,#txtMCty').prop('disabled', false);
        $("#txtMAdrs,#txtMAdrs2,#txtMAdrs3,#txtMPCde,#txtMCountry,#txtMState,#txtMDistrict,#txtMCty").val('');
        $("#ddlMCountry,#ddlMState,#ddlMDistrict,#ddlMCty").val(0);
        $("#TrtxtMCty,#TrtxtMDistrict").hide();
    }
}

function funMCountry(stsId) {
    if (stsId == "1") {
        $("#divMState,#divMDistrict,#divMCty").show();
        $("#TrtxtMCountry,#TrtxtMState,#TrtxtMDistrict,#TrtxtMCty").hide();
    }
    else if (stsId == "2") {
        $("#divMState,#divMDistrict,#divMCty").hide();
        $("#TrtxtMCountry,#TrtxtMState,#TrtxtMDistrict,#TrtxtMCty").show();
    }
    else {
        $('#ddlMState,#ddlMDistrict,#ddlMCty').empty().append('<option value="0">[Choose One]</option>');
        $("#divMState,#divMDistrict,#divMCty").show();
        $("#TrtxtMCountry,#TrtxtMState,#TrtxtMDistrict,#TrtxtMCty").hide();
    }
}

function funPCountry(stsId) {
    if (stsId == "1") {
        $("#divPState,#divPDistrict,#divPCty").show();
        $("#TrtxtPCountry,#TrtxtPState,#TrtxtPDistrict,#TrtxtPCty").hide();
    }
    else if (stsId == "2") {
        $("#divPState,#divPDistrict,#divPCty").hide();
        $("#TrtxtPCountry,#TrtxtPState,#TrtxtPDistrict,#TrtxtPCty").show();
    }
    else {
        $('#ddlPState,#ddlPDistrict,#ddlPCty').empty().append('<option value="0">[Choose One]</option>');
        $("#divPState,#divPDistrict,#divPCty").show();
        $("#TrtxtPCountry,#TrtxtPState,#TrtxtPDistrict,#TrtxtPCty").hide();
    }
}

function BindAddressList(controlname1, controlname2, controlname3, sId, selId1, selId2, selId3) {
    overlay_disable("dvWrapper", "divDisabled");
    var items1;
    var items2;
    var items3 = "<option value='0'>[Choose One]</option>";
    // $.post("" + currentControllerName + "/GetAllAddressList", { pincode: sId }, function (result) {
    //     if (result && result != "error") {
    //         var dataState = result.lstState;
    //         var dataDistrict = result.lstDistrict;
    //         var dataCity = result.lstCity;
    //         $.each(dataState, function (i, v) {
    //             var selected = (selId1 && selId1 != "" && (selId1 == v.StateId)) ? "selected='selected'" : "";
    //             items1 += "<option value='" + v.StateId + "' " + selected + ">" + v.StateName + "</option>";
    //         });
    //         $(controlname1).empty().append(items1);

    //         $.each(dataDistrict, function (i, v) {
    //             var selected = (selId2 && selId2 != "" && (selId2 == v.DistrictId)) ? "selected='selected'" : "";
    //             items2 += "<option value='" + v.DistrictId + "' " + selected + ">" + v.DistrictName + "</option>";
    //         });
    //         $(controlname2).empty().append(items2);

    //         $.each(dataCity, function (i, v) {
    //             var selected = (selId3 && selId3 != "" && (selId3 == v.CityId)) ? "selected='selected'" : "";
    //             items3 += "<option value='" + v.CityId + "' " + selected + ">" + v.CityName + "</option>";
    //         });
    //         $(controlname3).empty().append(items3);
    //     }
    //     else {
    //         $(controlname1).empty().append(items1);
    //         $(controlname2).empty().append(items2);
    //         $(controlname3).empty().append(items3);
    //     }

    //     overlay_enabled("divDisabled");
    // });

    overlay_enabled("divDisabled");
}



//-->> ================Validate & Save ==============================
function fnValidate(type) {
    var mPnCd = $('#txtMPCde').val().length;
    var pPnCd = $('#txtPPCde').val().length;

    var CategoryId = $("#hdnCategoryId").val();
    var OPHId = $("#hdnOPH").val();
    var OphPercent = $("#hdnOphPercent").val();

    if ($("#hdnQuelificationid").val() == 0) {
        jAlert('Select Qualifying Exam !!', 'Message');
        //var input = $("#ddlLstQlfyExm");
        //tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if ($("#txtUniversityName").val() == "") {
        jAlert('Enter University/Board Name  !!', 'Message');
        var input = $("#txtUniversityName");
        $('#txtUniversityName').focus().val($('#txtUniversityName').val());
        return false;
    }
    else if ($("#txtCollageName").val() == "") {
        jAlert('Enter Collage Name Name  !!', 'Message');
        var input = $("#txtCollageName");
        $('#txtCollageName').focus().val($('#txtCollageName').val());
        return false;
    }
    else if ($("#txtAdmissionDate").val() == "") {
        jAlert("Enter Admission Date !!", 'Message');
        $('#txtAdmissionDate').focus().val($('#txtAdmissionDate').val());
        return false;
    }
    else if ($("#txtPassingDate").val() == "") {
        jAlert("Enter Passing Date !!", 'Message');
        $('#txtPassingDate').focus().val($('#txtPassingDate').val());
        return false;
    }
    else if ($("#ddlState")[0].selectedIndex == 0) {
        jAlert('Select State Name !!', 'Message');
        var input = $("#ddlState");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }

    else if (isVisible($("#divWorkshopTechnicianGrade2")) && !$('input:radio[name=rbtnlWorkshopTechnicianGrade2]:checked').val()) {
        jAlert('Select option, Required ITI Certificate. !!', 'Message');
        return false;
    }
    ///----------------Registration No--------------------------
    else if (isVisible($("#divPharmacist")) && $("#txtPharmacistRegNo").val() == "") {
        jAlert('Enter Registration No. !!', 'Message');
        return false;
    }
    else if (isVisible($("#divDriverOrdinaryGrade")) && $("#txtDrivingLicenseNo").val() == "") {
        jAlert('Enter Valid Driving License Number for driving heavy vehicles!!', 'Message');
        return false;
    }
    else if (isVisible($("#divOTA")) && !$('input:radio[name=rbtnlstOTA]:checked').val()) {
        jAlert('Select option, Certificate/ Diploma from a recognized institution in the trade of!!', 'Message');
        return false;
    }
    //else if (isVisible($("#divOTA")) && !$('input:radio[name=rbtnlstOTA]:checked').val()) {
    //    jAlert('Select option, experience !!', 'Message');
    //    return false;
    //}
    //else if (isVisible($("#divLibrarianGrade3")) && !$('input:radio[name=rbtnlstTypingSpeed]:checked').val()) {
    //    jAlert('Select option, Typing Speed !!', 'Message');
    //    return false;
    //}
    else if (isVisible($("#divWarden")) && !$('input:radio[name=rbtnlstWarden]:checked').val()) {
        jAlert('Select option, experience !!', 'Message');
        return false;
    }

    else if (isVisible($("#divMedicalStores")) && !$('input:radio[name=rbtnlstStoreKeeperGeneral]:checked').val()) {
        jAlert('Select option, experience !!', 'Message');
        return false;
    }
    if (isVisible($("#SecondDegree")) && $("#ddlSecondLstQlfyExm")[0].selectedIndex == 0) {
        jAlert('Select Second Qualifying Exam !!', 'Message');
        var input = $("#ddlSecondLstQlfyExm");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if (isVisible($("#divDegreeName")) && $("#txtDegreeName").val() == "") {
        jAlert('Enter Second Educational Qualification Degree Name!!', 'Message');
        return false;
    }
    else if (isVisible($("#SecondDegree")) && $("#txtSecondUniversityName").val() == "") {
        jAlert('Enter University Name!!', 'Message');
        return false;
    }
    else if (isVisible($("#SecondDegree")) && $("#txtSecondCollageName").val() == "") {
        jAlert('Enter College Name!!', 'Message');
        return false;
    }
    else if (isVisible($("#SecondDegree")) && $("#txtSecondAdmissionDate").val() == "") {
        jAlert('Enter Admission Date!!', 'Message');
        return false;
    }
    else if (isVisible($("#SecondDegree")) && $("#txtSecondPassingDate").val() == "") {
        jAlert('Enter Passing Date!!', 'Message');
        return false;
    }
    else if (isVisible($("#SecondDegree")) && $("#txtSecondUniversityName").val() == "") {
        jAlert('Enter University Name!!', 'Message');
        return false;
    }
    else if (isVisible($("#SecondDegree")) && $("#ddlSecondState")[0].selectedIndex == 0) {
        jAlert('Select State !!', 'Message');
        return false;
    }
    else if (isVisible($("#divRegistrationDetails")) && $("#txtRegistrationDate").val() == "") {
        jAlert('Enter Registration Date !!', 'Message');
        return false;
    }
    else if (isVisible($("#divRegistrationDetails")) && $("#txtRegistrationNumber").val() == "") {
        jAlert('Enter Registration Number !!', 'Message');
        return false;
    }
    else if (isVisible($("#divRegistrationDetails")) && $("#ddlStateCouncil")[0].selectedIndex == 0) {
        jAlert('Select State Medical Council !!', 'Message');
        return false;
    }
    /////----------------Extra Qulification--------------------------
    else if (!$('input:radio[name=RdExperience]:checked').val()) {
        jAlert('Select Extra Qualification !!', 'Message');
        return false;
    }
    else if (isVisible($("#ExtraQ1")) && isVisible($("#ExtraQ2")) && $("#txtDegreeNameExtra").val() == "") {
        jAlert('Enter Degree Name', 'Message');
        return false;
    }
    else if (isVisible($("#ExtraQ1")) && isVisible($("#ExtraQ2")) && $("#txtAdmissionDateExtRa").val() == "") {
        jAlert('Enter Additional Qualification Admission Date ', 'Message');
        return false;
    }
    else if (isVisible($("#ExtraQ1")) && isVisible($("#ExtraQ2")) && $("#txtPassingDateExtra").val() == "") {
        jAlert('Enter Additional Qualification Passing Date ', 'Message');
        return false;
    }
    ////////--------------------END------------------------------------
    else if ($("#ddlPCountry")[0].selectedIndex == 0) {
        jAlert('Select Permanent Country', 'Message');
        return false;
    }
    else if ($("#ddlPCountry option:selected").text() == "Other" && $("#txtPCountry").val() == "") {
        jAlert('Enter Permanent Address of Country Name', 'Message');
        return false;
    }
    else if ($("#ddlPCountry option:selected").text() == "Other" && $("#txtPCty").val() == "") {
        jAlert('Enter City Name', 'Message');
        return false;
    }
    else if ($("#txtPPCde").val() == "") {
        jAlert('Enter Permanent Pin Code', 'Message');
        return false;
    }
    else if ($("#txtPPCde").val() != "" && pPnCd < 6) {
        jAlert('Invalid Permanent Pin Code', 'Message');
        return false;
    }
    else if ($("#ddlPCountry option:selected").text() == "Other" && $("#txtPDistrict").val() == "") {
        jAlert('Enter Permanent Address of District Name', 'Message');
        return false;
    }
    else if ($("#ddlPCountry option:selected").text() != "Other" && $("#ddlPState option:selected").text() != "Other" && $("#ddlPCty")[0].selectedIndex == 0) {
        jAlert('Select Permanent City', 'Message');
        return false;
    }
    else if ($("#ddlPCty option:selected").text() == "OTHER" && $("#txtPCty").val() == "") {
        jAlert('Enter City', 'Message');
        return false;
    }
    else if ($("#txtPAdrs").val() == "") {
        jAlert('Enter Permanent Address Line 1', 'Message');
        return false;
    }
    else if ($("#ddlMCountry")[0].selectedIndex == 0) {
        jAlert('Select Correspondence Country', 'Message');
        return false;
    }
    else if ($("#ddlMCountry option:selected").text() == "Other" && $("#txtMCountry").val() == "") {
        jAlert('Enter Country Name', 'Message');
        return false;
    }
    else if ($("#ddlMCountry option:selected").text() == "Other" && $("#txtMCty").val() == "") {
        jAlert('Enter City Name', 'Message');
        return false;
    }
    else if ($("#txtMPCde").val() == "") {
        jAlert('Enter Correspondence Pin Code', 'Message');
        return false;
    }
    else if ($("#txtMPCde").val() != "" && mPnCd < 6) {
        jAlert('Invalid Correspondence Pin Code', 'Message');
        return false;
    }
    else if ($("#ddlMCountry option:selected").text() == "Other" && $("#txtMDistrict").val() == "") {
        jAlert('Enter Correspondence Address of District Name', 'Message');
        return false;
    }
    else if ($("#ddlMCountry option:selected").text() != "Other" && $("#ddlMState option:selected").text() != "Other" && $("#ddlMCty")[0].selectedIndex == 0) {
        jAlert('Select Correspondence City', 'Message');
        return false;
    }
    else if ($("#ddlMCty option:selected").text() == "OTHER" && $("#txtMCty").val() == "") {
        jAlert('Enter City', 'Message');
        return false;
    }
    else if ($("#txtMAdrs").val() == "") {
        jAlert('Enter Correspondence Address', 'Message');
        return false;
    }
    else if ((CategoryId == "1" || CategoryId == "2") && parseFloat($("#spnPrntge").text()) < parseFloat(50)) {
        jAlert('<b>Note:</b> <span class="contentRed b">You are not eligible as per your Percentage of marks, It must be at least 50% !!</span>', 'Message !!');
        $("#txtMrksObts").val('')
        return false;
    }
    else if ((CategoryId == "3" || CategoryId == "4") && parseFloat($("#spnPrntge").text()) < parseFloat(55)) {
        jAlert('<b>Note:</b> <span class="contentRed b">You are not eligible as per your Percentage of marks, It must be at least 55% !!</span>', 'Message !!');
        $("#txtMrksObts").val('')
        return false;
    }
    else {
        Save(type);
    }
}

function Save(type) {
    var regData = {};
    var PstateId = 0, PCityId = 0, MstateId = 0, MCityId = 0, isSameAddress = "0", IsTechInstruments = "0", StateCouncilId = "0", IsBelongToHillArea = "0", Height = "0", Weight = "0", Chest = "0", ChestExpanded = "0";
    var SecondQualifyingExamId = 0, SecondStateId = "0", TypingSpeed = 0, OTAExperience = 0, DegreeNameExtra = "NA", IsWardenExp = 0, IsJHTExp = 0, IsStoreKeeperGExp = 0;
    var PCountryName = "NA", PStateName = "NA", PCityName = "NA", MCountryName = "NA", MStateName = "NA", MCityName = "NA", HigherPGDegreeName = "NA";
    var RegistrationNumber = "NA", DrivingLicenseNo = "NA", SecondUniversityName = "NA", SecondCollageName = "NA";
    var AdmissionDateExtRa = $("#txtAdmissionDateExtRa").val() != "" ? $("#txtAdmissionDateExtRa").val().replace("'", "").replace("&", "") : "01/01/1900";
    var PassingDateExtra = $("#txtPassingDateExtra").val() != "" ? $("#txtPassingDateExtra").val().replace("'", "").replace("&", "") : "01/01/1900";
    var RegistrationDate = $("#txtRegistrationDate").val() != "" ? $("#txtRegistrationDate").val().replace("'", "").replace("&", "") : "01/01/1900";
    var SecondAdmissionDate = $("#txtSecondAdmissionDate").val() != "" ? $("#txtSecondAdmissionDate").val().replace("'", "").replace("&", "") : "01/01/1900";
    var SecondPassingDate = $("#txtSecondPassingDate").val() != "" ? $("#txtSecondPassingDate").val().replace("'", "").replace("&", "") : "01/01/1900";


    //if (isVisible($("#divOTA")) && !$('input:radio[name=rbtnlstOTA]:checked').val()) {
    //       jAlert('Select option, Certificate/ Diploma from a recognized institution in the trade of!!', 'Message');
    //       return false;
    //   }

    var DesirableQlfyExmId = 0;
    if ($("#ddlDesirableQlfyExm").val() != null) {
        DesirableQlfyExmId = $("#ddlDesirableQlfyExm").val();
    }
    var DesirableAdmissionDate = $("#txtDesirableAdmissionDate").val() != "" ? $("#txtDesirableAdmissionDate").val().replace("'", "").replace("&", "") : "01/01/1900";
    var DesirablePassingDate = $("#txtDesirablePassingDate").val() != "" ? $("#txtDesirablePassingDate").val().replace("'", "").replace("&", "") : "01/01/1900";

    if (isVisible($("#TrtxtPCountry")))
        PCountryName = $("#txtPCountry").val().replace("'", "").replace("&", "");

    if (isVisible($("#TrtxtPState")))
        PStateName = $("#txtPState").val().replace("'", "").replace("&", "");

    if (isVisible($("#TrtxtPCty")))
        PCityName = $("#txtPCty").val().replace("'", "").replace("&", "");

    if (isVisible($("#TrtxtMCountry")))
        MCountryName = $("#txtMCountry").val().replace("'", "").replace("&", "");

    if (isVisible($("#TrtxtMState")))
        MStateName = $("#txtPState").val().replace("'", "").replace("&", "");

    if (isVisible($("#TrtxtMCty")))
        MCityName = $("#txtMCty").val().replace("'", "").replace("&", "");

    if (isVisible($("#divPState")))
        PstateId = $("#ddlPState").val();

    if (isVisible($("#divPCty")))
        PCityId = $("#ddlPCty").val();

    if (isVisible($("#divMState")))
        MstateId = $("#ddlMState").val();

    if (isVisible($("#divMCty")))
        MCityId = $("#ddlMCty").val();

    if (isVisible($("#divLibrarianGrade3"))) {
        if (!$('input:radio[name=rbtnlstTypingSpeed]:checked').val())
            TypingSpeed = "0";
        else
            TypingSpeed = $('input:radio[name=rbtnlstTypingSpeed]:checked').val();
    }

    if (isVisible($("#divWorkshopTechnicianGrade2")))
        OTAExperience = $('input:radio[name=rbtnlWorkshopTechnicianGrade2]:checked').val();

    if (isVisible($("#divWarden")))
        IsWardenExp = $('input:radio[name=rbtnlstWarden]:checked').val();

    if (isVisible($("#divOTA")))
        IsJHTExp = $('input:radio[name=rbtnlstOTA]:checked').val();

    if (isVisible($("#divMedicalStores")))
        IsStoreKeeperGExp = $('input:radio[name=rbtnlstStoreKeeperGeneral]:checked').val();

    if (isVisible($("#divPharmacist")))
        RegistrationNumber = $("#txtPharmacistRegNo").val().replace("'", "").replace("&", "");

    if (isVisible($("#divRegistrationDetails")))
        RegistrationDate = $("#txtRegistrationDate").val().replace("'", "").replace("&", "");

    if (isVisible($("#divRegistrationDetails")))
        RegistrationNumber = $("#txtRegistrationNumber").val().replace("'", "").replace("&", "");

    if (isVisible($("#divRegistrationDetails")))
        StateCouncilId = $("#ddlStateCouncil").val();

    if (isVisible($("#divDriverOrdinaryGrade")))
        DrivingLicenseNo = $("#txtDrivingLicenseNo").val().replace("'", "").replace("&", "");

    if (isVisible($("#SecondDegree")))
        SecondQualifyingExamId = $("#ddlSecondLstQlfyExm").val();

    if (isVisible($("#SecondDegree")))
        SecondUniversityName = $("#txtSecondUniversityName").val().replace("'", "").replace("&", "");

    if (isVisible($("#SecondDegree")))
        SecondCollageName = $("#txtSecondCollageName").val().replace("'", "").replace("&", "");

    if (isVisible($("#SecondDegree")))
        SecondAdmissionDate = $("#txtSecondAdmissionDate").val().replace("'", "").replace("&", "");

    if (isVisible($("#SecondDegree")))
        SecondPassingDate = $("#txtSecondPassingDate").val().replace("'", "").replace("&", "");

    if (isVisible($("#SecondDegree")))
        SecondStateId = $("#ddlSecondState").val();

    if ($("#LinkSameAddress").prop('checked'))
        isSameAddress = "1";
    else
        isSameAddress = "0";
    if (isVisible($("#ExtraQ1")))
        DegreeNameExtra = $("#txtDegreeNameExtra").val().replace("'", "").replace("&", "");

    if (isVisible($("#ExtraQ1")))
        AdmissionDateExtRa = $("#txtAdmissionDateExtRa").val().replace("'", "").replace("&", "");

    if (isVisible($("#ExtraQ2")))
        PassingDateExtra = $("#txtPassingDateExtra").val().replace("'", "").replace("&", "");

    if (isVisible($("#divDegreeName")))
        HigherPGDegreeName = $("#txtDegreeName").val().replace("'", "").replace("&", "");

    regData.StudentId = $("#hdnStudentId").val();
    regData.PAddress1 = $("#txtPAdrs").val().replace("'", "").replace("&", "");
    regData.PAddress2 = $("#txtPAdrs2").val().replace("'", "").replace("&", "");
    regData.PAddress3 = $("#txtPAdrs3").val().replace("'", "").replace("&", "");
    regData.PCountryId = $("#ddlPCountry").val();
    regData.PStateId = PstateId;
    regData.PCityId = PCityId;
    regData.PCountryName = PCountryName;
    regData.PStateName = PStateName;
    regData.PCityName = PCityName;
    regData.PPinCode = $("#txtPPCde").val().replace("'", "").replace("&", "");
    regData.MAddress1 = $("#txtMAdrs").val().replace("'", "").replace("&", "");
    regData.MAddress2 = $("#txtMAdrs2").val().replace("'", "").replace("&", "");
    regData.MAddress3 = $("#txtMAdrs3").val().replace("'", "").replace("&", "");
    regData.MCountryId = $("#ddlMCountry").val();
    regData.MStateId = MstateId;
    regData.MCityId = MCityId
    regData.MCountryName = MCountryName;
    regData.MStateName = MStateName;
    regData.MCityName = MCityName;
    regData.MPinCode = $("#txtMPCde").val().replace("'", "").replace("&", "");
    regData.IsSameAddress = isSameAddress;

    regData.QualifyingExamId = $("#hdnQuelificationid").val();
    regData.OtherQualificationExam = "NA";
    regData.UnivName = $("#txtUniversityName").val().replace("'", "").replace("&", "");
    regData.CollegeName = $("#txtCollageName").val().replace("'", "").replace("&", "");
    regData.AdmissionDate = $("#txtAdmissionDate").val().replace("'", "").replace("&", "");
    regData.PassingDate = $("#txtPassingDate").val().replace("'", "").replace("&", "");
    regData.DegreeStateId = $("#ddlState").val();
    regData.TypingSpeed = TypingSpeed;
    regData.OTAExperience = OTAExperience;
    regData.IsWardenExp = IsWardenExp;
    regData.IsJHTExp = IsJHTExp;
    regData.IsStoreKeeperGExp = IsStoreKeeperGExp;
    regData.RegistrationNumber = RegistrationNumber;
    regData.RegistrationDate = RegistrationDate;
    //regData.RegistrationNumber = RegistrationNumber;
    regData.StateCouncilId = StateCouncilId;
    //regData.IsBelongToHillArea = IsBelongToHillArea;
    //regData.Height = Height;
    //regData.Weight = Weight;
    //regData.Chest = Chest;
    //regData.ChestExpanded = ChestExpanded;
    regData.SecondQualifyingExamId = SecondQualifyingExamId;
    regData.SecondUniversityName = SecondUniversityName;
    regData.SecondCollageName = SecondCollageName;
    regData.SecondAdmissionDate = SecondAdmissionDate;
    regData.SecondPassingDate = SecondPassingDate;
    regData.SecondDegreeStateId = SecondStateId;

    regData.DegreeNameExtra = DegreeNameExtra;
    regData.AdmissionDateExtRa = AdmissionDateExtRa;
    regData.PassingDateExtra = PassingDateExtra;

    regData.DesirableQualifyingExamId = DesirableQlfyExmId;
    regData.DesirableUniversityName = $("#txtDesirableExamUniversityName").val().replace("'", "").replace("&", "");
    regData.DesirableCollageName = $("#txtDesirableCollageName").val().replace("'", "").replace("&", "");
    regData.DesirableAdmissionDate = DesirableAdmissionDate;
    regData.DesirablePassingDate = DesirablePassingDate;
    regData.DesirableDegreeStateId = $("#ddlDesirableState").val();
    regData.DrivingLicenseNo = DrivingLicenseNo;
    regData.HigherPGDegreeName = HigherPGDegreeName;


    var sNId = $("#hdnSId").val() != "0" ? $("#hdnSId").val() : "";

    $.post("Qualification/SaveData", { RegData: JSON.stringify(regData), IsAdmin: $("#hdnIsAdmin").val(), sId: sNId }, function (result) {
        if (result && result != "error") {
            jAlert('Step 2 of application has been completed.', 'Message', function (r) {
                if (r == true) {
                    //go((type == 1) ? 'Dashboard' : 'UploadImages');
                    go((type == 1) ? 'Dashboard' : 'Experience');
                }
            });
        }
        else {
            jAlert("Your action could not be completed due to an exception.");
        }
        overlay_enabled("divDisabled");
    });
    overlay_enabled("divDisabled");

}
//-->> ========= function Show Hide Div =========================================
function funIsOptionalStatus(srlNo, sts) {
    if (srlNo == "1") {
        if (sts == "1") {
            $("#ExtraQ1,#ExtraQ2").show();
            //$("#myTblAcademicOtherQual").html('');
        }
        else {
            $("#ExtraQ1,#ExtraQ2").hide();
            $("#txtDegreeNameExtra").val('');
            $("#txtAdmissionDateExtRa").val('');
            $("#txtPassingDateExtra").val('');
        }
    }
}
function funSecondDegreeStatus(srlNo, sts) {
    if (srlNo == "1") {
        if (sts == "1") {
            $("#SecondDegreeheader").show();
            $("#SecondDegree").show();
        }
        else {
            $("#SecondDegreeheader").hide();
            $("#SecondDegree").hide();
            //$("#txtDegreeNameExtra").val('');
            //$("#txtAdmissionDateExtRa").val('');
            //$("#txtPassingDateExtra").val('');
        }
    }
}

function fnBindSecondQuli(val) {
    var listitems = "";
    if (val != "") {
        $("#ddlSecondLstQlfyExm").html('');
        $("#SecondDegree").hide();
        $("#SecondDegreeheader").hide();
        var postid = $("#hdnAppliedPostId").val();
        var listItems = "";


        $.post("Qualification/GetSecondQuelification", { postid: postid, Qid1: val }, function (result) {
            if (result && result != "error") {
                var listItems = "<option value='-1'>[Choose One]</option>";
                for (var i = 0; i < result.length; i++) {
                    listItems += "<option value='" + result[i].Id + "' >" + result[i].Name + "</option>";
                }

                $("#ddlSecondLstQlfyExm").html(listItems);
                $("#SecondDegree").show();
                $("#SecondDegreeheader").show();
            }

        });


    }
}


function fnBindSecondQuliEdit(val, SecondQualifyingExamId) {
    var listitems = "";
    if (val != "") {
        $("#ddlSecondLstQlfyExm").html('');
        $("#SecondDegree").hide();
        $("#SecondDegreeheader").hide();
        var postid = $("#hdnAppliedPostId").val();
        var listItems = "";


        $.post("Qualification/GetSecondQuelification", { postid: postid, Qid1: val }, function (result) {
            if (result && result != "error") {
                var listItems = "<option value='-1'>[Choose One]</option>";
                for (var i = 0; i < result.length; i++) {
                    listItems += "<option value='" + result[i].Id + "' >" + result[i].Name + "</option>";
                }


                $("#ddlSecondLstQlfyExm").html(listItems);
                $("#ddlSecondLstQlfyExm option[value=" + SecondQualifyingExamId + "]").prop('selected', true);

                $("#SecondDegree").show();
                $("#SecondDegreeheader").show();
            }

        });


    }
}


