<?php
require 'config.php';

if(isset($_POST['forgot'])){
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $newpass = $_POST['newpassword'];
    $confirmpass = $_POST['confirmpassword'];

    $sql = "UPDATE `account` set password='$newpass' where email = '$email' ";

    $result = mysqli_query($conn,$sql);

    if ($result) {
      /* echo '<script type = "text/javascript">';
       echo 'alert("Password Updated. You can login")';
       echo '</script>';*/
       header("Location: ../HTML/forgot.html");
    }

}
?>
