# MuxPhp\DeliveryUsageApi

All URIs are relative to https://api.mux.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDeliveryUsage()**](DeliveryUsageApi.md#listDeliveryUsage) | **GET** /video/v1/delivery-usage | List Usage


## `listDeliveryUsage()`

```php
listDeliveryUsage($page, $limit, $asset_id, $live_stream_id, $timeframe): \MuxPhp\Models\ListDeliveryUsageResponse
```

List Usage

Returns a list of delivery usage records and their associated Asset IDs or Live Stream IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\DeliveryUsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Offset by this many pages, of the size of `limit`
$limit = 100; // int | Number of items to include in the response
$asset_id = 'asset_id_example'; // string | Filter response to return delivery usage for this asset only. You cannot specify both the `asset_id` and `live_stream_id` parameters together.
$live_stream_id = 'live_stream_id_example'; // string | Filter response to return delivery usage for assets for this live stream. You cannot specify both the `asset_id` and `live_stream_id` parameters together.
$timeframe = array('timeframe_example'); // string[] | Time window to get delivery usage information. timeframe[0] indicates the start time, timeframe[1] indicates the end time in seconds since the Unix epoch. Default time window is 1 hour representing usage from 13th to 12th hour from when the request is made.

try {
    $result = $apiInstance->listDeliveryUsage($page, $limit, $asset_id, $live_stream_id, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryUsageApi->listDeliveryUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1]
 **limit** | **int**| Number of items to include in the response | [optional] [default to 100]
 **asset_id** | **string**| Filter response to return delivery usage for this asset only. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. | [optional]
 **live_stream_id** | **string**| Filter response to return delivery usage for assets for this live stream. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. | [optional]
 **timeframe** | [**string[]**](../Model/string.md)| Time window to get delivery usage information. timeframe[0] indicates the start time, timeframe[1] indicates the end time in seconds since the Unix epoch. Default time window is 1 hour representing usage from 13th to 12th hour from when the request is made. | [optional]

### Return type

[**\MuxPhp\Models\ListDeliveryUsageResponse**](../Model/ListDeliveryUsageResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
