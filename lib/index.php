<!DOCTYPE html>
<html lang="fr" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Les fichiers en php";?></title>
</head>
<body>
    <h1>Les fichiers en PHP</h1>
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
    //$contenu = "Bonjour et bienvenu dans ce cours";
    //file_put_contents("texte2.txt",$contenu);

    //ouverture du fichier
    $data = fopen("texte.txt", "r");

    //manipulation de fichier

    // $char = fgetc($data);
    // //$char1 = fgetc($data);
    // //echo $char1;
    // while ($char == true) {
    //     echo $char;
    //     $char = fgetc($data);
    // }

    // $line =  fgets($data);

    // while (feof($data) == false) {
    //     echo $line."<br>";
    //     $line = fgets($data);
    // }

    $contenu = fread($data, 10000);
    echo $contenu;



    //Fermeture du fichier
    fclose($data);


    ?>
    <h1>Les répertoires en PHP</h1>
    <?php
    $chemin = getcwd();
    echo $chemin."<br>";
    //chdir("lib");
    //echo getcwd();
    mkdir("mon_dossier");
    rmdir("mon_dossier");

    ?>
    <h1>JSON (JavaScript Object Notation) en PHP</h1>
    <?php
    
    
    ?>
</body>
</html>