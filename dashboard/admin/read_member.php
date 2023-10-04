		

<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="es">
<head>

    <title>GIM4K | Historial de los clientes</title>
   	<link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
<link href="a1style.css" rel="stylesheet" type="text/css">     
    <style>
    	.page-container .sidebar-menu #main-menu li#hassubopen > a {
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

		<h3  class="a1-serif"><strong>Historial de Cliente</strong></h3>
		<hr />
		
		<h3 ><strong>Datos de : </strong>
			 <?php
			$id     = $_POST['name'];
			$query  = "select * from users WHERE userid='$id'";
			//echo $query;
			$result = mysqli_query($con, $query);

			if (mysqli_affected_rows($con) != 0) {
			    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			        $name = $row['username'];
			        $memid=$row['userid'];
			        $gender=$row['gender'];
			        $mobile=$row['mobile'];
			        $email=$row['email'];
			        $joinon=$row['joining_date'];
			        echo $name;
			    }
			}
			?></h3>


		
		<table class="table table-bordered datatable a1-table-all" id="table-1" border=2>
			<thead>
				<tr>
					<th>ID Membresía</th>
					<th>Nombre</th>
					<th>Género</th>
				    <th>Celular</th>
				    <th>Correo</th>
					<th>Ingresó en</th>
				</tr>
			</thead>
				<tbody>
					<?php
					
					        
					     echo "<tr><td>" . $memid . "</td>";
					     
					     echo "<td>" . $name . "</td>";
			     	     
			     	     echo "<td>" . $gender . "</td>";
			
		      	         echo "<td>" . $mobile . "</td>";

		      	         echo "<td>" . $email . "</td>";

					     echo "<td>" . $joinon . "</td></tr>";
					    
					?>								
				</tbody>
		</table>
				<br>
				<br>

				<h3 class="a1-serif"><strong>Historial de Pago</strong> <?php echo $name;?></h3>

				<table class="table table-bordered datatable a1-table-all" id="table-1" border=2>

			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre de Plan</th>
					<th>Descripcion de Plan</th>
					<th>Validez</th>
					<th>Costo</th>
					<th>Fecha de Pago</th>
					<th>Fecha de Expiración</th>
				</tr>
			</thead>
				<tbody>
					<?php
						
						$query1  = "select * from enrolls_to WHERE uid='$memid'";
						//echo $query;
						$result = mysqli_query($con, $query1);
						$sno    = 1;

						if (mysqli_affected_rows($con) != 0) {
						    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						      $pid=$row['pid'];
						      $query2="select * from plan where pid='$pid'";
						      $result2=mysqli_query($con,$query2);
						      if($result2){
						      	$row1=mysqli_fetch_array($result2,MYSQLI_ASSOC);

						        echo "<td>" . $sno . "</td>";

						        echo "<td>" . $row1['planName'] . "</td>";

						        echo "<td width='380'>" . $row1['description'] . "</td>";

						        echo "<td>" . $row1['validity'] . "</td>";

						        echo "<td>" . $row1['amount'] . "</td>";

						        echo "<td>" . $row['paid_date'] . "</td>";

						        echo "<td>" . $row['expire'] . "</td>";
						        
						        $sno++;
						    }
						        
						        
						    }
						    
						}

					?>							
				</tbody>
		</table>

    	</div>
    </body>
</html>

