<?php
function atas(){
    $length = 11;
    $banyak = 4;
    for($i=0;$i<$length;$i++){
        for($a=0;$a<$banyak;$a++){
            for($j=0;$j<$length;$j++){
                if($j>=$length-$i){
                    echo "x";
                }else{
                    echo "_";
                }
            }
            for($j=0;$j<$length;$j++){
                if($j<$i){
                    echo "x";
                }else{
                    echo "<body>&thinsp;&thinsp;</body>";
                }
            }
        }
        echo "<br/>";
    }
}
function bawah(){
    $length = 11;
    $banyak = 4;
    for($i=0;$i<$length;$i++){
        for($a=0;$a<$banyak;$a++){
            for($j=0;$j<$length;$j++){
                if($j>=$i){
                    echo "x";
                }else{
                    echo "_";
                }
            }
            for($j=0;$j<$length;$j++){
                if($j<$length-$i){
                    echo "x";
                }else{
                    echo "<body>&thinsp;&thinsp;</body>";
                }
            }
        }
        echo "<br/>";
    }
}
atas();
bawah();
atas();
bawah();
atas();
bawah();
?>