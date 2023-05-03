<?php
    $phrase = trim($_POST['phrase']); 
    $word = trim($_POST['word']);

    $lenght = strlen($phrase);

    $censured_phrase = str_replace($word, '****', $phrase)
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
    <h1><?php echo $phrase . ' ' . $lenght ?></h1>
    <h1><?php echo $censured_phrase ?></h1>
</body>
</html>