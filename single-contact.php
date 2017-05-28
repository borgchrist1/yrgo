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

                <div class="col-xs-12 col-md-5">
                    <h2>Karta</h2>

                </div>

            </div> <!-- end row-->

            <div class="row">

              <div class="col-xs-12 col-md-5">
                  <h2><?php the_field('eud_contact'); ?></h2>

              </div>
              <div class="col-xs-12 col-md-5">
                  <h2></h2>
                  <dl class="dl-horizontal info-list">
                      <?php if( have_rows('eud_aboutContent') ): ?>
                          <?php while ( have_rows('eud_aboutContent') ) : the_row(); ?>
                              <dt><?php the_sub_field('eud_aboutContent'); ?></dt>
                          <?php endwhile; ?>
                      <?php endif; ?>
                  </dl>
              </div>

            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
