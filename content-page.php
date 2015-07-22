<?php if(has_post_thumbnail()) :?>
    <div class="featured-image">
        <?php the_post_thumbnail('featured', array(
            'height' => false,
            'width' => false
        )); ?>
    </div>
<?php endif; ?>	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title('<h1 id="post-title">', '</h1>'); ?>						
    <?php the_content(); ?>				
</article>	
