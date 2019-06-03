<?php

/**
 * Mux PHP - Copyright 2019 Mux Inc.
 * NOTE: This file is auto generated. Do not edit this file manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * CreateLiveStreamRequest Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 */
class CreateLiveStreamRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateLiveStreamRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'playback_policy' => '\MuxPhp\Models\PlaybackPolicy[]',
        'new_asset_settings' => '\MuxPhp\Models\CreateAssetRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'playback_policy' => null,
        'new_asset_settings' => null
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
        'playback_policy' => 'playback_policy',
        'new_asset_settings' => 'new_asset_settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'playback_policy' => 'setPlaybackPolicy',
        'new_asset_settings' => 'setNewAssetSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'playback_policy' => 'getPlaybackPolicy',
        'new_asset_settings' => 'getNewAssetSettings'
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
        $this->container['playback_policy'] = isset($data['playback_policy']) ? $data['playback_policy'] : null;
        $this->container['new_asset_settings'] = isset($data['new_asset_settings']) ? $data['new_asset_settings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets new_asset_settings
     *
     * @return \MuxPhp\Models\CreateAssetRequest|null
     */
    public function getNewAssetSettings()
    {
        return $this->container['new_asset_settings'];
    }

    /**
     * Sets new_asset_settings
     *
     * @param \MuxPhp\Models\CreateAssetRequest|null $new_asset_settings new_asset_settings
     *
     * @return $this
     */
    public function setNewAssetSettings($new_asset_settings)
    {
        $this->container['new_asset_settings'] = $new_asset_settings;

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


