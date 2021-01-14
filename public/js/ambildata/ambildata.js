function dataprojek() {
    $.ajax({
        url: "/pages/ambildata",
        dataType: "json",
        success: function(response) {
            $('.viewdata').html(response.data);
        },
        // error: function(xhr, ajaxOptions, thrownError) {
        //     alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        // }
    });
}