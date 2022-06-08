# MuxPhp\RealTimeApi

All URIs are relative to https://api.mux.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRealtimeBreakdown()**](RealTimeApi.md#getRealtimeBreakdown) | **GET** /data/v1/realtime/metrics/{REALTIME_METRIC_ID}/breakdown | Get Real-Time Breakdown
[**getRealtimeHistogramTimeseries()**](RealTimeApi.md#getRealtimeHistogramTimeseries) | **GET** /data/v1/realtime/metrics/{REALTIME_HISTOGRAM_METRIC_ID}/histogram-timeseries | Get Real-Time Histogram Timeseries
[**getRealtimeTimeseries()**](RealTimeApi.md#getRealtimeTimeseries) | **GET** /data/v1/realtime/metrics/{REALTIME_METRIC_ID}/timeseries | Get Real-Time Timeseries
[**listRealtimeDimensions()**](RealTimeApi.md#listRealtimeDimensions) | **GET** /data/v1/realtime/dimensions | List Real-Time Dimensions
[**listRealtimeMetrics()**](RealTimeApi.md#listRealtimeMetrics) | **GET** /data/v1/realtime/metrics | List Real-Time Metrics


## `getRealtimeBreakdown()`

```php
getRealtimeBreakdown($realtime_metric_id, $dimension, $timestamp, $filters, $order_by, $order_direction): \MuxPhp\Models\GetRealTimeBreakdownResponse
```

Get Real-Time Breakdown

Gets breakdown information for a specific dimension and metric along with the number of concurrent viewers and negative impact score.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\RealTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realtime_metric_id = current-concurrent-viewers; // string | ID of the Realtime Metric
$dimension = 'dimension_example'; // string | Dimension the specified value belongs to
$timestamp = 56; // int | Timestamp to limit results by. This value must be provided as a unix timestamp. Defaults to the current unix timestamp.
$filters = array('filters_example'); // string[] | Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a `!` character to the dimension.  Possible filter names are the same as returned by the List Filters endpoint.  Example:    * `filters[]=operating_system:windows&filters[]=!country:US`
$order_by = 'order_by_example'; // string | Value to order the results by
$order_direction = 'order_direction_example'; // string | Sort order.

try {
    $result = $apiInstance->getRealtimeBreakdown($realtime_metric_id, $dimension, $timestamp, $filters, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeApi->getRealtimeBreakdown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realtime_metric_id** | **string**| ID of the Realtime Metric |
 **dimension** | **string**| Dimension the specified value belongs to | [optional]
 **timestamp** | **int**| Timestamp to limit results by. This value must be provided as a unix timestamp. Defaults to the current unix timestamp. | [optional]
 **filters** | [**string[]**](../Model/string.md)| Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a &#x60;!&#x60; character to the dimension.  Possible filter names are the same as returned by the List Filters endpoint.  Example:    * &#x60;filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;!country:US&#x60; | [optional]
 **order_by** | **string**| Value to order the results by | [optional]
 **order_direction** | **string**| Sort order. | [optional]

### Return type

[**\MuxPhp\Models\GetRealTimeBreakdownResponse**](../Model/GetRealTimeBreakdownResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRealtimeHistogramTimeseries()`

```php
getRealtimeHistogramTimeseries($realtime_histogram_metric_id, $filters): \MuxPhp\Models\GetRealTimeHistogramTimeseriesResponse
```

Get Real-Time Histogram Timeseries

Gets histogram timeseries information for a specific metric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\RealTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realtime_histogram_metric_id = video-startup-time; // string | ID of the Realtime Histogram Metric
$filters = array('filters_example'); // string[] | Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a `!` character to the dimension.  Possible filter names are the same as returned by the List Filters endpoint.  Example:    * `filters[]=operating_system:windows&filters[]=!country:US`

try {
    $result = $apiInstance->getRealtimeHistogramTimeseries($realtime_histogram_metric_id, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeApi->getRealtimeHistogramTimeseries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realtime_histogram_metric_id** | **string**| ID of the Realtime Histogram Metric |
 **filters** | [**string[]**](../Model/string.md)| Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a &#x60;!&#x60; character to the dimension.  Possible filter names are the same as returned by the List Filters endpoint.  Example:    * &#x60;filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;!country:US&#x60; | [optional]

### Return type

[**\MuxPhp\Models\GetRealTimeHistogramTimeseriesResponse**](../Model/GetRealTimeHistogramTimeseriesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRealtimeTimeseries()`

```php
getRealtimeTimeseries($realtime_metric_id, $filters): \MuxPhp\Models\GetRealTimeTimeseriesResponse
```

Get Real-Time Timeseries

Gets Time series information for a specific metric along with the number of concurrent viewers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\RealTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realtime_metric_id = current-concurrent-viewers; // string | ID of the Realtime Metric
$filters = array('filters_example'); // string[] | Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a `!` character to the dimension.  Possible filter names are the same as returned by the List Filters endpoint.  Example:    * `filters[]=operating_system:windows&filters[]=!country:US`

try {
    $result = $apiInstance->getRealtimeTimeseries($realtime_metric_id, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeApi->getRealtimeTimeseries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realtime_metric_id** | **string**| ID of the Realtime Metric |
 **filters** | [**string[]**](../Model/string.md)| Limit the results to rows that match conditions from provided key:value pairs. Must be provided as an array query string parameter.  To exclude rows that match a certain condition, prepend a &#x60;!&#x60; character to the dimension.  Possible filter names are the same as returned by the List Filters endpoint.  Example:    * &#x60;filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;!country:US&#x60; | [optional]

### Return type

[**\MuxPhp\Models\GetRealTimeTimeseriesResponse**](../Model/GetRealTimeTimeseriesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRealtimeDimensions()`

```php
listRealtimeDimensions(): \MuxPhp\Models\ListRealTimeDimensionsResponse
```

List Real-Time Dimensions

Lists available real-time dimensions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\RealTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listRealtimeDimensions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeApi->listRealtimeDimensions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\ListRealTimeDimensionsResponse**](../Model/ListRealTimeDimensionsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRealtimeMetrics()`

```php
listRealtimeMetrics(): \MuxPhp\Models\ListRealTimeMetricsResponse
```

List Real-Time Metrics

Lists available real-time metrics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\RealTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listRealtimeMetrics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeApi->listRealtimeMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\ListRealTimeMetricsResponse**](../Model/ListRealTimeMetricsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
