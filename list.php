<?php
require_once 'function.php';
if (!isAutorizedUser()) {
    header('Location: index.php');
    exit;
}
$data = json_decode(file_get_contents(__DIR__.'/tests.json'), true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загруженные тесты</title>
</head>
<body>
<h2>Выберите тест</h2>
<ol>
    <?php foreach ($data as $number => $test):?>
        <li>
            Тест № <?php echo $number?>
        </li>
    <?php endforeach?>
</ol>
<form action="test.php" method="get">
    <p>Введите пожалуйста номер теста</p>
    <label>
        <input type="text" name="testNumber">
    </label>
    <input type="submit" value="Подтвердить">
</form>
</body>
</html>