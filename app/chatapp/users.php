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
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  include './php/index.php';
  $uni = $_SESSION['unique_id'];
?>
<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '$uni'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
                    <img src="../logo_data/<?php echo $logo; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
                        <p><?php echo $row['status_']; ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select a Student or a Class to send E-mail</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i>search</button>
            </div>
            <div class="users-list">

            </div>
        </section>
    </div>

    <script src="javascript/users.js"></script>

</body>

</html>