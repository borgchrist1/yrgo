<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <p><strong>Email:</strong> <?php the_field('email'); ?></p>
                <p><strong>Phone:</strong> <?php the_field('phone'); ?></p>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>
