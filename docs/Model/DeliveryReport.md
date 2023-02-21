# # DeliveryReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**live_stream_id** | **string** | Unique identifier for the live stream that created the asset. | [optional]
**asset_id** | **string** | Unique identifier for the asset. | [optional]
**passthrough** | **string** | The &#x60;passthrough&#x60; value for the asset. | [optional]
**created_at** | **string** | Time at which the asset was created. Measured in seconds since the Unix epoch. | [optional]
**deleted_at** | **string** | If exists, time at which the asset was deleted. Measured in seconds since the Unix epoch. | [optional]
**asset_state** | **string** | The state of the asset. | [optional]
**asset_duration** | **double** | The duration of the asset in seconds. | [optional]
**delivered_seconds** | **double** | Total number of delivered seconds during this time window. | [optional]
**delivered_seconds_by_resolution** | [**\MuxPhp\Models\DeliveryReportDeliveredSecondsByResolution**](DeliveryReportDeliveredSecondsByResolution.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
