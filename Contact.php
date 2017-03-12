<?php
require "header.php";
?>
			<div class="wrapper">
				<div class="pad_left2 relative">
					<h4 class="color3"><span>Formulaire</span> de contact</h4>
					<img src="images/page6_img1.png" alt="" class="img1">
					<form id="ContactForm" method="post" action="resultatcontact.php">
						<div>
							<div class="wrapper"><span>Prenom:</span><input type="text" name="pre" class="input"></div>
							<div class="wrapper"><span>Nom:</span><input type="text" name="no" class="input"></div>							
							<div class="wrapper"><span>E-mail:</span><input type="email" name="mai" class="input"></div>														
							<div class="textarea_box"><span>Votre Message:</span><textarea name="montext" cols="1" rows="1"></textarea></div>							
							<a href="#" class="button2 color3" onClick="document.getElementById('ContactForm').reset()">Annuler</a>
							<input type="submit" name="submit" class="button2 color3" />
						</div>
					</form>
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
<script>
$(window).load(function(){
	$('.slider')._TMS({
		preset:'zabor',
		easing:'easeOutQuad',
		duration:800,
		pagination:true,
		banners:true,
		waitBannerAnimation:false,
		slideshow:6000,
		bannerShow:function(banner){
			banner
				.css({right:'-700px'})
				.stop()
				.animate({right:'0'},600, 'easeOutExpo')
		},
		bannerHide:function(banner){
			banner
				.stop()
				.animate({right:'-700'},600,'easeOutExpo')
		}
	})
	$('.pagination li').hover(function(){
		if (!$(this).hasClass('current')) {
			$(this).find('a').stop().animate({backgroundPosition:'0 0'},600,'easeOutExpo', function(){$(this).parent().css({backgroundPosition:'-20px 0'})});
		}
	},function(){
		if (!$(this).hasClass('current')) {
			$(this).css({backgroundPosition:'0 0'}).find('a').stop().animate({backgroundPosition:'-250px 0'},600,'easeOutExpo');
		}
	})
})
</script>
</body>
</html>