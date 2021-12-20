# # Track

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the Track | [optional]
**type** | **string** | The type of track | [optional]
**duration** | **double** | The duration in seconds of the track media. This parameter is not set for the &#x60;text&#x60; type track. This field is optional and may not be set. The top level &#x60;duration&#x60; field of an asset will always be set. | [optional]
**max_width** | **int** | The maximum width in pixels available for the track. Only set for the &#x60;video&#x60; type track. | [optional]
**max_height** | **int** | The maximum height in pixels available for the track. Only set for the &#x60;video&#x60; type track. | [optional]
**max_frame_rate** | **double** | The maximum frame rate available for the track. Only set for the &#x60;video&#x60; type track. This field may return &#x60;-1&#x60; if the frame rate of the input cannot be reliably determined. | [optional]
**max_channels** | **int** | The maximum number of audio channels the track supports. Only set for the &#x60;audio&#x60; type track. | [optional]
**max_channel_layout** | **string** | Only set for the &#x60;audio&#x60; type track. | [optional]
**text_type** | **string** | This parameter is set only for the &#x60;text&#x60; type track. | [optional]
**language_code** | **string** | The language code value represents [BCP 47](https://tools.ietf.org/html/bcp47) specification compliant value. For example, &#x60;en&#x60; for English or &#x60;en-US&#x60; for the US version of English. This parameter is set for &#x60;text&#x60; type and &#x60;subtitles&#x60; text type track. | [optional]
**name** | **string** | The name of the track containing a human-readable description. The hls manifest will associate a subtitle text track with this value. For example, the value is \&quot;English\&quot; for subtitles text track for the &#x60;language_code&#x60; value of &#x60;en-US&#x60;. This parameter is set for the &#x60;text&#x60; type and &#x60;subtitles&#x60; text type track. | [optional]
**closed_captions** | **bool** | Indicates the track provides Subtitles for the Deaf or Hard-of-hearing (SDH). This parameter is set for the &#x60;text&#x60; type and &#x60;subtitles&#x60; text type track. | [optional]
**passthrough** | **string** | Arbitrary user-supplied metadata set for the track either when creating the asset or track. This parameter is set for &#x60;text&#x60; type and &#x60;subtitles&#x60; text type track. Max 255 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
