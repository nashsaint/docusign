<?php
/**
 * UsageHistory
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NashSaint\DocuSign\eSign\Model;

use \ArrayAccess;
use NashSaint\DocuSign\eSign\ObjectSerializer;

/**
 * UsageHistory Class Doc Comment
 *
 * @category    Class
 * @description A complex element consisting of:   * lastSentDateTime - the date and time the user last sent an envelope.  * lastSignedDateTime - the date and time the user last signed an envelope. * sentCount - the number of envelopes the user has sent. * signedCount - the number of envelopes the user has signed.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsageHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'usageHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_sent_date_time' => '?string',
        'last_signed_date_time' => '?string',
        'sent_count' => '?string',
        'signed_count' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_sent_date_time' => null,
        'last_signed_date_time' => null,
        'sent_count' => null,
        'signed_count' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'last_sent_date_time' => 'lastSentDateTime',
        'last_signed_date_time' => 'lastSignedDateTime',
        'sent_count' => 'sentCount',
        'signed_count' => 'signedCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_sent_date_time' => 'setLastSentDateTime',
        'last_signed_date_time' => 'setLastSignedDateTime',
        'sent_count' => 'setSentCount',
        'signed_count' => 'setSignedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_sent_date_time' => 'getLastSentDateTime',
        'last_signed_date_time' => 'getLastSignedDateTime',
        'sent_count' => 'getSentCount',
        'signed_count' => 'getSignedCount'
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
        return self::$swaggerModelName;
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
        $this->container['last_sent_date_time'] = isset($data['last_sent_date_time']) ? $data['last_sent_date_time'] : null;
        $this->container['last_signed_date_time'] = isset($data['last_signed_date_time']) ? $data['last_signed_date_time'] : null;
        $this->container['sent_count'] = isset($data['sent_count']) ? $data['sent_count'] : null;
        $this->container['signed_count'] = isset($data['signed_count']) ? $data['signed_count'] : null;
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
     * Gets last_sent_date_time
     *
     * @return ?string
     */
    public function getLastSentDateTime()
    {
        return $this->container['last_sent_date_time'];
    }

    /**
     * Sets last_sent_date_time
     *
     * @param ?string $last_sent_date_time The date and time the user last sent an envelope.
     *
     * @return $this
     */
    public function setLastSentDateTime($last_sent_date_time)
    {
        $this->container['last_sent_date_time'] = $last_sent_date_time;

        return $this;
    }

    /**
     * Gets last_signed_date_time
     *
     * @return ?string
     */
    public function getLastSignedDateTime()
    {
        return $this->container['last_signed_date_time'];
    }

    /**
     * Sets last_signed_date_time
     *
     * @param ?string $last_signed_date_time The date and time the user last signed an envelope.
     *
     * @return $this
     */
    public function setLastSignedDateTime($last_signed_date_time)
    {
        $this->container['last_signed_date_time'] = $last_signed_date_time;

        return $this;
    }

    /**
     * Gets sent_count
     *
     * @return ?string
     */
    public function getSentCount()
    {
        return $this->container['sent_count'];
    }

    /**
     * Sets sent_count
     *
     * @param ?string $sent_count The number of envelopes the user has sent.
     *
     * @return $this
     */
    public function setSentCount($sent_count)
    {
        $this->container['sent_count'] = $sent_count;

        return $this;
    }

    /**
     * Gets signed_count
     *
     * @return ?string
     */
    public function getSignedCount()
    {
        return $this->container['signed_count'];
    }

    /**
     * Sets signed_count
     *
     * @param ?string $signed_count The number of envelopes the user has signed.
     *
     * @return $this
     */
    public function setSignedCount($signed_count)
    {
        $this->container['signed_count'] = $signed_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

