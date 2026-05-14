<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class('post-card'); ?>>

            <h2><?php the_title(); ?></h2>

             <p class="post-date"><?php the_date(); ?></p>

            <?php the_excerpt(); ?>
            
            <a href="<?php the_permalink(); ?>">Read More</a>
            
        </article>

    <?php endwhile; ?>

<?php endif; ?>

</main>
<?php get_footer(); ?>