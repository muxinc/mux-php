<?php

    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Exercises all metrics operations.

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $metricsApi = new MuxPhp\Api\MetricsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== list-breakdown-values ==========
    $breakdown = $metricsApi->listBreakdownValues("video_startup_time", ["group_by" => "browser", "timeframe" => ["7:days"]]);
    assert($breakdown->getData() != null);
    print("list-breakdown-values OK ✅\n");

    // ========== get-overall-values ==========
    $overall = $metricsApi->getOverallValues("video_startup_time", ["timeframe" => ["7:days"]]);
    assert($overall->getData() != null);
    print("get-overall-values OK ✅\n");

    // ========== list-insights ==========
    $insights = $metricsApi->listInsights("video_startup_time", ["timeframe" => ["7:days"]]);
    assert($insights->getData() != null);
    print("list-insights OK ✅\n");

    // ========== get-metric-timeseries-data ==========
    $timeseries = $metricsApi->getMetricTimeseriesData("video_startup_time", ["timeframe" => ["7:days"]]);
    assert($timeseries->getData() != null);
    print("get-metric-timeseries-data OK ✅\n");

    // ========== list-all-metric-values ==========
    $allValues = $metricsApi->listAllMetricValues();
    assert($allValues->getData() != null);
    print("list-all-metric-values OK ✅\n");
?>