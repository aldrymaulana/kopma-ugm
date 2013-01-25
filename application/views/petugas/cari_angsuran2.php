<div class="span10">

    <?php
    echo form_open('petugas/form_angsuran', 'tambah angsuran', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Angsuran</button>
    <?php echo form_close() ?>
<table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>NIA</center></th>
        <th><center>Nama</center></th>
        <th><center>Besar pinjaman</center></th>
        <th><center>Sisa</center></th>
        <th><center>Pembayaran</center></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $agt) : ?>
                <tr>
                    <td><center><?php echo $agt->nia ?></center></td>
            <td><center><?php echo $agt->nama ?></center></td>
            <td><center><?php echo $agt->pokok ?></center></td>
            <td><center><?php if ($agt->mengansur == 0) {
                echo 'Lunas';
            } else {
                echo $agt->mengansur;
            } ?></center></td>
            <td><center>
                <?php if($agt->mengansur!=0){echo anchor('admin/form_angsuran/'.$agt->id_pinjaman,'Bayar angsuran');}?>
            </center></td>
            </tr>
<?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
