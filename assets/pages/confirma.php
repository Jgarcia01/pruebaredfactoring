<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../templates/required.php';?>
    <title>ConFirma</title>
  </head>
  <body>

    <?php include '../templates/nav.php';?>

    <header class="site-header"> 
      <div id="titulo-fondo">
        <h1 class="sin-margen">ConFirma</h1>
      </div>
    </header>

    <!-- Termina header -->

    <main>
      <i>¿Qué es <span>ConFirma</span>?</i>
      <p id="espacio">
        RF100 es la mejor plataforma para emitir complementos de pago a las financieras con las que operaste tus
        documentos.
      </p>
      <p>
        Ahora puedes asegurar la integridad de tus documentos para que no sufra ninguna alteración o manipulación.
      </p>
      <div class="texto-centrado">
        <p>
          Protege tus decisiones de la forma más
          <span>rápida</span>, <span>eficaz</span> y <span>segura</span>.
        </p>
        <p>¡Con tu firma <span id="rojo">Confirma</span>!</p>
        <p id="italica">
          "Tan sencillo como un clic"
        </p>
      </div>
      <div class="imagenes-ventajas">
        <div class="ventaja">
          <img src="/assets/img/cf_rapido.png" alt="reloj" />
          <h4>Rápida</h4>
        </div>
        <div class="ventaja">
          <img src="/assets/img/cf_eficaz.png" alt="pizarron" />
          <h4>Eficaz</h4>
        </div>
        <div class="ventaja">
          <img src="/assets/img/cf_seguro.png" alt="candado" />
          <h4>Segura</h4>
        </div>
      </div>
    </main>

    <!-- seccion documentos -->

    <section class="seccion-documentos">
      <h2>Puedes firmar distintos documentos</h2>
      <ul>
        <li><i class="fas fa-check"></i> Crédito</li>
        <li><i class="fas fa-check"></i> Cesión de Derechos</li>
        <li><i class="fas fa-check"></i> Arrendamiento, etc.</li>
        <li><i class="fas fa-check"></i> Documentos Internacionales</li>
        <li><i class="fas fa-check"></i> Documentos del Sector Público y Privado</li>
      </ul>
    </section>

    <!-- Seccion beneficios -->
    <section class="beneficios">
      <h2>Utilizando <span>ConFirma</span> cuentas con estos beneficios</h2>
      <div class="beneficio">
        <img src="/assets/img/cf_uno.svg" alt="1" />
        <div class="beneficio-texto">
          <h3>Seguridad</h3>
          <p>Utilizar una firma electrónica es mas seguro que una firma digitalizada.</p>
        </div>
      </div>
      <div class="beneficio">
        <img src="/assets/img/cf_dos.svg" alt="2" />
        <div class="beneficio-texto">
          <h3>Evita Traslados</h3>
          <p>No es necesario reunirse en un mismo lugar.</p>
        </div>
      </div>
      <div class="beneficio">
        <img src="/assets/img/cf_tres.svg" alt="3" />
        <div class="beneficio-texto">
          <h3>Reduce Costos</h3>
          <p>Gracias a la firma electrónica reduces el uso de papel y consumibles.</p>
        </div>
      </div>
      <div class="beneficio">
        <img src="/assets/img/cf_cuatro.svg" alt="4" />
        <div class="beneficio-texto">
          <h3>Compromiso Ambiental</h3>
          <p>Al disminuir el consumo de papel y consumibles, hay menor cantidad de residuos.</p>
        </div>
      </div>
      <div class="beneficio">
        <img src="/assets/img/cf_cinco.svg" alt="5" />
        <div class="beneficio-texto">
          <h3>Agiliza Tramites</h3>
          <p>Reduce el tiempo en el proceso de firma de tus documentos.</p>
        </div>
      </div>
      <div class="beneficio">
        <img src="/assets/img/cf_seis.svg" alt="6" />
        <div class="beneficio-texto">
          <h3>Respaldo Legal</h3>
          <p>
            Ley de Firma electrónica avanzada de acuerdo con los artículos 7, 8, 9, 28, 29 y 30 del código de
            comercio y la NORMA Oficial Mexicana NOM-151-SCFI-2016.
          </p>
        </div>
      </div>
    </section>

    <!-- seccion pasos -->
    <section class="seccion-pasos">
      <h2>Usarlo es muy sencillo</h2>
      <img class="pasos-animacion" src="/assets/img/cf_animacion.gif" alt="como utilizarlo" />

      <div class="pasos">
        <ul>
          <li class="imagen">
            <img src="/assets/img/IniciaSesion.png" alt="iniciar sesion" />
          </li>
          <li class="imagen">
            <img src="/assets/img/SubirDocumento.png" alt="sube tu documento" />
          </li>
          <li class="imagen">
            <img src="/assets/img/SubeArchivo.png" alt="sube los archivos" />
          </li>
          <li class="imagen">
            <img src="/assets/img/IntroduceContraseña.png" alt="ingresa tu contraseña" />
          </li>
          <li class="imagen">
            <img src="/assets/img/IngresaHuella.png" alt="utiliza tu huella" />
          </li>
          <li class="imagen">
            <img src="/assets/img/Listo.png" alt="listo" />
          </li>
        </ul>
      </div>
    </section>

    <section class="seccion-logo">
      <h2>
        Firma tus documentos de la forma mas <span>sencilla</span> y <span>segura</span>.
      </h2>
      <div class="logotipo-confirma">
        <img src="/assets/img/cf_logotipo_rojo.png" alt="fiel" />
      </div>
    </section>
    
    <?php include '../templates/footer.php';?>

  </body>
</html>
