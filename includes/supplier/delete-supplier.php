<?php

$alert_delete = '';

if (isset($_POST['delete_supplier'])) {

    try {

      $data = ['id' => $_GET['supplier_id']];

      $query = "UPDATE supplier SET status=0 WHERE id=:id";
      $function->update($query, $data);

      $alert_delete = '
        <div class="col-12">
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-check"></i>
            Supplier deleted successfully.
          </div>
        </div>
      ';
      
    } catch (Exception $e) {
      $alert_delete = '
        <div class="col-12">
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-exclamation-triangle"></i>
            Something went wrong.
          </div>
        </div>
      ';
    }

}


?>