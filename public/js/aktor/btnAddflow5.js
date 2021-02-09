$(document).ready(function () {
    $('.btnAddflow5').click(function (e) { 
        $('.formAddflow5').append(`
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label "></label>
                <div class="col-sm-7 ">
                    <input type="text" class="form-control" id="" placeholder="Enter Data Object" name="res[]">
                </div>
                <div class="col-sm-2 ">
                    <select name="tipe5[]" class="form-control">
                        <option value="">-Choose-</option>
                        <option value="file">FILE</option>
                        <option value="int">INT</option>
                        <option value="text">TEXT</option>
                        <option value="object">{object}</option>
                        <option value="success">Success|Error</option>
                    </select>
                </div>
                <div class="col-sm-1 ">
                    <button type="button" class="btn btn-danger btnHapusflow5">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        `);
    });
});

$(document).on('click', '.btnHapusflow5', function(e) {
    
    $(this).closest('div.row').remove();
});