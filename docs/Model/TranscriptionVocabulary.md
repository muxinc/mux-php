# # TranscriptionVocabulary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the Transcription Vocabulary | [optional]
**name** | **string** | The user-supplied name of the Transcription Vocabulary. | [optional]
**phrases** | **string[]** | Phrases, individual words, or proper names to include in the Transcription Vocabulary. When the Transcription Vocabulary is attached to a live stream&#39;s &#x60;generated_subtitles&#x60; configuration, the probability of successful speech recognition for these words or phrases is boosted. | [optional]
**passthrough** | **string** | Arbitrary user-supplied metadata set for the Transcription Vocabulary. Max 255 characters. | [optional]
**created_at** | **string** | Time the Transcription Vocabulary was created, defined as a Unix timestamp (seconds since epoch). | [optional]
**updated_at** | **string** | Time the Transcription Vocabulary was updated, defined as a Unix timestamp (seconds since epoch). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
