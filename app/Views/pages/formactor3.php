<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

            <h1 class="h3 mb-4 text-gray-800">Project Details</h1>
            <div class="accordion" id="accordionExample">
                <form action="/pages/savedfs" class="formsimpandfs" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">

                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Admin
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
                            </div>
                            <button type="button" class="btn btn-primary my-3 mx-3 float-right btnAddformdfs">
                                Add <i class="fas fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 float-right btnsimpandfs">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>