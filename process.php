<h1>
<?php

    // echo "<pre>",var_dump($_REQUEST),"</pre>";

    $fname = $_REQUEST['fname'];
    $sname = $_REQUEST['sname'];

    $result = $fname + $sname;


    echo "Result is ".$result;


?>
</h1>