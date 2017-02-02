<?php get_header(); ?>
	<section class="main">
		<div class="container">
			<section class="articles-single">
				<?php if (have_posts()) : while ( have_posts()) : the_post(); ?>
				<article>
					<hgroup class="datos">
						<h1><?php the_title(); ?></h1>
						<div class="creditos">
							<span class="date"><span class="glyphicon glyphicon-calendar"></span> <?php the_date(); ?></span>
							<span class="categories"><span class="glyphicon glyphicon-folder-open"></span> <?php the_category(); ?></span>
							<span class="user"><span class="glyphicon glyphicon-user"></span> <?php the_author_posts_link(); ?> </span>
						</div>
					</hgroup>
					<div class="imagen">
						<?php if(has_post_thumbnail()) { the_post_thumbnail('single-thumbs', array(
						    'alt' => 'Responsive image',
						    'class' => 'img-responsive'
						)); } ?>
					</div>
					<div class="extracto"><?php the_content(); ?></div>
					<div class="tags"><?php the_tags( '<span class="tituloetiquetas"> <span class="glyphicon glyphicon-tags"></span> Etiquetas </span><ul><li> ', '</li><li>', '</li></ul>' ); ?> </div>				
				</article>
			<?php endwhile; else: ?>
			<h1>No se encontraron articulos</h1>
			<?php endif; ?>
			<div id="comentarios">
				<?php comments_template(); ?>
			</div>
			</section>
			<?php get_sidebar(); ?>
		</div>
	</section>
	<?php get_footer(); ?>