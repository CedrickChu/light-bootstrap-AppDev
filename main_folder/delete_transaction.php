<?php

include "db_conn.php";


if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM transaction WHERE id = '$id'";
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Transaction record with ID: " . $row['id'] . " has been successfully Deleted!');";
        echo "window.location.href = 'transaction.php';</script>";
    } else {
    echo 'ERROR: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>