

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vamana</title>
    <?php
        // $base_url = 'http://localhost/vamana-dev/';
        $base_url = 'https://www.hotelvamanainn.com/';
        $contact_dispaly = '+91 - 91480 53463';
        $mail_dispaly    = 'hr@techzobris.com';
    ?>
    <link rel="icon" href="<?php echo $base_url; ?>images/icons/favicon.png"/>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $base_url; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <?php if ($pagename == 'travels') {?>
      <link href="<?php echo $base_url; ?>css/travels.css" rel="stylesheet">
      <?php }?>
      <link href="<?php echo $base_url; ?>css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/lightbox.min.css">
    <link href="<?php echo $base_url; ?>css/responsive.css" rel="stylesheet">
    <script src="<?php echo $base_url; ?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>js/jquery.imagesloaded.js"></script>
    <script src="<?php echo $base_url; ?>js/masonry.pkgd.min.js"></script>
    <script src="<?php echo $base_url; ?>js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>js/instafeed.min.js" type="text/javascript"></script>
    <?php
        if ($pagename == 'gallery') {
        ?>
      <style>
            .grid {
                background: rgba(0,0,0,0);
            }
            /* clear fix */
            .grid:after {
                content: '';
                display: block;
                clear: both;
            }
            /* ---- .grid-item ---- */
            .grid-sizer,
            .grid-item {
                width: 33.34%;
            }
            .grid-item {
                float: left;
            }
            .grid-item img {
                display: block;
                max-width: 100%;
            }
        </style>
      <?php
      }?>
  </head>
  <body class="<?php echo 'page-' . $pagename . ' site-page'; ?>">
    <div id="page">