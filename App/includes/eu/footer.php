<footer>
    <!-- caja superior de información -->
    <div>
        <div class="cajaInfo">
            <?php
            // enlaces de la web
            include $appRoot . '/includes/eu/enlaces_menu.php'
            ?>
        </div>

        <div class="cajaInfo">
            <ul>
                <li><a href="https://profe.webda.eus/" title="Area-ren portfolio orokorra">Area-ren portfolio orokorra</a></li>
                <li><a href="https://www.areafor.com/" title="Área Akademia">Área Akademia</a></li>
            </ul>
            <div class="rrss">
                <a href="" title="Panadería Aginagaren Facebooka" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-facebook.svg" alt="Panadería Aginagaren Facebooka" title="Panadería Aginagaren Facebooka" width="30" height="30">
                </a>

                <a href="https://www.linkedin.com/in/igor-aranaz-pastor/" title="Bisitatu gure LinkedIna" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-linkedin.svg" alt="Bisitatu gure LinkedIna" title="Bisitatu gure LinkedIna" width="30" height="30">
                </a>

                <a href="" title="Panadería Aginagaren Instagram" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-instagram.svg" alt="Panadería Aginagaren Instagram" title="Panadería Aginagaren Instagram" width="30" height="30">
                </a>

                <a href="https://www.youtube.com/@LiquidArtDevelopers" title="Panadería Aginagaren YouTube" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-youtube.svg" alt="Panadería Aginagaren YouTube" title="Panadería Aginagaren YouTube" width="30" height="30">
                </a>
            </div>
        </div>

        <div class="cajaInfo">
            <ul>
                <li>
                    <a href="tel:+34943123123" title="Deitu iezaguzu 943 123 123 zenbakira" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/call.svg" alt="Deitu iezaguzu 943 123 123 zenbakira" title="Deitu iezaguzu 943 123 123 zenbakira" width="20" height="20">
                        <span>943 123 123</span>
                    </a>
                </li>

                <li>
                    <a href="https://api.whatsapp.com/send/?phone=34628749350" title="Idatzi iezaguzu WhatsApp bidez 600 123 123 zenbakira" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-whatsapp.svg" alt="Idatzi iezaguzu WhatsApp bidez 600 123 123 zenbakira" title="Idatzi iezaguzu WhatsApp bidez 600 123 123 zenbakira" width="20" height="20">
                        <span>600 123 123</span>
                    </a>
                </li>

                <li>
                    <a href="mailto:aranaz@gmail.com" title="Bidali e-maila helbide honetara: correo@correo.com" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="Bidali e-maila helbide honetara: correo@correo.com" title="Bidali e-maila helbide honetara: correo@correo.com" width="20" height="20">
                        <span>correo@correo.com</span>
                    </a>
                </li>

                <li>
                    <a href="https://maps.app.goo.gl/EB3bPiGW1yfoJg3p9" title="Donostian gaude, Paseo Portuetxe 23b, 413 Donostia helbidean" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/location.svg" alt="Donostian gaude, Paseo Portuetxe 23b, 413 Donostia helbidean" title="Donostian gaude, Paseo Portuetxe 23b, 413 Donostia helbidean" width="20" height="20">
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
            <p>1932az geroztik, Panadería Aginaga-n egunero egiten ditugu artisau ogiak eta gozogintza tradizionala tokiko osagai hautatuekin. Zatoz bisitatzera eta dastatu gure espezialitate bero-berriak.</p>
            <div id="zonaTerminos">
                <a href="<?=$_ENV['RUTA']?>/eu/legezko-terminoak#legalZona">Legezko oharra</a>
                <a href="<?=$_ENV['RUTA']?>/eu/legezko-terminoak#cookiesZona">Cookieen kudeaketa</a>
                <a href="<?=$_ENV['RUTA']?>/eu/legezko-terminoak#privacidadZona">Pribatutasun politika</a>
            </div>
            <p>© <?php echo $anio?> Eskubide guztiak erreserbatuta</p>
        </div>
    </div>
</footer>
