<div class="span10">
    <div class="span4">
            <h2>Edit Angsuran</h2>
            <div class="well">
                 <?php echo validation_errors(); ?>
<?php echo form_open('petugas/angsuran_update') ?>      
 <label>Id pinjaman :</label>  <input id="disabledInput" class="input-xlarge disabled" readonly="readonly" type="text" value="<?php echo  $angsuran[0]->id_angsuran ?>" name="id_angsuran"/>
 <label>Id pinjaman :</label>  <input id="disabledInput" class="input-xlarge disabled" readonly="readonly" type="text" value="<?php echo  $angsuran[0]->id_pinjaman ?>" name="id_pinjaman"/>
            <label>Nia</label><input class="input-xlarge"  readonly="readonly" type="text" value="<?php echo $angsuran[0]->nia ?>" name="nia">
                   <label>Nama</label><input class="input-xlarge"  type="text" Value="<?php echo $angsuran[0]->nama ?>" name="nama ">
                   <label>Value Angsuran</label><input class="input-xlarge"  type="text" Value="<?php echo $angsuran[0]->angsuran ?>" name="value">
                   <label>Tanggal Transaksi</label><input class="input-xlarge" readonly="readonly" type="text" value="<?php echo $angsuran[0]->tanggal ?>"name="tanggal">
                   
           <button class="btn btn-primary" <?php echo form_submit('submit', 'Perbaharui'); ?>Perbaharui</button>
           <?php echo form_close(); ?> 
        </div>        
    </div>
</div>
