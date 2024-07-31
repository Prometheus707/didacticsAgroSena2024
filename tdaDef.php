<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
	<title> Definición Didacticas </title>
	   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
				<link href="css/tdaDef.css" rel="stylesheet">
				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
				<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		         <meta name="viewport" content="width=device-width, initial-scale=1.0">
															<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

															<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<script src="http://code.jquery.com/jquery-latest.min.js"
       type="text/javascript"></script>

<script>
// comparar claves
function habilitar()
{
var camp1 =document.getElementById("campo1");
var camp2 = document.getElementById("campo2");
var botn = document.getElementById("boton");

if (camp1.value != camp2.value)
{
	botn.disabled = true;
	$('#error2').text('LAS CLAVES NO COINCIDEN!').css("color", "red");


}
else
{
	botn.disabled = false;
	$('#error2').text('LAS CLAVES COINCIDEN!').css("color", "green");

}

}


</script>
<script type="text/javascript">
jQuery.fn.extend({
    resaltar: function(busqueda, claseCSSbusqueda){
        var regex = new RegExp("(<[^>]*>)|("+ busqueda.replace(/([-.*+?^${}()|[\]\/\\])/g,"\\$1") +')', 'ig');
        var nuevoHtml=this.html(this.html().replace(regex, function(a, b, c){
            return (a.charAt(0) == "<") ? a : "<span class=\""+ claseCSSbusqueda +"\">" + c + "</span>";
        }));
        return nuevoHtml;
    }
});


function resaltarTexto(){
    $("#texto").resaltar(cajaTexto.value, "resaltarTexto");
}
</script>
<style>
.resaltarTexto{
    color: white;
    background-color: #Ff6b00;
}
</style>	
</head>
<nav class="navbar navbar-expand-lg  navbar-dark nav3" style="background-color: #39A900;">
<a class="navbar-brand" href="#" style=" height:4rem; width:4%"> <img src="images/slideshow/cerebro.gif" width="100px" alt="logo"> </a>
<p style='  font-family:Lobster, cursive; font-size:2.5rem; color:white;'>Didactics</p>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<ul class="navbar-nav " style=" margin-left:32px ;"  >
				<li class="nav-item active">
					<a   id="miBoton"    class="nav-link" href="index.php"> Inicio  </a>
						</li>
							<li class="nav-item active">
								<a   id="miBoton"  class="nav-link" href="#"> Técnicas Didácticas Activas</a>
							</li>  
       <div style=" margin-left:8px; ">   <center>  <form name="fr">  
		   <input name="caja1"  style="width:170px;
    padding:5px 6px;
    border-radius:32px;
    outline:none;
    border:2px solid #ccd1d1;
    background:white;font-size:2vh;
    transition:all 0.5s; max-width:100%; min-width:40vh;margin-top:0.7%" type="text"    id="cajaTexto" required />	
<button id="btnEnviar" class="btn btn-outline-success text-dark"  style="max-width:100%; min-width:13vh; height:75%; margin-top:0.7%"  type="button" value="Buscar" onClick="resaltarTexto();" > <p style="color: white;">Buscar</p></button>


<script type="text/javascript">
<!--

function activarBoton() {
    if(verificar()) {
        btnEnviar.disabled=false
    }
    
}

function verificar() {
    if( caja1.value==="" )
        return false;
 
    return true;
}

var btnEnviar = document.getElementById("btnEnviar");
btnEnviar.disabled = true;
var caja1 = document.fr.caja1;

caja1.onkeyup  = activarBoton;


// -->


</script></form></center>
	</div>
			</ul>
	 </ul>
  
	  <div class="ingreso"  >
	  <button  type="button" class="btn btn-outline-success text-dark" onclick="document.getElementById('subscribe').style.display='block'"><img src="images/ingresar.png"  class="ingreso1">   Ingresar  </button>
	 	 </div>
  </div>
</nav>

