# MuxPhp\TranscriptionVocabulariesApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTranscriptionVocabulary()**](TranscriptionVocabulariesApi.md#createTranscriptionVocabulary) | **POST** /video/v1/transcription-vocabularies | Create a Transcription Vocabulary |
| [**deleteTranscriptionVocabulary()**](TranscriptionVocabulariesApi.md#deleteTranscriptionVocabulary) | **DELETE** /video/v1/transcription-vocabularies/{TRANSCRIPTION_VOCABULARY_ID} | Delete a Transcription Vocabulary |
| [**getTranscriptionVocabulary()**](TranscriptionVocabulariesApi.md#getTranscriptionVocabulary) | **GET** /video/v1/transcription-vocabularies/{TRANSCRIPTION_VOCABULARY_ID} | Retrieve a Transcription Vocabulary |
| [**listTranscriptionVocabularies()**](TranscriptionVocabulariesApi.md#listTranscriptionVocabularies) | **GET** /video/v1/transcription-vocabularies | List Transcription Vocabularies |
| [**updateTranscriptionVocabulary()**](TranscriptionVocabulariesApi.md#updateTranscriptionVocabulary) | **PUT** /video/v1/transcription-vocabularies/{TRANSCRIPTION_VOCABULARY_ID} | Update a Transcription Vocabulary |


## `createTranscriptionVocabulary()`

```php
createTranscriptionVocabulary($create_transcription_vocabulary_request): \MuxPhp\Models\TranscriptionVocabularyResponse
```

Create a Transcription Vocabulary

Create a new Transcription Vocabulary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\TranscriptionVocabulariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

// This API method wants a \MuxPhp\Models\CreateTranscriptionVocabularyRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\CreateTranscriptionVocabularyRequest" directly.
$create_transcription_vocabulary_request = json_decode('{"name":"Mux API Vocabulary","phrases":["Mux","Live Stream","Playback ID","video encoding"]}',true); // \MuxPhp\Models\CreateTranscriptionVocabularyRequest

try {
    $result = $apiInstance->createTranscriptionVocabulary($create_transcription_vocabulary_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionVocabulariesApi->createTranscriptionVocabulary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_transcription_vocabulary_request** | [**\MuxPhp\Models\CreateTranscriptionVocabularyRequest**](../Model/CreateTranscriptionVocabularyRequest.md)|  | |

### Return type

[**\MuxPhp\Models\TranscriptionVocabularyResponse**](../Model/TranscriptionVocabularyResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTranscriptionVocabulary()`

```php
deleteTranscriptionVocabulary($transcription_vocabulary_id)
```

Delete a Transcription Vocabulary

Deletes a Transcription Vocabulary. The Transcription Vocabulary's ID will be disassociated from any live streams using it. Transcription Vocabularies can be deleted while associated live streams are active. However, the words and phrases in the deleted Transcription Vocabulary will remain attached to those streams while they are active.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\TranscriptionVocabulariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transcription_vocabulary_id = 'transcription_vocabulary_id_example'; // string | The ID of the Transcription Vocabulary.

try {
    $apiInstance->deleteTranscriptionVocabulary($transcription_vocabulary_id);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionVocabulariesApi->deleteTranscriptionVocabulary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transcription_vocabulary_id** | **string**| The ID of the Transcription Vocabulary. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranscriptionVocabulary()`

```php
getTranscriptionVocabulary($transcription_vocabulary_id): \MuxPhp\Models\TranscriptionVocabularyResponse
```

Retrieve a Transcription Vocabulary

Retrieves the details of a Transcription Vocabulary that has previously been created. Supply the unique Transcription Vocabulary ID and Mux will return the corresponding Transcription Vocabulary information. The same information is returned when creating a Transcription Vocabulary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\TranscriptionVocabulariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transcription_vocabulary_id = 'transcription_vocabulary_id_example'; // string | The ID of the Transcription Vocabulary.

try {
    $result = $apiInstance->getTranscriptionVocabulary($transcription_vocabulary_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionVocabulariesApi->getTranscriptionVocabulary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transcription_vocabulary_id** | **string**| The ID of the Transcription Vocabulary. | |

### Return type

[**\MuxPhp\Models\TranscriptionVocabularyResponse**](../Model/TranscriptionVocabularyResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTranscriptionVocabularies()`

```php
listTranscriptionVocabularies($limit, $page): \MuxPhp\Models\ListTranscriptionVocabulariesResponse
```

List Transcription Vocabularies

List all Transcription Vocabularies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\TranscriptionVocabulariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`

try {
    $result = $apiInstance->listTranscriptionVocabularies($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionVocabulariesApi->listTranscriptionVocabularies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 10] |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |

### Return type

[**\MuxPhp\Models\ListTranscriptionVocabulariesResponse**](../Model/ListTranscriptionVocabulariesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTranscriptionVocabulary()`

```php
updateTranscriptionVocabulary($transcription_vocabulary_id, $update_transcription_vocabulary_request): \MuxPhp\Models\TranscriptionVocabularyResponse
```

Update a Transcription Vocabulary

Updates the details of a previously-created Transcription Vocabulary. Updates to Transcription Vocabularies are allowed while associated live streams are active. However, updates will not be applied to those streams while they are active.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\TranscriptionVocabulariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transcription_vocabulary_id = 'transcription_vocabulary_id_example'; // string | The ID of the Transcription Vocabulary.

// This API method wants a \MuxPhp\Models\UpdateTranscriptionVocabularyRequest
// as the second parameter.  That being said, these API docs are 
// auto-generated from our OpenAPI specification, which 
// gives us the example parameter as a JSON string.  In this example,
// we'll use json_decode() to turn it into an associative array, which
// is compatible with the model.
//
// In your own code you should use an associative array, or
// use a "new \MuxPhp\Models\UpdateTranscriptionVocabularyRequest" directly.
$update_transcription_vocabulary_request = json_decode('{"name":"Mux API Vocabulary - Updated","phrases":["Mux","Live Stream","RTMP","Stream Key"]}',true); // \MuxPhp\Models\UpdateTranscriptionVocabularyRequest

try {
    $result = $apiInstance->updateTranscriptionVocabulary($transcription_vocabulary_id, $update_transcription_vocabulary_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionVocabulariesApi->updateTranscriptionVocabulary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transcription_vocabulary_id** | **string**| The ID of the Transcription Vocabulary. | |
| **update_transcription_vocabulary_request** | [**\MuxPhp\Models\UpdateTranscriptionVocabularyRequest**](../Model/UpdateTranscriptionVocabularyRequest.md)|  | |

### Return type

[**\MuxPhp\Models\TranscriptionVocabularyResponse**](../Model/TranscriptionVocabularyResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
