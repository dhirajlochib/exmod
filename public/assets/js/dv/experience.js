var counter = 1;
var CheckExperience = 0;
$(document).ready(function () {
    fnGetExperienceById();

    //fnGetBasicDetails();
    //debugger;
    $(document).on('click', "#btnProceed", function () {
        $("#rbExperience_No").hide();
        var isChecked = $("input[name=rbExperience]:checked").val();
        if (!isChecked && isPannelClosed != "True") {
            go("FeePayment");
        }
        else {
            jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
                if (r == true) {
                    go("DashBoard");
                }
            });
        }
    });

    $(document).on('click', "#btnSaveExit", function () {
        SaveExperience(1);
    });

    $(document).on('click', "#btnSaveProceed", function () {
        SaveExperience(2);
    });

});




//------------For Dynamic Control------
function add() {
    if (validateExperience(0)) {
        counter = maxCounter();
        //debugger
        var dc = '';
        // get application path from url
        var appPath = ''
        dc += '<tr id="trExperience' + counter + '">';
        dc += '<td><input type="text" id="txtOrganisationName' + counter + '" maxlength="200" class="form-control clsExperience" onkeypress="return isAlphaNumeric(event);" /></td>';
        dc += '<td><input type="text" id="txtDesignation' + counter + '" maxlength="200" class="form-control" onkeypress="return isAlphaNumeric(event);" /></td>';
        dc += '<td><input type="text" id="txtStartDate' + counter + '" maxlength="10" class="form-control datepicker" readonly="true"/></td>';
        dc += '<td><input type="text" id="txtEndDate' + counter + '" maxlength="10" class="form-control datepicker" readonly="true"/></td>';
        dc += '<td hidden><input type="text" id="txtIDNO' + counter + '" maxlength="15" class="form-control clsIDNo" onkeypress="return isAlphaNumeric(event);"/></td>';
        dc += '<td  style="width: 45px"><img src=' + appPath + '"/public/asset/img/icon_delete.png" id="aRemove' + counter + '" title="Remove" style="height:25px; width:25px; cursor:pointer;" onclick="fnRemove(this);" class="del-icon"></td></tr>';
        $("#dvExperienceGroup").append(dc);

        var yearRange = "1960:2023";
        //var mindate = new Date(2023, 02, 13);
        var mindate = new Date();
        if (counter > 1) {
            var objEDate = $("#txtEndDate" + (counter - 1)).val();
            var toEndDate1 = objEDate.split('/');
            var newFrmDt = new Date(toEndDate1[2], toEndDate1[1] - 1, toEndDate1[0]).getFullYear();
            var getMonth = new Date(toEndDate1[2], toEndDate1[1] - 1, toEndDate1[0]).getMonth();
            var getdate = new Date(toEndDate1[2], toEndDate1[1] - 1, toEndDate1[0]).getDate();
            //yearRange = newFrmDt + ":2020"
            mindate = new Date(newFrmDt, getMonth, getdate + 1);
        }

        //var dateToday = new Date(2022, 12, 19);
        var dateToday = new Date();
        $(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1960:2023",
            yearRange: yearRange,
            dateFormat: 'dd/mm/yy',
            //maxDate: dateToday,
            minDate: mindate,
            maxDate: new Date(2023, 11, 01),
            defaultDate: new Date(2023, 11, 01)
        });

        counter++;
    }
}

function maxCounter() {
    var arr = new Array();
    $(".clsExperience").each(function (index, obj) {
        arr.push($(obj).attr('id').replace('txtOrganisationName', ''));
    });
    return parseInt(Math.max.apply(Math, arr)) + 1;
}

function fnRemove(obj) {
    var divCount = maxCounter();
    if (divCount > 2) {
        var currObj = $(obj).attr('id');
        if (currObj) {
            var i = currObj.replace('aRemove', '');
            $("#txtOrganisationName" + i).val('');
            $("#txtDesignation" + i).val('');
            $("#txtStartDate" + i).val('');
            $("#txtEndDate" + i).val('');
            $("#trExperience" + i).remove();
        }
    }
    else {
        alert("Atleast one experience details is mendatory.");
    }
}