<body   id="texto" class="w3-light-grey">
 <!--  

	-->



  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">

      <!-- Blog entry -->
      <div class="w3-container w3-white  w3-padding-large">
        <div class="w3-center">
       
		  <h2 class="p4">  Técnicas Didácticas Activas  </h2>
         
        </div>

        <div class="w3-justify">
       
		  <!--		<div class="video1">
				

				<video  controls>
			<source src="video/tda.mp4" frameborder="-2" >

			    </video>
				</div> -->
          <div class="texto2">
	
				<h2 class="p4"> ¿Qué son?  </h2>
				<p class="w3-clear" >
				Corresponde a las distintas metodologías y métodos sistematizados que pueden ser usados para el desarrollo de determinada actividad de aprendizaje. Entre ellos se consideran: estudio de caso, análisis de objeto – sistemas, análisis de servicios – procesos, simulaciones, juego de roles, socialización de conceptos.
				</p>
	
				</div>
          <p class="w3-clear"></p>
      <div class="padre">
				<div class="hijo1">
					<section class="portafolio-item">
						<img  src="imagenes/estrategia.jpg" class="portafolio-img">
						
					</section>
				</div>
			    <div class="hijo2">
				<h2 class="p3">  Otra definición más, SENA:  </h2>
					<p style="font-size:1vw;">
				Las Didácticas Activas se constituyen en las opciones a seguir por parte de los formadores frente a las exigencias y dinámicas actuales en ámbitos formativos. Con ellas se propone el planteamiento de un proceso donde el estudiante pueda ser protagonista y hacedor de sus aprendizajes. Trabajar con didácticas activas implica cambiar la rutina y la magistralidad como único proceso de interacción entre aprendices, docentes, ambientes de aprendizaje y contexto en general
				</p>			
				</div>
                   
			</div>
        </div>
      </div>
      <hr>

 
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
         

        </div>

        <div class="w3-justify">
          	<div class="texto2">	<center><h2 class="p4">Aprendizaje activo y práctico en el aula </h2>
			        
							<p class="w3-clear"> En este enlace podrá ver cómo un docente del Programa de Educación de la Universidad Católica de Chile, el profesor Miguel Nussbaum, hace un recorrido por las clases desde la edad antigua hasta la actualidad, con el mismo método, el de el docente que habla al frente de un grupo.<br>  La diferencia no es mayor, excepto que hoy en día la clase está mediada por alta tecnología;  ahora el docente habla a través de una pantalla a un grupo de niños, adolescentes o adultos que lo escuchan y toman apuntes.   <br>
Esta reflexión nos confirma la necesidad de utilizar estrategias que cambien dicho paradigma, si bien, en un proceso de adaptación al uso de herramientas que rompa con la educación que tradicionalmente hemos recibido a lo largo de nuestra etapa educativa desde niños hasta que somos profesionales.

</p>

</div> <!--
 <div width="30%"class="alert alert-info">
 <img src="imagenes/pensando.jpg"   width="25%"    alt="">  <a style="margin-left:20%" href="https://coursera.org/share/035506a5bf85b62971e0e0b52f9da4ed" class="alert-link"> click   Aquí</a> para ver el video 
</div> -->
<BR>
           <div class="video11">
				<video  style=" width:100%; 	height:60vh;"  controls>
					<source  src="video/jorgeLuisMartin.mp4" frameborder="0" >
			   </video>
				</div>
<style>
		.video11{

	width:100%;
	height:60vh;


}

</style>
        </div>
      </div>

    <!-- END BLOG ENTRIES -->
    </div>
  
    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
     

      <!-- Posts -->
 

      <!-- Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding color" style="background-color: #39A900;">
          <h4> Instructor SENA y las Técnicas Didácticas Activas</h4> 
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:280px">
            <div class="video1">
				

				<video style=" width:100%;"  controls>
			 <source  src="video/Tecnicasdidácticas.mp4" frameborder="0" >

			    </video>
				</div>
          </div>
        </div>
      </div>
   

      <!-- Tags -->
    
      <hr>

      <!-- Inspiration -->
      <div class="w3-white w3-margin">
     
      

      <!-- Subscribe -->
      <div class="w3-white w3-margin ">
        <div style="width:108%; margin-left:-4%; background-color: #39A900;" class="w3-container w3-padding color" >
        <h4>Reflexión</h4>
        </div>
        <div class="w3-container w3-white">
              <p style="font-family: 'Latin Modern Roman 10'; font-style: oblique;  font-size:1vw; font-size:4vh; font-weight: 300; text-align:center"  > "La formación es el arma mas poderosa que puedes usar para cambiar el MUNDO." <br> Nelson Mandela </p>
        
        </div>
      </div>
      
