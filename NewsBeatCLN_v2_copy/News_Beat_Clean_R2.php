<html>
<meta http-equiv="X-UA-Compatible" content="IE=10">
<head>
<?php 
				//include the logging script
				require_once '_code/LinksLogging.php';
			
				//set the name of the page
				$page = "main";
			
				//call logging script class
				$log = new LinksLogging($page);
			
				//execute the logging function
				$log->WriteToFile();
		?>

<title>The News Beat</title>

<link rel="stylesheet" type="text/css" href="magnific-popup.css">
<style type="text/css">

#wrapper {
	text-wrap:normal; word-wrap:normal; width:1000px; margin: 0 auto;
	margin-top: 36px;
} 

.Photocaption {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Byline {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #ABABAB;	
}
.MainText {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.MainTitle {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 22px;
	font-style: italic;
	font-weight:bold;
}
.Title {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight:bold;
}
body {
	margin: 0 auto;
}
.img {
	text-decoration: none;
	position: absolute;
	left: 0; right: 0; bottom: 0;
	padding: 6px;
	background-color:#030303;
	opacity:0.8;
    filter:alpha(opacity=80);
	color:#FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-style: italic;
	font-weight:bold;
	z-index: 99;
}
.wrapper .text {
	text-decoration: none;
	position:relative;
	
	
	left:0px;
	border:none;
	outline:none;
	visibility:hidden;
	background-color: #D4D4D4;
	opacity:0.85;
	filter:alpha(opacity=85);
	color:#030303;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 14px;
	padding:20px;
	z-index: 9;
	text-align: left;

}
.wrapper:hover .text {
	visibility:visible;
}

  #overlay {
    color:#030303;
	display:none;
	position:relative;
	z-index:100;
  }
  div.contentWrap {  
	height:801px;
	width:750px;
    overflow-y:auto;
  }

.col-12 {
	width: 100%;
	clear: both;
	margin: 0;
}
.col-3, .col-6 {
	position: relative;
	margin-right: 20px;
	float: left;
	margin-bottom: 36px;
}
.col-12 > div:last-child, .col-6.last-child, .col-3.last-child, .last-child {
	margin-right: 0 !important;
}
.col-6 {
	width: 480px;
}
.col-3 {
	width: 228px;
}

img.thumb {
	width: 100%;
}
.img {

}
.wrapper img {
	height: 180px;
}

.wrapper .text {
	position: absolute;
	top: 0;
	margin: 0;
	bottom: 0;
	z-index: 9;
}
.wrapper > a {

}

a img, a {
	border: none;
	text-decoration: none;
}
.popup {
    background: #FFF;
    padding: 20px 30px;
    text-align: left;
    max-width: 720px;
   /* margin: 40px auto; */
    position: relative
}

</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<div align="center"> 
<table bgcolor="#FFFFFF" cellpadding="0px"><tr><td align="left">
<p><img src="Header-masthead.jpg">
</p></td></tr></table>

<div id="wrapper">

<div class="col-12">

<div class="col-6" colspan="2"> 
<a href="world_chinese.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">&nbsp;&nbsp;Judge Dismisses Chinese Lawsuit</div></a>
<div class="wrapper" ><a href="world_chinese.php#topSpot" class="ajax-popup-link">
<img src="baidu3.jpg" class="wrapper thumb"></a>
<a href="world_chinese.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text">Baidu, the operator of China's most widely used Internet search engine, has won the dismissal of a United States lawsuit by pro-democracy activists who complained that the company illegally suppressed political speech.</p></a></div> 
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
      </div>


<div class="col-3"><a href="Politics_ideological_middle.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" > &nbsp; The Ideological Middle <br>&nbsp; is Dead in Congress</div></a>
<div class="wrapper" ><a href="Politics_ideological_middle.php#topSpot" class="ajax-popup-link">
<img src="UScapitol2.jpg"  class="wrapper thumb"></a>
<a href="Politics_ideological_middle.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >In the last three decades, the number of members in the middle in the House dropped from 344 in 1982 to four in 2013. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>


<div class="col-3 last-child"><div class="wrapper"><img src="Ad4.jpg"></div></div>
</div>

<div class="col-12">
<div class="col-3"><a href="Science_skull.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" > &nbsp; 3-D Printed Skull <br>&nbsp; Successfully Implanted </div></a>
<div class="wrapper" ><a href="Science_skull.php#topSpot" class="ajax-popup-link">
<img src="science_skull2.jpg"  class="wrapper thumb"></a>
<a href="Science_skull.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >Doctors in the Netherlands report that they have for the first time successfully replaced most of a human's skull with a 3-D printed plastic one. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>


<div class="col-3"><a href="Airbus.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left"> &nbsp; Airbus Delivers New<br>&nbsp; A350 XWB</div></a>
<div class="wrapper" ><a href="Airbus.php#topSpot" class="ajax-popup-link">
<img src="Airbus.jpg" class="wrapper thumb"></a>
<a href="Airbus.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text">The wait is finally over for aviation fanatics wanting to book a flight aboard the Airbus A350 XWB. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><a href="Business_CollegeAthletics.php#topSpot" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >Spending On<br>College Sports</div></a>
<div class="wrapper"><a href="Business_CollegeAthletics.php#topSpot"  class="ajax-popup-link">
<img src="AthleticSpending2.jpg" class="wrapper thumb"></a>
<a href="Business_CollegeAthletics.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text">Even as their spending on instruction, research and public service declined or stayed flat, most colleges and universities increased their sports spending. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3 last-child"><a href="Health_infection.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">1 in 25 Patients Gets <br>Infection in Hospital</div></a>
<div class="wrapper"><a href="Health_infection.php#topSpot" class="ajax-popup-link">
<img src="health_hospital2.jpg" class="wrapper thumb"></a>
<a href="Health_infection.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text">About 1 in every 25 patients seeking treatment at hospitals acquired an infection there in 2011, according to a new study published Wednesday in a leading medical journal. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>

</div>

<div class="col-12">
<div  class="col-3"><a href="Donations.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" >&nbsp; Campaign Donation<br>&nbsp; Limits on the Rise</div></a>
<div class="wrapper"><a href="Donations.php#topSpot" class="ajax-popup-link">
<img src="Donations.jpg" class="wrapper thumb"></a>
<a href="Donations.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text">The national political parties and some of their biggest donors are embracing a new law that dramatically increases contribution limits. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><a href="Health_ecigs.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" style="">&nbsp; E-cigs' Liquid Nicotine <br>&nbsp; Causing Poisonings</div></a>
<div class="wrapper" style=""><a href="Health_ecigs.php#topSpot" class="ajax-popup-link">
<img src="ecigs2.jpg" class="wrapper thumb"></a>
<a href="Health_ecigs.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text">As electronic cigarettes increase in popularity, calls to poison control centers about exposure to the liquid nicotine used in many of the devices have surged. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>


<div  class="col-6 last-child" colspan="2"> 
<a href="Politics_FemaleAthletes.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">For Women, Being a Jock May Signal <br>Political Ambition</div></a>
<div class="wrapper" ><a href="Politics_FemaleAthletes.php#topSpot" class="ajax-popup-link">
<img src="WomenInSports2.jpg" class="wrapper thumb"></a>
<a href="Politics_FemaleAthletes.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text">A study from American University found women who play college sports are 25 percent more likely to have political ambitions than their non-athlete counterparts.  For the study, Professor Jennifer Lawless at American University asked 2,100 college students if they would consider a career in politics.  "The effect was quite substantial," Lawless says.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>

</div>

<div class="col-12">
<div class="col-3"><a href="Ruth.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">Babe Ruth Cap <br>Brings in Big Bucks</div></a>
<div class="wrapper" style=""><a href="Ruth.php#topSpot" class="ajax-popup-link">
<img src="RuthHomepage.jpg" class="wrapper thumb"></a>
<a href="Ruth.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >A hat worn by Babe Ruth during his tour of Japan in 1934 has sold at auction for $303,277. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>

<div  class="col-3"><a href="DroneSwarm.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" style="">&nbsp;&nbsp;Drone Swarm</div></a>
<div class="wrapper"><a href="DroneSwarm.php#topSpot" class="ajax-popup-link">
<img src="DroneSwarmHomepage.jpg" class="wrapper thumb"></a>
<a href="DroneSwarm.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" style="">Here comes the buzzing swarm of super-cheap camera-equipped drones, priced so low that consumers could potentially buy them for $100 or less.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>


<div class="col-3"><a href="Politics_ChevronPizza.php#topSpot" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >Pizza 'Scandal' Leaves <br>Small Town Divided</div></a>
<div class="wrapper" ><a href="Politics_ChevronPizza.php#topSpot" class="ajax-popup-link">
<img src="ChevronPizza2.jpg"  class="wrapper thumb"></a>
<a href="Politics_ChevronPizza.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >More than 12,000 people have signed a petition demanding that Chevron apologize for responding to an explosion of a gas well by giving residents free pizza. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>




<div class="col-3 last-child"><a href="Health_Obesity.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" style="">&nbsp; Opinion: U.S. Should <br>&nbsp; Address Obesity </div></a>
<div class="wrapper" ><a href="Health_Obesity.php#topSpot" class="ajax-popup-link">
<img src="obesity2.jpg"  class="wrapper thumb"></a>
<a href="Health_Obesity.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >A third of adults are obese, and 17 percent of all children are morbidly overweight.  Obesity requires more effort &ndash; from Americans and their government.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



</div>

<div class="col-12">
<div class="col-3"><a href="health_myths.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" style="">&nbsp;6 Fitness Myths, Busted</div></a>
<div class="wrapper"><a href="health_myths.php#topSpot" class="ajax-popup-link">
<img src="scale2.jpg"  class="wrapper thumb"></a>
<a href="health_myths.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" style="">Are you killing it in the gym but not seeing results? Chances are, you've fallen victim to bad advice.  No worries: Our star trainers are here to update your routine so you get the body you want. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>


<div class="col-3"><a href="GoogleCar.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">&nbsp;Google Seeks Help for  <br>&nbsp;Self-Driving Cars</div></a>
<div class="wrapper" ><a href="GoogleCar.php#topSpot" class="ajax-popup-link">
<img src="GoogleCarHomepage.jpg" class="wrapper thumb"></a>
<a href="GoogleCar.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text">Google is seeking partners to make fully autonomous vehicles a commercial reality within the next five years. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><a href="entertainment_kraftwerk.php#topSpot" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >&nbsp;  That Song is Going to<br>&nbsp;   Hit You in the Head</div></a>
<div class="wrapper" ><a href="entertainment_kraftwerk.php#topSpot" class="ajax-popup-link">
<img src="entertainment_kraftwerk2.jpg"  class="wrapper thumb"></a>
<a href="entertainment_kraftwerk.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >Kraftwerk, the German band whose music predicted pop's electronic future in the 1970s, hasn't forgotten: A concert is a physical, spatial event. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3 last-child"><a href="entertainment_blackkeys.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" >&nbsp; How the Black Keys <br>&nbsp; Found a New Groove </div></a>
<div class="wrapper" ><a href="entertainment_blackkeys.php#topSpot" class="ajax-popup-link">
<img src="entertainment_blackkeys2.jpg"  class="wrapper thumb"></a>
<a href="entertainment_blackkeys.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >After two hit albums, the Black Keys weren't sure what to do next. After several stalled recording sessions, they finally got their answer.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>
</div>

<div class="col-12">
<div class="col-6" colspan="2"> 
<a href="Howard.php#topSpot" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >&nbsp;&nbsp;Tim Howard Lets Down His Guard in New Memoir</div></a>
<div class="wrapper" ><a href="Howard.php#topSpot" class="ajax-popup-link">
<img src="HowardHomepage.jpg" class="wrapper thumb"></a>
<a href="Howard.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >Tim Howard set a World Cup record for saves in the U.S.'s heartbreaking loss to Belgium in 2014. Now, the goalkeeper is out with a memoir where he opens up about why soccer struggles in the U.S., his marriage, and how having Tourette's and OCD may have helped him.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div> 
</div>



<div class="col-6 last-child" colspan="2"> <div class="wrapper thumb"><img src="Ad1.jpg" ></div></div>

      </div>

<div class="col-12">
<div class="col-3"><a href="arts_origins.php#topSpot" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >&nbsp;  Photography Dealers<br>&nbsp;   Show Opens at Armory</div></a>
<div class="wrapper" ><a href="arts_origins.php#topSpot" class="ajax-popup-link">
<img src="newPhotoHomepageCrop.jpg"  class="wrapper thumb"></a>
<a href="arts_origins.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >The photography world has been ruled by a fascination with abstraction. You see this everywhere in the current International Photography Art Dealers show. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><div class="wrapper thumb"><img src="Ad3v2.jpg" ></div></div>


<div class="col-3"><a href="Health_flu.php#topSpot" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >&nbsp; Flu Drugs May Not Be<br>&nbsp;   Worth Stockpiling</div></a>
<div class="wrapper" ><a href="Health_flu.php#topSpot" class="ajax-popup-link">
<img src="Flu_medicine2.jpg"  class="wrapper thumb"></a>
<a href="Health_flu.php#topSpot" style="text-decoration:none" class="ajax-popup-link"><p class="text" >Tamiflu, commonly used to reduce flu symptoms, may not work as well as the federal government believed when it spent more than $1.3 billion stockpiling it.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>




<div class="col-3 last-child"><div class="wrapper thumb"><img src="Ad5.jpg" ></div></div>
</div>
</div><!-- end #wrapper -->



<table  bgcolor="#FFFFFF" cellpadding="0px"> <tr><td>
<p class="MainText"><img src="Footermain.jpg"></p></td></tr></table>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js"></script>

<script>
$(function() {

    // if the function argument is given to overlay,
    // it is assumed to be the onBeforeLoad event listener
    /* $("a[rel]").overlay({

        onBeforeLoad: function() {

            // grab wrapper element inside content
            var wrap = this.getOverlay().find(".contentWrap");

            // load the page specified in the trigger
            wrap.load(this.getTrigger().attr("href"));

        },
		onLoad: function () {
            $("body").css("overflow", "hidden");
        },
        onClose: function () {
            $("body").css("overflow", "");
		},

    });

    $('button.close').live('click', function() {
    	var api = $("a[rel]").data("overlay");
    	//e.preventDefault();
    	console.log( api );
    	api.close();
    }); */
	
	
    $('.ajax-popup-link').magnificPopup({
	  type: 'ajax',
	  ajax: {
		  settings: null, // Ajax settings object that will extend default one - http://api.jquery.com/jQuery.ajax/#jQuery-ajax-settings
		  // For example:
		  // settings: {cache:false, async:false}

		  cursor: 'mfp-ajax-cur', // CSS class that will be added to body during the loading (adds "progress" cursor)
		  tError: '<a href="%url%">The content</a> could not be loaded.' //  Error message, can contain %curr% and %total% tags if gallery is enabled
		}
		
	});

});
</script>




</body>
</html>
