<?php /* Template Name: Anuncios Page
*/ ?>
<?php  get_header();  ?>
<section id="main-content" class="main-content">
	<h2 class="section-title">Anuncios</h2>
	<div class="important-section">
	<?php
    //Fix homepage pagination
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }

    $temp = $wp_query;  // re-sets query
    $wp_query = null;   // re-sets query
    $args = array( 'post_type' => 'anuncio', 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 12, 'paged' => $paged);
    $wp_query = new WP_Query();
    $wp_query->query( $args );
    while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

	<article class="post new-preview" >
		<div class="thumb"><a href="<?php the_permalink(); ?>">
			<?php  if (has_post_thumbnail() ){ the_post_thumbnail('list_articles_thumbs');
			} ?>
		</a></div>
		<h2 class="post-title"><?php the_title(); ?> </h2>
		<small class="meta"><?php the_time(get_option('date_format')) ?> <?php the_category(', '); ?></small>
		<?php the_excerpt(); ?>
		<a class="more-link" href="<?php the_permalink(); ?>"><?php _e('ver mas', 'apk');  ?></a>
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