<?php

    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Exercises all live stream operations.

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $liveApi = new MuxPhp\Api\LiveStreamsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== create-live-stream ==========
    $createAssetRequest = new MuxPhp\Models\CreateAssetRequest(["playback_policy" => [MuxPhp\Models\PlaybackPolicy::PUBLIC_PLAYBACK_POLICY]]);
    $createLiveStreamRequest = new MuxPhp\Models\CreateLiveStreamRequest(["playback_policy" => [MuxPhp\Models\PlaybackPolicy::PUBLIC_PLAYBACK_POLICY], "new_asset_settings" => $createAssetRequest, "reduced_latency" => true]);
    $stream = $liveApi->createLiveStream($createLiveStreamRequest);
    assert($stream->getData()->getId() != null);
    print("create-live-stream OK ✅\n");

    // ========== list-live-streams ==========
    $streams = $liveApi->listLiveStreams();
    assert($streams->getData()[0]->getId() != null);
    assert($streams->getData()[0]->getId() == $stream->getData()->getId());
    print("list-live-streams OK ✅\n");

    // ========== get-live-stream ==========
    $getStream = $liveApi->getLiveStream($stream->getData()->getId());
    assert($getStream->getData()->getId() != null);
    assert($getStream->getData()->getId() == $stream->getData()->getId());
    print("get-live-stream OK ✅\n");

    // ========== create-live-stream-simulcast-target ==========
    $createTarget = new MuxPhp\Models\CreateSimulcastTargetRequest(["passthrough" => "That's not on fire", "url" => "rtmp://glitch.tv", "stream_key" => "somethingverylongnoonewilleverremember"]);
    $target = $liveApi->createLiveStreamSimulcastTarget($stream->getData()->getId(), $createTarget);
    assert($target != null);
    assert($target->getData() != null);
    assert($target->getData()->getId() != null);
    print("create-live-stream-simulcast-target OK ✅\n");

    // ========== get-live-stream-simulcast-target ==========
    $getTarget = $liveApi->getLiveStreamSimulcastTarget($stream->getData()->getId(), $target->getData()->getId());
    assert($getTarget != null);
    assert($getTarget->getData() != null);
    assert($getTarget->getData()->getId() != null);
    assert($getTarget->getData()->getId() == $target->getData()->getId());
    print("get-live-stream-simulcast-target OK ✅\n");

    // ========== delete-live-stream-simulcast-target ==========
    $liveApi->deleteLiveStreamSimulcastTarget($stream->getData()->getId(), $target->getData()->getId());
    $getStreamNoTarget = $liveApi->getLiveStream($stream->getData()->getId());
    assert($getStreamNoTarget->getData()->getSimulcastTargets() == null);
    print("delete-live-stream-simulcast-target OK ✅\n");

    // ========== create-live-stream-playback-id ==========
    $createPlaybackIdRequest = new MuxPhp\Models\CreatePlaybackIDRequest(["policy" => MuxPhp\Models\PlaybackPolicy::SIGNED_PLAYBACK_POLICY]);
    $publicAndPrivateStream = $liveApi->createLiveStreamPlaybackId($stream->getData()->getId(), $createPlaybackIdRequest);
    assert($publicAndPrivateStream->getData()->getId() != null);
    assert($publicAndPrivateStream->getData()->getPolicy() == "signed");
    print("create-live-stream-playback-id OK ✅\n");

    // ========== delete-live-stream-playback-id ==========
    $liveApi->deleteLiveStreamPlaybackId($stream->getData()->getId(), $publicAndPrivateStream->getData()->getId());
    $publicStream = $liveApi->getLiveStream($stream->getData()->getId());
    assert($publicStream->getData()->getId() != null);
    assert(sizeof($publicStream->getData()->getPlaybackIds()) == 1);
    assert($publicStream->getData()->getPlaybackIds()[0]->getPolicy() == "public");
    print("delete-live-stream-playback-id OK ✅\n");

    // ========== reset-stream-key ==========
    $newStreamKey = $liveApi->resetStreamKey($stream->getData()->getId());
    assert($newStreamKey->getData()->getId() != null);
    assert($newStreamKey->getData()->getId() == $stream->getData()->getId());
    assert($newStreamKey->getData()->getStreamKey() != $stream->getData()->getStreamKey());
    print("reset-stream-key OK ✅\n");

    // ========== signal-live-stream-complete ==========
    try {
        $liveApi->signalLiveStreamComplete($stream->getData()->getId());
    }
    catch (Exception $e) {
        print("Should not have errored when signalling live stream complete ❌ ");
        exit(1);
    }
    print("signal-live-stream-complete OK ✅\n");

    // ========== delete-live-stream ==========
    $liveApi->deleteLiveStream($stream->getData()->getId());
    try {
        $result = $liveApi->getLiveStream($stream->getData()->getId());
        print("Should have 404'd when getting deleted live stream ❌ \n");
        exit(1);
    } catch (Exception $e) {
        print("delete-live-stream OK ✅\n");
    }

?>