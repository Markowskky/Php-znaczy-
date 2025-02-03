
    <html>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
          
        }
        .container {
            background:gray;
        
           
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
    <body>
    <div class="container">
        <h2>  Krok 2/4</h2>
        <form action="krok0.75.php" method="post">
       
            <input type="hidden" id="name" name="name" required value="<?= ($_POST['name'])?>">
            <input type="hidden"  id="surname" name="surname" required value="<?= ($_POST['surname'])?>">
            <input type="hidden" id="age" name="age" value="<?= ($_POST['age'])?>">
            <label for="text">Ulica</label>
            <input type="text" id="street" name="street" required >
            <label for="text">Numer domu</label>
            <input type="text" id="home" name="home" required >
            <label for="text">Kod pocztowy</label>
            <input type="number" id="zipcode" name="zipcode" required>
            <button type="submit" class="guzik">Dalej ></button>
        </form>
    </div>
</body>
</html>
