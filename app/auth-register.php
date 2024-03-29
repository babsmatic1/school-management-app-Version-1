<?php 
// * scolaricx
//  *
//  * An open source application development framework for PHP
//  *
//  * This content is released under the MIT License (MIT)
//  *
//  * Copyright (c) 2002 - 2022, Personnal project
//  *
//  * Permission is hereby granted, free of charge, to any person obtaining a copy
//  * of this software and associated documentation files (the "Software"), to deal
//  * in the Software without restriction, including without limitation the rights
//  * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
//  * copies of the Software, and to permit persons to whom the Software is
//  * furnished to do so, subject to the following conditions:
//  *
//  * The above copyright notice and this permission notice shall be included in
//  * all copies or substantial portions of the Software.
//  *
//  * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
//  * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
//  * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
//  * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
//  * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
//  * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
//  * THE SOFTWARE.
//  *
//  * @package	scolaricx
//  * @author	carelii dev
//  * @copyright	Copyright (c) 2020 - 2022, Carleii, Inc. (https://github.com/carleii)
//  * @license	http://opensource.org/licenses/MIT	MIT License
//  * @link	http://scolaricx.lescigales.org/
//  * @since	Version 1.0.0
//  * @filesource
//  */
?><?php
require 'function.php';

$start = microtime(true);
// getcache("registerview.php");

?>
<?php
require 'classe_package.php';
include 'database_connection.php'; 

?>
<?php


if (isset($_POST["register"])) {
    $nom = get_safe_input($_POST["nom"]);
    $prenom = get_safe_input($_POST["prenom"]);
    $tel = get_safe_input($_POST["tel"]);
    $email = get_safe_input($_POST["email"]);
    $password = get_safe_input (base64_encode($_POST["password"]));
    $user = new user;
    //CHECKING FOR DATABASE
    $result = $user->user_regist($nom, $prenom, $email, $tel, $password);
    switch ($result) {
        case 0:

?>
<div id="toast-container" class="toast-container toast-top-right">
    <div class="toast toast-info" aria-live="assertive" style="display: block; opacity: 0.732461;">
        <div class="toast-progress" style="width: 0%;"></div>
        <div class="toast-title">Info</div>
        <div class="toast-message">User already exist or there is a problem with your email address</div>
    </div>
</div>
<?php
            # code...
            break;
        case 1:
            //ENVOI DE MAIL POUR VALIDER LE COMPTE

            //CREATION DE L'ETABLISSEMENT
            $body = "hello here: happy welcom to scolaricx v1 ";
            send_message($email, $body, "welcome", "Scolaricx");
            $email = base64_encode($email);
            header("Location: auth-register-school.php?kpjsc=$email");
            # code...
            break;

        default:
            trigger_error($result);
            # code...
            break;
    }
    # code...
}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php
    //  CHECK IF ONE SCHOOL ALREADY EXIST
    // $query = mysqli_query($database, "SELECT * FROM etablissement WHERE 1 ");
    // if (mysqli_num_rows($query) >= 1) {
    // echo "<meta http-equiv=\"refresh\" content=\"1; url=./auth-login.php\">";
    //   # code...
    // }

    ?>
    <title>Register | <?php include 'site_title.php'; ?></title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
</head>

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern dark-layout 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- register section starts -->
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- register section left -->
                                <div class="col-md-6 col-12 px-0">
                                    <div
                                        class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center mb-2">Sign Up</h4>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p> <small> Please enter your details to sign up and be part of our great
                                                    community</small>
                                            </p>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form method="post">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 mb-50">
                                                            <label for="inputfirstname4">first name</label>
                                                            <input type="text" class="form-control" name="nom" required
                                                                id="inputfirstname4" placeholder="First name"
                                                                title="Entrez votre nom sans caractere speciaux">
                                                        </div>
                                                        <div class="form-group col-md-6 mb-50">
                                                            <label for="inputlastname4">last name</label>
                                                            <input type="text" class="form-control" name="prenom"
                                                                required id="inputlastname4" placeholder="Last name"
                                                                title="Entrez votre Prenom sans caractere speciaux">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputUsername1">Phone
                                                            number</label>
                                                        <input type="tel" class="form-control" name="tel" required
                                                            id="exampleInputUsername1" placeholder="Phone number"
                                                            title="Entrez votre numero de telephone mobile sans caractere speciaux">
                                                    </div>
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600"
                                                            for="exampleInputEmail1">Email</label>
                                                        <input type="email" class="form-control" name="email" required
                                                            id="exampleInputEmail1" placeholder="Email"
                                                            title="Là il faut votre adresse email">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="text-bold-600"
                                                            for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" name="password"
                                                            required id="exampleInputPassword1" placeholder="Password"
                                                            title="Un mot de passe Epic">
                                                    </div>
                                                    <button type="submit" name="register"
                                                        class="btn btn-primary glow position-relative w-100">SIGN UP<i
                                                            id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                </form>
                                                <hr>
                                                <div class="text-center"><small class="mr-25">Already have an
                                                        account?</small><a href="auth-login.php"><small>Sign in</small>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- image section right -->
                                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                    <img class="img-fluid" src="app-assets/images/pages/register.png"
                                        alt="branding logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <iframe src="./online.html" width="900px" frameborder="0" style="overflow:hidden"
                        scrolling="no"></iframe>
                </section>
                <!-- register section endss -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/extensions/toastr.js"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>
<?="Execution time: ".round(microtime(true)- $start, 3);?>