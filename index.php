<?php 
echo "<h1 style='color: red'>FUNCIONES DE STRINGS</h1>";
echo "<hr />";
echo "<h2>- FUNCION STRLEN()</h2>";
$variablestrlen=ZAHOVIC;
echo "VARIABLE= ZAHOVIC";
echo "</br>";
echo "Tiene: ",strlen($variablestrlen)," letras";
echo "<hr/>";
echo "<h2>- FUNCION SUBSTR()</h2>";
$sub="PROGRAMACION";
echo "VARIABLE= ",$sub;
echo "<br/>";
echo "Extraemos las 5 primeras letras";
echo "<br/>";
echo substr($sub, 0,5);
echo "<br/>";
echo "Extraemos las 5 ultimas letras y restamos 2 al final";
echo "<br/>";
echo substr($sub, -5,-2);
echo "Extraemos las 5 ultimas letras";
echo substr($sub, -5);
echo "<hr/>";
echo "<h2>- FUNCION UCWORDS()</h2>";
$uc="zahovic_saravia";
echo "VARIABLE= ",$uc;
echo "<br/>";
echo 'Se pondra en mayuscula la primera letra "Z"';
echo "<br/>";
echo ucwords($uc);
echo "<br/>";
echo 'Se pondra en mayuscula la primera letra "Z" y con un delimitador "_" se pondra en mayuscula la S';
echo "<br/>";
echo ucwords($uc,"_");
echo "<hr/>";
echo "<h2>- FUNCION STRREV()</h2>";
$str="TOSHIBA";
echo "VARIABLE= ",$str;
echo "<br/>";
echo "Ahora lo invertimos con strrev()";
echo "<br/>";
echo strrev($str);
echo "<hr/>";
echo "<h2>- FUNCION LCFIRST()</h2>";
$lc="HOLA";
echo "VARIABLE= ",$lc;
echo "<br/>";
echo "Ahora lo la primera en minuscula con lcfirst()";
echo "<br/>";
echo lcfirst($lc);
echo "<hr/>";
echo "<h1 style='color: blue'>FUNCIONES DE ARRAYS</h1>";
echo "<hr/>";
echo "<h2>- FUNCION ARRAY_SHIFT()</h2>";
$arr = array("AUTO","Pera","Manzana");
echo "ELEMENTOS DEL ARRAY FRUTAS ANTES: ";
foreach ($arr as $key => $value) {
	echo "--",$value;
}
echo "<br/>";
echo "Eliminaremos el primero que no tiene nada que ver con frutas";
echo "<br/>";
$frutas=array_shift($arr);
echo "ELEMENTOS DEL ARRAY FRUTAS DESPUES: ";
foreach ($arr as $key => $value) {
	echo "--",$value;
}
echo "<hr/>";
echo "<h2>- FUNCION ARRAY_SUM()</h2>";
$num=array(5,5);
echo "ELEMENTOS DEL ARRAY:";
echo "<br/>";
foreach ($num as $key => $value) {
	echo "/",$value;
}
echo "<br/>";
echo "Ahora lo sumamos con la función";
echo "<br/>";
echo "La suma de los elementos del array es: ",array_sum($num);
echo "<hr/>";
echo "<h2>- FUNCION ARRAY_REVERSE()</h2>";
$rev = array("HOLA",5,20,"MUNDO");
echo "ELEMENTOS DEL ARRAY:";
echo "<br/>";
foreach ($rev as $key => $value) {
	echo "__",$value;
}
echo "<br/>";
echo "Ahora devolvemos el array de forma inversa";
$res=array_reverse($rev);
echo "<br/>";
foreach ($res as $key => $value) {
	echo "__",$value;
}
echo "<hr/>";
echo "<h2>- FUNCION ARRAY_UNIQUE()</h2>";
$un = array(4,"5","4",4,5,"5");
echo "ELEMENTOS DEL ARRAY:";
echo "<br/>";
foreach ($un as $key => $value) {
	echo "__",$value;
	echo " es ",gettype($value);
}
echo "<br/>";
echo "Ahora eliminamos los repetidos";
echo "<br/>";
$o=array_unique($un);
foreach ($o as $key => $value) {
	echo "__",$value;
	echo " es ",gettype($value);
}
echo "<hr/>";
echo "<h2>- FUNCION ARRAY_PRODUCT()</h2>";
$nam = array(5,2);
echo "ELEMENTOS DEL ARRAY:";
echo "<br/>";
foreach ($nam as $key => $value) {
	echo "__",$value;
}
echo "<br/>";
echo "Ahora multiplicamos cada uno de los elementos del array";
echo "<br/>";
echo array_product($nam);
echo "<hr/>";
echo "<h1 style='color: green'>FUNCIONES MATEMÁTICAS</h1>";
echo "<hr/>";
echo "<h2>- FUNCION MT_RAND()</h2>";
echo "Imprimimos un numero aleatorio";
echo "<br/>";
echo mt_rand();
echo "<br/>";
echo "Imprimimos un numero aleatorio con un inicio y final del 1 al 10";
echo "<br/>";
echo mt_rand(1,10);
echo "<hr/>";
echo "<h2>- FUNCION PI()</h2>";
echo "Imprimimos PI";
echo "<br/>";
echo pi();
echo "<hr/>";
echo "<h2>- FUNCION POW()</h2>";
echo "Hagamos una exponencia";
echo "<br/>";
$num1=3;
$num2=2;
echo "Los numeros son: ",$num1," y ",$num2;
echo "<br/>";
echo $num1," elevado a ",$num2," es: ",pow($num1, $num2);
echo "<hr/>";
echo "<h2>- FUNCION ROUND()</h2>";
$deci=2.5;
echo "El decimal es: ",$deci;
echo "<br/>";
echo "Ahora lo redondeamos";
echo round($deci);
echo "<hr/>";
echo "<h2>- FUNCION MAX()</h2>";
echo "Buscamos el valor maximo de un array o de distintos valores que le pongamos";
$numeros = array(1,2,3,4,5,6,7,8,9);
echo "<br/>";
echo "Los valoes del array son: ";
foreach ($numeros as $key => $value) {
	echo "-",$value;
}
echo "<br/>";
echo "El valor maximo es: ";
echo max($numeros);
//echo max(1,2,3,8,10);
echo "<hr/>";
echo "<h1 style='color: orange'>FUNCIONES DE MANEJO DE VARIABLES</h1>";
echo "<hr/>";
echo "<h2>- FUNCION BOOLVAL()</h2>";
echo '0:       ',(boolval(0)?'true':'false');
echo "<br/>";
echo '1:       ',(boolval(1)?'true':'false');
echo "<br/>";
echo '" ":       ',(boolval("")?'true':'false');
echo "<br/>";
echo '"string": ',(boolval("string") ? 'true' : 'false');
echo "<hr/>";
echo "<h2>- FUNCION GETTYPE()</h2>";
echo "Sabremos el tipo de variable que tenemos en una variable";
$get = array(1,"2",NULL,new stdClass,1.);
echo "Elementos del array: ";
echo "<br/>";
echo '1,"2",NULL,new stdClass,1.';
echo "<br/>";
foreach ($get as $key => $value) {
    echo gettype($value),"\n";
}
echo "<hr/>";
echo "<h2>- FUNCION INTVAL()</h2>";
echo "Obtiene el valor entero de una variable";
echo "<br/>";
echo "Este es entero";
echo "<br/>";
echo intval(5);
echo "<br/>";
echo "Este es string";
echo "<br/>";
echo intval("5");
echo "<br/>";
echo "Este es string igual";
echo "<br/>";
echo intval('5');
echo "<hr/>";
echo "<h2>- FUNCION IS_NULL()</h2>";
echo "Comprueba si una variable es NULL";
$foo = NULL;
echo "<br/>";
echo 'La variable $foo es null';
echo "<br/>";
echo "de tal modo que saldra true";
echo "<br/>";
echo is_null($foo);
?>
