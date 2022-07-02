<?php
/**
 * scolaricx
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2002 - 2022, Personnal project
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	scolaricx
 * @author	carelii dev
 * @copyright	Copyright (c) 2020 - 2022, Carleii, Inc. (https://github.com/carleii)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://scolaricx.com
 * @since	Version 1.0.0
 * @filesource
 */

?>

<?php
$start = microtime(true);

require 'envi.php';
require 'classe_package.php';
require 'database_connection.php';
// VERIFY IF THE COOKIE EXIST EITHER GO TO THE LOGIN PAGE
$last_view = date("r");
// UPDATE AFTER DONATION
if (isset($_GET['ktsiuytfghjkajchgajkcahgcankcaycgahjckjahcajcacakc'])) {
	$newdate = date("Y") + 1;
	$query = mysqli_query($database, "UPDATE etablissement SET date_creation = '$newdate' WHERE matricule_etablissement = '$matricule_etablissement' ");
}

if (!isset($_COOKIE['user_cookie'])) {
	header("Location: auth-login.php");
	exit();
	# code...
} else {
	// IF THE COOKIE EXIST WE EXTEND THE DURATION
	$cookie = $_COOKIE['user_cookie'];
	setcookie("user_cookie", $cookie, time() + 60 * 60);
	$tab = explode("µ", $cookie);
	$matricule_user = addslashes($tab[0]);
	$tab_1 = explode("£", $tab[1]);
	$matricule_etablissement = addslashes($tab_1[0]);
	$query = mysqli_query($database, "SELECT * FROM etablissement WHERE matricule_etablissement = '$matricule_etablissement' ");
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
	$query = mysqli_query($database, "SELECT * FROM utilisateur WHERE matricule_utlisateur = '$matricule_user' ");
	$result = mysqli_fetch_assoc($query);
	$name = $result["nom_utilisateur"] . ' ' . $result['prenom_utilisateur'];
	$email = $result['email_utilisateur'];

	//SETTING THE WHOLE USER
	$role = $result["role"];
	if ($role == "admin") {
		$user = new admin;
	} elseif ($role == "headmaster") {
		$user = new headmaster;
		# code...
	} elseif ($role == "secretary") {
		$user = new secretary;
		# code...
	} elseif ($role == "teacher") {
		$user = new teacher;
		# code...
	} elseif ($role == "comptable") {
		$user = new comptable;
		// code...
	}
}