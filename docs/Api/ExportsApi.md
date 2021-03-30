# MuxPhp\ExportsApi

All URIs are relative to https://api.mux.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listExports()**](ExportsApi.md#listExports) | **GET** /data/v1/exports | List property video view export links


## `listExports()`

```php
listExports(): \MuxPhp\Models\ListExportsResponse
```

List property video view export links

Lists the available video view exports along with URLs to retrieve them

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listExports();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->listExports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\ListExportsResponse**](../Model/ListExportsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
