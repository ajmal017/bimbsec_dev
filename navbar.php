<div style="background:#eaeaea">
	<div class="container">

		<!-- Row for time/date and prayer time -->
		<!-- For mobile view -->
		<div class="row px-2 py-1 d-md-none align-items-center">
			<div id="current-time-mobile" class="col-md-4 d-flex justify-content-center " style="font-size: 0.65em;">
				<div style=""></div>
			</div>
		</div>
		<!-- For desktop view -->
		<div class="row px-2 py-1 d-none d-md-flex">
			<div id="current-time" class="col-md-4 d-flex flex-row align-items-center" style="font-size: 0.65em; height: 25px;">
				<div style=""></div>
			</div>
			<div class="col-md-8 text-right" style="font-size: 0.65em">
				<?php include_once 'waktusolat.php'; ?>
				<button style="background: <?php echo $setting['accent-color'] ?>; border:none;height:25px; width:150px;margin: 0px;color: white; text-align: center" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search ml-2"></i> Search...</button>
			</div>
		</div>

		<!-- Line -->
		<hr class="my-0">

		<!-- Row for logo, menu and button to internet banking and bisonline -->
		<div class="row navbar navbar-expand-lg navbar-light p-1 mx-1">


			<!-- Logo -->
			<div class="col-md-3 p-0">
				<div class="d-flex justify-content-start justify-content-md-center">
					<a class="navbar-brand m-0 p-0" href="/">
						<img src="image/logo-bimbsec-sdn-bhd.png" alt="BIMB Securities Sdn Bhd" width="100%">
					</a>					
				</div>
			</div>



			<!-- Menu -->
			<div class="col-md-9 d-flex flex-column flex-md-column-reverse">

				<div class="row no-gutters">
					<!-- Navigation menu -->
					<div class="col-md-10">
						<div class="px-2">
							<h6 class="m-0 text-center">Invest <b>4 Ummah</b> &ndash; Opening Doors to the <b style="color:<?php echo $setting['theme-color'] ?>">Shariah Capital Market</b></h5>
						</div>
						<nav class="">
						  <button class="navbar-toggler btn-block my-1" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span> Menu
						  </button>
						  <div class="collapse navbar-collapse" id="navbarNavDropdown">
						    <ul class="navbar-nav my-0 text-theme">
						      <li class="nav-item active">
						        <a class="font-weight-bold nav-link" style="color:<?php echo $setting['theme-color'] ?>" href="/">Home <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item dropdown">
						        <a style="color:<?php echo $setting['theme-color'] ?>" class="nav-link<?php if( isset($_GET['p']) ){is_parent($conn,$_GET['p'],1);} ?> dropdown-toggle" href="#" id="navbarDropdown-Corporate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Corporates
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="about-us">About Us</a>
						          <a class="dropdown-item" href="leadership">Leadership</a>
						          <a class="dropdown-item d-none" href="corporate-governance">Corporate Governance</a>
						          <a class="dropdown-item d-none" href="policies">Policies &amp; Guidelines</a>
						        </div>
						      </li>
						      <li class="nav-item dropdown">
						        <a style="color:<?php echo $setting['theme-color'] ?>" class="nav-link<?php if( isset($_GET['p']) ){is_parent($conn,$_GET['p'],2);} ?> dropdown-toggle" href="#" id="navbarDropdown-Products" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Products &amp; Services
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="islamic-stockbroking">Stockbroking</a>
						          <a class="dropdown-item" href="shariah-advisory">Shariah Advisory Services</a>
						          <a class="dropdown-item d-none" href="corporate-advisory">Corporate Advisory</a>
						          <a class="dropdown-item" href="share-margin">Share Margin Financing</a>
						          <a class="dropdown-item" href="research">Investment Research</a>
						        </div>
						      </li>
						      <li class="nav-item dropdown">
						        <a style="color:<?php echo $setting['theme-color'] ?>" class="nav-link<?php if( isset($_GET['p']) ){is_parent($conn,$_GET['p'],3);} ?> dropdown-toggle" href="#" id="navbarDropdown-Shariah" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Shariah
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="shariah-investing">Shariah Investing</a>
						          <!--a class="dropdown-item" href="ipo-interim-status">IPO Interim Shariah Status</a-->
						          <!--a class="dropdown-item" href="zakat">Zakat on Shares</a-->
						        </div>
						      </li>
						      <li class="nav-item dropdown">
						      	<a style="color:<?php echo $setting['theme-color'] ?>" class="nav-link<?php if( isset($_GET['p']) ){is_parent($conn,$_GET['p'],4);} ?> dropdown-toggle" href="#" id="navbarDropdown-Career" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Career
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown-Career">
						        	<a class="dropdown-item" href="career">Vacancy</a>	
						        </div>
						      </li>
						      <li class="nav-item dropdown">
						      	<a style="color:<?php echo $setting['theme-color'] ?>" class="nav-link<?php if( isset($_GET['p']) ){is_parent($conn,$_GET['p'],5);} ?> dropdown-toggle" href="#" id="navbarDropdown-Contact" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Contact
						        </a>
						        <div class="dropdown-menu">
						        	<a class="dropdown-item" href="contact">Our Office</a>
						        	<a class="dropdown-item" href="https://www.facebook.com/BIMBSecurities/" target="_blank">Facebook Page</a>
						        </div>
						      </li>
						    </ul>
						  </div>
						</nav>	
					</div>

			      	<div id="apps-link" class="col-md-2">
			      		<div class="row d-flex flex-row">
			      			<a class="border border-success" href="https://www.bisonline.com.my/Ecos/login_024.aspx" target="_blank" rel="noopener">
			      				<img src="image/bisonline-logo.jpg" class="w-100" alt="BISonline">
			      			</a>
			      			<a class="border border-danger" href="https://www.bankislam.biz" target="_blank" rel="noopener">
			      				<img src="image/bank-islam-logo.jpg" class="w-100" alt="Bank Islam Internet Banking">
			      			</a>	
			      		</div>
			      	</div>
				</div>	

				

				<!-- Horizontal line -->
				<hr class="m-0 d-none">


				<!-- Search button -->
				<!--form class="row d-md-flex flex-row-reverse m-1 p-0" action="search.php" method="get">
					<input class="form-control col-12 col-md-3 m-0 text-left text-md-right" type="" name="search" placeholder="Search..." style="background: transparent;border:none;width: 100%">
				</form-->
				



			</div>	
		</div>
	</div>
	
</div>

<!-- Modal for search box -->
<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="search" method="post">
        	<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Keyword" aria-label="Search keyword" aria-describedby="basic-addon2" name="s" id="search-input">
			  <div class="input-group-append">
			    <button class="btn btn-outline-accent" type="submit">Search</button>
			  </div>
			</div>
        </form>
      </div>
    </div>
  </div>
</div>