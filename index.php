<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Twodo-list</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"</link> 
    </head>
    <body>
        <div class = "wrap">
            <div class ="task-list">
                <ul>
                    <?php require("includes/connection.php");
                    ?>
                </ul>
            </div>
            <form class="add-new-task" autocomplete="off">
            <input type="text" name="new-task" placeholder="Add new item..."/>
            </form>
        </div>
        
    </body>
</html>
