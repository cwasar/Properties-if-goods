<?php
require_once 'connect.php';
require 'fuctions.php';


if ($_POST['name']) {
    addCategory();
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
    <title>Добавить категорию</title>
</head>

<body>
    
    <div class="container">
    <?php require_once 'header.php'; ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название категории</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name">
            </div>
            <div class="mb-3">
            <label for="select-props" class="form-label">Выбрать нужные свойства</label>
            <select class="form-select" multiple aria-label="multiple select example" name="props[]" id="select-props">
                    <?php getCategories(); ?>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form><br>
    <?php if ($_POST['name']) {alert(); }?>

    </div>

</body>

</html>