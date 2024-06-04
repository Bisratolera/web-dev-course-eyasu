<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Increment Calculator</title>
    <style>
        body {
            font-family: verdana;
            margin: 0;
            padding: 0;
            --background-color: #f0f0f0; /* Default background color */
            --text-color: #000; /* Default text color */
        }

        /* Dark mode */
        body.dark-mode {
            --background-color: #333; /* Dark mode background color */
            --text-color: #fff; /* Dark mode text color */
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: var(--background-color);
            color: var(--text-color);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            text-wrap: nowrap;
            font-size: 12px;
        }

        .loader {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Salary Increment Calculator</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="salaryForm">
            <label for="salary">Current Salary:</label>
            <input type="number" id="salary" name="salary" required>
            <label for="years_experience">Years of Experience:</label>
            <input type="number" id="years_experience" name="years_experience" required>
            <button type="submit" id="calculateBtn">Calculate</button>
        </form>

        <!-- Dark mode toggle button -->
        <button onclick="toggleDarkMode()">Toggle Dark Mode</button>
    </div>

    <?php
    $increment = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['salary']) && isset($_POST['years_experience'])) {
            $salary = (float)$_POST['salary'];
            $years_experience = (int)$_POST['years_experience'];

            if ($salary >= 5000) {
                if ($years_experience >= 7) {
                    $increment = $salary + 1000;
                } else {
                    $increment = $salary + 500;
                }
            } elseif ($salary > 0) {
                if ($years_experience >= 7) {
                    $increment = $salary + 400;
                } else {
                    $increment = null;
                }
            } else {
                $increment = null;
            }
        }
    }
    ?>

    <!-- Display the calculated result -->
    <div class="container">
        <?php if ($increment !== null) : ?>
            <h2>Salary Increment Result</h2>
            <p>Incremented Salary: $<?php echo number_format($increment, 2); ?></p>
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>">
                <button>Calculate Another Salary</button>
            </a>
        <?php endif; ?>
    </div>


</body>

</html>
