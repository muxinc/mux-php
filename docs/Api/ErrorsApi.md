# MuxPhp\ErrorsApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listErrors**](ErrorsApi.md#listErrors) | **GET** /data/v1/errors | List Errors



## listErrors

> \MuxPhp\Models\ListErrorsResponse listErrors($filters, $timeframe)

List Errors

Returns a list of errors

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
**optional_params[timeframe]** | string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)

### Return type

[**\MuxPhp\Models\ListErrorsResponse**](../Model/ListErrorsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

