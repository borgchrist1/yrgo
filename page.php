<?php get_header(); ?>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

            <div class="background_image col-12"
                <?php if (get_field('background_image')) { echo 'style="background-image: url('
                    . get_field('background_image') . '); background-size: cover;"'; } ?>>
                <div class="container pt-5">
                    <div class="header pt-5">
                        <h1 class="headline col-12 col-lg-8"><?php the_field('header'); ?></h1>
                    </div>
                    <div class="header_teaxtarea col-12 col-lg-7">
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
            </div>

                <div class="white_background">
                    <div class="container d-lg-flex">
                        <div class="welcome col-12 col-lg-6 pl-lg-0" id="welcome">
                            <p><?php the_field('welcome'); ?></p>
                            <div class="welcome_text ml-lg-0">
                                <p><?php the_field('welcome_subtext'); ?></p>
                            </div>
                        </div>
                        <div class="why_yrgo col-12 col-lg-6 ml-lg-4">
                          <p><?php the_field('why_yrgo'); ?></p>
                            <div class="yrgo_video embed-responsive embed-responsive-16by9">
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
