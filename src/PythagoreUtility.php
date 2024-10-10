
<head>
    <title>Table de Pythagore</title>
</head>

<body>
    <h1>Blin Valentin</h1>

</body>

</html>

<?php

class PythagoreUtility {


    $t1 = array(1,2,3,4,5,6,7,8,9,10);
    $t2 = array(1,2,3,4,5,6,7,8,9,10);  

    echo "| ";
    echo 0;
    echo "  ";
    foreach($t1 as $n){
        echo "| ";
        echo $n;
        if($n<10) echo "  ";
        else echo " ";
    }

    echo "|";
    echo "\n";

    foreach($t2 as $n2){

        echo "| ";
        echo $n2;

        if($n2<10) echo "  ";
        else echo " ";

        foreach($t1 as $n1){
            echo "| ";
            echo $n1*$n2;

            if($n2*$n1<10) echo "  ";
        else echo " ";
        }

        echo "|";
        echo "\n";
    }


}

?>