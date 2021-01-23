<?php

include 'header.php';


if(isset($_GET['page'])){
    $pagina = $_GET['page'];
}else{
    $pagina = 'home';
}

switch($pagina){
    case 'cadastro':
        include 'view/cadastro.php';
        break;
    case 'consulta':
        include 'view/consulta.php';
        break;
    default:
    include 'view/home.php';
}


include 'footer.php';

?>