# # Asset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the Asset. | [optional] 
**created_at** | **string** | Time at which the object was created. Measured in seconds since the Unix epoch. | [optional] 
**deleted_at** | **string** |  | [optional] 
**status** | **string** | The status of the asset. | [optional] 
**duration** | **double** | The duration of the asset in seconds (max duration for a single asset is 24 hours). | [optional] 
**max_stored_resolution** | **string** | The maximum resolution that has been stored for the asset. The asset may be delivered at lower resolutions depending on the device and bandwidth, however it cannot be delivered at a higher value than is stored. | [optional] 
**max_stored_frame_rate** | **double** | The maximum frame rate that has been stored for the asset. The asset may be delivered at lower frame rates depending on the device and bandwidth, however it cannot be delivered at a higher value than is stored. This field may return -1 if the frame rate of the input cannot be reliably determined. | [optional] 
**aspect_ratio** | **string** | The aspect ratio of the asset in the form of &#x60;width:height&#x60;, for example &#x60;16:9&#x60;. | [optional] 
**playback_ids** | [**\MuxPhp\Models\PlaybackID[]**](PlaybackID.md) |  | [optional] 
**tracks** | [**\MuxPhp\Models\Track[]**](Track.md) |  | [optional] 
**errors** | [**\MuxPhp\Models\AssetErrors**](AssetErrors.md) |  | [optional] 
**per_title_encode** | **bool** |  | [optional] 
**is_live** | **bool** | Whether the asset is created from a live stream and the live stream is currently &#x60;active&#x60; and not in &#x60;idle&#x60; state. | [optional] 
**passthrough** | **string** | Arbitrary metadata set for the asset. Max 255 characters. | [optional] 
**live_stream_id** | **string** | Unique identifier for the live stream. This is an optional parameter added when the asset is created from a live stream. | [optional] 
**master** | [**\MuxPhp\Models\AssetMaster**](AssetMaster.md) |  | [optional] 
**master_access** | **string** |  | [optional] [default to 'none']
**mp4_support** | **string** |  | [optional] [default to 'none']
**source_asset_id** | **string** | Asset Identifier of the video used as the source for creating the clip. | [optional] 
**normalize_audio** | **bool** | Normalize the audio track loudness level. This parameter is only applicable to on-demand (not live) assets. | [optional] [default to false]
**static_renditions** | [**\MuxPhp\Models\AssetStaticRenditions**](AssetStaticRenditions.md) |  | [optional] 
**recording_times** | [**\MuxPhp\Models\AssetRecordingTimes[]**](AssetRecordingTimes.md) | An array of individual live stream recording sessions. A recording session is created on each encoder connection during the live stream | [optional] 
**non_standard_input_reasons** | [**\MuxPhp\Models\AssetNonStandardInputReasons**](AssetNonStandardInputReasons.md) |  | [optional] 
**test** | **bool** | Indicates this asset is a test asset if the value is &#x60;true&#x60;. A Test asset can help evaluate the Mux Video APIs without incurring any cost. There is no limit on number of test assets created. Test assets are watermarked with the Mux logo, limited to 10 seconds, and deleted after 24 hrs. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


