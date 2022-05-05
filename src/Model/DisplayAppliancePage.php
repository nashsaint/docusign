<?php
/**
 * DisplayAppliancePage
 *
 * PHP version 5
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NashSaint\DocuSign\Model;

use \ArrayAccess;

/**
 * DisplayAppliancePage Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DisplayAppliancePage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'displayAppliancePage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_id' => 'string',
        'document_name' => 'string',
        'external_document_id' => 'string',
        'height' => 'int',
        'is_first_page' => 'bool',
        'page_id' => 'string',
        'page_no' => 'int',
        'page_status' => 'string',
        'page_type' => 'string',
        'width' => 'int'
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
        'document_id' => 'documentId',
        'document_name' => 'documentName',
        'external_document_id' => 'externalDocumentId',
        'height' => 'height',
        'is_first_page' => 'isFirstPage',
        'page_id' => 'pageId',
        'page_no' => 'pageNo',
        'page_status' => 'pageStatus',
        'page_type' => 'pageType',
        'width' => 'width'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'document_id' => 'setDocumentId',
        'document_name' => 'setDocumentName',
        'external_document_id' => 'setExternalDocumentId',
        'height' => 'setHeight',
        'is_first_page' => 'setIsFirstPage',
        'page_id' => 'setPageId',
        'page_no' => 'setPageNo',
        'page_status' => 'setPageStatus',
        'page_type' => 'setPageType',
        'width' => 'setWidth'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'document_id' => 'getDocumentId',
        'document_name' => 'getDocumentName',
        'external_document_id' => 'getExternalDocumentId',
        'height' => 'getHeight',
        'is_first_page' => 'getIsFirstPage',
        'page_id' => 'getPageId',
        'page_no' => 'getPageNo',
        'page_status' => 'getPageStatus',
        'page_type' => 'getPageType',
        'width' => 'getWidth'
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
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['document_name'] = isset($data['document_name']) ? $data['document_name'] : null;
        $this->container['external_document_id'] = isset($data['external_document_id']) ? $data['external_document_id'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['is_first_page'] = isset($data['is_first_page']) ? $data['is_first_page'] : null;
        $this->container['page_id'] = isset($data['page_id']) ? $data['page_id'] : null;
        $this->container['page_no'] = isset($data['page_no']) ? $data['page_no'] : null;
        $this->container['page_status'] = isset($data['page_status']) ? $data['page_status'] : null;
        $this->container['page_type'] = isset($data['page_type']) ? $data['page_type'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
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
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets document_id
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     * @param string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets document_name
     * @return string
     */
    public function getDocumentName()
    {
        return $this->container['document_name'];
    }

    /**
     * Sets document_name
     * @param string $document_name
     * @return $this
     */
    public function setDocumentName($document_name)
    {
        $this->container['document_name'] = $document_name;

        return $this;
    }

    /**
     * Gets external_document_id
     * @return string
     */
    public function getExternalDocumentId()
    {
        return $this->container['external_document_id'];
    }

    /**
     * Sets external_document_id
     * @param string $external_document_id
     * @return $this
     */
    public function setExternalDocumentId($external_document_id)
    {
        $this->container['external_document_id'] = $external_document_id;

        return $this;
    }

    /**
     * Gets height
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param int $height Height of the tab in pixels.
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets is_first_page
     * @return bool
     */
    public function getIsFirstPage()
    {
        return $this->container['is_first_page'];
    }

    /**
     * Sets is_first_page
     * @param bool $is_first_page
     * @return $this
     */
    public function setIsFirstPage($is_first_page)
    {
        $this->container['is_first_page'] = $is_first_page;

        return $this;
    }

    /**
     * Gets page_id
     * @return string
     */
    public function getPageId()
    {
        return $this->container['page_id'];
    }

    /**
     * Sets page_id
     * @param string $page_id
     * @return $this
     */
    public function setPageId($page_id)
    {
        $this->container['page_id'] = $page_id;

        return $this;
    }

    /**
     * Gets page_no
     * @return int
     */
    public function getPageNo()
    {
        return $this->container['page_no'];
    }

    /**
     * Sets page_no
     * @param int $page_no
     * @return $this
     */
    public function setPageNo($page_no)
    {
        $this->container['page_no'] = $page_no;

        return $this;
    }

    /**
     * Gets page_status
     * @return string
     */
    public function getPageStatus()
    {
        return $this->container['page_status'];
    }

    /**
     * Sets page_status
     * @param string $page_status
     * @return $this
     */
    public function setPageStatus($page_status)
    {
        $this->container['page_status'] = $page_status;

        return $this;
    }

    /**
     * Gets page_type
     * @return string
     */
    public function getPageType()
    {
        return $this->container['page_type'];
    }

    /**
     * Sets page_type
     * @param string $page_type
     * @return $this
     */
    public function setPageType($page_type)
    {
        $this->container['page_type'] = $page_type;

        return $this;
    }

    /**
     * Gets width
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param int $width Width of the tab in pixels.
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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
            return json_encode(\DocuSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}

