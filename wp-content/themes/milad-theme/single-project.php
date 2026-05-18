<?php get_header(); ?>

<main class="project-single">

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <article class="project-card">

        <?php the_post_thumbnail('large'); ?>

        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>

        <div class="project-meta">

          <p>
            Client:
            <?php the_field('client_name'); ?>
          </p>

          <?php $project_url = get_field('project_url'); ?>

          <?php if ($project_url) : ?>

            <a href="<?php echo $project_url; ?>" target="_blank">
              Visit Project
            </a>

          <?php endif; ?>

          <?php $project_types = get_the_terms(get_the_ID(), 'project_type'); ?>

          <?php if ($project_types) : ?>

            <p>
              Type:

              <a href="<?php echo get_term_link($project_types[0]); ?>">

                <?php echo $project_types[0]->name; ?>

              </a>

            </p>

          <?php endif; ?>

        </div>

      </article>

    <?php endwhile; ?>

  <?php endif; ?>

</main>

<?php get_footer(); ?>