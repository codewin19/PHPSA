<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age</title>
    <style>
        body{
            display:flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


        .error{
            color:red;
        }

        .green{
            color:greenyellow;
        }


        .warning{
            color: orange;
        }
    </style>
</head>
<body>
    <?php
    $message = '';
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $age = trim($_POST['age']);
            // multiple selection
            if($age==''){
                $message= "<span class='error'>Please Enter Your age!</span>";
            }else{
                if($age>=18){
                    $message = "<span class='green'>You are eligible for casting vote!</span>";
                }else{
                    $message = "<span class='warning'>You can not caste Vote. you can cast vote after ".(18-$age)." Years</span>";
                }
            }
            
            
        }

    ?>
    <form method="get">
        <div class="container">
            <input type="number" name="age" placeholder="Enter Your age"><input type="submit" name="check" value="check">
            <div>
                <?php echo $message; ?>
            </div>
        </div>
    </form>
</body>
</html>