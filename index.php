<?php
 
 $badword = $_GET['badword'];

 $par = "Durante la notte si svegliò e la strinse forte come se lei fosse tutta la $badword e gliela volessero portar via. La strinse sentendo che lei era tutta la $badword che poteva esserci per lui, ed era vero. Ma lei dormiva profondamente e non si svegliò.";

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
        <?php echo "Paragrafo orinale: ".$par;?>
    </p>

    <p>
     <?php echo "Il paragrafo è lungo ".strlen($par)." caratteri";?>
    </p>

    <p>
    <?php echo "Paragrafo modificato: ".str_replace($badword, "***", $par) ?>
    </p>


</body>
</html>

