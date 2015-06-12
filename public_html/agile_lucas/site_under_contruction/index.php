<?php 
session_start();
include("library/class_email_sender.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Agile Informática</title>
	
    <link name="author" href="Faisal Russel(russel365)" />
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- Mobile -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    
	<!-- CSS start here -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<!-- CSS end here -->
	<!-- Google fonts start here -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<!-- Google fonts end here -->
</head>
<body class="ux">
  <div class="bg-overlay"></div>
	<!-- Preloader start here -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- Preloader end here -->
<!-- About Icon start here -->
	<div class="about-us"> 
		<a href="#" class="fa fa-file-text-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg" data-placement="right" title="Sobre"></a>
	</div>
<!-- About Icon end here -->	
<!-- Contact Icon start here -->
	<div class="contact-us"> 
		<a href="#" class="fa fa-envelope-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg2"  data-placement="left" title="Contato"></a>
	</div>
<!-- Contact Icon end here -->
	<!-- Main container start here -->
	<section class="container main-wrapper">
		<!-- Logo start here -->
		<section id="logo" class="fade-down">
			<a href="#" title="Agile - Informática e Serviços">
            	<img src="img/logo.png" alt="Agile - Informática e Serviços">
            </a>
		</section>
		<!-- Logo end here -->
		<!-- Slogan start here -->
		<section class="slogan fade-down">
    <h1>Suporte e assistência em computadores, notebook, tablets e celular como você nunca viu antes</h1>   
    </br>
			<h1>Nosso site está em construção. Em breve novidades por aqui!</h1>			
		</section>
		<!-- Slogan end here -->
		<!-- Count Down start here -->
		<section class="count-down-wrapper fade-down">
			<ul class="row count-down">                       
				<li class="col-md-3 col-sm-6">   
					<input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#34aadc" data-bgColor="#e1e2e6" data-angleOffset="180">
					<span id="days-title">dias</span>
				</li>    
				<li class="col-md-3 col-sm-6"> 
					<input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#e1e2e6" data-angleOffset="180">
					<span id="hours-title">horas</span>
				</li>    
				<li class="col-md-3 col-sm-6"> 
					<input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#e1e2e6" data-angleOffset="180">
					<span id="mins-title">minutos</span>
				</li>    
				<li class="col-md-3 col-sm-6"> 
					<input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#e1e2e6" data-angleOffset="180">
					<span id="secs-title">segundos</span>
				</li>                
			</ul>              
		</section>
		<!-- Count Down end here -->

		<!-- Newsletter end here -->
		<!-- Social icons start here -->
		<ul class="connect-us row fade-down">
			<li><a href="http://www.facebook.com/agileinfomanutencao" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
			<li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
			<li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
		</ul>
		<!-- Social icons end here -->
		<!-- Footer start here -->
		<footer class="fade-down">        
			<p class="footer-text">&copy; Agile 2015, todos os direitos reservados</p>
		</footer>
		<!-- Footer end here -->
	</section>
<!-- About start here -->
  <div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg clearfix">
      <div class="modal-content pop-up">
        <h3>Quem é a Agile?</h3>
        <div class="clearfix">
        <div>
          <h1>Suporte e assistência em computadores, notebook, tablets e celular sem complicação e burocracia.</h1></br>
          <h1>Atendimento personalizado para você e sua empresa.</h1>
        </div>
      </div>
      
      </div>
    </div>
  </div>
<!-- About end here -->
<!-- Contact start here -->
  <div class="modal fade bs-example-modal-lg2" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg">
      <div class="modal-content pop-up pop-up-cnt">
        <h3>Contato</h3>
        


        <!--Email Sending Script -->

        <?php 
			$name="";
			$from="";
			$message="";
        if(isset($_POST['submit'])){

        	$name=($_POST['name']);
        	$from=($_POST['email']);
        	$message=($_POST['comments']);
        	$code=$_SESSION['captcha'];
            $captcha=($_POST['captcha']);
        	$to="agileinfomanutencao@gmail.com"; // Add your e-mail here
        	if($code!=$captcha){
			echo '<script>alert("Invalid Captcha");</script>';
			}else{    
        	include("library/send_email.php");
			}

        //Isset finishes here	
        }
        ?>


        <!-- Email Sending Script-->

        <div class="clearfix cnt-wrap">
         <form id="contactform" name="contactform" action="" method="post">
         	<div id="result"></div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text" id="name" placeholder="Nome" name="name" value="<?php echo $name;?>" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text"  id="email" placeholder="Email" name="email" value="<?php echo $from;?>" required>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns">
                <textarea id="comments" name="comments" placeholder="Mensagem" required><?php echo $message;?></textarea>
              </div>
               
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns captcha text-center">
				   <img src="captcha.php"><br>
                   <input type="text" name="captcha" placeholder="captcha"required>                
              </div>
              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center columns">             
                <button name="submit" id="submit" class="contact-btn-submit" type="submit">Enviar</button>
              </div> 
            </form>        
        </div>


        <div class="clearfix cnt-wrap">
          <div class="col-md-6 col-sm-6">
            <i class="fa fa-phone"></i>
            <h4>Telefone</h4>
            <p>(34) 9640-9300</p>
          </div>

          <div class="col-md-6 col-sm-6">      
            <i class="fa fa-envelope-o"></i>
            <h4>Email</h4>
            <p>agileinfomanutencao@gmail.com</p>
          </div>
          
          </div>
        </div>
      </div>
    </div>
<!-- Contact end here --> 
		<!-- Main container start here -->
		<!-- Javascript framework and plugins start here -->
		<script type="text/javascript" src="js/jquery.js"></script> 
		<script type="text/javascript" src="js/bootstrap.min.js"></script> 
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/modernizr.js"></script> 
		<script type="text/javascript" src="js/appear.js"></script> 		
		<script src="js/jquery.knob.js"></script>
		<script src="js/jquery.ccountdown.js"></script>
		<script src="js/init.js"></script>
		<script src="js/general.js"></script>
		
<!-- Javascript framework and plugins end here -->
</body>
</html>


