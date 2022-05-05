<?php
/**
 * Watermark
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
 * Watermark Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Watermark implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'watermark';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'display_angle' => '?string',
        'enabled' => '?string',
        'font' => '?string',
        'font_color' => '?string',
        'font_size' => '?string',
        'id' => '?string',
        'image_base64' => '?string',
        'transparency' => '?string',
        'watermark_text' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'display_angle' => null,
        'enabled' => null,
        'font' => null,
        'font_color' => null,
        'font_size' => null,
        'id' => null,
        'image_base64' => null,
        'transparency' => null,
        'watermark_text' => null
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
        'display_angle' => 'displayAngle',
        'enabled' => 'enabled',
        'font' => 'font',
        'font_color' => 'fontColor',
        'font_size' => 'fontSize',
        'id' => 'id',
        'image_base64' => 'imageBase64',
        'transparency' => 'transparency',
        'watermark_text' => 'watermarkText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_angle' => 'setDisplayAngle',
        'enabled' => 'setEnabled',
        'font' => 'setFont',
        'font_color' => 'setFontColor',
        'font_size' => 'setFontSize',
        'id' => 'setId',
        'image_base64' => 'setImageBase64',
        'transparency' => 'setTransparency',
        'watermark_text' => 'setWatermarkText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_angle' => 'getDisplayAngle',
        'enabled' => 'getEnabled',
        'font' => 'getFont',
        'font_color' => 'getFontColor',
        'font_size' => 'getFontSize',
        'id' => 'getId',
        'image_base64' => 'getImageBase64',
        'transparency' => 'getTransparency',
        'watermark_text' => 'getWatermarkText'
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
        $this->container['display_angle'] = isset($data['display_angle']) ? $data['display_angle'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['font_color'] = isset($data['font_color']) ? $data['font_color'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image_base64'] = isset($data['image_base64']) ? $data['image_base64'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['watermark_text'] = isset($data['watermark_text']) ? $data['watermark_text'] : null;
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
     * Gets display_angle
     *
     * @return ?string
     */
    public function getDisplayAngle()
    {
        return $this->container['display_angle'];
    }

    /**
     * Sets display_angle
     *
     * @param ?string $display_angle
     *
     * @return $this
     */
    public function setDisplayAngle($display_angle)
    {
        $this->container['display_angle'] = $display_angle;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return ?string
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param ?string $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets font
     *
     * @return ?string
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     * @param ?string $font The font to be used for the tab value. Supported Fonts: Arial, Arial, ArialNarrow, Calibri, CourierNew, Garamond, Georgia, Helvetica,   LucidaConsole, Tahoma, TimesNewRoman, Trebuchet, Verdana, MSGothic, MSMincho, Default.
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets font_color
     *
     * @return ?string
     */
    public function getFontColor()
    {
        return $this->container['font_color'];
    }

    /**
     * Sets font_color
     *
     * @param ?string $font_color The font color used for the information in the tab.  Possible values are: Black, BrightBlue, BrightRed, DarkGreen, DarkRed, Gold, Green, NavyBlue, Purple, or White.
     *
     * @return $this
     */
    public function setFontColor($font_color)
    {
        $this->container['font_color'] = $font_color;

        return $this;
    }

    /**
     * Gets font_size
     *
     * @return ?string
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     *
     * @param ?string $font_size The font size used for the information in the tab.  Possible values are: Size7, Size8, Size9, Size10, Size11, Size12, Size14, Size16, Size18, Size20, Size22, Size24, Size26, Size28, Size36, Size48, or Size72.
     *
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;

        return $this;
    }

    /**
     * Gets id
     *
     * @return ?string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param ?string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image_base64
     *
     * @return ?string
     */
    public function getImageBase64()
    {
        return $this->container['image_base64'];
    }

    /**
     * Sets image_base64
     *
     * @param ?string $image_base64
     *
     * @return $this
     */
    public function setImageBase64($image_base64)
    {
        $this->container['image_base64'] = $image_base64;

        return $this;
    }

    /**
     * Gets transparency
     *
     * @return ?string
     */
    public function getTransparency()
    {
        return $this->container['transparency'];
    }

    /**
     * Sets transparency
     *
     * @param ?string $transparency
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

        return $this;
    }

    /**
     * Gets watermark_text
     *
     * @return ?string
     */
    public function getWatermarkText()
    {
        return $this->container['watermark_text'];
    }

    /**
     * Sets watermark_text
     *
     * @param ?string $watermark_text
     *
     * @return $this
     */
    public function setWatermarkText($watermark_text)
    {
        $this->container['watermark_text'] = $watermark_text;

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

