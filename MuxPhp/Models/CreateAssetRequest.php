<?php

/**
 * Mux PHP - Copyright 2019 Mux Inc.
 * NOTE: This file is auto generated. Do not edit this file manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * CreateAssetRequest Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 */
class CreateAssetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CreateAssetRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'input' => '\MuxPhp\Models\InputSettings[]',
        'playback_policy' => '\MuxPhp\Models\PlaybackPolicy[]',
        'demo' => 'bool',
        'per_title_encode' => 'bool',
        'passthrough' => 'string',
        'mp4_support' => 'string',
        'normalize_audio' => 'bool',
        'master_access' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'input' => null,
        'playback_policy' => null,
        'demo' => 'boolean',
        'per_title_encode' => 'boolean',
        'passthrough' => null,
        'mp4_support' => null,
        'normalize_audio' => 'boolean',
        'master_access' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'input' => 'input',
        'playback_policy' => 'playback_policy',
        'demo' => 'demo',
        'per_title_encode' => 'per_title_encode',
        'passthrough' => 'passthrough',
        'mp4_support' => 'mp4_support',
        'normalize_audio' => 'normalize_audio',
        'master_access' => 'master_access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'input' => 'setInput',
        'playback_policy' => 'setPlaybackPolicy',
        'demo' => 'setDemo',
        'per_title_encode' => 'setPerTitleEncode',
        'passthrough' => 'setPassthrough',
        'mp4_support' => 'setMp4Support',
        'normalize_audio' => 'setNormalizeAudio',
        'master_access' => 'setMasterAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'input' => 'getInput',
        'playback_policy' => 'getPlaybackPolicy',
        'demo' => 'getDemo',
        'per_title_encode' => 'getPerTitleEncode',
        'passthrough' => 'getPassthrough',
        'mp4_support' => 'getMp4Support',
        'normalize_audio' => 'getNormalizeAudio',
        'master_access' => 'getMasterAccess'
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

    const MP4_SUPPORT_NONE = 'none';
    const MP4_SUPPORT_STANDARD = 'standard';
    const MASTER_ACCESS_NONE = 'none';
    const MASTER_ACCESS_TEMPORARY = 'temporary';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMp4SupportAllowableValues()
    {
        return [
            self::MP4_SUPPORT_NONE,
            self::MP4_SUPPORT_STANDARD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMasterAccessAllowableValues()
    {
        return [
            self::MASTER_ACCESS_NONE,
            self::MASTER_ACCESS_TEMPORARY,
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
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['playback_policy'] = isset($data['playback_policy']) ? $data['playback_policy'] : null;
        $this->container['demo'] = isset($data['demo']) ? $data['demo'] : null;
        $this->container['per_title_encode'] = isset($data['per_title_encode']) ? $data['per_title_encode'] : null;
        $this->container['passthrough'] = isset($data['passthrough']) ? $data['passthrough'] : null;
        $this->container['mp4_support'] = isset($data['mp4_support']) ? $data['mp4_support'] : null;
        $this->container['normalize_audio'] = isset($data['normalize_audio']) ? $data['normalize_audio'] : false;
        $this->container['master_access'] = isset($data['master_access']) ? $data['master_access'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMp4SupportAllowableValues();
        if (!is_null($this->container['mp4_support']) && !in_array($this->container['mp4_support'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mp4_support', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMasterAccessAllowableValues();
        if (!is_null($this->container['master_access']) && !in_array($this->container['master_access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'master_access', must be one of '%s'",
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
     * Gets input
     *
     * @return \MuxPhp\Models\InputSettings[]|null
     */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
     * Sets input
     *
     * @param \MuxPhp\Models\InputSettings[]|null $input input
     *
     * @return $this
     */
    public function setInput($input)
    {
        $this->container['input'] = $input;

        return $this;
    }

    /**
     * Gets playback_policy
     *
     * @return \MuxPhp\Models\PlaybackPolicy[]|null
     */
    public function getPlaybackPolicy()
    {
        return $this->container['playback_policy'];
    }

    /**
     * Sets playback_policy
     *
     * @param \MuxPhp\Models\PlaybackPolicy[]|null $playback_policy playback_policy
     *
     * @return $this
     */
    public function setPlaybackPolicy($playback_policy)
    {
        $this->container['playback_policy'] = $playback_policy;

        return $this;
    }

    /**
     * Gets demo
     *
     * @return bool|null
     */
    public function getDemo()
    {
        return $this->container['demo'];
    }

    /**
     * Sets demo
     *
     * @param bool|null $demo demo
     *
     * @return $this
     */
    public function setDemo($demo)
    {
        $this->container['demo'] = $demo;

        return $this;
    }

    /**
     * Gets per_title_encode
     *
     * @return bool|null
     */
    public function getPerTitleEncode()
    {
        return $this->container['per_title_encode'];
    }

    /**
     * Sets per_title_encode
     *
     * @param bool|null $per_title_encode per_title_encode
     *
     * @return $this
     */
    public function setPerTitleEncode($per_title_encode)
    {
        $this->container['per_title_encode'] = $per_title_encode;

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
     * @param string|null $passthrough passthrough
     *
     * @return $this
     */
    public function setPassthrough($passthrough)
    {
        $this->container['passthrough'] = $passthrough;

        return $this;
    }

    /**
     * Gets mp4_support
     *
     * @return string|null
     */
    public function getMp4Support()
    {
        return $this->container['mp4_support'];
    }

    /**
     * Sets mp4_support
     *
     * @param string|null $mp4_support mp4_support
     *
     * @return $this
     */
    public function setMp4Support($mp4_support)
    {
        $allowedValues = $this->getMp4SupportAllowableValues();
        if (!is_null($mp4_support) && !in_array($mp4_support, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mp4_support', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mp4_support'] = $mp4_support;

        return $this;
    }

    /**
     * Gets normalize_audio
     *
     * @return bool|null
     */
    public function getNormalizeAudio()
    {
        return $this->container['normalize_audio'];
    }

    /**
     * Sets normalize_audio
     *
     * @param bool|null $normalize_audio Normalize the audio track loudness level. This parameter is only applicable to on-demand (not live) assets.
     *
     * @return $this
     */
    public function setNormalizeAudio($normalize_audio)
    {
        $this->container['normalize_audio'] = $normalize_audio;

        return $this;
    }

    /**
     * Gets master_access
     *
     * @return string|null
     */
    public function getMasterAccess()
    {
        return $this->container['master_access'];
    }

    /**
     * Sets master_access
     *
     * @param string|null $master_access master_access
     *
     * @return $this
     */
    public function setMasterAccess($master_access)
    {
        $allowedValues = $this->getMasterAccessAllowableValues();
        if (!is_null($master_access) && !in_array($master_access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'master_access', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['master_access'] = $master_access;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


