<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language="php"></script>
</head>
<body>
    <h2>
        <?php
        echo "jasds";
        ?>
    </h2>

    <h3>jkajd</h3>
    <h4><?php
    if(2 < 5){
        echo "it is lesser";
    }
    ?></h4>
    <h5>
        <?php
        $operation = "+";
        switch ($operation){
            case "-":
                echo "subtraction";
            break;
            case "+":
                echo "addition";
            break;
        default:
            echo "not an operation!!";
        break;
        }
        ?>
    </h5>
    <h4>
        While loop
        <?php
        $number = 0;
        while($number < 5){
            echo "$number";
            $number = $number + 1;
        }
        ?>
    </h4>
    <h4>
        For loop
        <?php
        for ($number = 0; $number < 10; $number++){
            echo $number;
        }
        ?>
    </h4>
    <h6>
        foreach
        <h6>
            <?php
            $numbers = array(345, 459, 24, 34434, 4);
            foreach($numbers as $number){
                echo $number . '<br/>';
            }
            ?>
        </h6>
    </h6>
</body>
</html>