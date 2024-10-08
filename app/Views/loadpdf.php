
<html>

<head>
<style>
    body {
  font-family: sans-serif;
  font-size: 16px;
  
}

header {
  background-color: #000;
  color: #fff;
  padding: 20px;
}

h1 {
  font-size: 34px;


}

p {
  margin: 0px 0;
  
}

section {
  border-top: 1px solid #ccc;
  padding: 20px 0;
}

.h2_a {
  font-size: 30px;
  text-align: center;

}


    .invisible-space {
    color: transparent;
  }

  .user-details {
    border: 1px solid #ccc; /* Bordure de 1 pixel solide avec une couleur grise */
    padding: 10px; /* Espace intérieur de 10 pixels pour le contenu */
    margin: 10px 0; /* Marge extérieure de 10 pixels en haut et en bas */
    
  }

</style>
</head>
<body >


 
<h1><span style="color: red;font-weight: bolder; ">X</span>EFI<span class="invisible-space">  &nbsp &nbsp &nbsp &nbsp;</span>  iTech Solutions</span></h1>

 



  </header>

    
      <h2 class="h2_a">XEFI CASTELNAUDARY</h2>
      <div style="text-align:right">
      <p>5 RUE JOLIOT CURIE</p>
      <p>11150 BRAM</p>
      <p>(331.4.68.79.20.61)</p>
      </div>
  

    <section>
    <div style="text-align:center">
      <h2>Formulaire de prise en charge <em>S.A.V.</em></h2>
      <p><em>35 euros TTC</em></p>
      <p><em>La prise en charge et recherche panne</em></p>
      <p><em>Déduite sur le montant total de réparation.</em></p>
</div>


    <div class="user-details">
          
            <p ><strong>Nom :</strong> <?= esc($users['Nom']) ?></p>
</br>
            <p ><strong>Prénom :</strong> <?= esc($users['Prenom']) ?></p>
</br>
            <p><strong>Email :</strong> <?= esc($users['Mail']) ?></p>
</br>
            <p ><strong>Téléphone :</strong> <?= esc($users['Tel']) ?></p>
</br>
            <p ><strong>Mot de passe machine:</strong> <?= esc($users['Motdepasse']) ?></p>
            </div>
            <div class="user-details">
            <p ><strong>Date de la demande :</strong> <?= esc($users['Date']) ?></p>
</br>
            
            <p ><strong>Description de la machine (marque,modèle) :</strong> <?= esc($users['DescMach']) ?></p>
</br>
            <p ><strong>Motif de la demande :</strong> <?= esc($users['Description']) ?></p>
           
           
            
           
</br>

<p ><strong>Note:</strong> <?= esc($users['Note']) ?></p>
</div>
            </div>
   <br>
        
            <strong style="text-decoration: underline;">Nom et Signature :</strong>
            <?= esc($users['Nom']) ?>
   <br>
   


        </div>
    
 



</html>