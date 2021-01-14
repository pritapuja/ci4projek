$(document).ready(function () {
    $('.btnAddactor').click(function (e) { 
        $('.formActor').append(`
            <div class="form-group row">
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="" placeholder="Enter Actor" name="aktor[]">
                </div>
                <div class="col-sm-1">
                    <button type="button" class="btn btn-danger btnHapusactor">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        `);
    });
});

$(document).on('click', '.btnHapusactor', function(e) {
    
    $(this).closest('div.row').remove();
});