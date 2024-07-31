
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script> $( document ).ready(function() {
    $('#myModal').modal('toggle') 
	
});


</script>
<script>

</script>
<!-- Modal -->
<div class="modal fade" id="myModal" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
       <a href="instructor.php"> <button type="button" class="close">
          <span aria-hidden="true">&times;</span>
        </button> </a>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  	    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
				  <link href="../css/instructor.css" rel="stylesheet">
				  	  <link href="../css/style.css" rel="stylesheet">
					  
					  
				
</head>
<nav class="navbar navbar-expand-lg navbar-light  navegac  ">
  <a class="navbar-brand" href="#">  <img src="../imagenes/didac.fw.png"  class="" width="215px"    alt=""> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  
     <!--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
          <ul class="navbar-nav " style=" margin-left:30px ;"  >
         <li class="nav-item active">
         <a   id="miBoton"    class="nav-link" href="#"> INICIO  </a>
	    </li>
        <li style=" border-top: #E3DCDA  1px solid ; border-bottom: #E3DCDA  1px solid "  class="nav-link"  > | </li>
        <li class="nav-item active">
        <a   id="miBoton"  class="nav-link" href="usuario.php">  DATOS USUARIO </a>
        </li>
	     <li style=" border-top: #E3DCDA  1px solid ; border-bottom: #E3DCDA  1px solid "  class="nav-link"  > | </li>
		 
		 <li class="nav-item active">
          <a   id="miBoton"   class="nav-link" href="sugerencia.php"> SUGERENCIAS  </a>
         </li>&nbsp&nbsp&nbsp
	  
		   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
	
		
   
    </ul>
    </ul>
   
                  
                     <a href="../cerrarSesion/cerrarSesion.php"> <button class="btn btn-outline-danger my-2 my-sm-0" >  Salir </button></a>
                   
  </div>
</nav>
   
  <body>

