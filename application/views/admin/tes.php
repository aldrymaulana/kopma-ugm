
<div class="row-fluid">
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Status Perkawinan</th>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no =  1; ?>
            <?php foreach ($perkawinan as $prk) : ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $prk->id_perkawinan ?></td>
                    <td><?php echo $prk->status_perkawinan ?></td>
                    
                    <td>
                        <?php
                        echo anchor('admin/sex_edit/' . $prk->id_perkawinan, '<i class="icon-pencil tool"></i>', 'alt="Hapus"');
                        echo ' | ';
                        echo anchor('admin/sex_del/' . $prk->id_perkawinan, '<i class="icon-remove tool"></i>', 'alt="Hapus"')
                        ?>
                    </td>
                </tr>
                <?php $no++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div><!--/row-->
</div><!--/span-->
</div>