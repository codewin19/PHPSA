<?php
$num=5;

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


