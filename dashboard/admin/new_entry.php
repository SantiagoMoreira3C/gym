<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<title>GYM4K | Nuevo Cliente</title>
	<link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
	<script type="text/javascript" src="../../js/Script.js"></script>
	<link rel="stylesheet" href="../../css/dashMain.css">
	<link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" type="text/css" rel="stylesheet">
	<style>
		.page-container .sidebar-menu #main-menu li#regis>a {
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
						<!-- agrega la clase "with-animation" si desea que la barra lateral tenga animación durante la transición de expansión / contracción -->
						<i class="entypo-menu"></i>
					</a>
				</div>



			</header>
			<?php include('nav.php'); ?>
		</div>

		<div class="main-content">

			<div class="row">

				<!-- Información de perfil y notificaciones -->
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


			<h3 class="a1-serif"><strong>  Ingreso de Nuevo Cliente</strong></h3>

			<hr />

			<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
				<div class="a1-card-8 a1-light-gray" style="width:900px; margin:0 auto;">
					<div class="a1-pale-blue a1-hover-blue a1-center">
						<h6 style="font-size: 24px"  > <strong> Nuevo Cliente</strong></h6>
					</div>
					<form id="form1" name="form1" method="post" class="a1-container" action="new_submit.php">
						<table width="125%" border="0" align="center">
							<tr>
								<td height="35" class="a1-serif" >
									<table width="100%" border="0" align="center">
										<tr>
											<td height="35">Id Membresia:</td>
											<td height="35" ><input type="text" id="boxx" name="m_id" value="<?php echo time(); ?>" readonly required /></td>
										</tr>

										<tr>
											<td height="35">Nombre:</td>
											<td height="35"><input name="u_name" id="boxx" required /></td>
										</tr>
										<tr>
											<td height="35">Direccion:</td>
											<td height="35"><input name="street_name" id="boxx" required /></td>
										</tr>
										<tr>
											<td height="35">Ciudad:</td>
											<td height="35"><input <input type="text" name="city" id="boxx" required/></td>
										</tr>
										<tr>
											<td height="35">Codigo Postal:</td>
											<td height="35"><input type="number" name="zipcode" id="boxx" maxlength="6" required /></td>
										</tr>
										<tr>
											<td height="35">Provincia:</td>
											<td height="35"><input type="text" name="state" id="boxx" required/ size="30"></td>
										</tr>
										<tr>
											<td height="35">Genero:</td>
											<td height="35"><select name="gender" id="boxx" required>

													<option value="">Seleccione</option>
													<option value="Hombre">Hombre</option>
													<option value="Mujer">Mujer</option>
												</select></td>
										</tr>
										<tr>
											<td height="35">Fecha de Nacimiento:</td>
											<td height="35"><input type="date" name="dob" id="boxx" required/ size="30"></td>
										</tr>
										<tr>
											<td height="35">Numero de Telefono:</td>
											<td height="35"><input type="number" name="mobile" id="boxx" maxlength="10" required/ size="30"></td>
										</tr>
										<tr>
											<td height="35">Correo Electronico:</td>
											<td height="35"><input type="email" name="email" id="boxx" required/ size="30"></td>
										</tr>
										<tr>
											<td height="35">Fecha de Ingreso:</td>
											<td height="35"><input type="date" name="jdate" id="boxx" required size="30"></td>
										</tr>
										<tr>
											<td height="35">Plan:</td>
											<td height="35"><select name="plan" id="boxx" required onchange="myplandetail(this.value)">
													<option value="">Seleccione</option>
													<?php
													$query = "select * from plan where active='yes'";
													$result = mysqli_query($con, $query);
													if (mysqli_affected_rows($con) != 0) {
														while ($row = mysqli_fetch_row($result)) {
															echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
														}
													}

													?>

												</select></td>
										</tr>

										<tbody id="plandetls">

										</tbody>

										<tr>
										<tr>
											<td height="35">&nbsp;</td>
											<td height="35"><input class="a1-btn a1-khaki" type="submit" name="submit" id="submit" value="Registrar">
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

			<script>
				function myplandetail(str) {

					if (str == "") {
						document.getElementById("plandetls").innerHTML = "";
						return;
					} else {
						if (window.XMLHttpRequest) {
							// code for IE7+, Firefox, Chrome, Opera, Safari
							xmlhttp = new XMLHttpRequest();
						}
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("plandetls").innerHTML = this.responseText;

							}
						};

						xmlhttp.open("GET", "plandetail.php?q=" + str, true);
						xmlhttp.send();
					}

				}
			</script>
		</div>

</body>

</html>