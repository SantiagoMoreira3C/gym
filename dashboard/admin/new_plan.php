<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>GIM4K | Ingreso de un nuevo Plan</title>

	<link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
	<script type="text/javascript" src="../../js/Script.js"></script>
	<link rel="stylesheet" href="../../css/dashMain.css">
	<link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
		.page-container .sidebar-menu #main-menu li#planhassubopen>a {
			background-color: #2b303a;
			color: #ffffff;
		}
		#boxx {
			width: 220px;
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

			<h3 class="a1-serif"><strong>Crear Plan</strong></h3>

			<hr />

			<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
				<div class="a1-card-8 a1-light-gray" style="width:900px; margin:0 auto;">
					<div class="a1-pale-blue a1-hover-blue a1-center">
						<h6 style="font-size: 24px"  ><strong>Datos de Nuevo Plan</strong></h6>
					</div>
					<form id="form1" name="form1" method="post" class="a1-container" action="submit_plan_new.php">
						<table width="125%" border="0" align="center">
							<tr>
								<td height="35">
									<table width="100%" border="0" align="center">
										<tr>
											<td height="35">Id:</td>
											<td height="35"><?php
															function getRandomWord($len = 6)
															{
																$word = array_merge(range('A', 'Z'));
																shuffle($word);
																return substr(implode($word), 0, $len);
															}

															?>
												<input type="text" name="planid" id="planID" readonly value="<?php echo getRandomWord(); ?>">
											</td>
										</tr>
										<tr>
											<td height="35">Nombre de Plan:</td>
											<td height="35"><input name="planname" id="planName" type="text"  size="20"></td>
										</tr>
										<tr>
											<td height="35">Descripción de Plan</td>
											<td height="35"><input type="text" name="desc" id="planDesc"  size="20"></td>
										</tr>
										<tr>
											<td height="35">Validez del Plan</td>
											<td height="35"><input type="number" name="planval" id="planVal"  size="20"></td>
										</tr>

										<tr>
											<td height="35">Costo del Plan:</td>
											<td height="35"><input type="text" name="amount" id="planAmnt"  size="20"></td>
										</tr>


										<tr>
										<tr>
											<td height="35">&nbsp;</td>
											<td height="35"><input class="a1-btn a1-khaki" type="submit" name="submit" id="submit" value="Crear Plan">
												<input class="a1-btn a1-pink" type="reset" name="reset" id="reset" value="Borrar">
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>

</body>

</html>