<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <button onclick="tablesToExcel(['tbl1','tbl2'], ['Usecase','DFS'], 'export.xls', 'Excel')" class="btn btn-success mb-3 float-right">
                Excel <i class="fas fa-file-excel"></i>
            </button>

            <table class="table" id="tbl1">
                <thead>
                    <tr>
                        <th scope="col">Aktor</th>
                        <th scope="col">Case</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Peserta</td>
                        <td>Register</td>
                    </tr>

                </tbody>
            </table>
            <br>
            <table class="table" id="tbl2">
                <thead>
                    <tr>
                        <th scope="col">Base URL</th>
                        <th scope="col">Pattern</th>
                        <th scope="col">Type</th>
                        <th scope="col">request param</th>
                        <th scope="col">request body</th>
                        <th scope="col">Header</th>
                        <th scope="col">res</th>
                        <th scope="col">Data Object</th>
                        <th scope="col">Function Query</th>
                        <th scope="col">Base Query</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>/login</td>
                        <td>REST</td>
                        <td>POST</td>
                        <td></td>
                        <td>email : TEXT
                            password : TEXT</td>
                        <td></td>
                        <td>status : Succes|Error
                            message: TEXT</td>
                        <td>id : INT
                        </td>
                        <td>SELECT * FROM project</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>