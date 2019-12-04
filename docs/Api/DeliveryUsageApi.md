# MuxPhp\DeliveryUsageApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDeliveryUsage**](DeliveryUsageApi.md#listDeliveryUsage) | **GET** /video/v1/delivery-usage | List Usage



## listDeliveryUsage

> \MuxPhp\Models\ListDeliveryUsageResponse listDeliveryUsage($page, $limit, $asset_id, $timeframe)

List Usage

Returns a list of delivery usage records and their associated Asset IDs or Live Stream IDs.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[page]** | int | Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
**optional_params[limit]** | int | Number of items to include in the response (optional, default to 100)
**optional_params[asset_id]** | string | Filter response to return delivery usage for this asset only. (optional)
**optional_params[timeframe]** | string[] | Time window to get delivery usage information. timeframe[0] indicates the start time, timeframe[1] indicates the end time in seconds since the Unix epoch. Default time window is 1 hour representing usage from 13th to 12th hour from when the request is made. (optional)

### Return type

[**\MuxPhp\Models\ListDeliveryUsageResponse**](../Model/ListDeliveryUsageResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

