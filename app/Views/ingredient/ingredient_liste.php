<!-- RECETTE_CONTENT -->

<section>

    <h1>Liste des ingredient actuellement à la carte</h1>

    <table class='table table-striped'>
        <thead>
            <th>Nom de l'ingredient</th>
            <th>Unité de mesure</th>
            <th>Fréquence d'utilisation</th>
        </thead>
        <?php
    foreach($Les_Ingredients as $Ingredient){
        echo "<tr>";
        echo "<td>";
        echo $Ingredient['nomIngredient'];
        echo "</td>";
        echo "<td>";
        echo $Ingredient['unite'];
        echo "</td>";
        echo "<td>";
        echo $Ingredient['fqUtilisation'];
        echo "</td>";
        echo "</tr>";

    };
    
    ?>
    </table>

    

</section>