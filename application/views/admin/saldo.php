<div class="span10">
    <center> <h2>Saldo Simpanan</h2></center>
    <?php
    echo form_open('admin/simpanan_cari', 'Tambah Simpanan', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Simpanan</button>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nia</th>
                <th>Nama</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($saldo as $data) : ?>
                <tr>
                    <td><?php echo $data->nia ?></td>
                    <td><?php echo $data->nama ?></td>
                    <td><?php echo $data->saldo ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