function fnRemoveAll() {
    $(".clsExperience").each(function (index, obj) {
        var i = $(obj).attr('id').replace('txtOrganisationName', '');
        $("#txtOrganisationName" + i).val('');
        $("#txtDesignation" + i).val('');
        $("#txtStartDate" + i).val('');
        $("#txtEndDate" + i).val('');
        $("#txtIDNO" + i).val('');
        if (i > 1) {
            $("#trExperience" + i).remove();
        }
        counter = 1;
    });
}
//--end--

//--validate--
function validateExperience(type) {
    var errorCount = 0, errorCount1 = 0;
    var alertStr = "";
    var Exp = 0, totalExp = 0, finalExp = 0, isGovEmp = 0, jobStatusId = 0, qualificationExamId = 0, appliedPostId = 0;

    isGovEmp = $("#hdnIsGovEmp").val();
    jobStatusId = parseInt($("#hdnJobStatusId").val());
    qualificationExamId = parseInt($("#hdnQualificationExamId").val());
    appliedPostId = $("#hdnAppliedPostId").val();
    StartDate = $("#hdnStartDate").val();


    var isChecked = $("input[name=rbExperience]:checked").val();
    if (!isChecked) {
        alertStr += "\nPlease select experience";
        errorCount++;
    }

    //if (!isChecked && isGovEmp == true) {
    //    alertStr += "\nPlease select experience";
    //    errorCount++;
    //}

    if (isChecked == "1" && type == 1) {
        $(".clsExperience").each(function (index, obj) {
            var i = $(obj).attr('id').replace('txtOrganisationName', '');
            var objOrgName = $("#txtOrganisationName" + i).val();
            if (objOrgName == "") {
                alertStr += "\nPlease enter organisation name. Row no:" + i;
                errorCount++;
            }

            var objDes = $("#txtDesignation" + i).val();
            if (objDes == "") {
                alertStr += "\nPlease enter designation. Row no:" + i;
                errorCount++;
            }

            var objSDate = $("#txtStartDate" + i).val();
            if (objSDate == "") {
                alertStr += "\nPlease enter start date. Row no:" + i;
                errorCount++;
            }

            var objEDate = $("#txtEndDate" + i).val();
            if (objEDate == "") {
                alertStr += "\nPlease enter end date. Row no:" + i;
                errorCount++;
            }

            if (objSDate != "" && objEDate != "") {

                frmDT = $("#txtStartDate" + i).val().split('/');
                toDT = $("#txtEndDate" + i).val().split('/');

                var newFrmDt = new Date(frmDT[2], frmDT[1] - 1, frmDT[0]);
                var newToDt = new Date(toDT[2], toDT[1] - 1, toDT[0]);
                var timeDiff = Math.abs(newToDt.getTime() - newFrmDt.getTime());
                var dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
                var yrDiff = parseInt(dayDiff / 365.26);
                var totalDays = Math.floor((newToDt - newFrmDt) / (1000 * 60 * 60 * 24));
                totalExp += parseFloat(totalDays);
            }
            var frmStartDate1 = $("#txtStartDate" + i).val().split('/');
            var toEndDate1 = $("#txtEndDate" + i).val().split('/');
            var newFrmDt = new Date(frmStartDate1[2], frmStartDate1[1] - 1, frmStartDate1[0]).getTime();
            var newToDt = new Date(toEndDate1[2], toEndDate1[1] - 1, toEndDate1[0]).getTime();

            var s1 = StartDate.split('/');
            var newS1 = new Date(s1[2], s1[1] - 1, s1[0]).getTime();

            if (newToDt < newFrmDt) {
                ClearDate();
                alertStr += "\n<b>Note :</b> End Date Should Not be Less than Start date";
                errorCount1++;
                $("#lblEx").val('End Date Should Not be Less than Start date');

            }
            else {
                if (newFrmDt < newS1) {
                    ClearDate();
                    alertStr += "\n<b>Note :</b> Start Date Should Not be Less than Qualification Passing date";
                    errorCount1++;
                    $("#lblEx").val('Start Date Should Not be Less than Qualification Passing date');

                }
                if (newToDt < newS1) {
                    ClearDate();
                    alertStr += "\n<b>Note :</b> End Date Should Not be Less than Qualification Passing date";
                    errorCount1++;
                    $("#lblEx").val('End Date Should Not be Less than Qualification Passing date');

                }
            }
        });
    }
    $("#hdnTotalExp").val(totalExp);
    /*  $("#hdnQualificationExamId").val()*/
    ExperienceName = $("#lblEx").val();
    //IsExperience = $("#hdnTotalexperience").val();
    degreeid = $("#hdnQualificationExamId").val();
    if (type == 1) {

        if (TotalDays != 0 && totalExp < TotalDays && CheckExperience > 0) {
            alertStr += "\n<b>Note :</b> You should have experience more then " + TotalDays + " Days.";
            errorCount1++;
        } else { }


    }

    if (errorCount > 0 || errorCount1 > 0) {
        jAlert(alertStr);
        return false;
    }
    else
        return true;

    //return (errorCount > 0) ? false : true;
}

