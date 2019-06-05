<?php

//$return['mensaje'] =  json_decode($_REQUEST['json_datos']);
//$datos = json_decode($_POST['variable']);
//$datos = $_POST['variable'];
/*
$return['mensaje1'] = "Variable $POST recibida: ".gettype($_POST['variable']);
$return['mensaje2'] = "Variable $POST convertida: ".gettype(json_decode($_POST['variable']));
$json = json_decode($_POST['variable']);
$return['mensaje'] = "Mensaje: ".$json['nombre'];*/

$json = json_decode($_POST['variable']);
$return['mensaje'] = "Mensaje: ".$_POST['variable'];
$return['mensaje2'] = "Variable POST: ".gettype($_POST['variable']);
$obj = json_decode($_POST['variable']);

$return['nombre'] = "Variable POST[nombre]: ".$obj->{'nombre'};

//$_POST['variable']['nombre'];
//print json_encode($return);

if(empty($obj->{'nombre'}) || empty($obj->{'email'})  )
{

	   $return["error"] = true;
	   $return["resultado"] = "Error nombre y email";
}
else
{
	$nombre = strip_tags(htmlspecialchars($obj->{'nombre'}));
	$apellido = strip_tags(htmlspecialchars($obj->{'apellido'}));
	$email = strip_tags(htmlspecialchars($obj->{'email'}));
	$telefono = strip_tags(htmlspecialchars($obj->{'telefono'}));
	$pais = strip_tags(htmlspecialchars($obj->{'pais'}));
	$empresa = strip_tags(htmlspecialchars($obj->{'empresa'}));
	$comentario = strip_tags(htmlspecialchars($obj->{'comentario'}));

	require("./PHPMailer-master/PHPMailerAutoload.php");
	$mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "smtp.gmail.com";  
	$mail->Username = "digipayargentina@gmail.com";  
	$mail->Password = "digipay2016"; 
	$mail->Port = 465;  
	$mail->From = "adrian@magliola.com";  
	$mail->FromName = "Web"; 
	$mail->AddAddress("adrian.magliola@gmail.com");
	$mail->IsHTML(true);  
	$mail->Subject = "Contacto Web";  

	$body = "<strong>Nombre: </strong>".$obj->{'nombre'}."<br>"; 

	if( $apellido )
		$body .= "<strong>Apellido: </strong>".$apellido."<br>"; 

	$body .= "<strong>Email: </strong>".$email."<br>"; 

	if( $telefono )
		$body .= "<strong>Apellido: </strong>".$telefono."<br>"; 

	if( $pais )
		$body .= "<strong>Apellido: </strong>".$pais."<br>"; 

	if( $empresa )
		$body .= "<strong>Apellido: </strong>".$empresa."<br>"; 

 	
 	$body .= "<strong>Comentario: </strong>".$comentario."<br>"; 

	$mail->Body = $body;  
	$exito = $mail->Send(); // Envía el correo.

	//También podríamos agregar simples verificaciones para saber si se envió:
	if($exito){
		$return["resultado"] = "El correo fue enviado correctamente, el mismo será respondido a la brevedad. <br> Muchas gracias por su consulta.";
		$return["error"] = false;
	}else{
		$return["resultado"] = "Hubo un inconveniente. Por favor, intentá nuevamente o escribrinos a nuestro email: <b> nyndecoratuvida@gmail.com  </b> <br> Muchas gracias por su consulta.";
		$return["error"] = true;
	}

}
   
 
print json_encode($return);
?>