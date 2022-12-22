<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>To-Do List</title>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://kit.fontawesome.com/1e938fdd74.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="container">
            <div class="alignment">
                <h1>To-Do List</h1>
            </div>
            <div class="form">
                <form action="inc/dataEntry.inc.php" method="POST">
                    <input type="text" name="task" value="" placeholder="Enter a task" class="search-bar" required/>
                    <input type="submit" name="submit" value="Submit" class="submit-btn"/>
                </form>
            </div>

            <div class="msg-box">
                <div class="close-box">
                    <i class="fa-sharp fa-solid fa-circle-xmark mark"></i>
                </div>
                    <div class="content">
                        <h3>Add Task</h3>
                            <div class="formBox">
                                <form action="inc/dataEntry.inc.php" method="POST">                            
                                    <input type="text" name="task" placeholder="Enter a task" class="text" required/>
                                    <input type="submit" name="submit" value="Submit" class="btn"/>
                                </form>
                            </div>
                    </div>  
            </div>
            <div class="dataBox">
                <?php
                    include "inc/db.inc.php";
                    $sql = "SELECT * FROM list";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="data"><tr><td>' . 'Task: ' . $row['todo'] . ' <br/> ' . 'Date: ' . $row['date'] . '</td></tr><a class="iconBlack" href="inc/delete.inc.php?id=' . $row["id"] . '">Delete</a></div>' . '<br/>';
                        }
                    }else{
                        echo '<div class="data"><tr><td>No Result Found!</td></tr></div>' . '<br/>';
                    }
                ?>
                </div>

            <i class="fa-solid fa-circle-plus icon"></i>
        </div>
        <script src="js/main.js"></script>
    </body>
</html>