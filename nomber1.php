<?php 
class NumberSatu{
    function number1(){
        
        $numerSatu = 153;

        $akar =  substr($numerSatu, 2);
        
        $pertma = pow(1 , $akar);
        
        
        $dua = pow(5 , $akar);
        
        $tiga = pow(3 , $akar);
        
        $jumlah = $pertma + $dua + $tiga;
        
        if($jumlah == $numerSatu){
            echo 'true';
        }
        
    }
    function number2(){
        
        $numerSatu = 111;

        $akar =  substr($numerSatu, 2);
        
        $pertma = pow(1 , $akar);
        
        
        $dua = pow(1 , $akar);
        
        $tiga = pow(1 , $akar);
        
        $jumlah = $pertma + $dua + $tiga;
        
        if($jumlah == $numerSatu){
            echo 'true';
        }else{
            echo 'false';
        }
        
    }
}

$tes = new NumberSatu;
echo $tes->number1();
echo "<br />";
echo $tes->number2();

?>