<?php

$db = @mysqli_connect('127.0.0.1', 'root', 'root', 'properties') or die(mysqli_connect_error());
mysqli_set_charset($db, "utf8");