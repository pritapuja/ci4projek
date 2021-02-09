<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <h1 class="h3 mb-3 text-gray-800">Dashboard</h1>

                <div class="col-xl-3 col-md-6 mb-2">
                    <div class="card border-left-primary shadow h-100 py-0">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="text-l font-weight-bold text-primary mb-1">
                                        Total Project</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $hitungNama; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file-alt fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="mb-3">
                <button type="button" class="btn btn-primary tomboltambah">
                    Add Project <i class="fas fa-plus-circle"></i>
                </button>
            </div> -->
            <p class="card-text viewdata">
            <table class="table" id="dataprojek">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 0;
                    foreach ($project as $row) :
                        $nomor++;
                    ?>
                        <tr>
                            <td><?= $nomor; ?></td>
                            <td><a href="/pages/formactor"><?= $row['nama']; ?></a></td>
                            <td><?= $row['deskripsi']; ?></td>
                            <td>
                                <a href="/pages/excel">
                                    <button onclick="tablesToExcel(['tbl1','tbl2'], ['Usecase','DFS'], 'export.xls', 'Excel')" class="btn btn-info">
                                        View <i class="fas fa-eye"></i>
                                    </button>
                                </a>
                                <!-- <form action="/pages/excel" method="GET"> -->

                                <!-- </form> -->

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </p>
        </div>
    </div>
</div>
<!-- <div class="viewmodal" style="display: none;"></div> -->


<?= $this->endSection(); ?>