function populate(url, type, id) {
    $.ajax({
        url: url,
        type: type,
        success:function(data) {
            $(id).html(data);
        }
    });
}

function showAlertMessage(alertType, message) {
    if (alertType == "Error") {
        $("#alertDiv").addClass("bg-danger");
        $("#alertDiv").removeClass("bg-success");
    } else {
        $("#alertDiv").addClass("bg-success");
        $("#alertDiv").removeClass("bg-danger");
    }
    $("#alertMessage").html("<strong>" + alertType + "!</strong> " + message);
    $("#alertDiv").show();
    window.scrollTo({top: 0, behavior: 'smooth'});
    setTimeout(function() {
        $('#alertDiv').fadeOut('slow');
    }, 2000);
}