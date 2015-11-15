<?php  get_header();  ?>
<section id="main-content" class="main-content">
	<?php if(have_posts()) : while(have_posts()): the_post(); ?>
		<article class="post">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<div class="post-content">
				<?php the_content();  ?>
			</div>	
		</article>	<!-- article -->
	<?php endwhile; endif; ?>
				
		<div id="comments-list">
			<?php comments_template();  ?>
		</div><!-- #comments-area -->
		</section><!-- /#main-content -->

		<?php  get_sidebar();  ?>
		</div>
		
	
<?php  get_footer();  ?>