<?php

    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Exercises all filter operations.

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $filtersApi = new MuxPhp\Api\FiltersApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== list-filters ==========
    $filters = $filtersApi->listFilters();
    assert($filters->getData() != null);
    assert($filters->getData()->getBasic() != null);
    assert($filters->getData()->getAdvanced() != null);
    print("list-filters OK ✅\n");

    // ========== list-filter-values ==========
    $filterValues = $filtersApi->listFilterValues("browser", ["timeframe" => ["7:days"]]);
    assert($filters->getData() != null);
    print("list-filter-values OK ✅\n");

?>