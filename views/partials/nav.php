        <nav>
            <ul>
                <li><a href="/" 
                 class="<?= urlIs('/') ? 'active' : 'notactive'
                 //= ($_SERVER['REQUEST_URI'] === '/') ? 'active' : 'noactive';

                 
                 /*if ($_SERVER['REQUEST_URI'] === '/') {
                    echo 'active';
                 } else {
                     echo 'noactive';  
                 }*/
                 ?>" 
                  >Acceuil</a></li>
                <li><a href="/about" class="<?= urlIs('/about') ? 'active' : 'notactive'?>">A propos</a></li>
                <li><a href="/contact" class="<?= urlIs('/contact') ? 'active' : 'notactive'?>">Contact</a></li>
            </ul>
        </nav>