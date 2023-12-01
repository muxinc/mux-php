# MuxPhp\WebInputsApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebInput()**](WebInputsApi.md#createWebInput) | **POST** /video/v1/web-inputs | Create a new Web Input |
| [**deleteWebInput()**](WebInputsApi.md#deleteWebInput) | **DELETE** /video/v1/web-inputs/{WEB_INPUT_ID} | Delete a Web Input |
| [**getWebInput()**](WebInputsApi.md#getWebInput) | **GET** /video/v1/web-inputs/{WEB_INPUT_ID} | Retrieve a Web Input |
| [**launchWebInput()**](WebInputsApi.md#launchWebInput) | **PUT** /video/v1/web-inputs/{WEB_INPUT_ID}/launch | Launch a Web Input |
| [**listWebInputs()**](WebInputsApi.md#listWebInputs) | **GET** /video/v1/web-inputs | List Web Inputs |
| [**reloadWebInput()**](WebInputsApi.md#reloadWebInput) | **PUT** /video/v1/web-inputs/{WEB_INPUT_ID}/reload | Reload a Web Input |
| [**shutdownWebInput()**](WebInputsApi.md#shutdownWebInput) | **PUT** /video/v1/web-inputs/{WEB_INPUT_ID}/shutdown | Shut down a Web Input |
| [**updateWebInputUrl()**](WebInputsApi.md#updateWebInputUrl) | **PUT** /video/v1/web-inputs/{WEB_INPUT_ID}/url | Update Web Input URL |


## `createWebInput()`

```php
createWebInput($create_web_input_request): \MuxPhp\Models\WebInputResponse
```

Create a new Web Input

Create a new Web Input

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\WebInputsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

// This API method wants a \MuxPhp\Models\CreateWebInputRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\CreateWebInputRequest" directly.
$create_web_input_request = json_decode('{"url":"https://example.com/hello.html","live_stream_id":"ZEBrNTpHC02iUah025KM3te6ylM7W4S4silsrFtUkn3Ag"}',true); // \MuxPhp\Models\CreateWebInputRequest

try {
    $result = $apiInstance->createWebInput($create_web_input_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebInputsApi->createWebInput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_web_input_request** | [**\MuxPhp\Models\CreateWebInputRequest**](../Model/CreateWebInputRequest.md)|  | |

### Return type

[**\MuxPhp\Models\WebInputResponse**](../Model/WebInputResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebInput()`

```php
deleteWebInput($web_input_id)
```

Delete a Web Input

Deletes a Web Input and all its data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\WebInputsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_input_id = abcd1234; // string | The Web Input ID

try {
    $apiInstance->deleteWebInput($web_input_id);
} catch (Exception $e) {
    echo 'Exception when calling WebInputsApi->deleteWebInput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_input_id** | **string**| The Web Input ID | |

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

## `getWebInput()`

```php
getWebInput($web_input_id): \MuxPhp\Models\WebInputResponse
```

Retrieve a Web Input

Retrieve a single Web Input's info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\WebInputsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_input_id = abcd1234; // string | The Web Input ID

try {
    $result = $apiInstance->getWebInput($web_input_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebInputsApi->getWebInput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_input_id** | **string**| The Web Input ID | |

### Return type

[**\MuxPhp\Models\WebInputResponse**](../Model/WebInputResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `launchWebInput()`

```php
launchWebInput($web_input_id): \MuxPhp\Models\LaunchWebInputResponse
```

Launch a Web Input

Launches the browsers instance, loads the URL specified, and then starts streaming to the specified Live Stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\WebInputsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_input_id = abcd1234; // string | The Web Input ID

try {
    $result = $apiInstance->launchWebInput($web_input_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebInputsApi->launchWebInput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_input_id** | **string**| The Web Input ID | |

### Return type

[**\MuxPhp\Models\LaunchWebInputResponse**](../Model/LaunchWebInputResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebInputs()`

```php
listWebInputs($limit, $page): \MuxPhp\Models\ListWebInputsResponse
```

List Web Inputs

List Web Inputs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\WebInputsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`

try {
    $result = $apiInstance->listWebInputs($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebInputsApi->listWebInputs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 25] |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |

### Return type

[**\MuxPhp\Models\ListWebInputsResponse**](../Model/ListWebInputsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reloadWebInput()`

```php
reloadWebInput($web_input_id): \MuxPhp\Models\ReloadWebInputResponse
```

Reload a Web Input

Reloads the page that a Web Input is displaying.  Note: Using this when the Web Input is streaming will display the page reloading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\WebInputsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_input_id = abcd1234; // string | The Web Input ID

try {
    $result = $apiInstance->reloadWebInput($web_input_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebInputsApi->reloadWebInput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_input_id** | **string**| The Web Input ID | |

### Return type

[**\MuxPhp\Models\ReloadWebInputResponse**](../Model/ReloadWebInputResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shutdownWebInput()`

```php
shutdownWebInput($web_input_id): \MuxPhp\Models\ShutdownWebInputResponse
```

Shut down a Web Input

Ends streaming to the specified Live Stream, and then shuts down the Web Input browser instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\WebInputsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_input_id = abcd1234; // string | The Web Input ID

try {
    $result = $apiInstance->shutdownWebInput($web_input_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebInputsApi->shutdownWebInput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_input_id** | **string**| The Web Input ID | |

### Return type

[**\MuxPhp\Models\ShutdownWebInputResponse**](../Model/ShutdownWebInputResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebInputUrl()`

```php
updateWebInputUrl($web_input_id, $update_web_input_url_request): \MuxPhp\Models\WebInputResponse
```

Update Web Input URL

Changes the URL that a Web Input loads when it launches.  Note: This can only be called when the Web Input is idle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\WebInputsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_input_id = abcd1234; // string | The Web Input ID

// This API method wants a \MuxPhp\Models\UpdateWebInputUrlRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\UpdateWebInputUrlRequest" directly.
$update_web_input_url_request = json_decode('{"url":"https://example.com/hello-there.html"}',true); // \MuxPhp\Models\UpdateWebInputUrlRequest

try {
    $result = $apiInstance->updateWebInputUrl($web_input_id, $update_web_input_url_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebInputsApi->updateWebInputUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_input_id** | **string**| The Web Input ID | |
| **update_web_input_url_request** | [**\MuxPhp\Models\UpdateWebInputUrlRequest**](../Model/UpdateWebInputUrlRequest.md)|  | |

### Return type

[**\MuxPhp\Models\WebInputResponse**](../Model/WebInputResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
