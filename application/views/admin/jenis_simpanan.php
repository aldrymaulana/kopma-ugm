<div class="hero-unit">

    <?php
    echo form_open('admin/user_tambah', 'tambah user', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah User</button>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Simpanan</th>
                <th>value</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jenis as $simp) : ?>
                <tr>
                    <td><?php echo $simp->id_jenis_simpanan ?></td>
                    <td><?php echo $simp->jenis_simpanan ?></td>
                    <td><?php echo $simp->value ?></td>

                    <td>
                        <?php
                        echo anchor('admin/jenis_edit/' . $da->id_user, '<i class="icon-pencil tool"></i>', 'alt="Edit"');
                        echo ' | ';
                        echo anchor('admin/jenis_hapus/' . $da->id_user, '<i class="icon-remove tool"></i>', 'alt="Hapus"')
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
