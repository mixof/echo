<?php
get_header();
$referral_meta = get_post_meta( get_the_ID(), '',false );
$referral_hours = maybe_unserialize(get_post_meta( get_the_ID(),'referral_hours_serilized',true));

if (isset($_SESSION['zip'])) {
	$zip							= $_SESSION['zip'];
} else {
	$ip								= $_SERVER['REMOTE_ADDR'];
	$zip							= $referral_meta["referral_default_zip"][0];
	$_SESSION['zip']	= $referral_meta["referral_default_zip"][0];
}

wp_enqueue_style("allsafecss");
?>
<script src='https://www.google.com/recaptcha/api.js' ></script>
<script>
jQuery(document).ready(function($) {

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  //alert('Mobile');
  //jQuery( ".leadgenformlong" ).remove();
} else {
  //alert('Desktop');
  //jQuery( ".quote_form" ).remove();
}

});
</script>

<style>
.aiosrs-rating-wrap {
  display:none;
}
@media (min-width:1025px) {
	.subheader-inner {
		position: relative;
		display: table;
		width: 86%;
		max-width: 1280px;
		margin: 0 auto;
	}
	.subheader-inner .subdesc {
		padding-top:6px !important;
	}
}
.subheader-inner {
	height:88px !important;
}
.leadgenformlong {
	bottom:75px;
}
.yourlocaldealer {
	font-weight:bold;
	font-size:28px;
	margin:0 0 5px;
}
.nopaddingtop {
	padding-top:0px;
}

.dealer_website {
  color:#666;
}
.dealerphone {
	/*padding-top:15px;*/
	color:#666;
}

.dealer_email {
	color:#666;
}

.iva_apptform_wrap {
	padding-top:20px;
}

.dealer_form_header {
	font-size:35px !important;
	line-height:42px !important;
}

.mobileicon {
	padding-right: 10px;
	font-size: 25px;
	top: 2px;
	position: relative;
}

.emailicon {
	padding-right: 10px;
	font-size: 18px;
}

.callyou {
	color:#666;
	padding-top:20px;
}

.callyouone {
	font-weight:bold;
}

.dealermap {
	padding-top:20px;
}

.socialicons {
	border-radius:3px !important;
}

.dealer-social-links {
	text-align:center;
}
.connectwithus {
	margin-bottom:5px;
}

.innerhoursofoperations {
	width:45%;
	margin:0 auto;
}
	
.freequotedealer {
	left:23px;		
}

	#map {
		height:345px !important;
	}

	.bottom-fixed {
		display:none;
	}

	.mobiletabs {
		display:none;
	}


@media (min-width: 320px) and (max-width: 480px) {

.mobiletabs {
	display:block;
}

.quote_form {
	display:none;
}

	/* #back-top {
		bottom:55px !important;
	} */
	
	.copyright {
		bottom:20px;
	}
	
.centertext {
	color:#000000;
	line-height:35px;
}

.subheader-inner {
	height:40px !important;
	padding:20px 0 !important;
}

.innerhoursofoperations {
	width:100%;
	margin:0 auto;
}

.iva_post {
	padding-bottom:0px !important;
}

.dealer-social-links {
    padding: 10px 10px 0px 10px !important;
    margin: 10px 10px 0px 0px !important;
}

.dealer_one_third {
	margin-bottom:0px !important;
}

.tabs ul li {
	border:1px solid #ddd !important;
}

.mobileareaserved {
	width:230px;
	overflow-y:scroll;
}
	
	.tabs {
		top:0px;
	}	
	.freequotedealer {
		left:0px;	
	}
.fixed-header {
	position:fixed !important;
}

.site-search.mobilesearch.fixed-search {
	top:60px;
}

.fixed-searchheight {
	height:80px;
}
	
.bottom-fixed {
	display:block;
	bottom: 0;
	color:#ffffff;	
	background-color:#008CCA !important;
	width:100%;
	z-index:999;
	padding:10px;
	margin-top:10px;
}

.bottom-fixed h2 {
	margin-bottom:0px;
}
	
	.tabs {
		padding-left:0px;
		display:none;
	}
	
	html.pum-open.pum-open-overlay.pum-open-scrollable body>[aria-hidden]	{
		padding-right:0px !important;
	}

	/*Accordian*/
	.accordion {
		width: 100%;
		background-color: #FFF;
	}
	.accordion .accordion-head {
			color: #929daf;
			background-color: #fff;
			border: 1px solid #ccc;
			position: relative;
			padding: 13px;
			font-size: 0.87em;
			cursor: pointer;
			overflow: hidden;
	}
	.accordion .accordion-head * {
			cursor: pointer;
	}
	.accordion .accordion-head h4 {
			float: left;
			margin-bottom:0px;
			font-size: 18px;
			font-weight: 700;
	}
	.accordion .accordion-head:hover {
			filter: alpha(opacity=80);
			opacity: 0.80;
			background:rgba(0, 0, 0, 0.08);
			color:#185c98;
	}
	.accordion-head.close {
		background:none !important;
		color: #929daf !important;
	}
	.accordion .accordion-body {
			border-bottom: 1px solid #fff;
			padding: 20px;
			height: auto;
			display: none;
	}
	.arrow {
		float: right;
		width: 12px;
		height: 12px;
		border: 1px solid #185c98;
		border-width: 0 0 2px 2px;
		margin-top: 7px;
		-webkit-transform: rotate(225deg);
		-ms-transform: rotate(225deg);
		-o-transform: rotate(225deg);
		transform: rotate(225deg);
	}
	.accordion-head.open .arrow {
		margin-top: 7px;
		-webkit-transform: rotate(-45deg);
		-ms-transform: rotate(-45deg);
		-o-transform: rotate(-45deg);
		transform: rotate(-45deg);
	}

	.callortextlink {
		display:block;
	}
	
}
.thecontent {
	padding:20px 50px 0px 50px;
}
</style>

