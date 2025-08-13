# MuxPhp\AnnotationsApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAnnotation()**](AnnotationsApi.md#createAnnotation) | **POST** /data/v1/annotations | Create Annotation |
| [**deleteAnnotation()**](AnnotationsApi.md#deleteAnnotation) | **DELETE** /data/v1/annotations/{ANNOTATION_ID} | Delete Annotation |
| [**getAnnotation()**](AnnotationsApi.md#getAnnotation) | **GET** /data/v1/annotations/{ANNOTATION_ID} | Get Annotation |
| [**listAnnotations()**](AnnotationsApi.md#listAnnotations) | **GET** /data/v1/annotations | List Annotations |
| [**updateAnnotation()**](AnnotationsApi.md#updateAnnotation) | **PATCH** /data/v1/annotations/{ANNOTATION_ID} | Update Annotation |


## `createAnnotation()`

```php
createAnnotation($annotation_input): \MuxPhp\Models\AnnotationResponse
```

Create Annotation

Creates a new annotation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

// This API method wants a \MuxPhp\Models\AnnotationInput
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\AnnotationInput" directly.
$annotation_input = json_decode('{"note":"This is a note","date":1745438400,"sub_property_id":"123456"}',true); // \MuxPhp\Models\AnnotationInput

try {
    $result = $apiInstance->createAnnotation($annotation_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnotationsApi->createAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **annotation_input** | [**\MuxPhp\Models\AnnotationInput**](../Model/AnnotationInput.md)|  | |

### Return type

[**\MuxPhp\Models\AnnotationResponse**](../Model/AnnotationResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAnnotation()`

```php
deleteAnnotation($annotation_id)
```

Delete Annotation

Deletes an annotation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$annotation_id = 'annotation_id_example'; // string | The annotation ID

try {
    $apiInstance->deleteAnnotation($annotation_id);
} catch (Exception $e) {
    echo 'Exception when calling AnnotationsApi->deleteAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **annotation_id** | [**string**](../Model/.md)| The annotation ID | |

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

## `getAnnotation()`

```php
getAnnotation($annotation_id): \MuxPhp\Models\AnnotationResponse
```

Get Annotation

Returns the details of a specific annotation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$annotation_id = 'annotation_id_example'; // string | The annotation ID

try {
    $result = $apiInstance->getAnnotation($annotation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnotationsApi->getAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **annotation_id** | [**string**](../Model/.md)| The annotation ID | |

### Return type

[**\MuxPhp\Models\AnnotationResponse**](../Model/AnnotationResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAnnotations()`

```php
listAnnotations($limit, $page, $order_direction, $timeframe): \MuxPhp\Models\ListAnnotationsResponse
```

List Annotations

Returns a list of annotations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`
$order_direction = 'order_direction_example'; // string | Sort order.
$timeframe = array('timeframe_example'); // string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]=).  Accepted formats are...    * array of epoch timestamps e.g. `timeframe[]=1498867200&timeframe[]=1498953600`   * duration string e.g. `timeframe[]=24:hours or timeframe[]=7:days`

try {
    $result = $apiInstance->listAnnotations($limit, $page, $order_direction, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnotationsApi->listAnnotations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 25] |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |
| **order_direction** | **string**| Sort order. | [optional] |
| **timeframe** | [**string[]**](../Model/string.md)| Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;).  Accepted formats are...    * array of epoch timestamps e.g. &#x60;timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600&#x60;   * duration string e.g. &#x60;timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days&#x60; | [optional] |

### Return type

[**\MuxPhp\Models\ListAnnotationsResponse**](../Model/ListAnnotationsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnnotation()`

```php
updateAnnotation($annotation_id, $annotation_input): \MuxPhp\Models\AnnotationResponse
```

Update Annotation

Updates an existing annotation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\AnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$annotation_id = 'annotation_id_example'; // string | The annotation ID

// This API method wants a \MuxPhp\Models\AnnotationInput
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\AnnotationInput" directly.
$annotation_input = json_decode('{"note":"This is a note","date":1745438400,"sub_property_id":"123456"}',true); // \MuxPhp\Models\AnnotationInput

try {
    $result = $apiInstance->updateAnnotation($annotation_id, $annotation_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnotationsApi->updateAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **annotation_id** | [**string**](../Model/.md)| The annotation ID | |
| **annotation_input** | [**\MuxPhp\Models\AnnotationInput**](../Model/AnnotationInput.md)|  | |

### Return type

[**\MuxPhp\Models\AnnotationResponse**](../Model/AnnotationResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
