<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="AR bulider's company was estabished in 2015 by Ravi Kumar G with Proprietship from Ms. Anupama Ravi Kumar. Over the past 5 years AR Bulider has delivered more than 6 projects. Our Projects are  bulit with Great hard work and value with innovation, quality, and sustainability at the core of our work and a unique customer centric approach has put us on the league of the best and trusted bulider in the business.">
 		<meta name="keywords" content="ar-buliders, bangalore construction company, banashankari buliders, builders, indian buliders, renovation, commercial, residental, karnataka builders ">
  		<meta name="author" content="AR Bulider's">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">

  	<link rel="stylesheet" href="assets/css/style.css"/>
	<link rel="icon" href="assets/img/logo-sm.png" >
		<title>AR Bulider's - Home page</title>
		<style>
	
.headerText{
	font-size: 2.2rem;
    color: #0c4d9cd4;
    padding-top: 1px;
    font-weight: bold;
}

#subText{
	color: #000;
	text-transform: uppercase;
	font-weight: bold;
}

#subText:hover{
	color: rgba(249,166,0,0.7);
}

.TopicHr{
	border: 1px solid #0c4d9cd4;
	margin-left: 30px;
	width: 25%;
}

.preloaderIcon{
	margin: 7% 40%;
      padding: 100px;
}

.loaderImg{
	margin-left: -84px;
}


.textField{
	color: black;
    margin: 5px 0px;
    width: 50%;
    height: 35px;
    border-radius: 8px;
    padding: 15px;
}
.textField::placeholder{
	margin-left: 25px;
}

@media only screen and (min-width: 945px ) { 
 .navResponsives{
	 display: flex;
	 justify-content: center;
	 align-items: center;
	}
	
.TopicHr{
	width: 25%;
}
}
.footerResponsive1{
 	display: none;
 }
.footerResponsive{
 	display: block;
 }
@media only screen and (max-width: 745px ) { 
 .footerResponsive{
 	display: none;
 }
 .footerResponsive1{
 	display: block;
 }
 
.TopicHr{
	width: 50%;
}
	
.textField{
	width: 100%;
    height: 35px;
}

.preloaderIcon{
	margin: 30% 18%;
}

.loaderImg{
	margin-left: -76px;
}

}
.popover-content{
	background-color: #fff;
	color: #000;
}
.popover .arrow{
	display: none;
}


.carousel2{
    max-width: 100%;
    margin: 0 auto;
    overflow: visible;
}

.carousel1{
    max-width: 100%;
    margin: 0 auto;
    overflow: visible;
}

.carousel3{
    max-width: 100%;
    margin: 0 auto;
    overflow: visible;
}

.slick-list.draggable {
    overflow: visible;
}

.slider_img img{
    width: 100%;
      height: 150px;
}

.carousel2 .slick-next, .carousel3 .slick-next, .carousel1 .slick-next {
top: 35%;
  right: -9px;
  color: #000;
}
.carousel2 .slick-prev , .carousel3 .slick-prev , .carousel1 .slick-prev {
top: 35%;
  left: -9px;
  color: #000;
  z-index: 1;
}

.slick-prev:before, .slick-next:before { font-family: "slick"; font-size: 55px; line-height: 1; color: #000; opacity: 0.75; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }   

.slick-prev:before { content: "‹"; }
[dir="rtl"] .slick-prev:before { content: "›"; }

[dir="rtl"] .slick-next { left: -10px; top: 70px; right: auto; }
.slick-next:before { content: "›"; }
[dir="rtl"] .slick-next:before { content: "‹"; }


.picDetails{
	font-weight: bold;
	text-align: center;
	color: #626262;
}
.picFooter{
	text-align: center;
	color: #626262;
}

#loading{
	position: fixed;
	width: 100%;
	height: 100vh;
	background: #fff no-repeat center center;	
	z-index: 99999;
}


.sk-wave {
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: space-between;
}

.sk-wave-rect {
  background-color: #0c4d9cd4;
  height: 100%;
  width: 15%;
  animation: sk-wave 1.2s infinite ease-in-out; 
}

.sk-wave-rect:nth-child(1) { animation-delay: -1.2s; }
.sk-wave-rect:nth-child(2) { animation-delay: -1.1s; }
.sk-wave-rect:nth-child(3) { animation-delay: -1.0s; }
.sk-wave-rect:nth-child(4) { animation-delay: -0.9s; }
.sk-wave-rect:nth-child(5) { animation-delay: -0.8s; }

