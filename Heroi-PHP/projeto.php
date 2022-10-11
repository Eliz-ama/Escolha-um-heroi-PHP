<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Heroi</title>
</head>
<body>
<?php
    $universo="marvel";
    $heroi="capitão-américa";
    $vilao="gorr";
    
    if($universo == "marvel"){
        //echo "O universo escolhido foi <b>Marvel</b> ";

        for($i = 0; $i < 1; $i++){
        if($heroi=="capitão-américa"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Capitão América</b></div><div class='parte2'> <img src='img/capitao.jpg'></div>";
        }
        else if ($heroi=="homem-de-ferro"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Homem de Ferro</b></div><div class='parte2'> <img src='img/homem-de-ferro.jpg'></div>";
        }
        else if ($heroi=="viuva-negra"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Viuva Negra</b></div> <div class='parte2'><img src='img/viuva.webp'></div>";
        }
        else if ($heroi=="thor"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Thor</b></div> <div class='parte2'><img src='img/thor.jpeg'></div>";
        }
        else if ($heroi=="feiticeira-escarlate"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Feiticeira Escarlate</b></div> <div class='parte2'><img src='img/feiticeira.jpg'></div>";
        }
        if($heroi=="thanos"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Thanos</b></div> <div class='parte2'><img src='img/thanos.webp'></div>";
        }
        else if ($heroi=="gorr"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Gorr</b></div> <div class='parte2'><img src='img/gorr.jpg'></div>";
        }
        else if ($heroi=="ronan"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Ronan</b></div> <div class='parte2'><img src='img/ronan.jpg'></div>";
        }
        else if ($heroi=="ikaris"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Ikaris</b></div> <div class='parte2'><img src='img/ikaris.jpg'></div>";
        }
        else if ($heroi=="aquele-que-permanece"){
            echo "<div class='parte1'>E o herói escolhido foi <b>Aquele que permanece</b></div> <div class='parte2'><img src='img/aquele.jpg'></div>";
        }
    }
    }
    else if($universo == "DC"){
        echo "O universo escolhido foi <b>DC</b> "; 

        for ($i=0;$i<1;$i++){
            if($heroi=="batman"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Batman</b></div> <div class='parte2'><img src='img/batman.jpg'></div>";
            }
            else if ($heroi=="super-men"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Super Men</b></div> <div class='parte2'><img src='img/supermen.jpg'></div>";
            }
            else if ($heroi=="aqua-men"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Aqua Men</b></div> <div class='parte2'><img src='img/aquamen.webp'></div>";
            }
            else if ($heroi=="mulher-maravilha"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Mulher Maravilha</b></div> <div class='parte2'><img src='img/mulher-maravilha.webp'></div>";
            }
            else if ($heroi=="lanterna-verde"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Lanterna Verde</b></div> <div class='parte2'><img src='img/lanterna-verde.jpg'></div>";
            }
             else if ($heroi=="arlequina"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Arlequina</b></div> <div class='parte2'><img src='img/arlequina.webp'></div>";
            }
            else if ($heroi=="adão negro"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Adão Negro</b></div> <div class='parte2'><img src='img/adao-negro.webp'></div>";
            }
            else if ($heroi=="exterminador"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Exterminador</b></div> <div class='parte2'><img src='img/exterminador.jpg'></div>";
            }
            else if ($heroi=="coringa"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Coringa</b></div> <div class='parte2'><img src='img/coringa.png'></div>";
            }
            else if ($heroi=="lex luthor"){
                echo "<div class='parte 1'>E o herói escolhido foi <b>Lex Luthor</b></div> <div class='parte2'><img src='img/lex-luthor.jpg'></div>";
            }
            
        }
    }
?>
</body>
</html>