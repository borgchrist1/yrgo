<?php get_header(); ?>
<div data-img="<?php echo $var; ?>" class="col-xs-12 course-jumbo">
  <span class="jumbo-top"></span>
  <div class="jumbo-content">
    <h1></h1>
    <h2 class="jumbo-h2"><br></h2>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-7">
      <h2></h2>
      <p></p>
    </div>
    <div class="col-xs-12 col-md-5 contact">
      <h2></h2>
      <dl class="dl-horizontal info-list">
        <dt></dt>
      </dl>
      <div class="apply">
        <div class="button">
          <a href="#">Ansök här!</a>
        </div>
      </div>
    </div>
  </div> <!-- End row -->
  <div class="row">
    <div class="col-xs-12 col-md-7"> <!-- Left column-->
      <h2></h2>
      <div class="menu" data-row="<?php echo $id; ?>">
        <div class="menu-link">
          <p class="arrow" data-row="<?php echo $id; ?>">></p>
          <h4 id="<?php echo $id; ?>"></h4>
        </div>
        <div class="x-menu hidden" data-row="<?php echo $id; ?>">
          <p></p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-5">
      <div class="qotation">
        <p></p>
        <small></small>
      </div>
    </div>
  </div> <!-- end row -->
  <div class="row">
    <div class="col-xs-12 col-md-7">
      <h2></h2>
      <p></p>
    </div>
    <div class="col-xs-12 col-md-5">
      <h2>Kontakt</h2>
      <p><strong></strong>
        <br>Tel:
        <br></p>
        <h4>Reception</h4>
        <p>Tel: </p>
      </div>
    </div> <!-- end row -->
    <div class="row">
      <div class="col-xs-12 col-md-7"> <!-- Left column-->
        <h2></h2>
        <div class="menu" data-row="<?php echo $id; ?>">
          <div class="menu-link">
            <p class="arrow" data-row="<?php echo $id; ?>">></p>
            <h4 id="<?php echo $id; ?>"></h4>
          </div>
          <div class="x-menu hidden" data-row="<?php echo $id; ?>">
            <p></p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-5 contact">
        <h2></h2>
        <dl class="dl-horizontal info-list">
          <dt></dt>
        </dl>
    </div> <!-- end row -->
  </div>

<?php get_footer(); ?>
