<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="request.php" method="POST">
        <label for="phrase">Inserisci una frase</label>
        <input type="text" name="phrase" id="phrase">
        <label for="word">Inserisci una parola da censurare</label>
        <input type="text" name="word" id="word">
        <input type="submit" value="Invia">
    </form>
</body>
</html>