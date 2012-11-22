<? get_header(); ?>
<section id="home">
  <? motingo_swipejs_slider(); ?>
  <? if ( have_posts() ) : ?>
    <section id="articles">
    <? while ( have_posts() ) : the_post(); ?>
      <article>
        <time datetime="2012-07-14" pubdate>
          <? the_date() ?>
        </time>
        <h1><? the_title() ?></h1>
        <h5 class="author"><? the_author() ?></h5>
        <p><? the_excerpt() ?></p>
        <p class="article-link"><a href="<? the_permalink() ?>">View Full Article</a></p>
      </article>
    <? endwhile; ?>
    </section>
  <? endif; ?>
  <? get_sidebar(); ?>
</section>
<? get_footer(); ?>
