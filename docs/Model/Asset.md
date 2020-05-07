# # Asset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**created_at** | **string** |  | [optional] 
**deleted_at** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**duration** | **double** |  | [optional] 
**max_stored_resolution** | **string** |  | [optional] 
**max_stored_frame_rate** | **double** |  | [optional] 
**aspect_ratio** | **string** |  | [optional] 
**playback_ids** | [**\MuxPhp\Models\PlaybackID[]**](PlaybackID.md) |  | [optional] 
**tracks** | [**\MuxPhp\Models\Track[]**](Track.md) |  | [optional] 
**errors** | [**\MuxPhp\Models\AssetErrors**](AssetErrors.md) |  | [optional] 
**per_title_encode** | **bool** |  | [optional] 
**is_live** | **bool** |  | [optional] 
**passthrough** | **string** |  | [optional] 
**live_stream_id** | **string** |  | [optional] 
**master** | [**\MuxPhp\Models\AssetMaster**](AssetMaster.md) |  | [optional] 
**master_access** | **string** |  | [optional] [default to 'none']
**mp4_support** | **string** |  | [optional] [default to 'none']
**normalize_audio** | **bool** |  | [optional] [default to false]
**static_renditions** | [**\MuxPhp\Models\AssetStaticRenditions**](AssetStaticRenditions.md) |  | [optional] 
**test** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


