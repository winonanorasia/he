<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>SUBKRITERIA</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assets/css/font-face.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/css/theme.css')?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <!-- <a class="logo" href="index.html">
                            <img src="<?php echo base_url('assets/images/icon/saw2.png')?>" alt="CoolAdmin" />
                        </a> -->
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
           <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a href="<?php echo base_url('index.php/admin/home')?>">
                                <i class="fas fa-tachometer-alt"></i>HOME</a>
                        </li> 
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>DATA</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/data_kriteria')?>">
                                        <i class="fas fa-chart-bar"></i>DATA KRITERIA</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/data_subkriteria')?>">
                                        <i class="fas fa-table"></i>DATA SUBKRITERIA</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/data_alternatif')?>">
                                        <i class="fas fa-table"></i>DATA ALTERNATIF</a>
                                </li>
                                
                                 <li>
                                    <a href="<?php echo base_url('index.php/admin/hasil_seleksi')?>">
                                        <i class="fas fa-table"></i>HASIL SELEKSI</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="<?php echo base_url('index.php/login/logout')?>">
                                <i class="fa fa-ban"></i>LOGOUT</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
			</header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url('assets/images/icon/saw2.png')?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a href="<?php echo base_url('index.php/admin/home')?>">
                                <i class="fas fa-tachometer-alt"></i>HOME</a>
                        </li>
						<li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>DATA</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
								<li>
									<a href="<?php echo base_url('index.php/admin/data_kriteria')?>">
										<i class="fas fa-chart-bar"></i>DATA KRITERIA</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/admin/data_subkriteria')?>">
										<i class="fas fa-chart-bar"></i>DATA SUBKRITERIA</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/admin/data_alternatif')?>">
										<i class="fas fa-table"></i>DATA ALTERNATIF</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/admin/hasil_seleksi')?>">
										<i class="fas fa-table"></i>HASIL SELEKSI</a>
								</li>
							</ul>
						</li>
                         <li class="has-sub">
                            <a href="<?php echo base_url('index.php/login/logout')?>">
                                <i class="fas fa-tachometer-alt"></i>LOGOUT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
		<!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="col-md-12">
                            <h3 class="title-1 m-b-10">PENDAFTARAN PENERIMAAN SISWA BARU</h3>
                            </div>
                            </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">DATA SUBKRITERIA</h3>
                                <div class="table-data__tool">
                                    <!--<div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>-->
                                    <div class="table-data__tool-right">
                                        <a href="<?php echo base_url('index.php/admin/tambah_subkriteria')?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
					
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA KRITERIA</th>
                                                <th>NAMA SUBKRITERIA</th>
                                                <th>NILAI</th>
                                                <th>KETERANGAN</th>
												<th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;
                                                foreach ($data_subkriteria as $key) {
                                                    echo "<tr>";
                                                    echo "<td>".$no++."</td>";
                                                    echo "<td>".$key->nm_kriteria."</td>";
                                                    echo "<td>".$key->subkriteria."</td>";
                                                    echo "<td>".$key->nilai_sub."</td>";
                                                    echo "<td>".$key->keterangan."</td>";
                                                ?>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo base_url('index.php/admin/edit_subkriteria/').$key->id_subkriteria;?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('index.php/admin/hapus_subkriteria/').$key->id_subkriteria;?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                        </div>
						</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 SPK SAW.By <a href="https://colorlib.com">Sistem Pendukung Keputusan</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/vendor/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/vendor/bootstrap-4.1/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets/vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/wow/wow.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/select2/select2.min.js')?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>

</body>

</html>
<!-- end document-->
