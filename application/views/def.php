<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SISTEM INFORMASI SIMPAN PINJAM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="sistem informasi administrasi kependudukan">
        <meta name="author" content="tugucamp">
        <!-- Le styles -->
        <link href='http://localhost/yudha/assets/css/bootstrap.css' rel='stylesheet' type='text/css'/>        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href='http://localhost/yudha/assets/css/bootstrap-responsive.css' rel='stylesheet' type='text/css'/><link href='http://localhost/yudha/assets/css/jquery.ui.datepicker.css' rel='stylesheet' type='text/css'/>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link href='http://localhost/yudha/assets/ico/favicon.ico' rel='shortcut icon'/><link rel = 'apple-touch-icon-precomposed' sizes = '144x144' href = 'http://localhost/yudha/assets/ico/apple-touch-icon-144-precomposed.png'><link rel = 'apple-touch-icon-precomposed' sizes = '114x114' href = 'http://localhost/yudha/assets/ico/apple-touch-icon-114-precomposed.png'><link rel = 'apple-touch-icon-precomposed' sizes = '72x72' href = 'http://localhost/yudha/assets/ico/apple-touch-icon-72-precomposed.png'><link rel = 'apple-touch-icon-precomposed' href = 'http://localhost/yudha/assets/ico/apple-touch-icon-57-precomposed.png'>    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">Menu Utama</li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/home"><i class="icon-home"></i>Home</a></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/anggota"><i class="icon-list-alt"></i>Daftar Anggota</a></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/simpanan"><i class="icon-list-alt"></i>Daftar Simpanan</a></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/pinjaman"><i class="icon-list-alt"></i>Daftar Pinjaman</a></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/angsuran"><i class="icon-list-alt"></i>Daftar Angsuran</a></li>
                            <li class="nav-header">Data<br></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/user"><i class="icon-list-alt"></i>Daftar User</a></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/simpanan_wajib"><i class="icon-list-alt"></i>Simpanan Wajib</a></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/simpanan_pokok"><i class="icon-list-alt"></i>Simpanan Pokok</a></li>                
                            <li class="nav-header">Laporan</li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/laporan_anggota"><i class="icon-list-alt"></i>Laporan Anggota</a></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/Laporan_simpanan"><i class="icon-list-alt"></i>Laporan Simpanan</a></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/Laporan_pinjaman"><i class="icon-list-alt"></i>Laporan Pinjaman</a></li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/Laporan_angsuran"><i class="icon-list-alt"></i>Laporan Angsuran</a></li>
                            <li class="nav-header">user management</li>
                            <li class=""><a href="http://localhost/yudha/index.php/admin/logout" onclick="return confirm('Anda yakin akan logout?')">Logout</a></li>
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <div class="span10">
                    <h2>Data Anggota</h2>
                    <form class="form-search">
                        <input type="text" placeholder="Masukkan Nama" class="input-medium search-query">
                        <button type="submit" class="btn">Search</button>
                    </form>   
                    <form action="http://localhost/yudha/index.php/admin/anggota_tambah" tambah anggota method="post">    <button class="btn btn-primary" type="submit"><i class="icon-plus icon-white"></i> Tambah Anggota</button>
                    </form>    <table class="table table-striped table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>Nia</th>
                                <th>No KTP</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Hp</th>
                                <th>status</th>
                                <th>Jenis Anggota</th>
                                <th>tanggal masuk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="http://localhost/yudha/index.php/admin/detail_anggota/3401">3401</a></td>
                                <td>14872948155</td>
                                <td>yudha wirawawan sakti </td>
                                <td>gancahan V RT  </td>
                                <td>087778726364</td>
                                <td>aktif</td>
                                <td>biasa</td>
                                <td>2012-12-28 09:00:00</td>
                                <td>
                                    <a href="http://localhost/yudha/index.php/admin/anggota_edit/3401" alt="Edit"><i class="icon-pencil tool"></i></a> | <a href="http://localhost/yudha/index.php/admin/anggota_hapus/3401" alt="Hapus"><i class="icon-remove tool"></i></a>                    </td>
                            </tr>
                            <tr>
                                <td><a href="http://localhost/yudha/index.php/admin/detail_anggota/3402">3402</a></td>
                                <td>14872948155</td>
                                <td>Esti anastasia putri</td>
                                <td>Puluhan no 8 kemusuk</td>
                                <td>081456273681</td>
                                <td>aktif</td>
                                <td>biasa</td>
                                <td>2012-12-28 09:00:00</td>
                                <td>
                                    <a href="http://localhost/yudha/index.php/admin/anggota_edit/3402" alt="Edit"><i class="icon-pencil tool"></i></a> | <a href="http://localhost/yudha/index.php/admin/anggota_hapus/3402" alt="Hapus"><i class="icon-remove tool"></i></a>                    </td>
                            </tr>
                            <tr>
                                <td><a href="http://localhost/yudha/index.php/admin/detail_anggota/3403">3403</a></td>
                                <td>091383764780</td>
                                <td>Budi Utomo</td>
                                <td>Jalan Pemalang no 3 RT 4</td>
                                <td>087778726364</td>
                                <td>aktif</td>
                                <td>biasa</td>
                                <td>2012-12-28 09:00:00</td>
                                <td>
                                    <a href="http://localhost/yudha/index.php/admin/anggota_edit/3403" alt="Edit"><i class="icon-pencil tool"></i></a> | <a href="http://localhost/yudha/index.php/admin/anggota_hapus/3403" alt="Hapus"><i class="icon-remove tool"></i></a>                    </td>
                            </tr>
                            <tr>
                                <td><a href="http://localhost/yudha/index.php/admin/detail_anggota/3404">3404</a></td>
                                <td>0988237476</td>
                                <td>Maudy Ayunda</td>
                                <td>Jalan Patimurra</td>
                                <td>085643675632</td>
                                <td>aktif</td>
                                <td>khusus</td>
                                <td>2013-01-05 09:00:00</td>
                                <td>
                                    <a href="http://localhost/yudha/index.php/admin/anggota_edit/3404" alt="Edit"><i class="icon-pencil tool"></i></a> | <a href="http://localhost/yudha/index.php/admin/anggota_hapus/3404" alt="Hapus"><i class="icon-remove tool"></i></a>                    </td>
                            </tr>
                            <tr>
                                <td><a href="http://localhost/yudha/index.php/admin/detail_anggota/3405">3405</a></td>
                                <td>148729481453</td>
                                <td>Faundry Amrul</td>
                                <td>Minomartani cuuy</td>
                                <td>087778726356</td>
                                <td>aktif</td>
                                <td>biasa</td>
                                <td>2013-01-10 20:03:30</td>
                                <td>
                                    <a href="http://localhost/yudha/index.php/admin/anggota_edit/3405" alt="Edit"><i class="icon-pencil tool"></i></a> | <a href="http://localhost/yudha/index.php/admin/anggota_hapus/3405" alt="Hapus"><i class="icon-remove tool"></i></a>                    </td>
                            </tr>
                            <tr>
                                <td><a href="http://localhost/yudha/index.php/admin/detail_anggota/3406">3406</a></td>
                                <td>1487294812425</td>
                                <td>Alexander Parto</td>
                                <td>Jalan Monjalio</td>
                                <td>087778726322</td>
                                <td>aktif</td>
                                <td>biasa</td>
                                <td>2013-01-10 20:05:52</td>
                                <td>
                                    <a href="http://localhost/yudha/index.php/admin/anggota_edit/3406" alt="Edit"><i class="icon-pencil tool"></i></a> | <a href="http://localhost/yudha/index.php/admin/anggota_hapus/3406" alt="Hapus"><i class="icon-remove tool"></i></a>                    </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/row-->
            </div>
        </div>
        <div class="container-fluid">
            <footer>
                <center><p class="pull-center">Created by &copy; <a href="http://www.twitter.com/yonkz28" target="_blank">Yudha Wirawan Sakti</a> 2013</p></center>
                <center><p class="pull-center">Powered by: <a href="https://twitter.com/twbootstrap">Bootstrap</a></p></center>
            </footer>
        </div>
    </body>
</html>
