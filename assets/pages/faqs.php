<!doctype html>
<html lang="en">

<head>
  <?php include '../templates/required.php';?>
  <title>RED FACTORING 100</title>
</head>

<body>
  
  <?php include '../templates/nav.php';?>

  <!--Titulo de eleccion-->
  <div class="container-fluid faqs-fondo">
    <div class="row">
      <div class="col text-center mb-5  mt-5">
        <h1>Preguntas Frecuentes</h1>
      </div>
    </div>
  </div>

  <!--preguntras-->
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="false" aria-controls="collapseOne">
            <p>¿Qué es complemento de pago?</p>
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <p>Es un documento electrónico en el cual se detalla la cantidad que se paga e identifica la factura cuyo
            saldo se liquida.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo">
            ¿Cuándo debo emitir complemento de pago?
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <p>Este complemento está planeado para:</p>
          <ul>
            <li>
              <p>Pagos en Parcialidades, pues dentro del complemento se asociará el pago parcial con el comprobante
                ¬fiscal que por el cual se originaron (comprobante emitido por el valor total de la operación)</p>
            </li>
            <li>
              <p>Pago de la contraprestación en una sola exhibición, pero ésta no sea cubierta al momento de la
                expedición del CFDI, incluso cuando se trate de operaciones a crédito y estas se paguen totalmente en
                fecha posterior a la emisión del CFDI correspondiente, deberá utilizar, siempre que se trate del mismo
                ejercicio ¬fiscal, el mecanismo de “Complemento para Pagos”, para reflejar el pago con el que se liquide
                el importe de la operación.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="false" aria-controls="collapseThree">
            ¿Es obligatorio?
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <p>Si, a partir del día 1 de Septiembre todas las empresas de factoraje están obligados a emitir el
            complemento de pago o recibo de pago, cada que reciban dinero. El fundamento legal se encuentra en el
            apéndice 2 de la guía de complemento de pago del SAT.</p>
          <p>Y también deberán recibir su complemento de pago o recibo de pago por parte del cedente les realice el pago
            correspondiente al término de vencimiento de los documentos.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFour">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="false" aria-controls="collapseFour">
            Pasos para emitir complemento de pago
          </button>
        </h5>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="card-body">
          <p>Los pasos son los siguientes:</p>
          <ol>
            <li>
              <p>El cliente realiza la compra y el proveedor genera CFDI 1 al cliente por el valor total de la operación
                por la venta diferida.</p>
            </li>
            <li>
              <p>Se crea un contrato de factoraje entre la empresa “factor” y el proveedor.</p>
            </li>
            <li>
              <p>La empresa de factoraje emite el CFDI al proveedor por el valor de sus servicios, comisión, etc.</p>
            </li>
            <li>
              <p>La empresa de factoraje efectúa el pago al proveedor del CFDI 1 pactado en el contrato.</p>
            </li>
            <li>
              <p>El proveedor recibe el recurso y emite el CFDI con complemento para recepción de pagos por el total de
                la operación del CFDI 1.</p>
            </li>
            <li>
              <p>La empresa de factoraje recibe el CFDI con el complemento para recepción de pagos.</p>
            </li>
            <li>
              <p>El cliente liquida a la empresa de factoraje financiero.</p>
            </li>
            <li>
              <p>La empresa de factoraje financiero emite el CFDI con el complemento de pagos al cliente por la
                totalidad del CFDI 1.</p>
            </li>
            <li>
              <p>El cliente recibe el CFDI con el complemento para recepción de pagos.</p>
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFive">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive"
            aria-expanded="false" aria-controls="collapseFive">
            ¿Cuántos días tengo para emitir mi complemento de pago?
          </button>
        </h5>
      </div>
      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <p>Se debe emitir el CFDI con complemento para recepción de pagos a más tardar al décimo día natural del mes
            siguiente al que se recibió el pago. Dado que el dato es un insumo para la determinación del IVA, se
            consideró un plazo similar al establecido para la declaración de dicho impuesto.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingSix">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix"
            aria-expanded="false" aria-controls="collapseSix">
            ¿Esta solución puede ser aplicada para cualquier operación de factoraje?
          </button>
        </h5>
      </div>
      <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <p>Esta solución está diseñada para las operaciones de factoraje que realizo con nuestra plataforma.
          </p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingSeven">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven"
            aria-expanded="false" aria-controls="collapseSeven">
            ¿Recibo de pago y Complemento de pago es lo mismo?
          </button>
        </h5>
      </div>
      <div id="collapseSeven" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <p>El recibo de pago o complemento de pago es lo mismo todos estos nombres que ha recibido, hacen referencia
            al mismo tema CFDI de Pagos.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingEight">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight"
            aria-expanded="false" aria-controls="collapseEight">
            ¿Se tiene que emitir un CFDI con complemento para recepción de pagos por cada comprobante que se liquida?
          </button>
        </h5>
      </div>
      <div id="collapseEight" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <p>No, se expedirá un sólo CFDI con complemento para recepción de pagos y en él se incluirán las referencias a
            todas las f6acturas que se liquidan. Para ello deberán incluir en el campo identificador del documento, cada
            uno de los folios (UUID) que identifican a cada una de las facturas.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingNine">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine"
            aria-expanded="false" aria-controls="collapseNine">
            Cuando un sólo pago recibido es para liquidar varias facturas...
          </button>
        </h5>
      </div>
      <div id="collapseNine" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <p>no. Se expedirá un sólo CFDI con complemento para recepción de pagos y en él se incluirán las referencias a
            todas las facturas que se liquidan. Para ello deberán incluir en el campo identificador del documento, cada
            uno de los folios (UUID) que identifican a cada una de las facturas</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTen">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen"
            aria-expanded="false" aria-controls="collapseTen">
            ¿Qué necesito para emitir mis complementos de pago con RED Factoring 100?
          </button>
        </h5>
      </div>
      <div id="collapseTen" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <p>Existen dos maneras de emitirlos:</p>
          <ol>
            <li>
              <p>Crear una conexión con el sistema de administración de cartera para que con un solo clic generes tus
                complementos de pago. Si no tienen un sistema de cartera, ¡no te preocupes! en INFO 100 contamos con uno
                de acuerdo a tus necesidades.</p>
            </li>
            <li>
              <p>Cargar un Excel con los campos necesarios de las facturas para generar el complemento de pago.</p>
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingEleven">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven"
            aria-expanded="false" aria-controls="collapseEleven">
            Si consumo mi paquete de timbres ¿Qué hago?
          </button>
        </h5>
      </div>
      <div id="collapseEleven" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <p>Puede marcar a la empresa o contratar directamente desde la página en la pestaña</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="heading12">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse12"
            aria-expanded="false" aria-controls="collapse12">
            ¿Qué pasa si no me acabo mis timbres de complemento?
          </button>
        </h5>
      </div>
      <div id="collapse12" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <p>¡No te preocupes! Con Red Factorin 100 ¡No los pierdes! Los podremos tomar en cuenta para tu próxima compra
            de timbres</p>
        </div>
      </div>
    </div>
  </div>
  
  <?php include '../templates/footer.php';?>

</body>

</html>