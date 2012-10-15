<div id="sidebar">

    
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("La Barra Lateral") ) : ?>
    
        <div class="sidebar_single" id="sidebar_single_introduction">
            <h3>Informaci&oacute;n</h3>
            <p><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a> es probablemente un blog. Y seguramente este texto explica un poco de que se trata.</p>
        </div>
    
        <div class="sidebar_single" id="sidebar_single_categories">
            <h3>Categor&iacute;as</h3>
            <ul>
                <?php wp_list_categories('title_li='); ?>
            </ul>
        </div>
    
        <div class="sidebar_single" id="sidebar_single_links">
            <h3>Links</h3>
            <ul>
                <?php get_links('-1', '<li>', '</li>', ' ', false, 'name', FALSE); ?>
            </ul>
        </div>
    
    
    <?php endif; ?>	
    

</div>
