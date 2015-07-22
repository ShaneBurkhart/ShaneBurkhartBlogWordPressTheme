<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part("head"); ?>
    <body <?php body_class(); ?>>
        <?php get_header(); ?>
        <div class="small-container">
            <?php				
                while (have_posts()) : the_post();					
                    get_template_part('content', get_post_format());								
                endwhile;
            ?>			
        </div>
        <?php get_footer(); ?>				
    </body>
</html>
