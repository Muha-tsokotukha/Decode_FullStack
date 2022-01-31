<?php 
    include "../../config/base_url.php";
    include "../../config/db.php";
    if( isset($_GET["id"]) ){
        $id = $_GET["id"];

        $query = "DELETE FROM smartphones WHERE `id`=$id";

        $action = mysqli_query($con, $query);
        header("Location: $BASE_URL/profile.php");
    }
    header("Location: $BASE_URL/profile.php");

?>