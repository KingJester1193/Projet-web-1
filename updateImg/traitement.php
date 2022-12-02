<?php
echo "<pre>";
print_r($_POST);
print_r($_FILES);

$nom_fichier = $_FILES["userfile"]["name"];
$fichier = $_FILES["userfile"]["tmp_name"];
$size = $_FILES["userfile"]["size"];


$url_image = "image/".$nom_fichier;
if(move_uploaded_file($fichier,$url_image)){
    echo "fichier copie";
}else{
    echo "fichier non copie";
}