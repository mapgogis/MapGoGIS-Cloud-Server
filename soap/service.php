<?php
require_once 'Mapbox.class.php';
ini_set("soap.wsdl_cache_enabled", "0");
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST') {
	$servidorSoap = new SoapServer('http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['PHP_SELF'].'?wsdl');
	$servidorSoap->setClass('Mapbox');
	$servidorSoap->handle();
}else {
	require_once 'SoapDiscovery.class.php';
	$disco = new SoapDiscovery('Mapbox','Solsoft_Mapbox');
    header("Content-type: text/xml");
    echo $disco->getWSDL();
}

?>