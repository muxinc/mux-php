# MuxPhp\AssetsApi

All URIs are relative to https://api.mux.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAsset()**](AssetsApi.md#createAsset) | **POST** /video/v1/assets | Create an asset
[**createAssetPlaybackId()**](AssetsApi.md#createAssetPlaybackId) | **POST** /video/v1/assets/{ASSET_ID}/playback-ids | Create a playback ID
[**createAssetTrack()**](AssetsApi.md#createAssetTrack) | **POST** /video/v1/assets/{ASSET_ID}/tracks | Create an asset track
[**deleteAsset()**](AssetsApi.md#deleteAsset) | **DELETE** /video/v1/assets/{ASSET_ID} | Delete an asset
[**deleteAssetPlaybackId()**](AssetsApi.md#deleteAssetPlaybackId) | **DELETE** /video/v1/assets/{ASSET_ID}/playback-ids/{PLAYBACK_ID} | Delete a playback ID
[**deleteAssetTrack()**](AssetsApi.md#deleteAssetTrack) | **DELETE** /video/v1/assets/{ASSET_ID}/tracks/{TRACK_ID} | Delete an asset track
[**getAsset()**](AssetsApi.md#getAsset) | **GET** /video/v1/assets/{ASSET_ID} | Retrieve an asset
[**getAssetInputInfo()**](AssetsApi.md#getAssetInputInfo) | **GET** /video/v1/assets/{ASSET_ID}/input-info | Retrieve asset input info
[**getAssetPlaybackId()**](AssetsApi.md#getAssetPlaybackId) | **GET** /video/v1/assets/{ASSET_ID}/playback-ids/{PLAYBACK_ID} | Retrieve a playback ID
[**listAssets()**](AssetsApi.md#listAssets) | **GET** /video/v1/assets | List assets
[**updateAssetMasterAccess()**](AssetsApi.md#updateAssetMasterAccess) | **PUT** /video/v1/assets/{ASSET_ID}/master-access | Update master access
[**updateAssetMp4Support()**](AssetsApi.md#updateAssetMp4Support) | **PUT** /video/v1/assets/{ASSET_ID}/mp4-support | Update MP4 support


## `createAsset()`

```php
createAsset($create_asset_request): \MuxPhp\Models\AssetResponse
```

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
$create_asset_request = {"input":"https://muxed.s3.amazonaws.com/leds.mp4","playback_policy":["public"]}; // \MuxPhp\Models\CreateAssetRequest

try {
    $result = $apiInstance->createAsset($create_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAsset: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssetPlaybackId()`

```php
createAssetPlaybackId($asset_id, $create_playback_id_request): \MuxPhp\Models\CreatePlaybackIDResponse
```

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
$create_playback_id_request = {"policy":"public"}; // \MuxPhp\Models\CreatePlaybackIDRequest

try {
    $result = $apiInstance->createAssetPlaybackId($asset_id, $create_playback_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAssetPlaybackId: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssetTrack()`

```php
createAssetTrack($asset_id, $create_track_request): \MuxPhp\Models\CreateTrackResponse
```

Create an asset track

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
$create_track_request = {"url":"https://example.com/myVideo_en.srt","type":"text","text_type":"subtitles","language_code":"en-US","name":"English","closed_captions":true,"passthrough":"English"}; // \MuxPhp\Models\CreateTrackRequest

try {
    $result = $apiInstance->createAssetTrack($asset_id, $create_track_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->createAssetTrack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |
 **create_track_request** | [**\MuxPhp\Models\CreateTrackRequest**](../Model/CreateTrackRequest.md)|  |

### Return type

[**\MuxPhp\Models\CreateTrackResponse**](../Model/CreateTrackResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAsset()`

```php
deleteAsset($asset_id)
```

Delete an asset

Deletes a video asset and all its data

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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetPlaybackId()`

```php
deleteAssetPlaybackId($asset_id, $playback_id)
```

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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetTrack()`

```php
deleteAssetTrack($asset_id, $track_id)
```

Delete an asset track

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
$track_id = 'track_id_example'; // string | The track ID.

try {
    $apiInstance->deleteAssetTrack($asset_id, $track_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAssetTrack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |
 **track_id** | **string**| The track ID. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsset()`

```php
getAsset($asset_id): \MuxPhp\Models\AssetResponse
```

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetInputInfo()`

```php
getAssetInputInfo($asset_id): \MuxPhp\Models\GetAssetInputInfoResponse
```

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetPlaybackId()`

```php
getAssetPlaybackId($asset_id, $playback_id): \MuxPhp\Models\GetAssetPlaybackIDResponse
```

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssets()`

```php
listAssets($limit, $page): \MuxPhp\Models\ListAssetsResponse
```

List assets

List all Mux assets.

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssetMasterAccess()`

```php
updateAssetMasterAccess($asset_id, $update_asset_master_access_request): \MuxPhp\Models\AssetResponse
```

Update master access

Allows you add temporary access to the master (highest-quality) version of the asset in MP4 format. A URL will be created that can be used to download the master version for 24 hours. After 24 hours Master Access will revert to \"none\". This master version is not optimized for web and not meant to be streamed, only downloaded for purposes like archiving or editing the video offline.

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
$update_asset_master_access_request = {"master_access":"temporary"}; // \MuxPhp\Models\UpdateAssetMasterAccessRequest

try {
    $result = $apiInstance->updateAssetMasterAccess($asset_id, $update_asset_master_access_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAssetMasterAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID. |
 **update_asset_master_access_request** | [**\MuxPhp\Models\UpdateAssetMasterAccessRequest**](../Model/UpdateAssetMasterAccessRequest.md)|  |

### Return type

[**\MuxPhp\Models\AssetResponse**](../Model/AssetResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssetMp4Support()`

```php
updateAssetMp4Support($asset_id, $update_asset_mp4_support_request): \MuxPhp\Models\AssetResponse
```

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
$update_asset_mp4_support_request = {"mp4_support":"standard"}; // \MuxPhp\Models\UpdateAssetMP4SupportRequest

try {
    $result = $apiInstance->updateAssetMp4Support($asset_id, $update_asset_mp4_support_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAssetMp4Support: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
