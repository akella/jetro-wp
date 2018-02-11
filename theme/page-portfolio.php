<?php get_header();?>
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			// ?>


	<!-- begin pagetitle -->
	<div class="pagetitle">
	  <div class="container">
	    <div class="pagetitle__text"><?php the_title() ?></div>
	  </div>
	</div>
	<!-- end pagetitle -->
	<!-- begin content -->
	<div class="content">
	  <div class="container">
	   
	       <!-- begin block -->
	       <div class="block">
	         <!-- begin works -->
	         <div class="works">
	         	<?php
	         	 
	         	$args = array(
	         	    'post_type' => 'portfolio'
	         	);
	         	 
	         	$my_query = new WP_Query( $args );
	         	 
	         	if ( $my_query->have_posts() ) {
	         	 
	         	    while ( $my_query->have_posts() ) {
	         	 
	         	        $my_query->the_post();
	         	 			$bla = get_field('portfolio_image');

	         	        ?>

	   				<!-- begin work -->
	   				<a href="<?php the_permalink(); ?>" class="work">
	   				  <div class="work__image"> <img src="<?php echo $bla[sizes][medium]; ?>" alt=""> </div>
	   				  <div class="work__bottom">
	   				    <h4 class="work__title"><?php the_title(); ?></h4>
	   				    <div class="work__date"><?php echo get_the_date(); ?></div>
	   				  </div>
	   				</a>
	   				<!-- end work -->
	         	        <?php
	         	 
	         	    }
	         	 
	         	}
	         	 
	         	// Reset the `$post` data to the current post in main query.
	         	wp_reset_postdata();
	         	 
	         	?>
	           
	         </div>
	         <!-- end works -->
	       </div>
	       <!-- end block -->


	    
	  </div>
	</div>
	<!-- end content --><?php
		} // end while
	} // end if
	?>
<?php get_footer();?>