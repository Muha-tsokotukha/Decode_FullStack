<!DOCTYPE html>
<html lang="en">
<head>
    <?php  include "views/head.php";  ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Blog</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/comps/nav.css">
    <link rel="stylesheet" href="css/comps/new_blog.css">
    
    
</head>
<body>

    <?php 
        include "views/header.php";
    ?>

    <section>

        <div class="container">  
            <form action="<?=$BASE_URL ?>/api/blog/add_blog.php" method="POST" >
                  
                <h1>Новый блог</h1>
                <input type="text" placeholder="Введите заголовок блога" name="title">
                <select name="" id="" >
                    <option value="" disabled selected>Выберите категорию</option>
                </select>
                <button>Выберите картинку   </button>
                <textarea name="description" id="" cols="30" rows="10">Введите описание блога</textarea>
                <button type="sumbit">Создать</button>
            
            </form>
        </div>
    </section>

</body>
</html>