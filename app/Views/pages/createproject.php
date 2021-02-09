<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800">Create Project</h1>

            <div class="accordion" id="accordionExample">
                <form action="/pages/save" class="formprojek" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Project Name
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" placeholder="Enter Name" name="nama">
                                        <div class="invalid-feedback errorNama">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Enter Description" name="deskripsi"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Actor Name
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body formActor">
                                <div class="form-group row">
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" placeholder="Enter Actor" name="aktor[]" id="aktor[]">
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-primary btnAddactor">
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 float-right btnsimpan">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>