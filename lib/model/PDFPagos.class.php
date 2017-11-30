<?php

class PDFPagos{


  public function cuadroTUGRUERO($values){
    setlocale(LC_NUMERIC,"es_ES.UTF8");
    ob_start();
    $SolicitudPlan = new SolicitudPlan();
    $idSolicitudPlan = $values['idSolicitudPlan'];
    $Utilitarios = new Utilitarios();
    $datos_cuadro = $SolicitudPlan->getSolicitudPlanAprobadaInfo($idSolicitudPlan);
    //print_r($datos_cuadro);die;
    // create new PDF document
    $pdf = new MYPDF2(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('TU/GRUERO®');
    $pdf->SetTitle('TU/GRUERO®');
    $pdf->SetSubject('TU/GRUERO®');
    $pdf->SetKeywords('TU/GRUERO®');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 5, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, 0);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
      require_once(dirname(__FILE__).'/lang/eng.php');
      $pdf->setLanguageArray($l);
    }

    // ---------------------------------------------------------

    // set font
    $pdf->SetFont('helvetica', '', 8);

    // add a page
    $pdf->AddPage();
    //$image_file = K_PATH_IMAGES.'logo_tugruero.png';
    //$pdf->Image($image_file, 15, 2, 25, '', 'PNG', '', 'T', false, 100, '', false, false, 0, false, false, false);
    // set some text to print

    $html = '<table width="100%">'
    . '<tr>'
    . '<td colspan="2" align="center"><br><br><img src="'.full_url.'/web/img/logo_tugruero.png" width="40"></td>'
    . '<td colspan="5"><br><br>SOLUCIONES TU GRUERO C.A.<br>RIF.- J-40680605-6</td>'
    . '<td colspan="2">'

