<?php include 'index_php.php'; ?>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Exam | <?php echo "$nom_etablissement" ?></title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-email.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout content-left-sidebar email-application navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="dark-layout">

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
                                    Add New Exam
                                </button>
                            </div>
                            <div class="sidebar-menu-list">
                                <!-- sidebar menu  -->
                                <!-- <div class="list-group list-group-messages">
                                    <a href="#" class="list-group-item pt-0 active" id="inbox-menu">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            <i class="livicon-evo" data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;">
                                            </i>
                                        </div>
                                        Inbox
                                        <span class="badge badge-light-primary badge-pill badge-round float-right mt-50">5</span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            <i class="livicon-evo" data-options="name: paper-plane.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                            </i>
                                        </div>
                                        Sent
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            <i class="livicon-evo" data-options="name: pen.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                            </i>
                                        </div> Draft
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            <i class="livicon-evo" data-options="name: star.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                            </i>
                                        </div>
                                        Starred
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            <i class="livicon-evo" data-options="name: info-alt.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                            </i>
                                        </div>
                                        Spam
                                        <span class="badge badge-light-danger badge-pill badge-round float-right mt-50">3</span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                            </i>
                                        </div>
                                        Trash
                                    </a>
                                </div> -->
                                <!-- sidebar menu  end-->

                                <!-- sidebar label start -->
                                <label class="sidebar-label">Labels</label>
                                <div class="list-group list-group-labels ">
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        Ready to be used
                                        <span class="bullet bullet-success bullet-sm"></span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        Work
                                        <span class="bullet bullet-primary bullet-sm"></span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        Not ready
                                        <span class="bullet bullet-warning bullet-sm"></span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        Must be deleted
                                        <span class="bullet bullet-danger bullet-sm"></span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
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
                                <h3 class="card-title" id="emailCompose">New Exam</h3>
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
                                            <input type="text" id="emailfrom" class="form-control" placeholder="<?php echo $name . ' ' . $nom_etablissement; ?>" disabled>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" name="exam_name" required class="form-control" placeholder="Name of the Exam">
                                        </div>
                                        <div class="form-label-group">
                                            <input type="date" required name="exam_period" class="form-control" placeholder="Exam period">
                                        </div>
                                        <div class="form-label-group">
                                            <input type="number" min="0" max="20" required name="note_val" class="form-control" placeholder="Note average to Success limit 20">
                                        </div>
                                        <div class="form-group mt-2">
                                            <!--   <div class="custom-file">
                                                <input type="file" name="level_file" class="custom-file-input" id="emailAttach" accept="csv">
                                                <label class="custom-file-label" for="emailAttach">Add with csv file</label>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end pt-0">
                                    <!--  <button type="submit" name="add_file" class="btn btn-light-secondary cancel-btn mr-1">
                                        <i class='bx bx-x mr-25'></i>
                                        <span class="d-sm-inline d-none">Send the file</span>
                                    </button> -->
                                    <button type="submit" name="add_exam" class="btn-send btn btn-primary">
                                        <i class='bx bx-send mr-25'></i> <span class="d-sm-inline d-none">Add the Exam</span>
                                    </button>
                                </div>
                                <div class="form-label-group">
                                    <i>Example:</i><br>
                                    <ul>
                                        <li>
                                            Controle continue
                                        </li>


                                        <li>
                                            Sequence 1
                                        </li>

                                    </ul>
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
                                            <div class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                                <!-- search bar  -->
                                                <div class="email-fixed-search flex-grow-1">
                                                    <div class="sidebar-toggle d-block d-lg-none">
                                                        <i class="bx bx-menu"></i>
                                                    </div>
                                                    <fieldset class="form-group position-relative has-icon-left m-0">
                                                        <input type="text" class="form-control" id="email-search" placeholder="Search ">
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
                                                <!-- SORTING THE LEVELS -->
                                                <?php
                                                $query = mysqli_query($database, "SELECT * FROM examen WHERE matricule_etablissement = '$matricule_etablissement' and date_academique = '$date_academique' ");
                                                while ($result = mysqli_fetch_assoc($query)) { ?>
                                                    <li class="media mail-read">
                                                        <div class="user-action">
                                                            <div class="checkbox-con mr-25">
                                                                <div class="checkbox checkbox-shadow checkbox-sm">
                                                                    <input type="checkbox" name="<?php echo 'checkboxsmall' . $result['code_examen']; ?>" id="checkboxsmall<?php echo $result['id']; ?>">
                                                                    <label for="checkboxsmall<?php echo $result['code_examen']; ?>"></label>
                                                                </div>
                                                            </div>
                                                            <a href="examen_profile.php?ktsp=<?php echo base64_encode($result['code_examen'])  ?>">
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
                                                                <img src="logo_data/<?php echo "$logo"; ?>" alt="avtar img holder">
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="user-details">
                                                                <div class="mail-items">
                                                                    <span class="list-group-item-text text-truncate"><?php echo $result['nom_examen']; ?></span>
                                                                </div>

                                                                <div class="mail-meta-item">
                                                                    <span class="float-right">
                                                                        <button type="submit" name="delete_exam" value="<?php echo $result['code_examen']; ?>" class="btn btn-icon action-icon">
                                                                            <span class="fonticon-wrap">
                                                                                <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                                                </i>
                                                                            </span>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mail-message">
                                                                <p class="list-group-item-text truncate mb-0"><?php echo $nom_etablissement . ' ' . $date_academique; ?>
                                                                </p>
                                                                <div class="mail-meta-item">
                                                                    <span class="float-right">
                                                                        <span class="bullet bullet-success bullet-sm"></span>
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

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include 'footer.php'; ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <script src="../../../app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-email.js"></script>
    <script src="../../../app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html><?="Execution time: ".round(microtime(true)- $start, 3);?>