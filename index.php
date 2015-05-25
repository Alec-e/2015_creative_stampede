<?php 
/*
The Last of the last. 
The end of the road. 
The last of it's kind. 
Well, the last one in the heirarchy.
This is the main template file aka the index.
*/
get_header(); 

?>

<main class="main_container clearfix"> 
	<section> <?php// Blog Container ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article class="the_post">
					<h3><?php the_title();?></h3>
						<?php the_excerpt(); ?>
				</article>	
			
			<?php endwhile; ?>

		<?php endif; ?>

	</section> <?php// !End of blog container ?>

	<aside class="side_bar"> <?php// Sidebar ?>

			<?php get_sidebar(); ?>
	
	<aside> <?php// !End Sidebar ?>
</main>

<?php get_footer(); ?>