@keyframes sk-wave {
  0%, 40%, 100% {
    transform: scaleY(0.4); 
  } 20% {
    transform: scaleY(1); 
  } 
}

.whatsapp-icon{
	background-color: #0a8729;
    height: 75px;
    width: 75px;
    position: fixed;
    bottom: 25px;
    right: 25px;
    z-index: 1;
    font-size: -webkit-xxx-large;
    color: white;
    border-radius: 56%;
    padding: 5px 17px 5px 17px;
    box-sizing: border-box;
    box-shadow: -1px -1px 13px 1px black;
}
.whatsapp-icon:hover{
	color: #0a8729;
	background-color: #e1e1e1;
}
		</style>
	</head>
	<body onload="myFunction()" >
<div id="loading">
<div class="preloaderIcon">
<img src="assets/img/logo.png" class="loaderImg"/>
	 <div class="sk-wave">
        <div class="sk-wave-rect"></div>
        <div class="sk-wave-rect"></div>
        <div class="sk-wave-rect"></div>
        <div class="sk-wave-rect"></div>
        <div class="sk-wave-rect"></div>
    </div>
</div>
</div>
<div class="whatsapp-icon" onclick="whatsappMsg()">
	<i class="fa fa-whatsapp"></i>
</div>	
	
	<?php
	
		include('nav.php');
	
	?>
<div class="container-fluid">
<section id="home"></section>
<br/><br/><br><br>
	   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="assets/img/carousel-img/c1.png" alt="Cover 1" style="width:100%;height: 450px">
      </div>

      <div class="item">
        <img src="assets/img/carousel-img/c2.png" alt="Cover 2" style="width:100%;height: 450px;">
      </div>
    
      <div class="item">
        <img src="assets/img/carousel-img/c3.png" alt="Cover 3" style="width:100%;height: 450px;">
      </div>
  
      <div class="item">
        <img src="assets/img/carousel-img/c4.png" alt="Cover 4" style="width:100%;height: 450px;">
      </div>
  
      <div class="item">
        <img src="assets/img/carousel-img/empty.png" alt="Cover 5" style="width:100%;height: 450px;">
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<section id="our-brand" style="padding: 15px;display: block;background-color: #fff;margin-top: 15px;"><br><br>
<h2 style="padding-left: 35px;font-weight: bold;" align="center">Our Brand</h2>
<div class="row"  style="padding: 20px;">
<div class="col-sm-1"></div>
<div class="col-sm-7">
<img src="assets/img/logo-sm.png"/>
<h2 style="color: #0c4d9cd4;font-weight: bold;">AR Bulider's</h2>
	<p align="justify" style="font-size: initial;"> company was estabished in 2015 by Ravi Kumar G with Proprietship from Ms. Anupama Ravi Kumar. Over the past 5 years AR Bulider has delivered more than 6 projects. Our Projects are  bulit with Great hard work and value with innovation, quality, and sustainability at the core of our work and a unique customer centric approach has put us on the league of the best and trusted bulider in the business.</p>
	<h3 align="center" class="text-warning" style="color: #d9cd4;font-weight: bold;"><i>&quot;&nbsp;&nbsp;We Create Quality Construction&nbsp;&nbsp;&quot;</i></h3>
</div>
<div class="col-sm-4">
	<img src="assets/img/bulid.png" style="box-shadow: 7px 10px 22px 0px;"/>
</div>
    </div>
