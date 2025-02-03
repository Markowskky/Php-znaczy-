
    <html>
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
    <body>
    <body>
    <div class="container">
        <h2> Krok 3/4</h2>
        <form action="podsumowanie.php" method="post">
            <input type="hidden" id="name" name="name" required value="<?= ($_POST['name'])?>">
            <input type="hidden"  id="surname" name="surname" required value="<?= ($_POST['surname'])?>">
            <input type="hidden" id="age" name="age" value="<?= ($_POST['age'])?>">
            <input type="hidden" id="street" name="street" required value="<?= ($_POST['street'])?>">
            <input type="hidden" id="home" name="home" required value="<?= ($_POST['home'])?>">
            <input type="hidden" id="zipcode" name="zipcode" required value="<?= ($_POST['zipcode'])?>">
        <label for="typ">Rodzaj ubezpieczenia</label>
            <select id="typ" name="typ" required value="<?= ($_POST['typ'])?>">
                <option value="Standard">Standard</option>
                <option value="Premium">Premium</option>
            </select>
            <button type="submit" class="guzik">Dalej ></button>
        </form>
    </div>
</body>
</html>