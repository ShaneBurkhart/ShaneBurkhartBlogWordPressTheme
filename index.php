<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part("head"); ?>
    <body <?php body_class(); ?>>
        <?php get_header(); ?>
        <div class="small-container">
            <?php
                if (have_posts()) :				
                    while (have_posts()) : the_post();					
                        get_template_part('content', get_post_format());
                    endwhile;
                else :
                    get_template_part('content', 'none');
                endif;
            ?>		
            <?php crawford_pagination(); ?>		
        </div>
        <?php get_footer(); ?>				
    </body>
</html>
