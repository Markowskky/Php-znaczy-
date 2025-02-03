<?php

   ($_POST['name']); ($_POST['surname']);
    ($_POST['street']);($_POST['home']);
    ($_POST['zipcode']);


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
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
        <h2>Krok 4/4</h2>
        <h1>Ubezpieczenie dla:</h1>
        <?=($_POST['name'])?> <?= ($_POST['surname'])?> <br>
        <?=($_POST['age'])?><br>
        <?= ($_POST['street'])?><?=($_POST['home'])?><br><?=($_POST['zipcode']); ?><br>
        <form action="krok0.25.php" method="post">

          
            
            <button type="submit" class="guzik">Nowe ubezpiecznie</button>
        </form>
    </div>
</body>
</html>