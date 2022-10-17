<?php

require_once 'vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()
    ->setHosts(['https://elastic-ip-address:9200'])    
    ->setBasicAuthentication('elastic', 'elastic-password')
    ->setCABundle('http_ca.crt')
    ->build();

?>
