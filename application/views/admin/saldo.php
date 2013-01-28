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
                <th><center>#</center></th>      
        <th><center>Nia</center></th>
        <th><center>Nama</center></th>
        <th><center>Saldo</center></th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php foreach ($saldo as $data) : ?>
                <tr>
                    <td><center><?php echo $no ?></center></td>
            <td><center><?php echo $data->nia ?></center></td>
            <td><center><?php echo $data->nama ?></center></td>
            <td><center><?php echo $data->saldo ?></center></td>
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>
</div><!--/row-->
