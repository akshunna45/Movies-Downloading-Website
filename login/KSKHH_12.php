<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "authentication");
if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$comment = mysqli_real_escape_string($conn,$_POST['comment']);
	if($name&&$comment)
	{
		
		$sql = "INSERT INTO comment" . "(movie_id, name, comment)" . "VALUES ('KSKHH_12','$name','$comment')";
		mysqli_query($conn, $sql);
		header("location: KSKHH_12.php");
	}
	else
	{
		echo "Please fill out all the fields.";		
	}
}
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
</head>
<body>
	<header class="top-header">
		     <div class="container">
			      <div class="row">
				       <div class="col-xs-5 header-logo col-md-3">
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
				   </div>
			  </div>
	 </section>
	<section class="api-map" id="about">
			 <div class="container-fluid">
				  <div class="row">
					   <style>
                       p.normal
                       {
                         font-style: normal;
                       }
					   </style>
				  <div class="about-heading">							
					   <p><font size="60"> &nbsp; &nbsp;Kyaa Super Kool Hain Hum (2012) Full Movie Hindi 720p HDRip ESubs Download</font></p>
				  </div>
				  <div class="col-md-3 col-sm-5">
					   <div class="single-about-detail">
							<div class="about-img">
								 <img src="img/bolly12.jpg" alt="">
							</div>
					   </div>
				  </div>
			 </div>
		</div>
	</section>	
		<p align="center">
		   <b>IMDB&nbsp;Rating</b> : 5.0/10<br>
		   <b>Genres</b> : 
			  <a rel="tag">Drama</a>,
			  <a rel="tag">Romance</a>
		   <br>			
		   <b>Runtime</b> : 02h 16m 38s<br>
		   <b>Release&nbsp;Date</b> : 27&nbsp;July&nbsp;2012<br>		<b>Cast</b> : 
			  <a rel="tag">Neha Sharma</a>, 
			  <a rel="tag">Riteish Deshmukh</a>,
			  <a rel="tag">Tusshar Kapoor</a>
		   <br>
		   <div class="movies-heading text-center">
			 <h3>Trailer</h3>
		   </div>	
		   <p align="center">
		   <iframe width="700" height="400" src="https://www.youtube.com/embed/vq8QjEtrrbQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		   </p>	   
		</p>
		<p align="center"> 
			 <b>Language: </b>Hindi<br> 
			 <b>Quality: </b>720p HDRip<br>
			 <b>Size: </b>1.1GB<br> 
			 <b>Movie Resolution: </b>1280*544<br>
			 <b>Subtitle: </b>English<br>
        <div class="movies-heading text-center">
			 <h3>ScreenShots</h3>
		</div>
<div class="separator" style="clear: both; text-align: center;"> 
    <img class="alignnone" 
	     title="Kyaa Super Kool Hain Hum (2012) Full Movie Hindi 720p HDRip ESubs Download" 
	     src="https://2.bp.blogspot.com/-1m86ZQFWe5c/XP9TyhgDUBI/AAAAAAAApaQ/olOP-9aL9NsZq_96eqkFepYlBtRJKtGlACLcBGAs/s640/vlcsnap-2019-06-11-12h34m58s558.png" 
		 alt="Kyaa Super Kool Hain Hum (2012) Full Movie Hindi 720p HDRip ESubs Download" 
		 border="0"> <br> 
	<img class="alignnone" 
	     title="Kyaa Super Kool Hain Hum (2012) Full Movie Hindi 720p HDRip ESubs Download" 
		 src="https://1.bp.blogspot.com/-8iH0_M4R84g/XP9Tym8s1xI/AAAAAAAApaU/OZ3IBNd9KhMrp3-bskRft5m5Ju2K6_qxQCLcBGAs/s640/vlcsnap-2019-06-11-12h36m31s002.png" 
		 alt="Kyaa Super Kool Hain Hum (2012) Full Movie Hindi 720p HDRip ESubs Download" 
		 border="0"> <br> 
	<img class="alignnone" 
	     title="Kyaa Super Kool Hain Hum (2012) Full Movie Hindi 720p HDRip ESubs Download" 
		 src="https://2.bp.blogspot.com/-kytvsdMeEbE/XP9TyjumZOI/AAAAAAAApaM/aJM302Ib8GIRAaRam8e5ZOuRgdHsK4hgQCLcBGAs/s640/vlcsnap-2019-06-11-12h37m23s771.png" 
		 alt="Kyaa Super Kool Hain Hum (2012) Full Movie Hindi 720p HDRip ESubs Download"
		 border="0"> <br>
	<img class="alignnone" 
	     title="Kyaa Super Kool Hain Hum (2012) Full Movie Hindi 720p HDRip ESubs Download" 
		 src="https://1.bp.blogspot.com/-qnjeT47FzXY/XP9Tzz7aacI/AAAAAAAApaY/QM5kaiAh1WQ0lL7NKr2OP6LOk40Q3T9HACLcBGAs/s640/vlcsnap-2019-06-11-12h39m09s436.png" 
		 alt="Kyaa Super Kool Hain Hum (2012) Full Movie Hindi 720p HDRip ESubs Download" 
		 border="0">
</div>
    <div class="movies-heading text-center">
             <h3><b>Download Links</b></h3>
        </div>
	    </p>
	    <p align="center">
			<b></b>
		       <a href="https://www.indishare.org/wgzyba1sk7ll" target="_blank">Indishare</a>
		   <br>
        </p>
	<div class="movies" align="left">
		 <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You May Also Like :</h3>
		     <ul>
				 <li>
					 <a href="22Y_19.php">
						<span class="movies">22 Yards (2019) Full Movie Hindi 720p HDTVRip Free Download</span>
					 </a>
				 </li>
		     </ul>
	</div>
    
<br/><br/>
<div align="left">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;Comment Section</h3>
<br/>
<form action="KSKHH_12.php" method="POST">
<table>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Name: &nbsp;&nbsp;</td><td><input type="text" name="name" /></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Comment: </td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="comment"></textarea></td><td>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>	
<?php
$sql1 = "SELECT * FROM comment WHERE movie_id='KSKHH_12' ORDER BY datetime DESC";
$result = mysqli_query($conn, $sql1);
while($row = mysqli_fetch_array($result))
{
	$id=$row['id'];
	$name=$row['name'];
	$comment=$row['comment'];
	$datetime=$row['datetime'];
	echo '<hr width="2500px"/><h4>&nbsp;&nbsp;<font color="red">Name :  </font>' . $name . '</h4><b>&nbsp;&nbsp;<font color="red">Comment :-</font><br/>&nbsp;&nbsp;' . $comment . '</b><br/><br/><time><small>&nbsp;&nbsp;' . $datetime . '</small></time><br/><hr width="2500px"/>';
}
?>
</div>

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
					   <a href=""><i class="fa fa-youtube"></i></a>
					   <a href=""><i class="fa fa-instagram"></i></a>
			      </div>
			 </div>
		</div>
</footer>
</body>
</html>