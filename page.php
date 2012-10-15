<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) while (have_posts()) : the_post();?>
		<h2><?php the_title(); ?></h2>
			<div class="content_single">
               
                <p class="content_single_title_meta">
                    Escrito: <?php the_time('d'); ?> del <?php the_time('m'); ?> de <?php the_time('Y'); ?> a las <?php the_time('h:i'); ?>  
                    <?php edit_post_link('editar'); ?>
                </p>
                
				<div class="content_single_body">
                    <?php the_content('Ver el resto &raquo;'); ?>
                </div>
                
			</div>
	<?php endwhile; ?>
</div><!-- content -->

<?php get_sidebar(); ?>


<div class="clear"></div>

<?php get_footer(); ?>
