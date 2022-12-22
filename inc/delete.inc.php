<?php

    include "db.inc.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM list WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            header("Location: ../index.php?delete=success");
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>