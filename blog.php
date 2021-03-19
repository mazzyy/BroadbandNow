<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zip1";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        
        die("Database connection couldn't be eatablish: " . mysqli_connect_error());
    }
if(isset($_GET['zipcode'])){
     $zipCode=(int)$_GET['zipcode'];

}
    $select_deparment = "SELECT * FROM `highspeedinternet` INNER JOIN zip ON zip.zipcode = highspeedinternet.zip_code WHERE highspeedinternet.zip_code= $zipCode ORDER BY `highspeedinternet`.`availability` DESC";
    $department_result = mysqli_query($conn, $select_deparment);
    
    $state = "SELECT * FROM `highspeedinternet` INNER JOIN zip ON zip.zipcode = highspeedinternet.zip_code WHERE highspeedinternet.zip_code= $zipCode ORDER BY `highspeedinternet`.`availability` DESC";
    $state = mysqli_query($conn, $state);
    
    

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
    <title>Karma Shop</title>
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
.banner-area{
	background-attachment:fixed ;
	}
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


</style>
<body>

    <!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item active"><a class="nav-link" href="index.html">About Us</a></li>
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">All Proviers</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">provider1</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Provider2</a></li>
								</ul>
							</li> -->
							
							
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
	</header>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
      
            <div class="row pt-5 pb-3 breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-8">
                    <?php if ($state->num_rows > 0) {
                while(($state = $state->fetch_assoc()) !== null){
                echo  "<h1 class='text-dark'><small style='font-size:20px'>Services providers in</small><br>".$state['primary_city'].','. $state['state']." <b class='zipcode' style='-webkit-text-stroke: 0.1px white;' >$zipCode </b>"." </h1>";
              
                    break;
                }
            }else{

                echo  "<h1 class='text-dark'><small style='font-size:20px'></small><br>No Providers Found On <b style='-webkit-text-stroke: 0.1px white;' >$zipCode </b>"." </h1>";
              
            }
                ?>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-3"">
                <h1>Services  Page</h1>
                            <nav class="d-flex align-items-center">
                                <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                                <a style="color:white">Services </a>
                            </nav>
                </div>
                    </div>
        </div>
        <div class="row">
            <div class="col-1 "></div>
                <div class="col-lg-3 col-md-4 col-sm-6" >
                        <div class="bg-dark searchbox" >
                                                    <div style="padding-bottom:20ch">
                                                        <form action="blog.php" >
                                                            <div class="d-flex flex-row">

                                                                    <input class="form-control  search_input" name="zipcode" placeholder="Enter your zip code"  maxlength="5" required="" type="text">
                                                                    <button style="border-radius: 50px;background:white!important;"class="click-btn btn btn-default search_icon "><h3><i class="pt-2 search_icon lnr lnr-magnifier" aria-hidden="true"></i></h3></button>
                                                                    
                                                                    <div style="position: absolute; left: -5000px;">
                                                                
                                                            </div>
                                                        </form>											
                        
                                                            <!-- <div class="col-lg-4 col-md-4">
                                                                        <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                                                    </div>  -->
                                                        </div>
                                                    </div>

                        </div>
                </div>
        </div>
    </section>
    
    <!-- End Banner Area -->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <!-- provider     -->
                        <?php 
                        $i=1;
                        while(($row = $department_result->fetch_assoc()) !== null){
                            $name=trim($row['name']);
                            $availability=$row['availability'];
                            $connections=$row['connections'];
                            $speed=$row['speed'];
                        ?> 
          <div class="row pt-3 rounded" >
              <!-- header -->
                    <div class="rounded col-12 bg-light w-100 p-0 m-0 " style="border-left: 1.5px solid #ff9600;border-right: 1.5px solid #ff9600; background: linear-gradient(90deg,#ffba00 0%, #ff6c00 100%)!important;">
                        <h3 class="p-0 m-0 boxheader"> <span style="" class="border-right   bold text-light">#<?php echo $i; $i++; ?>&nbsp;</span>
                            <span class="bold"><?php echo  $name; ?></span>
                            <span class="float-right pt-2"style="font-size:70%; "> <strong><?php echo $availability."%"; ?></strong> availability </span>
                        </h3>
                    </div>
                    <div class="Small shadow col-12 bg-light w-100 p-0 m-0 rounded "style="  border: 1.5px solid #ff9600;" >
                           <div class="row" >
                                
                  
                        
                         
                                        <!-- <img class="w-100" src="img/providers/spectrum.png" alt=""> -->
                                        <?php
                                      
                                         if($name=="Spectrum" || $name=="RCN" || $name=="Verizon"  || $name=="Viasat" || $name=="HughesNet" || $name=="Starry Internet" || $name=="BarrierFree"  || $name=="AT&T" || $name=="AT&amp;T" || $name=="CenturyLink" || $name=="Xfinity" || $name=="DIRECTV" || $name=="AT&TTV")
                                         {
                                            
                                            echo  '<div  class="col-xs-1	col-sm-1	col-md-2	col-lg-4">';
                                            echo '<img class="w-50" src="img/providers/'.$name.'.png" alt="">';
                                        }
                                        else{
                                            echo  '<div  class=" pt-5 col-xs-1	col-sm-1	col-md-2	col-lg-4">';
                                         echo " <h4 class'' style=' font-family: 'Trebuchet MS', sans-serif;font-size: 2em;letter-spacing: -2px;text-transform: uppercase;   '>&nbsp;$name</h4>";
                                       
                                        }
                                       
                                
                                ?>
                                </div>
                                <div class="col-6">
                                
                                
                                            <div class=" pt-3 container-fluid" style="margin-top: 20px; margin-bottom: 20px;">
                                            <div class="row" >
                                            <div class="col-xs-4 text-center border-right border-left pr-2 pl-2" >
                                            <?php
                                            if($name=="DIRECTV" ){
                                              echo  '<div  style="line-height: 150%; ">Channels up to :</div><p class="h2 text-dark" style="font-size: 18px; ">180 </p></div>';
                                              echo '<div class=" col-5 text-center "><div style="line-height: 150%;">Connections:</div><p class="h2 text-dark" style="font-size: 18px;" itemprop="priceRange">Satellite </p></div>';

                                            }
                                            elseif($name=="AT&TTV"){
                                                echo  '<div  style="line-height: 150%; ">Channels up to :</div><p class="h2 text-dark" style="font-size: 18px; ">150 </p></div>';
                                                echo '<div class=" col-5 text-center "><div style="line-height: 150%;">Connections:</div><p class="h2 text-dark" style="font-size: 18px;" itemprop="priceRange">Streaming </p></div>';
                                            }
                                            else{
                                                echo  '<div  style="line-height: 150%; ">Speed up to:</div><p class="h2 text-dark" style="font-size: 18px; ">'. $speed.'</p></div>';
                                                echo '<div class=" col-5 text-center "><div style="line-height: 150%;">Connections:</div><p class="h2 text-dark" style="font-size: 18px;" itemprop="priceRange">'.$connections.' </p></div>'; 
                                            }
                                            ?>

                                            <div class="col-3 text-center">
                                                <div style="line-height: 150%;"></div>
                                                <div style="font-size: 18px">
                                                    <span class="bs-tooltip" title="3.5 out of 5 stars">
                                                    </span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <p>Viasat provides  <a class="bs-tooltip" href="/provider/satellite" title="Click to view all Satellite Internet internet providers.">Satellite Internet</a> and <a class="bs-tooltip" href="/provider/phone" title="Click to view all Phone internet providers.">Phone</a> services in New York, <abbr title="New York">NY</abbr>. -->
                                    </p></div>
                                        <div class="col-2 pt-3">
                                            <a href="" class=" btn btn-warning btn-lg " style="border-radius: 20px !important;">plans &rtrif;</a>
                                            
                                        </div>
                               </div>
                             
                          
                    </div>
                    
          </div>

                        <?php
                                        }
                        ?> 
          
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
  
    <!--================Blog Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

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
                <div class="col-lg-3  col-md-6 col-sm-6">
                    
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    
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