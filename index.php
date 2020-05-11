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
   
        $MichalMusil1=1;
        $MichalMusil2=2;
        if (1>2) {
        echo "MichaMusil";
        }
        if (1<2) {
        echo "Michal";
        } else {
        echo "Musil";
        }
        
        if ($MichalMusil1===1) {
        if ($MichalMusil2===2) {
            echo "Michal";
        }
        } else {
            echo "Musil";
        }
            
         switch ($MichalMusil1){
            case 0;
            echo"0";
            break;
            case 1;
            echo "1"; 
            break;
            case 2;
            echo "2";
            break;
            case 3;
            echo "3";
            break;
            case 4;
            echo "4";
            break;
            case 5;
            echo "5";
            break;
            case 6;
            echo "6";
            break;
            }
            
            $produkt = array("pes","kočka","auto","kolo","světlo","letadlo","obojek","podkova","nůž","zbraň");
            var_dump ($produkt);

            include ("C:\wamp64\www\phpecko/tracy.phar");
            
            use Tracy\Debugger;
            Debugger::enable();
            
            for ($SloupecMichalMusil=0; $SloupecMichalMusil <17; $SloupecMichalMusil++) {
            
            for ($RadekMichalMusil=0; $RadekMichalMusil <7; $RadekMichalMusil++){  
            }
           }
           floor($cenik);
           round($cenik);
           
          
          $věc = array ("auto", "pes", "kolo");
           var_dump ($věc);
          shuffle ($věc);
          
          join($cenovka, $věc);
          explode($cenovka, $jmeno);
          
   




        
        ?>        
    </body>
</html>