<hr>
    <!-- END About/Intro Menu -->
    </div>
    <div class="w3-white w3-margin">
        
        <div class="w3-container w3-white">
              <p style="font-family: 'Latin Modern Roman 10'; font-style: oblique;  font-size:1vw; font-size:4vh; font-weight: 300; text-align:center"  > 
             <br> "La verdadera educación consiste en obtener lo mejor de uno mismo " <br> Mahatma Gandhi </p>
        
        </div>
        
      </div>
      <div class="w3-white w3-margin">
        
        <div class="w3-container w3-white">
              <p style="font-family: 'Latin Modern Roman 10'; font-style: oblique;  font-size:1vw; font-size:4vh; font-weight: 300; text-align:center"  > 
             <br> " La educación ayuda a la persona a aprender a ser lo que es capaz de ser"
  <br> Hesíodo  </p>
        
        </div>
        
      </div>
      <div class="w3-white w3-margin">
        
        <div class="w3-container w3-white">
              <p style="font-family: 'Latin Modern Roman 10'; font-style: oblique;  font-size:1vw; font-size:4vh; font-weight: 300; text-align:center"  > 
             <br> "La enseñanza que deja huella no es la que se hace de cabeza a cabeza, sino de corazón a corazón."
  <br>Howard G. Hendricks. </p>
        
        </div>
        
      </div>
      
  <!-- END GRID -->

  </div>
    
  <div id="subscribe" class="w3-modal w3-animate-opacity" >
  <div class="w3-modal-content" style="padding:32px; width:30%;  background:rgba(240, 240, 240, 1); border-radius: 4px  4px  4px  4px  ;">
    <div class="w3-container "  style=" width:100%; ">

     <div class="tituloIn">  Iniciar Sesión  <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-right tamaño"></i> </div>
	 <br> <form action="validarUsuario/validarUsuario.php" method="POST">
					<center>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="userU"  class="form-control" placeholder="Usuario"  required maxlength="10" oninput="maxlengthNumber(this);" onkeypress='return event.charCode >= 48 && event.charCode <= 57' >
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password"   name="pass"  class="form-control" placeholder="Contraseñas"required>
						</div>

					</center>
          <br>

				 <a href="#" data-izimodal-open="#modal">   <input type="submit"  style="width: 48%; color:white; "  value="Ingresar" class="btn btn-success float-left   btn-sm">  </a>

				   </form>

			  <button  type="button"  style="width: 48%; background: #Ff6b00; color:white; "  class="btn float-right btn-sm" onclick="document.getElementById('subscribe2').style.display='block'">   Registrar  </button>



       </div>

  </div>
</div>


<div class="w3-container " style="padding:2%">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>Subir</a>

</div>
    <footer style="background-color: #39A900;">
		
			 <div class="divFp">  
				  
				  <div class="div1F">
							<img src="imagenes/sena3.png"  class="imagfooter" >  

			     </div>
				
						  

		
				<div class="div3F">
    
              Centro Agropecuario Regional Cauca <br>
Dirección: Cr 9 No 71 N 60, Alto del Cauca - Kilómetro 7 vía a Cali<br>
Teléfono: (2) 8247678 IP: 22112 Fax: (2) 8247678<br>
Correo: agropecuario@misena.edu.co
      
      		     </div>
				 
				 <div class="div2F">
                      	<img src="images/LOGOsENNOVA.png"  class="imag2footer" >  
				</div>
			</div>
   </footer>   
