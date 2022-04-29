<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php
    include('components/head/meta.php');
    include('components/head/ogp.php');
    include('components/head/schema.php');
    include('components/head/files.php');
    wp_head();
  ?>
</head>
<body <?php body_class(); ?>>
<?php
  include('components/header/pc.php');
  include('components/header/sp.php');