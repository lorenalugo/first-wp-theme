<?php get_header(); ?>

<section id="main">
		<section id="articles-list">
			<h2 id="cat_name"><?php single_cat_title( $prefix = '', $display = true); ?></h2>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
				<div><a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?></a></div>
				<hgroup><h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgroup>
				<div class="date"><?php the_date();?> en <?php the_category();?></div>
				<div class="extract"><?php the_excerpt();?></div>
			</article>
			
		<?php endwhile; else: ?>
		<h1>No se encontraron entradas</h1>
		<?php endif; ?>
			
		</section>

<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>