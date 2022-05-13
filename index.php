<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Drapeaux" ?></title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <h1>Choix du drapeau</h1>
        <form action="" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
        <input type="file" name="image" id="">
        <input type="submit" value="Ajouter">
    </form>
    

    <div class="btn-show">
        <a href="lib/flag.php">Afficher les drapeaux</a>
    </div>
</body>
</html>