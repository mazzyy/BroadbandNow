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

if(isset($_GET['states'])){ 
    $states=$_GET['states'];
     $full=$_GET['full'];
    // $full=$_GET['full'];
    $select_deparment = "SELECT * FROM `provider_states` INNER JOIN plans ON plans.name = provider_states.name WHERE provider_states.state ='$states' ORDER BY plans.priority DESC";
    $department_result = mysqli_query($conn, $select_deparment);
 
}
      
    

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
    <title>Available Providers</title>
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
.nav-btn:hover{
	/* background: #354962; */
	color: #FFFFFF;

	border-bottom: 1.5px solid rgb(73, 73, 73);
	/* text-shadow: #2A3D4E 1px 1px,#2A3D4E -0px 0px,#2A3D4E -1px 1px,#2A3D4E -2px 2px,#2A3D4E -3px 3px,#2A3D4E -4px 4px,#2A3D4E -5px 5px,#2A3D4E -6px 6px,#2A3D4E -7px 7px,#2A3D4E -8px 8px,#2A3D4E -9px 9px; */
/* just copy this */
}



</style>
<body>

    <!-- Start Header Area -->
    <div class="header_area   bold shadow sticky"   >
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
                    <?php 
               
                echo  "<h1 class='text-dark'><small style='font-size:20px'>Services providers in</small><br>".$full.','.$states." <b class='zipcode' style='-webkit-text-stroke: 0.1px white;' > </b>"." </h1>";
              
               
                
        
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
                            $priority=$row['priority'];
                         
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
                                      
                                         if($name=="Spectrum" || $name=="RCN" || $name=="Verizon"  || $name=="Viasat" || $name=="HughesNet" || $name=="Starry Internet" || $name=="BarrierFree"  || $name=="AT&T" || $name=="AT&amp;T" || $name=="CenturyLink" || $name=="Xfinity" || $name=="DIRECTV" || $name=="AT&TTV" || $name=="Frontier" )
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
                                <div class="col-4">
                                
                                
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
                                        <div class="col-4 pt-3">
                                        
                                            <a href="<?php echo 'tel:'.$number ?>" class=" btn btn-warning btn-lg " style="border-radius: 20px !important;"><b class="text-light"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<?php echo "CALL NOW" ?> </a></b>
                                           <?php if( $priority==1){ ?>
                                            <a href="/<?php if($name=="AT&TTV" ){ echo 'spectrum.php?provider=ATandTTV'; }else if($name=="AT&T"){ echo 'spectrum.php?provider=ATandT'; } else{ echo 'spectrum.php?provider='.$name;} ?>" class=" btn btn-warning btn-lg " style="border-radius: 20px !important;" target="_blank" >plans &rtrif;</a>
                                          <?php }?>
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