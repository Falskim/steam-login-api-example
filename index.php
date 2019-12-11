<?php
	require ('steamauth/steamauth.php');

	// To reset login session
	// unset($_SESSION['steam_uptodate']);
	// unset($_SESSION['steamid']);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Steam Login</title>
	<style>
	.small {
		font-size : 10px;
	}
	</style>
  </head>
  <body>
	<!-- <div class="jumbotron bg-color-dark"></div> -->
	<div class="bg-info p-5"></div>
	<div class="jumbotron text-center my-0">
		<!-- If user not login yet -->
		<?php if(!isset($_SESSION['steamid'])){?>
			<!-- <div class="container-fluid text-center my-5"> -->
			<h2><b>Steam Login API</b></h2>
			<hr>
			<div class="container-fluid p-3">
				<p> Welcome to Our Website </p>
				<p> Please Sign-in to Continue </p>
				<div class="p-5"> <?php loginbutton(); ?> </div>
			</div>
			<hr>
			<i class="small"> This site is not associated with <a href="#"> Valve Corp. </a></i>
		<?php 
			} else { 
			include ('steamauth/userInfo.php');
		?>	
			<h2><b>Steam Account Data</b></h2>
			<i class="text-success small"> You're successfully sign-in !</i>
			<hr>
			<div class="container-fluid p-3">
				<div class="container-fluid py-5">
					<img src='<?=$steamprofile['avatarfull']?>'><br>
					<i class="small"> Your Steam ID : <?=$steamprofile['steamid']?> </i>
				</div>
				<div class="pb-5">
					<p style="font-size:20px;">Welcome <b class="text-primary"><?=$steamprofile['personaname']?></b></p>
					<p style="font-size:15px;">A.K.A <b class="text-danger"><?=$steamprofile['realname']?></b></p>
					<p class="small"><a href='<?=$steamprofile['profileurl']?>'> Link to Steam Account </a></p>
				</div>
				<h3><b> Activity Record </b></h3>
				<table class='table table-striped p-5'>
					<tr>
						<td><b>Account Time Created </b></td>
						<td><?php echo gmdate("Y-m-d\TH:i:s\Z", $steamprofile['timecreated']);?></td>
					</tr>
					<tr>
						<td><b>Last Seen </b></td>
						<td><?php echo gmdate("Y-m-d\TH:i:s\Z", $steamprofile['lastlogoff']);?></td>
					</tr>
					<tr>
						<td><b>Last Account Update </b></td>
						<td><?php echo gmdate("Y-m-d\TH:i:s\Z", $steamprofile['uptodate']);?></td>
					</tr>
				<hr>
				</table>
				<br><br>
				<?php logoutbutton(); ?>
			</div>
			<hr>	
		<?php } ?>
	</div>
	<div class="bg-info p-5"></div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>