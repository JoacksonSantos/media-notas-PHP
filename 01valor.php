<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="_css/estilo.css">
<head>
  
</head>
<body>
      <?php
            $n1 = $_GET["nota1"];
            $n2 = $_GET["nota2"];
            $media = ($n1 + $n2) / 2;
            if($media < 5) {
                echo"o aluno foi reprovado";
            }elseif(($media >= 5)&& ($media <=7) ){
                echo "aluno de recuperação";
            }else{
                echo "aluno aprovado";
            }

      ?>

</body>
</html>