</section>
<section id="residental" style="padding: 15px;display: block;"><br/><br>
<h3 style="padding-left: 35px;font-weight: bold;color: #0c4d9cd4;"> Residental</h3>
<hr class="TopicHr" >
<div class="row">
    <div class="col-sm-12" style="overflow: hidden">
      
      <div class="carousel1">
								<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/c1.png" class="250px" />
	<span style="position: absolute;right: 10px;top: 10px"><button class="btn btn-xs btn-success">&nbsp;Ready&nbsp;</button></span>
	<span>
		<h4 class="picDetails">MR NAGKIRAN RESIDENTIAL</h4>
		<h5 class="picFooter">at Thirumanahalli, yellahanka</h5>
	</span>
	</div>
	    						<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/c4.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px"><button class="btn btn-xs btn-success">&nbsp;Ready&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >&nbsp;&nbsp;MR HARISH &nbsp;&nbsp;&nbsp;RESIDENTIAL&nbsp;</h4>
		
		<h5 class="picFooter">at Kumaraswamy layout 2nd stage </h5>
	</span>
	</div>
	    						<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/c5.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px"><button class="btn btn-xs btn-success">&nbsp;Ready&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >MR THIPPESWAMY RESIDENTIAL</h4>
		<h5 class="picFooter">at Chitradurga, Nayakan Hatti</h5>
	</span>
	</div>
								<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/c6.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px"><button class="btn btn-xs btn-success">&nbsp;Ready&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >MR GOVINDAPPA RESIDENTIAL</h4>
		<h5 class="picFooter">at Nettigere, Kanakapura road</h5>
	</span>
	</div>
								<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/u2.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px;"><button class="btn btn-xs btn-warning" style="background-color: #ffdf26;color: #000;">&nbsp;Ongoing&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >&nbsp;&nbsp;MR GANESH &nbsp;&nbsp;&nbsp;RESIDENTIAL&nbsp;</h4>
		<h5 class="picFooter">at Kumaraswamy layout</h5>
	</span>
	</div>
								<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/u3.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px;"><button class="btn btn-xs btn-warning" style="background-color: #ffdf26;color: #000;">&nbsp;Ongoing&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >MR MADAN & CA MUNIYAPPA RESIDENTIAL</h4>
		<h5 class="picFooter">at Malur</h5>
	</span>
	</div>
								<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/u4.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px;"><button class="btn btn-xs btn-warning" style="background-color: #ffdf26;color: #000;" >&nbsp;Ongoing&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >MR BV NAGARAJ RESIDENTIAL RENOVATION</h4>
		<h5 class="picFooter">at Kumaraswamy layout</h5>
	</span>
	</div>
  </div>
      
      
    </div>
    </div>
</section>
<section id="commercial" style="padding: 15px;display: block;"><br><br>
<h3 style="padding-left: 35px;font-weight: bold;color: #0c4d9cd4;"> Commercial</h3>
<hr class="TopicHr" >
<div class="row">
    <div class="col-sm-12" style="overflow: hidden">
      
      <div class="carousel2">
      	<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/c2.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px;"><button class="btn btn-xs btn-success"  >&nbsp;Ready&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >&nbsp;CHARANS &nbsp;PUBLIC &nbsp;SCHOOL</h4>
		<h5 class="picFooter">at Ullsor, Bangalore</h5>
	</span>
	</div>
      	<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/c3.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px;"><button class="btn btn-xs btn-success"  >&nbsp;Ready&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >CHARAN’S PRE -UNIVERSITY COLLEGE</h4>
		<h5 class="picFooter">at Cambridge layout</h5>
	</span>
	</div>
		<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/u1.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px;"><button class="btn btn-xs btn-warning" style="background-color: #ffdf26;color: #000;" >&nbsp;Ongoing&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >MR ASHOK KUMAR & NARSIMAH GUPTA</h4>
		<h5 class="picFooter">at Katriguppe, Bangalore</h5>
	</span>
	</div>
  </div>
      
      
    </div>
    
    </div>
</section>

<section id="renovation" style="padding: 15px;display: block;"><br><br>
<h3 style="padding-left: 35px;font-weight: bold;color: #0c4d9cd4;"> Renovation</h3>
<hr class="TopicHr" >
<div class="row">
    <div class="col-sm-12" style="overflow: hidden">
      
      <div class="carousel2">
	<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464;background-color: #f9c573">
	<img src="assets/img/icon/carpenter.png" class="img-responsive" height="100%" style="margin: 33px 0px;" />
	<center><span style="text-align: center;font-weight: 600;
    font-size: large;">Carpenter Works</span></center>
	</div>
	<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464;background-color: #f9c573">
	<img src="assets/img/icon/electrician.png" class="img-responsive" height="100%" style="margin: 33px 0px;" />
	<center><span style="text-align: center;font-weight: 600;
    font-size: large;">Electrician Works</span></center>
	</div>
	<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464;background-color: #f9c573">
	<img src="assets/img/icon/painter.png" class="img-responsive" height="100%" style="margin: 33px 0px;" />
	<center><span style="text-align: center;font-weight: 600;
    font-size: large;">Painter Works</span></center>
	</div>
	<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464;background-color: #f9c573">
	<img src="assets/img/icon/plumber.png" class="img-responsive" height="100%" style="margin: 33px 0px;" />
	<center><span style="text-align: center;font-weight: 600;
    font-size: large;">Plumber Works</span></center>
	</div>
	
  </div>
      
      
    </div>
    
    </div>
</section>