<div id="subscribe2" class="w3-modal w3-animate-opacity" >
  <div class="w3-modal-content" style=" margin-top:-6%; padding:38px; width:32%;  background:rgba(240, 240, 240, 1); border-radius: 4px  4px  4px  4px  ;">
    <div class="w3-container "  style=" width:100%; ">

     <div class="tituloIn">  Registrar Usuario  <i onclick="document.getElementById('subscribe2').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-right tamaño"></i> </div>
	  <form action="registroUsuario/guardarUsuarioCreado.php" method="POST">
				N° Documento: <input  class="form-control form-control"  type="text" name="id_identificacion"   required maxlength="10" oninput="maxlengthNumber(this);" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  />
				Nombre:	  <input  class="form-control form-control"  type="text" name="nombreUsuario" maxlength="30"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" required />
						Apellidos:	  <input  class="form-control form-control"  type="text" name="ape_usuario" maxlength="30"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" required />
									Teléfono: <input  class="form-control form-control"  type="text" name="telefono" required maxlength="10" oninput="maxlengthNumber(this);" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  />
Correo Electrónico:  <input class="form-control form-control " type="email"  name="correo_usu" required>
				 		<?php
	require ('conexiondb.php');
	mysqli_set_charset($conecta,"utf8");
  $sql = "SELECT DISTINCT * FROM  regional ORDER BY nombreRegional ASC";
  $result = $conecta->query($sql);
?><script language="javascript">
			$(document).ready(function(){
				$("#nom_programa").change(function () {

				$("#nom_programa option:selected").each(function () {
						id_programa = $(this).val();
						$.post("registroUsuario/getFicha.php", { id_programa: id_programa }, function(data){
							$("#num_Ficha").html(data);
						});
					});
				})
			});

		</script>
		Regional:     <select class="form-control  " name="Regional"  id="nom_programa">
				<option value="" disabled selected>Seleccione...</option>

				<?php while($row = $result->fetch_assoc()) { ?>
					<option value="<?php echo $row['idRegional']; ?>"><?php echo $row['nombreRegional']; ?></option>
				<?php } ?>
				</select>
			  Centro De Formación :        <select   class="form-control form-control " name="centro" id="num_Ficha"></select>

	<?php
	require ('conexiondb.php');
	mysqli_set_charset($conecta,"utf8");
  $sql2 = "SELECT DISTINCT * FROM  area ORDER BY nombreArea ASC";
  $result2 = $conecta->query($sql2);
/* ESTA ES PARA QUE PROGRAMA ARRASTRE LOS DATOS SEGUN EL AREA PERO POR MOTIVOS DE LA INGE A CARGO LO VAMOS A INHABILITAR<script language="javascript">
			$(document).ready(function(){
				$("#nom_programa2").change(function () {

				$("#nom_programa2 option:selected").each(function () {
						id_programa = $(this).val();
						$.post("registroUsuario/getFicha2.php", { id_programa: id_programa }, function(data){
							$("#num_Ficha2").html(data);
						});
					});
				})
			});

		</script> */
			 ?>	 Area:     <select class="form-control  " name="area"  id="nom_programa2">
				<option value="" disabled selected>Seleccione...</option>

				<?php while($row = $result2->fetch_assoc()) { ?>
					<option value="<?php echo $row['idArea']; ?>"><?php echo $row['nombreArea']; ?></option>
				<?php } ?>
				</select>
						<!--  Programa:        <select   class="form-control form-control " name="programa" id="num_Ficha2"></select>  -->
				 clave:		 <input class="form-control form-control" id="campo1" type="password"  name="contra_usu" minlength="6" maxlength="10"required></td></tr>
		Verifique clave:		 <input class="form-control form-control " id="campo2" minlength="6"  onkeyup="habilitar()" type="password" maxlength="10" required>  </td></tr>
 <center> <span style="font-size:12px" id="error2" ></span> </center>


 <br>
				 <a href="#" data-izimodal-open="#modal">   <input type="submit" name ="registroUsu"  id="boton" style="width: 48%; "  value="Registrar" class="btn btn-success float-left   btn-sm">  </a>
				 <a href="index.php">   <input type="button"  style="width: 48%; "  value="Cancelar" class="btn btn-danger float-right   btn-sm">  </a>

				   </form>




       </div>

  </div>
</div>

   
      
      
    

 </body>
 </html>
