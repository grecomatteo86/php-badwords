<?php
 
 $badword = $_GET['badword'];

 $par = " Ti prometto che la prossima volta non manderò tutto a $badword, mamma";

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

