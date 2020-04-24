<?php

    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Exercises all error operations.

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $errorsApi = new MuxPhp\Api\ErrorsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== list-errors ==========
    $errors = $errorsApi->listErrors(["filters" => ["browser:Safari"], "timeframe" => ["7:days"]]);
    assert($errors->getData() != null);
    assert($errors->getData()[0] != null);
    assert($errors->getData()[0]->getId() != null);
    print("list-errors OK ✅\n");

?>