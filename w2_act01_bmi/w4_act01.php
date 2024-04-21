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
<form method="post" action="w4_act01.php">
    <p>取出金額:<label>
            <input type="number" name="remain" min="10">
        </label></p>
    <input type="submit" name="submit" value="確定"><br>
</form>
<?php
if (empty($_POST['remain'])) {
    echo "<p>請輸入10的倍數</p>";
} else {
    $remain = $_POST['remain'];
    $money = array(1000, 500, 100, 50, 10);
    foreach ($money as $value) {
        $count = floor($remain / $value);
        for ($i = 0; $i < $count; $i++) {
            $remain -= $value;
            echo "<p>$value</p>";
        }
    }
}
?>
</body>
</html>