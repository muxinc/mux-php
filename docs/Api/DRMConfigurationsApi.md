# MuxPhp\DRMConfigurationsApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDrmConfiguration()**](DRMConfigurationsApi.md#getDrmConfiguration) | **GET** /video/v1/drm-configurations/{DRM_CONFIGURATION_ID} | Retrieve a DRM Configuration |
| [**listDrmConfigurations()**](DRMConfigurationsApi.md#listDrmConfigurations) | **GET** /video/v1/drm-configurations | List DRM Configurations |


## `getDrmConfiguration()`

```php
getDrmConfiguration($drm_configuration_id): \MuxPhp\Models\DRMConfigurationResponse
```

Retrieve a DRM Configuration

Retrieves a single DRM Configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\DRMConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drm_configuration_id = 'drm_configuration_id_example'; // string | The DRM Configuration ID.

try {
    $result = $apiInstance->getDrmConfiguration($drm_configuration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DRMConfigurationsApi->getDrmConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **drm_configuration_id** | **string**| The DRM Configuration ID. | |

### Return type

[**\MuxPhp\Models\DRMConfigurationResponse**](../Model/DRMConfigurationResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDrmConfigurations()`

```php
listDrmConfigurations($page, $limit): \MuxPhp\Models\ListDRMConfigurationsResponse
```

List DRM Configurations

Returns a list of DRM Configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\DRMConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Offset by this many pages, of the size of `limit`
$limit = 25; // int | Number of items to include in the response

try {
    $result = $apiInstance->listDrmConfigurations($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DRMConfigurationsApi->listDrmConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 25] |

### Return type

[**\MuxPhp\Models\ListDRMConfigurationsResponse**](../Model/ListDRMConfigurationsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
