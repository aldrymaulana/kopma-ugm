<div class="span10">
     <center><h2>Data Pinjaman</h2></center>
    <?php
    echo form_open('admin/pinjaman_cari', 'Tambah Pinjaman', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Pinjaman</button>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>ID Pinjaman</center></th>
        <th><center>Nia</center></th>
        <th><center>Nama</center></th>
        <th><center>value</center></th>
        <th><center>Tanggal Transaksi</center></th>
        <th><center>Action</center></th>
        </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach ($hasil as $pnj) : ?>
                <tr>
                    <td><center><?php echo $no ?></center></td>
                     <td><center><?php echo $pnj->nia ?></center></td>
            <td><center><?php echo $pnj->nama ?></center></td>
            <td><center><?php echo $pnj->value ?></center></td>
            <td><center><?php echo $pnj->tanggal ?></center></td>

            <td>
            <center><?php
            echo anchor('admin/pinjaman_edit/' . $pnj->id_pinjaman, '<i class="icon-pencil tool"></i>', 'alt="Edit"');
            echo ' | ';
            echo anchor('admin/pinjaman_hapus/' . $pnj->id_pinjaman, '<i class="icon-remove tool"></i>', 'alt="Hapus"')
                ?></center>
            </td>
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>