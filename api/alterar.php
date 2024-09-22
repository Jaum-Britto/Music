<?php
                $nomenovo=$_POST['nomenovo'];
                $nomevelho=$_POST['nomevelho'];
                $Artista=$_POST['artista'];
                $genero=$_POST['genero'];
                $conexao =    mysqli_connect('35.238.202.154','JP','usbw');
                mysqli_select_db($conexao,'musicas');
            $sql    =    "update    musicas    set    Nome='$nomenovo',    Artista='$artista',    Genero='$genero'    where    Nome='$nomevelho'";
            $resultado    =    mysqli_query($conexao, $sql)    or die    ("Erro    .:"    .    mysqli_error($conexao));
            if($resultado)
                                        echo "1";
            else
                            echo "0";
?>