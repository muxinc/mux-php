# MuxPhp\MetricsApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMetricTimeseriesData**](MetricsApi.md#getMetricTimeseriesData) | **GET** /data/v1/metrics/{METRIC_ID}/timeseries | Get metric timeseries data
[**getOverallValues**](MetricsApi.md#getOverallValues) | **GET** /data/v1/metrics/{METRIC_ID}/overall | Get Overall values
[**listAllMetricValues**](MetricsApi.md#listAllMetricValues) | **GET** /data/v1/metrics/comparison | List all metric values
[**listBreakdownValues**](MetricsApi.md#listBreakdownValues) | **GET** /data/v1/metrics/{METRIC_ID}/breakdown | List breakdown values
[**listInsights**](MetricsApi.md#listInsights) | **GET** /data/v1/metrics/{METRIC_ID}/insights | List Insights



## getMetricTimeseriesData

> \MuxPhp\Models\GetMetricTimeseriesDataResponse getMetricTimeseriesData($metric_id, $timeframe, $filters, $measurement, $order_direction, $group_by)

Get metric timeseries data

Returns timeseries data for a specific metric

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metric_id** | **string**| ID of the Metric |
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[timeframe]** | string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
**optional_params[measurement]** | string | Measurement for the provided metric. If omitted, the deafult for the metric will be used. (optional)
**optional_params[order_direction]** | string | Sort order. (optional)
**optional_params[group_by]** | string | Time granularity to group results by. If this value is omitted, a default granularity is chosen based on the supplied timeframe. (optional)

### Return type

[**\MuxPhp\Models\GetMetricTimeseriesDataResponse**](../Model/GetMetricTimeseriesDataResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOverallValues

> \MuxPhp\Models\GetOverallValuesResponse getOverallValues($metric_id, $timeframe, $filters, $measurement)

Get Overall values

Returns the overall value for a specific metric, as well as the total view count, watch time, and the Mux Global metric value for the metric.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metric_id** | **string**| ID of the Metric |
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[timeframe]** | string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
**optional_params[measurement]** | string | Measurement for the provided metric. If omitted, the deafult for the metric will be used. (optional)

### Return type

[**\MuxPhp\Models\GetOverallValuesResponse**](../Model/GetOverallValuesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAllMetricValues

> \MuxPhp\Models\ListAllMetricValuesResponse listAllMetricValues($timeframe, $filters, $dimension, $value)

List all metric values

List all of the values across every breakdown for a specific metric

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[timeframe]** | string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
**optional_params[dimension]** | string | Dimension the specified value belongs to (optional)
**optional_params[value]** | string | Value to show all available metrics for (optional)

### Return type

[**\MuxPhp\Models\ListAllMetricValuesResponse**](../Model/ListAllMetricValuesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listBreakdownValues

> \MuxPhp\Models\ListBreakdownValuesResponse listBreakdownValues($metric_id, $group_by, $measurement, $filters, $limit, $page, $order_by, $order_direction, $timeframe)

List breakdown values

List the breakdown values for a specific metric

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metric_id** | **string**| ID of the Metric |
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[group_by]** | string | Breakdown value to group the results by (optional)
**optional_params[measurement]** | string | Measurement for the provided metric. If omitted, the deafult for the metric will be used. (optional)
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
**optional_params[limit]** | int | Number of items to include in the response (optional, default to 25)
**optional_params[page]** | int | Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
**optional_params[order_by]** | string | Value to order the results by (optional)
**optional_params[order_direction]** | string | Sort order. (optional)
**optional_params[timeframe]** | string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)

### Return type

[**\MuxPhp\Models\ListBreakdownValuesResponse**](../Model/ListBreakdownValuesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listInsights

> \MuxPhp\Models\ListInsightsResponse listInsights($metric_id, $measurement, $order_direction, $timeframe)

List Insights

Returns a list of insights for a metric. These are the worst performing values across all breakdowns sorted by how much they negatively impact a specific metric.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metric_id** | **string**| ID of the Metric |
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[measurement]** | string | Measurement for the provided metric. If omitted, the deafult for the metric will be used. (optional)
**optional_params[order_direction]** | string | Sort order. (optional)
**optional_params[timeframe]** | string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)

### Return type

[**\MuxPhp\Models\ListInsightsResponse**](../Model/ListInsightsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

