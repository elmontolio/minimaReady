<?php get_header(); ?>

<div id="content">
			
	<h3>Estás viendo:</h3> <h1><?php single_cat_title(); ?></h1>		

	  <?php if(have_posts()) : ?> 
	  <?php while(have_posts()) : the_post(); ?>
	  
		<div class="content_single">

			

			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

			
 			<p class="content_single_title_meta">
                Escrito: <?php the_time('d'); ?> del <?php the_time('m'); ?> de <?php the_time('Y'); ?> a las <?php the_time('h:i'); ?> 
                en <?php the_category(','); ?>. <a href="<?php comments_link(); ?>">
                <?php comments_number('0 comentarios', '1  comentario', '% comentarios'); ?></a>. <?php edit_post_link('editar'); ?>
            </p>
			
			<div class="entry">
			
				<div class="archive_post_thumb">
				<?php the_post_thumbnail(array(280,280));?>
				</div>
			
				<div class="archive_post_excerpt">
				<?php echo excerpt(60); ?> 
				</div>
				
			</div>
			
		</div><!-- /.content_single -->
  
  
	<?php endwhile; ?>
    
		<div class="navigation">
			<div id="content_navigation_older"><?php next_posts_link('&laquo; Ver posts mas antiguos') ?></div>
			<div id="content_navigation_newer"><?php previous_posts_link('Ver posts mas recientes &raquo;') ?></div>
		</div>

  
	<?php else: ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php _e('Not Found'); ?></h2>
		</div>
  
	<?php endif; ?>

</div> <!--/#content -->





<?php get_sidebar(); ?>
<?php get_footer(); ?>
