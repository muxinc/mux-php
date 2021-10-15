# MuxPhp\LiveStreamsApi

All URIs are relative to https://api.mux.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLiveStream()**](LiveStreamsApi.md#createLiveStream) | **POST** /video/v1/live-streams | Create a live stream
[**createLiveStreamPlaybackId()**](LiveStreamsApi.md#createLiveStreamPlaybackId) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids | Create a live stream playback ID
[**createLiveStreamSimulcastTarget()**](LiveStreamsApi.md#createLiveStreamSimulcastTarget) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets | Create a live stream simulcast target
[**deleteLiveStream()**](LiveStreamsApi.md#deleteLiveStream) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID} | Delete a live stream
[**deleteLiveStreamPlaybackId()**](LiveStreamsApi.md#deleteLiveStreamPlaybackId) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids/{PLAYBACK_ID} | Delete a live stream playback ID
[**deleteLiveStreamSimulcastTarget()**](LiveStreamsApi.md#deleteLiveStreamSimulcastTarget) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets/{SIMULCAST_TARGET_ID} | Delete a Live Stream Simulcast Target
[**disableLiveStream()**](LiveStreamsApi.md#disableLiveStream) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/disable | Disable a live stream
[**enableLiveStream()**](LiveStreamsApi.md#enableLiveStream) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/enable | Enable a live stream
[**getLiveStream()**](LiveStreamsApi.md#getLiveStream) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID} | Retrieve a live stream
[**getLiveStreamPlaybackId()**](LiveStreamsApi.md#getLiveStreamPlaybackId) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids/{PLAYBACK_ID} | Retrieve a live stream playback ID
[**getLiveStreamSimulcastTarget()**](LiveStreamsApi.md#getLiveStreamSimulcastTarget) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets/{SIMULCAST_TARGET_ID} | Retrieve a Live Stream Simulcast Target
[**listLiveStreams()**](LiveStreamsApi.md#listLiveStreams) | **GET** /video/v1/live-streams | List live streams
[**resetStreamKey()**](LiveStreamsApi.md#resetStreamKey) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/reset-stream-key | Reset a live stream’s stream key
[**signalLiveStreamComplete()**](LiveStreamsApi.md#signalLiveStreamComplete) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/complete | Signal a live stream is finished
[**updateLiveStreamEmbeddedSubtitles()**](LiveStreamsApi.md#updateLiveStreamEmbeddedSubtitles) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/embedded-subtitles | Update a live stream&#39;s embedded subtitles


## `createLiveStream()`

```php
createLiveStream($create_live_stream_request): \MuxPhp\Models\LiveStreamResponse
```

Create a live stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_live_stream_request = {"playback_policy":"public","new_asset_settings":{"playback_policy":"public"}}; // \MuxPhp\Models\CreateLiveStreamRequest

try {
    $result = $apiInstance->createLiveStream($create_live_stream_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->createLiveStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_live_stream_request** | [**\MuxPhp\Models\CreateLiveStreamRequest**](../Model/CreateLiveStreamRequest.md)|  |

### Return type

[**\MuxPhp\Models\LiveStreamResponse**](../Model/LiveStreamResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLiveStreamPlaybackId()`

```php
createLiveStreamPlaybackId($live_stream_id, $create_playback_id_request): \MuxPhp\Models\CreatePlaybackIDResponse
```

Create a live stream playback ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID
$create_playback_id_request = {"policy":"signed"}; // \MuxPhp\Models\CreatePlaybackIDRequest

try {
    $result = $apiInstance->createLiveStreamPlaybackId($live_stream_id, $create_playback_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->createLiveStreamPlaybackId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
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

## `createLiveStreamSimulcastTarget()`

```php
createLiveStreamSimulcastTarget($live_stream_id, $create_simulcast_target_request): \MuxPhp\Models\SimulcastTargetResponse
```

Create a live stream simulcast target

Create a simulcast target for the parent live stream. Simulcast target can only be created when the parent live stream is in idle state. Only one simulcast target can be created at a time with this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID
$create_simulcast_target_request = {"url":"rtmp://live.example.com/app","stream_key":"abcdefgh","passthrough":"Example"}; // \MuxPhp\Models\CreateSimulcastTargetRequest

try {
    $result = $apiInstance->createLiveStreamSimulcastTarget($live_stream_id, $create_simulcast_target_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->createLiveStreamSimulcastTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **create_simulcast_target_request** | [**\MuxPhp\Models\CreateSimulcastTargetRequest**](../Model/CreateSimulcastTargetRequest.md)|  |

### Return type

[**\MuxPhp\Models\SimulcastTargetResponse**](../Model/SimulcastTargetResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLiveStream()`

```php
deleteLiveStream($live_stream_id)
```

Delete a live stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID

try {
    $apiInstance->deleteLiveStream($live_stream_id);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->deleteLiveStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

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

## `deleteLiveStreamPlaybackId()`

```php
deleteLiveStreamPlaybackId($live_stream_id, $playback_id)
```

Delete a live stream playback ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID
$playback_id = 'playback_id_example'; // string | The live stream's playback ID.

try {
    $apiInstance->deleteLiveStreamPlaybackId($live_stream_id, $playback_id);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->deleteLiveStreamPlaybackId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
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

## `deleteLiveStreamSimulcastTarget()`

```php
deleteLiveStreamSimulcastTarget($live_stream_id, $simulcast_target_id)
```

Delete a Live Stream Simulcast Target

Delete the simulcast target using the simulcast target ID returned when creating the simulcast target. Simulcast Target can only be deleted when the parent live stream is in idle state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID
$simulcast_target_id = 'simulcast_target_id_example'; // string | The ID of the simulcast target.

try {
    $apiInstance->deleteLiveStreamSimulcastTarget($live_stream_id, $simulcast_target_id);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->deleteLiveStreamSimulcastTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **simulcast_target_id** | **string**| The ID of the simulcast target. |

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

## `disableLiveStream()`

```php
disableLiveStream($live_stream_id): \MuxPhp\Models\DisableLiveStreamResponse
```

Disable a live stream

Disables a live stream, making it reject incoming RTMP streams until re-enabled. The API also ends the live stream recording immediately when active. Ending the live stream recording adds the `EXT-X-ENDLIST` tag to the HLS manifest which notifies the player that this live stream is over.  Mux also closes the encoder connection immediately. Any attempt from the encoder to re-establish connection will fail till the live stream is re-enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID

try {
    $result = $apiInstance->disableLiveStream($live_stream_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->disableLiveStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

### Return type

[**\MuxPhp\Models\DisableLiveStreamResponse**](../Model/DisableLiveStreamResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableLiveStream()`

```php
enableLiveStream($live_stream_id): \MuxPhp\Models\EnableLiveStreamResponse
```

Enable a live stream

Enables a live stream, allowing it to accept an incoming RTMP stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID

try {
    $result = $apiInstance->enableLiveStream($live_stream_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->enableLiveStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

### Return type

[**\MuxPhp\Models\EnableLiveStreamResponse**](../Model/EnableLiveStreamResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLiveStream()`

```php
getLiveStream($live_stream_id): \MuxPhp\Models\LiveStreamResponse
```

Retrieve a live stream

Retrieves the details of a live stream that has previously been created. Supply the unique live stream ID that was returned from your previous request, and Mux will return the corresponding live stream information. The same information is returned when creating a live stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID

try {
    $result = $apiInstance->getLiveStream($live_stream_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->getLiveStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

### Return type

[**\MuxPhp\Models\LiveStreamResponse**](../Model/LiveStreamResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLiveStreamPlaybackId()`

```php
getLiveStreamPlaybackId($live_stream_id, $playback_id): \MuxPhp\Models\GetLiveStreamPlaybackIDResponse
```

Retrieve a live stream playback ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID
$playback_id = 'playback_id_example'; // string | The live stream's playback ID.

try {
    $result = $apiInstance->getLiveStreamPlaybackId($live_stream_id, $playback_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->getLiveStreamPlaybackId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **playback_id** | **string**| The live stream&#39;s playback ID. |

### Return type

[**\MuxPhp\Models\GetLiveStreamPlaybackIDResponse**](../Model/GetLiveStreamPlaybackIDResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLiveStreamSimulcastTarget()`

```php
getLiveStreamSimulcastTarget($live_stream_id, $simulcast_target_id): \MuxPhp\Models\SimulcastTargetResponse
```

Retrieve a Live Stream Simulcast Target

Retrieves the details of the simulcast target created for the parent live stream. Supply the unique live stream ID and simulcast target ID that was returned in the response of create simulcast target request, and Mux will return the corresponding information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID
$simulcast_target_id = 'simulcast_target_id_example'; // string | The ID of the simulcast target.

try {
    $result = $apiInstance->getLiveStreamSimulcastTarget($live_stream_id, $simulcast_target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->getLiveStreamSimulcastTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **simulcast_target_id** | **string**| The ID of the simulcast target. |

### Return type

[**\MuxPhp\Models\SimulcastTargetResponse**](../Model/SimulcastTargetResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLiveStreams()`

```php
listLiveStreams($limit, $page, $stream_key): \MuxPhp\Models\ListLiveStreamsResponse
```

List live streams

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`
$stream_key = 'stream_key_example'; // string | Filter response to return live stream for this stream key only

try {
    $result = $apiInstance->listLiveStreams($limit, $page, $stream_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->listLiveStreams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of items to include in the response | [optional] [default to 25]
 **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1]
 **stream_key** | **string**| Filter response to return live stream for this stream key only | [optional]

### Return type

[**\MuxPhp\Models\ListLiveStreamsResponse**](../Model/ListLiveStreamsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetStreamKey()`

```php
resetStreamKey($live_stream_id): \MuxPhp\Models\LiveStreamResponse
```

Reset a live stream’s stream key

Reset a live stream key if you want to immediately stop the current stream key from working and create a new stream key that can be used for future broadcasts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID

try {
    $result = $apiInstance->resetStreamKey($live_stream_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->resetStreamKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

### Return type

[**\MuxPhp\Models\LiveStreamResponse**](../Model/LiveStreamResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signalLiveStreamComplete()`

```php
signalLiveStreamComplete($live_stream_id): \MuxPhp\Models\SignalLiveStreamCompleteResponse
```

Signal a live stream is finished

(Optional) End the live stream recording immediately instead of waiting for the reconnect_window. `EXT-X-ENDLIST` tag is added to the HLS manifest which notifies the player that this live stream is over.  Mux does not close the encoder connection immediately. Encoders are often configured to re-establish connections immediately which would result in a new recorded asset. For this reason, Mux waits for 60s before closing the connection with the encoder. This 60s timeframe is meant to give encoder operators a chance to disconnect from their end.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID

try {
    $result = $apiInstance->signalLiveStreamComplete($live_stream_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->signalLiveStreamComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

### Return type

[**\MuxPhp\Models\SignalLiveStreamCompleteResponse**](../Model/SignalLiveStreamCompleteResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLiveStreamEmbeddedSubtitles()`

```php
updateLiveStreamEmbeddedSubtitles($live_stream_id, $update_live_stream_embedded_subtitles_request): \MuxPhp\Models\LiveStreamResponse
```

Update a live stream's embedded subtitles

Configures a live stream to receive embedded closed captions. The resulting Asset's subtitle text track will have `closed_captions: true` set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The live stream ID
$update_live_stream_embedded_subtitles_request = {"embedded_subtitles":[{"passthrough":"Example"}]}; // \MuxPhp\Models\UpdateLiveStreamEmbeddedSubtitlesRequest

try {
    $result = $apiInstance->updateLiveStreamEmbeddedSubtitles($live_stream_id, $update_live_stream_embedded_subtitles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->updateLiveStreamEmbeddedSubtitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **update_live_stream_embedded_subtitles_request** | [**\MuxPhp\Models\UpdateLiveStreamEmbeddedSubtitlesRequest**](../Model/UpdateLiveStreamEmbeddedSubtitlesRequest.md)|  |

### Return type

[**\MuxPhp\Models\LiveStreamResponse**](../Model/LiveStreamResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
