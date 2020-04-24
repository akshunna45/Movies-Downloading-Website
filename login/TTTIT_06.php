<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "authentication");
if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$comment = mysqli_real_escape_string($conn,$_POST['comment']);
	if($name&&$comment)
	{
		
		$sql = "INSERT INTO comment" . "(movie_id, name, comment)" . "VALUES ('TTTIT_06','$name','$comment')";
		mysqli_query($conn, $sql);
		header("location: TTTIT_06.php");
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
					   <p><font size="60"> &nbsp; &nbsp;Teen Titans: Trouble in Tokyo (2006) Full Movie English 720p HDRip ESubs Download</font></p>
				  </div>
				  <div class="col-md-3 col-sm-5">
					   <div class="single-about-detail">
							<div class="about-img">
								 <img src="img/animated21.jpg" alt="">
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
			  <a rel="tag">Action</a>
			  <a rel="tag">Comedy</a>
		   <br>			
		   <b>Runtime</b> : 1h 15m 04s<br>
		   <b>Release&nbsp;Date</b> : 06&nbsp;January&nbsp;2018<br>		<b>Cast</b> : 
			  <a rel="tag">Greg Cipes</a>, 
			  <a rel="tag"> Khary Payton</a>,
			  <a rel="tag">Scott Menville</a>
		   <br>
		   <div class="movies-heading text-center">
			 <h3>Trailer</h3>
		   </div>	
		   <p align="center">
		   <iframe width="700" height="400" src="https://www.youtube.com/embed/zPQei7nDZUE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		   </p>	   
		</p>
		<p align="center"> 
			 <b>Language: </b>English<br> 
			 <b>Quality: </b>720p BluRay<br>
			 <b>Size: </b>606MB<br> 
			 <b>Movie Resolution: </b>1280*720<br>
			 <b>Subtitle: </b>English<br>
        <div class="movies-heading text-center">
			 <h3>ScreenShots</h3>
		</div>
<div class="separator" style="clear: both; text-align: center;"> 
    <img class="alignnone" title="Teen Titans: Trouble in Tokyo (2006) Full Movie English 720p HDRip ESubs Download" 
	     src="https://4.bp.blogspot.com/-9Y2niEiT2A4/XUw5QxNdSII/AAAAAAAAseY/TePIXCj9uNMdprWKmZRs5PS2QSnRMERlACLcBGAs/s640/vlcsnap-2019-08-08-20h29m50s215.png" 
		 alt="Teen Titans: Trouble in Tokyo (2006) Full Movie English 720p HDRip ESubs Download"
		 border="0"> <br>
	<img class="alignnone" 
	     title="Teen Titans: Trouble in Tokyo (2006) Full Movie English 720p HDRip ESubs Download" 
		 src="https://3.bp.blogspot.com/-8ykaZTvT9Ck/XUw5Qq6GveI/AAAAAAAAseU/CqYVRMnrDNc2jIpsujNH3pWpXpKZ3TCiACLcBGAs/s640/vlcsnap-2019-08-08-20h30m20s599.png" 
		 alt="Teen Titans: Trouble in Tokyo (2006) Full Movie English 720p HDRip ESubs Download" 
		 border="0"> <br> 
	<img class="alignnone" 
	     title="Teen Titans: Trouble in Tokyo (2006) Full Movie English 720p HDRip ESubs Download" 
		 src="https://1.bp.blogspot.com/-RcIBIRwRo3w/XUw5Q8zpwTI/AAAAAAAAsec/daTOZmNX52sKCShD9pqW-l5-_qCKfJldgCLcBGAs/s640/vlcsnap-2019-08-08-20h30m33s952.png" 
		 alt="Teen Titans: Trouble in Tokyo (2006) Full Movie English 720p HDRip ESubs Download" 
		 border="0"> <br> 
	<img class="alignnone" 
	     title="Teen Titans: Trouble in Tokyo (2006) Full Movie English 720p HDRip ESubs Download" 
		 src="https://2.bp.blogspot.com/-l-J88NTMTCM/XUw5SRG75mI/AAAAAAAAseg/Q_YI6xUnfIMXgJK8n4-zO_HmLsC3k0bRgCLcBGAs/s640/vlcsnap-2019-08-08-20h30m59s145.png" 
		 alt="Teen Titans: Trouble in Tokyo (2006) Full Movie English 720p HDRip ESubs Download" 
		 border="0">
</div>
	    <div class="movies-heading text-center">
             <h3><b>Download Links</b></h3>
        </div>
	    </p>
	     <p align="center">
			<b></b>
			   <a href="https://sharer.pw/file/Kb_1KiHbToV" target="_blank">Sharer</a>
		   <br>
        </p>	
	<div class="movies" align="left">
		 <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You May Also Like :</h3>
		     <ul>
				 <li>
					 <a href="B_08.php">
						<span class="movies">Bolt (2008) Dual Audio [Hindi-DD5.1] 720p BluRay ESubs Download</span>
					 </a>
				 </li>
		     </ul>
	</div>
    
<br/><br/>
<div align="left">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;Comment Section</h3>
<br/>
<form action="TTTIT_06.php" method="POST">
<table>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Name: &nbsp;&nbsp;</td><td><input type="text" name="name" /></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Comment: </td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="comment"></textarea></td><td>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>	
<?php
$sql1 = "SELECT * FROM comment WHERE movie_id='TTTIT_06' ORDER BY datetime DESC";
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