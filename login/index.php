<?php
	if((isset($_GET['q'])) && ($_GET['q'] == 'Search...')){
		header('Location: index.php');
	}
	if(isset($_GET['q']) !== '')
	{
	session_start();
	$db = mysqli_connect("localhost", "root", "", "authentication");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>World Wide Movies</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style1.css" />
	<script type="text/javascript">
		function active()
		{
			var searchBar = document.getElementById('searchBar');
			
			if(searchBar.value == 'Search...')
			{
				searchBar.value = ''
				searchBar.placeholder = 'Search...'
			}
		}
		function inactive()
		{
			var searchBar = document.getElementById('searchBar');
			
			if(searchBar.value == '')
			{
				searchBar.value = 'Search...'
				searchBar.placeholder = ''
			}
		}
	</script>
</head>	
<body>
	 <header class="top-header">
		     <div class="container">
			      <div class="row">
				       <div class="col-xs-3 header-logo col-md-3; width:100px; height:100px;" >
					        <a href="index.php"><img src="img/logo1.png" alt="" class="img-responsive logo"></a>
				       </div>
                       <div class="col-md-9">
					        <nav class="navbar navbar-default">
					             <div class="container-fluid nav-bar">
					                  <div class="navbar-header">
					                       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					                               <span class="sr-only">Toggle navigation</span>
					                               <span class="icon-bar"></span>
					                               <span class="icon-bar"></span>
					                               <span class="icon-bar"></span>
											       <span class="icon-bar"></span>
											       <span class="icon-bar"></span>
					                       </button>
					                  </div>
					                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					                       <ul class="nav navbar-nav navbar-right">
					                           <li><a class="menu" href="hollywood.php">Hollywood</a></li>
					                           <li><a class="menu" href="bollywood.php">Bollywood</a></li>
					                           <li><a class="menu" href="tollywood.php">Tollywood</a></li>
					                           <li><a class="menu" href="animated.php">Animated</a></li>
							                   <li><a class="menu" href="webseries.php">Web Series</a></li>
											
					                       </ul>
					                  </div>
					             </div>
					        </nav>
				       </div>
			      </div>
		     </div>
	 </header>
     <section class="slider" id="home">
			  <div class="container-fluid">
				   <div class="row">
					    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					         <div class="header-backup">
							 </div>
					    </div>
						<div id="search">
				        <h4 align="center">
	<form action="search.php" method="GET" id="searchForm">
		<input type="text" name="q" id="searchBar" placeholder="" value="Search..." maxlength"100" autocomplete="off" onMouseDown="active();" onBlur="inactive();"/><input type="submit" id="searchBtn" value="Go!" />
	</form>
	<?php
		if(!isset($_GET['q']))
		{
			echo '';
		}
		else 
		{
		$q = isset($_GET['q']) ? $_GET['q'] : '';
		$query = "SELECT * FROM movies WHERE title LIKE '%$q%' OR date LIKE '%$q%' OR genres LIKE '%$q%' OR cast LIKE '%$q%' OR language LIKE '%$q%' OR quality LIKE '%$q%' OR subtitle LIKE '%$q%'";
		$result = mysqli_query($db, $query);
		$num_rows = mysqli_num_rows($result);
	?>
	<p><strong><?php echo $num_rows; ?></strong> Results for '<?php echo $q; ?>'</p>
	<?php
		while($row = mysqli_fetch_array($result))
		{
			$id = $row['id'];
			$title = $row['title'];
			
		echo '<div style="text-align: center;"><h3><a href="' . $id . '">' . $title . '</h3><br/></div>';	
		}
	}
	?>
							</h4>  
				         </div>
					</div>
			  </div>
	 </section>
	 <section class="api-map" id="hollywoood">
			  <div class="container-fluid">
				   <div class="row">
							<div class="col-md-3 col-sm-6">
							      <div class="single-about-detail">
								       <div class="about-img">
									        <a href="AEG_19.php">
										    <img src="img/holly8.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="AEG_19.php">
											   <font size="5">Avengers: Endgame (2019) Dual Audio [Hindi-Cleaned] 720p BluRay ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>

					    <div class="col-md-3 col-sm-6">
							      <div class="single-about-detail">
								       <div class="about-img">
									        <a href="GKOTM_19.php">
										    <img src="img/holly2.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="GKOTM_19.php">
											   <font size="5">Godzilla: King of the Monsters (2019) Dual Audio [Hindi-Cleaned] 720p Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
						     
					    <div class="col-md-3 col-sm-6">
							      <div class="single-about-detail">
								       <div class="about-img">
									        <a href="TH3_13.php">
										    <img src="img/holly5.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="TH3_13.php">
											   <font size="5">The Hangover Part III (2013) Dual Audio [Hindi-English] 720p BluRay ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
                             
						<div class="col-md-3 col-sm-6">
							      <div class="single-about-detail">
								       <div class="about-img">
									        <a href="L_17.php">
										    <img src="img/holly1.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="L_17.php">
											   <font size="5"> Life (2017) Dual Audio [Hindi-DD2.0] 720p BluRay ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
					   
				   </div>
			  </div>
	 </section>	
	 <section class="api-map" id="bollywood">
			  <div class="container-fluid">
				   <div class="row">	
					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="SM_08.php">
										    <img src="img/bolly21.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="SM_08.php">
											   <font size="5">Slumdog Millionaire (2008) Full Movie [Hindi-DD5.1] 720p BluRay ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
						
						<div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="RR_13.php">
										    <img src="img/bolly20.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="RR_13.php">
											   <font size="5">R… Rajkumar (2013) Full Movie [Hindi-DD5.1] 720p BluRay ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
					  
					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="RAW_19.php">
										    <img src="img/bolly14.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="RAW_19.php">
											   <font size="5">Romeo Akbar Walter (2019) Full Movie [Hindi-DD5.1] 720p HDRip ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div> 
					   
					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="TAPM_19.php">
										    <img src="img/bolly5.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="TAPM_19.php">
											   <font size="5">The Accidental Prime Minister (2019) Full Movie Hindi 720p HDRip ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
						
				   </div>
			  </div>
	 </section>	
	 <section class="api-map" id="tollywood">
			  <div class="container-fluid">
				   <div class="row">
					   <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="B_11.php">
										    <img src="img/tamil4.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="B_11.php">
											   <font size="5">Badrinath (2011) Dual Audio [Hindi-Tamil] 720p BluRay ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>

						<div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="T_16.php">
										    <img src="img/tamil3.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="T_16.php">
											   <font size="5">Theri 2016 DVDRip Full Tamil Movie 480p Free Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
					   
					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="STB_07.php">
										    <img src="img/tamil2.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="STB_07.php">
											   <font size="5">Sivaji The Boss (2007) Dual Audio [Hindi-DD2.0] 720p BluRay ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
                        
					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="KN150_17.php">
										    <img src="img/tamil1.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="KN150_17.php">
											   <font size="5">Khaidi No. 150 (2017) Hindi Dubbed 720p UnCut HDRip Full Movie Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
				   </div>
			  </div>
	 </section>
	 <section class="api-map" id="animated">
			  <div class="container-fluid">
				   <div class="row">
					   <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="BH_19.php">
										    <img src="img/animated4.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="BH_19.php">
											   <font size="5">Batman: Hush (2019) Full Movie [English-DD5.1] 720p BluRay ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
						
					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="TLK_19.php">
										    <img src="img/animated3.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="TLK_19.php">
											   <font size="5">The Lion King (2019) Dual Audio [Hindi-Cleaned] 720p HDCAM Free Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
						
					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="GLEK_11.php">
										    <img src="img/animated2.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="GLEK_11.php">
											   <font size="5">Green Lantern: Emerald Knights (2011) Full Movie [English-DD5.1] 720p Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
						
					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="TBVD_05.php">
										    <img src="img/animated1.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="TBVD_05.php">
											   <font size="5">The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
				   
				   </div>
			  </div>
	 </section>
	 <section class="api-map" id="webseries">
			  <div class="container-fluid">
				   <div class="row">
					   <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="ITB_S1.php">
										    <img src="img/series15.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="ITB_S1.php">
											   <font size="5">Into The Badlands Season 1 Hindi Dubbed WEB Series All Episodes Download</font>
										    </a>
								       </div>
							      </div>
						     </div>

					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="ITB_S2.php">
										    <img src="img/series16.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="ITB_S2.php">
											   <font size="5">Into The Badlands Season 2 Hindi Dubbed WEB Series All Episodes Download</font>
										    </a>
								       </div>
							      </div>
						     </div>

					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="ST_S2.php">
										    <img src="img/series23.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="ST_S2.php">
											   <font size="5">Stranger Things Season 2 Hindi Dubbed WEB Series All Episodes 720p Free Download</font>
										    </a>
								       </div>
							      </div>
						     </div>

					    <div class="col-md-3 col-sm-6">
							 <div class="single-about-detail">
								  <div class="about-img">
									        <a href="BOSS_S1.php">
										    <img src="img/series6.jpg" alt="" height="480" width="240">
								            </a>
                                            <a href="BOSS_S1.php">
											   <font size="5">BOSS – Baap of Special Services 2019 Hindi Season 1 WEB Series All Episodes Download</font>
										    </a>
								       </div>
							      </div>
						     </div>
				
				   </div>
			  </div>
	 </section>			
<footer class="footer clearfix">
		<div class="container">
			 <div class="row">
				  <div class="col-xs-10 footer-para">
					   <p> 
						  <a href="https://www.000webhost.com/members/website/list" target="_blank"><font size="4">Members LOGIN</font></a>
					   </p>
				  </div>
				  
				  <div class="col-xs-6 footer-para">
					   <p>&copy; <a href="https://wwmovies.000webhostapp.com">World Wide Movies</a> All right reserved</p>
				  </div>
				 
				 <div class="col-xs-6 text-right">
					   <a href=""><i class="fa fa-facebook"></i></a>
					   &nbsp;&nbsp;&nbsp;
					   <a href=""><i class="fa fa-youtube"></i></a>
					   &nbsp;&nbsp;&nbsp;
					   <a href=""><i class="fa fa-instagram"></i></a>
			      </div>
			 </div>
		</div>
</footer>
</body>
</html>
<?php
	}	else {
		header('Location: index.php');
	}
?>