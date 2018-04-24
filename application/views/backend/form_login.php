
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url() ?>assets/img/icon.png">

    <title>Login - Citra Warna</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center bg-dark">

    <form class="form-signin" action="<?= base_url() ?>backend/login" method="post">
      <img class="mb-4 border-logo" src="<?= base_url() ?>assets/img/logo-new.jpg" alt="" width="200"  >
      <h1 class="h3 mb-3 font-weight-normal white">Citra Warna</h1>
      <?php 
          if($this->session->flashdata('success')) { 
            echo "<div class='alert alert-success'>". $this->session->flashdata('success'). "</div>";
          }  else if($this->session->flashdata('danger')){
            echo "<div class='alert alert-danger'>". $this->session->flashdata('danger'). "</div>";
          }

           ?>
      <label class="sr-only">Username</label>
      <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
      <label  class="sr-only">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password" required>
      
      <div class="checkbox mb-3">
        <label class="white">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input type="submit" class="btn btn-lg btn-light btn-block" value="Sign in">
      <p class="mt-5 mb-3 white">&copy; 2018 - by Refo Junior</p>
    </form>
  </body>
</html>
