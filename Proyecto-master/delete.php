<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<?php
//conexion a la bd
include("connection.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM publicacion WHERE id=$id");
 
//redirecting to the display page (view.php in our case)
header("Location:view.php");
?>