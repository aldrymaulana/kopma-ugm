<div class="span10">
    <center><h2>Data Pinjaman</h2></center>
       <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>No Ref. Pinjaman</center></th>
        <th><center>NIA</center></th>
        <th><center>Nama</center></th>
        <th><center>Pokok Pinjaman</center></th>
        <th><center>Sisa Pinjaman</center></th>
        <th><center>Tanggal Transaksi</center></th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($pinjaman as $pnj) : ?>
                <tr>
                    <td><center><a href="<?php echo site_url() ?>/admin/pdf_detail_pinjaman/<?php echo $pnj->id_pinjaman ?>"><?php echo $pnj->id_pinjaman ?></a></center></td>
            <td><center><?php echo $pnj->nia ?></center></td>
            <td><center><?php echo $pnj->nama ?></center></td>
            <td><center><?php echo $pnj->value ?></center></td>
            <td><center><?php
            if ($pnj->sisa <= 0) {
                echo 'Sudah Lunas';
            } else {
                echo $pnj->sisa;
            }
                ?></center></td>
            <td><center><?php echo $pnj->tanggal ?></center></td>
            </tr>

            <?php $no++ ?>
        <?php endforeach; ?>
        </tbody>
    </table>
        <a href="<?php echo site_url() ?>/admin/pdf_detail_pinjaman"><img src="<?php echo base_url() ?>assets/img/excel-icon.jpeg" width="18" height="18" border="0"/> pdf</a>

</div>