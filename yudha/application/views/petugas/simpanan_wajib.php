<div class="hero-unit">
        <center><h2>Simpanan Wajib</h2></center>
    <br>
           <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>#</center></th>
    <th><center>Jenis Simpanan</center></th>
    <th><center>value</center></th>
    <th><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
            <?php $no =1; ?>
            <?php foreach ($jenis as $simp) : ?>
                <tr>
                    <td><center><?php echo $no ?></center></td>
    <td><center><?php echo $simp->jenis_simpanan ?></center></td>
    <td><center><?php echo $simp->value ?></center></td>

                    <td>
                       <center> <?php
                        echo anchor('admin/jenis_edit/' . $simp->id_jenis_simpanan, '<i class="icon-pencil tool"></i>', 'alt="Edit"');
                        echo ' | ';
                        echo anchor('admin/jenis_hapus/' . $simp->id_jenis_simpanan, '<i class="icon-remove tool"></i>', 'alt="Hapus"')
                                ?></center>
                    </td>
                </tr>
                <?php $no++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!--/row-->
