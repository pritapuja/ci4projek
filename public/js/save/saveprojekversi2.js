$(document).ready(function() {
    $('.formprojek').submit(function(e) {
        // e.preventDefault();
        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function() {
                $('.btnsimpan').attr('disable', 'disabled');
                $('.btnsimpan').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function() {
                $('.btnsimpan').removeAttr('disable');
                $('.btnsimpan').html('Save');
            },
            success: function(response) {
                if (response.sukses) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Succesful',
                        html: `${response.sukses}`,
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = ("/pages/formactor");
                        }
                    })
                }
            }
            
        });
        return false;
    });
});