<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo "Starter" ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        h1 {
            text-align: center;
            font-family: 
        }
    </style>
</head>

<body>
    <h1>
        <?php
        $d = date("D");

        switch ($d) {
            case "Mon":
                echo "Today is Monday";
                break;

            case "Tue":
                echo "Today is Tuesday";
                break;

            case "Wed":
                echo "Today is Wednesday";
                break;

            case "Thu":
                echo "Today is Thursday";
                break;

            case "Fri":
                echo "Today is Friday";
                break;

            case "Sat":
                echo "Today is Saturday";
                break;

            case "Sun":
                echo "Today is Sunday";
                break;

            default:
                echo "Wonder which day is this ?";
                break;
        }
        ?>
    </h1>
</body>

</html> 