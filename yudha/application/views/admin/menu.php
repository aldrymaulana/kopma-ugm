    <div class="span2">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Menu Utama</li>
                <li class=""><?php echo anchor('admin', '<i class="icon-home"></i>Home'); ?></li>
                <li class=""><?php echo anchor('admin/anggota', '<i class="icon-list-alt"></i>Daftar Anggota'); ?></li>
                <li class=""><?php echo anchor('admin/simpanan', '<i class="icon-list-alt"></i>Daftar Simpanan'); ?></li>
                <li class=""><?php echo anchor('admin/pinjaman', '<i class="icon-list-alt"></i>Daftar Pinjaman') ?></li>
                <li class=""><?php echo anchor('admin/angsuran', '<i class="icon-list-alt"></i>Daftar Angsuran') ?></li>
                <li class="nav-header">Data<br></li>
                <li class=""><?php echo anchor('admin/profile', '<i class="icon-list-alt"></i>Profile') ?></li>
                <li class=""><?php echo anchor('admin/user', '<i class="icon-list-alt"></i>Daftar User') ?></li>
                <li class=""><?php echo anchor('admin/simpanan_wajib', '<i class="icon-list-alt"></i>Simpanan Wajib') ?></li>
                <li class=""><?php echo anchor('admin/simpanan_pokok', '<i class="icon-list-alt"></i>Simpanan Pokok') ?></li>                
                <li class="nav-header">Laporan</li>
                <li class=""><?php echo anchor('admin/laporan_anggota', '<i class="icon-list-alt"></i>Laporan Anggota') ?></li>
                <li class=""><?php echo anchor('admin/Laporan_simpanan', '<i class="icon-list-alt"></i>Laporan Simpanan') ?></li>
                <li class=""><?php echo anchor('admin/Laporan_pinjaman', '<i class="icon-list-alt"></i>Laporan Pinjaman') ?></li>
                <li class=""><?php echo anchor('admin/Laporan_angsuran', '<i class="icon-list-alt"></i>Laporan Angsuran') ?></li>
                <li class="nav-header">user management</li>
                <li class=""><?php echo anchor('home/logout', 'Logout', array('onclick' => "return confirm('Anda yakin akan logout?')")); ?></li>
            </ul>
        </div>
    </div>