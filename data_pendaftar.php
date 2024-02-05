<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siakad - Data Pendaftar</title>
    <link rel="shortcut icon" href="dist/img/logoasrama2.png" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- navbar -->
        <?php include_once('navbar.php') ?>

        <!-- Sidebar -->
        <?php include_once('sidebar.php') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> Data Pendaftar </h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Data Pendaftar</h2>
                        <div class="float-sm-right">
                            <a class="btn btn-outline-dark mb-1" href="pemesanan.php">Tambah Pendaftar </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>nama pendaftar</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Alamat</th>
                                    <th>No Hp</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php
                                        //1. membuat koneksi
                                        include_once("koneksi.php");
                                        //2. membuat query untuk menampilkan seluruh data
                                        $qry = "SELECT * FROM pemesanan";
                                        //3. menjalankan query
                                        $tampil = mysqli_query($con, $qry);
                                        //4. menampilkan data menggunakan looping foreach
                                        $nomor = 1;
                                        foreach ($tampil as $data) {
                                        ?> -->
                                <tr>
                                    <th scope="row"><?php echo $nomor++ ?></th>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['barang'] ?></td>
                                    <td><?php echo $data['tanggal'] ?></td>
                                    <td><?php echo $data['alamat'] ?></td>
                                    <td><?php echo $data['hp'] ?></td>
                                    <td><?php echo $data['total'] ?></td>
                                    <td><?php echo $data['pengantar'] ?></td>
                                    <!-- Modal -->
                                    <td>
                                        <a href="edit_pemesanan.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-solid fa-pen"></i></a>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id'] ?>" class="btn btn-sm btn-danger "><i class="fa fa-solid fa-trash"></i></button>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="hapus<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Menghapus Data</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    apa benar data jurusan <b><?php echo $data['nama'] ?></b> ingin dihapus?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                    <a href="hapus_pemesanan.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Ya</a>
                                                </div>
                                            </div>
                                        </div>

                                </tr>
                                <!-- <?php
                                        }
                                        ?> -->

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>