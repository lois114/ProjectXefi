
<body>
  <br>
  <br>
  
  <div class="container">
  <a href="historique"  style="margin-left: 1000px"  class='btn btn-warning'>Histo </a>
  <a href="inscription"  target="_blank" class='btn btn-primary'>Ajouter </a>
    <h1>Liste de tâches</h1>
   

    <div class="row">

       <div class="col-sm">
  <div class="card mb-4">
    <div class="card-header">
            <h2 class="card-title">A faire</h2>
          </div>
          <div class="card-body">
          <ul class="list-group">
          <?php
foreach ($LesPersonnes as $UnePersonne) {
    if ($UnePersonne['Indicateur'] == 1) {
       
        $dateActuelle = new DateTime();
        $datePersonne = new DateTime($UnePersonne['Date']); 
        $differenceEnJours = $dateActuelle->diff($datePersonne)->days;
        $classeCSS = ($differenceEnJours > 3) ? 'date-superieure' : '';

     
        echo "<li class='list-group-item $classeCSS'>";
        echo "<strong>Nom: </strong>" . $UnePersonne['Nom'] . "<br>";
        echo "<strong>Description: </strong>" . $UnePersonne['Nature'] . "<br>";
        echo '<strong>Date: </strong>' . $UnePersonne['Date'] . '<br>';
        echo "<strong>Mot de passe: </strong>" . $UnePersonne['Motdepasse'] . "<br>";
        echo "<div class='d-flex justify-content-between'>";
        ?> 
        <a href="javascript:window.open('detail/<?php echo $UnePersonne['id']; ?>', '_blank', 'width=500,height=600,left=500,top=100')" class="btn btn-primary" >Détail</a>
        <?php
        echo "<a href='" . base_url('update/' . $UnePersonne['id']) . "' class='btn btn-warning  ' '>&#9658;</a>";
        echo "<a href='" . base_url('delete/' . $UnePersonne['id']) . "' class='btn btn-danger' onclick='return confirm(\"Voulez-vous vraiment supprimer cette personne ?\")'>Del</a>";
        echo "</div>";
        echo "</li>";
    }
}
?>

            </ul>
          </div>
        </div>
      </div>



    
      <div class="col-sm">
  <div class="card mb-4">
    <div class="card-header">
            <h2 class="card-title">En cours</h2>
          </div>
          <div class="card-body">
          <ul class="list-group">
          <?php
  foreach ($LesPersonnes as $UnePersonne) {
    if ($UnePersonne['Indicateur'] == 2) {
      echo "<li class='list-group-item'>";
      echo "<strong>Nom: </strong>" . $UnePersonne['Nom'] . "<br>";

      echo "<strong>Description: </strong>" . $UnePersonne['Nature'] . "<br>";
      echo "<strong>Date: </strong>" . $UnePersonne['Date'] . "<br>";
      echo "<strong>Mot de passe: </strong>" . $UnePersonne['Motdepasse'] . "<br>";
      echo "<div class='d-flex justify-content-between'>";
      ?> 
      <a href="javascript:window.open('detail/<?php echo $UnePersonne['id']; ?>', '_blank', 'width=500,height=600,left=500,top=100')" class="btn btn-primary">Détail</a>
         <?php
      echo "<a href='" . base_url('update_moins_1/' . $UnePersonne['id']) . "' class='btn btn-warning ' '>&#9668;</a>";
      echo "<a href='" . base_url('update/' . $UnePersonne['id']) . "' class='btn btn-warning  ' '>&#9658;</a>";

      echo "<a href='" . base_url('delete/' . $UnePersonne['id']) . "' class='btn btn-danger' onclick='return confirm(\"Voulez-vous vraiment supprimer cette personne ?\")'>Del</a>";

      echo "</div>";
      echo "</li>";
    }
  }
  ?>
            </ul>
          </div>
        </div>
      </div>

      
      <div class="col-sm">
  <div class="card mb-4">
    <div class="card-header">
            <h2 class="card-title">Facturation</h2>
          </div>
          <div class="card-body">
          <ul class="list-group">
          <?php
  foreach ($LesPersonnes as $UnePersonne) {
    if ($UnePersonne['Indicateur'] == 3) {
      echo "<li class='list-group-item'>";
      echo "<strong>Nom: </strong>" . $UnePersonne['Nom'] . "<br>";

      echo "<strong>Description: </strong>" . $UnePersonne['Nature'] . "<br>";
      echo "<strong>Date: </strong>" . $UnePersonne['Date'] . "<br>";
      echo "<strong>Mot de passe: </strong>" . $UnePersonne['Motdepasse'] . "<br>";
      echo "<div class='d-flex justify-content-between'>";
      ?> 
      <a href="javascript:window.open('detail/<?php echo $UnePersonne['id']; ?>', '_blank', 'width=500,height=600,left=500,top=100')" class="btn btn-primary">Détail</a>
         <?php
      echo "<a href='" . base_url('update_moins_1/' . $UnePersonne['id']) . "' class='btn btn-warning ' '>&#9668;</a>";
      echo "<a href='" . base_url('update/' . $UnePersonne['id']) . "' class='btn btn-warning  ' '>&#9658;</a>";

      echo "<a href='" . base_url('delete/' . $UnePersonne['id']) . "' class='btn btn-danger' onclick='return confirm(\"Voulez-vous vraiment supprimer cette personne ?\")'>Del</a>";

      echo "</div>";
      echo "</li>";
    }
  }
  ?>
            </ul>
          </div>
        </div>
      </div>
      
      


      <div class="col-sm">
  <div class="card mb-4">
    <div class="card-header">
      <h2 class="card-title">Terminé</h2>
    </div>
    <div class="card-body">
    <ul class="list-group">
  <?php
  foreach ($LesPersonnes as $UnePersonne) {
    if ($UnePersonne['Indicateur'] == 4) {
      echo "<li class='list-group-item'>";
      echo "<strong>Nom: </strong>" . $UnePersonne['Nom'] . "<br>";

      echo "<strong>Description: </strong>" . $UnePersonne['Nature'] . "<br>";
      echo "<strong>Date: </strong>" . $UnePersonne['Date'] . "<br>";
      echo "<strong>Mot de passe: </strong>" . $UnePersonne['Motdepasse'] . "<br>";
      echo "<div class='d-flex justify-content-between'>";
      ?> 
   <a href="javascript:window.open('detail/<?php echo $UnePersonne['id']; ?>', '_blank', 'width=500,height=600,left=500,top=100')" class="btn btn-primary">Détail</a>
      <?php
      // echo "<a href='" . base_url('detail/' . $UnePersonne['id']) . "' class='btn btn-primary '>Détail</a>";
      echo "<a href='" . base_url('update_moins_1/' . $UnePersonne['id']) . "' class='btn btn-warning  ' '>&#9668;</a>";
      echo "<a href='" . base_url('delete/' . $UnePersonne['id']) . "' class='btn btn-danger' onclick='return confirm(\"Voulez-vous vraiment supprimer cette personne ?\")'>Del</a>";


      
      
      echo "</div>";
      echo "</li>";
    }
  }
  ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
   
  </div>

  
  
</body>

</html>

