# MuxPhp\AssetsApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAsset**](AssetsApi.md#createAsset) | **POST** /video/v1/assets | Create an asset
[**createAssetPlaybackId**](AssetsApi.md#createAssetPlaybackId) | **POST** /video/v1/assets/{ASSET_ID}/playback-ids | Create a playback ID
[**deleteAsset**](AssetsApi.md#deleteAsset) | **DELETE** /video/v1/assets/{ASSET_ID} | Delete an asset
[**deleteAssetPlaybackId**](AssetsApi.md#deleteAssetPlaybackId) | **DELETE** /video/v1/assets/{ASSET_ID}/playback-ids/{PLAYBACK_ID} | Delete a playback ID
[**getAsset**](AssetsApi.md#getAsset) | **GET** /video/v1/assets/{ASSET_ID} | Retrieve an asset
[**getAssetInputInfo**](AssetsApi.md#getAssetInputInfo) | **GET** /video/v1/assets/{ASSET_ID}/input-info | Retrieve asset input info
[**getAssetPlaybackId**](AssetsApi.md#getAssetPlaybackId) | **GET** /video/v1/assets/{ASSET_ID}/playback-ids/{PLAYBACK_ID} | Retrieve a playback ID
[**listAssets**](AssetsApi.md#listAssets) | **GET** /video/v1/assets | List assets
[**updateAssetMp4Support**](AssetsApi.md#updateAssetMp4Support) | **PUT** /video/v1/assets/{ASSET_ID}/mp4-support | Update MP4 support



## createAsset

> \MuxPhp\Models\AssetResponse createAsset($create_asset_request)

Create an asset

Create a new Mux Video asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_asset_request = new \MuxPhp\Models\CreateAssetRequest(); // \MuxPhp\Models\CreateAssetRequest | 

try {
    $result = $apiInstance->createAsset($create_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_asset_request** | [**\MuxPhp\Models\CreateAssetRequest**](../Model/CreateAssetRequest.md)|  |

### Return type

[**\MuxPhp\Models\AssetResponse**](../Model/AssetResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAssetPlaybackId

> \MuxPhp\Models\CreatePlaybackIDResponse createAssetPlaybackId($asset_id, $create_playback_id_request)

Create a playback ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The asset ID.
$create_playback_id_request = new \MuxPhp\Models\CreatePlaybackIDRequest(); // \MuxPhp\Models\CreatePlaybackIDRequest | 

try {
    $result = $apiInstance->createAssetPlaybackId($asset_id, $create_playback_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAssetPlaybackId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |
 **create_playback_id_request** | [**\MuxPhp\Models\CreatePlaybackIDRequest**](../Model/CreatePlaybackIDRequest.md)|  |

### Return type

[**\MuxPhp\Models\CreatePlaybackIDResponse**](../Model/CreatePlaybackIDResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAsset

> deleteAsset($asset_id)

Delete an asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The asset ID.

try {
    $apiInstance->deleteAsset($asset_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAssetPlaybackId

> deleteAssetPlaybackId($asset_id, $playback_id)

Delete a playback ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The asset ID.
$playback_id = 'playback_id_example'; // string | The live stream's playback ID.

try {
    $apiInstance->deleteAssetPlaybackId($asset_id, $playback_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAssetPlaybackId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |
 **playback_id** | **string**| The live stream&#39;s playback ID. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAsset

> \MuxPhp\Models\AssetResponse getAsset($asset_id)

Retrieve an asset

Retrieves the details of an asset that has previously been created. Supply the unique asset ID that was returned from your previous request, and Mux will return the corresponding asset information. The same information is returned when creating an asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The asset ID.

try {
    $result = $apiInstance->getAsset($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |

### Return type

[**\MuxPhp\Models\AssetResponse**](../Model/AssetResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAssetInputInfo

> \MuxPhp\Models\GetAssetInputInfoResponse getAssetInputInfo($asset_id)

Retrieve asset input info

Returns a list of the input objects that were used to create the asset along with any settings that were applied to each input.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The asset ID.

try {
    $result = $apiInstance->getAssetInputInfo($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetInputInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |

### Return type

[**\MuxPhp\Models\GetAssetInputInfoResponse**](../Model/GetAssetInputInfoResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAssetPlaybackId

> \MuxPhp\Models\GetAssetPlaybackIDResponse getAssetPlaybackId($asset_id, $playback_id)

Retrieve a playback ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The asset ID.
$playback_id = 'playback_id_example'; // string | The live stream's playback ID.

try {
    $result = $apiInstance->getAssetPlaybackId($asset_id, $playback_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetPlaybackId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |
 **playback_id** | **string**| The live stream&#39;s playback ID. |

### Return type

[**\MuxPhp\Models\GetAssetPlaybackIDResponse**](../Model/GetAssetPlaybackIDResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAssets

> \MuxPhp\Models\ListAssetsResponse listAssets($limit, $page)

List assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`

try {
    $result = $apiInstance->listAssets($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->listAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of items to include in the response | [optional] [default to 25]
 **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1]

### Return type

[**\MuxPhp\Models\ListAssetsResponse**](../Model/ListAssetsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAssetMp4Support

> \MuxPhp\Models\AssetResponse updateAssetMp4Support($asset_id, $update_asset_mp4_support_request)

Update MP4 support

Allows you add or remove mp4 support for assets that were created without it. Currently there are two values supported in this request, `standard` and `none`. `none` means that an asset *does not* have mp4 support, so submitting a request with `mp4_support` set to `none` will delete the mp4 assets from the asset in question.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The asset ID.
$update_asset_mp4_support_request = new \MuxPhp\Models\UpdateAssetMP4SupportRequest(); // \MuxPhp\Models\UpdateAssetMP4SupportRequest | 

try {
    $result = $apiInstance->updateAssetMp4Support($asset_id, $update_asset_mp4_support_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAssetMp4Support: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |
 **update_asset_mp4_support_request** | [**\MuxPhp\Models\UpdateAssetMP4SupportRequest**](../Model/UpdateAssetMP4SupportRequest.md)|  |

### Return type

[**\MuxPhp\Models\AssetResponse**](../Model/AssetResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

