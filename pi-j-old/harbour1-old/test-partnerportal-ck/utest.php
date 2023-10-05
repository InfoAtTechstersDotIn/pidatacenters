<?php

//$name = $_FILES['certdoc']['tmp_name'];
// echo("I am working");
// echo ($name);
if ($_FILES['certdoc']) {
    $name = $_FILES['certdoc']['tmp_name'];
}else {
    $name = "No files uploaded";
}

//echo $name;
echo json_encode(['name' => $name]);