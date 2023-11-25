$(document).ready(function () {

    BindAiims(0);


    $(document).on('click', "#btnPopUpProceed", function () {
        $("#divAfterRegistration").modal('hide');
        go('DashBoard');
    });
    $("#divRegForm").hide();
    ClearControl();

    //$(document).on('change', "#ddlGroup", function () {
    fnBindPost();
    /* });*/



    $(document).on('change', "#ddlPost", function () {
        fnBindCategory($(this).val());
    });


    $(document).on('change', "#ddlPost", function () {
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
        //fnAppliedPost($(this).val());
    });

    //$(document).on('change', "#ddlDepartment", function () {
    //    fnAppliedPostByDepartment($(this).val());
    //});

    $("input:radio[name=rbtnlstNationality][value=5]").attr('checked', true);

    $("#dvGovernmentEmployee").show();
    $("#divAIIMSEmployee").show();
    $("#divMaritalStatus").show();
    $("#divDefencePersonnel").show();

    $(document).on('click', "input:radio[name=rbtnlstGender]", function () {
        $("#txtDOB").val('');
        $("#ddlMaritalStatus")[0].selectedIndex = 0;
        if ($(this).val() == "27") {
            $("#dvMaritalStatus").show();
        }
        else
            $("#dvMaritalStatus").hide();

    });

    $(document).on('click', "input:radio[name=rbtnlstGovEmp]", function () {
        $("#txtDOB").val('');
        fnShowGovEmp($(this).val());
        $("#divAIIMSEmployeeDetails").hide();

        $('input:radio[name=rbtnlstAIIMSEmp][value=0]').attr('checked', true);
    });

    $(document).on('click', "input:radio[name=rbtnlstAIIMSEmp]", function () {
        $("#txtDOB").val('');
        fnShowAIIMSEmp($(this).val());
        $('input:radio[name=rbtnlstGovEmp][value=0]').attr('checked', true);
        $("#divGovEmpDetails").hide();
    });

    $(document).on('click', "input:radio[name=rbtnlstExSerMan]", function () {
        $("#txtDOB").val('');
        fnShowExServiceMan($(this).val());
    });

    $(document).on('click', "input:radio[name=rbtnlstDefenceDisabled]", function () {
        $("#txtDOB").val('');
    });

    $(document).on('click', "input:radio[name=rbtnlstSerInArmedForces]", function () {
        $("#txtDOB").val('');
    });

    $(document).on('change', "#txtServEndDate", function () {
        fnDayDiffExService();
    });

    $(document).on('change', "#txtAppntmntDate,#txtRelievingDate", function () {
        $("#txtDOB").val('');
        calculateServiceYear();
        DateCompare('2', 'txtAppntmntDate', 'txtRelievingDate');
    });
    ////EX
    $(document).on('change', "#txtSerStartDate,#txtServEndDate", function () {
        $("#txtDOB").val('');
        calculateServiceYearEX();
        DateCompare('2', 'txtSerStartDate', 'txtServEndDate');
    });

    $(document).on('change', "#txtJoinDate", function () {
        $("#txtDOB").val('');
        //var value = CalculateTotalDays($(this).val(), '19/12/2022');
        var value = CalculateTotalDays($(this).val(), '13/05/2023');
        $('#hdnCountAiimsServiceYear').val(value);
    });

    $(document).on('change', "#txtCertificateDate", function () {
        DateCompare('1', 'txtDOB', 'txtCertificateDate');
    });

    $(document).on('change', "#ddlIDProof", function () {
        if ($(this).val() == "9" || $(this).val() == "13")
            $("#txtPlaceOfIssue").val("India");
        else
            $("#txtPlaceOfIssue").val("");
    });

    $(document).on('blur', "#txtEmail", function () {
        fnGetValidateEmail($(this).val()), IsValidEmail($(this));
    });

    $(document).on('blur', "#txtMobileNo", function () {
        fnGetValidateMobile($(this).val()), mobileNoValidation($(this));
    });

    // $(document).on('blur', "#txtIDNo", function () {
    //     fnGetValidateIDNo($(this).val());
    // });

    $(document).on('change', "#txtDOB", function () {

        GetValidateDOB();
        fnDOB();
    });

    $(document).on('change', "#IssueDate,#txtValidTill", function () {
        DateCompare('0', 'IssueDate', 'txtValidTill');
    });

    $(document).on('blur', "#txtConfirmName", function () {
        fncompareName();
    });

    $(document).on('blur', "#txtCEmail", function () {
        fncompareEmail();
    });

    $(document).on('blur', "#txtCMobileNo", function () {
        fncompareMobile();
    });


    $(document).on('click', "input:radio[name=rbtnlstCategory]", function () {
        $("#txtDOB").val('');
        $("#ddlOPHPercent,#ddlPWD,#ddlPWDType")[0].selectedIndex = 0;
        $('input[name=rbtnlstPWD]').prop('checked', false);
        fnBindPWBDCategory($(this).val());
        var str = $("input[name='rbtnlstCategory']:checked").val();
        if (str != "4") {
            $("#divCategory").show();
            $("#divCategoryEWS").hide();
            $("#txtCertificateNo").val('');
            $("#txtCertificateDate").val('');
        }
        else {
            $("#divCategory").hide();
            $("#divCategoryEWS").show();
            $("#txtCertificateNo").val('');
            $("#txtCertificateDate").val('');
            var postId = $("#hdnPostValue").val();
            if (postId == "14") {
                $("input:radio[name=rbtnlstEWS][value=1]").attr('checked', true);
                $("input:radio[name=rbtnlstEWS]").prop('disabled', true);
            }
            else {
                $("input:radio[name=rbtnlstEWS][value=1]").attr('checked', false);
                $("input:radio[name=rbtnlstEWS]").prop('disabled', false);
            }
        }
        //if (str == "3") {
        //    jAlert('<b>NOTE: </b>NCL-OBC certificate issued during the period from 1.4.2019 to 31.3.2020 will be considered valid. Candidates who have NCL-OBC certificate issued before or after this period (i.e 1.4.2019 to 31.3.2020), will not be considered valid for this advertisement. Candidates applying under OBC category must produce the valid caste certificate in the format provided by the DoP&T vide O.M. No. 36036/2/2013-Estt. (Res.) dated 30.05.2014 and further clarification issued by DoP&T OM No. 36036/2/2013-Estt(Res-I) dated 31.03.2016.<br> <br>Candidates applying under any of the reserved category viz. SC/ST/OBC will be considered subject to submission of valid Caste certificate on a prescribed format issued by Competent Authority. <br> <br> Please Read Avertisement Notice No F.No. 7-1/2019-Estt-I(RCT) Dated 12/02/2020  for more detail. ', 'Message');
        //}
        //else if (str == "67") {
        //    jAlert('<b>NOTE: </b>Application under EWS category will be considered subject to submission of Income and Assets certificate on a prescribed format issued by the competent authority and subject to verification. EWS certificate must have been issued by the competent authority, as prescribed by the GOI/DOPT, on or before the last date of submission of online application i.e. 12.03.2020. <br> <br> Please Read Avertisement Notice No F.No. 7-1/2019-Estt-I(RCT) Dated 12/02/2020  for more detail. ', 'Message');
        //}
        //else if (str == "1" || str == "2") {
        //    jAlert('<b>NOTE: </b>Candidates applying under any of the reserved category viz. SC/ST/OBC will be considered subject to submission of valid Caste certificate on a prescribed format issued by Competent Authority. <br> <br> Please Read Avertisement Notice No F.No. 7-1/2019-Estt-I(RCT) Dated 12/02/2020  for more detail. ', 'Message');
        //}
    });

    //$("#divOPHPoupup").hide();
    //$('input:checkbox[name=IAgree]').attr('checked', false);
    //$(document).on('click', "input:radio[name=rbtnlstPWD]", function () {
    //    fnShowOPHOption($(this).val());
    //});

    //$(document).on('click', "input:radio[name=rbtnlstPWD]", function () {
    //    fnShowOPHOption($(this).val());
    //});

    $(document).on('click', "input:radio[name=rbtnlstPWD]", function () {
        $("#txtDOB").val('');
        $("#ddlPWD,#ddlOPHPercent")[0].selectedIndex = 0;
        fnShowOPHOption($(this).val(), $("#hdnPostValue").val());
    });

    //$(document).on('click', "input:radio[name=rbtnlstScribe]", function () {
    //    if ($(this).val() == "1") {
    //        $("#divScribePoupup").fadeIn();
    //    }
    //    else {
    //        $("#divScribePoupup").hide();
    //    }
    //});

    $(document).on('change', "#ddlPWD", function () {
        if ($(this).val() != "0") {
            //BindPWBDType('#ddlPWDType', $(this).val(), $(this).val());
            fnBindPWBDSubCategory($(this).val());
            $("#ddlPWDType").show();
        }
        else {
            $('#ddlPWDType').empty().append('<option value="0">[Choose One]</option>');
            $("#ddlPWDType").hide();
            $("#ddlPWDType").val('0');
        }
    });

    $("#divOPHPoupup").hide();
    $('input:checkbox[name=IAgree]').attr('checked', false);

    $("#divScribePoupup").hide();
    $('input:checkbox[name=chkAgreeScribe]').attr('checked', false);


    $(document).on('click', "#close", function () {
        if (!$("#chkAgree").is(':checked')) {
            jAlert('Check I agree option !!', 'Message');
            return false;
        }
        else {
            $("#divOPHPoupup").fadeOut();
            $('input:checkbox[name=IAgree]').attr('checked', false);
        }
    });

    $(document).on('click', "#closeScribe", function () {
        if (!$("#chkAgreeScribe").is(':checked')) {
            jAlert('Check I agree option !!', 'Message');
            return false;
        }
        else {
            $("#divScribePoupup").fadeOut();
            $('input:checkbox[name=IAgreeScribe]').attr('checked', false);
        }
    });

    $(document).on('change', "#ddlPWDType", function () {
        fnBindLCSubCategory($(this).val());
    });


    $(document).on('click', "input:radio[name=rbtnlstAlternateNumber]", function () {
        fnShowAlternateNo($(this).val());
    });


    $(document).on('click', "#btnShowForm", function () {
        $("#guidelines").hide();
        $("#divRegForm").show();
    });

    $(document).on('click', "#btnSave", function () {
        fnValidate(1);
    });

    $(document).on('click', "#btnProceed", function () {
        fnValidate(2);
    });

    $(document).on('keyup', "#txtFirstName,#txtConfirmName,#txtFatherName,#txtMotherName,#txtPlaceOfIssue", function () {
        $(this).val($(this).val().toUpperCase());
    });

    $(document).bind('paste', "#txtConfirmName,txtCEmail,txtCMobileNo", function () {
        return false;
    });
    $("#btnSave").show();
    $("#btnProceed").hide();
});


function BindAiims(val) {
    $("#ddlAiimsName").html('');
    var listItems = "";
    // $.post(appPath + "/Registration/GetAIIMSName", function (result) {
    //     if (result && result != "error") {
    //         var listItems = "<option value='-1'>[Choose One]</option>";
    //         for (var i = 0; i < result.length; i++) {
    //             listItems += "<option value='" + result[i].AiimsId + "' >" + result[i].AiimsName + "</option>";
    //         }
    //         $("#ddlAiimsName").html(listItems);
    //         if (val > 0) {
    //             $("#ddlAiimsName option[value=" + val + "]").prop('selected', true);
    //         }
    //     }
    //     overlay_enabled("divDisabled");
    // });

}


