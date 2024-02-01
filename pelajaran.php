
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Siakad - Pelajaran</title>
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
            <h1> Pelajaran </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jadwal Pelajaran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pelajaran</th>
             
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Tahsin Alqur'an
                    </td>
          
              
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Nahwu Sharaf I
                    </td>
             
                    
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Nahwu Sharaf II
                    </td>
           
                    
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Nahwu Sharaf III
                    </td>
                   
                
                  </tbody>
                  
                </table>
            
  
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