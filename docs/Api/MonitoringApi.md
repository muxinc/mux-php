# MuxPhp\MonitoringApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMonitoringBreakdown()**](MonitoringApi.md#getMonitoringBreakdown) | **GET** /data/v1/monitoring/metrics/{MONITORING_METRIC_ID}/breakdown | Get Monitoring Breakdown |
| [**getMonitoringBreakdownTimeseries()**](MonitoringApi.md#getMonitoringBreakdownTimeseries) | **GET** /data/v1/monitoring/metrics/{MONITORING_METRIC_ID}/breakdown-timeseries | Get Monitoring Breakdown Timeseries |
| [**getMonitoringHistogramTimeseries()**](MonitoringApi.md#getMonitoringHistogramTimeseries) | **GET** /data/v1/monitoring/metrics/{MONITORING_HISTOGRAM_METRIC_ID}/histogram-timeseries | Get Monitoring Histogram Timeseries |
| [**getMonitoringTimeseries()**](MonitoringApi.md#getMonitoringTimeseries) | **GET** /data/v1/monitoring/metrics/{MONITORING_METRIC_ID}/timeseries | Get Monitoring Timeseries |
| [**listMonitoringDimensions()**](MonitoringApi.md#listMonitoringDimensions) | **GET** /data/v1/monitoring/dimensions | List Monitoring Dimensions |
| [**listMonitoringMetrics()**](MonitoringApi.md#listMonitoringMetrics) | **GET** /data/v1/monitoring/metrics | List Monitoring Metrics |


## `getMonitoringBreakdown()`

```php
getMonitoringBreakdown($monitoring_metric_id, $dimension, $timestamp, $filters, $order_by, $order_direction): \MuxPhp\Models\GetMonitoringBreakdownResponse
```

Get Monitoring Breakdown

Gets breakdown information for a specific dimension and metric along with the number of concurrent viewers and negative impact score.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitoring_metric_id = current-concurrent-viewers; // string | ID of the Monitoring Metric
$dimension = 'dimension_example'; // string | Dimension the specified value belongs to
$timestamp = 56; // int | Timestamp to limit results by. This value must be provided as a unix timestamp. Defaults to the current unix timestamp.
$filters = array('filters_example'); // string[] | Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a `!` character to the dimension.  Possible filter names are the same as returned by the List Monitoring Dimensions endpoint.  Example:    * `filters[]=operating_system:windows&filters[]=!country:US`
$order_by = 'order_by_example'; // string | Value to order the results by
$order_direction = 'order_direction_example'; // string | Sort order.

try {
    $result = $apiInstance->getMonitoringBreakdown($monitoring_metric_id, $dimension, $timestamp, $filters, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getMonitoringBreakdown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **monitoring_metric_id** | **string**| ID of the Monitoring Metric | |
| **dimension** | **string**| Dimension the specified value belongs to | [optional] |
| **timestamp** | **int**| Timestamp to limit results by. This value must be provided as a unix timestamp. Defaults to the current unix timestamp. | [optional] |
| **filters** | [**string[]**](../Model/string.md)| Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a &#x60;!&#x60; character to the dimension.  Possible filter names are the same as returned by the List Monitoring Dimensions endpoint.  Example:    * &#x60;filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;!country:US&#x60; | [optional] |
| **order_by** | **string**| Value to order the results by | [optional] |
| **order_direction** | **string**| Sort order. | [optional] |

### Return type

[**\MuxPhp\Models\GetMonitoringBreakdownResponse**](../Model/GetMonitoringBreakdownResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMonitoringBreakdownTimeseries()`

```php
getMonitoringBreakdownTimeseries($monitoring_metric_id, $dimension, $timeframe, $filters, $limit, $order_by, $order_direction): \MuxPhp\Models\GetMonitoringBreakdownTimeseriesResponse
```

Get Monitoring Breakdown Timeseries

Gets timeseries of breakdown information for a specific dimension and metric. Each datapoint in the response represents 5 seconds worth of data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitoring_metric_id = current-concurrent-viewers; // string | ID of the Monitoring Metric
$dimension = 'dimension_example'; // string | Dimension the specified value belongs to
$timeframe = array('timeframe_example'); // string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]=).  The default for this is the last 60 seconds of available data. Timeframes larger than 10 minutes are not allowed, and must be within the last 24 hours.
$filters = array('filters_example'); // string[] | Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a `!` character to the dimension.  Possible filter names are the same as returned by the List Monitoring Dimensions endpoint.  Example:    * `filters[]=operating_system:windows&filters[]=!country:US`
$limit = 10; // int | Number of items to include in each timestamp's `value` list.  The default is 10, and the maximum is 100.
$order_by = 'order_by_example'; // string | Value to order the results by
$order_direction = 'order_direction_example'; // string | Sort order.

try {
    $result = $apiInstance->getMonitoringBreakdownTimeseries($monitoring_metric_id, $dimension, $timeframe, $filters, $limit, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getMonitoringBreakdownTimeseries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **monitoring_metric_id** | **string**| ID of the Monitoring Metric | |
| **dimension** | **string**| Dimension the specified value belongs to | [optional] |
| **timeframe** | [**string[]**](../Model/string.md)| Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;).  The default for this is the last 60 seconds of available data. Timeframes larger than 10 minutes are not allowed, and must be within the last 24 hours. | [optional] |
| **filters** | [**string[]**](../Model/string.md)| Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a &#x60;!&#x60; character to the dimension.  Possible filter names are the same as returned by the List Monitoring Dimensions endpoint.  Example:    * &#x60;filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;!country:US&#x60; | [optional] |
| **limit** | **int**| Number of items to include in each timestamp&#39;s &#x60;value&#x60; list.  The default is 10, and the maximum is 100. | [optional] [default to 10] |
| **order_by** | **string**| Value to order the results by | [optional] |
| **order_direction** | **string**| Sort order. | [optional] |

### Return type

[**\MuxPhp\Models\GetMonitoringBreakdownTimeseriesResponse**](../Model/GetMonitoringBreakdownTimeseriesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMonitoringHistogramTimeseries()`

```php
getMonitoringHistogramTimeseries($monitoring_histogram_metric_id, $filters): \MuxPhp\Models\GetMonitoringHistogramTimeseriesResponse
```

Get Monitoring Histogram Timeseries

Gets histogram timeseries information for a specific metric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitoring_histogram_metric_id = video-startup-time; // string | ID of the Monitoring Histogram Metric
$filters = array('filters_example'); // string[] | Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a `!` character to the dimension.  Possible filter names are the same as returned by the List Monitoring Dimensions endpoint.  Example:    * `filters[]=operating_system:windows&filters[]=!country:US`

try {
    $result = $apiInstance->getMonitoringHistogramTimeseries($monitoring_histogram_metric_id, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getMonitoringHistogramTimeseries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **monitoring_histogram_metric_id** | **string**| ID of the Monitoring Histogram Metric | |
| **filters** | [**string[]**](../Model/string.md)| Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a &#x60;!&#x60; character to the dimension.  Possible filter names are the same as returned by the List Monitoring Dimensions endpoint.  Example:    * &#x60;filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;!country:US&#x60; | [optional] |

### Return type

[**\MuxPhp\Models\GetMonitoringHistogramTimeseriesResponse**](../Model/GetMonitoringHistogramTimeseriesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMonitoringTimeseries()`

```php
getMonitoringTimeseries($monitoring_metric_id, $filters, $timestamp): \MuxPhp\Models\GetMonitoringTimeseriesResponse
```

Get Monitoring Timeseries

Gets Time series information for a specific metric along with the number of concurrent viewers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitoring_metric_id = current-concurrent-viewers; // string | ID of the Monitoring Metric
$filters = array('filters_example'); // string[] | Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a `!` character to the dimension.  Possible filter names are the same as returned by the List Monitoring Dimensions endpoint.  Example:    * `filters[]=operating_system:windows&filters[]=!country:US`
$timestamp = 56; // int | Timestamp to use as the start of the timeseries data. This value must be provided as a unix timestamp. Defaults to 30 minutes ago.

try {
    $result = $apiInstance->getMonitoringTimeseries($monitoring_metric_id, $filters, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getMonitoringTimeseries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **monitoring_metric_id** | **string**| ID of the Monitoring Metric | |
| **filters** | [**string[]**](../Model/string.md)| Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a &#x60;!&#x60; character to the dimension.  Possible filter names are the same as returned by the List Monitoring Dimensions endpoint.  Example:    * &#x60;filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;!country:US&#x60; | [optional] |
| **timestamp** | **int**| Timestamp to use as the start of the timeseries data. This value must be provided as a unix timestamp. Defaults to 30 minutes ago. | [optional] |

### Return type

[**\MuxPhp\Models\GetMonitoringTimeseriesResponse**](../Model/GetMonitoringTimeseriesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMonitoringDimensions()`

```php
listMonitoringDimensions(): \MuxPhp\Models\ListMonitoringDimensionsResponse
```

List Monitoring Dimensions

Lists available monitoring dimensions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMonitoringDimensions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->listMonitoringDimensions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\ListMonitoringDimensionsResponse**](../Model/ListMonitoringDimensionsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMonitoringMetrics()`

```php
listMonitoringMetrics(): \MuxPhp\Models\ListMonitoringMetricsResponse
```

List Monitoring Metrics

Lists available monitoring metrics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMonitoringMetrics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->listMonitoringMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\ListMonitoringMetricsResponse**](../Model/ListMonitoringMetricsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
