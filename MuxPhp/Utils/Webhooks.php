<?php

namespace MuxPhp\Utils;

class Webhooks
{
  public function getRequestBody()
  {
    return file_get_contents('php://input');
  }

  public function isValidSignature(string $signature) {
    // Split the signature based on ','.
    // Format is 't=[timestamp],v1=[hash]'
    $muxSigArray = explode(',', $signature);

    if(empty($muxSigArray) || empty($muxSigArray[0]) || empty($muxSigArray[1])) {
        return false;
    }

    // Strip the first occurence of 't=' and 'v1=' from both strings
    $muxTimestamp = preg_replace('/t=/', '', $muxSigArray[0], 1);
    $muxHash = preg_replace('/v1=/', '', $muxSigArray[1], 1);

    // Create a payload of the timestamp from the Mux signature and the request body with a '.' in-between
    $payload = $muxTimestamp . "." . $this->getRequestBody();

    // Build a HMAC hash using SHA256 algo, using our webhook secret
    $ourSignature = hash_hmac('sha256', $payload, $_ENV['MUX_WEBHOOK_SECRET']);

    // `hash_equals` performs a timing-safe crypto comparison
    return hash_equals($ourSignature, $muxHash);
  }
}