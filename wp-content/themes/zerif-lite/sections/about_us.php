<?php zerif_before_about_us_trigger(); ?>

<!-- <div id="title-home">
<h1 class="intro-text animated fadeInRight">"Viajes corporativos e incentivos"</h1>
</div> -->


<?php 
  if($GLOBALS['q_config']['language']=='es'):
     masterslider(1); 
  endif;
  if($GLOBALS['q_config']['language']=='en'):
    masterslider(2); 
  endif;
?>



<section class="about-us" id="aboutus">

	<?php zerif_top_about_us_trigger(); ?>

	<div class="container">

		<!-- SECTION HEADER -->

		<div class="section-header">

			<?php

			/* Title */
			zerif_about_us_header_title_trigger();

			/* Subtitle */
			zerif_about_us_header_subtitle_trigger();

			?>

		</div><!-- / END SECTION HEADER -->

		<!-- 3 COLUMNS OF ABOUT US-->

		<div class="row">

			<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->

		<?php

			$zerif_aboutus_biglefttitle 	= get_theme_mod('zerif_aboutus_biglefttitle',__('Everything you see here is responsive and mobile-friendly.','zerif-lite'));
			$zerif_aboutus_text 			= get_theme_mod('zerif_aboutus_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros. <br><br>Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.');

			$zerif_aboutus_feature1_title 	= get_theme_mod('zerif_aboutus_feature1_title',__('YOUR SKILL #1','zerif-lite'));
			$zerif_aboutus_feature1_text 	= get_theme_mod('zerif_aboutus_feature1_text');

			$zerif_aboutus_feature2_title 	= get_theme_mod('zerif_aboutus_feature2_title',__('YOUR SKILL #2','zerif-lite'));
			$zerif_aboutus_feature2_text 	= get_theme_mod('zerif_aboutus_feature2_text');

			$zerif_aboutus_feature3_title 	= get_theme_mod('zerif_aboutus_feature3_title',__('YOUR SKILL #3','zerif-lite'));
			$zerif_aboutus_feature3_text 	= get_theme_mod('zerif_aboutus_feature3_text');

			$zerif_aboutus_feature4_title 	= get_theme_mod('zerif_aboutus_feature4_title',__('YOUR SKILL #4','zerif-lite'));
			$zerif_aboutus_feature4_text 	= get_theme_mod('zerif_aboutus_feature4_text');

			$text_and_skills = '';
			switch (
				(empty($zerif_aboutus_biglefttitle) ? 0 : 1)
				+ (empty($zerif_aboutus_text) ? 0 : 1)
				+
					( empty($zerif_aboutus_feature1_title) && empty($zerif_aboutus_feature1_text) ?
					( empty($zerif_aboutus_feature2_title) && empty($zerif_aboutus_feature2_text) ?
					( empty($zerif_aboutus_feature3_title) && empty($zerif_aboutus_feature3_text) ?
					( empty($zerif_aboutus_feature4_title) && empty($zerif_aboutus_feature4_text) ?
					0 && $text_and_skills=''
					: 1 && $text_and_skills='text_and_skills' )
					: 1 && $text_and_skills='text_and_skills' )
					: 1 && $text_and_skills='text_and_skills' )
					: 1 && $text_and_skills='text_and_skills' )
				) {
				case 3:
					$colCount = 4;
					break;
				case 2:
					$colCount = 6;
					break;
				default:
					$colCount = 12;
			}

				if( !empty($zerif_aboutus_biglefttitle) ):

					// echo '<div class="col-lg-' . $colCount . ' col-md-' . $colCount . ' column zerif-rtl-big-title">';
					 echo '<div class="col-lg-4 column zerif-rtl-big-title">';

						echo '<div class="big-intro" data-scrollreveal="enter left after 0s over 1s">';

							echo wp_kses_post( $zerif_aboutus_biglefttitle );

						echo '</div>';

					echo '</div>';

				endif;

			if( !empty($zerif_aboutus_text) ):

				echo '<div class="col-lg-' . $colCount . ' col-md-' . $colCount . ' column zerif_about_us_center ' . $text_and_skills . '" data-scrollreveal="enter bottom after 0s over 1s">';

					echo '<p>';

						echo wp_kses_post( $zerif_aboutus_text );

					echo '</p>';

				echo '</div>';

			endif;

			$there_is_skills = '';
			(
				!empty($zerif_aboutus_feature1_title) || !empty($zerif_aboutus_feature1_text) ? $there_is_skills='yes' :
				!empty($zerif_aboutus_feature2_title) || !empty($zerif_aboutus_feature2_text) ? $there_is_skills='yes' :
				!empty($zerif_aboutus_feature3_title) || !empty($zerif_aboutus_feature3_text) ? $there_is_skills='yes' :
				!empty($zerif_aboutus_feature4_title) || !empty($zerif_aboutus_feature4_text) ? $there_is_skills='yes' :
				$there_is_skills='');

			$zerif_aboutus_feature1_nr 	= get_theme_mod('zerif_aboutus_feature1_nr', '80');
			$zerif_aboutus_feature2_nr 	= get_theme_mod('zerif_aboutus_feature2_nr', '91');
			$zerif_aboutus_feature3_nr 	= get_theme_mod('zerif_aboutus_feature3_nr', '88');
			$zerif_aboutus_feature4_nr 	= get_theme_mod('zerif_aboutus_feature4_nr', '95');

			/* COLUMN 1 - SKILS */

			if ( $there_is_skills!='' ) :

		?>
		<!-- <div class="col-lg-<?php echo $colCount; ?> col-md-<?php echo $colCount; ?> column zerif-rtl-skills "> -->
		<div class="col-lg-8 column zerif-rtl-skills "> 

			<div class="skills" data-scrollreveal="enter right after 0s over 1s">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 co-xs-12 quienessomosfoto"><div class="img"><img src="http://www.advance-viajes.com/wp-content/themes/zerif-lite/images/quienessomos2.jpg" alt="img"></div></div>
					<div class="col-lg-6 col-md-6 col-sm-6 co-xs-12 quienessomosfoto"><div class="img"><img src="http://www.advance-viajes.com/wp-content/themes/zerif-lite/images/quienessomos3.jpg" alt="img"></div></div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 co-xs-12 quienessomosfoto"><div class="img"><img src="http://www.advance-viajes.com/wp-content/themes/zerif-lite/images/quienessomos4.jpg" alt="img"></div></div>
					<div class="col-lg-6 col-md-6 col-sm-6 co-xs-12 quienessomosfoto"><div class="img"><img src="http://www.advance-viajes.com/wp-content/themes/zerif-lite/images/quienessomos1.jpg" alt="img"></div></div>
				</div>

			</div>

		</div> <!-- / END SKILLS COLUMN-->

		<?php endif; ?>

	</div> <!-- / END 3 COLUMNS OF ABOUT US-->

	<!-- CLIENTS -->
	<?php
		if(is_active_sidebar( 'sidebar-aboutus' )):
			
				$zerif_aboutus_clients_title_text = get_theme_mod('zerif_aboutus_clients_title_text',__('OUR HAPPY CLIENTS','zerif-lite'));
			
				echo '<div class="our-clients">';
				
					if( !empty($zerif_aboutus_clients_title_text) ):
				
						echo '<h5><span class="section-footer-title">'.wp_kses_post($zerif_aboutus_clients_title_text).'</span></h5>';
						
					else:
					
						echo '<h5><span class="section-footer-title">'.__('OUR HAPPY CLIENTS','zerif-lite').'</span></h5>';

					endif;
					
				echo '</div>';
				
				echo '<div class="client-list">';
					echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';
					dynamic_sidebar( 'sidebar-aboutus' );
					echo '</div>';
				echo '</div> ';
			endif;
	?>

	</div> <!-- / END CONTAINER -->

	<?php zerif_bottom_about_us_trigger(); ?>

</section> <!-- END ABOUT US SECTION -->

<?php zerif_after_about_us_trigger(); ?>