<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <?php echo vite_tags('src/js/views/terminos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?=$canonical_path?>">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/metadatos_globales.php'
    ?>
</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/body_global.php'
    ?>

    <!-- NAV -->
    <?php include $appRoot . '/includes/nav.php' ?>

    <!-- HERO01 -->
    <header>
        <h1><?=$h1?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?=$alt_logo?>" title="<?=$title_logo?>">
        </div>
        <a href="<?=$_ENV['RUTA']?><?=$link_inicio?>" class="boton" title="<?=$title_cta?>"><?=$cta_inicio?></a>
    </header>

    <?php
    // Zona de variables para personalizar el texto legal
    $razonSocial = $razon_social;
    $correo = "info@profe.webda.eus";
    ?>

    <main>
        <section>
            <div class="hito" id="legalZona"></div>
            <h2><?=$h2_legal?></h2>

            <article id="identificacion-titular">
                <h3><?=$h3_titular?></h3>
                <p><?=$p_titular?></p>
                <ul>
                    <li><strong><?=$li_razon?></strong> <?= $razonSocial ?></li>
                    <li><strong><?=$li_cif?></strong> N123123</li>
                    <li><strong><?=$li_domicilio?></strong> <?=$li_domicilio_valor?></li>
                    <li><strong><?=$li_correo?></strong> <a href="mailto:<?= $correo ?>"><?= $correo ?></a></li>
                </ul>
            </article>

            <article id="objeto-sitio">
                <h3><?=$h3_objeto?></h3>
                <p><?= str_replace('%razonSocial%', $razonSocial, $p_objeto) ?></p>
            </article>

            <article id="condiciones-uso">
                <h3><?=$h3_condiciones?></h3>
                <p><?= str_replace('%razonSocial%', $razonSocial, $p_condiciones) ?></p>
            </article>

            <article id="responsabilidad">
                <h3><?=$h3_responsabilidad?></h3>
                <p><?= str_replace('%razonSocial%', $razonSocial, $p_responsabilidad) ?></p>
            </article>

            <article id="propiedad-intelectual">
                <h3><?=$h3_propiedad?></h3>
                <p><?= str_replace('%razonSocial%', $razonSocial, $p_propiedad) ?></p>
            </article>

            <article id="enlaces-terceros">
                <h3><?=$h3_enlaces?></h3>
                <p><?= str_replace('%razonSocial%', $razonSocial, $p_enlaces) ?></p>
            </article>

            <article id="ley-y-jurisdiccion">
                <h3><?=$h3_legislacion?></h3>
                <p><?=$p_legislacion?></p>
            </article>
        </section>

        <section>
            <div class="hito" id="cookiesZona"></div>
            <h2><?=$h2_cookies?></h2>

            <article id="que-son-cookies">
                <h3><?=$h3_que_cookies?></h3>
                <p><?=$p_que_cookies?></p>
            </article>

            <article id="cookies-utilizadas">
                <h3><?=$h3_cookies_utilizadas?></h3>
                <ul>
                    <li><strong><?=$li_tecnicas?></strong> <?=$li_tecnicas_desc?></li>
                    <li><strong><?=$li_personalizacion?></strong> <?=$li_personalizacion_desc?></li>
                    <li><strong><?=$li_analisis?></strong> <?=$li_analisis_desc?></li>
                </ul>
            </article>

            <article id="base-juridica-cookies">
                <h3><?=$h3_base_cookies?></h3>
                <p><?=$p_base_cookies?></p>
            </article>

            <article id="transferencias-internacionales-cookies">
                <h3><?=$h3_transfer_cookies?></h3>
                <p><?=$p_transfer_cookies?></p>
            </article>

            <article id="gestionar-cookies-navegador">
                <h3><?=$h3_gestionar_nav?></h3>
                <p><?=$p_gestionar_nav?></p>
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
                    <li><a href="https://support.mozilla.org/kb/borrar-cookies" target="_blank" rel="noopener">Mozilla Firefox</a></li>
                    <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
                    <li><a href="https://support.microsoft.com/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="noopener">Edge / Internet Explorer</a></li>
                </ul>
                <p><?=$p_gestionar_nav_aviso?></p>
            </article>

            <article id="config-cookies">
                <h3><?=$h3_config_cookies?></h3>
                <p><?=$p_config_cookies?></p>
                <div class="cookies-preferences-container" aria-live="polite"></div>
            </article>

            <article id="actualizaciones-cookies">
                <h3><?=$h3_actualizaciones_cookies?></h3>
                <p><?= str_replace('%razonSocial%', $razonSocial, $p_actualizaciones_cookies) ?></p>
            </article>
        </section>

        <section>
            <div class="hito" id="privacidadZona"></div>
            <h2><?=$h2_privacidad?></h2>

            <article id="responsable-tratamiento">
                <h3><?=$h3_responsable?></h3>
                <p><?= str_replace('%razonSocial%', $razonSocial, $p_responsable) ?> Correo: <a href="mailto:<?= $correo ?>"><?= $correo ?></a>.</p>
            </article>

            <article id="datos-procedencia">
                <h3><?=$h3_datos?></h3>
                <p><?=$p_datos?></p>
            </article>

            <article id="finalidades-tratamiento">
                <h3><?=$h3_finalidades?></h3>
                <ul>
                    <li><strong><?=$li_acuse?></strong> <?=$li_acuse_desc?></li>
                    <li><strong><?=$li_gestion?></strong> <?=$li_gestion_desc?></li>
                    <li><strong><?=$li_registro?></strong> <?=$li_registro_desc?></li>
                    <li><strong><?=$li_encargos?></strong> <?=$li_encargos_desc?></li>
                    <li><strong><?=$li_comerciales?></strong> <?=$li_comerciales_desc?></li>
                    <li><strong><?=$li_seguridad?></strong> <?=$li_seguridad_desc?></li>
                </ul>
            </article>

            <article id="bases-juridicas">
                <h3><?=$h3_bases?></h3>
                <ul>
                    <li><strong><?=$li_base_contrato?></strong> <?=$li_base_contrato_desc?></li>
                    <?php if(!empty($li_base_legitimo)): ?>
                    <li><strong><?=$li_base_legitimo?></strong> <?=$li_base_legitimo_desc?></li>
                    <?php endif; ?>
                    <?php if(!empty($li_base_consentimiento)): ?>
                    <li><strong><?=$li_base_consentimiento?></strong> <?=$li_base_consentimiento_desc?></li>
                    <?php endif; ?>
                    <?php if(!empty($li_base_legal)): ?>
                    <li><strong><?=$li_base_legal?></strong> <?=$li_base_legal_desc?></li>
                    <?php endif; ?>
                </ul>
            </article>

            <article id="plazos-conservacion">
                <h3><?=$h3_plazos?></h3>
                <ul>
                    <li><?=$li_plazo_consultas?></li>
                    <?php if(!empty($li_plazo_clientes)): ?>
                    <li><?=$li_plazo_clientes?></li>
                    <?php endif; ?>
                    <?php if(!empty($li_plazo_comerciales)): ?>
                    <li><?=$li_plazo_comerciales?></li>
                    <?php endif; ?>
                    <?php if(!empty($li_plazo_cookies)): ?>
                    <li><?=$li_plazo_cookies?></li>
                    <?php endif; ?>
                </ul>
            </article>

            <article id="destinatarios">
                <h3><?=$h3_destinatarios?></h3>
                <p><?=$p_destinatarios?></p>
            </article>

            <article id="transferencias-internacionales">
                <h3><?=$h3_transferencias?></h3>
                <p><?=$p_transferencias?></p>
            </article>

            <article id="derechos-personas">
                <h3><?=$h3_derechos?></h3>
                <p><?=$p_derechos?></p>
            </article>

            <?php if(!empty($h3_menores)): ?>
            <article id="menores">
                <h3><?=$h3_menores?></h3>
                <p><?=$p_menores?></p>
            </article>
            <?php endif; ?>

            <?php if(!empty($h3_decisiones)): ?>
            <article id="decisiones-automatizadas">
                <h3><?=$h3_decisiones?></h3>
                <p><?=$p_decisiones?></p>
            </article>
            <?php endif; ?>

            <?php if(!empty($h3_seguridad_priv)): ?>
            <article id="seguridad">
                <h3><?=$h3_seguridad_priv?></h3>
                <p><?=$p_seguridad_priv?></p>
            </article>
            <?php endif; ?>

            <?php if(!empty($h3_actualizaciones_priv)): ?>
            <article id="actualizaciones-privacidad">
                <h3><?=$h3_actualizaciones_priv?></h3>
                <p><?=$p_actualizaciones_priv?></p>
            </article>
            <?php endif; ?>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php' ?>
</body>
</html>

