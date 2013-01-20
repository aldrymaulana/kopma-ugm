<div class="span2">
        <div class="well sidebar-nav">
                <ul class="nav nav-list">
                <li class="nav-header">Menu Utama</li>
                <li class=""><?php echo anchor('petugas/home', '<i class="icon-home"></i>Home'); ?></li>
                <li class=""><?php echo anchor('petugas/anggota', '<i class="icon-list-alt"></i>Daftar Anggota'); ?></li>
                <li class=""><?php echo anchor('petugas/simpanan', '<i class="icon-list-alt"></i>Daftar Simpanan'); ?></li>
                <li class=""><?php echo anchor('petugas/pinjaman', '<i class="icon-list-alt"></i>Daftar Pinjaman') ?></li>
                <li class=""><?php echo anchor('petugas/angsuran', '<i class="icon-list-alt"></i>Daftar Angsuran') ?></li>
                <li class="nav-header">Data<br></li>
                <li class=""><?php echo anchor('petugas/profile', '<i class="icon-list-alt"></i>Profile ') ?></li>
                <li class=""><?php echo anchor('petugas/simpanan_wajib', '<i class="icon-list-alt"></i>Simpanan Wajib') ?></li>
                <li class=""><?php echo anchor('petugas/simpanan_pokok', '<i class="icon-list-alt"></i>Simpanan Pokok') ?></li>                
                <li class="nav-header">user management</li>
                <li class=""><?php echo anchor('home/logout','Logout',  array('onclick'=>"return confirm('Anda yakin akan logout?')")); ?></li>
            </ul>
        </div>
    </div>
    