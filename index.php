<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Steve and Sarah Get Hitched</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Custom Theme CSS -->
    <link href="css/stevesarah.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
<style>



.highlight {
	border:2px solid #9F1319 !important;
	background:url(iconCaution.png) no-repeat 2px !important;
	background-size:16px 16px !important;
}

.loading {
/* float: right; */
/* text-align: center; */
/* position: fixed; */
background: url(ajax-loader.gif) center no-repeat;
background-position: center;
height: 28px;
/* width: 28px; */
display: none;
}
.done {
	font-size:18px; 
	width:70%; 
	margin:20px auto; 
	display:none
}
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation"> -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header navbar-collapse page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-heart fa-3dicon" style="color:red;"></i>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav" id="menu">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                  <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#proposal">The Proposal</a>
                    </li>
                          <li class="page-scroll">
                        <a href="#wedding">Our Wedding</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#location">Location</a>
                    </li>
<!--
              
-->
                     <li class="page-scroll">
                        <a href="#rsvp">RSVP</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="">
                        <h1 class="brand-heading">sarah <span class="amperstand">&amp;</span> steve</h1>
                        <p class="intro-text">september 13, 2014</p>
                        <div class="page-scroll">
                            <a href="#proposal" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proposal" class="content-section text-center">
        <div class="proposal-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>the proposal</h2>

                <h3 style="color:#000;">September 2013</h3>

<p>After spending a week in Iceland exploring the glaciers, volcanoes, waterfalls and geysirs, <br />Steve decided it was the perfect time. He got down on one knee on a mountain in Seltún and asked Sarah to be his wife. She said yes.</p>
                </div>
            </div>
        </div>
    </section>


     <section id="wedding" class="content-section text-center">
        <div class="wedding-section">
            <div class="container">
                <!--<div class="col-lg-8 col-lg-offset-2">-->
                
                  <div class="col-lg-6 col-lg-push-6">  <h2>our wedding</h2>
                    <p>Join us for a ceremony and reception at Balzac's in the Distillery District on September 13th, 2014 at 6:30pm. Cocktails and hors d'oeuvres at 6:30pm followed by the ceremony, dinner and fun.</p><p style="margin-top: -15px !important;">P.S. Semi-formal attire, but we think you'll look hot no matter what!</p>
                   
                </div>
                <div class="col-lg-6 col-lg-pull-6"><img class="date_graphic" src="img/date.png" /></div>
            </div>
        </div>
    </section>



    <section id="location" class="content-section text-center">
        <div class="location-section">
            <div class="container">
                <div class="col-lg-6">
                    <h2 style="margin-bottom: 10px;">location</h2>
                    <p>Balzac's Distillery District<br />1 Trinity Street<br />Toronto, ON, M5A 3C4</p>
                    <p><a class="directions" href="https://goo.gl/maps/UTRNH" target="_blank">GET DIRECTIONS »</a></p>
                 
                </div>
                <div id="googlemap" class="col-lg-6">
              
                </div>
            </div>
        </div>
    </section>



    <section id="rsvp" class="content-section text-center">
        <div class="rsvp-section" style="min-height:450px;">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wrap">

                        <h2>rsvp</h2>
                        <div class="done">
							<p>Thank you! We have received your RSVP.<br />See you on September 13th!</p>
						</div>
						<div class="form">
                        <form method="post" class="clearfix" id="contact-form" role="form" action="process.php"> 
                            <div class="col-xs-12">
                            <input type="text" id="name" name="name" placeholder="YOUR NAME" required="" class="defaultstate">
                            </div>
                            <div class="clearfix">
                             <div class="col-md-6">
                                    <input type="email" name="email" id="email" placeholder="YOUR E-MAIL" required="" class="defaultstate"> 
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="guest" name="guest" placeholder="YOUR GUEST'S NAME" class="defaultstate"> 
                                </div>
                               <div class="col-xs-12">
                            <input type="text" id="song" name="song" placeholder="REQUEST A SONG (optional)" class="defaultstate">
                            </div>
	                            <div class="col-xs-12">
		                            <input type="radio" name="RSVP" id="rsvp_yes" value="yes" class="css-checkbox" checked="checked">
									<label for="rsvp_yes" class="css-label"><p class="rsvp_move">Yes, can't wait!</p></label>
		
		
									<input type="radio" name="RSVP" id="rsvp_no" value="no" class="css-checkbox">
									<label for="rsvp_no" class="css-label"><p>Bummer, can't make it.</p></label>
	                            </div>
                            </div>
							<div class="loading"></div>
                            <input type="submit" id="submit" value="SEND YOUR RSVP »" class="button submit">
							
                        </form>
						</div>
                        <!-- <div class="thx-message">
                            <p class="h2">Merci pour votre intérêt !</p><br>
                            <a class="ref-overlay-plus thx-cross" href="#">
                                <div class="cross-vert"></div>
                                <div class="cross-horiz"></div>
                            </a>
                        </div>-->

                    </div><!-- end of .wrap -->
                </div>
            </div>
        </div>
    </section>

   
    <!-- Core JavaScript Files -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- form -->

