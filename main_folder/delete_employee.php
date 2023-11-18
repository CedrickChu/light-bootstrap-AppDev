<?php

include "db_conn.php";


if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM employee WHERE id = '$id'";
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Employee record with ID: " . $row['id'] . " has been successfully Deleted!');";
        echo "window.location.href = 'employee.php';</script>";
    } else {
    echo 'ERROR: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>