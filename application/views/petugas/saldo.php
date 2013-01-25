<div class="span10">
    <center> <h2>Saldo Simpanan</h2></center>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nia</th>
                <th>Nama</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($saldo as $data) : ?>
                <tr>
                    <td><?php echo $data->nia ?></td>
                    <td><?php echo $data->nama ?></td>
                    <td><?php echo $data->saldo ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>
</div><!--/row-->
