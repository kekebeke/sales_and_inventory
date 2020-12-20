<?php
  include 'includes/connection.php';
  include 'includes/functions.php';
  include 'includes/add-supplier.php';

?>

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
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="transactions.php">Home</a></li>
                <li class="breadcrumb-item active">Suppliers</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- alert message -->
          <?php echo $alert; ?>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Suppliers
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus"></i>
                  </button>
                </h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="supplierTable" class="table table-bordered table-hover">
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
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Add Supplier Modal -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="card card-info modal-content">
          <div class="card-header">
            <h3 class="card-title">ADD SUPPLIER</h3>
          </div>
          <form method="post" class="form-horizontal">
            <div class="card-body">
              <div class="form-group row">
                <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" name="name" class="form-control" id="inputName" placeholder="Samya" minlength="25"
                    required>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputAddress" class="col-sm-4 col-form-label">Address</label>
                <div class="col-sm-8">
                  <textarea name="address" class="form-control" rows="3" id="inputAddress"
                    placeholder="Block 18 Lot 18 Toril, Davao City" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPhoneNumber" class="col-sm-4 col-form-label">Phone Number</label>
                <div class="col-sm-8">
                  <input type="text" name="phone_number" class="form-control" id="inputPhoneNumber"
                    placeholder="+639786555421" minlength="13" maxlength="13" required>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-default">CANCEL</button>
              <button type="submit" name="submit" class="btn btn-info float-right">ADD</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include 'sections/footer.php' ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>

  <!-- scripts -->
  <?php include 'sections/scripts.php'; ?>

  <script>
    $(function () {
      $("#supplierTable").DataTable();
    });
  </script>
</body>

</html>