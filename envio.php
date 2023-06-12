	 
<?php

$fuso_horario = 0;
  $ts=time()+(1 * 3600); 
  $d=getdate($ts); 
  $horas=$d["hours"]; 
  $minutos=$d["minutes"]; 
  $segundos=$d["seconds"]; 
  $horario = "$horas:$minutos:$segundos"; 

 $data = date("Y-m-d");
 $hora = $horario;
 $name = $_POST['name'];
 $email = $_POST['email'];
 $assunto = $_POST['assunto'];
 $message = $_POST['message'];
 

$data_site = date("Y-m-d");
list ($ano, $mes, $dia) = explode('[/.-]', $data_site);

$assuntos="Contato Site";
$date = date("m/d/Y H:i:s");
$html = "Content-Type: text/html; charset=iso-8859-1\n";
$html.="From: Contato Site\n";

$mensagem = "<html><head><table width=\"620\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#CD6C01\">
<tr>
  <td align=\"center\"><font color=\"#FFFFFF\" size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><strong>Mensagem enviada em $dia \ $mes \ $ano &agrave;s $hora</strong></font></td>
</tr>
</table><br>
<table width=\"519\" border=\"0\" cellspacing=\"3\" cellpadding=\"3\">
<tr bgcolor=\"#CCCCCC\">
  <td width=\"158\">&nbsp;    </td>
  <td width=\"340\" bgcolor=\"#CCCCCC\"><font color=\"#000000\" size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><strong>Informa&ccedil;&otilde;es</strong></font></td>
</tr>
<tr>
  <td><strong><font color=\"1b5794\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">Nome :</font></strong></td>
  <td><font color=\"1b5794\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">$name</font></td>
</tr>
<tr>
  <td><strong><font color=\"1b5794\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">E-mail :</font></strong></td>
  <td><font color=\"1b5794\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">$email</font></td>
</tr>

 <tr>
  <td><strong><font color=\"#1B5794\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">Assunto:</font></strong></td>
  <td><font color=\"1b5794\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">$assunto</font></td>
</tr>

<tr>
  <td><strong><font color=\"#1B5794\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">Mensagem:</font></strong></td>
  <td><font color=\"1b5794\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">$message</font></td>
</tr>";



$mensagem = $mensagem."</table></head></html>";
     
      $destinatario = 'contato@ontracksolutions.com.br';
      $assunto = 'Contato Site ';
      //$mensagem = 'É fácil enviar e-mail com o php';

      $header = "MIME-Version: 1.0\n"; 
      $header .= "Content-type: text/html; charset=iso-8859-1\n"; 
      $header .= "From: contato@ontracksolutions.com.br\n";

      mail($destinatario, $assunto, $mensagem, $header);

  echo 'Enviado com sucesso!';
?>               
                         
 