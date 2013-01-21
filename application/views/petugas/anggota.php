<div class="span10">
    <center><h2>Data Anggota</h2></center>
    <div class="form-search">
        <?php echo form_open('petugas/cari_simpanan') ?> 
        <input class="input-medium search-query text" placeholder="Masukkan NIA"  name="cari">
        <button type="submit" class="btn">Search</button>
        <?php echo form_close(); ?>
    </div> 
    <?php
    echo form_open('petugas/anggota_tambah', 'tambah anggota', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Anggota</button>
    <?php echo form_close() ?>
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
    <a href='toExcelAll' ><span style='color:green;'>Export All Data</span></a>
        <?php echo $this->pagination->create_links(); ?>
</div>
