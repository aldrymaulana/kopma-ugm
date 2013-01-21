<div class="span10">
    <div class="span6">
        <h2>Tambah Pinjaman</h2>
        <div class="row-fluid">
            <div class="well">
                <?php echo validation_errors(); ?>
                <?php echo form_open('petugas/pinjaman_insert') ?>      

                <label>Nia</label><input class="input-xlarge"  value="<?php echo $nia[0]->nia ?>" <?php echo form_input('nia'); ?>
                                         <label>Nama</label><input class="input-xlarge"  value="<?php echo $nia[0]->nama ?>" name="nama">
                <label>Besar Pinjaman</label><input class="input-xlarge"  placeholder="Besar pinjaman..." name="value">                   
                <br> 
                <button class="btn btn-primary" <?php echo form_submit('submit', 'tambah'); ?><i class="icon-plus icon-white"></i>Tambah</button>
                <?php echo form_close(); ?>
            </div>        
        </div>
    </div>
</div>
