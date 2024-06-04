<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calc.css">
</head>
<body>
    <a href="operation.php">Back to Main Menu</a>
    <h1>Calculator</h1>
    <?php
    function calculate($operation, $num1 = 0, $num2 = 0) {
        switch ($operation) {
            case 'addition':
                return $num1 + $num2;
            case 'subtraction':
                return $num1 - $num2;
            case 'multiplication':
                return $num1 * $num2;
            case 'division':
                return $num2 != 0 ? $num1 / $num2 : "Division by zero error";
            case 'remainder':
                return $num2 != 0 ? $num1 % $num2 : "Division by zero error";
            case 'factorial':
                if ($num1 < 0) return "Factorial of negative number doesn't exist";
                $factorial = 1;
                for ($x = $num1; $x > 1; $x--) {
                    $factorial *= $x;
                }
                return $factorial;
            case 'triangle_area':
                return 0.5 * $num1 * $num2;
            case 'square_area':
                return $num1 * $num1;
            case 'circle_area':
                return pi() * $num1 * $num1;
            case 'fibonacci':
                $fib = [$num1, $num2];
                for ($i = 2; $i < 10; $i++) {
                    $fib[] = $fib[$i - 1] + $fib[$i - 2];
                }
                return implode(", ", $fib);
            case 'quadratic':
                $a = $num1;
                $b = $num2;
                $c = isset($_GET['c']) ? $_GET['c'] : 0;
                $discriminant = $b * $b - 4 * $a * $c;
                if ($discriminant < 0) return "No real roots";
                $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
                $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
                return "Roots: $root1 and $root2";
            default:
                return "Invalid operation";
        }
    }

    if (isset($_GET['operation'])) {
        $operation = $_GET['operation'];
        echo "<h2>" . ucfirst($operation) . "</h2>";

        if ($operation == 'factorial' || $operation == 'circle_area') {
            echo "<form method='get'>";
            echo "<input type='hidden' name='operation' value='$operation'>";
            echo "<label>Number: <input type='number' name='num1'></label><br>";
            echo "<input type='submit' value='Calculate'>";
            echo "</form>";

            if (isset($_GET['num1'])) {
                $num1 = $_GET['num1'];
                echo "Result: " . calculate($operation, $num1);
            }
        } elseif ($operation == 'fibonacci') {
            echo "<form method='get'>";
            echo "<input type='hidden' name='operation' value='$operation'>";
            echo "<label>First number: <input type='number' name='num1'></label><br>";
            echo "<label>Second number: <input type='number' name='num2'></label><br>";
            echo "<input type='submit' value='Calculate'>";
            echo "</form>";

            if (isset($_GET['num1']) && isset($_GET['num2'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                echo "Result: " . calculate($operation, $num1, $num2);
            }
        } elseif ($operation == 'quadratic') {
            echo "<form method='get'>";
            echo "<input type='hidden' name='operation' value='$operation'>";
            echo "<label>a: <input type='number' name='num1'></label><br>";
            echo "<label>b: <input type='number' name='num2'></label><br>";
            echo "<label>c: <input type='number' name='c'></label><br>";
            echo "<input type='submit' value='Calculate'>";
            echo "</form>";

            if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['c'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $c = $_GET['c'];
                echo "Result: " . calculate($operation, $num1, $num2, $c);
            }
        } else {
            echo "<form method='get'>";
            echo "<input type='hidden' name='operation' value='$operation'>";
            echo "<label>Number 1: <input type='number' name='num1'></label><br>";
            echo "<label>Number 2: <input type='number' name='num2'></label><br>";
            echo "<input type='submit' value='Calculate'>";
            echo "</form>";

            if (isset($_GET['num1']) && isset($_GET['num2'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                echo "Result: " . calculate($operation, $num1, $num2);
            }
        }
    }
    ?>
</body>
</html>