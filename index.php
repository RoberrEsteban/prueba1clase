<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba stack WAMP integrado con IDE</title>
    </head>
    <body>
        <?php
            //comentar
            # el codigo
            /*
             * me hace
             * mejor
             * desarrollador
             */            
            error_reporting(E_ALL);
            define("C1","hola mundo");
            const C2="adiós mundo";
            echo "--";
            echo C1;
            echo C2;
            echo "<br/>";
            echo __LINE__;echo "<br/>";
            echo PHP_VERSION;echo "<br/>";
            echo PHP_OS;echo "<br/>";
            $uno=1;
            $Uno=11;
            echo $uno;
            echo $Uno;
            echo "<br/>";
            $uno=23.34;
            $Uno='b';
            echo $uno;
            echo $Uno;
            echo $dos;
            echo "<br/>";
            echo (int) $uno;
            echo (int) $Uno;
            echo "<br/>";
            echo "<br/>";
            echo "Funciones is_: ";
            echo "<br/>";         
            if (is_int($uno)){
                echo "La variable es entera";
            }else{
                echo "La variable no es entera";
            }
            $uno = (int) $uno;
            echo is_int($uno);
            echo "<br/>";
            echo "Funciones de estado: ";
            echo "<br/>";         
            echo isset($uno);  //1
            echo ",";
            echo isset($nacho);  //0
            echo ",";
            echo empty($nacho);  //1
            echo ",";
            unset($uno);  //
            echo ",";
            echo isset($uno);  //0
            echo ",";
            echo var_dump($Uno);
            echo "<br/>";
            echo "Referencias: ";
            echo "<br/>";
            $a = 1234567890;
            $b = &$a;
            echo $a;
            echo "<br/>";            
            echo $b;
            echo "<br/>";
            $a = 4;
            echo $b;
            echo "<br/>";            
            $b = 5;
            echo $a;
            echo "<br/>";
            
            phpinfo();
        ?>
        <p>Continuamos ... </p>
        <?php
            echo "<br/>";
            echo "Números aleatorios: ";
            echo "<br/>";            
            mt_srand(time());
            echo mt_rand(10, 100);
            echo "<br/>";
            echo "<br/>";            
            echo "Salida PHP: ";
            echo "<br/>";            
            echo "a","B","c",'D';
            echo "<br/>";            
            echo print "a"."B";
            echo "<br/>";            
            printf("Con varios %% formateamos datos como %s y %d","CCC",12.34);
            echo "<br/>";            
            $v = sprintf("Con varios datos como %s y %f","CCC",12.34);
            echo $v;
            echo "<br/>";
            $p = ["a",1.1];
            $v = vsprintf("Con varios datos como %s y %f",$p);
            echo $v;
            echo "<br/>";
            echo "<br/>";
            echo "Comillas PHP: ";
            echo "<br/>";            
            echo "$v \n".'$v \n';        
            echo "Fin";
            echo "<br/>";
            
echo "<br/>";
echo "Funciones: ";            
$t = "Nacho";

function doble($valor=2){
    echo "<br/>";
    return 2*$valor;
}

function next_doble($valor){
    $dentro = true;
    echo $dentro;  //1
    echo "<br/>";
    $valor++;
    return 2*$valor;
}

function dobleReferencia(&$valor){
    $valor++;
    return 2*$valor;
}

function negrita($texto){
    echo "<strong>$texto<strong>$t";
}

echo doble();
echo doble(100);
echo "<br/>";
echo next_doble(4);
echo $dentro;
echo "<br/>";
negrita("Nacho");
echo "<br/>";        
//echo dobleReferencia(4);  //
$v = 4;
echo dobleReferencia($v);
echo "<br/>";
echo $v;
echo "<br/>";
echo next_doble($v);
echo "<br/>";
echo $v;
global $vg;

echo "<br/>";
echo "<br/>";
echo "Variables estáticas: ";
echo "<br/>";
function llamada(){
    $a=0;
    echo ++$a;
}

function llamada2(){
    static $a=0;
    echo ++$a;
}

echo llamada();
echo llamada();
echo llamada();
echo "<br/>";
echo llamada2();
echo llamada2();
echo llamada2();

function factorial($n){
    if($n<=1) {
        return 1;
    }    
    else {
        return $n*factorial($n-1);
    }
}
//vamos a declarar una funcion recursiva llamada potencia que recibe dos parametros, siendo $a la base y $b el exponente
function potencia($a,$b){
    if($b==0) {
        return 1;
    }    
    else {
        return $a*potencia($a,$b-1);
    }
}

function potencia_procedimiento($a,$b){
    
    $r = 1;
    for($i=1;$i<=$b;$i++){
        $r*=$a;
    }

    do{
        if($b==0) {
            echo " 1";
        }    
        else {
            echo "$a * ";
        }
        $b--;        
    }while($b>=0);
    echo " = $r";
    
}

echo "<br/>";
echo "<br/>";
echo "Recursividad: ";
echo "<br/>";
echo factorial(2);
echo "<br/>";
echo potencia(2,4);
echo "<br/>";
potencia_procedimiento(2,4);

echo "<br/>";
echo "<br/>";
echo "Reutilización del código:";
include("hola.php");
//require("hola.php");


/*
 * Arrays
 */
$asociativo["a"]="valor1";
$asociativo["c"]="valor2";
$asociativo[4]=3;
$nota[0] = 1;
$nota[2] = 2;
$nota[]=3;
$nombres=array("nacho","juan","pedro");
$sueldos=array("nacho"=>23.34,"juan"=>11.11,"pedro"=>123.45);

echo "Notas: "."<br/>";
//recorrido con for con Notice
for($i=0;$i<count($nota);$i++){
    echo $nota[$i]."<br/>";
}
echo "<br/>";

$total = count($nota);
echo "Alumnos: $total";
echo "<br/>";
//recorrido con for sin Notice
for($i=0;$i<$total;$i++){
    if (isset($nota[$i]))
    echo $nota[$i]."<br/>";
    else
    $total++;
}
echo "<br/>";

foreach ($nota as $i=>$v){
    echo "$v"."<br/>";
}
echo "<br/>";

foreach ($nombres as $key => $value) {
    echo "Usuario: $key | Contraseña: $value"."</br>";
}
echo "<br/>";

foreach ($sueldos as $key => $value) {
    echo "Usuario: $key | Sueldo: $value"."</br>";
}
echo "<br/>";

function cambiar_array($a){
    $a[0]=1;
    $a[4]=1234567890;
    foreach ($a as $key => $value) {
        echo"$key->$value"."</br>";
    }
}

cambiar_array($asociativo);
echo "<br/>";
var_dump($asociativo);
echo "<br/>";
print_r($asociativo);

echo "<br/>";
echo "<br/>";
echo "Funciones para arrays: ";
echo "<br/>";
print_r($nombres);
echo "<br/>";
print_r($sueldos);
echo "<br/>";
if(is_array($nombres)){
    echo "Tenemos ".count($nombres)." empleados";
}
sort($sueldos);
echo "<br/>";
print_r($sueldos);

sort($nombres,SORT_STRING);
echo "<br/>";
print_r($nombres);
echo "<br/>";

        ?>
    </body>
</html>

    </body>
</html>
