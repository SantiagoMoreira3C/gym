
<ul id="main-menu" class="" >
			
    <li id="dash"><a href="index.php"><i class="entypo-gauge"></i><span>Pagina de Inicio</span></a></li>
                
	<li id="regis"><a href="new_entry.php"><i class="entypo-user-add"></i><span>Ingreso de Usuario</span></a>                
				
	<li id="paymnt"><a href="payments.php"><i class="entypo-star"></i><span>Pagos</span></a></li>

	<li class="" id="hassubopen"><a href="#" onclick="memberExpand(1)"><i class="entypo-users"></i><span>Clientes</span></a>
		<ul id="memExpand">
			<li class="active">
				<a href="view_mem.php"><span>Editar Cliente</span></a></li>

			<li><a href="table_view.php"><span>Ver Cliente</span></a></li>
		</ul>
	</li>

	<li id="health_status"><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Salud del cliente</span></a> 	

		<li class="" id="planhassubopen"><a href="#" onclick="memberExpand(2)"><i class="entypo-quote"></i><span>Planes </span></a>

		<ul id="planExpand">
			<li class="active">
				<a href="new_plan.php"><span>Nuevo Plan</span></a></li>

			<li><a href="view_plan.php"><span>Editar Plan Suscrito</span></a></li>
		</ul>

	<li class="" id="overviewhassubopen"><a href="#" onclick="memberExpand(3)"><i class="entypo-box"></i><span>Informe General</span></a>

		<ul id="overviewExpand">
			<li class="active">
				<a href="over_members_month.php"><span>Informe por Mes</span></a>
			</li>

			<li>
				<a href="over_members_year.php"><span>Informe por Año</span></a>
			</li>

			<li>
				<a href="revenue_month.php"><span>Pagos por Mes</span></a>
			</li>			

		</ul>

	<li class="" id="routinehassubopen"><a href="#" onclick="memberExpand(4)"><i class="entypo-alert"></i><span>Rutina de Ejercicios</span></a>

		<ul id="routineExpand">
			<li class="active">
				<a href="addroutine.php"><span>Registrar Rutina</span></a>
			</li>

			<li>
				<a href="editroutine.php"><span>Editar Rutina</span></a>
			</li>

			<li>
				<a href="viewroutine.php"><span>Ver Rutina</span></a>
			</li>

		</ul>

	</li>

	<li id="adminprofile"><a href="more-userprofile.php"><i class="entypo-folder"></i><span>Editar informacion</span></a></li>

	<li><a href="logout.php"><i class="entypo-logout"></i><span>Cerrar Sesión</span></a></li>

</ul>	
