<?php get_header(); ?>

<div id="content">



				<?php while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>
					<div class="content_single">
                        <p class="content_single_title_meta">
                            Escrito: <?php the_time('d'); ?> del <?php the_time('m'); ?> de <?php the_time('Y'); ?> a las <?php the_time('h:i'); ?> 
                            en <?php the_category(','); ?>. <a href="<?php comments_link(); ?>">
                            <?php comments_number('0 comentarios', '1  comentario', '% comentarios'); ?></a>. <?php edit_post_link('editar'); ?>
                        </p>
                        
                        <div class="content_single_body">
                            <?php the_content('Ver el resto &raquo;'); ?>
                        </div>
                        
                        <div class="redes_single">
                            <ul>
                                        <li>
                                            <div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial">
                                            </div>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/share" class="twitter-share-button" data-via="elmontolio" data-lang="es" data-size="small" data-count="none">Twittear</a>
                                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                        </li>
                                        <li>	<!-- Coloca esta etiqueta donde quieras que se muestre el botón +1. -->
                                            <g:plusone size="tall" annotation="none"></g:plusone>
                                            
                                            <!-- Coloca esta petición de presentación donde creas oportuno. -->
                                            <script type="text/javascript">
                                              window.___gcfg = {lang: 'es-419'};
                                            
                                              (function() {
                                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                                po.src = 'https://apis.google.com/js/plusone.js';
                                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                              })();
                                            </script>
                                        </li>
                            </ul>
                            
                        </div> <!-- /.redes_single -->
                    </div> <!-- /.content_single-->
				

					<?php comments_template( '', true ); ?>

				<?php endwhile; ?>


</div><!-- /#content -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
