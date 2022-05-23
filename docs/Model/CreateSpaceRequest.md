# # CreateSpaceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\MuxPhp\Models\SpaceType**](SpaceType.md) |  | [optional]
**passthrough** | **string** | Arbitrary user-supplied metadata that will be included in the space details and related webhooks. Max: 255 characters. | [optional]
**broadcasts** | [**\MuxPhp\Models\CreateBroadcastRequest[]**](CreateBroadcastRequest.md) | An array of broadcast destinations you want to stream the space to. **Note:** By default only a single broadcast destination can be specified. Contact Mux support if you need more. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
