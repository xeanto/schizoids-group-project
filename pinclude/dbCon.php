<?php

    //mysqli(server, username, pass, db)
    $mysqli = new mysqli('localhost','iste240t51','yU6^97239%a3','iste240t51');
if( mysqli_connect_errno()) {
    echo 'connection failed: ' . mysqli_connect_error();
    exit();
}else{
    // echo 'connection good<br/>';
}
?>
