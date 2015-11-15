<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name');  ?></title>
	<?php wp_head();	?>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>

<header class="pages-header">
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