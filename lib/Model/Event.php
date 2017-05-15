<?php
/**
 * Event
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenParty API
 *
 * Move your app forward with the OpenParty API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Event Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Event implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'event_id' => 'int',
        'event_title' => 'string',
        'age_minimum' => 'string',
        'event_description' => 'string',
        'flyer_filename' => 'string',
        'flyer_uri' => 'string',
        'music_genres' => 'string',
        'event_date' => 'string',
        'start_time' => 'string',
        'event_subtitle' => 'string',
        'venue' => 'string',
        'featured' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'event_id' => 'event_id',
        'event_title' => 'event_title',
        'age_minimum' => 'age_minimum',
        'event_description' => 'event_description',
        'flyer_filename' => 'flyer_filename',
        'flyer_uri' => 'flyer_uri',
        'music_genres' => 'music_genres',
        'event_date' => 'event_date',
        'start_time' => 'start_time',
        'event_subtitle' => 'event_subtitle',
        'venue' => 'venue',
        'featured' => 'featured'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'event_id' => 'setEventId',
        'event_title' => 'setEventTitle',
        'age_minimum' => 'setAgeMinimum',
        'event_description' => 'setEventDescription',
        'flyer_filename' => 'setFlyerFilename',
        'flyer_uri' => 'setFlyerUri',
        'music_genres' => 'setMusicGenres',
        'event_date' => 'setEventDate',
        'start_time' => 'setStartTime',
        'event_subtitle' => 'setEventSubtitle',
        'venue' => 'setVenue',
        'featured' => 'setFeatured'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'event_id' => 'getEventId',
        'event_title' => 'getEventTitle',
        'age_minimum' => 'getAgeMinimum',
        'event_description' => 'getEventDescription',
        'flyer_filename' => 'getFlyerFilename',
        'flyer_uri' => 'getFlyerUri',
        'music_genres' => 'getMusicGenres',
        'event_date' => 'getEventDate',
        'start_time' => 'getStartTime',
        'event_subtitle' => 'getEventSubtitle',
        'venue' => 'getVenue',
        'featured' => 'getFeatured'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['event_title'] = isset($data['event_title']) ? $data['event_title'] : null;
        $this->container['age_minimum'] = isset($data['age_minimum']) ? $data['age_minimum'] : null;
        $this->container['event_description'] = isset($data['event_description']) ? $data['event_description'] : null;
        $this->container['flyer_filename'] = isset($data['flyer_filename']) ? $data['flyer_filename'] : null;
        $this->container['flyer_uri'] = isset($data['flyer_uri']) ? $data['flyer_uri'] : null;
        $this->container['music_genres'] = isset($data['music_genres']) ? $data['music_genres'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['event_subtitle'] = isset($data['event_subtitle']) ? $data['event_subtitle'] : null;
        $this->container['venue'] = isset($data['venue']) ? $data['venue'] : null;
        $this->container['featured'] = isset($data['featured']) ? $data['featured'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets event_id
     * @return int
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     * @param int $event_id Event Id.
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets event_title
     * @return string
     */
    public function getEventTitle()
    {
        return $this->container['event_title'];
    }

    /**
     * Sets event_title
     * @param string $event_title Event Title.
     * @return $this
     */
    public function setEventTitle($event_title)
    {
        $this->container['event_title'] = $event_title;

        return $this;
    }

    /**
     * Gets age_minimum
     * @return string
     */
    public function getAgeMinimum()
    {
        return $this->container['age_minimum'];
    }

    /**
     * Sets age_minimum
     * @param string $age_minimum Age Minimum.
     * @return $this
     */
    public function setAgeMinimum($age_minimum)
    {
        $this->container['age_minimum'] = $age_minimum;

        return $this;
    }

    /**
     * Gets event_description
     * @return string
     */
    public function getEventDescription()
    {
        return $this->container['event_description'];
    }

    /**
     * Sets event_description
     * @param string $event_description Event Description.
     * @return $this
     */
    public function setEventDescription($event_description)
    {
        $this->container['event_description'] = $event_description;

        return $this;
    }

    /**
     * Gets flyer_filename
     * @return string
     */
    public function getFlyerFilename()
    {
        return $this->container['flyer_filename'];
    }

    /**
     * Sets flyer_filename
     * @param string $flyer_filename Flyer Filename.
     * @return $this
     */
    public function setFlyerFilename($flyer_filename)
    {
        $this->container['flyer_filename'] = $flyer_filename;

        return $this;
    }

    /**
     * Gets flyer_uri
     * @return string
     */
    public function getFlyerUri()
    {
        return $this->container['flyer_uri'];
    }

    /**
     * Sets flyer_uri
     * @param string $flyer_uri Flyer URI.
     * @return $this
     */
    public function setFlyerUri($flyer_uri)
    {
        $this->container['flyer_uri'] = $flyer_uri;

        return $this;
    }

    /**
     * Gets music_genres
     * @return string
     */
    public function getMusicGenres()
    {
        return $this->container['music_genres'];
    }

    /**
     * Sets music_genres
     * @param string $music_genres Array of music genres.
     * @return $this
     */
    public function setMusicGenres($music_genres)
    {
        $this->container['music_genres'] = $music_genres;

        return $this;
    }

    /**
     * Gets event_date
     * @return string
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     * @param string $event_date Event Date.
     * @return $this
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets start_time
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param string $start_time Start time for the event.
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets event_subtitle
     * @return string
     */
    public function getEventSubtitle()
    {
        return $this->container['event_subtitle'];
    }

    /**
     * Sets event_subtitle
     * @param string $event_subtitle Event Subtitle.
     * @return $this
     */
    public function setEventSubtitle($event_subtitle)
    {
        $this->container['event_subtitle'] = $event_subtitle;

        return $this;
    }

    /**
     * Gets venue
     * @return string
     */
    public function getVenue()
    {
        return $this->container['venue'];
    }

    /**
     * Sets venue
     * @param string $venue Venue Information with name, start time, default flyer, etc.
     * @return $this
     */
    public function setVenue($venue)
    {
        $this->container['venue'] = $venue;

        return $this;
    }

    /**
     * Gets featured
     * @return bool
     */
    public function getFeatured()
    {
        return $this->container['featured'];
    }

    /**
     * Sets featured
     * @param bool $featured If true, is ranked as one of most exciting event in Las Vegas.
     * @return $this
     */
    public function setFeatured($featured)
    {
        $this->container['featured'] = $featured;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


