# # Upload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the Direct Upload. | [optional]
**timeout** | **int** | Max time in seconds for the signed upload URL to be valid. If a successful upload has not occurred before the timeout limit, the direct upload is marked &#x60;timed_out&#x60; | [optional] [default to 3600]
**status** | **string** |  | [optional]
**new_asset_settings** | [**\MuxPhp\Models\CreateAssetRequest**](CreateAssetRequest.md) |  | [optional]
**asset_id** | **string** | Only set once the upload is in the &#x60;asset_created&#x60; state. | [optional]
**error** | [**\MuxPhp\Models\UploadError**](UploadError.md) |  | [optional]
**cors_origin** | **string** | If the upload URL will be used in a browser, you must specify the origin in order for the signed URL to have the correct CORS headers. | [optional]
**url** | **string** | The URL to upload the associated source media to. | [optional]
**test** | **bool** | Indicates if this is a test Direct Upload, in which case the Asset that gets created will be a &#x60;test&#x60; Asset. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
