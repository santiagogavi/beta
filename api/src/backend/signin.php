<?php
//db connection
require('../../config/db_connection.php');

    //get data from login form

    $email= $_POST['email'];
    $pass = $_POST['passwd'];
    $enc_pass = md5($pass);

    
$query = "select * from users where email = '$email' and password = '$enc_pass'";
$result = pg_query($conn,$query);
 $row = pg_fetch_assoc($result);

if ($row) {
    header ('refresh:0; url=http://127.0.0.1/beta/api/src/home.php');
}else{
   echo"<script>alert('invalid email or password!');</script>";
   header('refresh:0; url=http://127.0.0.1/beta/api/src/login_form.html');
 }
 pg_close($conn);
?>
