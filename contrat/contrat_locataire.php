<?php

require_once("../vendor/autoload.php");

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf('P', 'A4', 'fr');

$html = "
<page backtop='7mm' backbottom='7mm' backleft='10mm' backright='10mm'>
	<page_header>
	<style> 
		.center{
			text-align:center;
		}
	</style>

	<h1 class='center'>Contrat de location saisonnière</h1>
	
	<h4>Le propriétaire :
	[Nom et prénom du propriétaire] <br>
	
	Le locataire :
	[Nom et prénom du locataire]</h4>
	
	Il est convenu ce qui suit :<br><br>
	
	
	<strong>Objet de la location :</strong><br>
			Le propriétaire loue au locataire le chalet situé à <strong>[adresse du chalet]</strong>, pour une période de <strong>[nombre de jours/semaines/mois]</strong> à compter du <strong>[date de début de la location]</strong> à <strong>[heure de début de la location]</strong>,<br> jusqu'au <strong>[date de fin de la location]</strong> à <strong>[heure de fin de la location]</strong>.<br><br>
		
			<strong>Montant du loyer :</strong><br>
			Le locataire paiera au propriétaire un loyer total de <strong>[montant en euros]</strong> pour la période de location,<br>payable comme suit : <strong>[détails des versements et échéances]</strong>.<br><br>
		
			<strong>Caution :</strong><br>
			Le locataire versera au propriétaire une caution de <strong>[montant en euros]</strong> à titre de garantie de la bonne exécution de ses obligations contractuelles.<br> Cette caution sera restituée au locataire dans un délai de <strong>[nombre de jours]</strong> après la fin de la location,<br> sous réserve de l'absence de dégradations constatées dans le chalet.<br><br>
		
			<strong>État des lieux :</strong><br>
			Un état des lieux contradictoire sera établi entre le propriétaire et le locataire à l'arrivée et au départ du locataire.<br> Tout désaccord sera mentionné sur l'état des lieux et signé par les deux parties.<br> L'état des lieux sera annexé au présent contrat.<br><br>
		
			<strong>Obligations du locataire :</strong><br>
			Le locataire s'engage à utiliser le chalet en bon père de famille, à respecter les lieux et le voisinage,<br> à ne pas sous-louer le chalet ni y exercer une activité professionnelle, à ne pas fumer à l'intérieur du chalet,<br> à ne pas y introduire d'animaux domestiques, et à ne pas y organiser de fêtes ou de réunions sans l'accord préalable du propriétaire.<br><br>
		
			
			<strong>Assurance :</strong><br>
			Le locataire est responsable de souscrire une assurance responsabilité civile pour couvrir les dommages qu'il pourrait causer au chalet ou à autrui pendant la durée de la location.<br><br>
		
			<strong>Résiliation :</strong><br>
			En cas de manquement par l'une ou l'autre des parties aux obligations découlant du présent contrat, celui-ci pourra être résilié de plein droit par la partie lésée,<br> sans formalité judiciaire et sans préjudice des dommages et intérêts qui pourraient être réclamés.<br><br>
		
			<strong>Loi applicable et juridiction :</strong><br>
			Le présent contrat est régi par la loi française. Tout litige relatif à l'interprétation ou à l'exécution du présent contrat sera de la compétence exclusive des tribunaux français.<br><br>
		
			<strong>Annexes :</strong><br>
			Le présent contrat est constitué de <strong>[nombre]</strong> pages, y compris l'état des lieux annexé. Les parties reconnaissent avoir pris connaissance de chacune des pages et les avoir paraphées et signées.<br><br>
	
	Fait en deux exemplaires originaux à <strong>[lieu de signature]</strong>, le <strong>[date de signature]</strong><br><br><br><br><br>
	
	<strong>Signature du propriétaire</strong>
		[Signature]<br><br><br><br><br>
	
	
		<strong>Signature du locataire</strong>
		[Signature]


		</page_header>
	

	</page>
	
	
	
	
	";


$html2pdf->writeHTML($html);
$html2pdf->output("Contrat_doc.pdf");
?>
