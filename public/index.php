<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vimmobilier</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="BurgerStyle.css">
        <script src="scriptBefore.js"></script>
    </head>
    <header>
        <?php
            require_once("header.php");
        ?>
    </header>
    <body>
        <div class="searchBar" id="mySidenav">
            <form action="" method="get" class="formSpacer">
                <?php
                if (!empty($_GET)){
                    $department = $_GET["department"];
                    $priceMin = $_GET["PriceMin"];
                    $priceMax = $_GET["PriceMax"];
                    $typeA = $_GET["TypeA"];
                    $TypeBNum = $_GET["TypeB"];
                    if($_GET["TypeB"] == 0){
                        $typeB = "checked";
                        $typeBB = "";
                    }else{
                        $typeBB = "checked";
                        $typeB = "";
                    }
                }else{
                    $department = "";
                    $priceMin = "";
                    $priceMax = "";
                    $typeA = "0";
                    $typeB = "checked";
                    $typeBB = "";
                }
                echo "<label>
                    <select id='select' name='department' required>"; require "Front/department.html"; echo "</select>
                </label>
                <div class='formSpacer'>
                    <label for='PriceMin'>Prix :
                        <input type='number' name='PriceMin' min='0' value='$priceMin' placeholder='Min'>
                    </label>
                    <label>
                        <input type='number' name='PriceMax' min='0' value='$priceMax' placeholder='Max'>
                    </label>
                </div>
                <label for='TypeA'>Type :
                    <input class='formSpacer' type='number' name='TypeA' value='$typeA' min='0' required>
                </label>
                <div class='flex align formSpacer'>
                    <label for='TypeB' class='flex'>
                        <input type='radio' name='TypeB' value='0' $typeB>
                        <p>Appartement</p>
                    </label>
                    <label for='TypeB' class='flex'>
                        <input type='radio' name='TypeB' value='1' $typeBB>
                        <p>Maison</p>
                    </label>

                </div>
                <input type='submit' value='Rechercher' class='formSpacer'>";
                if (!empty($_GET)) {
                    echo "<script>selectform('$department')</script>";
                }
                ?>
            </form>
        </div>
        <main>
            <?php
            if (!empty($_GET)){
                require_once "Back/ConnectSQL.php";
                $sql = "SELECT * FROM building WHERE department = '$department' AND typeb = '$TypeBNum'";
                if($typeA != 0){
                    $sql .= "AND typea = '$typeA'";
                }
                if ($priceMax != 0 && $priceMax != ""){
                    $sql .= "AND price BETWEEN '$priceMin' and '$priceMax'";
                }
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
            }
            ?>
        </main>
    </body>
    <footer>
    </footer>
    <script src="script.js"></script>
</html>