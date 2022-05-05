<?php
/**
 * ReferralInformation
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
 * ReferralInformation Class Doc Comment
 *
 * @category    Class
 * @description A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry   ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.
 * @package     DocuSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReferralInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'referralInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'advertisement_id' => '?string',
        'enable_support' => '?string',
        'external_org_id' => '?string',
        'group_member_id' => '?string',
        'id_type' => '?string',
        'included_seats' => '?string',
        'industry' => '?string',
        'plan_start_month' => '?string',
        'promo_code' => '?string',
        'publisher_id' => '?string',
        'referral_code' => '?string',
        'referrer_name' => '?string',
        'sale_discount_amount' => '?string',
        'sale_discount_fixed_amount' => '?string',
        'sale_discount_percent' => '?string',
        'sale_discount_periods' => '?string',
        'sale_discount_seat_price_override' => '?string',
        'shopper_id' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'advertisement_id' => null,
        'enable_support' => null,
        'external_org_id' => null,
        'group_member_id' => null,
        'id_type' => null,
        'included_seats' => null,
        'industry' => null,
        'plan_start_month' => null,
        'promo_code' => null,
        'publisher_id' => null,
        'referral_code' => null,
        'referrer_name' => null,
        'sale_discount_amount' => null,
        'sale_discount_fixed_amount' => null,
        'sale_discount_percent' => null,
        'sale_discount_periods' => null,
        'sale_discount_seat_price_override' => null,
        'shopper_id' => null
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
        'advertisement_id' => 'advertisementId',
        'enable_support' => 'enableSupport',
        'external_org_id' => 'externalOrgId',
        'group_member_id' => 'groupMemberId',
        'id_type' => 'idType',
        'included_seats' => 'includedSeats',
        'industry' => 'industry',
        'plan_start_month' => 'planStartMonth',
        'promo_code' => 'promoCode',
        'publisher_id' => 'publisherId',
        'referral_code' => 'referralCode',
        'referrer_name' => 'referrerName',
        'sale_discount_amount' => 'saleDiscountAmount',
        'sale_discount_fixed_amount' => 'saleDiscountFixedAmount',
        'sale_discount_percent' => 'saleDiscountPercent',
        'sale_discount_periods' => 'saleDiscountPeriods',
        'sale_discount_seat_price_override' => 'saleDiscountSeatPriceOverride',
        'shopper_id' => 'shopperId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advertisement_id' => 'setAdvertisementId',
        'enable_support' => 'setEnableSupport',
        'external_org_id' => 'setExternalOrgId',
        'group_member_id' => 'setGroupMemberId',
        'id_type' => 'setIdType',
        'included_seats' => 'setIncludedSeats',
        'industry' => 'setIndustry',
        'plan_start_month' => 'setPlanStartMonth',
        'promo_code' => 'setPromoCode',
        'publisher_id' => 'setPublisherId',
        'referral_code' => 'setReferralCode',
        'referrer_name' => 'setReferrerName',
        'sale_discount_amount' => 'setSaleDiscountAmount',
        'sale_discount_fixed_amount' => 'setSaleDiscountFixedAmount',
        'sale_discount_percent' => 'setSaleDiscountPercent',
        'sale_discount_periods' => 'setSaleDiscountPeriods',
        'sale_discount_seat_price_override' => 'setSaleDiscountSeatPriceOverride',
        'shopper_id' => 'setShopperId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advertisement_id' => 'getAdvertisementId',
        'enable_support' => 'getEnableSupport',
        'external_org_id' => 'getExternalOrgId',
        'group_member_id' => 'getGroupMemberId',
        'id_type' => 'getIdType',
        'included_seats' => 'getIncludedSeats',
        'industry' => 'getIndustry',
        'plan_start_month' => 'getPlanStartMonth',
        'promo_code' => 'getPromoCode',
        'publisher_id' => 'getPublisherId',
        'referral_code' => 'getReferralCode',
        'referrer_name' => 'getReferrerName',
        'sale_discount_amount' => 'getSaleDiscountAmount',
        'sale_discount_fixed_amount' => 'getSaleDiscountFixedAmount',
        'sale_discount_percent' => 'getSaleDiscountPercent',
        'sale_discount_periods' => 'getSaleDiscountPeriods',
        'sale_discount_seat_price_override' => 'getSaleDiscountSeatPriceOverride',
        'shopper_id' => 'getShopperId'
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
        $this->container['advertisement_id'] = isset($data['advertisement_id']) ? $data['advertisement_id'] : null;
        $this->container['enable_support'] = isset($data['enable_support']) ? $data['enable_support'] : null;
        $this->container['external_org_id'] = isset($data['external_org_id']) ? $data['external_org_id'] : null;
        $this->container['group_member_id'] = isset($data['group_member_id']) ? $data['group_member_id'] : null;
        $this->container['id_type'] = isset($data['id_type']) ? $data['id_type'] : null;
        $this->container['included_seats'] = isset($data['included_seats']) ? $data['included_seats'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['plan_start_month'] = isset($data['plan_start_month']) ? $data['plan_start_month'] : null;
        $this->container['promo_code'] = isset($data['promo_code']) ? $data['promo_code'] : null;
        $this->container['publisher_id'] = isset($data['publisher_id']) ? $data['publisher_id'] : null;
        $this->container['referral_code'] = isset($data['referral_code']) ? $data['referral_code'] : null;
        $this->container['referrer_name'] = isset($data['referrer_name']) ? $data['referrer_name'] : null;
        $this->container['sale_discount_amount'] = isset($data['sale_discount_amount']) ? $data['sale_discount_amount'] : null;
        $this->container['sale_discount_fixed_amount'] = isset($data['sale_discount_fixed_amount']) ? $data['sale_discount_fixed_amount'] : null;
        $this->container['sale_discount_percent'] = isset($data['sale_discount_percent']) ? $data['sale_discount_percent'] : null;
        $this->container['sale_discount_periods'] = isset($data['sale_discount_periods']) ? $data['sale_discount_periods'] : null;
        $this->container['sale_discount_seat_price_override'] = isset($data['sale_discount_seat_price_override']) ? $data['sale_discount_seat_price_override'] : null;
        $this->container['shopper_id'] = isset($data['shopper_id']) ? $data['shopper_id'] : null;
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
     * Gets advertisement_id
     *
     * @return ?string
     */
    public function getAdvertisementId()
    {
        return $this->container['advertisement_id'];
    }

    /**
     * Sets advertisement_id
     *
     * @param ?string $advertisement_id A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.  ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.
     *
     * @return $this
     */
    public function setAdvertisementId($advertisement_id)
    {
        $this->container['advertisement_id'] = $advertisement_id;

        return $this;
    }

    /**
     * Gets enable_support
     *
     * @return ?string
     */
    public function getEnableSupport()
    {
        return $this->container['enable_support'];
    }

    /**
     * Sets enable_support
     *
     * @param ?string $enable_support When set to **true**, then customer support is provided as part of the account plan.
     *
     * @return $this
     */
    public function setEnableSupport($enable_support)
    {
        $this->container['enable_support'] = $enable_support;

        return $this;
    }

    /**
     * Gets external_org_id
     *
     * @return ?string
     */
    public function getExternalOrgId()
    {
        return $this->container['external_org_id'];
    }

    /**
     * Sets external_org_id
     *
     * @param ?string $external_org_id
     *
     * @return $this
     */
    public function setExternalOrgId($external_org_id)
    {
        $this->container['external_org_id'] = $external_org_id;

        return $this;
    }

    /**
     * Gets group_member_id
     *
     * @return ?string
     */
    public function getGroupMemberId()
    {
        return $this->container['group_member_id'];
    }

    /**
     * Sets group_member_id
     *
     * @param ?string $group_member_id
     *
     * @return $this
     */
    public function setGroupMemberId($group_member_id)
    {
        $this->container['group_member_id'] = $group_member_id;

        return $this;
    }

    /**
     * Gets id_type
     *
     * @return ?string
     */
    public function getIdType()
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type
     *
     * @param ?string $id_type
     *
     * @return $this
     */
    public function setIdType($id_type)
    {
        $this->container['id_type'] = $id_type;

        return $this;
    }

    /**
     * Gets included_seats
     *
     * @return ?string
     */
    public function getIncludedSeats()
    {
        return $this->container['included_seats'];
    }

    /**
     * Sets included_seats
     *
     * @param ?string $included_seats The number of seats (users) included.
     *
     * @return $this
     */
    public function setIncludedSeats($included_seats)
    {
        $this->container['included_seats'] = $included_seats;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return ?string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param ?string $industry
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets plan_start_month
     *
     * @return ?string
     */
    public function getPlanStartMonth()
    {
        return $this->container['plan_start_month'];
    }

    /**
     * Sets plan_start_month
     *
     * @param ?string $plan_start_month
     *
     * @return $this
     */
    public function setPlanStartMonth($plan_start_month)
    {
        $this->container['plan_start_month'] = $plan_start_month;

        return $this;
    }

    /**
     * Gets promo_code
     *
     * @return ?string
     */
    public function getPromoCode()
    {
        return $this->container['promo_code'];
    }

    /**
     * Sets promo_code
     *
     * @param ?string $promo_code
     *
     * @return $this
     */
    public function setPromoCode($promo_code)
    {
        $this->container['promo_code'] = $promo_code;

        return $this;
    }

    /**
     * Gets publisher_id
     *
     * @return ?string
     */
    public function getPublisherId()
    {
        return $this->container['publisher_id'];
    }

    /**
     * Sets publisher_id
     *
     * @param ?string $publisher_id
     *
     * @return $this
     */
    public function setPublisherId($publisher_id)
    {
        $this->container['publisher_id'] = $publisher_id;

        return $this;
    }

    /**
     * Gets referral_code
     *
     * @return ?string
     */
    public function getReferralCode()
    {
        return $this->container['referral_code'];
    }

    /**
     * Sets referral_code
     *
     * @param ?string $referral_code
     *
     * @return $this
     */
    public function setReferralCode($referral_code)
    {
        $this->container['referral_code'] = $referral_code;

        return $this;
    }

    /**
     * Gets referrer_name
     *
     * @return ?string
     */
    public function getReferrerName()
    {
        return $this->container['referrer_name'];
    }

    /**
     * Sets referrer_name
     *
     * @param ?string $referrer_name
     *
     * @return $this
     */
    public function setReferrerName($referrer_name)
    {
        $this->container['referrer_name'] = $referrer_name;

        return $this;
    }

    /**
     * Gets sale_discount_amount
     *
     * @return ?string
     */
    public function getSaleDiscountAmount()
    {
        return $this->container['sale_discount_amount'];
    }

    /**
     * Sets sale_discount_amount
     *
     * @param ?string $sale_discount_amount Reserved for DocuSign use only.
     *
     * @return $this
     */
    public function setSaleDiscountAmount($sale_discount_amount)
    {
        $this->container['sale_discount_amount'] = $sale_discount_amount;

        return $this;
    }

    /**
     * Gets sale_discount_fixed_amount
     *
     * @return ?string
     */
    public function getSaleDiscountFixedAmount()
    {
        return $this->container['sale_discount_fixed_amount'];
    }

    /**
     * Sets sale_discount_fixed_amount
     *
     * @param ?string $sale_discount_fixed_amount Reserved for DocuSign use only.
     *
     * @return $this
     */
    public function setSaleDiscountFixedAmount($sale_discount_fixed_amount)
    {
        $this->container['sale_discount_fixed_amount'] = $sale_discount_fixed_amount;

        return $this;
    }

    /**
     * Gets sale_discount_percent
     *
     * @return ?string
     */
    public function getSaleDiscountPercent()
    {
        return $this->container['sale_discount_percent'];
    }

    /**
     * Sets sale_discount_percent
     *
     * @param ?string $sale_discount_percent Reserved for DocuSign use only.
     *
     * @return $this
     */
    public function setSaleDiscountPercent($sale_discount_percent)
    {
        $this->container['sale_discount_percent'] = $sale_discount_percent;

        return $this;
    }

    /**
     * Gets sale_discount_periods
     *
     * @return ?string
     */
    public function getSaleDiscountPeriods()
    {
        return $this->container['sale_discount_periods'];
    }

    /**
     * Sets sale_discount_periods
     *
     * @param ?string $sale_discount_periods Reserved for DocuSign use only.
     *
     * @return $this
     */
    public function setSaleDiscountPeriods($sale_discount_periods)
    {
        $this->container['sale_discount_periods'] = $sale_discount_periods;

        return $this;
    }

    /**
     * Gets sale_discount_seat_price_override
     *
     * @return ?string
     */
    public function getSaleDiscountSeatPriceOverride()
    {
        return $this->container['sale_discount_seat_price_override'];
    }

    /**
     * Sets sale_discount_seat_price_override
     *
     * @param ?string $sale_discount_seat_price_override Reserved for DocuSign use only.
     *
     * @return $this
     */
    public function setSaleDiscountSeatPriceOverride($sale_discount_seat_price_override)
    {
        $this->container['sale_discount_seat_price_override'] = $sale_discount_seat_price_override;

        return $this;
    }

    /**
     * Gets shopper_id
     *
     * @return ?string
     */
    public function getShopperId()
    {
        return $this->container['shopper_id'];
    }

    /**
     * Sets shopper_id
     *
     * @param ?string $shopper_id
     *
     * @return $this
     */
    public function setShopperId($shopper_id)
    {
        $this->container['shopper_id'] = $shopper_id;

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

