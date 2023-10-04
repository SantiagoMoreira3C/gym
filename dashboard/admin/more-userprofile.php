<?php
require '../../include/db_conn.php';
page_protect();

if(isset($_POST['submit'])){

  $usrname=$_POST['login_id'];
  $fulname=$_POST['full_name'];

  $query="update admin set username='".$usrname."',Full_name='".$fulname."' where username='".$_SESSION['full_name']."'";

  if(mysqli_query($con,$query)){
  	echo "<head><script>alert('Usted ha cambiado de perfil');</script></head></html>";

     echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
  }
  else{
  	echo "<head><script>alert('NO ES EXITOSO, vuelva a intentarlo');</script></head></html>";
	 echo "error".mysqli_error($con);
  }

  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>GIM4K | Administrador</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
    	.page-container .sidebar-menu #main-menu li#adminprofile > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>

</head>
     <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../images/logo.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
						<!-- Profile Info and Notifications -->
						<div class="col-md-6 col-sm-8 clearfix">	
							
							</div>
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">

					<ul class="list-inline links-list pull-right">

						<li style="font-size: 20px;">Bienvenid@ <?php echo $_SESSION['full_name']; ?>
						</li>

						<li>
							<a style="font-size: 20px;" href="logout.php">
								Cerrar Sesión <i class="entypo-logout right"></i>
							</a>
						</li>
					</ul>

				</div>
				</div>

		<h3 class="a1-serif"><strong>Editar Perfil de Cliente</strong></h3>
		
		(Deberá iniciar sesión nuevamente después de la actualización del perfil)
		
		<hr />
		
		<?php $user_id_auth = $_SESSION['user_data']; ?>

		<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:900px; margin:0 auto;">
		<div class="a1-pale-blue a1-hover-blue a1-center">
        	<h6  style="font-size: 24px" >Cambiar Perfil</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="">
         <table width="500px" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">Id:</td>
           	   <td height="35"><input type="text" style="height: 50px; width:300px" name="login_id" value="<?php echo $_SESSION['user_data']; ?>" class="form-control" required/></td>
         	   </tr>
             <tr>
               <td height="35">Nombre Completo:</td>
               <td height="35"><input class="form-control"  style="height: 50px; width:300px" type="text" name="full_name" id="textfield2" value="<?php echo $_SESSION['username']; ?>" maxlength="25" required></td>
             </tr>
             <tr>
               <td height="35">Contraseña</td>
               <td height="35"><span  style="height: 50px; width:300px" class="form-control">*********</span> <br><a href="change_pwd.php" style="width: 300px;" class="a1-btn a1-khaki">Cambiar Contraseña</a> </td>
             </tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-teal" style="width: 150px;" type="submit" name="submit" id="submit" value="Enviar" >
                 <input class="a1-btn a1-pink" type="reset" style="width: 150px;" name="reset" id="reset" value="Borrar"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
		
    	</div>

    </body>
</html>


										