<section><br>

		<div class="contenedorC"> 

			<center>  
				<div  style="background:#38C6F6 ;color:#000000 ;   align-items: center;">  <H5>
						Técnicas Didacticas Activas			
				 	 </H5> 
					 </div>
		     </center>
			 <div class="padre" >
				<div class="hijo1">
                         <center>
							<img src="../images/inicio.png" width="25%" ><br>                         
                            <a href="tdaReflexion.php">   <button type="button" class="btn btn-outline-primary my-2 my-sm-0 botonInicio" id="myBtn3">Reflexión inicial</button></a>
						  </center>	
				</div> 	
				<div class="hijo2" >
						<center>
							<img src="../images/desarrollo.png" width="25%" ><br>
							<a href="#mdl" data-toggle="modal"> <button  type="button" class="btn btn-outline-primary my-2 my-sm-0 botonInicio1" >Actividad de contextualización e identificación del conocimiento </button> </a>
						</center>
 				</div>

			</div>
				   
			 <div class="padre">
				<div class="hijo1">
                         <center>
					   <img src="../images/end.png" width="22%" ><br>                     
                               <a href="#mdls" data-toggle="modal"> <button  class="btn btn-outline-primary my-2 my-sm-0 botonInicio" type="button"  > Apropiación del conocimiento </button> </a>
						  </center>	
				</div> 	
				<div class="hijo2">
						<center>
							    <img src="../images/evalua.png" width="19%" style="padding-bottom: 3%"><br>
							   <a href="#mdlsm" data-toggle="modal"> <button  type="button" class="btn btn-outline-primary my-2 my-sm-0 botonInicio" >Transferencia del conocimiento </button> </a>
						</center>
 				</div>

			</div>	
				     
			   
	
	

		
	

		
		</div>	 
	



        <!--------modal de cada tda ----------->






                                        <!-- Modal reflexion 
                                        <div class="modal fade" id="mymo" role="dialog">
                                          <div class=""  style="width: 70%; margin: 1% auto;">

                                            
                                            <div class="modal-content">
                                              <div class="header">

                                                <h5 style="text-align:center;padding-top:4%">ACTIVIDADES DE REFLEXIÓN INICIAL (antes de aprender) <br> PROPOSITO:</h5>
                                               <hr>
                                              </div>
                                              <div class="modal-body" style="padding-left: 10%; padding-right:10%;font-size:20px">
                                                <p>Promover concienciación en el aprendiz, es decir, fomentar la importancia de que sea este quien descubra la necesidad sentida de conocimiento, así mismo busca fomentar la autoestima, la importancia de la ayuda, el trabajo colaborativo, entre otros aspectos. El propósito mismo, hace que se deba aplicar, las Didácticas activas correctas para lograr la concienciación, buscar las primeras predisposiciones positivas hacia el proceso de aprendizaje y la visión de éxito con el trabajo desarrollado, así como buscar fomentar la curiosidad y conseguir que tanto los aprendices como instructores sean capaces de cuestionar las situaciones que los rodean recurriendo a la creatividad y a la innovación y valorando la incertidumbre como un aspecto potencial de la realidad. Entre muchísimas opciones de TDA que puede encontrar en la WEB o bliblitecas, se propone que explore la PLATAFORMA TECNOLÓGICA DIDACTI´s y encuentre esas opciones viables, para promover el desarrollo de diversas funciones cognitivas y tipos de pensamiento, encaminados a hacer monitoreo mental y alistar el pensamiento a la meta cognición, para este componente de la guía.

                                              </p>
                                              </div>
                                              <div class="modal-footer">
                                                <a href="instructor.php">  <button type="button" class="btn btn-danger" >Cerrar</button></a>
                                                <a href="tdaReflexion.php"><button type="button" class="btn btn-success">Comenzar</button></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div> -->




                                      <!-- Modal identificacion -->
                                      <div class="modal fade" id="mdl" role="dialog">
                                        <div class=""  style="width: 70%; margin: 1% auto;">

                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="header">
                                              <h5 style="text-align:center;padding-top:4%; padding-left:5%;padding-right:5%">ACTIVIDADES DE CONTEXTUALIZACIÓN E IDENTIFICACIÓN DE CONOCIMIENTOS NECESARIOS PARA EL APRENDIZAJE (antes de aprender) <br> PROPOSITO:</h5>
                                              <hr>
                                            </div>
                                            <div class="modal-body" style="padding-left: 10%; padding-right:10%;font-size:20px">
                                              <p>Da inicio al aprendizaje significativo entendido como un proceso en el que se establece una relación sustantiva,
                                                 no arbitraria entre el objeto de conocimiento por aprender y lo que el Aprendiz ya sabe. Permite al Aprendiz la
                                                 identificación de saberes construidos (APRENDIZAJE PREVIOS) a partir de experiencias previas con el fin de promover
                                                  tanto la evaluación auto diagnóstica como la meta cognición. Entre muchísimas opciones de TDA que puede encontrar
                                                   en la WEB o bibliotecas, se propone que explore la PLATAFORMA TECNOLÓGICA DIDACTI´s y encuentre esas opciones viables,
                                                    para que el aprendiz logre elaborar procesos mentales cono la meta representación, meta memoria, metalenguaje,
                                                     meta pensamiento, meta atención, meta motivación, meta percepción, meta aprendizaje, para este componente de la guía.
                                            </p>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="instructor.php">  <button type="button" class="btn btn-danger" >Cerrar</button></a>
                                              <a href="tdaIdentificacion.php"><button type="button" class="btn btn-success">Comenzar</button></a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  




                                    <!-- Modal apropiacion -->
                                    <div class="modal fade" id="mdls" role="dialog">
                                      <div class=""  style="width: 70%; margin: 1% auto;">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="header">
                                          <h5 style="text-align:center;padding-top:4%">ACTIVIDADES DE APROPIACION DEL CONOCIMIENTO (mientras aprende) <br> PROPOSITO:</h5>
                                          <hr>
                                          </div>
                                          <div class="modal-body" style="padding-left: 10%; padding-right:10%;font-size:20px">
                                            <p>Propiciar la Construcción integral del conocimiento: conceptos,
                                               procedimientos, valores y se describen textualmente, tal como “aparecen” en
                                               la Planeación Pedagógica, así como fomentar las diversas habilidades para el
                                               desarrollo del pensamiento superior, y que logre diferentes tipos de pensamiento.
                                               Están pensados desde la Planeación Pedagógica y en donde el Instructor asume la función
                                                mediadora como experto. Entre muchísimas opciones de TDA que puede encontrar en la WEB o
                                                 bibliotecas, se propone que explore la PLATAFORMA TECNOLÓGICA DIDACTI´s y encuentre esas
                                                  opciones viables, para que el aprendiz desarrolle capacidades para la elaboración de marcos
                                                   conceptuales, la construcción y apropiación de los saberes inherentes a las competencias del
                                                   programa de formación, la construcción de algoritmos procedimentales y la implementación de la
                                                    práctica, (saber hacer) para este componente de la guía.
                                          </p>
                                          </div>
                                          <div class="modal-footer">
                                            <a href="instructor.php">  <button type="button" class="btn btn-danger" >Cerrar</button></a>
                                            <a href="tdaApropiacion.php"><button type="button" class="btn btn-success">Comenzar</button></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                 



                                  <!-- Modal apropiacion -->
                                  <div class="modal fade" id="mdlsm" role="dialog">
                                    <div class=""  style="width: 70%; margin: 1% auto;">

                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="header">
                                        <h5 style="text-align:center;padding-top:4%">ACTIVIDADES DE TRNSFERENCIA DEL CONOCIMIENTO (después de aprender) <br> PROPOSITO:</h5>
                                        <hr>
                                        </div>
                                        <div class="modal-body" style="padding-left: 10%; padding-right:10%;font-size:20px">
                                          <p>Busca que los aprendices apliquen o transfieran el aprendizaje
                                             desarrollado en la fase anterior a contextos reales, dando la garantía
                                              de que los conocimientos y las habilidades adquiridas durante una construcción
                                               de aprendizaje (componente anterior) sean aplicados en los contextos reales.
                                               Entre muchísimas opciones de TDA que puede encontrar en la WEB o bibliotecas,
                                                se propone que explore la PLATAFORMA TECNOLÓGICA DIDACTI´s y encuentre esas
                                                opciones viables, para que el aprendiz transfiera el 100% de sus conocimientos
                                                 y habilidades de acuerdo con las funciones productivas (CON), lo que daría como
                                                  resultado la calidad de los desempeños, integrar el aprendizaje en diferentes
                                                   ambientes y en los sistemas de trabajo y motivarlos a practicar el uso de las
                                                    habilidades aprehendidas, para este componente de la guía.
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="instructor.php">  <button type="button" class="btn btn-danger" >Cerrar</button></a>
                                          <a href="tdaTransferencia.php"><button type="button" class="btn btn-success">Comenzar</button></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
								  
				 
