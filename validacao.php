<?php

if(isset($_GET['nome']) and isset($_GET['altura']) and isset($_GET['peso'])){
    $nome   = $_GET['nome'];
    $altura = $_GET['altura'];
    $peso   = $_GET['peso'];

    $imc = $peso / ($altura * $altura);
    $temp = $imc;
                
    if($temp < 18.5){
        $resultado = "Abaixo do peso";
    }elseif($temp >= 18.5 and $temp <= 24.9){
        $resultado = "Peso ideal";
    }else{
        $resultado = "Acima do peso";
    }
                
    $query = mysqli_query($con, "INSERT INTO dados (nome,imc,resultado) VALUES ('$nome', '$imc', '$resultado')");
                
    header('Location: index.php');                
}
?>