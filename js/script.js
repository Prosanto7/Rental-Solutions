function populate(url, type, id) {
    $.ajax({
        url: url,
        type: type,
        success:function(data) {
            $(id).html(data);
        }
    });
}