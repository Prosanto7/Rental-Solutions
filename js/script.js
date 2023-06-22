function populate(url, type, id) {
    $.ajax({
        url: url,
        type: type,
        success:function(data) {
            $(id).html(data);
        }
    });
}

function deleteRow(delete_url, populate_url, type, htmlID) {
    $(document).on("click", "#delete", function() {
        var id = $(this).data("id");
        
        $.ajax({
            url: delete_url,
            type: type,
            data:{id: id},
            success:function(data) {
                populate(populate_url, type, htmlID);

                if (data == 1) {
                    showAlertMessage("Success", "Data deleted successfully...");
                } else {
                    showAlertMessage("Error", "Data could not be deleted.");
                }
            }
        });
    })
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