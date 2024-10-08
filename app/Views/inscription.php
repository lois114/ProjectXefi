

<!DOCTYPE html>
<html lang="en">


<body>
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  
  <div class="container-xxl py-5">
    <div class="container">
    <a href="trello" target="_blank" style="" class='btn btn-primary py-3 px-5'>Trello </a>
     
      <div class="col-lg-6 mx-auto wow fadeIn" data-wow-delay="0.1s">
          <h1 class="display-6 mb-5">FORMULAIRE DE PRISE EN CHARGE </h1>
</div>
<div class="col-lg-12  wow fadeIn" data-wow-delay="0.1s">
          <form action="<?php echo base_url(); ?>/SignupController/store" method="post">

            <div class="row g-3">
              <div class="col-md-2">
                <div class="form-floating">
                  <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Nom" required>
                  <label for="Nom">Nom</label>
                </div>
              
              
                <div class="form-floating">
                  <input type="text" class="form-control" name="Prenom" id="Prenom" placeholder="Prenom" required>
                  <label for="Prenom">Prenom</label>
                </div>
              
              
                <div class="form-floating">
                  <input type="date" class="form-control" name="Date" placeholder="Date"  id="Date" value="<?php echo date('Y-m-d'); ?>" required>
                  <label for="Date">Date de la demande</label>
                </div>
              

         
             
                <div class="form-floating">
                  <input type="email" class="form-control" name="Mail" placeholder="Mail" required>
                  <label for="Mail">Email</label>
                </div>
              
              
                <div class="form-floating">
                  <input type="tel" class="form-control" name="Tel" placeholder="Tel" required>
                  <label for="Tel">Téléphone</label>
                </div>
              </div>
              

              
              <div class="col-md-4">  <div class="form-floating">
                  <textarea class="form-control" name="DescMach" placeholder="Description de la machine" required></textarea>
                  <label for="DescMach">Description de la machine</label>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" name="Motdepasse" placeholder="Mot de passe machine" required>
                  <label for="Motdepasse">Mot de passe machine</label>
                </div>
              

            
                <div class="form-floating">
                  <textarea class="form-control" name="Description" placeholder="Description de la demande" rows="5" style="height: 100px;" required></textarea>
                  <label for="Description">Description de la demande</label>
                </div>

                </div>

             
              <div class="col-md-4">
               
                <canvas id="canvas" type="image" class="form-control" name="Lien" id="Lien"></canvas>

               
             </div>
             <div class="col-12">
                <button id="envoyerButton" class="btn btn-primary py-3 px-5" type="submit">Envoyer</button>

              
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

  <script>
  // Initialization
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");

  // Drawing variables
  var couleur = "#000000";
  var epaisseur = 1;
  var enTrainDeDessiner = false;

  // Drawing function
  function dessiner(x, y) {
    if (!enTrainDeDessiner) return;

    ctx.fillStyle = couleur;
    ctx.lineWidth = epaisseur;
    ctx.lineCap = 'round'; // Set line cap to round
    ctx.lineJoin = 'round'; // Set line join to round
    ctx.lineTo(x, y);
    ctx.stroke();
    ctx.beginPath();
    ctx.moveTo(x, y);
  }

  // Event listeners
  canvas.addEventListener("mousedown", function (event) {
    x = event.clientX - canvas.offsetLeft;
    y = event.clientY - canvas.offsetTop;
    enTrainDeDessiner = true;
    dessiner(x, y);
  });

  canvas.addEventListener("mousemove", function (event) {
    x = event.clientX - canvas.offsetLeft;
    y = event.clientY - canvas.offsetTop;
    dessiner(x, y);
  });

  canvas.addEventListener("mouseup", function () {
    enTrainDeDessiner = false;
    ctx.beginPath();
  });

  // Initial drawing
  dessiner(0, 0);

  // Capture canvas as PNG when the "Envoyer" button is clicked
  document.getElementById("envoyerButton").addEventListener("click", function () {
    captureCanvas();
  });


function captureCanvas() {

  var imageData = canvas.toDataURL("public/Signature");

  
  var link = document.createElement('a');

  var nom = document.getElementById('Nom').value;
  var Prenom = document.getElementById('Prenom').value;
  var Date = document.getElementById('Date').value;


  link.pathname = "C:/laragon/www/FORMULAIRE - Copie/public/Signature";
 
  link.href = imageData;

  link.download =  nom +'_'+ Prenom + '_' + Date + '_Signature.png';


  link.click();
}


</script>

  </body>

</html>
