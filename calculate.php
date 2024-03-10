<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <h2>Intermediate Calculator</h2>
        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Error: Division by zero!</p>";
                }
                break;
            default:
                echo "<p>Error: Invalid operator!</p>";
        }

        echo "<p>Result: $result</p>";
        ?>
        <br>
        <a href="calculator.html">Back to Calculator</a>
    </div>
</body>
</html>
