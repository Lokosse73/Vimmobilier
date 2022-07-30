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
        if(isset($_SESSION)){
            echo "<a href='index.php' class='active'><p>Recherche</p><img src='SVG/search.svg' alt='Recherche'></a>
                <a href='message.php'><p>Message</p><img src='SVG/chat-left.svg' alt='Message'></a>
                <a href='favorites.php'><p>Favoris</p><img src='SVG/heart.svg' alt='Favoris'></a>
                <a href='newLodging.php'><p>Nouveau logement</p><img src='SVG/plus-circle.svg' alt='Nouveau logement'></a>
                <a href='profile.php'><p>Profile</p><img src='SVG/person.svg' alt='Profile'></a>";
        }else{
            echo "<a href='index.php' class='active'><p>Recherche</p><img src='SVG/search.svg' alt='Recherche'></a>
                <a onclick='ShowConnection()' style='cursor: pointer'><p>Connection</p><img src='SVG/person.svg' alt='Profile'></a>";
            require_once "Front/Connection.php";
        }
        ?>
    </nav>
</div>