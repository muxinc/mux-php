# MuxPhp\VideoViewsApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVideoView**](VideoViewsApi.md#getVideoView) | **GET** /data/v1/video-views/{VIDEO_VIEW_ID} | Get a Video View
[**listVideoViews**](VideoViewsApi.md#listVideoViews) | **GET** /data/v1/video-views | List Video Views



## getVideoView

> \MuxPhp\Models\VideoViewResponse getVideoView($video_view_id)

Get a Video View

Returns the details of a video view

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_view_id** | **string**| ID of the Video View |

### Return type

[**\MuxPhp\Models\VideoViewResponse**](../Model/VideoViewResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listVideoViews

> \MuxPhp\Models\ListVideoViewsResponse listVideoViews($limit, $page, $viewer_id, $error_id, $order_direction, $filters, $timeframe)

List Video Views

Returns a list of video views

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[limit]** | int | Number of items to include in the response (optional, default to 25)
**optional_params[page]** | int | Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
**optional_params[viewer_id]** | string | Viewer ID to filter results by. This value may be provided by the integration, or may be created by Mux. (optional)
**optional_params[error_id]** | int | Filter video views by the provided error ID (as returned in the error_type_id field in the list video views endpoint). If you provide any as the error ID, this will filter the results to those with any error. (optional)
**optional_params[order_direction]** | string | Sort order. (optional)
**optional_params[filters]** | string[] | Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
**optional_params[timeframe]** | string[] | Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)

### Return type

[**\MuxPhp\Models\ListVideoViewsResponse**](../Model/ListVideoViewsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

