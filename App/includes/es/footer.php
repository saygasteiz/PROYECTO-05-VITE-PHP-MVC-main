<footer>
    <!-- caja superior de información -->
    <div>
        <div class="cajaInfo">
            <?php
            // enlaces de la web
            include $appRoot . '/includes/es/enlaces_menu.php'
            ?>
        </div>

        <div class="cajaInfo">
            <ul>
                <li><a href="https://profe.webda.eus/" title="Porfolio general">Porfolio general</a></li>
                <li><a href="https://www.areafor.com/" title="Academia Area">Academia Área</a></li>
            </ul>
            <div class="rrss">
                <a href="" title="Facebook de Panadería Aginaga" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-facebook.svg" alt="Facebook de Panadería Aginaga" title="Facebook de Panadería Aginaga" width="30" height="30">
                </a>

                <a href="https://www.linkedin.com/in/igor-aranaz-pastor/" title="Visita nuestro LinkedIn" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-linkedin.svg" alt="Visita nuestro LinkedIn" title="Visita nuestro LinkedIn" width="30" height="30">
                </a>

                <a href="" title="Instagram de Panadería Aginaga" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-instagram.svg" alt="Instagram de Panadería Aginaga" title="Instagram de Panadería Aginaga" width="30" height="30">
                </a>

                <a href="https://www.youtube.com/@LiquidArtDevelopers" title="YouTube de Panadería Aginaga" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-youtube.svg" alt="YouTube de Panadería Aginaga" title="YouTube de Panadería Aginaga" width="30" height="30">
                </a>
            </div>
        </div>

        <div class="cajaInfo">
            <ul>
                <li>
                    <a href="tel:+34943123123" title="Llámanos al 943 123 123" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/call.svg" alt="Llámanos al 943 123 123" title="Llámanos al 943 123 123" width="20" height="20">
                        <span>943 123 123</span>
                    </a>
                </li>

                <li>
                    <a href="https://api.whatsapp.com/send/?phone=34628749350" title="Escríbenos al WhatsApp 600 123 123" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-whatsapp.svg" alt="Escríbenos al WhatsApp 600 123 123" title="Escríbenos al WhatsApp 600 123 123" width="20" height="20">
                        <span>600 123 123</span>
                    </a>
                </li>

                <li>
                    <a href="mailto:aranaz@gmail.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="Mándanos un correo a la siguiente dirección correo@correo.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" width="20" height="20">
                        <span>correo@correo.com</span>
                    </a>
                </li>

                <li>
                    <a href="https://maps.app.goo.gl/EB3bPiGW1yfoJg3p9" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/location.svg" alt="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" width="20" height="20">
                        <span>Paseo Portuetxe 23b<br>413 Donostia</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- caja inferior de info -->
    <div>
        <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="" title="" width="200" height="80">
        <div>
            <p>Desde 1932, en Panadería Aginaga horneamos cada día panes artesanos y repostería tradicional elaborados con ingredientes locales de primera calidad. Ven a visitarnos y descubre nuestras especialidades recién hechas.</p>
            <div id="zonaTerminos">
                <a href="<?=$_ENV['RUTA']?>/es/terminos-legales#legalZona">Aviso legal</a>
                <a href="<?=$_ENV['RUTA']?>/es/terminos-legales#cookiesZona">Gestión de cookies</a>
                <a href="<?=$_ENV['RUTA']?>/es/terminos-legales#privacidadZona">Política de privacidad</a>
            </div>
            <p>© <?php echo $anio?> Todos los derechos reservados</p>
        </div>
    </div>
</footer>
