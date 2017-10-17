<?php
if (isset($_REQUEST['a']) && isset($_REQUEST['b'])) {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $operation = urldecode($_REQUEST['operation']);
    switch ($operation) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
        default:
            $result = "Illegal operation " . $operation;
    }
} else {
    $a = "";
    $b = "";
    $result = "";
    $operation = '+';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<h1>Calculator</h1>
<form action="calculator.php" method="GET">
    <input type="number" name="a" value="<?= $a ?>"/>
    <select name="operation">
        <option value="+" <?= ($operation == "+") ? "selected='selected'" : "" ?>>+</option>

        <option value="-" selected="<?= ($operation == "-") ?>">-</option>
        <option value="*" selected="<?= ($operation == "*") ?>">*</option>
        <option value="/" <?= ($operation == "/") ? "selected" : ""; ?>>/</option>
    </select>
    <input type=" number
        " name="b" value="<?= $b ?>"/>
    <input type="submit" value="="/>
    <?= $result ?>
</form>
</body>
</html>


