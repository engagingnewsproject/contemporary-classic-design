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
    margin: 40px auto;
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
<a href="world_chinese.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">&nbsp;&nbsp;JJudge Dismisses Chinese Lawsuit</div></a>
<div class="wrapper" ><a href="world_chinese.php" class="ajax-popup-link">
<img src="baidu3.jpg" class="wrapper thumb"></a>
<a href="world_chinese.php" style="text-decoration:none" class="ajax-popup-link"><p class="text">Baidu, the operator of China's most widely used Internet search engine, has won the dismissal of a United States lawsuit by pro-democracy activists who complained that the company illegally suppressed political speech.</p></a></div> 
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
      </div>



<div  class="col-3"><a href="Entertainment_Bitcoin.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" style="">&nbsp;&nbsp;Why Bitcoin Matters</div></a>
<div class="wrapper"><a href="Entertainment_Bitcoin.php" class="ajax-popup-link">
<img src="Bitcoin2.jpg" class="wrapper thumb"></a>
<a href="Entertainment_Bitcoin.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" style="">A mysterious new technology is actually the result of two decades of intense research and development by nearly anonymous researchers.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>


<div class="col-3 last-child"><div class="wrapper"><img src="Ad4.jpg"></div></div>
</div>

<div class="col-12">
<div class="col-3"><a href="Politics_a-10.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">&nbsp;Opposition to Air Force <br>&nbsp;Plan to Get Rid of A-10s</div></a>
<div class="wrapper" ><a href="Politics_a-10.php" class="ajax-popup-link">
<img src="politics_a-10_2.jpg" class="wrapper thumb"></a>
<a href="Politics_a-10.php" style="text-decoration:none" class="ajax-popup-link"><p class="text">After a career that has spanned the Cold War to the conflict in Afghanistan, the Pentagon has proposed shuttering the A-10 fleet as part of its spending cuts. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>


<div class="col-3"><a href="world_cuba.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left"> &nbsp; Cuba Proposes Law to<br>&nbsp; Attract Investments</div></a>
<div class="wrapper" ><a href="world_cuba.php" class="ajax-popup-link">
<img src="cuba_economy2.jpg" class="wrapper thumb"></a>
<a href="world_cuba.php" style="text-decoration:none" class="ajax-popup-link"><p class="text">The Cuban parliament will vote on the proposed new foreign investment law Saturday. It would grant eight-year tax exemptions for new foreign investments. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><a href="Business_CollegeAthletics.php" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >Colleges Increase<br>Sports Spending</div></a>
<div class="wrapper"><a href="Business_CollegeAthletics.php"  class="ajax-popup-link">
<img src="AthleticSpending2.jpg" class="wrapper thumb"></a>
<a href="Business_CollegeAthletics.php" style="text-decoration:none" class="ajax-popup-link"><p class="text">Even as their spending on instruction, research and public service declined or stayed flat, most colleges and universities rapidly increased their spending on sports. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3 last-child"><a href="Health_infection.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">1 in 25 Patients Gets <br>Infection in Hospital</div></a>
<div class="wrapper"><a href="Health_infection.php" class="ajax-popup-link">
<img src="health_hospital2.jpg" class="wrapper thumb"></a>
<a href="Health_infection.php" style="text-decoration:none" class="ajax-popup-link"><p class="text">About 1 in every 25 patients seeking treatment at hospitals acquired an infection there in 2011, according to a new study published Wednesday. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>

</div>

<div class="col-12">
<div  class="col-3"><a href="Politics_2012Election.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" >&nbsp; Study: In 2012, States <br>&nbsp; Ran Better Elections</div></a>
<div class="wrapper"><a href="Politics_2012Election.php" class="ajax-popup-link">
<img src="ElectionLines2.jpg" class="wrapper thumb"></a>
<a href="Politics_2012Election.php" style="text-decoration:none" class="ajax-popup-link"><p class="text">For all the criticism about long lines and other Election Day snafus, most states actually improved the way they handled elections between 2008 and 2012. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><a href="Health_ecigs.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" style="">&nbsp; E-cigs' Liquid Nicotine <br>&nbsp; Causing Poisonings</div></a>
<div class="wrapper" style=""><a href="Health_ecigs.php" class="ajax-popup-link">
<img src="ecigs2.jpg" class="wrapper thumb"></a>
<a href="Health_ecigs.php" style="text-decoration:none" class="ajax-popup-link"><p class="text">As electronic cigarettes increase in popularity, calls to poison control centers about exposure to the liquid nicotine used in many of the devices have surged. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>


<div  class="col-6 last-child" colspan="2"> 
<a href="Politics_FemaleAthletes.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">For Women, Being a Jock May Signal <br>Political Ambition</div></a>
<div class="wrapper" ><a href="Politics_FemaleAthletes.php" class="ajax-popup-link">
<img src="WomenInSports2.jpg" class="wrapper thumb"></a>
<a href="Politics_FemaleAthletes.php" style="text-decoration:none" class="ajax-popup-link"><p class="text">A study from American University found women who play college sports are 25 percent more likely to have political ambitions than their non-athlete counterparts.  For the study, Professor Jennifer Lawless at American University asked 2,100 college students if they would consider a career in politics.  "The effect was quite substantial," Lawless says.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>

</div>

