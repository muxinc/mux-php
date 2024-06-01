# MuxPhp\PlaybackRestrictionsApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlaybackRestriction()**](PlaybackRestrictionsApi.md#createPlaybackRestriction) | **POST** /video/v1/playback-restrictions | Create a Playback Restriction |
| [**deletePlaybackRestriction()**](PlaybackRestrictionsApi.md#deletePlaybackRestriction) | **DELETE** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID} | Delete a Playback Restriction |
| [**getPlaybackRestriction()**](PlaybackRestrictionsApi.md#getPlaybackRestriction) | **GET** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID} | Retrieve a Playback Restriction |
| [**listPlaybackRestrictions()**](PlaybackRestrictionsApi.md#listPlaybackRestrictions) | **GET** /video/v1/playback-restrictions | List Playback Restrictions |
| [**updateReferrerDomainRestriction()**](PlaybackRestrictionsApi.md#updateReferrerDomainRestriction) | **PUT** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID}/referrer | Update the Referrer Playback Restriction |
| [**updateUserAgentRestriction()**](PlaybackRestrictionsApi.md#updateUserAgentRestriction) | **PUT** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID}/user_agent | Update the User Agent Restriction |


## `createPlaybackRestriction()`

```php
createPlaybackRestriction($create_playback_restriction_request): \MuxPhp\Models\PlaybackRestrictionResponse
```

Create a Playback Restriction

Create a new Playback Restriction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\PlaybackRestrictionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

// This API method wants a \MuxPhp\Models\CreatePlaybackRestrictionRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\CreatePlaybackRestrictionRequest" directly.
$create_playback_restriction_request = json_decode('{"referrer":{"allowed_domains":["*.example.com"],"allow_no_referrer":true},"user_agent":{"allow_no_user_agent":false,"allow_high_risk_user_agent":false}}',true); // \MuxPhp\Models\CreatePlaybackRestrictionRequest

try {
    $result = $apiInstance->createPlaybackRestriction($create_playback_restriction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaybackRestrictionsApi->createPlaybackRestriction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_playback_restriction_request** | [**\MuxPhp\Models\CreatePlaybackRestrictionRequest**](../Model/CreatePlaybackRestrictionRequest.md)|  | |

### Return type

[**\MuxPhp\Models\PlaybackRestrictionResponse**](../Model/PlaybackRestrictionResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePlaybackRestriction()`

```php
deletePlaybackRestriction($playback_restriction_id)
```

Delete a Playback Restriction

Deletes a single Playback Restriction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\PlaybackRestrictionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playback_restriction_id = 'playback_restriction_id_example'; // string | ID of the Playback Restriction.

try {
    $apiInstance->deletePlaybackRestriction($playback_restriction_id);
} catch (Exception $e) {
    echo 'Exception when calling PlaybackRestrictionsApi->deletePlaybackRestriction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playback_restriction_id** | **string**| ID of the Playback Restriction. | |

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

## `getPlaybackRestriction()`

```php
getPlaybackRestriction($playback_restriction_id): \MuxPhp\Models\PlaybackRestrictionResponse
```

Retrieve a Playback Restriction

Retrieves a Playback Restriction associated with the unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\PlaybackRestrictionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playback_restriction_id = 'playback_restriction_id_example'; // string | ID of the Playback Restriction.

try {
    $result = $apiInstance->getPlaybackRestriction($playback_restriction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaybackRestrictionsApi->getPlaybackRestriction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playback_restriction_id** | **string**| ID of the Playback Restriction. | |

### Return type

[**\MuxPhp\Models\PlaybackRestrictionResponse**](../Model/PlaybackRestrictionResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPlaybackRestrictions()`

```php
listPlaybackRestrictions($page, $limit): \MuxPhp\Models\ListPlaybackRestrictionsResponse
```

List Playback Restrictions

Returns a list of all Playback Restrictions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\PlaybackRestrictionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Offset by this many pages, of the size of `limit`
$limit = 25; // int | Number of items to include in the response

try {
    $result = $apiInstance->listPlaybackRestrictions($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaybackRestrictionsApi->listPlaybackRestrictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 25] |

### Return type

[**\MuxPhp\Models\ListPlaybackRestrictionsResponse**](../Model/ListPlaybackRestrictionsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReferrerDomainRestriction()`

```php
updateReferrerDomainRestriction($playback_restriction_id, $update_referrer_domain_restriction_request): \MuxPhp\Models\PlaybackRestrictionResponse
```

Update the Referrer Playback Restriction

Allows you to modify the list of domains or change how Mux validates playback requests without the `Referer` HTTP header. The Referrer restriction fully replaces the old list with this new list of domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\PlaybackRestrictionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playback_restriction_id = 'playback_restriction_id_example'; // string | ID of the Playback Restriction.

// This API method wants a \MuxPhp\Models\UpdateReferrerDomainRestrictionRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\UpdateReferrerDomainRestrictionRequest" directly.
$update_referrer_domain_restriction_request = json_decode('{"allowed_domains":["*.example.com"],"allow_no_referrer":true}',true); // \MuxPhp\Models\UpdateReferrerDomainRestrictionRequest

try {
    $result = $apiInstance->updateReferrerDomainRestriction($playback_restriction_id, $update_referrer_domain_restriction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaybackRestrictionsApi->updateReferrerDomainRestriction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playback_restriction_id** | **string**| ID of the Playback Restriction. | |
| **update_referrer_domain_restriction_request** | [**\MuxPhp\Models\UpdateReferrerDomainRestrictionRequest**](../Model/UpdateReferrerDomainRestrictionRequest.md)|  | |

### Return type

[**\MuxPhp\Models\PlaybackRestrictionResponse**](../Model/PlaybackRestrictionResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserAgentRestriction()`

```php
updateUserAgentRestriction($playback_restriction_id, $update_user_agent_restriction_request): \MuxPhp\Models\PlaybackRestrictionResponse
```

Update the User Agent Restriction

Allows you to modify how Mux validates playback requests with different user agents.  Please see [Using User-Agent HTTP header for validation](https://docs.mux.com/guides/secure-video-playback#using-user-agent-http-header-for-validation) for more details on this feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\PlaybackRestrictionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playback_restriction_id = 'playback_restriction_id_example'; // string | ID of the Playback Restriction.

// This API method wants a \MuxPhp\Models\UpdateUserAgentRestrictionRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\UpdateUserAgentRestrictionRequest" directly.
$update_user_agent_restriction_request = json_decode('{"allow_no_user_agent":false,"allow_high_risk_user_agent":false}',true); // \MuxPhp\Models\UpdateUserAgentRestrictionRequest

try {
    $result = $apiInstance->updateUserAgentRestriction($playback_restriction_id, $update_user_agent_restriction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaybackRestrictionsApi->updateUserAgentRestriction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playback_restriction_id** | **string**| ID of the Playback Restriction. | |
| **update_user_agent_restriction_request** | [**\MuxPhp\Models\UpdateUserAgentRestrictionRequest**](../Model/UpdateUserAgentRestrictionRequest.md)|  | |

### Return type

[**\MuxPhp\Models\PlaybackRestrictionResponse**](../Model/PlaybackRestrictionResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