//Get Assigned Values
function GetAssignValues() {
    var arr = new Array(), jsonData = null;
    var rdVal = $("input[name=rbExperience]:checked").val();
    if (rdVal == "1") {
        $(".clsExperience").each(function (index, obj) {
            var i = $(obj).attr('id').replace('txtOrganisationName', '');
            var dic = {};
            dic["OrganisationName"] = $("#txtOrganisationName" + i).val();
            dic["Designation"] = $("#txtDesignation" + i).val();
            dic["StartDate"] = $("#txtStartDate" + i).val();
            dic["EndDate"] = $("#txtEndDate" + i).val();
            dic["IDNo"] = $("#txtIDNO" + i).val();
            arr.push(dic);
        });
    }
    $("#hdnExperienceDetail").val(arr.length > 0 ? JSON.stringify(arr) : null);
}

//--Save--
function SaveExperience(type) {
    if (validateExperience(1)) {
        overlay_disable("dvWrapper", "divDisabled");
        GetAssignValues();
        var isExpVal = $('input[name="rbExperience"]:checked').val();
        var aVal = $("#hdnExperienceDetail").val();

        var IsClosedPostWise = "0";
        var appliedPostId = $("#hdnAppliedPostId").val();
        var isAdmin = $("#hdnIsAdmin").val();

        //if ((appliedPostId == 1 || appliedPostId == 2 || appliedPostId == 20) || isAdmin == "1") {
        //    IsClosedPostWise = "1";
        //}
        //else
        //    IsClosedPostWise = "0";

        if (IsClosedPostWise == "1") {
            jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
                if (r == true) {
                    go("DashBoard");
                }
            });
        }

        // $.post(appPath + "/Experience/Save", { sId: $("#hdnSId").val(), isExperience: isExpVal, experienceDetail: aVal, IsAdmin: $("#hdnIsAdmin").val() }, function (result) {
        //     if (result == "closed") {
        //         jAlert('<span class="contentRed b f18">Registration has been closed.</span>', 'Message', function (r) {
        //             if (r == true) {
        //                 go("DashBoard");
        //             }
        //         });
        //     }
        //     else if (result == "success") {
        //         jAlert('Third step of registration form has been completed.', 'Message', function (r) {
        //             //if (r == true) {
        //             //    go(type == 1 ? "DashBoard" : "FeePayment");
        //             //}
        //             if (r == true && $("#hdnIsAdmin").val() == false) {
        //                 go((type == 1) ? 'Dashboard' : 'FeePayment');
        //             }
        //             else if (r == true && $("#hdnIsAdmin").val() == true) {
        //                 go('AdminDashboard');
        //             }
        //         });
        //     }
        //     else
        //         jAlert("Your action could not be completed due to an exception. Please try again later. Please try again later. Please try again later.", "Message");

        //     overlay_enabled("divDisabled");
        // });
    }
    overlay_enabled("divDisabled");
}

