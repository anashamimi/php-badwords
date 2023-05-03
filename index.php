<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="request.php" method="POST">
            <div>
                <label for="phrase">Inserisci una frase</label>
                <input type="text" name="phrase" id="phrase">
            </div>
            
            <div>
               <label for="word">Inserisci una parola da censurare</label>
                <input type="text" name="word" id="word"> 
            </div>
            <div>
                <input type="submit" value="Invia">
            </div>
            
        </form>
    </div>
    
</body>
</html>