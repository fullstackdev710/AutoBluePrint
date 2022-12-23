<?php defined("BASEPATH") or exit(); ?>

<?php $base_url = base_url(); ?>

<script src="<?php echo $base_url; ?>assets/libs/jQuery/jquery-3.6.3/jquery.min.js"></script>
<script src="<?php echo $base_url; ?>assets/libs/bootstrap/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php if (isset($scripts)) {
   foreach ($scripts as $script) {
      if (strpos($script, 'http') === 0) {
         echo '<script src="' . $script . '"></script>';
      } else {
         echo '<script src="' . $base_url . $script . '"></script>';
      }
   }
} ?>
<!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>