<div class="social">
		<ul>
			<li><a href="http://www.facebook.com/falconmasters" target="_blank" ><img  class="imgredes"src="../imagenes/facebook.png" > </a> </li>
			<li><a href="http://www.twitter.com/falconmasters" target="_blank" ><img class="imgredes" src="../imagenes/twitter.JPG" ></a></li>
				<li><a href="http://www.twitter.com/falconmasters" target="_blank" ><img class="imgredes" src="../imagenes/instagram.JPG" ></a></li>
			
			
		</ul>
	</div>
					  
								  
                               


	<style>
	.social {
	position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
	width:4vw;
	float:left;
		/* background:blue; Establecemos la barra en la izquierda */
	top: 200px; /* Bajamos la barra 200px de arriba a abajo */
	 /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}
 

	.social ul {
		list-style: none;
			margin-left:-70%;
			
	}
 
	.social ul li a {
		display: inline-block;
		color:#fff;
	
		padding: 5px ;

		text-decoration: none;
		-webkit-transition:all 500ms ease;
		-o-transition:all 500ms ease;
		transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
	}
 
	.social ul li .icon-facebook {background:#3b5998;} /* Establecemos los colores de cada red social, aprovechando su class */
	.social ul li .icon-twitter {background: #00abf0;}
	.social ul li .icon-googleplus {background: #d95232;}
	.social ul li .icon-pinterest {background: #ae181f;}
	.social ul li .icon-mail {background: #666666;}
 
	.social ul li a:hover {
		background: #38C6F6; /* Cambiamos el fondo cuando el usuario pase el mouse */
		padding: 5px ; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
		width:95%;
	}
	.imgredes {
		width:93%;
		
	}
	</style>



	
</section><br>
 	
		     


      </section>
    </main>
 
 <footer>
         <center>  <br>
          
      Centro Agropecuario Regional Cauca <br>
Dirección: Cr 9 No 71 N 60, Alto del Cauca - Kilómetro 7 vía a Cali<br>
Teléfono: (2) 8247678 IP: 22112 Fax: (2) 8247678<br>
Correo: agropecuario@misena.edu.co
         
      
        </center><br><br>
   </footer>
      



</body>

</html>
						  
								  