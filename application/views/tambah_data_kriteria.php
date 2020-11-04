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
    <title>Tambah Data Kriteria</title>

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
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                    
                    </div>
                </div>
            </div>
            
            </nav>
			</header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
       <!--  <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            </div>
        </aside> -->
		<!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                        <div class="row">
                        <div class="col-lg-12">
						
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Isikan data dengan benar</strong>
									
                                    <div class="card-body card-block">
                                        <form action="<?php echo base_url('index.php/admin/tambah_kriteria_action')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                           <!--  <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kode</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                                                    </div>
                                            </div> -->
											 <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kriteria</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="kriteria" placeholder="" class="form-control">
                                                    </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Nilai Atribut</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="atribut" id="select" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    </select>
                                                </div>
                                            </div>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Bobot</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input type="text" id="text-input" name="bobot" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
										<button type="cancel" class="btn btn-danger btn-sm">
                                            <a href="<?php echo base_url('index.php/admin/data_kriteria')?>"><i class="fa fa-ban"></i> Kembali</a>
                                        </button>
                                    </div>
                                    </form>
                                </div>
                        </div>
                        </div>
						</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
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
