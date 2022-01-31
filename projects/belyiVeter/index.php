<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'view/head.php'; 
        include 'config/base_url.php';
        include 'config/db.php';
    ?>

    <title>Белый Ветер</title>
</head>
<body>
    <section class="container">
        <?php 
            include 'view/header.php';
            include 'view/page.php';
        ?>


        
        
        <p style="font-size:large;color:gray;margin-top:50px;">Smartphones</p>
        <hr>
        <div class="products">

            <?php 

                $data = mysqli_query($con,"SELECT * FROM smartphones");
                if( mysqli_num_rows($data) > 0 ){
                    while($row = mysqli_fetch_assoc($data)){

            ?>
            
                <div class="products-item">
                    
                    <img src="<?php echo $BASE_URL.$row["img"];?>" alt="">
                    <p><?=$row["name"]?></p>
                    <p><?=$row["make"]?></p>
                    <p><?=$row["cost"]."$"?></p>
                    <button class="addButton">+</button>
                </div>
            
            <?php
                }
            }else{
                echo "No products are available";
            }
            ?>
        </div>


    </section>
</body>
</html>