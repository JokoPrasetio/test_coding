<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['n'];

        if ($n < 1 || $n > 10) {
            echo "Please enter a number between 1 and 10.";
            return;
        }

        $matrix = array_fill(0, $n, array_fill(0, $n, 0));
        $value = 1;
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $matrix[$i][$j] = $value++;
            }
        }
        echo "<h2>Custom Matrix</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= $n; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $n; $j++) {
                if ($i + $j == $n + 1) {
                    echo "<td style='width: 30px; text-align: center;'>$i</td>";
                } else {
                    echo "<td style='width: 30px; text-align: center;'>*</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate</title>
</head>
<body>
    <h2>Generate </h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Enter : <input type="number" name="n" min="1" max="10" required><br>
        <input type="submit" value="Generate Matrix">
    </form>

</body>
</html>
