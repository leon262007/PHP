<html>
<head></head>
<body>
<h1>12618. Practicando con formulas</h1>

<table border="1" cellspacing="3" cellpadding="3">
   <tr>
      <th>Puntos</th>
      <td>10.71</td>
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
Dado un valor real a, quieres resolver una serie de ecuaciones hasta obtener el valor de z. <br>

x= 3a + 15 <br>
<br>
y= x + 3 <br>
   ----- <br>
   x + 1 <br>
<br>
z= 5x 7y <br>
   ----- <br>
    axy

<h2>Entrada</h2>
Un real a. Puedes suponer que 1 < a < 100.

<h2>Salida</h2>
Una cadena 
Un real que sea el valor de z impreso con tres puntos decimales.

<h2>Ejemplo</h2>
<table border="1">
   <tr>
       <td><h3>entrada</h3></td>
       <td><h3>salida</h3></td>
   </tr>
   <tr>
      <td>33.562</td>
      <td>0.148</td>
   </tr>
   <tr>
    <td>72.569</td>
    <td>0.069</td>
   </tr>
   <td>64.835</td>
   <td>0.077</td>
</table>
<?php
echo "NUMERO DE ENTRADA: <BR>
a=33.562 <br>
MULTIPLICACION: <br>
x= 3*a + 15; <BR>
y= x + 3 / x - 1; <br>
z= 5*x + 7*y / a*x*y; <BR>
RESULTADO: 0.148";
echo "<br>";
echo "<br>";
echo "NUMERO DE ENTRADA: <BR>
a=72.569 <br>
MULTIPLICACION: <br>
x= 3*a + 15; <BR>
y= x + 3 / x - 1; <br>
z= 5*x + 7*y / a*x*y; <BR>
RESULTADO: 0.069";
echo "<br>";
echo "<br>";
echo "NUMERO DE ENTRADA: <BR>
a=64.835 <br>
MULTIPLICACION: <br>
x= 3*a + 15; <BR>
y= x + 3 / x - 1; <br>
z= 5*x + 7*y / a*x*y; <BR>
RESULTADO: 0.077";
?>
</body>
</html>
