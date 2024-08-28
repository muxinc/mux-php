# # Asset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the Asset. Max 255 characters. | [optional]
**created_at** | **string** | Time the Asset was created, defined as a Unix timestamp (seconds since epoch). | [optional]
**status** | **string** | The status of the asset. | [optional]
**duration** | **double** | The duration of the asset in seconds (max duration for a single asset is 12 hours). | [optional]
**max_stored_resolution** | **string** | This field is deprecated. Please use &#x60;resolution_tier&#x60; instead. The maximum resolution that has been stored for the asset. The asset may be delivered at lower resolutions depending on the device and bandwidth, however it cannot be delivered at a higher value than is stored. | [optional]
**resolution_tier** | **string** | The resolution tier that the asset was ingested at, affecting billing for ingest &amp; storage. This field also represents the highest resolution tier that the content can be delivered at, however the actual resolution may be lower depending on the device, bandwidth, and exact resolution of the uploaded asset. | [optional]
**max_resolution_tier** | **string** | Max resolution tier can be used to control the maximum &#x60;resolution_tier&#x60; your asset is encoded, stored, and streamed at. If not set, this defaults to &#x60;1080p&#x60;. | [optional]
**encoding_tier** | **string** | This field is deprecated. Please use &#x60;video_quality&#x60; instead. The encoding tier informs the cost, quality, and available platform features for the asset. By default the &#x60;smart&#x60; encoding tier is used. [See the video quality guide for more details.](https://docs.mux.com/guides/use-encoding-tiers) | [optional]
**video_quality** | **string** | The video quality controls the cost, quality, and available platform features for the asset. By default the &#x60;plus&#x60; video quality is used. This field replaces the deprecated &#x60;encoding_tier&#x60; value. [See the video quality guide for more details.](https://docs.mux.com/guides/use-encoding-tiers) | [optional]
**max_stored_frame_rate** | **double** | The maximum frame rate that has been stored for the asset. The asset may be delivered at lower frame rates depending on the device and bandwidth, however it cannot be delivered at a higher value than is stored. This field may return -1 if the frame rate of the input cannot be reliably determined. | [optional]
**aspect_ratio** | **string** | The aspect ratio of the asset in the form of &#x60;width:height&#x60;, for example &#x60;16:9&#x60;. | [optional]
**playback_ids** | [**\MuxPhp\Models\PlaybackID[]**](PlaybackID.md) | An array of Playback ID objects. Use these to create HLS playback URLs. See [Play your videos](https://docs.mux.com/guides/play-your-videos) for more details. | [optional]
**tracks** | [**\MuxPhp\Models\Track[]**](Track.md) | The individual media tracks that make up an asset. | [optional]
**errors** | [**\MuxPhp\Models\AssetErrors**](AssetErrors.md) |  | [optional]
**per_title_encode** | **bool** |  | [optional]
**upload_id** | **string** | Unique identifier for the Direct Upload. This is an optional parameter added when the asset is created from a direct upload. | [optional]
**is_live** | **bool** | Indicates whether the live stream that created this asset is currently &#x60;active&#x60; and not in &#x60;idle&#x60; state. This is an optional parameter added when the asset is created from a live stream. | [optional]
**passthrough** | **string** | Arbitrary user-supplied metadata set for the asset. Max 255 characters. | [optional]
**live_stream_id** | **string** | Unique identifier for the live stream. This is an optional parameter added when the asset is created from a live stream. | [optional]
**master** | [**\MuxPhp\Models\AssetMaster**](AssetMaster.md) |  | [optional]
**master_access** | **string** |  | [optional] [default to MASTER_ACCESS_NONE]
**mp4_support** | **string** |  | [optional] [default to MP4_SUPPORT_NONE]
**source_asset_id** | **string** | Asset Identifier of the video used as the source for creating the clip. | [optional]
**normalize_audio** | **bool** | Normalize the audio track loudness level. This parameter is only applicable to on-demand (not live) assets. | [optional] [default to false]
**static_renditions** | [**\MuxPhp\Models\AssetStaticRenditions**](AssetStaticRenditions.md) |  | [optional]
**recording_times** | [**\MuxPhp\Models\AssetRecordingTimes[]**](AssetRecordingTimes.md) | An array of individual live stream recording sessions. A recording session is created on each encoder connection during the live stream. Additionally any time slate media is inserted during brief interruptions in the live stream media or times when the live streaming software disconnects, a recording session representing the slate media will be added with a \&quot;slate\&quot; type. | [optional]
**non_standard_input_reasons** | [**\MuxPhp\Models\AssetNonStandardInputReasons**](AssetNonStandardInputReasons.md) |  | [optional]
**test** | **bool** | True means this live stream is a test asset. A test asset can help evaluate the Mux Video APIs without incurring any cost. There is no limit on number of test assets created. Test assets are watermarked with the Mux logo, limited to 10 seconds, and deleted after 24 hrs. | [optional]
**ingest_type** | **string** | The type of ingest used to create the asset. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
