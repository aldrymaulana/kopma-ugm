<div class="span10">
    <div class="span6">
        <h2>Tambah Angsuran</h2>
        <div class="row-fluid">
            <div class="well">
                <?php echo validation_errors(); ?>
                <?php foreach ($pinjaman as $data) : ?>
                    <?php echo form_open('petugas/angsuran_insert') ?>      
                    <label>Id Pinjaman</label><input class="input-xlarge"  readonly value="<?php echo $data->id_pinjaman ?>"> 
                    <input class="input-xlarge hidden"  readonly value="<?php echo $data->id_pinjaman ?>" name="id"> 
                    <label>Nia</label><input class="input-xlarge"  readonly     value="<?php echo $data->nia ?>" name="nia"> 
                    <label>Nama</label><input class="input-xlarge"  value="<?php echo $data->nama ?>" name="nama"/>
                    <label>Besar angsuran</label><input class="input-xlarge"  placeholder="Value..." name="value"/>
                    <br>
                    <br>
                    <button class="btn btn-primary" <?php echo form_submit('submit', 'tambah'); ?><i class="icon-plus icon-white"></i>Tambah</button>
                    <?php echo form_close(); ?>
                <?php endforeach; ?>
            </div>        
        </div>
    </div>
</div>
