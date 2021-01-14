<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <h1 class="h3 mb-3 text-gray-800">Dashboard</h1>
                <div class="col-xl-3 col-md-6 mb-3">
                    <div class="card border-left-info shadow h-100 py-1">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-0">
                                    <div class="text-l font-weight-bold text-info mb-1">
                                        Total Project</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['deskripsi']; ?></td>
                            <td>
                                <form action="<?= base_url('pages/projek_excel') ?>" method="POST">
                                    <button type="submit" class="btn btn-success">
                                        Excel <i class="fas fa-file-excel"></i>
                                    </button>
                                </form>

                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>