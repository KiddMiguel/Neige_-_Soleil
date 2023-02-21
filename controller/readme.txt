Ce script SQL crée une base de données nommée "neige_soleil" contenant plusieurs tables liées entre elles. 
Voici une brève description de chaque table :

1- user : 
stocke les informations des utilisateurs, notamment leur identifiant.

2- appartement : 
stocke les informations des appartements tels que leur prix, leur intitulé, leur ville, leur adresse, leur type et leur superficie. 
Cette table contient également des informations sur le nombre de chambres, de cuisines, de salons, de salles de bain et de pièces pour
chaque appartement, ainsi que l'identifiant de l'utilisateur qui possède l'appartement.

3- equipement_appart : 
stocke les informations sur les équipements disponibles dans chaque appartement, tels que leur intitulé, leur nombre et leur prix.

4- demande : 
stocke les informations sur les demandes de réservation pour chaque appartement, y compris l'identifiant de l'utilisateur qui a effectué 
la demande et l'identifiant de l'appartement concerné.

5- contrat : 
stocke les informations sur les contrats de location pour chaque appartement, y compris la date de début et la date de fin du contrat, ainsi que 
l'identifiant de l'utilisateur et de l'appartement associé.

6- materiel_proprio : 
stocke les informations sur les équipements que les propriétaires mettent à disposition des locataires, tels que leur intitulé, leur nombre et leur prix. 
Cette table contient également l'identifiant de l'utilisateur propriétaire et l'identifiant de l'appartement concerné.

7- reservation : 
stocke les informations sur les réservations en cours pour chaque appartement, y compris la date de début et la date de fin de la réservation, 
le prix de la réservation et le nombre de personnes concernées. Cette table contient également les identifiants de l'utilisateur, de l'appartement et 
du matériel de propriétaire concernés.

8- locataire : 
stocke les informations sur les locataires, y compris leur nom, prénom, adresse e-mail et adresse, ainsi que le nombre de réservations qu'ils ont effectuées. 
Cette table contient également l'identifiant de l'utilisateur et de l'appartement concerné.

9- proprietaire : 
stocke les informations sur les propriétaires, y compris leur nom, prénom, adresse e-mail et adresse, ainsi que l'identifiant de l'utilisateur associé. 
Cette table contient également l'identifiant du contrat et de l'appartement concerné.