<?php
/**
 * FolderSharedItem
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
 * FolderSharedItem Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FolderSharedItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'folderSharedItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'folder_id' => '?string',
        'name' => '?string',
        'owner' => '\DocuSign\eSign\Model\UserInfo',
        'parent_folder_id' => '?string',
        'parent_folder_uri' => '?string',
        'shared' => '?string',
        'shared_groups' => '\DocuSign\eSign\Model\MemberGroupSharedItem[]',
        'shared_users' => '\DocuSign\eSign\Model\UserSharedItem[]',
        'uri' => '?string',
        'user' => '\DocuSign\eSign\Model\UserInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_details' => null,
        'folder_id' => null,
        'name' => null,
        'owner' => null,
        'parent_folder_id' => null,
        'parent_folder_uri' => null,
        'shared' => null,
        'shared_groups' => null,
        'shared_users' => null,
        'uri' => null,
        'user' => null
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
        'error_details' => 'errorDetails',
        'folder_id' => 'folderId',
        'name' => 'name',
        'owner' => 'owner',
        'parent_folder_id' => 'parentFolderId',
        'parent_folder_uri' => 'parentFolderUri',
        'shared' => 'shared',
        'shared_groups' => 'sharedGroups',
        'shared_users' => 'sharedUsers',
        'uri' => 'uri',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_details' => 'setErrorDetails',
        'folder_id' => 'setFolderId',
        'name' => 'setName',
        'owner' => 'setOwner',
        'parent_folder_id' => 'setParentFolderId',
        'parent_folder_uri' => 'setParentFolderUri',
        'shared' => 'setShared',
        'shared_groups' => 'setSharedGroups',
        'shared_users' => 'setSharedUsers',
        'uri' => 'setUri',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_details' => 'getErrorDetails',
        'folder_id' => 'getFolderId',
        'name' => 'getName',
        'owner' => 'getOwner',
        'parent_folder_id' => 'getParentFolderId',
        'parent_folder_uri' => 'getParentFolderUri',
        'shared' => 'getShared',
        'shared_groups' => 'getSharedGroups',
        'shared_users' => 'getSharedUsers',
        'uri' => 'getUri',
        'user' => 'getUser'
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
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['parent_folder_id'] = isset($data['parent_folder_id']) ? $data['parent_folder_id'] : null;
        $this->container['parent_folder_uri'] = isset($data['parent_folder_uri']) ? $data['parent_folder_uri'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['shared_groups'] = isset($data['shared_groups']) ? $data['shared_groups'] : null;
        $this->container['shared_users'] = isset($data['shared_users']) ? $data['shared_users'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
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
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details error_details
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return ?string
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param ?string $folder_id
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \DocuSign\eSign\Model\UserInfo
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \DocuSign\eSign\Model\UserInfo $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets parent_folder_id
     *
     * @return ?string
     */
    public function getParentFolderId()
    {
        return $this->container['parent_folder_id'];
    }

    /**
     * Sets parent_folder_id
     *
     * @param ?string $parent_folder_id
     *
     * @return $this
     */
    public function setParentFolderId($parent_folder_id)
    {
        $this->container['parent_folder_id'] = $parent_folder_id;

        return $this;
    }

    /**
     * Gets parent_folder_uri
     *
     * @return ?string
     */
    public function getParentFolderUri()
    {
        return $this->container['parent_folder_uri'];
    }

    /**
     * Sets parent_folder_uri
     *
     * @param ?string $parent_folder_uri
     *
     * @return $this
     */
    public function setParentFolderUri($parent_folder_uri)
    {
        $this->container['parent_folder_uri'] = $parent_folder_uri;

        return $this;
    }

    /**
     * Gets shared
     *
     * @return ?string
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     *
     * @param ?string $shared When set to **true**, this custom tab is shared.
     *
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets shared_groups
     *
     * @return \DocuSign\eSign\Model\MemberGroupSharedItem[]
     */
    public function getSharedGroups()
    {
        return $this->container['shared_groups'];
    }

    /**
     * Sets shared_groups
     *
     * @param \DocuSign\eSign\Model\MemberGroupSharedItem[] $shared_groups
     *
     * @return $this
     */
    public function setSharedGroups($shared_groups)
    {
        $this->container['shared_groups'] = $shared_groups;

        return $this;
    }

    /**
     * Gets shared_users
     *
     * @return \DocuSign\eSign\Model\UserSharedItem[]
     */
    public function getSharedUsers()
    {
        return $this->container['shared_users'];
    }

    /**
     * Sets shared_users
     *
     * @param \DocuSign\eSign\Model\UserSharedItem[] $shared_users
     *
     * @return $this
     */
    public function setSharedUsers($shared_users)
    {
        $this->container['shared_users'] = $shared_users;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return ?string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param ?string $uri
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \DocuSign\eSign\Model\UserInfo
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \DocuSign\eSign\Model\UserInfo $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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

