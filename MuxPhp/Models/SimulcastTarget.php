<?php
/**
 * SimulcastTarget
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 */

/**
 * Mux API
 *
 * Mux is how developers build online video. This API encompasses both Mux Video and Mux Data functionality to help you build your video-related projects better and faster than ever before.
 *
 * The version of the OpenAPI document: v1
 * Contact: devex@mux.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * SimulcastTarget Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SimulcastTarget implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SimulcastTarget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'passthrough' => 'string',
        'status' => 'string',
        'stream_key' => 'string',
        'url' => 'string',
        'error_severity' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'passthrough' => null,
        'status' => null,
        'stream_key' => null,
        'url' => null,
        'error_severity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'passthrough' => false,
        'status' => false,
        'stream_key' => false,
        'url' => false,
        'error_severity' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'passthrough' => 'passthrough',
        'status' => 'status',
        'stream_key' => 'stream_key',
        'url' => 'url',
        'error_severity' => 'error_severity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'passthrough' => 'setPassthrough',
        'status' => 'setStatus',
        'stream_key' => 'setStreamKey',
        'url' => 'setUrl',
        'error_severity' => 'setErrorSeverity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'passthrough' => 'getPassthrough',
        'status' => 'getStatus',
        'stream_key' => 'getStreamKey',
        'url' => 'getUrl',
        'error_severity' => 'getErrorSeverity'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const STATUS_IDLE = 'idle';
    public const STATUS_STARTING = 'starting';
    public const STATUS_BROADCASTING = 'broadcasting';
    public const STATUS_ERRORED = 'errored';
    public const ERROR_SEVERITY_NORMAL = 'normal';
    public const ERROR_SEVERITY_FATAL = 'fatal';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IDLE,
            self::STATUS_STARTING,
            self::STATUS_BROADCASTING,
            self::STATUS_ERRORED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorSeverityAllowableValues()
    {
        return [
            self::ERROR_SEVERITY_NORMAL,
            self::ERROR_SEVERITY_FATAL,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        // MUX: enum hack (self::) due to OAS emitting problems.
        //      please re-integrate with mainline when possible.
        //      src: https://github.com/OpenAPITools/openapi-generator/issues/9038
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('passthrough', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('stream_key', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('error_severity', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getErrorSeverityAllowableValues();
        if (!is_null($this->container['error_severity']) && !in_array($this->container['error_severity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'error_severity', must be one of '%s'",
                $this->container['error_severity'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID of the Simulcast Target
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets passthrough
     *
     * @return string|null
     */
    public function getPassthrough()
    {
        return $this->container['passthrough'];
    }

    /**
     * Sets passthrough
     *
     * @param string|null $passthrough Arbitrary user-supplied metadata set when creating a simulcast target.
     *
     * @return self
     */
    public function setPassthrough($passthrough)
    {

        if (is_null($passthrough)) {
            throw new \InvalidArgumentException('non-nullable passthrough cannot be null');
        }

        $this->container['passthrough'] = $passthrough;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current status of the simulcast target. See Statuses below for detailed description.   * `idle`: Default status. When the parent live stream is in disconnected status, simulcast targets will be idle state.   * `starting`: The simulcast target transitions into this state when the parent live stream transition into connected state.   * `broadcasting`: The simulcast target has successfully connected to the third party live streaming service and is pushing video to that service.   * `errored`: The simulcast target encountered an error either while attempting to connect to the third party live streaming service, or mid-broadcasting. When a simulcast target has this status it will have an `error_severity` field with more details about the error.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets stream_key
     *
     * @return string|null
     */
    public function getStreamKey()
    {
        return $this->container['stream_key'];
    }

    /**
     * Sets stream_key
     *
     * @param string|null $stream_key Stream Key represents a stream identifier on the third party live streaming service to send the parent live stream to. Only used for RTMP(s) simulcast destinations.
     *
     * @return self
     */
    public function setStreamKey($stream_key)
    {

        if (is_null($stream_key)) {
            throw new \InvalidArgumentException('non-nullable stream_key cannot be null');
        }

        $this->container['stream_key'] = $stream_key;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The RTMP(s) or SRT endpoint for a simulcast destination. * For RTMP(s) destinations, this should include the application name for the third party live streaming service, for example: `rtmp://live.example.com/app`. * For SRT destinations, this should be a fully formed SRT connection string, for example: `srt://srt-live.example.com:1234?streamid={stream_key}&passphrase={srt_passphrase}`.  Note: SRT simulcast targets can only be used when an source is connected over SRT.
     *
     * @return self
     */
    public function setUrl($url)
    {

        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets error_severity
     *
     * @return string|null
     */
    public function getErrorSeverity()
    {
        return $this->container['error_severity'];
    }

    /**
     * Sets error_severity
     *
     * @param string|null $error_severity The severity of the error encountered by the simulcast target. This field is only set when the simulcast target is in the `errored` status. See the values of severities below and their descriptions.   * `normal`: The simulcast target encountered an error either while attempting to connect to the third party live streaming service, or mid-broadcasting. A simulcast may transition back into the broadcasting state if a connection with the service can be re-established.   * `fatal`: The simulcast target is incompatible with the current input to the parent live stream. No further attempts to this simulcast target will be made for the current live stream asset.
     *
     * @return self
     */
    public function setErrorSeverity($error_severity)
    {
        $allowedValues = $this->getErrorSeverityAllowableValues();
        if (!is_null($error_severity) && !in_array($error_severity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'error_severity', must be one of '%s'",
                    $error_severity,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($error_severity)) {
            throw new \InvalidArgumentException('non-nullable error_severity cannot be null');
        }

        $this->container['error_severity'] = $error_severity;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


