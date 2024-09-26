<?php
/**postgresSQLdatabase conectiom
 * devealoper santi
 */

$host = "localhost";
$port = "5432";
$dbname = "beta";
$user = "postgres";
$password = "unicesmag";

$data_connection = "
host = $host
port  = $port
dbname = $dbname
user = $user
password = $password


";

$conn = pg_connect($data_connection);

if (!$conn){
die("connection failed: ". pg_last_error());

}else{

    echo "Connected successfully";
 }
pg_close($conn);
?>
