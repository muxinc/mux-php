# # Broadcast

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the broadcast. Max 255 characters. |
**passthrough** | **string** | Arbitrary user-supplied metadata that will be included in the broadcast details and related webhooks. Max: 255 characters. | [optional]
**live_stream_id** | **string** | The ID of the live stream that the broadcast will be sent to. |
**status** | [**\MuxPhp\Models\BroadcastStatus**](BroadcastStatus.md) |  |
**layout** | [**\MuxPhp\Models\BroadcastLayout**](BroadcastLayout.md) |  |
**background** | **string** | URL of an image to display as the background of the broadcast. Its dimensions should match the provided resolution. | [optional]
**resolution** | [**\MuxPhp\Models\BroadcastResolution**](BroadcastResolution.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
