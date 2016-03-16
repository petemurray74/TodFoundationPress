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
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
<?php if( have_rows('concert') ): ?>
    <?php while( have_rows('concert') ): the_row(); ?>
    <div class="collapse row">      
		<div class="large-6 medium-6 columns">
            <div class="concert ">
             <?php if( get_sub_field('concert_image') ){ ?> 
            <img src="<?php the_sub_field('concert_image'); ?>" alt="concert" >
                    <?php }; ?>  
        <h3><strong><?php the_sub_field('date_and_time') ?></strong></h3>
		<p><?php the_sub_field('pieces'); ?></p>
        <?php if( get_sub_field('soloist') ){ ?> 
        <h4>Soloist</h4>    
		<ul class="accordion" data-accordion data-allow-all-closed="true">
			<li class="accordion-item" data-accordion-item>
			<a class="accordion-title"><?php the_sub_field('soloist'); ?></a>
			<div class="accordion-content" data-tab-content>
                <?php echo the_sub_field('soloist_biog'); ?> 
			</div>
			</li>
		</ul>
        <?php }; ?>    
		<p>Tickets: <?php the_sub_field('ticket_price'); ?></p>
		<a href="<?php the_sub_field('ticket_link'); ?>" class="button">Buy Tickets</a>
            </div>
        </div> 
    </div>    
    <?php endwhile; ?>
	</div>
<?php endif; ?>
        </div>
 </article>


</div>

<?php get_footer();
