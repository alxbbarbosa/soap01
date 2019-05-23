<?php

class clientSoap
{
    private $instance;

    public function __construct()
    {
        $params         = array('location' => 'http://localhost/info_dinamics/soap/serverSoap.php',
            'uri' => 'http://localhost/info_dinamics/soap/serverSoap.php', 'trace' => 1);
        $this->instance = $client         = new SoapClient(NULL, $params);
    }

    public function getContact(int $id)
    {
        return $this->instance->__soapCall('getContact', ['id' => $id]);
    }
}

$client = new clientSoap();