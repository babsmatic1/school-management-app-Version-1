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
?><?php include 'index_php.php'; ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Teacher | <?php echo "$nom_etablissement"; ?></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/sweetalert2.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-email.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- ADD Teacher TREATMENT -->
<?php
if (isset($_POST['add_teacher'])) {
    if ($role == "admin" or $role == "headmaster") {
        $first_name = get_safe_input ($_POST['first_name']);
        $last_name = get_safe_input ($_POST['last_name']);
        $telephone = get_safe_input ($_POST['telephone']);
        $email = get_safe_input ($_POST['email']);
        $adresse = get_safe_input ($_POST['adresse']);
        $disponibilite = get_safe_input ($_POST['disponibilite']);
        $result = $user->add_teacher($first_name, $last_name, $telephone, $email, $adresse, $disponibilite, $matricule_etablissement, $date_academique);
        switch ($result) {
            case 0: ?>
<div class="swal2-container swal2-center swal2-fade swal2-shown" style="overflow-y: auto;">
    <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show"
        tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
        <div class="swal2-header">
            <ul class="swal2-progresssteps" style="display: none;"></ul>
            <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;">
                <span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span>
                    <span class="swal2-x-mark-line-right"></span></span>
            </div>
            <div class="swal2-icon swal2-question" style="display: none;">
                <span class="swal2-icon-text">?</span>
            </div>
            <div class="swal2-icon swal2-warning" style="display: none;">
                <span class="swal2-icon-text">!</span>
            </div>
            <div class="swal2-icon swal2-info" style="display: none;">
                <span class="swal2-icon-text">i</span>
            </div>
            <div class="swal2-icon swal2-success" style="display: none;">
                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                <span class="swal2-success-line-tip"></span>
                <span class="swal2-success-line-long"></span>
                <div class="swal2-success-ring"></div>
                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
            </div>
            <img class="swal2-image" style="display: none;">
            <h2 class="swal2-title" id="swal2-title" style="display: flex;">Oops...</h2>
            <button type="button" class="swal2-close" style="display: none;">×</button>
        </div>
        <div class="swal2-content">
            <div id="swal2-content" style="display: block;">
                <?php echo $first_name . ' have not been added, verify the the encoding or the email adress is already used'; ?>
            </div>
            <input class="swal2-input" style="display: none;">
            <input type="file" class="swal2-file" style="display: none;">
            <div class="swal2-range" style="display: none;">
                <input type="range"><output></output>
            </div>
            <select class="swal2-select" style="display: none;"></select>
            <div class="swal2-radio" style="display: none;"></div>
            <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox">
                <span class="swal2-label"></span>
            </label>
            <textarea class="swal2-textarea" style="display: none;"></textarea>
            <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
        </div>
        <div class="swal2-actions" style="display: flex;">
            <a href=""><button type="button" class="swal2-confirm btn btn-primary" aria-label="">ok</button></a>
        </div>
        <div class="swal2-footer" style="display: flex;"><a href="">Why do I have this issue?</a></div>
    </div>
</div>
<?php
                # code...
                break;
            case 1:
                # code...
                break;

            default:
                # code...
                break;
        }
        # code...
    } else {
        include 'access_denieted.php';
    }
    # code...
}
?>
<!-- DELETE Teacher TREATMENT -->
<?php
if (isset($_POST['delete_teacher'])) {
    if ($role == "admin" or $role == "headmaster") {
        $teacher_matri = $_POST['delete_teacher'];
        $result = $user->delete_teacher($teacher_matri, $matricule_etablissement, $date_academique);
        switch ($result) {
            case 1: ?>
<div class="swal2-container swal2-center swal2-fade swal2-shown" style="overflow-y: auto;">
    <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show"
        tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
        <div class="swal2-content">
            <div id="swal2-content" style="display: block;"><?php echo 'The teacher have been deleted'; ?></div>
            <input class="swal2-input" style="display: none;">
            <input type="file" class="swal2-file" style="display: none;">
            <div class="swal2-range" style="display: none;">
                <input type="range"><output></output>
            </div>
            <select class="swal2-select" style="display: none;"></select>
            <div class="swal2-radio" style="display: none;"></div>
            <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox">
                <span class="swal2-label"></span>
            </label>
            <textarea class="swal2-textarea" style="display: none;"></textarea>
            <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
        </div>
        <div class="swal2-actions" style="display: flex;">
            <a href=""><button type="button" class="swal2-confirm btn btn-success" aria-label="">ok</button></a>
        </div>
    </div>
</div>

<?php
                # code...
                break;
            case 0: ?>
<div class="swal2-container swal2-center swal2-fade swal2-shown" style="overflow-y: auto;">
    <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show"
        tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
        <div class="swal2-header">
            <ul class="swal2-progresssteps" style="display: none;"></ul>
            <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;">
                <span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span>
                    <span class="swal2-x-mark-line-right"></span></span>
            </div>
            <div class="swal2-icon swal2-question" style="display: none;">
                <span class="swal2-icon-text">?</span>
            </div>
            <div class="swal2-icon swal2-warning" style="display: none;">
                <span class="swal2-icon-text">!</span>
            </div>
            <div class="swal2-icon swal2-info" style="display: none;">
                <span class="swal2-icon-text">i</span>
            </div>
            <div class="swal2-icon swal2-success" style="display: none;">
                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                <span class="swal2-success-line-tip"></span>
                <span class="swal2-success-line-long"></span>
                <div class="swal2-success-ring"></div>
                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
            </div>
            <img class="swal2-image" style="display: none;">
            <h2 class="swal2-title" id="swal2-title" style="display: flex;">Oops...</h2>
            <button type="button" class="swal2-close" style="display: none;">×</button>
        </div>
        <div class="swal2-content">
            <div id="swal2-content" style="display: block;">
                <?php echo 'The teacher have not been deleted.. try after few minutes'; ?></div>
            <input class="swal2-input" style="display: none;">
            <input type="file" class="swal2-file" style="display: none;">
            <div class="swal2-range" style="display: none;">
                <input type="range"><output></output>
            </div>
            <select class="swal2-select" style="display: none;"></select>
            <div class="swal2-radio" style="display: none;"></div>
            <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox">
                <span class="swal2-label"></span>
            </label>
            <textarea class="swal2-textarea" style="display: none;"></textarea>
            <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
        </div>
        <div class="swal2-actions" style="display: flex;">
            <a href=""><button type="button" class="swal2-confirm btn btn-primary" aria-label="">ok</button></a>
        </div>
        <div class="swal2-footer" style="display: flex;"><a href="">Why do I have this issue?</a></div>
    </div>
</div>
<?php
                # code...
                break;

            default:
                # code...
                break;
        }
        # code...
    } else {
        include 'access_denieted.php';
    }
    # code...
}
?>

