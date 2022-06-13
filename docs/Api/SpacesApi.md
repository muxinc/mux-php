# MuxPhp\SpacesApi

All URIs are relative to https://api.mux.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSpace()**](SpacesApi.md#createSpace) | **POST** /video/v1/spaces | Create a space
[**createSpaceBroadcast()**](SpacesApi.md#createSpaceBroadcast) | **POST** /video/v1/spaces/{SPACE_ID}/broadcasts | Create a space broadcast
[**deleteSpace()**](SpacesApi.md#deleteSpace) | **DELETE** /video/v1/spaces/{SPACE_ID} | Delete a space
[**deleteSpaceBroadcast()**](SpacesApi.md#deleteSpaceBroadcast) | **DELETE** /video/v1/spaces/{SPACE_ID}/broadcasts/{BROADCAST_ID} | Delete a space broadcast
[**getSpace()**](SpacesApi.md#getSpace) | **GET** /video/v1/spaces/{SPACE_ID} | Retrieve a space
[**getSpaceBroadcast()**](SpacesApi.md#getSpaceBroadcast) | **GET** /video/v1/spaces/{SPACE_ID}/broadcasts/{BROADCAST_ID} | Retrieve space broadcast
[**listSpaces()**](SpacesApi.md#listSpaces) | **GET** /video/v1/spaces | List spaces
[**startSpaceBroadcast()**](SpacesApi.md#startSpaceBroadcast) | **POST** /video/v1/spaces/{SPACE_ID}/broadcasts/{BROADCAST_ID}/start | Start a space broadcast
[**stopSpaceBroadcast()**](SpacesApi.md#stopSpaceBroadcast) | **POST** /video/v1/spaces/{SPACE_ID}/broadcasts/{BROADCAST_ID}/stop | Stop a space broadcast


## `createSpace()`

```php
createSpace($create_space_request): \MuxPhp\Models\SpaceResponse
```

Create a space

Create a new space. Spaces are used to build [real-time video applications.](https://mux.com/real-time-video)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_space_request = {"type":"server"}; // \MuxPhp\Models\CreateSpaceRequest

try {
    $result = $apiInstance->createSpace($create_space_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->createSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_space_request** | [**\MuxPhp\Models\CreateSpaceRequest**](../Model/CreateSpaceRequest.md)|  |

### Return type

[**\MuxPhp\Models\SpaceResponse**](../Model/SpaceResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSpaceBroadcast()`

```php
createSpaceBroadcast($space_id, $create_broadcast_request): \MuxPhp\Models\BroadcastResponse
```

Create a space broadcast

Creates a new broadcast. Broadcasts are used to create composited versions of your space, which can be broadcast to live streams.  **Note:** By default only a single broadcast destination can be specified. Contact Mux support if you need more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_id = 'space_id_example'; // string | The space ID.
$create_broadcast_request = {"live_stream_id":"GQ9025mPqzyjOy3kKQW006qKTqmULW9vFO"}; // \MuxPhp\Models\CreateBroadcastRequest

try {
    $result = $apiInstance->createSpaceBroadcast($space_id, $create_broadcast_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->createSpaceBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **space_id** | **string**| The space ID. |
 **create_broadcast_request** | [**\MuxPhp\Models\CreateBroadcastRequest**](../Model/CreateBroadcastRequest.md)|  |

### Return type

[**\MuxPhp\Models\BroadcastResponse**](../Model/BroadcastResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSpace()`

```php
deleteSpace($space_id)
```

Delete a space

Deletes a space. Spaces can only be deleted when `idle`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_id = 'space_id_example'; // string | The space ID.

try {
    $apiInstance->deleteSpace($space_id);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->deleteSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **space_id** | **string**| The space ID. |

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

## `deleteSpaceBroadcast()`

```php
deleteSpaceBroadcast($space_id, $broadcast_id)
```

Delete a space broadcast

Deletes a single broadcast of a specific space. Broadcasts can only be deleted when `idle`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_id = 'space_id_example'; // string | The space ID.
$broadcast_id = 'broadcast_id_example'; // string | The broadcast ID.

try {
    $apiInstance->deleteSpaceBroadcast($space_id, $broadcast_id);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->deleteSpaceBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **space_id** | **string**| The space ID. |
 **broadcast_id** | **string**| The broadcast ID. |

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

## `getSpace()`

```php
getSpace($space_id): \MuxPhp\Models\SpaceResponse
```

Retrieve a space

Retrieves the details of a space that has previously been created. Supply the unique space ID that was returned from your create space request, and Mux will return the information about the corresponding space. The same information is returned when creating a space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_id = 'space_id_example'; // string | The space ID.

try {
    $result = $apiInstance->getSpace($space_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->getSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **space_id** | **string**| The space ID. |

### Return type

[**\MuxPhp\Models\SpaceResponse**](../Model/SpaceResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpaceBroadcast()`

```php
getSpaceBroadcast($space_id, $broadcast_id): \MuxPhp\Models\BroadcastResponse
```

Retrieve space broadcast

Retrieves the details of a broadcast of a specific space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_id = 'space_id_example'; // string | The space ID.
$broadcast_id = 'broadcast_id_example'; // string | The broadcast ID.

try {
    $result = $apiInstance->getSpaceBroadcast($space_id, $broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->getSpaceBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **space_id** | **string**| The space ID. |
 **broadcast_id** | **string**| The broadcast ID. |

### Return type

[**\MuxPhp\Models\BroadcastResponse**](../Model/BroadcastResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSpaces()`

```php
listSpaces($limit, $page): \MuxPhp\Models\ListSpacesResponse
```

List spaces

List all spaces in the current enviroment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`

try {
    $result = $apiInstance->listSpaces($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->listSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of items to include in the response | [optional] [default to 25]
 **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1]

### Return type

[**\MuxPhp\Models\ListSpacesResponse**](../Model/ListSpacesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startSpaceBroadcast()`

```php
startSpaceBroadcast($space_id, $broadcast_id): \MuxPhp\Models\StartSpaceBroadcastResponse
```

Start a space broadcast

Starts broadcasting a space to the associated destination. Broadcasts can only be started when the space is `active` (when there are participants connected).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_id = 'space_id_example'; // string | The space ID.
$broadcast_id = 'broadcast_id_example'; // string | The broadcast ID.

try {
    $result = $apiInstance->startSpaceBroadcast($space_id, $broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->startSpaceBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **space_id** | **string**| The space ID. |
 **broadcast_id** | **string**| The broadcast ID. |

### Return type

[**\MuxPhp\Models\StartSpaceBroadcastResponse**](../Model/StartSpaceBroadcastResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopSpaceBroadcast()`

```php
stopSpaceBroadcast($space_id, $broadcast_id): \MuxPhp\Models\StopSpaceBroadcastResponse
```

Stop a space broadcast

Stops broadcasting a space, causing the destination live stream to become idle. This API also automatically calls `complete` on the destination live stream. Broadcasts are also automatically stopped when a space becomes idle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_id = 'space_id_example'; // string | The space ID.
$broadcast_id = 'broadcast_id_example'; // string | The broadcast ID.

try {
    $result = $apiInstance->stopSpaceBroadcast($space_id, $broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->stopSpaceBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **space_id** | **string**| The space ID. |
 **broadcast_id** | **string**| The broadcast ID. |

### Return type

[**\MuxPhp\Models\StopSpaceBroadcastResponse**](../Model/StopSpaceBroadcastResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
