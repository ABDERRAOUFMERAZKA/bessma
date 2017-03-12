<!DOCTYPE html>
<html lang="fr">
<head>
<title>Parrainer</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
<body id="page4">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">A Chaque Enfant son Ecole</a></h1>
				<nav>
					<ul id="top_nav">
						<li><a href="index.html"><img src="images/top_icon1.gif" alt=""></a></li>
						<li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
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
						<li  id="menu_active"><a href="Help.html">Parrainer ?</a></li>
						<li><a href="Contact.html">Contacter</a></li>
					</ul>
				</nav>

			</div>
		</header>
<!-- / header -->
<!-- content -->
		<article id="content">
			
			<div class="wrapper">
				<div class="pad_left2">
					<h4>comment un <span>Parrainage </span>ou <span>un Don </span> peut changer <span> des Vies</span>?</h4>
					<p class="pad_bot2"><strong>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</strong></p>
					<p>Définition de Parrainage</p></br>
				<h6> ou va votre don ?!</h6>
				<P> ou va votre don </P></br>
				<h6> formulaire de parrainage</h6>
				<h6> Marrains/Parrains et enfants temoignent   </h6></br>

<div>
        <form class="well form-inline span4" action="Parrainer.php" method="post">
        <label>S'authentifier</label></p>
         <input type="text" name="log" class="span4" placeholder="Username...." /></p>
          <input type="password" name="pass" class="span4" placeholder="Passeword...." /></p>
          <button class="btn btn-primary"> Login </button></button>

<?php
if (isset($_POST['log']) && isset($_POST['pass'])){
   $log= $_POST['log'];
   $mdp= $_POST['pass'];
   mysql_connect ("localhost","root","");
   mysql_select_db("anglet");
   $rep = mysql_query ("SELECT * FROM utilisateur WHERE Login = '$log' AND motdepasse ='$mdp' ");
   $r = mysql_num_rows ($rep);
   if ($r == 0){
    echo "erreur login et mot de passe incorecte! ";
   }
   else {
   	session_start();
   
   $_SESSION['user']=$log;
  header("location: forum.php");
   }
   }

?>

</form>
</div>












              
				<P> Marrains/Parrains et enfants temoignent   </P>
				</div>
			</div>
			<div class="wrapper">
				<div class="box2">
					<div class="wrapper">
						<section class="col1">
							<div class="wrapper">
								<a href="#" class="left marg_right1"><img src="images/papillon1.jpg" alt=""></a>
								<p class="pad_bot2"><span>Mais </span><strong>Comment fair un Don ?</strong></p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
							</div>
						</section>
					</div>
				</div>
			</div>
		</article>
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
						<li><a href="index.html">Acceuil</a></li>
						<li><a href="Association.html">L'Association</a></li>
						<li><a href="Mission.html">Notre Mission</a></li>
						<li><a href="Ecole.html">L'Ecole</a></li>
						<li><a href="News.html">News</a></li>
						<li class="active"><a href="Help.html">Parrainer?</a></li>
						<li class="end"><a href="Contact.html">Contacter</a></li>
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