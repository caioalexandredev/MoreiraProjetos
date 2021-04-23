<?php
    if(isset($_POST['email']) && isset($_POST['subject'])){
        $email = $_POST['email'];
        $assunto = $_POST['subject'];
        $msg = "";
        $msg .= "<div style='background-color: rgba(216, 255, 255, .5);padding: 20px; text-align: center;'>"; 
        $msg .=    "<table border='0' cellpadding='0' cellspacing='0' align='center' width='560' style='border-collapse:collapse;border-spacing:0;padding:0;width:560px;max-width:560px; background-color: #fff; border-radius: 10px;'>"; 
        $msg .=        "<tbody>"; 
        $msg .=            "<tr>";
        $msg .=                "<td align='center' valign='top' style='border-collapse:collapse;border-spacing:0;margin:0;width:87.5%;font-size:24px;font-weight:bold;line-height:130%;padding:25px 6.25% 0 6.25%;color:#666;font-family:sans-serif'>"; 
        $msg .=                    "FeedBack Website"; 
        $msg .=                "</td>";
        $msg .=            "</tr>";
        $msg .=           "<tr>";
        $msg .=                "<td align='left' valign='top' style='border-collapse:collapse;border-spacing:0;margin:0;width:87.5%;font-size:17px;font-weight:400;line-height:160%;padding:25px 6.25% 0 6.25%;color:#000000;font-family:sans-serif'>"; 
        $msg .=                    "<strong>{$assunto}</strong>"; 
        $msg .=                "</td>"; 
        $msg .=            "</tr>";
        $msg .=            "<tr>"; 
        $msg .=                "<td align='left' valign='top' style='border-collapse:collapse;border-spacing:0;margin:0;width:87.5%;font-size:17px;font-weight:400;line-height:160%;padding:25px 6.25% 0 6.25%;color:#000000;font-family:sans-serif'>"; 
        $msg .=                     $_POST['contact']; 
        $msg .=                "</td>"; 
        $msg .=            "</tr>";   
        $msg .=            "<tr>"; 
        $msg .=                "<td align='center' valign='top' style='border-collapse:collapse;border-spacing:0;margin:0;padding:0;padding-left:6.25%;padding-right:6.25%;width:87.5%;padding-top:25px;padding-bottom:25px'>"; 
        $msg .=                    "<hr color='#E0E0E0' align='center' width='100%' size='1' noshade='' style='margin:0;padding:0'>"; 
        $msg .=                "</td>"; 
        $msg .=            "</tr>"; 
        $msg .=            "<tr>"; 
        $msg .=                "<td align='left' valign='top' style='border-collapse:collapse;border-spacing:0;margin:0;width:87.5%;font-size:18px;font-weight:300;line-height:150%;padding:10px 6.25% 25px 6.25%;color:#444444;font-family:sans-serif'>"; 
        $msg .=                    $_POST['name']; 
        $msg .=                    "<br>"; 
        $msg .=                    $email; 
        $msg .=                "</td>"; 
        $msg .=            "</tr>"; 
        $msg .=        "</tbody>"; 
        $msg .=    "</table>"; 
        $msg .= "</div>";   
             
        $nome = 'Site - IDT';
        $headers = "Content-type: text/html; charset=utf-8"."\r\n"; /* Envia mensagems em formato HTML. */
        $headers .= "From: ".$nome."<".$email.">"; /* Remetente */
        if(mail("contato@moreiraprojetos.com.br", $assunto, $msg, $headers)) {
            
        }else {
            
        }
    }

?>
