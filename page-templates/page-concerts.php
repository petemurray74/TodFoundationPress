<?php
/*
Template Name: Tod Concerts
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-concerts" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
<?php while ( have_posts() ) : the_post(); ?>
      <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
    <div class="entry-content">
	<?php the_content(); ?>
	<div class="concert-wrapper row small-up-1 medium-up-2 large-up-3" data-equalizer data-equalize-by-row="true"> 
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
<?php if( have_rows('concert') ): ?>
    <?php while( have_rows('concert') ): the_row(); ?>
    <div class="column">      
            <div class="concert" data-equalizer-watch>
				<h3><strong><?php the_sub_field('date_and_time') ?></strong></h3>
				<?php if( get_sub_field('concert_image') ){ ?>
				<img src="<?php the_sub_field('concert_image'); ?>" alt="concert">
							<?php }; ?>  
				<?php the_sub_field('pieces'); ?>
				<?php if( get_sub_field('soloist') ){ ?> 
				<h4>Soloist</h4>    
				<?php the_sub_field('soloist'); ?>
				<?php the_sub_field('soloist_biog'); ?> 
				<?php }; ?>    
				<p>Tickets: <?php the_sub_field('ticket_price'); ?></p>
				<a href="<?php the_sub_field('ticket_link'); ?>" class="button">Buy Tickets</a>
            </div>
    </div>    
    <?php endwhile; ?>
	</div>
<?php endif; ?>
	</div>
 </article>


</div>

<?php get_footer();
