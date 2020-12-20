<?php

  include 'includes/connection.php';
  include 'includes/functions.php';

session_start(); ?>

<!DOCTYPE html>
<html>

<head>

  <title>Admin | Suppliers</title>

  <!-- metas & links -->
  <?php include 'sections/links.php'; ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include 'sections/navbar.php' ?>

    <!-- Main Sidebar Container -->
    <?php include 'sections/sidebar.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Suppliers</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="transactions.php">Home</a></li>
                <li class="breadcrumb-item active">Suppliers</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Suppliers
                  <button type="button" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus"></i>
                  </button>
                </h3>

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php

                  try {
                      $query = "SELECT * FROM supplier WHERE status != 0";
                      $rows = $function->selectAll($query);
                      foreach ($rows as $row) { ?>

                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td class="text-center">
                          <button class="btn btn-info btn-xs">
                            <i class="fa fa-info fa-fw"></i>
                          </button>
                          <button class="btn btn-success btn-xs">
                            <i class="fa fa-pencil-alt fa-fw"></i>
                          </button>
                          <button class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-alt fa-fw"></i>
                          </button>
                        </td>
                      </tr>

                      <?php
                      }
                  } catch (PDOException $e) {
                      echo "There is some problem in connection: " . $e->getMessage();
                  } ?>

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- footer -->
    <?php include 'sections/footer.php' ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- scripts -->
  <?php include 'sections/scripts.php'; ?>

  <script>
    $(function () {
      $("#example1").DataTable();
    });
  </script>
</body>

</html>