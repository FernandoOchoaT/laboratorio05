<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Bonificacion a vendedores</title>
</head>
<body>
    <div class="container">
        <h1>Bonificacion para los vendedores</h1> <br>
        <form action="" method="post">
            
            <label class="input">Ingrese cantidad de hijos </label><br> 
            <input type="text" name="ctdHijos"> <br>
            <label class="input">Ingrese importe total vendido este mes </label><br> 
            <input type="text" name="totalVendido"> <br>    
            


            <input class="btn 1" type="submit" name="producto" value="Calcular"> 
            <input class="btn 2" type="reset" name="cancelar" value="Cancelar">
           
        </form>
        <?php
            $css = file_get_contents("css/styles.css");
            echo  "<style> $css </style>";

            if (array_key_exists('totalVendido', $_POST)) {
                $importeTotalVendido = $_POST['totalVendido'];
            } else {
                $importeTotalVendido = 0;
            }

            $sueldoBasico = 600;