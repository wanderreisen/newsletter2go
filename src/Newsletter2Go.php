<?php

namespace Wanderreisen\Newsletter2Go;

use NL2GO\Newsletter2Go_REST_Api;

class Newsletter2Go
{

    /**
     * @var Newsletter2Go_REST_Api
     */
    private $api;

    /**
     * Newsletter2Go constructor.
     */
    public function __construct()
    {
        $api = new Newsletter2Go_REST_Api(config('newsletter2go.api_key'), config('newsletter2go.username'), config('newsletter2go.password'));
        $api->setSSLVerification(false);
        $this->api = $api;
    }

    /**
     * @return Newsletter2Go_REST_Api
     */
    public function connect()
    {
        return $this->api;
    }
}
