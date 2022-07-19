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
?><?php require 'index_php.php';
include('phpqrcode/qrlib.php');
// delete previous qrcode
// $dir = 'qrcode_saved';
// array_map('unlink', glob("{$dir}*.png"));

// function for appreciation

function appreciation(float $value): string
{
    if ($value >= 18) {
        return "Excellent";
        # code...
    } elseif ($value < 18 and $value >= 16) {
        return "Very good";
        # code...
    } elseif ($value < 16 and $value >= 14) {
        return "Good";
        # code...
    } elseif ($value < 14 and $value > 11) {
        return "Quite well";
        # code...
    } elseif ($value == 10 or $value == 1) {
        return "Passable";
    } elseif ($value < 10 and $value >= 8) {
        return "Insufficient";
        # code...
    } elseif ($value < 8 and $value >= 5) {
        return "Poor";
        # code...
    } else {
        return "Very Poor";
    }
}

?>
<?php
if (isset($_POST['print_note'])) {
    $code_classe = base64_decode($_GET['ktsp']);
    $trnmae = $_POST['trnmae'];
    $code_exams1 = $_POST['s1'];
    $query = mysqli_query($database, "SELECT * FROM examen WHERE code_examen = '{$code_exams1}' ");
    $result = mysqli_fetch_assoc($query);
    $nom_exams1 = $result['nom_examen'];
    $code_exams2 = $_POST['s2'];
    $query = mysqli_query($database, "SELECT * FROM examen WHERE code_examen = '{$code_exams2}' ");
    $result = mysqli_fetch_assoc($query);
    $nom_exams2 = $result['nom_examen'];
    $id_niveau = $_POST['id_niveau'];
    $query = mysqli_query($database, "SELECT * FROM niveau WHERE id = '{$id_niveau}' ");
    $result = mysqli_fetch_assoc($query);
    $nom_niveau = $result['nom_niveau'];


    // code...
} else {
    header("Location: classe.php");
}

?>


