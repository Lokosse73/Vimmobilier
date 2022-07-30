<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Vimmobilier</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="BurgerStyle.css">
    </head>
    <header>
        <?php
            require_once("header.php");
        ?>
    </header>
    <body>
        <div class="searchBar" id="mySidenav">
            <form action="" method="get">
                <input type="search" name="city" placeholder="Ville" required>
                <div>
                    <label for="PriceMin">Prix :</label>
                    <input type="number" name="PriceMin" min="0" placeholder="Min">
                    <input type="number" name="PriceMax" placeholder="Max">
                </div>
                    <label for="TypeA">Type :</label>
                    <input type="number" name="TypeA" value="1" min="0" required>
                <div class="flex align">
                    <input type="radio" name="TypeB" value="0" checked>
                    <label for="0">Appartement</label>
                    <input type="radio" name="TypeB" value="1">
                    <label for="1">Maison</label>
                </div>
                <input type="submit" value="Rechercher">
            </form>
        </div>
        <main>
            <?php
            require_once "Back/ConnectSQL.php";
            $sql = "SELECT * FROM building";
            $result = $link->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
                while($row = $result->fetch_assoc()) {
                  $date = date_create($row['date']);
                  $date = date_format($date, 'd/m/Y');
                  require_once 'Back/Card.php';
                  $NewCard = new Card($row['id'], $row['image'], $row['name'], $row['owner'], $date, $row['city'], $row['zip'], $row['adresse'], $row['price'], $row['typea'], $row['typeb']);
                  $NewCard->loadCard();
                }
            }
            /*require_once 'Back/Card.php';
            $NewCard = new Card(0, "User/Lokosse73/20210630.jpg", "ClemVilla","Lokosse73", "04/07/22", "Aix-Les-Bains", 73100, "4 chemin des bauges", 800, 5, "Maison");
            $NewCard->loadCard();*/
            ?>
        </main>
    </body>
    <footer>
    </footer>
    <script src="script.js"></script>
</html>