<?php

if(!empty($_GET['id'])){

    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM dados WHERE id=$id";
    $result = $con->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM dados WHERE id=$id";
        $resultDelete = $con->query($sqlDelete);
    }
}
header('Location: index.php');
?>