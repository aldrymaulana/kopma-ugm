<div class="span10">
    <?php
    if (empty($hasil)) {
        echo '<div class ="alert alert-error"><strong>Maaf! </strong>, Data Anggota Tidak Ada </div>';
    } else {
        ?>
        <center><h2>Data User</h2></center>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th><center>Nia</center></th>
            <th><center>Nama</center></th>
            <th><center>status</center></th>
            <th><center>Jenis Anggota</center></th>
            <th><center>Pinjaman</center></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil as $agt) : ?>
                    <tr>
                        <td><center><?php echo $agt->nia ?></center></td>
                <td><center><?php echo $agt->nama ?></center></td>
                <td><center><?php echo $agt->status ?></center></td>
                <td><center><?php echo $agt->jenis_anggota ?></center></td>
                <td><center>
                    <a href="<?php echo site_url() ?>/admin/form_pinjaman/<?php echo $agt->nia ?>">Tambah Pinjaman</a>
                </center></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div><!--/row-->
    <?php
}
?>