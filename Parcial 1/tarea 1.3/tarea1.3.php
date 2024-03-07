<html>
<head></head>
<body>
<h1>13433. Estaciones del Año</h1>

<table border="1" cellspacing="3" cellpadding="3">
   <tr>
      <th>Puntos</th>
      <td>11.51</td>
      <th>Limite de memoria</th>
      <td>32 MiB</td>
   </tr>
   <tr>
      <th>Limite de tiempo (caso)</th>
      <td>1s</td>
      <th>Limite de tiempo (total)</th>
      <td>1m0s</td>
   </tr>
   <tr>
      <th>Tamaño limite de entrada (bytes)</th>
      <td>10 KiB</td>
   </tr>
</table>

<h2>Descripción</h2>
La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, 
pero le preocupa cuanto vaya a  <br>
pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar. 
El esquema que maneja <br> 
la prepa es este: <br> 
plan de pagos: <br>

-La colegiatura de los alumnos se determina según el numero de materias que cursan. 
El costo de cada <br> 
una de las materias es de $1600.<br>
-Se ha establecido un programa para estimular a los alumnos, 
el cual consiste en lo siguiente: si el pro-<br>
medio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento <br> 
del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá <br>
pagar la colegiatura completa, mas el IVA del 16%.



<h2>Entrada</h2>
El numero de materias A que Esteban va a cursar. Y un numero con decimales B que es el promedio de Esteban.

<h2>Salida</h2>
Un numero entero C con el precio a pagar. Debe de ir con un $.

<h2>Ejemplo</h2>
<table border="1">
   <tr>
       <td><h3>entrada</h3></td>
       <td><h3>salida</h3></td>
   </tr>
   <tr>
      <td>5 <br>
        9.6</td>
      <td>$5600</td>
   </tr>
   <tr>
    <td>8 <br>
        7.8</td>
    <td>$14848</td>
   </tr>
   <td>2 <br>
       8</td>
   <td>$3712</td>
</table>

<?php
echo "<br>";
echo "NUMEROS DE ENTRADA: <BR>
a=5 <br>
b=9.6 <br>
OPERACION: <br>
if(b>9) <br>
{ <br>
    b=(1600*a); <br>
    x=(b*0.3); <br>
    b=b-x; <br>
} <br>
else if(b<9) <br>
{ <br>
    b=(1600*a); <br>
    x=b*1.16; <br>
{ <br>
RESULTADO: <BR>
$5600";
echo "<br>";
echo "<br>";
echo "NUMEROS DE ENTRADA: <BR>
a=8 <br>
b=7.8 <br>
OPERACION: <br>
if(b>9) <br>
{ <br>
    b=(1600*a); <br>
    x=(b*0.3); <br>
    b=b-x; <br>
} <br>
else if(b<9) <br>
{ <br>
    b=(1600*a); <br>
    x=b*1.16; <br>
{ <br>
RESULTADO: <BR>
$14848";
echo "<br>";
echo "<br>";
echo "NUMEROS DE ENTRADA: <BR>
a=2 <br>
b=8 <br>
OPERACION: <br>
if(b>9) <br>
{ <br>
    b=(1600*a); <br>
    x=(b*0.3); <br>
    b=b-x; <br>
} <br>
else if(b<9) <br>
{ <br>
    b=(1600*a); <br>
    x=b*1.16; <br>
{ <br>
RESULTADO: <BR>
$3712";
?>


</body>
</html>