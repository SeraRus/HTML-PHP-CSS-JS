<?php
    if (isset($_POST['name'])) {
        setcookie("name", $_POST['name'], time() + 60);
        setcookie("sex", $_POST['sex'], time() + 60);
        $valid = false;
        header('location: w5_act01.php');
    } elseif (empty($_COOKIE['name'])) {
        $valid = true;
    } else {
        $valid = false;
    }
?>
<!DOCTYPE html>
<html lang="zh-hk">
<head>
    <meta charset="UTF-8">
    <title>WhoAreYou</title>
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
<?php
    if ($valid) {
        echo "
<form method=\"post\" action=\"w5_act01.php\">
    <p>姓名:<label>
            <input type=\"text\" name=\"name\" min=\"10\" required>
        </label></p>
    <p>性別:<label>
            <input type=\"radio\" name=\"sex\" value=\"男\" required> 男
        </label><label>
            <input type=\"radio\" name=\"sex\" value=\"女\" required> 女
        </label><label>
            <input type=\"radio\" name=\"sex\" value=\"其他\" required> 其他
        </label></p>
    <input type=\"submit\" name=\"submit\" value=\"提交\"><input type=\"reset\" value=\"重設\"><br>
</form>
";
    } else {
        echo "<p>姓名：".$_COOKIE["name"].' <br>性別：'.$_COOKIE["sex"]."</p>";
    }
?>
</body>
