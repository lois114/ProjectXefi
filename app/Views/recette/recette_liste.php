<!-- RECETTE_CONTENT -->

<section>

    <h1>Liste des recettes actuellement à la carte</h1>

    <table class='table table-striped'>
        <thead>
            <th>Nom de la recette</th>
            <th> Instructions de préparation</th>
        </thead>
        <?php
        foreach($Les_Recettes as $Recette){
        echo "<tr>";
        echo "<td>";
        echo $Recette['nomRecette'];
        echo "</td>";
        echo "<td>";
        foreach ($Recette['Ingredients'] as $Ing){
            echo $Ing['nomIngredient'];
        }
        echo "</td>";
        echo "<td>";
        echo $Recette['instruction'];
        echo "</td>";
        echo "</tr>";

    };
    
    ?>
    </table>
</section>