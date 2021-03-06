<?php
/**
 * CountryPriceException
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Prepaidforge API
 *
 * The public api for prepaidforge
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CountryPriceException Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CountryPriceException implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CountryPriceException';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'date_created' => '\DateTime',
        'date_updated' => '\DateTime',
        'country' => '\OpenAPI\Client\Model\Country',
        'product_category' => 'string',
        'extra_cost_percentage' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'date_created' => 'date-time',
        'date_updated' => 'date-time',
        'country' => null,
        'product_category' => null,
        'extra_cost_percentage' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'date_created' => 'dateCreated',
        'date_updated' => 'dateUpdated',
        'country' => 'country',
        'product_category' => 'productCategory',
        'extra_cost_percentage' => 'extraCostPercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date_created' => 'setDateCreated',
        'date_updated' => 'setDateUpdated',
        'country' => 'setCountry',
        'product_category' => 'setProductCategory',
        'extra_cost_percentage' => 'setExtraCostPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date_created' => 'getDateCreated',
        'date_updated' => 'getDateUpdated',
        'country' => 'getCountry',
        'product_category' => 'getProductCategory',
        'extra_cost_percentage' => 'getExtraCostPercentage'
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
        return self::$openAPIModelName;
    }

    const PRODUCT_CATEGORY_GIFTCARD = 'GIFTCARD';
    const PRODUCT_CATEGORY_PREPAID_PHONE = 'PREPAID_PHONE';
    const PRODUCT_CATEGORY_PREPAID_INTERNET = 'PREPAID_INTERNET';
    const PRODUCT_CATEGORY_GAME = 'GAME';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductCategoryAllowableValues()
    {
        return [
            self::PRODUCT_CATEGORY_GIFTCARD,
            self::PRODUCT_CATEGORY_PREPAID_PHONE,
            self::PRODUCT_CATEGORY_PREPAID_INTERNET,
            self::PRODUCT_CATEGORY_GAME,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['date_updated'] = isset($data['date_updated']) ? $data['date_updated'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['product_category'] = isset($data['product_category']) ? $data['product_category'] : null;
        $this->container['extra_cost_percentage'] = isset($data['extra_cost_percentage']) ? $data['extra_cost_percentage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProductCategoryAllowableValues();
        if (!is_null($this->container['product_category']) && !in_array($this->container['product_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'product_category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime|null $date_created date_created
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_updated
     *
     * @return \DateTime|null
     */
    public function getDateUpdated()
    {
        return $this->container['date_updated'];
    }

    /**
     * Sets date_updated
     *
     * @param \DateTime|null $date_updated date_updated
     *
     * @return $this
     */
    public function setDateUpdated($date_updated)
    {
        $this->container['date_updated'] = $date_updated;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \OpenAPI\Client\Model\Country|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\Client\Model\Country|null $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets product_category
     *
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string|null $product_category product_category
     *
     * @return $this
     */
    public function setProductCategory($product_category)
    {
        $allowedValues = $this->getProductCategoryAllowableValues();
        if (!is_null($product_category) && !in_array($product_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'product_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_category'] = $product_category;

        return $this;
    }

    /**
     * Gets extra_cost_percentage
     *
     * @return float|null
     */
    public function getExtraCostPercentage()
    {
        return $this->container['extra_cost_percentage'];
    }

    /**
     * Sets extra_cost_percentage
     *
     * @param float|null $extra_cost_percentage extra_cost_percentage
     *
     * @return $this
     */
    public function setExtraCostPercentage($extra_cost_percentage)
    {
        $this->container['extra_cost_percentage'] = $extra_cost_percentage;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


