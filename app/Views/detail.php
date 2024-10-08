<body class="container mt-5">

    <h1 class="mb-4">Détail</h1>
    
    <div class="card">
        <div class="card-body">
        <ul class="list-group">
        <li class='list-group-item'>
            <p class="card-text"><strong>ID:</strong> <?= esc($personne['id']) ?></p>
            <p class="card-text"><strong>Nom:</strong> <?= esc($personne['Nom']) ?></p>
            <p class="card-text"><strong>Prénom:</strong> <?= esc($personne['Prenom']) ?></p>
            <p class="card-text"><strong>Email:</strong> <?= esc($personne['Mail']) ?></p>
            <p class="card-text"><strong>Téléphone:</strong> <?= esc($personne['Tel']) ?></p>
            <p class="card-text"><strong>Date:</strong> <?= esc($personne['Date']) ?></p>

            <p class="card-text"><strong>Mot de passe machine:</strong> <?= esc($personne['Motdepasse']) ?></p>
            <p class="card-text"><strong>Description machine (marque,modéle) :</strong> <?= esc($personne['DescMach']) ?></p>

            <p class="card-text"><strong>Description:</strong> <?= esc($personne['Description']) ?></p>

            <form action="<?= base_url("update_note/".$personne['id']) ?>" method="post">
    
            <div class="form-floating">
                                    <input type="text" class="form-control" name="Note" placeholder="Note" value="<?php echo ($personne['Note']); ?>" require>
                                    <label for="Note">Note</label>
                                </div>

    <button type="submit" class="btn btn-primary">Enregistrer la note</button>
</form>
        
            <strong>Signature :</strong>
            <img src="<?php echo base_url('/Signature/' . ($personne['Signature'])); ?>" alt="Votre Image">
         <?php   echo "<a href='" . base_url('generateFileToPdf/' . $personne['id']) . "' class='btn btn-primary'>PDF</a>";
?>

        </div>
</li>
</ul>
    </div>

    