<?php
$task = strip_tags($_POST['task']);
$date = date('Y-m-d');
$time = date("H:i:s");

include ('connect.php');
$mysquil = new mysqli('localhost','root','root','twodo');
$mysquil -> query("INSET INTO tasks VALUES ('', '$task' , '$date', '$time')");
$query = "SELECT * FROM tasks WHERE task = '$task' and date='$date' and time='$time'";

if ($result = $mysqil->query($query)){
    while ($row = $result->fetch_assoc()){
        $task_id= $row['task'];
        $task_name = $row['task'];
    }
}
$mysqil->close();
echo '<li><span>'.$task_name.'</span><img id = ""'.$task_id.'"" class="dele-button" width=10px" src="images/close.svg"/></li>'; 