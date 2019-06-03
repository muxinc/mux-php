# MuxPhp\DirectUploadsApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelDirectUpload**](DirectUploadsApi.md#cancelDirectUpload) | **PUT** /video/v1/uploads/{UPLOAD_ID}/cancel | Cancel a direct upload
[**createDirectUpload**](DirectUploadsApi.md#createDirectUpload) | **POST** /video/v1/uploads | Create a new direct upload URL
[**getDirectUpload**](DirectUploadsApi.md#getDirectUpload) | **GET** /video/v1/uploads/{UPLOAD_ID} | Retrieve a single direct upload&#39;s info
[**listDirectUploads**](DirectUploadsApi.md#listDirectUploads) | **GET** /video/v1/uploads | List direct uploads



## cancelDirectUpload

> \MuxPhp\Models\UploadResponse cancelDirectUpload($upload_id)

Cancel a direct upload

Cancels a direct upload and marks it as cancelled. If a pending upload finishes after this request, no asset will be created. This request will only succeed if the upload is still in the `waiting` state.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| ID of the Upload |

### Return type

[**\MuxPhp\Models\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createDirectUpload

> \MuxPhp\Models\UploadResponse createDirectUpload($create_upload_request)

Create a new direct upload URL

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_upload_request** | [**\MuxPhp\Models\CreateUploadRequest**](../Model/CreateUploadRequest.md)|  |

### Return type

[**\MuxPhp\Models\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDirectUpload

> \MuxPhp\Models\UploadResponse getDirectUpload($upload_id)

Retrieve a single direct upload's info

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| ID of the Upload |

### Return type

[**\MuxPhp\Models\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listDirectUploads

> \MuxPhp\Models\ListUploadsResponse listDirectUploads($limit, $page)

List direct uploads

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[limit]** | int | Number of items to include in the response (optional, default to 25)
**optional_params[page]** | int | Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)

### Return type

[**\MuxPhp\Models\ListUploadsResponse**](../Model/ListUploadsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

