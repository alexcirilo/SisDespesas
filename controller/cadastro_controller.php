<?php

include '../conexao.php';

$cadNome = $_POST['nome'];
$cadDescricao = $_POST['descricao'];
$cadValor = $_POST['valor'];

if(!is_null($cadNome || $cadDescricao || $cadValor)){

$query = "insert into pessoa (nome) 
    values ('$cad')";

    $processaPessoa = mysqli_query($connection,$query);
    $query = "insert into despesa (descricao,valor,pago,pessoa_id )
     values ('$cadDescricao',$cadValor,
     '(select id from pessoa where id =".$_POST['id'].")'";
    $processaDespesa = mysqli_query($connection,$query);
    if($processaPessoa || $processaDespesa){
        echo "Salvo com Sucesso!";
        header("location: ../index.php?page=consulta");
        
    }else{
        echo "Não foi possível Salvar";
        header("location: ../index.php?page=cadastro");
    }
}else{
    echo "campos obrigatórios não podem estar vazios";
}


?>