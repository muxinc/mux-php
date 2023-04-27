<?php
    require_once(__DIR__ . '/../assert.php');
    require_once 'vendor/autoload.php';

    // Exercises all signing key operations.
    
    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $keysApi = new MuxPhp\Api\URLSigningKeysApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== create-url-signing-key ==========
    $createKeyResponse = $keysApi->createUrlSigningKey();
    assert($createKeyResponse->getData()->getId() !== null);
    assert($createKeyResponse->getData()->getPrivateKey() !== null);
    print("create-url-signing-key OK ✅\n");

    // ========== list-url-signing-keys ==========
    $keys = $keysApi->listUrlSigningKeys();
    $list = $keys->getData();
    $last = end($list);
    assert($last->getId() !== null);
    assert($last->getId() === $createKeyResponse->getData()->getId());
    assert($last->getPrivateKey() === null);
    print("list-url-signing-keys OK ✅\n");

    // ========== get-url-signing-key ==========
    $key = $keysApi->getUrlSigningKey($createKeyResponse->getData()->getId());
    assert($key->getData()->getId() !== null);
    assert($key->getData()->getId() === $createKeyResponse->getData()->getId());
    assert($key->getData()->getPrivateKey() === null);
    print("get-url-signing-key OK ✅\n");

    // ========== delete-url-signing-key ==========
    $keysApi->deleteUrlSigningKey($createKeyResponse->getData()->getId());
    try {
        print("Sleeping for 60 seconds to ensure key cache is invalidated ⏳");
        for ($remaining=60;$remaining>0;--$remaining) {
            print("\r");
            print(sprintf("%2d seconds remaining.                                        ",$remaining));
            flush();
            sleep(1);
        }
        print("\rSleep complete! ⏳                                          \n");
        $result = $keysApi->getUrlSigningKey($createKeyResponse->getData()->getId());
        print("Should have 404'd when getting deleted signing key ❌ \n");
        exit(1);
    } catch (Exception $e) {
        print("delete-url-signing-key OK ✅\n");
    }
