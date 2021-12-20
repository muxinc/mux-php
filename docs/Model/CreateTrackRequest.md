# # CreateTrackRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  |
**type** | **string** |  |
**text_type** | **string** |  |
**language_code** | **string** | The language code value must be a valid BCP 47 specification compliant value. For example, en for English or en-US for the US version of English. |
**name** | **string** | The name of the track containing a human-readable description. This value must be unique across all the text type and subtitles text type tracks. HLS manifest will associate subtitle text track with this value. For example, set the value to \&quot;English\&quot; for subtitles text track with language_code as en-US. If this parameter is not included, Mux will auto-populate based on the language_code value. | [optional]
**closed_captions** | **bool** | Indicates the track provides Subtitles for the Deaf or Hard-of-hearing (SDH). | [optional]
**passthrough** | **string** | Arbitrary user-supplied metadata set for the track either when creating the asset or track. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
