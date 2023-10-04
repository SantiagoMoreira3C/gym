<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>GIM4K| Mostrar Planes</title>
	<link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
	<script type="text/javascript" src="../../js/Script.js"></script>
	<link rel="stylesheet" href="../../css/dashMain.css">
	<link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
		#button1 {
			width: 126px;
		}

		.page-container .sidebar-menu #main-menu li#planhassubopen>a {
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

			<h3 class="a1-serif"><strong>Mostrar Plan</strong></h3>

			<hr />

			<table class="table table-bordered datatable a1-table-all" id="table-1" border=2 align="center">

				<thead>
					<tr>
						<th>Id</th>
						<th>Id de Plan</th>
						<th>Nombre del Plan</th>
						<th>Detalles de Plan</th>
						<th>Tiempo</th>
						<th>Costo</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php


					$query  = "select * from plan where active='yes' ORDER BY amount DESC";
					//echo $query;
					$result = mysqli_query($con, $query);
					$sno    = 1;

					if (mysqli_affected_rows($con) != 0) {
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							$msgid = $row['pid'];


							echo "<tr><td>" . $sno . "</td>";
							echo "<td>" . $row['pid'] . "</td>";
							echo "<td>" . $row['planName'] . "</td>";
							echo "<td width='380'>" . $row['description'] . "</td>";
							echo "<td>" . $row['validity'] . "</td>";
							echo "<td>$" . $row['amount'] . "</td>";

							$sno++;

							echo '<td><a href=edit_plan.php?id="' . $row['pid'] . '"><input type="button" class="a1-btn a1-teal" id="boxxe" style="width:100%" value="Editar Plan" ></a><form action="del_plan.php" method="post" onSubmit="return ConfirmDelete();"><input type="hidden" name="name" value="' . $msgid . '"/><input type="submit" id="button1"  style="width:100%"  value="Eliminar Plan" class="a1-btn a1-cyan"/></form></td></tr>';

							$msgid = 0;
						}
					}

					?>
				</tbody>
			</table>

		</div>

</body>

</html>