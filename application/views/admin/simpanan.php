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
        <th><center>Nia</center></th>
        <th><center>Nama</center></th>
        <th><center>Jenis Simpanan</center></th>
        <th><center>Bulan Bayar</center></th>
        <th><center>Tahun</center></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($smpn as $smp) : ?>
                <tr>
                    <td><center><a href="<?php echo site_url() ?>/detail/detail_simpanan/<?php echo $smp->id_simpanan ?>"><?php echo $smp->id_simpanan ?></a></center></td>
            <td><center><?php echo $smp->nia ?></center></td>
            <td><center><?php echo $smp->nama ?></center></td>
            <td><center><?php echo $smp->jenis_simpanan ?></center></td>
            <td><center><?php echo $smp->bulan ?></center></td>
            <td><center><?php echo $smp->tahun ?></center></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>
</div><!--/row-->
