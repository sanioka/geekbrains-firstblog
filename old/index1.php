<?php
    //echo "Hello world!";
    //echo time();

    function add($param1, $param2){
        return $param1 + $param2;
    }

    $a = $_GET['a'];
    $b = $_GET['b'];

    echo "a+b=".add($a,$b);
    
    echo "<br><br>";
    for($i=0;$i<$a;$i=$i+$b){
        echo $i."<br>";
    }
?>