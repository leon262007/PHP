<HTML>
<body>
    <h2>estructura de control (if)</h2>
    <?php
    $a=35;
    $b=30;
    # if simple
    if($a>$b)
    {
        echo "El mayor es: ", $a, "<br>";
    }
    #ifelse simple
    if($a>=$b)
    {
        echo "El mayor es A: ", $a, "<BR>";
    }
    else
    {
        echo "el mayor es B: ", $b;
    }
    #if else if ****************************************************+
    $estacion="primavera";
    if($estacion == "invierno")
    {
        echo "invierno, del 21 de diciembre al 20 de marzo";
    }
    elseif($estacion=="primavera")
    {
        echo "Primavera, del 21 de marzo al 20 de junio";
    }
    elseif($estacion=="verano")
    {
        echo "verano, del 21 de junio al 20 de septiembre";
    }
    elseif($estacion=="otoño")
    {
        echo "otoño, del 21 de septiembre al 20 de diciembre";
    }
    ?>
</body>
</HTML>