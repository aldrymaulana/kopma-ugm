<div class="span10">
    <center><h2>Laporan Data Anggota</h2></center>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>NIA</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Hp</th>
                <th>Jenis kelamin</th>
                <th>Status</th>
                <th>Jenis Anggota</th>
                <th>Pendidikan</th>
                <th>Tanggal Masuk</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $agt) : ?>
                <tr>
                    <td><?php echo $agt->nia ?></a></td>
                    <td><?php echo $agt->nama ?></td>
                    <td><?php echo $agt->tempat_lahir ?></td>
                    <td><?php echo $agt->tgl_lahir ?></td>
                    <td><?php echo $agt->alamat_lengkap ?></td>
                    <td><?php echo $agt->hp ?></td>
                    <td><?php echo $agt->jenis_kelamin ?></td>
                    <td><?php echo $agt->status ?></td>
                    <td><?php echo $agt->jenis_anggota ?></td>
                    <td><?php echo $agt->status_pendidikan ?></td>
                    <td><?php echo $agt->tanggal_masuk ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>
    <br>
    <a href='toExcelAllAnggota'><img src="<?php echo base_url() ?>assets/img/excel-icon.jpeg" width="18" height="18" border="0"/> Rekap</a>
</div>