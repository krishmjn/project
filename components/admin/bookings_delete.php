<?php
include './navbar.php';
include './connection.php';

if (isset($_GET['deleteid'])) {
    $key = $_GET['deleteid'];
    $sql = "DELETE FROM `bookings` WHERE booking_id='$key'";
    $data = mysqli_query($conn, $sql);
    if ($data) {
        echo "Deleted";
        header("location:./bookings.php");
    } else {
        die("Connection failed " . mysqli_connect_error());
    }
}

?>