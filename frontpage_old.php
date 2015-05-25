<?php /*
 * Template Name: Front Page
 * Description: A Page Template with a darker design.
 
*/?>
<?php get_header('port'); ?>
<!---****************END OF HEADER********************-->
					<div class="container clearfix">
						<span class="DoTitle">Work I Have Done</span>
						<div class="Work">
							<div class="tiles">
								<?php 
									$args = array( 'post_type' => 'Work',
									 'posts_per_page' => 3 );
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post();?>
									
								<a class="gallery_thumbnail_post" href="<?php echo get_post_meta(get_the_ID(), 'URL', TRUE); ?>">
									  <?php
									 echo the_post_thumbnail();
									  ?>
								</a>
								<?php
									endwhile;
								?>
							</div>
						</div>
					</div>		
				<div class="container2 clearfix">
						<div class="tagline">Designing a website is like solving a puzzle. You have to rearrange, adjust, and maybe sometimes trick the system to get it just right.
						</div>
				</div>
						<div class="container clearfix">
							<span class="DoTitle">What I do</span>
								<div class="tiles">
							<div class="tile2"><img class="round" src="/wp-content/uploads/2014/10/alec-espiritu-web-design-san-diego-responsive-design.png" alt="Alec Espiritu Responsive Web Design">How many of us rely on our phones now a days? We are consistently reading, shopping, and updating. It's important to keep up with the times. I will provide that service, making your website adjust to any computer, tablet, and phone.</div>
							<div class="tile2"><img class="round" src="/wp-content/uploads/2014/10/alec-espiritu-web-design-san-diego-graphic-designer.png" alt="Alec Espiritu Graphic Designer">Besides providing a fully functional website, I also provide custom graphics. From logo work to ad design, I can design to your every need.</div>
							<div class="tile2"><img class="round" src="/wp-content/uploads/2014/10/alec-espiritu-web-design-san-diego-seo.png" alt="Alec Espiritu SEO">SEO(Search Engine Optimization) is a very importrant aspect. In order to be indexed within search engines you must provide content. Let's work together to make your company known.</div>
								</div>
						</div>
			<footer>
				<?php get_footer(); ?>

			</footer>
		</div>