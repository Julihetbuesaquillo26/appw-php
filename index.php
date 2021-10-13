<?php
//Comentarios libres

$name = "julieta"; //(Cuando los datos son tipo string se puede usar comillas dobles) STRING
$lastname = "Buesaquillo"; //STRING
$age = "26"; //NUMBER
$hobbies = [

    "Monday" => "read",
    "sunday" => "play the guitar"
];

//Para imprimir en pantalla se usa el elemento ECHO
echo 'Me llamo ' . $name . ' Tengo ' . $age . ' años ';

//Asignación
$num= 11;
$lang = [

    'es' =>'Español', //llave o valor fijo
    'en' => 'Ingles'
];
//Aritmetica
echo '<br> Suma 2 + 2 = ' . ((int) 2 + (int)2);
echo '<br> Resta 2 - 2 = ' . ((int) 2-(int)2);
echo '<br> Multiplica 2 * 2 = ' . 2 * 2;
echo '<br> Divide 2 / 2 = ' . 2 / 2;
echo '<br> Modulo 2 % 2 = ' . 2 % 2;
echo '<br> Exponencial 2 ** 2 = ' . 2 ** 2;


//Aritmetica
$a = 30;
$b = 15;

echo '<br><br> 30 + 15 = ' . ($a + $b);
echo '<br> 30 * 15 = ' . ($a * $b);
echo '<br> 30 / 15 = ' . ($a / $b);
echo '<br> 30 - 15 = ' . ($a - $b);
echo '<br> 5 % 3 = ' . (5 % 3);
echo '<br> 2 ** 3 = ' . (2 ** 3);

//Definir constantes

define ('constant' , ' App web en servidor');
define ('Año', 2021);
echo '<br>Mi constante es ' . (constant);
echo ', año ' . (Año);

//necesitamos que guarde su email y su user de git hub  en variables y las muestre en pantalla

$email = 'jsbt.1020@gmail.com';
$user = 'Julietabt';

echo '<br> Su email es ' . $email . ' y su usuario es ' . $user;

//Variables variables

$appweb = 'curso'; //curso
$curso = 'servidor'; //servidor

echo '<br>mi variable es: ' . $appweb;
echo '<br>mi segunda variable es: ' .$$appweb;

//Concatenar dos variables de tipo string

$cadena1 = 'Hoy es';
$cadena2 = ' Martes 6 de octubre';

echo '<br>' . $cadena1 . $cadena2;

//Incremento y decremento

//$num1 =7;
//$num1++;

//$num2= 6;
//$num2--;
//echo '<br> El incremento de num1 es: ' . $num1 . ' y el decremento de num 2 es: ' . $num2;

//Declarar 3 variables ycomparar con if  si son iguales en valor == y tipo ===
//Usar una comparacion de un valor menor de otro
//en ambos casos imprimir un resultado en pantalla

$Color1 = 'Amarillo';
$Color2 = 'Azul';
$Color3 = 'Rojo';

if ($Color1 == $Color2) {

    if ($Color1 == $Color3) {
        
        echo '<br>Var color1 es igual en valor a la Var color2 y var color3';
    }  else{
       echo '<br> la variable color1 no es igual a la var color 3';
    }

} else{
    echo '<br>La Var color1 no es igual en valor a la Var color2';
} 

//$ git commit -m "hoy 12 de octubre se trabajo con incremento y decremento y se realizo unos ejercicios"
if ($Color1=== $Color2 ) {
    if ($Color2 === $Color3){
        echo '<br>las 3 variables son iguales en valor y tipo';
    } else {
        echo '<br> La var color1 no es igual a la var 3 en valor y tipo';
    }
  
}else {
    echo '<br>La var Color1 no es igual en valor y tipo a la var color2 ';
}

$numx = 20;
$numy =10;

if($numx > $numy) {
    echo '<br> x es mayor que y';
} else{
    echo '<br> y es mayor que x';
}
?>