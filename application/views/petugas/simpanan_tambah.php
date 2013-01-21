<div class="row-fluid">
    <center><h2>Tambah Simpanan</h2></center>
    <div class="span6">
        <div class="row-fluid">
            <div class="well">
<?php echo form_open('petugas/simpanan_tambah') ?>      

            <label>Nia</label><input class="input-xlarge"  value="<?php echo $nia[0]->nia ?>" name="nia">
                   <label>Nama</label><input class="input-xlarge"  placeholder="Nama..." <? echo form_input('password'); ?>
                   <label>Jenis SImpanan</label><input class="input-xlarge"  placeholder="Jenis Simpanan..." <? echo form_input('nama'); ?>
                   <label>tanggal</label><input class="input-xlarge" type="date"  placeholder="Tanggal Transaksi..." <? echo form_input('no_hp'); ?>
                   
            <br> 

            <button class="btn btn-primary" <?php echo form_submit('submit', 'tambah'); ?><i class="icon-plus icon-white"></i>Tambah</button>
            <?php echo form_close(); ?>
        </div>        
    </div>
</div>
</div>
