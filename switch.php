<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $variable = "Korea";

        switch ($variable) {
            case "vietNam":
                echo "your favorite country is VietNam";
                break;
            case "American":
                echo "your favorite country is American";
                break;
            case "Japan":
                echo "your favorite country is Japan";
                break;
            case "Korea":
                echo "your favorite country is Korea";
                break;
            default:
                echo "What is your favorite country ?";
        }
    ?>
</body>
</html>