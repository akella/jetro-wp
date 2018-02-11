<?php get_header();?>
	<!-- begin hero -->
	<div class="hero">
	  <div class="container">
	    <div class="hero__wrap">
	      <!-- begin slider -->
	      <div class="slider">
	        <div class="slider__next"> <?php echo i('arrow'); ?> </div>
	        <div class="slider__prev"> <?php echo i('arrow'); ?> </div>
	        <div class="slider__slides js-hero">

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

	        		

	        					<div class="slider__slide slide" style="background: url(<?php echo $bla[sizes][large]; ?>)">
	        					  <div class="slide__content">
	        					    <h3 class="slide__title"><?php the_title(); ?></h3>
	        					    <?php the_content(); ?>
	        					  </div>
	        					</div>
	        	      	        <?php
	        	      	 
	        	      	    }
	        	      	 
	        	      	}
	        	      	 
	        	      	// Reset the `$post` data to the current post in main query.
	        	      	wp_reset_postdata();
	        	      	 
	        	      	?>
	          
	         
	        </div>
	      </div>
	      <!-- end slider -->
	    </div>
	    <div class="thumbs">
	      <ul>
	        <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
	        <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
	        <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
	        <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
	        <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
	        <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
	      </ul>
	    </div>
	  </div>
	</div>
	<!-- end hero -->
	<!-- begin content -->
	<div class="content">
	  <div class="container">
	    <!-- begin features -->
	    <div class="features">
	      <!-- begin feature -->
	      <div class="feature">
	        <div class="feature__title">
	          <div class="feature__icon"> <?php echo i('cog'); ?> </div>
	          <h2>Check out my latest portfolio items</h2>
	        </div>
	        <div class="feature__text">
	          <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis.
	            Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
	        </div> <a href="#" class="feature__more button">More</a> </div>
	      <!-- end feature -->
	      <!-- begin feature -->
	      <div class="feature">
	        <div class="feature__title">
	          <div class="feature__icon"> <?php echo i('check'); ?> </div>
	          <h2>Check out my latest portfolio items</h2>
	        </div>
	        <div class="feature__text">
	          <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis.
	            Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
	        </div> <a href="#" class="feature__more button">More</a> </div>
	      <!-- end feature -->
	      <!-- begin feature -->
	      <div class="feature">
	        <div class="feature__title">
	          <div class="feature__icon"> <?php echo i('user'); ?> </div>
	          <h2>Check out my latest portfolio items</h2>
	        </div>
	        <div class="feature__text">
	          <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis.
	            Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
	        </div> <a href="#" class="feature__more button">More</a> </div>
	      <!-- end feature -->
	    </div>
	    <!-- end features -->
	    <!-- begin block -->
	    <div class="block">
	      <h3 class="h3">Recent Works</h3>
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
	<!-- end content -->
<?php get_footer();?>