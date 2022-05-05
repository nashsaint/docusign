<?php
/**
 * AccountSignatureDefinition
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign
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

namespace NashSaint\DocuSign\Model;

use \ArrayAccess;
use NashSaint\DocuSign\ObjectSerializer;

/**
 * AccountSignatureDefinition Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountSignatureDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountSignatureDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_stamp_properties' => '\DocuSign\Model\DateStampProperties',
        'disallow_user_resize_stamp' => '?string',
        'external_id' => '?string',
        'image_type' => '?string',
        'is_default' => '?string',
        'nrds_id' => '?string',
        'nrds_last_name' => '?string',
        'phonetic_name' => '?string',
        'signature_font' => '?string',
        'signature_groups' => '\DocuSign\Model\SignatureGroupDef[]',
        'signature_id' => '?string',
        'signature_initials' => '?string',
        'signature_name' => '?string',
        'signature_type' => '?string',
        'signature_users' => '\DocuSign\Model\SignatureUserDef[]',
        'stamp_format' => '?string',
        'stamp_size_mm' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_stamp_properties' => null,
        'disallow_user_resize_stamp' => null,
        'external_id' => null,
        'image_type' => null,
        'is_default' => null,
        'nrds_id' => null,
        'nrds_last_name' => null,
        'phonetic_name' => null,
        'signature_font' => null,
        'signature_groups' => null,
        'signature_id' => null,
        'signature_initials' => null,
        'signature_name' => null,
        'signature_type' => null,
        'signature_users' => null,
        'stamp_format' => null,
        'stamp_size_mm' => null
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
        'date_stamp_properties' => 'dateStampProperties',
        'disallow_user_resize_stamp' => 'disallowUserResizeStamp',
        'external_id' => 'externalID',
        'image_type' => 'imageType',
        'is_default' => 'isDefault',
        'nrds_id' => 'nrdsId',
        'nrds_last_name' => 'nrdsLastName',
        'phonetic_name' => 'phoneticName',
        'signature_font' => 'signatureFont',
        'signature_groups' => 'signatureGroups',
        'signature_id' => 'signatureId',
        'signature_initials' => 'signatureInitials',
        'signature_name' => 'signatureName',
        'signature_type' => 'signatureType',
        'signature_users' => 'signatureUsers',
        'stamp_format' => 'stampFormat',
        'stamp_size_mm' => 'stampSizeMM'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_stamp_properties' => 'setDateStampProperties',
        'disallow_user_resize_stamp' => 'setDisallowUserResizeStamp',
        'external_id' => 'setExternalId',
        'image_type' => 'setImageType',
        'is_default' => 'setIsDefault',
        'nrds_id' => 'setNrdsId',
        'nrds_last_name' => 'setNrdsLastName',
        'phonetic_name' => 'setPhoneticName',
        'signature_font' => 'setSignatureFont',
        'signature_groups' => 'setSignatureGroups',
        'signature_id' => 'setSignatureId',
        'signature_initials' => 'setSignatureInitials',
        'signature_name' => 'setSignatureName',
        'signature_type' => 'setSignatureType',
        'signature_users' => 'setSignatureUsers',
        'stamp_format' => 'setStampFormat',
        'stamp_size_mm' => 'setStampSizeMm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_stamp_properties' => 'getDateStampProperties',
        'disallow_user_resize_stamp' => 'getDisallowUserResizeStamp',
        'external_id' => 'getExternalId',
        'image_type' => 'getImageType',
        'is_default' => 'getIsDefault',
        'nrds_id' => 'getNrdsId',
        'nrds_last_name' => 'getNrdsLastName',
        'phonetic_name' => 'getPhoneticName',
        'signature_font' => 'getSignatureFont',
        'signature_groups' => 'getSignatureGroups',
        'signature_id' => 'getSignatureId',
        'signature_initials' => 'getSignatureInitials',
        'signature_name' => 'getSignatureName',
        'signature_type' => 'getSignatureType',
        'signature_users' => 'getSignatureUsers',
        'stamp_format' => 'getStampFormat',
        'stamp_size_mm' => 'getStampSizeMm'
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
        $this->container['date_stamp_properties'] = isset($data['date_stamp_properties']) ? $data['date_stamp_properties'] : null;
        $this->container['disallow_user_resize_stamp'] = isset($data['disallow_user_resize_stamp']) ? $data['disallow_user_resize_stamp'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['image_type'] = isset($data['image_type']) ? $data['image_type'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['nrds_id'] = isset($data['nrds_id']) ? $data['nrds_id'] : null;
        $this->container['nrds_last_name'] = isset($data['nrds_last_name']) ? $data['nrds_last_name'] : null;
        $this->container['phonetic_name'] = isset($data['phonetic_name']) ? $data['phonetic_name'] : null;
        $this->container['signature_font'] = isset($data['signature_font']) ? $data['signature_font'] : null;
        $this->container['signature_groups'] = isset($data['signature_groups']) ? $data['signature_groups'] : null;
        $this->container['signature_id'] = isset($data['signature_id']) ? $data['signature_id'] : null;
        $this->container['signature_initials'] = isset($data['signature_initials']) ? $data['signature_initials'] : null;
        $this->container['signature_name'] = isset($data['signature_name']) ? $data['signature_name'] : null;
        $this->container['signature_type'] = isset($data['signature_type']) ? $data['signature_type'] : null;
        $this->container['signature_users'] = isset($data['signature_users']) ? $data['signature_users'] : null;
        $this->container['stamp_format'] = isset($data['stamp_format']) ? $data['stamp_format'] : null;
        $this->container['stamp_size_mm'] = isset($data['stamp_size_mm']) ? $data['stamp_size_mm'] : null;
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
     * Gets date_stamp_properties
     *
     * @return \DocuSign\Model\DateStampProperties
     */
    public function getDateStampProperties()
    {
        return $this->container['date_stamp_properties'];
    }

    /**
     * Sets date_stamp_properties
     *
     * @param \DocuSign\Model\DateStampProperties $date_stamp_properties date_stamp_properties
     *
     * @return $this
     */
    public function setDateStampProperties($date_stamp_properties)
    {
        $this->container['date_stamp_properties'] = $date_stamp_properties;

        return $this;
    }

    /**
     * Gets disallow_user_resize_stamp
     *
     * @return ?string
     */
    public function getDisallowUserResizeStamp()
    {
        return $this->container['disallow_user_resize_stamp'];
    }

    /**
     * Sets disallow_user_resize_stamp
     *
     * @param ?string $disallow_user_resize_stamp
     *
     * @return $this
     */
    public function setDisallowUserResizeStamp($disallow_user_resize_stamp)
    {
        $this->container['disallow_user_resize_stamp'] = $disallow_user_resize_stamp;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return ?string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param ?string $external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets image_type
     *
     * @return ?string
     */
    public function getImageType()
    {
        return $this->container['image_type'];
    }

    /**
     * Sets image_type
     *
     * @param ?string $image_type
     *
     * @return $this
     */
    public function setImageType($image_type)
    {
        $this->container['image_type'] = $image_type;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return ?string
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param ?string $is_default
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets nrds_id
     *
     * @return ?string
     */
    public function getNrdsId()
    {
        return $this->container['nrds_id'];
    }

    /**
     * Sets nrds_id
     *
     * @param ?string $nrds_id
     *
     * @return $this
     */
    public function setNrdsId($nrds_id)
    {
        $this->container['nrds_id'] = $nrds_id;

        return $this;
    }

    /**
     * Gets nrds_last_name
     *
     * @return ?string
     */
    public function getNrdsLastName()
    {
        return $this->container['nrds_last_name'];
    }

    /**
     * Sets nrds_last_name
     *
     * @param ?string $nrds_last_name
     *
     * @return $this
     */
    public function setNrdsLastName($nrds_last_name)
    {
        $this->container['nrds_last_name'] = $nrds_last_name;

        return $this;
    }

    /**
     * Gets phonetic_name
     *
     * @return ?string
     */
    public function getPhoneticName()
    {
        return $this->container['phonetic_name'];
    }

    /**
     * Sets phonetic_name
     *
     * @param ?string $phonetic_name
     *
     * @return $this
     */
    public function setPhoneticName($phonetic_name)
    {
        $this->container['phonetic_name'] = $phonetic_name;

        return $this;
    }

    /**
     * Gets signature_font
     *
     * @return ?string
     */
    public function getSignatureFont()
    {
        return $this->container['signature_font'];
    }

    /**
     * Sets signature_font
     *
     * @param ?string $signature_font
     *
     * @return $this
     */
    public function setSignatureFont($signature_font)
    {
        $this->container['signature_font'] = $signature_font;

        return $this;
    }

    /**
     * Gets signature_groups
     *
     * @return \DocuSign\Model\SignatureGroupDef[]
     */
    public function getSignatureGroups()
    {
        return $this->container['signature_groups'];
    }

    /**
     * Sets signature_groups
     *
     * @param \DocuSign\Model\SignatureGroupDef[] $signature_groups
     *
     * @return $this
     */
    public function setSignatureGroups($signature_groups)
    {
        $this->container['signature_groups'] = $signature_groups;

        return $this;
    }

    /**
     * Gets signature_id
     *
     * @return ?string
     */
    public function getSignatureId()
    {
        return $this->container['signature_id'];
    }

    /**
     * Sets signature_id
     *
     * @param ?string $signature_id Specifies the signature ID associated with the signature name. You can use the signature ID in the URI in place of the signature name, and the value stored in the `signatureName` property in the body is used. This allows the use of special characters (such as \"&\", \"<\", \">\") in a the signature name. Note that with each update to signatures, the returned signature ID might change, so the caller will need to trigger off the signature name to get the new signature ID.
     *
     * @return $this
     */
    public function setSignatureId($signature_id)
    {
        $this->container['signature_id'] = $signature_id;

        return $this;
    }

    /**
     * Gets signature_initials
     *
     * @return ?string
     */
    public function getSignatureInitials()
    {
        return $this->container['signature_initials'];
    }

    /**
     * Sets signature_initials
     *
     * @param ?string $signature_initials
     *
     * @return $this
     */
    public function setSignatureInitials($signature_initials)
    {
        $this->container['signature_initials'] = $signature_initials;

        return $this;
    }

    /**
     * Gets signature_name
     *
     * @return ?string
     */
    public function getSignatureName()
    {
        return $this->container['signature_name'];
    }

    /**
     * Sets signature_name
     *
     * @param ?string $signature_name Specifies the user signature name.
     *
     * @return $this
     */
    public function setSignatureName($signature_name)
    {
        $this->container['signature_name'] = $signature_name;

        return $this;
    }

    /**
     * Gets signature_type
     *
     * @return ?string
     */
    public function getSignatureType()
    {
        return $this->container['signature_type'];
    }

    /**
     * Sets signature_type
     *
     * @param ?string $signature_type
     *
     * @return $this
     */
    public function setSignatureType($signature_type)
    {
        $this->container['signature_type'] = $signature_type;

        return $this;
    }

    /**
     * Gets signature_users
     *
     * @return \DocuSign\Model\SignatureUserDef[]
     */
    public function getSignatureUsers()
    {
        return $this->container['signature_users'];
    }

    /**
     * Sets signature_users
     *
     * @param \DocuSign\Model\SignatureUserDef[] $signature_users
     *
     * @return $this
     */
    public function setSignatureUsers($signature_users)
    {
        $this->container['signature_users'] = $signature_users;

        return $this;
    }

    /**
     * Gets stamp_format
     *
     * @return ?string
     */
    public function getStampFormat()
    {
        return $this->container['stamp_format'];
    }

    /**
     * Sets stamp_format
     *
     * @param ?string $stamp_format
     *
     * @return $this
     */
    public function setStampFormat($stamp_format)
    {
        $this->container['stamp_format'] = $stamp_format;

        return $this;
    }

    /**
     * Gets stamp_size_mm
     *
     * @return ?string
     */
    public function getStampSizeMm()
    {
        return $this->container['stamp_size_mm'];
    }

    /**
     * Sets stamp_size_mm
     *
     * @param ?string $stamp_size_mm
     *
     * @return $this
     */
    public function setStampSizeMm($stamp_size_mm)
    {
        $this->container['stamp_size_mm'] = $stamp_size_mm;

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

