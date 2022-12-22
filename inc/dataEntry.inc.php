<?php

    include "db.inc.php";

    if (isset($_POST['submit'])) {
        $task = $_POST['task'];

        $sql = "SELECT * FROM list WHERE todo = '$task'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        header("Location: ../index.php?error=Task already exists in the List!");
    } else {
            $sql = "INSERT INTO list (todo) VALUES ('$task')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("location: ../index.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
?>