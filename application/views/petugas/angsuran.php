<div class="span10">
    <center> <h2>Data Angsuran</h2></center>
    <?php
    echo form_open('petugas/cari_angsuran_form', 'Tambah Angsuran', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Angsuran</button>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>No Ref. Angsuran</center></th>
        <th><center>No Ref. Pinjaman</center></th>
        <th><center>NIA</center></th>
        <th><center>Nama</center></th>
        <th><center>Pokok Pinjaman</center></th>
        <th><center>Mengansur</center></th>
        <th><center>Petugas penerima</center></th>
        <th><center>Tgl transaksi</center></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($angsuran as $ans) : ?>
                <tr>
                    <td><center><a href="<?php echo site_url() ?>/detail/detail_angsuran/<?php echo $ans->id_angsuran ?>"><?php echo $ans->id_angsuran ?></a></center></td>
            <td><center><?php echo $ans->id_pinjaman ?></center></td>
            <td><center><?php echo $ans->nia ?></center></td>
            <td><center><?php echo $ans->nama ?></center></td>
            <td><center><?php echo $ans->pokok ?></center></td>
            <td><center><?php echo $ans->mengansur ?></center></td>
            <td><center><?php echo $ans->username ?></center></td>
            <td><center><?php echo $ans->tanggal ?></center></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
