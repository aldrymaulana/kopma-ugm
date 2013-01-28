<div class="span10">
    <div class="row-fluid">
        <div class="span12">

            <h2>Anggota</h2>
            <div class="row-fluid">
                <div class="span6">

                    <?php
                    echo form_open('admin/anggota_update', 'class="well bs-docs-example form-horizontal"');
                    ?>
                    <div class="control-group">
                        <label>NIA    :</label><input id="disabledInput" class="input-xlarge disabled" type="text" readonly="readonly" value="<?php echo $nia[0]->nia ?>" name="nia"/>
                    </div>
                    <div class="control-group">
                        <label>No KTP :</label><input class="input-xlarge" type="text"  value="<?php echo $nia[0]->no_ktp ?>" name="no_ktp"/> 
                    </div>
                    <div class="control-group">
                        <label>Nama   :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->nama ?>" name="nama"/>
                    </div>
                    <div class="control-group">
                        <label>Tempat Lahir :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->tempat_lahir ?>" name="tempat_lahir">
                    </div>
                    <div class="control-group">
                        <label>Tanggal Lahir :</label> <input class="input-xlarge" type="text" value="<?php echo $nia[0]->tgl_lahir ?>" name="tgl_lahir">
                    </div>
                    <div class="control-group">
                        <label>Alamat :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->alamat_lengkap ?>" name="alamat_lengkap">
                    </div>
                    <div class="control-group">
                        <label>Kode Pos :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->kode_pos ?>" name="kode_pos">
                    </div>
                    <div class="control-group">
                        <label>Provinsi :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->provinsi ?>" name="provinsi">
                    </div>
                    <div class="control-group">
                        <label>Kabupaten :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->kabupaten ?>" name="kabupaten">
                    </div>
                    <div class="control-group">
                        <label>Kota :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->kota ?>" name="kota">
                    </div>
                    <div class="control-group">
                        <label>No NPWP :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->no_npwp ?>" name="no_npwp">
                    </div>
                    <div class="control-group">
                        <label>Telp :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->telp ?>" name="telp">
                    </div>
                </div>
                <div class="span6">
                    <div class="well">
                        <div class="control-group">
                            <label>Hp :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->hp ?>" name="hp">
                        </div>
                        <div class="control-group">
                            <label>Email :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->email ?>" name="email">
                        </div>
                        <div class="group-option">
                            <label>Jenis Kelamin :</label>
                            <select class="input-xlarge" name="jenis_kelamin">
                                <option ><?php echo $nia[0]->jenis_kelamin ?></option>
                                <option></option>
                                <option value="laki-laki">laki-Laki</option>
                                <option value="perempuan">perempuan</option>

                            </select>    
                        </div>
                        <div class="control-group">
                            <label>Warga Negara :</label><input class="input-xlarge" type="text" value="<?php echo $nia[0]->warga_negara ?>" name="warga_negara">
                        </div>
                        <div class="control-group">
                            <label>Hobi :</label><input class="input-xlarge" type="textarea" value="<?php echo $nia[0]->hobi ?>" name="hobi">
                        </div>
                        <div class="group-option">
                            <label>Status Anggota :</label>
                            <select class="input-xlarge" name="status">
                                <option><?php echo $nia[0]->status ?></option>
                                <option></option>
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Non Aktif</option>
                            </select>    
                        </div>
                        <div class="group-option">
                            <label>Status Anggota :</label>
                            <select class="input-xlarge" name="jenis_anggota">
                                <option><?php echo $nia[0]->jenis_anggota ?></option>
                                <option></option>
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Non Aktif</option>
                            </select>    
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Status Perkawinan</label>
                            <div class="controls">
                                <select class="input-xlarge" name="id_perkawinan">
                                    <option value="<?php echo $nia[0]->id_perkawinan ?>"><?php echo $nia[0]->status_perkawinan ?></option>
                                    <option></option>
                                    <?php foreach ($kawin as $data) : ?>
                                        <option value="<?php echo $data->id_perkawinan ?>"><?php echo $data->status_perkawinan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        

                        <div class="control-group">
                            <label class="control-label" for="input01">Status Pendidikan</label>
                            <div class="controls">
                                <select class="input-xlarge" name="id_pendidikan">
                                    <option value="<?php echo $nia[0]->id_pendidikan ?>"><?php echo $nia[0]->status_pendidikan ?></option>
                                    <option></option>
                                    <?php foreach ($pendidikan as $pen) : ?>
                                        <option value="<?php echo $pen->id_pendidikan ?>"><?php echo $pen->status_pendidikan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>


                        <div class="control-group">
                            <label>Tanggal Masuk :</label><input id="disabledInput" class="input-xlarge disabled" type="text" readonly="readonly"  value="<?php echo $nia[0]->tanggal_masuk ?>" name="tanggal_masuk">
                            <div class="group-option">
                                <button class="btn btn-primary" <?php echo form_submit('submit', 'Perbaharui'); ?>Perbaharui</button>  
                                <button class="btn btn-primary" <?php echo form_submit('reset', 'Batal'); ?></i>Kembaliah</button>
                                <?php echo form_close(); ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>