<div class="col-12">
<div class="col-3"><a href="sports_nba.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left">Brilliant Leaders Key to <br>NBA Dynasties</div></a>
<div class="wrapper" style=""><a href="sports_nba.php" class="ajax-popup-link">
<img src="basketball.jpg" class="wrapper thumb"></a>
<a href="sports_nba.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >The history of glory in the NBA is the history of brilliant management; titles are earned through top-down organizational cohesion. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><a href="Politics_ideological_middle.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" > &nbsp; The Ideological Middle <br>&nbsp; is Dead in Congress</div></a>
<div class="wrapper" ><a href="Politics_ideological_middle.php" class="ajax-popup-link">
<img src="UScapitol2.jpg"  class="wrapper thumb"></a>
<a href="Politics_ideological_middle.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >In the last three decades, the number of members in the middle in the House dropped from 344 in 1982 to four in 2013. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><a href="Health_flu.php" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >&nbsp; Flu Drugs May Not Be<br>&nbsp;   Worth Stockpiling</div></a>
<div class="wrapper" ><a href="Health_flu.php" class="ajax-popup-link">
<img src="Flu_medicine2.jpg"  class="wrapper thumb"></a>
<a href="Health_flu.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >Tamiflu, commonly used to reduce flu symptoms, may not work as well as the federal government believed when it spent more than $1.3 billion stockpiling it.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3 last-child"><a href="Health_Obesity.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" style="">&nbsp; Opinion: U.S. Should <br>&nbsp; Address Obesity </div></a>
<div class="wrapper" ><a href="Health_Obesity.php" class="ajax-popup-link">
<img src="obesity2.jpg"  class="wrapper thumb"></a>
<a href="Health_Obesity.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >A third of adults are obese, and 17 percent of all children are morbidly overweight.  Obesity requires more effort &ndash; from Americans and their government.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



</div>

<div class="col-12">
<div class="col-3"><a href="health_myths.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" style="">&nbsp;6 Fitness Myths, Busted</div></a>
<div class="wrapper"><a href="health_myths.php" class="ajax-popup-link">
<img src="scale2.jpg"  class="wrapper thumb"></a>
<a href="health_myths.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" style="">Are you killing it in the gym but not seeing results? Chances are, you've fallen victim to bad advice.  No worries: Our star trainers are here to update your routine so you get the body you want. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><a href="Science_skull.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" > &nbsp; 3-D Printed Skull <br>&nbsp; Successfully Implanted </div></a>
<div class="wrapper" ><a href="Science_skull.php" class="ajax-popup-link">
<img src="science_skull2.jpg"  class="wrapper thumb"></a>
<a href="Science_skull.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >Doctors in the Netherlands report that they have for the first time successfully replaced most of a human's skull with a 3-D printed plastic one. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><a href="entertainment_kraftwerk.php" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >&nbsp;  That Song is Going to<br>&nbsp;   Hit You in the Head</div></a>
<div class="wrapper" ><a href="entertainment_kraftwerk.php" class="ajax-popup-link">
<img src="entertainment_kraftwerk2.jpg"  class="wrapper thumb"></a>
<a href="entertainment_kraftwerk.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >Kraftwerk, the German band whose music predicted pop's electronic future in the 1970s, hasn't forgotten: A concert is a physical, spatial event. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3 last-child"><a href="entertainment_blackkeys.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" >&nbsp; How the Black Keys <br>&nbsp; Found a New Groove </div></a>
<div class="wrapper" ><a href="entertainment_blackkeys.php" class="ajax-popup-link">
<img src="entertainment_blackkeys2.jpg"  class="wrapper thumb"></a>
<a href="entertainment_blackkeys.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >After two hit albums, the Black Keys weren't sure what to do next. After several stalled recording sessions, they finally got their answer.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>
</div>

<div class="col-12">
<div class="col-6" colspan="2"> 
<a href="sports_jeter.php" style="text-decoration:none" class="ajax-popup-link"><div class="img" align="left" >&nbsp;&nbsp;Derek Jeter Extolled as Model Player</div></a>
<div class="wrapper" ><a href="sports_jeter.php" class="ajax-popup-link">
<img src="Jeter2.jpg" class="wrapper thumb"></a>
<a href="sports_jeter.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >For Bud Selig, Derek Jeter is baseball's perfect knight.  During a recent conference call to promote the relationship between MLB and ESPN, Selig proclaimed Jeter as the player who best represented the sport during Selig's 22-year tenure as commissioner.</p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div> 
</div>



<div class="col-6 last-child" colspan="2"> <div class="wrapper thumb"><img src="Ad1.jpg" ></div></div>

      </div>

<div class="col-12">
<div class="col-3"><a href="arts_origins.php" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >&nbsp;  Photography Dealers<br>&nbsp;   Show Opens at Armory</div></a>
<div class="wrapper" ><a href="arts_origins.php" class="ajax-popup-link">
<img src="arts_origins2.jpg"  class="wrapper thumb"></a>
<a href="arts_origins.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >The photography world has been ruled by a fascination with abstraction. You see this everywhere in the current International Photography Art Dealers show. </p></a></div>
<div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
</div>



<div class="col-3"><div class="wrapper thumb"><img src="Ad3v2.jpg" ></div></div>



<div class="col-3"><a href="Politics_ChevronPizza.php" style="text-decoration:none" class="ajax-popup-link">
<div class="img" align="left" >Pizza 'Scandal' Leaves <br>Small Town Divided</div></a>
<div class="wrapper" ><a href="Politics_ChevronPizza.php" class="ajax-popup-link">
<img src="ChevronPizza2.jpg"  class="wrapper thumb"></a>
<a href="Politics_ChevronPizza.php" style="text-decoration:none" class="ajax-popup-link"><p class="text" >More than 12,000 people have signed a petition demanding that Chevron apologize for responding to an explosion of a gas well by giving residents free pizza. </p></a></div>
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
