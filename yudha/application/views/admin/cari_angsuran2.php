<div class="span10">

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
        <th><center>Besar pinjaman</center></th>
        <th><center>Sisa</center></th>
        <th><center>Pinjaman</center></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $agt) : ?>
                <tr>
                    <td><center><?php echo $agt->nia ?></center></td>
            <td><center><?php echo $agt->nama ?></center></td>
            <td><center><?php echo $agt->value ?></center></td>
            <td><center><?php echo $agt->sisa ?></center></td>
            <td><center>
                <a href="<?php echo site_url() ?>/admin/form_angsuran/<?php echo $agt->id_pinjaman ?>">Tambah Angsuran</a>
            </center></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
