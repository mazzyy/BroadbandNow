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
if(isset($_GET['provider'])){
   $provider=$_GET['provider'];

}
        $providerBundles = "SELECT * FROM `bundles` WHERE `provider` = \"$provider\"";
       
       
   
     
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



.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}



/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}

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
                <h1><?php 
                 if($provider=="Spectrum" || $provider=="RCN" || $provider=="Verizon"  || $provider=="Viasat" || $provider=="HughesNet" || $provider=="Starry Internet" || $provider=="BarrierFree"  || $provider=="AT&T" || $provider=="AT&amp;T" || $provider=="CenturyLink" || $provider=="Xfinity" || $provider=="DIRECTV" || $provider=="AT&TTV")
                 {
                    
                   
                    echo '<img class="w-50" src="img/providers/'.$provider.'.png" alt="">';
                }
                else{
             
                 echo " <h4 class'' style=' font-family: 'Trebuchet MS', sans-serif;font-size: 2em;letter-spacing: -2px;text-transform: uppercase;   '>&nbsp;$provider</h4>";
               
                }
                
                ?></h1>
                            <nav class="d-flex align-items-center">
                                <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                                <a style="color:white"> <?php echo $provider ?></a>
                            </nav>
                </div>
                    </div>
        </div>
        <div class="row">
            <div class="col-4 ">


            </div>
             
            
        </div>
    </section>
    
    <!-- End Banner Area -->
<div class="container">

			<!-- <div style="width: 35%;">
			<div style="float:left">
          <center>
				<h3 class="package-name ">Spectrum Internet<sup>®</sup></h3>
                <div class="price-area__price">
                <div  class=""style="font-size:12px;padding-left:28% !important; float:left; ">From </div><br>
                <span class="price-area__price__dollars"><h2 class="p-0 m-0"><strong>$49.99 /mo</strong></h2></span>
                <div  class=""style="font-size:12px;padding-left:28% !important; float:left; ">for 12 months* </div><br>
            
            </center>
            <div id="package-features-spectrum-internet-reg-" class="package-features hide-for-small-only" data-toggler=".hide-for-small-only" aria-expanded="true" data-e="qw6ycc-e">
      <h3 class="package-features__headline">Download speeds up to 100 Mbps (wireless speeds may vary)</h3>
      
              <ul class="package-features__list">
                      <li class="package-features__list__item">No data caps</li>
                      <li class="package-features__list__item">Free modem</li>
                      <li class="package-features__list__item">Access 500,000+ WiFi hotspots</li>
                      <li class="package-features__list__item">Free antivirus software</li>
                  </ul>
      
      <a class="package-features__button" href="/go/spectrum/residential/order-online" data-brand="Spectrum" data-element="Button" data-component="Package Card">Order Online</a>
          </div> 
			
			</div>
		</div> -->


        <section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <?php 
                $providerBundles = mysqli_query($conn, $providerBundles);
                while(($row = $providerBundles->fetch_assoc()) !== null){
                   $id=$row['id'];
                   $name=$row['name'];
                   $price=$row['price'];
                   $details=$row['details'];
                   $des=$row['des'];
    
   
                 // $bundles=$row['bundles'];
                
            
            ?>
      <div class="col-lg-4 pt-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center"><?php echo $name ?></h5>
            <h6 class="card-price text-center " style="font-size:5ch"><?php  echo $price ?></span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="lnr lnr-arrow-right" ></i></span> <b  style="color: black !important;"> <?php  echo $details ?></b></li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span> <?php  echo $des ?></li>
              <!-- <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Community Access</li>
              <li class="text-muted"><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Unlimited Private Projects</li>
              <li class="text-muted"><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Dedicated Phone Support</li>
              <li class="text-muted"><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Free Subdomain</li>
              <li class="text-muted"><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Monthly Status Reports</li> -->
            </ul>
            <a href="<?php echo 'info.php?provider='.$name."&bundle=".$id ?>" class="btn btn-block btn-primary text-uppercase">Order Online</a>
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- Plus Tier -->
      <!-- <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
            <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span><strong>5 Users</strong></li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>50GB Storage</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Free Subdomain</li>
              <li class="text-muted"><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
      </div> -->
      <!-- Pro Tier -->
      <!-- <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span><strong>Unlimited Users</strong></li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>150GB Storage</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span><strong>Unlimited</strong> Free Subdomains</li>
              <li><span class="fa-li"><i class="lnr lnr-arrow-right"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
  <div class="row pt-5">
<div class="col-lg-12 pb-4">
			
		
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
            
                <div class="col-lg-4  col-md-6 col-sm-6">
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