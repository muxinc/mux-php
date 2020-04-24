![Mux PHP Banner](https://banner.mux.dev/?image=php)

![](https://github.com/muxinc/mux-php/workflows/Integration%20Test/badge.svg)

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

Be sure to also checkout the [exmples directory](examples/):
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

If you run into problems, [please raise a GitHub issue,](https://github.com/muxinc/mux-php/issues) filling in the issue template. We'll take a look as soon as possible.

## Contributing

Please do not submit PRs against this package. It is generated from our OpenAPI definitions - [Please open an issue instead!](https://github.com/muxinc/mux-php/issues)

## License

[MIT License.](LICENSE) Copyright 2019 Mux, Inc.
