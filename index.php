
<html>
    <head>
        <meta charset="UTF-8">
        <title>Twodo-list</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"</link> 
        <link rel="stylesheet" type="text/css" href="css/normalize.css"</link>
        <link rel="stylesheet" type="text/css" href="css/reset.css"</link> 
    </head>
    <body>
        <div class = "wrap">
            <a href ="view/login-form.php">Login</a>
            <a href ="view/register-form.php">Register</a>
            <a href ="controller/logout-user.php">Log out</a>
            <div class ="task-list">
                <ul>
                    <?php
                    require_once(__DIR__ . "/controller/login-verify.php");
                    require_once(__DIR__ . "/view/header.php");
                    if (authenticateUser()) {
                        require_once(__DIR__ . "/view/navigation.php");
                    }
                    require_once(__DIR__ . "/controller/create-db.php");
                    require_once(__DIR__ . "/view/footer.php");
                    require("includes/connect.php");
                    $mysqli = new mysqli('localhost', 'root', 'root', 'twodo');
                    $query = "SELECT = FROM tasks ORDER BY date ASC, time ASC";
                    if ($result = $mysqli->query($query)) {
                        $numrows = $result->num_rows;
                        if ($numrows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $task_id = $row['id'];
                                $task_name = $row['task'];
                                echo '<li>
                                <span>' . $task_name . '</span>
                                  <img id="' . task_id . '" class="delete-button" width = "10px" src="images/close.svg"/>
                                </li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <form class="add-new-task" autocomplete="off">
                <input type="text" name="new-task" placeholder="Add new item..."/>
            </form>
        </div>

    </body>
    
</html>
