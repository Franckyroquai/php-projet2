<?php
header('content-type:application/json');
require("../lib/table.php");
// echo '{"id":205,"nom":"DUBOIS","prenom":"Jeanne","note":{"Anglais":13,"Maths":20}}';


//convertir un tableau de php en JSON
$data_json = json_encode($data);
echo $data_json;


?>