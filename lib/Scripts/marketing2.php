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
			->limit(50)
			->order("id desc");
		$array_correos = array();
		foreach ($q as $emails){
			
			$array_correos[] = $emails['correo'];
			
		

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
		$email = $emails['correo'];
			$message = Swift_Message::newInstance('TU/GRUERO® Plus. ¡Tu plan de grúas ilimitado!');
			$message->setBody('<!DOCTYPE html>
<html>
    
    <head>
        <title>TU/GRUERO®</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif, cursive;font-size: 18.75px;color:#262426;">
        <div align="center">
            <table width="700">
               <tr>
                   <td style="" align="center">
                       <a href="http://www.tugruero.com/tugruero.php" target="_blank"><img alt="www.tugruero.com" src="'.$message->embed(Swift_Image::fromPath('http://www.tugruero.com/web/img/mail/header2.png')).'"></a>
                   </td>
               </tr>
               <tr>
                   <td>&nbsp;</td>
               </tr>
               <tr>
                   <td style="font-size: 50px; font-weight: 800" align="center"><strong>Un plan de grúas</strong></td>
               </tr>
               <tr>
                   <td style="font-size: 40px;" align="center">anual para que manejes</td>
               </tr>
               <tr>
                   <td align="center" style="font-size: 40px;">tranquilo en todo el país</td>
               </tr>
               <tr>
                   <td>&nbsp;</td>
               </tr>
               <tr>
                   <td style="background-color: #E9E9E9;">
                       <table width="100%">
                           <tr>
                               <td style="padding-top: 0px;">
                                   <label style="font-size: 50px; color:#CA512A;"><strong>Incluye:</strong></label>
                                    <ul style="font-weight: 900;">
                                        <li style="padding-bottom: 10px; font-size: 24px;">Servicios de grúa ilimitados a nivel nacional. 24 horas - 365 días.</li>
                                        <li style="padding-bottom: 10px; font-size: 24px;">Rescate en menos de 30 minutos.</li>
                                        <li style="padding-bottom: 10px; font-size: 24px;">Más de 2000 grueros en todo el país.</li>
                                        <li style="padding-bottom: 10px; font-size: 24px;">Búsqueda del gruero más cercano por GPS.</li>
                                        <li style="padding-bottom: 10px; font-size: 24px;" >Los grueros más calificados del mercado.</li>
                                    </ul>   
                               </td>
                               <td align="center">
                                   <img alt="www.tugruero.com" src="'.$message->embed(Swift_Image::fromPath('http://www.tugruero.com/web/img/mail/icono_rapidez.png')).'"><br>
                                   <img alt="www.tugruero.com" src="'.$message->embed(Swift_Image::fromPath('http://www.tugruero.com/web/img/mail/icono_comodidad.png')).'"><br>
                                   <img alt="www.tugruero.com" src="'.$message->embed(Swift_Image::fromPath('http://www.tugruero.com/web/img/mail/icono_seguridad.png')).'"><br>
                               </td>
                           </tr>
                           
                           <tr>
                               <td colspan="2">
                                   <table width="100%" border="0">
                                       <tr>
                                           <td width="33%" align="right" style="color:#CA512A;">_________________________</td>
                                          
                                           <td align="center" style="padding-top: 20px;"><label style="font-size: 25px; color:#CA512A;"><strong>Válido por 1 año</strong></label></td>                                           
                                           <td width="33%" align="left" style="color:#CA512A;">_________________________</td>
                                       </tr>

                                   </table>
                               </td>
                               
                               
                               
                           </tr>
                           
                           
                       </table>
                       
                       
                   </td>
                   
                   
               </tr>
               
               
               
               <tr>
                   <td style="font-size: 35px; font-weight: 800" align="center">
                        ¡ADQUIERELO YA!
                   </td>
               </tr>
               <tr>
                   <td style="font-size: 35px; font-weight: 800" align="center">
                       0212-227-1492&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0212-419-0105
                   </td>
               </tr>
               <tr>
                   <td align="center" style="background-color: #E7E9EB; font-size: 20px">
                       <a href="http://www.tugruero.com" style="text-decoration: none; color:#f46830;font-weight: 800; font-size: 25px; ">www.tugruero.com</a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="http://www.tugruero.com" style="text-decoration: none; color:#f46830;font-weight: 800; font-size: 25px; ">@tugruero</a>
                   </td>
               </tr>
               <tr>
                   <td align="center" style="font-size: 24px;">Av. Francisco de Miranda Edif. Provincial, piso 8, ofic 8-B Los dos Caminos. Caracas, Venezuela</td>
               </tr>               
           </table>           
        </div>

    </body>
</html>

',"text/html");			
			
        $message->setFrom(array ($mail_from => 'TU/GRUERO®'));
		$message->setTo($email);
		//$message->setBcc('info@tugruero.com');
        // Send the message

			
		$result = $mailer->send($message);	
		}catch(Exception $e){
			$error = array(
				'error' => $e->getMessage(),
				'fecha' => date(gmdate('Y-m-d H:i:s', time() - (4 * 3600))),
				'id_marketing' => $id_marketing
			);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->errores_mail()->insert($error);
			die;
		}
		
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