    . '<table border="1">'
    . '<tr>'
    . '<td align="center"><br>N° PRODUCTO<br></td>'
    . '</tr>'
    . '<tr>'
    . '<td align="center"><br>'.$datos_cuadro['NumProducto'].'<br></td>'
    . '</tr>'
    . '</table>'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" align="center" style="border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #fce4d6;"><strong>DATOS CLIENTE</strong></td>'
    . '</tr>'
    . '<tr>'
    . '<td style="border-left-width:1px;"> NOMBRES:</td>'
    . '<td>'.$datos_cuadro['Nombres'].'</td>'
    . '<td>APELLIDOS:</td>'
    . '<td>'.$datos_cuadro['Apellidos'].'</td>'
    . '<td>EDAD:</td>'
    . '<td>'.$datos_cuadro['Edad'].'</td>'
    . '<td colspan="2">ESTADO CIVIL:</td>'
    . '<td  style="border-right-width:1px;">'.strtoupper($datos_cuadro['EstadoCivil']).'</td>'
    . '</tr>'
    . '<tr>'
    . '<td  style="border-left-width:1px;">TELEFONO:</td>'
    . '<td>'.$datos_cuadro['Telefono'].'</td>'
    . '<td colspan="2">CEDULA/PASAPORTE:</td>'
    . '<td>'.$datos_cuadro['Cedula'].'</td>'
    . '<td></td>'
    . '<td colspan="2">SEXO:</td>'
    . '<td style="border-right-width:1px;">'.strtoupper($datos_cuadro['Sexo']).'</td>'
    . '</tr>'
    . '<tr>'
    . '<td  style="border-left-width:1px;">CELULAR:</td>'
    . '<td>'.$datos_cuadro['Celular'].'</td>'
    . '<td colspan="2">CORREO ELECTRÓNICO:</td>'
    . '<td colspan="5" style="border-right-width:1px;">'.$datos_cuadro['Correo'].'</td>'
    . '</tr>'
    . '<tr >'
    . ''
    . '<td style="border-top-width:1px;border-left-width: 1px;" colspan="2">ESTADO:</td>'
    . '<td colspan="2" style="border-top-width:1px;">'.strtoupper($datos_cuadro['Estado']).'</td>'
    . '<td colspan="" style="border-top-width:1px;">CIUDAD:</td>'
    . '<td colspan="4" style="border-right-width:1px;border-top-width:1px;">'.$datos_cuadro['Ciudad'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;">DIRECCION DOMICILIO: </td>'
    . '<td colspan="7" style="border-right-width:1px;">'.$datos_cuadro['Domicilio'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" align="center" style="border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #fce4d6;"><strong>DATOS VEHÍCULO</strong></td>'
    . '</tr>'
    . '<tr>'
    . '<td  style="border-left-width:1px;">CLASE:</td>'
    . '<td>'.$datos_cuadro['Clase'].'</td>'
    . '<td>MARCA:</td>'
    . '<td>'.$datos_cuadro['Marca'].'</td>'
    . '<td>MODELO:</td>'
    . '<td>'.$datos_cuadro['Modelo'].'</td>'
    . '<td>COLOR:</td>'
    . '<td colspan="2" style="border-right-width:1px;">'.$datos_cuadro['Color'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td style="border-left-width:1px;">AÑO:</td>'
    . '<td>'.$datos_cuadro['Anio'].'</td>'
    . '<td  >PLACA:</td>'
    . '<td COLSPAN="3">'.$datos_cuadro['Placa'].'</td>'
    . '<td>TIPO:</td>'
    . '<td COLSPAN="2" style="border-right-width:1px;">'.$datos_cuadro['Tipo'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" align="center"  style="border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #fce4d6;"><strong>DESCRIPCIÓN DEL PRODUCTO</strong></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2"  style="border-left-width:1px;">NOMBRE PRODUCTO:</td>'
    . '<td COLSPAN="2">'.$datos_cuadro['concatenado_plan'].'</td>'
    . '<td>COSTO:</td>'
    . '<td>Bs. '.number_format($datos_cuadro['costoplantugruero'],2,",",".").'</td>'
    . '<td colspan="2">INICIO VIG.</td>'
    . '<td colspan="" style="border-right-width:1px;">'.$Utilitarios->formateaFecha($datos_cuadro['VigenciaDesde'], 'd/m/Y').'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2"  style="border-left-width:1px;">CANTIDAD DE SERVICIOS:</td>'
    . '<td COLSPAN="4">'.$datos_cuadro['CantidadServicios'].'</td>'
    . '<td colspan="2">FIN VIG.</td>'
    . '<td  style="border-right-width:1px;">'.$Utilitarios->formateaFecha($datos_cuadro['VigenciaHasta'], 'd/m/Y').'</td>'
    . '</tr>'
    . '<tr>'
    . '<td  colspan="3"  style="border-left-width:1px;">TIPO DE SERVICIOS DE GRUA:</td>'
    . '<td COLSPAN="3"> '.$datos_cuadro['TipoServicio'].'</td>'
    . '<td colspan="2">KILOMETRAJE:</td>'
    . '<td colspan="" style="border-right-width:1px;">'.$datos_cuadro['Kilometraje'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" align="center"  style="border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #fce4d6;"><strong>DATOS DE ACCESO PARA APP TU/GRUERO®</strong></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="1"  style="border-left-width:1px;">C.I./RIF:</td>'
    . '<td COLSPAN="2">'.$datos_cuadro['Cedula'].'</td>'
    . '<td colspan="1">Placa:</td>'
    . '<td COLSPAN="2">'.$datos_cuadro['Placa'].'</td>'
    . '<td colspan="1">Seguro:</td>'
    . '<td colspan="2" style="border-right-width:1px;">'.$datos_cuadro['concatenado_plan'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" align="center" style="border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #fce4d6;"><strong>ACUERDO LEGAL(I)</strong></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>PRIMERA:</strong> El presente contrato de adhesión versa sobre un plan pre-pagado de servicio de auxilio vial (grúa anual), adquirido sólo y únicamente para el vehículo ut-supra identificado.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>SEGUNDA:</strong> Ud., podrá solicitar nuestros servicios mediante nuestra aplicación para Smartphones (teléfonos inteligentes) “TUGRUERO app clientes”, la cual podrá ser descargada de forma gratuita desde la respectiva tienda del sistema operativo de su teléfono. A todo evento, igual podrá solicitar los servicios mediante nuestro Call-Center por los números telefónicos <b style="font-size: 12px;">(0212) 2379227 / 0500 GRUERO-0 (0500 478376-0)</b>.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>TERCERA:</strong> Los servicios adquiridos mediante el plan pre-pagado sólo se prestaran si el vehículo sufre o sufrió una avería que le imposibilite andar y será auxiliado a nivel nacional hacia el lugar requerido por la persona, siempre y cuando el tramo a recorrer no exceda en ningún momento a cincuenta (50) kilómetros desde el sitio de origen de avería hacia el lugar requerido por Ud.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>CUARTA:</strong> El presente plan pre-pagado de auxilio vial posee validez de un (1) año y estará activo a partir de la fecha del pago de la totalidad del mismo.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>QUINTA:</strong> Vencido como fuera el lapso de tiempo por el cual fue contratado el servicio, Ud. entiende que no posee “mes de gracia”, y en caso de necesitar utilizar los servicios de la empresa, deberá adquirir nuevo plan pre-pagado.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>SEXTA:</strong>  Si adquirió el producto financiado, en caso de retrasos en el pago de las siguientes cuotas en la fecha, lugar, monto y forma convenida, se suspenderá inmediatamente el derecho a utilizar los servicios ofrecidos por “Soluciones Tu Gruero C.A.” conforme al 1.168 del código civil, sin menoscabo de actuar de conformidad con lo previsto en el artículo 1.167 eiusdem.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>SEPTIMA:</strong>  En caso de adquirir el producto financiado, el incumplimiento en el pago de la obligación adquirida por Ud., automáticamente acarrea un incremento en el valor a pagar indicado inicialmente por el producto adquirido, en tal sentido, se le realizará recargo del veinte por ciento (20%) por cada mes de atraso en el que incurra sobre el monto total a pagar de la factura inicial. Además, no podrá disfrutar el servicio por una cantidad de dos (02) día hábiles    acumulativos por cada día de retraso en el o los pagos correspondientes, contados a partir de la fecha de pago de la(s) cuotas(s) pendientes(s).'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>OCTAVA:</strong> En caso de adquirir el producto financiado, Ud., faculta a “Soluciones Tu Gruero C.A.” para realizar el proceso de cobranza de las cuotas restantes por los siguientes medios de comunicación: mensajería de texto masiva, correo electrónico y llamada. '
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>NOVENA:</strong> “Soluciones Tu Gruero C.A.” no realiza reintegro o devolución de dinero en caso de no poder o no querer pagar la totalidad del producto adquirido, habiendo o no utilizado alguno de nuestros servicios.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>DECIMA:</strong>   “Soluciones Tu Gruero C.A.” no trabaja con reembolsos de facturas por servicios tomados de forma particular, en tal sentido, no se reconocerá ningún servicio de auxilio vial (grúa) tomado de forma particular. Por tanto, no se realizará el reembolso de cantidades pagadas a proveedores externos a la compañía, cuando no sean autorizados previamente por el respectivo personal  de la empresa. '
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>DECIMA PRIMERA:</strong>  Los servicios desde el estado Nueva Esparta hacia cualquier estado o puerto perteneciente al territorio continental de la República Bolivariana de Venezuela, o viceversa, no están cubiertos por el plan pre-pagado adquirido por su persona.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">'
    . '<br><strong>DECIMA SEGUNDA:</strong>  Cuando el recorrido que realiza la grúa desde el lugar de origen del vehículo accidentado hasta el lugar de destino indicado por el cliente, excede el kilometraje establecido en el plan de grúas, debe realizar un pago adicional para poder gozar del servicio. Las formas de pago son a través de Transferencia Bancaria o Tarjeta de Crédito). El monto a cancelar será indicado por el operador del Call Center y podrá ser procesado en el lugar de origen o destino del vehículo accidentado. El cliente tendrá máximo dos (02) días hábiles siguientes después de la solicitud para realizar dicho pago.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>DECIMA TERCERA:</strong>   De no cumplir con el pago mencionado en la cláusula anterior, tendrá un recargo del 5% del monto establecido por cada día de incumplimiento que transcurra. Durante este proceso, el plan de grúas adquirido quedará momentáneamente suspendido hasta realizar la cancelación.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>DECIMA CUARTA:</strong> Para mayor información le recomendamos que se tome el tiempo de leer los términos y condiciones, así como nuestra política de privacidad CUIDADOSAMENTE del producto que está adquiriendo a través de nuestro portal web www.tugruero.io'
    . '</td>'
    . '</tr>'
    . '</table>';
    $html.='<div align="center">'
    . '<br><table width="100%" border="0">'
    . '<tr>'
    . '<td><img src="'.full_url.'/web/img/FIRMA1.jpg" width="50"></td>'
    . '</tr>'
    . '<tr>'
    . '<td><img src="'.full_url.'/web/img/SELLO1.jpg" width="90"></td>'
    . '</tr>'
    . '</table></div>';;
    if($datos_cuadro['Urbano'] == 'S')
    {
      $html.='<span style="font-size: 10px;"><strong>(*) Servicio Urbano:</strong> Servicios de máximo 50km de recorrido.</span>';

    }
    if($datos_cuadro['ExtraUrbano'] == 'S')
    {
      $html.='<br><span style="font-size: 10px;"><strong>(*) Servicio Extraurbano:</strong> Servicios de máximo 300km de recorrido.</span>';

    }

    $html.='<p align="center">Av Francisco de Miranda, Edif Provincial, Piso 8, Oficina 8B. Los Dos Caminos, Municipio Sucre, Edo. Miranda, Caracas, Venezuela. Tlf: <b><font style="font-size: 10px;">0500-GRUERO-0 (0500-478376-0) / 0212-2379227 / 0212-4190105 · info@tugruero.com - tugruero@gmail.com</font></b></p>'
    ;
    $pdf->writeHTML($html);
    $pdf->AddPage();
    $html = '<table width="100%" border="0">'
    . '<tr>'
    . '<td colspan="2" align="center"><img src="'.full_url.'/web/img/logo_tugruero.png" width="40"></td>'
    . '<td colspan="7"><strong>SOLUCIONES TU GRUERO C.A.</strong><br>RIF.- J-40680605-6</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" align="center" style="border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #fce4d6;"><strong>ACUERDO LEGAL(II)</strong></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>DECIMA QUINTA:</strong> El servicio de grúas TUGRUERO PLUS y TUGRUERO GOLD estará activo, y el cliente lo podrá disfrutar, luego de diez (10) días hábiles del pago del mismo y entrega de esta planilla firmada y sellada.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>DECIMA SEXTA:</strong>   El servicio de grúas contratado por el cliente será responsabilidad plena y absoluta de Soluciones Tu Gruero, C.A. entendiéndose así que cualquier reclamo, crítica y/o sugerencia del servicio debe ser comunicado a esta compañía.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>DECIMA SÉPTIMA:</strong>  Cuando el vehículo afiliado es del año 2000 en adelante, usted cuenta con servicios urbanos ilimitados a nivel nacional. A pesar que las averías/fallas que puede sufrir un vehículo son ilimitadas, usted cuenta solo con 3 servicios de grúa por avería/falla reportada durante la vigencia de su plan de grúas.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>DECIMA OCTAVA:</strong>  El plan de grúas TUGRUERO GOLD cuenta con un (01) servicio extraurbano de máximo 300Km y podrá ser utilizado sólo si el vehículo accidentado se encuentra en plena vía o en un lugar de resguardo y requiere el traslado hasta el lugar de domicilio establecido en el plan adquirido.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>DECIMA NOVENA:</strong>  El cliente responsable del plan de grúas puede realizar unicamente un (01) cambio de domicilio durante el año de vigencia del producto. Este mismo se activará un (01) mes después de realizada la solicitud.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA:</strong>  Los traslados de grúas autorizados por Soluciones TuGruero deben tener las siguientes características:                                             1. Plena vía/Resguardo - Domicilio, 2. Plena vía/ Resguardo - Taller, 3. Domicilio - Taller y 4. Taller - Taller.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA PRIMERA:</strong> Soluciones Tu Gruero, C.A. no garantiza la prestación de los servicios de grúa en las denominadas zonas rojas del territorio nacional. Entendiendose como zonas rojas: barrios, vecindarios, calles o cualquier territorio altamente peligroso debido a la inseguridad. Estas zonas rojas pueden ser verificadas en www.tugruero.io'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA SEGUNDA:</strong> Soluciones Tu Gruero, C.A. no prestará servicios de auxilio vial a vehículos que presenten fallas debido a negligencias del conductor y/o propietario. Estas fallas son: batería descargada, falta de gasolina, llaves dejadas dentro del vehículo, dejar negligentemente el vehículo atascado en barro o arena, accidentarse en lugares no accesibles o inhóspitos, personas bajo efectos del alcohol o sustancias psicotrópicas o cualquier otra falla que el operador considere negligente.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA TERCERA:</strong> Soluciones Tu Gruero, C.A. no prestará servicios de auxilio vial (grúa) a vehículos que tengan una llanta espichada. Se entiende que el cliente debe poseer un (01) neumático de repuesto dentro de su vehículo y si no lo posee, es un negligencia del conductor y/o propietario del mismo.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA CUARTA:</strong> Soluciones Tu Gruero, C.A. no prestará servicios de auxilio vial (grúa) en forma de rescate. Se entiende por rescate a: vehículos volcados, encunetados a más de dos (02) metros, vehículos fuera de la vía y/o cualquier condición que requiera un maniobra especial por el operador de grúa.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA QUINTA:</strong> En caso de que el vehículo haya chocado contra otro vehículo o algún elemento de la Nación, Soluciones Tu Gruero, C.A. no puede prestar sus servicios de auxulio vial hasta que las autoridades de tránsito hayan liberado el vehículo. Una vez, el conductor y/o propietario del vehículo tenga la boleta de liberación, la compañía podrá prestar el servicio de grúa pertinente.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA SEXTA:</strong>  En caso de que el vehículo se encuentre en un estacionamiento adscrito a un ente gubernamental y ya el cliente posea la boleta de liberación, este debe garantizar que el vehículo se encuentre completamente para ser retirado del lugar. De esta forma, se agiliza el proceso.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: -1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA SEPTIMA:</strong> Soluciones Tu Gruero, C.A. verificará ante el Ministerio Público la placa del vehículo que solicite el servicio y si este se encuentra solicitado por este ente, la compañía procederá inmediatamente a la no prestación del servicio y cancelación del plan. Además, se betará al cliente contratante de por vida y no podrá disfrutar de los servicios que ofrece la compañía.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA OCTAVA:</strong> En caso de que el vehículo tenga dos (02) neumáticos dañados, Soluciones Tu Gruero, C.A. solamente prestará el servicio si ambos neumáticos son del mismo eje (delanteros o traseros). Esto se debe para poder realizar el servicio con una grúa de WheelLift o Gancho.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">'
    . '<br><strong>VIGESIMA NOVENA:</strong>  Soluciones Tu Gruero, C.A. no prestará servicios de auxilio vial si el conductor y/o propietario del vehículo no posee el carnet de circulación consigo en el momento y lugar del vehículo accidentado.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">'
    . '<br><strong>TRIGESIMA:</strong>  Soluciones Tu Gruero, C.A. se reserva el derecho de cancelar y/o posponer cualquier servicio de auxilio vial (grúa) en caso de: manifestaciones sociales, protestas, guerras, toque de queda, catástrofes naturales que afecten las vías y el paso de los vehículos y/o cualquier eventualidad que imposibilite la normal circulación de vehículos en la vía.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">'
    . '<br><strong>TRIGESIMA PRIMERA:</strong>  En caso de que el cliente cometa actos fraudulentos para solicitar servicios de grúas y aprovecharse de los plan de grúas, Soluciones Tu Gruero, C.A. procederá a la no prestación del servicio e inmediatamente a la suspensión y cancelación del plan contratado. Además, se betará al cliente contratante por una duración de un (01) año y no podrá gozar ningún servicio que ofrezca la compañía.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">'
    . '<br><strong>TRIGESIMA SEGUNDA:</strong>  Se entiende por actos fraudulentos: indicar al operador o en la aplicación móvil un origen y/o destino diferente al real, indicar un vehículo con diferente placa, marca, modelo, color, indicar una avería diferente a la real. En vista de esto se le solicita al cliente suministrar una información veraz y real.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">'
    . '<br><strong>TRIGESIMA TERCERA:</strong>  En caso de que el servicio de grúa tenga como destino un taller, el cliente debe asegurar que el mismo se encuentre abierto para cuando se llegue a dicho destino. En caso contrario, Soluciones Tu Gruero, C.A. llevará el vehículo al domicilio del cliente (siempre y cuando el servicio no exceda los cincuenta (50) kilómetros) y no se prestará más servicios para esa avería que presenta el vehículo. Si el domicilio de la persona se encuentra en un destino mayor a cincuenta (50) kilómetros, el cliente puede elegir otro destino para resguardar el vehículo.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">'
    . '<br><strong>TRIGESIMA CUARTA:</strong> En la cobertura del plan de grúas, usted cuenta con servicios de taxi. Estos serán solicitados a Soluciones Tu Gruero, C.A. cuando el vehículo accidentado se encuentre en plena vía y con más dos (02) personas (acompañantes) dentro del mismo. Las unidades de taxi son tipo Sedan con capacidad para cuatro (04) pasajeros (uno trasladado en el asiento del copiloto y tres traslados en los asientos traseros del vehículo). Este servicio queda a discreción de Soluciones Tu Gruero la prestación del mismo según la disponibilidad de unidades de sus proveedores.'
    . '</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" style="border-style: solid; border-top-width: -1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">'
    . '<br><strong>TRIGESIMA QUINTA:</strong>  Soluciones Tu Gruero, C.A. se reserva el derecho de modificar los Términos y Condiciones del servicio cuando la empresa lo considere necesario para mejorar su servicio, dentro de los límites fijados por las leyes de la República Bolivariana de Venezuela. '
    . '</td>'
    . '</tr>'
    . '</table>';
    $html.='<div align="center">'
    . '<br><table width="100%" border="0">'
    . '<tr>'
    . '<td><img src="'.full_url.'/web/img/FIRMA1.jpg" width="50"></td>'
    . '</tr>'
    . '<tr>'
    . '<td><img src="'.full_url.'/web/img/SELLO1.jpg" width="90"></td>'
    . '</tr>'
    . '</table></div>';;

    if($datos_cuadro['Urbano'] == 'S')
    {
      $html.='<span style="font-size: 10px;"><strong>(*) Servicio Urbano:</strong> Servicios de máximo 50km de recorrido.</span>';

    }
    if($datos_cuadro['ExtraUrbano'] == 'S')
    {
      $html.='<span style="font-size: 10px;"><strong>(*) Servicio Extraurbano:</strong> Servicios de máximo 300km de recorrido.</span>';

    }

    $html.='<p align="center">Av Francisco de Miranda, Edif Provincial, Piso 8, Oficina 8B. Los Dos Caminos, Municipio Sucre, Edo. Miranda, Caracas, Venezuela. Tlf: <b><font style="font-size: 10px;">0500-GRUERO-0 (0500-478376-0) / 0212-2379227 / 0212-4190105 · info@tugruero.com - tugruero@gmail.com</font></b></p>'
    ;
    $pdf->writeHTML($html);
    $pdf->Output(dir_cuadros."/".$datos_cuadro['NumProducto'].".pdf", 'F');
    //$pdf->Output(dir_cuadros."/".$datos_cuadro['NumProducto'].".pdf", 'I');
  }

  public function cuadroRCVAsistir($values){
    setlocale(LC_NUMERIC,"es_ES.UTF8");
    ob_start();
    $SolicitudPlan = new SolicitudPlan();
    $idSolicitudPlan = $values['idSolicitudPlan'];
    $Utilitarios = new Utilitarios();
    $datos_cuadro = $SolicitudPlan->getSolicitudPlanAprobadaInfoAsistir($idSolicitudPlan);
    //print_r($datos_cuadro);die;
    // create new PDF document
    $pdf = new MYPDF2(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('TU/GRUERO®');
    $pdf->SetTitle('TU/GRUERO®');
    $pdf->SetSubject('TU/GRUERO®');
    $pdf->SetKeywords('TU/GRUERO®');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 5, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
      require_once(dirname(__FILE__).'/lang/eng.php');
      $pdf->setLanguageArray($l);
    }

    // ---------------------------------------------------------

    // set font
    $pdf->SetFont('helvetica', '', 7);

    // add a page
    $pdf->AddPage();
    //$image_file = K_PATH_IMAGES.'logo_tugruero.png';
    //$pdf->Image($image_file, 15, 2, 25, '', 'PNG', '', 'T', false, 100, '', false, false, 0, false, false, false);
    // set some text to print

    $html = '<table width="100%">'
    . '<tr>'
    . '<td colspan="3" align="center"><br><br><br><img src="'.full_url.'/web/img/fresh/asistir_pdf.png" width="150"></td>'
    . '<td colspan="5" align="center"><br><br><br><br><br><b>CUADRO PÓLIZA RECIBO</b><br><br><b>SEGURO DE VEHICULOS TERRESTRES</b></td>'
    . '<td colspan="3">&nbsp;</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;border-top-width:1px;"> N° de Póliza:</td>'
    . '<td colspan="3" style="border-top-width:1px;">'.$datos_cuadro['PolizaAsistir'].'</td>'
    . '<td colspan="2" style="border-top-width:1px;">No de Recibo:</td>'
    . '<td style="border-top-width:1px;">'.$datos_cuadro['ReciboAsistir'].'</td>'
    . '<td colspan="2" style="border-top-width:1px;">Forma de Pago:</td>'
    . '<td style="border-right-width:1px;border-top-width:1px;">Anual</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;"> Vigencia de la Póliza:</td>'
    . '<td colspan="3">Anual</td>'
    . '<td colspan="2">Desde:</td>'
    . '<td>'.$Utilitarios->formateaFecha($datos_cuadro['VigenciaDesde'], 'd/m/Y').'</td>'
    . '<td colspan="2">Hasta:</td>'
    . '<td style="border-right-width:1px;">'.$Utilitarios->formateaFecha($datos_cuadro['VigenciaHasta'], 'd/m/Y').'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;"> Tomador:</td>'
    . '<td colspan="7">'.$datos_cuadro['Nombres'].', '.$datos_cuadro['Apellidos'].'</td>'
    . '<td colspan="2" align="right" style="border-right-width:1px;"><label style="font-size:6px;">Hasta 12 M Hora Oficial</label></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;"> Caracter:</td>'
    . '<td colspan="3">Natural</td>'
    . '<td colspan="2">Rif/C.I:</td>'
    . '<td>'.$datos_cuadro['Cedula'].'</td>'
    . '<td colspan="2">Teléfono:</td>'
    . '<td style="border-right-width:1px;">'.$datos_cuadro['Celular'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;"> Dirección del Tomador:</td>'
    . '<td colspan="9" style="border-right-width:1px;">'.$datos_cuadro['Domicilio'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;"> Asegurado:</td>'
    . '<td colspan="6">'.$datos_cuadro['Nombres'].', '.$datos_cuadro['Apellidos'].'</td>'
    . '<td colspan="2">Rif/C.I:</td>'
    . '<td style="border-right-width:1px;">'.$datos_cuadro['Cedula'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;"> Dirección del Asegurado:</td>'
    . '<td colspan="6">'.$datos_cuadro['Domicilio'].'</td>'
    . '<td colspan="2">Teléfono:</td>'
    . '<td style="border-right-width:1px;">'.$datos_cuadro['Celular'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;"> Beneficiario:</td>'
    . '<td colspan="6">'.$datos_cuadro['Nombres'].', '.$datos_cuadro['Apellidos'].'</td>'
    . '<td colspan="2">Rif/C.I:</td>'
    . '<td style="border-right-width:1px;">'.$datos_cuadro['Cedula'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;"> Dirección de Cobro:</td>'
    . '<td colspan="6">'.$datos_cuadro['Domicilio'].'</td>'
    . '<td colspan="2">Teléfono:</td>'
    . '<td style="border-right-width:1px;">'.$datos_cuadro['Celular'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="11" align="center" style="border-left-width:1px;border-bottom-width:1px;border-top-width:1px;border-right-width:1px;"><br><br style="font-size: 10px;">DATOS DEL VEHICULO ASEGURADO<br></td>'
    . '</tr>'
    . '<tr>'
    . '<td style="border-left-width:1px;"> Marca:</td>'
    . '<td colspan="2">'.$datos_cuadro['Marca'].'</td>'
    . '<td>Modelo:</td>'
    . '<td>'.$datos_cuadro['Modelo'].'</td>'
    . '<td>Clase:</td>'
    . '<td colspan="2">'.$datos_cuadro['Clase'].'</td>'
    . '<td colspan="3" style="border-right-width:1px;">Serial de Motor: '.$datos_cuadro['SerialMotor'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" style="border-left-width:1px;"> Serial de Carroceria:</td>'
    . '<td colspan="4">'.$datos_cuadro['SerialCarroceria'].'</td>'
    . '<td>N° Placa:</td>'
    . '<td>'.$datos_cuadro['Placa'].'</td>'
    . '<td>Uso:</td>'
    . '<td colspan="2" style="border-right-width:1px;">Particular</td>'
    . '</tr>'
    . '<tr>'
    . '<td style="border-left-width:1px;border-bottom-width:1px;"> Tipo:</td>'
    . '<td style="border-bottom-width:1px;" colspan="2">'.$datos_cuadro['Tipo'].'</td>'
    . '<td style="border-bottom-width:1px;">Color:</td>'
    . '<td style="border-bottom-width:1px;">'.$datos_cuadro['Color'].'</td>'
    . '<td style="border-bottom-width:1px;">N° Puestos:</td>'
    . '<td style="border-bottom-width:1px;" colspan="2">'.$datos_cuadro['Puestos'].'</td>'
    . '<td style="border-bottom-width:1px;">Año:</td>'
    . '<td colspan="2" style="border-right-width:1px;border-bottom-width:1px;">'.$datos_cuadro['Anio'].'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="4" align="center" style="border-left-width:1px;border-bottom-width:1px;"><br><br>Coberturas<br></td>'
    . '<td colspan="2" align="right" style="border-bottom-width:1px;"><br><br>Suma asegurada<br></td>'
    . '<td colspan="2" align="center" style="border-bottom-width:1px;"><br><br>Deducible<br></td>'
    . '<td colspan="" align="center" style="border-bottom-width:1px;"><br><br>Tasa<br></td>'
    . '<td colspan="2" align="center" style="border-bottom-width:1px;border-right-width:1px;"><br><br>Prima<br></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" align="left" style="border-left-width:1px;"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RCV<br></td>'
    . '<td colspan="2" align="left"><br><br>DAÑOS A COSAS<br>DANÕS A PERSONAS</td>'
    . '<td colspan="2" align="right"><br><br>Bs. '.number_format($datos_cuadro['RCVCosas'],2,",",".").'<br>Bs. '.number_format($datos_cuadro['RCVPersonas'],2,",",".").'</td>'
    . '<td colspan="2" align="center"><br><br><br></td>'
    . '<td colspan="" align="center"><br><br><br></td>'
    . '<td colspan="2" align="center" style="border-right-width:1px;"><br><br>Bs. '.number_format($datos_cuadro['RCVPrima'],2,",",".").'<br></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" align="left" style="border-left-width:1px;"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXCESO DE LIMITES<br></td>'
    . '<td colspan="2" align="left"><br><br>EXCESO DE LIMITE<br></td>'
    . '<td colspan="2" align="right"><br><br>Bs. '.number_format($datos_cuadro['ExcesoLimites'],2,",",".").'</td>'
    . '<td colspan="2" align="center"><br><br><br></td>'
    . '<td colspan="" align="center"><br><br><br></td>'
    . '<td colspan="2" align="center" style="border-right-width:1px;"><br><br>Bs. '.number_format($datos_cuadro['ExcesoPrima'],2,",",".").'<br></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" align="left" style="border-left-width:1px;"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEFENSA PENAL<br></td>'
    . '<td colspan="2" align="left"><br><br>DEFENSA PENAL<br></td>'
    . '<td colspan="2" align="right"><br><br>Bs. '.number_format($datos_cuadro['DefensaPenal'],2,",",".").'</td>'
    . '<td colspan="2" align="center"><br><br><br></td>'
    . '<td colspan="" align="center"><br><br><br></td>'
    . '<td colspan="2" align="center" style="border-right-width:1px;"><br><br>Bs. '.number_format($datos_cuadro['DefensaPrima'],2,",",".").'<br></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" align="left" style="border-left-width:1px;"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A.P.O.V.<br></td>'
    . '<td colspan="2" align="left"><br><br>MUERTE<br>INVALIDEZ<br>PERMANENTE<br>GASTOS MEDICOS</td>'
    . '<td colspan="2" align="right"><br><br>Bs. '.number_format($datos_cuadro['APOVMuerte'],2,",",".").'<br>Bs. '.number_format($datos_cuadro['APOVInvalidez'],2,",",".").'<br><br>Bs. '.number_format($datos_cuadro['APOVGastos'],2,",",".").'</td>'
    . '<td colspan="2" align="center"><br><br><br></td>'
    . '<td colspan="" align="center"><br><br><br></td>'
    . '<td colspan="2" align="center" style="border-right-width:1px;"><br><br><br><br><br>Bs. '.number_format($datos_cuadro['APOVPrima'],2,",",".").'</td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" align="left" style="border-left-width:1px;"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASISTENCIA VIAL<br></td>'
    . '<td colspan="2" align="left" ><br><br>INCLUIDO<br></td>'
    . '<td colspan="2" align="right"><br><br></td>'
    . '<td colspan="2" align="center"><br><br><br></td>'
    . '<td colspan="" align="center" ><br><br><br></td>'
    . '<td colspan="2" align="center" style="border-right-width:1px;"><br><br>Bs. '.number_format($datos_cuadro['costoplantugruero'],2,",",".").'<br></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="2" align="left" style="border-left-width:1px;border-bottom-width:1px;"><br><br><br></td>'
    . '<td colspan="" align="left" style="border-bottom-width:1px;"><br><br><br></td>'
    . '<td colspan="4" align="right" style="border-bottom-width:1px;">TOTAL POLIZA RCV Y COMPLEMENTARIOS</td>'
    . '<td colspan="" align="center" style="border-bottom-width:1px;"><br><br><br></td>'
    . '<td colspan="" align="center" style="border-bottom-width:1px;"><br><br><br></td>'
    . '<td colspan="2" align="center" style="border-right-width:1px;border-bottom-width:1px;"><br>Bs. '.number_format($datos_cuadro['TotalConIva'],2,",",".").'<br></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="11" align="center" style=""><br><br></td>'
    . '</tr>'
    . '<tr>'
    . '<td colspan="9" align="right" style="border-left-width:1px;border-bottom-width:1px;border-top-width:1px;"><br><br><b>TOTAL PRIMA NETA ANUAL</b><br></td>'
    . '<td colspan="2" align="center" style="border-bottom-width:1px;border-top-width:1px;border-right-width:1px;"><br><br><b>Bs. '.number_format($datos_cuadro['TotalConIva'],2,",",".").'</b><br></td>'

    . '</tr>'
    . '</table>';
    $pdf->writeHTML($html);
    $html = '<br>'
    . '<br>'
    . '<p>El tomador y/o Asegurado declara(n) recibir en este Acto las condiciones generales y particulares de la Póliza</p>'
    . '<p><b>Autorización y Compromiso:</b> Autorizo a las Compañías o Instituciones, para suministrar a la ASEGURADORA, todos los datos que posean antes o
    despues del siniestro, asimismo autorizo a la ASEGURADORA, a recabar cualquier información relacionada con el riesgo y a verificar los datos de este
    CUADRO RECIBO DE LA PÓLIZA</p>
    <br>
    <p>Declaro que el dinero utilizado para el pago de la prima de la Póliza a suscribir, proviene de una fuente lícita, por lo tanto no tiene relación alguna con
    dinero, capitales, bienes haberes o beneficios derivados de actividades ilícitas o de los delitos de legitimación de capitales previstos en la Ley Orgánica
    Contra la Delincuencia Organizada</p>';
    $pdf->writeHTML($html);
    $html = '<br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asociado Promotor: MARIA SOLEDAD RODRIGUEZ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Código: 10253</p>';
    $pdf->writeHTML($html);
    $html = ''
    . '<table width="100%">'

    . '<tr>'
    . '<td align="center">&nbsp;</td>'
    . '<td align="center">&nbsp;</td>'
    . '<td align="center"><div align="center"><img src="'.full_url.'/web/img/firma_asistir.png" width="140"></div></td>'
    . '</tr>'
    . '<tr>'
    . '<td align="center">__________________________________________</td>'
    . '<td align="center">ASEGURADO</td>'
    . '<td align="center">__________________________________________</td>'
    . '</tr>'
    . '<tr>'
    . '<td align="center"><br><br><br>El Asegurado </td>'
    . '<td align="center"></td>'
    . '<td align="center"><br><br><br>Por: Asistir</td>'
    . '</tr>'
    . '</table>';
    $pdf->writeHTML($html);



    $pdf->Output(dir_cuadros."/". $values['idSolicitudPlan']."_rcv.pdf", 'F');
    //$pdf->Output(dir_cuadros."/".$values['idSolicitudPlan']."_rcv.pdf", 'I');


  }



}
