<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<div class="span10">
    <center><h2>Data Anggota</h2></center>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nia</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hp</th>
                <th>status</th>
                <th>Jenis Anggota</th>
                <th>tanggal masuk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $agt) : ?>
                <tr>
                    <td><a href="<?php echo site_url() ?>/petugas/detail_anggota/<?php echo $agt->nia ?>"><?php echo $agt->nia ?></a></td>
                    <td><?php echo $agt->nama ?></td>
                    <td><?php echo $agt->alamat_lengkap ?></td>
                    <td><?php echo $agt->hp ?></td>
                    <td><?php echo $agt->status ?></td>
                    <td><?php echo $agt->jenis_anggota ?></td>
                    <td><?php echo $agt->tanggal_masuk ?></td>
                    <td>
            <center>  <?php
            echo anchor('petugas/anggota_hapus/' . $agt->nia, '<i class="icon-remove tool" title="hapus"></i>', 'alt="Hapus"')
                ?></center>
            </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
        <?php echo $this->pagination->create_links(); ?>
</div>
