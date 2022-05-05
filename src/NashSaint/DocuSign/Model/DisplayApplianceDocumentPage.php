<?php
/**
 * DisplayApplianceDocumentPage
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
 * DisplayApplianceDocumentPage Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DisplayApplianceDocumentPage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'displayApplianceDocumentPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'doc_page_count_total' => 'int',
        'document_id' => 'string',
        'document_name' => 'string',
        'extension' => 'string',
        'height72_dpi' => 'int',
        'is_attachment_type' => 'bool',
        'page' => 'int',
        'page_id' => 'string',
        'type' => 'string',
        'width72_dpi' => 'int'
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
        'doc_page_count_total' => 'docPageCountTotal',
        'document_id' => 'documentId',
        'document_name' => 'documentName',
        'extension' => 'extension',
        'height72_dpi' => 'height72DPI',
        'is_attachment_type' => 'isAttachmentType',
        'page' => 'page',
        'page_id' => 'pageId',
        'type' => 'type',
        'width72_dpi' => 'width72DPI'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'doc_page_count_total' => 'setDocPageCountTotal',
        'document_id' => 'setDocumentId',
        'document_name' => 'setDocumentName',
        'extension' => 'setExtension',
        'height72_dpi' => 'setHeight72Dpi',
        'is_attachment_type' => 'setIsAttachmentType',
        'page' => 'setPage',
        'page_id' => 'setPageId',
        'type' => 'setType',
        'width72_dpi' => 'setWidth72Dpi'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'doc_page_count_total' => 'getDocPageCountTotal',
        'document_id' => 'getDocumentId',
        'document_name' => 'getDocumentName',
        'extension' => 'getExtension',
        'height72_dpi' => 'getHeight72Dpi',
        'is_attachment_type' => 'getIsAttachmentType',
        'page' => 'getPage',
        'page_id' => 'getPageId',
        'type' => 'getType',
        'width72_dpi' => 'getWidth72Dpi'
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
        $this->container['doc_page_count_total'] = isset($data['doc_page_count_total']) ? $data['doc_page_count_total'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['document_name'] = isset($data['document_name']) ? $data['document_name'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['height72_dpi'] = isset($data['height72_dpi']) ? $data['height72_dpi'] : null;
        $this->container['is_attachment_type'] = isset($data['is_attachment_type']) ? $data['is_attachment_type'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['page_id'] = isset($data['page_id']) ? $data['page_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['width72_dpi'] = isset($data['width72_dpi']) ? $data['width72_dpi'] : null;
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
     * Gets doc_page_count_total
     * @return int
     */
    public function getDocPageCountTotal()
    {
        return $this->container['doc_page_count_total'];
    }

    /**
     * Sets doc_page_count_total
     * @param int $doc_page_count_total
     * @return $this
     */
    public function setDocPageCountTotal($doc_page_count_total)
    {
        $this->container['doc_page_count_total'] = $doc_page_count_total;

        return $this;
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
     * Gets extension
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets height72_dpi
     * @return int
     */
    public function getHeight72Dpi()
    {
        return $this->container['height72_dpi'];
    }

    /**
     * Sets height72_dpi
     * @param int $height72_dpi
     * @return $this
     */
    public function setHeight72Dpi($height72_dpi)
    {
        $this->container['height72_dpi'] = $height72_dpi;

        return $this;
    }

    /**
     * Gets is_attachment_type
     * @return bool
     */
    public function getIsAttachmentType()
    {
        return $this->container['is_attachment_type'];
    }

    /**
     * Sets is_attachment_type
     * @param bool $is_attachment_type
     * @return $this
     */
    public function setIsAttachmentType($is_attachment_type)
    {
        $this->container['is_attachment_type'] = $is_attachment_type;

        return $this;
    }

    /**
     * Gets page
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets width72_dpi
     * @return int
     */
    public function getWidth72Dpi()
    {
        return $this->container['width72_dpi'];
    }

    /**
     * Sets width72_dpi
     * @param int $width72_dpi
     * @return $this
     */
    public function setWidth72Dpi($width72_dpi)
    {
        $this->container['width72_dpi'] = $width72_dpi;

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


