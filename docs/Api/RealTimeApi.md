# MuxPhp\RealTimeApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRealtimeBreakdown**](RealTimeApi.md#getRealtimeBreakdown) | **GET** /data/v1/realtime/metrics/{REALTIME_METRIC_ID}/breakdown | Get Real-Time Breakdown
[**getRealtimeHistogramTimeseries**](RealTimeApi.md#getRealtimeHistogramTimeseries) | **GET** /data/v1/realtime/metrics/{REALTIME_METRIC_ID}/histogram-timeseries | Get Real-Time Histogram Timeseries
[**getRealtimeTimeseries**](RealTimeApi.md#getRealtimeTimeseries) | **GET** /data/v1/realtime/metrics/{REALTIME_METRIC_ID}/timeseries | Get Real-Time Timeseries
[**listRealtimeDimensions**](RealTimeApi.md#listRealtimeDimensions) | **GET** /data/v1/realtime/dimensions | List Real-Time Dimensions
[**listRealtimeMetrics**](RealTimeApi.md#listRealtimeMetrics) | **GET** /data/v1/realtime/metrics | List Real-Time Metrics



## getRealtimeBreakdown

> \MuxPhp\Models\GetRealTimeBreakdownResponse getRealtimeBreakdown($realtime_metric_id, $dimension, $timestamp, $filters, $order_by, $order_direction)

Get Real-Time Breakdown

Gets breakdown information for a specific dimension and metric along with the number of concurrent viewers and negative impact score.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realtime_metric_id** | **string**| ID of the Realtime Metric |
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[dimension]** | string | Dimension the specified value belongs to (optional)
**optional_params[timestamp]** | double | Timestamp to limit results by. This value must be provided as a unix timestamp. Defaults to the current unix timestamp. (optional)
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
**optional_params[order_by]** | string | Value to order the results by (optional)
**optional_params[order_direction]** | string | Sort order. (optional)

### Return type

[**\MuxPhp\Models\GetRealTimeBreakdownResponse**](../Model/GetRealTimeBreakdownResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRealtimeHistogramTimeseries

> \MuxPhp\Models\GetRealTimeHistogramTimeseriesResponse getRealtimeHistogramTimeseries($realtime_metric_id, $filters)

Get Real-Time Histogram Timeseries

Gets histogram timeseries information for a specific metric.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realtime_metric_id** | **string**| ID of the Realtime Metric |
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)

### Return type

[**\MuxPhp\Models\GetRealTimeHistogramTimeseriesResponse**](../Model/GetRealTimeHistogramTimeseriesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRealtimeTimeseries

> \MuxPhp\Models\GetRealTimeTimeseriesResponse getRealtimeTimeseries($realtime_metric_id, $filters)

Get Real-Time Timeseries

Gets Time series information for a specific metric along with the number of concurrent viewers.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realtime_metric_id** | **string**| ID of the Realtime Metric |
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)

### Return type

[**\MuxPhp\Models\GetRealTimeTimeseriesResponse**](../Model/GetRealTimeTimeseriesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listRealtimeDimensions

> \MuxPhp\Models\ListRealTimeDimensionsResponse listRealtimeDimensions()

List Real-Time Dimensions

Lists availiable real-time dimensions

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\ListRealTimeDimensionsResponse**](../Model/ListRealTimeDimensionsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listRealtimeMetrics

> \MuxPhp\Models\ListRealTimeMetricsResponse listRealtimeMetrics()

List Real-Time Metrics

Lists availiable real-time metrics.

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MuxPhp\Models\ListRealTimeMetricsResponse**](../Model/ListRealTimeMetricsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

