<?php
/** This is the header for my theme. 
* It is really simple and has the main container within this file. The closing container is in the footer.
**/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800' rel='stylesheet' type='text/css'>

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/masonry.pkgd.min.js"></script>


</head>

<body <?php body_class(); ?> >

<main class="wrapper">	<?php// The Container to Rule Them All ?>
	<header class="">

		<div class="split_head" id="logo_header"> <?php// Left side containing the logo ?>

		</div> <?php// !End of left side ?>

		<div class="split_head" id="life"> <?php// Right side split ?>

		</div> <?php// !End of Right side split ?>

		<nav class="menu"> <?php// The menu?>

		</nav> <?php// !End of the menu ?>
	</header>	