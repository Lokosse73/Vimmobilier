<?php
session_start();
if(!empty($_POST)) {
    if (!empty($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        require_once "Back/ConnectSQL.php";
        $sql = "SELECT email FROM `users` WHERE email = '$email'";
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
            $sql = "SELECT username , password FROM `users` WHERE password = '$password'";
            $result = $link->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $username = $row['username'];
                    session_start();
                    $_SESSION['email'] = "$email";
                    $_SESSION['password'] = "$password";
                    $_SESSION['username'] = "$username";
                    header('Location: index.php');
                    exit();
                }
            }
            else{
                $redText = "Mauvais mot de passe";
                require_once "Front/Connection.php";
                echo "<script>ShowLogin()</script>";
            }
        }
        else{
            $redText = "Adresse email introuvable";
            require_once "Front/Connection.php";
            echo "<script>ShowLogin()</script>";
        }
    }
    if (!empty($_POST['signup'])) {
        $firstname = $_POST['firstname'];
        $name = $_POST['name'];
        $birth = $_POST['birth'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        require_once "Back/ConnectSQL.php";
        $sql = "SELECT * FROM `users` WHERE username = '$username'";
        $result = $link->query($sql);
        if ($result->num_rows < 0) {
            $sql = "SELECT * FROM `users` WHERE email = '$email'";
            $result = $link->query($sql);
            if ($result->num_rows < 0) {
                $sql = "INSERT INTO `users`(`firstname`, `name`, `birth`, `username`, `email`, `password`) VALUES ('$firstname', '$name', '$birth', '$username', '$email', '$password')";
                $result = $link->query($sql);
                if ($result === true) {
                    session_start();
                    $_SESSION['email'] = "$email";
                    $_SESSION['password'] = "$password";
                    $_SESSION['username'] = "$username";
                }
                header('Location: index.php');
                exit();
            }
            else{
                $redText = "Email déjà utiliser pour un autre compte";
                require_once "Front/Inscription.php";
                echo "<script>ShowSignup()</script>";
            }
        }
        else{
            $redText = "Nom d\'utilisateur déjà utiliser";
            require_once "Front/Inscription.php";
            echo "<script>ShowSignup()</script>";
        }
    }
    if (!empty($_POST['building'])){
        require_once "Back/ConnectSQL.php";
        $name = $_POST['name'];
        $city = $_POST['city'];
        $department = $_POST['department'];
        $zip = $_POST['zip'];
        $adresse = $_POST['adresse'];
        $price = $_POST['price'];
        $typea = $_POST['typea'];
        $typeb = $_POST['typeb'];
        $owner = $_SESSION['username'];
        $date = time();
        if(!file_exists("User/".$owner)){
            mkdir("User/".$owner);
        }
        $path = $_FILES["image"]["name"];
        $tmpName = $_FILES["image"]["tmp_name"];
        move_uploaded_file($tmpName, "User/".$owner."/".$path);
        $ImagePath = "User/".$owner."/".$path;

        $sql = "INSERT INTO `building`(`image`, `name`, `owner`, `date`, `department`, `city`, `zip`, `adresse`, `price`, `typea`, `typeb`) VALUES 
                ('$ImagePath','$name','$owner','$date','$department', '$city','$zip','$adresse','$price','$typea','$typeb')";
        $result = $link->query($sql);
        header('Location: index.php');
        exit();
    }
}

?>
<div class="NavBar flex">
    <a id="openBtn">
        <span class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>
    <img class="logo" src="Logo.png" alt="">
    <nav>
        <?php
        if(isset($_SESSION['email'])){
            echo "<a href='index.php' class='active'><p>Recherche</p><img src='SVG/search.svg' alt='Recherche'></a>
                <a href='message.php'><p>Message</p><img src='SVG/chat-left.svg' alt='Message'></a>
                <a href='favorites.php'><p>Favoris</p><img src='SVG/heart.svg' alt='Favoris'></a>
                <a onclick='ShowBuildings()' style='cursor: pointer'><p>Nouveau logement</p><img src='SVG/plus-circle.svg' alt='Nouveau logement'></a>
                <a href='profile.php'><p>Profile</p><img src='SVG/person.svg' alt='Profile'></a>";
        }else{
            echo "<a href='index.php' class='active'><p>Recherche</p><img src='SVG/search.svg' alt='Recherche'></a>
                <a onclick='ShowLogin()' style='cursor: pointer'><p>Connection</p><img src='SVG/person.svg' alt='Profile'></a>";
        }
        ?>
    </nav>
</div>
<?php
$redText = '';
require_once "Front/Inscription.php";
require_once "Front/Connection.php";
require_once "NewBuilding.php";
?>