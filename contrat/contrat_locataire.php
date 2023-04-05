<?php
session_start();

$chemin_image = "../images/Logo-noir.PNG";
require_once("../vendor/autoload.php");
require_once("connect_bdd_contrat.php");
$signature_img ="../Images/approuver.png";
$color = [255, 0, 0]; 

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', [10, 5, 10, 0]);/* pour modifier la hauteur du text */


if(isset($_SESSION['email_locataire'])){
	$nom = $_SESSION['nom_locataire'];
	$prenom = $_SESSION['prenom_locataire'];
	$civilite_locataire = $_SESSION['civilite_locataire'];
}


$html = "
<page backtop='7mm' backbottom='7mm' backleft='10mm' backright='10mm' backcolor='#FFF' footer='page; date;'>
	<page_header>
	<style> 
		.center{
			text-align:center;
		}
	
	
		nav {
		background-color: blue;
		color: red;
		padding: 10px;
		}

		hr { 
		background: #717375; height:2px; border:none;
		}

		.imag {
            display: block;
            margin: 0 auto;
            text-align: center;
        }

		p{
			text-align: justify;
		}




		#Siignature {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            margin-bottom: 20px;
        }

	</style>

	

	<h1 class='center'>Contrat de location saisonnière</h1>

	<hr />

	<img style='float:left;'  src='$chemin_image' width='100' height='70' />

	<h4 style='text-align: right; margin-top:50px;'>Neige & Soleil</h4>
	<h4>Locataire : $civilite_locataire $nom $prenom</h4>
	
	<p>Il est convenu ce qui suit :</p>
	
	
	<p><strong>Objet de la location :</strong><br>
			Le propriétaire loue au locataire le chalet situé à <strong>{$appartement['adresse_appart']}</strong>, pour une période de <strong>$duree_en_mois mois ($duree_en_jours jours )</strong> à compter du <strong>$date_debut_fr</strong>, jusqu'au <strong>$date_fin_fr</strong>.<br><br>
		
			<strong>Montant du loyer :</strong><br>
			Le locataire paiera au propriétaire un loyer total de <strong>$prix_total €</strong> pour la période de location,<br>payable comme suit : <strong>{$appartement['prix_appart']}/mois</strong>.<br><br>
		
			<strong>Caution :</strong><br>
			Le locataire versera au propriétaire une caution de <strong>75 €</strong> à titre de garantie de la bonne exécution de ses obligations contractuelles.<br> Cette caution sera restituée au locataire dans un délai de <strong>$duree_en_jours jours</strong> après la fin de la location, sous réserve de l'absence de dégradations constatées dans le chalet.<br><br>
		
			<strong>État des lieux :</strong><br>
			Un état des lieux contradictoire sera établi entre le propriétaire et le locataire à l'arrivée et au départ du locataire.<br> Tout désaccord sera mentionné sur l'état des lieux et signé par les deux parties. L'état des lieux sera annexé au présent contrat.<br><br>
		
			<strong>Obligations du locataire :</strong><br>
			Le locataire s'engage à utiliser le chalet en bon père de famille, à respecter les lieux et le voisinage, à ne pas sous-louer le chalet ni y exercer une activité professionnelle, à ne pas fumer à l'intérieur du chalet, à ne pas y introduire d'animaux domestiques, et à ne pas y organiser de fêtes ou de réunions sans l'accord préalable du propriétaire.<br><br>
		
			
			<strong>Assurance :</strong><br>
			Le locataire est responsable de souscrire une assurance responsabilité civile pour couvrir les dommages qu'il pourrait causer au chalet ou à autrui pendant la durée de la location.<br><br>
		
			<strong>Résiliation :</strong><br>
			En cas de manquement par l'une ou l'autre des parties aux obligations découlant du présent contrat, celui-ci pourra être résilié de plein droit par la partie lésée, sans formalité judiciaire et sans préjudice des dommages et intérêts qui pourraient être réclamés.<br><br>
		
			<strong>Loi applicable et juridiction :</strong><br>
			Le présent contrat est régi par la loi française. Tout litige relatif à l'interprétation ou à l'exécution du présent contrat sera de la compétence exclusive des tribunaux français.<br><br>
		
			<strong>Annexes :</strong><br>
			Le présent contrat est constitué de <strong>1</strong> pages, y compris l'état des lieux annexé. Les parties reconnaissent avoir pris connaissance de chacune des pages et les avoir paraphées et signées.<br><br>
	</p>
	
			<div style=''>
			<div style='text-align: right;'>
				<strong>Signature du locataire</strong><br>
				<img src='$signature_img' width='100' height='50' />
				<p style='text-align: right;'>Date de signature, le <strong>$date_debut_fr</strong></p>

			</div>
			<div >
				<strong>Signature du propriétaire</strong><br><br>
				<img src='$signature_img' width='100' height='50' /><br><br>
			</div>
	
	
		
	</div>
		</page_header>

		<page_footer>
		<hr />
		<div class='imag'>
		<img  src='$chemin_image' width='100' height='50' />
		</div>



		</page_footer>





	
	

	</page>
	
	
	
	
	";


$html2pdf->writeHTML($html);
$html2pdf->output("Contrat_doc.pdf");
?>
