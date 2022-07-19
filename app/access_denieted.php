?>
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
?><div class="swal2-container swal2-center swal2-fade swal2-shown" style="overflow-y: auto;">
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
            <div id="swal2-content" style="display: block;">You don't have access to this operation</div>
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