var Id = 0, Name = '', IsExperience = false, ExperienceName = '', TotalDays = 0, QualificationExamId = 0, SecondQualificationExamId = 0, DegreeId = 0, IsWardenExp = false, IsJHTExp = false, IsStoreKeeperGExp = false;


//--Bind data on load--
function fnGetExperienceById() {
    overlay_disable("dvWrapper", "divDisabled");
    var sNId = $("#hdnSId").val() != "0" ? $("#hdnSId").val() : "";
    // $.post(appPath + "/Experience/GetExperienceById", { sId: sNId, adminId: $("#hdnIsAdmin").val() }, function (result) {
    //     if (result.Experience && result.Experience != "noData") {
    //         CheckExperience = 1;
    //         var exp = $.parseJSON(result.Experience)[0];
    //         if (result.QualifyingExamExperience != 'noData') {
    //             qualExp = $.parseJSON(result.QualifyingExamExperience)[0];
    //             if (qualExp != null) {
    //                 Id = qualExp.Id;
    //                 Name = qualExp.Name;
    //                 IsOph = exp.IsOPH;
    //                 ExperienceName = qualExp.ExperienceName;
    //                 TotalDays = (qualExp.TotalDays) * 365;
    //                 $("#lblEx").html(ExperienceName);
    //                 $("#hdnTotalDays").val(TotalDays * 365);
    //                 $("input:radio[name=rbExperience]").prop('disabled', true);

    //                 DegreeId = qualExp.Id;
    //             }
    //         }
    //         else {
    //             $("#lblEx").html("Do You have experience?");
    //         }
    //         fnChangeStatus(exp.SetupCounter);





    //         if (exp.QualificationExamId == 0 || exp.AddressId == 0) {
    //             jAlert('<span class="contentRed b f18">Your qualification & address details are still incomplete, Please complete due steps.</span>', 'Message', function (r) {
    //                 if (r == true) {
    //                     go("Qualification");
    //                 }
    //             });
    //         }
    //         $("#hdnStartDate").val(exp.PassingDate);
    //         $("#hdnIsGovEmp").val(exp.IsGovEmp);
    //         $("#hdnJobStatusId").val(exp.JobStatusId);
    //         $("#hdnQualificationExamId").val(exp.QualificationExamId);
    //         $("#hdnAppliedPostId").val(exp.AppliedPostId);



    //         //if (qualExp.Id != 0 && (qualExp.Id == 70 || qualExp.Id == 10 || qualExp.Id == 1 || qualExp.Id == 2 || qualExp.Id == 3 || qualExp.Id == 4 || qualExp.Id == 5 || qualExp.Id == 116 || qualExp.Id == 37 || qualExp.Id == 63 || qualExp.Id == 110 || qualExp.Id == 39 || qualExp.Id == 48 || qualExp.Id == 32 || qualExp.Id == 65 || qualExp.Id == 30 || qualExp.Id == 58 || qualExp.Id == 68 || qualExp.Id == 62 || qualExp.Id == 26 || qualExp.Id == 25 || qualExp.Id == 11 || qualExp.Id == 12 || qualExp.Id == 13 || qualExp.Id == 6 || qualExp.Id == 117 || qualExp.Id == 118 || qualExp.Id == 7 || qualExp.Id == 8 || qualExp.Id == 9 || qualExp.Id == 73 || qualExp.Id == 75 || qualExp.Id == 89 || qualExp.Id == 100 || qualExp.Id == 92 || qualExp.Id == 96)) {

    //         //    $("#lblEx").html(ExperienceName);
    //         //}
    //         //if (qualExp.Id == 1) {
    //         //    $("#lblEx").html("Do you have 2 years of practical experience in scientific breeding and maintenance and care of laboratory animals.");
    //         //}
    //         //else if (qualExp.Id == 3 || qualExp.Id == 108 || qualExp.Id == 109) {
    //         //    $("#lblEx").html("Do you have 3 years teaching and/or research experience.");
    //         //}
    //         //else if (qualExp.Id == 16) {
    //         //    $("#lblEx").html("Do you have 7 years research or practical experience in Biochemical or clinical Pathology Laboratory or a medical college or teaching hospital.");
    //         //}
    //         //else if (qualExp.Id == 17 || qualExp.Id == 96 || qualExp.Id == 97) {
    //         //    $("#lblEx").html("Do you have at least 10 years experience in the field of editing and producing a scientific journals and Books");
    //         //}
    //         //else if (qualExp.Id == 19) {
    //         //    $("#lblEx").html("Do you have 2 years experience in the line/preferably in a large teaching hospital.");
    //         //}
    //         //else if (qualExp.Id == 23 || qualExp.Id == 24 || qualExp.Id == 25 || qualExp.Id == 26 || qualExp.Id == 27 || qualExp.Id == 28) {
    //         //    $("#lblEx").html("Do you have 3 years experience in handling stores, preferably medical stores in Govt., Public or Private Sector.");
    //         //}
    //         //else if (qualExp.Id == 42) {
    //         //    $("#lblEx").html("Do you have 5 years experience in Blood Bank.");
    //         //}
    //         //else if (qualExp.Id == 43 || qualExp.Id == 45) {
    //         //    $("#lblEx").html("Do you have 1 year experience as physical Training Instructor in a teaching Institution.");
    //         //}
    //         //else if (qualExp.Id == 47) {
    //         //    $("#lblEx").html("Do you have 3 years experience in drug store of a hospital or a well established pharmaceutical concern.");
    //         //}
    //         //else if (qualExp.Id == 61) {
    //         //    $("#lblEx").html("Do you have 3 years of working experience in dealing with Bariatric Surgical patient and related work in a centre which operates at least 50 cases for Bariatric surgery per annum.");
    //         //}
    //         //else if (qualExp.Id == 62) {
    //         //    $("#lblEx").html("Do you have 6 months experience in relevant field.");
    //         //}
    //         //else if (qualExp.Id == 69 || qualExp.Id == 71) {
    //         //    $("#lblEx").html("Do you have 2 years experience in the trade, preferably in prosthetic and orthetic workshop.");
    //         //}
    //         //else if (qualExp.Id == 73) {
    //         //    $("#lblEx").html("Do you have 3 years Experience.");
    //         //}
    //         //else if (qualExp.Id == 84) {
    //         //    $("#lblEx").html("Do you have 2 years experience in Photography preferably in Medical Photography preferably in Medical Photography in a Hospital.");
    //         //}
    //         //else if (qualExp.Id == 103 || qualExp.Id == 104 || qualExp.Id == 105) {
    //         //    $("#lblEx").html("Do you have 1 year experience in a cafeteria with capacity to cater to minimum 200 persons in a Medical-Education/ Institutional facility, after acquiring the educational qualification as mentioned above.");
    //         //}
    //         //else if (qualExp.Id == 88 || qualExp.Id == 89) {
    //         //    $("#lblEx").html("Do you have 1 year relevant experience in a Laboratory attached with a hospital having minimum 100 beds");
    //         //}
    //         //else if (qualExp.Id == 95) {
    //         //    $("#lblEx").html("Do you have 2 years practical experience in repair and maintenance of PABX/PBX Exchange, including telephone lines and instruments.");
    //         //}
    //         //else if (qualExp.Id == 191) {
    //         //    $("#lblEx").html("Five years experience in the following areas : O.T. ,I.C.U.,CSSD,Manifold Room (Work experience shall be considered, if candidate has worked in private or public sector/Hospital of at least 500 beds. (Foot Note)) ");
    //         //}
    //         //else if (qualExp.Id == 192 && exp.IsOPH == true) {
    //         //    $("#lblEx").html("Health Sanitary Inspector Course (1 year duration) from a recognized Institution.(Not less than 2 years of experience in the line in a 500 bedded hospital.)");
    //         //}
    //         //else if (qualExp.Id == 195) {
    //         //    $("#lblEx").html("with 5 Year service (regular or ad- hoc) as Stenographer in Govt. Organization/ Institution");
    //         //}
    //         //else if (qualExp.Id == 196) {
    //         //    $("#lblEx").html("At least 2 years experience in Public Relations and other related areas, preferably in regard to hostels attached to a reputed hospital/ Medical Institution or any other educational institution");
    //         //}
    //         //else if (qualExp.Id == 204) {
    //         //    $("#lblEx").html("5 years service (regular or adhoc) as lower division clerk in Govt. organization / institution.");
    //         //}
    //         //else if (qualExp.Id == 70) {
    //         //    $("#lblEx").html("2 years experience in Photography preferably in Medical Photography preferably in Medical Photography in a Hospital");
    //         //}


    //         ////else if (exp.IsWardenExp == 1) {
    //         ////    $("#lblEx").html("Do you have 2 years experience in Public Relations/ Estate Management/ House keeping / store keeping and other related areas, preferably in regard to hostels attached to a reputed hospital/ Medical Institution or any other educational institution.");
    //         ////}
    //         ////else if (exp.IsJHTExp == 1) {
    //         ////    $("#lblEx").html("Do you have 2 years experience of translation work from Hindi to English and vice version Central/State Govt. Offices, includingGovt. of India Undertaking/Autonomous Bodies.");
    //         ////}
    //         ////else if (exp.IsStoreKeeperGExp == 1) {
    //         ////    $("#lblEx").html("Do you have 2 years experience in Public Relations/ Estate Management/ House keeping / store keeping and other related areas, preferably in regard to hostels attached to a reputed hospital/ Medical Institution or any other educational institution.");
    //         ////}

    //         //IsWardenExp = exp.IsWardenExp;
    //         //IsJHTExp = exp.IsJHTExp;
    //         //IsStoreKeeperGExp = exp.IsStoreKeeperGExp;
    //         //IsExperience = exp.IsExperience;
    //         //IsExperience = qualExp.IsExperience;
    //         //var CheckExperience = (exp.IsExperience || exp.IsWardenExp == true || exp.IsJHTExp == true || exp.IsStoreKeeperGExp == true || qualExp.IsExperience == true) ? "1" : "0";
    //         //if (CheckExperience == "1") {
    //         //    $("#hdnIsExp").val(CheckExperience);
    //         //}


    //         QualificationExamId = exp.QualificationExamId;
    //         SecondQualificationExamId = exp.SecondQualificationExamId;
    //         //$('input:radio[name="rbExperience"]').filter('[value="' + (exp.IsExperience == false ? "0" : "1") + '"]').attr('checked', true);
    //         $('input:radio[name="rbExperience"]').filter('[value="' + (CheckExperience == "0" ? "0" : "1") + '"]').attr('checked', true);
    //         onChangerbExperience();

    //         var exDetails = result.ExperienceDetails && result.ExperienceDetails != "noData" ? $.parseJSON(result.ExperienceDetails) : null;
    //         BindExpDetails(exDetails);

    //         //if (qualExp.Id == 1 || qualExp.Id == 2 || qualExp.Id == 3 || qualExp.Id == 6 || qualExp.Id == 117 || qualExp.Id == 118 || qualExp.Id == 48 || qualExp.Id == 4 || qualExp.Id == 5 || qualExp.Id == 116 || qualExp.Id == 37 || qualExp.Id == 39 || qualExp.Id == 63 || qualExp.Id == 58 || qualExp.Id == 110 || qualExp.Id == 65 || qualExp.Id == 32 || qualExp.Id == 7 || qualExp.Id == 30 || qualExp.Id == 10 || qualExp.Id == 68 || qualExp.Id == 11 || qualExp.Id == 12 || qualExp.Id == 13 || qualExp.Id == 8 || qualExp.Id == 9 || qualExp.Id == 92 || qualExp.Id == 96 || qualExp.Id == 100 || qualExp.Id == 3 || qualExp.Id == 108 || qualExp.Id == 109 || qualExp.Id == 96 || qualExp.Id == 97 || qualExp.Id == 19 || qualExp.Id == 25 || qualExp.Id == 26 || qualExp.Id == 69 || qualExp.Id == 71 || qualExp.Id == 75 || qualExp.Id == 84 || qualExp.Id == 105 || qualExp.Id == 88 || qualExp.Id == 89 || qualExp.Id == 95 || qualExp.Id == 191 || (qualExp.Id == 192 && exp.IsOPH == true) || qualExp.Id == 195 || qualExp.Id == 204 || qualExp.Id == 70) {
    //         //    $("input:radio[name=rbExperience]").prop('disabled', true);
    //         //}
    //         //if (IsWardenExp==1) {
    //         //    $("input:radio[name=rbExperience]").prop('disabled', true);
    //         //}
    //         //else if (IsJHTExp == 1) {
    //         //    $("input:radio[name=rbExperience]").prop('disabled', true);
    //         //}
    //         //else if (IsStoreKeeperGExp == 1) {
    //         //    $("input:radio[name=rbExperience]").prop('disabled', true);
    //         //}
    //         //debugger;
    //         if (isPannelClosed == "True" && exp.IsReOpen != true) {
    //             $("#btnSaveExit,#btnSaveProceed").hide(); $("#btnProceed").show();
    //         }
    //         else {
    //             $("#btnSaveExit,#btnSaveProceed").show(); $("#btnProceed").hide();
    //         }

    //         //if (exp.IsPaid == "1" || exp.IsPaid == "true") {
    //         //    DisabledExpDetails(exDetails);
    //         //    $("#aAdd").hide();
    //         //}
    //     }
    //     else if (result.Experience && result.Experience == "noData") {
    //         jAlert("No record found!", "Message");
    //     }
    //     else
    //         jAlert("Your action could not be completed due to an exception. Please try again later. Please try again later. Please try again later.", "Message");

    //     overlay_enabled("divDisabled");
    // });

    overlay_enabled("divDisabled");
}

