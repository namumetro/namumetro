<?php
include_once ('../config.php');
$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST);

$encrypted_pass = hash("sha256", $wser_pass);

$q = "INSERT INTO ap_member ( id, pw, email ) VALUES ( '$user_id', '$encryped_pass', '$user_email' )";

$mysqli->query( $q);

$mysqli->close();

header("Location: http://mydomain.com/member/signup_done.php");

exit();
?> 
