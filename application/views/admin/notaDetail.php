<div class="span10">
    <center> <h2>Detail Nota</h2></center>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>ID Nota simpanan</center></th>
        <th><center>Nia</center></th>
        <th><center>Nama</center></th>
        <th><center>Jenis Simpanan</center></th>
        <th><center>Bulan Bayar</center></th>
        <th><center>Tahun</center></th>
        <th><center>Action</center></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($nota as $smp) : ?>
                <tr>
                    <td><center><?php echo $smp->id_nota ?></center></td>
            <td><center><?php echo $smp->nia ?></center></td>
            <td><center><?php echo $smp->nama ?></center></td>
            <td><center><?php echo $smp->jenis_simpanan ?></center></td>
            <td><center><?php echo $smp->bulan ?></center></td>
            <td><center><?php echo $smp->tahun ?></center></td>
            <td><center><?php echo anchor('as/' . $smp->id_simpanan, 'Edit') ?></center></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>
</div><!--/row-->