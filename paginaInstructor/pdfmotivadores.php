<?php
include 'plantilla2.php';
require '../conexiondb.php';
header('Content-Type: text/html; charset=ISO-8859-1');
/*
$id =$_POST['id_p'];
$sql = "SELECT * FROM proyectos WHERE idProyecto = ".$id;
$result = mysqli_query($conecta,$sql);
if ($result->num_rows > 0){
	//$row = $result->fetch_assoc();*/
	// $id=$_GET['id'];
	
	     mysqli_set_charset($conecta,'utf8');
		 
	$query = "SELECT DISTINCT * FROM motivdores";
	$result =  mysqli_query($conecta,$query);
	$conecta->set_charset("utf8");
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',9);


	//$pdf->Cell(25,6,'IdProyecto',1,0,'C',1);
	// $pdf->Cell(18,7,'id',1,0,'C',1);
	// $pdf->Cell(70,6,'Nombre',1,0,'C',1);
	
    $pdf->SetFont('Arial','',11);
    $pdf->cell(30,15,utf8_decode('') ,0,0);
    $pdf->cell(110,15,utf8_decode('ANEXO: JOLTS Y MOTIVADORES') ,0,1);
    $pdf->MultiCell(190,5,utf8_decode('    Los JOLTS son actividades experienciales interactivas que inducen a los participantes a la
    acción de manera cómoda y de repente aparece un estímulo que los hace despertar. Los
    jolts obligan a reconsiderar supuestos y a replantear algunas prácticas habituales. Un jolt
    debe durar solo un par de minutos pero proporciona suficientes material para hacer
    análisis y reflexiones extensas.
    Beneficios: La principal ventaja de un jolt es que genera aprendizajes profundos en
    tiempos cortos ya que sorprende a los participantes y van directo a sus emociones. Por lo
    general tienen mucha interacción y siempre necesitan introspección.
    Los jolts se pueden utilizar al comienzo de una sesión, como rompe hielo y se reflexiona
    durante la sesión. Puede utilizarlos en medio de dos módulos o para mantener la
    atención de los aprendices si hay posibilidades de perderla. Los puede usar al final de la
    sesión para recordar a los aprendices que a pesar de lo aprendido, siempre hay la opción
    de volver a los hábitos anteriores. Se recuerda que hay diferencia entre saber lo que se
    debe hacer desde lo cognitivo, y poder hacerlo desde la emoción.
    Aunque los jolts son sencillos en apariencia, a veces pueden salirse de las manos por las
    posibles reacciones de los participantes, así que deben prepararse muy bien para que
    cumplan con su objetivo. Por ejemplo, entrar en discusiones ideológicas, impactar las
    emociones, no enfocarse en el objetivo, discusiones más allá de lo previsto, o tomar más
    tiempo del establecido y afectar la sesión de formación .
    Los jolts pueden ser de varias clases: los que “engañan” y los que “divierten” Los primeros
    llevan al aprendiz a descubrir formas de comportamiento más efectivas que las habituales
    y las otras ayudan a descubrir principios importantes. También hay jolts individuales, en
    parejas o grupales.
    A continuación encontrará Ejemplos y la descripción de JOLTS que le pueden ser de
    utilidad en su trabajo diario como docente con los grupos de aprendices en formación o
    con sus colegas.
    EJEMPLO:
    Mire esta serie de números:
    1, 2, 4, 8, 16, ?
    Cuál es el siguiente número? Piense en una posible respuesta y escríbala.
    La respuesta correcta es 32 . El razonamiento es lógico, ya que el siguiente número es el
    doble del anterior.
    Ensaye con otra secuencia:
    2, 3, 5, 9, 17,?
    El siguiente número es 33 ya que cada número es el doble del anterior menos 1.
    Una más:
    4, 2, 9, 11, 6, ? (No siga hasta que tenga una respuesta)
    Si no ha encontrado una respuesta, escriba los números en letras (Cuatro, Dos, Nueve,
    Once, Seis) Observa la secuencia? Puede escribir el siguiente número?
    El siguiente número sería Uno, ya que ahora son números de un solo dígito que van en
    orden alfabético, no en secuencia numérica.
    Reflexión: No se puede suponer que la solución a un problema es la misma con la que se
    han solucionado problemas anteriores. Una solución no siempre una solución aplica
    para todos u otros problemas. Recuerde, “lo que funcionó aquí, puede que no funcione
    allá” – Marshal Goldsmith
    Los jolts pueden causar frustración y hasta enojo ya que sacan a la persona de su zona de
    confort en el razonamiento y comportamiento, y afloran emociones inesperadas.
    Con este ejemplo, se puede decir que
    un JOLT es una actividad interactiva o TDA que dura muy poco tiempo y que permite
    asimilar uno o más aprendizajes clave
    Algunas razones para utilizar los jolts:
    Aprendizaje Activo
    - El aprendiz no es un sujeto pasivo lo que hace que aprenda mejor al estar
    involucrado y le obliga a estar atento y a desplazarse en lugar de permanecer
    sentados escuchando una clase.
    Aprendizaje Relevante
    - Permite elegir al más apropiado de acuerdo con los RA de la guía de aprendizaje y
    enfatizar en su importancia y sus objetivos. Contienen preguntas reflexivas y
    discusiones donde se expresan emociones que pueden ocurrir en el lugar de
    trabajo
    Motivación
    - Parte o contiene el elemento sorpresa aunque haya iniciado lento y confortable ya
    que atraen la atención del aprendiz hacia el tema del RA de la guía de aprendizaje
    y lo convierte en protagonista.
    Aprendizaje Efectivo
    - Toman máximo 5 minutos, y producen un resultado de aprendizaje significativo
    Fácil de aplicar
    - La mayoría se desarrolla con instrucciones sencillas y se integra fácilmente a las
    sesiones de formación lo que permite reforzar conceptos, ejemplos, aplicaciones.
    Se pueden modificar mediante el uso de metáforas que se acomoden a los RA de la
    guía de aprendizaje.
    Evaluación Integrada
    - Se observa la actitud del aprendiz y sobre esta el instructor puede realizar un
    informe diagnóstico ya que permiten obtener información inmediata y actual del
    aprendiz de manera más efectiva que cuestionarios de autoevaluación.
    Diferencias Individuales
    - Las personas tímidas que no participan, también aprenden por observación. Los
    jolts en general se trabajan individualmente para evitar el roce con otras personas.
    Además permiten observar las diferencias individuales de los aprendices por sus
    diferentes reacciones frente a la misma situación desde su propia perspectiva.
    Trabajo en Equipo
    - Todos comparten la misma experiencia y un solo resultado y diferentes emociones
    Aprendizaje Continuo
    - Aún después de la sesión de formación, el aprendiz comparte el jolt con amigos y
    por tanto asimila mejor el aprendizaje
    - Los aprendizajes permanecen ya que se hacen memorables y así, el aprendizaje se
    asocia al momento de la diversión.') ,0,1,);
    $pdf->Ln(5);
    $pdf->Ln(5);
$pdf->cell(30,5,utf8_decode('') ,0,1);
	while($row = $result->fetch_assoc())
	{
       
		$pdf->Cell(7,7,utf8_decode($row['idMotivadores']),0,0,'B');
		$pdf->Cell(78,7,utf8_decode($row['tituloMoti']),0,1,'B');
		$pdf->MultiCell(190,5,utf8_decode($row['descripcionMoti']) ,0,2,);
	
		$imagen="../images/".$row['imagenMoti'];
		$pdf->Cell( 70, 42, $pdf->Image($imagen, $pdf->GetX()+23, $pdf->GetY()+3, 45, 38), 0, 2, 'C', false );
		$pdf->Cell(180,1,'',10,1,'',0);
	}
	$pdf->Output();
?>