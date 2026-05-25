<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class('post-card'); ?>>

            <?php the_post_thumbnail(); ?>

            <h2><?php the_title(); ?></h2>

            <p class="post-date"><?php the_date(); ?></p>

            <?php the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>">Read More</a>

        </article>

    <?php endwhile; ?>

<?php endif; ?>
<section class="recent-projects">

    <h2>Recent Projects</h2>

    <?php

    $recent_projects = new WP_Query(array(

        'post_type' => 'project',

        'posts_per_page' => 3,

        'tax_query' => array(

            array(

                'taxonomy' => 'project_type',

                'field' => 'slug',

                'terms' => 'wordpress'

            )

        )

    ));

    ?>

    <?php if ($recent_projects->have_posts()) : ?>

        <?php while ($recent_projects->have_posts()) : $recent_projects->the_post(); ?>

            <article class="post-card">

                <h3>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_title(); ?>

                    </a>

                </h3>

                <p>
                    Client:
                    <?php the_field('client_name'); ?>
                </p>
                <?php $project_types = get_the_terms(get_the_ID(), 'project_type'); ?>

                <?php if ($project_types) : ?>

                    <p>
                        Type:
                        <?php echo $project_types[0]->name; ?>
                    </p>

                <?php endif; ?>

                <a href="<?php the_permalink(); ?>">

                    <?php the_post_thumbnail('medium'); ?>

                </a>

            </article>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php endif; ?>

</section>
</main>
<?php get_footer(); ?>