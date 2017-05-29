<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <div class="container pt-md-5 background-temp">
                    <div class="header pt-md-5">
                        <h1 class="headline col-12 col-lg-8"><?php the_field('header'); ?></h1>
                    </div>
                    <div class="header_teaxtarea col-12 col-lg-6">
                        <p><?php the_field('header_subtext'); ?></p>
                    </div>
                    <div class="courses_button col">
                        <a href="/utbildningar"><p>Våra utbildningar</p></a>
                    </div>
                    <div class="arrow_down">
                        <a href="#welcome">
                          <img src="/wp-content/themes/yrgo/assets/icons/arrow_down.svg" alt="Yrgo logo">
                        </a>
                    </div>
                </div>

                <div class="white_background">
                    <div class="container d-lg-flex">
                        <div class="welcome col-12 col-lg-6 pl-lg-0 pt-5" id="welcome">
                            <p><?php the_field('welcome'); ?></p>
                            <div class="welcome_text ml-lg-0">
                                <p><?php the_field('welcome_subtext'); ?></p>
                            </div>
                        </div>
                        <div class="welcome col-12 col-lg-6 ml-lg-4 pt-sm-5">
                          <p><?php the_field('why_yrgo'); ?></p>
                            <div class="embed-responsive embed-responsive-16by9">
                              <?php the_field('welcome_video'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>
