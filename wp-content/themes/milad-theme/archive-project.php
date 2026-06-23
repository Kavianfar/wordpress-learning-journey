<?php get_header(); ?>

<main>

  <h1>Projects Archive</h1>

  <form method="GET">

    <input
      type="search"
      name="s"
      placeholder="Search projects...">

    <button type="submit">
      Search
    </button>

  </form>

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

    <?php

    the_posts_pagination(array(

      'prev_text' => '← Previous',

      'next_text' => 'Next →',

    ));

    ?>

  <?php endif; ?>

</main>

<?php get_footer(); ?>