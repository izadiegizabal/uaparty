<?php

if(isset($_POST['email'])) {

    $email_to = "uapartyoficial@gmail.com";

    $email_subject = "Nuevo post para la web";


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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>UA Party - Sobre Nosotros</title>
    <meta name="description" content="UA Party nace con la intención de conectar a toda la comunidad de la Universidad de Alicante en el ámbito de salir de fiesta y ofrecerte toda la información de cada una de las fiestas que se organizan.">
    <link type="application/atom+xml" rel="alternate" href="http://uaparty.ml/feed.xml" title="UA Party" />
    <link type="text/css" rel="stylesheet" href="/assets/css/Material-icons.css" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="/assets/css/app.css" media="screen,projection">
    <link rel="canonical" href="http://uaparty.ml/sobre_nosotros/">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#50adf7">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="scrollspy">
    <header>
        <div class="navbar-fixed">
<nav class="white blue-text z-depth-0">

    <ul id="slide-out" class="side-nav mobileko-menua">
        <img src="/assets/img/logo_ua_party.svg" style="height: 150px; padding: 30px 0 35px 75px; margin-bottom: -30px;" alt="logo uaparty oficial">
        <li style="padding-left: 25px;"><a href="/" class="blue-text margena-kendu">Novedades</a></li>
        <li style="padding-left: 25px;"><a href="/calendario/" class="blue-text margena-kendu">Calendario</a></li>




                <li style="padding-left: 25px;"><a href="/bares/" class="blue-text margena-kendu">Bares</a></li>





                <li style="padding-left: 25px;"><a href="/cocteles/" class="blue-text margena-kendu">Cócteles</a></li>







                <li style="padding-left: 25px;"><a href="/juegos/" class="blue-text margena-kendu">Juegos</a></li>



                <li style="padding-left: 25px;"><a href="/sobre_nosotros/" class="blue-text margena-kendu">Sobre Nosotros</a></li>




    </ul>
    <div class="container container-large">
    <a class="brand-logo" href="/" class="blue-text" style="padding: 0 20px;"><span class="light blue-text">UA<b>Party</b></span></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="/" class="blue-text">Novedades</a></li>
      <li><a href="/calendario/" class="blue-text">Calendario</a></li>
      <li><a href="/sobre_nosotros/" class="blue-text">Sobre Nosotros</a></li>

      <!-- To have space between the dropdown and the rest of the sections -->
      <p class="noselect" style="
      float: left;
      -webkit-touch-callout: none; /* iOS Safari */
      -webkit-user-select: none;   /* Chrome/Safari/Opera */
      -moz-user-select: none;      /* Firefox */
      -ms-user-select: none;       /* Internet Explorer/Edge */
      user-select: none;           /* Non-prefixed version, currently
                                      not supported by any browser */
      ">&nbsp; &nbsp; &nbsp;</p>


      <!-- Dropdown Trigger -->
      <a class='dropdown-button btn white-text blue' href='#' style="font-size: 1rem; margin-left: 0; margin-right: -50px;" data-activates='dropdown1'>¡Diviértete!</a>

      <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content'>
        <li><a href="/bares/" style="font-size: 1rem;" class="blue-text">Bares</a></li>
        <li><a href="/cocteles/" style="font-size: 1rem;" class="blue-text">Cócteles</a></li>
        <li><a href="/juegos/" style="font-size: 1rem;" class="blue-text">Juegos</a></li>
      </ul>

    </ul>
      <a href="#" data-activates="slide-out" class="button-collapse left blue-text menu-botoi" style="padding: 0 15px;margin-left: -35px;">
        <svg style="margin-top: 7px;" height="40px" fill="#2196F3" id="botoia" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
      </a>
    </div>
</nav>
</div>

    </header>
    <main>
        <div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card white z-depth-0">
                    <div class="card-content">
                        <div class="card-title center-align"><h2 class="thin blue-text">¡Gracias!</h2></div>
                        <div class="divider"></div>
                        <br/>
                        <article class="grey-text text-darken-2 post-content">
                        <p>Muchísimas gracias por la colaboración! Estamos revisando el post y nos pondremos en contacto muy pronto. También nos gustaría informar que has ganado una participación para el sorteo mensual! Recuerda seguirnos en nuestras redes sociales (@uapartyoficial) para ver si eres el/la afortunado/a y estar al tanto de todas las novedades.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </main>
    <footer class="page-footer no-margin __top blue">
        <div class="container container-large">
  <div class="row">
    <div class="col l4 s12">
      <h5 class="white-text">Links</h5>
      <ul>
        <li><a class="grey-text text-lighten-3" href="https://fb.me/uapartyoficial"><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;uapartyoficial</a></li>

        <li><a class="grey-text text-lighten-3" href="https://twitter.com/uapartyoficial"><i class="fa fa-twitter"></i>&nbsp;&nbsp;@ uapartyoficial</a></li>
        <li><a class="grey-text text-lighten-3" href="mailto:uapartyoficial@gmail.com"><i class="fa fa-send"></i>&nbsp;&nbsp;uapartyoficial@gmail.com</a></li>
      </ul>
    </div>
    <div class="col l6 offset-l2 s12 left-align">
      <h5 class="white-text">UA<b>Party</b></h5>
      <p class="grey-text text-lighten-4">UA Party nace con la intención de conectar a toda la comunidad de la Universidad de Alicante en el ámbito de salir de fiesta y ofrecerte toda la información de cada una de las fiestas que se organizan.</p>
    </div>
  </div>
</div>
<div class="footer-copyright">
  <div class="container center-align">
    © NULLPOINTER - 2016
  </div>
</div>

    </footer>
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/materialize.js"></script>
    <script type="text/javascript">
    $(function() {

        //fontawesome broken-heart icon
        var faFlash=$('footer').css('background-color'),
            faFlash='color:'+faFlash+';transform:scale(1,2);-webkit-transform:scale(1,2);-moz-transform:scale(1,2);-ms-transform:scale(1,2);-o-transform:scale(1,2)';
        $('i.fa.fa-broken-heart').html('<span style="padding:5px"><span class="fa-broken-heart fa-stack"><i class="fa fa-heart fa-stack-2x"></i><i class="fa fa-flash fa-stack-1x" style="'+faFlash+'"></i></span></span>');
        $(".button-collapse").sideNav();
        $('nav a').addClass('waves-effect');

        //uaparty additions
        $(".carousel.carousel-slider").carousel({full_width: true});
          $('.carousel').carousel({
            padding: 200
          });
          autoplay()
          function autoplay() {
            $('.carousel').carousel('next');
            setTimeout(autoplay, 4500);
          }
          $(document).ready(function(){
            $('.scrollspy').scrollSpy();
            $('.carousel').carousel();
            $('.materialboxed').materialbox();
          });
    });
    </script>
</body>
</html>



<?php

}

?>
