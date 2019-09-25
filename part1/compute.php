<?php
$num1 = 0;
$num2 = 0;
$Symbol = '+';
$result = 0;
if (isset($_GET['num1'], $_GET['Symbol'], $_GET['num2'])) {
    $num1 = $_GET['num1'];
    $Symbol = $_GET['Symbol'];
    $num2 = $_GET['num2'];
    eval("\$result=$num1$Symbol$num2;");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Examples</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="" rel="stylesheet">
</head>
<body>
<form action='compute.php'>
    <p>简易计算器</p>
    <input type='text' name='num1' value='<?php echo $num1 ?>'>
    <select name='Symbol'>
        <option value='+'>+
        </option>
        <option value='-'<?php if ($Symbol == '-') {
            echo 'selected';
        } ?>>-
        </option>
        <option value='*'<?php if ($Symbol == '*') {
            echo 'selected';
        } ?>>*
        </option>
        <option value='/'<?php if ($Symbol == '/') {
            echo 'selected';
        } ?>>÷
        </option>
        <option value='%'<?php if ($Symbol == '%') {
            echo 'selected';
        } ?>>%
        </option>
    </select>
    <input type='text' name='num2' value='<?php echo $num2 ?>'>
    <input type='submit' value='='>
    <?php
    echo $result;
    ?>
</form>
</body>
</html>