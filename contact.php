<?php

if(isset($_POST['email'])) {

    $email_to = "uaparty@gmail.com";

    $email_subject = "Nueva entrada";


    function died($error) {

        // your error code can go here

        echo "Lo sentimos pero ha habido errores en el formulario enviado. ";

        echo "Los erroes aparecen aquí abajo.<br /><br />";

        echo $error."<br /><br />";

        echo "Por favor, ve atrás y arregla estos errores.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['message'])) {

        died('Lo sentimos, pero ha habido un error con el formulario enviado.');

    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $email_message = "Detalles del formulario abajo.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Nombre: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Mensaje: ".clean_string($message)."\n";


	// create email headers

	$headers = 'De: '.$email."\r\n".

	'Responder a: '.$email."\r\n" .

	'X-Mailer: PHP/' . phpversion();

	@mail($email_to, $email_subject, $email_message, $headers);


?>



<!-- include your own success html here -->


Gracias por contactarnos. Te responderemos lo más pronto posible.



<?php

}

?>
