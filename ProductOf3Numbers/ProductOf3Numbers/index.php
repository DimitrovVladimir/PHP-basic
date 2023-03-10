<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        X: <input type="text" name="num1" />
		Y: <input type="text" name="num2" />
        Z: <input type="text" name="num3" />
		<input type="submit" />
    </form>
	<?php
    if (!isset($_GET['num1']) || !isset($_GET['num2']) ||!isset($_GET['num3'])){
        exit(1);
    }
    function isNegative ($num){
        return $num < 0;
    }
    $numbers = [$_GET ['num1'], $_GET ['num2'], $_GET ['num3']];
    $numbers = array_map('intval', $numbers);

    if(in_array('0', $numbers)){
        echo "Positive";
        exit(0);

    }

    $numbers = array_filter($numbers, 'isNegative');
    $negativeNumbersCount = count($numbers);
    $isPositive = $negativeNumbersCount % 2 == 0;
    if ($isPositive){
        echo "Positive";
    }
    else{
        echo "Negative";
    }
	?>
</body>
</html>
