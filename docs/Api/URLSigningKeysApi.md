# MuxPhp\URLSigningKeysApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUrlSigningKey**](URLSigningKeysApi.md#createUrlSigningKey) | **POST** /video/v1/signing-keys | Create a URL signing key
[**deleteUrlSigningKey**](URLSigningKeysApi.md#deleteUrlSigningKey) | **DELETE** /video/v1/signing-keys/{SIGNING_KEY_ID} | Delete a URL signing key
[**getUrlSigningKey**](URLSigningKeysApi.md#getUrlSigningKey) | **GET** /video/v1/signing-keys/{SIGNING_KEY_ID} | Retrieve a URL signing key
[**listUrlSigningKeys**](URLSigningKeysApi.md#listUrlSigningKeys) | **GET** /video/v1/signing-keys | List URL signing keys



## createUrlSigningKey

> \MuxPhp\Models\SigningKeyResponse createUrlSigningKey()

Create a URL signing key

Creates a new signing key pair. When creating a new signing key, the API will generate a 2048-bit RSA key-pair and return the private key and a generated key-id; the public key will be stored at Mux to validate signed tokens.

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\SigningKeyResponse**](../Model/SigningKeyResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteUrlSigningKey

> deleteUrlSigningKey($signing_key_id)

Delete a URL signing key

Deletes an existing signing key. Use with caution, as this will invalidate any existing signatures and no URLs can be signed using the key again.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signing_key_id** | **string**| The ID of the signing key. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUrlSigningKey

> \MuxPhp\Models\SigningKeyResponse getUrlSigningKey($signing_key_id)

Retrieve a URL signing key

Retrieves the details of a URL signing key that has previously been created. Supply the unique signing key ID that was returned from your previous request, and Mux will return the corresponding signing key information. **The private key is not returned in this response.**

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signing_key_id** | **string**| The ID of the signing key. |

### Return type

[**\MuxPhp\Models\SigningKeyResponse**](../Model/SigningKeyResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUrlSigningKeys

> \MuxPhp\Models\ListSigningKeysResponse listUrlSigningKeys($limit, $page)

List URL signing keys

Returns a list of URL signing keys.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[limit]** | int | Number of items to include in the response (optional, default to 25)
**optional_params[page]** | int | Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)

### Return type

[**\MuxPhp\Models\ListSigningKeysResponse**](../Model/ListSigningKeysResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

