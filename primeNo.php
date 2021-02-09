<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime and Composite number</title>
</head>
<body>
<form method=post>
<label for="number">Input A Number</label>

<input type="text" name="number">
<input type="submit" value="Submit" name="submit">
</form>
<?php
$n=0;
if(isset($_POST['submit']))
{
    $num=$_REQUEST['number'];

    //for($i=1;$i<=$num;$i++)
    for($i=2;$i<($num/2+1);$i++)
    {
        if($num%$i==0)
          break;
                
    }
        if($i==($num/2+1))
        {
            echo "This is a prime number";
        }
        else 
        {
            echo "This is not a prime number";
        }
}
?>
</body>
</html>
