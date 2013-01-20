<div class="row-fluid">
    <div class="span6">
            <h2>Tambah Simpanan Wajib</h2>
<div class="row-fluid">
            <div class="well">
                 <?php echo validation_errors(); ?>
<?php echo form_open('admin/pinjaman_insert') ?>      

            <label>Nia</label><input class="input-xlarge"  value="<?php echo $nia[0]->nia ?>" <?php echo form_input('nia'); ?>
                   <label>Nama</label><input class="input-xlarge"  value="<?php echo $nia[0]->nama ?>" name="nama">
                   <label>Value</label><input class="input-xlarge"  placeholder="Value..." <?php echo form_input('value'); ?>
                   <label>Tanggal Transaksi</label><input class="input-xlarge" type="date"   <?php echo form_input('tanggal'); ?>
                   
            <br> 

            <button class="btn btn-primary" <?php echo form_submit('submit', 'tambah'); ?><i class="icon-plus icon-white"></i>Tambah</button>
            <?php echo form_close(); ?>
        </div>        
    </div>
</div>
</div>
