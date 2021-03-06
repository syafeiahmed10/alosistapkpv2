<?php

use MongoDB\Operation\Find;

session_start();
include 'function.php';
?>
<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alosistapkp v2</title>
    <meta name="description" content="Alosistapkp v2">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="../../../images/favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../../../assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="menu-title">Data Kawasan Permukiman</li><!-- /.menu-title -->

                    <li>
                        <a href="index.php">Penanganan Kawasan Kumuh</a>
                    </li>
                    <li>
                        <a href="../existing/index.php"> Kawasan Kumuh Existing </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="../../../images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../../../images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">


                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../../../images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Data Kawasan Permukiman</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Kawasan</a></li>
                                    <li class="active">Penanganan Kawasan Kumuh</li>
                                    <!-- <li class="active">Data table</li> -->
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <!-- <strong class="card-title">Data Table</strong> -->
                                <button class="btn btn-success" data-toggle="modal" data-target=".tambahmodal">Tambah Data</button>
                                <form action="insert.php" method="post" enctype="multipart/form-data">
                                    <div class="modal fade tambahmodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h3 class="modal-title" id="exampleModalLabel">Penanganan Kawasan Kumuh</h3>
                                                </div>
                                                <div class="modal-body">


                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">


                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <!-- <input class="form-control" type="text" id="kota" name="kota"> -->

                                                                        <select data-placeholder="Choose a Country..." class="standardSelect form-control" tabindex="1">

                                                                            <?php $kabupaten = $kabupaten->find([]) ?>
                                                                            <?php foreach ($kabupaten as $kab) : ?>

                                                                                <option value="<?php echo $kab->kabupaten ?>"><?php echo $kab->kabupaten ?></option>


                                                                            <?php endforeach; ?>
                                                                        </select>


                                                                    </div>
                                                                    <small class="form-text text-muted">cth. semarang</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="lokasi" name="lokasi">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. rowosari</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="luas_tertangani" name="luas_tertangani">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. 3</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="kecamatan" name="kecamatan">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. tembalang</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="kelurahan" name="kelurahan">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. meteseh</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="rw" name="rw">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. 1</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="rt" name="rt">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. 12</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="lintang" name="lintang">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. 80</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="bujur" name="bujur">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. 70</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="tahun" name="tahun">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. 2021</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="kegiatan" name="kegiatan">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. Pengelolaan Sampah</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="sumber_dana" name="sumber_dana">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. kotaku</small>
                                                                </div>
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                        <input class="form-control" type="text" id="sisa_kumuh" name="sisa_kumuh">
                                                                    </div>
                                                                    <small class="form-text text-muted">cth. 4</small>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>





                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>





                            </div>
                            <div class="card-body">

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kota</th>
                                            <th>Lokasi</th>
                                            <th>Luas Tertangani</th>
                                            <th>Kecamatan</th>
                                            <th>Kelurahan</th>
                                            <th>RW</th>
                                            <th>RT</th>
                                            <th>Lintang</th>
                                            <th>Bujur</th>
                                            <th>Tahun</th>
                                            <th>Kegiatan</th>
                                            <th>Sumber Dana</th>
                                            <th>Sisa Kumuh</th>

                                            <th></th>
                                            <!-- <th></th> -->



                                        </tr>
                                    </thead>



                                    <tbody>
                                        <?php $datas = $collection->find([], ['sort' => ['_id' => -1]]); ?>

                                        <?php $i = 1 ?>
                                        <?php foreach ($datas as $data) : ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $data->kota ?></td>
                                                <td><?php echo $data->nama_lokasi ?></td>
                                                <td><?php echo $data->luas_tertangani ?></td>
                                                <td><?php echo $data->lingkup_administratif->kecamatan ?></td>
                                                <td><?php echo $data->lingkup_administratif->kelurahan ?></td>
                                                <td><?php echo $data->lingkup_administratif->RW ?></td>
                                                <td><?php echo $data->lingkup_administratif->RT ?></td>
                                                <td><?php echo $data->koordinat->lintang ?></td>
                                                <td><?php echo $data->koordinat->bujur ?></td>
                                                <td><?php echo $data->tahun ?></td>
                                                <td><?php echo $data->jenis_kegiatan ?></td>
                                                <td><?php echo $data->sumber_dana ?></td>
                                                <td><?php echo $data->sisa_kumuh ?></td>


                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="fa fa-pencil btn btn-warning btn-sm baris" data-toggle="modal" data-target=".editmodal<?php echo $data->_id ?>"></button>

                                                        <!-- form EDIT -->
                                                        <form action="update.php" method="post" enctype="multipart/form-data">
                                                            <div class="modal fade editmodal<?php echo $data->_id ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                            <h3 class="modal-title" id="exampleModalLabel">Penanganan Kawasan Kumuh</h3>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <?php
                                                                            $id = $data->_id;

                                                                            $dataedit = $collection->findOne(['_id' => $id]);
                                                                            ?>

                                                                            <input type="hidden" name="id_edit" value="<?php echo $dataedit->_id; ?>">

                                                                            <div class="container-fluid">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="kota" name="kota" value="<?php echo $dataedit->kota ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. semarang</small>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class=" form-control-label">Lokasi</label>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="lokasi" name="lokasi" value="<?php echo $dataedit->nama_lokasi ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. rowosari</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="luas_tertangani" name="luas_tertangani" value="<?php echo $dataedit->luas_tertangani ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. 3</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="kecamatan" name="kecamatan" value="<?php echo $dataedit->lingkup_administratif->kecamatan ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. tembalang</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="kelurahan" name="kelurahan" value="<?php echo $dataedit->lingkup_administratif->kelurahan ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. meteseh</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="rw" name="rw" value="<?php echo $dataedit->lingkup_administratif->RW ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. 1</small>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="rt" name="rt" value="<?php echo $dataedit->lingkup_administratif->RT ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. 12</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="lintang" name="lintang" value="<?php echo $dataedit->koordinat->lintang ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. 80</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="bujur" name="bujur" value="<?php echo $dataedit->koordinat->bujur ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. 70</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="tahun" name="tahun" value="<?php echo $dataedit->tahun ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. 2021</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="kegiatan" name="kegiatan" value="<?php echo $dataedit->jenis_kegiatan ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. Pengelolaan Sampah</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="sumber_dana" name="sumber_dana" value="<?php echo $dataedit->sumber_dana ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. kotaku</small>
                                                                                        </div>
                                                                                        <div class="form-group">

                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                                <input class="form-control" type="text" id="sisa_kumuh" name="sisa_kumuh" value="<?php echo $dataedit->sisa_kumuh ?>">
                                                                                            </div>
                                                                                            <small class="form-text text-muted">cth. 4</small>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>





                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit">TES</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                        <!-- form EDIT -->
                                                        <a href='delete.php?id=<?php echo $data->_id ?>'><button type="button" class="fa fa-trash-o btn btn-danger btn-sm baris"></button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../../../assets/js/main.js"></script>


    <script src="../../../assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../../../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../../../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../../../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../../../assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../../../assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../../../assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../../../assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../../../assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../../../assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $("select[name='kota']").change(function() {
            var kotaID = $(this).val();


            if (kotaID) {


                $.ajax({
                    url: "ajaxpro.php",
                    dataType: 'Json',
                    data: {
                        'id': kotaID
                    },
                    success: function(data) {
                        $('select[name="kecamatan"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="kecamatan"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });


            } else {
                $('select[name="kecamatan"]').empty();
            }
        });
    </script>

</body>

</html>