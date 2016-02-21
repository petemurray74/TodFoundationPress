<?php
/*
Template Name: Tod Home
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
 

<header id="featured-hero" role="banner" style="background-image: url('http://lorempixel.com/1000/300/abstract')">
	<div class="row column text-center hero-content">
	<h1>Todmorden Orchestra</h1>
	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
	</div>
</header>
<div id="page-tod-home"> 
<div class="row">
<div class="medium-6 columns medium-push-6">
<img class="thumbnail" src="http://placehold.it/750x350">
</div>
<div class="medium-6 columns medium-pull-6">
<h2>Next Concert</h2>
<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor.</p>
<?php
$other_page = 8;
?>
<?php

if( have_rows('concert', $other_page) ): ?>
    <?php	$rows = get_field('concert', $other_page ); // get all the rows
			$first_row = $rows[0]; // get the first row
	?>
        <p><?php echo($first_row['date_and_time']); ?></p>
		<p><?php echo($first_row['pieces']); ?></p>
		<p><?php echo($first_row['soloist']); ?></p>
		<p>Tickets: <?php echo($first_row['ticket_price']); ?></p>
		<a href="<?php echo($first_row['ticket_link']); ?>" class="button">Buy Tickets</a>  
<?php endif; ?>
</div>
</div>
<div class="row">
<div class="medium-4 columns">
<h3>Quote</h3>
<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
</div>
<div class="medium-4 columns">
<h3>Review</h3>
<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
</div>
<div class="medium-4 columns">
<h3>Keep in Touch</h3>
<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
</div>
</div>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();