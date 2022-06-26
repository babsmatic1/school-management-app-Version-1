<?php
$host = "localhost";
$user = "root";
$pssw = "";
try {
	$database = new mysqli($host, $user, $pssw, "scolaricxv1") or die("unable to connect");
} catch (Exception $e) {
	exit("database not foud");
}
