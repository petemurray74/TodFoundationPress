<?php
/*
Template Name: Tod Home
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
 
<div id="page-tod-home"> 
<div class="row">
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
  </article>
<?php endwhile;?> 
<?php do_action( 'foundationpress_after_content' ); ?>

    <div class="sidebar">
        <?php
        //get concert info from concerts page
        $other_page = 8;
        if( have_rows('concert', $other_page) ): ?>
            <?php	$rows = get_field('concert', $other_page ); // get all the rows
                    $first_row = $rows[0]; // get the first row
            ?>
        <?php 
        if ($first_row['concert_image'])
        {?>
        <img src="<?php echo($first_row['concert_image']);
                  ?>">
        <?php
        }
        ?>
        <div class="concert">
                <p class="datetime"><?php echo($first_row['date_and_time']); ?></p>
                <div class="pieces"><?php echo($first_row['pieces']); ?></div>
            <?php
            if ($first_row['soloist']) { ?>
                <p class="soloist">Soloist:<br><?php echo($first_row['soloist']); ?></p>
            <?php }; ?>
                <a href="<?php echo($first_row['ticket_link']); ?>" class="button">Buy Tickets</a>  
        </div>
                <?php endif; ?>
    </div>

</div>
<div class="row rowspace">  
<div class="medium-4 columns">
<?php the_field('box1'); ?>   
</div>
<div class="medium-4 columns">
<?php the_field('box2'); ?>   
</div>
<div class="medium-4 columns">
<?php the_field('box3'); ?>   
</div>
</div>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();