<?php
$chemin_image = "../images/Logo-noir.PNG";
require_once("../vendor/autoload.php");
require_once("connect_bdd_contrat.php");
$signature_img ="../Images/approuver.png";

$date = date("d/m/Y");

$color = [255, 0, 0]; 

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', [10, 5, 10, 0]);/* pour modifier la hauteur du text */

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





		#Siignature {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            margin-bottom: 20px;
        }

	</style>



	<h1 class='center'>Contrat Proprietaire</h1>
    <hr/>
    <h4 style='text-align: right;'>La société : 
	[Nom, forme juridique, adresse, numéro de téléphone, adresse email, immatriculation RCS]</h4>

	<h4> Le propriétaire : 
	[Nom, prénom, adresse, numéro de téléphone, adresse email] désigné ci-après<br>
	</h4>

	
	Il est convenu ce qui suit :<br><br>
	
	
	<strong>Article 1 – Objet du contrat :</strong><br>
			Le présent contrat a pour objet la mise en relation entre le propriétaire du chalet et le site de location saisonnière en vue de la mise en location du chalet.<br><br>

			<strong>Article 2 – Conditions de mise en location :</strong><br>
			Le propriétaire garantit que le chalet est conforme aux normes de sécurité en vigueur et qu'il est en parfait état de fonctionnement et d'entretien.<br>

			Le propriétaire garantit également qu'il dispose de tous les droits nécessaires pour mettre le chalet en location.<br>

			Le site s'engage à vérifier la conformité de l'annonce du propriétaire avec les réglementations en vigueur et à s'assurer de la qualité du bien mis en location.<br><br>
		
			<strong>Article 3 – Durée du contrat :</strong><br>
			Le présent contrat est conclu pour une durée indéterminée.<br><br>
		
			<strong>Article 4 – Rémunération :</strong><br>
			Le site perçoit une commission sur chaque location effectuée grâce à sa plateforme.<br>

			Le montant de cette commission est fixé à [x%] du montant total de la location.<br>

			Le site s'engage à reverser la commission au propriétaire dans un délai de 10 jours après la fin de la location.<br><br>
		
			<strong>Article 5 – Responsabilité :</strong><br>
			Le propriétaire est responsable de tous les dommages causés par le chalet et doit être en mesure de fournir une attestation d'assurance responsabilité civile couvrant les risques liés à la location saisonnière.<br>

			Le site ne pourra être tenu responsable de tout dommage, direct ou indirect, causé par le chalet ou par le propriétaire.<br><br>
		
			
			<strong>Article 6 – Confidentialité :</strong><br>
			Les parties s'engagent à respecter la confidentialité des informations échangées dans le cadre du présent contrat.<br><br>
		
			<strong>Article 7 – Résiliation :</strong><br>
			Le présent contrat pourra être résilié à tout moment par l'une ou l'autre des parties moyennant un préavis de 30 jours par lettre recommandée avec accusé de réception.<br><br>
		
			<strong>Article 8 – Loi applicable et juridiction compétente :</strong><br>
			Le présent contrat est soumis à la loi française.<br>
			Tout litige relatif à l'interprétation ou à l'exécution du présent contrat sera de la compétence exclusive des tribunaux français.<br><br>

		
			Fait en deux exemplaires à <strong>[ville]</strong>, le <strong>[$date].</strong><br><br><br><br><br>
	
	<strong>Signature du propriétaire</strong><br>
	
	
	
		<strong>Le Site : [signature]</strong><br>

		



		


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
