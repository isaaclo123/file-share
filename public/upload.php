<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$file = $_POST["file"];
$public = $_POST["public"] === "Yes";

echo 'results';
echo 'file ' . $file;
echo 'public ' . $public;
