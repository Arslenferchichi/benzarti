<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();

?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <title>Tayarni </title>
    <style>
        
    .main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
  margin:10px;
}
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

table.customTable {
  width: 100%;
  background-color: #FFFFFF;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #E9F8F7;
  border-style: solid;
  color: #000000;
}

table.customTable td, table.customTable th {
  border-width: 2px;
  border-color: #E9F8F7;
  border-style: solid;
  padding: 5px;
}

table.customTable thead {
  background-color: #FFE0EB;
}
.navbar a.right {
  float: right;
  color: black;
}

#search{
    width:20%;
    position: relative;
    left:400px;
    bottom:500px;
}

    </style>
</head>

<body>
    
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../back-front/backoffice.php">Tayarni</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                    <a href="#" class="right">
      <?php 
        if (isset($_SESSION["adminFullname"])) {
            echo "HEY, <strong style='color:black'>".$_SESSION["adminFullname"]."</strong>!";
        }
      ?>
  </a>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>

                            <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-comments"></i>Compte <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" >
                            
</div>
</li>
         
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="row">



</div>

        
        <div class="dashboard-wrapper">
            <div class="container-fluid">
                <br>  <br>  <br>  <br>
		<button><a href="AjouterUtilisateur.php">Ajouter un Utilisateur</a></button>
     	<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Email</th>
				<th>Login</th>
				<th>Date_de_naissance</th>
				<th>Nationalite</th>
				<th>Num</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['Id']; ?></td>
					<td><?PHP echo $user['Nom']; ?></td>
					<td><?PHP echo $user['Prenom']; ?></td>
					<td><?PHP echo $user['Email']; ?></td>
					<td><?PHP echo $user['Login']; ?></td>
					<td><?PHP echo $user['Date_de_naissance']; ?></td>
					<td><?PHP echo $user['Nationalite']; ?></td>
					<td><?PHP echo $user['Num']; ?></td>
					<td>
						<form method="POST" action="supprimerUtilisateur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['Id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierUtilisateur.php?id=<?PHP echo $user['Id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</div>
        </div>
    </div>
    <div class="col-xs-6 col-xs-offset-3 ">
    <div class="form-group">
        <input style="margin-left: 20px" id="search" placeholder="Recherche" type="text" class="form-control" >
        <span  class="glyphicon glyphicon-search form-control-feedback"></span>
    </div>
</div>
    

    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script>
    $(document).ready(function() {

        // binding the check all box to onClick event
        $(".chk_all").click(function() {

            var checkAll = $(".chk_all").prop('checked');
            if (checkAll) {
                $(".checkboxes").prop("checked", true);
            } else {
                $(".checkboxes").prop("checked", false);
            }

        });

        // if all checkboxes are selected, then checked the main checkbox class and vise versa
        $(".checkboxes").click(function() {

            if ($(".checkboxes").length == $(".subscheked:checked").length) {
                $(".chk_all").attr("checked", "checked");
            } else {
                $(".chk_all").removeAttr("checked");
            }

        });

    });
    </script>
</body>
 
</html>
