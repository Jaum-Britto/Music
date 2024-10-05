<?php
        $nome = $_POST['nome'];
        $artista = $_POST['artista'];
        $genero =$_POST['genero'];
        $conexao =    mysqli_connect('34.42.216.142','JP','usbw');
                mysqli_select_db($conexao,'musicas');
        $sql    =    "insert    into    musicas    (Nome,    Artista,    Genero)    values    ('$nome','$artista','$genero')";
    $resposta    =    mysqli_query($conexao, $sql)    or die    ("Erro:    "    .    mysqli_error($conexao
));
    if($resposta)
                                        echo "1";
    else
                            echo "0";
    ?>
