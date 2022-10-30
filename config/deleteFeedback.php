<?php
require "../config/database.php";
$id = $_POST["id"];

Database::iud("DELETE FROM `client_feedback` WHERE `id`='".$id."'");
echo 1;