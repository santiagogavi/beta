<?php
 require('../../config/db_connection.php');

 $email= $_POST['email'];
 $pass = $_POST['passwd'];
 $enc_pass = md5($pass);

 //validate if email already  exists

$query = "select * from users where email = '$email'";
$result = pg_query($conn,$query);
 

 $row = pg_fetch_array($result);
 if($row) {
    echo "<script>alert('email_already_exists')</script>";
    header('refresh:0; url=http://127.0.0.1/beta/api/src/register_form.html');
    exit();
 }

 $query = "insert into users (email,password) 
 VALUES ('$email', '$enc_pass')";
 $result = pg_query($conn, $query);
 if($result) {
    echo "<script>alert('registration_success')</script>";
    header('refresh:0; url=http://127.0.0.1/beta/api/src/login_form.html');
 } else {
     echo " registration failed";
 }
 pg_close($conn);


?>