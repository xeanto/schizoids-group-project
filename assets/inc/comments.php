<?php
include('/home/iste240t51/Sites/pinclude/dbCon.php');
$sql = "SELECT * FROM comments";
$results = $mysqli->query($sql)->fetch_all();
foreach ($results as $result) {
    echo $result;
}
$mysqli->close();
?>