<script type="text/javascript">

	jQuery(document).ready(function(){
        var thankyou;
        <?php  if(isset($_SESSION["show_thanks"]) && $_SESSION["show_thanks"]){
        $_SESSION["show_thanks"] = false;?>
        thankyou = '<span class="form_submission_msg">Thank you, we will be in touch with you soon.<br> OR</span>';
        <?php }?>
        if (thankyou == null){
            thankyou = "";
        }
        jQuery(".breadcrumb-wrap").hide();
	    //Preparing the header

			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				<?php if( strpos($_SERVER["REQUEST_URI"], 'nodealer') !== false ) { ?>
					jQuery(".subdesc").html(thankyou+'<div class="dealer_phone"><span>No record</span></div>'
					);
				<?php } else { ?>
					/* jQuery(".subdesc").html(thankyou+'<div class="dealer_phone"><span>Call now to Get Started</span><br> <a ' +
						'href="tel:<?php echo($referral_meta["referral_phone"][0]); ?>"><?php echo($referral_meta["referral_phone"][0]); ?></a><br></div>'
					); */
						jQuery(".subdesc").html(thankyou+'<div class="mobileheading" style="font-size:28px;">Local Dealer coming soon:</div>');
				<?php } ?>
			} else {
					<?php if( strpos($_SERVER["REQUEST_URI"], 'nodealer') !== false ) { ?>
							jQuery(".subdesc").html('');
					<?php } else { ?>
							jQuery(".subdesc").html(thankyou+'<div class="desktopheading">Local Dealer coming soon:</div>');
					<?php } ?>
        
			}


		jQuery("#stretched").removeClass("rightsidebar").addClass("fullwidth");
		jQuery("#main").removeClass("rightsidebar").addClass("fullwidth");

		jQuery('#popmake-8933 .pum-content').html(jQuery(".quote_form .iva_appt_section").clone())

		//Accordian
		jQuery('.accordion').each(function () {
				var $accordian = jQuery(this);
				$accordian.find('.accordion-head').on('click', function () {
							jQuery(this).parent().find(".accordion-head").removeClass('open close');
							jQuery(this).removeClass('open').addClass('close');
						$accordian.find('.accordion-body').slideUp();
						if (!jQuery(this).next().is(':visible')) {
									jQuery(this).removeClass('close').addClass('open');
								jQuery(this).next().slideDown();
						}
				});
		});
	});
