<?php include "config/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php  include "views/head.php";  ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Decode Blog</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/comps/blogs.css">
    <link rel="stylesheet" href="css/comps/categs.css">
    <link rel="stylesheet" href="css/comps/nav.css">
</head>
<body>

    <?php include "views/header.php";?>
    

    <div class="container">
        
        <div class="topic">
            <h1>Мои блоги</h1>
            <a href="<?=$BASE_URL ?>/newBlog.php">Новый блог</a>    
        </div>  




        <div class="blog">

            <img src="img/image 1.png" alt="">
            <div class="blog-edit">
                <h3>Обзор Report Manager от Webix</h3>
                <span>Еще</span>
                <div class="oh">
                    <p>Редактировать</p>
                    <p style="color: red;">Удалить</p>
                </div>
            </div>
            <p>Осень 2020 года стала плодотворным временем для специалистов Webix. 
                <br>
                Команда Webix выпустила восьмую версию библиотеки пользовательского интерфейса Webix с двумя новыми комплексными виджетами. Первый - зто Scheduler, о котором мы подробно говорили ранее. Второй виджет - это Gantt chart в JavaScript. Подробную информацию об этом виджете Вы можете найти в статье. 
                <br>
                Ноябрь продолжает тенденцию, и мы спешим поделиться с Вами новым комплексным виджетом Report Manager. Давайте рассмотрим ег</p>
        
        
            <div class="blog-info">
                <div class="blog-info--date">
                    <img src="img/calendar.png" alt="">
                    26.06.2020
                </div>
                <div class="blog-info--views">
                    <img src="img/eye.png" alt="">
                    21
                </div>
                <div class="blog-info--comments">
                    <img src="img/Shape.png" alt="">
                    4
                </div>
                <!-- <div class="blog-info--topic"></div> -->
                <div class="blog-info--author">
                    <img src="img/author.png" alt="">
                    Nast1289
                </div>

            </div>
        
        </div>

        

        <div class="blog">

            <img src="img/image 1.png" alt="">
            <h3>Обзор Report Manager от Webix</h3>
            <p>Осень 2020 года стала плодотворным временем для специалистов Webix. 
                <br>
                Команда Webix выпустила восьмую версию библиотеки пользовательского интерфейса Webix с двумя новыми комплексными виджетами. Первый - зто Scheduler, о котором мы подробно говорили ранее. Второй виджет - это Gantt chart в JavaScript. Подробную информацию об этом виджете Вы можете найти в статье. 
                <br>
                Ноябрь продолжает тенденцию, и мы спешим поделиться с Вами новым комплексным виджетом Report Manager. Давайте рассмотрим ег</p>
        
        
            <div class="blog-info">
                <div class="blog-info--date">
                    <img src="img/calendar.png" alt="">
                    26.06.2020
                </div>
                <div class="blog-info--views">
                    <img src="img/eye.png" alt="">
                    21
                </div>
                <div class="blog-info--comments">
                    <img src="img/Shape.png" alt="">
                    4
                </div>
                <!-- <div class="blog-info--topic"></div> -->
                <div class="blog-info--author">
                    <img src="img/author.png" alt="">
                    Nast1289
                </div>

            </div>
        
        </div>

        
        <?php
                $query = mysqli_query($con, "SELECT * FROM blogs");

                if( mysqli_num_rows($query) > 0 ){
                    while($row = mysqli_fetch_assoc($query) ){

                    
        ?>
        <!-- Getting blog posts -->
        <div class="blog">
            <img src="img/image 1.png" alt="">
            <h3> <?= $row["title"]  // these are php ?>   </h3>
            <p>  <?= $row["description"] // these are php ?> </p>
            <div class="blog-info">

                <div class="blog-info--date">
                    <img src="img/calendar.png" alt="">
                    <?= $row["date"] // these are php ?> 
                </div>
                <div class="blog-info--views">
                    <img src="img/eye.png" alt="">
                    21
                </div>
                <div class="blog-info--comments">
                    <img src="img/Shape.png" alt="">
                    4
                </div>
                <!-- <div class="blog-info--topic"></div> -->
                <div class="blog-info--author">
                    <img src="img/author.png" alt="">
                    Nast1289
                </div>

            </div>
            
        </div>
        <?php 
                    }
                }else{ 
        ?>        
            <h5>No blogs yet!</h5>  
        <?php 
                } 
        ?>        

    </div>

    <section class="categories">
        <img src="img/avatar.png" alt="">
        <h4>Елнур Сеитжанов</h4>
        <p>В основном пишу про веб-разработку на React & Redux </p>
        <p>285 постов за все время</p>

        <button>  <!-- maybe should use a -->
            Редактировать  
        </button>
    </section>
</body>
</html>