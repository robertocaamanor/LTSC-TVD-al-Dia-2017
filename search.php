<?php get_header(); ?>
	<section class="main">
		<div class="container">
			<section class="articles-list">
				<h3><?php printf( __( 'Resultados de: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
				<?php if (have_posts()) : while ( have_posts()) : the_post(); ?>
				<article>
					<div class="imagen">
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) { the_post_thumbnail('list-articles-thumbs'); } ?>
						</a>
					</div>
					<hgroup class="datos">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<div class="creditos">
							<span class="date"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_the_date( get_option( 'date_format' ) ); ?></span>
							<span class="categories"><span class="glyphicon glyphicon-folder-open"></span> <?php the_category(); ?></span>
						</div>
						<span class="extracto"><?php the_excerpt(); ?></span>
					</hgroup>
				</article>
			<?php endwhile; else: ?>
			<h1>No se encontraron articulos</h1>
			<?php endif; ?>
			</section>
			<?php get_sidebar(); ?>
		</div>
	</section>
<?php get_footer(); ?>