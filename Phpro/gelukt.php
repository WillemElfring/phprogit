<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 24-1-2017
 * Time: 14:54
 */

$mysqli = new mysqli("localhost", "root", "", "ed");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$id=$_REQUEST['id'];
$iban=$_REQUEST['iban'];
$gucci=$_REQUEST['iban'];

$link_address = '../login.html';



$iban = filter_var($_POST['iban'], FILTER_SANITIZE_STRING);
$iban = sha1( $iban );
$sql = "UPDATE phpro_users SET phpro_iban='$iban' WHERE phpro_user_id='$id'";

if (mysqli_query($mysqli, $sql)) {
    echo "<h1 id='gelukt'> item is veranderd </h1>";
    echo $gucci;
    echo "<a href='login.html'>Log op nieuw in</a>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);