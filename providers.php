
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
if(isset($_GET['zipcode'])){
     $zipCode=(int)$_GET['zipcode'];

}
    
    
        $provider = "SELECT * FROM `plans` WHERE `priority` =1";
        $provider = mysqli_query($conn, $provider);
        
     

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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
  padding: 10px 32px;
  
  text-align: center;
  font-size: 16px;
  margin: 10px 2px;
  
  transition: 2s;
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
b{
    color:black !important;

}
.tbl, td,th {
  padding-top: 30px!important;
  padding-left: 20px!important;
}

.x{
    box-shadow: -1px -1px 5px 1px rgba(0,0,0,0.1);
}
th,td{

    border-bottom: 2px solid black;

}
.tableborder{
border-bottom: 5px solid black;

}




</style>
<body>


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
    <section class="banner-area organic-breadcrumb " >
        <div class="container">
      
            <div class="row pt-5 pb-3 breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-8">
             

                </div>
                <div class="col-lg-3 col-md-4 col-sm-3"">
                <h1>Providers</h1>
                            <nav class="d-flex align-items-center">
                                <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                                <a style="color:white">Providers </a>
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
<div class="container-fluid">
<div class="row">
    <div class="col-2"></div>
 <div class="col-4 pt-5 pb-2 ">
     <center><h2> Internet service providers</h2></center>
        <table class="table table-sm table-light">
        <thead>
            <tr class="tableborder" >
            <th scope="col"><h4>#</h4></th>
            <th scope="col"><h4>Provider</h4</th>
            <th scope="col"><h4>plans</h4</th>
        
           </tr>
        </thead>
        <tbody>
            <?php $i=0;
                    while(($row = $provider->fetch_assoc()) !== null){
                        $name=trim($row['name']);
                    
                    
                        ?> 
                <tr >
                    <th class="tbl" scope="row"><strong><?php echo $i; ?></strong></h4></th>
                    <td class="" > <strong> <?php echo $name; ?></strong></td>
                    <td class="p-0 m-0 pl-5"  >
                                <a href="/<?php if($name=="AT&TTV" ){ echo 'spectrum.php?provider=ATandTTV'; }else if($name=="AT&T" || $name=="AT&amp;T" || $name=="AT T"  ){ echo 'spectrum.php?provider=ATandT'; } else{ echo 'spectrum.php?provider='.$name;} ?>" class="btn btn-warning btn-sm " style="border-radius: 20px !important;" target="_blank">view plans &rtrif;</a>
                                
                    </td>
            </tr>
            <?php $i++;}?>
        </tbody>
        </table>
 </div>  
<div class="col-1"></div>
 <div class="col-3">
    <div class="row border-top p-5">
        
        <div class="col-lg-12 ">
                <div>
                    <center class="pb-3  "><h3>Internet technology types around the country</h3></center>
                
                </div>			
        </div>
        
        <div class="col-lg-12 pb-4" >
        <div class="row">
        <div class="col-3" style="float:left;">
                <center><img style="max-width:100%;max-height:100%;" src="img/DSL.png" alt="">
                <h4><strong>79%<br></h4>DSL</strong></center>
                
            </div>
            <div  class="col-3">
            <div >
                <center><img style="max-width:100%;max-height:100%;" src="img/cable.png" alt="">
                <h4><strong>86% <br></h4>Cable<</strong></center>
                
            </div>
        </div>
            <div  class="col-3">
                <center><img style="max-width:100%;max-height:100%;" src="img/Satellite.png" alt="">
                <h4><strong>8%<br></h4>Satellite</strong></center>
            
            </div>
            <div  class="col-3">
                <center><img style="max-width:100%;max-height:100%;" src="img/fiber.png" alt="">
                <h4><strong>100%<br></h4>Fiber</strong></center>
            
            </div>

        </div>
        </div>
        
        
    </div>

    <h3 style="float:left;">Wow facts about internet service by zip code </h3><br>
     

     <!-- <div class='border-bottom w-75  m-3' >
     <h4><strong> <i style="float:left;color:orange;" class="fas fa-tachometer-alt"></i>  &nbsp;100 Mbps to 1 Gbps</strong></h4>
            <p>
            <p class="pl-3">Maximum speeds range in the average zip code is from <b> 100 Mbps<b> to </b>1 Gbps </b>. </p>
        </div> -->

        <div class='border-bottom w-75  m-3' >
            <h4> &nbsp;<strong>71% <i   style="float:left;color:orange;" class="fas fa-bolt"></i> </strong></h4>
            <p>
            At least one service with speeds of 100 Mbps to 1 Gbps is available in 71% of ZIP codes.</p>
        </div>
      
        <div class='border-bottom w-75 m-3'> 
            <h4> &nbsp;<strong> 93.5% <i   style="float:left;color:orange;" class="fas fa-bolt"></i></strong></h4>
            <p>
            of the country population has access to high-speed Internet at 25 Mbps or above..</p>
        </div>

       
        <div class='border-bottom w-75 m-3'>
            <h4> &nbsp;<strong>  70% <i   style="float:left;color:orange;" class="fas fa-expand-arrows-alt"></i></strong></h4>
            <p>
            Two or more wired providers are available in 70% of ZIP codes.</p>
        </div>

        <div class='border-bottom w-75 m-3'>
            <h4> &nbsp;<strong> 52% <i    style="float:left;color:orange;"class="fas fa-expand-arrows-alt"></i></strong></h4>
            <p>
            Three or more wired providers are available in 52 percent of ZIP codes.</p>
        </div>
       

     
        <div class='border-bottom w-75 m-3'>
            <h4> &nbsp;<strong> 33% <i   style="float:left;color:orange;" class="fas fa-universal-access"></i></strong></h4>
            <p>
            4 or more wired providers are available in 33% of ZIP codes.</p>
        </div>
       

       
        <div class='border-bottom w-75 m-3'>
            <h4> &nbsp;<strong> 17% <i  style="float:left;color:orange;" class="fas fa-universal-access"></i></strong></h4>
            <p>
            5 or more wired providers are available in 17% of zip codes.</p>
        </div>
       

     
        
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