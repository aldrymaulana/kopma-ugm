<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldataAngsuran.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<div class="span10">
    <center><h2>Laporan Data Anggota</h2></center>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nia</th>
                <th>No KTP</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Kode Pos</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kota</th>
                <th>No NPWP</th>  
                <th>telp</th>
                <th>Hp</th>
                <th>Email</th>
                <th>Jenis kelamin</th>
                <th>Warga Negara</th>
                <th>Hobi</th>
                <th>status</th>
                <th>Jenis Anggota</th>
                <th>id perkawinan</th>
                <th>status pendidikan</th>
                <th>tanggal masuk</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $agt) : ?>
                <tr>
                    <td><?php echo $agt->nia ?></a></td>
                    <td><?php echo $agt->no_ktp ?></td>
                    <td><?php echo $agt->nama ?></td>
                    <td><?php echo $agt->tempat_lahir ?></td>
                    <td><?php echo $agt->tgl_lahir ?></td>
                    <td><?php echo $agt->alamat_lengkap ?></td>
                    <td><?php echo $agt->kode_pos ?></td>
                    <td><?php echo $agt->provinsi ?></td>
                    <td><?php echo $agt->kabupaten ?></td>
                    <td><?php echo $agt->kota ?></td>
                    <td><?php echo $agt->no_npwp ?></td>
                    <td><?php echo $agt->telp ?></td>
                    <td><?php echo $agt->hp ?></td>
                    <td><?php echo $agt->email ?></td>
                    <td><?php echo $agt->jenis_kelamin ?></td>
                    <td><?php echo $agt->warga_negara ?></td>
                    <td><?php echo $agt->hobi ?></td>
                    <td><?php echo $agt->status ?></td>
                    <td><?php echo $agt->jenis_anggota ?></td>
                    <td><?php echo $agt->status_perkawinan ?></td>
                    <td><?php echo $agt->status_pendidikan ?></td>
                    <td><?php echo $agt->tanggal_masuk ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>