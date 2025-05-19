<!DOCTYPE html>
<html>
<head>
    <title>Assignment #2</title>
    <style>
        body {
            background-color: #fceee4;
            font-family: monospace;
            color: black;
        }
        .output {
            border: 3px double #333;
            padding: 20px;
            margin-top: 20px;
            background-color: #fff;
            white-space: pre-wrap;
        }
        .steps {
            background-color: #222;
            color: #ccc;
            padding: 10px;
            margin-top: 10px;
            font-size: 0.9em;
        }
        .highlight {
            color: green;
            font-weight: bold;
        }
        .result {
            color: darkblue;
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<h2>Assignment #2 Calculator</h2>
<form method="get">
    A: <input type="text" name="a" required><br>
    B: <input type="text" name="b" required><br>
    C: <input type="text" name="c" required><br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
    $a = escapeshellarg($_GET['a']);
    $b = escapeshellarg($_GET['b']);
    $c = escapeshellarg($_GET['c']);

    $command = "python3 calculate.py $a $b $c";
    $output = shell_exec($command);
    $steps = explode("\n", trim($output));

    date_default_timezone_set("UTC"); // O ajusta a tu zona horaria
    $timestamp = date("Y-m-d H:i:s");

    echo '<div class="output">';
    echo "===========================================\n";
    echo "<span class='highlight'>Assignment #2</span>\n";
    echo "<span style='color: red;'>Your_Lastname</span>\n\n";

    echo "<span class='result'>Final Result: {$steps[0]}</span>\n";

    echo "\n<div class='steps'>";
    for ($i = 1; $i < count($steps); $i++) {
        echo htmlspecialchars($steps[$i]) . "\n";
    }
    echo "</div>\n";

    echo "\n<i>Calculation completed at $timestamp</i>\n";
    echo "===========================================\n";
    echo '</div>';
}
?>

</body>
</html>
