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
    require '../../function.php';
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = $_POST['incoming_id'];
        $message =mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ('$incoming_id', '$outgoing_id', '$message')") or die();
            #check if it is a class then send the message to each student
            $query = mysqli_query($conn, "SELECT * FROM classe WHERE code_classe = '$incoming_id'");
            if (mysqli_num_rows($query)==1) {
                $query = mysqli_query($conn, "SELECT * FROM apprenant WHERE code_classe = '$incoming_id' ");
                while ($result = mysqli_fetch_assoc($query)) {
                    $incoming_id = $result['matricule_apprenant'];
                    $email = $result['telephone'];
                    $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ('$incoming_id', '$outgoing_id', '$message')") or die();
                    send_message($email, $message, "MESSAGE FROM SCHOOL");
                    # code...
                }
                # code...
            }

            #check if it is for one student
            $query = mysqli_query($conn, "SELECT * FROM apprenant WHERE matricule_apprenant = '$incoming_id' ");
            if (mysqli_num_rows($query)==1) {
                $result = mysqli_fetch_assoc($query);
                $email = $result['telephone'];
                $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ('$incoming_id', '$outgoing_id', '$message')") or die();
                send_message($email, $message, "MESSAGE FROM SCHOOL");
                # code...
            }

            #check if it is for a staff
            $query = mysqli_query($conn, "SELECT * FROM utilisateur WHERE matricule_utilisateur = '$incoming_id' ");
            if (mysqli_num_rows($query)==1) {
                $result = mysqli_fetch_assoc($query);
                $email = $result['email_utilisateur'];
                $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ('$incoming_id', '$outgoing_id', '$message')") or die();
                send_message($email, $message, "MESSAGE FROM SCHOOL");
                # code...
            }

            
        }
    }else{
        header("location: ../login.php");
    }


    
?>