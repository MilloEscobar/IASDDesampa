<?php /* Template Name: Home Page
*/ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name');  ?></title>
	<?php wp_head();	?>
</head>
<body>

<header class="home-header">
	<?php  if (has_post_thumbnail() ){ the_post_thumbnail('home_thumbs');
					} ?>
	<div id="main-nav" class="nav-bar">
		<nav class="main-nav">
			<h1 class="logo-main"><?php bloginfo('name');  ?></h1>
			<ul class="list-nav">
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</nav>
	</div>
</header>

<div id="global-container">
<section id="main-content" class="full-content">
	<section class="preview-section">
		<h2 class="section-title">Anuncios</h2>
		<div class="important-section">
			<h3 class="category-title">Mas Destacados</h3>
			<?php $args = array ('post_type' => 'anuncio', 'posts_per_page' => 5) ?>
			<?php $query = new WP_Query( $args ); ?>
			 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
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
			   <?php endwhile; 
			 wp_reset_postdata();
			 else : ?>
			 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			 <?php endif; ?>

			
			
		</div>
		<?php if(get_next_posts_link() ||  get_next_posts_link() ) {?>
			<div class="post-nav cf">
				<?php next_post_link(__( 'Anteriores' ,'apk'));  ?>
				<?php next_post_link(__( 'Recientes' ,'apk'));  ?>
			</div>
			<?php }?>


		<a href="noticias" class="see-all">Ver todos los anuncios</a>
	</section>
	<section class="preview-section">
		<h2 class="section-title">Videos</h2>
		<div class="important-section">
			<h3 class="category-title">Mas Destacados</h3>
			<?php $args = array ('post_type' => 'video', 'posts_per_page' => 5) ?>
			<?php $query = new WP_Query( $args ); ?>
			 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

			 			<article class="post video-preview" >
			 				<a class="" href="<?php the_permalink(); ?>">
							<div class="thumb">
								<?php  if (has_post_thumbnail() ){ the_post_thumbnail('list_articles_thumbs');
								} ?>
							</div>
							<h2 class="video-title"><?php the_title(); ?> </h2>
							</a>
						</article>

			 <?php endwhile; 
			 wp_reset_postdata();
			 else : ?>
			 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			 <?php endif; ?>
		</div>		
		<a href="videos" class="see-all">Ver todos los videos</a>
	</section>
	
</section>
</div>


<?php  get_footer();  ?>