</script>

 <!-- <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "LocalBusiness",
  "name": "<?php echo $referral_meta["referral_name"][0];?>",
  "email": "<?php echo $referral_meta["referral_email"][0];?>",
  "image": "https://allsafepool.com/wp-content/uploads/2015/04/all-safe-new-logo.png",
  "priceRange": "$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo $referral_meta["referral_address"][0];?>",
    "addressLocality": "<?php echo $referral_meta["referral_city"][0];?>",
    "addressRegion": "<?php echo $referral_meta["referral_state"][0];?>",
    "postalCode": "<?php echo $referral_meta["referral_default_zip"][0];?>",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "<?php echo $referral_meta["referral_latitude"][0];?>",
    "longitude": "<?php echo $referral_meta["referral_longitude"][0];?>"
  },
  "url": "<?php echo site_url().$_SERVER['REQUEST_URI'];?>",
  "telephone": "<?php echo $referral_meta["referral_phone"][0];?>",
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
      ],
      "opens": "00:00",
      "closes": "23:59"
    }

  ]
}
</script> -->
<span></span>
<div id="primary" class="pagemid-dealer">
	<div class="inner">	
		<div class="content-area">
            <section class="dealer_top">

				<?php

                //echo($referral_meta["referral_twitter"][0]);
				$format = get_post_format( $post->ID );
                if(DELEAR_DEBUG) {
                    echo '<pre>';
                    var_dump($_SESSION);
                    $_SESSION['form_data'] = $_SESSION['sgrid'] = null;
                    echo '</pre>';
                }

				?>

				<?php if( false === $format ) { $format = 'standard'; } ?>

				<?php //if( atp_generator( 'sidebaroption', get_the_id() ) != "fullwidth" ){ $width = '870'; } else { $width = '1170'; } ?>

				<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

				<div <?php post_class('iva_post');?> id="post-<?php the_ID(); ?>">

					<div class="post_wrap">

					<!-- post formats-->
					<?php if( $format != 'audio' && $format != 'video') { get_template_part( 'post','formats'); } ?>

					<!-- post content-->
					<?php if( $format != 'aside' && $format != 'quote' && $format != 'link'){ ?>

                        <!-- post content-->
                        <div class="post_content nopaddingtop">

													<?php if(! strpos($_SERVER["REQUEST_URI"],'nodealer')){ ?>
													<!-- <div class="dealer_title dealer_lead_form_big">
														Thank you for your interest in All Safe Pool Fence & Covers!
                           </div> -->
														<!-- <div class="subtitleline">
															Your Local Dealer is
														</div> -->
														<?php } else { ?>
															<div class="dealer_title">
															No dealer available!
														</div>
														<?php } ?>
                            <!-- <div class="entry-meta">
                                <?php
                                edit_post_link( __( 'Edit', 'iva_theme_front' ), '<span class="edit-link">', '</span>' );
                                ?>
                            </div> -->
                            <div class="entry-content nopaddingtop">
                                <div class="entry-content nopaddingtop">

                                    <?php //the_title('<h1 class="dealer_title">', '</h1>'); ?>
                                   

                                    <?php if(! strpos($_SERVER["REQUEST_URI"],'nodealer')){?>
                                    <div class="one_third dealer_one_third dealer_lead_form_small">


                                        <!-- <strong class="centertext">
                                            Your Local Dealer is
                                        </strong> -->
                                        <p>Safety is important to us
                                            and we want to put you in contact with
                                            a safety professional. We are currently
                                            working to establish an All-Safe dealer
                                            in your area. In the meantime the local
                                            company below specializes in pool safety
                                            barriers and may be able to assist you.</p>
																				<h2 class="centertext">
                                               <?php echo $referral_meta["referral_name"][0]?>
                                        </h2>
																				<div class="one_third dealer_one_third midle_dealer">
																					<!-- <div class="dealer_location_info">
																							<?php echo($referral_meta["referral_city_show"][0] == 1 ? ($referral_meta["referral_city"][0]) : ""); ?>,
																							<?php echo($referral_meta["referral_state_show"][0] == 1 ? (" " . $referral_meta["referral_state"][0]) : ""); ?>
																					</div> -->

																					<?php if ($referral_meta["referral_phone_show"][0]) { ?>
																							<div class="">
																									<span>Call or Text:</span> <a
																													href="tel:<?php echo($referral_meta["referral_phone"][0]); ?>" class="callortextlink"><?php echo($referral_meta["referral_phone"][0]); ?></a>
																							</div>
																					<?php } ?>

																					<?php if ($referral_meta["referral_email_show"][0]) { ?>
																							<div class="dealer_email">
																									<span>Email:</span> <a href="mailto:<?php echo $referral_meta["referral_email"][0]; ?>"><?php echo $referral_meta["referral_email"][0]; ?></a>
																							</div>
																					<?php } ?>

																					<?php if ($referral_meta["referral_website_show"][0]) { ?>
																							<div class="dealer_website">
																									<span>Website:</span> <a
																													href="<?php echo($referral_meta['referral_website'][0]); ?>"><?php echo($referral_meta['referral_website'][0]); ?></a>
																									<br>
																							</div>
																					<?php } ?>
                                                                                    <div style="margin-top:10px;"><h2 class="centertext" style="color:#cc0000">Tell them All-Safe referred you</h2></div>
                                                                                    <div style="margin-top:30px;color:#000;font-size:13px;font-weight:lighter;"><p>The company listed above is not a representative
                                                                                            of All-Safe. Their contact information is provided
                                                                                            as a courtesy only. All-Safe does not warranty or
                                                                                            guarantee their work and/or services. The products
                                                                                            they offer may or may not include All-Safe product.
                                                                                            All-Safe is not affiliated, associated, authorized,
                                                                                            endorsed by, or in any way officially connected
                                                                                            with the company listed above, or any of its
                                                                                            subsidiaries or its affiliates. All company names
                                                                                            are the registered trademarks of their original
                                                                                            owners. The use of any trade name or trademark is
                                                                                            for identification and reference purposes only and
                                                                                            does not imply any association with the trademark
                                                                                            holder of their product brand.</p></div>
																				<!-- <div class="callyou">
																						<div class="callyouone">We can call YOU!</div>
																						<div>Submit the quote form and our office will contact you <a class="dealerpopup"  data-popup="6390" ><i class="fa fa-arrow-down"></i></a></div>
																				</div> -->

																				<div class="bottom-fixed dealerpopup"><h2>Click for a Free Quote</h2></div>

                                    <div class="two_third dealermap">
                                        <!--<div class="map_wrapper" >
                                            <div id="mobilemap" style="height:200px;"></div>
                                        </div>-->
                                    <?php if ($referral_meta["referral_map"][0]) { ?>
                                        <div class="map_wrapper" >
                                            <!-- <div id="mobilemap" style="height:200px;"></div> -->
                                            <?php echo $referral_meta["referral_map"][0]; ?>
                                        </div>
                                     <?php } ?>
                                        <div class="dealer-social-links">
																						<?php if ( ($referral_meta["referral_facebook_show"][0] && $referral_meta["referral_facebook"][0] != "") || ($referral_meta["referral_twitter_show"][0] && $referral_meta["referral_twitter"][0] != "") || ($referral_meta["referral_instagram_show"][0] && $referral_meta["referral_instagram"][0] != "") || ($referral_meta["referral_youtube_show"][0] && $referral_meta["referral_youtube"][0] != "") || ($referral_meta["referral_gplus_show"][0] && $referral_meta["referral_gplus"][0] != "") || ($referral_meta["referral_google_maps_show"][0] && $referral_meta["referral_google_maps"][0] != "") || ($referral_meta["referral_yelp_show"][0] && $referral_meta["referral_yelp"][0] != "") ) { ?>
																						<p class="connectwithus">Connect With Us</p>

                                            <?php } ?>

                                            <?php if ($referral_meta["referral_facebook_show"][0] && $referral_meta["referral_facebook"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_facebook"][0]; ?>"
                                                   target="_blank"  class="">
                                                   <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/facebook.png" alt="Facebook Icon" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_twitter_show"][0] && $referral_meta["referral_twitter"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_twitter"][0]; ?>"
                                                   target="_blank" >
                                                  <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/twitter.png" alt="Twitter Icon">
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_instagram_show"][0] && $referral_meta["referral_instagram"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_instagram"][0]; ?>"
                                                   target="_blank" >
																									 <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/instagram.png" alt="Instagram Icon" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_youtube_show"][0] && $referral_meta["referral_youtube"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_youtube"][0]; ?>"
                                                   target="_blank"  class="">
																									 <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/youtube.png" alt="YouTube Icon" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_gplus_show"][0] && $referral_meta["referral_gplus"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_gplus"][0]; ?>"
                                                   target="_blank"  >
																									 <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/google.png" alt="Google Plus Icon" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_google_maps_show"][0] && $referral_meta["referral_google_maps"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_google_maps"][0]; ?>"
                                                   target="_blank" >
																									 <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/google-maps.png" alt="Google Maps Icon" style="height:40px" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_yelp_show"][0] && $referral_meta["referral_yelp"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_yelp"][0]; ?>" target="_blank" >
																									<img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/yelp.png" alt="Yelp Icon" >
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>



																				</div>
                                         <div>&nbsp;</div>
																				 <div class="quote_form">
                                        <?php lead_gen_form_long(); ?>
																				</div>
                                    </div>

                                    <div class="two_third dealer_one_third midle_dealer dealer_lead_form_big">
                                        <p>Safety is important to us
                                            and we want to put you in contact with
                                            a safety professional. We are currently
                                            working to establish an All-Safe dealer
                                            in your area. In the meantime the local
                                            company below specializes in pool safety
                                            barriers and may be able to assist you.</p>
																				<!-- <h2 class="yourlocaldealer">
                                            Your Local Dealer is
                                        </h2> -->
                                        <!-- <div class="dealer_name"> -->
                                            <h1><?php echo $referral_meta["referral_name"][0]; ?></h1>
                                        <!-- </div> -->



                                        <!-- <div class="dealer_location_info">
                                            <?php //echo($referral_meta["referral_address_show"][0] == 1 ? ($referral_meta["referral_address"][0])."<br>" : ""); ?>
                                            <?php echo($referral_meta["referral_city_show"][0] == 1 ? ($referral_meta["referral_city"][0]) : ""); ?>,
                                            <?php echo($referral_meta["referral_state_show"][0] == 1 ? (" " . $referral_meta["referral_state"][0]) : ""); ?>
                                        </div> -->

                                        <?php if ($referral_meta["referral_phone_show"][0]) { ?>
                                            <div class="dealerphone">
                                                <span>Call or Text:</span> <a
                                                        href="tel:<?php echo($referral_meta["referral_phone"][0]); ?>"><?php echo($referral_meta["referral_phone"][0]); ?></a><br>
                                            </div>
                                        <?php } ?>

                                        <?php if ($referral_meta["referral_email_show"][0]) { ?>
                                            <div class="dealer_email">
                                                <span>Email:</span> <a href="mailto:<?php echo $referral_meta["referral_email"][0]; ?>"><?php echo $referral_meta["referral_email"][0]; ?></a>
                                            </div>
                                        <?php } ?>
                                        <?php if ($referral_meta["referral_website_show"][0]) { ?>
                                            <div class="dealer_website">
                                                <span>Website:</span> <a
                                                        href="<?php echo($referral_meta['referral_website'][0]); ?>"><?php echo($referral_meta['referral_website'][0]); ?></a>
                                                <br>
                                            </div>
                                        <?php } ?>
																				<!-- <div class="callyou">
																						<div class="callyouone">We can call YOU!</div>
																						<div>Submit the quote form and our office will contact you <i class="fa fa-arrow-right"></i></div>
																				</div> -->
                                                                                

                                        <div style="margin-top:20px;"><h2 style="color:#cc0000">Tell them All-Safe referred you</h2></div>

                                        <div style="margin-top:30px;color:#000;font-size:13px;font-weight:lighter;"><p>The company listed above is not a representative
                                                of All-Safe. Their contact information is provided
                                                as a courtesy only. All-Safe does not warranty or
                                                guarantee their work and/or services. The products
                                                they offer may or may not include All-Safe product.
                                                All-Safe is not affiliated, associated, authorized,
                                                endorsed by, or in any way officially connected
                                                with the company listed above, or any of its
                                                subsidiaries or its affiliates. All company names
                                                are the registered trademarks of their original
                                                owners. The use of any trade name or trademark is
                                                for identification and reference purposes only and
                                                does not imply any association with the trademark
                                                holder of their product brand.</p></div>
                                    <div class="two_third dealermap">
                                        <!--<div class="map_wrapper">
                                            <div id="map"></div>
                                        </div> -->
                                    <?php if ($referral_meta["referral_map"][0]) { ?>
                                        <div class="map_wrapper" >
                                            <!-- <div id="mobilemap" style="height:200px;"></div> -->
                                            <?php echo $referral_meta["referral_map"][0]; ?>
                                        </div>
                                     <?php } ?>
                                        <script>

                                            function initMap() { //alert('IN');
                                                var zip_code = "<?php echo $zip;?>";

                                                if (zip_code == "") {
                                                    jQuery.get("https://ipapi.co/<?php echo $ip;?>/json/", get_zip_url);

                                                    function get_zip_url(data) {
                                                        console.log(data);
                                                        if (data.hasOwnProperty("postal")) {
                                                            zip_url = "https://maps.googleapis.com/maps/api/geocode/json?key=<?php echo get_option('dealer_google_maps_key');?>&address=" + data['postal'];
																														jQuery('.zipcodeval').val(data['postal']);

                                                        } else {
                                                            zip_url = "https://maps.googleapis.com/maps/api/geocode/json?key=<?php echo get_option('dealer_google_maps_key');?>&address=<?php echo $referral_meta['dealer_default_zip'][0]?>";
																														jQuery('.zipcodeval').val(<?php echo $referral_meta['dealer_default_zip'][0]?>);
                                                        }

                                                        var lat = '';
                                                        var lng = '';
                                                        jQuery.getJSON(zip_url, function (data) {
                                                            console.log(data);
                                                            if (data['status'] != "OK") {
                                                                jQuery("#map").hide();
                                                            } else {
                                                                lat = data['results'][0]['geometry']['location']['lat'];
                                                                lng = data['results'][0]['geometry']['location']['lng'];

                                                                var uluru = {lat: lat, lng: lng};

                                                                var map = new google.maps.Map(document.getElementById('map'), {
                                                                    zoom: 15,
                                                                    center: uluru
                                                                });
                                                                var marker = new google.maps.Marker({
                                                                    position: uluru,
                                                                    map: map
                                                                });
                                                                var map2 = new google.maps.Map(document.getElementById('mobilemap'), {
                                                                    zoom: 15,
                                                                    center: uluru
                                                                });
                                                                var marker2 = new google.maps.Marker({
                                                                    position: uluru,
                                                                    map: map2
                                                                });
                                                            }

                                                        }).fail(function () {
                                                            console.log("Zip code not found!!");
                                                        });
                                                    }
                                                } else {
                                                    zip_url = "https://maps.googleapis.com/maps/api/geocode/json?key=<?php echo get_option('dealer_google_maps_key');?>&address=<?php echo $zip;?>";
																										//alert(zip_url);
                                                    var lat = '';
                                                    var lng = '';
                                                    jQuery.getJSON(zip_url, function (data) {
                                                        console.log(data);
                                                        if (data['status'] != "OK") {
                                                            jQuery("#map").hide();
                                                        } else {
                                                            lat = data['results'][0]['geometry']['location']['lat'];
                                                            lng = data['results'][0]['geometry']['location']['lng'];

                                                            var uluru = {lat: lat, lng: lng};

                                                            var map = new google.maps.Map(document.getElementById('map'), {
                                                                zoom: 15,
                                                                center: uluru
                                                            });
                                                            var marker = new google.maps.Marker({
                                                                position: uluru,
                                                                map: map
                                                            });

                                                            var map2 = new google.maps.Map(document.getElementById('mobilemap'), {
                                                                zoom: 15,
                                                                center: uluru
                                                            });
                                                            var marker2 = new google.maps.Marker({
                                                                position: uluru,
                                                                map: map2
                                                            });

                                                        }

                                                    }).fail(function () {
                                                        console.log("Zip code not found!!");
                                                    });
                                                }
                                            }
                                        </script>
                                        <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo get_option('dealer_google_maps_key');?>&callback=initMap"></script>


                                        <?php if ($referral_meta["referral_hours_show"][0]) { ?>
                                            <div class="dealer_lead_form_small">
                                                <br>
                                                <h4 class="dealer_hours_title">Hours of operation</h4>
                                                <div class="full">
                                                                                                        <table class="hourtable">
                                                        <tbody>
                                                        <tr>
                                                            <td>Monday</td>
                                                            <?php if(($referral_hours['monday']['open'] == $referral_hours['monday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['monday']['open'];?> - <?php echo $referral_hours['monday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Tuesday</td>
                                                            <?php if(($referral_hours['tuesday']['open'] == $referral_hours['tuesday']['close']) == "00:00") { ?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                           
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['tuesday']['open'];?> - <?php echo $referral_hours['tuesday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Wednesday</td>
                                                            <?php if(($referral_hours['wednesday']['open'] == $referral_hours['wednesday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                           
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['wednesday']['open'];?> - <?php echo $referral_hours['wednesday']['close'];?></td>

                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Thursday</td>
                                                            <?php if(($referral_hours['thursday']['open'] == $referral_hours['thursday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>

                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['thursday']['open'];?> - <?php echo $referral_hours['thursday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Friday</td>
                                                             <?php if(($referral_hours['friday']['open'] == $referral_hours['friday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['friday']['open'];?> - <?php echo $referral_hours['friday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Saturday</td>
                                                             <?php if(($referral_hours['saturday'][ 'open'] == $referral_hours['saturday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['saturday']['open'];?> - <?php echo $referral_hours['saturday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td >Sunday</td>
                                                             <?php if(($referral_hours['sunday']['open'] == $referral_hours['sunday']['close']) == "00:00"){?>
                                                            <td  class="timetd" colspan="2">CLOSED</td>
                                                            
                                                            <?php } else {?>
                                                            <td  class="timetd"><?php echo $referral_hours['sunday']['open'];?> - <?php echo $referral_hours['sunday']['close'];?></td>
                                                             <?php }?>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>



                                        <!-- <div class="dealer_short_info">
                                            <?php echo($referral_meta["referral_short_info_show"][0] ? $referral_meta["referral_short_info"][0] : ""); ?>
                                            <br>
                                        </div> -->

                                    </div>
                                    <div class="one_third dealer_one_third dealer_lead_form_big leadgenformlong">
                                        <?php lead_gen_form_long(); ?>
																				
                                        <div class="dealer-social-links">
																						<?php if ( ($referral_meta["referral_facebook_show"][0] && $referral_meta["referral_facebook"][0] != "") || ($referral_meta["referral_twitter_show"][0] && $referral_meta["referral_twitter"][0] != "") || ($referral_meta["referral_instagram_show"][0] && $referral_meta["referral_instagram"][0] != "") || ($referral_meta["referral_youtube_show"][0] && $referral_meta["referral_youtube"][0] != "") || ($referral_meta["referral_gplus_show"][0] && $referral_meta["referral_gplus"][0] != "") || ($referral_meta["referral_google_maps_show"][0] && $referral_meta["referral_google_maps"][0] != "") || ($referral_meta["referral_yelp_show"][0] && $referral_meta["referral_yelp"][0] != "") ) { ?>
																						<p class="connectwithus">Connect With Us</p>

                                            <?php } ?>

                                            <?php if ($referral_meta["referral_facebook_show"][0] && $referral_meta["referral_facebook"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_facebook"][0]; ?>"
                                                   target="_blank"  class="">
                                                   <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/facebook.png" alt="Facebook Icon" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_twitter_show"][0] && $referral_meta["referral_twitter"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_twitter"][0]; ?>"
                                                   target="_blank" >
                                                  <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/twitter.png" alt="Twitter Icon" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_instagram_show"][0] && $referral_meta["referral_instagram"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_instagram"][0]; ?>"
                                                   target="_blank" >
																									 <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/instagram.png" alt="Instagram Icon" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_youtube_show"][0] && $referral_meta["referral_youtube"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_youtube"][0]; ?>"
                                                   target="_blank"  class="">
																									 <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/youtube.png" alt="YouTube Icon" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_gplus_show"][0] && $referral_meta["referral_gplus"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_gplus"][0]; ?>"
                                                   target="_blank"  >
																									 <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/google.png" alt="Google Plus Icon" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_google_maps_show"][0] && $referral_meta["referral_google_maps"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_google_maps"][0]; ?>"
                                                   target="_blank" >
																									 <img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/google-maps.png" alt="Google Maps Icon" style="height:40px" >
                                                </a>
                                            <?php } ?>
                                            <?php if ($referral_meta["referral_yelp_show"][0] && $referral_meta["referral_yelp"][0] != "") { ?>
                                                <a href="<?php echo $referral_meta["referral_yelp"][0]; ?>" target="_blank" >
																									<img class="socialicons" src="<?php echo get_template_directory_uri(); ?>/images/sociables/yelp.png" alt="Yelp Icon" >
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
            </section>

            <?php
            ///Top part won't show if no dealer
            ///
          }


     //the_content();?>




<?php the_tags('<div class="tags">'.__('Tags','iva_theme_front').': ',',&nbsp; ','</div>');?>

			<?php

			if( strpos($_SERVER["REQUEST_URI"], 'nodealer') !== false ) { 
				
			//} else {
            ?>

				<div class="tabs">
					
					<input type="radio" id="tab1" name="tab-control" checked>
					<input type="radio" id="tab2" name="tab-control">
					<input type="radio" id="tab3" name="tab-control">
					<input type="radio" id="tab4" name="tab-control">

					<ul>
						<li class="firstli" title="Products Offered"><label for="tab1" role="button"><span>Products Offered</span></label></li>
						<li title="About Us"><label for="tab2" role="button"><span>About Us</span></label></li>
						<li class="" title="Areas Served"><label for="tab3" role="button"><span>Areas Served</span></label></li>
						<li class="lastli" title="Hours Of Operation"><label for="tab4" role="button"><span>Hours Of Operation</span></label></li>
					</ul>
					
					<!-- <div class="slider"><div class="indicator"></div></div> -->
					<div class="content tabcontent">
								<section class="productsoffered">
									<h2>Products Offered</h2>
									
									<?php 
											if( isset( $referral_meta["referral_products_offered"][0] ) ) {
												echo wpautop($referral_meta["referral_products_offered"][0]); 
											}
										?>
										
								</section>

								<section class="aboutus">
									<h2>About Us</h2>
									 <?php 
											if( isset( $referral_meta["referral_about_us"][0] ) ) {
												echo wpautop($referral_meta["referral_about_us"][0]); 
											}
										?>
								</section>
								<section class="areaserved">
									<h2>Areas Served</h2>
										<div class="mobileareaserved">
									 <?php
											if( isset( $referral_meta["referral_areas_served"][0] ) ) {
												echo wpautop( $referral_meta["referral_areas_served"][0] ) ;
											}
										?>
										</div>
								</section>
								<section class="hoursofoperations">
									<h2>Hours Of Operation</h2>
									 <div class="full innerhoursofoperations">
                                                    <table class="hourtable">
                                                        <tbody>
                                                        <tr>
                                                            <td>Monday</td>
                                                            <?php if(($referral_hours['monday']['open'] == $referral_hours['monday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['monday']['open'];?> - <?php echo $referral_hours['monday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Tuesday</td>
                                                            <?php if(($referral_hours['tuesday']['open'] == $referral_hours['tuesday']['close']) == "00:00") { ?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                           
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['tuesday']['open'];?> - <?php echo $referral_hours['tuesday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Wednesday</td>
                                                            <?php if(($referral_hours['wednesday']['open'] == $referral_hours['wednesday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                           
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['wednesday']['open'];?> - <?php echo $referral_hours['wednesday']['close'];?></td>

                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Thursday</td>
                                                            <?php if(($referral_hours['thursday']['open'] == $referral_hours['thursday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>

                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['thursday']['open'];?> - <?php echo $referral_hours['thursday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Friday</td>
                                                             <?php if(($referral_hours['friday']['open'] == $referral_hours['friday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['friday']['open'];?> - <?php echo $referral_hours['friday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Saturday</td>
                                                             <?php if(($referral_hours['saturday'][ 'open'] == $referral_hours['saturday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['saturday']['open'];?> - <?php echo $referral_hours['saturday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td >Sunday</td>
                                                             <?php if(($referral_hours['sunday']['open'] == $referral_hours['sunday']['close']) == "00:00"){?>
                                                            <td  class="timetd" colspan="2">CLOSED</td>
                                                            
                                                            <?php } else {?>
                                                            <td  class="timetd"><?php echo $referral_hours['sunday']['open'];?> - <?php echo $referral_hours['sunday']['close'];?></td>
                                                             <?php }?>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
								</section>
					</div>
				</div>

				<div class="mobiletabs">
					<div class="accordion">

							<div class="accordion-head">
									<h4>Products Offered</h4><div class="arrow down"></div>
							</div>
							<div class="accordion-body">
									<p><?php 
											if( isset( $referral_meta["referral_products_offered"][0] ) ) {
												echo wpautop($referral_meta["referral_products_offered"][0]); 
											}
										?></p>
							</div>

							<div class="accordion-head">
										<h4>About Us</h4><div class="arrow down"></div>
							</div>
							<div class="accordion-body">
									<p> <?php 
											if( isset( $referral_meta["referral_about_us"][0] ) ) {
												echo wpautop($referral_meta["referral_about_us"][0]); 
											}
										?></p>
							</div>

							<div class="accordion-head">
									<h4>Areas Served</h4><div class="arrow down"></div>
							</div>
							<div class="accordion-body">
									<div class="mobileareaserved"><?php
											if( isset( $referral_meta["referral_areas_served"][0] ) ) {
												echo wpautop( $referral_meta["referral_areas_served"][0] ) ;
											}
										?></div>
							</div>

							<div class="accordion-head">
										<h4>Hours Of Operation</h4><div class="arrow down"></div>
							</div>
							<div class="accordion-body">
									<div class="full innerhoursofoperations">
                                                                                                        <table class="hourtable">
                                                        <tbody>
                                                        <tr>
                                                            <td>Monday</td>
                                                            <?php if(($referral_hours['monday']['open'] == $referral_hours['monday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['monday']['open'];?> - <?php echo $referral_hours['monday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Tuesday</td>
                                                            <?php if(($referral_hours['tuesday']['open'] == $referral_hours['tuesday']['close']) == "00:00") { ?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                           
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['tuesday']['open'];?> - <?php echo $referral_hours['tuesday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Wednesday</td>
                                                            <?php if(($referral_hours['wednesday']['open'] == $referral_hours['wednesday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                           
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['wednesday']['open'];?> - <?php echo $referral_hours['wednesday']['close'];?></td>

                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Thursday</td>
                                                            <?php if(($referral_hours['thursday']['open'] == $referral_hours['thursday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>

                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['thursday']['open'];?> - <?php echo $referral_hours['thursday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Friday</td>
                                                             <?php if(($referral_hours['friday']['open'] == $referral_hours['friday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['friday']['open'];?> - <?php echo $referral_hours['friday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td>Saturday</td>
                                                             <?php if(($referral_hours['saturday'][ 'open'] == $referral_hours['saturday']['close']) == "00:00"){?>
                                                            <td class="timetd" colspan="2">CLOSED</td>
                                                            <?php } else {?>
                                                            <td class="timetd"><?php echo $referral_hours['saturday']['open'];?> - <?php echo $referral_hours['saturday']['close'];?></td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td >Sunday</td>
                                                             <?php if(($referral_hours['sunday']['open'] == $referral_hours['sunday']['close']) == "00:00"){?>
                                                            <td  class="timetd" colspan="2">CLOSED</td>
                                                            
                                                            <?php } else {?>
                                                            <td  class="timetd"><?php echo $referral_hours['sunday']['open'];?> - <?php echo $referral_hours['sunday']['close'];?></td>
                                                             <?php }?>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
							</div>

					</div>
				</div>

			<?php } ?>
			<div class="thecontent">
			<?php
			the_content();
			?>
				</div>

						</div><!-- .post-entry -->

					</div><!-- .post-content -->

					<?php } ?>		
				</div><!-- .post_wrap -->
				</div><!-- #post-<?php the_ID(); ?> -->

				<?php  
				if ( get_option( 'atp_aboutauthor' ) != "on" ) {
					echo atp_generator( 'aboutauthor' ); 
				} ?>
				
				<?php
				//if ( get_option( 'atp_singlenavigation' ) != "on" ) { ?>
					<!--<div id="nav-below" class="navigation">
						<div class="nav-previous"><?php //previous_post_link('&larr; %link') ?></div>
						<div class="nav-next"><?php //next_post_link('%link &rarr;') ?></div>
					</div> #nav-below-->
				<?php
				//} else {
					//posts_nav_link();
				//}
				?>
				
				<?php
				if ( get_option( 'atp_relatedposts' ) != "on" ) {
					echo atp_generator( 'relatedposts', $post->ID);
				} ?>

				<?php
				if ( get_option( 'atp_commentstemplate' ) == "posts" ||  get_option( 'atp_commentstemplate' ) == "both" ) {
					comments_template( '', true ); 
				} ?>

				<?php endwhile; ?>

				<?php else: ?>
				<?php '<p>'.__('Sorry, no posts matched your criteria.', 'iva_theme_front').'</p>';?>
				
				<?php endif; ?>

		</div> <!-- .content-area -->

		<?php //if ( atp_generator( 'sidebaroption', $post->ID ) != "fullwidth" ){ get_sidebar(); } ?>

		<div class="clear"></div>
	</div><!-- .inner -->
</div><!-- .pagemid -->


<?php get_footer(); ?>
