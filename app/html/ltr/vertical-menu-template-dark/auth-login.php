<?php require 'classe_package.php';
 include 'database_connection.php';
 require_once 'function.php';

if (isset($_GET['ktsp'])) {
    // Suppression du cookie designPrefere
    setcookie('user_cookie');
    // Suppression de la valeur du tableau $_COOKIE
    unset($_COOKIE['user_cookie']);
    // code...
}


//VERIFY IF THE COOKIE EXIST EITHER GO TO HOME PAGE
if (isset($_COOKIE['user_cookie'])) {
    header("Location: index.php");
    # code...
}

$start = microtime(true);
getcache("loginview.php");
echo "Execution time: ".round(microtime(true)- $start, 3);
?>

