

      
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
           
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
                <a href=<?= base_url('') ?> class="nav-item nav-link active">Accueil</a>
                <a href=<?= base_url('/Planning') ?> class="nav-item nav-link">Planning</a>
                <a href=<?= base_url('/service') ?> class="nav-item nav-link">Billeterie</a>
             
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                 <a href=<?= base_url('/equipement') ?> class="nav-item nav-link">Equipement</a>

                       
                        <a href="quote.php" class="dropdown-item">Boutique</a>
         
                    </div>
                </div>
                <a href=<?= base_url('/contact') ?> class="nav-item nav-link">Contactez-nous</a>

                
                <?php
$session = session();
$active = (current_url() === base_url('connection')) ? 'active' : '';
$active_I = (current_url() === base_url('inscription')) ? 'active' : '';
$idPersonne = session('IdPersonne');

if (!$session->has('Mail')) {
    echo "<a href='".base_url('connection')."' class='nav-item nav-link {$active}'>Connexion</a>";
   echo "<a href='".base_url('inscription')."' class='nav-item nav-link {$active_I}'>Inscription</a>";
  
  
} else {
    
    echo "<a class='nav-item nav-link' href='".base_url('/SigninController/logout')."'>Déconnexion</a>";

    if (session()->get('Rank') === 'ADMIN' || session()->get('Rank') === 'ENTRAINEUR') {

    echo "<a class='nav-item nav-link' href='".base_url('/admin')."'> Liste Adhérents </a>";

     }


if (session()->get('Rank') === 'USER' || session()->get('Rank') === null) {
    echo "<a class='nav-item nav-link' href='" . base_url('/profilevent/') .$idPersonne."'> Liste Event </a>";
}

}


    

?>        
            </div>
           
      
        </div>
            
            </div>
        </div>
        <?php
        if ($session->has('Mail')) {
        echo "<p style ='margin-top : 12px;' > Connecté sous : " . session()->get('Login') . "</p>";
   

        }
        ?>  
    </nav>

    
    <!-- Navbar End -->

</header>

