<?php
	session_start();
	$db = mysqli_connect("localhost", "root", "", "authentication");
if (isset($_POST['register_btn']))
{
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	$password2 = mysqli_real_escape_string($db,$_POST['password2']);

	if ($password == $password2)
	{
		$password = md5($password);
		$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
		mysqli_query($db, $sql);
		header("location: index.php");
	 }
	 else
	 {
		$_SESSION['message'] = "Password don't Match.";
		 header('Location: register.php');
	 }
}
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>World Wide Movies</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	<style>
		ul li{list-style:none;}
		ul li a {color:black;text-decoration:none; }
		ul li a:hover {color:black; text-decoration:none;}
	</style>
	
</head>
	
<body>
	
<header class="top-header">
		     <div class="container">
			      <div class="row">
				       <div class="col-xs-3 header-logo col-md-3; width:100px; height:100px;" >
					        <a href="#"><img src="img/logo1.png" alt="" class="img-responsive logo"></a>
				       </div>
</header>
				 
		<div class="middle" style=" position:fixed; padding:40px; border:1px solid #ED2553; left:30%; top:30%; width:400px;">
       
		<ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ED2553;border-radius:10px 10px 10px 10px;" role="tablist">
        
			<li class="nav-item">
             <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Register</a>
            </li>
         
            <a href="login.php" class="nav-link" id="profile-tab" style="color:white;" 
			 aria-controls="profile" aria-selected="false">Login</a>
          
        </ul>
		<br><br>
	    <div class="tab-content" id="myTabContent">
		

	
<?php
    if (isset($_SESSION['message'])) 
	{
        echo"<div id='error_msg'>".$_SESSION['message']."</div";
		unset($_SESSION['message']);
	}
?>

<form method="POST" action="register.php" >
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput" placeholder="Enter Username" required></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput" placeholder="Enter Email ID" required></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput" placeholder="Enter password" required></td>
		</tr>
		<tr>
			<td>Password again:</td>
			<td><input type="password" name="password2" class="textInput" placeholder="Enter password Again" required></td>
		</tr>
	</table>
		
			<button type="submit" name="register_btn" class="btn btn-primary">Register</button>
			
			
	
</form>
</body>
</html>
				 
				 