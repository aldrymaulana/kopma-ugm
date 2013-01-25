<div class="span10">
    <center> <h2>Data Angsuran</h2></center>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>No Ref. Angsuran</center></th>
        <th><center>NIA</center></th>
        <th><center>Mengansur</center></th>
        <th><center>Petugas penerima</center></th>
        <th><center>Tgl transaksi</center></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($angsuran as $ans) : ?>
                <tr>
                    <td><center><a href="<?php echo site_url() ?>/detail/detail_angsuran/<?php echo $ans->id_angsuran ?>"><?php echo $ans->id_angsuran ?></a></center></td>
            <td><center><?php echo $ans->nia ?></center></td>
            <td><center><?php echo $ans->mengansur ?></center></td>
            <td><center><?php echo $ans->username ?></center></td>
            <td><center><?php echo $ans->tanggal ?></center></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>
        <br>
    <a href='toExcelAllAngsuran'><img src="<?php echo base_url() ?>assets/img/excel-icon.jpeg" width="18" height="18" border="0"/> Rekap</a>
</div><!--/row-->
