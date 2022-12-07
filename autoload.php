<?php
function setClassPath(string $fullClassName): string
{
    $filePath = str_replace("Bank", "src", $fullClassName);
    $filePath = str_replace("\\", DIRECTORY_SEPARATOR, $filePath);
    $filePath .= ".php";
    return $filePath;
}

spl_autoload_register(function (string $fullClassName) {
    $filePath = setClassPath($fullClassName);
    if (file_exists($filePath)){
        require_once $filePath;
    }
});