<?php
$task_id = strip_tags($_POST['id']);
require ['connect.php'];
$mysqil = new mysqlii('localhost','root','root','twodo');
if ($result = $mysqli->query("DELETE FROM tasks WHERE id='task_id'")){
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

