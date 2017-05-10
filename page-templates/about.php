<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php $employees = get_posts(['post_type' => 'employee']); ?>

<?php if (count($employees)): ?>
    <div class="row">
        <div class="col">
            <h2 class="h5">Employees</h2>
            <ul>
                <?php foreach ($employees as $employee): ?>
                    <li>
                        <a href="<?php the_permalink($employee); ?>"><?php echo $employee->post_title; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div><!-- /col -->
    </div><!-- /row -->
<?php endif; ?>

<?php get_footer(); ?>
