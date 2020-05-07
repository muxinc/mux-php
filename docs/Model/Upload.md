# # Upload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**timeout** | **int** | Max time in seconds for the signed upload URL to be valid. If a successful upload has not occurred before the timeout limit, the direct upload is marked &#x60;timed_out&#x60; | [optional] [default to 3600]
**status** | **string** |  | [optional] 
**new_asset_settings** | [**\MuxPhp\Models\Asset**](Asset.md) |  | [optional] 
**asset_id** | **string** | Only set once the upload is in the &#x60;asset_created&#x60; state. | [optional] 
**error** | [**\MuxPhp\Models\UploadError**](UploadError.md) |  | [optional] 
**cors_origin** | **string** | If the upload URL will be used in a browser, you must specify the origin in order for the signed URL to have the correct CORS headers. | [optional] 
**url** | **string** | The URL to upload the associated source media to. | [optional] 
**test** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


