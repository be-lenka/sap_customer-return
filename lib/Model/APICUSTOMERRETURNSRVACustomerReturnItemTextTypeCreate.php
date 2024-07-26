<?php
/**
 * APICUSTOMERRETURNSRVACustomerReturnItemTextTypeCreate
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
 * APICUSTOMERRETURNSRVACustomerReturnItemTextTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APICUSTOMERRETURNSRVACustomerReturnItemTextTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_CUSTOMER_RETURN_SRV.A_CustomerReturnItemTextType-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language' => 'string',
        'long_text_id' => 'string',
        'long_text' => 'string',
        'to_customer_return' => '\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnTypeCreate',
        'to_customer_return_item' => '\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeCreate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'language' => null,
        'long_text_id' => null,
        'long_text' => null,
        'to_customer_return' => null,
        'to_customer_return_item' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'language' => false,
		'long_text_id' => false,
		'long_text' => true,
		'to_customer_return' => false,
		'to_customer_return_item' => false
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
        'language' => 'Language',
        'long_text_id' => 'LongTextID',
        'long_text' => 'LongText',
        'to_customer_return' => 'to_CustomerReturn',
        'to_customer_return_item' => 'to_CustomerReturnItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
        'long_text_id' => 'setLongTextId',
        'long_text' => 'setLongText',
        'to_customer_return' => 'setToCustomerReturn',
        'to_customer_return_item' => 'setToCustomerReturnItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
        'long_text_id' => 'getLongTextId',
        'long_text' => 'getLongText',
        'to_customer_return' => 'getToCustomerReturn',
        'to_customer_return_item' => 'getToCustomerReturnItem'
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
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('long_text_id', $data ?? [], null);
        $this->setIfExists('long_text', $data ?? [], null);
        $this->setIfExists('to_customer_return', $data ?? [], null);
        $this->setIfExists('to_customer_return_item', $data ?? [], null);
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

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ((mb_strlen($this->container['language']) > 2)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['long_text_id'] === null) {
            $invalidProperties[] = "'long_text_id' can't be null";
        }
        if ((mb_strlen($this->container['long_text_id']) > 4)) {
            $invalidProperties[] = "invalid value for 'long_text_id', the character length must be smaller than or equal to 4.";
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
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        if ((mb_strlen($language) > 2)) {
            throw new \InvalidArgumentException('invalid length for $language when calling APICUSTOMERRETURNSRVACustomerReturnItemTextTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets long_text_id
     *
     * @return string
     */
    public function getLongTextId()
    {
        return $this->container['long_text_id'];
    }

    /**
     * Sets long_text_id
     *
     * @param string $long_text_id long_text_id
     *
     * @return self
     */
    public function setLongTextId($long_text_id)
    {
        if (is_null($long_text_id)) {
            throw new \InvalidArgumentException('non-nullable long_text_id cannot be null');
        }
        if ((mb_strlen($long_text_id) > 4)) {
            throw new \InvalidArgumentException('invalid length for $long_text_id when calling APICUSTOMERRETURNSRVACustomerReturnItemTextTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['long_text_id'] = $long_text_id;

        return $this;
    }

    /**
     * Gets long_text
     *
     * @return string|null
     */
    public function getLongText()
    {
        return $this->container['long_text'];
    }

    /**
     * Sets long_text
     *
     * @param string|null $long_text long_text
     *
     * @return self
     */
    public function setLongText($long_text)
    {
        if (is_null($long_text)) {
            array_push($this->openAPINullablesSetToNull, 'long_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('long_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['long_text'] = $long_text;

        return $this;
    }

    /**
     * Gets to_customer_return
     *
     * @return \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnTypeCreate|null
     */
    public function getToCustomerReturn()
    {
        return $this->container['to_customer_return'];
    }

    /**
     * Sets to_customer_return
     *
     * @param \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnTypeCreate|null $to_customer_return to_customer_return
     *
     * @return self
     */
    public function setToCustomerReturn($to_customer_return)
    {
        if (is_null($to_customer_return)) {
            throw new \InvalidArgumentException('non-nullable to_customer_return cannot be null');
        }
        $this->container['to_customer_return'] = $to_customer_return;

        return $this;
    }

    /**
     * Gets to_customer_return_item
     *
     * @return \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeCreate|null
     */
    public function getToCustomerReturnItem()
    {
        return $this->container['to_customer_return_item'];
    }

    /**
     * Sets to_customer_return_item
     *
     * @param \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeCreate|null $to_customer_return_item to_customer_return_item
     *
     * @return self
     */
    public function setToCustomerReturnItem($to_customer_return_item)
    {
        if (is_null($to_customer_return_item)) {
            throw new \InvalidArgumentException('non-nullable to_customer_return_item cannot be null');
        }
        $this->container['to_customer_return_item'] = $to_customer_return_item;

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


