<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
  <section>
  <?php while ( have_posts() ) : the_post(); ?>
    <article <?php if ( is_page() ) { echo 'class="page"'; } ?>>
      <?php if ( !is_page() ) : ?>
      <time datetime="2012-07-14" pubdate>
        <?php the_date() ?>
      </time>
      <?php endif; ?>
      <h1><?php the_title() ?></h1>
      <?php if ( !is_page() ) : ?>
      <h5 class="author"><?php the_author() ?></h5>
      <?php endif; ?>
      <?php the_content() ?>
      <p class="article-link"><a href="<?php the_permalink() ?>">Permalink</a></p>
    </article>
  <?php endwhile; ?>
  </section>
<?php endif; ?>
<?php get_footer(); ?>
