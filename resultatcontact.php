

<?php
mysql_connect("localhost","root","");
mysql_select_db("anglet");
if (isset($_POST['pre'])&& isset($_POST['no']) && isset($_POST['mai']) && isset($_POST['montext'])){
     $prénom=$_POST['pre'];
     $nom=$_POST['no'];
	 $mail=$_POST['mai'];
	 $mess=$_POST['montext'];
	 mysql_query("INSERT INTO contact (ID,nom,prenom,email,contenumsg) VALUES('','$prénom','$nom','$mail','$mess')");
	
   }
else {
  echo"veuillez remplir le formulaire";
     }
?>






<!DOCTYPE html>
<html lang="fr">
<head>
<style>
    .heading { color: #FF0000; }
  </style>
<title>contacter</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.box1 figure {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
		<div style='clear:both;text-align:center;position:relative'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
		</div>
<![endif]-->
</head>
<body id="page5">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">A Chaque Enfant son Ecole</a></h1>
				<nav>
					<ul id="top_nav">
						<li><a href="index.html"><img src="images/top_icon1.gif" alt=""></a></li>
						<li><a href="Parrainer.html"><img src="images/top_icon2.gif" alt=""></a></li>
						<li class="end"><a href="Contact.html"><img src="images/top_icon3.gif" alt=""></a></li>
					</ul>
				</nav>
				<nav>
					<ul id="menu">
						<li><a href="index.html">accueil</a></li>
						<li><a href="association.html">L'Association</a></li>
						<li><a href="Mission.html">Notre Mission</a></li>
						<li><a href="Ecole.html">L'Ecole</a></li>
						<li><a href="News.html">News</a></li>
						<li><a href="parrainer.php">Parrainer ?</a></li>
						<li  id="menu_active"><a href="Contact.html">Contacter</a></li>
					</ul>
				</nav>

			</div>
		</header>
<!-- / header -->
<!-- content -->



<h1 class="heading">Votre message a été bien envoyé, nous pronderons en compte votre sujet dans les plus brefs délais.</h1>


<!-- / content -->
<!-- footer -->
		<footer>
			<div class="wrapper">
				<a href="index.html" id="footer_logo"><span>A Chaque Enfant</span> son Ecole</a>
				<ul id="icons">
					<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.gif" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon3.gif" alt=""></a></li>
				</ul>
			</div>	
			<div class="wrapper">
				<nav>
					<ul id="footer_menu">
						<li class="active"><a href="index.html">Acceuil</a></li>
						<li><a href="Association.html">L'Association</a></li>
						<li><a href="Mission.html">Notre Mission</a></li>
						<li><a href="Ecole.html">L'Ecole</a></li>
						<li><a href="News.html">News</a></li>
						<li><a href="parrainer.php">Parrainer?</a></li>
						<li class="end active"><a href="Contact.html">Contacter</a></li>
					</ul>
				</nav>

				<div class="tel"><span>+33</span> 4 68 78 41 79</div>
			</div>
			<div id="footer_text">
				<a>Association enregistrée en Préfecture de l’Aude, le 7 Avril 2009 sous le N° W111001540</a><br>
				<a>Parution au Journal Officiel N°18 du 2 Mai 2009 sous le n°149</a></br>
				<a>Numéro de SIRET : 522 390 269 00010</a>
			</div>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>