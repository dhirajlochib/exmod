//$(document).ready(function () {
//     // group B (Programmer)
//    $("#ddlPost").change(function () {
//        if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 16) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", false);
//            $("#rbtnlstCategory_ST1").prop("disabled", true);
//            $("#rbtnlstCategory_OPH1").prop("disabled", true);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", false);

//            $("#rbtnlstCategory_SCN").prop("disabled", false);
//            $("#rbtnlstCategory_ST").prop("disabled", true);
//            $("#rbtnlstCategory_OPH").prop("disabled", true);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", false);
//        } else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 17) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", false);
//            $("#rbtnlstCategory_ST1").prop("disabled", false);
//            $("#rbtnlstCategory_OPH1").prop("disabled", false);
//            $("#rbtnlstCategory_Gen1").prop("disabled", true);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", false);
//            $("#rbtnlstCategory_ST").prop("disabled", false);
//            $("#rbtnlstCategory_OPH").prop("disabled", false);
//            $("#rbtnlstCategory_Gen").prop("disabled", true);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 20) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", true);
//            $("#rbtnlstCategory_ST1").prop("disabled", false);
//            $("#rbtnlstCategory_OPH1").prop("disabled", false);
//            $("#rbtnlstCategory_Gen1").prop("disabled", true);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", true);
//            $("#rbtnlstCategory_ST").prop("disabled", false);
//            $("#rbtnlstCategory_OPH").prop("disabled", false);
//            $("#rbtnlstCategory_Gen").prop("disabled", true);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 22) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", false);
//            $("#rbtnlstCategory_ST1").prop("disabled", false);
//            $("#rbtnlstCategory_OPH1").prop("disabled", true);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", false);
//            $("#rbtnlstCategory_ST").prop("disabled", false);
//            $("#rbtnlstCategory_OPH").prop("disabled", true);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 24) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", true);
//            $("#rbtnlstCategory_ST1").prop("disabled", false);
//            $("#rbtnlstCategory_OPH1").prop("disabled", false);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", true);
//            $("#rbtnlstCategory_ST").prop("disabled", false);
//            $("#rbtnlstCategory_OPH").prop("disabled", false);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 27) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", false);
//            $("#rbtnlstCategory_ST1").prop("disabled", false);
//            $("#rbtnlstCategory_OPH1").prop("disabled", false);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", false);
//            $("#rbtnlstCategory_ST").prop("disabled", false);
//            $("#rbtnlstCategory_OPH").prop("disabled", false);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }

//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 28) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", false);
//            $("#rbtnlstCategory_ST1").prop("disabled", true);
//            $("#rbtnlstCategory_OPH1").prop("disabled", true);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", false);
//            $("#rbtnlstCategory_ST").prop("disabled", true);
//            $("#rbtnlstCategory_OPH").prop("disabled", true);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 29) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", true);
//            $("#rbtnlstCategory_ST1").prop("disabled", false);
//            $("#rbtnlstCategory_OPH1").prop("disabled", true);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", true);
//            $("#rbtnlstCategory_ST").prop("disabled", false);
//            $("#rbtnlstCategory_OPH").prop("disabled", true);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 30) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", false);
//            $("#rbtnlstCategory_ST1").prop("disabled", false);
//            $("#rbtnlstCategory_OPH1").prop("disabled", false);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", false);
//            $("#rbtnlstCategory_ST").prop("disabled", false);
//            $("#rbtnlstCategory_OPH").prop("disabled", false);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 51) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", true);
//            $("#rbtnlstCategory_ST1").prop("disabled", true);
//            $("#rbtnlstCategory_OPH1").prop("disabled", false);
//            $("#rbtnlstCategory_Gen1").prop("disabled", true);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", true);
//            $("#rbtnlstCategory_ST").prop("disabled", true);
//            $("#rbtnlstCategory_OPH").prop("disabled", false);
//            $("#rbtnlstCategory_Gen").prop("disabled", true);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 52) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", true);
//            $("#rbtnlstCategory_ST1").prop("disabled", true);
//            $("#rbtnlstCategory_OPH1").prop("disabled", false);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", true);
//            $("#rbtnlstCategory_ST").prop("disabled", true);
//            $("#rbtnlstCategory_OPH").prop("disabled", false);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 53) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", false);
//            $("#rbtnlstCategory_ST1").prop("disabled", true);
//            $("#rbtnlstCategory_OPH1").prop("disabled", false);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", true);

//            $("#rbtnlstCategory_SCN").prop("disabled", false);
//            $("#rbtnlstCategory_ST").prop("disabled", true);
//            $("#rbtnlstCategory_OPH").prop("disabled", false);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", true);
//        }
//        else if ($("#ddlGroup").val() == 38 && $("#ddlPost").val() == 54) {

//            $("#rbtnlstCategory_SCN1").prop("disabled", true);
//            $("#rbtnlstCategory_ST1").prop("disabled", true);
//            $("#rbtnlstCategory_OPH1").prop("disabled", true);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", false);

//            $("#rbtnlstCategory_SCN").prop("disabled", true);
//            $("#rbtnlstCategory_ST").prop("disabled", true);
//            $("#rbtnlstCategory_OPH").prop("disabled", true);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", false);
//        }

//        else {
//            $("#rbtnlstCategory_SCN1").prop("disabled", false);
//            $("#rbtnlstCategory_ST1").prop("disabled", false);
//            $("#rbtnlstCategory_OPH1").prop("disabled", false);
//            $("#rbtnlstCategory_Gen1").prop("disabled", false);
//            $("#rbtnlstCategory_EWS1").prop("disabled", false);

//            $("#rbtnlstCategory_SCN").prop("disabled", false);
//            $("#rbtnlstCategory_ST").prop("disabled", false);
//            $("#rbtnlstCategory_OPH").prop("disabled", false);
//            $("#rbtnlstCategory_Gen").prop("disabled", false);
//            $("#rbtnlstCategory_EWS").prop("disabled", false);
//        }

//    });
    
//});

