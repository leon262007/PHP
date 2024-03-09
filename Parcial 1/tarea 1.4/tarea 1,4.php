<html>
<head></head>
<body>
<h1>13433. Estaciones del Año</h1>

<table border="1" cellspacing="3" cellpadding="3">
   <tr>
      <th>Puntos</th>
      <td>23.08</td>
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
Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día 
 y un mes 
 según lo siguiente:

  ~Winter del 21 de diciembre al 20 de marzo
  ~Spring del 21 de marzo al 21 de junio
  ~Summer del 22 de junio al 22 de septiembre
  ~Fall del 23 de septiembre al 20 de diciembre
  ~Considerando la siguiente cantidad de días para cada mes:

Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días
Abril, Junio, Septiembre y Noviembre 30 días
Febrero 28 días
Cualquier fecha fuera de estos rangos debe considerarse como no existente
Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.



<h2>Entrada</h2>
Dos números enteros y separados por un espacio que corresponden al día y mes de una fecha determinada

<h2>Salida</h2>
Una cadena 
 que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, 
 si la fecha no es válida

<h2>Ejemplo</h2>
<table border="1">
   <tr>
       <td><h3>entrada</h3></td>
       <td><h3>salida</h3></td>
   </tr>
   <tr>
      <td>15 10</td>
      <td>Fall</td>
   </tr>
   <tr>
    <td>22 3</td>
    <td>Spring</td>
   </tr>
   <td>31 4</td>
   <td>no existe la fecha</td>
</table>

<?php
# CODIGO PHP PARA LA MULTIPLICACION
$a=10;
$b=9.5;
$c=9.0;

# OPERACION
$m=($a+$b+$c)/3;
echo "<BR>";

echo "NUMEROS: <BR>
10 <BR>
9.5 <BR>
9.0 <BR>
OPERACION: <BR>
$m=($a+$b+$c)/3 <BR>
RESULTADO: <BR>
9.5";
?>


</body>
</html>