function fnBindCategory(val) {
    if (val != "") {

        //var AAge_30 = new Date('12/06/1993');
        //var AAge_35 = new Date('12/06/1988');
        //var AAge_27 = new Date('12/06/1996');
        //var AAge_45 = new Date('12/06/1978');
        //var AAge_50 = new Date('12/06/1963');
        //var AAge_40 = new Date('12/06/1983');

        $("#hdnUR").val('');
        $("#hdnEWS").val('');
        $("#hdnobc").val('');
        $("#hdnSC").val('');
        $("#hdnST").val('');
        $("#hdnPWBD").val('');
        $("#hdnEX_ServiceMan").val('');
        $("#hdnUpperAgeUr").val('');
        $("#hdnAiimsRes").val('');

        $.post(appPath + "/Registration/GetBindCategory", { postid: val }, function (result) {
            if (result && result != "error") {
                var dobStr = '';
                $("#hdnUR").val(result[0].UR);
                $("#hdnEWS").val(result[0].EWS);
                $("#hdnobc").val(result[0].OBC);
                $("#hdnSC").val(result[0].SC);
                $("#hdnST").val(result[0].ST);
                $("#hdnPWBD").val(result[0].PWBD);
                $("#hdnEX_ServiceMan").val(result[0].EX_serviseMan);
                if (result[0].Upper_Age_UR == '30') {



                    $("#hdnUpperAgeUr").val('02/12/1993');

                }
                else if (result[0].Upper_Age_UR == '35') {

                    $("#hdnUpperAgeUr").val('02/12/1988');

                }
                else if (result[0].Upper_Age_UR == '27') {

                    $("#hdnUpperAgeUr").val('02/12/1996');

                }
                else if (result[0].Upper_Age_UR == '45') {

                    $("#hdnUpperAgeUr").val('02/12/1978');

                }
                else if (result[0].Upper_Age_UR == '50') {

                    $("#hdnUpperAgeUr").val('02/12/1963');

                }
                else if (result[0].Upper_Age_UR == '40') {

                    $("#hdnUpperAgeUr").val('02/12/1983');

                }
                else {
                    $("#hdnUpperAgeUr").val('');
                }
                $("#hdnAiimsRes").val(result[0].AIIMSRes);

            }

            overlay_enabled("divDisabled");
        });



    }
}

function fnGetRegistrationDetailsOnLoad() {
    // overlay_disable("dvWrapper", "divDisabled");
    // var sNId = $("#hdnSId").val() != "0" ? $("#hdnSId").val() : "";
    $.post(appPath + "/EditRegistration/GetRegistrationDetails", function (result) {
        if (result && result != "error") {
            var data = $.parseJSON(result)[0];
            fnChangeStatus(data.SetupCounter);
            if (data.StudentId != "") {
                $("#btnSave").hide();
                $("#btnProceed").show();
            }
            else {
                $("#btnSave").show();
                $("#btnProceed").hide();
            }
            fnBindCategory(data.AppliedPostId);
            //$("#getRolNum").hide();
            $("#div_MainForm").show();
            $("#hdnStudentId").val(data.StudentId);
            $("#hdnCategoryId").val(data.CategoryId);
            $("#hdnOPH").val(data.IsOPH);
            $("#hdnOphPercent").val(data.ophPercentage);
            $("#hdnRowId").val(data.RowId);


            $("#ddlGroup option[value=" + data.GroupId + "]").prop('selected', true);
            fnAppliedPost(data.AppliedPostId);

            $("#ddlDepartment option[value=" + data.DepartmentId + "]").prop('selected', true);
            $("#txtFirstName").val(data.ApplicantName);
            $("#txtConfirmName").val(data.ApplicantName);
            $("#txtFatherName").val(data.FatherName);
            $("#txtMotherName").val(data.MotherName);
            $("#txtDOB").val(data.DOB);
            $("#txtDOB1").val(data.DOB);
            $("input:radio[name=rbtnlstGender][value=" + data.GenderId + "]").attr('checked', true);
            if (data.GenderId == "27") {
                $("#ddlMaritalStatus option[value=" + data.MaritalStatusId + "]").prop('selected', true);
                $("#dvMaritalStatus").show();
            }
            else
                $("#dvMaritalStatus").hide();

            $("input:radio[name=rbtnlstMaritalStatus][value=" + data.MaritalStatusId + "]").attr('checked', true);
            $("input:radio[name=rbtnlstCategory][value=" + data.CategoryId + "]").attr('checked', true);
            $("input:radio[name=rbtnlstCategory1][value=" + data.CategoryId + "]").attr('checked', true);
            if (data.CategoryId == "1" || data.CategoryId == "2" || data.CategoryId == "3") {
                $("#divCategory").show();
                $("#divCategoryEWS").hide();
                if (data.CategoryCertificateNo == "NA")
                    $("#txtCertificateNo").val('');
                else
                    $("#txtCertificateNo").val(data.CategoryCertificateNo);
                if (data.CertificateIssueDate == "01/01/1900")
                    $("#txtCertificateDate").val('');
                else
                    $("#txtCertificateDate").val(data.CertificateIssueDate);
            }
            else {
                $("#divCategory").hide();
                $("#txtCertificateNo").val('');
                $("#txtCertificateDate").val('');
                $("#divCategoryEWS").show();
                if (data.IsEWS == "1")
                    $('input:radio[name=rbtnlstEWS][value=1]').attr('checked', true);
                else
                    $('input:radio[name=rbtnlstEWS][value=0]').attr('checked', true);

            }
            fnBindPWBDCategory(data.CategoryId);
            fnBindPWBDSubCategory(data.PWBDCategoryId);
            fnBindLCSubCategory(data.PWBDSubCategoryId);
            if (data.IsOPH == "1") {
                $('input:radio[name=rbtnlstPWD][value=1]').attr('checked', true);
                $("#div_PWDPercent").show();
                funGetPHPercent();
                $("#ddlOPHPercent option[value=" + data.DisabilityPercent + "]").attr('selected', true);
                $("#div_rbtnlstPWD").show();
                $("#ddlPWD option[value=" + data.PWBDCategoryId + "]").attr('selected', true);
                $("#ddlPWDType").show();
                //$("#divUploadPWBDCertificate").show();
                $("#divScribe").show();
                $("#divScribe").show(data.IsScribe);
                $('input:radio[name=rbtnlstScribe][value=' + data.IsScribe + ']').attr('checked', true);

                $("#ddlPWDType option[value=" + data.PWBDSubCategoryId + "]").attr('selected', true);
                $("#ddlLCSubCategory option[value=" + data.LCSubCategoryId + "]").attr('selected', true);
                //$("#txtOPHDetails").val(data.DisabilityPercent);

                if (data.IsScribe == "1")
                    $('input:radio[name=rbtnlstScribe][value=1]').attr('checked', true);
                else
                    $('input:radio[name=rbtnlstScribe][value=0]').attr('checked', true);
            }
            else {
                $('input:radio[name=rbtnlstPWD][value=0]').attr('checked', true);
                $("#div_rbtnlstPWD").hide();
                $("#div_PWDType").hide();
                $("#div_PWDPercent").hide();
                $("#divLCSubCategory").hide();
                $("#txtOPHDetails").val('');
                $("#divUploadPWBDCertificate").hide();
                $("#divScribe").hide();
            }

            $("input:radio[name=rbtnlstNationality][value=" + data.NationalityId + "]").attr('checked', true);
            //BindStates("#ddlDomicile");
            //$("#ddlDomicile option[value=" + data.DomicileId + "]").prop('selected', true);
            $("#ddlDomicile").val(data.DomicileId.toString());

            $("#ddlIDProof option[value=" + data.IDProofType + "]").prop('selected', true);
            $("#txtIDNo").val(data.IDNo);
            $("#txtPlaceOfIssue").val(data.IssuedPlace);
            $("#IssueDate").val(data.IssuedDate == "01/01/1900" ? '' : data.IssuedDate);
            $("#txtValidTill").val(data.ValidTill == "01/01/1900" ? '' : data.ValidTill);

            if (data.IsGovEmp == "1") {
                $("#dvGovernmentEmployee").show();
                $("#divGovEmpDetails").show();
                $('input:radio[name=rbtnlstGovEmp][value=1]').attr('checked', true);
                $("#txtInstitution").val(data.Institution);
                $("#ddlJobtype option[value=" + data.JobStatusId + "]").attr('selected', true);
                $("#ddlTypeOfOrgination option[value='" + data.TypeOfOrgination + "']").attr('selected', true);
                $("#txtCurntPosition").val(data.PositionHeld);
                $("#txtAppntmntDate").val(data.AppointmentDate);
                $("#txtRelievingDate").val(data.RelievingDate);
                //$("#divAIIMSEmployee").hide();
            }
            else {
                $("#divGovEmpDetails").hide();
                $('input:radio[name=rbtnlstGovEmp][value=0]').attr('checked', true);
            }

            if (data.IsAIIMSEmp == "1") {
                BindAiims(data.AiimsInstituteID)
                $("#divAIIMSEmployee").show();
                $("#divAIIMSEmployeeDetails").show();
                $('input:radio[name=rbtnlstAIIMSEmp][value=1]').attr('checked', true);
                $("#txtJoinDate").val(data.JoiningDate);

                $("#txtPostName").val(data.PostName);
                $("#txtDepartmentName").val(data.DepartmentName);
                $("#ddlAIIMSJobStatus option[value=" + data.AIIMSJobStatusId + "]").attr('selected', true);
                $("#dvGovernmentEmployee").show();
            }
            else {
                $("#divAIIMSEmployeeDetails").hide();
                $('input:radio[name=rbtnlstAIIMSEmp][value=0]').attr('checked', true);
            }

            if (data.IsExServiceMen == "1") {
                $('input:radio[name=rbtnlstExSerMan][value=1]').attr('checked', true);
                $("#divExSerManDetails").show();
                $("#txtServiceIn").val(data.ServiceIn);
                $("#txtSerStartDate").val(data.ServiceStartDate);
                $("#txtServEndDate").val(data.ServiceEndDate);
                $("#spnLenService").text(data.ServiceLength);
            }
            else {
                $('input:radio[name=rbtnlstExSerMan][value=0]').attr('checked', true);
                $("#divExSerManDetails").hide();
                $("#txtServiceIn, #txtSerStartDate,#txtServEndDate").val('');
                $("#spnLenService").text('');
            }

            if (data.IsDefenceDisabled == "1") {
                $('input:radio[name=rbtnlstDefenceDisabled][value=1]').attr('checked', true);
            }
            else {
                $('input:radio[name=rbtnlstDefenceDisabled][value=0]').attr('checked', true);
            }

            if (data.IsServiceInArmedForces == "1") {
                $('input:radio[name=rbtnlstSerInArmedForces][value=1]').attr('checked', true);
            }
            else {
                $('input:radio[name=rbtnlstSerInArmedForces][value=0]').attr('checked', true);
            }


            $("#txtEmail").val(data.Email);
            $("#txtCEmail").val(data.Email);
            $("#txtMobileNo").val(data.MobileNo);
            $("#txtCMobileNo").val(data.MobileNo);
            $("input:radio[name=rbtnlstAlternateNumber][value=" + data.IsAlternateNo + "]").attr('checked', true);

            if (data.IsAlternateNo == "1") {
                $("#div_OtherMobileNo").show();
                $("#div_OtherLandline").hide();
                //$("#txtAlternateMobileNo").val(data.ContactNo != "0" ? data.ContactNo : "");
                $("#txtAlternateMobileNo").val(data.IsEditProfile != "0" ? data.IsEditProfile : "");
            }
            if (data.IsReOpen == "1") {
                $('#txtDOB,#txtDOB1').prop('disabled', false);
            }
            else if (data.IsAlternateNo == "2") {
                $("#div_OtherLandline").show();
                $("#div_OtherMobileNo").hide();
                $("#txtSTDCode").val(data.StdNo != "0" ? data.StdNo : "");
                //$("#txtLandlineNo").val(data.ContactNo != "0" ? data.ContactNo : "");
                $("#txtLandlineNo").val(data.IsEditProfile != "0" ? data.IsEditProfile : "");
            }
            //else
            //    $("#div_OtherLandline,#div_OtherMobileNo").hide();

            //  $("input:radio[name=rbtnlstCategory]").prop('disabled', true);
            //  $("input:radio[name=rbtnlstCategory1]").prop('disabled', true);
            //  $("input:radio[name=rbtnlstPWD]").prop('disabled', true);
            //  $("input:radio[name=rbtnlstScribe]").prop('disabled', true);
            //$('#txtFirstName,#txtConfirmName,#txtDOB,#txtMobileNo,#txtCMobileNo,#txtEmail,#txtCEmail,#ddlOPHPercent,#ddlPWD,#ddlPWDType,#ddlLCSubCategory,#ddlGroup,#ddlPost').prop('disabled', true);


            //$("input:radio[name=rbtnlstGovEmp]").prop('disabled', true);
            //$("input:radio[name=rbtnlstAIIMSEmp]").prop('disabled', true);
            //$("input:radio[name=rbtnlstExSerMan]").prop('disabled', true);
            //$("input:radio[name=rbtnlstDefenceDisabled]").prop('disabled', true);
            //$("input:radio[name=rbtnlstSerInArmedForces]").prop('disabled', true);
            //$('#txtInstitution,#txtCurntPosition,#txtAppntmntDate,#txtRelievingDate,#ddlJobtype,#txtJoinDate,#txtPostName,#txtDepartmentName,#ddlAIIMSJobStatus,#txtServiceIn,#txtSerStartDate,#txtServEndDate').prop('disabled', true);


            if (data.IsPaid == "1" || data.IsPaid == "true" || data.IsRepayment == "1") {
                //if (data.IsPaid == "2") {
                $('#txtFirstName,#txtConfirmName,#txtFatherName,#txtMotherName,#txtDOB,#txtMobileNo,#txtCMobileNo,#txtEmail,#txtCEmail,#ddlOPHPercent,#ddlPWD,#ddlPWDType,#ddlLCSubCategory,#ddlDomicile,#ddlGroup,#ddlPost').prop('disabled', true);
                $("input:radio[name=rbtnlstCategory]").prop('disabled', true);
                $("input:radio[name=rbtnlstCategory1]").prop('disabled', true);
                $("input:radio[name=rbtnlstPWD]").prop('disabled', true);
                $("input:radio[name=rbtnlstScribe]").prop('disabled', true);

                $("input:radio[name=rbtnlstGovEmp]").prop('disabled', true);
                $("input:radio[name=rbtnlstAIIMSEmp]").prop('disabled', true);
                $("input:radio[name=rbtnlstExSerMan]").prop('disabled', true);
                $("input:radio[name=rbtnlstDefenceDisabled]").prop('disabled', true);
                $("input:radio[name=rbtnlstSerInArmedForces]").prop('disabled', true);
                $('#txtInstitution,#txtCurntPosition,#txtAppntmntDate,#txtRelievingDate,#ddlTypeOfOrgination,#ddlJobtype,#txtJoinDate,#txtPostName,#txtDepartmentName,#ddlAIIMSJobStatus,#txtServiceIn,#txtSerStartDate,#txtServEndDate,#ddlPost').prop('disabled', true);
            }
            else {
                $('#txtFirstName,#txtConfirmName,#txtFatherName,#txtMotherName,#txtDOB,#txtMobileNo,#txtCMobileNo,#txtEmail,#txtCEmail,#ddlOPHPercent,#ddlPWD,#ddlPWDType,#ddlLCSubCategory,#ddlDomicile,#ddlGroup,#ddlPost').prop('disabled', false);
                $("input:radio[name=rbtnlstCategory]").attr('disabled', false);
                $("input:radio[name=rbtnlstPWD]").attr('disabled', false);

                $("input:radio[name=rbtnlstGovEmp]").prop('disabled', false);
                $("input:radio[name=rbtnlstAIIMSEmp]").prop('disabled', false);
                $("input:radio[name=rbtnlstExSerMan]").prop('disabled', false);
                $("input:radio[name=rbtnlstDefenceDisabled]").prop('disabled', false);
                $("input:radio[name=rbtnlstSerInArmedForces]").prop('disabled', false);
                $('#txtInstitution,#txtCurntPosition,#txtAppntmntDate,#txtRelievingDate,#ddlTypeOfOrgination,#ddlJobtype,#txtJoinDate,#txtPostName,#txtDepartmentName,#ddlAIIMSJobStatus,#txtServiceIn,#txtSerStartDate,#txtServEndDate,#ddlPost').prop('disabled', false);
            }
        }
        else {
            jAlert("Your action could not be completed due to an exception.");
        }
        overlay_enabled("divDisabled");
    });

    overlay_enabled("divDisabled");
}

