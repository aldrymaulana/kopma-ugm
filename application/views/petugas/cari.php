<div class="span10">
    <?php
    if (empty($hasil)) {
        echo '<div class ="alert alert-error"><strong>Maaf! </strong>, Data Anggota Tidak Ada </div>';
    } else {
        ?>

        <h2>Data Anggota</h2>   
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th><center>Nia</center></th>
            <th><center>Nama</center></th>
            <th><center>status</center></th>
            <th><center>Jenis Anggota</center></th>
            <th><center>Pilih simpanan</center></th>
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
                    <a href="<?php echo site_url() . '/petugas/form_simpanan_pokok/1/' . date('Y') . '/' . $agt->nia ?>">Simpanan pokok</a>
                    <?php
                    echo ' | ';
                    ?>
                    <a href="<?php echo site_url() . '/petugas/form_simpanan_wajib/2/' . date('Y') . '/' . $agt->nia ?>">Simpanan Wajib</a>
                </center></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}
?>
