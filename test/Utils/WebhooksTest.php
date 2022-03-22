<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class WebhooksTest extends TestCase
{
    public static $webhooks;

    /**
     * @beforeClass
     */
    public static function setUpSomeSharedFixtures(): void
    {
        $secret = 'abc';
        $_ENV['MUX_WEBHOOK_SECRET'] = $secret;
        self::$webhooks = new MuxPhp\Utils\Webhooks;
    }

    public function testSignatureInvalidInvalidSignature(): void
    {
        $this->assertFalse(
            self::$webhooks->isValidSignature('invalid')
        );
    }

    public function testSignatureInvalidOnMalformedSignature(): void
    {
        $this->assertFalse(
            self::$webhooks->isValidSignature('invalid,32u4')
        );
    }

    public function testSignatureValid(): void
    {
        $body = json_encode(['hello' => 'world']);

        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder(MuxPhp\Utils\Webhooks::class)
            ->disableOriginalConstructor()
            ->setMethods(['getRequestBody'])
            ->getMock();

        // Configure the stub.
        $stub->method('getRequestBody')->willReturn($body);

        $time = time();
        $payload = $time . "." . $body;
        $signature = hash_hmac('sha256', $payload, $_ENV['MUX_WEBHOOK_SECRET']);
        $hash = "t=$time,v1=$signature";

        $this->assertTrue(
            $stub->isValidSignature($hash)
        );
    }
}