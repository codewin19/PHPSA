<?php

$usernames = ['Anand','Anil','Ravi','Raj','Kunal','Pooja'];

// using for loo
for($index=0;$index<count($usernames);$index++)
{
    echo "<p>{$usernames[$index]}</p>";
}

foreach ($usernames as $username)
{
    if($username[0]=='R')
        echo "\n<p>{$username}</p>";
}
