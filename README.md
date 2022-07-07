![Mux PHP Banner](https://banner.mux.dev/?image=php)

<p align="center">
  <a href="https://packagist.org/packages/muxinc/mux-php"><img src="https://img.shields.io/packagist/v/muxinc/mux-php" title="Packagist" /></a>
  <a href="https://github.com/muxinc/mux-php/workflows/Integration%20Test"><img src="https://github.com/muxinc/mux-php/workflows/Integration%20Test/badge.svg" title="CI" /></a>
</p>
<p align="center">
  <a href="https://packagist.org/packages/muxinc/mux-php">Packagist</a> |
  <a href="https://docs.mux.com">Mux Docs</a> |
  <a href="https://docs.mux.com/api-reference">Mux API Reference </a>
</p>

# Mux PHP

Official Mux API wrapper for PHP projects, supporting both Mux Data and Mux Video.

[Mux Video](https://mux.com/video) is an API-first platform, powered by data and designed by video experts to make beautiful video possible for every development team.

[Mux Data](https://mux.com/data) is a platform for monitoring your video streaming performance with just a few lines of code. Get in-depth quality of service analytics on web, mobile, and OTT devices.

Not familiar with Mux? Check out https://mux.com/ for more information.

## Requirements

PHP 7.1 or higher.
Dependencies are managed using composer.

## Installation

We publish Mux PHP to [Packagist](https://packagist.org/packages/muxinc/mux-php). You should depend on Mux PHP by adding us to your composer.json:

```json
    {
        "require": {
            "muxinc/mux-php": ">=0.0.1"
        }
    }
```
Then install your dependencies:

```sh
    composer install
```

And then autoload in your code:

```php
    require_once 'vendor/autoload.php';
```

### Manual Installation

**PLEASE NOTE:** We don't really recommend manual installation and our ability to help if this route doesn't work is minimal. We include this mostly for purposes of completeness.

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MuxPhp/vendor/autoload.php');
```

## Getting Started

### Overview

Mux PHP is a code generated lightweight wrapper around the Mux REST API and reflects them accurately. This has a few consequences you should watch out for:

1) For almost all API responses, the object you're looking for will be in the `data` field on the API response object, as in the example below. This is because we designed our APIs with similar concepts to the [JSON:API](https://jsonapi.org/) standard. This means we'll be able to return more metadata from our API calls (such as related entities) without the need to make breaking changes to our APIs. We've decided not to hide that in this library.

2) We don't use a lot of object orientation. For example API calls that happen on a single asset don't exist in the asset class, but are API calls in the AssetsApi which require an asset ID.

### Authentication

To use the Mux API, you'll need an access token and a secret. [Details on obtaining these can be found here in the Mux documentation.](https://docs.mux.com/docs#section-1-get-an-api-access-token)

Its up to you to manage your token and secret. In our examples, we read them from `MUX_TOKEN_ID` and `MUX_TOKEN_SECRET` in your environment.

### Example Usage

Below is a quick example of using mux-php to ingest a new Video in your Mux account.

```php
    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $assetsApi = new MuxPhp\Api\AssetsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // Create Asset Request
    $input = new MuxPhp\Models\InputSettings(["url" => "https://storage.googleapis.com/muxdemofiles/mux-video-intro.mp4"]);
    $createAssetRequest = new MuxPhp\Models\CreateAssetRequest(["input" => $input, "playback_policy" => [MuxPhp\Models\PlaybackPolicy::PUBLIC_PLAYBACK_POLICY] ]);

    // Ingest
    $result = $assetsApi->createAsset($createAssetRequest);

    // Print URL
    print "Playback URL: https://stream.mux.com/" . $result->getData()->getPlaybackIds()[0]->getId() . ".m3u8\n"
```

Be sure to also checkout the [examples directory](examples/):
* [Create an Asset, wait for it to become availiable, and print its playback URL](examples/video/ingest.php)

There's also example usage of every API call (also used for testing):
* [Video](examples/video/)
  * [Assets](examples/video/exercise-assets.php)
  * [Live Streams](examples/video/exercise-live-streams.php)
  * [Signing Keys](examples/video/exercise-signing-keys.php)
  * [Uploads](examples/video/exercise-uploads.php)
* [Data](examples/data/)
  * [Errors](examples/data/exercise-errors.php)
  * [Exports](examples/data/exercise-exports.php)
  * [Filters](examples/data/exercise-filters.php)
  * [Metrics](examples/data/exercise-metrics.php)
  * [Video Views](examples/data/exercise-video-views.php)

## Documentation

[Be sure to check out the documentation in the `docs` directory.](docs/)

## Issues

If you run into problems, [please raise a GitHub issue](https://github.com/muxinc/mux-php/issues). We'll take a look as soon as possible.

## Contributing

We now accept PRs against this package! Please make your modifications to the templates in `gen/templates`, not the code itself, or [please open an issue.](https://github.com/muxinc/mux-ruby/issues)

## License

[MIT License.](LICENSE) Copyright 2019 Mux, Inc.

## API Endpoints

All URIs are relative to *https://api.mux.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssetsApi* | [**createAsset**](docs/Api/AssetsApi.md#createasset) | **POST** /video/v1/assets | Create an asset
*AssetsApi* | [**createAssetPlaybackId**](docs/Api/AssetsApi.md#createassetplaybackid) | **POST** /video/v1/assets/{ASSET_ID}/playback-ids | Create a playback ID
*AssetsApi* | [**createAssetTrack**](docs/Api/AssetsApi.md#createassettrack) | **POST** /video/v1/assets/{ASSET_ID}/tracks | Create an asset track
*AssetsApi* | [**deleteAsset**](docs/Api/AssetsApi.md#deleteasset) | **DELETE** /video/v1/assets/{ASSET_ID} | Delete an asset
*AssetsApi* | [**deleteAssetPlaybackId**](docs/Api/AssetsApi.md#deleteassetplaybackid) | **DELETE** /video/v1/assets/{ASSET_ID}/playback-ids/{PLAYBACK_ID} | Delete a playback ID
*AssetsApi* | [**deleteAssetTrack**](docs/Api/AssetsApi.md#deleteassettrack) | **DELETE** /video/v1/assets/{ASSET_ID}/tracks/{TRACK_ID} | Delete an asset track
*AssetsApi* | [**getAsset**](docs/Api/AssetsApi.md#getasset) | **GET** /video/v1/assets/{ASSET_ID} | Retrieve an asset
*AssetsApi* | [**getAssetInputInfo**](docs/Api/AssetsApi.md#getassetinputinfo) | **GET** /video/v1/assets/{ASSET_ID}/input-info | Retrieve asset input info
*AssetsApi* | [**getAssetPlaybackId**](docs/Api/AssetsApi.md#getassetplaybackid) | **GET** /video/v1/assets/{ASSET_ID}/playback-ids/{PLAYBACK_ID} | Retrieve a playback ID
*AssetsApi* | [**listAssets**](docs/Api/AssetsApi.md#listassets) | **GET** /video/v1/assets | List assets
*AssetsApi* | [**updateAsset**](docs/Api/AssetsApi.md#updateasset) | **PATCH** /video/v1/assets/{ASSET_ID} | Update an Asset
*AssetsApi* | [**updateAssetMasterAccess**](docs/Api/AssetsApi.md#updateassetmasteraccess) | **PUT** /video/v1/assets/{ASSET_ID}/master-access | Update master access
*AssetsApi* | [**updateAssetMp4Support**](docs/Api/AssetsApi.md#updateassetmp4support) | **PUT** /video/v1/assets/{ASSET_ID}/mp4-support | Update MP4 support
*DeliveryUsageApi* | [**listDeliveryUsage**](docs/Api/DeliveryUsageApi.md#listdeliveryusage) | **GET** /video/v1/delivery-usage | List Usage
*DimensionsApi* | [**listDimensionValues**](docs/Api/DimensionsApi.md#listdimensionvalues) | **GET** /data/v1/dimensions/{DIMENSION_ID} | Lists the values for a specific dimension
*DimensionsApi* | [**listDimensions**](docs/Api/DimensionsApi.md#listdimensions) | **GET** /data/v1/dimensions | List Dimensions
*DirectUploadsApi* | [**cancelDirectUpload**](docs/Api/DirectUploadsApi.md#canceldirectupload) | **PUT** /video/v1/uploads/{UPLOAD_ID}/cancel | Cancel a direct upload
*DirectUploadsApi* | [**createDirectUpload**](docs/Api/DirectUploadsApi.md#createdirectupload) | **POST** /video/v1/uploads | Create a new direct upload URL
*DirectUploadsApi* | [**getDirectUpload**](docs/Api/DirectUploadsApi.md#getdirectupload) | **GET** /video/v1/uploads/{UPLOAD_ID} | Retrieve a single direct upload&#39;s info
*DirectUploadsApi* | [**listDirectUploads**](docs/Api/DirectUploadsApi.md#listdirectuploads) | **GET** /video/v1/uploads | List direct uploads
*ErrorsApi* | [**listErrors**](docs/Api/ErrorsApi.md#listerrors) | **GET** /data/v1/errors | List Errors
*ExportsApi* | [**listExports**](docs/Api/ExportsApi.md#listexports) | **GET** /data/v1/exports | List property video view export links
*ExportsApi* | [**listExportsViews**](docs/Api/ExportsApi.md#listexportsviews) | **GET** /data/v1/exports/views | List available property view exports
*FiltersApi* | [**listFilterValues**](docs/Api/FiltersApi.md#listfiltervalues) | **GET** /data/v1/filters/{FILTER_ID} | Lists values for a specific filter
*FiltersApi* | [**listFilters**](docs/Api/FiltersApi.md#listfilters) | **GET** /data/v1/filters | List Filters
*IncidentsApi* | [**getIncident**](docs/Api/IncidentsApi.md#getincident) | **GET** /data/v1/incidents/{INCIDENT_ID} | Get an Incident
*IncidentsApi* | [**listIncidents**](docs/Api/IncidentsApi.md#listincidents) | **GET** /data/v1/incidents | List Incidents
*IncidentsApi* | [**listRelatedIncidents**](docs/Api/IncidentsApi.md#listrelatedincidents) | **GET** /data/v1/incidents/{INCIDENT_ID}/related | List Related Incidents
*LiveStreamsApi* | [**createLiveStream**](docs/Api/LiveStreamsApi.md#createlivestream) | **POST** /video/v1/live-streams | Create a live stream
*LiveStreamsApi* | [**createLiveStreamPlaybackId**](docs/Api/LiveStreamsApi.md#createlivestreamplaybackid) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids | Create a live stream playback ID
*LiveStreamsApi* | [**createLiveStreamSimulcastTarget**](docs/Api/LiveStreamsApi.md#createlivestreamsimulcasttarget) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets | Create a live stream simulcast target
*LiveStreamsApi* | [**deleteLiveStream**](docs/Api/LiveStreamsApi.md#deletelivestream) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID} | Delete a live stream
*LiveStreamsApi* | [**deleteLiveStreamPlaybackId**](docs/Api/LiveStreamsApi.md#deletelivestreamplaybackid) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids/{PLAYBACK_ID} | Delete a live stream playback ID
*LiveStreamsApi* | [**deleteLiveStreamSimulcastTarget**](docs/Api/LiveStreamsApi.md#deletelivestreamsimulcasttarget) | **DELETE** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets/{SIMULCAST_TARGET_ID} | Delete a Live Stream Simulcast Target
*LiveStreamsApi* | [**disableLiveStream**](docs/Api/LiveStreamsApi.md#disablelivestream) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/disable | Disable a live stream
*LiveStreamsApi* | [**enableLiveStream**](docs/Api/LiveStreamsApi.md#enablelivestream) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/enable | Enable a live stream
*LiveStreamsApi* | [**getLiveStream**](docs/Api/LiveStreamsApi.md#getlivestream) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID} | Retrieve a live stream
*LiveStreamsApi* | [**getLiveStreamPlaybackId**](docs/Api/LiveStreamsApi.md#getlivestreamplaybackid) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID}/playback-ids/{PLAYBACK_ID} | Retrieve a live stream playback ID
*LiveStreamsApi* | [**getLiveStreamSimulcastTarget**](docs/Api/LiveStreamsApi.md#getlivestreamsimulcasttarget) | **GET** /video/v1/live-streams/{LIVE_STREAM_ID}/simulcast-targets/{SIMULCAST_TARGET_ID} | Retrieve a Live Stream Simulcast Target
*LiveStreamsApi* | [**listLiveStreams**](docs/Api/LiveStreamsApi.md#listlivestreams) | **GET** /video/v1/live-streams | List live streams
*LiveStreamsApi* | [**resetStreamKey**](docs/Api/LiveStreamsApi.md#resetstreamkey) | **POST** /video/v1/live-streams/{LIVE_STREAM_ID}/reset-stream-key | Reset a live stream&#39;s stream key
*LiveStreamsApi* | [**signalLiveStreamComplete**](docs/Api/LiveStreamsApi.md#signallivestreamcomplete) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/complete | Signal a live stream is finished
*LiveStreamsApi* | [**updateLiveStream**](docs/Api/LiveStreamsApi.md#updatelivestream) | **PATCH** /video/v1/live-streams/{LIVE_STREAM_ID} | Update a live stream
*LiveStreamsApi* | [**updateLiveStreamEmbeddedSubtitles**](docs/Api/LiveStreamsApi.md#updatelivestreamembeddedsubtitles) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/embedded-subtitles | Update a live stream&#39;s embedded subtitles
*LiveStreamsApi* | [**updateLiveStreamGeneratedSubtitles**](docs/Api/LiveStreamsApi.md#updatelivestreamgeneratedsubtitles) | **PUT** /video/v1/live-streams/{LIVE_STREAM_ID}/generated-subtitles | Update a live stream&#39;s generated subtitles
*MetricsApi* | [**getMetricTimeseriesData**](docs/Api/MetricsApi.md#getmetrictimeseriesdata) | **GET** /data/v1/metrics/{METRIC_ID}/timeseries | Get metric timeseries data
*MetricsApi* | [**getOverallValues**](docs/Api/MetricsApi.md#getoverallvalues) | **GET** /data/v1/metrics/{METRIC_ID}/overall | Get Overall values
*MetricsApi* | [**listAllMetricValues**](docs/Api/MetricsApi.md#listallmetricvalues) | **GET** /data/v1/metrics/comparison | List all metric values
*MetricsApi* | [**listBreakdownValues**](docs/Api/MetricsApi.md#listbreakdownvalues) | **GET** /data/v1/metrics/{METRIC_ID}/breakdown | List breakdown values
*MetricsApi* | [**listInsights**](docs/Api/MetricsApi.md#listinsights) | **GET** /data/v1/metrics/{METRIC_ID}/insights | List Insights
*PlaybackIDApi* | [**getAssetOrLivestreamId**](docs/Api/PlaybackIDApi.md#getassetorlivestreamid) | **GET** /video/v1/playback-ids/{PLAYBACK_ID} | Retrieve an Asset or Live Stream ID
*PlaybackRestrictionsApi* | [**createPlaybackRestriction**](docs/Api/PlaybackRestrictionsApi.md#createplaybackrestriction) | **POST** /video/v1/playback-restrictions | Create a Playback Restriction
*PlaybackRestrictionsApi* | [**deletePlaybackRestriction**](docs/Api/PlaybackRestrictionsApi.md#deleteplaybackrestriction) | **DELETE** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID} | Delete a Playback Restriction
*PlaybackRestrictionsApi* | [**getPlaybackRestriction**](docs/Api/PlaybackRestrictionsApi.md#getplaybackrestriction) | **GET** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID} | Retrieve a Playback Restriction
*PlaybackRestrictionsApi* | [**listPlaybackRestrictions**](docs/Api/PlaybackRestrictionsApi.md#listplaybackrestrictions) | **GET** /video/v1/playback-restrictions | List Playback Restrictions
*PlaybackRestrictionsApi* | [**updateReferrerDomainRestriction**](docs/Api/PlaybackRestrictionsApi.md#updatereferrerdomainrestriction) | **PUT** /video/v1/playback-restrictions/{PLAYBACK_RESTRICTION_ID}/referrer | Update the Referrer Playback Restriction
*RealTimeApi* | [**getRealtimeBreakdown**](docs/Api/RealTimeApi.md#getrealtimebreakdown) | **GET** /data/v1/realtime/metrics/{REALTIME_METRIC_ID}/breakdown | Get Real-Time Breakdown
*RealTimeApi* | [**getRealtimeHistogramTimeseries**](docs/Api/RealTimeApi.md#getrealtimehistogramtimeseries) | **GET** /data/v1/realtime/metrics/{REALTIME_HISTOGRAM_METRIC_ID}/histogram-timeseries | Get Real-Time Histogram Timeseries
*RealTimeApi* | [**getRealtimeTimeseries**](docs/Api/RealTimeApi.md#getrealtimetimeseries) | **GET** /data/v1/realtime/metrics/{REALTIME_METRIC_ID}/timeseries | Get Real-Time Timeseries
*RealTimeApi* | [**listRealtimeDimensions**](docs/Api/RealTimeApi.md#listrealtimedimensions) | **GET** /data/v1/realtime/dimensions | List Real-Time Dimensions
*RealTimeApi* | [**listRealtimeMetrics**](docs/Api/RealTimeApi.md#listrealtimemetrics) | **GET** /data/v1/realtime/metrics | List Real-Time Metrics
*SpacesApi* | [**createSpace**](docs/Api/SpacesApi.md#createspace) | **POST** /video/v1/spaces | Create a space
*SpacesApi* | [**createSpaceBroadcast**](docs/Api/SpacesApi.md#createspacebroadcast) | **POST** /video/v1/spaces/{SPACE_ID}/broadcasts | Create a space broadcast
*SpacesApi* | [**deleteSpace**](docs/Api/SpacesApi.md#deletespace) | **DELETE** /video/v1/spaces/{SPACE_ID} | Delete a space
*SpacesApi* | [**deleteSpaceBroadcast**](docs/Api/SpacesApi.md#deletespacebroadcast) | **DELETE** /video/v1/spaces/{SPACE_ID}/broadcasts/{BROADCAST_ID} | Delete a space broadcast
*SpacesApi* | [**getSpace**](docs/Api/SpacesApi.md#getspace) | **GET** /video/v1/spaces/{SPACE_ID} | Retrieve a space
*SpacesApi* | [**getSpaceBroadcast**](docs/Api/SpacesApi.md#getspacebroadcast) | **GET** /video/v1/spaces/{SPACE_ID}/broadcasts/{BROADCAST_ID} | Retrieve space broadcast
*SpacesApi* | [**listSpaces**](docs/Api/SpacesApi.md#listspaces) | **GET** /video/v1/spaces | List spaces
*SpacesApi* | [**startSpaceBroadcast**](docs/Api/SpacesApi.md#startspacebroadcast) | **POST** /video/v1/spaces/{SPACE_ID}/broadcasts/{BROADCAST_ID}/start | Start a space broadcast
*SpacesApi* | [**stopSpaceBroadcast**](docs/Api/SpacesApi.md#stopspacebroadcast) | **POST** /video/v1/spaces/{SPACE_ID}/broadcasts/{BROADCAST_ID}/stop | Stop a space broadcast
*TranscriptionVocabulariesApi* | [**createTranscriptionVocabulary**](docs/Api/TranscriptionVocabulariesApi.md#createtranscriptionvocabulary) | **POST** /video/v1/transcription-vocabularies | Create a Transcription Vocabulary
*TranscriptionVocabulariesApi* | [**deleteTranscriptionVocabulary**](docs/Api/TranscriptionVocabulariesApi.md#deletetranscriptionvocabulary) | **DELETE** /video/v1/transcription-vocabularies/{TRANSCRIPTION_VOCABULARY_ID} | Delete a Transcription Vocabulary
*TranscriptionVocabulariesApi* | [**getTranscriptionVocabulary**](docs/Api/TranscriptionVocabulariesApi.md#gettranscriptionvocabulary) | **GET** /video/v1/transcription-vocabularies/{TRANSCRIPTION_VOCABULARY_ID} | Retrieve a Transcription Vocabulary
*TranscriptionVocabulariesApi* | [**listTranscriptionVocabularies**](docs/Api/TranscriptionVocabulariesApi.md#listtranscriptionvocabularies) | **GET** /video/v1/transcription-vocabularies | List Transcription Vocabularies
*TranscriptionVocabulariesApi* | [**updateTranscriptionVocabulary**](docs/Api/TranscriptionVocabulariesApi.md#updatetranscriptionvocabulary) | **PUT** /video/v1/transcription-vocabularies/{TRANSCRIPTION_VOCABULARY_ID} | Update a Transcription Vocabulary
*URLSigningKeysApi* | [**createUrlSigningKey**](docs/Api/URLSigningKeysApi.md#createurlsigningkey) | **POST** /video/v1/signing-keys | Create a URL signing key
*URLSigningKeysApi* | [**deleteUrlSigningKey**](docs/Api/URLSigningKeysApi.md#deleteurlsigningkey) | **DELETE** /video/v1/signing-keys/{SIGNING_KEY_ID} | Delete a URL signing key
*URLSigningKeysApi* | [**getUrlSigningKey**](docs/Api/URLSigningKeysApi.md#geturlsigningkey) | **GET** /video/v1/signing-keys/{SIGNING_KEY_ID} | Retrieve a URL signing key
*URLSigningKeysApi* | [**listUrlSigningKeys**](docs/Api/URLSigningKeysApi.md#listurlsigningkeys) | **GET** /video/v1/signing-keys | List URL signing keys
*VideoViewsApi* | [**getVideoView**](docs/Api/VideoViewsApi.md#getvideoview) | **GET** /data/v1/video-views/{VIDEO_VIEW_ID} | Get a Video View
*VideoViewsApi* | [**listVideoViews**](docs/Api/VideoViewsApi.md#listvideoviews) | **GET** /data/v1/video-views | List Video Views

## Models

- [AbridgedVideoView](docs/Model/AbridgedVideoView.md)
- [Asset](docs/Model/Asset.md)
- [AssetErrors](docs/Model/AssetErrors.md)
- [AssetMaster](docs/Model/AssetMaster.md)
- [AssetNonStandardInputReasons](docs/Model/AssetNonStandardInputReasons.md)
- [AssetRecordingTimes](docs/Model/AssetRecordingTimes.md)
- [AssetResponse](docs/Model/AssetResponse.md)
- [AssetStaticRenditions](docs/Model/AssetStaticRenditions.md)
- [AssetStaticRenditionsFiles](docs/Model/AssetStaticRenditionsFiles.md)
- [BreakdownValue](docs/Model/BreakdownValue.md)
- [Broadcast](docs/Model/Broadcast.md)
- [BroadcastLayout](docs/Model/BroadcastLayout.md)
- [BroadcastResolution](docs/Model/BroadcastResolution.md)
- [BroadcastResponse](docs/Model/BroadcastResponse.md)
- [BroadcastStatus](docs/Model/BroadcastStatus.md)
- [CreateAssetRequest](docs/Model/CreateAssetRequest.md)
- [CreateBroadcastRequest](docs/Model/CreateBroadcastRequest.md)
- [CreateLiveStreamRequest](docs/Model/CreateLiveStreamRequest.md)
- [CreatePlaybackIDRequest](docs/Model/CreatePlaybackIDRequest.md)
- [CreatePlaybackIDResponse](docs/Model/CreatePlaybackIDResponse.md)
- [CreatePlaybackRestrictionRequest](docs/Model/CreatePlaybackRestrictionRequest.md)
- [CreateSimulcastTargetRequest](docs/Model/CreateSimulcastTargetRequest.md)
- [CreateSpaceRequest](docs/Model/CreateSpaceRequest.md)
- [CreateTrackRequest](docs/Model/CreateTrackRequest.md)
- [CreateTrackResponse](docs/Model/CreateTrackResponse.md)
- [CreateTranscriptionVocabularyRequest](docs/Model/CreateTranscriptionVocabularyRequest.md)
- [CreateUploadRequest](docs/Model/CreateUploadRequest.md)
- [DeliveryReport](docs/Model/DeliveryReport.md)
- [DimensionValue](docs/Model/DimensionValue.md)
- [DisableLiveStreamResponse](docs/Model/DisableLiveStreamResponse.md)
- [EnableLiveStreamResponse](docs/Model/EnableLiveStreamResponse.md)
- [Error](docs/Model/Error.md)
- [ExportDate](docs/Model/ExportDate.md)
- [ExportFile](docs/Model/ExportFile.md)
- [FilterValue](docs/Model/FilterValue.md)
- [GetAssetInputInfoResponse](docs/Model/GetAssetInputInfoResponse.md)
- [GetAssetOrLiveStreamIdResponse](docs/Model/GetAssetOrLiveStreamIdResponse.md)
- [GetAssetOrLiveStreamIdResponseData](docs/Model/GetAssetOrLiveStreamIdResponseData.md)
- [GetAssetOrLiveStreamIdResponseDataObject](docs/Model/GetAssetOrLiveStreamIdResponseDataObject.md)
- [GetAssetPlaybackIDResponse](docs/Model/GetAssetPlaybackIDResponse.md)
- [GetLiveStreamPlaybackIDResponse](docs/Model/GetLiveStreamPlaybackIDResponse.md)
- [GetMetricTimeseriesDataResponse](docs/Model/GetMetricTimeseriesDataResponse.md)
- [GetOverallValuesResponse](docs/Model/GetOverallValuesResponse.md)
- [GetRealTimeBreakdownResponse](docs/Model/GetRealTimeBreakdownResponse.md)
- [GetRealTimeHistogramTimeseriesResponse](docs/Model/GetRealTimeHistogramTimeseriesResponse.md)
- [GetRealTimeHistogramTimeseriesResponseMeta](docs/Model/GetRealTimeHistogramTimeseriesResponseMeta.md)
- [GetRealTimeTimeseriesResponse](docs/Model/GetRealTimeTimeseriesResponse.md)
- [Incident](docs/Model/Incident.md)
- [IncidentBreakdown](docs/Model/IncidentBreakdown.md)
- [IncidentNotification](docs/Model/IncidentNotification.md)
- [IncidentNotificationRule](docs/Model/IncidentNotificationRule.md)
- [IncidentResponse](docs/Model/IncidentResponse.md)
- [InputFile](docs/Model/InputFile.md)
- [InputInfo](docs/Model/InputInfo.md)
- [InputSettings](docs/Model/InputSettings.md)
- [InputSettingsOverlaySettings](docs/Model/InputSettingsOverlaySettings.md)
- [InputTrack](docs/Model/InputTrack.md)
- [Insight](docs/Model/Insight.md)
- [ListAllMetricValuesResponse](docs/Model/ListAllMetricValuesResponse.md)
- [ListAssetsResponse](docs/Model/ListAssetsResponse.md)
- [ListBreakdownValuesResponse](docs/Model/ListBreakdownValuesResponse.md)
- [ListDeliveryUsageResponse](docs/Model/ListDeliveryUsageResponse.md)
- [ListDimensionValuesResponse](docs/Model/ListDimensionValuesResponse.md)
- [ListDimensionsResponse](docs/Model/ListDimensionsResponse.md)
- [ListErrorsResponse](docs/Model/ListErrorsResponse.md)
- [ListExportsResponse](docs/Model/ListExportsResponse.md)
- [ListFilterValuesResponse](docs/Model/ListFilterValuesResponse.md)
- [ListFiltersResponse](docs/Model/ListFiltersResponse.md)
- [ListFiltersResponseData](docs/Model/ListFiltersResponseData.md)
- [ListIncidentsResponse](docs/Model/ListIncidentsResponse.md)
- [ListInsightsResponse](docs/Model/ListInsightsResponse.md)
- [ListLiveStreamsResponse](docs/Model/ListLiveStreamsResponse.md)
- [ListPlaybackRestrictionsResponse](docs/Model/ListPlaybackRestrictionsResponse.md)
- [ListRealTimeDimensionsResponse](docs/Model/ListRealTimeDimensionsResponse.md)
- [ListRealTimeDimensionsResponseData](docs/Model/ListRealTimeDimensionsResponseData.md)
- [ListRealTimeMetricsResponse](docs/Model/ListRealTimeMetricsResponse.md)
- [ListRelatedIncidentsResponse](docs/Model/ListRelatedIncidentsResponse.md)
- [ListSigningKeysResponse](docs/Model/ListSigningKeysResponse.md)
- [ListSpacesResponse](docs/Model/ListSpacesResponse.md)
- [ListTranscriptionVocabulariesResponse](docs/Model/ListTranscriptionVocabulariesResponse.md)
- [ListUploadsResponse](docs/Model/ListUploadsResponse.md)
- [ListVideoViewExportsResponse](docs/Model/ListVideoViewExportsResponse.md)
- [ListVideoViewsResponse](docs/Model/ListVideoViewsResponse.md)
- [LiveStream](docs/Model/LiveStream.md)
- [LiveStreamEmbeddedSubtitleSettings](docs/Model/LiveStreamEmbeddedSubtitleSettings.md)
- [LiveStreamGeneratedSubtitleSettings](docs/Model/LiveStreamGeneratedSubtitleSettings.md)
- [LiveStreamResponse](docs/Model/LiveStreamResponse.md)
- [LiveStreamStatus](docs/Model/LiveStreamStatus.md)
- [Metric](docs/Model/Metric.md)
- [NotificationRule](docs/Model/NotificationRule.md)
- [OverallValues](docs/Model/OverallValues.md)
- [PlaybackID](docs/Model/PlaybackID.md)
- [PlaybackPolicy](docs/Model/PlaybackPolicy.md)
- [PlaybackRestriction](docs/Model/PlaybackRestriction.md)
- [PlaybackRestrictionResponse](docs/Model/PlaybackRestrictionResponse.md)
- [RealTimeBreakdownValue](docs/Model/RealTimeBreakdownValue.md)
- [RealTimeHistogramTimeseriesBucket](docs/Model/RealTimeHistogramTimeseriesBucket.md)
- [RealTimeHistogramTimeseriesBucketValues](docs/Model/RealTimeHistogramTimeseriesBucketValues.md)
- [RealTimeHistogramTimeseriesDatapoint](docs/Model/RealTimeHistogramTimeseriesDatapoint.md)
- [RealTimeTimeseriesDatapoint](docs/Model/RealTimeTimeseriesDatapoint.md)
- [ReferrerDomainRestriction](docs/Model/ReferrerDomainRestriction.md)
- [Score](docs/Model/Score.md)
- [SignalLiveStreamCompleteResponse](docs/Model/SignalLiveStreamCompleteResponse.md)
- [SigningKey](docs/Model/SigningKey.md)
- [SigningKeyResponse](docs/Model/SigningKeyResponse.md)
- [SimulcastTarget](docs/Model/SimulcastTarget.md)
- [SimulcastTargetResponse](docs/Model/SimulcastTargetResponse.md)
- [Space](docs/Model/Space.md)
- [SpaceResponse](docs/Model/SpaceResponse.md)
- [SpaceStatus](docs/Model/SpaceStatus.md)
- [SpaceType](docs/Model/SpaceType.md)
- [StartSpaceBroadcastResponse](docs/Model/StartSpaceBroadcastResponse.md)
- [StopSpaceBroadcastResponse](docs/Model/StopSpaceBroadcastResponse.md)
- [Track](docs/Model/Track.md)
- [TranscriptionVocabulary](docs/Model/TranscriptionVocabulary.md)
- [TranscriptionVocabularyResponse](docs/Model/TranscriptionVocabularyResponse.md)
- [UpdateAssetMP4SupportRequest](docs/Model/UpdateAssetMP4SupportRequest.md)
- [UpdateAssetMasterAccessRequest](docs/Model/UpdateAssetMasterAccessRequest.md)
- [UpdateAssetRequest](docs/Model/UpdateAssetRequest.md)
- [UpdateLiveStreamEmbeddedSubtitlesRequest](docs/Model/UpdateLiveStreamEmbeddedSubtitlesRequest.md)
- [UpdateLiveStreamGeneratedSubtitlesRequest](docs/Model/UpdateLiveStreamGeneratedSubtitlesRequest.md)
- [UpdateLiveStreamRequest](docs/Model/UpdateLiveStreamRequest.md)
- [UpdateReferrerDomainRestrictionRequest](docs/Model/UpdateReferrerDomainRestrictionRequest.md)
- [UpdateTranscriptionVocabularyRequest](docs/Model/UpdateTranscriptionVocabularyRequest.md)
- [Upload](docs/Model/Upload.md)
- [UploadError](docs/Model/UploadError.md)
- [UploadResponse](docs/Model/UploadResponse.md)
- [VideoView](docs/Model/VideoView.md)
- [VideoViewEvent](docs/Model/VideoViewEvent.md)
- [VideoViewResponse](docs/Model/VideoViewResponse.md)

## Authorization

### accessToken

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

devex@mux.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Package version: `3.6.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
