<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
			<?php $postCount++;?>
	<div class="content_single" id="content_single_<?php echo $postCount ;?>">
		<div class="content_single_title">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<p class="content_single_title_meta">Escrito: <?php the_time('d'); ?> del <?php the_time('m'); ?> de <?php the_time('Y'); ?> a las <?php the_time('h:i'); ?> en <?php the_category(','); ?>. <a href="<?php comments_link(); ?>"><?php comments_number('0 comentarios', '1  comentario', '% comentarios'); ?></a>. <?php edit_post_link('editar'); ?></p>
		</div>
		<div class="content_single_body">
			<?php the_content('Ver el resto &raquo;'); ?>
		</div>
	</div>
	<?php comments_template(); ?>
	<?php endwhile; ?>
		<div id="content_navigation">
			<div id="content_navigation_older"><?php next_posts_link('&laquo; Ver posts mas antiguos') ?></div>
			<div id="content_navigation_newer"><?php previous_posts_link('Ver posts mas recientes &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2>Error 4 0 4, documento no encontrado.</h2>
		<div class="entrybody">La p&aacute;gina, post o comentario que buscas no se encuentra. Puede que hayas escrito mal, seguido un link incorrecto o que nosotros hayamos movido las cosas. Te recomendamos <a href="<?php bloginfo('url'); ?>">volver al inicio</a> y buscar de otra forma.</div>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>