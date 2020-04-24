<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "authentication");
if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$comment = mysqli_real_escape_string($conn,$_POST['comment']);
	if($name&&$comment)
	{
		
		$sql = "INSERT INTO comment" . "(movie_id, name, comment)" . "VALUES ('TC_13','$name','$comment')";
		mysqli_query($conn, $sql);
		header("location: TC_13.php");
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
					   <p><font size="60"> &nbsp; &nbsp;The Croods (2013) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download</font></p>
				  </div>
				  <div class="col-md-3 col-sm-5">
					   <div class="single-about-detail">
							<div class="about-img">
								 <img src="img/animated10.jpg" alt="">
							</div>
					   </div>
				  </div>
			 </div>
		</div>
	</section>	
		<p align="center">
		   <b>IMDB&nbsp;Rating</b> : 7.2/10<br>
		   <b>Genres</b> : 
			  <a rel="tag">Animation</a>
			  <a rel="tag">Comedy</a>
			  <a rel="tag">Adventure</a>
		   <br>			
		   <b>Runtime</b> : 1h 38m 37s<br>
		   <b>Release&nbsp;Date</b> : 21&nbsp;March&nbsp;2013<br>		<b>Cast</b> : 
			  <a rel="tag">Emma Stone</a>, 
			  <a rel="tag">Nicolas Cage</a>,
		   <br>
		   <div class="movies-heading text-center">
			 <h3>Trailer</h3>
		   </div>	
		   <p align="center">
		 <iframe width="700" height="400" src="https://www.youtube.com/embed/Tz1TDt-wg_o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		   </p>	   
		</p>
		<p align="center"> 
			 <b>Language: </b>Hindi DD5.1 + English<br> 
			 <b>Quality: </b>720p BluRay<br>
			 <b>Size: </b>863MB<br> 
			 <b>Movie Resolution: </b>1280*544<br>
			 <b>Subtitle: </b>English<br>
        <div class="movies-heading text-center">
			 <h3>ScreenShots</h3>
		</div>
<div class="separator" style="clear: both; text-align: center;"> 
    <img class="alignnone" title="The Croods (2013) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" 
	     src="https://2.bp.blogspot.com/-ZDhXLUTZKdw/XQD8s-51vxI/AAAAAAAApds/j0N43DeNAzkV2ghXvk9yVoELtmYnKA8egCLcBGAs/s640/vlcsnap-2019-06-12-18h49m44s949.png" 
		 alt="The Croods (2013) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" 
		 border="0"> <br> 
	<img class="alignnone" 
	     title="The Croods (2013) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" 
		 src="https://2.bp.blogspot.com/-Fs_Tisegzgk/XQD8s6N0n4I/AAAAAAAApdo/1sF9NS1wB1YC70wks68GH4mVDAklcm5lACLcBGAs/s640/vlcsnap-2019-06-12-18h50m13s764.png" 
		 alt="The Croods (2013) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download"
		 border="0"> <br> 
	<img class="alignnone" 
		 title="The Croods (2013) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" 
		 src="https://1.bp.blogspot.com/-Pj-HtKeG8H4/XQD8tOdr6NI/AAAAAAAApdw/FxJ2jn1NGNEwVkd0Y9xyFYrpc_je53JTgCLcBGAs/s640/vlcsnap-2019-06-12-18h51m21s925.png" 
		 alt="The Croods (2013) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" 
		 border="0"> <br> 
	<img class="alignnone" 
		 title="The Croods (2013) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" 
		 src="https://4.bp.blogspot.com/-h_Hx1EciQ54/XQD8toFTvzI/AAAAAAAApd0/3_Kh-gxrmdgqPP3EsrQtN-vILyEMIh-GwCLcBGAs/s640/vlcsnap-2019-06-12-18h52m34s811.png" 
		 alt="The Croods (2013) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" 
		 border="0">
</div>
	    <div class="movies-heading text-center">
             <h3><b>Download Links</b></h3>
        </div>
	    </p>
	     <p align="center">
			<b></b>
		       <a href="https://www.indishare.org/kco9fkhqftul" target="_blank">Indishare</a>
		   <br>
        </p>	
	<div class="movies" align="left">
		 <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You May Also Like :</h3>
		     <ul>
				 <li>
					 <a href="FN_03.php">
						<span class="movies">Finding Nemo (2003) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download</span>
					 </a>
				 </li>
		     </ul>
	</div>
    
<br/><br/>
<div align="left">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;Comment Section</h3>
<br/>
<form action="TC_13.php" method="POST">
<table>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Name: &nbsp;&nbsp;</td><td><input type="text" name="name" /></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Comment: </td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="comment"></textarea></td><td>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>	
<?php
$sql1 = "SELECT * FROM comment WHERE movie_id='TC_13' ORDER BY datetime DESC";
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