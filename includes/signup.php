<?php
require 'includes/connection.php';
require_once 'includes/functions.php';

session_start();

if (isset($_SESSION['is_logged_in'])) {
  header('Location:index.php');
}

$alert = '';
$alert_type = '';
$alert_icon = '';
$alert_title = '';
$alert_message = '';

if(isset($_POST['submit'])) {

$data = ['email' => $_POST['email']];
$is_email_found = $function->findData("SELECT email FROM user WHERE email=:email", $data);
if($is_email_found) {
  $alert_type = 'danger';
  $alert_icon = 'ban';
  $alert_title = 'Registration Failed.';
  $alert_message = 'The email already exists. Please enter another email.';

} else {
  $id = $function->setID('id', 'user');
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = hash("sha512", $_POST['password']);

  $data = [
    'id' => $id,
    'name' => $name,
    'email' => $email,
    'password' => $password
  ];

  try {
    $query = "INSERT INTO user (id, name, email, password) VALUES (:id, :name, :email, :password)";
    $function->insert($query, $data);
      
    $alert_type = 'success';
    $alert_icon = 'check';
    $alert_title = 'Registered Successfully.';
    $alert_message = 'Thanks! Your account has been successfully created.';

  } catch (Exception $e) {
      $alert_type = 'danger';
      $alert_icon = 'exclamation-triangle';
      $alert_title = 'Registration Failed!';
      $alert_message = 'Something went wrong.';

    }
  }
  
  $alert = '
    <div class="alert alert-' . $alert_type . ' alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-' . $alert_icon . '"></i>'. $alert_title . '</h5>'. 
      $alert_message . '
    </div>';
}

