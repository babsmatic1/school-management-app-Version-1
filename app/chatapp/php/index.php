	<?php
    // IF THE COOKIE EXIST WE EXTEND THE DURATION
	$cookie = $_COOKIE['user_cookie'];
	$tab = explode("µ", $cookie);
	$matricule_user = addslashes($tab[0]);
	$tab_1 = explode("£", $tab[1]);
	$matricule_etablissement = addslashes($tab_1[0]);
	$query = mysqli_query($conn, "SELECT * FROM etablissement WHERE matricule_etablissement = '$matricule_etablissement' ");
	$result = mysqli_fetch_assoc($query);
	$logo = $result['logo'];
	$statut = $result['statut'];
	$slogan = $result['slogan'];
	$location = $result['location'];
	$email_s = $result['email'];
	$tel = $result['tel'];
	$director = $result['director'];
	$web = $result['web'];
	$date_creation = $result['date_creation'];
	$nom_etablissement = $result['nom_etablissement'];
	$date_academique = $tab_1[1];
	$query = mysqli_query($conn, "SELECT * FROM utilisateur WHERE matricule_utlisateur = '$matricule_user' ");
	$result = mysqli_fetch_assoc($query);
	$name = $result["nom_utilisateur"] . ' ' . $result['prenom_utilisateur'];
	$email = $result['email_utilisateur'];
	?>