<?php
include("../notorm-master/NotORM.php");
include("../ConnectionORM.class.php");
include("../vendors/swiftmailer/lib/swift_required.php");

mailMarketing1(null);



function mailMarketing1($values){
$id_marketing = 2;
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->mail_marketing1
			->select("*")
			->where("status=?",0)
			->and('id_marketing=?',$id_marketing)
			->limit(50);
		$array_correos = array();
		foreach ($q as $emails){
			
			$array_correos[] = $emails['correo'];
			
		}

		//print_r($array_correos);die;
		try{
        //$smtp = "server-0116a.gconex.net";
		$smtp = "mail.tugruero.com";
        $port = 465;
        $secure = "ssl";
        $username = "mercadeo@tugruero.com";
        $password = "tugruero123";
		$mail_from = 'mercadeo@tugruero.com'; 
	
        $transport = Swift_SmtpTransport::newInstance( $smtp, $port, $secure)
          ->setUsername($username)
          ->setPassword($password);
        // Create the Mailer using your created Transport
        $mailer = Swift_Mailer::newInstance($transport);
       //$email = array('deandrademarcos@gmail.com','deandrademarcos@hotmail.com');
		$email = $array_correos;
			$message = Swift_Message::newInstance('TU/GRUERO® Plus. ¡Tu plan de grúas ilimitado!');
			$message->setBody('<html>
    
    <head>
        <title>TU/GRUERO®</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;font-size: 18px;">
        <div align="center">
            <table width="800" style="border: 0px;">
               <tr>
                   <td style="background-color: #ccc;" align="center">
                       <p align="center"><a href="http://www.tugruero.com/tugruero.php" target="_blank"><img src="http://www.tugruero.com/web/img/nuevo/logo_circulo.png" width="150"></a><p>
                       <p align="center"><a href="http://www.tugruero.com/tugruero.php" target="_blank"><img src="http://www.tugruero.com/web/img/titulo2.png" width="300"></a></p>
                       <br>
                   </td>
               </tr>
               <tr style="background-color: #FFF; color: #000 !important; font-size: 25px;"> 
                   <td>
                       <p align="center">
                           <strong>Un plan de grúas </strong>
                           <br><strong>Anual para que manejes</strong>
                           <br><strong>Tranquilo en todo el país</strong>
                       </p>
                   </td>
               </tr>
               <tr style="background-color: #ccc; color: #000 !important; font-size: 20px;">
                   <td>
                       <p align="left" style="font-size: 40px;"><strong>Incluye</strong></p>
                       <ul>
                           <li>Servicios de grúas ilimitado a nivel nacional 24 horas - 365 días</li>
                           <li>Rescate en menos de 30 minutos</li>
                           <li>Más de 2000 grueros en todo el país</li>
                           <li>Búsqueda del gruero más cercano por gps</li>
                           <li>Los grueros más calificados del mercado</li>
                       </ul>
                   </td>
               </tr>
               <tr style="background-color: #FFF; color: #000 !important; font-size: 35px;"> 
                   <td>
                       <p align="center"><strong>¡ADQUIERELO YA!</strong></p>
                       <p align="center"><strong>¡Llámanos!</strong></p>
                       <p align="center"><strong>0212-227-1492 - 0212-419-0105</strong></p>
                   </td>
               </tr>
               <tr style="background-color: #ccc; color: #000 !important; "> 
                   <td>
                       <p align="center" ><a href="http://www.tugruero.com/tugruero.php" target="_blank" style="font-size: 25px; color:#000; text-decoration: none;"><strong style="font-size: 25px; color:#000;">www.tugruero.com</strong></a></p>
                       <p align="center">Av. Francisco de Miranda. Edif Provincial. Piso 8, ofic 8-B.
                       <br>Los Dos Caminos. Caracas, Venezuela</p>
                   </td>
               </tr>
           </table>           
        </div>

    </body>
</html>

',"text/html");			
			
        $message->setFrom(array ($mail_from => 'TU/GRUERO®'));
		$message->setTo('info@tugruero.com');
		$message->setBcc($email);
        // Send the message

			
		$result = $mailer->send($message);	
		}catch(Exception $e){
			$error = array(
				'error' => $e->getMessage(),
				'fecha' => date(gmdate('Y-m-d H:i:s', time() - (4 * 3600))),
				'id_marketing' => 1
			);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->errores_mail()->insert($error);
			die;
		}
		
		

		
		
		foreach($q as $correo){
			$update = array(
				'status' => 1,
				'fec_envio' => date(gmdate('Y-m-d H:i:s', time() - (4 * 3600)))
				);
			$id = $correo['id'];
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->mail_marketing1("id" , $id)->update($update);
		}
		return $result;
		

		
		
		
		}