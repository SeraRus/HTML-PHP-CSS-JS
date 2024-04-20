<!DOCTYPE html>
<html lang="zh-hk">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
    <style>
        table {
            color: whitesmoke;
        }
    </style>
</head>
<body style="background-color: #1d4b8f">
    <table border="">
        <thead>
            <tr>
                <td>Your NAME</td>
                <td><?php
                    date_default_timezone_set("ROC");
                    echo date("l dS").' of '.date("F Y");
                    ?></td>
            </tr>
        </thead>
    </table>
</body>
</html>
