<?php
ini_set('soap.wsdl_cache_enable', 0);

require './ModelTeste.php';

class serverSoap
{

    public function __construct()
    {
        ;
    }

    public function getContact($id)
    {
        return ModelTeste::find($id);
    }
}
$params = array('uri' => 'http://localhost/info_dinamics/soap/serverSoap.php');
$server = new SoapServer(NULL, $params);
$server->setClass('serverSoap');
$server->handle();
