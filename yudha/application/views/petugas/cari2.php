<div class="hero-unit">

    <?php
    echo form_open('admin/pinjaman_tambah', 'tambah Pinjaman', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Pinjaman</button>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>Nia</center></th>
        <th><center>Nama</center></th>
        <th><center>status</center></th>
        <th><center>Jenis Anggota</center></th>
        <th><center>Pinjaman</center></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $agt) : ?>
                <tr>
                    <td><center><?php echo $agt->nia ?></center></td>
            <td><center><?php echo $agt->nama ?></center></td>
    <td><center><?php echo $agt->status ?></center></td>
    <td><center><?php echo $agt->jenis_anggota ?></center></td>
            <td><center>
                <a href="<?php echo site_url() ?>/admin/form_pinjaman/<?php echo $agt->nia ?>">Tambah Pinjaman</a>
                            </center></td>
            </tr>
<?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
