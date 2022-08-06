<div id="SignupScreen" class="form-comp hidden">
    <div class="form-Panel">
        <form action="#" method="post">
            <h3>Inscription</h3>
            <?php
            echo "<p style='color: lightcoral'>$redText</p>";
            ?>
            <label for="firstname">Prénom :
                <input type="text" name="firstname" required>
            </label>
            <label for="name">Nom :
                <input type="text" name="name" required>
            </label>
            <label for="birth">Date de naissance :
                <input type="date" name="birth" required>
            </label>
            <label for="username">Nom d'utilisateur :
                <input type="text" name="username" required>
            </label>
            <label for="email">Email :
                <input type="email" name="email" required>
            </label>
            <label for="password">Mot de passe :
                <input type="password" name="password" required>
            </label>
            <input type="hidden" value="signup" name="signup">
            <input type="submit" value="Inscription">

            <div class="flex">
                <a class ='textButton' onclick="ShowLogin()">Inscription</a>
                <a class ='textButton' style="margin-left: auto" onclick="HideSignup()">Annuler</a>
            </div>
        </form>
    </div>
</div>