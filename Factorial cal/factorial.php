<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Result</title>
</head>
<body>
    <h2>Factorial Result</h2>
    <?php
    class FactorialCalculator {
        public static function calculate($n) {
            if ($n < 0) {
                throw new InvalidArgumentException("Factorial is not defined for negative numbers.");
            }
            if ($n === 0 || $n === 1) {
                return 1;
            }
            return $n * self::calculate($n - 1);
        }
    }

    // Retrieve the number from the form
    $number = isset($_POST['number']) ? $_POST['number'] : null;

    if ($number !== null) {
        try {
            $factorial = FactorialCalculator::calculate($number);
            echo "<p>Factorial of $number is $factorial</p>";
        } catch (InvalidArgumentException $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p>Please enter a number.</p>";
    }
    ?>
    <p><a href="factorial.html">Go back</a></p>
</body>
</html>
