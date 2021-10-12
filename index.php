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

    'es' =>'Español',
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
?>