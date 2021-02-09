<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

            <h1 class="h3 mb-4 text-gray-800">Project Details</h1>
            <div class="accordion" id="accordionExample">
                <form action="/pages/savedfs" class="formsimpandfs">
                    <?= csrf_field(); ?>
                    <?php foreach ($aktor as $a) :
                    ?>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">

                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?= $a['aktor']; ?>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body formAddflow">

                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Case</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="usecase[]" placeholder="Enter Case" name="usecase[]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Stages</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="tahapan[]" placeholder="Enter Stages" name="tahapan[]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Base URL</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="base_url[]" placeholder="Enter Base URL" name="base_url[]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Pattern</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="pattern[]" placeholder="Enter Pattern" name="pattern[]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Type</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="type[]" placeholder="Enter Type" name="type[]">
                                        </div>
                                    </div>
                                    <div class="formAddflow1">
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">request param</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="request_param[]" placeholder="request param" name="request_param[]">
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
                                                <input type="text" class="form-control" id="request_body[]" placeholder="request body" name="request_body[]">
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
                                                <input type="text" class="form-control" id="header[]" placeholder="Enter Header" name="header[]">
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
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">res</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="res[]" placeholder="Enter res" name="res[]">
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
                                                <input type="text" class="form-control" id="data_object[]" placeholder="Enter Data Object" name="data_object[]">
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
                                            <input type="text" class="form-control" id="function_query[]" placeholder="Enter Function Query" name="function_query[]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Base Query Query</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="base_query[]" placeholder="Enter Base Query" name="base_query[]">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary my-3 mx-3 float-right btnAddformdfs">
                                    Add <i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <button type="submit" class="btn btn-primary mt-3 float-right btnsimpandfs">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>