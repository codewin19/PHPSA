<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items:center;
            height:100vh;
            flex-direction: column;
        }

        div{
            display:flex;
            flex-direction: column;
           
        }

        div input{
            margin:10px;
        }
    </style>
</head>

<body>

        <?php
// echo "<pre>",var_dump($_REQUEST),"</pre>";

if(isset($_POST['add'])){

  

    $fname = $_REQUEST['fname'];
    $sname = $_REQUEST['sname'];

    $result = $fname + $sname;


    echo "<h1>Result is ".$result."</h1>";
    echo " <a href='index.php'>Calculate Again</a>";
}else{

?>
    <!-- <h1>This is home page</h1> -->

    <form  method="post">
    <div>
        <input type="number" name="fname" placeholder="First Number">
        <input type="number" name="sname"  placeholder="second Number">
        <input type="submit" value="Add" name="add">
    </div>
    </form>

    <?php

    
}


?>
</body>

</html>