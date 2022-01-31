<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "config/base_url.php";
        include "config/db.php";
        include "view/head.php";
    ?>
    <title>Admin</title>
</head>
<body>
    <section class="container">
        Add
        <form action="<?=$BASE_URL?>/api/admin/add.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" >
            <input type="text" name="make" >
            <input type="text" name="cost" >
            <input type="file" name="image">
            <button type="submit">Сохранить</button>    
        </form>
        <hr>
        Update
        <form action="<?=$BASE_URL?>/api/admin/update.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="id" >
            <input type="text" name="name" >
            <input type="text" name="make" >
            <input type="text" name="cost" >
            <input type="file" name="image">
            <button type="submit">Сохранить</button>    
        </form>
        <hr>
        

    </section>
</body>
</html>