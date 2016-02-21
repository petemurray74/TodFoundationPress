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
      </div>
 
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php if( have_rows('concert') ): ?>
	<div class="row small-up-1 medium-up-2 large-up-4">
    <?php while( have_rows('concert') ): the_row(); ?>
		<div class="concert column">
        <p><?php the_sub_field('date_and_time'); ?></p>
		<p><?php the_sub_field('pieces'); ?></p>
		<ul class="accordion" data-accordion data-allow-all-closed="true">
			<li class="accordion-item" data-accordion-item>
			<a class="accordion-title"><?php the_sub_field('soloist'); ?></a>
			<div class="accordion-content" data-tab-content>
			<?php the_sub_field('soloist_biog'); ?>
			</div>
			</li>
		</ul>
		<p>Tickets: <?php the_sub_field('ticket_price'); ?></p>
		<a href="<?php the_sub_field('ticket_link'); ?>" class="button">Buy Tickets</a>
		</div>
    <?php endwhile; ?>
	</div>
<?php endif; ?>
 </article>


</div>

<?php get_footer();
