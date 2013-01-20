<div class="span10">
    <div class="span4">
            <h2>Edit Pinjaman</h2>
            <div class="well">
                 <?php echo validation_errors(); ?>
<?php echo form_open('admin/pinjaman_update') ?>      
 <label>Id pinjaman :</label>  <input id="disabledInput" class="input-xlarge disabled" readonly="readonly" type="text" value="<?php echo  $pinjaman[0]->id_pinjaman ?>" name="id_pinjaman">
            <label>Nia</label><input class="input-xlarge"  readonly="readonly" type="text" value="<?php echo $pinjaman[0]->nia ?>" name="nia">
                   <label>Value</label><input class="input-xlarge"  type="text" Value="<?php echo $pinjaman[0]->value ?>" name="value">
                   <label>Tanggal Transaksi</label><input class="input-xlarge" readonly="readonly" type="text" value="<?php echo $pinjaman[0]->tanggal ?>"name="tanggal">
                   
            <br> 

            <button class="btn btn-primary" <?php echo form_submit('submit', 'Perbaharui'); ?>Perbaharui</button>
           <?php echo form_close(); ?> 
        </div>        
    </div>
</div>
