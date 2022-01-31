<?php 
    include "../../config/base_url.php";
    include "../../config/db.php";
    if( isset($_POST["name"]) && strlen($_POST["name"]) > 0 && 
    isset($_POST["make"]) && strlen($_POST["make"]) > 0 &&
    isset($_POST["cost"]) && strlen($_POST["cost"]) > 0  ){
        
        $name = $_POST["name"];
        $make = $_POST["make"];
        $cost = $_POST["cost"];


        if(isset($_FILES["image"]) && isset($_FILES["image"]["name"]) && strlen($_FILES["image"]["name"]) > 0) {
            $ext = end(explode(".",$_FILES["image"]["name"]));
            $image_name = time().".".$ext;
            move_uploaded_file($_FILES["image"]["tmp_name"],"../../img/products/$image_name" );

            
            $path = "/img/products/".$image_name ;

            $query = "INSERT INTO smartphones (name,make,cost, img) VALUES(?,?,?,?)";

            $prep = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($prep,"ssis", $name, $make,$cost,$path);
            mysqli_stmt_execute($prep);
        }
        else{
            $query = "INSERT INTO smartphones (name,make,cost) VALUES(?,?,?)";

            $prep = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($prep, "ssi",$name, $make, $cost);
            mysqli_stmt_execute($prep);

        }
        
        header("Location: $BASE_URL/profile.php");
    }
    header("Location: $BASE_URL/profile.php");

?>