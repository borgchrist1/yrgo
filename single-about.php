<?php get_header(); ?>

<?php if (have_posts()) : ?>

  <?php while (have_posts()): the_post(); ?>

      <div class="col-xs-12 course-jumbo" style="background: url('<?php the_field('about_background'); ?>'); background-size: cover;">
          <span class="jumbo-top"></span>
          <div class="jumbo-content">
              <h1><?php the_field('about_title'); ?></h1>
          </div>
      </div>

      <div class="container">

          <div class="row">

            <div class="col-xs-12 col-md-9"> <!-- Left column-->
                <h2><?php the_field('about_faq'); ?></h2>
                <?php $id = 0; ?>
                <?php if( have_rows('about_faqList') ): ?>
                    <?php while ( have_rows('about_faqList') ) : the_row(); ?>
                        <?php $id++;?>
                        <div class="menu" data-row="<?php echo $id; ?>">
                            <div class="menu-link">
                                <p class="arrow" data-row="<?php echo $id; ?>">></p>
                                <h4 id="<?php echo $id; ?>"><?php the_sub_field('about_faqTitle'); ?></h4>
                            </div>
                            <div class="x-menu hidden" data-row="<?php echo $id; ?>">
                            <p><?php the_sub_field('about_faqText'); ?></p>
                           </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
          <!-- </div> -->
          <div class="col-xs-12 col-md-3">
              <h2><?php the_field('about_contact'); ?></h2>
              <?php if( have_rows('about_contactList') ): ?>
                  <?php while ( have_rows('about_contactList') ) : the_row(); ?>
                      <p><strong><?php the_sub_field('about_contactListName'); ?></strong>
                      <br><?php the_sub_field('about_contactListTitle'); ?>
                      <br><?php the_sub_field('about_contactListPhone'); ?>
                      <br><?php the_sub_field('about_contactListEmail'); ?></p>
                  <?php endwhile; ?>
              <?php endif;?>
          </div>
      </div>

  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
