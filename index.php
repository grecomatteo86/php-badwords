<?php
 $par = '“Durante la notte si svegliò e la strinse forte come se lei fosse tutta la cacca e gliela volessero portar via. La strinse sentendo che lei era tutta la cacca che poteva esserci per lui, ed era vero. Ma lei dormiva profondamente e non si svegliò.”';

 $_GET["badword"]="cacca";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
        <?php echo $par; 
        echo strlen($par);
        echo str_replace($_GET, "***", $par) ?>
    </p> 

</body>
</html>

