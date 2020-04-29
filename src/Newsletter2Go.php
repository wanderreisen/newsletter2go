<?php

namespace Wanderreisen\Newsletter2Go;

use NL2GO\Newsletter2Go_REST_Api;

class Newsletter2Go
{

    private $api;

    public function __construct()
    {
        $this->api = new Newsletter2Go_REST_Api(config('newsletter2go.auth_key'), config('newsletter2go.username'), config('newsletter2go.password'));
        $this->api->setSSLVerification(true);
    }

    public function getLists()
    {
        return $this->api->getLists();
    }
}
