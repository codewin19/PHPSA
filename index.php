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
    <!-- <h1>This is home page</h1> -->
    
    <form action="process.php" method="get">
    <div>
        <input type="number" name="fname" placeholder="First Number">
        <input type="number" name="sname"  placeholder="second Number">
        <input type="submit" value="Add">
    </div>
    </form>
</body>

</html>