function fnShowOPHOption(sts) {
    $("#txtOPHDetails").val('');
    if (sts == "1") {
        funGetPHPercent();
        $("#div_rbtnlstPWD").show();
        $("#div_PWDPercent").show();
        $("#divScribe").show();
        //$("#divUploadPWBDCertificate").show();
        $("#divOPHPoupup").fadeIn();
    }
    else {
        $("input:radio[name=rbtnlstScribe]").prop('checked', false);
        $("#div_rbtnlstPWD").hide();
        $("#divOPHPoupup").hide();
        $("#div_PWDPercent").hide();
        $("#div_PWDType").hide();
        $("#divScribe").hide();
        $("#divUploadPWBDCertificate").hide();

    }
}

//function fnShowOPHOption(sts, appliedId) {
//    //$("#txtPWDPercentage").val('');
//    $("#txtPWDType").val('');
//    $("#ddlPWD")[0].selectedIndex = 0;
//    $("#ddlOPHPercent")[0].selectedIndex = 0;
//    $("#divPWDTypeText").hide();
//    $("#div_rbtnlstPWD").hide();
//    if (sts == "1") {
//        fnAppliedPost(appliedId);
//        funGetPHPercent();
//        $("#div_PWDPercent").show();
//        if (appliedId == "2" || appliedId == "4" || appliedId == "11" || appliedId == "13" || appliedId == "15" || appliedId == "21" || appliedId == "22" || appliedId == "23") {
//            $("#divPWDTypeText").show();
//            $("#div_rbtnlstPWD").hide();
//        }
//        else {
//            $("#div_rbtnlstPWD").show();
//            $("#divPWDTypeText").hide();
//        }
//    }
//    else {
//        $("#div_rbtnlstPWD").hide();
//        $("#div_PWDPercent").hide();
//        $("#div_PWDType").hide();
//    }
//}

function fnAppliedPostByDepartment(sts) {
    devugger;
    if ($('#hdnPostValue').val() == "0" || $('#hdnPostValue').val() == "" || $('#hdnPostValue').val() == null) {
        jAlert('Select Post Applying !!', 'Message');
        return false;
    }
    if ($('#ddlDepartment').val() == "0" || $('#ddlDepartment').val() == "" || $('#ddlDepartment').val() == null) {
        jAlert('Select ddlDepartment !!', 'Message');
        return false;
    }
    $("#lblSC_1,#lblST_1,#lblOBC_1,#lblGen_1,#lblSC,#lblST,#lblOBC,#lblGen").show();
    if (sts == "58") {
        $("#lblSC_1,#lblSC").hide();
    }
    else if (sts == "59") {
        $("#lblSC_1,#lblST_1,#lblGen_1,#lblSC,#lblST,#lblGen").hide();
    }
    else if (sts == "60") {
        $("#lblGen_1,#lblST_1,#lblOBC_1,#lblGen,#lblST,#lblOBC").hide();
    }
}

function fnAppliedPost(sts) {
    if (sts != "") {
        $("#ddlPost").html('');
        var listItems = "";
        var postid = 1;

        //$.post(appPath + "/Registration/GetBindPost", { postid: postid }, function (result) {
        //    if (result && result != "error") {
        //        var listItems = "<p><span class='d-none'>-1</span>[Choose One]</p>";
        //        for (var i = 0; i < result.length; i++) {
        //            listItems += "<p><span class='d-none'>" + result[i].PostId + "</span>" + result[i].PostName + "</p>";
        //        }

        //        $("#ddlPost").html(listItems);

        //    }
        //    $("#ddlPost option[value=" + sts + "]").prop('selected', true);

        //    overlay_enabled("divDisabled");

        // $.post(appPath + "/Registration/GetBindPost", { postid: postid }, function (result) {
        //     if (result && result != "error") {
        //         var listItems = "<div class='option' onclick='myOptionClick(" + 0 + ")'><p>[Choose One]</p></div>";
        //         for (var i = 0; i < result.length; i++) {
        //             listItems += "<div class='option' onclick='myOptionClick(" + result[i].PostId + ")' id='" + result[i].PostId + "'><p>" + result[i].PostName + "</p></div>";
        //         }

        //         $("#ddlPost").html(listItems);

        //     }
        //     var dropvalue = $("#" + sts).find("p").html();
        //     $($("#" + sts).closest(".custom-dropdown").find(".custom-dropBtn").html(dropvalue + "<span class='triangle_down'></span>"));
        //     $('#hdnPostValue').val(sts);
        //     overlay_enabled("divDisabled");
        // });



        var listItems = "";
    }
}

function fnShowAlternateNo(sts) {
    $("#txtAlternateMobileNo").val('');
    $("#txtSTDCode").val('');
    $("#txtLandlineNo").val('');
    if (sts == "1") {
        $("#div_OtherMobileNo").show();
        $("#div_OtherLandline").hide();
    }
    else {
        $("#div_OtherLandline").show();
        $("#div_OtherMobileNo").hide();
    }
}

