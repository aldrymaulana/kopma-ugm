<div class="span10">
    <div class="span4">
        <div class="row-fluid">
            <h2>Edit User</h2>
            <div class="well">
                <?php
                echo form_open('admin/simpanan_pokok_edit');
                ?>
                <label>Id simpanan :</label>  <input id="disabledInput" class="input-xlarge disabled" readonly="readonly" type="text" value="<?php echo $smp[0]->id_jenis_simpanan ?>" name="id_user">
                <label>Jenis Simpanan :</label><input class="input-xlarge"  type="text" value="<?php echo $smp[0]->jenis_simpanan ?>" name="jenis_simpanan">
                <label>value :</label><input class="input-xlarge"  type="text" value=" <?php echo $value[0]->value ?>" name="value">
                <button class="btn btn-primary" <?php echo form_submit('submit', 'Perbaharui'); ?>Perbaharui</button>            
                <button class="btn btn-primary" <?php echo form_submit('reset', 'Batal'); ?></i>Kembali</button>           
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </div>
</div>
