<!DOCTYPE html>
<html lang="zh-hk">
<head>
    <meta charset="UTF-8">
    <title>BMI</title>
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
<form method="post" action="w2_act01a.php">
    <p>身高(cm/m):<label>
            <input type="number" step="0.01" name="height" min="0.4" max="250">
        </label></p>
    <p>體重(kg):<label>
            <input type="number" step="0.01" name="weight" min="0" max="250">
        </label></p>
    <p>性別:<label>
            <input type="radio" name="sex" value="Male"> 男
        </label><label>
            <input type="radio" name="sex" value="Female"> 女
        </label><label>
            <input type="radio" name="sex" value="Others"> 其他
        </label></p>
    <input type="submit" name="submit" value="提交"><input type="reset" value="重設"><br>
</form>
<?php
$valid = true;
$sex = '閣下';
if (empty($_POST['height'])) {
    $valid = false;
} elseif ($_POST['height'] > 10) {
    $_POST['height'] /= 100;
}

if (empty($_POST['weight'])) {
    $valid = false;
}

if (empty($_POST['sex'])) {
    $valid = false;
} elseif ($_POST['sex'] == "Male") {
    $sex = '你';
} elseif ($_POST['sex'] == "Female") {
    $sex = '妳';
}

if ($valid) {
    $bmi = round($_POST['weight'] / ($_POST['height'] ** 2), 1);
    echo "<p>{$sex}的BMI是$bmi</p>";
} else {
    echo "<p>請完整填寫身高體重及性別</p>";
}
?>
</body>
</html>
