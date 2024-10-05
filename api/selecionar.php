<?php
                $nome=$_POST['nome'];
                $conexao =    mysqli_connect('34.42.216.142','JP','usbw');
                mysqli_select_db($conexao,'musicas');
                $sql=" select    * from
        musicas    where    Nome    like    '$nome'";
                $resultado    =    mysqli_query($conexao, $sql)    or die    ("Erro:    "    .    mysqli_error($conexao));
                while($linha=    mysqli_fetch_object($resultado))    {
                        echo $linha->Nome."#";
                            echo $linha->Artista."#";
                             echo $linha->Genero."#";
                                }
                    echo "^";
?>