<?php
if (isset($_POST['csv_upload'])) {
    $file = $_FILES['csv_file']['tmp_name'];
    $ext = explode(".", $_FILES['csv_file']['name']);
    $handle = fopen($file, "r");
    $i = 0;
    if ($ext[1] == "csv") {
        while (($cont = fgetcsv($handle, 1000, ";")) !== false) {
            if ($i == 0) {
                $i++;
                continue;
            }
            $result = $user->add_teacher(get_safe_input ($cont[2]), get_safe_input ($cont[1]), get_safe_input ($cont[3]), get_safe_input ($cont[4]), get_safe_input ($cont[5]), get_safe_input ($cont[6]), $matricule_etablissement, $date_academique);
            if ($result == 1) {
                //NOTIFICATION PAR MAIL
                # code...
            }
            $i++;
            # code...
        }

        # code...
    } else {
    ?>
<script type="text/javascript" language="javascript">
alert("Fatal error: incorrect file format \n Download the template and use it.");
</script>

<?php
        # code...
    }
    # code...
}

?>

<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern dark-layout content-left-sidebar email-application navbar-sticky footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <!-- INCLUDING THE HEADER NAVBAR -->
    <?php include 'header_nav.php'; ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include 'main_nav.php'; ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content email-app-sidebar d-flex">
                        <!-- sidebar close icon -->
                        <span class="sidebar-close-icon">
                            <i class="bx bx-x"></i>
                        </span>
                        <!-- sidebar close icon -->
                        <div class="email-app-menu">
                            <div class="form-group form-group-compose">
                                <!-- compose button  -->
                                <button type="button" class="btn btn-primary btn-block my-2 compose-btn">
                                    <i class="bx bx-plus"></i>
                                    Add New Teacher
                                </button>

                                <!-- compose button  -->
                                <button type="button" class="btn btn-warning btn-block my-2">
                                    <a href="template/teacher.csv" download=""> Download the template
                                    </a>
                                </button>
                                <small>do not modify the header</small>

                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-group mt-2">
                                        <div class="custom-file">
                                            <input type="file" required class="custom-file-input" name="csv_file"
                                                accept="csv" id="emailAttach">
                                            <label class="custom-file-label" for="emailAttach">Attach File</label>
                                        </div>
                                    </div>
                                    <button type="submit" name="csv_upload"
                                        onclick="alert(' Wait while data are loading....' ); "
                                        class=" btn btn-success btn-block my-2">
                                        Upload file's data
                                    </button>

                                </form>

                            </div>
                            <div class="sidebar-menu-list">

                                <!-- sidebar label start -->
                                <label class="sidebar-label">Labels</label>
                                <div class="list-group list-group-labels ">
                                    <a href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center">
                                        Ready to be used
                                        <span class="bullet bullet-success bullet-sm"></span>
                                    </a>
                                    <a href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center">
                                        Work
                                        <span class="bullet bullet-primary bullet-sm"></span>
                                    </a>
                                    <a href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center">
                                        Not ready
                                        <span class="bullet bullet-warning bullet-sm"></span>
                                    </a>
                                    <a href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center">
                                        Must be deleted
                                        <span class="bullet bullet-danger bullet-sm"></span>
                                    </a>
                                    <a href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center">
                                        Safe
                                        <span class="bullet bullet-info bullet-sm"></span>
                                    </a>
                                </div>
                                <!-- sidebar label end -->
                            </div>
                        </div>
                    </div>
                    <!-- User new mail right area -->
                    <div class="compose-new-mail-sidebar">
                        <div class="card shadow-none quill-wrapper p-0">
                            <div class="card-header">
                                <h3 class="card-title" id="emailCompose">New Teacher</h3>
                                <button type="button" class="close close-icon">
                                    <i class="bx bx-x"></i>
                                </button>
                            </div>
                            <!-- form start -->
                            <form action="#" id="compose-form" method="post" enctype="multipart/form-data">
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="form-group pb-50">
                                            <label for="emailfrom">from</label>
                                            <input type="text" id="emailfrom" class="form-control"
                                                placeholder="<?php echo $name . ' ' . $nom_etablissement; ?>" disabled>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" name="first_name" required class="form-control"
                                                placeholder="First name">
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" name="last_name" class="form-control"
                                                placeholder="Last name">
                                        </div>
                                        <div class="form-label-group">
                                            <input type="tel" name="telephone" class="form-control"
                                                placeholder="telephone">
                                        </div>
                                        <div class="form-label-group">
                                            <input type="email" name="email" class="form-control" placeholder="email">
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" name="adresse" class="form-control"
                                                placeholder="Address">
                                        </div>
                                        <div class="form-label-group">
                                            <textarea name="disponibilite" class="form-control"
                                                placeholder="Disponibility">
                                                Disponibility
                                            </textarea>
                                        </div>
                                        <!-- <div class="form-label-group">
                                            <input type="text" id="emailSubject" class="form-control" placeholder="Subject">
                                            <label for="emailSubject">Subject</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" id="emailCC" class="form-control" placeholder="CC">
                                            <label for="emailCC">CC</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" id="emailBCC" class="form-control" placeholder="BCC">
                                            <label for="emailBCC">BCC</label>
                                        </div> -->
                                        <!-- Compose mail Quill editor -->
                                        <!--  <div class="snow-container border rounded p-50 ">
                                            <div class="compose-editor mx-75"></div>
                                            <div class="d-flex justify-content-end">
                                                <div class="compose-quill-toolbar pb-0">
                                                    <span class="ql-formats mr-0">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-link"></button>
                                                        <button class="ql-image"></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group mt-2">
                                            <div class="custom-file">
                                                <input type="file" name="level_file" class="custom-file-input" id="emailAttach" accept="csv">
                                                <label class="custom-file-label" for="emailAttach">Add with csv file</label>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end pt-0">
                                    <!--  <button type="submit" name="add_file" class="btn btn-light-secondary cancel-btn mr-1">
                                        <i class='bx bx-x mr-25'></i>
                                        <span class="d-sm-inline d-none">Send the file</span>
                                    </button> -->
                                    <button type="submit" name="add_teacher" class="btn-send btn btn-primary">
                                        <i class='bx bx-send mr-25'></i> <span class="d-sm-inline d-none">Add the
                                            Teacher</span>
                                    </button>
                                </div>
                            </form>
                            <!-- form start end-->
                        </div>
                    </div>
                    <!--/ User Chat profile right area -->
                </div>
            </div>
            <div class="content-right">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <!-- email app overlay -->
                        <div class="app-content-overlay"></div>
                        <div class="email-app-area">
                            <!-- Email list Area -->
                            <div class="email-app-list-wrapper">
                                <div class="email-app-list">
                                    <form action="" method="post">
                                        <div class="email-action">
                                            <!-- action left start here -->
                                            <div class="action-left d-flex align-items-center">
                                                <!-- select All checkbox -->
                                                <div class="checkbox checkbox-shadow checkbox-sm selectAll mr-50">
                                                    <input type="checkbox" name="all_check" id="checkboxsmall">
                                                    <label for="checkboxsmall"></label>
                                                </div>
                                            </div>
                                            <!-- action left end here -->

                                            <!-- action right start here -->
                                            <div
                                                class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                                <!-- search bar  -->
                                                <div class="email-fixed-search flex-grow-1">
                                                    <div class="sidebar-toggle d-block d-lg-none">
                                                        <i class="bx bx-menu"></i>
                                                    </div>
                                                    <fieldset class="form-group position-relative has-icon-left m-0">
                                                        <input type="text" class="form-control" id="email-search"
                                                            placeholder="Search ">
                                                        <div class="form-control-position">
                                                            <i class="bx bx-search"></i>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <!-- pagination and page count -->
                                                <span class="d-none d-sm-block">1-10 of 653</span>
                                                <button class="btn btn-icon email-pagination-prev d-none d-sm-block">
                                                    <i class="bx bx-chevron-left"></i>
                                                </button>
                                                <button class="btn btn-icon email-pagination-next d-none d-sm-block">
                                                    <i class="bx bx-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- / action right -->

                                        <!-- email user list start -->
                                        <div class="email-user-list list-group">
                                            <ul class="users-list-wrapper media-list">
                                                <!-- SORTING THE Matter -->
                                                <?php
                                                $query = mysqli_query($database, "SELECT * FROM enseignant WHERE matricule_etablissement = '$matricule_etablissement' and date_academique = '$date_academique' ");
                                                while ($result = mysqli_fetch_assoc($query)) { ?>
                                                <li class="media mail-read">
                                                    <div class="user-action">
                                                        <div class="checkbox-con mr-25">
                                                            <div class="checkbox checkbox-shadow checkbox-sm">
                                                                <input type="checkbox"
                                                                    name="<?php echo 'checkboxsmall' . $result['id']; ?>"
                                                                    id="checkboxsmall<?php echo $result['id']; ?>">
                                                                <label
                                                                    for="checkboxsmall<?php echo $result['id']; ?>"></label>
                                                            </div>
                                                        </div>
                                                        <a
                                                            href="teacher_profile.php?ktsp=<?php echo base64_encode($result['id']) ?>">
                                                            <button type="button" class="btn btn-icon action-icon">
                                                                <span class="fonticon-wrap">
                                                                    <i class="bx bxs-left-top-arrow-circle"></i>
                                                                    </i>
                                                                </span>
                                                            </button>
                                                        </a>
                                                        <span class="favorite warning">
                                                            <i class="bx bxs-star"></i>
                                                        </span>
                                                    </div>
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <a
                                                                href="teacher_profile.php?ktsp=<?php echo base64_encode($result['id']) ?>">
                                                                <img src="logo_data/<?php echo "$logo"; ?>" alt="">

                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <a
                                                                    href="teacher_profile.php?ktsp=<?php echo base64_encode($result['id']) ?>">
                                                                    <span
                                                                        class="list-group-item-text text-truncate"><?php echo $result['nom_enseignant'] . ' ' . $result['prenom_enseignant']; ?></span>
                                                                </a>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date">###</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <p class="list-group-item-text truncate mb-0">
                                                                <?php echo $nom_etablissement . ' ' . $date_academique; ?><br>
                                                                <i>Disponibility :
                                                                </i><?php echo $result['disponibilite']; ?>
                                                            </p>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <button type="submit" name="delete_teacher"
                                                                        value="<?php echo $result['matricule_enseignant']; ?>"
                                                                        class="btn btn-icon action-icon">
                                                                        <span class="fonticon-wrap">
                                                                            <i class="livicon-evo"
                                                                                data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                                            </i>
                                                                        </span>
                                                                    </button>
                                                                    <span
                                                                        class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>



                                                <?php
                                                    # code...
                                                }
                                                ?>
                                            </ul>
                                            <!-- email user list end -->

                                            <!-- no result when nothing to show on list -->
                                            <div class="no-results">
                                                <i class="bx bx-error-circle font-large-2"></i>
                                                <h5>No Items Found</h5>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--/ Email list Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- demo chat-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include 'footer.php'; ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-email.js"></script>
    <script src="app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html><?="Execution time: ".round(microtime(true)- $start, 3);?>