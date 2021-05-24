<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<!-- mobile setting -->
		<title>Licorer&iacute;a Miramar | Register</title>
		<link rel="stylesheet" href="./css/styles.css">
	</head>
	
	<body>
	  <header>
	  <div class="header-container">
		<div class="wrapper">
		  <div class="nav-container">
		    <nav>
		      <ul>			
			    <li class="fade"><a href="index.html">INICIO</a></li>
			    <li class="fade"><a href="know-us.html">CON&Oacute;CENOS</a></li>
			    <li class="fade"><a href="services.html">SERVICIOS</a></li>
				<li class="fade"><a href="contact.html">CONTACTANOS</a></li>
				<li class="fade"><a href="register.html">REG&Iacute;STRATE</a></li>
				<li class="fade"><a href="presentacion.html">PRESENTACI&Oacute;N</a></li>
			  </ul>
			</nav>
		  </div><!--nav-container-->
		</div><!--wrapper-->
	  </div><!--header-container-->
	  </header>
	  
	  <div class="content-container">
	    <div class="wrapper">
		    <br><br>
		    <?php
			
			  //Traemos los datos del form
			  extract($_POST);			  

			  //Coneccion con MySQL
			  $conn = new mysqli("127.0.0.1", "root", "", "licodb", 3306);
			  
			  if($conn->connect_errno) {
				  echo "Failed to connect: (" . $conn->connect_errno . ")";
				  exit;
			  }
			  			  
			  //Construir query
			  $query = "INSERT INTO cliente(user_pk, nombre, inicial, apellido1, apellido2, negocio, direccion, pueblo, zip_code, telefono, correo1, correo2, passwd, servicio) VALUES ('$user', '$nombre', '$inicial', '$apellido1', '$apellido2', '$negocio', '$direccion', '$pueblo', '$zipcode', '$telefono', '$correo1', '$correo2', '$passwd1', '$servicio');";
			  trim($query);
			  $query = stripslashes($query);
			  
			  //Ejecutar query
			  if(!$conn->query($query)) {
				  echo "The query cannot be executed: " . $conn->connect_errno;
			  }	
			  else
				  echo "Record succesfully entered for: " . $nombre . " " . $apellido1 . ".";
			  
			  echo "<h3><a href=\"register.html\">Volver al Formulario</a></h3>";
			  echo "<h3><a href=\"index.html\">Volver al Inicio</a></h3>";
			?>
		</div><!--wrapper-->
	  </div><!--content-container-->
	  
	  <footer>
	  <div class="footer-container">
	    <div class="wrapper">
		  <div class="logo-box">
		    <img src="./images/lmLogo.png" alt="logo licoreria miramar" width="180" height="180">
		  </div><!--logo-box-->
		  <div class="info-box">
		    <h3>DIRECCI&Oacute;N</h3>
		    <p>906 AVE PONCE DE LEON, MIRAMAR
		    <br>SAN JUAN, PR 00909</p>
		    <h3>E-MAIL</h3>
		    <p><a href="mailto:licoreria.miramar@colectivoicaro.com">LICORERIA.MIRAMAR@COLECTIVOICARO.COM</a></p>
		    <h3>TEL&Eacute;FONO</h3>
		    <p><a href="tel:+17873667099">787-366-7099</a></p>		
		  </div><!--info-box-->
		  <div class="menu-box">
		    <h3>SITE MAP</h3>
		    <p><ul>			
			  <li class="fade"><a href="index.html">INICIO</a></li>
			  <li class="fade"><a href="know-us.html">CON&Oacute;CENOS</a></li>
		   	  <li class="fade"><a href="services.html">SERVICIOS</a></li>
			  <li class="fade"><a href="contact.html">CONTACTANOS</a></li>
			  <li class="fade"><a href="register.html">REG&Iacute;STRATE</a></li>
			  <li class="fade"><a href="about-me.html">CON&Oacute;CEME</a></li>
			  <li class="fade"><a href="presentacion.html">PRESENTACI&Oacute;N</a></li>
		    </ul></p>
		  </div><!--menu-box-->
		<p class="diligence">2021 | Luis Padilla</p>
	    </div><!--wrapper-->
	  </div><!--footer-container-->
	  </footer>
	</body>
</html>	