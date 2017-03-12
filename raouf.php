<?php
// Fonction permettant de compter le nombre de jours ouvrés entre deux dates
function get_nb_open_days($date_1, $date_2) {	
	$arr_bank_holidays = array(); // Tableau des jours feriés	
	
	// On boucle dans le cas où l'année de départ serait différente de l'année d'arrivée
	$diff_year = date('Y', $date_2) - date('Y', $date_1); //Y représente l'année en 4 chiffres
	for ($i = 0; $i <= $diff_year; $i++) {			
		$year = (int)date('Y', $date_1) + $i;
		// Liste des jours feriés
		$arr_bank_holidays[] = '1_1_'.$year; // Jour de l'an
		$arr_bank_holidays[] = '1_5_'.$year; // Fete du travail
		$arr_bank_holidays[] = '8_5_'.$year; // Victoire 1945
		$arr_bank_holidays[] = '14_7_'.$year; // Fete nationale
		$arr_bank_holidays[] = '15_8_'.$year; // Assomption
		$arr_bank_holidays[] = '1_11_'.$year; // Toussaint
		$arr_bank_holidays[] = '11_11_'.$year; // Armistice 1918
		$arr_bank_holidays[] = '25_12_'.$year; // Noel
				
		// Récupération de paques. Permet ensuite d'obtenir le jour de l'ascension et celui de la pentecote	
		$easter = easter_date($year);
		//j = jours des mois sans les zero initiaux
		//n = mois sans les zéro initiaux
		$arr_bank_holidays[] = date('j_n_'.$year, $easter + 86400); // Paques
		$arr_bank_holidays[] = date('j_n_'.$year, $easter + (86400*39)); // Ascension
		$arr_bank_holidays[] = date('j_n_'.$year, $easter + (86400*50)); // Pentecote	
	}
	//print_r($arr_bank_holidays);
	$nb_days_open = 0;
	$jour_julien = unixtojd($date_1); 
    $jour_semaine = jddayofweek($jour_julien, 0);
	// Mettre <= si on souhaite prendre en compte le dernier jour dans le décompte	
	while ($date_1 < $date_2) {
		// Si le jour suivant n'est ni un dimanche (0) ou un samedi (6), ni un jour férié, on incrémente les jours ouvrés	
		if (!in_array(date('w', $date_1), array(0, 6))  
		
		&& !in_array(date('j_n_'.date('Y', $date_1), $date_1), $arr_bank_holidays)) {//boucle mercredi
			$nb_days_open++;		$days = $nb_days_open;
		}

         // pour vérifier s'il existe deux mercredi dans la période

		if ($jour_semaine == 3 && $jour_semaine == 3){
			$nb_days_open = $days - 1;
            $date_1=mktime(0,0,0,$mois,$jour,$annee); 
		}


		$date_1 = mktime(date('H', $date_1), date('i', $date_1), date('s', $date_1), date('m', $date_1), date('d', $date_1) + 1, date('Y', $date_1));	
	}	

	return $nb_days_open;
}

// Exemple : Du 13 au 27 janvier.
$date_depart = strtotime('2017-01-13');
$date_fin = strtotime('2017-01-27');
$nb_jours_ouvres = get_nb_open_days($date_depart, $date_fin);
echo 'Il y a '.$nb_jours_ouvres.' jours ouvrés entre le '.date('d/m/Y', $date_depart).' et le '.date('d/m/Y', $date_fin);
?>