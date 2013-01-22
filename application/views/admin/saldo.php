<div class="span10">
    <center> <h2>SALDO</h2></center>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
        <th><center>#</center></th>
        <th><center>Nia</center></th>
        <th><center>Nama</center></th>
        <th><center>Saldo</center></th>
        </tr>
        </thead>
        <tbody>
            <?php $no=0 ?>
            <?php foreach ($smpn as $smp) : ?>
                <tr>
            <td><center><?php echo $smp->$no ?></center></td>

            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
