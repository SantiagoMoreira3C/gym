﻿<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<title>GIM4K | Pagos</title>
	<link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
	<script type="text/javascript" src="../../js/Script.js"></script>
	<link rel="stylesheet" href="../../css/dashMain.css">
	<link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" type="text/css" rel="stylesheet">
	<style>
		.page-container .sidebar-menu #main-menu li#paymnt>a {
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
					<a href="#" class="sidebar-collapse-icon with-animation">
						<!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
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

			<h2 class="a1-serif"><strong>Pagos </strong></h2>

			<hr />

			<table class="table table-bordered datatable a1-table-all" id="table-1" border=2>
				<thead>
					<tr>
						<th>Id</th>
						<th>Fecha de Expiración</th>
						<th>Nombre</th>
						<th>ID de Miembro</th>
						<th>Teléfono</th>
						<th>Correo</th>
						<th>Género</th>
						<th>Acción</th>
					</tr>
				</thead>

				<tbody>

					<?php


					$query  = "select * from enrolls_to where renewal='yes' ORDER BY expire";
					//echo $query;
					$result = mysqli_query($con, $query);
					$sno    = 1;

					if (mysqli_affected_rows($con) != 0) {
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

							$uid   = $row['uid'];
							$planid = $row['pid'];
							$query1  = "select * from users WHERE userid='$uid'";
							$result1 = mysqli_query($con, $query1);
							if (mysqli_affected_rows($con) == 1) {
								while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {

									echo "<tr><td>" . $sno . "</td>";
									echo "<td>" . $row['expire'] . "</td>";
									echo "<td>" . $row1['username'] . "</td>";
									echo "<td>" . $row1['userid'] . "</td>";
									echo "<td>" . $row1['mobile'] . "</td>";
									echo "<td>" . $row1['email'] . "</td>";
									echo "<td>" . $row1['gender'] . "</td>";

									$sno++;

									echo "<td><form action='make_payments.php' method='post'><input type='hidden' name='userID' value='" . $uid . "'/>
					                <input type='hidden' name='planID' value='" . $planid . "'/><input type='submit' class='a1-btn a1-blue' value='Agregar Pago ' class='btn btn-info'/></form></td></tr>";

									$uid = 0;
								}
							}
						}
					}

					?>
				</tbody>

			</table>
		</div>

</body>

</html>