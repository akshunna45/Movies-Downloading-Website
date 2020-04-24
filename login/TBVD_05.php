<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "authentication");
if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$comment = mysqli_real_escape_string($conn,$_POST['comment']);
	if($name&&$comment)
	{
		
		$sql = "INSERT INTO comment" . "(movie_id, name, comment)" . "VALUES ('TBVD_05','$name','$comment')";
		mysqli_query($conn, $sql);
		header("location: TBVD_05.php");
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
					   <p><font size="60"> &nbsp; &nbsp; The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download</font></p>
				  </div>
				  <div class="col-md-3 col-sm-5">
					   <div class="single-about-detail">
							<div class="about-img">
								 <img src="img/animated1.jpg" alt="">
							</div>
					   </div>
				  </div>
			 </div>
		</div>
	</section>	
		<p align="center">
		   <b>IMDB&nbsp;Rating</b> : 6.7/10<br>
		   <b>Genres</b> : 
			  <a rel="tag">Animation</a>,
			  <a rel="tag">Action</a>
			  <a rel="tag">Horror</a>
		   <br>			
		   <b>Runtime</b> : 1h 23m 46s<br>
		   <b>Release&nbsp;Date</b> : 18&nbsp;October&nbsp;2005<br>		<b>Cast</b> : 
			  <a rel="tag">Peter Stormare</a>, 
			  <a rel="tag">Rino Romano</a>,
			  <a rel="tag">Tara Strong</a>
		   <br>
		   <div class="movies-heading text-center">
			 <h3>Trailer</h3>
		   </div>	
		   <p align="center">
		   <iframe width="700" height="400" src="https://www.youtube.com/embed/ok6Af3tI0hw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		   </p>	   
		</p>
		<p align="center"> 
			 <b>Language: </b>Hindi + English<br> 
			 <b>Quality: </b>720p HDRip<br>
			 <b>Size: </b>731mb<br> 
			 <b>Movie Resolution: </b>1280*720<br>
			 <b>Subtitle: </b>English<br>
        <div class="movies-heading text-center">
			 <h3>ScreenShots</h3>
		</div>
    <div class="separator" style="clear: both; text-align: center;"> 
	  <img class="alignnone" 
	        title="The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download" 
	        src="https://4.bp.blogspot.com/-2xfxjZm5oWg/XTq1ltjVftI/AAAAAAAArng/ZzZr3qRd14IHaFJZ2lVW6Pd4X2YlgeixACLcBGAs/s640/vlcsnap-2019-07-26-13h39m40s552.png" 
	        alt="The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download" 
	        border="0"> <br> 
	  <img class="alignnone" 
	        title="The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download" 
	        src="https://1.bp.blogspot.com/-7T4HOq16qzM/XTq1lo_991I/AAAAAAAArnY/6_iiatBoC5UM6KGGZsKpTVBIscbCAvWBQCLcBGAs/s640/vlcsnap-2019-07-26-13h40m09s981.png" 
	        alt="The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download" 
	        border="0"> <br> 
	  <img class="alignnone" 
	        title="The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download" 
	        src="https://2.bp.blogspot.com/-0WxPf6aJVcE/XTq1lta79fI/AAAAAAAArnc/UpnaN1W9Zzg95q8bZv6iOlGm_3WFOASxQCLcBGAs/s640/vlcsnap-2019-07-26-13h40m18s790.png" 
	        alt="The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download" 
	        border="0"> <br> 
	  <img class="alignnone" 
            title="The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download" 
	        src="https://2.bp.blogspot.com/-aDmd4bhOdLs/XTq1mbFSZ1I/AAAAAAAArnk/ZHupNslaN9c0SUIYKBFdombUWK0bzG4JACLcBGAs/s640/vlcsnap-2019-07-26-13h40m27s191.png" 
	        alt="The Batman vs. Dracula (2005) Dual Audio [Hindi-English] 720p HDRip ESubs Download" 
	        border="0">
	   </div>

	    <div class="movies-heading text-center">
             <h3><b>Download Links</b></h3>
        </div>
	    </p>
	     <p align="center">
			<b></b>
			   <a href="https://clicknupload.org/u0svt7kww1np" target="_blank">Clicknupload</a>
		   <br>
		   <b></b>
               <a href="https://desiupload.in/f/8uwdmn-x101kr3lf01wh" target="_blank">DesiUpload</a>
		   <br>	
		   <b></b>
		       <a href="https://bdupload.asia/hxbvr9nb5rnx" target="_blank">bdupload</a>
		   <br>	
		   <b></b>
		       <a href="https://www.indishare.org/tdwpk1lki1hf" target="_blank">Indishare</a>
		   <br>
        </p>
	<div class="movies" align="left">
		 <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You May Also Like :</h3>
		     <ul>
				 <li>
					 <a href="GLEK_11.php">
						<span class="movies">Green Lantern: Emerald Knights (2011) Full Movie [English-DD5.1] 720p Download</span>
					 </a>
				 </li>
		     </ul>
	</div>
    
<br/><br/>
<div align="left">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;Comment Section</h3>
<br/>
<form action="TBVD_05.php" method="POST">
<table>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Name: &nbsp;&nbsp;</td><td><input type="text" name="name" /></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Comment: </td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="comment"></textarea></td><td>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>	
<?php
$sql1 = "SELECT * FROM comment WHERE movie_id='TBVD_05' ORDER BY datetime DESC";
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