<?php
require "../config/database.php";
$id = $_POST["id"];

Database::iud("DELETE FROM `latest_update` WHERE `update_id`='".$id."'");
echo 1;