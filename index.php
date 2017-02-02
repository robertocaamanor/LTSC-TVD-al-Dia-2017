<?php get_header(); ?>
	<section class="main container">
			<section class="articles-list">
				<?php query_posts("paged=$paged"); ?>
				<?php if (have_posts()) : while ( have_posts()) : the_post(); ?>
				<article>
					<div class="imagen">
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) { the_post_thumbnail('list-articles-thumbs'); } ?>
						</a>
					</div>
					<hgroup>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<span class="date"><span class="glyphicon glyphicon-calendar"></span> <?php echo get_the_date( get_option( 'date_format' ) ); ?></span>
						<span class="categories"><span class="glyphicon glyphicon-folder-open"></span> <?php the_category(); ?></span>
						<span class="extracto"><?php the_excerpt(); ?></span>
					</hgroup>
				</article>
			<?php endwhile; else: ?>
			<h1>No se encontraron articulos</h1>
			<?php endif; ?>
			<div class="paginacion">
				<?php


					// obtenemos el total de páginas
					global $wp_query;
					$total = $wp_query->max_num_pages;
					// solo seguimos con el resto si tenemos más de una página
					if ( $total > 1 )  {
					     // obtenemos la página actual
					     if ( !$current_page = get_query_var('paged') )
					          $current_page = 1;
					     // la estructura de “format” depende de si usamos enlaces permanentes "humanos"
					     $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
					     echo paginate_links(array(
					          'base' => get_pagenum_link(1) . '%_%',
					          'format' => $format,
					          'current' => $current_page,
					          'prev_next' => True,
					          'prev_text' => __('&laquo; Anterior'),
					          'next_text' => __('Siguiente &raquo;'),
					          'total' => $total,
					          'mid_size' => 4,
					          'type' => 'list'
					     ));
					}

					?>
			</div>
			</section>
			<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>