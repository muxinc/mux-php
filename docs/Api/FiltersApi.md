# MuxPhp\FiltersApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listFilterValues**](FiltersApi.md#listFilterValues) | **GET** /data/v1/filters/{FILTER_ID} | Lists values for a specific filter
[**listFilters**](FiltersApi.md#listFilters) | **GET** /data/v1/filters | List Filters



## listFilterValues

> \MuxPhp\Models\ListFilterValuesResponse listFilterValues($filter_id, $limit, $page, $filters, $timeframe)

Lists values for a specific filter

Lists the values for a filter along with a total count of related views

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_id** | **string**| ID of the Filter |
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[limit]** | int | Number of items to include in the response (optional, default to 25)
**optional_params[page]** | int | Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
**optional_params[timeframe]** | string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)

### Return type

[**\MuxPhp\Models\ListFilterValuesResponse**](../Model/ListFilterValuesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFilters

> \MuxPhp\Models\ListFiltersResponse listFilters()

List Filters

Lists all the filters broken out into basic and advanced

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\ListFiltersResponse**](../Model/ListFiltersResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

