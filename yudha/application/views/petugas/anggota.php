<div class="span10">
    <center><h2>Data Anggota</h2></center>
    <form class="form-search">
        <input type="text" placeholder="Masukkan Nama" class="input-medium search-query">
        <button type="submit" class="btn">Search</button>
    </form>   
    <?php
    echo form_open('admin/anggota_tambah', 'tambah anggota', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Anggota</button>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nia</th>
                <th>No KTP</th>
                <th>Nama</th>
<!--                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>-->
                <th>Alamat</th>
<!--                <th>Kode Pos</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kota</th>
                <th>No NPWP</th> --> 
<!--                <th>telp</th>-->
                <th>Hp</th>
<!--                <th>Email</th>-->
<!--                <th>Jenis kelamin</th>-->
<!--                <th>Warga Negara</th>-->
<!--                <th>Hobi</th>-->
                <th>status</th>
                <th>Jenis Anggota</th>
<!--                <th>id perkawinan</th>
                <th>status pendidikan</th>-->
                <th>tanggal masuk</th>
<!--                <th>id user</th>-->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $agt) : ?>
                <tr>
                    <td><a href="<?php echo site_url() ?>/admin/detail_anggota/<?php echo $agt->nia ?>"><?php echo $agt->nia ?></a></td>
                    <td><?php echo $agt->no_ktp ?></td>
                    <td><?php echo $agt->nama ?></td>
                    <td><?php echo $agt->alamat_lengkap ?></td>
                    <td><?php echo $agt->hp ?></td>
                    <td><?php echo $agt->status ?></td>
                    <td><?php echo $agt->jenis_anggota ?></td>
                    <td><?php echo $agt->tanggal_masuk ?></td>
                    <td>
                        <?php
                        echo anchor('admin/anggota_edit/' . $agt->nia, '<i class="icon-pencil tool"></i>', 'alt="Edit"');
                        echo ' | ';
                        echo anchor('admin/anggota_hapus/' . $agt->nia, '<i class="icon-remove tool"></i>', 'alt="Hapus"')
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
