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
            include 'view/header_auth.php';
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
                    <div>
                        <img src="<?php echo $BASE_URL.$row["img"];?>" alt="">
                    </div>
                    <p class="id" style="display: none;"><?=$row["id"]?></p>
                    <p><?=$row["name"]?></p>
                    <p><?=$row["make"]?></p>
                    <p><?=$row["cost"]."$"?></p>
                    <button class="addButton">+</button>
                    <a href="<?=$BASE_URL?>/product.php?id=<?=$row["id"]?>">More</a>
                </div>
            
            <?php
                }
            }else{
                echo "No products are available";
            }
            ?>
        </div>

        
    </section>

    
    <script src="script/basket.js"></script>
</body>
</html>