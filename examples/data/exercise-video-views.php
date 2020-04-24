<?php

    assert_options(ASSERT_BAIL, true);
    require_once 'vendor/autoload.php';

    // Exercises all video view operations.

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $viewsApi = new MuxPhp\Api\VideoViewsApi(
        new GuzzleHttp\Client(),
        $config
    );

    # ========== list-video-views ==========
    $views = $viewsApi->listVideoViews(["filters" => ['country:US', 'browser:Safari'], "timeframe" => ['7:days']]);
    assert($views->getData() != null);
    assert(sizeof($views->getData()) > 0);
    assert($views->getData()[0]->getId() != null);
    print("list-video-views OK ✅\n");

    # ========== get-video-view ==========
    $view = $viewsApi->getVideoView($views->getData()[0]->getId());
    assert($view->getData() != null);
    assert($view->getData()->getId() != null);
    print("get-video-view OK ✅\n");
?>