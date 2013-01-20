<div class="span10">
    <center> <h2>Data Angsuran</h2></center>
    <?php
    echo form_open('admin/simpanan_cari', 'Tambah Simpanan', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Simpanan</button>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>ID Angsuran</center></th>
        <th><center>ID Pinjaman</center></th>
        <th><center>Nia</center></th>
        <th><center>Nama</center></th>
        <th><center>Value Angsuran</center></th>
        <th><center>Value Pinjaman</center></th>
        <th><center>Total Angsuran Yang Harus Dibayar</center></th>
        <th><center>Tanggal Transaksi</center></th>
        <th><center>Action</center></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($angsuran as $ans) : ?>
                <tr>
                    <td><center><a href="<?php echo site_url() ?>/detail/detail_angsuran/<?php echo $ans->id_angsuran ?>"><?php echo $ans->id_angsuran ?></a></center></td>
            <td><center><?php echo $ans->id_pinjaman ?></center></td>
            <td><center><?php echo $ans->nia ?></center></td>
            <td><center><?php echo $ans->nama ?></center></td>
            <td><center><?php echo $ans->angsuran ?></center></td>
            <td><center><?php echo $ans->pinjaman ?></center></td>
            <td><center><?php echo $ans->total ?></center></td>
            <td><center><?php echo $ans->tanggal ?></center></td>
            <td>
            <center><?php
            echo anchor('admin/simpanan_edit/' . $ans->id_angsuran, '<i class="icon-pencil tool"></i>', 'alt="Edit"');
            echo ' | ';
            echo anchor('admin/simpanan_hapus/' . $ans->id_angsuran, '<i class="icon-remove tool"></i>', 'alt="Hapus"')
                ?></center>
            </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
