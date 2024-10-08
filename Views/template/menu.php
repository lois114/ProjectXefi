    <div class="menu">
        <ul>
            <li class="logo">
                <a href=""><img src="<?= base_url(); ?>img/title.png",alt="logo" class="logo"/></a>
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="">COMMANDES</a></li>
            <li class="menu-item hidden"><?= anchor('recette/liste', 'A la carte', 'title="a la carte"')?></li>
            <li class="menu-item hidden"><?= anchor('ingredient/liste', 'Ingredients', 'title="ingredients"')?></li>
            <li class="menu-item hidden"><a href="">Recueil</a></li>
        </ul>
    </div>

</header>

