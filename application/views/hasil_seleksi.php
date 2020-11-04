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
    <title>Hasil Seleksi</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assets/css/font-face.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css')?>"  rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/vendor/animsition/animsition.min.css')?>"  rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>"  rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/wow/animate.css')?>"  rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/slick/slick.css')?>"  rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/select2/select2.min.css')?>"  rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')?>"rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/css/theme.css')?>"  rel="stylesheet" media="all">

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
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Nilai Alternatif</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA</th>
                                                <th>JENIS KELAMIN</th>
                                                <th>TEMPAT TINGGAL</th>
                                                <th>ASAL SEKOLAH</th>
                                                <th>JUMLAH DANUN</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;
                                                foreach ($data_alternatif as $key) {
                                                    echo "<tr>";
                                                    echo "<td>".$no++."</td>";
                                                    echo "<td>".$key->nama_alternatif."</td>";
                                                    echo "<td>".$key->gender."</td>";
                                                    echo "<td>".$key->TT."</td>";
                                                    echo "<td>".$key->AS."</td>";
                                                    echo "<td>".$key->JD."</td>";
                                                    echo "</tr>";}?>
                                        </tbody>
                                         
                                    </table>
                                </div>
                            </div>
							</div>
							<div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Konversi</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <?php
                                        $list_min_tt = array();
                                        $list_min_as = array();
                                        $list_max_jd = array();
                                    ?>
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA</th>
                                                <th>TEMPAT TINGGAL</th>
                                                <th>ASAL SEKOLAH</th>
                                                <th>JUMLAH DANUN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                $no=1;
                                                foreach ($data_alternatif as $key) {
                                                    echo "<tr>";
                                                    echo "<td>".$no++."</td>";
                                                    echo "<td>".$key->nama_alternatif."</td>";
                                                    $tempat=$this->saw_model->ambil_data_where2('subkriteria','keterangan',$key->TT,'nm_kriteria','Tempat Tinggal');
                                                    foreach ($tempat as $tt) {
                                                         echo "<td>".$tt->nilai_sub."</td>";
                                                         array_push($list_min_tt, $tt->nilai_sub); #digunakan untuk normalisasi

                                                    }
                                                    $asal=$this->saw_model->ambil_data_where2('subkriteria','keterangan',$key->AS,'nm_kriteria','Asal Sekolah');
                                                    foreach ($asal as $as) {
                                                         echo "<td>".$as->nilai_sub."</td>";
                                                         array_push($list_min_as, $as->nilai_sub);
                                                    }
                                                    $danun=$this->saw_model->ambil_data_where2('subkriteria','keterangan',$key->JD,'nm_kriteria','Jumlah Danun');
                                                    foreach ($danun as $jd) {
                                                         echo "<td>".$jd->nilai_sub."</td>";
                                                         array_push($list_max_jd, $jd->nilai_sub);
                                                    }
                                                    echo "</tr>";}?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							</div>
							<div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Normalisasi</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                         <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA</th>
                                                <th>TEMPAT TINGGAL</th>
                                                <th>ASAL SEKOLAH</th>
                                                <th>JUMLAH DANUN</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                             if(!empty($list_min_tt)){
                                                 $nilai_min_tt = min($list_min_tt);
                                             }
                                             if(!empty($list_min_as)){
                                                $nilai_min_as = min($list_min_as);
                                             }
                                             if(!empty($list_max_jd)){
                                                $nilai_max_jd = max($list_max_jd);
                                             }
                                             /*$nilai_min_tt = min($list_min_tt);
                                             $nilai_min_as = min($list_min_as);
                                             $nilai_max_jd = max($list_max_jd);*/
                                             $norma_tt=array();
                                             $norma_as=array();
                                             $norma_jd=array();

                                                $no=1;
                                                foreach ($data_alternatif as $key) {
                                                    echo "<tr>";
                                                    echo "<td>".$no++."</td>";
                                                    echo "<td>".$key->nama_alternatif."</td>";

                                                    #mencari nilai_sub pada kriteria tempat tinggal
                                                    $tempat=$this->saw_model->ambil_data_where2('subkriteria','keterangan',$key->TT,'nm_kriteria','Tempat Tinggal');
                                                    $nilai_tt = 0;
                                                    foreach ($tempat as $tt) {
                                                        $nilai_tt = $tt->nilai_sub;
                                                    }
                                                    #mencari hasil
                                                    $hasil_tt = $nilai_tt/$nilai_min_tt;
                                                    array_push($norma_tt, $hasil_tt);
                                                    echo "<td>".$hasil_tt."</td>";



                                                    #mencari nilai_sub pada kriteria asal sekolah
                                                    $asal=$this->saw_model->ambil_data_where2('subkriteria','keterangan',$key->AS,'nm_kriteria','Asal Sekolah');
                                                    $nilai_as = 0;
                                                    foreach ($asal as $as) {
                                                        $nilai_as = $as->nilai_sub;    
                                                    }
                                                     #mencari hasil
                                                    $hasil_as = $nilai_as/$nilai_min_as;
                                                    array_push($norma_as, $hasil_as);
                                                    echo "<td>".$hasil_as."</td>";



                                                    #mencari nilai_sub pada kriteria jumlah danun
                                                    $danun=$this->saw_model->ambil_data_where2('subkriteria','keterangan',$key->JD,'nm_kriteria','Jumlah Danun');
                                                    $nilai_jd = 0;
                                                    foreach ($danun as $jd) {
                                                         $nilai_jd = $jd->nilai_sub;
                                                    }
                                                    #mencari hasil
                                                    $hasil_jd = $nilai_jd/$nilai_max_jd;
                                                    array_push($norma_jd, $hasil_jd);
                                                    echo "<td>".$hasil_jd."</td>";
                                                    echo "</tr>";}?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							</div>
							<div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Hasil</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                         <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA</th>    
                                                <th>TEMPAT TINGGAL</th>
                                                <th>ASAL SEKOLAH</th>
                                                <th>JUMLAH DANUN</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            #mencari nilai bobot
                                             $bobot_tt=0;
                                             $bobot_as=0;
                                             $bobot_jd=0;
                                             $b_tt = $this->saw_model->ambil_data_where('kriteria','nama_kriteria','Tempat Tinggal');
                                             $b_as = $this->saw_model->ambil_data_where('kriteria','nama_kriteria','Asal Sekolah');
                                             $b_jd = $this->saw_model->ambil_data_where('kriteria','nama_kriteria','Jumlah Danun');
                                             foreach ($b_tt as $k) {
                                                 $bobot_tt = $k->bobot_kriteria;
                                             }
                                             foreach ($b_as as $a) {
                                                 $bobot_as = $a->bobot_kriteria;
                                             }
                                             foreach ($b_jd as $j) {
                                                 $bobot_jd = $j->bobot_kriteria;
                                             }

                                                $no=1;
                                                $index=0;
                                                foreach ($data_alternatif as $key) {
                                                    $total=0;
                                                    echo "<tr>";
                                                    echo "<td>".$no++."</td>";
                                                    echo "<td>".$key->nama_alternatif."</td>";

                                                   

                                                    $nilai_TT=$norma_tt[$index];
                                                    $ha_tt = $nilai_TT*$bobot_tt;
                                                    echo "<td>".$ha_tt."</td>";



                                                    $nilai_AS=$norma_as[$index];
                                                    $ha_as = $nilai_AS*$bobot_as;
                                                    echo "<td>".$ha_as."</td>";



                                                    $nilai_JD=$norma_jd[$index];
                                                    $ha_jd = $nilai_JD*$bobot_jd;
                                                    echo "<td>".$ha_jd."</td>";

                                                    $total = $ha_tt+$ha_as+$ha_jd;
                                                    echo "<td>".$total."</td>";
                                                    echo "</tr>";
                                                    $index++;
                                                }?>
                                        </tbody>
                                    </table>
                                </div>
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
