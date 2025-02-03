
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height:100vh;
          
        }
        .container {
            background:gray
        
           
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        .guzik{
            background:gray
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Krok 1/4</h2>
        <form action="krok.05.php" method="post">
            <label for="name">Imię</label>
            <input type="text" id="name" name="name" required >
            <label for="surname">Nazwisko</label>
            <input type="text" id="surname" name="surname" required>
            <label for="age">Wiek</label>
            <input type="number" id="age" name="age">
            <button type="submit" class="guzik">Dalej ></button>
            
        </form>
    </div>
</body>
</html>
