# MuxPhp\SigningKeysApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSigningKey()**](SigningKeysApi.md#createSigningKey) | **POST** /system/v1/signing-keys | Create a signing key |
| [**deleteSigningKey()**](SigningKeysApi.md#deleteSigningKey) | **DELETE** /system/v1/signing-keys/{SIGNING_KEY_ID} | Delete a signing key |
| [**getSigningKey()**](SigningKeysApi.md#getSigningKey) | **GET** /system/v1/signing-keys/{SIGNING_KEY_ID} | Retrieve a signing key |
| [**listSigningKeys()**](SigningKeysApi.md#listSigningKeys) | **GET** /system/v1/signing-keys | List signing keys |


## `createSigningKey()`

```php
createSigningKey(): \MuxPhp\Models\SigningKeyResponse
```

Create a signing key

Creates a new signing key pair. When creating a new signing key, the API will generate a 2048-bit RSA key-pair and return the private key and a generated key-id; the public key will be stored at Mux to validate signed tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SigningKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSigningKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningKeysApi->createSigningKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\SigningKeyResponse**](../Model/SigningKeyResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSigningKey()`

```php
deleteSigningKey($signing_key_id)
```

Delete a signing key

Deletes an existing signing key. Use with caution, as this will invalidate any existing signatures and no JWTs can be signed using the key again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SigningKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signing_key_id = 'signing_key_id_example'; // string | The ID of the signing key.

try {
    $apiInstance->deleteSigningKey($signing_key_id);
} catch (Exception $e) {
    echo 'Exception when calling SigningKeysApi->deleteSigningKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signing_key_id** | **string**| The ID of the signing key. | |

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

## `getSigningKey()`

```php
getSigningKey($signing_key_id): \MuxPhp\Models\SigningKeyResponse
```

Retrieve a signing key

Retrieves the details of a signing key that has previously been created. Supply the unique signing key ID that was returned from your previous request, and Mux will return the corresponding signing key information. **The private key is not returned in this response.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SigningKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signing_key_id = 'signing_key_id_example'; // string | The ID of the signing key.

try {
    $result = $apiInstance->getSigningKey($signing_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningKeysApi->getSigningKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signing_key_id** | **string**| The ID of the signing key. | |

### Return type

[**\MuxPhp\Models\SigningKeyResponse**](../Model/SigningKeyResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSigningKeys()`

```php
listSigningKeys($limit, $page): \MuxPhp\Models\ListSigningKeysResponse
```

List signing keys

Returns a list of signing keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\SigningKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`

try {
    $result = $apiInstance->listSigningKeys($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningKeysApi->listSigningKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 25] |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |

### Return type

[**\MuxPhp\Models\ListSigningKeysResponse**](../Model/ListSigningKeysResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
