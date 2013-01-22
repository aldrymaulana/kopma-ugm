<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldatasimpanan.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<div class="span10">
        <center> <h2>Data Simpanan</h2></center>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>ID Nota simpanan</center></th>
        <th><center>Nia</center></th>
        <th><center>Nama</center></th>
        <th><center>Jenis Simpanan</center></th>
        <th><center>Bulan Bayar</center></th>
        <th><center>Tahun</center></th>
        <th><center>Tanggal Transaksi</center></th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($smpn as $smp) : ?>
                <tr>
            <td><center><?php echo $smp->id_simpanan ?></a></center></td>
            <td><center><?php echo $smp->nia ?></center></td>
            <td><center><?php echo $smp->nama ?></center></td>
            <td><center><?php echo $smp->jenis_simpanan ?></center></td>
            <td><center><?php echo $smp->bulan ?></center></td>
            <td><center><?php echo $smp->tahun ?></center></td>
            <td><center><?php echo $smp->tanggal ?></center></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
