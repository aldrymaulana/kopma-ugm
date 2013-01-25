<div class="span10">
    <center><h2>Laporan Data Anggota</h2></center>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIA</th>
                <th>No KTP</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Kode Pos</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kota</th>
                <th>NPWP</th>  
                <th>telp</th>
                <th>Hp</th>
                <th>Email</th>
                <th>Jenis kelamin</th>
                <th>Warga Negara</th>
                <th>Hobi</th>
                <th>Status</th>
                <th>Jenis Anggota</th>
                <th>Perkawinan</th>
                <th>Pendidikan</th>
                <th>Tanggal Masuk</th>
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
    <?php echo $this->pagination->create_links(); ?>
    <a href='toExcelAllAnggota'><img src="<?php echo base_url() ?>assets/img/excel-icon.jpeg" width="18" height="18" border="0"/> Rekap</a>
</div>