# MuxPhp\LiveStreamsApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLiveStream()**](LiveStreamsApi.md#createLiveStream) | **POST** /video/v1/live-streams | Create a live stream |
| [**createLiveStreamPlaybackId()**](LiveStreamsApi.md#createLiveStreamPlaybackId) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids | Create a live stream playback ID |
| [**createLiveStreamSimulcastTarget()**](LiveStreamsApi.md#createLiveStreamSimulcastTarget) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets | Create a live stream simulcast target |
| [**deleteLiveStream()**](LiveStreamsApi.md#deleteLiveStream) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID} | Delete a live stream |
| [**deleteLiveStreamNewAssetSettingsStaticRenditions()**](LiveStreamsApi.md#deleteLiveStreamNewAssetSettingsStaticRenditions) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID}/new-asset-settings/static-renditions | Delete a live stream&#39;s static renditions setting for new assets |
| [**deleteLiveStreamPlaybackId()**](LiveStreamsApi.md#deleteLiveStreamPlaybackId) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids/{PLAYBACK_ID} | Delete a live stream playback ID |
| [**deleteLiveStreamSimulcastTarget()**](LiveStreamsApi.md#deleteLiveStreamSimulcastTarget) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets/{SIMULCAST_TARGET_ID} | Delete a live stream simulcast target |
| [**disableLiveStream()**](LiveStreamsApi.md#disableLiveStream) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/disable | Disable a live stream |
| [**enableLiveStream()**](LiveStreamsApi.md#enableLiveStream) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/enable | Enable a live stream |
| [**getLiveStream()**](LiveStreamsApi.md#getLiveStream) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID} | Retrieve a live stream |
| [**getLiveStreamPlaybackId()**](LiveStreamsApi.md#getLiveStreamPlaybackId) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids/{PLAYBACK_ID} | Retrieve a live stream playback ID |
| [**getLiveStreamSimulcastTarget()**](LiveStreamsApi.md#getLiveStreamSimulcastTarget) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets/{SIMULCAST_TARGET_ID} | Retrieve a live stream simulcast target |
| [**listLiveStreams()**](LiveStreamsApi.md#listLiveStreams) | **GET** /video/v1/live-streams | List live streams |
| [**resetStreamKey()**](LiveStreamsApi.md#resetStreamKey) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/reset-stream-key | Reset a live stream&#39;s stream key |
| [**signalLiveStreamComplete()**](LiveStreamsApi.md#signalLiveStreamComplete) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/complete | Signal a live stream is finished |
| [**updateLiveStream()**](LiveStreamsApi.md#updateLiveStream) | **PATCH** /video/v1/live-streams/{LIVE_STREAM_ID} | Update a live stream |
| [**updateLiveStreamEmbeddedSubtitles()**](LiveStreamsApi.md#updateLiveStreamEmbeddedSubtitles) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/embedded-subtitles | Update a live stream&#39;s embedded subtitles |
| [**updateLiveStreamGeneratedSubtitles()**](LiveStreamsApi.md#updateLiveStreamGeneratedSubtitles) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/generated-subtitles | Update a live stream&#39;s generated subtitles |
| [**updateLiveStreamNewAssetSettingsStaticRenditions()**](LiveStreamsApi.md#updateLiveStreamNewAssetSettingsStaticRenditions) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/new-asset-settings/static-renditions | Update live stream static renditions for new assets |


## `createLiveStream()`

```php
createLiveStream($create_live_stream_request): \MuxPhp\Models\LiveStreamResponse
```

Create a live stream

Creates a new live stream. Once created, an encoder can connect to Mux via the specified stream key and begin streaming to an audience.

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

// This API method wants a \MuxPhp\Models\CreateLiveStreamRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\CreateLiveStreamRequest" directly.
$create_live_stream_request = json_decode('{"playback_policies":["public"],"new_asset_settings":{"playback_policies":["public"]}}',true); // \MuxPhp\Models\CreateLiveStreamRequest

try {
    $result = $apiInstance->createLiveStream($create_live_stream_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->createLiveStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_live_stream_request** | [**\MuxPhp\Models\CreateLiveStreamRequest**](../Model/CreateLiveStreamRequest.md)|  | |

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

Create a new playback ID for this live stream, through which a viewer can watch the streamed content of the live stream.

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

// This API method wants a \MuxPhp\Models\CreatePlaybackIDRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\CreatePlaybackIDRequest" directly.
$create_playback_id_request = json_decode('{"policy":"signed"}',true); // \MuxPhp\Models\CreatePlaybackIDRequest

try {
    $result = $apiInstance->createLiveStreamPlaybackId($live_stream_id, $create_playback_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->createLiveStreamPlaybackId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **create_playback_id_request** | [**\MuxPhp\Models\CreatePlaybackIDRequest**](../Model/CreatePlaybackIDRequest.md)|  | |

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

// This API method wants a \MuxPhp\Models\CreateSimulcastTargetRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\CreateSimulcastTargetRequest" directly.
$create_simulcast_target_request = json_decode('{"url":"rtmp://live.example.com/app","stream_key":"abcdefgh","passthrough":"Example"}',true); // \MuxPhp\Models\CreateSimulcastTargetRequest

try {
    $result = $apiInstance->createLiveStreamSimulcastTarget($live_stream_id, $create_simulcast_target_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->createLiveStreamSimulcastTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **create_simulcast_target_request** | [**\MuxPhp\Models\CreateSimulcastTargetRequest**](../Model/CreateSimulcastTargetRequest.md)|  | |

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

Deletes a live stream from the current environment. If the live stream is currently active and being streamed to, ingest will be terminated and the encoder will be disconnected.

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |

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

## `deleteLiveStreamNewAssetSettingsStaticRenditions()`

```php
deleteLiveStreamNewAssetSettingsStaticRenditions($live_stream_id)
```

Delete a live stream's static renditions setting for new assets

Deletes a live stream's static renditions settings for new assets. Further assets made via this live stream will not create static renditions unless re-added.

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
    $apiInstance->deleteLiveStreamNewAssetSettingsStaticRenditions($live_stream_id);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->deleteLiveStreamNewAssetSettingsStaticRenditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |

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

Deletes the playback ID for the live stream. This will not disable ingest (as the live stream still exists). New attempts to play back the live stream will fail immediately. However, current viewers will be able to continue watching the stream for some period of time.

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **playback_id** | **string**| The live stream&#39;s playback ID. | |

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

Delete a live stream simulcast target

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **simulcast_target_id** | **string**| The ID of the simulcast target. | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |

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

Fetches information about a live stream's playback ID, through which a viewer can watch the streamed content from this live stream.

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **playback_id** | **string**| The live stream&#39;s playback ID. | |

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

Retrieve a live stream simulcast target

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **simulcast_target_id** | **string**| The ID of the simulcast target. | |

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
listLiveStreams($limit, $page, $stream_key, $status): \MuxPhp\Models\ListLiveStreamsResponse
```

List live streams

Lists the live streams that currently exist in the current environment.

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
$status = new \MuxPhp\Models\\MuxPhp\Models\LiveStreamStatus(); // \MuxPhp\Models\LiveStreamStatus | Filter response to return live streams with the specified status only

try {
    $result = $apiInstance->listLiveStreams($limit, $page, $stream_key, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->listLiveStreams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 25] |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |
| **stream_key** | **string**| Filter response to return live stream for this stream key only | [optional] |
| **status** | [**\MuxPhp\Models\LiveStreamStatus**](../Model/.md)| Filter response to return live streams with the specified status only | [optional] |

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

Reset a live stream's stream key

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |

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

## `updateLiveStream()`

```php
updateLiveStream($live_stream_id, $update_live_stream_request): \MuxPhp\Models\LiveStreamResponse
```

Update a live stream

Updates the parameters of a previously-created live stream. This currently supports a subset of variables. Supply the live stream ID and the updated parameters and Mux will return the corresponding live stream information. The information returned will be the same after update as for subsequent get live stream requests.

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

// This API method wants a \MuxPhp\Models\UpdateLiveStreamRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\UpdateLiveStreamRequest" directly.
$update_live_stream_request = json_decode('{"latency_mode":"standard","reconnect_window":30,"max_continuous_duration":1200}',true); // \MuxPhp\Models\UpdateLiveStreamRequest

try {
    $result = $apiInstance->updateLiveStream($live_stream_id, $update_live_stream_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->updateLiveStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **update_live_stream_request** | [**\MuxPhp\Models\UpdateLiveStreamRequest**](../Model/UpdateLiveStreamRequest.md)|  | |

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

// This API method wants a \MuxPhp\Models\UpdateLiveStreamEmbeddedSubtitlesRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\UpdateLiveStreamEmbeddedSubtitlesRequest" directly.
$update_live_stream_embedded_subtitles_request = json_decode('{"embedded_subtitles":[{"passthrough":"Example"}]}',true); // \MuxPhp\Models\UpdateLiveStreamEmbeddedSubtitlesRequest

try {
    $result = $apiInstance->updateLiveStreamEmbeddedSubtitles($live_stream_id, $update_live_stream_embedded_subtitles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->updateLiveStreamEmbeddedSubtitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **update_live_stream_embedded_subtitles_request** | [**\MuxPhp\Models\UpdateLiveStreamEmbeddedSubtitlesRequest**](../Model/UpdateLiveStreamEmbeddedSubtitlesRequest.md)|  | |

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

## `updateLiveStreamGeneratedSubtitles()`

```php
updateLiveStreamGeneratedSubtitles($live_stream_id, $update_live_stream_generated_subtitles_request): \MuxPhp\Models\LiveStreamResponse
```

Update a live stream's generated subtitles

Updates a live stream's automatic-speech-recognition-generated subtitle configuration. Automatic speech recognition subtitles can be removed by sending an empty array in the request payload.

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

// This API method wants a \MuxPhp\Models\UpdateLiveStreamGeneratedSubtitlesRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\UpdateLiveStreamGeneratedSubtitlesRequest" directly.
$update_live_stream_generated_subtitles_request = json_decode('{"generated_subtitles":[{"name":"English CC (ASR)","language_code":"en","passthrough":"Example"}]}',true); // \MuxPhp\Models\UpdateLiveStreamGeneratedSubtitlesRequest

try {
    $result = $apiInstance->updateLiveStreamGeneratedSubtitles($live_stream_id, $update_live_stream_generated_subtitles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->updateLiveStreamGeneratedSubtitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **update_live_stream_generated_subtitles_request** | [**\MuxPhp\Models\UpdateLiveStreamGeneratedSubtitlesRequest**](../Model/UpdateLiveStreamGeneratedSubtitlesRequest.md)|  | |

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

## `updateLiveStreamNewAssetSettingsStaticRenditions()`

```php
updateLiveStreamNewAssetSettingsStaticRenditions($live_stream_id, $update_live_stream_new_asset_settings_static_renditions_request): \MuxPhp\Models\LiveStreamResponse
```

Update live stream static renditions for new assets

Updates a live stream's static renditions settings for new assets. Further assets made via this live stream will create static renditions per the settings provided. You must provide all static renditions desired.

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

// This API method wants a \MuxPhp\Models\UpdateLiveStreamNewAssetSettingsStaticRenditionsRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\UpdateLiveStreamNewAssetSettingsStaticRenditionsRequest" directly.
$update_live_stream_new_asset_settings_static_renditions_request = json_decode('{"static_renditions":[{"resolution":"audio-only"},{"resolution":"highest"}]}',true); // \MuxPhp\Models\UpdateLiveStreamNewAssetSettingsStaticRenditionsRequest

try {
    $result = $apiInstance->updateLiveStreamNewAssetSettingsStaticRenditions($live_stream_id, $update_live_stream_new_asset_settings_static_renditions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->updateLiveStreamNewAssetSettingsStaticRenditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The live stream ID | |
| **update_live_stream_new_asset_settings_static_renditions_request** | [**\MuxPhp\Models\UpdateLiveStreamNewAssetSettingsStaticRenditionsRequest**](../Model/UpdateLiveStreamNewAssetSettingsStaticRenditionsRequest.md)|  | |

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
