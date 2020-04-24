<?php
	if((isset($_GET['q'])) && ($_GET['q'] == 'Search...')){
		header('Location: search.php');
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
		<input type="text" name="q" id="searchBar" placeholder="" value="Search..." maxlength"100" autocomplete="off" onMouseDown="active();" onBlur="inactive();" /><input type="submit" id="searchBtn" value="Go!" />
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
		header('Location: search.php');
	}
?>