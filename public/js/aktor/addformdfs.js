$(document).ready(function () {
    $('.btnAddformdfs').click(function (e) { 
        $('.formAddflow').append(`
        <hr class="mt-3" color="blue">
        <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Case</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" placeholder="Enter Case" name="usecase[]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Stages</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" placeholder="Enter Stages" name="tahapan[]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Base URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" placeholder="Enter Base URL" name="base_url[]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Pattern</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" placeholder="Enter Pattern" name="pattern[]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Type</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" placeholder="Enter Type" name="type[]">
                                    </div>
                                </div>
                                <div class="formAddflow1">
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">request param</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="" placeholder="request param" name="request_param[]">
                                        </div>
                                        <div class="col-sm-2">
                                            <select name="tipe1[]" class="form-control">
                                                <option value="">-Choose-</option>
                                                <option value="file">FILE</option>
                                                <option value="int">INT</option>
                                                <option value="text">TEXT</option>
                                                <option value="object">{object}</option>
                                                <option value="success">Success|Error</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-primary btnAddflow1">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="formAddflow2">
                                    <div class="form-group row ">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">reqest body</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="" placeholder="request body" name="request_body[]">
                                        </div>
                                        <div class="col-sm-2">
                                            <select name="tipe2[]" class="form-control">
                                                <option value="">-Choose-</option>
                                                <option value="file">FILE</option>
                                                <option value="int">INT</option>
                                                <option value="text">TEXT</option>
                                                <option value="object">{object}</option>
                                                <option value="success">Success|Error</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-primary btnAddflow2">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="formAddflow3">
                                    <div class="form-group row ">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Header</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="" placeholder="Enter Header" name="header[]">
                                        </div>
                                        <div class="col-sm-2">
                                            <select name="tipe3[]" class="form-control">
                                                <option value="">-Choose-</option>
                                                <option value="file">FILE</option>
                                                <option value="int">INT</option>
                                                <option value="text">TEXT</option>
                                                <option value="object">{object}</option>
                                                <option value="success">Success|Error</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-primary btnAddflow3">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="formAddflow4">
                                    <div class="form-group row ">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">res</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="" placeholder="Enter res" name="res[]">
                                        </div>
                                        <div class="col-sm-2">
                                            <select name="tipe4[]" class="form-control">
                                                <option value="">-Choose-</option>
                                                <option value="file">FILE</option>
                                                <option value="int">INT</option>
                                                <option value="text">TEXT</option>
                                                <option value="object">{object}</option>
                                                <option value="success">Success|Error</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-primary btnAddflow4">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="formAddflow5">
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Data Object</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="" placeholder="Enter Data Object" name="data_object[]">
                                        </div>
                                        <div class="col-sm-2">
                                            <select name="tipe5[]" class="form-control">
                                                <option value="">-Choose-</option>
                                                <option value="file">FILE</option>
                                                <option value="int">INT</option>
                                                <option value="text">TEXT</option>
                                                <option value="object">{object}</option>
                                                <option value="success">Success|Error</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-primary btnAddflow5">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Function Query</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" placeholder="Enter Function Query" name="function_query[]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Base Query Query</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" placeholder="Enter Base Query" name="base_query[]">
                                    </div>
                                </div>
            
        `);
    });
});

