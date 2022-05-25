<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drapeaux</title>
    <link rel="stylesheet" href="/css/flag.css">
</head>
<body>
    <div class="flag">
        <h1>Les drapeaux !</h1>
        <div class="btn-add">
            <a href="/">Ajouter un drapeau</a>
        </div>
        <?php
        if(isset($_FILES["image"]["name"]) && $_FILES["image"]["error"] == 0) {
            if(!isset($_SESSION["adresse"])) {
                $visitor_folder_name = time();
                mkdir("../img/" . $visitor_folder_name);
                $_SESSION["folder_path"] = "../img/" . $visitor_folder_name;
            }
            $dst_folder = $_SESSION["folder_path"].'/'.$_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"], $dst_folder);
            $_SESSION["adresse"][$_FILES["image"]["name"]] = $dst_folder;
        }
        if (isset($_SESSION["adresse"])) {
            foreach ($_SESSION["adresse"] as $key => $value) {
                echo "<img src=\"$value\" alt=\"$key\" />";
            }
        }
        ?>
    </div>
</body>
</html>