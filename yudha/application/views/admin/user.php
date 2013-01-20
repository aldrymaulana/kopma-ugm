<div class="span10">

    <?php
    echo form_open('admin/user_tambah', 'tambah user', 'class="well"');
    ?>
    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah User</button>
    <?php echo form_close() ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>#</th>
                <th>username</th>
                <th>nama</th>
                <th>no hp</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1 ?>
            <?php foreach ($user as $da) : ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $da->username ?></td>
                    <td><?php echo $da->nama ?></td>
                    <td><?php echo $da->no_hp ?></td>
                    <td><?php echo $da->status ?></td>
                    <td>
                        <?php
                        echo anchor('admin/user_edit/' . $da->id_user, '<i class="icon-pencil tool"></i>', 'alt="Edit"');
                        echo ' | ';
                        echo anchor('admin/user_hapus/' . $da->id_user, '<i class="icon-remove tool"></i>', 'alt="Hapus"')
                        ?>
                    </td>
                </tr>
                <?php $no ++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