<script type="text/javascript">
$(document).ready(function() {
	
	//if submit button is clicked
	$('#submit').click(function () {	

	
		//website = guest
		//comment = song
		//Get the data from all the fields
		var name = $('input[name=name]');
		var email = $('input[name=email]');
		var guest = $('input[name=guest]');
		var song = $('input[name=song]');
		var RSVP = $('input[name=RSVP]:checked').val();
	
		console.log(RSVP);
		//Simple validation to make sure user entered something
		//If error found, add highlight class to the text field
		if (name.val()=='') {	
			name.addClass('highlight');
			return false;
		} else name.removeClass('highlight');
		
		if (email.val()=='') {
			email.addClass('highlight');
			return false;
		} else email.removeClass('highlight');
		
		/*if (song.val()=='') {
			song.addClass('highlight');
			return false;
		} else song.removeClass('highlight');*/
		
		//organize the data properly
		var data = 'name=' + name.val() + '&email=' + email.val() + '&guest=' + 
		guest.val() + '&song='  + encodeURIComponent(song.val()) + '&RSVP=' + RSVP;
		
		//disabled all the text fields
		$('.text').attr('disabled','true');
		
		//show the loading sign
		$('.loading').show();
		
		//start the ajax
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "process.php",	
			
			//GET method is used
			type: "GET",

			//pass the data			
			data: data,		
			
			//Do not cache the page
			cache: false,
			
			//success
			success: function (html) {				
				//if process.php returned 1/true (send mail success)
				if (html==1) {					
					//hide the form
					$('.form').fadeOut('slow');					
					
					//show the success message
					$('.done').fadeIn('slow');
					
				//if process.php returned 0/false (send mail failed)
				} else alert('Sorry, unexpected error. Please try again later.');				
			}		
		});
		
		//cancel the submit button default behaviours
		return false;
	});	
});	
</script>

<!-- Include the Google Maps API library - required for embedding maps -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">

// The latitude and longitude of your business / place
var position = [43.6504229,-79.3593764];

function showGoogleMaps() {

var latLng = new google.maps.LatLng(position[0], position[1]);

var mapOptions = {
zoom: 16, // initialize zoom level - the max value is 21
             streetViewControl: false, // hide the yellow Street View pegman
 scaleControl: true, // allow users to zoom the Google Map
mapTypeId: google.maps.MapTypeId.ROADMAP,
center: latLng,
styles: [
    {
        "featureType": "landscape",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 51
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 30
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 40
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "transit",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": -25
            },
            {
                "saturation": -100
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ffff00"
            },
            {
                "lightness": -25
            },
            {
                "saturation": -97
            }
        ]
    }
]
};

map = new google.maps.Map(document.getElementById('googlemap'),
mapOptions);
//custom marker
var image = {
	url: 'img/heart-icon.png'
}

"img/heart-icon.png";

// Show the default red marker at the location
marker = new google.maps.Marker({
position: latLng,
map: map,
icon: image,
draggable: false,
 animation: google.maps.Animation.DROP
 });
}
google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>


    <!-- Custom Theme JavaScript -->
    <script src="js/stevesarah.js"></script>
    <script src="js/waypoints.min.js"></script>
   <!-- <script src="js/curtains.js"></script>-->
    <script>
     /*   $(function () {
            $('.curtains').curtain({
                scrollSpeed: 400,
                curtainLinks: '.curtain-links'
            });
        });

*/
    </script>
</body>

</html>
