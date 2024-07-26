<?php
/**
 * APICUSTOMERRETURNSRVACustomerReturnOverviewStatusTypeCreate
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
 * APICUSTOMERRETURNSRVACustomerReturnOverviewStatusTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APICUSTOMERRETURNSRVACustomerReturnOverviewStatusTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_CUSTOMER_RETURN_SRV.A_CustomerReturnOverviewStatusType-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rets_mgmt_process' => 'string',
        'returns_document' => 'string',
        'rets_mgmt_log_procg_status' => 'string',
        'rets_mgmt_compn_procg_status' => 'string',
        'rets_mgmt_processing_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rets_mgmt_process' => null,
        'returns_document' => null,
        'rets_mgmt_log_procg_status' => null,
        'rets_mgmt_compn_procg_status' => null,
        'rets_mgmt_processing_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'rets_mgmt_process' => false,
		'returns_document' => true,
		'rets_mgmt_log_procg_status' => true,
		'rets_mgmt_compn_procg_status' => true,
		'rets_mgmt_processing_status' => true
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
        'rets_mgmt_process' => 'RetsMgmtProcess',
        'returns_document' => 'ReturnsDocument',
        'rets_mgmt_log_procg_status' => 'RetsMgmtLogProcgStatus',
        'rets_mgmt_compn_procg_status' => 'RetsMgmtCompnProcgStatus',
        'rets_mgmt_processing_status' => 'RetsMgmtProcessingStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rets_mgmt_process' => 'setRetsMgmtProcess',
        'returns_document' => 'setReturnsDocument',
        'rets_mgmt_log_procg_status' => 'setRetsMgmtLogProcgStatus',
        'rets_mgmt_compn_procg_status' => 'setRetsMgmtCompnProcgStatus',
        'rets_mgmt_processing_status' => 'setRetsMgmtProcessingStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rets_mgmt_process' => 'getRetsMgmtProcess',
        'returns_document' => 'getReturnsDocument',
        'rets_mgmt_log_procg_status' => 'getRetsMgmtLogProcgStatus',
        'rets_mgmt_compn_procg_status' => 'getRetsMgmtCompnProcgStatus',
        'rets_mgmt_processing_status' => 'getRetsMgmtProcessingStatus'
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
        $this->setIfExists('rets_mgmt_process', $data ?? [], null);
        $this->setIfExists('returns_document', $data ?? [], null);
        $this->setIfExists('rets_mgmt_log_procg_status', $data ?? [], null);
        $this->setIfExists('rets_mgmt_compn_procg_status', $data ?? [], null);
        $this->setIfExists('rets_mgmt_processing_status', $data ?? [], null);
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

        if ($this->container['rets_mgmt_process'] === null) {
            $invalidProperties[] = "'rets_mgmt_process' can't be null";
        }
        if ((mb_strlen($this->container['rets_mgmt_process']) > 10)) {
            $invalidProperties[] = "invalid value for 'rets_mgmt_process', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['returns_document']) && (mb_strlen($this->container['returns_document']) > 30)) {
            $invalidProperties[] = "invalid value for 'returns_document', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['rets_mgmt_log_procg_status']) && (mb_strlen($this->container['rets_mgmt_log_procg_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'rets_mgmt_log_procg_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['rets_mgmt_compn_procg_status']) && (mb_strlen($this->container['rets_mgmt_compn_procg_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'rets_mgmt_compn_procg_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['rets_mgmt_processing_status']) && (mb_strlen($this->container['rets_mgmt_processing_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'rets_mgmt_processing_status', the character length must be smaller than or equal to 1.";
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
     * Gets rets_mgmt_process
     *
     * @return string
     */
    public function getRetsMgmtProcess()
    {
        return $this->container['rets_mgmt_process'];
    }

    /**
     * Sets rets_mgmt_process
     *
     * @param string $rets_mgmt_process Process Identification Number
     *
     * @return self
     */
    public function setRetsMgmtProcess($rets_mgmt_process)
    {
        if (is_null($rets_mgmt_process)) {
            throw new \InvalidArgumentException('non-nullable rets_mgmt_process cannot be null');
        }
        if ((mb_strlen($rets_mgmt_process) > 10)) {
            throw new \InvalidArgumentException('invalid length for $rets_mgmt_process when calling APICUSTOMERRETURNSRVACustomerReturnOverviewStatusTypeCreate., must be smaller than or equal to 10.');
        }

        $this->container['rets_mgmt_process'] = $rets_mgmt_process;

        return $this;
    }

    /**
     * Gets returns_document
     *
     * @return string|null
     */
    public function getReturnsDocument()
    {
        return $this->container['returns_document'];
    }

    /**
     * Sets returns_document
     *
     * @param string|null $returns_document returns_document
     *
     * @return self
     */
    public function setReturnsDocument($returns_document)
    {
        if (is_null($returns_document)) {
            array_push($this->openAPINullablesSetToNull, 'returns_document');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returns_document', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($returns_document) && (mb_strlen($returns_document) > 30)) {
            throw new \InvalidArgumentException('invalid length for $returns_document when calling APICUSTOMERRETURNSRVACustomerReturnOverviewStatusTypeCreate., must be smaller than or equal to 30.');
        }

        $this->container['returns_document'] = $returns_document;

        return $this;
    }

    /**
     * Gets rets_mgmt_log_procg_status
     *
     * @return string|null
     */
    public function getRetsMgmtLogProcgStatus()
    {
        return $this->container['rets_mgmt_log_procg_status'];
    }

    /**
     * Sets rets_mgmt_log_procg_status
     *
     * @param string|null $rets_mgmt_log_procg_status Logistical Processing Status of a Return
     *
     * @return self
     */
    public function setRetsMgmtLogProcgStatus($rets_mgmt_log_procg_status)
    {
        if (is_null($rets_mgmt_log_procg_status)) {
            array_push($this->openAPINullablesSetToNull, 'rets_mgmt_log_procg_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rets_mgmt_log_procg_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($rets_mgmt_log_procg_status) && (mb_strlen($rets_mgmt_log_procg_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $rets_mgmt_log_procg_status when calling APICUSTOMERRETURNSRVACustomerReturnOverviewStatusTypeCreate., must be smaller than or equal to 1.');
        }

        $this->container['rets_mgmt_log_procg_status'] = $rets_mgmt_log_procg_status;

        return $this;
    }

    /**
     * Gets rets_mgmt_compn_procg_status
     *
     * @return string|null
     */
    public function getRetsMgmtCompnProcgStatus()
    {
        return $this->container['rets_mgmt_compn_procg_status'];
    }

    /**
     * Sets rets_mgmt_compn_procg_status
     *
     * @param string|null $rets_mgmt_compn_procg_status Status of Returns Refund Determination
     *
     * @return self
     */
    public function setRetsMgmtCompnProcgStatus($rets_mgmt_compn_procg_status)
    {
        if (is_null($rets_mgmt_compn_procg_status)) {
            array_push($this->openAPINullablesSetToNull, 'rets_mgmt_compn_procg_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rets_mgmt_compn_procg_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($rets_mgmt_compn_procg_status) && (mb_strlen($rets_mgmt_compn_procg_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $rets_mgmt_compn_procg_status when calling APICUSTOMERRETURNSRVACustomerReturnOverviewStatusTypeCreate., must be smaller than or equal to 1.');
        }

        $this->container['rets_mgmt_compn_procg_status'] = $rets_mgmt_compn_procg_status;

        return $this;
    }

    /**
     * Gets rets_mgmt_processing_status
     *
     * @return string|null
     */
    public function getRetsMgmtProcessingStatus()
    {
        return $this->container['rets_mgmt_processing_status'];
    }

    /**
     * Sets rets_mgmt_processing_status
     *
     * @param string|null $rets_mgmt_processing_status rets_mgmt_processing_status
     *
     * @return self
     */
    public function setRetsMgmtProcessingStatus($rets_mgmt_processing_status)
    {
        if (is_null($rets_mgmt_processing_status)) {
            array_push($this->openAPINullablesSetToNull, 'rets_mgmt_processing_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rets_mgmt_processing_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($rets_mgmt_processing_status) && (mb_strlen($rets_mgmt_processing_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $rets_mgmt_processing_status when calling APICUSTOMERRETURNSRVACustomerReturnOverviewStatusTypeCreate., must be smaller than or equal to 1.');
        }

        $this->container['rets_mgmt_processing_status'] = $rets_mgmt_processing_status;

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


