<?php
    require_once(__DIR__ . '/../assert.php');
    require_once 'vendor/autoload.php';

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $monitoringApi = new MuxPhp\Api\MonitoringApi(
        new GuzzleHttp\Client(),
        $config
    );

    // Test coverage here isn't fantastic due to not knowing if the account we're testing against has
    // any monitoring data. The behaviour has been manually verified against real-world data.

    // ========== list-monitoring-dimensions ==========
    $dimensions = $monitoringApi->listMonitoringDimensions();
    assert($dimensions !== null);
    assert(is_array($dimensions->getData()));
    assert(count($dimensions->getData()) > 0);
    assert($dimensions->getData()[0]->getName() !== '');
    assert($dimensions->getData()[0]->getDisplayName() !== '');
    print("list-monitoring-dimensions OK ✅\n");

    // ========== list-monitoring-metrics ==========
    $metrics = $monitoringApi->listMonitoringMetrics();
    assert($metrics !== null);
    assert(is_array($metrics->getData()));
    assert(count($metrics->getData()) > 0);
    assert($metrics->getData()[0]->getName() !== '');
    assert($metrics->getData()[0]->getDisplayName() !== '');
    print("list-monitoring-metrics OK ✅\n");

    // ========== get-monitoring-breakdown ==========
    $breakdown = $monitoringApi->GetMonitoringBreakdown('current-rebuffering-percentage', ['dimension' => 'asn']);
    assert($breakdown !== null);
    assert(is_array($breakdown->getData()));
    print("get-monitoring-breakdown OK ✅\n");

    // ========== get-monitoring-histogram-timeseries ==========
    $histogramTimeseries = $monitoringApi->GetMonitoringHistogramTimeseries('video-startup-time');
    assert($histogramTimeseries !== null);
    assert($histogramTimeseries->getMeta() !== null);
    assert($histogramTimeseries->getMeta()->getBuckets() !== null);
    assert(count($histogramTimeseries->getMeta()->getBuckets()) > 0);
    assert($histogramTimeseries->getData() !== null);
    assert(count($histogramTimeseries->getData()) > 0);
    print("get-monitoring-histogram-timeseries OK ✅\n");
    
    // ========== get-monitoring-timeseries ==========
    $timeseries = $monitoringApi->GetMonitoringTimeseries('current-rebuffering-percentage');
    assert($timeseries !== null);
    assert(is_array($timeseries->getData()));
    assert(count($timeseries->getData()) > 0);
    assert($timeseries->getData()[0]->getDate() !== '');
    print("get-monitoring-timeseries OK ✅\n");