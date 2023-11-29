<?php
require_once 'connect.php';
require 'fuctions.php';


?>
<script language="JavaScript">
    setInterval(function() {
        document.title = document.title.substring(1) }, 400)
</script>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Добавить значения свойств</title>
</head>

<body>

    <div class="container">
        <?php require_once 'header.php'; ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="select-props" class="form-label">Выбрать нужные свойства</label>
                <select class="form-select" multiple aria-label="multiple select example" name="props[]" id="select-props">
                    <?php getCategories(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Значение свойства</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="new-value">
            </div>
            <button type="submit" class="btn btn-primary">Добавить свойство</button>
    </div>
    </form>
    <?php

    if ($_POST['props']) {
        getAllValues();
    }

    ?>
    </div>
</body>

</html>