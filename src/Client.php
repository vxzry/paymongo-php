<?php
namespace Paymongo;

use GuzzleHttp\Client as GuzzleClient;

class Client extends GuzzleClient
{
    const API_URL = 'https://api.paymongo.com/v1';

    public function __construct(array $config = [])
    {
        if (!isset($config['base_uri'])) {
            $config['base_uri'] = self::API_URL;
        }

        parent::__construct($config);
    }


}