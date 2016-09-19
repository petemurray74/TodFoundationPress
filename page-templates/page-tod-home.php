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

<div class="formrow">
<div class="row home-signupform">  
<div class="medium-12 columns">
	<h3>Be the first to hear about concerts</h3>
	<!-- Begin MailChimp Signup Form -->
</div>	
	<div id="mc_embed_signup">
	<form action="//todmordenorchestra.us13.list-manage.com/subscribe/post?u=bf6c084daf544aa4029cba35c&amp;id=51f10e1f86" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
	<div id="mc_embed_signup_scroll">
	<div class="mc-field-group">
		<label for="mce-FNAME">First Name </label><input type="text" value="" name="FNAME" class="" id="mce-FNAME">
	</div>
	<div class="mc-field-group">
		<label for="mce-LNAME">Last Name </label><input type="text" value="" name="LNAME" class="" id="mce-LNAME">
	</div>
	<div class="mc-field-group">
		<label for="mce-EMAIL">Email Address</label><input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
	</div>
	<div id="mce-responses" class="clear">
	<div class="response" id="mce-error-response" style="display:none"></div>
	<div class="response" id="mce-success-response" style="display:none"></div>
	<p></p></div>
	<p>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--></p>
	<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bf6c084daf544aa4029cba35c_51f10e1f86" tabindex="-1" value=""></div>
	<div class="mc-field-group clear"><input type="submit" value="Keep me updated" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	<p></p></div>
	</form>
	</div>
	<!--End mc_embed_signup-->
</div>
</div>
</div>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();