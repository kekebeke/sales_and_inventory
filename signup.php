<?php require 'includes/signup.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>XYT Company | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">

    </div>
    <?php echo $alert; ?>
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">
          <a href="index.php"><b>XYT</b>Company</a>
        </h3>
      </div>
      <div class="card-body login-card-body">
        <p class="login-box-msg">Create Account</p>
        <form method="post" role="form" id="signupForm">
          <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" name="name" class="form-control" id="InputName" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="InputEmail">Email address</label>
            <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-info btn-block">Register</button>
            </div>
            <div class="col-12 text-center mt-3">
              Already have an account?
              <a href="index.php"><b>Sign In</b></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jquery-validation -->
  <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $('#signupForm').validate({
        rules: {
          name: {
            required: true,
            maxlength: 30
          },
          email: {
            required: true,
            email: true,
          },
          password: {
            required: true,
            minlength: 5
          },
        },

        messages: {
          name: {
            required: "Please enter your name",
          },
          email: {
            required: "Please enter a email address",
            email: "Please enter a vaild email address"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>

</body>

</html>