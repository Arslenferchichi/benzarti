<?php
	include "connexion.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}

	</style>
</head>
<body style="background-color: #004528;">

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>
	<?php
		
		$sql = "SELECT * FROM utilisateur WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$Id=$row['Id'];
			$Nom=$row['Nom'];
			$Prenom=$row['Prenom'];
			$Emial=$row['Email'];
			$Login=$row['Login'];
			$Password=$row['Password'];
            $Confirm=$row['Confirm'];
            $Date_de_naissance=$row['Date_de_naissance'];
            $Nationalite=$row['Nationalite'];
            $Num=$row['Num'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b>Id: </b></h4></label>
		<input class="form-control" type="text" name="Id" value="<?php echo $Id; ?>">

		<label><h4><b>Nom</b></h4></label>
		<input class="form-control" type="text" name="Nom" value="<?php echo $Nom; ?>">

		<label><h4><b>Prenom</b></h4></label>
		<input class="form-control" type="text" name="Prenom" value="<?php echo $Prenom; ?>">

        <label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="Email" value="<?php echo $Email; ?>">
        
        <label><h4><b>Login</b></h4></label>
		<input class="form-control" type="text" name="Login" value="<?php echo $Login; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $Password; ?>">

        <label><h4><b>Confirm</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $Confirm; ?>">
		

		<label><h4><b>Date_de_naissance</b></h4></label>
		<input class="form-control" type="text" name="Date_de_naissance" value="<?php echo $Date_de_naissance; ?>">

        <label><h4><b>Nationalite</b></h4></label>
		<input class="form-control" type="text" name="Nationalite" value="<?php echo $Nationalite; ?>">

        <label><h4><b>Num</b></h4></label>
		<input class="form-control" type="text" name="Num" value="<?php echo $Num; ?>">

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$Id=$_POST['Id'];
			$Nom=$_POST['Nom'];
			$Prenom=$_POST['Prenom'];
            $Email=$_POST['email'];
			$Login=$_POST['Login'];
			
			$Password=$_POST['Password'];
            $Confirm=$_POST['Confirm'];
            $Date_de_naissance=$_POST['Date_de_naissance'];
            $Nationalite=$_POST['Nationalite'];
            $Num=$_POST['Num'];
			

			$sql1= "UPDATE utilisateur SET Id='$Id', Nom='$Nom', Prenom='$Prenom', Email='$Email', Login='$Login', Password='$Password', Confirm='$Confirm', Date_de_naissance='$Date_de_naissance', Nationalite='$Nationalite', Num='$Num' WHERE Id='".$_SESSION['login_user']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="ProfilUser.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>

