<?php get_header(); ?>

<section id="main">
		
		<section id="articles-list">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
				<div><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?></div>
				<hgroup><h2><?php the_title();?></h2></hgroup>
				<div class="date"><?php the_date();?> en <?php the_category();?></div>
				<div class="extract"><?php the_content();?></div>
			</article>
			
		<?php endwhile; else: ?>
		<h1>No se encontraron entradas</h1>
		<?php endif; ?>
			
		</section>

<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>