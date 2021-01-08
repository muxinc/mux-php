<?php

    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $dimensionsApi = new MuxPhp\Api\DimensionsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== list-filters ==========
    $dimensions = $dimensionsApi->listDimensions();
    assert($dimensions->getData() != null);
    assert($dimensions->getData()->getBasic() != null);
    assert($dimensions->getData()->getAdvanced() != null);
    print("list-dimensions OK ✅\n");

    // ========== list-dimension-values ==========
    $dimensionValues = $dimensionsApi->listDimensionValues("browser", ["timeframe" => ["7:days"]]);
    assert($dimensionValues->getData() != null);
    print("list-dimension-values OK ✅\n");

?>
