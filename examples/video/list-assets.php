<?php

    require_once 'vendor/autoload.php';

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $assetsApi = new MuxPhp\Api\AssetsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // List Assets
    try {
        $result = $assetsApi->listAssets();
        echo "Listing Assets in account: \n\n";
        foreach ($result->getData() as $asset) {
          print("Asset ID: " . $asset->getId() . "\n");
          print("Status: " . $asset->getStatus() . "\n");
          print("Duration: " . $asset->getDuration() . "\n\n");
        }
    } catch (Exception $e) {
        echo 'Exception when calling AssetsApi->listAssets: ', $e->getMessage(), PHP_EOL;
    }
?>