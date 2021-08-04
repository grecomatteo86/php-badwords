<?php
 $originalParagraph = "Ti prometto che la prossima volta non manderò tutto a puttane, mamma";
 if (!empty($_GET['badword'])){
    $badword = $_GET['badword'];
    $changedParagraph = str_replace($badword, "***", $originalParagraph);
 }
 $getLength = strlen($changedParagraph);
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
        <?php echo "Paragrafo orinale: ".$originalParagraph?>
    </p>
    <p>
        <?php echo "Paragrafo modificato: ".$changedParagraph?>
    </p>
    <p>
        <?php echo "Il paragrafo è lungo ".$getLength." caratteri"?>
    </p>
</body>
</html>

