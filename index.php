<?php get_header(); ?>

<div class="page-header">
    <h1><?php bloginfo('name'); ?></h1>
</div>

<div class="entry-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
