<footer>
    <!-- caja superior de información -->
    <div>
        <div class="cajaInfo">
            <?php
            // enlaces de la web
            include $appRoot . '/includes/enlaces_menu.php'
            ?>
        </div>

        <div class="cajaInfo">
            <ul>
                <li><a href="<?=$footer_portfolio_href?>" title="<?=$footer_portfolio_title?>"><?=$footer_portfolio_label?></a></li>
                <li><a href="<?=$footer_academia_href?>" title="<?=$footer_academia_title?>"><?=$footer_academia_label?></a></li>
            </ul>
            <div class="rrss">
                <a href="<?=$footer_facebook_href?>" title="<?=$footer_facebook_title?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-facebook.svg" alt="<?=$footer_facebook_alt?>" title="<?=$footer_facebook_title?>" width="30" height="30">
                </a>

                <a href="<?=$footer_linkedin_href?>" title="<?=$footer_linkedin_title?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-linkedin.svg" alt="<?=$footer_linkedin_alt?>" title="<?=$footer_linkedin_title?>" width="30" height="30">
                </a>

                <a href="<?=$footer_instagram_href?>" title="<?=$footer_instagram_title?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-instagram.svg" alt="<?=$footer_instagram_alt?>" title="<?=$footer_instagram_title?>" width="30" height="30">
                </a>

                <a href="<?=$footer_youtube_href?>" title="<?=$footer_youtube_title?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-youtube.svg" alt="<?=$footer_youtube_alt?>" title="<?=$footer_youtube_title?>" width="30" height="30">
                </a>
            </div>
        </div>

        <div class="cajaInfo">
            <ul>
                <li>
                    <a href="<?=$footer_phone_href?>" title="<?=$footer_phone_title?>" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/call.svg" alt="<?=$footer_phone_alt?>" title="<?=$footer_phone_title?>" width="20" height="20">
                        <span><?=$footer_phone_text?></span>
                    </a>
                </li>

                <li>
                    <a href="<?=$footer_whatsapp_href?>" title="<?=$footer_whatsapp_title?>" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-whatsapp.svg" alt="<?=$footer_whatsapp_alt?>" title="<?=$footer_whatsapp_title?>" width="20" height="20">
                        <span><?=$footer_whatsapp_text?></span>
                    </a>
                </li>

                <li>
                    <a href="<?=$footer_mail_href?>" title="<?=$footer_mail_title?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="<?=$footer_mail_alt?>" title="<?=$footer_mail_title?>" width="20" height="20">
                        <span><?=$footer_mail_text?></span>
                    </a>
                </li>

                <li>
                    <a href="<?=$footer_address_href?>" title="<?=$footer_address_title?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/location.svg" alt="<?=$footer_address_alt?>" title="<?=$footer_address_title?>" width="20" height="20">
                        <span><?=$footer_address_text?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- caja inferior de info -->
    <div>
        <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?=$footer_logo_alt?>" title="<?=$footer_logo_title?>" width="200" height="80">
        <div>
            <p><?=$footer_about_text?></p>
            <div id="zonaTerminos">
                <a href="<?=$_ENV['RUTA']?><?=$footer_legal_href?>"><?=$footer_legal_label?></a>
                <a href="<?=$_ENV['RUTA']?><?=$footer_cookies_href?>"><?=$footer_cookies_label?></a>
                <a href="<?=$_ENV['RUTA']?><?=$footer_privacidad_href?>"><?=$footer_privacidad_label?></a>
            </div>
            <p>© <?php echo $anio?> <?=$footer_rights_text?></p>
        </div>
    </div>
</footer>
