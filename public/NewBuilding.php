<div id="NewBuildingScreen" class="form-comp hidden">
    <div class="form-Panel">
        <form action="#" method="post" enctype="multipart/form-data">
            <h3>Ajouter un logement</h3>
            <label for="name">Photo du logement :
                <input type="file" name="image" accept=".png" required>
            </label>
            <label for="name">Nom du logement :
                <input type="text" name="name" required>
            </label>
            <label>Département :
                <select name='department' required> <?php require "Front/department.html"; ?></select>
            </label>
            <label for="city">Ville :
                <input type="text" name="city" required>
            </label>
            <label for="zip">Code postal :
                <input type="number" name="zip" required>
            </label>
            <label for="adresse">Adresse :
                <input type="text" name="adresse" required>
            </label>
            <label for="price">Prix :
                <input type="number" name="price" required>
            </label>
            <label for="typea">Type :
                <input type="number" name="typea" required>
            </label>
            <div class="flex">
                <label for="0" class="flex">
                    <input type="radio" name="typeb" value="0" checked>
                    <p>Appartement</p>
                </label>
                <label for="1" class="flex">
                    <input type="radio" name="typeb" value="1">
                    <p>Maison</p>
                </label>
            </div>
            <input type="hidden" value="building" name="building">
            <input type="submit" value="Ajouter">
            <a class ='textButton' style="margin-left:auto" onclick="HideBuilding()">Annuler</a>
        </form>
    </div>
</div>