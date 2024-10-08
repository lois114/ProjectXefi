<body class="container mt-5">

  <a href="trello" class='btn btn-warning'>Retour </a>

  <?php
$delete_url = base_url('deletehisto');
echo "<a href='#' class='btn btn-danger' onclick='confirmDelete(\"$delete_url\")'>Supprimer l'Historique</a>";
?>

    <h1 class="mb-4">Historique</h1>
    
    <div class="card">
        <div class="card-body">
        <ul class="list-group">
        <li class='list-group-item'>
 
        <?php foreach ($personneshisto as $personne): ?>
            <div class="card" style="margin-bottom: 15px">
    <p class="card-text"><strong>Nom:</strong> <?= esc($personne->HNom) ?></p>
    <p class="card-text"><strong>Prénom:</strong> <?= esc($personne->HPrenom) ?></p>
    <p class="card-text"><strong>Email:</strong> <?= esc($personne->HMail) ?></p>
    <p class="card-text"><strong>Téléphone:</strong> <?= esc($personne->HTel) ?></p>
    <p class="card-text"><strong>Description machine:</strong> <?= esc($personne->HDescMach) ?></p>
    <p class="card-text"><strong>Mot de passe machine:</strong> <?= esc($personne->HMotdepasse) ?></p>
    <p class="card-text"><strong>Date de la demande:</strong> <?= esc($personne->HDate) ?></p>
    <p class="card-text"><strong>Description:</strong> <?= esc($personne->HDescription) ?></p>
    <p class="card-text"><strong>Date de l'historisation:</strong> <?= esc($personne->DateHisto) ?></p>
    
  
            <img src="<?php echo base_url('/Signature/' . ($personne->HSignature)); ?>" alt="Votre Image" width="200" height="200">
            </div>
<?php endforeach; ?>

        </div>
</li>
</ul>
    </div>

    <br>

 

<script>
function confirmDelete(deleteUrl) {
    var confirmation = confirm("Êtes-vous sûr de vouloir supprimer l'historique ?");
    if (confirmation) {
        window.location.href = deleteUrl;
    } else {
        // L'utilisateur a annulé la suppression, rien ne se passe.
    }
}
</script>