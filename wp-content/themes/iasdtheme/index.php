
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name');  ?></title>
	<?php wp_head();	?>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
</head>
<body>

<header class="home-header">
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
			<?php query_posts('pager=$paged)'); ?>
			<?php if(have_posts()) : while(have_posts()): the_post(); ?>

			<article class="post new-preview" >
				<div class="thumb"><a href="<?php the_permalink(); ?>">
					<?php  if (has_post_thumbnail() ){ the_post_thumbnail('list_articles_thumbs');
					} ?>
				</a></div>
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
				<small class="meta"><?php the_time(get_option('date_format')) ?>&bull; <?php the_category(', '); ?></small>
				<?php the_excerpt(); ?>
				<a class="more-link" href="<?php the_permalink(); ?>"><?php _e('ver mas', 'apk');  ?></a>
			</article>
			<?php endwhile; else : ?>
				<h2 class="post-title"><?php _e('No hay contenido disponible.', 'apk');  ?> </h2>
				<p class="post-content"><?php _e('No hay contenidos que correspondan a esta página, por favor realiza una busqueda para encontrar lo que deseas ver', 'apk');  ?></p>
				<?php get_search_form();?>
			<?php endif; ?>
		</div>
		<?php if(get_next_posts_link() ||  get_next_posts_link() ) {?>
			<div class="post-nav cf">
				<?php next_post_link(__( 'Anteriores' ,'apk'));  ?>
				<?php next_post_link(__( 'Recientes' ,'apk'));  ?>
			</div>
			<?php }?>




			<?php query_posts('pager=$paged)'); ?>
			<?php
			$args=array(
			   'showposts' => 4,
			);
			$my_query = new WP_Query($args); 

			if( $my_query->have_posts() ) : ?>
			   <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
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
			<?php endif; ?>


			
		<?php  get_sidebar();  ?>


		<button class="see-all">Ver todos los anuncios</button>
	</section>
	<section class="preview-section">
		<h2 class="section-title">Videos</h2>
		<div class="important-section">
			<h3 class="category-title">Mas Destacados</h3>
			<?php if(have_posts()) : while(the_post()): the_post(); ?>
			
			<article class="post new-preview" >
				<img src="http://lorempixel.com/output/animals-q-c-260-160-8.jpg">
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
				<small class="meta"><?php the_time(get_option('date_format')) ?>&bull; <?php the_category(', '); ?></small>
				<?php the_excerpt(); ?>
				<a class="more-link" href="<?php the_permalink(); ?>"><?php _e('ver mas', 'apk');  ?></a>
			</article>
			<?php endwhile; else : ?>
				<h2 class="post-title"><?php _e('No hay contenido disponible.', 'apk');  ?> </h2>
				<p class="post-content"><?php _e('No hay contenidos que correspondan a esta página, por favor realiza una busqueda para encontrar lo que deseas ver', 'apk');  ?></p>
				<?php get_search_form();?>
			<?php endif; ?>	
		</div>
		<?php if(get_next_posts_link() ||  get_next_posts_link() ) {?>
			<div class="post-nav cf">
				<?php next_post_link(__( 'Anteriores' ,'apk'));  ?>
				<?php next_post_link(__( 'Recientes' ,'apk'));  ?>
			</div>
			<?php }?>
		<?php  get_sidebar();  ?>


		<button class="see-all">Ver todos los Videos</button>
	</section>
	
</section>
</div>


<?php  get_footer();  ?>
