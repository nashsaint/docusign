<?php
/**
 * User
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign
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

namespace NashSaint\DocuSign\Model;

use \ArrayAccess;
use NashSaint\DocuSign\ObjectSerializer;

/**
 * User Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'user';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cell_phone_number' => '?string',
        'country_code' => '?string',
        'credentials' => '\DocuSign\Model\Credential[]',
        'display_name' => '?string',
        'email' => '?string',
        'external_claims' => '\DocuSign\Model\ExternalClaim[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cell_phone_number' => null,
        'country_code' => null,
        'credentials' => null,
        'display_name' => null,
        'email' => null,
        'external_claims' => null
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
        'cell_phone_number' => 'cellPhoneNumber',
        'country_code' => 'countryCode',
        'credentials' => 'credentials',
        'display_name' => 'displayName',
        'email' => 'email',
        'external_claims' => 'externalClaims'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cell_phone_number' => 'setCellPhoneNumber',
        'country_code' => 'setCountryCode',
        'credentials' => 'setCredentials',
        'display_name' => 'setDisplayName',
        'email' => 'setEmail',
        'external_claims' => 'setExternalClaims'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cell_phone_number' => 'getCellPhoneNumber',
        'country_code' => 'getCountryCode',
        'credentials' => 'getCredentials',
        'display_name' => 'getDisplayName',
        'email' => 'getEmail',
        'external_claims' => 'getExternalClaims'
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
        $this->container['cell_phone_number'] = isset($data['cell_phone_number']) ? $data['cell_phone_number'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['credentials'] = isset($data['credentials']) ? $data['credentials'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['external_claims'] = isset($data['external_claims']) ? $data['external_claims'] : null;
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
     * Gets cell_phone_number
     *
     * @return ?string
     */
    public function getCellPhoneNumber()
    {
        return $this->container['cell_phone_number'];
    }

    /**
     * Sets cell_phone_number
     *
     * @param ?string $cell_phone_number
     *
     * @return $this
     */
    public function setCellPhoneNumber($cell_phone_number)
    {
        $this->container['cell_phone_number'] = $cell_phone_number;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return ?string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param ?string $country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets credentials
     *
     * @return \DocuSign\Model\Credential[]
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     *
     * @param \DocuSign\Model\Credential[] $credentials
     *
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return ?string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param ?string $display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param ?string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets external_claims
     *
     * @return \DocuSign\Model\ExternalClaim[]
     */
    public function getExternalClaims()
    {
        return $this->container['external_claims'];
    }

    /**
     * Sets external_claims
     *
     * @param \DocuSign\Model\ExternalClaim[] $external_claims
     *
     * @return $this
     */
    public function setExternalClaims($external_claims)
    {
        $this->container['external_claims'] = $external_claims;

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

