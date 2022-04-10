<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<?php include('_head.php')?>
<body>
  <div id="page" class="page">
<!--    --><?php //include('_preloader.php')?>
    <?php include('_header.php')?>
    <?= $this->renderSection('content')?>
    <?php include('_footer.php')?>
  </div>
  <?php include('_scripts.php')?>
</body>
</html>