<?php
$list_disk = file_get_contents(__DIR__ . "/../db/database.json");


header('Content-Type: application/json');

echo $list_disk;
