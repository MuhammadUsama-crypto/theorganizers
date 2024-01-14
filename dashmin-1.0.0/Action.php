<?php 
include 'config.php';
if($_REQUEST['destination_id']){
    $id = $_REQUEST['destination_id'];
    $sql = "DELETE FROM `destintion` WHERE `destintion`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addDestination.php");
}
if($_REQUEST['city_id']){
    $id = $_REQUEST['city_id'];
    $sql = "DELETE FROM `city` WHERE `city`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addCity.php");
}
if($_REQUEST['hotel_id']){
    $id = $_REQUEST['hotel_id'];
    $sql = "DELETE FROM `hotel` WHERE `hotel`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addHotel.php");
}
if($_REQUEST['room_id']){
    $id = $_REQUEST['room_id'];
    $sql = "DELETE FROM `room` WHERE `room`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addRoom.php");
}


?>