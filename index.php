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
        <?php
       echo $zapnuto=true;//boolean
       echo $nazev="Hornbach";//string
       echo $cena=0.001;//float
       echo $cislo=69;//integer
       
       print $vypnuto=false;
       print $jmeno="petr";
       print $cenik=1.021;
       print $cislovka=1;
       
       
       
       $cenovka=$cislo.$cena;//spojeni retezce
       
       
       echo "<a href=\"index.php\">Obrazek</a>"; //img element s escape sekvenci
       
       echo "\\";//zpetne lomitko
       
        $a=20;
        $b=4;
        var_dump  ($a+$b);           
        var_dump  ($a-$b);           
        var_dump  ($a/$b);           
        var_dump  ($a*$b);           

        var_dump ($a++);
        var_dump ($a--);
        var_dump ($a+= $b);
        var_dump ($a-= $b);
        var_dump ($a*= $b);
        var_dump ($a/= $b);

        var_dump ($a == $b);	 
        var_dump ($a != $b);	 
        var_dump ($a > $b);	 
        var_dump ($a < $b);	 
        
        var_dump ($a || $b);
        var_dump ($a && $b);
        var_dump (!$a);
        ?>
    </body>
</html>
