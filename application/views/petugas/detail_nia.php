<div class="span10">
    <div class="row-fluid">
    <div class="span12">
       
                   <h2>Anggota</h2>
                               <div class="row-fluid">
                   <div class="span6">
            
                 <?php
                echo form_open('admin/anggota_update','class="well bs-docs-example form-horizontal"');
               ?>
                <label>NIA    :</label><input id="disabledInput" class="input-xlarge disabled" type="text" readonly="readonly" value="<?php echo $nia[0]->nia ?>" name="nia">
                <label>No KTP :</label><input class="input-xlarge" type="text"  value="<?php echo $nia[0]->no_ktp ?>" name="no_ktp"> 
                <label>Nama   :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->nama ?>" name="nama">
                <label>Tempat Lahir :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->tempat_lahir ?>" name="tempat_lahir">
                <label>Tanggal Lahir :</label> <input class="input-xlarge" type="text" value="<?php echo $nia[0]->tgl_lahir ?>" name="tgl_lahir">
                <label>Alamat :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->alamat_lengkap ?>" name="alamat_lengkap">
                <label>Kode Pos :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->kode_pos ?>" name="kode_pos">
                <label>Provinsi :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->provinsi ?>" name="provinsi">
                <label>Kabupaten :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->kabupaten ?>" name="kabupaten">
                <label>Kota :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->kota ?>" name="kota">
                <label>No NPWP :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->no_npwp ?>" name="no_npwp">
                <label>Telp :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->telp ?>" name="telp">
              
        </div>
          <div class="span6">
            <div class="well">
                <label>Hp :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->hp ?>" name="hp">
                <label>Email :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->email ?>" name="email">
                <label>Jenis Kelamin :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->jenis_kelamin ?>" name="jenis_kelamin">
                <label>Warga Negara :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->warga_negara ?>" name="warga_negara">
                <label>Hobi :</label><input class="input-xlarge" type="textarea" value="<?php echo $nia[0]->hobi ?>" name="hobi">
                <label>Status Anggota:</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->status ?>" name="status">
                <label>Jenis Anggota :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->jenis_anggota ?>" name="jenis_anggota">
                <label>Status Perkawinan :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->status_perkawinan ?>" name="id_perkawinan">
                <label>Status Pendidikan :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->status_pendidikan ?>" name="id_pendidikan">
                <label>Tanggal Masuk :</label><input id="disabledInput" class="input-xlarge disabled" type="text" readonly="readonly"  value="<?php echo $nia[0]->tanggal_masuk ?>" name="tanggal_masuk">
                 <div class="group-option">
                <button class="btn btn-primary" <?php echo anchor('admin/anggota_update/' . $nia[0]->nia, 'Update' )?></button>
                <button class="btn btn-primary" <?php echo anchor('admin/anggota',  'Kembali' );?></button>
            </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>