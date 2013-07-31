<?php
ini_set("soap.wsdl_cache_enabled", "0");
$client = new SoapClient("http://cloud.mapgogis.com/soap/service.php?wsdl");
$client->soap_defencoding = 'UTF-8';
try{
    echo $client->getID();

}catch (SoapFault $f){
        echo $f->getMessage()."<br>".
        	 $f->getFile()."<br>".
			 $f->getLine()."<br>";
}
?>