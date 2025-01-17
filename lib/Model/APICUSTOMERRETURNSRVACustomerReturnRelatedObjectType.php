<?php
/**
 * APICUSTOMERRETURNSRVACustomerReturnRelatedObjectType
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
 * APICUSTOMERRETURNSRVACustomerReturnRelatedObjectType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APICUSTOMERRETURNSRVACustomerReturnRelatedObjectType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_CUSTOMER_RETURN_SRV.A_CustomerReturnRelatedObjectType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_return' => 'string',
        'sd_doc_related_object_sequence_nmbr' => 'string',
        'sd_document_related_object_type' => 'string',
        'sd_doc_related_object_system' => 'string',
        'sd_doc_related_object_reference1' => 'string',
        'sd_doc_related_object_reference2' => 'string',
        'to_customer_return' => '\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_return' => null,
        'sd_doc_related_object_sequence_nmbr' => null,
        'sd_document_related_object_type' => null,
        'sd_doc_related_object_system' => null,
        'sd_doc_related_object_reference1' => null,
        'sd_doc_related_object_reference2' => null,
        'to_customer_return' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_return' => false,
		'sd_doc_related_object_sequence_nmbr' => false,
		'sd_document_related_object_type' => true,
		'sd_doc_related_object_system' => true,
		'sd_doc_related_object_reference1' => true,
		'sd_doc_related_object_reference2' => true,
		'to_customer_return' => false
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
        'customer_return' => 'CustomerReturn',
        'sd_doc_related_object_sequence_nmbr' => 'SDDocRelatedObjectSequenceNmbr',
        'sd_document_related_object_type' => 'SDDocumentRelatedObjectType',
        'sd_doc_related_object_system' => 'SDDocRelatedObjectSystem',
        'sd_doc_related_object_reference1' => 'SDDocRelatedObjectReference1',
        'sd_doc_related_object_reference2' => 'SDDocRelatedObjectReference2',
        'to_customer_return' => 'to_CustomerReturn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_return' => 'setCustomerReturn',
        'sd_doc_related_object_sequence_nmbr' => 'setSdDocRelatedObjectSequenceNmbr',
        'sd_document_related_object_type' => 'setSdDocumentRelatedObjectType',
        'sd_doc_related_object_system' => 'setSdDocRelatedObjectSystem',
        'sd_doc_related_object_reference1' => 'setSdDocRelatedObjectReference1',
        'sd_doc_related_object_reference2' => 'setSdDocRelatedObjectReference2',
        'to_customer_return' => 'setToCustomerReturn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_return' => 'getCustomerReturn',
        'sd_doc_related_object_sequence_nmbr' => 'getSdDocRelatedObjectSequenceNmbr',
        'sd_document_related_object_type' => 'getSdDocumentRelatedObjectType',
        'sd_doc_related_object_system' => 'getSdDocRelatedObjectSystem',
        'sd_doc_related_object_reference1' => 'getSdDocRelatedObjectReference1',
        'sd_doc_related_object_reference2' => 'getSdDocRelatedObjectReference2',
        'to_customer_return' => 'getToCustomerReturn'
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
        $this->setIfExists('customer_return', $data ?? [], null);
        $this->setIfExists('sd_doc_related_object_sequence_nmbr', $data ?? [], null);
        $this->setIfExists('sd_document_related_object_type', $data ?? [], null);
        $this->setIfExists('sd_doc_related_object_system', $data ?? [], null);
        $this->setIfExists('sd_doc_related_object_reference1', $data ?? [], null);
        $this->setIfExists('sd_doc_related_object_reference2', $data ?? [], null);
        $this->setIfExists('to_customer_return', $data ?? [], null);
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

        if (!is_null($this->container['customer_return']) && (mb_strlen($this->container['customer_return']) > 10)) {
            $invalidProperties[] = "invalid value for 'customer_return', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['sd_doc_related_object_sequence_nmbr']) && (mb_strlen($this->container['sd_doc_related_object_sequence_nmbr']) > 4)) {
            $invalidProperties[] = "invalid value for 'sd_doc_related_object_sequence_nmbr', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['sd_document_related_object_type']) && (mb_strlen($this->container['sd_document_related_object_type']) > 5)) {
            $invalidProperties[] = "invalid value for 'sd_document_related_object_type', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['sd_doc_related_object_system']) && (mb_strlen($this->container['sd_doc_related_object_system']) > 60)) {
            $invalidProperties[] = "invalid value for 'sd_doc_related_object_system', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['sd_doc_related_object_reference1']) && (mb_strlen($this->container['sd_doc_related_object_reference1']) > 60)) {
            $invalidProperties[] = "invalid value for 'sd_doc_related_object_reference1', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['sd_doc_related_object_reference2']) && (mb_strlen($this->container['sd_doc_related_object_reference2']) > 60)) {
            $invalidProperties[] = "invalid value for 'sd_doc_related_object_reference2', the character length must be smaller than or equal to 60.";
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
     * Gets customer_return
     *
     * @return string|null
     */
    public function getCustomerReturn()
    {
        return $this->container['customer_return'];
    }

    /**
     * Sets customer_return
     *
     * @param string|null $customer_return customer_return
     *
     * @return self
     */
    public function setCustomerReturn($customer_return)
    {
        if (is_null($customer_return)) {
            throw new \InvalidArgumentException('non-nullable customer_return cannot be null');
        }
        if ((mb_strlen($customer_return) > 10)) {
            throw new \InvalidArgumentException('invalid length for $customer_return when calling APICUSTOMERRETURNSRVACustomerReturnRelatedObjectType., must be smaller than or equal to 10.');
        }

        $this->container['customer_return'] = $customer_return;

        return $this;
    }

    /**
     * Gets sd_doc_related_object_sequence_nmbr
     *
     * @return string|null
     */
    public function getSdDocRelatedObjectSequenceNmbr()
    {
        return $this->container['sd_doc_related_object_sequence_nmbr'];
    }

    /**
     * Sets sd_doc_related_object_sequence_nmbr
     *
     * @param string|null $sd_doc_related_object_sequence_nmbr Sequence Number of the Related Object of an SD Document
     *
     * @return self
     */
    public function setSdDocRelatedObjectSequenceNmbr($sd_doc_related_object_sequence_nmbr)
    {
        if (is_null($sd_doc_related_object_sequence_nmbr)) {
            throw new \InvalidArgumentException('non-nullable sd_doc_related_object_sequence_nmbr cannot be null');
        }
        if ((mb_strlen($sd_doc_related_object_sequence_nmbr) > 4)) {
            throw new \InvalidArgumentException('invalid length for $sd_doc_related_object_sequence_nmbr when calling APICUSTOMERRETURNSRVACustomerReturnRelatedObjectType., must be smaller than or equal to 4.');
        }

        $this->container['sd_doc_related_object_sequence_nmbr'] = $sd_doc_related_object_sequence_nmbr;

        return $this;
    }

    /**
     * Gets sd_document_related_object_type
     *
     * @return string|null
     */
    public function getSdDocumentRelatedObjectType()
    {
        return $this->container['sd_document_related_object_type'];
    }

    /**
     * Sets sd_document_related_object_type
     *
     * @param string|null $sd_document_related_object_type Type of the Related Object of an SD Document
     *
     * @return self
     */
    public function setSdDocumentRelatedObjectType($sd_document_related_object_type)
    {
        if (is_null($sd_document_related_object_type)) {
            array_push($this->openAPINullablesSetToNull, 'sd_document_related_object_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sd_document_related_object_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($sd_document_related_object_type) && (mb_strlen($sd_document_related_object_type) > 5)) {
            throw new \InvalidArgumentException('invalid length for $sd_document_related_object_type when calling APICUSTOMERRETURNSRVACustomerReturnRelatedObjectType., must be smaller than or equal to 5.');
        }

        $this->container['sd_document_related_object_type'] = $sd_document_related_object_type;

        return $this;
    }

    /**
     * Gets sd_doc_related_object_system
     *
     * @return string|null
     */
    public function getSdDocRelatedObjectSystem()
    {
        return $this->container['sd_doc_related_object_system'];
    }

    /**
     * Sets sd_doc_related_object_system
     *
     * @param string|null $sd_doc_related_object_system System of the Related Object of an SD Document
     *
     * @return self
     */
    public function setSdDocRelatedObjectSystem($sd_doc_related_object_system)
    {
        if (is_null($sd_doc_related_object_system)) {
            array_push($this->openAPINullablesSetToNull, 'sd_doc_related_object_system');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sd_doc_related_object_system', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($sd_doc_related_object_system) && (mb_strlen($sd_doc_related_object_system) > 60)) {
            throw new \InvalidArgumentException('invalid length for $sd_doc_related_object_system when calling APICUSTOMERRETURNSRVACustomerReturnRelatedObjectType., must be smaller than or equal to 60.');
        }

        $this->container['sd_doc_related_object_system'] = $sd_doc_related_object_system;

        return $this;
    }

    /**
     * Gets sd_doc_related_object_reference1
     *
     * @return string|null
     */
    public function getSdDocRelatedObjectReference1()
    {
        return $this->container['sd_doc_related_object_reference1'];
    }

    /**
     * Sets sd_doc_related_object_reference1
     *
     * @param string|null $sd_doc_related_object_reference1 Reference of the Related Object of an SD Document
     *
     * @return self
     */
    public function setSdDocRelatedObjectReference1($sd_doc_related_object_reference1)
    {
        if (is_null($sd_doc_related_object_reference1)) {
            array_push($this->openAPINullablesSetToNull, 'sd_doc_related_object_reference1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sd_doc_related_object_reference1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($sd_doc_related_object_reference1) && (mb_strlen($sd_doc_related_object_reference1) > 60)) {
            throw new \InvalidArgumentException('invalid length for $sd_doc_related_object_reference1 when calling APICUSTOMERRETURNSRVACustomerReturnRelatedObjectType., must be smaller than or equal to 60.');
        }

        $this->container['sd_doc_related_object_reference1'] = $sd_doc_related_object_reference1;

        return $this;
    }

    /**
     * Gets sd_doc_related_object_reference2
     *
     * @return string|null
     */
    public function getSdDocRelatedObjectReference2()
    {
        return $this->container['sd_doc_related_object_reference2'];
    }

    /**
     * Sets sd_doc_related_object_reference2
     *
     * @param string|null $sd_doc_related_object_reference2 Reference of the Related Object of an SD Document
     *
     * @return self
     */
    public function setSdDocRelatedObjectReference2($sd_doc_related_object_reference2)
    {
        if (is_null($sd_doc_related_object_reference2)) {
            array_push($this->openAPINullablesSetToNull, 'sd_doc_related_object_reference2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sd_doc_related_object_reference2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($sd_doc_related_object_reference2) && (mb_strlen($sd_doc_related_object_reference2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $sd_doc_related_object_reference2 when calling APICUSTOMERRETURNSRVACustomerReturnRelatedObjectType., must be smaller than or equal to 60.');
        }

        $this->container['sd_doc_related_object_reference2'] = $sd_doc_related_object_reference2;

        return $this;
    }

    /**
     * Gets to_customer_return
     *
     * @return \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnType|null
     */
    public function getToCustomerReturn()
    {
        return $this->container['to_customer_return'];
    }

    /**
     * Sets to_customer_return
     *
     * @param \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnType|null $to_customer_return to_customer_return
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


