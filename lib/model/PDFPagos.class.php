<?php

    class PDFPagos{
        
        
        public function cuadroTUGRUERO($values){
			setlocale(LC_NUMERIC,"es_ES.UTF8");
                        ob_start();
			
	
			// create new PDF document
			$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

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
			$pdf->SetMargins(PDF_MARGIN_LEFT, 32, PDF_MARGIN_RIGHT);
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
			$pdf->SetFont('times', '', 8);

			// add a page
			$pdf->AddPage();
                            
			// set some text to print
                       
			$html = '<table width="100%" border="1">'
                                . '<tr>'
                                . '<td colspan="2">sss</td>'
                                . '<td colspan="4"><strong>SOLUCIONES TU GRUERO C.A.</strong><br><strong>RIF.- J-40680605-6</strong></td>'
                                . '<td colspan="2">'
                                    . '<table border="1">'
                                    . '<tr>'
                                    . '<td>N° PRODUCTO</td>'
                                    . '</tr>'
                                    . '<tr>'
                                    . '<td>TGP-PT</td>'
                                    . '</tr>'
                                    . '<tr>'
                                    . '<td>(Llenado por agente de venta)</td>'
                                    . '</tr>'
                                    . '</table>'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">DATOS CLIENTE</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td>NOMBRE:</td>'
                                . '<td></td>'
                                . '<td>APELLIDO:</td>'
                                . '<td></td>'
                                . '<td>EDAD:</td>'
                                . '<td></td>'
                                . '<td>ESTADO CIVIL:</td>'
                                . '<td></td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td>TELEFONO:</td>'
                                . '<td></td>'
                                . '<td>CEDULA/PASAPORTE:</td>'
                                . '<td></td>'
                                . '<td>SEXO:</td>'
                                . '<td colspan=""></td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td>DOMICILIO:</td>'
                                . '<td></td>'
                                . '<td>CEDULA/PASAPORTE:</td>'
                                . '<td></td>'
                                . '<td>CIUDAD:</td>'
                                . '<td colspan="3"></td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td>DIRECCION: </td>'
                                . '<td colspan="8"></td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">DATOS VEHÍCULO</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td>MARCA:</td>'
                                . '<td></td>'
                                . '<td>MODELO:</td>'
                                . '<td></td>'
                                . '<td>COLOR:</td>'
                                . '<td></td>'
                                . '<td>AÑO:</td>'
                                . '<td></td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td>PLACA:</td>'
                                . '<td COLSPAN="3"></td>'
                                . '<td>TIPO:</td>'
                                . '<td COLSPAN="3"></td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">DESCRIPCIÓN DEL PRODUCTO</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td>NOMBRE PRODUCTO:</td>'
                                . '<td COLSPAN="3"></td>'
                                . '<td>COSTO:</td>'
                                . '<td></td>'
                                . '<td>INICIO VIG.</td>'
                                . '<td></td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td>TIPO DE SERVICIOS DE GRUA:</td>'
                                . '<td COLSPAN="3"></td>'
                                . '<td>KILOMETRAJE:</td>'
                                . '<td></td>'
                                . '<td>FIN VIG.</td>'
                                . '<td></td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">ACUERDO LEGAL</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>PRIMERA:</strong> El presente contrato de adhesión versa sobre un plan pre-pagado de servicio de auxilio vial (grúa anual), adquirido sólo y únicamente para el vehículo ut-supra identificado.'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>SEGUNDA:</strong> En caso de adquirir el producto financiado, Ud., faculta a “Soluciones Tu Gruero C.A.” para realizar el proceso de cobranza de las cuotas restantes por los siguientes medios de comunicación: mensajería de texto masiva, correo electrónico y llamada.'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>TERCERA:</strong> Ud., podrá solicitar nuestros servicios mediante nuestra aplicación para Smartphones (teléfonos inteligentes) “TUGRUERO app clientes”, la cual podrá ser descargada de forma gratuita desde la respectiva tienda del sistema operativo de su teléfono. A todo evento, igual podrá solicitar los servicios mediante nuestro Call-Center por los números telefónicos (0212) 2379227.'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>CUARTA:</strong> Los servicios adquiridos mediante el plan pre-pagado sólo se prestaran si el vehículo sufre o sufrió una avería que le imposibilite andar y será auxiliado a nivel nacional hacia el lugar requerido por la persona, siempre y cuando el tramo a recorrer no exceda en ningún momento a cincuenta (50) kilómetros desde el sitio de origen de avería hacia el lugar requerido por Ud.'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>QUINTA:</strong> El presente plan pre-pagado de auxilio vial posee validez de un (1) año y estará activo a partir de la fecha de pago de la primera cuota del valor del producto o del pago de la totalidad del mismo.'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>SEXTA:</strong> Vencido como fuera el lapso de tiempo por el cual fue contratado el servicio, Ud. entiende que no posee “mes de gracia”, y en caso de necesitar utilizar los servicios de la empresa, deberá adquirir nuevo plan pre-pagado.'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>SEPTIMA:</strong> En caso de retrasos en el pago de las siguientes cuotas en la fecha, lugar, monto y forma convenida, se suspenderá inmediatamente el derecho a utilizar los servicios ofrecidos por “Soluciones Tu Gruero C.A.” conforme al 1.168 del código civil, sin menoscabo de actuar de conformidad con lo previsto en el artículo 1.167 eiusdem.'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>OCTAVA:</strong> El incumplimiento en el pago de la obligación adquirida por Ud., automáticamente acarrea un incremento en el valor a pagar indicado inicialmente por el producto adquirido, en tal sentido, se le realizará recargo del veinte por ciento (20%) por cada mes de atraso en el que incurra sobre el monto total a pagar de la factura inicial. Además, no podrá disfrutar el servicio por una cantidad de dos (02) día hábiles acumulativos por cada día de retraso en el o los pagos correspondientes, contados a partir de la fecha de pago de la(s) cuotas(s) pendientes(s).'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>NOVENA:</strong> “Soluciones Tu Gruero C.A.” no realiza reintegro o devolución de dinero en caso de no poder o no querer pagar la totalidad del producto adquirido, habiendo o no utilizado alguno de nuestros servicios.'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>DECIMA:</strong>  “Soluciones Tu Gruero C.A.” no trabaja con reembolsos de facturas por servicios tomados de forma particular, en tal sentido, no se reconocerá ningún servicio de auxilio vial (grúa) tomado de forma particular. Por tanto, no se realizará el reembolso de cantidades pagadas a proveedores externos a la compañía, cuando no sean autorizados previamente por el respectivo personal  de la empresa. '
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>DECIMA PRIMERA:</strong>  Los servicios desde el estado Nueva Esparta hacia cualquier estado o puerto perteneciente al territorio continental de la República Bolivariana de Venezuela, o viceversa, no están cubiertos por el plan pre-pagado adquirido por su persona.'
                                . '</td>'
                                . '</tr>'
                                . '<tr>'
                                . '<td colspan="8">'
                                . '<strong>DECIMA SEGUNDA:</strong>  Para mayor información le recomendamos que se tome el tiempo de leer los términos y condiciones, así como nuestra política de privacidad CUIDADOSAMENTE del producto que está adquiriendo a través de nuestro portal web www.tugruero.com y www.tugruero.com.ve.'
                                . '</td>'
                                . '</tr>'
                                . '</table>'
                                . '<p style="font-size: 14px;">(*) <strong>Servicio Urbano:</strong> servicios dentro de la ciudad indicada al momento de la solicitud del servicio.</p>'
                                ;
			$pdf->writeHTML($html);				
			$pdf->Output("Cuadro Póliza", 'I');            
            
            
            
            
        }
        
        
        
        
        
    }
