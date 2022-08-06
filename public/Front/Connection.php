<div id="ConnectionScreen" class="form-comp hidden">
    <div class="form-Panel">
        <form action="#" method="post">
            <h3>Connection</h3>
            <?php
            echo "<p style='color: lightcoral'>$redText</p>";
            ?>
            <label for="email">Email :
                <input type="email" name="email" required>
            </label>
            <label for="password">Mot de passe :
                <input type="password" name="password" required>
            </label>
            <input type="hidden" value="login" name="login">
            <input type="submit" value="Connection">
            <div class="flex">
                <a class ='textButton' onclick="ShowSignup()">Inscription</a>
                <a class ='textButton' style="margin-left: auto" onclick="HideLogin()">Annuler</a>
            </div>
        </form>
    </div>
</div>