<?php
    require_once(__DIR__ . '/../assert.php');
    require_once 'vendor/autoload.php';

    // Exercises all direct upload operations.

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $uploadsApi = new MuxPhp\Api\DirectUploadsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== create-direct-upload ==========
    $subtitles = new MuxPhp\Models\AssetGeneratedSubtitleSettings(["language_code" => "en", "name" => "English (Generated)"]);
    $input = new MuxPhp\Models\InputSettings(["generated_subtitles" => [$subtitles]]);
    $createAssetRequest = new MuxPhp\Models\CreateAssetRequest(["input" => [$input], "playback_policy" => [MuxPhp\Models\PlaybackPolicy::_PUBLIC]]);
    $createUploadRequest = new MuxPhp\Models\CreateUploadRequest(["timeout" => 3600, "new_asset_settings" => $createAssetRequest, "cors_origin" => "philcluff.co.uk"]);
    $upload = $uploadsApi->createDirectUpload($createUploadRequest);
    assert($upload->getData()->getId() !== null);
    print("create-direct-upload OK ✅\n");

    // ========== list-direct-uploads ==========
    $uploads = $uploadsApi->listDirectUploads();
    assert($uploads->getData()[0]->getId() !== null);
    assert($uploads->getData()[0]->getId() === $upload->getData()->getId());
    print("list-direct-uploads OK ✅\n");

    // ========== get-direct-upload ==========
    $getUpload = $uploadsApi->getDirectUpload($upload->getData()->getId());
    assert($getUpload->getData()->getId() !== null);
    assert($getUpload->getData()->getId() === $upload->getData()->getId());
    print("get-direct-upload OK ✅\n"); 

    // ========== cancel-direct-upload ==========
    $cancelled = $uploadsApi->cancelDirectUpload($upload->getData()->getId());
    assert($cancelled->getData()->getId() !== null);
    assert($cancelled->getData()->getId() === $upload->getData()->getId());
    assert($cancelled->getData()->getStatus() === "cancelled");
    print("cancel-direct-upload OK ✅\n");