<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Assignment - Calculator</title>
    <link rel="stylesheet" href="calc.css">
</head>

<body>
    <?php

    // Group Members Information
    $groupMembers = [
        ["id" => "0264/22", "name" => "beamanuel akliu"],
        ["id" => "0011/22", "name" => "leul dereje"],
        ["id" => "0122/22", "name" => "biniyam solomon"],
        ["id" => "0240/22", "name" => "biniyam wendafrash"],
        ["id" => "0275/22", "name" => "natnael usman"],
        ["id" => "0138/22", "name" => "hizkyas kibret"],
    ];

    // Display Group Members
    echo "<h1>Group Members</h1>";
    echo "<ul>";
    foreach ($groupMembers as $member) {
        echo "<li>ID: " . $member['id'] . " - Name: " . $member['name'] . "</li>";
    }
    echo "</ul>";

    // Main Menu
    echo "<h1>Main Menu</h1>";
    echo "<ul>";
    echo "<li><a href='operation.php?operation=addition'>Addition</a></li>";
    echo "<li><a href='operation.php?operation=subtraction'>Subtraction</a></li>";
    echo "<li><a href='operation.php?operation=multiplication'>Multiplication</a></li>";
    echo "<li><a href='operation.php?operation=division'>Division</a></li>";
    echo "<li><a href='operation.php?operation=remainder'>Remainder</a></li>";
    echo "<li><a href='operation.php?operation=factorial'>Factorial</a></li>";
    echo "<li><a href='operation.php?operation=triangle_area'>Area of a Triangle</a></li>";
    echo "<li><a href='operation.php?operation=square_area'>Area of a Square</a></li>";
    echo "<li><a href='operation.php?operation=circle_area'>Area of a Circle</a></li>";
    echo "<li><a href='operation.php?operation=fibonacci'>Fibonacci</a></li>";
    echo "<li><a href='operation.php?operation=quadratic'>Quadratic Equation</a></li>";
    echo "</ul>";
    ?>
</body>

</html>