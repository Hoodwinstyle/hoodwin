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
