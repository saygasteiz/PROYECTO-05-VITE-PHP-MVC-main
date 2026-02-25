<input type="checkbox" name="toggle" id="chec" >
<label for="chec" class="contenedor_spam">
    <span ></span>
    <span></span>
    <span></span>
</label>

<nav>
    <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?=$nav_logo_alt?>" title="<?=$nav_logo_title?>" width="100" height="40">

    <?php
    // enlaces de la web
    include $appRoot . '/includes/enlaces_menu.php'
    ?>

    <ul class="idiomas">
        <li><a href="<?=$_ENV['RUTA']?><?=$urlMultilangs['eu']?>">eu</a></li>
        <li><a href="<?=$_ENV['RUTA']?><?=$urlMultilangs['es']?>">es</a></li>
    </ul>
</nav>
