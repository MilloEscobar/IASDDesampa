<?php /* Template Name: Videos Page
*/ ?>
<?php  get_header();  ?>
<section id="main-content" class="main-content">
<h2 class="section-title">Videos</h2>
<div class="important-section">
	<?php
    //Fix homepage pagination
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }

    $temp = $wp_query;  // re-sets query
    $wp_query = null;   // re-sets query
    $args = array( 'post_type' => 'video', 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 12, 'paged' => $paged);
    $wp_query = new WP_Query();
    $wp_query->query( $args );
    while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

	<article class="post video-preview" >
		<a class="" href="<?php the_permalink(); ?>">
			<div class="thumb">
				<?php  if (has_post_thumbnail() ){ the_post_thumbnail('list_articles_thumbs');
				} ?>
			</div>
			<h2 class="video-title"><?php the_title(); ?> </h2>
		</a>
	</article>

<?php endwhile; ?>
</div>
   <?php paginate(); 
   $wp_query = null;
   $wp_query = $temp; // Reset
   ?>


		</section>
		</div>
		
	
<?php  get_footer();  