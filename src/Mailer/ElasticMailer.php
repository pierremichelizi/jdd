<?php
namespace App\Mailer;

class ElasticMailer{
    private $key="38678A81764A2F9E7E70BBAA5AA991D10BEF43B3CE0717C1DA1DBB520D6A5479C5F84C90695D216F928FF9B3329E2966";
    
    function send($to, $subject, $body_text, $body_html, $from) {
        $res = "";
      
        //$data = "username=".urlencode("AdmissionFacile");
        $data = "&apikey=".urlencode($this->key);
        $data .= "&from=".urlencode($from);
        $data .= "&trackClicks=false&trackOpens=false";
        $data .= "&fromName=".urlencode("AdmissionFacile");
        $data .= "&to=".urlencode($to);
        $data .= "&subject=".urlencode($subject);
        if($body_html)
          $data .= "&bodyHtml=".urlencode($body_html);
        if($body_text)
          $data .= "&bodyText=".urlencode($body_text);
      
        $header = "POST /v2/email/send HTTP/1.0\r\n";
        $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $header .= "Content-Length: " . strlen($data) . "\r\n\r\n";
        $fp = fsockopen('ssl://api.elasticemail.com', 443, $errno, $errstr, 30);

        if(!$fp)
          return false;
        else {
          fputs ($fp, $header.$data);
          while (!feof($fp)) {
            $res .= fread ($fp, 1024);
          }
          fclose($fp);
        }
        return true;
      }
}