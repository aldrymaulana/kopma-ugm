<div class="span10">
    <div class="row-fluid">
        <div class="span6">
            <div class="row-fluid">
                <h2>Tambah Simpanan Pokok</h2>
                <?php echo form_open('admin/simpanan_pokok_tambah', 'class="well"') ?>      
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
                    <button class="btn btn-primary"><i class="icon-plus icon-white"></i> Tambah</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