<?php
$query = mysqli_query($database, "SELECT * FROM classe WHERE code_classe = '$code_classe' and id_niveau =  '$id_niveau' AND matricule_etablissement = '$matricule_etablissement' AND date_academique = '$date_academique' ");
while ($result = mysqli_fetch_assoc($query)) {
    $nom_classe = $result['nom_classe'];
    $query_1 = mysqli_query($database, "SELECT * FROM apprenant WHERE code_classe = '$code_classe' AND matricule_etablissement = '$matricule_etablissement' AND date_academique = '$date_academique' order by nom_apprenant ");
    while ($result_1 = mysqli_fetch_assoc($query_1)) {
        $matricule_apprenant = addslashes($result_1['matricule_apprenant']);
        $nom_apprenant = $result_1['nom_apprenant'];
        $prenom_apprenant = $result_1['prenom_apprenant'];
        $adresse = $result_1['adresse'];
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="author" content="carleii Dev">
    <title>Notes Reports | <?php echo $nom_classe . " " . $nom_niveau; ?></title>
    <style type="text/css">
    @media print {
        footer {
            page-break-after: always;
        }
    }
    </style>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static  "
    data-layout="dark-layout" style="background-color: #FFF; color:black">

    <style>
    span {
        color: black !important;
    }
    </style>

    <!-- BEGIN: Content-->
    <!-- user profile heading section start -->
    <div class="" style="margin-top: 100px;">
        <div class="">
            <div class="row">
                <div class="col-1">
                    <div class="user-profile-images">
                        <img src="logo_data/<?php echo "$logo" ?>" style="margin-left: 50px;"
                            class="user-profile-image rounded" alt="school logo" height="50" width="90">
                    </div>
                </div>
                <div class="col-11">
                    <center>
                        <span style="font-size : 21px">
                            <h2><b><?php echo strtoupper($nom_etablissement); ?></b></h2>
                        </span>
                        <span style="font-size : 13px">
                            <h5> <b> <?php echo strtoupper($nom_etablissement); ?> </b></h5>
                        </span>
                    </center>
                </div>

            </div>
            <hr>
            <center>
                <h3 style="border: 1px solid;"><b><?php echo $retVal = ($statut == 1) ? "BULLETIN DE NOTES / REPORT CARD" : "RELEVE DE NOTES / STUDENT
                        ACADEMIC RECORD"; ?></b></h3>
                <h4><b><?php echo $trnmae ?></b></h4>
            </center>

            <div class="row">
                <div class="col-8">
                    <center>
                        <div class="media d-flex align-items-center mb-1">
                            <span class="float-right" style="margin-left: 60px">
                                <strong> ANNEE ACADEMIQUE / ACADEMIC YEAR</strong>
                            </span>
                            <div class="media-body ml-1">
                                <h6 class="media-heading mb-0" style="text-align:justify;">
                                    <?php echo $date_academique; ?></< /h6>
                            </div>
                        </div>
                        <div class="media d-flex align-items-center mb-1">
                            <span class="float-right" style="margin-left: 60px">
                                <strong>NOM ET PRENOM (S) (FIRST AND LAST NAME)</strong>
                            </span>
                            <div class="media-body ml-1">
                                <h6 class="media-heading mb-0" style="text-align:justify;">
                                    <?php echo strtoupper($nom_apprenant . "  " . $prenom_apprenant); ?></h6>
                            </div>
                        </div>
                        <div class="media d-flex align-items-center mb-1">
                            <span class="float-right" style="margin-left: 60px">
                                <strong>DATE ET LIEU DE NAISSANCE (DATE AND PLACE OF BIRTH)</strong>
                            </span>
                            <div class="media-body ml-1">
                                <h6 class="media-heading mb-0" style="text-align:justify;"><?php echo $adresse; ?></h6>
                            </div>
                        </div>
                        <div class="media d-flex align-items-center mb-1">
                            <span class="float-right" style="margin-left: 60px">
                                <strong><?php echo $retVal = ($statut == 1) ? "CLASSE (CLASS)" : "SPECIALITE (SPECIALITY)"; ?></strong>
                            </span>
                            <div class="media-body ml-1">
                                <h6 class="media-heading mb-0" style="text-align:justify;"><?php echo $nom_classe; ?>
                                </h6>
                            </div>
                        </div>
                        <div class="media d-flex align-items-center mb-1">
                            <span class="float-right" style="margin-left: 60px">
                                <strong><?php echo $retVal = ($statut == 1) ? "SECTION (SECTION)" : "NIVEAU (LEVEL)"; ?></strong>
                            </span>
                            <div class="media-body ml-1">
                                <h6 class="media-heading mb-0" style="text-align:justify; "><?php echo $nom_niveau; ?>
                                </h6>
                            </div>
                        </div>

                        <div class="media d-flex align-items-center mb-1">
                            <span class="float-right" style="margin-left: 60px">
                                <strong> MATRICULE (REGISTRATION NUMBER)</strong>
                            </span>
                            <div class="media-body ml-1">
                                <h6 class="media-heading mb-0" style="text-align:justify;">
                                    <?php echo $matricule_apprenant; ?></h6>
                            </div>
                        </div>

                    </center>


                </div>
                <div class="col-4">
                    <?php
                            // how to save PNG codes to server

                            $tempDir = "qrcode_saved/";

                            $codeContents = $matricule_apprenant;
                            // we need to generate filename somehow,
                            // with md5 or with database ID used to obtains $codeContents...
                            $fileName = base64_encode($codeContents) . '.png';
                            $realcontent = $web."/app/qrcode_saved/".$fileName;
                            // $fileName = uniqid() . base64_encode($codeContents) . '.png';
                            $pngAbsoluteFilePath = $tempDir . $fileName;
                            $urlRelativeFilePath = $tempDir . $fileName;

                            // generating
                            if (!file_exists($pngAbsoluteFilePath)) {
                                QRcode::png($realcontent, $pngAbsoluteFilePath, "Q");
                            }

                            // displaying
                            echo '<img height="200" width="200" src="' . $urlRelativeFilePath . '" />';
                            ?>
                </div>
            </div>
            <section id="headers">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table-bordered" width="100%">
                                            <thead>
                                                <tr>
                                                    <th colspan="9" style="justify-content: center;">
                                                        <center><?php echo strtoupper($trnmae) ?></center>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: center;" rowspan="3">Sujets / <br> subjects
                                                    </th>
                                                    <th style="text-align: center;" colspan="3">
                                                        <?php echo $nom_exams1; ?> </th>
                                                    <th style="text-align: center;" colspan="3">
                                                        <?php echo $nom_exams2; ?></th>
                                                    <th style="text-align: center;" rowspan="3">Moyenne / <br> Average
                                                    </th>
                                                    <th style="text-align: center;" rowspan="3">Observations</th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: center;" colspan="3">50%</th>
                                                    <th style="text-align: center;" colspan="3">50%</th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align: center;">NOTE</th>
                                                    <th style="text-align: center;">CREDIT/COEF</th>
                                                    <th style="text-align: center;">TOTAL</th>
                                                    <th style="text-align: center;">NOTE</th>
                                                    <th style="text-align: center;">CREDIT/COEF</th>
                                                    <th style="text-align: center;">TOTAL</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $somme_de_cours = 0;
                                                        $somme_de_credit = 0;
                                                        $somme_notes1 = 0;
                                                        $somme_notes2 = 0;
                                                        $sommme_credit = 0;
                                                        $note_trimestre = 0;
                                                        $query0 = mysqli_query($database, "SELECT * FROM discipline_classe WHERE code_classe = '$code_classe' AND matricule_etablissement = '$matricule_etablissement' AND date_academique = '$date_academique' ");
                                                        while ($result0 = mysqli_fetch_assoc($query0)) {
                                                            $code_discipline = addslashes($result0['code_discipline']);
                                                            if (1) {
                                                                //get the name
                                                                $querya = mysqli_query($database, "SELECT * FROM discipline WHERE code_discipline = '$code_discipline' AND matricule_etablissement = '$matricule_etablissement' AND date_academique = '$date_academique' ");
                                                                $resulta = mysqli_fetch_assoc($querya);
                                                                $nom_discipline = $resulta['nom_discipline'];
                                                                //get note controle continue
                                                                $query00 = mysqli_query($database, "SELECT * FROM note WHERE code_examen = '{$code_exams1}' AND code_discipline = '$code_discipline' AND matricule_apprenant = '$matricule_apprenant' AND matricule_etablissement = '$matricule_etablissement' AND date_academique = '$date_academique' ");
                                                                $result00 = mysqli_fetch_assoc($query00);
                                                                $notes1 = (isset($result00['note'])) ? $result00['note'] : 0;
                                                                //get note normalizer_normalize
                                                                $query000 = mysqli_query($database, "SELECT * FROM note WHERE code_examen = '{$code_exams2}' AND code_discipline = '$code_discipline' AND matricule_apprenant = '$matricule_apprenant' AND matricule_etablissement = '$matricule_etablissement' AND date_academique = '$date_academique' ");
                                                                $result000 = mysqli_fetch_assoc($query000);
                                                                $notes2 = (isset($result000['note'])) ? $result000['note'] : 0;
                                                                if ($notes1 == 0 and $notes2 == 0) {
                                                                    continue;
                                                                    # code...
                                                                }
                                                                $credit_discipline = $result0['heure'];
                                                                $somme_de_credit = $somme_de_credit + $credit_discipline;
                                                                $somme_de_cours++;
                                                                $somme_notes1 += $notes1;
                                                                $somme_notes2 += $notes2;
                                                                // note du trimestre de la discipline
                                                                $note_trimestre = ($notes1 + $notes2) / 2;

                                                ?>
                                                <tr>
                                                    <td style="text-transform: uppercase;">
                                                        <?php echo $nom_discipline; ?></td>

                                                    <td><?php echo $notes1; ?></td>
                                                    <td><?php echo $credit_discipline; ?></td>
                                                    <td><?php echo $notes1 * $credit_discipline ?></td>

                                                    <td><?php echo $notes2; ?></td>
                                                    <td><?php echo $credit_discipline; ?></td>
                                                    <td><?php echo $notes2 * $credit_discipline ?></td>
                                                    <td><?php echo $note_trimestre ?></td>
                                                    <td><?php echo appreciation($note_trimestre) ?></td>
                                                </tr>

                                                <?php

                                                            }
                                                            # code...
                                                            // code...
                                                        }
                                                        $moyenne_generale = (($somme_notes2/$somme_de_cours) + ($somme_notes1/$somme_de_cours))/2;
                                                        $moyenne_notes1 =$somme_notes1/$somme_de_cours;
                                                        $moyenne_notes2 =$somme_notes2/$somme_de_cours;
                                                        ?>
                                                <tr style="background-color: grey;">
                                                    <td style="text-transform: uppercase;">
                                                        TOTAL
                                                    </td>

                                                    <td><?php echo $moyenne_notes1 ?></td>
                                                    <td><?php echo $somme_de_credit ?></td>
                                                    <td><?php echo ($somme_notes1/$somme_de_cours)*$somme_de_credit ?>
                                                    </td>

                                                    <td><?php echo $moyenne_notes2 ?></td>
                                                    <td><?php echo $somme_de_credit ?></td>
                                                    <td><?php echo ($somme_notes2/$somme_de_cours)*$somme_de_credit ?>
                                                    </td>
                                                    <td><?php echo $moyenne_generale; ?>
                                                    </td>
                                                    <td><?php echo appreciation($moyenne_generale) ?>
                                                    </td>

                                                </tr>
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th style="text-align: center;">Sujets / <br> subjects</th>
                                                    <th style="text-align: center;" colspan="3">
                                                        <?php echo $nom_exams1; ?> </th>
                                                    <th style="text-align: center;" colspan="3">
                                                        <?php echo $nom_exams2; ?></th>
                                                    <th style="text-align: center;">Moyenne / <br> Average </th>
                                                    <th style="text-align: center;">Observations</th>
                                                </tr>
                                            </tfoot>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Complex headers table -->
            <div class="row" style="position: fixed; bottom:0; width:100%">
                <hr>
                <div class="col-1">
                    <div class="user-profile-images">
                        <img src="logo_data/<?php echo "$logo" ?>" style="margin-left: 50px;"
                            class="user-profile-image rounded" alt="user profile image" height="57" width="50">
                    </div>
                </div>
                <div class="col-11">
                    <center>
                        <span style="font-size: 20px;">
                            <h6 style="color : red"><b><i><?php echo htmlspecialchars_decode ($slogan) ?></i></b></h6>
                        </span>
                        <span style="font-size: 20px;">
                            <h6><b><i><?php echo htmlspecialchars_decode ($location) ?></i>
                                    <!-- Campus de Douala / Village, face PICASO --></i></b></h6>

                        </span>
                        <span style="font : cursive 20px">
                            <h6><b><i> Email: <i><?php echo "$email_s "?> telephone :<strong><?php echo $tel ?> web
                                                : </strong><?php echo $web ?> <strong>
                                                .</strong></i></b></h6>
                        </span> <br>
                        <small><strong> <a href="http://scolaricx.lescigales.org"> Made by scolaricx</a>
                            </strong></small>

                    </center>
                </div>

            </div>


        </div>
    </div>
    <p style="page-break-after: always;"></p>

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>

<?php
        // code...
    }
    ?>


<?php
    // code...
}
?>
<script type="text/javascript">
window.print();
</script>