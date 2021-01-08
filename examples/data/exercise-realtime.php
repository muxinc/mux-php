<?php

    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $realtimeApi = new MuxPhp\Api\RealTimeApi(
        new GuzzleHttp\Client(),
        $config
    );

    // Test coverage here isn't fantastic due to not knowning if the account we're testing against has
    // any real-time data. The behaviour has been manually verified against real-world data.

    // ========== list-realtime-dimensions ==========
    $dimensions = $realtimeApi->listRealtimeDimensions();
    assert($dimensions != null);
    assert($dimensions->getData() != null);
    assert(count($dimensions->getData()) > 0);
    assert($dimensions->getData()[0]->getName() != '');
    assert($dimensions->getData()[0]->getDisplayName() != '');
    print("list-realtime-dimensions OK ✅\n");

    // ========== list-realtime-metrics ==========
    $metrics = $realtimeApi->listRealtimeMetrics();
    assert($metrics != null);
    assert($metrics->getData() != null);
    assert(count($metrics->getData()) > 0);
    assert($metrics->getData()[0]->getName() != '');
    assert($metrics->getData()[0]->getDisplayName() != '');
    print("list-realtime-metrics OK ✅\n");

    // ========== get-realtime-breakdown ==========
    $breakdown = $realtimeApi->GetRealtimeBreakdown('current-rebuffering-percentage', ['dimension' => 'asn']);
    assert($breakdown != null);
    assert($breakdown->getData() != null);
    print("get-realtime-breakdown OK ✅\n");

    // ========== get-realtime-histogram-timeseries ==========
    $histogramTimeseries = $realtimeApi->GetRealtimeHistogramTimeseries('video-startup-time');
    assert($histogramTimeseries != null);
    assert($histogramTimeseries->getMeta() != null);
    assert($histogramTimeseries->getMeta()->getBuckets() != null);
    assert(count($histogramTimeseries->getMeta()->getBuckets()) > 0);
    assert($histogramTimeseries->getData() != null);
    assert(count($histogramTimeseries->getData()) > 0);
    print("get-realtime-histogram-timeseries OK ✅\n");
    
    // ========== get-realtime-timeseries ==========
    $timeseries = $realtimeApi->GetRealtimeTimeseries('current-rebuffering-percentage');
    assert($timeseries != null);
    assert($timeseries->getData() != null);
    assert(count($timeseries->getData()) > 0);
    assert($timeseries->getData()[0]->getDate() != '');
    print("get-realtime-timeseries OK ✅\n");
    
?>
