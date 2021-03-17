# MuxPhp\PlaybackIDApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAssetOrLivestreamId**](PlaybackIDApi.md#getAssetOrLivestreamId) | **GET** /video/v1/playback-ids/{PLAYBACK_ID} | Retrieve an Asset or Live Stream ID



## getAssetOrLivestreamId

> \MuxPhp\Models\GetAssetOrLiveStreamIdResponse getAssetOrLivestreamId($playback_id)

Retrieve an Asset or Live Stream ID

Retrieves the Identifier of the Asset or Live Stream associated with the Playback ID.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playback_id** | **string**| The live stream&#39;s playback ID. |

### Return type

[**\MuxPhp\Models\GetAssetOrLiveStreamIdResponse**](../Model/GetAssetOrLiveStreamIdResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

