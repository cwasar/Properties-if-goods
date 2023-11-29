<?php
require_once 'connect.php';
require 'fuctions.php';

if($_POST['del-edit']){
    editCategory();
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Редактировать категорию</title>
</head>

<body>
    
    <div class="container">
    <?php require_once 'header.php'; ?>
        <form action="" method="post">
            <legend>Редактировать категорию</legend>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="name">
                    <?php makeSelect(); ?>
                </select>
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" name="del-edit">
                <label class="form-check-label" for="flexCheckDefault">
                    Удалить выбранную категорию
                </label>
            </div>
            
            <button type="submit" class="btn btn-primary">Внести изменения</button>
           
        </form><br>

        <?php 

        if($_POST['del-edit']){alert();} ?>



    </div>
</body>

</html>