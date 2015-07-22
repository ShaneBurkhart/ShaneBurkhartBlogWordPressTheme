<article id="post-<?php the_ID(); ?>" <?php if (is_single() || $wp_query->current_post + 1 == $wp_query->post_count) post_class('last'); else post_class(); ?>>
    <?php if(has_post_thumbnail()) :?>
        <div class="featured-image">
            <?php if(!is_single()): ?><a href="<?php echo esc_url(get_permalink()); ?>"><?php endif; ?>
                <?php the_post_thumbnail('featured', array(
                    'height' => false,
                    'width' => false
                )); ?>
            <?php if(!is_single()): ?></a><?php endif; ?>
        </div>
    <?php endif; ?>	
    <?php 
        if(is_single()):
            the_title('<h1 class="post-title">', '</h1>');
        else:
            the_title('<h2 class="post-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
        endif;
    ?>
    <p class="post-date"><?php the_date(); ?> by <?php the_author(); ?></p>	
    <?php 
        if(is_single()):
            the_content(); 
        else: 
            the_excerpt(); 
            echo '<p><a href="' . esc_url(get_permalink()) . '">Read More...</a></p>';
        endif;
    ?>
    <?php
    // Add Disqus comments 
    ?>
</article>		
