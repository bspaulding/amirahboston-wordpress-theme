<? get_header(); ?>
<? if ( have_posts() ) : ?>
  <section>
  <? while ( have_posts() ) : the_post(); ?>
    <article <? if ( is_page() ) { echo 'class="page"'; } ?>>
      <? if ( !is_page() ) : ?>
      <time datetime="2012-07-14" pubdate>
        <? the_date() ?>
      </time>
      <? endif; ?>
      <h1><? the_title() ?></h1>
      <? if ( !is_page() ) : ?>
      <h5 class="author">By <? the_author() ?></h5>
      <? endif; ?>
      <? the_content() ?>
      <p class="article-link"><a href="<? the_permalink() ?>">Permalink</a></p>
    </article>
  <? endwhile; ?>
  </section>
<? endif; ?>
<? get_footer(); ?>
