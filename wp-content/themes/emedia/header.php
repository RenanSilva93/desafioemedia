<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

<title>Emedia</title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body <?php body_class(); ?>>
	<div id="header">
	<div class="capa" style="background-position: center!important; width: 100%; height: 500px;background: url(<?php bloginfo('template_url'); ?>/imagem/capa.jpg);">
		<div class="texto_logo">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-5 text-center" style="color: white;"><h5>O imóvel perfeito para vc e sua</h5></div>
			<div class="col-md-4"></div>
		</div>
		
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-5 text-center" style="color: white;"><h5>família</h5></div>
			<div class="col-md-4"></div>
		</div>
		<form id="idform" action="" method="POST">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center" style="color: white;"><input required class="form-control form-control-sm" type="email" placeholder="Digite seu e-mail para mais informaçoes" id="email" name="email"></div>
			<div class="col-md-4"><button class="btn btn-info" type="submit" id="submit" name="submit">Mais info</button></div>
		</div>
		</form>
		</div>
		<center style="color: white;">
		<?php if($_POST['email']) { 
			echo "Obrigado pelo cadastro, em breve entraremos em contato.<br>";
			echo "E-mail cadastrado: ".$_POST['email'];
		} ?>
		</center>
		</div>
	</div>
