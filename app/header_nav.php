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
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-dark">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ficon bx bx-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                                data-toggle="tooltip" data-placement="top" title="Email"><i
                                    class="ficon bx bx-envelope"></i></a></li> -->
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="./chat.php"
                                data-toggle="tooltip" data-placement="top" title="Chat"><i
                                    class="ficon bx bx-chat"></i></a></li>
                        <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link" href="./dashboard-analytics.php"
                                data-toggle="tooltip" data-placement="top" title="Todo"><i
                                    class="ficon bx bx-check-circle"></i></a></li> -->
                        <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html"
                                data-toggle="tooltip" data-placement="top" title="Calendar"><i
                                    class="ficon bx bx-calendar-alt"></i></a></li> -->
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                    class="ficon bx bx-star warning"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Scolaricx..."
                                    tabindex="0" data-search="template-search">
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span>
                        </a>
                        <!-- <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <a class="dropdown-item" href="#" data-language="en">
                                    <i class="flag-icon flag-icon-us mr-50"></i> English
                                </a>
                                <a class="dropdown-item" href="#" data-language="fr">
                                    <i class="flag-icon flag-icon-fr mr-50"></i> French
                                </a>
                                <a class="dropdown-item" href="#" data-language="de">
                                    <i class="flag-icon flag-icon-de mr-50"></i> German
                                </a>
                                <a class="dropdown-item" href="#" data-language="pt">
                                    <i class="flag-icon flag-icon-pt mr-50"></i> Portuguese
                                </a></div> -->
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" disabled type="text" placeholder="Explore Scolaricx..." tabindex="-1"
                                data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span
                                    class="user-name"><?php echo $name; ?></span><span
                                    class="user-status text-muted"><?php echo $date_academique ?></span></div><span><img
                                    class="round" src="logo_data/<?php echo $logo; ?>" alt="avatar" height="40"
                                    width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            <div class="dropdown-divider mb-0"></div><a class="dropdown-item"
                                href="auth-login.php?ktsp=discon"><i class="bx bx-power-off mr-50"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>