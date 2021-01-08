# MuxPhp\DimensionsApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDimensionValues**](DimensionsApi.md#listDimensionValues) | **GET** /data/v1/dimensions/{DIMENSION_ID} | Lists the values for a specific dimension
[**listDimensions**](DimensionsApi.md#listDimensions) | **GET** /data/v1/dimensions | List Dimensions



## listDimensionValues

> \MuxPhp\Models\ListDimensionValuesResponse listDimensionValues($dimension_id, $limit, $page, $filters, $timeframe)

Lists the values for a specific dimension

Lists the values for a dimension along with a total count of related views.   Note: This API replaces the list-filter-values API call.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dimension_id** | **string**| ID of the Dimension |
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[limit]** | int | Number of items to include in the response (optional, default to 25)
**optional_params[page]** | int | Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
**optional_params[timeframe]** | string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)

### Return type

[**\MuxPhp\Models\ListDimensionValuesResponse**](../Model/ListDimensionValuesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listDimensions

> \MuxPhp\Models\ListDimensionsResponse listDimensions()

List Dimensions

List all available dimensions.  Note: This API replaces the list-filters API call.

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\ListDimensionsResponse**](../Model/ListDimensionsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

