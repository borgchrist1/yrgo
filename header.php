<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>
<body>
  <div class="container">

    <div data-row="1" class="sub-menu">
      <div class="row">
        <div class="col-xs-12 col-md-9">
          <div class="menu-list">
            <ul>
              <li><h2>Test</h2></li>
              <li><h2>Test</h2></li>
              <li><h2>Test</h2></li>
              <li><h2>Test</h2></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-md-3">
          <div class="menu-content">
            <ul>
              <li><h4>test</h4></li>
              <li><h4>test</h4></li>
              <li><h4>test</h4></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
        <div class="container-fluid full">
          <nav>
            <div class="logo">
              <a href="<?php echo site_url(); ?>"><img src="/themes/yrgo/assets/logos/logo_vit2x.png" alt=""></a>
            </div>
            <div class="wrapper">
              <?php $id = 0;
              foreach (get_pages() as $page):
              $id++; ?>
            <p id="<?php echo $id; ?>" class="parent"><?php echo $page->post_title; ?></p>
          <?php endforeach; ?>
        </div>
      </nav>
