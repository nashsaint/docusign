<?php
/**
 * FolderItem
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
 * OpenAPI spec version: v2
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
 * FolderItem Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FolderItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'folderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'completed_date_time' => 'string',
        'created_date_time' => 'string',
        'custom_fields' => '\DocuSign\Model\CustomFieldV2[]',
        'description' => 'string',
        'envelope_id' => 'string',
        'envelope_uri' => 'string',
        'is21_cfr_part11' => 'string',
        'is_signature_provider_envelope' => 'string',
        'last_modified' => 'string',
        'name' => 'string',
        'owner_name' => 'string',
        'page_count' => 'int',
        'password' => 'string',
        'sender_email' => 'string',
        'sender_name' => 'string',
        'sent_date_time' => 'string',
        'shared' => 'string',
        'status' => 'string',
        'subject' => 'string',
        'template_id' => 'string',
        'uri' => 'string'
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
        'completed_date_time' => 'completedDateTime',
        'created_date_time' => 'createdDateTime',
        'custom_fields' => 'customFields',
        'description' => 'description',
        'envelope_id' => 'envelopeId',
        'envelope_uri' => 'envelopeUri',
        'is21_cfr_part11' => 'is21CFRPart11',
        'is_signature_provider_envelope' => 'isSignatureProviderEnvelope',
        'last_modified' => 'lastModified',
        'name' => 'name',
        'owner_name' => 'ownerName',
        'page_count' => 'pageCount',
        'password' => 'password',
        'sender_email' => 'senderEmail',
        'sender_name' => 'senderName',
        'sent_date_time' => 'sentDateTime',
        'shared' => 'shared',
        'status' => 'status',
        'subject' => 'subject',
        'template_id' => 'templateId',
        'uri' => 'uri'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'completed_date_time' => 'setCompletedDateTime',
        'created_date_time' => 'setCreatedDateTime',
        'custom_fields' => 'setCustomFields',
        'description' => 'setDescription',
        'envelope_id' => 'setEnvelopeId',
        'envelope_uri' => 'setEnvelopeUri',
        'is21_cfr_part11' => 'setIs21CfrPart11',
        'is_signature_provider_envelope' => 'setIsSignatureProviderEnvelope',
        'last_modified' => 'setLastModified',
        'name' => 'setName',
        'owner_name' => 'setOwnerName',
        'page_count' => 'setPageCount',
        'password' => 'setPassword',
        'sender_email' => 'setSenderEmail',
        'sender_name' => 'setSenderName',
        'sent_date_time' => 'setSentDateTime',
        'shared' => 'setShared',
        'status' => 'setStatus',
        'subject' => 'setSubject',
        'template_id' => 'setTemplateId',
        'uri' => 'setUri'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'completed_date_time' => 'getCompletedDateTime',
        'created_date_time' => 'getCreatedDateTime',
        'custom_fields' => 'getCustomFields',
        'description' => 'getDescription',
        'envelope_id' => 'getEnvelopeId',
        'envelope_uri' => 'getEnvelopeUri',
        'is21_cfr_part11' => 'getIs21CfrPart11',
        'is_signature_provider_envelope' => 'getIsSignatureProviderEnvelope',
        'last_modified' => 'getLastModified',
        'name' => 'getName',
        'owner_name' => 'getOwnerName',
        'page_count' => 'getPageCount',
        'password' => 'getPassword',
        'sender_email' => 'getSenderEmail',
        'sender_name' => 'getSenderName',
        'sent_date_time' => 'getSentDateTime',
        'shared' => 'getShared',
        'status' => 'getStatus',
        'subject' => 'getSubject',
        'template_id' => 'getTemplateId',
        'uri' => 'getUri'
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
        $this->container['completed_date_time'] = isset($data['completed_date_time']) ? $data['completed_date_time'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['envelope_id'] = isset($data['envelope_id']) ? $data['envelope_id'] : null;
        $this->container['envelope_uri'] = isset($data['envelope_uri']) ? $data['envelope_uri'] : null;
        $this->container['is21_cfr_part11'] = isset($data['is21_cfr_part11']) ? $data['is21_cfr_part11'] : null;
        $this->container['is_signature_provider_envelope'] = isset($data['is_signature_provider_envelope']) ? $data['is_signature_provider_envelope'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner_name'] = isset($data['owner_name']) ? $data['owner_name'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['sender_email'] = isset($data['sender_email']) ? $data['sender_email'] : null;
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : null;
        $this->container['sent_date_time'] = isset($data['sent_date_time']) ? $data['sent_date_time'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
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
     * Gets completed_date_time
     * @return string
     */
    public function getCompletedDateTime()
    {
        return $this->container['completed_date_time'];
    }

    /**
     * Sets completed_date_time
     * @param string $completed_date_time Specifies the date and time this item was completed.
     * @return $this
     */
    public function setCompletedDateTime($completed_date_time)
    {
        $this->container['completed_date_time'] = $completed_date_time;

        return $this;
    }

    /**
     * Gets created_date_time
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     * @param string $created_date_time Indicates the date and time the item was created.
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets custom_fields
     * @return \DocuSign\Model\CustomFieldV2[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     * @param \DocuSign\Model\CustomFieldV2[] $custom_fields An optional array of strings that allows the sender to provide custom data about the recipient. This information is returned in the envelope status but otherwise not used by DocuSign. Each customField string can be a maximum of 100 characters.
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets envelope_id
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->container['envelope_id'];
    }

    /**
     * Sets envelope_id
     * @param string $envelope_id The envelope ID of the envelope status that failed to post.
     * @return $this
     */
    public function setEnvelopeId($envelope_id)
    {
        $this->container['envelope_id'] = $envelope_id;

        return $this;
    }

    /**
     * Gets envelope_uri
     * @return string
     */
    public function getEnvelopeUri()
    {
        return $this->container['envelope_uri'];
    }

    /**
     * Sets envelope_uri
     * @param string $envelope_uri Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     * @return $this
     */
    public function setEnvelopeUri($envelope_uri)
    {
        $this->container['envelope_uri'] = $envelope_uri;

        return $this;
    }

    /**
     * Gets is21_cfr_part11
     * @return string
     */
    public function getIs21CfrPart11()
    {
        return $this->container['is21_cfr_part11'];
    }

    /**
     * Sets is21_cfr_part11
     * @param string $is21_cfr_part11 When set to **true**, indicates that this module is enabled on the account.
     * @return $this
     */
    public function setIs21CfrPart11($is21_cfr_part11)
    {
        $this->container['is21_cfr_part11'] = $is21_cfr_part11;

        return $this;
    }

    /**
     * Gets is_signature_provider_envelope
     * @return string
     */
    public function getIsSignatureProviderEnvelope()
    {
        return $this->container['is_signature_provider_envelope'];
    }

    /**
     * Sets is_signature_provider_envelope
     * @param string $is_signature_provider_envelope
     * @return $this
     */
    public function setIsSignatureProviderEnvelope($is_signature_provider_envelope)
    {
        $this->container['is_signature_provider_envelope'] = $is_signature_provider_envelope;

        return $this;
    }

    /**
     * Gets last_modified
     * @return string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     * @param string $last_modified
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner_name
     * @return string
     */
    public function getOwnerName()
    {
        return $this->container['owner_name'];
    }

    /**
     * Sets owner_name
     * @param string $owner_name Name of the envelope owner.
     * @return $this
     */
    public function setOwnerName($owner_name)
    {
        $this->container['owner_name'] = $owner_name;

        return $this;
    }

    /**
     * Gets page_count
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     * @param int $page_count
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets sender_email
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->container['sender_email'];
    }

    /**
     * Sets sender_email
     * @param string $sender_email
     * @return $this
     */
    public function setSenderEmail($sender_email)
    {
        $this->container['sender_email'] = $sender_email;

        return $this;
    }

    /**
     * Gets sender_name
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     * @param string $sender_name Name of the envelope sender.
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets sent_date_time
     * @return string
     */
    public function getSentDateTime()
    {
        return $this->container['sent_date_time'];
    }

    /**
     * Sets sent_date_time
     * @param string $sent_date_time The date and time the envelope was sent.
     * @return $this
     */
    public function setSentDateTime($sent_date_time)
    {
        $this->container['sent_date_time'] = $sent_date_time;

        return $this;
    }

    /**
     * Gets shared
     * @return string
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     * @param string $shared When set to **true**, this custom tab is shared.
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Indicates the envelope status. Valid values are:  * sent - The envelope is sent to the recipients.  * created - The envelope is saved as a draft and can be modified and sent later.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets template_id
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     * @param string $template_id The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     * @param string $uri
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

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


