<div class="span10">
    <div class="span4">
        <div class="row-fluid">
            <div class="well">
           <?php
                echo form_open('petugas/profile_update');
               ?>
            <label>Id User :</label>  <input id="disabledInput" class="input-xlarge disabled" readonly="readonly" type="text" value="<?php echo  $user[0]->id_user ?>" name="id_user">
            <label>Username :</label><input class="input-xlarge"  type="text" value="<?php echo $user[0]->username  ?>" name="username">
            <label>Password :</label><input class="input-xlarge"  type="text" value=" <?php echo  $user[0]->password ?>" name="password">
            <label>Nama :</label><input class="input-xlarge"  type="text" value="<?php echo  $user[0]->nama ?>" name="nama"> 
            <label>No Hp </label><input class="input-xlarge"  type="text" value="<?php echo  $user[0]->no_hp ?>" name="no_hp">
            <label>Status</label><input class="input-xlarge"  type="text" readonly="readonly" value="<?php echo $user[0]->status  ?>" name="status">
            <br>
            <br>
            <button class="btn btn-primary" <?php echo form_submit('submit', 'Perbaharui'); ?><i class="icon-plus icon-white"></i>Perbaharui</button>            
            <button class="btn btn-primary" <?php echo form_submit('reset', 'Batal'); ?><i class="icon-plus icon-white"></i>Kembali</button>           
 <?php 

            echo form_close();
            ?>
        </div>
    </div>
          </div>
        </div>
