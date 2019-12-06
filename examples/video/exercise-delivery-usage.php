<?php
    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $usageApi = new MuxPhp\Api\DeliveryUsageApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== list-delivery-usage ==========
    // Example with a valid timeframe:
    // $usage = $usageApi->listDeliveryUsage(['timeframe' => ['1574175600', '1574305200']]);
    $usage = $usageApi->listDeliveryUsage();
    assert($usage != null);
    assert(is_array($usage->getData())); // Closest assertion I can so is that it's an array, I can't assert not nil...
    print("list-delivery-usage OK ✅\n");

?>