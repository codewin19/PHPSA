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
            $day_no = trim($_POST['day_no']);
            // multiple selection
            if($day_no==''){
                $message= "<span class='error'>Please A day number!</span>";
            }else{
               
               switch($day_no){
                   case 1:
                        $message = "Monday";
                        break;
                    case 2:
                        $message = "Tuesday";
                        break;
                    case 3:
                        $message = "wednesday";
                        break;
                    case 4:
                        $message = "Thursday";
                        break;
                    case 5:
                        $message ="Friday";
                        break;
                    case 6:
                        $message = "Saturday";
                        break;
                    case 7:
                        $message = "Sunday";
                        break;
                    default:
                        $message = "Invalid Day Number!";
               }
            }
            
            
        }

    ?>
    <form method="post">
        <div class="container">
            <input type="text" name="day_no" placeholder="Enter Day Number"><input type="submit" name="check" value="check">
            <div>
                <?php echo $message; ?>
            </div>
        </div>
    </form>
</body>
</html>