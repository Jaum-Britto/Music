<?php
        $nome = $_POST['nome'];
        $plataforma = $_POST['plataforma'];
        $genero =$_POST['genero'];
        $conexao =    mysqli_connect('35.238.202.154','Mob','usbw');
        mysqli_select_db($conexao,'jogos');
        $sql    =    "insert    into    jogos    (Nome,    Plataforma,    Genero)    values    ('$nome','$plataforma','$genero')";
    $resposta    =    mysqli_query($conexao, $sql)    or die    ("Erro:    "    .    mysqli_error($conexao
));
    if($resposta)
                                        echo "1";
    else
                            echo "0";
    ?>