<?php get_header(); ?>

<main>

  <h1>Projects Archive</h1>

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <article class="post-card">

        <h2>

          <a href="<?php the_permalink(); ?>">

            <?php the_title(); ?>

          </a>

        </h2>

        <a href="<?php the_permalink(); ?>">

          <?php the_post_thumbnail('medium'); ?>

        </a>

        <?php the_excerpt(); ?>

      </article>

    <?php endwhile; ?>

  <?php endif; ?>

</main>

<?php get_footer(); ?>