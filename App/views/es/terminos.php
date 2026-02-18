<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo vite_tags('src/js/views/terminos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/terminos-legales">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/es/metadatos_globales.php'
    ?>
</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/es/body_global.php'
    ?>

    <!-- NAV -->
    <?php
    // es código php
    include $appRoot . '/includes/es/nav.php'
    ?>
    
    <!-- HERO01 -->
    <header>        
        <h1>Términos y condiciones de privacidad y gestión de cookies</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Logotipo Panadería Aginaga" title="Panadería Aginaga">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es" class="boton" title="Encuentra Panadería Aginaga">Inicio</a>     
    </header>

    <!-- TODO: COMPLETAR LAS VARIABLES Y VARIABILIZAR EL CONTENIDO -->
    <?php
    // Zona de variables para personalizar el texto legal
    $razonSocial="Panadería Aginaga";
    $correo ="";
    $cif="";
    $telefono="";
    $direccion="";
    ?>

    <main>
        <section>
            <div class="hito" id="legalZona"></div>
            <h2>Aviso Legal</h2>

            <article id="identificacion-titular">
                <h3>Identificación del titular</h3>
                <p>En cumplimiento del artículo 10 de la Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico (LSSI‑CE), se facilitan los siguientes datos de identificación:</p>
                <ul>
                    <li><strong>Razón social:</strong> <?= $razonSocial ?></li>
                    <li><strong>CIF:</strong> N123123</li>
                    <li><strong>Domicilio:</strong> Calle Elutx&nbsp;14, bajo, 20170&nbsp;Aginaga, Gipuzkoa (España)</li>
                    <li><strong>Correo electrónico:</strong> <a href="mailto:info@profe.webda.eus">info@profe.webda.eus</a></li>
                </ul>
            </article>

            <article id="objeto-sitio">
                <h3>Objeto del sitio</h3>
                <p>Informar sobre los productos artesanos de <?= $razonSocial ?> y permitir a los usuarios realizar consultas o encargos a través de los medios de contacto habilitados.</p>
            </article>

            <article id="condiciones-uso">
                <h3>Condiciones de uso</h3>
                <p>El acceso y la navegación por este sitio web atribuyen la condición de usuario e implican la aceptación de este Aviso Legal. <?= $razonSocial ?> podrá modificar su contenido cuando lo estime oportuno.</p>
            </article>

            <article id="responsabilidad">
                <h3>Responsabilidad</h3>
                <p><?= $razonSocial ?> adopta medidas razonables para que los contenidos sean exactos y estén actualizados, y para que el sitio funcione correctamente. No obstante, no puede garantizar la ausencia total de errores o interrupciones, ni responder por daños derivados de interferencias, averías, virus o desconexiones no imputables a la entidad.</p>
            </article>

            <article id="propiedad-intelectual">
                <h3>Propiedad intelectual e industrial</h3>
                <p>Salvo indicación en contrario, los derechos sobre los contenidos del sitio (textos, imágenes, logotipos, diseño y código) pertenecen a <?= $razonSocial ?> o a terceros que han autorizado su uso. Se prohíbe su reproducción, distribución, comunicación pública o transformación sin autorización previa y por escrito.</p>
            </article>

            <article id="enlaces-terceros">
                <h3>Enlaces</h3>
                <p>Los enlaces a sitios de terceros se facilitan para la conveniencia del usuario. <?= $razonSocial ?> no es responsable de los contenidos ni de los resultados que se deriven de su acceso.</p>
            </article>

            <article id="ley-y-jurisdiccion">
                <h3>Legislación y jurisdicción</h3>
                <p>Este Aviso Legal se rige por la legislación española. Salvo norma imperativa en contrario, para cualquier controversia las partes se someten a los juzgados y tribunales de Donostia‑San Sebastián.</p>
            </article>
        </section>

        <section>
            <div class="hito" id="cookiesZona"></div>
            <h2>Gestión de cookies</h2>

            <article id="que-son-cookies">
                <h3>¿Qué son las cookies?</h3>
                <p>Pequeños archivos que se descargan en su dispositivo cuando visita determinadas páginas y que permiten, entre otras cosas, recordar preferencias o realizar mediciones de audiencia.</p>
            </article>

            <article id="cookies-utilizadas">
                <h3>Cookies utilizadas</h3>
                <ul>
                    <li><strong>Cookies técnicas (necesarias):</strong> habilitan funciones básicas de navegación, seguridad del sitio, gestión del consentimiento y mantenimiento de la sesión. Se instalan por interés legítimo del titular conforme al art. 22.2 LSSI.</li>
                    <li><strong>Cookies de personalización:</strong> recuerdan opciones como idioma o localidad. Se instalan con su consentimiento cuando no son elegidas directamente por el usuario.</li>
                    <li><strong>Cookies de análisis:</strong> permiten medir el uso del sitio (por ejemplo, páginas visitadas, tiempo de permanencia) con el fin de mejorar productos y servicios. Solo se instalan si usted las acepta. Podemos utilizar servicios de terceros (p. ej., Google&nbsp;Analytics). En el <a href="#config-cookies">panel de configuración</a> se mostrará el detalle de proveedores, finalidad, caducidad y si realizan transferencias internacionales.</li>
                </ul>
            </article>

            <article id="base-juridica-cookies">
                <h3>Base jurídica</h3>
                <p>Las cookies técnicas se instalan para posibilitar el funcionamiento del sitio. Las de personalización y análisis requieren su consentimiento, que podrá gestionar en cualquier momento desde el <a href="#config-cookies" id="configurarCookies">panel de configuración de cookies</a>, con opciones equivalentes para <em>Aceptar</em> y <em>Rechazar</em> y posibilidad de guardar la elección.</p>
            </article>

            <article id="transferencias-internacionales-cookies">
                <h3>Transferencias internacionales</h3>
                <p>Si acepta cookies de análisis de proveedores establecidos fuera del Espacio Económico Europeo, sus datos podrán transferirse a dichos países. Cuando el proveedor esté adherido al <em>EU‑U.S. Data Privacy Framework</em> o existan cláusulas contractuales tipo u otras garantías adecuadas, la transferencia se realizará conforme a la normativa aplicable. El panel de cookies mostrará esta información de forma actualizada.</p>
            </article>

            <article id="gestionar-cookies-navegador">
                <h3>Cómo gestionar cookies en el navegador</h3>
                <p>Puede borrar o bloquear cookies desde la configuración de su navegador. A título informativo:</p>
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google&nbsp;Chrome</a></li>
                    <li><a href="https://support.mozilla.org/kb/borrar-cookies" target="_blank" rel="noopener">Mozilla&nbsp;Firefox</a></li>
                    <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
                    <li><a href="https://support.microsoft.com/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="noopener">Edge / Internet&nbsp;Explorer</a></li>
                </ul>
                <p>La desactivación de determinadas cookies puede afectar al funcionamiento del sitio.</p>
            </article>

            <article id="config-cookies">
                <h3>Configuración de cookies</h3>
                <p>Desde este panel podrá cambiar su preferencia en cualquier momento. Si integra un gestor de consentimiento, sitúe aquí el contenedor donde se renderiza:</p>
                <div class="cookies-preferences-container" aria-live="polite"></div>
            </article>

            <article id="actualizaciones-cookies">
                <h3>Actualizaciones</h3>
                <p><?= $razonSocial ?> podrá actualizar esta Política de Cookies para adaptarla a cambios normativos o técnicos. Le recomendamos revisarla periódicamente.</p>
            </article>
        </section>
        
        <section>
            <div class="hito" id="privacidadZona"></div>
            <h2>Política de privacidad</h2>

            <article id="responsable-tratamiento">
                <h3>Responsable del tratamiento</h3>
                <p><strong><?= $razonSocial ?></strong> (NIF N123123), Calle Elutx&nbsp;14, bajo, 20170&nbsp;Aginaga, Gipuzkoa. Correo: <a href="mailto:info@profe.webda.eus">info@profe.webda.eus</a>.</p>
            </article>

            <article id="datos-procedencia">
                <h3>Datos tratados y procedencia</h3>
                <p>Tratamos los datos que usted nos facilita a través de los formularios o medios de contacto del sitio: nombre y apellidos, correo electrónico, teléfono, dirección postal si procede, y el contenido de su consulta o encargo. También tratamos datos de navegación asociados a cookies según lo descrito en la <a href="#cookiesZona">Política de cookies</a> (por ejemplo, dirección IP, identificadores de dispositivo y páginas visitadas), únicamente si las ha aceptado.</p>
            </article>

            <article id="finalidades-tratamiento">
                <h3>Finalidades</h3>
                <ul>
                    <li><strong>Acuse de recibo</strong> de la consulta: envío de un correo automático confirmando que hemos recibido su solicitud.</li>
                    <li><strong>Gestión de consultas y atención al cliente</strong>: análisis de su petición y contacto posterior por correo electrónico o teléfono para resolverla.</li>
                    <li><strong>Creación de un registro interno</strong> en nuestra base de datos para el seguimiento de consultas, control de calidad y mejora del servicio.</li>
                    <li><strong>Gestión de encargos y ventas</strong> cuando solicite productos o servicios.</li>
                    <li><strong>Comunicaciones comerciales</strong> sobre productos, ofertas o novedades, solo si nos otorga su consentimiento expreso o si existe una relación contractual previa y son productos similares, pudiendo darse de baja en cualquier momento.</li>
                    <li><strong>Seguridad del sitio y estadísticas</strong> mediante el uso de cookies técnicas y, en su caso, de análisis para prevenir abusos y mejorar la experiencia.</li>
                </ul>
            </article>

            <article id="bases-juridicas">
                <h3>Base jurídica</h3>
                <ul>
                    <li><strong>Medidas precontractuales o ejecución de contrato</strong> (art. 6.1.b RGPD): para tramitar consultas relacionadas con nuestros productos y gestionar encargos/ventas.</li>
                    <li><strong>Interés legítimo</strong> (art. 6.1.f RGPD): para enviar el acuse de recibo, atender solicitudes espontáneas y mantener un histórico mínimo de consultas con fines de organización, calidad y defensa frente a reclamaciones. El usuario puede oponerse en cualquier momento.</li>
                    <li><strong>Consentimiento</strong> (art. 6.1.a RGPD y art. 21 LSSI): para el envío de comunicaciones comerciales por medios electrónicos y la instalación de cookies no técnicas.</li>
                    <li><strong>Obligación legal</strong> (art. 6.1.c RGPD): para cumplir con obligaciones fiscales, contables o de consumo que resulten aplicables.</li>
                </ul>
            </article>

            <article id="plazos-conservacion">
                <h3>Plazos de conservación</h3>
                <ul>
                    <li><strong>Consultas</strong>: durante <strong>12 meses</strong> desde la última interacción; posteriormente se mantendrán <strong>bloqueadas</strong> por los plazos de prescripción de posibles responsabilidades.</li>
                    <li><strong>Clientes y facturación</strong>: durante la relación contractual y, tras su finalización, por los plazos exigidos por la normativa fiscal y mercantil (con carácter general, hasta <strong>6 años</strong>).</li>
                    <li><strong>Comunicaciones comerciales</strong>: mientras mantenga su consentimiento o relación contractual y, como prueba del consentimiento y de la gestión de bajas, durante <strong>3 años</strong> adicionales.</li>
                    <li><strong>Datos de cookies</strong>: según los plazos indicados en el panel de configuración de cookies.</li>
                </ul>
            </article>

            <article id="destinatarios">
                <h3>Destinatarios</h3>
                <p>No se cederán datos a terceros, salvo obligación legal. Podrán acceder a sus datos los <em>encargados de tratamiento</em> que nos prestan servicios (alojamiento web, mantenimiento, herramientas de correo, analítica, mensajería/logística en caso de entregas), con los que se han suscrito los contratos necesarios y se aplican garantías de seguridad.</p>
            </article>

            <article id="transferencias-internacionales">
                <h3>Transferencias internacionales</h3>
                <p>No se prevén transferencias fuera del EEE salvo que utilicemos proveedores ubicados en terceros países. En tal caso, se realizarán con garantías adecuadas, incluida, cuando proceda, la adhesión del proveedor al marco de adecuación vigente o la firma de cláusulas contractuales tipo. Esta información se detallará en el momento de la recogida de datos o en el panel de cookies.</p>
            </article>

            <article id="derechos-personas">
                <h3>Derechos de las personas</h3>
                <p>Puede solicitar acceso, rectificación, supresión, oposición, limitación del tratamiento y portabilidad mediante escrito dirigido a la dirección postal indicada o al correo <a href="mailto:info@profe.webda.eus">info@profe.webda.eus</a>. Si tratamos sus datos basados en el interés legítimo, podrá oponerse indicando motivos relacionados con su situación particular. Si el tratamiento se basa en el consentimiento, podrá retirarlo en cualquier momento. Asimismo, tiene derecho a presentar una reclamación ante la Agencia Española de Protección de Datos (<a href="https://www.aepd.es" target="_blank" rel="noopener">www.aepd.es</a>).</p>
            </article>

            <article id="menores">
                <h3>Menores</h3>
                <p>Los contenidos de este sitio están dirigidos a mayores de 14 años. Los menores de esta edad no deberán enviar información personal sin el consentimiento de sus padres o tutores.</p>
            </article>

            <article id="decisiones-automatizadas">
                <h3>Decisiones automatizadas</h3>
                <p>No se adoptan decisiones automatizadas que produzcan efectos jurídicos sobre el usuario ni se elaboran perfiles con efectos significativos.</p>
            </article>

            <article id="seguridad">
                <h3>Seguridad</h3>
                <p>Aplicamos medidas técnicas y organizativas apropiadas (control de accesos, cifrado en tránsito, copias de seguridad, registro de accesos y políticas de conservación) para preservar la confidencialidad, integridad y disponibilidad de los datos.</p>
            </article>

            <article id="actualizaciones-privacidad">
                <h3>Actualizaciones</h3>
                <p>Podremos modificar esta Política de privacidad para adaptarla a cambios legislativos o a nuestra operativa de tratamiento; publicaremos la versión actualizada con indicación de la fecha de última revisión.</p>
            </article>
        </section>
    </main>





    <!-- FOOTER -->
    <?php
    include $appRoot . '/includes/es/footer.php'
    ?>
</body>
</html>