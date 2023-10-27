<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php functions</title>
</head>

<body>
    <!-- // Defining function -->

    <?php
    function init()
    {
        calculate();
        say_Something();
    };
    function say_Something()
    {
        echo "Hello Student, do you like the class? yes? okay geat";
    };
    function calculate()
    {
        echo 456 + 345;
    }
    init();

    ?>

    <!-- //function parameter -->
    <h3>function parameter</h3>
    <?php
    function greeting($message)
    {
        echo $message;
    }

    greeting("hi customer, how are you doing?");
    ?>
    <?php
    echo "<br>";
    function sum($number1, $number2)
    {
        $add = $number1 + $number2;
        echo $add;
    }
    sum(12, 44);
    ?>
    <br>

    <!-- // Return values from function -->
    <h4>return values from functions</h4>
    <h4>
        <?php
        function addNumbers($number1, $number2)
        {
            $sum = $number1 + $number2;
            return $sum;
        }
        $result = addNumbers(34, 44);
        echo $result;
        echo "<br/>";
        $result = addNumbers(100, $result);
        echo $result;
        ?>
    </h4>

    <h4>
        <!-- variable scopes// -->
        Global variables and local
    </h4>
    <h5>
        <?php
        $x = "outside"; //global variavbles
        function convert()
        {
            global $x;
            $x = "inside";
        }
        echo "$x" . "<br/>";
        convert();
        echo "$x";
        ?>
    </h5>
    <br>
    <br>


    <!-- Constants -->
    <h5>Constants</h5>
    <h5><?php
        define("Constant", 1000);
        echo Constant . "<br>";

        // Newer way of creating constants
        const constant = 100;
        echo constant;
        ?></h5>

    <!-- Maths function -->
    <h4>Maths function</h4>
    <h4>
        <?php
        echo pow(2, 7);
        echo "<br>";
        echo rand(1, 1000) . "<br>";
        echo sqrt(144) . "<br>";
        echo floor(4.7) . "<br>";
        echo ceil(4.7) . "<br>";
        echo ceil(5.4) . "<br>";
        echo round(4.7) . "<br>";
        echo round(4.4) . "<br>";



        ?>
        </h5>

        <!-- string function -->
        <h4>
            string functiom
            <?php
            $string = "Hi, how are you doing?";
            echo "$string" . "<br>";
            echo strlen($string) . "<br>";
            echo strtoupper($string) . "<br>";
            echo strtolower($string) . "<br>";

            ?>
        </h4>

        <!-- Array function -->
        <h4>Array functions</h4>
        <h4>
            <?php 
            $list = [33, 24, 3232, 21, 3232, 442, 321];
            echo max($list);
            echo "<br>";
            print_r($list);
            echo "<br>";
            sort($list);
            print_r($list);
            ?>
        </h4>

</body>

</html>