<div class="span10">
    <div class="row-fluid">
        <div class="span12">
            <h2>Tambah Anggota</h2>
            <?php echo validation_errors(); ?>
            <div class="row-fluid">
                <div class="span6">
                    <?php
                    echo form_open('admin/anggota_insert', 'class="well bs-docs-example form-horizontal"');
                    ?>
                    <label>NIA    :</label><input class="input-xlarge"  placeholder="Nia..." name="nia" />
                    <label>No KTP :</label><input class="input-xlarge"  placeholder="No KTP..." name="no_ktp"/>
                    <label>Nama   :</label><input class="input-xlarge"  placeholder="Nama..." name="name" />
                    <label>Tempat Lahir :</label><input class="input-xlarge"  placeholder="Tempat Lahir..." name="tempat_lahir" />
                    <label>Tanggal Lahir :</label><input class="input-xlarge" type="date" placeholder="Tanggal Lahir..." name="tgl_lahir"/>
                    <label>Alamat :</label><input class="input-xlarge"  placeholder="Alamat..." name="alamat"/>
                    <label>Kode Pos :</label><input class="input-xlarge"  placeholder="Kode Pos..." name="kode_pos"/>
                    <label>Provinsi :</label><input class="input-xlarge"  placeholder="Provinsi..." name="provinsi"/>
                    <label>Kabupaten :</label><input class="input-xlarge"  placeholder="Kabupaten..." name="kabupaten" />
                    <label>Kota :</label><input class="input-xlarge"  placeholder="Kota..." name="kota"/>
                    <label>No NPWP :</label><input class="input-xlarge"  placeholder="No NPWP..." name="no_npwp"/>
                    <label>Telp :</label><input class="input-xlarge"  placeholder="Tlp..." name="tlp" />
                    <label>Hp :</label><input class="input-xlarge"  placeholder="Hp..." name="hp"/>
                </div>
                <div class="span6">
                    <div class="well">
                        <label>Email :</label><input class="input-xlarge"  placeholder="Email..." name="email"/>
                        <label>Jenis Kelamin :</label>
                        <select class="input-xlarge" name="jenis_kelamin">
                            <option></option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>    
                        <label>Warga Negara :</label><input class="input-xlarge"  placeholder="Warga Negara..." name="warga_negara"/>
                        <label>Hobi :</label><textarea class="input-xlarge" type="text" placeholder="Hobi..." name="hobi"></textarea>
                        <label>Status Anggota :</label>
                        <select class="input-xlarge" name="status">
                            <option></option>
                            <option value="aktif">Aktif</option>
                            <option value="nonaktif">Non Aktif</option>
                        </select>    
                        <label>Jenis Anggota :</label>
                        <select class="input-xlarge" name="jenis_anggota">
                            <option></option>
                            <option value="biasa">Biasa</option>
                            <option value="khusus">Khusus</option>
                        </select>    
                        <div class="control-group">
                            <label class="control-label" for="input01">Status Perkawinan</label>
                            <div class="controls">
                                <select class="input-xlarge" name="id_perkawinan">
                                    <option></option>
                                    <?php foreach ($perkawinan as $prk) : ?>
                                        <option value="<?php echo $prk->id_perkawinan ?>"><?php echo $prk->status_perkawinan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Status Pendidikan</label>
                            <div class="controls">
                                <select class="input-xlarge" name="id_pendidikan">
                                    <option></option>
                                    <?php foreach ($pendidikan as $pen) : ?>
                                        <option value="<?php echo $pen->id_pendidikan ?>"><?php echo $pen->status_pendidikan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <label>Tanggal Masuk :</label><input class="input-xlarge"  type="date" placeholder="Tanggal Masuk..." name="tanggal_masuk"/>
                        <div class="group-option">
                            <button class="btn btn-primary" <?php echo form_submit('submit', 'tambah'); ?><i class="icon-plus icon-white"></i>Tambah</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
