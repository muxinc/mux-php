<?php

    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Exercises all export operations.

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $exportsApi = new MuxPhp\Api\ExportsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== list-exports ==========
    $exports = $exportsApi->listExports();
    assert($exports->getData() != null);
    assert($exports->getData()[0] != null);
    print("list-exports OK ✅\n");

?>