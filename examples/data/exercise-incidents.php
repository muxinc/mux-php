<?php
    require_once(__DIR__ . '/../assert.php');
    require_once 'vendor/autoload.php';

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $incidentsApi = new MuxPhp\Api\IncidentsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // Test coverage here is poor due to not knowning if the account we're testing against has any incidents.

    // ========== list-incidents ==========
    $incidents = $incidentsApi->listIncidents();
    assert($incidents !== null);
    assert(is_array($incidents->getData()));
    print("list-incidents OK ✅\n");

    // ========== get-incident ==========
    print("get-incident SKIP ⚠️\n");

    // ========== list-related-incidents ==========
    print("list-related-incidents SKIP ⚠️\n");