<?php
require_once 'connect.php';
require 'fuctions.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    
    <title>Сводная таблица фильтров</title>
</head>

<body>
    <div class="container">
       <?php require_once 'header.php'; ?>
        <form action="" method="post">
            <legend>Выбрать категорию</legend>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="name">
                    <?php makeSelect(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Посмотреть</button>
        </form>
<hr>
    </div>
    <div class="container-fluid">
            <div class="row align-items-start">
            <?php selectedCategory(); ?>
             </div>
          


</body>

</html>