function DisabledExpDetails(expDet) {
    if (expDet != null) {
        var dLen = expDet.length;
        $.each(expDet, function (i, v) {
            counter = i + 1;
            $('#txtOrganisationName' + counter).prop('disabled', true);
            $('#txtDesignation' + counter).prop('disabled', true);
            $('#txtStartDate' + counter).prop('disabled', true);
            $('#txtEndDate' + counter).prop('disabled', true);
            $('#aRemove' + counter).prop('disabled', true);
        });
    }
}

function BindExpDetails(expDet) {
    if (expDet != null) {
        var dLen = expDet.length;
        $.each(expDet, function (i, v) {
            counter = i + 1;
            $("#txtOrganisationName" + counter).val(v.OrganisationName);
            $("#txtDesignation" + counter).val(v.Designation);
            $("#txtStartDate" + counter).val(v.StartDate);
            $("#txtEndDate" + counter).val(v.EndDate);
            $("#txtIDNO" + counter).val(v.IDNo);
            if (counter < dLen)
                add();
        });
    }
}
//---end--

function onChangerbExperience() {
    var isExpVal = $('input[name="rbExperience"]:checked').val();
    if (isExpVal == "0") {
        fnRemoveAll();
        $("#dvExperience").hide();
    }
    else
        $("#dvExperience").show();
}

function ClearDate() {
    $(".clsExperience").each(function (index, obj) {
        var i = $(obj).attr('id').replace('txtOrganisationName', '');
        $("#txtStartDate" + i).val('');
        $("#txtEndDate" + i).val('');
    });
}