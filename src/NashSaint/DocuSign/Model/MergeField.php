<?php
/**
 * MergeField
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
 * MergeField Class Doc Comment
 *
 * @category    Class
 * @description Contains information for transfering values between Salesforce data fields and DocuSign Tabs.
 * @package     DocuSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MergeField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'mergeField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_sender_to_edit' => '?string',
        'allow_sender_to_edit_metadata' => '\DocuSign\Model\PropertyMetadata',
        'configuration_type' => '?string',
        'configuration_type_metadata' => '\DocuSign\Model\PropertyMetadata',
        'path' => '?string',
        'path_extended' => '\DocuSign\Model\PathExtendedElement[]',
        'path_extended_metadata' => '\DocuSign\Model\PropertyMetadata',
        'path_metadata' => '\DocuSign\Model\PropertyMetadata',
        'row' => '?string',
        'row_metadata' => '\DocuSign\Model\PropertyMetadata',
        'write_back' => '?string',
        'write_back_metadata' => '\DocuSign\Model\PropertyMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_sender_to_edit' => null,
        'allow_sender_to_edit_metadata' => null,
        'configuration_type' => null,
        'configuration_type_metadata' => null,
        'path' => null,
        'path_extended' => null,
        'path_extended_metadata' => null,
        'path_metadata' => null,
        'row' => null,
        'row_metadata' => null,
        'write_back' => null,
        'write_back_metadata' => null
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
        'allow_sender_to_edit' => 'allowSenderToEdit',
        'allow_sender_to_edit_metadata' => 'allowSenderToEditMetadata',
        'configuration_type' => 'configurationType',
        'configuration_type_metadata' => 'configurationTypeMetadata',
        'path' => 'path',
        'path_extended' => 'pathExtended',
        'path_extended_metadata' => 'pathExtendedMetadata',
        'path_metadata' => 'pathMetadata',
        'row' => 'row',
        'row_metadata' => 'rowMetadata',
        'write_back' => 'writeBack',
        'write_back_metadata' => 'writeBackMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_sender_to_edit' => 'setAllowSenderToEdit',
        'allow_sender_to_edit_metadata' => 'setAllowSenderToEditMetadata',
        'configuration_type' => 'setConfigurationType',
        'configuration_type_metadata' => 'setConfigurationTypeMetadata',
        'path' => 'setPath',
        'path_extended' => 'setPathExtended',
        'path_extended_metadata' => 'setPathExtendedMetadata',
        'path_metadata' => 'setPathMetadata',
        'row' => 'setRow',
        'row_metadata' => 'setRowMetadata',
        'write_back' => 'setWriteBack',
        'write_back_metadata' => 'setWriteBackMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_sender_to_edit' => 'getAllowSenderToEdit',
        'allow_sender_to_edit_metadata' => 'getAllowSenderToEditMetadata',
        'configuration_type' => 'getConfigurationType',
        'configuration_type_metadata' => 'getConfigurationTypeMetadata',
        'path' => 'getPath',
        'path_extended' => 'getPathExtended',
        'path_extended_metadata' => 'getPathExtendedMetadata',
        'path_metadata' => 'getPathMetadata',
        'row' => 'getRow',
        'row_metadata' => 'getRowMetadata',
        'write_back' => 'getWriteBack',
        'write_back_metadata' => 'getWriteBackMetadata'
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
        $this->container['allow_sender_to_edit'] = isset($data['allow_sender_to_edit']) ? $data['allow_sender_to_edit'] : null;
        $this->container['allow_sender_to_edit_metadata'] = isset($data['allow_sender_to_edit_metadata']) ? $data['allow_sender_to_edit_metadata'] : null;
        $this->container['configuration_type'] = isset($data['configuration_type']) ? $data['configuration_type'] : null;
        $this->container['configuration_type_metadata'] = isset($data['configuration_type_metadata']) ? $data['configuration_type_metadata'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['path_extended'] = isset($data['path_extended']) ? $data['path_extended'] : null;
        $this->container['path_extended_metadata'] = isset($data['path_extended_metadata']) ? $data['path_extended_metadata'] : null;
        $this->container['path_metadata'] = isset($data['path_metadata']) ? $data['path_metadata'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['row_metadata'] = isset($data['row_metadata']) ? $data['row_metadata'] : null;
        $this->container['write_back'] = isset($data['write_back']) ? $data['write_back'] : null;
        $this->container['write_back_metadata'] = isset($data['write_back_metadata']) ? $data['write_back_metadata'] : null;
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
     * Gets allow_sender_to_edit
     *
     * @return ?string
     */
    public function getAllowSenderToEdit()
    {
        return $this->container['allow_sender_to_edit'];
    }

    /**
     * Sets allow_sender_to_edit
     *
     * @param ?string $allow_sender_to_edit When set to **true**, the sender can modify the value of the custom tab during the sending process.
     *
     * @return $this
     */
    public function setAllowSenderToEdit($allow_sender_to_edit)
    {
        $this->container['allow_sender_to_edit'] = $allow_sender_to_edit;

        return $this;
    }

    /**
     * Gets allow_sender_to_edit_metadata
     *
     * @return \DocuSign\Model\PropertyMetadata
     */
    public function getAllowSenderToEditMetadata()
    {
        return $this->container['allow_sender_to_edit_metadata'];
    }

    /**
     * Sets allow_sender_to_edit_metadata
     *
     * @param \DocuSign\Model\PropertyMetadata $allow_sender_to_edit_metadata allow_sender_to_edit_metadata
     *
     * @return $this
     */
    public function setAllowSenderToEditMetadata($allow_sender_to_edit_metadata)
    {
        $this->container['allow_sender_to_edit_metadata'] = $allow_sender_to_edit_metadata;

        return $this;
    }

    /**
     * Gets configuration_type
     *
     * @return ?string
     */
    public function getConfigurationType()
    {
        return $this->container['configuration_type'];
    }

    /**
     * Sets configuration_type
     *
     * @param ?string $configuration_type If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @return $this
     */
    public function setConfigurationType($configuration_type)
    {
        $this->container['configuration_type'] = $configuration_type;

        return $this;
    }

    /**
     * Gets configuration_type_metadata
     *
     * @return \DocuSign\Model\PropertyMetadata
     */
    public function getConfigurationTypeMetadata()
    {
        return $this->container['configuration_type_metadata'];
    }

    /**
     * Sets configuration_type_metadata
     *
     * @param \DocuSign\Model\PropertyMetadata $configuration_type_metadata configuration_type_metadata
     *
     * @return $this
     */
    public function setConfigurationTypeMetadata($configuration_type_metadata)
    {
        $this->container['configuration_type_metadata'] = $configuration_type_metadata;

        return $this;
    }

    /**
     * Gets path
     *
     * @return ?string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param ?string $path Sets the object associated with the custom tab. Currently this is the Salesforce Object.
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets path_extended
     *
     * @return \DocuSign\Model\PathExtendedElement[]
     */
    public function getPathExtended()
    {
        return $this->container['path_extended'];
    }

    /**
     * Sets path_extended
     *
     * @param \DocuSign\Model\PathExtendedElement[] $path_extended
     *
     * @return $this
     */
    public function setPathExtended($path_extended)
    {
        $this->container['path_extended'] = $path_extended;

        return $this;
    }

    /**
     * Gets path_extended_metadata
     *
     * @return \DocuSign\Model\PropertyMetadata
     */
    public function getPathExtendedMetadata()
    {
        return $this->container['path_extended_metadata'];
    }

    /**
     * Sets path_extended_metadata
     *
     * @param \DocuSign\Model\PropertyMetadata $path_extended_metadata path_extended_metadata
     *
     * @return $this
     */
    public function setPathExtendedMetadata($path_extended_metadata)
    {
        $this->container['path_extended_metadata'] = $path_extended_metadata;

        return $this;
    }

    /**
     * Gets path_metadata
     *
     * @return \DocuSign\Model\PropertyMetadata
     */
    public function getPathMetadata()
    {
        return $this->container['path_metadata'];
    }

    /**
     * Sets path_metadata
     *
     * @param \DocuSign\Model\PropertyMetadata $path_metadata path_metadata
     *
     * @return $this
     */
    public function setPathMetadata($path_metadata)
    {
        $this->container['path_metadata'] = $path_metadata;

        return $this;
    }

    /**
     * Gets row
     *
     * @return ?string
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     * @param ?string $row Specifies the row number in a Salesforce table that the merge field value corresponds to.
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

        return $this;
    }

    /**
     * Gets row_metadata
     *
     * @return \DocuSign\Model\PropertyMetadata
     */
    public function getRowMetadata()
    {
        return $this->container['row_metadata'];
    }

    /**
     * Sets row_metadata
     *
     * @param \DocuSign\Model\PropertyMetadata $row_metadata row_metadata
     *
     * @return $this
     */
    public function setRowMetadata($row_metadata)
    {
        $this->container['row_metadata'] = $row_metadata;

        return $this;
    }

    /**
     * Gets write_back
     *
     * @return ?string
     */
    public function getWriteBack()
    {
        return $this->container['write_back'];
    }

    /**
     * Sets write_back
     *
     * @param ?string $write_back When wet to true, the information entered in the tab automatically updates the related Salesforce data when an envelope is completed.
     *
     * @return $this
     */
    public function setWriteBack($write_back)
    {
        $this->container['write_back'] = $write_back;

        return $this;
    }

    /**
     * Gets write_back_metadata
     *
     * @return \DocuSign\Model\PropertyMetadata
     */
    public function getWriteBackMetadata()
    {
        return $this->container['write_back_metadata'];
    }

    /**
     * Sets write_back_metadata
     *
     * @param \DocuSign\Model\PropertyMetadata $write_back_metadata write_back_metadata
     *
     * @return $this
     */
    public function setWriteBackMetadata($write_back_metadata)
    {
        $this->container['write_back_metadata'] = $write_back_metadata;

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

