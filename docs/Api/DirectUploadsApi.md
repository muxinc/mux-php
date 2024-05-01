# MuxPhp\DirectUploadsApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelDirectUpload()**](DirectUploadsApi.md#cancelDirectUpload) | **PUT** /video/v1/uploads/{UPLOAD_ID}/cancel | Cancel a direct upload |
| [**createDirectUpload()**](DirectUploadsApi.md#createDirectUpload) | **POST** /video/v1/uploads | Create a new direct upload URL |
| [**getDirectUpload()**](DirectUploadsApi.md#getDirectUpload) | **GET** /video/v1/uploads/{UPLOAD_ID} | Retrieve a single direct upload&#39;s info |
| [**listDirectUploads()**](DirectUploadsApi.md#listDirectUploads) | **GET** /video/v1/uploads | List direct uploads |


## `cancelDirectUpload()`

```php
cancelDirectUpload($upload_id): \MuxPhp\Models\UploadResponse
```

Cancel a direct upload

Cancels a direct upload and marks it as cancelled. If a pending upload finishes after this request, no asset will be created. This request will only succeed if the upload is still in the `waiting` state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\DirectUploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = abcd1234; // string | ID of the Upload

try {
    $result = $apiInstance->cancelDirectUpload($upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectUploadsApi->cancelDirectUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_id** | **string**| ID of the Upload | |

### Return type

[**\MuxPhp\Models\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDirectUpload()`

```php
createDirectUpload($create_upload_request): \MuxPhp\Models\UploadResponse
```

Create a new direct upload URL

Creates a new direct upload, through which video content can be uploaded for ingest to Mux.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\DirectUploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

// This API method wants a \MuxPhp\Models\CreateUploadRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\CreateUploadRequest" directly.
$create_upload_request = json_decode('{"cors_origin":"https://example.com/","new_asset_settings":{"playback_policy":["public"],"mp4_support":"capped-1080p"}}',true); // \MuxPhp\Models\CreateUploadRequest

try {
    $result = $apiInstance->createDirectUpload($create_upload_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectUploadsApi->createDirectUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_upload_request** | [**\MuxPhp\Models\CreateUploadRequest**](../Model/CreateUploadRequest.md)|  | |

### Return type

[**\MuxPhp\Models\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectUpload()`

```php
getDirectUpload($upload_id): \MuxPhp\Models\UploadResponse
```

Retrieve a single direct upload's info

Fetches information about a single direct upload in the current environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\DirectUploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = abcd1234; // string | ID of the Upload

try {
    $result = $apiInstance->getDirectUpload($upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectUploadsApi->getDirectUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_id** | **string**| ID of the Upload | |

### Return type

[**\MuxPhp\Models\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDirectUploads()`

```php
listDirectUploads($limit, $page): \MuxPhp\Models\ListUploadsResponse
```

List direct uploads

Lists direct uploads in the current environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\DirectUploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`

try {
    $result = $apiInstance->listDirectUploads($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectUploadsApi->listDirectUploads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 25] |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |

### Return type

[**\MuxPhp\Models\ListUploadsResponse**](../Model/ListUploadsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
