<div class="span10 ">
    
    <div class="span6 ">
        <div class="row-fluid">
           <h2>Tambah User</h2>
            <?php
                  echo form_open('admin/user_insert', 'class="well"');
            ?>
            <label>Username</label>
            <input class="input-xlarge"  placeholder="Username..." <? echo form_input('username'); ?><?php echo form_error('username'); ?>
                   <label>Password</label><input class="input-xlarge"  placeholder="Password..." <? echo form_input('password'); ?>
                   <label>Nama</label><input class="input-xlarge"  placeholder="Nama..." <? echo form_input('nama'); ?>
                   <label>No Hp</label><input class="input-xlarge"  placeholder="No Hp..." <? echo form_input('no_hp'); ?>
                   <label>Status</label><?php
            $option = array(
                '0' => 'Pilih Status',
                '1' => 'Admin',
                '2' => 'Petugas',
            );
            echo form_dropdown('status', $option, '0');
            ?>
            <br> 

            <button class="btn btn-primary" <?php echo form_submit('submit', 'tambah'); ?><i class="icon-plus icon-white"></i>Tambah</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>