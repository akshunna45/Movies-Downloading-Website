<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "authentication");
if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$comment = mysqli_real_escape_string($conn,$_POST['comment']);
	if($name&&$comment)
	{
		
		$sql = "INSERT INTO comment" . "(movie_id, name, comment)" . "VALUES ('T_16','$name','$comment')";
		mysqli_query($conn, $sql);
		header("location: T_16.php");
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
					   <p><font size="60"> &nbsp; &nbsp;Theri 2016 DVDRip Full Tamil Movie 480p Free Download</font></p>
				  </div>
				  <div class="col-md-3 col-sm-5">
					   <div class="single-about-detail">
							<div class="about-img">
								 <img src="img/tamil3.jpg" alt="">
							</div>
					   </div>
				  </div>
			 </div>
		</div>
	</section>	
		<p align="center">
		   <b>IMDB&nbsp;Rating</b> : 8.1/10<br>		
		   <b>Runtime</b> : 2h 37m<br>
		   <b>Release&nbsp;Date</b> : 14&nbsp;April&nbsp;2016<br>		<b>Cast</b> : 
			  <a rel="tag">Amy Jackson</a>, 
			  <a rel="tag">Mahendran</a>,
			  <a rel="tag">Samantha Ruth Prabhu</a>
		   <br>
		   <div class="movies-heading text-center">
			 <h3>Trailer</h3>
		   </div>	
		   <p align="center">
		   <iframe width="700" height="400" src="https://www.youtube.com/embed/ZK4uGLpkAKk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		   </p>	   
		</p>
		<p align="center"> 
			 <b>Language: </b>Tamil<br> 
			 <b>Quality: </b>480p DVDRip<br>
			 <b>Size: </b>698mb<br> 
			 <b>Subtitle: </b>N/A<br>
        <div class="movies-heading text-center">
			 <h3>ScreenShots</h3>
		</div>
        <div class="separator" style="clear: both; text-align: center;">
			<img class="alignnone" title="Single Resumable Download Link For Movie Theri 2016 Download And Watch Online For Free" 
				 src="https://1.bp.blogspot.com/-r3SZ9BkzZrs/V1zSyrM2DSI/AAAAAAAAPDo/3Dqae3huM9IPx7-UeUIkxmvzhdppAGgxwCLcB/s640/MBT16TDFMD.mkv.0000.jpg" 
				 alt="Single Resumable Download Link For Movie Theri 2016 Download And Watch Online For Free" 
				 border="0">
			<br>
            <img class="alignnone" title="Splited 200mb Resumable Download Link For Movie Theri 2016 Download And Watch Online For Free" 
				 src="https://3.bp.blogspot.com/-g-aY3I1c0Y4/V1zSymWzIEI/AAAAAAAAPDs/2t5cxg453DQ1q7Mj9JdH7YnFMO1gJGLJACLcB/s640/MBT16TDFMD.mkv.0002.jpg" 
				 alt="Splited 200mb Resumable Download Link For Movie Theri 2016 Download And Watch Online For Free" 
				 border="0">
			<br>
            <img class="alignnone" title="Theri 2016 Full Movie 300MB 700MB BRRip BluRay DVDrip DVDScr HDRip AVI MKV MP4 3GP Free Download pc movies"
				 src="https://2.bp.blogspot.com/-jAtqJOk66Ic/V1zSywfKwpI/AAAAAAAAPD4/915Zz8i7YV0SMeaunAQfgsViMRB6Xb-ZACLcB/s640/MBT16TDFMD.mkv.0004.jpg" 
				 alt="Theri 2016 Full Movie 300MB 700MB BRRip BluRay DVDrip DVDScr HDRip AVI MKV MP4 3GP Free Download pc movies" 
				 border="0">
			<br>
            <img class="alignnone" title="Theri 2016 Full Movie Free Download And Watch Online In HD brrip bluray dvdrip 300mb 700mb 1gb" 
				 src="https://2.bp.blogspot.com/-eeNVofwi_cw/V1zSy-1kUNI/AAAAAAAAPD0/HQmMnCBl2mwIa4H98RJBdDTbkyiVmP8CgCLcB/s640/MBT16TDFMD.mkv.0005.jpg" 
				 alt="Theri 2016 Full Movie Free Download And Watch Online In HD brrip bluray dvdrip 300mb 700mb 1gb" 
				 border="0">
	    </div>
	    <div class="movies-heading text-center">
             <h3><b>Download Links</b></h3>
        </div>
	    </p>
	    <p align="center">
			<b></b>
			   <a href="http://clicknupload.link/pv2sx49mjal4" target="_blank">Clicknupload</a>
		   <br>	
		   <b></b>
		       <a href="https://bdupload.info/ry2vohrt1rh5" target="_blank">bdupload</a>
		   <br>	
		   <b></b>
		       <a href="https://www.indishare.org/1l5rmrbjnth4" target="_blank">Indishare</a>
		   <br>
			<b></b>
		       <a href="https://tusfiles.com/3nvxboowxyoq" target="_blank">TusFiles</a>
		   <br>
        </p>
	<div class="movies" align="left">
		 <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You May Also Like :</h3>
		     <ul>
				 <li>
					 <a href="STB_07.php">
						<span class="movies">Sivaji The Boss (2007) Dual Audio [Hindi-DD2.0] 1080p BluRay ESubs Download</span>
					 </a>
				 </li>
		     </ul>
	</div>
    
<br/><br/>
<div align="left">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;Comment Section</h3>
<br/>
<form action="T_16.php" method="POST">
<table>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Name: &nbsp;&nbsp;</td><td><input type="text" name="name" /></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Comment: </td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="comment"></textarea></td><td>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>	
<?php
$sql1 = "SELECT * FROM comment WHERE movie_id='T_16' ORDER BY datetime DESC";
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