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
<iframe src="./online.html" width="900px" frameborder="0"></iframe>
<?php

if (date("Y") == $date_creation +1) {
?>
<footer class="footer footer-static footer-dark">
    <p class="clearfix mb-0">
        <span class="float-left d-inline-block"><?php echo date("Y") ?> &copy; </span>
        <span class="float-right d-sm-inline-block d-none">
            <a class="text-uppercase" onclick="alert('Mailing.. \n You are going to send a mail to the administrator')"
                href="mailto:devcarle@gmail.com" target="_blank">
                <h1>NEED UPDATES.. CONTACT ADMINISTRATOR</h1>
            </a>
        </span>
        <span class="float-right d-sm-inline-block d-none">
            <a class="text-uppercase"
                onclick="alert('Redirection..\n you are going to be redirected to Mesomb to achieve your Donation after you will automatically bring back here.')"
                href="https://s.htr.cm/KH4d" onclick="alert('You will be redirected to the donation page..thanks')"
                target="_blank">
                <h1>CLick-> make donation and continue your work</h1>
            </a>
        </span>

        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
</footer>
<?php
  exit();
  // code...
}
?>