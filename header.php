
<?php $url = $_SERVER["REQUEST_URI"];?>

<hr>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link disabled fw-bold">SEO фильтры</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($url == "/index.php" || $url == "/") {echo 'active';}?>" aria-current="page" href="index.php">Таблицы</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($url == "/add-category.php") {echo 'active';}?>" aria-current="page" href="add-category.php">Добавить категорию</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($url == "/delete-category.php") {echo 'active';}?>" href="delete-category.php">Удалить категирю</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($url == "/add-prop-value.php") {echo 'active';}?>" href="add-prop-value.php">Добавить значения свойств</a>
  </li>

</ul>
<hr>