<section id="about-us" style="padding: 15px;display: block;background-color: #fff;margin-top: 15px;"><br><br>
<h2 style="font-weight: bold;" align="center">Our Team</h2>
<div class="row"  style="padding: 20px;">
<div class="col-sm-1"></div>
    <div class="col-sm-3" style="margin: 9px;">
    	  <center><img src="assets/img/dev/anupama.png" class="img-responsive" style="height: 115px;" />
    	  <h3 style="font-weight: bold;">Anupama Ravi Kumar</h3>
    <h5 class="text-warning" style="font-weight: bold;">Proprietor</h5>
    <h4> BCA</h4>
    	  </center>
	</div>   
	
	<div class="col-sm-4" style="margin: 9px;">
    	   <center><img src="assets/img/dev/ravi.png" class="img-responsive" style="height: 115px;" />
		<h3 style="font-weight: bold;"> Ravi Kumar G</h3>
    	<h5 class="text-warning" style="font-weight: bold;">Founder</h5>
    	<h4> DCE, MDIAD</h4>
    	   </center>
	</div>   
	
	<div class="col-sm-3" style="margin: 9px;">
    	   <center><img src="assets/img/dev/jaga.png" class="img-responsive" style="height: 115px;" />
    	   <h3 style="font-weight: bold;">Jagadesh DK</h3>
    	   <h5 class="text-warning" style="font-weight: bold;">Civil Engineer</h5>
    	   <h4> DCE, BE, MISTE, MICA</h4>
    	   </center>
	</div>
<div class="col-sm-1"></div>
    </div>
    <hr />
<h2 style="font-weight: bold;" align="center">Our Technical Team</h2>
<div class="row" style="margin: 12px;">	
<div class="col-sm-12" style="text-align: center">
<h3 style="color: #b8860bf7"><b>Architects :</b></h3>
<h4 style="font-weight: 600">Sree Kenchamba Planning Centre</h4>
<b>Email :</b> jackench1973@gmail.com<br/>
<b>Ph no:</b> +91-9036679431
<br/>
<h3 style="color: #b8860bf7"><b>Structural :</b></h3>
<h4 style="font-weight: 600">Adhi Structural Consultants</h4>
</div>

</div>
</section>
<section id="upcoming" style="padding: 15px;display: block;"><br><br>
<h3 style="padding-left: 35px;font-weight: bold;color: #0c4d9cd4;"> Upcoming</h3>
<hr class="TopicHr" >
<div class="row">
    <div class="col-sm-12" style="overflow: hidden;">
      <div class="carousel3">
    <div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/z1.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px;"><button class="btn btn-xs btn-primary"  >&nbsp;Upcoming&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >SRI KRISHNAPETA MATA JAGALURU CHITRADURGA</h4>
		<h5 class="picFooter">at Temple Project</h5>
	</span>
	</div>
	<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/z2.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px;"><button class="btn btn-xs btn-primary"  >&nbsp;Upcoming&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >MR SHESHAGIRI RAO CHIEFMINISTER ADVISOR</h4>
		<h5 class="picFooter">at Mahatma Children School, JP Nagar</h5>
	</span>
	</div>
	<div class="col-sm-3 slider_img" style="margin: 10px 15px;border: 10px solid #fff;box-shadow: 1px 5px 5px 1px #646464">
	<img src="assets/img/projects/z3.png" class="img-responsive" />
	<span style="position: absolute;right: 10px;top: 10px;"><button class="btn btn-xs btn-primary"  >&nbsp;Upcoming&nbsp;</button></span>
	<span>
		<h4 class="picDetails" >MS V N GEETHA COMMERCIAL</h4>
		<h5 class="picFooter">at KS Layout Near DSIT College</h5>
	</span>
	</div>
  </div>
      
      
    </div>
    </div>
</section>
<section id="contact-us" >
 <?php 
     include 'footer.php';
    ?>
</section>
<div style="background-color: #000;color: #fff;height: 75px;padding: 25px" class="footerResponsive">
	<span style="float: left" >© 2021 AR Bulider's, All Rights Reserved</span>
	<span style="float: right">Designed and Developed By :Happie Webs and Tech</span>
</div>
<div style="background-color: #000;color: #fff;height: 75px;padding: 13px" class="footerResponsive1">
	<center><span >© 2021 AR Bulider's, All Rights Reserved<br>Designed and Developed By :Happie Webs and Tech</span></center>
</div>
	</body>
</html>
<script>
		var preloader = document.getElementById("loading");
		var delay = 2000;
		function myFunction(){
			preloader.style.display = 'none';
		};
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});


