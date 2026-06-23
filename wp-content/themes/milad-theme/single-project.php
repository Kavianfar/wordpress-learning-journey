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
      <section class="related-projects">

        <h2>Related Projects</h2>

        <?php if ($project_types) : ?>

          <?php $current_project_type = $project_types[0]->slug; ?>

          <?php

          $args = array(

            'post_type' => 'project',

            'posts_per_page' => 3,

            'post__not_in' => array(get_the_ID()),

            'tax_query' => array(

              array(

                'taxonomy' => 'project_type',

                'field' => 'slug',

                'terms' => $current_project_type

              )
            )
          );

          $related_projects = new WP_Query($args); ?>


          <?php if ($related_projects->have_posts()) : ?>

            <?php while ($related_projects->have_posts()): $related_projects->the_post(); ?>

              <h3> <a href="<?php the_permalink(); ?>">

                  <?php the_title(); ?>

                </a>
              </h3>

            <?php endwhile; ?>

          <?php else : ?>

            <p>No related projects found.</p>

          <?php endif; ?>

          <?php wp_reset_postdata(); ?>

        <?php endif; ?>

      </section>

      <?php do_action(

        'milad_after_related_projects',
        get_the_ID()
        
      ); ?>

    <?php endwhile; ?>

  <?php endif; ?>

</main>

<?php get_footer(); ?>