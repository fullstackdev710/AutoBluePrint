<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title>LogIn / Auto Blue Print</title>
   <link rel="icon" href="assets/imgs/favicon-ba-150x150.png" sizes="32x32">
   <link rel="icon" href="assets/imgs/favicon-ba-300x300.png" sizes="192x192">
   <link rel="apple-touch-icon" href="assets/imgs/favicon-ba-300x300.png">
   <meta name="msapplication-TileImage" content="assets/imgs/favicon-ba-300x300.png">

   <link href="<?php echo base_url(); ?>assets/libs/bootstrap/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

   <link href="<?php echo base_url(); ?>assets/css/global_style.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-img-blue vh-100">
   <?php echo isset($error) ? $error : ''; ?>
   <div class="d-flex align-items-center justify-content-center vh-100">
      <form method="post" action="<?php echo site_url('Login/process'); ?>" style="width: 320px;">
         <!-- Email input -->
         <div class="form-outline mb-4">
            <label class="form-label text-white" for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" />
         </div>

         <!-- Password input -->
         <div class="form-outline mb-4">
            <label class="form-label text-white" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" />
         </div>

         <!-- Submit button -->
         <input type="submit" class="btn w-100 mb-4 bg-red text-white" value="Login">
      </form>
   </div>
</body>

</html>