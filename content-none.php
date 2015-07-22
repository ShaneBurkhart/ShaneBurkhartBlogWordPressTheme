<div class="">			
	<article>
		<h1>Nothing Found</h1>					
		<?php if (is_search()) : ?>
			<h5>Search results:<?php echo ' "' . get_search_query() . '"'; ?></h5>
			<p>Sorry, but nothing matched your search terms. <br />Try again with some different keywords.</p>
		<?php else : ?>
			<p>It seems we cannot find what you are looking for? Perhaps try searching.</p>
		<?php endif; ?>				
		<?php get_search_form(); ?>
	</article>		
</div>	
