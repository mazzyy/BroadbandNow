<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
     $dbname = "onestop_broadbandmovers";
    
    // Create connection
   $conn = mysqli_connect($servername, $username,$password,  $dbname);

    // Check connection
    if (!$conn) {
        
        die("Database connection couldn't be eatablish: " . mysqli_connect_error());
    }

        $states = "SELECT * FROM `states_1` WHERE 1";
        $states = mysqli_query($conn, $states);   
       
   
     
?> 

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>broadbandmovers</title>
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="css/main.css">
</head>
<style>
    body{

        width:99.18%;
    }
.btn {
    background: linear-gradient(90deg,#ffba00 0%, #ff6c00 100%);
    /* 90deg, #ffba00 0%, #ff6c00 100% */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  
  transition: 1s;
}

.btn:hover {opacity: 3;
    background: linear-gradient(90deg,#ffba00 0%, #ffba00 100%)!important;
}
.boxheader{
 color:white!important;
}

.searchbox{
	margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 10px;
}
.search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
	
    }
	.search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:#ff7101;
    text-decoration:none;
    }
/* .banner-area{
	background-attachment:fixed ;
	} */
.category-area{
	width: 55%;
	
}
.zipcode {
  text-align: center;
  font: bold  Sans-Serif;
  padding: 40px 0;

  color: white;
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}

.otto {
  background: #0e8dbc;
  color: white;
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
.mynav{

    border-top: 10px solid #fbb500;
}




</style>
<body>

    <!-- Start Header Area -->
	<!-- <header class="header_area sticky-header">
		<div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
				
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item active"><a class="nav-link" href="index.html">About Us</a></li>
					
							
							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">

				<form class="d-flex justify-content-between" action="blog.php">
					<input name="zipcode" type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header> -->
    <div class="header_area   bold shadow sticky mynav"   >
		<div class="">
			<nav class="navbar navbar-expand-lg navbar-light bg-light" style="  background-image: linear-gradient(to right, #ffffff , #ffffff, #ffffff ); ">
				<div class="container-fluid">
				
				<div class="pl-5">
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
		        </div>
		
							<div class="pr-5">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								   <span class="icon-bar"></span>
								   <span class="icon-bar"></span>
								   <span class="icon-bar"></span>
							   </button>
			   
							   
							   <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
								   <ul class="nav navbar-nav menu_nav ml-auto" >
									   <li class="nav-item active "><a class="nav-link shadow-bottom nav-btn" href="index.html" style="font-size: 20px!important;"><b>Home</b></a></li>
									   <li class="nav-item active  	" ><a class="nav-link nav-btn " href="aboutus.php"  style="font-size: 20px!important;"><b>About Us</b></a></li>
					                   <li class="nav-item active  	" ><a class="nav-link nav-btn " href="providers.php"  style="font-size: 20px!important;"><b>Providers</b></a></li>
									   <li class="nav-item active  	" ><a class="nav-link nav-btn " href="states.php"  style="font-size: 20px!important;"><b>States</b></a></li>
							   
									   
									   
								   </ul>
								   <ul class="nav navbar-nav navbar-right">
									   
									   <li class="nav-item">
										   <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
									   </li>
								   </ul>
							   </div>
								
							</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between" action="blog.php">
					<input  name="zipcode" type="text" class="form-control" id="search_input" placeholder="Search Here" >
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
		
	</div>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
      
            <div class="row pt-5 pb-3 breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-8">
             

                </div>
                <div class="col-lg-3 col-md-4 col-sm-3"">
                <h1>States</h1>
                            <nav class="d-flex align-items-center">
                                <a href="index.html"> Home<span class="lnr lnr-arrow-right"></span></a>
                                <a style="color:white">States </a>
                            </nav>
                </div>
                    </div>
        </div>
        <div class="row">
            <div class="col-1 "></div>
                <div class="col-lg-3 col-md-4 col-sm-6" >
                       
                </div>
        </div>
    </section>
    
    <!-- End Banner Area -->
<div class="container">
<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-8 pt-5 bg-light" >
                    <h2 class="pb-3 " >STATES</h2>
                <p align="justify">
                    <?php 
                      while(($row = $states->fetch_assoc()) !== null){
                            $short=($row['short']);
                            $full=($row['full']);                   
                        ?> 
                    <table class="table">
   
    <tbody>
      <tr>
        <td><?php 
         $fullname=trim($row['full']);
        //  echo '<a href="blog.php?states='.$fullname.'?full="'.$full.'"> '.$full.' </a>';
         echo '<a href="statesproviders.php?states='.$short.'&full='.$full.'"> '.$full.' </a>';
        //  echo '<a href="blog.php?states='.$short.'?states='.$short.'> '.$full.' </a>';
        ?></td>
        
      </tr>
    </tbody>
  </table>
<?php }?>              

                </p>

        </div>
</div>
<div class="row">
    <div class="col-12">

    
    </div>
</div>

</div>
    <!--================Blog Categorie Area =================-->
  
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
  
    <!--================Blog Area =================-->

    <!-- start footer Area -->
   	<footer class="footer-area section_gap">
        <div class="container">
            <div class="row" stle="color:black">
                <div class="col-4  col-4 col-sm-4">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="" method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-4">
                                                    <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                                </div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4">
					<div class="footer__text-widget">
						<h5></h5>
						<ul style="list-style: none">
							<li><a href="aboutus.php">About Us</a></li>

							<li><a href="terms_condictions.php">Privacy &amp; Terms</a></li>
						</ul>
					</div>
				</div>
            </div>
        </div>
            
        
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>