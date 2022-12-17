<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				

			</li>';

		}
		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>MAESTROS</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="productos">
							
						
							<span>Productos</span>

						</a>

					</li>

					<li>

						<a href="categorias">
							
						
							<span>Tipos y Sub-Tipos</span>

						</a>

					</li>


					<li>

						<a href="crear-venta">
							
							
							<span>Almacenes</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="Clientes">
							
						
							<span>Clientes</span>

						</a>

					</li>';

					echo '<li>

						<a href="reportes">
							
						
							<span>Comprobantes Fiscales</span>

						</a>
                     
					</li>';
					echo '<li>

						<a href="reportes">
							
						
							<span>Empresas</span>

						</a>
                     
					</li>';
										
					}
					

				

			echo '</ul>
				

			</li>';
				}
		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="#">

				<i class="fa fa-credit-card" aria-hidden="true"></i>

					
					<span>OPERACIONES</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
						
							<span>Punto de Ventas</span>

						</a>

					</li>

					<li>

						<a href="ventas">
							
						
							<span>Ventas a Credito</span>

						</a>

					</li>


					<li>

						<a href="crear-venta">
							
							
							<span>Registrar Ventas</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes">
							
						
							<span>Reporte de ventas</span>

						</a>

					</li>';

					echo '<li>

						<a href="reportes">
							
						
							<span>Cuadre de Caja</span>

						</a>
                     
					</li>';
					echo '<li>

						<a href="reportes">
							
						
							<span>Cotizaciones Grandes</span>

						</a>
                     
					</li>';

					echo '<li>

						<a href="reportes">
							
						
							<span>Cotizaciones Pequeñas</span>

						</a>
                     
					</li>';
					
					
										
					}
					

				

			echo '</ul>
				

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="#">

				<i class="fa fa-bar-chart" aria-hidden="true"></i>

					
					<span>CUENTAS POR COBRAR</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
						
							<span>Nota de Débito</span>

						</a>

					</li>

					<li>

						<a href="ventas">
							
						
							<span>Nota de Crédito</span>

						</a>

					</li>';
									
					if($_SESSION["perfil"] == "Administrador"){		
																	
					}
					

				

			echo '</ul>
				

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="#">

				<i class="fa fa-fax" aria-hidden="true"></i>

					
					<span>IMPRESIÓN</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
						
							<span>Barra de Etiqueta</span>

						</a>

					</li>

					<li>

						<a href="ventas">
							
						<i class="fa fa-circle-o"></i>
							<span>----</span>

						</a>

					</li>';
									
					if($_SESSION["perfil"] == "Administrador"){		
																	
					}
					

				

			echo '</ul>
				

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>

			</li>
                
			<li>
              
				
			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>

			<a href="usuarios">

			<i class="fa fa-user"></i>
			<span>Usuarios</span>

		</a>

			</li>';
			

			}
			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

				echo '<li>
	
				
	
				</li>';
	
		}
		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>

				
			</li>';
	}
		

		

		?>

		</ul>

	 </section>

</aside>