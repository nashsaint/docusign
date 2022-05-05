<?php
/**
 * EventNotification
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
 * EventNotification Class Doc Comment
 *
 * @category    Class
 * @description This optional complex element allows a message to be sent a specified URL when the envelope or recipient changes status. It is similar to DocuSign Connect. For example, if an envelope changes from \&quot;Sent\&quot; to \&quot;Delivered\&quot;, a message containing the updated envelope status and optionally the documents is sent to the URL. When an eventNotification is attached to an envelope using the API, it only applies to the envelope (treating the envelope as the sender). This is different from envelopes created through the console user interface, where the user is treated as the sender.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EventNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'eventNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'delivery_mode' => '?string',
        'envelope_events' => '\DocuSign\eSign\Model\EnvelopeEvent[]',
        'event_data' => '\DocuSign\eSign\Model\ConnectEventData',
        'events' => '?string[]',
        'include_certificate_of_completion' => '?string',
        'include_certificate_with_soap' => '?string',
        'include_document_fields' => '?string',
        'include_documents' => '?string',
        'include_envelope_void_reason' => '?string',
        'include_hmac' => '?string',
        'include_sender_account_as_custom_field' => '?string',
        'include_time_zone' => '?string',
        'logging_enabled' => '?string',
        'recipient_events' => '\DocuSign\eSign\Model\RecipientEvent[]',
        'require_acknowledgment' => '?string',
        'sign_message_with_x509_cert' => '?string',
        'soap_name_space' => '?string',
        'url' => '?string',
        'use_soap_interface' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'delivery_mode' => null,
        'envelope_events' => null,
        'event_data' => null,
        'events' => null,
        'include_certificate_of_completion' => null,
        'include_certificate_with_soap' => null,
        'include_document_fields' => null,
        'include_documents' => null,
        'include_envelope_void_reason' => null,
        'include_hmac' => null,
        'include_sender_account_as_custom_field' => null,
        'include_time_zone' => null,
        'logging_enabled' => null,
        'recipient_events' => null,
        'require_acknowledgment' => null,
        'sign_message_with_x509_cert' => null,
        'soap_name_space' => null,
        'url' => null,
        'use_soap_interface' => null
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
        'delivery_mode' => 'deliveryMode',
        'envelope_events' => 'envelopeEvents',
        'event_data' => 'eventData',
        'events' => 'events',
        'include_certificate_of_completion' => 'includeCertificateOfCompletion',
        'include_certificate_with_soap' => 'includeCertificateWithSoap',
        'include_document_fields' => 'includeDocumentFields',
        'include_documents' => 'includeDocuments',
        'include_envelope_void_reason' => 'includeEnvelopeVoidReason',
        'include_hmac' => 'includeHMAC',
        'include_sender_account_as_custom_field' => 'includeSenderAccountAsCustomField',
        'include_time_zone' => 'includeTimeZone',
        'logging_enabled' => 'loggingEnabled',
        'recipient_events' => 'recipientEvents',
        'require_acknowledgment' => 'requireAcknowledgment',
        'sign_message_with_x509_cert' => 'signMessageWithX509Cert',
        'soap_name_space' => 'soapNameSpace',
        'url' => 'url',
        'use_soap_interface' => 'useSoapInterface'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_mode' => 'setDeliveryMode',
        'envelope_events' => 'setEnvelopeEvents',
        'event_data' => 'setEventData',
        'events' => 'setEvents',
        'include_certificate_of_completion' => 'setIncludeCertificateOfCompletion',
        'include_certificate_with_soap' => 'setIncludeCertificateWithSoap',
        'include_document_fields' => 'setIncludeDocumentFields',
        'include_documents' => 'setIncludeDocuments',
        'include_envelope_void_reason' => 'setIncludeEnvelopeVoidReason',
        'include_hmac' => 'setIncludeHmac',
        'include_sender_account_as_custom_field' => 'setIncludeSenderAccountAsCustomField',
        'include_time_zone' => 'setIncludeTimeZone',
        'logging_enabled' => 'setLoggingEnabled',
        'recipient_events' => 'setRecipientEvents',
        'require_acknowledgment' => 'setRequireAcknowledgment',
        'sign_message_with_x509_cert' => 'setSignMessageWithX509Cert',
        'soap_name_space' => 'setSoapNameSpace',
        'url' => 'setUrl',
        'use_soap_interface' => 'setUseSoapInterface'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_mode' => 'getDeliveryMode',
        'envelope_events' => 'getEnvelopeEvents',
        'event_data' => 'getEventData',
        'events' => 'getEvents',
        'include_certificate_of_completion' => 'getIncludeCertificateOfCompletion',
        'include_certificate_with_soap' => 'getIncludeCertificateWithSoap',
        'include_document_fields' => 'getIncludeDocumentFields',
        'include_documents' => 'getIncludeDocuments',
        'include_envelope_void_reason' => 'getIncludeEnvelopeVoidReason',
        'include_hmac' => 'getIncludeHmac',
        'include_sender_account_as_custom_field' => 'getIncludeSenderAccountAsCustomField',
        'include_time_zone' => 'getIncludeTimeZone',
        'logging_enabled' => 'getLoggingEnabled',
        'recipient_events' => 'getRecipientEvents',
        'require_acknowledgment' => 'getRequireAcknowledgment',
        'sign_message_with_x509_cert' => 'getSignMessageWithX509Cert',
        'soap_name_space' => 'getSoapNameSpace',
        'url' => 'getUrl',
        'use_soap_interface' => 'getUseSoapInterface'
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
        $this->container['delivery_mode'] = isset($data['delivery_mode']) ? $data['delivery_mode'] : null;
        $this->container['envelope_events'] = isset($data['envelope_events']) ? $data['envelope_events'] : null;
        $this->container['event_data'] = isset($data['event_data']) ? $data['event_data'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['include_certificate_of_completion'] = isset($data['include_certificate_of_completion']) ? $data['include_certificate_of_completion'] : null;
        $this->container['include_certificate_with_soap'] = isset($data['include_certificate_with_soap']) ? $data['include_certificate_with_soap'] : null;
        $this->container['include_document_fields'] = isset($data['include_document_fields']) ? $data['include_document_fields'] : null;
        $this->container['include_documents'] = isset($data['include_documents']) ? $data['include_documents'] : null;
        $this->container['include_envelope_void_reason'] = isset($data['include_envelope_void_reason']) ? $data['include_envelope_void_reason'] : null;
        $this->container['include_hmac'] = isset($data['include_hmac']) ? $data['include_hmac'] : null;
        $this->container['include_sender_account_as_custom_field'] = isset($data['include_sender_account_as_custom_field']) ? $data['include_sender_account_as_custom_field'] : null;
        $this->container['include_time_zone'] = isset($data['include_time_zone']) ? $data['include_time_zone'] : null;
        $this->container['logging_enabled'] = isset($data['logging_enabled']) ? $data['logging_enabled'] : null;
        $this->container['recipient_events'] = isset($data['recipient_events']) ? $data['recipient_events'] : null;
        $this->container['require_acknowledgment'] = isset($data['require_acknowledgment']) ? $data['require_acknowledgment'] : null;
        $this->container['sign_message_with_x509_cert'] = isset($data['sign_message_with_x509_cert']) ? $data['sign_message_with_x509_cert'] : null;
        $this->container['soap_name_space'] = isset($data['soap_name_space']) ? $data['soap_name_space'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['use_soap_interface'] = isset($data['use_soap_interface']) ? $data['use_soap_interface'] : null;
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
     * Gets delivery_mode
     *
     * @return ?string
     */
    public function getDeliveryMode()
    {
        return $this->container['delivery_mode'];
    }

    /**
     * Sets delivery_mode
     *
     * @param ?string $delivery_mode
     *
     * @return $this
     */
    public function setDeliveryMode($delivery_mode)
    {
        $this->container['delivery_mode'] = $delivery_mode;

        return $this;
    }

    /**
     * Gets envelope_events
     *
     * @return \DocuSign\eSign\Model\EnvelopeEvent[]
     */
    public function getEnvelopeEvents()
    {
        return $this->container['envelope_events'];
    }

    /**
     * Sets envelope_events
     *
     * @param \DocuSign\eSign\Model\EnvelopeEvent[] $envelope_events A list of envelope-level event statuses that will trigger Connect to send updates to the endpoint specified in the `url` property.   To receive notifications, you must include either an `envelopeEvents` node or a `recipientEvents` node. You do not need to specify both.
     *
     * @return $this
     */
    public function setEnvelopeEvents($envelope_events)
    {
        $this->container['envelope_events'] = $envelope_events;

        return $this;
    }

    /**
     * Gets event_data
     *
     * @return \DocuSign\eSign\Model\ConnectEventData
     */
    public function getEventData()
    {
        return $this->container['event_data'];
    }

    /**
     * Sets event_data
     *
     * @param \DocuSign\eSign\Model\ConnectEventData $event_data event_data
     *
     * @return $this
     */
    public function setEventData($event_data)
    {
        $this->container['event_data'] = $event_data;

        return $this;
    }

    /**
     * Gets events
     *
     * @return ?string[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param ?string[] $events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets include_certificate_of_completion
     *
     * @return ?string
     */
    public function getIncludeCertificateOfCompletion()
    {
        return $this->container['include_certificate_of_completion'];
    }

    /**
     * Sets include_certificate_of_completion
     *
     * @param ?string $include_certificate_of_completion When set to **true**, the Connect Service includes the Certificate of Completion with completed envelopes.
     *
     * @return $this
     */
    public function setIncludeCertificateOfCompletion($include_certificate_of_completion)
    {
        $this->container['include_certificate_of_completion'] = $include_certificate_of_completion;

        return $this;
    }

    /**
     * Gets include_certificate_with_soap
     *
     * @return ?string
     */
    public function getIncludeCertificateWithSoap()
    {
        return $this->container['include_certificate_with_soap'];
    }

    /**
     * Sets include_certificate_with_soap
     *
     * @param ?string $include_certificate_with_soap When set to **true**, this tells the Connect service to send the DocuSign signedby certificate as part of the outgoing SOAP xml. This appears in the XML as wsse:BinarySecurityToken.
     *
     * @return $this
     */
    public function setIncludeCertificateWithSoap($include_certificate_with_soap)
    {
        $this->container['include_certificate_with_soap'] = $include_certificate_with_soap;

        return $this;
    }

    /**
     * Gets include_document_fields
     *
     * @return ?string
     */
    public function getIncludeDocumentFields()
    {
        return $this->container['include_document_fields'];
    }

    /**
     * Sets include_document_fields
     *
     * @param ?string $include_document_fields When set to **true**, the Document Fields associated with envelope documents are included in the data. Document Fields are optional custom name-value pairs added to documents using the API.
     *
     * @return $this
     */
    public function setIncludeDocumentFields($include_document_fields)
    {
        $this->container['include_document_fields'] = $include_document_fields;

        return $this;
    }

    /**
     * Gets include_documents
     *
     * @return ?string
     */
    public function getIncludeDocuments()
    {
        return $this->container['include_documents'];
    }

    /**
     * Sets include_documents
     *
     * @param ?string $include_documents When set to **true**, the PDF documents are included in the message along with the updated XML.
     *
     * @return $this
     */
    public function setIncludeDocuments($include_documents)
    {
        $this->container['include_documents'] = $include_documents;

        return $this;
    }

    /**
     * Gets include_envelope_void_reason
     *
     * @return ?string
     */
    public function getIncludeEnvelopeVoidReason()
    {
        return $this->container['include_envelope_void_reason'];
    }

    /**
     * Sets include_envelope_void_reason
     *
     * @param ?string $include_envelope_void_reason When set to **true**, this tells the Connect Service to include the void reason, as entered by the person that voided the envelope, in the message.
     *
     * @return $this
     */
    public function setIncludeEnvelopeVoidReason($include_envelope_void_reason)
    {
        $this->container['include_envelope_void_reason'] = $include_envelope_void_reason;

        return $this;
    }

    /**
     * Gets include_hmac
     *
     * @return ?string
     */
    public function getIncludeHmac()
    {
        return $this->container['include_hmac'];
    }

    /**
     * Sets include_hmac
     *
     * @param ?string $include_hmac
     *
     * @return $this
     */
    public function setIncludeHmac($include_hmac)
    {
        $this->container['include_hmac'] = $include_hmac;

        return $this;
    }

    /**
     * Gets include_sender_account_as_custom_field
     *
     * @return ?string
     */
    public function getIncludeSenderAccountAsCustomField()
    {
        return $this->container['include_sender_account_as_custom_field'];
    }

    /**
     * Sets include_sender_account_as_custom_field
     *
     * @param ?string $include_sender_account_as_custom_field When set to **true**, the sender account ID is included as a envelope custom field in the data.
     *
     * @return $this
     */
    public function setIncludeSenderAccountAsCustomField($include_sender_account_as_custom_field)
    {
        $this->container['include_sender_account_as_custom_field'] = $include_sender_account_as_custom_field;

        return $this;
    }

    /**
     * Gets include_time_zone
     *
     * @return ?string
     */
    public function getIncludeTimeZone()
    {
        return $this->container['include_time_zone'];
    }

    /**
     * Sets include_time_zone
     *
     * @param ?string $include_time_zone When set to **true**, the envelope time zone information is included in the message.
     *
     * @return $this
     */
    public function setIncludeTimeZone($include_time_zone)
    {
        $this->container['include_time_zone'] = $include_time_zone;

        return $this;
    }

    /**
     * Gets logging_enabled
     *
     * @return ?string
     */
    public function getLoggingEnabled()
    {
        return $this->container['logging_enabled'];
    }

    /**
     * Sets logging_enabled
     *
     * @param ?string $logging_enabled When set to **true**, logging is turned on for envelope events on the Web Console Connect page.
     *
     * @return $this
     */
    public function setLoggingEnabled($logging_enabled)
    {
        $this->container['logging_enabled'] = $logging_enabled;

        return $this;
    }

    /**
     * Gets recipient_events
     *
     * @return \DocuSign\eSign\Model\RecipientEvent[]
     */
    public function getRecipientEvents()
    {
        return $this->container['recipient_events'];
    }

    /**
     * Sets recipient_events
     *
     * @param \DocuSign\eSign\Model\RecipientEvent[] $recipient_events A list of recipient event statuses that will trigger Connect to send updates to   the endpoint specified in the url property.  To receive notifications, you must include either an `envelopeEvents` node or a `recipientEvents` node. You do not need to specify both.
     *
     * @return $this
     */
    public function setRecipientEvents($recipient_events)
    {
        $this->container['recipient_events'] = $recipient_events;

        return $this;
    }

    /**
     * Gets require_acknowledgment
     *
     * @return ?string
     */
    public function getRequireAcknowledgment()
    {
        return $this->container['require_acknowledgment'];
    }

    /**
     * Sets require_acknowledgment
     *
     * @param ?string $require_acknowledgment When set to **true**, the DocuSign Connect service checks that the message was received and retries on failures.
     *
     * @return $this
     */
    public function setRequireAcknowledgment($require_acknowledgment)
    {
        $this->container['require_acknowledgment'] = $require_acknowledgment;

        return $this;
    }

    /**
     * Gets sign_message_with_x509_cert
     *
     * @return ?string
     */
    public function getSignMessageWithX509Cert()
    {
        return $this->container['sign_message_with_x509_cert'];
    }

    /**
     * Sets sign_message_with_x509_cert
     *
     * @param ?string $sign_message_with_x509_cert When set to **true**, messages are signed with an X509 certificate. This provides support for 2-way SSL in the envelope.
     *
     * @return $this
     */
    public function setSignMessageWithX509Cert($sign_message_with_x509_cert)
    {
        $this->container['sign_message_with_x509_cert'] = $sign_message_with_x509_cert;

        return $this;
    }

    /**
     * Gets soap_name_space
     *
     * @return ?string
     */
    public function getSoapNameSpace()
    {
        return $this->container['soap_name_space'];
    }

    /**
     * Sets soap_name_space
     *
     * @param ?string $soap_name_space This lists the namespace in the SOAP listener provided.
     *
     * @return $this
     */
    public function setSoapNameSpace($soap_name_space)
    {
        $this->container['soap_name_space'] = $soap_name_space;

        return $this;
    }

    /**
     * Gets url
     *
     * @return ?string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param ?string $url Specifies the endpoint to which envelope updates are sent. Udpates are sent as XML unless `useSoapInterface` property is set to **true**.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets use_soap_interface
     *
     * @return ?string
     */
    public function getUseSoapInterface()
    {
        return $this->container['use_soap_interface'];
    }

    /**
     * Sets use_soap_interface
     *
     * @param ?string $use_soap_interface When set to **true**, this tells the Connect service that the user's endpoint has implemented a SOAP interface.
     *
     * @return $this
     */
    public function setUseSoapInterface($use_soap_interface)
    {
        $this->container['use_soap_interface'] = $use_soap_interface;

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

