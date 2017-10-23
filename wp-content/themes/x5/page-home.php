<?php
/**
* Template Name: Home
*
* @package WordPress
* @subpackage X5
*/
get_header();
get_template_part( 'partials/header', 'content' );

?>

<div class="content" id="content">
	
	<?php if ( get_field( 'x5_home_featured_heading' ) ||
						 get_field( 'x5_home_featured_author' ) ||
						 get_field( 'x5_home_featured_desc' ) ||
						 get_field( 'x5_home_featured_btnl' ) ||
						 get_field( 'x5_home_featured_cover_bg' ) ): ?>
		
		<section class="intro">

	    <div class="container">

	      <div class="info">

	      	<?php if ( get_field( 'x5_home_featured_heading' ) ): ?>
	      		<h2><?php echo esc_html( get_field( 'x5_home_featured_heading' ) ); ?></h2>
	      	<?php endif; ?>
	        
	        <?php if ( get_field( 'x5_home_featured_author' ) ): ?>
	        	<p class="author">by <span class="name"><?php echo esc_html( get_field( 'x5_home_featured_author' ) ); ?></span></p>
	        <?php endif; ?>
	        
	        <?php if ( get_field( 'x5_home_featured_desc' ) ): ?>
	        	<div class="desc"><?php echo wp_kses_post( force_balance_tags( get_field( 'x5_home_featured_desc' ) ) ); ?></div>
	        <?php endif; ?>
	        
	        <?php if ( get_field( 'x5_home_featured_btnl' ) ):
	        	$x5_home_featured_btnl = get_field( 'x5_home_featured_btnl' ); ?>
	        	
	        	<span class="wrapper"><a href="<?php echo esc_url( $x5_home_featured_btnl['url'] ); ?>" class="btn-purchase"><?php echo esc_html( $x5_home_featured_btnl['title'] ); ?></a></span>
	        
	        <?php endif; ?>
	        
	        <?php if ( get_field( 'x5_home_featured_cover_bg' ) ):
	        	$x5_home_featured_cover_bg = get_field ( 'x5_home_featured_cover_bg' ); ?>
	        	
	        	<img class="book-cover" src="<?php echo esc_url( $x5_home_featured_cover_bg['url'] ); ?>" alt="<?php echo esc_attr( $x5_home_featured_cover_bg['alt'] ); ?>" />
	        	
	        <?php endif; ?>
	        
	      </div>
	      <!-- / info -->

	    </div>
	    <!-- / container -->

	  </section>
	  <!-- / intro -->

	<?php endif; ?>
	
	<?php if ( get_field( 'x5_home_about_book_heading' ) ||
						 get_field( 'x5_home_about_book_intro_heading' ) ||
						 get_field( 'x5_home_about_book_intro_desc' ) ||
						 get_field( 'x5_home_about_book_intro_bg' ) ||
						 get_field( 'x5_home_about_book_summary_heading' ) ||
						 get_field( 'x5_home_about_book_summary_desc' ) ||
						 get_field( 'x5_home_about_book_summary_bg' ) ||
						 get_field( 'x5_home_about_book_btnl' ) ): ?>
		
		<section class="about-book">

	    <div class="container">
				
				<?php if ( get_field( 'x5_home_about_book_heading' ) ): ?>
					<h3><?php echo esc_html( get_field( 'x5_home_about_book_heading' ) ); ?></h3>
				<?php endif; ?>
	     
	     	<?php if ( get_field( 'x5_home_about_book_intro_heading' ) ||
						 			 get_field( 'x5_home_about_book_intro_desc' ) ||
									 get_field( 'x5_home_about_book_intro_bg' ) ) : ?>
					
					<div class="section left">
		        
		        <div class="info">
		        	
		        	<?php if ( get_field( 'x5_home_about_book_intro_heading' ) ): ?>
		        		<h4><?php echo esc_html( get_field( 'x5_home_about_book_intro_heading' ) ); ?></h4>
		        	<?php endif; ?>
		         	
		         	<?php if ( get_field( 'x5_home_about_book_intro_desc' ) ): ?>
		         		<div><?php echo wp_kses_post( force_balance_tags( get_field( 'x5_home_about_book_intro_desc' ) ) ); ?></div>
		         	<?php endif; ?>
		         	
		        </div>
		        <!-- info -->
						
						<?php if ( get_field( 'x5_home_about_book_intro_bg' ) ):
							$x5_home_about_book_intro_bg = get_field( 'x5_home_about_book_intro_bg' ); 
							$x5_home_about_book_intro_bg_size = wp_get_attachment_image_url( $x5_home_about_book_intro_bg['ID'], 'home_story_about' ); ?>
							
							<img src="<?php echo esc_url( $x5_home_about_book_intro_bg_size ); ?>" alt="<?php echo esc_attr( $x5_home_about_book_intro_bg['alt'] ); ?>" />
							
						<?php endif; ?>
		        
		      </div>
		      <!-- / section -->

				<?php endif; ?>
				
				<?php if ( get_field( 'x5_home_about_book_summary_heading' ) ||
						 			 get_field( 'x5_home_about_book_summary_desc' ) ||
									 get_field( 'x5_home_about_book_summary_bg' ) ) : ?>
				
					<div class="section right">
		        
		        <div class="info">
		        	
		        	<?php if ( get_field( 'x5_home_about_book_summary_heading' ) ): ?>
		        		<h4><?php echo esc_html( get_field( 'x5_home_about_book_summary_heading' ) ); ?></h4>
		        	<?php endif; ?>
		          
		          <?php if ( get_field( 'x5_home_about_book_summary_desc' ) ): ?>
		          	<div><?php echo wp_kses_post( force_balance_tags( get_field( 'x5_home_about_book_summary_desc' ) ) ); ?></div>
		          <?php endif; ?>
		          
		        </div>
		        <!-- info -->
		        
		        <?php if ( get_field( 'x5_home_about_book_summary_bg' ) ):
		        	$x5_home_about_book_summary_bg = get_field( 'x5_home_about_book_summary_bg' ); 
		        	$x5_home_about_book_summary_bg_size = wp_get_attachment_image_url( $x5_home_about_book_summary_bg['ID'], 'home_story_overview' ); ?>
		        	
		        	<img src="<?php echo esc_url( $x5_home_about_book_summary_bg_size ); ?>" alt="<?php echo esc_attr( $x5_home_about_book_summary_bg['alt'] ); ?>" />
		        	
		        <?php endif; ?>
		       
		      </div>
		      <!-- / section -->

				<?php endif; ?>
				
				<?php if ( get_field( 'x5_home_about_book_btnl' ) ):
					$x5_home_about_book_btnl = get_field( 'x5_home_about_book_btnl' ); ?>
				 	<a href="<?php echo esc_url( $x5_home_about_book_btnl['url'] ); ?>" class="link-more"><?php echo esc_html( $x5_home_about_book_btnl['title'] ); ?></a>
				<?php endif; ?>					 	      

	    </div>
	    <!-- / container -->

	  </section>
  <!-- / about-book -->

	<?php endif; ?>
	
	<?php if ( get_field( 'x5_home_countdown_heading' ) ||
						 get_field( 'x5_home_countdown_timer_is' ) ||
						 get_field( 'x5_home_countdown_form_is' ) ||
						 get_field( 'x5_home_countdown_desc' ) ): ?>
		
		<section class="countdown">

      <div class="container">
				
				<?php if ( get_field( 'x5_home_countdown_heading' ) ): ?>
					<h5><?php echo esc_html( get_field( 'x5_home_countdown_heading' ) ); ?></h5>
				<?php endif; ?>
        
        <?php if ( get_field( 'x5_home_countdown_timer_is' ) ): ?>
        	<div id="timer" class="timer"></div>
        <?php endif; ?>

        <?php if ( get_field( 'x5_home_countdown_form_is' ) ): ?>
        	
        	<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						
						<form action="//stardevelopment.us16.list-manage.com/subscribe/post?u=a2d7b6de7eaa22cbcd2623cc3&amp;id=7bb9d50cf4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
					  
							<label for="email-txt" class="hide">Email address</label>
							<input id="email-txt" type="email" class="email-txt" value="" name="EMAIL" class="email-txt" id="mce-EMAIL" placeholder="Email address" required>
				    
				    	<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    	<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a2d7b6de7eaa22cbcd2623cc3_7bb9d50cf4" tabindex="-1" value=""></div>

				    	<input class="subscribe-submit-btn" type="submit" value="GO" name="subscribe" id="mc-embedded-subscribe">
					    
						</form>
					</div>
					<!--End mc_embed_signup-->

        <?php endif; ?>        
				
				<?php if ( get_field( 'x5_home_countdown_desc' ) ): ?>
				  <div class="message"><?php echo wp_kses_post( force_balance_tags( get_field( 'x5_home_countdown_desc' ) ) ); ?></div>
				<?php endif; ?>       

      </div>
      <!-- / container -->

    </section>
    <!-- / countdown -->

	<?php endif; ?>

	<?php if ( get_field( 'x5_home_about_author_heading' ) ||
						 get_field( 'x5_home_about_author_top_heading' ) ||
						 get_field( 'x5_home_about_author_subtitle' ) ||
						 get_field( 'x5_home_about_author_desc' ) ||
						 get_field( 'x5_home_about_author_social_is' ) ||
						 get_field( 'x5_home_about_author_rows' ) ): ?>
					
		<section class="about-author">

	    <div class="container">
					
	      <div class="info">

	      	<?php if ( get_field( 'x5_home_about_author_top_heading' ) ): ?>
	      		<h3><?php echo esc_html( get_field( 'x5_home_about_author_top_heading' ) ); ?></h3>
	      	<?php endif; ?>
	       	
	       	<?php if ( get_field( 'x5_home_about_author_heading' ) ): ?>
	       		<h4><?php echo esc_html( get_field( 'x5_home_about_author_heading' ) ); ?></h4>
	       	<?php endif; ?>
	      
	      	<?php if ( get_field( 'x5_home_about_author_subtitle' ) ): ?>
	      		<p class="style"><?php echo esc_html( get_field( 'x5_home_about_author_subtitle' ) ); ?></p>
	      	<?php endif; ?>
	        
	        <?php if ( get_field( 'x5_home_about_author_desc' ) ): ?>
	        	<div class="descr"><?php echo wp_kses_post( force_balance_tags( get_field( 'x5_home_about_author_desc' ) ) ); ?></div>
	        <?php endif; ?>
	        
	        <?php if ( get_field( 'x5_home_about_author_social_is' ) ): ?>
	        	<?php get_template_part( 'partials/social', 'buttons' ); ?>
	        <?php endif; ?>
	        
	      </div>
	      <!-- / info -->
				
				<?php if ( get_field( 'x5_home_about_author_bg' ) ):
					$x5_home_about_author_bg = get_field( 'x5_home_about_author_bg' ); 
				
					$x5_home_about_author_bg_size = wp_get_attachment_image_url( $x5_home_about_author_bg['ID'], 'home_author_pic'); ?>
					
					<img class="author-pic" src="<?php echo esc_url( $x5_home_about_author_bg_size ); ?>" alt="<?php echo esc_attr( $x5_home_about_author_bg['alt'] ); ?>" />
					
				<?php endif; ?>

	      <?php if ( have_rows( 'x5_home_about_author_rows' ) ): ?>
	      
	      	<ul class="other-books">
	      
	      		<?php while( have_rows( 'x5_home_about_author_rows' ) ) : the_row(); ?>
	      			
	      			<?php if ( get_sub_field( 'x5_home_about_author_rows_bg' ) &&
	      								 get_sub_field( 'x5_home_about_author_rows_heading' ) &&
	      								 get_sub_field( 'x5_home_about_author_rows_btnl' ) ):
	      				$x5_home_about_author_rows_bg = get_sub_field( 'x5_home_about_author_rows_bg' );
	      				$x5_home_about_author_rows_btnl = get_sub_field( 'x5_home_about_author_rows_btnl' ); ?>
	      				
	      				<li>
				          <a href="<?php echo esc_url( $x5_home_about_author_rows_btnl['url'] ); ?>"><img src="<?php echo esc_url( $x5_home_about_author_rows_bg['url'] ); ?>" alt="<?php echo esc_attr( $x5_home_about_author_rows_bg['alt'] ); ?>" />
				            <p class="title"><?php echo esc_html( get_sub_field( 'x5_home_about_author_rows_heading' ) ); ?></p>
				          </a>
				        </li>

	      			<?php endif; ?>
	      
	      		<?php endwhile; ?>
	      
	      	</ul>
	      	<!-- / other-books -->
	      
	      <?php endif; ?>
				
	      

	     

	    </div>
	    <!-- / container -->

	  </section>
	  <!-- / about-author -->

	<?php endif; ?>

	<?php if ( have_rows( 'x5_home_testimonials_rows' ) ): ?>
	
		<div class="testimonials">

			<div id="testimonials" class="royalSlider heroSlider rsMinW rsDefault">
	
				<?php while( have_rows( 'x5_home_testimonials_rows' ) ) : the_row(); ?>
					
					<?php if ( get_sub_field( 'x5_home_testimonials_rows_desc' ) ||
										 get_sub_field( 'x5_home_testimonials_rows_name' ) ||
										 get_sub_field( 'x5_home_testimonials_rows_book' ) ): ?>
						
						<div class="testimonial">
							<?php if ( get_sub_field( 'x5_home_testimonials_rows_desc' ) ): ?>
								<blockquote><?php echo wp_kses_post( force_balance_tags( get_sub_field( 'x5_home_testimonials_rows_desc' ) ) ); ?></blockquote>
							<?php endif; ?>
		  				
		  				<cite>
		  					<?php if ( get_sub_field( 'x5_home_testimonials_rows_name' ) ): ?>
		  						<span class="source"><?php echo esc_html( get_sub_field( 'x5_home_testimonials_rows_name' ) ); ?></span> //
		  					<?php endif; ?>
		  					
		  					<?php if ( get_sub_field( 'x5_home_testimonials_rows_book' ) ): ?>
		  						<span class="book"><?php echo esc_html( get_sub_field( 'x5_home_testimonials_rows_book' ) ); ?></span>
		  					<?php endif; ?>
		  				</cite>
		  			</div>
		  			<!-- / testimonial -->

					<?php endif; ?>
					
				<?php endwhile; ?>
			
			</div>
  		<!-- royalSlider-->

		</div>
    <!-- / testimonials -->
	
	<?php endif; ?>  

</div>
<!-- content -->

<?php get_footer();
