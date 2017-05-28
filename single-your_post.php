<?php get_header(); ?>

<?php if (have_posts()) : ?>

  <?php while (have_posts()): the_post(); ?>

      <div class="col-xs-12 course-jumbo" style="background: url('<?php the_field('eud_background'); ?>'); background-size: cover;">
          <span class="jumbo-top"></span>
          <div class="jumbo-content">
              <h1><?php the_field('eud_title'); ?></h1>
              <h2 class="jumbo-h2"><?php the_field('eud_type'); ?><br><?php the_field('eud_years'); ?></h2>
          </div>
      </div>

      <div class="container">

          <div class="row">

              <div class="col-xs-12 col-md-7">
                  <h2><?php the_field('eud_about'); ?></h2>
                  <p><?php the_field('eud_aboutText'); ?></p>
              </div>

              <div class="col-xs-12 col-md-5 contact">
                  <h2><?php the_field('eud_fact'); ?></h2>
                      <dl class="dl-horizontal info-list">
                          <?php if( have_rows('eud_aboutContent') ): ?>
                              <?php while ( have_rows('eud_aboutContent') ) : the_row(); ?>
                                  <dt><?php the_sub_field('eud_aboutContent'); ?></dt>
                              <?php endwhile; ?>
                          <?php endif; ?>
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
                  <h2><?php the_field('eud_courses'); ?></h2>
                  <?php $id = 0; ?>
                  <?php if( have_rows('eud_courseInfo') ): ?>
                      <?php while ( have_rows('eud_courseInfo') ) : the_row(); ?>
                          <?php $id++;?>
                          <div class="menu" data-row="<?php echo $id; ?>">
                              <div class="menu-link">
                                  <p class="arrow" data-row="<?php echo $id; ?>">></p>
                                  <h4 id="<?php echo $id; ?>"><?php the_sub_field('eud_courseTitle'); ?></h4>
                              </div>
                              <div class="x-menu hidden" data-row="<?php echo $id; ?>">
                              <p><?php the_sub_field('eud_courseText'); ?></p>
                             </div>
                          </div>
                      <?php endwhile; ?>
                  <?php endif; ?>
              </div>

              <div class="col-xs-12 col-md-5">
                  <div class="qotation">
                      <?php if( have_rows('eud_student') ): ?>
                          <?php while ( have_rows('eud_student') ) : the_row(); ?>
                              <p><?php the_sub_field('eud_studentQuotation'); ?></p>
                              <small><?php the_sub_field('eud_studenName'); ?></small>
                          <?php endwhile; ?>
                      <?php endif;?>
                  </div>
              </div>

          </div> <!-- end row -->

          <div class="row">

              <div class="col-xs-12 col-md-7">
                  <h2><?php the_field('eud_market'); ?></h2>
                  <p><?php the_field('eud_marketText') ?></p>
              </div>

              <div class="col-xs-12 col-md-5">
                  <h2><?php the_field('eud_contact'); ?></h2>
                  <?php if( have_rows('edu_contactInfo') ): ?>
                      <?php while ( have_rows('edu_contactInfo') ) : the_row(); ?>
                          <p><strong><?php the_sub_field('eud_contactName'); ?></strong>
                          <br>Tel:<?php the_sub_field('eud_contactPhone'); ?>
                          <br><?php the_sub_field('eud_contactEmail'); ?></p>
                      <?php endwhile; ?>
                  <?php endif;?>
              </div>

          </div> <!-- end row -->

          <div class="row">

              <div class="col-xs-12 col-md-7"> <!-- Left column-->
                  <h2><?php the_field('eud_apply'); ?></h2>
                  <?php if( have_rows('eud_applyInfo') ): ?>
                      <?php while ( have_rows('eud_applyInfo') ) : the_row(); ?>
                          <?php $id++;?>
                          <div class="menu" data-row="<?php echo $id; ?>">
                              <div class="menu-link">
                                  <p class="arrow" data-row="<?php echo $id; ?>">></p>
                                 <h4 id="<?php echo $id; ?>"><?php the_sub_field('eud_applyTitel'); ?></h4>
                              </div>
                              <div class="x-menu hidden" data-row="<?php echo $id; ?>">
                                  <p><?php the_sub_field('eud_applyText'); ?></p>
                              </div>
                          </div>
                      <?php endwhile; ?>
                  <?php endif; ?>
              </div>

              <div class="col-xs-12 col-md-5 contact">
                  <h2></h2>
                  <dl class="dl-horizontal info-list">
                      <dt></dt>
                  </dl>
              </div>

          </div> <!-- end row -->

      </div>

  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
