  
<?php
require 'connect.php';

function debug($data)
{
    echo '<pre>' . print_r($data) . '</pre>';
}


function makeSelect()
{
    global $db;
    $select = "SELECT * FROM `category`";
    $res = mysqli_query($db, $select);
    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
    
    foreach ($row as $item) {
        echo "
            <option value=\"{$item['id-props']}; {$item['name']}; {$item['id']}\">{$item['name']}</option>
        ";
    }
}

function selectedCategory()
{
    global $db;
    $sel = explode(";", $_POST['name']);
    $arr = explode(',', $sel[0]);
    if ($_POST['name']) {
        foreach ($arr as $i) {
            $select = "SELECT * FROM `$i`";
            $res = mysqli_query($db, $select);
            $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
            echo "<div class=\"col\"><ul class=\"list-group\"> <li class=\"my-list-header\"><b>{$row[0]['name']}</b></li>";
            foreach ($row as $item) {
                echo "<li class=\"my-list\">{$item['prop-name']}</li>";
            }
            echo "</ul></div>";
        }
    }
}

function getCategories()
{
    global $db;
    $select = "SHOW TABLES FROM `properties`";
    $res = mysqli_query($db, $select);
    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
    
    foreach ($row as $item) {
        if ($item["Tables_in_properties"] != 'category') {
            echo "
                <option value=\"{$item["Tables_in_properties"]}\">{$item["Tables_in_properties"]}</option>
 
            ";

        }
    }
}

function addCategory()
{
    global $db;
    $arrToStr = implode(",", $_POST['props']);
    $insert = "INSERT INTO `category`(`name`, `id-props`) VALUES ('{$_POST['name']}','{$arrToStr}')";
    mysqli_query($db, $insert);
}

function alert()
{
    echo "<div class=\"alert alert-primary text-center\" role=\"alert\">
    Изменения внесены!
  </div>";
}

function editCategory()
{
    global $db;
    $getName = explode(";", $_POST['name']);
    if ($_POST['del-edit']) {
       $delete = "DELETE FROM `category` WHERE `id` = {$getName[2]}";
        mysqli_query($db, $delete);
    }
}

function getAllValues()
{
    global $db;
    $insert = "INSERT INTO `{$_POST['props'][0]}` (`prop-name`) VALUES ('{$_POST['new-value']}')";
    mysqli_query($db, $insert);
}

