<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>GIM4K | Cambio de Contraseña</title>
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

<style>#boxx
	{
		width:220px;
	}</style>

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
					
					
					<!-- Raw Links -->
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

		<h3 class="a1-serif"><strong>Cambiar Contraseña</strong></h3>

		<hr />

		
		
		
		
		
		<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:900px; margin:0 auto;">
		<div class="a1-pale-blue a1-hover-blue a1-center">
        	<h6  style="font-size: 24px" >Cambiar Contraseña</h6>
        </div>
       <form id="form1" name="form1" action="change_s_pwd.php" enctype="multipart/form-data" method="POST" class="a1-container" >
         <table width="125%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">ID:</td>
           	   <td height="35"><input type="text" id="boxx" style="width: 400px; " name="login_id" readonly value="<?php echo $_SESSION['user_data']; ?>"  required/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">Código Secreto:</td>
               <td height="35"><input type="text" id="boxx" style="width: 400px; " name="login_key"  class="form-control"  data-rule-required="true" placeholder="Tu código secreto"></td>
             </tr>
			 <tr>
           	   <td height="35">Contraseña:</td>
           	   <td height="35"><input type="text" style="width: 400px; " name="pwfield" id="boxx" class="form-control"  data-rule-required="true" data-rule-minlength="6" placeholder="Tu nueva contraseña"></td>
         	   </tr>
             
             <tr>
			  <tr>
           	   <td height="35">Confirmar Contraseña:</td>
           	   <td height="35"><input type="text"style="width: 400px; " name="confirmfield" id="boxx" class="form-control"  data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirmar tu nueva contraseña"></td>
         	   </tr>
             
             <tr>
             <tr>
               <td height="35"></td>
               <td height="35"><a href="change_pwd.php" class="a1-btn a1-green" style="width: 200px; ">Enviar</a><!--<input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="SUBMIT" >-->
                 <input class="a1-btn a1-pink" style="width: 200px; " type="reset" name="reset"  id="reset" value="Borrar"></td>
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


