<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?PHP
for ($row = 0; $row < 9; $row++){
    for ($col = 0; $col < 5; $col++){
        $buttonContent = 0;

        if($row ==0 || $row ==4 || $row == 8){
            $buttonContent = 1;

        }
        if(($row >=1 && $row <=3) && $col ==0){
            $buttonContent = 1;
        }
        if(($row >=5 && $row <=7) && $col ==4){
            $buttonContent = 1;
        }
        if($buttonContent == 1)
        {
            echo "<button style=\"background-color: blue\">$buttonContent</button>";
        }
        else
        {
            echo "<button>$buttonContent</button>";
        }


    }
    echo "<br/>";
}

?>
</body>
</html>