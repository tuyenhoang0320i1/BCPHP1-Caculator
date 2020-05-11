<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Calculator</title>
</head>
<body>
<h2>Simple Calculator</h2>
<form method="post">
    <fieldset>
        <legend>Calculator</legend>
        First operand: <input type="text" name="firstnumber" value=""/><br>
        Operator: <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="multi">*</option>
            <option value="divi">/</option>
        </select><br>
        Second operand: <input type="text" name="secondnumber" value=""/><br>
        <input type="submit" value="Calculate">

    </fieldset>
</form>
<h2>Result:  </h2>
<?php
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstoperand = $_POST["firstnumber"];
    $secondoperand = $_POST["secondnumber"];
    $chooseoperator = $_POST["operator"];
    switch ($chooseoperator) {
        case "add":
            echo $firstoperand + $secondoperand;
            break;
        case "sub":
            echo $firstoperand - $secondoperand;
            break;
        case "multi":
            echo $firstoperand * $secondoperand;
            break;
        case "divi":
            if ($secondoperand == 0) {
                echo "Error";
            } else {
                echo $firstoperand / $secondoperand;
            }
            break;

    }
}
?>

</body>
</html>