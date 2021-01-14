$(document).ready(function () {
    $('.btnAddflow2').click(function (e) { 
        $('.formAddflow2').append(`
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label "></label>
                <div class="col-sm-7 ">
                    <input type="text" class="form-control" id="" placeholder="request body" name="request_body[]">
                </div>
                <div class="col-sm-2 ">
                    <select name="tipe2[]" class="form-control">
                        <option value="">-Choose-</option>
                        <option value="file">FILE</option>
                        <option value="int">INT</option>
                        <option value="text">TEXT</option>
                        <option value="object">{object}</option>
                        <option value="success">Success|Error</option>
                    </select>
                </div>
                <div class="col-sm-1 ">
                    <button type="button" class="btn btn-danger btnHapusflow2">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        `);
    });
});

$(document).on('click', '.btnHapusflow2', function(e) {
    
    $(this).closest('div.row').remove();
});