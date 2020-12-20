<?php

$alert_update = '';

if (isset($_POST['update_supplier'])) {

    try {

      $data = [
        'id' => $_GET['supplier_id'],
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'phone_number' => $_POST['phone_number']
      ];
    
      $query = "UPDATE supplier SET name=:name, address =:address, phone_number=:phone_number WHERE id=:id";
      $function->update($query, $data);

      $alert_update = '
        <div class="col-12">
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-check"></i>
            Supplier updated successfully.
          </div>
        </div>
      ';
      
    } catch (Exception $e) {
      $alert_update = '
        <div class="col-12">
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-exclamation-triangle"></i>
            Something went wrong.
            '. $e .'
          </div>
        </div>
      ';
    }

}


?>