<?php
include_once 'connection.php';
$sql = "DELETE FROM sportevent WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header("Location: Delete.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>