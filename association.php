<?php
require"header.php";
?>
<!-- / header -->
<!-- content -->
		<article id="content">
			
			<div class="wrapper">
				<h3>A Chaque Enfant son Ecole</h3></br></br></br></br>
				<P>
				Est une association reconnue d’intérêt général à caractère éducatif et humanitaire. En tant que particuliers, vous pourrez bénéficier d’une réduction d’impôts de 66% des sommes versées. Chaque année, en Avril, nous vous adresserons un reçu fiscal, à joindre à votre déclaration d’impôts. Après réduction d’impôts, le parrainage d’un enfant vous reviendra à 27,20 €/an</BR>
				</P>
				<H3>   L'histoire de la création </H3>
				<p class="quot">
					
Au cours de l’été 2008, suite à un séjour à Bobo Dioulasso, nous avons fait la connaissance du « Vieux Papa » Seydou SANOU,. Il nous a fait part des problèmes de scolarisation des enfants de son petit village situé en pleine brousse, à côté de Bobo Dioulasso, à environ 2km de la route de Banfora, sur le lieu-dit de Bangneguena à Kodeni. Il nous propose une partie de son champ, afin que nous construisions une école pour son village. </BR>
Fin 2008, Dominique et Claudine, des amis français, se rendent également au village. Ils y font un séjour de 3 mois.</BR> 
A leur retour en France, l'association « A chaque enfant son école » est créée le 07 avril 2009. </BR>
La première année, nous étions 43 adhérents (parrains et donateurs) dont 30 parrains. </BR>
A ce jour, nous soutenons 92 enfants dont 74 sont parrainés et nous aurons lors de la prochaine rentrée 104 enfants scolarisés (nouvelle classe de CP1).<img src="images/quot2.png" alt="">				
				</p>
				</div>
				<div>
				<img class="gauche" src="images\sourire.jpg">
				<P>
				L’association s’est fixée pour l’année 2012- 2013 lors de la dernière assemblée générale. 
Construction d’un nouveau bâtiment qui accueillera la nouvelle classe de CP et les CE2 
Comme pour le précédent chantier, tous ces travaux seront encadrés par notre grand ami maçon, Souleymane.
Le 1er Novembre à la fin de la saison des pluies, la fabrication des briques a commencé. Souleymane et l’équipe du bureau de l’Association des Parents d’Elèves (l’A.P.E.) coordonnerons ce chantier. Le moulage des 8 800 briques en banco, nécessaires à la construction sera réalisé par les parents d’élèves (le banco est un mélange de terre crue et d’eau). Ensuite les briques devront sécher au soleil et être acheminée sur le chantier au moyen de charrette à ânes. 
Ensuite le 1er décembre prochain, débutera la construction du bâtiment par la technique de la voute nubienne. Nous retrouverons Richard et son équipe de maçons, des spécialistes de ce mode de construction. Nous avions déjà apprécié le sérieux de leur travail lors du précédent chantier en 2010-2011, nous serons heureux de les retrouver. 
Ouverture d’une 3ème classe en février prochain : CP1 
Après achèvement des travaux, nous ouvrirons une nouvelle classe de CP1. Actuellement 30 élèves sont inscrits. Il est intéressant de noter que les filles sont majoritaires. Habituellement, le taux de scolarisation des filles est souvent inférieur à celui des garçons, une évolution très encourageante. 
Ouvrir une classe en Février peut vous surprendre, mais dans la mesure où le même instituteur suivra les élèves jusqu’en CM2, le fait de commencer en cours d’année ne posera aucun problème. 
Achèvement des démarches administratives débutées l’année dernière.

				
				</P>
			</div>
			<div >
			<H3>Notre Mission</H3>
			<P></BR></BR></BR></BR>
							
Nos programmes de développement sont menés en accord avec les valeurs de l’association Vision du Monde depuis plus de 65 ans.  Elles guident nos actions au quotidien.</BR>
•	Inspirés par les valeurs chrétiennes</br>
•	Nous sommes aux services des plus pauvres</br>
•	Nous plaçons l'Homme au coeur de nos préoccupations</br>
•	Nous gérons nos ressources avec rigueur et transparence</br>
•	Nous sommes votre partenaire, vous pouvez compter sur nous</br>
•	Nous agissons en concertation avec nos partenaires : bénéficiaires, donateurs, ONG</br>
•	Nous agissons en professionnels, en apportant des réponses rapides et adaptées aux besoins</br>

			</P>
			
			<H3>Notre Equipe</H3>
			<P></BR></BR></BR></BR>
							
Au cours de l’été 2008, suite à un séjour à Bobo Dioulasso, nous avons fait la connaissance du « Vieux Papa » Seydou SANOU,. Il nous a fait part des problèmes de scolarisation des enfants de son petit village situé en pleine brousse, à côté de Bobo Dioulasso, à environ 2km de la route de Banfora, sur le lieu-dit de Bangneguena à Kodeni. Il nous propose une partie de son champ, afin que nous construisions une école pour son village. </BR>
Fin 2008, Dominique et Claudine, des amis français, se rendent également au village. Ils y font un séjour de 3 mois.</BR> 
A leur retour en France, l'association « A chaque enfant son école » est créée le 07 avril 2009. </BR>
La première année, nous étions 43 adhérents (parrains et donateurs) dont 30 parrains. </BR>
A ce jour, nous soutenons 92 enfants dont 74 sont parrainés et nous aurons lors de la prochaine rentrée 104 enfants scolarisés (nouvelle classe de CP1).
		
			</P>
			
			
			</div>
			<?php
			require"footer.php";
			?>
<script type="text/javascript">Cufon.now();</script>
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