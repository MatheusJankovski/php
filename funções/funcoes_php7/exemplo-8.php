<?php

function soma(int ...$valores):string {

    return array_sum($valores);
    
};

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";

echo "<br>";

function soma1(float ...$valores):float {

    return array_sum($valores);
    
};

echo var_dump(soma1(2, 2));
echo "<br>";
echo soma1(25, 33);
echo "<br>";
echo soma1(1.5, 3.2);
echo "<br>";

?>