<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "authentication");
if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$comment = mysqli_real_escape_string($conn,$_POST['comment']);
	if($name&&$comment)
	{
		
		$sql = "INSERT INTO comment" . "(movie_id, name, comment)" . "VALUES ('AIW_18','$name','$comment')";
		mysqli_query($conn, $sql);
		header("location: AIW_18.php");
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
					   <p><font size="60"> &nbsp; &nbsp;Avengers Infinity War (2018) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download</font></p>
				  </div>
				  <div class="col-md-3 col-sm-5">
					   <div class="single-about-detail">
							<div class="about-img">
								 <img src="img/holly7.jpg" alt="">
							</div>
					   </div>
				  </div>
			 </div>
		</div>
	</section>	
		<p align="center">
		   <b>IMDB&nbsp;Rating</b> : 8.5/10<br>
		   <b>Genres</b> : 
			  <a rel="tag">Action</a>
			  <a rel="tag">Adventure</a>
			  <a rel="tag">Sci-Fi</a>
		   <br>			
		   <b>Runtime</b> : 02h 29m 21s<br>
		   <b>Release&nbsp;Date</b> : 26&nbsp;April&nbsp;2018<br>		<b>Cast</b> : 
			  <a rel="tag"> Chris Hemsworth</a>, 
			  <a rel="tag">Mark Ruffalo</a>,
			  <a rel="tag">Robert Downey Jr.</a>
		   <br>
		   <div class="movies-heading text-center">
			 <h3>Trailer</h3>
		   </div>	
		   <p align="center">
		 <iframe width="700" height="400" src="https://www.youtube.com/embed/6ZfuNTqbHE8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		   </p>	   
		</p>
		<p align="center"> 
			 <b>Language: </b>Hindi DD5.1 + English<br> 
			 <b>Quality: </b>720p HDRip<br>
			 <b>Size: </b>1.3GB<br> 
			 <b>Movie Resolution: </b>1280*544<br>
			 <b>Subtitle: </b>English<br>
        <div class="movies-heading text-center">
			 <h3>ScreenShots</h3>
		</div>
		<div class="separator" style="clear: both; text-align: center;">
		<div class="separator" style="clear: both; text-align: center;"> <img class="alignnone" title="Avengers Infinity War (2018) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" src="https://3.bp.blogspot.com/-CmWpGJHrvCw/XWY52XRYPMI/AAAAAAAAthg/-mhOzVhwghUUNBs0vhyDDooTPTGX0lVmgCLcBGAs/s640/vlcsnap-2018-08-01-05h11m26s981.png" alt="Avengers Infinity War (2018) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" border="0"> <br> <img class="alignnone" title="Avengers Infinity War (2018) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" src="https://4.bp.blogspot.com/-qiPc1-R4XO8/XWY52a2U1kI/AAAAAAAAtho/gKgdOq4YP34GW5axMwnMz-mLqDnBLp_rQCLcBGAs/s640/vlcsnap-2018-08-01-05h12m31s544.png" alt="Avengers Infinity War (2018) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" border="0"> <br> <img class="alignnone" title="Avengers Infinity War (2018) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" src="https://3.bp.blogspot.com/-B1CPHo5M3V0/XWY52R0-CCI/AAAAAAAAthk/j-zfwlt5VMk9DqxGxgKoOb14INn2d_X3gCLcBGAs/s640/vlcsnap-2018-08-01-05h19m07s861.png" alt="Avengers Infinity War (2018) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" border="0"> <br> <img class="alignnone" title="Avengers Infinity War (2018) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" src="https://4.bp.blogspot.com/-JnPb6qOr3yc/XWY53GfgTBI/AAAAAAAAths/LSBeiHItzjQV2aAJ9aA92cUY6ySbDyDvACLcBGAs/s640/vlcsnap-2018-08-01-05h20m55s102.png" alt="Avengers Infinity War (2018) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download" border="0"></div>
 <div class="movies-heading text-center">
             <h3><b>Download Links</b></h3>
        </div>
	    </p>
	    <p align="center">	
		   <b></b>
		       <a href="https://www.indishare.org/a9kak42syqe6" target="_blank">Indishare</a>
		   <br>
        </p>
	<div class="movies" align="left">
		 <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You May Also Like :</h3>
		     <ul>
				 <li>
					 <a href="AEG_19.php">
						<span class="movies">Avengers: Endgame (2019) Dual Audio [Hindi-Cleaned] 720p BluRay Free Download</span>
					 </a>
				 </li>
		     </ul>
	</div>

<br/><br/>
<div align="left">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;Comment Section</h3>
<br/>
<form action="AIW_18.php" method="POST">
<table>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Name: &nbsp;&nbsp;</td><td><input type="text" name="name" /></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Comment: </td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="comment"></textarea></td><td>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>	
<?php
$sql1 = "SELECT * FROM comment WHERE movie_id='AIW_18' ORDER BY datetime DESC";
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
