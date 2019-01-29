<?php session_start();
include_once("conne.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Airline</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>

<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->

 <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            /*responsive code begin*/	
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
        
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        
        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('images/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
</head>
<body id="page1">
	<div class="body1">
		<div class="main">
<!-- header -->
			 <header>
				<div class="wrapper" >
                
					<h1>
				 		<a href="index.php"id="logo">
                    	  <font style="margin-left:400px;  color:#FF2243; ; float:right; font-size:28px; margin-top:80px; font-weight:bolder; font-family:Verdana, Arial, Helvetica, sans-serif"> AIR INDIA
                    	  </font>
                 		</a>
              		</h1>
				
                     <div class="right" >
					       <nav>
							   <ul id="top_nav" >
								<li><a href="index.php" title="Home"><img src="images/img1.gif" alt=""></a></li>
						 		<li ><a href="enquries.php" title="Enquries"><img src="images/img2.gif" alt=""></a></li>
  								<li class="bg_none"><a href="index-4.php"><img src="images/img3.gif" title="Admin Login" alt=""></a></li>
							   </ul>
						   </nav>
					
                    		<nav>
								<ul id="menu">
									<li id="menu_active"><a href="index.php">Home</a></li>
									<li><a href="index-1.php">Manage Your Trip</a></li>
									<li><a href="special_offers.php">Special Offers</a></li>
									<li><a href="flyingreturns.php">Flying Returns</a></li>
                            		<li><a href="travel_information.php">Travel Information</a></li>
                            		<li><a href="enquries.php">Contact </a></li>
								</ul>
							</nav>
					 
                      </div>
			</div>   <!--wrapper--> 
		</header> 
	</div>  <!--main--> 
 </div>  <!--body1-->

<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
   <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
   	      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
    	  </div>
      <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
      </div>
</div>
        
<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
    <a data-u="any" href="http://www.jssor.com" style="display:none"></a>
    <div data-p="225.00" style="display: none;">
        <img data-u="image" src="images/air-india-express-airlines.jpg" />
            <div style="position: absolute; top: 30px; left: 30px; width: 1480px; height: 120px; font-size: 40px; color: #ffffff; line-height: 60px;">		 				<marquee> -LET'S FLY , FLY AWAY-</marquee>
             </div>
                
             <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">		 				We are all travelers in the wilderness of this world, and the best we can find in our travels is an honest friend.
             </div>
                
	<div data-u="caption" data-t="0" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
      <img style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" src="images/c-phone-horizontal.png" />
         <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
            <img data-u="caption" data-t="1" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" src="images/ad 4.jpg" />
             <img data-u="caption" data-t="2" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" src=                     																 				"images/air-india-air-hostess.jpg" />
         </div>
                     
      <img data-u="caption" data-t="3" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" src="images/c-finger-pointing.png" />
   </div>
 </div>
            
<div data-p="225.00" style="display: none;">
   <img data-u="image" src="images/red.jpg" />
       <div style="position: absolute; top: 40px; left: 55px; width: 480px; height: 120px; font-size: 40px; font-family:'Courier New', Courier, monospace; color: #ffffff; line-height: 38px;">NOW FLY <span> Delhi to Madrid </span>
       </div>
 </div>
            
 <div data-p="225.00" data-po="80% 55%" style="display: none;">
   <img data-u="image" src="images/..1.jpg" />
        <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 45px; color: #ffffff; font-family:'Times New Roman', Times, serif;R line-height: 60px;">Flight To <span>SUCCESS...!</span></div>
        </div>
  </div>
        
        <!-- Bullet Navigator -->
<div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
   <div data-u="prototype" style="width:16px;height:16px;">
   </div>
 </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
</div>
</div>
</div>
<!-- / header -->

<div class="main" style=" height:1900px;" >
<!-- content -->
	<section id="content1">
		<article class="col1">
			<div class="pad_1">
				<h2>Your Flight Planner</h2>
				<form id="form_1" action="selectflight.php" method="post" >
					<div class="wrapper pad_bot1">
					   
                       <div class="wrappe	r"><br>
						   Leaving From:
						 <div class="bg">
                         <select name="from_flight" style="width:235px; height:30px;">
                           <option value="0">--------------Select Flight--------------</option>
                       			 <?php
									$query="select DISTINCT from_flight from flight";
									$stmt=$con->prepare($query);
									$stmt->execute();
									while($row=$stmt->fetch(PDO::FETCH_ASSOC))
										{
							
                       			 ?>
										<option value="<?php echo $row["from_flight"]; ?>" ><?php echo $row["from_flight"]; ?></option>
                                 <?php
										}
                        		 ?>
                         </select>
                       	 </div>
						</div>
                    
						<div class="wrapper">
						Going To:
							<div class="bg">
                        		<select name="to_flight" style="width:235px; height:30px;">
                          			<option value="0">--------------Select Flight--------------</option>
                        				<?php
											$query="select DISTINCT to_flight from flight";
											$stmt=$con->prepare($query);
											$stmt->execute();
											while($row=$stmt->fetch(PDO::FETCH_ASSOC))
												{
							
                        				?>
                        							<option value="<?php echo $row["to_flight"]; ?>"><?php echo $row["to_flight"]; ?></option>
                           				<?php
												}
                        ?>
                        		</select>
                        		</div>
							</div>
                    
                    		<div class="wrapper">
								Class
                   				 <select name="economy" style="width:235px; height:30px;">
                     				<option value="economy" >economy</option>
                    			    <option value="execute">execute</option>
                     				<option value="first">first</option>
                     			  </select></br></br>
                    		</div>
                    
                     		<div class="wrapper">
								Passanger
                      				<select name="passanger" style="width:235px; height:30px;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option></select>
							</div> 
                      <input type="submit" class="button2" value="GO">
				</div>
				</form>
                
<h2>Recent News</h2>
 <p class="under"><a href="#" class="link1">Air India introduces city check in at New Delhi and Shivaji Stadium metro stations.</a><br>feb 03,2016</p>
 <p class="under"><a href="#" class="link1">Air India successfully introduces Ahmedabad to Newark via London flight.</a><br>december 31,2016</p>
 <p > <a href="#" class="link1"><p class="under"><a href="#" class="link1">Air India successfully introduces Ahmedabad to Newark via London flight.</a><br>march 3,2017</p>	
				
</div>
</article>
		
 <article class="col2 pad_left1"  > 
  <marquee > <h2>Air India connects India to the world</h2></marquee>
   <p class="color1">We operate one of the youngest fleets in the world. And regular upgrades mean we'll continue to provide our passengers with a superior flight experience. </p>
 </article>
	
<div style=" position:absolute; margin-left:370px; background-image:url(images/adds1.gif);margin-top:150px;height:400px; width:350px;"></div>
<div style=" position:relative;height:400px; width:500px;background-image:url(images/1.home.png); margin-left:800px;margin-top:150px;"></div>
<div style=" height:377px; margin-top:30px; width:930px; margin-left:370px;   background-image:url(images/Untitled-1.png)"></div>
<div style=" height:377px;position:absolute; margin-top:30px; width:750px; margin-left:10px;   background-image:url(images/2.home.png)"></div>
<div style=" position:absolute;height:377px; width:520px;background-image:url(images/airfares_650_012214091142.png); margin-left:800px;margin-top:30px;"></div>

<div style=" height:450px;position:absolute; margin-top:450px; width:300px; margin-left:20px; background-image:url(images/home.3.png)"></div>


<div style=" position:absolute;height:188px;  width:776px;background-image:ur; margin-left:400px; background-image:url(images/home.4.png); margin-top:450px;"></div>


<div style=" position:absolute;height:188px; width:776px;background-image:ur; margin-left:400px; background-image:url(images/home.5.png); margin-top:700px;"></div>



<div style="  width: 100%;height:250px;position:absolute;min-width: 1000px;    background: #404040 url(images/footer-bg.gif) left top repeat-x;
    margin-top:950px;">
    
<?php include("footer.php"); ?>


<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>