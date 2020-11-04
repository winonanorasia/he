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
    <title>Edit Data Alternatif</title>
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


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                        <div class="row">
                        <div class="col-lg-12">
                        
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Isikan data dengan benar</strong>
                                    
                                    <div class="card-body card-block">
                                        <?php
                                        foreach ($data as $key) {
                                        ?>
                                        <form action="<?php echo base_url('index.php/admin/edit_alternatif_action/').$key->id_alternatif?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" value="<?php echo $key->nama_alternatif;?>" name="nama" placeholder="" class="form-control">
                                                    </div>
                                            </div>
                                             <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <?php
                                                    $temp = $key->gender;
                                                    ?>
                                                    <input type="radio" name="gender" value="Laki-laki" <?php if($temp=='Laki-laki'){echo "checked";}?>>
                                                    <label>Laki-laki</label>
                                                    <input type="radio" name="gender" value="Perempuan" <?php if($temp=='Perempuan'){echo "checked";}?>>
                                                    <label>Perempuan</label>
                                                </div>
                                            </div>
                                           <!--  <?php
                                            foreach ($kriteria as $key) {?>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label"><?php echo $key->nama_kriteria; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="Jumlah Danun" id="select" class="form-control" required>
                                                        <option value="">Select</option>
                                                        <?php
                                                        $subkriteria = $this->saw_model->ambil_data_where('subkriteria','nm_kriteria',$key->nama_kriteria);
                                                        foreach ($subkriteria as $data) {
                                                            echo "<option value='$data->nilai_sub'>$data->keterangan</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                 </div>
                                            <?php
                                            }
                                            ?> -->
                                            
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="tt" id="select" class="form-control" required>
                                                        <option value="<?php echo $key->TT;?>"><?php echo $key->TT;?></option>
                                                        <?php
                                                        $subkriteria = $this->saw_model->ambil_data_where('subkriteria','nm_kriteria','Tempat Tinggal');
                                                        foreach ($subkriteria as $data) {
                                                            echo "<option value='$data->keterangan'>$data->keterangan</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                 </div>
                                            
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Asal Sekolah</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="as" id="select" class="form-control">
                                                        <option value="<?php echo $key->AS;?>"><?php echo $key->AS;?></option>
                                                        <?php
                                                        $subkriteria = $this->saw_model->ambil_data_where('subkriteria','nm_kriteria','Asal Sekolah');
                                                        foreach ($subkriteria as $data) {
                                                            echo "<option value='$data->keterangan'>$data->keterangan</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Jumlah Danun</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="jd" id="select" class="form-control">
                                                        <option value="<?php echo $key->JD;?>"><?php echo $key->JD;?></option>
                                                        <?php
                                                        $subkriteria = $this->saw_model->ambil_data_where('subkriteria','nm_kriteria','Jumlah Danun');
                                                        foreach ($subkriteria as $data) {
                                                            echo "<option value='$data->keterangan'>$data->keterangan</option>";
                                                        }
                                                        ?>
                                                    </select>
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
                                            <a href="<?php echo base_url('index.php/admin/data_alternatif')?>"><i class="fa fa-ban"></i> Batal</a>
                                        </button>
                                    </div>
                                    </form>
                                    <?php
                                }
                                ?>
                                   
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
