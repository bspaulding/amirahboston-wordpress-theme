<?php get_header(); ?>
<section id="home">
  <?php motingo_swipejs_slider(); ?>
  <?php if ( have_posts() ) : ?>
    <section id="articles">
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <time datetime="2012-07-14" pubdate>
          <?php the_date() ?>
        </time>
        <h1><?php the_title() ?></h1>
        <h5 class="author"><?php the_author() ?></h5>
        <p><?php the_excerpt() ?></p>
        <p class="article-link"><a href="<?php the_permalink() ?>">View Full Article</a></p>
      </article>
    <?php endwhile; ?>
    </section>
  <?php endif; ?>
  <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
