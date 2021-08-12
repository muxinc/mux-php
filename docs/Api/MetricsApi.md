# MuxPhp\MetricsApi

All URIs are relative to https://api.mux.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMetricTimeseriesData()**](MetricsApi.md#getMetricTimeseriesData) | **GET** /data/v1/metrics/{METRIC_ID}/timeseries | Get metric timeseries data
[**getOverallValues()**](MetricsApi.md#getOverallValues) | **GET** /data/v1/metrics/{METRIC_ID}/overall | Get Overall values
[**listAllMetricValues()**](MetricsApi.md#listAllMetricValues) | **GET** /data/v1/metrics/comparison | List all metric values
[**listBreakdownValues()**](MetricsApi.md#listBreakdownValues) | **GET** /data/v1/metrics/{METRIC_ID}/breakdown | List breakdown values
[**listInsights()**](MetricsApi.md#listInsights) | **GET** /data/v1/metrics/{METRIC_ID}/insights | List Insights


## `getMetricTimeseriesData()`

```php
getMetricTimeseriesData($metric_id, $timeframe, $filters, $measurement, $order_direction, $group_by): \MuxPhp\Models\GetMetricTimeseriesDataResponse
```

Get metric timeseries data

Returns timeseries data for a specific metric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metric_id = video_startup_time; // string | ID of the Metric
$timeframe = array('timeframe_example'); // string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]=). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]=1498867200&timeframe[]=1498953600   * duration string e.g. timeframe[]=24:hours or timeframe[]=7:days.
$filters = array('filters_example'); // string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]=operating_system:windows&filters[]=country:US). Possible filter names are the same as returned by the List Filters endpoint.
$measurement = 'measurement_example'; // string | Measurement for the provided metric. If omitted, the default for the metric will be used.
$order_direction = 'order_direction_example'; // string | Sort order.
$group_by = 'group_by_example'; // string | Time granularity to group results by. If this value is omitted, a default granularity is chosen based on the supplied timeframe.

try {
    $result = $apiInstance->getMetricTimeseriesData($metric_id, $timeframe, $filters, $measurement, $order_direction, $group_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getMetricTimeseriesData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metric_id** | **string**| ID of the Metric |
 **timeframe** | [**string[]**](../Model/string.md)| Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600   * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. | [optional]
 **filters** | [**string[]**](../Model/string.md)| Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US). Possible filter names are the same as returned by the List Filters endpoint. | [optional]
 **measurement** | **string**| Measurement for the provided metric. If omitted, the default for the metric will be used. | [optional]
 **order_direction** | **string**| Sort order. | [optional]
 **group_by** | **string**| Time granularity to group results by. If this value is omitted, a default granularity is chosen based on the supplied timeframe. | [optional]

### Return type

[**\MuxPhp\Models\GetMetricTimeseriesDataResponse**](../Model/GetMetricTimeseriesDataResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOverallValues()`

```php
getOverallValues($metric_id, $timeframe, $filters, $measurement): \MuxPhp\Models\GetOverallValuesResponse
```

Get Overall values

Returns the overall value for a specific metric, as well as the total view count, watch time, and the Mux Global metric value for the metric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metric_id = video_startup_time; // string | ID of the Metric
$timeframe = array('timeframe_example'); // string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]=). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]=1498867200&timeframe[]=1498953600   * duration string e.g. timeframe[]=24:hours or timeframe[]=7:days.
$filters = array('filters_example'); // string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]=operating_system:windows&filters[]=country:US). Possible filter names are the same as returned by the List Filters endpoint.
$measurement = 'measurement_example'; // string | Measurement for the provided metric. If omitted, the default for the metric will be used.

try {
    $result = $apiInstance->getOverallValues($metric_id, $timeframe, $filters, $measurement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getOverallValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metric_id** | **string**| ID of the Metric |
 **timeframe** | [**string[]**](../Model/string.md)| Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600   * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. | [optional]
 **filters** | [**string[]**](../Model/string.md)| Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US). Possible filter names are the same as returned by the List Filters endpoint. | [optional]
 **measurement** | **string**| Measurement for the provided metric. If omitted, the default for the metric will be used. | [optional]

### Return type

[**\MuxPhp\Models\GetOverallValuesResponse**](../Model/GetOverallValuesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllMetricValues()`

```php
listAllMetricValues($timeframe, $filters, $dimension, $value): \MuxPhp\Models\ListAllMetricValuesResponse
```

List all metric values

List all of the values across every breakdown for a specific metric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timeframe = array('timeframe_example'); // string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]=). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]=1498867200&timeframe[]=1498953600   * duration string e.g. timeframe[]=24:hours or timeframe[]=7:days.
$filters = array('filters_example'); // string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]=operating_system:windows&filters[]=country:US). Possible filter names are the same as returned by the List Filters endpoint.
$dimension = 'dimension_example'; // string | Dimension the specified value belongs to
$value = 'value_example'; // string | Value to show all available metrics for

try {
    $result = $apiInstance->listAllMetricValues($timeframe, $filters, $dimension, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->listAllMetricValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeframe** | [**string[]**](../Model/string.md)| Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600   * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. | [optional]
 **filters** | [**string[]**](../Model/string.md)| Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US). Possible filter names are the same as returned by the List Filters endpoint. | [optional]
 **dimension** | **string**| Dimension the specified value belongs to | [optional]
 **value** | **string**| Value to show all available metrics for | [optional]

### Return type

[**\MuxPhp\Models\ListAllMetricValuesResponse**](../Model/ListAllMetricValuesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBreakdownValues()`

```php
listBreakdownValues($metric_id, $group_by, $measurement, $filters, $limit, $page, $order_by, $order_direction, $timeframe): \MuxPhp\Models\ListBreakdownValuesResponse
```

List breakdown values

List the breakdown values for a specific metric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metric_id = video_startup_time; // string | ID of the Metric
$group_by = 'group_by_example'; // string | Breakdown value to group the results by
$measurement = 'measurement_example'; // string | Measurement for the provided metric. If omitted, the default for the metric will be used.
$filters = array('filters_example'); // string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]=operating_system:windows&filters[]=country:US). Possible filter names are the same as returned by the List Filters endpoint.
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`
$order_by = 'order_by_example'; // string | Value to order the results by
$order_direction = 'order_direction_example'; // string | Sort order.
$timeframe = array('timeframe_example'); // string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]=). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]=1498867200&timeframe[]=1498953600   * duration string e.g. timeframe[]=24:hours or timeframe[]=7:days.

try {
    $result = $apiInstance->listBreakdownValues($metric_id, $group_by, $measurement, $filters, $limit, $page, $order_by, $order_direction, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->listBreakdownValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metric_id** | **string**| ID of the Metric |
 **group_by** | **string**| Breakdown value to group the results by | [optional]
 **measurement** | **string**| Measurement for the provided metric. If omitted, the default for the metric will be used. | [optional]
 **filters** | [**string[]**](../Model/string.md)| Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US). Possible filter names are the same as returned by the List Filters endpoint. | [optional]
 **limit** | **int**| Number of items to include in the response | [optional] [default to 25]
 **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1]
 **order_by** | **string**| Value to order the results by | [optional]
 **order_direction** | **string**| Sort order. | [optional]
 **timeframe** | [**string[]**](../Model/string.md)| Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600   * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. | [optional]

### Return type

[**\MuxPhp\Models\ListBreakdownValuesResponse**](../Model/ListBreakdownValuesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInsights()`

```php
listInsights($metric_id, $measurement, $order_direction, $timeframe): \MuxPhp\Models\ListInsightsResponse
```

List Insights

Returns a list of insights for a metric. These are the worst performing values across all breakdowns sorted by how much they negatively impact a specific metric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metric_id = video_startup_time; // string | ID of the Metric
$measurement = 'measurement_example'; // string | Measurement for the provided metric. If omitted, the default for the metric will be used.
$order_direction = 'order_direction_example'; // string | Sort order.
$timeframe = array('timeframe_example'); // string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]=). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]=1498867200&timeframe[]=1498953600   * duration string e.g. timeframe[]=24:hours or timeframe[]=7:days.

try {
    $result = $apiInstance->listInsights($metric_id, $measurement, $order_direction, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->listInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metric_id** | **string**| ID of the Metric |
 **measurement** | **string**| Measurement for the provided metric. If omitted, the default for the metric will be used. | [optional]
 **order_direction** | **string**| Sort order. | [optional]
 **timeframe** | [**string[]**](../Model/string.md)| Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600   * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. | [optional]

### Return type

[**\MuxPhp\Models\ListInsightsResponse**](../Model/ListInsightsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
