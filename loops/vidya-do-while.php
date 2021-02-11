
<?php

//if(isset($_POST['submit'])) {
    $num = 7;
    $i = 2;
    $counter = true;

    do {
        if ($num % $i == 0) {
            $counter = false;
            break;
        }

        $i++; // update
    } while ($i <= $num/2);

    if($counter)
    {
        echo "This is a Prime Number!";
    }else{
        echo "This is not a Prime Number";
    }
//}
?>
