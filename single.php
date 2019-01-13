<?php get_header(); ?>
<div id="single">
	<?php if (in_category('new-event')) : ?> 
		<?php get_template_part( 'single-newevent' ); ?>
	<?php else : ?> 
		<?php get_template_part( 'single-buken' ); ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>