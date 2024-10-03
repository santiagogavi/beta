<?php
 require('../../config/db_connection.php');

 $email= $_POST['email'];
 $pass = $_POST['passwd'];
 $enc_pass = md5($pass);

 $query = "insert into users (email,password) 
 VALUES ('$email', '$enc_pass')";

 $result = pg_query($conn, $query);

 if($result) {
     echo "registration successfully";
 } else {
     echo " registration failed";
 }
 pg_close($conn);


?>