$('.carousel1').slick({
    centerMode: true,
    slidesToShow: 2,
    variableWidth: false,
    autoplaySpeed: 300,
    responsive: [{
      breakpoint: 2000,
        settings: {
        centerMode: false,
           slidesToShow: 4,
      slidesToScroll: 1,
      }
    },{
      breakpoint: 750,
        settings: {
        centerMode: false,
           slidesToShow: 3,
      slidesToScroll: 1,
      }
    },{
      breakpoint: 650,
        settings: {
        centerMode: false,
           slidesToShow: 2,
      slidesToScroll: 1,
      }
    },{
      breakpoint: 500,
        settings: {
        centerMode: false,
           slidesToShow: 1,
      slidesToScroll: 1,
      }
    }]
});

$('.carousel3').slick({
    centerMode: true,
    slidesToShow: 2,
    variableWidth: false,
    autoplaySpeed: 3,
    responsive: [{
      breakpoint: 2000,
        settings: {
        centerMode: false,
           slidesToShow: 4,
      slidesToScroll: 1,
      }
    },{
      breakpoint: 750,
        settings: {
        centerMode: false,
           slidesToShow: 3,
      slidesToScroll: 1,
      }
    },{
      breakpoint: 650,
        settings: {
        centerMode: false,
           slidesToShow: 2,
      slidesToScroll: 1,
      }
    },{
      breakpoint: 500,
        settings: {
        centerMode: false,
           slidesToShow: 1,
      slidesToScroll: 1,
      }
    }]
});

$('.carousel2').slick({
    centerMode: true,
    slidesToShow: 2,
    variableWidth: false,
    autoplaySpeed: 3,
    responsive: [{
      breakpoint: 2000,
        settings: {
        centerMode: false,
           slidesToShow: 4,
      slidesToScroll: 1,
      }
    },{
      breakpoint: 750,
        settings: {
        centerMode: false,
           slidesToShow: 3,
      slidesToScroll: 1,
      }
    },{
      breakpoint: 650,
        settings: {
        centerMode: false,
           slidesToShow: 2,
      slidesToScroll: 1,
      }
    },{
      breakpoint: 500,
        settings: {
        centerMode: false,
           slidesToShow: 1,
      slidesToScroll: 1,
      }
    }]
});

function whatsappMsg(){
	window.open("https://wa.me/918861788961?text=Hi%20AR%20Builder's,%20I'm%20interested.%20Can%20you%20contact%20me%20asap...",'_blank');
}

function cleartext(){
         document.getElementById('name').value = '';
         document.getElementById('msg').value = '';
         document.getElementById('phno').value = '';
    }

$('.contact-submit').click(function(e){
		e.preventDefault();
		
		var name = $('#name').val();		
		var phno = $('#phno').val();	
		var msg = $('#msg').val();
		
		if(name == ''){
			$('.alert-box').html(
				'<div class="alert alert-danger">Enter your name</div>'
			);
			$('#name').focus();
			return false;
		}else if(name.length < 3){
			$('.alert-box').html(
				'<div class="alert alert-danger">Name should be more than 2 characters</div>'
			);
			$('#name').focus();
			return false;
		}
		
		if(phno == ''){
			$('.alert-box').html(
				'<div class="alert alert-danger">Enter your phone number</div>'
			);
			$('#phno').focus();
			return false;
		}else if(!phno.match(/^\d{10}/)){
			$('.alert-box').html(
				'<div class="alert alert-danger">Phone number should be 10 digits</div>'
			);
			$('#phno').focus();
			return false;
		}else if(phno.length <= 9){
			$('.alert-box').html(
				'<div class="alert alert-danger">Phone number should be 10 digits</div>'
			);
			$('#phno').focus();
			return false;
		}
		
		
		
		
		if(msg == ''){
			$('.alert-box').html(
				'<div class="alert alert-danger">Enter your message</div>'
			);
			$('#msg').focus();
			return false;
		}else if(msg.length <= 15){
			$('.alert-box').html(
				'<div class="alert alert-danger">Message should be more than 15 characters</div>'
			);
			$('#msg').focus();
			return false;
		}
		
		var exportData = {"name": name,"phone": phno,"message": msg}
		
		
		$.ajax({
			type : "POST",
			url : "submit.php",
			data : { 'exportData' : exportData },
			beforeSend: function(){
                $('.alert-box').html("<div class='alert alert-warning'>Mail Sending..... Wait for few seconds</div>");
            },
            complete: function(){
                $('.alert-box').html("<div class='alert alert-success'>Thank You</div>");
            },
			success: function(data){
			 	setTimeout(function(){
			 		$('.alert-box').html(data);
			 			$('#name').val() = '';
			 			$('#phno').val() = '';
			 			$('#msg').val() = '';
			 	}, delay);
			 }
		});
			
	});



</script>
