# MuxPhp\LiveStreamsApi

All URIs are relative to *https://api.mux.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLiveStream**](LiveStreamsApi.md#createLiveStream) | **POST** /video/v1/live-streams | Create a live stream
[**createLiveStreamPlaybackId**](LiveStreamsApi.md#createLiveStreamPlaybackId) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids | Create a live stream playback ID
[**createLiveStreamSimulcastTarget**](LiveStreamsApi.md#createLiveStreamSimulcastTarget) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets | Create a live stream simulcast target
[**deleteLiveStream**](LiveStreamsApi.md#deleteLiveStream) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID} | Delete a live stream
[**deleteLiveStreamPlaybackId**](LiveStreamsApi.md#deleteLiveStreamPlaybackId) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids/{PLAYBACK_ID} | Delete a live stream playback ID
[**deleteLiveStreamSimulcastTarget**](LiveStreamsApi.md#deleteLiveStreamSimulcastTarget) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets/{SIMULCAST_TARGET_ID} | Delete a Live Stream Simulcast Target
[**getLiveStream**](LiveStreamsApi.md#getLiveStream) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID} | Retrieve a live stream
[**getLiveStreamSimulcastTarget**](LiveStreamsApi.md#getLiveStreamSimulcastTarget) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets/{SIMULCAST_TARGET_ID} | Retrieve a Live Stream Simulcast Target
[**listLiveStreams**](LiveStreamsApi.md#listLiveStreams) | **GET** /video/v1/live-streams | List live streams
[**resetStreamKey**](LiveStreamsApi.md#resetStreamKey) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/reset-stream-key | Reset a live stream’s stream key
[**signalLiveStreamComplete**](LiveStreamsApi.md#signalLiveStreamComplete) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/complete | Signal a live stream is finished



## createLiveStream

> \MuxPhp\Models\LiveStreamResponse createLiveStream($create_live_stream_request)

Create a live stream

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_live_stream_request** | [**\MuxPhp\Models\CreateLiveStreamRequest**](../Model/CreateLiveStreamRequest.md)|  |

### Return type

[**\MuxPhp\Models\LiveStreamResponse**](../Model/LiveStreamResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createLiveStreamPlaybackId

> \MuxPhp\Models\CreatePlaybackIDResponse createLiveStreamPlaybackId($live_stream_id, $create_playback_id_request)

Create a live stream playback ID

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **create_playback_id_request** | [**\MuxPhp\Models\CreatePlaybackIDRequest**](../Model/CreatePlaybackIDRequest.md)|  |

### Return type

[**\MuxPhp\Models\CreatePlaybackIDResponse**](../Model/CreatePlaybackIDResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createLiveStreamSimulcastTarget

> \MuxPhp\Models\SimulcastTargetResponse createLiveStreamSimulcastTarget($live_stream_id, $create_simulcast_target_request)

Create a live stream simulcast target

Create a simulcast target for the parent live stream. Simulcast target can only be created when the parent live stream is in idle state. Only one simulcast target can be created at a time with this API.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **create_simulcast_target_request** | [**\MuxPhp\Models\CreateSimulcastTargetRequest**](../Model/CreateSimulcastTargetRequest.md)|  |

### Return type

[**\MuxPhp\Models\SimulcastTargetResponse**](../Model/SimulcastTargetResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteLiveStream

> deleteLiveStream($live_stream_id)

Delete a live stream

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

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


## deleteLiveStreamPlaybackId

> deleteLiveStreamPlaybackId($live_stream_id, $playback_id)

Delete a live stream playback ID

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **playback_id** | **string**| The live stream&#39;s playback ID. |

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


## deleteLiveStreamSimulcastTarget

> deleteLiveStreamSimulcastTarget($live_stream_id, $simulcast_target_id)

Delete a Live Stream Simulcast Target

Delete the simulcast target using the simulcast target ID returned when creating the simulcast target. Simulcast Target can only be deleted when the parent live stream is in idle state.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **simulcast_target_id** | **string**| The ID of the simulcast target. |

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


## getLiveStream

> \MuxPhp\Models\LiveStreamResponse getLiveStream($live_stream_id)

Retrieve a live stream

Retrieves the details of a live stream that has previously been created. Supply the unique live stream ID that was returned from your previous request, and Mux will return the corresponding live stream information. The same information is returned when creating a live stream.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

### Return type

[**\MuxPhp\Models\LiveStreamResponse**](../Model/LiveStreamResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLiveStreamSimulcastTarget

> \MuxPhp\Models\SimulcastTargetResponse getLiveStreamSimulcastTarget($live_stream_id, $simulcast_target_id)

Retrieve a Live Stream Simulcast Target

Retrieves the details of the simulcast target created for the parent live stream. Supply the unique live stream ID and simulcast target ID that was returned in the response of create simulcast target request, and Mux will return the corresponding information.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |
 **simulcast_target_id** | **string**| The ID of the simulcast target. |

### Return type

[**\MuxPhp\Models\SimulcastTargetResponse**](../Model/SimulcastTargetResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLiveStreams

> \MuxPhp\Models\ListLiveStreamsResponse listLiveStreams($limit, $page)

List live streams

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**optional_params** | **[]** | Assocaiative Array of optional parameters, specifically: | (optional) |
**optional_params[limit]** | int | Number of items to include in the response (optional, default to 25)
**optional_params[page]** | int | Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)

### Return type

[**\MuxPhp\Models\ListLiveStreamsResponse**](../Model/ListLiveStreamsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resetStreamKey

> \MuxPhp\Models\LiveStreamResponse resetStreamKey($live_stream_id)

Reset a live stream’s stream key

Reset a live stream key if you want to immediately stop the current stream key from working and create a new stream key that can be used for future broadcasts.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

### Return type

[**\MuxPhp\Models\LiveStreamResponse**](../Model/LiveStreamResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## signalLiveStreamComplete

> \MuxPhp\Models\SignalLiveStreamCompleteResponse signalLiveStreamComplete($live_stream_id)

Signal a live stream is finished

(Optional) Make the recorded asset available immediately instead of waiting for the reconnect_window.

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_stream_id** | **string**| The live stream ID |

### Return type

[**\MuxPhp\Models\SignalLiveStreamCompleteResponse**](../Model/SignalLiveStreamCompleteResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

