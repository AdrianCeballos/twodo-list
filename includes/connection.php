<?php
$mysquil = new mysqli('localhost','root','root','twodo');
if ($mysquil -> connect_error){
    die('Connect Error (' . $mysquil-> connect_errno.')'
            .$mysquil->connect_error);
    
}else{
    echo "Connection made";
}
$mysquil->close();

