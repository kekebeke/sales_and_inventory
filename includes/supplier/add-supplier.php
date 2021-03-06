<?php

if (!isset($_SESSION['is_logged_in'])) {
	header("Location:index.php");
}

$alert_add = '';

if(isset($_POST['add_supplier'])) {

  $id = $function->setID('id', 'supplier');
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone_number = $_POST['phone_number'];

  $data = [
    'id' => $id,
    'name' => $name,
    'address' => $address,
    'phone_number' => $phone_number
  ];

  try {
    $query = "INSERT INTO supplier (id, name, address, phone_number) VALUES (:id, :name, :address, :phone_number)";
    $function->insert($query, $data);

    $alert_add = '
    <div class="col-12">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-check"></i>
        Supplier added successfully.
      </div>
    </div>
    ';
  } catch (Exception $e) {
    $alert_add = '
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