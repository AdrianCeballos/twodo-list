<?php
$mysqli = new mysqli('localhost','root','root','twodo');
if ($mysqli -> connect_error){
    die('Connect Error (' . $mysqli-> connect_errno.')'
            .$mysquil->connect_error);
    
}else{
    echo "Connection made";
}
$mysqli->close();

