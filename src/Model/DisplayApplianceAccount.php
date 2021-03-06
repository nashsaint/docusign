<?php
/**
 * DisplayApplianceAccount
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
 * DisplayApplianceAccount Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DisplayApplianceAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'displayApplianceAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => '?string',
        'opt_out_auto_nav_text_and_tab_color_updates' => '?bool',
        'show_initial_conditional_fields' => '?bool',
        'signing_version' => '?string',
        'tag_has_sig_block' => '?bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'opt_out_auto_nav_text_and_tab_color_updates' => null,
        'show_initial_conditional_fields' => null,
        'signing_version' => null,
        'tag_has_sig_block' => null
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
        'account_id' => 'accountId',
        'opt_out_auto_nav_text_and_tab_color_updates' => 'optOutAutoNavTextAndTabColorUpdates',
        'show_initial_conditional_fields' => 'showInitialConditionalFields',
        'signing_version' => 'signingVersion',
        'tag_has_sig_block' => 'tagHasSigBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'opt_out_auto_nav_text_and_tab_color_updates' => 'setOptOutAutoNavTextAndTabColorUpdates',
        'show_initial_conditional_fields' => 'setShowInitialConditionalFields',
        'signing_version' => 'setSigningVersion',
        'tag_has_sig_block' => 'setTagHasSigBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'opt_out_auto_nav_text_and_tab_color_updates' => 'getOptOutAutoNavTextAndTabColorUpdates',
        'show_initial_conditional_fields' => 'getShowInitialConditionalFields',
        'signing_version' => 'getSigningVersion',
        'tag_has_sig_block' => 'getTagHasSigBlock'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['opt_out_auto_nav_text_and_tab_color_updates'] = isset($data['opt_out_auto_nav_text_and_tab_color_updates']) ? $data['opt_out_auto_nav_text_and_tab_color_updates'] : null;
        $this->container['show_initial_conditional_fields'] = isset($data['show_initial_conditional_fields']) ? $data['show_initial_conditional_fields'] : null;
        $this->container['signing_version'] = isset($data['signing_version']) ? $data['signing_version'] : null;
        $this->container['tag_has_sig_block'] = isset($data['tag_has_sig_block']) ? $data['tag_has_sig_block'] : null;
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
     * Gets account_id
     *
     * @return ?string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param ?string $account_id The account ID associated with the envelope.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets opt_out_auto_nav_text_and_tab_color_updates
     *
     * @return ?bool
     */
    public function getOptOutAutoNavTextAndTabColorUpdates()
    {
        return $this->container['opt_out_auto_nav_text_and_tab_color_updates'];
    }

    /**
     * Sets opt_out_auto_nav_text_and_tab_color_updates
     *
     * @param ?bool $opt_out_auto_nav_text_and_tab_color_updates
     *
     * @return $this
     */
    public function setOptOutAutoNavTextAndTabColorUpdates($opt_out_auto_nav_text_and_tab_color_updates)
    {
        $this->container['opt_out_auto_nav_text_and_tab_color_updates'] = $opt_out_auto_nav_text_and_tab_color_updates;

        return $this;
    }

    /**
     * Gets show_initial_conditional_fields
     *
     * @return ?bool
     */
    public function getShowInitialConditionalFields()
    {
        return $this->container['show_initial_conditional_fields'];
    }

    /**
     * Sets show_initial_conditional_fields
     *
     * @param ?bool $show_initial_conditional_fields
     *
     * @return $this
     */
    public function setShowInitialConditionalFields($show_initial_conditional_fields)
    {
        $this->container['show_initial_conditional_fields'] = $show_initial_conditional_fields;

        return $this;
    }

    /**
     * Gets signing_version
     *
     * @return ?string
     */
    public function getSigningVersion()
    {
        return $this->container['signing_version'];
    }

    /**
     * Sets signing_version
     *
     * @param ?string $signing_version
     *
     * @return $this
     */
    public function setSigningVersion($signing_version)
    {
        $this->container['signing_version'] = $signing_version;

        return $this;
    }

    /**
     * Gets tag_has_sig_block
     *
     * @return ?bool
     */
    public function getTagHasSigBlock()
    {
        return $this->container['tag_has_sig_block'];
    }

    /**
     * Sets tag_has_sig_block
     *
     * @param ?bool $tag_has_sig_block
     *
     * @return $this
     */
    public function setTagHasSigBlock($tag_has_sig_block)
    {
        $this->container['tag_has_sig_block'] = $tag_has_sig_block;

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

