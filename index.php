<? get_header(); ?>
<? if ( have_posts() ) : ?>
  <section>
  <? while ( have_posts() ) : the_post(); ?>
    <article>
      <time datetime="2012-07-14" pubdate>
        <? the_date() ?>
      </time>
      <h1><? the_title() ?></h1>
      <h5 class="author">By <? the_author() ?></h5>
      <p><? the_content() ?></p>
      <p class="article-link"><a href="<? the_permalink() ?>">Permalink</a></p>
    </article>
  <? endwhile; ?>
  </section>
<? endif; ?>
<? get_footer(); ?>
