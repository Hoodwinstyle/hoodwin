<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<div>
<h1>Прототип калькулятора</h1>
<form action='' method='post' class="calculate-form">
    <input type="text" name="number1" class="numbers" placeholder="Первое число">
    <select class="operations" name="operation">
        <option value='plus'>+</option>
        <option value='minus'>-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="text" name="number2" class="numbers" placeholder="Второе число">

    <input class="submit_form" type="submit" name="submit" value="Получить ответ">
</form>
</div>
</body>
</html>


<?php
if(isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    if(!$operation || ($number1 == '') || ($number2 == '')){
        $result = "Не все аргументы введены";
    }
    else {
        switch ($operation) {
            case 'plus':
                $result = $number1 + $number2;
                break;
            case 'minus':
                $result = $number1 - $number2;
                break;
            case 'multiply':
                $result = $number1 * $number2;
                break;
            case 'divide':
                if ($number1 * $number2 == 0) {
                    $result = "На ноль делить нельзя!";
                } else {
                    $result = $number1 / $number2;
                    break;
                }
        }
    }
    echo "<div class='answer-text'>Ответ: $result</div>";

}
