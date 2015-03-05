<?php include "operacoes.php" ?>
<?php
    $x=5;
    $y=5;
    $soma=soma($x,$y);
    echo "O resultado da soma=". $soma;
    echo "<br>";
    $sub=sub($x,$y);
    echo "O resultado da subtração=". $sub;
    echo"<br>";
    $multi=multi($x,$y);
    echo "O resultado da multiplicação=". $multi;
    echo"<br>";
    $div=div($x,$y);
    echo "O resultado da divisão=". $div;
?>

