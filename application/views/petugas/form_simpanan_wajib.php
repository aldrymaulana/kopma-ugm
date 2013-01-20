<div class="span10">
    <div class="row-fluid">
        <div class="span6">
            <div class="row-fluid">
                <h2>Tambah Simpanan Wajib</h2>
                <?php echo form_open('admin/simpanan_wajib_tambah', 'class="well"') ?>      
                <div class="group-option">
                    <label>Nia</label>
                    <input class="input-xlarge"  value="<?php echo $nia[0]->nia ?>" name="nia" readonly>
                </div>
                <div class="group-option">
                    <label>Nama</label>
                    <input class="input-xlarge"  value="<?php echo $nia[0]->nama ?>" name="nama" readonly>
                </div>
                <div class="group-option">
                    <label>Jenis Simpanan</label>
                    <input class="input-xlarge"  value="<?php echo $simpanan[0]->id_jenis_simpanan ?>" name="simpanan" hidden>
                    <input class="input-xlarge"  value="<?php echo $simpanan[0]->jenis_simpanan ?>" readonly>
                </div>
                <div class="group-option">
                    <label>Harga</label>
                    <input class="input-xlarge"  value="Rp <?php echo $simpanan[0]->value ?>" readonly>
                </div>
                <div class="group-option">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span3">
                                <label class="checkbox">
                                    <input type="checkbox" value="01" name="bln[]"> Januari
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="02"name="bln[]"> Februari
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="03" name="bln[]"> Maret
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="04" name="bln[]"> April
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="05" name="bln[]"> Mei
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="06" name="bln[]"> Juni
                                </label>
                            </div>
                            <div class="span3">
                                <label class="checkbox">
                                    <input type="checkbox" value="07" name="bln[]"> Juli
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="08" name="bln[]"> Agustus
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="09" name="bln[]"> September
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="10" name="bln[]"> Oktober
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="11" name="bln[]"> November
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="12" name="bln[]"> Desember
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group-option">
                    <button class="btn btn-primary"><i class="icon-plus icon-white"></i> Tambah</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
