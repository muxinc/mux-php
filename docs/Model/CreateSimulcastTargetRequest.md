# # CreateSimulcastTargetRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**passthrough** | **string** | Arbitrary user-supplied metadata set by you when creating a simulcast target. | [optional]
**stream_key** | **string** | Stream Key represents a stream identifier on the third party live streaming service to send the parent live stream to. Only used for RTMP(s) simulcast destinations. | [optional]
**url** | **string** | The RTMP(s) or SRT endpoint for a simulcast destination. * For RTMP(s) destinations, this should include the application name for the third party live streaming service, for example: &#x60;rtmp://live.example.com/app&#x60;. * For SRT destinations, this should be a fully formed SRT connection string, for example: &#x60;srt://srt-live.example.com:1234?streamid&#x3D;{stream_key}&amp;passphrase&#x3D;{srt_passphrase}&#x60;.  Note: SRT simulcast targets can only be used when an source is connected over SRT. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
