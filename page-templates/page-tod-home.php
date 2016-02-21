<?php
/*
Template Name: Tod Home
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
 
<div id="page-tod-home"> 
<div class="row">
<div class="medium-8 columns ">
<p>Welcome to this blah. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor.</p>
<img class="thumbnail" src="http://placehold.it/750x350">
</div>
<div class="medium-4 columns ">
<div class="concert">
<?php
$other_page = 8;
?>
<?php

if( have_rows('concert', $other_page) ): ?>
    <?php	$rows = get_field('concert', $other_page ); // get all the rows
			$first_row = $rows[0]; // get the first row
	?>
        <p class="datetime"><?php echo($first_row['date_and_time']); ?></p>
		<div class="pieces"><?php echo($first_row['pieces']); ?></div>
		<p class="soloist">Soloist:<br><?php echo($first_row['soloist']); ?></p>
		<a href="<?php echo($first_row['ticket_link']); ?>" class="button">Buy Tickets</a>  
		<p>a picture somwehere?</p>
<?php endif; ?>
</div>
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