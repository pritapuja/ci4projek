$(document).ready(function() {
    $('.formsimpandfs').submit(function(e) {
        // e.preventDefault();
        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function() {
                $('.btnsimpandfs').attr('disable', 'disabled');
                $('.btnsimpandfs').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function() {
                $('.btnsimpandfs').removeAttr('disable');
                $('.btnsimpandfs').html('Save');
            },
            success: function(response) {
                if (response.sukses) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Succesful',
                        html: `${response.sukses}`,
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = ("/pages");
                        }
                    })
                }
            }
            
        });
        return false;
    });

});