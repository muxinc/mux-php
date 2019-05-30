<?php

    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Exercises all asset operations:
    //   get-asset
    //   delete-asset
    //   create-asset
    //   list-assets
    //   get-asset-input-info
    //   create-asset-playback-id
    //   get-asset-playback-id
    //   delete-asset-playback-id
    //   update-asset-mp4-support

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $assetsApi = new MuxPhp\Api\AssetsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== create-asset ==========
    $input = new MuxPhp\Models\InputSettings(["url" => "https://storage.googleapis.com/muxdemofiles/mux-video-intro.mp4"]);
    $createAssetRequest = new MuxPhp\Models\CreateAssetRequest(["input" => $input]);
    $createAssetResponse = $assetsApi->createAsset($createAssetRequest);
    assert($createAssetResponse->getData()->getId() != null);
    print("create-asset OK ✅\n");

    // ========== list-assets ==========
    $listAssetsResult = $assetsApi->listAssets();
    assert($listAssetsResult->getData()[0]->getId() != null);
    assert($listAssetsResult->getData()[0]->getId() == $createAssetResponse->getData()->getId());
    print("list-assets OK ✅\n");
    
    // Wait for the asset to become ready...
    if ($createAssetResponse->getData()->getStatus() != 'ready') {
        print("    waiting for asset to become ready...\n");
        while(true){
            // ========== get-asset ==========
            $waitingAsset = $assetsApi->getAsset($createAssetResponse->getData()->getId());
            assert($waitingAsset->getData()->getId() != null);
            assert($waitingAsset->getData()->getId() == $createAssetResponse->getData()->getId());
            if ($waitingAsset->getData()->getStatus() != 'ready') {
                print("    still waiting for asset to become ready...\n");
                sleep(1);
            }
            else {
                // ========== get-asset-input-info ==========
                $assetInputInfo = $assetsApi->getAssetInputInfo($createAssetResponse->getData()->getId());
                assert($assetInputInfo->getData() != null);
                break;
            }
        }
    }
    print("get-asset OK ✅\n");
    print("get-asset-input-info OK ✅\n");

    // ========== create-asset-playback-id ==========
    $createAssetPlaybackIdRequest = new MuxPhp\Models\CreatePlaybackIDRequest(["policy" => MuxPhp\Models\PlaybackPolicy::_PUBLIC]);
    $playbackId = $assetsApi->createAssetPlaybackId($createAssetResponse->getData()->getId(), $createAssetPlaybackIdRequest);
    assert($playbackId->getData() != null);
    assert($playbackId->getData()->getPolicy() == 'public');
    print("create-asset-playback-id OK ✅\n");

    // ========== get-asset-playback-id ==========
    $playbackIdGet = $assetsApi->getAssetPlaybackId($createAssetResponse->getData()->getId(), $playbackId->getData()->getId());
    assert($playbackIdGet->getData()->getId() != null);
    assert($playbackIdGet->getData()->getId() == $playbackId->getData()->getId());
    print("get-asset-playback-id OK ✅\n");

    // ========== update-asset-mp4-support ==========
    $updateAssetMp4SupportRequest = new MuxPhp\Models\UpdateAssetMP4SupportRequest(["mp4_support" => "standard"]);
    $assetWithMp4Support = $assetsApi->updateAssetMp4Support($createAssetResponse->getData()->getId(), $updateAssetMp4SupportRequest);
    assert($assetWithMp4Support->getData()->getId() != null);
    assert($assetWithMp4Support->getData()->getId() == $createAssetResponse->getData()->getId());
    assert($assetWithMp4Support->getData()->getMp4Support() == "standard");
    print("update-asset-mp4-support OK ✅\n");

    // ========== delete-asset-playback-id ==========
    $assetsApi->deleteAssetPlaybackId($createAssetResponse->getData()->getId(), $playbackId->getData()->getId());
    $assetWithNoPlaybackIds = $assetsApi->getAsset($createAssetResponse->getData()->getId());
    assert($assetWithNoPlaybackIds->getData()->getPlaybackIds() == null);
    print("delete-asset-playback-id OK ✅\n");

    // ========== delete-asset ==========
    $assetsApi->deleteAsset($createAssetResponse->getData()->getId());
    try {
        $result = $assetsApi->getAsset($createAssetResponse->getData()->getId());
        print("Should have 404'd when getting deleted asset ❌ \n");
        exit(1);
    } catch (Exception $e) {
        print("delete-asset OK ✅\n");
    }
?>