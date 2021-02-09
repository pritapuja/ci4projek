$(document).ready(function() {
    // dataprojek();

    $('.tomboltambah').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: ('pages/formtambah'),
            dataType: "json",
            success: function(response) {
                $('.viewmodal').html(response.data).show();

                $('#modaltambah').modal('show');
            },
            
        });
    });
});