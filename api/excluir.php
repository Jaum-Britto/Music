<?php
            $nome=$_POST['nome'];
            $conexao =    mysqli_connect('35.238.202.154','JP','usbw');
                mysqli_select_db($conexao,'musicas');
            $sql    =    "delete    from    musicas    where    Nome    like    '$nome'    ";
            $resultado    =    mysqli_query($conexao, $sql)    or die    ("Erro:    "    .    mysqli_error($conexao));
            if($resultado)
                                echo "1";
                else
?>