<!DOCTYPE html>
<html lang="fr" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Les fichiers en php";?></title>
</head>
<body>
    <?php
    //$contenu_fichier = file_get_contents("texte.txt");
    //echo $contenu_fichier;
    //$nombre_caractere_lu = readfile("texte.txt");
    //echo "<br>Le nombre de caractères lu est : ".$nombre_caractere_lu;
    //$data = file("texte.txt");
    //var_dump($data) ;
    //foreach ($data as $key => $value) {
    //    echo $value;
    //}
    $contenu = "Bonjour et bienvenu dans ce cours";
    file_put_contents("texte2.txt",$contenu);



    ?>
</body>
</html>