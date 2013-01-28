<div class="span10">
    <center> <h2>Data Simpanan</h2></center>
    <?php
    echo form_open('admin/simpanan_cari', 'Tambah Simpanan', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Simpanan</button>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>ID Nota simpanan</center></th>
        <th><center>NIA</center></th>
        <th><center>Nama</center></th>
        <th><center>Tanggal</center></th>
        <th><center>Petugas Penerima</center></th>
        <th><center>Action</center></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($smpn as $smp) : ?>
                <tr>
                    <td><center><?php echo anchor('admin/notaDetail/' . $smp->id_nota, $smp->id_nota) ?></center></td>
            <td><center><?php echo $smp->nia ?></center></td>
            <td><?php echo $smp->nama ?></td>
            <td><center><?php echo $smp->tanggal ?></center></td>
            <td><center><?php echo $smp->username ?></center></td>
            <td><center><?php echo anchor('admin/notaDel/' . $smp->id_nota, '<i class="icon-remove tool"></i>') ?></center></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>
</div><!--/row-->
