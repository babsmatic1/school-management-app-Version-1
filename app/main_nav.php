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
?>
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
                    <div class="brand-logo"><img class="logo" src="app-assets/images/logo/logo.png" /></div>
                    <h6 class="brand-text mb-0"><?php echo $nom_etablissement; ?></h6> <br>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i
                        class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary"
                        data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <!-- <div class="shadow-bottom"></div> -->
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
            data-icon-style="lines">
            <li class=" navigation-header"><a href="index.php"><i class="bx bx-right-arrow-alt"></i><span
                        class="menu-title" data-i18n="Dashboard">Dashboard</span><span
                        class="badge badge-light-danger badge-pill badge-round float-right mr-2">5</span></a>
                <ul class="menu-content">
                    <li class="active"><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="GESTION SCOLAIRE">DOCUMENTATION</span></a>
                        <ul class="menu-content">
                            <li><a href="./documentation/" target="_blanck">DOCUMENTATION PAGE</a></li>
                            <!-- <?php
                            if ($role == "admin") {
                            ?>
                            <li><a href="documentation/administrateur.pdf" target="_blanck">DOCUMENTATION ADMIN</a></li>
                            <li><a href="documentation/headmaster.pdf" target="_blanck">DOCUMENTATION HEADMASTER</a>
                            </li>
                            <li><a href="documentation/teacher.pdf" target="_blanck">DOCUMENTATION TEACHER</a></li>
                            <li><a href="documentation/comptable.pdf" target="_blanck">DOCUMENTATION ACCOUNTANT</a>
                            </li>




                            <?php
                                # code...
                            } elseif ($role == "headmaster") {
                            ?>
                            <li><a href="documentation/headmaster.pdf" target="_blanck">DOCUMENTATION</a></li>

                            <?php

                                # code...
                            } elseif ($role == "teacher") {
                            ?>
                            <li><a href="documentation/teacher.pdf" target="_blanck">DOCUMENTATION</a></li>

                            <?php

                                # code...
                            } elseif ($role == "comptable") {
                            ?>
                            <li> <a href="documentation/comptable.pdf" target="_blanck">DOCUMENTATION</a>
                            </li>

                            <?php

                                # code...
                            }
                            ?> -->
                        </ul>
                    </li>



                    <?php
                    if ($role == "admin") { ?>

                    <li class=""><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="GESTION SCOLAIRE">STAFF</span></a>
                        <ul class="menu-content">
                            <li><a href="page-users-list.php"><span class="menu-item"
                                        data-i18n="Liste des utilisateurs">List of users</span></a>
                            </li>
                            <li><a href="page-users-edit.php"><span class="menu-item"
                                        data-i18n="Ajouter un utilisateur">Add a new user</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class=""><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="GESTION SCOLAIRE">SCHOOL MANAGEMENT</span></a>
                        <ul class="menu-content">
                            <li><a href="management.php"><span class="menu-item" data-i18n="NOUVELLE SESSION">NEW
                                        ACADEMIC SESSION</span></a></li>
                            <!-- <li><a href="setting.php"><span class="menu-item" data-i18n="parametre">Settings</span></a></li> -->
                        </ul>
                    </li>

                    <?php
                    }
                    ?>
                    <?php
                    if ($role == 'comptable' or $role == "admin") { ?>
                    <li class=""><a href="comptable.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="COMPTABILITE">ACCOUNTANCY</span></a>
                    </li>
                    <?php
                        # code...
                    }
                    ?>
                    <!-- <li class=""><a href="dashboard-analytics.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li> -->
                </ul>
            </li>

            <li class="navigation-header"><span>Academic</span>
                <?php
                if (1) { ?>
            <li class="nav-item"><a href=""><i class="bx bx-right-arrow-alt"></i></i><span class="menu-title"
                        data-i18n="">Academic Admin</span><span
                        class="badge badge-light-danger badge-pill badge-round float-right mr-2">7</span></a>
                <ul class="menu-content">
                    <li class="active"></li>
                    <li><a href="student.php"> <i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="Analytics">STUDENTS</span></a>
                    </li>
                    <?php
                    if ($role == "admin" or $role == "headmaster" or $role == "secretary" or $role == "comptable") {
                    ?>
                    <li class=""><a href="classe.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="Analytics"><?php echo $retVal = ($statut == 1) ? "CLASS" : "SPECIALITY"; ?></span></a>
                    </li>

                    <?php
                        # code...
                    }

                    ?>
                    <?php
                    if ($role == "headmaster" or $role == "secretary" or $role == "admin") { ?>
                    <li><a href="level.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="eCommerce"><?php echo $retVal = ($statut == 1) ? "SECTION" : "LEVEL"; ?></span></a>
                    </li>
                    <li class=""><a href="matiere.php"><i class="bx bx-right-arrow-alt"></i></i><span class="menu-item"
                                data-i18n="Analytics">SUBJECTS</span></a>
                    </li>
                    <li class=""><a href="teacher.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="Analytics">TEACHER</span></a>
                    </li>
                    <li class=""><a href="room.php"><i class="bx bx-right-arrow-alt"></i></i><span class="menu-item"
                                data-i18n="Analytics">ROOMS</span></a>
                    </li>
                    <li class=""><a href="exam.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="Analytics">EXAM NOTES</span></a>
                    </li>
                    <li class=""><a href="report.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                data-i18n="Analytics">EXAM Average Result</span></a>
                    </li>
                    <!-- <li class=""><a href="bulletin.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Notes Reports</span></a>
                        </li> -->
                </ul>
            </li>
            <?php
                        # code...
                    }
                }
    ?>

        </ul>

    </div>
</div>