<?php
/**
 * SkuRequest
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
 * SkuRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SkuRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stock_id' => 'int',
        'sku' => 'string',
        'price' => 'float',
        'code_type' => 'string',
        'quantity' => 'float',
        'custom_order_reference' => 'string',
        'quantity_handled' => 'int',
        'request_handled' => 'bool',
        'quantity_needed' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'stock_id' => 'int64',
        'sku' => null,
        'price' => null,
        'code_type' => null,
        'quantity' => null,
        'custom_order_reference' => null,
        'quantity_handled' => 'int32',
        'request_handled' => null,
        'quantity_needed' => null
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
        'stock_id' => 'stockId',
        'sku' => 'sku',
        'price' => 'price',
        'code_type' => 'codeType',
        'quantity' => 'quantity',
        'custom_order_reference' => 'customOrderReference',
        'quantity_handled' => 'quantityHandled',
        'request_handled' => 'requestHandled',
        'quantity_needed' => 'quantityNeeded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stock_id' => 'setStockId',
        'sku' => 'setSku',
        'price' => 'setPrice',
        'code_type' => 'setCodeType',
        'quantity' => 'setQuantity',
        'custom_order_reference' => 'setCustomOrderReference',
        'quantity_handled' => 'setQuantityHandled',
        'request_handled' => 'setRequestHandled',
        'quantity_needed' => 'setQuantityNeeded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stock_id' => 'getStockId',
        'sku' => 'getSku',
        'price' => 'getPrice',
        'code_type' => 'getCodeType',
        'quantity' => 'getQuantity',
        'custom_order_reference' => 'getCustomOrderReference',
        'quantity_handled' => 'getQuantityHandled',
        'request_handled' => 'getRequestHandled',
        'quantity_needed' => 'getQuantityNeeded'
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

    const CODE_TYPE_TEXT = 'TEXT';
    const CODE_TYPE_SCAN = 'SCAN';
    const CODE_TYPE_FULLSCAN = 'FULLSCAN';
    const CODE_TYPE_OCR = 'OCR';
    const CODE_TYPE_UNKNOWN = 'UNKNOWN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeTypeAllowableValues()
    {
        return [
            self::CODE_TYPE_TEXT,
            self::CODE_TYPE_SCAN,
            self::CODE_TYPE_FULLSCAN,
            self::CODE_TYPE_OCR,
            self::CODE_TYPE_UNKNOWN,
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
        $this->container['stock_id'] = isset($data['stock_id']) ? $data['stock_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['code_type'] = isset($data['code_type']) ? $data['code_type'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['custom_order_reference'] = isset($data['custom_order_reference']) ? $data['custom_order_reference'] : null;
        $this->container['quantity_handled'] = isset($data['quantity_handled']) ? $data['quantity_handled'] : null;
        $this->container['request_handled'] = isset($data['request_handled']) ? $data['request_handled'] : null;
        $this->container['quantity_needed'] = isset($data['quantity_needed']) ? $data['quantity_needed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCodeTypeAllowableValues();
        if (!is_null($this->container['code_type']) && !in_array($this->container['code_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'code_type', must be one of '%s'",
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
     * Gets stock_id
     *
     * @return int|null
     */
    public function getStockId()
    {
        return $this->container['stock_id'];
    }

    /**
     * Sets stock_id
     *
     * @param int|null $stock_id stock_id
     *
     * @return $this
     */
    public function setStockId($stock_id)
    {
        $this->container['stock_id'] = $stock_id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets code_type
     *
     * @return string|null
     */
    public function getCodeType()
    {
        return $this->container['code_type'];
    }

    /**
     * Sets code_type
     *
     * @param string|null $code_type code_type
     *
     * @return $this
     */
    public function setCodeType($code_type)
    {
        $allowedValues = $this->getCodeTypeAllowableValues();
        if (!is_null($code_type) && !in_array($code_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'code_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code_type'] = $code_type;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets custom_order_reference
     *
     * @return string|null
     */
    public function getCustomOrderReference()
    {
        return $this->container['custom_order_reference'];
    }

    /**
     * Sets custom_order_reference
     *
     * @param string|null $custom_order_reference custom_order_reference
     *
     * @return $this
     */
    public function setCustomOrderReference($custom_order_reference)
    {
        $this->container['custom_order_reference'] = $custom_order_reference;

        return $this;
    }

    /**
     * Gets quantity_handled
     *
     * @return int|null
     */
    public function getQuantityHandled()
    {
        return $this->container['quantity_handled'];
    }

    /**
     * Sets quantity_handled
     *
     * @param int|null $quantity_handled quantity_handled
     *
     * @return $this
     */
    public function setQuantityHandled($quantity_handled)
    {
        $this->container['quantity_handled'] = $quantity_handled;

        return $this;
    }

    /**
     * Gets request_handled
     *
     * @return bool|null
     */
    public function getRequestHandled()
    {
        return $this->container['request_handled'];
    }

    /**
     * Sets request_handled
     *
     * @param bool|null $request_handled request_handled
     *
     * @return $this
     */
    public function setRequestHandled($request_handled)
    {
        $this->container['request_handled'] = $request_handled;

        return $this;
    }

    /**
     * Gets quantity_needed
     *
     * @return float|null
     */
    public function getQuantityNeeded()
    {
        return $this->container['quantity_needed'];
    }

    /**
     * Sets quantity_needed
     *
     * @param float|null $quantity_needed quantity_needed
     *
     * @return $this
     */
    public function setQuantityNeeded($quantity_needed)
    {
        $this->container['quantity_needed'] = $quantity_needed;

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


