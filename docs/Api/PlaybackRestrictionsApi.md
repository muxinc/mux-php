# MuxPhp\PlaybackRestrictionsApi

All URIs are relative to https://api.mux.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlaybackRestriction()**](PlaybackRestrictionsApi.md#createPlaybackRestriction) | **POST** /video/v1/playback-restrictions | Create a Playback Restriction
[**deletePlaybackRestriction()**](PlaybackRestrictionsApi.md#deletePlaybackRestriction) | **DELETE** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID} | Delete a Playback Restriction
[**getPlaybackRestriction()**](PlaybackRestrictionsApi.md#getPlaybackRestriction) | **GET** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID} | Retrieve a Playback Restriction
[**listPlaybackRestrictions()**](PlaybackRestrictionsApi.md#listPlaybackRestrictions) | **GET** /video/v1/playback-restrictions | List Playback Restrictions
[**updateReferrerDomainRestriction()**](PlaybackRestrictionsApi.md#updateReferrerDomainRestriction) | **PUT** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID}/referrer | Update the Referrer Playback Restriction


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
$create_playback_restriction_request = {"referrer":{"allowed_domains":["*.example.com"],"allow_no_referrer":true}}; // \MuxPhp\Models\CreatePlaybackRestrictionRequest

try {
    $result = $apiInstance->createPlaybackRestriction($create_playback_restriction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaybackRestrictionsApi->createPlaybackRestriction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_playback_restriction_request** | [**\MuxPhp\Models\CreatePlaybackRestrictionRequest**](../Model/CreatePlaybackRestrictionRequest.md)|  |

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playback_restriction_id** | **string**| ID of the Playback Restriction. |

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playback_restriction_id** | **string**| ID of the Playback Restriction. |

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1]
 **limit** | **int**| Number of items to include in the response | [optional] [default to 25]

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
updateReferrerDomainRestriction($playback_restriction_id, $body): \MuxPhp\Models\PlaybackRestrictionResponse
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
$body = {"allowed_domains":["*.example.com"],"allow_no_referrer":true}; // \MuxPhp\Models\ReferrerDomainRestriction

try {
    $result = $apiInstance->updateReferrerDomainRestriction($playback_restriction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaybackRestrictionsApi->updateReferrerDomainRestriction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playback_restriction_id** | **string**| ID of the Playback Restriction. |
 **body** | **\MuxPhp\Models\ReferrerDomainRestriction**|  |

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
