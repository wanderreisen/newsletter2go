<?php

namespace Wanderreisen\Newsletter2Go;

use NL2GO\Newsletter2Go_REST_Api;

class Newsletter2Go
{

    private $api;

    public function __construct()
    {
        $api = new Newsletter2Go_REST_Api(config('newsletter2go.api_key'), config('newsletter2go.username'), config('newsletter2go.password'));
        $api->setSSLVerification(false);
        $this->api = $api;
    }

    public function connect()
    {
        return $this->api;
    }
}
