<?php

/**
 * Mux PHP - Copyright 2019 Mux Inc.
 * NOTE: This file is auto generated. Do not edit this file manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * InputTrack Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 */
class InputTrack implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InputTrack';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'type' => 'string',
        'duration' => 'double',
        'encoding' => 'string',
        'width' => 'int',
        'height' => 'int',
        'frame_rate' => 'double',
        'sample_rate' => 'int',
        'sample_size' => 'int',
        'channels' => 'int',
        'text_track_type' => 'string',
        'language' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'type' => null,
        'duration' => 'double',
        'encoding' => null,
        'width' => 'int64',
        'height' => 'int64',
        'frame_rate' => 'double',
        'sample_rate' => 'int64',
        'sample_size' => 'int64',
        'channels' => 'int64',
        'text_track_type' => null,
        'language' => null
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
        'type' => 'type',
        'duration' => 'duration',
        'encoding' => 'encoding',
        'width' => 'width',
        'height' => 'height',
        'frame_rate' => 'frame_rate',
        'sample_rate' => 'sample_rate',
        'sample_size' => 'sample_size',
        'channels' => 'channels',
        'text_track_type' => 'text_track_type',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'duration' => 'setDuration',
        'encoding' => 'setEncoding',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'frame_rate' => 'setFrameRate',
        'sample_rate' => 'setSampleRate',
        'sample_size' => 'setSampleSize',
        'channels' => 'setChannels',
        'text_track_type' => 'setTextTrackType',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'duration' => 'getDuration',
        'encoding' => 'getEncoding',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'frame_rate' => 'getFrameRate',
        'sample_rate' => 'getSampleRate',
        'sample_size' => 'getSampleSize',
        'channels' => 'getChannels',
        'text_track_type' => 'getTextTrackType',
        'language' => 'getLanguage'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['frame_rate'] = isset($data['frame_rate']) ? $data['frame_rate'] : null;
        $this->container['sample_rate'] = isset($data['sample_rate']) ? $data['sample_rate'] : null;
        $this->container['sample_size'] = isset($data['sample_size']) ? $data['sample_size'] : null;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : null;
        $this->container['text_track_type'] = isset($data['text_track_type']) ? $data['text_track_type'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return double|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param double|null $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string|null $encoding encoding
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets frame_rate
     *
     * @return double|null
     */
    public function getFrameRate()
    {
        return $this->container['frame_rate'];
    }

    /**
     * Sets frame_rate
     *
     * @param double|null $frame_rate frame_rate
     *
     * @return $this
     */
    public function setFrameRate($frame_rate)
    {
        $this->container['frame_rate'] = $frame_rate;

        return $this;
    }

    /**
     * Gets sample_rate
     *
     * @return int|null
     */
    public function getSampleRate()
    {
        return $this->container['sample_rate'];
    }

    /**
     * Sets sample_rate
     *
     * @param int|null $sample_rate sample_rate
     *
     * @return $this
     */
    public function setSampleRate($sample_rate)
    {
        $this->container['sample_rate'] = $sample_rate;

        return $this;
    }

    /**
     * Gets sample_size
     *
     * @return int|null
     */
    public function getSampleSize()
    {
        return $this->container['sample_size'];
    }

    /**
     * Sets sample_size
     *
     * @param int|null $sample_size sample_size
     *
     * @return $this
     */
    public function setSampleSize($sample_size)
    {
        $this->container['sample_size'] = $sample_size;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return int|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param int|null $channels channels
     *
     * @return $this
     */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets text_track_type
     *
     * @return string|null
     */
    public function getTextTrackType()
    {
        return $this->container['text_track_type'];
    }

    /**
     * Sets text_track_type
     *
     * @param string|null $text_track_type text_track_type
     *
     * @return $this
     */
    public function setTextTrackType($text_track_type)
    {
        $this->container['text_track_type'] = $text_track_type;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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


