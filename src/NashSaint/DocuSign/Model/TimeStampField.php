<?php
/**
 * TimeStampField
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
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
 * Swagger Codegen version: 2.4.13-SNAPSHOT
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
 * TimeStampField Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TimeStampField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'timeStampField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_security_store' => '\DocuSign\eSign\Model\DocumentSecurityStore',
        'max_time_stamp_signature_length' => '?string',
        'time_stamp_field_name' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_security_store' => null,
        'max_time_stamp_signature_length' => null,
        'time_stamp_field_name' => null
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
        'document_security_store' => 'documentSecurityStore',
        'max_time_stamp_signature_length' => 'maxTimeStampSignatureLength',
        'time_stamp_field_name' => 'timeStampFieldName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_security_store' => 'setDocumentSecurityStore',
        'max_time_stamp_signature_length' => 'setMaxTimeStampSignatureLength',
        'time_stamp_field_name' => 'setTimeStampFieldName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_security_store' => 'getDocumentSecurityStore',
        'max_time_stamp_signature_length' => 'getMaxTimeStampSignatureLength',
        'time_stamp_field_name' => 'getTimeStampFieldName'
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
        $this->container['document_security_store'] = isset($data['document_security_store']) ? $data['document_security_store'] : null;
        $this->container['max_time_stamp_signature_length'] = isset($data['max_time_stamp_signature_length']) ? $data['max_time_stamp_signature_length'] : null;
        $this->container['time_stamp_field_name'] = isset($data['time_stamp_field_name']) ? $data['time_stamp_field_name'] : null;
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
     * Gets document_security_store
     *
     * @return \DocuSign\eSign\Model\DocumentSecurityStore
     */
    public function getDocumentSecurityStore()
    {
        return $this->container['document_security_store'];
    }

    /**
     * Sets document_security_store
     *
     * @param \DocuSign\eSign\Model\DocumentSecurityStore $document_security_store document_security_store
     *
     * @return $this
     */
    public function setDocumentSecurityStore($document_security_store)
    {
        $this->container['document_security_store'] = $document_security_store;

        return $this;
    }

    /**
     * Gets max_time_stamp_signature_length
     *
     * @return ?string
     */
    public function getMaxTimeStampSignatureLength()
    {
        return $this->container['max_time_stamp_signature_length'];
    }

    /**
     * Sets max_time_stamp_signature_length
     *
     * @param ?string $max_time_stamp_signature_length
     *
     * @return $this
     */
    public function setMaxTimeStampSignatureLength($max_time_stamp_signature_length)
    {
        $this->container['max_time_stamp_signature_length'] = $max_time_stamp_signature_length;

        return $this;
    }

    /**
     * Gets time_stamp_field_name
     *
     * @return ?string
     */
    public function getTimeStampFieldName()
    {
        return $this->container['time_stamp_field_name'];
    }

    /**
     * Sets time_stamp_field_name
     *
     * @param ?string $time_stamp_field_name
     *
     * @return $this
     */
    public function setTimeStampFieldName($time_stamp_field_name)
    {
        $this->container['time_stamp_field_name'] = $time_stamp_field_name;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
