<!DOCTYPE html>
<html lang="zh-hk">
<head>
    <meta charset="UTF-8">
    <title>FibonacciSequence</title>
    <style>
        form{
            color: whitesmoke;
        }
        p {
            color: whitesmoke;
        }
    </style>
</head>
<body style="background-color: #1d4b8f">
<form method="post" action="w3_act01.php">
    <p>數列長度:<label>
            <input type="number" name="length" min="2">
        </label></p>
    <input type="submit" name="submit" value="確定"><br>
</form>
<?php
if (empty($_POST['length'])) {
    echo "<p>請輸入數字</p>";
} else {
    $times = $_POST['length'];
    echo '<p>';
    $times -= 2;
    $oldNumber = 0;
    $newNumber = 1;
    echo $oldNumber.' '.$newNumber.' ';
    while ($times != 0) {
        $times--;
        $printNumber = $oldNumber + $newNumber;
        echo "$printNumber ";
        $oldNumber = $newNumber;
        $newNumber = $printNumber;
    }
    echo '</p>';
}
?>
</body>
</html>
