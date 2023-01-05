<?php defined("BASEPATH") or exit(); ?>

<?php
$base_url = base_url();
$user_id = getSession('user_id');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title>Auto Blue Print</title>
   <link rel="icon" href="assets/imgs/favicon-ba-150x150.png" sizes="32x32">
   <link rel="icon" href="assets/imgs/favicon-ba-300x300.png" sizes="192x192">
   <link rel="apple-touch-icon" href="assets/imgs/favicon-ba-300x300.png">
   <meta name="msapplication-TileImage" content="assets/imgs/favicon-ba-300x300.png">

   <link href="<?php echo base_url(); ?>assets/libs/bootstrap/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

   <link href="<?php echo base_url(); ?>assets/css/global_style.css" rel="stylesheet" type="text/css" />

   <script src="<?php echo $base_url; ?>assets/libs/jQuery/jquery-3.6.3/jquery.min.js"></script>
   <script>
      const siteUrl = '<?php echo site_url(); ?>';
   </script>
   <!-- BEGIN PAGE LEVEL STYLES -->
   <?php if (isset($styles)) {
      foreach ($styles as $style) {
         if (strpos($style, 'http') === 0) {
            echo '<link href="' . $style . '" rel="stylesheet" type="text/css" />';
         } else {
            echo '<link href="' . $base_url . $style . '" rel="stylesheet" type="text/css" />';
         }
      }
   } ?>
   <!-- END PAGE LEVEL STYLES -->
</head>

<body>