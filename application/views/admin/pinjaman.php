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
                <th><center>No Ref. Pinjaman</center></th>
        <th><center>NIA</center></th>
        <th><center>Nama</center></th>
        <th><center>Pokok Pinjaman</center></th>
        <th><center>Sisa Pinjaman</center></th>
        <th><center>Tanggal Transaksi</center></th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($pinjaman as $pnj) : ?>
                <tr>
                    <td><center><?php echo $pnj->id_pinjaman ?></center></td>
            <td><center><?php echo $pnj->nia ?></center></td>
            <td><center><?php echo $pnj->nama ?></center></td>
            <td><center><?php echo $pnj->value ?></center></td>
            <td><center><?php if($pnj->sisa <= 0){echo 'Sudah Lunas';}else{echo $pnj->sisa;} ?></center></td>
            <td><center><?php echo $pnj->tanggal ?></center></td>
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>