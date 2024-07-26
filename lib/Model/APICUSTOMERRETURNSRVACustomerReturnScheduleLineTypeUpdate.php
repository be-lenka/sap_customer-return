<?php
/**
 * APICUSTOMERRETURNSRVACustomerReturnScheduleLineTypeUpdate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Customer Return (A2X)
 *
 * You can use this service to integrate external applications with customer return processing in SAP S/4HANA Cloud. In every API call, you can make use of the following operations:   - You can retrieve returns orders. Apply any of the filters provided or retrieve all existing data.   - You can create returns orders. Note that you must use “deep insert” requests (a header plus the following entities: header partner, header pricing element, item, item partner, and item pricing element). You cannot create headers without including any related entities.   - For existing returns orders, you can create new items. Note that you must use “deep insert” requests (with the following entities: item partner and item pricing element). You cannot create items without including any related entities.   - For existing returns orders, you can add additional business partners at header and item levels.   - For existing returns orders, you can update the header, header partner, header pricing element, item, item partner, and item pricing element.   - For existing returns orders, you can delete the header, header partner, header pricing element, item, item partner, and item pricing element.
 *
 * The version of the OpenAPI document: 1.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\SAP\CustomerReturn\Model;

use \ArrayAccess;
use \BeLenka\SAP\CustomerReturn\ObjectSerializer;

/**
 * APICUSTOMERRETURNSRVACustomerReturnScheduleLineTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APICUSTOMERRETURNSRVACustomerReturnScheduleLineTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_CUSTOMER_RETURN_SRV.A_CustomerReturnScheduleLineType-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_quantity_unit' => 'string',
        'confd_order_qty_by_matl_avail_check' => 'float',
        'delivered_qty_in_order_qty_unit' => 'float',
        'open_confd_deliv_qty_in_ord_qty_unit' => 'float',
        'deliv_block_reason_for_sched_line' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_quantity_unit' => null,
        'confd_order_qty_by_matl_avail_check' => 'decimal',
        'delivered_qty_in_order_qty_unit' => 'decimal',
        'open_confd_deliv_qty_in_ord_qty_unit' => 'decimal',
        'deliv_block_reason_for_sched_line' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order_quantity_unit' => true,
		'confd_order_qty_by_matl_avail_check' => true,
		'delivered_qty_in_order_qty_unit' => true,
		'open_confd_deliv_qty_in_ord_qty_unit' => true,
		'deliv_block_reason_for_sched_line' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_quantity_unit' => 'OrderQuantityUnit',
        'confd_order_qty_by_matl_avail_check' => 'ConfdOrderQtyByMatlAvailCheck',
        'delivered_qty_in_order_qty_unit' => 'DeliveredQtyInOrderQtyUnit',
        'open_confd_deliv_qty_in_ord_qty_unit' => 'OpenConfdDelivQtyInOrdQtyUnit',
        'deliv_block_reason_for_sched_line' => 'DelivBlockReasonForSchedLine'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_quantity_unit' => 'setOrderQuantityUnit',
        'confd_order_qty_by_matl_avail_check' => 'setConfdOrderQtyByMatlAvailCheck',
        'delivered_qty_in_order_qty_unit' => 'setDeliveredQtyInOrderQtyUnit',
        'open_confd_deliv_qty_in_ord_qty_unit' => 'setOpenConfdDelivQtyInOrdQtyUnit',
        'deliv_block_reason_for_sched_line' => 'setDelivBlockReasonForSchedLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_quantity_unit' => 'getOrderQuantityUnit',
        'confd_order_qty_by_matl_avail_check' => 'getConfdOrderQtyByMatlAvailCheck',
        'delivered_qty_in_order_qty_unit' => 'getDeliveredQtyInOrderQtyUnit',
        'open_confd_deliv_qty_in_ord_qty_unit' => 'getOpenConfdDelivQtyInOrdQtyUnit',
        'deliv_block_reason_for_sched_line' => 'getDelivBlockReasonForSchedLine'
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
        $this->setIfExists('order_quantity_unit', $data ?? [], null);
        $this->setIfExists('confd_order_qty_by_matl_avail_check', $data ?? [], null);
        $this->setIfExists('delivered_qty_in_order_qty_unit', $data ?? [], null);
        $this->setIfExists('open_confd_deliv_qty_in_ord_qty_unit', $data ?? [], null);
        $this->setIfExists('deliv_block_reason_for_sched_line', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['order_quantity_unit']) && (mb_strlen($this->container['order_quantity_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'order_quantity_unit', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['deliv_block_reason_for_sched_line']) && (mb_strlen($this->container['deliv_block_reason_for_sched_line']) > 2)) {
            $invalidProperties[] = "invalid value for 'deliv_block_reason_for_sched_line', the character length must be smaller than or equal to 2.";
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
     * Gets order_quantity_unit
     *
     * @return string|null
     */
    public function getOrderQuantityUnit()
    {
        return $this->container['order_quantity_unit'];
    }

    /**
     * Sets order_quantity_unit
     *
     * @param string|null $order_quantity_unit order_quantity_unit
     *
     * @return self
     */
    public function setOrderQuantityUnit($order_quantity_unit)
    {
        if (is_null($order_quantity_unit)) {
            array_push($this->openAPINullablesSetToNull, 'order_quantity_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order_quantity_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($order_quantity_unit) && (mb_strlen($order_quantity_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $order_quantity_unit when calling APICUSTOMERRETURNSRVACustomerReturnScheduleLineTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['order_quantity_unit'] = $order_quantity_unit;

        return $this;
    }

    /**
     * Gets confd_order_qty_by_matl_avail_check
     *
     * @return float|null
     */
    public function getConfdOrderQtyByMatlAvailCheck()
    {
        return $this->container['confd_order_qty_by_matl_avail_check'];
    }

    /**
     * Sets confd_order_qty_by_matl_avail_check
     *
     * @param float|null $confd_order_qty_by_matl_avail_check confd_order_qty_by_matl_avail_check
     *
     * @return self
     */
    public function setConfdOrderQtyByMatlAvailCheck($confd_order_qty_by_matl_avail_check)
    {
        if (is_null($confd_order_qty_by_matl_avail_check)) {
            array_push($this->openAPINullablesSetToNull, 'confd_order_qty_by_matl_avail_check');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('confd_order_qty_by_matl_avail_check', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['confd_order_qty_by_matl_avail_check'] = $confd_order_qty_by_matl_avail_check;

        return $this;
    }

    /**
     * Gets delivered_qty_in_order_qty_unit
     *
     * @return float|null
     */
    public function getDeliveredQtyInOrderQtyUnit()
    {
        return $this->container['delivered_qty_in_order_qty_unit'];
    }

    /**
     * Sets delivered_qty_in_order_qty_unit
     *
     * @param float|null $delivered_qty_in_order_qty_unit delivered_qty_in_order_qty_unit
     *
     * @return self
     */
    public function setDeliveredQtyInOrderQtyUnit($delivered_qty_in_order_qty_unit)
    {
        if (is_null($delivered_qty_in_order_qty_unit)) {
            array_push($this->openAPINullablesSetToNull, 'delivered_qty_in_order_qty_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivered_qty_in_order_qty_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['delivered_qty_in_order_qty_unit'] = $delivered_qty_in_order_qty_unit;

        return $this;
    }

    /**
     * Gets open_confd_deliv_qty_in_ord_qty_unit
     *
     * @return float|null
     */
    public function getOpenConfdDelivQtyInOrdQtyUnit()
    {
        return $this->container['open_confd_deliv_qty_in_ord_qty_unit'];
    }

    /**
     * Sets open_confd_deliv_qty_in_ord_qty_unit
     *
     * @param float|null $open_confd_deliv_qty_in_ord_qty_unit Open Confirmed Delivery Quantity
     *
     * @return self
     */
    public function setOpenConfdDelivQtyInOrdQtyUnit($open_confd_deliv_qty_in_ord_qty_unit)
    {
        if (is_null($open_confd_deliv_qty_in_ord_qty_unit)) {
            array_push($this->openAPINullablesSetToNull, 'open_confd_deliv_qty_in_ord_qty_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('open_confd_deliv_qty_in_ord_qty_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['open_confd_deliv_qty_in_ord_qty_unit'] = $open_confd_deliv_qty_in_ord_qty_unit;

        return $this;
    }

    /**
     * Gets deliv_block_reason_for_sched_line
     *
     * @return string|null
     */
    public function getDelivBlockReasonForSchedLine()
    {
        return $this->container['deliv_block_reason_for_sched_line'];
    }

    /**
     * Sets deliv_block_reason_for_sched_line
     *
     * @param string|null $deliv_block_reason_for_sched_line Schedule Line Blocked for Delivery
     *
     * @return self
     */
    public function setDelivBlockReasonForSchedLine($deliv_block_reason_for_sched_line)
    {
        if (is_null($deliv_block_reason_for_sched_line)) {
            array_push($this->openAPINullablesSetToNull, 'deliv_block_reason_for_sched_line');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deliv_block_reason_for_sched_line', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($deliv_block_reason_for_sched_line) && (mb_strlen($deliv_block_reason_for_sched_line) > 2)) {
            throw new \InvalidArgumentException('invalid length for $deliv_block_reason_for_sched_line when calling APICUSTOMERRETURNSRVACustomerReturnScheduleLineTypeUpdate., must be smaller than or equal to 2.');
        }

        $this->container['deliv_block_reason_for_sched_line'] = $deliv_block_reason_for_sched_line;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