function fnValidate(type) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var emailaddressVal = $("#txtEmail").val();
    var mobLnght = $('#txtMobileNo').val().length;
    var altmobLnght = $('#txtAlternateMobileNo').val().length;
    //var minDate = new Date('03/13/2002'); var actDob = "";
    var minDate = new Date('05/14/2005'); var actDob = "";
    if ($("#txtDOB").val() != "") {
        var dobStr = $("#txtDOB").val().split("/");
        actDob = new Date(dobStr[1] + '/' + dobStr[0] + '/' + dobStr[2]);
    }
    //if ($("#ddlGroup")[0].selectedIndex == 0) {
    //    jAlert('Select Group !!', 'Message');
    //    var input = $("#ddlGroup");
    //    tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
    //    return false;
    //}
    // else
    if ($("#ddlPost")[0].selectedIndex == 0) {
        jAlert('Select Applying Post !!', 'Message');
        var input = $("#ddlPost");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if (isVisible($("#divDepartment")) && $("#ddlDepartment")[0].selectedIndex == 0) {
        jAlert('Select Department !!', 'Message');
        $('#ddlDepartment').focus().val($('#ddlPWD').val());
        return false;
    }
    else if ($("#txtFirstName").val() == "") {
        jAlert("Enter Applicant Name !!", 'Message');
        $('#txtFirstName').focus().val($('#txtFirstName').val());
        return false;
    }
    else if ($("#txtConfirmName").val() == "") {
        jAlert("Enter Applicant Name again !!", 'Message');
        $('#txtConfirmName').focus().val($('#txtConfirmName').val());
        return false;
    }
    else if ($("#txtFirstName").val() != $("#txtConfirmName").val()) {
        jAlert('Confirm Name does not matched, Kindly fill same Name !!', 'Message');
        $("#txtConfirmName").val('');
        $('#txtConfirmName').focus().val($('#txtConfirmName').val());
        return false;
    }
    else if ($("#txtFatherName").val() == "") {
        jAlert("Enter Father Name !!", 'Message');
        $('#txtFatherName').focus().val($('#txtFatherName').val());
        return false;
    }
    else if ($("#txtMotherName").val() == "") {
        jAlert('Enter Mother Name !!', 'Message');
        $('#txtMotherName').focus().val($('#txtMotherName').val());
        return false;
    }
    else if (!$('input:radio[name=rbtnlstCategory1]:checked').val()) {
        jAlert('Select Applicant Category !!', 'Message');
        var input = $("#rbtnlstCategory_SC1");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if (!$('input:radio[name=rbtnlstCategory]:checked').val()) {
        jAlert('Select Confirm Category !!', 'Message');
        var input = $("#rbtnlstCategory_SC");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    //else if (isVisible($("#divCategoryEWS")) && !$('input:radio[name=rbtnlstEWS]:checked').val()) {
    //    jAlert('Select option, EWS !!', 'Message');
    //    return false;
    //}
    else if (!$('input:radio[name=rbtnlstPWD]:checked').val()) {
        jAlert('Select PWD !!', 'Message');
        var input = $("#rbtnlstPWD_yes");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if (isVisible($("#div_PWDPercent")) && $("#ddlOPHPercent")[0].selectedIndex == 0) {
        jAlert('Select Disability % !!', 'Message');
        $('#ddlOPHPercent').focus().val($('#ddlOPHPercent').val());
        return false;
    }
    else if (isVisible($("#div_rbtnlstPWD")) && $("#ddlPWD")[0].selectedIndex == 0) {
        jAlert('Select PWBD Category !!', 'Message');
        $('#ddlPWD').focus().val($('#ddlPWD').val());
        return false;
    }
    else if (isVisible($("#div_rbtnlstPWD")) && $("#ddlPWDType")[0].selectedIndex == 0) {
        jAlert('Select PWBD Sub Category !!', 'Message');
        $('#ddlPWDType').focus().val($('#ddlPWDType').val());
        return false;
    }
    //else if (isVisible($("#div_rbtnlstPWD")) ) {
    //    if (!$('input:radio[name=rbtnlstScribe]:checked').val()) {
    //        jAlert('Select Scribe option !!', 'Message');
    //        var input = $("#rbtnlstScribe");
    //        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
    //        return false;
    //    }
    //}
    else if (isVisible($("#divLCSubCategory")) && $("#ddlLCSubCategory")[0].selectedIndex == 0) {
        jAlert('Select Leprosy Cured Person Sub Category !!', 'Message');
        $('#ddlLCSubCategory').focus().val($('#ddlLCSubCategory').val());
        return false;
    }
    else if (isVisible($("#divScribe")) && !$('input:radio[name=rbtnlstScribe]:checked').val()) {
        jAlert('Select Scribe option !!', 'Message');
        var input = $("#rbtnlstScribe");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    //else if (isVisible($("#divPWDTypeText")) && $("#txtPWDType").val() == "") {
    //    jAlert('Enter PWD Type !!', 'Message');
    //    $('#txtPWDType').focus().val($('#txtPWDType').val());
    //    return false;
    //}

    else if (!$('input:radio[name=rbtnlstNationality]:checked').val()) {
        jAlert('Select Nationality !!', 'Message');
        var input = $("#rbtnlstPWD_yes");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if ($("#ddlDomicile")[0].selectedIndex == 0) {
        jAlert('Select Domicile !!', 'Message');
        var input = $("#ddlDomicile");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if ($("#ddlIDProof")[0].selectedIndex == 0) {
        jAlert('Select ID Proof !!', 'Message');
        var input = $("#ddlIDProof");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if ($("#txtIDNo").val() == "") {
        jAlert("Enter ID No. !!", 'Message');
        $('#txtIDNo').focus().val($('#txtIDNo').val());
        return false;
    }
    else if ($("#txtPlaceOfIssue").val() == "") {
        jAlert("Enter Place Of Issue !!", 'Message');
        $('#txtPlaceOfIssue').focus().val($('#txtPlaceOfIssue').val());
        return false;
    }
    else if (!$('input:radio[name=rbtnlstGender]:checked').val()) {
        jAlert('Select Applicant Gender !!', 'Message');
        var input = $("#rbtnlstGender_Male");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if (isVisible($("#dvMaritalStatus")) && $("#ddlMaritalStatus")[0].selectedIndex == 0) {
        jAlert('Select Marital Status !!', 'Message');
        var input = $("#ddlMaritalStatus");
        tmp = input.val(); input.focus().val("").blur().focus().val(tmp);
        return false;
    }
    else if (isVisible($("#dvGovernmentEmployee")) && !$('input:radio[name=rbtnlstGovEmp]:checked').val()) {
        jAlert('Select option, Are you a Central Government Employee (Excluding AIIMS) !!', 'Message');
        return false;
    }
    else if (isVisible($("#divGovEmpDetails")) && $("#txtInstitution").val() == "") {
        jAlert('Enter Name of Institution / Organisation !!', 'Message');
        return false;
    }
    else if (isVisible($("#divGovEmpDetails")) && $("#ddlJobtype")[0].selectedIndex == 0) {
        jAlert('Select Type of Job Status !!', 'Message');
        return false;
    }
    else if (isVisible($("#divGovEmpDetails")) && $("#ddlTypeOfOrgination")[0].selectedIndex == 0) {
        jAlert('Select Type of Orgination. !!', 'Message');
        return false;
    }
    else if (isVisible($("#divGovEmpDetails")) && $("#txtCurntPosition").val() == "") {
        jAlert('Enter Present Position Held !!', 'Message');
        return false;
    }
    else if (isVisible($("#divGovEmpDetails")) && $("#txtAppntmntDate").val() == "") {
        jAlert('Enter Date Of Appointment !!', 'Message');
        return false;
    }
    else if (isVisible($("#divGovEmpDetails")) && $("#txtRelievingDate").val() == "") {
        jAlert('Enter Date Of Relieving !!', 'Message');
        return false;
    }
    else if (isVisible($("#divAIIMSEmployee")) && !$('input:radio[name=rbtnlstAIIMSEmp]:checked').val()) {
        jAlert('Select option, AIIMS Employee !!', 'Message');
        return false;
    }
    else if (isVisible($("#divAIIMSEmployeeDetails")) && $("#txtJoinDate").val() == "") {
        jAlert('Enter Joining Date !!', 'Message');
        return false;
    }
    else if (isVisible($("#divAIIMSEmployeeDetails")) && $("#txtPostName").val() == "") {
        jAlert('Enter Post Name !!', 'Message');
        return false;
    }
    else if (isVisible($("#divAIIMSEmployeeDetails")) && $("#txtDepartmentName").val() == "") {
        jAlert('Enter Department Name !!', 'Message');
        return false;
    }
    else if (isVisible($("#divAIIMSEmployeeDetails")) && $("#ddlAIIMSJobStatus")[0].selectedIndex == 0) {
        jAlert('Select Type of Job Status !!', 'Message');
        return false;
    }
    else if (!$('input:radio[name=rbtnlstExSerMan]:checked').val()) {
        jAlert('Select option, Ex-Service men !!', 'Message');
        return false;
    }
    else if (isVisible($("#divExSerManDetails")) && $("#txtServiceIn").val() == "") {
        jAlert('Enter Service Provided In !!', 'Message');
        return false;
    }
    else if (isVisible($("#divExSerManDetails")) && $("#txtSerStartDate").val() == "") {
        jAlert('Enter Service Start Date !!', 'Message');
        return false;
    }
    else if (isVisible($("#divExSerManDetails")) && $("#txtServEndDate").val() == "") {
        jAlert('Enter Service End Date !!', 'Message');
        return false;
    }
    else if (isVisible($("#divDefencePersonnel")) && !$('input:radio[name=rbtnlstDefenceDisabled]:checked').val()) {
        jAlert('Select option, Defence Personnel disabled !!', 'Message');
        return false;
    }
    else if (isVisible($("#divDefencePersonnel")) && !$('input:radio[name=rbtnlstSerInArmedForces]:checked').val()) {
        jAlert('Select option, Service Clerks in Armed Forces !!', 'Message');
        return false;
    }
    else if ($("#txtDOB").val() == "") {
        jAlert('Select Confirm Date of Birth !!', 'Message');
        $('#txtDOB1').focus().val($('#txtDOB1').val());
        return false;
    }
    else if (actDob >= minDate) {
        jAlert('<b>Note:</b> <span class="contentRed">You are not eligible for this Entrance Examination as per your Date of Birth !!</span>', 'Message !!');
        $("#txtDOB").val('');
        $('#txtDOB').focus().val($('#txtDOB').val());
    }
    else if ($("#txtEmail").val() == "") {
        jAlert('Enter Email ID !!', 'Message');
        $('#txtEmail').focus().val($('#txtEmail').val());
        return false;
    }
    else if ($("#txtEmail").val() != "" && !emailReg.test(emailaddressVal)) {
        jAlert('Invalid Email Id !!', 'Message');
        $("#txtEmail").val('');
        $('#txtEmail').focus().val($('#txtEmail').val());
        return false;
    }
    else if ($("#txtCEmail").val() == "") {
        jAlert('Enter Confirm Email ID !!', 'Message');
        $('#txtCEmail').focus().val($('#txtCEmail').val());
        return false;
    }
    else if ($("#txtEmail").val() != $("#txtCEmail").val()) {
        jAlert('Confirm email does not matched, Kindly fill same email !!', 'Message');
        $("#txtCEmail").val('');
        return false;
    }
    else if ($("#txtMobileNo").val() == "") {
        jAlert('Enter Mobile No. !!', 'Message');
        $('#txtCEmail').focus().val($('#txtCEmail').val());
        return false;
    }
    else if (mobLnght != 10) {
        jAlert('Mobile No. should have 10 digits !!', 'Message');
        return false;
    }
    else if ($("#txtCMobileNo").val() == "") {
        jAlert('Enter Confirm Mobile No. !!', 'Message');
        $('#txtCMobileNo').focus().val($('#txtCMobileNo').val());
        return false;
    }
    else if ($("#txtMobileNo").val() != $("#txtCMobileNo").val()) {
        jAlert('Confirm Mobile No. does not matched, Kindly fill same Mobile No. !!', 'Message');
        $("#txtCMobileNo").val('');
        $('#txtMobileNo').focus().val($('#txtMobileNo').val());
        return false;
    }
    else if (isVisible($("#div_OtherMobileNo")) && $("#txtAlternateMobileNo").val() == "") {
        jAlert('Enter Other Mobile No !!', 'Message');
        $('#txtAlternateMobileNo').focus().val($('#txtAlternateMobileNo').val());
        return false;
    }
    else if (isVisible($("#div_OtherMobileNo")) && altmobLnght != 10) {
        jAlert('Mobile No. should have 10 digits !!', 'Message');
        $('#txtAlternateMobileNo').focus().val($('#txtAlternateMobileNo').val());
        return false;
    }
    else if (isVisible($("#div_OtherLandline")) && $("#txtSTDCode").val() == "") {
        jAlert('Enter STD Code !!', 'Message');
        $('#txtSTDCode').focus().val($('#txtSTDCode').val());
        return false;
    }
    else if (isVisible($("#div_OtherLandline")) && $("#txtLandlineNo").val() == "") {
        jAlert('Enter Land line No. !!', 'Message');
        $('#txtLandlineNo').focus().val($('#txtLandlineNo').val());
        return false;
    }
    else if (!$("#chkDecl").is(':checked')) {
        jAlert('Check Eligibility Declaration !!', 'Message');
        return false;
    }
    else {
        Save(type);
    }
}

function Save(type) {
    $(".btnR").hide();
    // overlay_disable("dvWrapper", "divDisabled");

    var CertificateNo = (isVisible($("#divCategory")) && $("#txtCertificateNo").val() != "") ? $("#txtCertificateNo").val().replace("'", "").replace("&", "") : "NA";
    var CertificateDate = (isVisible($("#divCategory")) && $("#txtCertificateDate").val() != "") ? $("#txtCertificateDate").val().replace("'", "").replace("&", "") : "01/01/1900";

    var IsEWS = "0", MaritalStatus = "0", OPHType = "0", OPHPercentage = "0", OPHOtherType = "0", IsGovEmp = "0", Institution = "", TypeOfOrgination = "", JobStatusId = "0", AiimsInstituteid = "0", IsAIIMSEmp = "0", AIIMSJobStatusId = "0";
    var DepartmentId = "0", ServiceLength = "0", IsDefenceDisabled = "0", IsServiceInArmedForces = "0", otherNo = "0", STDCode = "0", LandlineNo = "0", DomicileStateId = "0";
    var NationalityOther = "NA", OPHTypeOther = "0", PWBDCategoryId = "0", PWBDSubCategoryId = "0", LCSubCategoryId = "0", IsScribe = "0", PositionHeld = "NA", PostName = "NA", DepartmentName = "NA", ServiceIn = "NA";
    var AppointmentDate = "01/01/1900", JoiningDate = "01/01/1900", ServiceStartDate = "01/01/1900", ServiceEndDate = "01/01/1900", IDIssueDate = "01/01/1900";
    var IDValidTill = "01/01/1900", RelievingDate = "01/01/1900";

    if (isVisible($("#divDepartment"))) {
        DepartmentId = $("#ddlDepartment").val();
    }
    if (isVisible($("#divCategoryEWS"))) {
        IsEWS = $('input:radio[name=rbtnlstEWS]:checked').val();
    }
    if (isVisible($("#dvMaritalStatus"))) {
        MaritalStatus = $("#ddlMaritalStatus").val();
    }
    if (isVisible($("#div_rbtnlstPWD"))) {
        OPHType = $("#ddlPWD").val();
    }
    if (isVisible($("#divPWDTypeText"))) {
        OPHTypeOther = $("#txtPWDType").val();
    }
    if (isVisible($("#div_PWDPercent"))) {
        OPHPercentage = $("#ddlOPHPercent").val();
    }
    //if (isVisible($("#div_PWDType"))) {
    //    OPHOtherType = $("#ddlOPHSubCategory").val();
    //}

    if (isVisible($("#div_rbtnlstPWD"))) {
        PWBDCategoryId = $("#ddlPWD").val();
    }
    if (isVisible($("#div_rbtnlstPWD"))) {
        PWBDSubCategoryId = $("#ddlPWDType").val();
    }
    if (isVisible($("#divLCSubCategory"))) {
        LCSubCategoryId = $("#ddlLCSubCategory").val();
    }
    if (isVisible($("#divScribe"))) {
        IsScribe = $('input:radio[name=rbtnlstScribe]:checked').val();
    }

    if (isVisible($("#dvNationalityOther")) && $("#txtNationalityOther").val() != "") {
        NationalityOther = $("#txtNationalityOther").val().replace("'", "").replace("&", "");
    }
    if (isVisible($("#dvGovernmentEmployee"))) {
        IsGovEmp = $('input:radio[name=rbtnlstGovEmp]:checked').val();
    }
    if (isVisible($("#divGovEmpDetails"))) {
        Institution = $("#txtInstitution").val();
    }
    if (isVisible($("#divGovEmpDetails"))) {
        JobStatusId = $("#ddlJobtype").val();
    }
    if (isVisible($("#divGovEmpDetails"))) {
        TypeOfOrgination = $("#ddlTypeOfOrgination").val();
    }
    if (isVisible($("#divGovEmpDetails"))) {
        PositionHeld = $("#txtCurntPosition").val();
    }
    if (isVisible($("#divGovEmpDetails"))) {
        AppointmentDate = $("#txtAppntmntDate").val();
    }
    if (isVisible($("#divGovEmpDetails"))) {
        RelievingDate = $("#txtRelievingDate").val();
    }
    if (isVisible($("#divAIIMSEmployee"))) {
        IsAIIMSEmp = $('input:radio[name=rbtnlstAIIMSEmp]:checked').val();
    }
    if (isVisible($("#divAIIMSEmployeeDetails"))) {
        JoiningDate = $("#txtJoinDate").val();
    }
    if (isVisible($("#divAIIMSEmployeeDetails"))) {
        PostName = $("#txtPostName").val();
    }
    if (isVisible($("#divAIIMSEmployeeDetails"))) {
        AiimsInstituteid = $("#ddlAiimsName").val();
    }

    if (isVisible($("#divAIIMSEmployeeDetails"))) {
        DepartmentName = $("#txtDepartmentName").val();
    }

    if (isVisible($("#divAIIMSEmployeeDetails"))) {
        AIIMSJobStatusId = $("#ddlAIIMSJobStatus").val();
    }

    if (isVisible($("#divExSerManDetails"))) {
        ServiceIn = $("#txtServiceIn").val();
    }
    if (isVisible($("#divExSerManDetails"))) {
        ServiceStartDate = $("#txtSerStartDate").val();
    }
    if (isVisible($("#divExSerManDetails"))) {
        ServiceEndDate = $("#txtServEndDate").val();
    }
    if (isVisible($("#divExSerManDetails"))) {
        ServiceLength = $("#spnLenService").text();
    }
    if (isVisible($("#divDefencePersonnel"))) {
        IsDefenceDisabled = $('input:radio[name=rbtnlstDefenceDisabled]:checked').val();
    }
    if (isVisible($("#divDefencePersonnel"))) {
        IsServiceInArmedForces = $('input:radio[name=rbtnlstSerInArmedForces]:checked').val();
    }
    if (!$('input:radio[name=rbtnlstAlternateNumber]:checked').val())
        otherNo = "0";
    else
        otherNo = $('input:radio[name=rbtnlstAlternateNumber]:checked').val();

    if (isVisible($("#div_OtherMobileNo"))) {
        LandlineNo = $("#txtAlternateMobileNo").val().replace("'", "").replace("&", "");
    }
    if (isVisible($("#div_OtherLandline"))) {
        STDCode = $("#txtSTDCode").val().replace("'", "").replace("&", "");
        LandlineNo = $("#txtLandlineNo").val().replace("'", "").replace("&", "");
    }
    //var AppearedYear = "0";
    //if (isVisible($("#divIsAppeared"))) {
    //    AppearedYear = $("#ddlQlfyYrs").val();
    //}    
    if ($("#IssueDate").val() != "") {
        IDIssueDate = $("#IssueDate").val();
    }
    if ($("#txtValidTill").val() != "") {
        IDValidTill = $("#txtValidTill").val();
    }
    if ($('input:radio[name=rbtnlstNationality]:checked').val() != "7") {
        DomicileStateId = $("#ddlDomicile").val();
    }

    var sId = $("#hdnStudentId").val();
    var RoId = $("#hdnRowId").val();
    var reg = {};
    reg.StudentId = sId;
    reg.RowId = RoId;
    reg.GroupId = 37
    reg.AppliedPostId = $("#hdnPostValue").val();
    reg.DepartmentId = DepartmentId;

    reg.ApplicantName = $("#txtFirstName").val().replace("'", "").replace("&", "");
    reg.FatherName = $("#txtFatherName").val().replace("'", "").replace("&", "");
    reg.MotherName = $("#txtMotherName").val().replace("'", "").replace("&", "");
    reg.DOB = $("#txtDOB").val();
    reg.GenderId = $('input:radio[name=rbtnlstGender]:checked').val();
    reg.MaritalStatusId = MaritalStatus;
    reg.CategoryId = $('input:radio[name=rbtnlstCategory]:checked').val();
    reg.CategoryCertificateNo = CertificateNo;
    reg.CertificateIssueDate = CertificateDate;
    reg.IsEWS = IsEWS;
    reg.NationalityId = $('input:radio[name=rbtnlstNationality]:checked').val();
    reg.NationalityOther = NationalityOther;
    reg.IsOPH = $('input:radio[name=rbtnlstPWD]:checked').val();
    reg.OPHType = OPHType;
    reg.DisabilityPercent = OPHPercentage;
    reg.OPHOtherType = OPHTypeOther;
    reg.PWBDCategoryId = PWBDCategoryId;
    reg.PWBDSubCategoryId = PWBDSubCategoryId;
    reg.LCSubCategoryId = LCSubCategoryId;
    reg.IsScribe = IsScribe;
    reg.IDProofType = $("#ddlIDProof").val();
    reg.IDNo = $("#txtIDNo").val().replace("'", "").replace("&", "");
    reg.IssuedPlace = $("#txtPlaceOfIssue").val().replace("'", "").replace("&", "");
    reg.IssuedDate = IDIssueDate;
    reg.ValidTill = IDValidTill;
    reg.DomicileId = DomicileStateId;
    reg.IsGovEmp = IsGovEmp;
    reg.Institution = Institution;
    reg.JobStatusId = JobStatusId;
    reg.PositionHeld = PositionHeld;
    reg.AppointmentDate = AppointmentDate;
    reg.RelievingDate = RelievingDate;
    reg.IsAIIMSEmp = IsAIIMSEmp;
    reg.JoiningDate = JoiningDate;
    reg.PostName = PostName;
    reg.DepartmentName = DepartmentName;
    reg.AIIMSJobStatusId = AIIMSJobStatusId;
    reg.IsExServiceMen = $('input:radio[name=rbtnlstExSerMan]:checked').val();
    reg.ServiceIn = ServiceIn;
    reg.ServiceStartDate = ServiceStartDate;
    reg.ServiceEndDate = ServiceEndDate;
    reg.ServiceLength = ServiceLength;
    reg.IsDefenceDisabled = IsDefenceDisabled;
    reg.IsServiceInArmedForces = IsServiceInArmedForces;
    reg.EmailId = $("#txtEmail").val().replace("'", "").replace("&", "");
    reg.MobileNo = $("#txtMobileNo").val().replace("'", "").replace("&", "");
    reg.IsAlternateNo = otherNo;
    reg.StdNo = STDCode;
    reg.ContactNo = LandlineNo;
    reg.TypeOfOrgination = TypeOfOrgination;
    reg.AiimsInstituteid = AiimsInstituteid;

    var action = reg.StudentId != 0 ? 'UPD' : 'INS';
    $.post(appPath + "/Registration/SaveData", { regData: JSON.stringify(reg), IsAdmin: $("#hdnIsAdmin").val(), Action: action }, function (result) {
        $(".btnR").show();
        if (result && result != "exists" && result != "noData" && result != "error" && result != "closed") {
            var stJson = $.parseJSON(result)[0];
            if (sId == "0") {
                //jAlert('Kindly note your <span class="contentGreen b f18">Candidate ID : ' + stJson.CandidateId + ' </span>  <br /><br /> An Email & SMS has been sent to your Email ID and Mobile No. with login credentials which are required at the time of login. <br /><br />Your first step of application is completed, Your application is still incomplete, complete Due Steps before Registration closing date (19th Dec,2022 5:00 PM).<br /><br />Note: If you have not received E-mail in Inbox, kindly check mail in SPAM folder.', 'Message', function (r) {
                jAlert('Kindly note your <span class="contentGreen b f18">Candidate ID : ' + stJson.CandidateId + ' </span>  <br /><br /> An Email & SMS has been sent to your Email ID and Mobile No. with login credentials which are required at the time of login. <br /><br />Your first step of application is completed, Your application is still incomplete, complete Due Steps before Registration closing date.<br /><br />Note: If you have not received E-mail in Inbox, kindly check mail in SPAM folder.', 'Message', function (r) {
                    if (r == true) {
                        if (type == 1 && sId == "0")
                            go('Login');
                        else
                            $("#divAfterRegistration").modal('show');
                    }
                });
            }
            else
                go('Dashboard');
        }
        else if (result == "closed") {
            jAlert('<span class="contentRed b f18">Registration have been closed. </span>', 'Message');
        }
        else if (result == "exists") {
            jAlert('You have already registered yourself in this Entrance Examination, Kindly login and proceed for further !!', 'Already Registered !!');
        }
        else {
            jAlert("Your action could not be completed due to an exception1.");
        }
        overlay_enabled("divDisabled");
    });
    overlay_enabled("divDisabled");
}

function fnGetValidateEmail(emailId) {
    if (emailId != "") {
        // overlay_disable("dvWrapper", "divDisabled");
        $.post(appPath + "/Registration/ValidateEmail", { EmailId: emailId }, function (result) {
            if (result && result != "error" && result != "Notexist" && result == "exists") {
                jAlert('Email ID already exist.', 'Already Registered !!');
                $("#txtEmail").val('');
            }
            overlay_enabled("divDisabled");
        });
        overlay_enabled("divDisabled");
    }
}

function fnGetValidateMobile(mobile) {
    if (mobile != "") {
        // overlay_disable("dvWrapper", "divDisabled");
        $.post(appPath + "/Registration/ValidateMobileNo", { MobileNo: mobile }, function (result) {
            if (result && result != "error" && result != "Notexist" && result == "exists") {
                jAlert('Mobile No. already exist.', 'Already Registered !!');
                $("#txtMobileNo").val('');
            }
            overlay_enabled("divDisabled");
        });
        overlay_enabled("divDisabled");
    }
}

function fnGetValidateIDNo(idNo) {
    if (idNo != "") {
        // overlay_disable("dvWrapper", "divDisabled");
        $.post(appPath + "/Registration/ValidateIDNo", { IDNo: idNo }, function (result) {
            if (result && result != "error" && result != "Notexist" && result == "exists") {
                jAlert('ID No. already exist.', 'Already Registered !!');
                $("#txtIDNo").val('');
            }
            overlay_enabled("divDisabled");
        });
        overlay_enabled("divDisabled");
    }
}

function CheckCertificateNo() {
    var str = $("input[name='rbtnlstCategory']:checked").val();
    if (str == "3" && $("#txtCertificateDate").val() != "") {
        s = $("#txtCertificateDate").val().split('/');
        var ExactDate = new Date(s[1] + '/' + s[0] + '/' + s[2]);
        var OneYearBack = new Date('07/03/2015');
        OneYearBack.setDate(OneYearBack.getDate() - 365); // add -7 days to your date variable
        if (ExactDate < OneYearBack) {
            jAlert('You can not apply under OBC Category as  OBC Certificate Issue date is more than one (1) year old (refer prospectus for details). You can apply under UR category. !!', 'Message');
        }
    }
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
                    jAlert('<b>Note:</b> Issue Date should be lesser than Valid Till Date !!', 'Alert');
                }
                else if (filter == "1") {
                    jAlert('<b>Note:</b> Certificate Date should be greater than Date of Birth !!', 'Alert');
                }
                else if (filter == "2") {
                    jAlert('<b>Note:</b> Appointment Date should be greater than Relieving Date or Working till date !!', 'Alert'); //Date Of Appointment
                }
                $("#" + id1).val(''); $("#" + id2).val('');
            }
        }
    }
}

function fncompareName() {
    var strName = $("#txtFirstName").val();
    var strComName = $("#txtConfirmName").val();
    if (strName != "") {
        if (strName != strComName) {
            jAlert('Full Name does not match. ', 'Message');
            $("#txtConfirmName").val('');
            return false;
        }
    }
    else {
        jAlert('Enter Name. ', 'Message');
        return false;
    }
    return true;
}

function fnIsConfirmCategory(sts) {
    if ((!$('input:radio[name=rbtnlstCategory]:checked').val()) == (!$('input:radio[name=rbtnlstCategory1]:checked').val())) {
        if (!$('input:radio[name=rbtnlstCategory1]:checked').val()) {
            jAlert('Select Category !!', 'Message');
            $('input[name=rbtnlstCategory1]').prop('checked', false);
            return false;
        }
        else if (!$('input:radio[name=rbtnlstCategory]:checked').val()) {
            jAlert('Select Confirm Category !!', 'Message');
            var input = $("#rbtnlstCategory_SC");
            $('input[name=rbtnlstCategory]').prop('checked', false);
            return false;
        }
        else if ($('input:radio[name=rbtnlstCategory]:checked').val() != $('input:radio[name=rbtnlstCategory1]:checked').val()) {
            jAlert('Category does not matched !!', 'Message');
            $('input[name=rbtnlstCategory]').prop('checked', false);
            return false;
        }
    }
}

function fnIsConfirmdob(sts) {
    if (($("#txtDOB").val() != "") && ($("#txtDOB1").val() != "")) {
        if ($("#txtDOB1").val() == "") {
            jAlert('Select Date of Birth !!', 'Message');
            $('#txtDOB1').focus().val($('#txtDOB1').val());
            return false;
        }
        else if ($("#txtDOB").val() == "") {
            jAlert('Select Date of Birth !!', 'Message');
            $('#txtDOB').focus().val($('#txtDOB').val());
            return false;
        }
        else if (($("#txtDOB").val()) != ($("#txtDOB1").val())) {
            jAlert('Date of Birth does not matched !!', 'Message');
            $('#txtDOB').focus().val($('#txtDOB').val());
            $('#txtDOB').val('');
            return false;
        }
    }
}

function fncompareEmail() {
    var strEmail = $("#txtEmail").val();
    var strComEmail = $("#txtCEmail").val();
    if (strEmail != "") {
        if (strEmail != strComEmail) {
            jAlert('Email ID does not match. ', 'Message');
            $("#txtCEmail").val('');
            return false;
        }
    }
    else {
        jAlert('Enter Email. ', 'Message');
        return false;
    }
    return true;
}

function fncompareMobile() {
    var strMobile = $("#txtMobileNo").val();
    var strComMobile = $("#txtCMobileNo").val();
    if (strMobile != "") {
        if (strMobile != strComMobile) {
            jAlert('Mobile no. does not match. ', 'Message');
            $("#txtCMobileNo").val('');
            return false;
        }
    }
    else {
        jAlert('Enter Mobile No. ', 'Message');
        return false;
    }
    return true;
}

function ClearControl() {
    $("#txtFirstName,#txtConfirmName,#txtFatherName,#txtMotherName,#txtDOB,#txtCertificateNo,#txtCertificateDate,#txtOPHDetails").val('');
    $('input[name=rbtnlstGender]').prop('checked', false);
    $('input[name=rbtnlstCategory]').prop('checked', false);
    $('input[name=rbtnlstNationality]').prop('checked', false);
    $('input[name=rbtnlstPWD]').prop('checked', false);
    //$('input[name=rbtnlstMaritalStatus]').prop('checked', false);

    $("#ddlGroup,#ddlPost,#ddlIDProof")[0].selectedIndex = 0;
    $("#txtIDNo,#txtPlaceOfIssue,#IssueDate,#txtValidTill").val('');

    $("#txtEmail,#txtCEmail,#txtMobileNo,#txtCMobileNo,#txtAlternateMobileNo,#txtSTDCode").val('');
    $('input[name=rbtnlstAlternateNumber]').prop('checked', false);
}

function fnBindPost(val) {

    val = 1;
    if (val != "") {
        $("#ddlPost").html('');
        var listItems = "";


        //$.post(appPath + "/Registration/GetBindPost", { postid: val }, function (result) {
        //    if (result && result != "error") {
        //        var listItems = "<option value='-1'>[Choose One]</option>";
        //        for (var i = 0; i < result.length; i++) {
        //            listItems += "<option value='" + result[i].PostId + "' >" + result[i].PostName + "</option>";
        //        }

        //        $("#ddlPost").html(listItems);

        //    }

        //    overlay_enabled("divDisabled");
        //});

        // $.post(appPath + "/Registration/GetBindPost", { postid: val }, function (result) {
        //     if (result && result != "error") {
        //         var listItems = "<div class='option' onclick='myOptionClick(" + 0 + ")'><p>[Choose One]</p></div>";
        //         for (var i = 0; i < result.length; i++) {
        //             listItems += "<div class='option' onclick='myOptionClick(" + result[i].PostId + ")' id='" + result[i].PostId + "'><p>" + result[i].PostName + "</p></div>";
        //         }

        //         $("#ddlPost").html(listItems);

        //     }

        //     overlay_enabled("divDisabled");
        // });


        var listItems = "";
    }
}

function fnShowGovEmp(sts) {
    //$("#txtRelievingDate").val('15/04/2018');
    //$("#txtInstitution").val('');
    $("#ddlJobtype")[0].selectedIndex = 0;
    $("#ddlTypeOfOrgination")[0].selectedIndex = 0;
    $("#txtInstitution,#txtCurntPosition,#txtAppntmntDate,#txtRelievingDate").val('');

    if (sts == "1") {
        //$("#divAIIMSEmployee").hide();
        $("#divGovEmpDetails").show();
        //$('input:radio[name=rbtnlstAIIMSEmp][value=0]').attr('checked', true);
    }
    else {
        //$("#divGovEmpDetails,#divAIIMSEmployee").show();
        //$("#divGovEmpDetails,#divAIIMSEmployeeDetails").hide();
        $("#divGovEmpDetails").hide();
    }
}

function fnShowAIIMSEmp(sts) {
    $("#txtJoinDate,#txtPostName,#txtDepartmentName").val('');
    $("#ddlAIIMSJobStatus")[0].selectedIndex = 0;
    if (sts == "1") {
        //$("#dvGovernmentEmployee,#divGovEmpDetails").hide();
        $("#divAIIMSEmployeeDetails,#divAIIMSEmployee").show();
        //$('input:radio[name=rbtnlstGovEmp][value=0]').attr('checked', true);
    }
    else {
        //$("#divGovEmpDetails,#divAIIMSEmployeeDetails").hide();
        $("#divAIIMSEmployeeDetails").hide();
        //$("#dvGovernmentEmployee").show();
    }
}

function fnShowExServiceMan(sts) {
    var appliedPost = $("#hdnPostValue").val();
    if (appliedPost == "0" || appliedPost == null) {
        jAlert('Select applied Post !!', 'Message');
        $('input[name=rbtnlstExSerMan]').prop('checked', false);
    }
    $("#txtServiceIn,#txtSerStartDate,#txtServEndDate").val('');
    $("#spnLenService").text('');
    if (appliedPost > 0) {
        if (sts == "1") {
            $("#divExSerManDetails").show();
        }
        else {
            $("#divExSerManDetails").hide();
        }
    }
}
var glbDayDiffServ = "";
function fnDayDiffExService() {
    var strtDayArr = $("#txtSerStartDate").val().split('/');
    var endDayArr = $("#txtServEndDate").val().split('/');

    $("#spnLenService").text('');
    if ($("#txtSerStartDate").val() != "")
        strtDay = new Date(strtDayArr[1] + '/' + strtDayArr[0] + '/' + strtDayArr[2]);
    if ($("#txtServEndDate").val() != "")
        endDay = new Date(endDayArr[1] + '/' + endDayArr[0] + '/' + endDayArr[2]);

    if ($("#txtSerStartDate").val() != "" && $("#txtServEndDate").val() != "" && strtDay >= endDay) {
        jAlert('Invalid Date selection, Expected end date of service should be higher then start date !!', 'Message');
        $("#txtServEndDate").val('');
        $("#txtServEndDate").focus();
    }
    else {
        var diff = Math.floor((endDay - strtDay) / 86400000);
        diff = diff + 1;
        glbDayDiffServ = diff;
        $("#spnLenService").text(diff);
    }
}

function calculateServiceYear() {
    var strtDayArr = $("#txtAppntmntDate").val();
    var endDayArr = $("#txtRelievingDate").val();
    var totalDays = 0;
    if (strtDayArr != "" && endDayArr != "") {
        frmDT = $("#txtAppntmntDate").val().split('/');
        toDT = $("#txtRelievingDate").val().split('/');
        var newFrmDt = new Date(frmDT[2], frmDT[1] - 1, frmDT[0]);
        var newToDt = new Date(toDT[2], toDT[1] - 1, toDT[0]);
        var timeDiff = Math.abs(newToDt.getTime() - newFrmDt.getTime());
        var dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
        var yrDiff = parseInt(dayDiff / 365.26);
        var totalDays = Math.floor((newToDt - newFrmDt) / (1000 * 60 * 60 * 24));
    }
    $("#hdnCountServiceYear").val(totalDays);
}
function calculateServiceYearEX() {
    var strtDayArr = $("#txtSerStartDate").val();
    var endDayArr = $("#txtServEndDate").val();
    var totalDays = 0;
    if (strtDayArr != "" && endDayArr != "") {
        frmDT = $("#txtSerStartDate").val().split('/');
        toDT = $("#txtServEndDate").val().split('/');
        var newFrmDt = new Date(frmDT[2], frmDT[1] - 1, frmDT[0]);
        var newToDt = new Date(toDT[2], toDT[1] - 1, toDT[0]);
        var timeDiff = Math.abs(newToDt.getTime() - newFrmDt.getTime());
        var dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
        var yrDiff = parseInt(dayDiff / 365.26);
        var totalDays = Math.floor((newToDt - newFrmDt) / (1000 * 60 * 60 * 24));
    }
    $("#hdnCountAiimsServiceYearEX").val(totalDays);
}

function CalculateTotalDays(stratDate, endDate) {
    var totalDays = 0;
    var strtDayArr = stratDate;
    var endDayArr = endDate;
    if (strtDayArr != "" && endDayArr != "") {
        frmDT = strtDayArr.split('/');
        toDT = endDayArr.split('/');
        var newFrmDt = new Date(frmDT[2], frmDT[1] - 1, frmDT[0]);
        var newToDt = new Date(toDT[2], toDT[1] - 1, toDT[0]);
        var timeDiff = Math.abs(newToDt.getTime() - newFrmDt.getTime());
        var dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
        var yrDiff = parseInt(dayDiff / 365.26);
        var totalDays = Math.floor((newToDt - newFrmDt) / (1000 * 60 * 60 * 24));
    }
    return totalDays;
}

function GetValidateOPHPercentage() {
    var ophPercentage = $("#ddlOPHPercent").val();
    if (ophPercentage != "") {
        if (ophPercentage < 40) {
            jAlert('<b>Note:</b> <span class="contentRed">You are not eligible to apply under Disability as minimum Disability % for eligibility is 40 %.  </span>', 'Message !!');
            $("#ddlOPHPercent")[0].selectedIndex = 0;
        }
    }
}

function funGetPHPercent() {
    var PercentHtml = '';
    PercentHtml += "<option value='0'>-Select-</option>";
    for (var x = 40; x <= 100; x++) {
        PercentHtml += "<option value=" + x + ">" + x + "</option>";
    }
    $("#ddlOPHPercent").html(PercentHtml);
}

function GetValidateDOB() {
    // var minDate = new Date('12/7/2006'); // mm/dd/yyyy
    // var actDob = "";
    // if ($("#txtDOB").val() != "") {
    //     var dobStr = $("#txtDOB").val().split("/");
    //     actDob = new Date(dobStr[1] + '/' + dobStr[0] + '/' + dobStr[2]);

    //     if (actDob >= minDate) {
    //         jAlert('<b>Note:</b> <span class="contentRed">You are not eligible for this Examination as per your Date of Birth.</span>', 'Message !!');
    //         $("#txtDOB").val('');
    //     }
    // }
}

function BindPWBDType(controlname, sId, selId) {
    // overlay_disable("dvWrapper", "divDisabled");
    var items = "<option value='0'>[Choose One]</option>";
    $.post(appPath + "/" + currentControllerName + "/GetAllPWBDType", { pwbdId: sId }, function (result) {
        if (result && result != "error") {
            $.each(result, function (i, v) {
                var selected = (selId && selId != "" && (selId == v.PWBDSubId)) ? "selected='selected'" : "";
                items += "<option value='" + v.PWBDSubId + "' " + selected + ">" + v.PWBDSubType + "</option>";
            });
            $(controlname).empty().append(items);
        }
        else
            $(controlname).empty().append(items);

        overlay_enabled("divDisabled");
    });
    overlay_enabled("divDisabled");
}


function fnDOB() {

    var dobStr = $("#txtDOB").val().split('/');
    var cat = $('input:radio[name=rbtnlstCategory]:checked').val();
    var PWD = $('input:radio[name=rbtnlstPWD]:checked').val();
    var ExSer = $('input:radio[name=rbtnlstExSerMan]:checked').val();
    var GovEmp = $('input:radio[name=rbtnlstGovEmp]:checked').val();
    var AiimsEmp = $('input:radio[name=rbtnlstAIIMSEmp]:checked').val();
    var ArmedForces = $('input:radio[name=rbtnlstSerInArmedForces]:checked').val();
    var DefenceDisabled = $('input:radio[name=rbtnlstDefenceDisabled]:checked').val();
    var Domicile = $("#ddlDomicile").val();
    var genderId = $('input:radio[name=rbtnlstGender]:checked').val();
    var maritalStatusId = $("#ddlMaritalStatus").val();
    var GovEmpExDay = $("#hdnCountServiceYear").val();
    var AiimsEmpExDay = $("#hdnCountAiimsServiceYear").val();
    var ExSeviceDay = $("#hdnCountAiimsServiceYearEX").val();
    var OPHType = $("#ddlPWD").val();
    var PWBDSubCategoryId = $("#ddlPWDType").val();
    var minDTExServ = parseInt((glbDayDiffServ / 365.26) + 3);
    var timeDiff, daysDiff, yrDiff;
    var serviceYear = 0;


    var maxagePHD = '';
    var maxageAiims = '';
    var maxageExServiseMan = '';
    var maxageGovEmp = '';
    var born = '';



    var dobStr = $("#txtDOB").val().split('/');
    if ($("#txtDOB").val() != "") {

        born = new Date(dobStr[2], dobStr[1] * 1 - 1, dobStr[0]);

    }

    if ($('#hdnPostValue').val() == "0" || $('#hdnPostValue').val() == "" || $('#hdnPostValue').val() == null) {
        $("#txtDOB").val('');
        debugger;
        jAlert('Select Post Applying !!', 'Message');
        return false;
    }
    else if (cat != "1" && cat != "2" && cat != "3" && cat != "4" && cat != "67") {
        $("#txtDOB").val('');
        jAlert('Select Applicant Category !!', 'Message');
        return false;
    }
    else if (isVisible($("#dvMaritalStatus")) && $("#ddlMaritalStatus")[0].selectedIndex == 0) {
        $("#txtDOB").val('');
        jAlert('Enter Marital Status !!', 'Message');
        return false;
    }
    else if (PWD != "1" && PWD != "0") {
        $("#txtDOB").val('');
        jAlert('Select Persons with Disability !!', 'Message');
        return false;
    }
    else if (Domicile == "0" || Domicile == "") {
        $("#txtDOB").val('');
        jAlert('Select State of Domicile !!', 'Message');
        return false;
    }
    else if (isVisible($("#dvGovernmentEmployee")) && (GovEmp != "0" && GovEmp != "1")) {
        $("#txtDOB").val('');
        jAlert('Select option, Are you a Central Government Employee (Excluding AIIMS) !!', 'Message');
        return false;
    }
    else if (isVisible($("#divGovEmpDetails")) && $("#txtAppntmntDate").val() == "") {
        $("#txtDOB").val('');
        jAlert('Enter Date Of Appointment !!', 'Message');
        return false;
    }
    else if (isVisible($("#divGovEmpDetails")) && $("#txtRelievingDate").val() == "") {
        $("#txtDOB").val('');
        jAlert('Enter Date Of Relieving !!', 'Message');
        return false;
    }
    else if (isVisible($("#divAIIMSEmployee")) && (AiimsEmp != "0" && AiimsEmp != "1")) {
        $("#txtDOB").val('');
        jAlert('Select option, AIIMS Employee !!', 'Message');
        return false;
    }
    else if (isVisible($("#divAIIMSEmployeeDetails")) && $("#txtJoinDate").val() == "") {
        $("#txtDOB").val('');
        jAlert('Enter Joining Date !!', 'Message');
        return false;
    }
    else if (isVisible($("#divAIIMSEmployeeDetails")) && $("#ddlAIIMSJobStatus")[0].selectedIndex == 0) {
        $("#txtDOB").val('');
        jAlert('Select Type of Job Status', 'Message');
        return false;
    }
    else if (ExSer != "1" && ExSer != "0") {
        $("#txtDOB").val('');
        jAlert('Select option, Ex-Service men !!', 'Message');
        return false;
    }
    else if (isVisible($("#divExSerManDetails")) && $("#txtServiceIn").val() == "") {
        $("#txtDOB").val('');
        jAlert('Enter Service Provided In !!', 'Message');
        return false;
    }
    else if (isVisible($("#divExSerManDetails")) && $("#txtSerStartDate").val() == "") {
        $("#txtDOB").val('');
        jAlert('Enter Service Start Date !!', 'Message');
        return false;
    }
    else if (isVisible($("#divExSerManDetails")) && $("#txtServEndDate").val() == "") {
        $("#txtDOB").val('');
        jAlert('Enter Service End Date !!', 'Message');
        return false;
    }
    else if (isVisible($("#divDefencePersonnel")) && (DefenceDisabled != "1" && DefenceDisabled != "0")) {
        $("#txtDOB").val('');
        jAlert('Select option, Defence Personnel disabled !!', 'Message');
        return false;
    }
    else if (isVisible($("#divDefencePersonnel")) && (ArmedForces != "1" && ArmedForces != "0")) {
        $("#txtDOB").val('');
        jAlert('Select option, Service Clerks in Armed Forces !!', 'Message');
        return false;
    }

    else if (cat == '3' && $("#hdnobc").val() > 0) {

        var CategoryEdit = $('#hdnUpperAgeUr').val().split('/');
        CategoryEdit = new Date(CategoryEdit[2] - 3, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);


        if (ArmedForces == '1') {
            CategoryEdit = ('02/12/1973').split('/');
            CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);

        }
        else if (genderId == '27' && (maritalStatusId == 34 || maritalStatusId == 35 || maritalStatusId == 36)) {
            CategoryEdit = ('02/12/1983').split('/');
            CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        else if (PWD == '1') {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 10, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        else if ($('#hdnEX_ServiceMan').val() > 0 && ExSer == '1') {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 10, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        //else if ($('#hdnAiimsRes').val() > 0 && AiimsEmp == '1' && $('#ddlAIIMSJobStatus').val() == 'regular') {
        //    CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
        //    CategoryEdit = new Date(CategoryEdit[2] - $('#hdnAiimsRes').val(), CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        //    //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        //}
        else if (DefenceDisabled == '1' || DefenceDisabled == 1 || Domicile == 15) {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }

        else if (GovEmp == 1 && GovEmpExDay > 1095) {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        else {
            var CategoryEdit1 = CategoryEdit.split('/');
        }
        if (PWD == '1' && $("#hdnobc").val() == '1' && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }

        //else if (AiimsEmp == '1' && $("#hdnAiimsRes").val() > 0 && AiimsEmpExDay > 1095 && born < maxageAiims) {
        //else if (AiimsEmp == '1' && $("#hdnAiimsRes").val() > 0 && born < CategoryEdit) {
        //    jAlert('<b>Note: <b> You are not eligible as per your age, your age should be More then <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
        //    $("#txtDOB").focus();
        //    $("#txtDOB").val('');
        //}
        else if (ExSer == '1' && $("#hdnEX_ServiceMan").val() > 0 && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if ((DefenceDisabled == '1' || Domicile == 15) && born < CategoryEdit) {
            jAlert('<b>Note: <b>  As per age criteria your date of birth should be on or after <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if (genderId == '27' && (maritalStatusId == 34 || maritalStatusId == 35 || maritalStatusId == 36) && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if (ArmedForces == '1' && born < CategoryEdit) {
            jAlert('<b>Note: <b>  As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if (born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }


    }
    else if (cat == '1' && $("#hdnSC").val() > 0) {

        var CategoryEdit = $('#hdnUpperAgeUr').val().split('/');
        CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);




        if (ArmedForces == '1') {
            CategoryEdit = ('02/12/1973').split('/');
            CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);

        }
        else if (genderId == '27' && (maritalStatusId == 34 || maritalStatusId == 35 || maritalStatusId == 36)) {
            CategoryEdit = ('02/12/1983').split('/');
            CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        else if (PWD == '1') {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 10, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        //if ($('#hdnAiimsRes').val() > 0 && AiimsEmp == '1' && $('#ddlAIIMSJobStatus').val() == 'regular') {
        //    CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
        //    CategoryEdit = new Date(CategoryEdit[2] - $('#hdnAiimsRes').val(), CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        //    //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        //}
        if ($('#hdnEX_ServiceMan').val() > 0 && ExSer == '1') {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 10, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }

        else if (DefenceDisabled == '1' || DefenceDisabled == 1 || Domicile == 15) {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        if (GovEmp == 1 && GovEmpExDay > 1095) {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        if (PWD == '1' && $("#hdnobc").val() == '1' && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }

        //else if (AiimsEmp == '1' && $("#hdnAiimsRes").val() > 0 && AiimsEmpExDay > 1095 && born < maxageAiims) {
        //else if (AiimsEmp == '1' && $("#hdnAiimsRes").val() > 0 && born < CategoryEdit) {
        //    jAlert('<b>Note: <b> You are not eligible as per your age, your age should be More then <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
        //    $("#txtDOB").focus();
        //    $("#txtDOB").val('');
        //}
        else if (ExSer == '1' && $("#hdnEX_ServiceMan").val() > 0 && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if ((DefenceDisabled == '1' || Domicile == 15) && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if (genderId == '27' && (maritalStatusId == 34 || maritalStatusId == 35 || maritalStatusId == 36) && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if (ArmedForces == '1' && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if (born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }


    }
    else if (cat == '2' && $("#hdnST").val() > 0) {

        var CategoryEdit = $('#hdnUpperAgeUr').val().split('/');
        CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);





        if (ArmedForces == '1') {
            CategoryEdit = ('02/12/1973').split('/');
            CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);

        }
        else if (genderId == '27' && (maritalStatusId == 34 || maritalStatusId == 35 || maritalStatusId == 36)) {
            CategoryEdit = ('02/12/1973').split('/');
            CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        else if (PWD == '1') {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 10, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        //else if ($('#hdnAiimsRes').val() > 0 && AiimsEmp == '1' && $('#ddlAIIMSJobStatus').val() == 'regular') {
        //    CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
        //    CategoryEdit = new Date(CategoryEdit[2] - $('#hdnAiimsRes').val(), CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        //    //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        //}
        else if ($('#hdnEX_ServiceMan').val() > 0 && ExSer == '1') {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 10, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        else if (DefenceDisabled == '1' || DefenceDisabled == 1 || Domicile == 15) {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }

        if (GovEmp == 1 && GovEmpExDay > 1095) {
            CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
        }
        if (PWD == '1' && $("#hdnobc").val() == '1' && born < CategoryEdit) {
            jAlert('<b>Note: <b>  As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }

        //else if (AiimsEmp == '1' && $("#hdnAiimsRes").val() > 0 && AiimsEmpExDay > 1095 && born < maxageAiims) {
        //else if (AiimsEmp == '1' && $("#hdnAiimsRes").val() > 0 && born < CategoryEdit) {
        //    jAlert('<b>Note: <b> You are not eligible as per your age, your age should be More then <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
        //    $("#txtDOB").focus();
        //    $("#txtDOB").val('');
        //}
        else if (ExSer == '1' && $("#hdnEX_ServiceMan").val() > 0 && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if ((DefenceDisabled == '1' || Domicile == 15) && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if (genderId == '27' && (maritalStatusId == 34 || maritalStatusId == 35 || maritalStatusId == 36) && born < CategoryEdit) {
            jAlert('<b>Note: <b>  As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if (ArmedForces == '1' && born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }
        else if (born < CategoryEdit) {
            jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            $("#txtDOB").focus();
            $("#txtDOB").val('');
        }


    }
    else {
        if ($('#hdnUR').val() > 0) {
            var CategoryEdit = $('#hdnUpperAgeUr').val().split('/');
            CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);




            if (ArmedForces == '1') {
                CategoryEdit = ('02/12/1973').split('/');
                CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);

            }
            else if (genderId == '27' && (maritalStatusId == 34 || maritalStatusId == 35 || maritalStatusId == 36)) {
                CategoryEdit = ('02/12/1983').split('/');
                CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
                //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            }
            else if (PWD == '1') {
                CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
                CategoryEdit = new Date(CategoryEdit[2] - 10, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
                //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            }
            //if ($('#hdnAiimsRes').val() > 0 && AiimsEmp == '1' && $('#ddlAIIMSJobStatus').val() == 'regular') {
            //    CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
            //    CategoryEdit = new Date(CategoryEdit[2] - $('#hdnAiimsRes').val(), CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //    //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            //}
            if ($('#hdnEX_ServiceMan').val() > 0 && ExSer == '1') {
                CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
                CategoryEdit = new Date(CategoryEdit[2] - 10, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
                //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            }
            else if (DefenceDisabled == '1' || DefenceDisabled == 1 || Domicile == 15) {
                CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
                CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
                //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            }
            if (GovEmp == 1 && GovEmpExDay > 1095) {
                CategoryEdit = CategoryEdit.toLocaleDateString('en-GB').split('/');
                CategoryEdit = new Date(CategoryEdit[2] - 5, CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
                //CategoryEdit = new Date(CategoryEdit[2], CategoryEdit[1] * 1 - 1, CategoryEdit[0]);
            }
            if (PWD == '1' && $("#hdnobc").val() == '1' && born < CategoryEdit) {
                jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
                $("#txtDOB").focus();
                $("#txtDOB").val('');
            }

            //else if (AiimsEmp == '1' && $("#hdnAiimsRes").val() > 0 && AiimsEmpExDay > 1095 && born < maxageAiims) {
            //else if (AiimsEmp == '1' && $("#hdnAiimsRes").val() > 0 && born < CategoryEdit) {
            //    jAlert('<b>Note: <b> You are not eligible as per your age, your age should be More then <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
            //    $("#txtDOB").focus();
            //    $("#txtDOB").val('');
            //}
            else if (ExSer == '1' && $("#hdnEX_ServiceMan").val() > 0 && born < CategoryEdit) {
                jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
                $("#txtDOB").focus();
                $("#txtDOB").val('');
            }
            else if ((DefenceDisabled == '1' || Domicile == 15) && born < CategoryEdit) {
                jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
                $("#txtDOB").focus();
                $("#txtDOB").val('');
            }
            else if (genderId == '27' && (maritalStatusId == 34 || maritalStatusId == 35 || maritalStatusId == 36) && born < CategoryEdit) {
                jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
                $("#txtDOB").focus();
                $("#txtDOB").val('');
            }
            else if (ArmedForces == '1' && born < CategoryEdit) {
                jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after<b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
                $("#txtDOB").focus();
                $("#txtDOB").val('');
            }
            else if (born < CategoryEdit) {
                jAlert('<b>Note: <b> As per age criteria your date of birth should be on or after <b>' + CategoryEdit.toLocaleDateString('en-GB') + '</b> !!', '');
                $("#txtDOB").focus();
                $("#txtDOB").val('');
            }
        }
        else {
            // jAlert('<b>Note: <b> You are not eligible as per your age !!', '');
            // $("#txtDOB").focus();
            // $("#txtDOB").val('');
        }


    }

}

function fnBindPWBDCategory(val) {
    //var postId = $("#ddlPost").val();
    //if (postId == "0" || postId == "" || postId == null) {
    //    jAlert('Select Post Applying !!', 'Message');
    //    return false;
    //}
    if (val != "") {
        $("#ddlPWD").html('');
        var listItems = "";
        listItems += "<option value='0'>--Select--</option>";
        //if (postId == "1" && val == "4") {
        //    listItems += "<option value='21'>Locomotor disability including cerebral palsy, leprosy cured, dwarfism, acid attack victims and muscular dystrophy</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else if (postId == "16" && val == "1") {
        //    listItems += "<option value='19'>Blindness and low vision</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else if (postId == "22" && val == "2") {
        //    listItems += "<option value='22'>Autism, intellectual disability, specific learning disability and mental illness</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else if (postId == "24" && val == "4") {
        //    listItems += "<option value='20'>Deaf and hard of hearing</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else if (postId == "25" && val == "4") {
        //    listItems += "<option value='21'>Locomotor disability including cerebral palsy, leprosy cured, dwarfism, acid attack victims and muscular dystrophy</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else if (postId == "38" && val == "4") {
        //    listItems += "<option value='19'>Blindness and low vision</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else if (postId == "42" && val == "3") {
        //    listItems += "<option value='20'>Deaf and hard of hearing</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else if (postId == "42" && val == "2") {
        //    listItems += "<option value='21'>Locomotor disability including cerebral palsy, leprosy cured, dwarfism, acid attack victims and muscular dystrophy</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else if (postId == "42" && val == "3") {
        //    listItems += "<option value='20'>Deaf and hard of hearing</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else if (postId == "42" && val == "4") {
        //    listItems += "<option value='22'>Autism, intellectual disability, specific learning disability and mental illness</option>";
        //    $("#divScribe").show();
        //    $("#divUploadPWBDCertificate").show();
        //}
        //else {
        //    listItems += "<option value='19'>Blindness and low vision</option>";
        //    listItems += "<option value='20'>Deaf and hard of hearing</option>";
        //    listItems += "<option value='21'>Locomotor disability including cerebral palsy, leprosy cured, dwarfism, acid attack victims and muscular dystrophy</option>";
        //    listItems += "<option value='22'>Autism, intellectual disability, specific learning disability and mental illness</option>";
        //    listItems += "<option value='23'>Multiple disabilities from amongst persons under clauses (a) to (d) including deaf- blindness</option>";
        //    $("#divScribe").hide();
        //    $("#divUploadPWBDCertificate").hide();
        //}


        listItems += "<option value='19'>Blindness and low vision</option>";
        listItems += "<option value='20'>Deaf and hard of hearing</option>";
        listItems += "<option value='21'>Locomotor disability including cerebral palsy, leprosy cured, dwarfism, acid attack victims and muscular dystrophy</option>";
        listItems += "<option value='22'>Autism, intellectual disability, specific learning disability and mental illness</option>";
        listItems += "<option value='23'>Multiple disabilities from amongst persons under clauses (a) to (d) including deaf- blindness</option>";
        $("#divScribe").hide();
        $("#divUploadPWBDCertificate").hide();

        $("#ddlPWD").html(listItems);
        var listItems = "";
    }
}

function fnBindPWBDSubCategory(val) {
    var postId = $("#hdnPostValue").val();
    var cat = $('input:radio[name=rbtnlstCategory]:checked').val();
    //if (postId == "0" || postId == "" || postId == null) {
    //    jAlert('Select Post Applying !!', 'Message');
    //    return false;
    //}
    if (val != "") {
        $("#ddlPWDType").html('');
        var listItems = "";
        listItems += "<option value='0'>--Select--</option>";
        //if ((postId == "1") && val == "21") {
        //    listItems += "<option value='7'>OL(One Leg)</option>";
        //}
        //else if ((postId == "16") && (cat == "1") && val == "19") {
        //    listItems += "<option value='1'>LV(Low vision)</option>";
        //}
        //else if ((postId == "22") && (cat == "2") && val == "22") {
        //    listItems += "<option value='21'>SLD(Specific Learning Disability)</option>";
        //}
        //else if ((postId == "24") && (cat == "4") && val == "20") {
        //    listItems += "<option value='2'>HH(Hard of Hearing)</option>";
        //}
        //else if ((postId == "25") && (cat == "4") && val == "21") {
        //    listItems += "<option value='3'>OA(One Arm)</option>";
        //    listItems += "<option value='11'>AAV(Acid Attack Victims)</option>";
        //    listItems += "<option value='10'>Dw(Dwarfism)</option>";
        //    listItems += "<option value='9'>LC(Leprosy Cured Person)</option>";
        //}
        //else if ((postId == "38") && (cat == "4") && val == "19") {
        //    listItems += "<option value='1'>LV(Low vision)</option>";
        //}
        //else if ((postId == "42") && (cat == "3") && val == "20") {
        //    listItems += "<option value='2'>HH(Hard of Hearing)</option>";
        //}
        //else if ((postId == "42") && (cat == "2") && val == "21") {
        //    listItems += "<option value='3'>OA(One Arm)</option>";
        //    listItems += "<option value='7'>OL(One Leg)</option>";
        //    listItems += "<option value='10'>Dw(Dwarfism)</option>";
        //    listItems += "<option value='9'>LC(Leprosy Cured Person)</option>";
        //    listItems += "<option value='11'>AAV(Acid Attack Victims)</option>";
        //}
        //else if ((postId == "42") && (cat == "4") && val == "22") {
        //    listItems += "<option value='12'>ASD(Autism Spectrum Disability)</option>";
        //}
        if (val == "19") {
            listItems += "<option value='1'>LV(Low vision)</option>";
        }
        else if (val == "20") {
            listItems += "<option value='2'>HH(Hard of Hearing)</option>";
        }
        else if (val == "22") {
            listItems += "<option value='12'>ASD(Autism Spectrum Disability)</option>";
            listItems += "<option value='20'>SLD(Specific Learning Disability)</option>";
        }
        else if (val == "23") {
            listItems += "<option value='13'>MI(Mental Illness)</option>";
            listItems += "<option value='14'>MD(Multiple Disabilities)</option>";
        }
        else if (val == "21") {
            listItems += "<option value='11'>AAV(Acid Attack Victims)</option>";
            listItems += "<option value='4'>BA(Both Arms)</option>";
            listItems += "<option value='8'>BL(Both Legs)</option>";
            listItems += "<option value='6'>BLA(Both legs & Arms)</option>";
            listItems += "<option value='19'>CP(Cerebal Palsy)</option>";
            listItems += "<option value='3'>OA(One Arm)</option>";
            listItems += "<option value='5'>OAL(One Arm and One Leg)</option>";
            listItems += "<option value='7'>OL(One Leg)</option>";
            listItems += "<option value='10'>Dw(Dwarfism)</option>";
            listItems += "<option value='9'>LC(Leprosy Cured Person)</option>";
        }
        $("#ddlPWDType").html(listItems);
        var listItems = "";
        $("#div_PWDType").show();
    }
}

function fnBindLCSubCategory(val) {
    var cat = $('input:radio[name=rbtnlstCategory]:checked').val();
    var postId = $("#hdnPostValue").val();
    //if (postId == "0" || postId == "" || postId == null) {
    //    jAlert('Select Post Applying !!', 'Message');
    //    return false;
    //}
    if (val != "") {
        $("#divLCSubCategory").hide();
        $("#ddlLCSubCategory").html('');
        var listItems = "";
        listItems += "<option value='0'>--Select--</option>";
        //if (val == "9" && postId == "16" && (cat == "2" || cat == "3")) {
        //    listItems += "<option value='24'>OL</option>";
        //    $("#divLCSubCategory").show();
        //}
        //else if (val == "9" && postId == "17" && cat == "4") {
        //    listItems += "<option value='51'>BL</option>";
        //    listItems += "<option value='52'>OA</option>";
        //    listItems += "<option value='24'>OL</option>";
        //    $("#divLCSubCategory").show();
        //}
        //else if (val == "9" && postId == "7" && (cat == "3" || cat == "4" || cat == "67")) {
        //    listItems += "<option value='51'>BL</option>";
        //    listItems += "<option value='52'>OA</option>";
        //    listItems += "<option value='24'>OL</option>";
        //    $("#divLCSubCategory").show();
        //}
        //else if (val == "9" && postId == "10" && (cat == "3")) {
        //    listItems += "<option value='51'>BL</option>";
        //    listItems += "<option value='52'>OA</option>";
        //    listItems += "<option value='24'>OL</option>";
        //    $("#divLCSubCategory").show();
        //}
        $("#ddlLCSubCategory").html(listItems);
        var listItems = "";
    }
    else {
        $("#ddlLCSubCategory").html('');
        var listItems = "";
        $("#divLCSubCategory").hide();
    }

}

