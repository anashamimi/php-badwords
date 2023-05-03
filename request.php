<?php

    if(empty($phrase = trim($_POST['phrase'])) !== true ){
        $phrase = trim($_POST['phrase']); 
    $word = trim($_POST['word']);

    $lenght = strlen($phrase);
    $phrase_no_space = str_replace(' ', '', $phrase);
    $lenght_no_space = strlen($phrase_no_space);

    $censured_phrase = str_replace($word, '***', $phrase);
    } else {
        $error = 'i dati non sono stati inseriti correttamente';
    }
    
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
    <h2><?php echo $error?></h2>
    <h2><?php echo $phrase?></h2>
    <p>Lunghezza con spazi: <?php echo $lenght ?></p>
    <p>Lunghezza senza spazi: <?php echo $lenght_no_space ?></p>
    <h2><?php echo $censured_phrase ?></h2>
</body>
</html>