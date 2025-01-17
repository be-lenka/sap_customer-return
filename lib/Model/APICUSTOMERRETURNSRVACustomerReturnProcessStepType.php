<?php
/**
 * APICUSTOMERRETURNSRVACustomerReturnProcessStepType
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
 * APICUSTOMERRETURNSRVACustomerReturnProcessStepType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APICUSTOMERRETURNSRVACustomerReturnProcessStepType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_CUSTOMER_RETURN_SRV.A_CustomerReturnProcessStepType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rets_mgmt_process' => 'string',
        'rets_mgmt_process_item' => 'string',
        'rets_mgmt_proc_itm_qty_split' => 'string',
        'rets_mgmt_process_step' => 'string',
        'returns_document_type' => 'string',
        'returns_document' => 'string',
        'returns_document_item' => 'string',
        'returns_document_status' => 'string',
        'returns_document_approval_status' => 'string',
        'returns_reference_document_type' => 'string',
        'returns_reference_document' => 'string',
        'returns_reference_document_item' => 'string',
        'rets_mgmt_proc_step_exec_status' => 'string',
        'to_customer_return' => '\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnType',
        'to_customer_return_item' => '\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemType'
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
        'rets_mgmt_process_item' => null,
        'rets_mgmt_proc_itm_qty_split' => null,
        'rets_mgmt_process_step' => null,
        'returns_document_type' => null,
        'returns_document' => null,
        'returns_document_item' => null,
        'returns_document_status' => null,
        'returns_document_approval_status' => null,
        'returns_reference_document_type' => null,
        'returns_reference_document' => null,
        'returns_reference_document_item' => null,
        'rets_mgmt_proc_step_exec_status' => null,
        'to_customer_return' => null,
        'to_customer_return_item' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'rets_mgmt_process' => false,
		'rets_mgmt_process_item' => false,
		'rets_mgmt_proc_itm_qty_split' => false,
		'rets_mgmt_process_step' => false,
		'returns_document_type' => false,
		'returns_document' => false,
		'returns_document_item' => false,
		'returns_document_status' => true,
		'returns_document_approval_status' => true,
		'returns_reference_document_type' => true,
		'returns_reference_document' => true,
		'returns_reference_document_item' => true,
		'rets_mgmt_proc_step_exec_status' => true,
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
        'rets_mgmt_process' => 'RetsMgmtProcess',
        'rets_mgmt_process_item' => 'RetsMgmtProcessItem',
        'rets_mgmt_proc_itm_qty_split' => 'RetsMgmtProcItmQtySplit',
        'rets_mgmt_process_step' => 'RetsMgmtProcessStep',
        'returns_document_type' => 'ReturnsDocumentType',
        'returns_document' => 'ReturnsDocument',
        'returns_document_item' => 'ReturnsDocumentItem',
        'returns_document_status' => 'ReturnsDocumentStatus',
        'returns_document_approval_status' => 'ReturnsDocumentApprovalStatus',
        'returns_reference_document_type' => 'ReturnsReferenceDocumentType',
        'returns_reference_document' => 'ReturnsReferenceDocument',
        'returns_reference_document_item' => 'ReturnsReferenceDocumentItem',
        'rets_mgmt_proc_step_exec_status' => 'RetsMgmtProcStepExecStatus',
        'to_customer_return' => 'to_CustomerReturn',
        'to_customer_return_item' => 'to_CustomerReturnItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rets_mgmt_process' => 'setRetsMgmtProcess',
        'rets_mgmt_process_item' => 'setRetsMgmtProcessItem',
        'rets_mgmt_proc_itm_qty_split' => 'setRetsMgmtProcItmQtySplit',
        'rets_mgmt_process_step' => 'setRetsMgmtProcessStep',
        'returns_document_type' => 'setReturnsDocumentType',
        'returns_document' => 'setReturnsDocument',
        'returns_document_item' => 'setReturnsDocumentItem',
        'returns_document_status' => 'setReturnsDocumentStatus',
        'returns_document_approval_status' => 'setReturnsDocumentApprovalStatus',
        'returns_reference_document_type' => 'setReturnsReferenceDocumentType',
        'returns_reference_document' => 'setReturnsReferenceDocument',
        'returns_reference_document_item' => 'setReturnsReferenceDocumentItem',
        'rets_mgmt_proc_step_exec_status' => 'setRetsMgmtProcStepExecStatus',
        'to_customer_return' => 'setToCustomerReturn',
        'to_customer_return_item' => 'setToCustomerReturnItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rets_mgmt_process' => 'getRetsMgmtProcess',
        'rets_mgmt_process_item' => 'getRetsMgmtProcessItem',
        'rets_mgmt_proc_itm_qty_split' => 'getRetsMgmtProcItmQtySplit',
        'rets_mgmt_process_step' => 'getRetsMgmtProcessStep',
        'returns_document_type' => 'getReturnsDocumentType',
        'returns_document' => 'getReturnsDocument',
        'returns_document_item' => 'getReturnsDocumentItem',
        'returns_document_status' => 'getReturnsDocumentStatus',
        'returns_document_approval_status' => 'getReturnsDocumentApprovalStatus',
        'returns_reference_document_type' => 'getReturnsReferenceDocumentType',
        'returns_reference_document' => 'getReturnsReferenceDocument',
        'returns_reference_document_item' => 'getReturnsReferenceDocumentItem',
        'rets_mgmt_proc_step_exec_status' => 'getRetsMgmtProcStepExecStatus',
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
        $this->setIfExists('rets_mgmt_process', $data ?? [], null);
        $this->setIfExists('rets_mgmt_process_item', $data ?? [], null);
        $this->setIfExists('rets_mgmt_proc_itm_qty_split', $data ?? [], null);
        $this->setIfExists('rets_mgmt_process_step', $data ?? [], null);
        $this->setIfExists('returns_document_type', $data ?? [], null);
        $this->setIfExists('returns_document', $data ?? [], null);
        $this->setIfExists('returns_document_item', $data ?? [], null);
        $this->setIfExists('returns_document_status', $data ?? [], null);
        $this->setIfExists('returns_document_approval_status', $data ?? [], null);
        $this->setIfExists('returns_reference_document_type', $data ?? [], null);
        $this->setIfExists('returns_reference_document', $data ?? [], null);
        $this->setIfExists('returns_reference_document_item', $data ?? [], null);
        $this->setIfExists('rets_mgmt_proc_step_exec_status', $data ?? [], null);
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

        if (!is_null($this->container['rets_mgmt_process']) && (mb_strlen($this->container['rets_mgmt_process']) > 10)) {
            $invalidProperties[] = "invalid value for 'rets_mgmt_process', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['rets_mgmt_process_item']) && (mb_strlen($this->container['rets_mgmt_process_item']) > 6)) {
            $invalidProperties[] = "invalid value for 'rets_mgmt_process_item', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['rets_mgmt_proc_itm_qty_split']) && (mb_strlen($this->container['rets_mgmt_proc_itm_qty_split']) > 3)) {
            $invalidProperties[] = "invalid value for 'rets_mgmt_proc_itm_qty_split', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['rets_mgmt_process_step']) && (mb_strlen($this->container['rets_mgmt_process_step']) > 4)) {
            $invalidProperties[] = "invalid value for 'rets_mgmt_process_step', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['returns_document_type']) && (mb_strlen($this->container['returns_document_type']) > 2)) {
            $invalidProperties[] = "invalid value for 'returns_document_type', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['returns_document']) && (mb_strlen($this->container['returns_document']) > 30)) {
            $invalidProperties[] = "invalid value for 'returns_document', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['returns_document_item']) && (mb_strlen($this->container['returns_document_item']) > 10)) {
            $invalidProperties[] = "invalid value for 'returns_document_item', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['returns_document_status']) && (mb_strlen($this->container['returns_document_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'returns_document_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['returns_document_approval_status']) && (mb_strlen($this->container['returns_document_approval_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'returns_document_approval_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['returns_reference_document_type']) && (mb_strlen($this->container['returns_reference_document_type']) > 2)) {
            $invalidProperties[] = "invalid value for 'returns_reference_document_type', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['returns_reference_document']) && (mb_strlen($this->container['returns_reference_document']) > 30)) {
            $invalidProperties[] = "invalid value for 'returns_reference_document', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['returns_reference_document_item']) && (mb_strlen($this->container['returns_reference_document_item']) > 10)) {
            $invalidProperties[] = "invalid value for 'returns_reference_document_item', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['rets_mgmt_proc_step_exec_status']) && (mb_strlen($this->container['rets_mgmt_proc_step_exec_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'rets_mgmt_proc_step_exec_status', the character length must be smaller than or equal to 1.";
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
     * @return string|null
     */
    public function getRetsMgmtProcess()
    {
        return $this->container['rets_mgmt_process'];
    }

    /**
     * Sets rets_mgmt_process
     *
     * @param string|null $rets_mgmt_process Process Identification Number
     *
     * @return self
     */
    public function setRetsMgmtProcess($rets_mgmt_process)
    {
        if (is_null($rets_mgmt_process)) {
            throw new \InvalidArgumentException('non-nullable rets_mgmt_process cannot be null');
        }
        if ((mb_strlen($rets_mgmt_process) > 10)) {
            throw new \InvalidArgumentException('invalid length for $rets_mgmt_process when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 10.');
        }

        $this->container['rets_mgmt_process'] = $rets_mgmt_process;

        return $this;
    }

    /**
     * Gets rets_mgmt_process_item
     *
     * @return string|null
     */
    public function getRetsMgmtProcessItem()
    {
        return $this->container['rets_mgmt_process_item'];
    }

    /**
     * Sets rets_mgmt_process_item
     *
     * @param string|null $rets_mgmt_process_item Item Number
     *
     * @return self
     */
    public function setRetsMgmtProcessItem($rets_mgmt_process_item)
    {
        if (is_null($rets_mgmt_process_item)) {
            throw new \InvalidArgumentException('non-nullable rets_mgmt_process_item cannot be null');
        }
        if ((mb_strlen($rets_mgmt_process_item) > 6)) {
            throw new \InvalidArgumentException('invalid length for $rets_mgmt_process_item when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 6.');
        }

        $this->container['rets_mgmt_process_item'] = $rets_mgmt_process_item;

        return $this;
    }

    /**
     * Gets rets_mgmt_proc_itm_qty_split
     *
     * @return string|null
     */
    public function getRetsMgmtProcItmQtySplit()
    {
        return $this->container['rets_mgmt_proc_itm_qty_split'];
    }

    /**
     * Sets rets_mgmt_proc_itm_qty_split
     *
     * @param string|null $rets_mgmt_proc_itm_qty_split Split Identification Number
     *
     * @return self
     */
    public function setRetsMgmtProcItmQtySplit($rets_mgmt_proc_itm_qty_split)
    {
        if (is_null($rets_mgmt_proc_itm_qty_split)) {
            throw new \InvalidArgumentException('non-nullable rets_mgmt_proc_itm_qty_split cannot be null');
        }
        if ((mb_strlen($rets_mgmt_proc_itm_qty_split) > 3)) {
            throw new \InvalidArgumentException('invalid length for $rets_mgmt_proc_itm_qty_split when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 3.');
        }

        $this->container['rets_mgmt_proc_itm_qty_split'] = $rets_mgmt_proc_itm_qty_split;

        return $this;
    }

    /**
     * Gets rets_mgmt_process_step
     *
     * @return string|null
     */
    public function getRetsMgmtProcessStep()
    {
        return $this->container['rets_mgmt_process_step'];
    }

    /**
     * Sets rets_mgmt_process_step
     *
     * @param string|null $rets_mgmt_process_step rets_mgmt_process_step
     *
     * @return self
     */
    public function setRetsMgmtProcessStep($rets_mgmt_process_step)
    {
        if (is_null($rets_mgmt_process_step)) {
            throw new \InvalidArgumentException('non-nullable rets_mgmt_process_step cannot be null');
        }
        if ((mb_strlen($rets_mgmt_process_step) > 4)) {
            throw new \InvalidArgumentException('invalid length for $rets_mgmt_process_step when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 4.');
        }

        $this->container['rets_mgmt_process_step'] = $rets_mgmt_process_step;

        return $this;
    }

    /**
     * Gets returns_document_type
     *
     * @return string|null
     */
    public function getReturnsDocumentType()
    {
        return $this->container['returns_document_type'];
    }

    /**
     * Sets returns_document_type
     *
     * @param string|null $returns_document_type returns_document_type
     *
     * @return self
     */
    public function setReturnsDocumentType($returns_document_type)
    {
        if (is_null($returns_document_type)) {
            throw new \InvalidArgumentException('non-nullable returns_document_type cannot be null');
        }
        if ((mb_strlen($returns_document_type) > 2)) {
            throw new \InvalidArgumentException('invalid length for $returns_document_type when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 2.');
        }

        $this->container['returns_document_type'] = $returns_document_type;

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
            throw new \InvalidArgumentException('non-nullable returns_document cannot be null');
        }
        if ((mb_strlen($returns_document) > 30)) {
            throw new \InvalidArgumentException('invalid length for $returns_document when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 30.');
        }

        $this->container['returns_document'] = $returns_document;

        return $this;
    }

    /**
     * Gets returns_document_item
     *
     * @return string|null
     */
    public function getReturnsDocumentItem()
    {
        return $this->container['returns_document_item'];
    }

    /**
     * Sets returns_document_item
     *
     * @param string|null $returns_document_item returns_document_item
     *
     * @return self
     */
    public function setReturnsDocumentItem($returns_document_item)
    {
        if (is_null($returns_document_item)) {
            throw new \InvalidArgumentException('non-nullable returns_document_item cannot be null');
        }
        if ((mb_strlen($returns_document_item) > 10)) {
            throw new \InvalidArgumentException('invalid length for $returns_document_item when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 10.');
        }

        $this->container['returns_document_item'] = $returns_document_item;

        return $this;
    }

    /**
     * Gets returns_document_status
     *
     * @return string|null
     */
    public function getReturnsDocumentStatus()
    {
        return $this->container['returns_document_status'];
    }

    /**
     * Sets returns_document_status
     *
     * @param string|null $returns_document_status Status of Document Item
     *
     * @return self
     */
    public function setReturnsDocumentStatus($returns_document_status)
    {
        if (is_null($returns_document_status)) {
            array_push($this->openAPINullablesSetToNull, 'returns_document_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returns_document_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($returns_document_status) && (mb_strlen($returns_document_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $returns_document_status when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 1.');
        }

        $this->container['returns_document_status'] = $returns_document_status;

        return $this;
    }

    /**
     * Gets returns_document_approval_status
     *
     * @return string|null
     */
    public function getReturnsDocumentApprovalStatus()
    {
        return $this->container['returns_document_approval_status'];
    }

    /**
     * Sets returns_document_approval_status
     *
     * @param string|null $returns_document_approval_status Approval Status of Returns Process
     *
     * @return self
     */
    public function setReturnsDocumentApprovalStatus($returns_document_approval_status)
    {
        if (is_null($returns_document_approval_status)) {
            array_push($this->openAPINullablesSetToNull, 'returns_document_approval_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returns_document_approval_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($returns_document_approval_status) && (mb_strlen($returns_document_approval_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $returns_document_approval_status when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 1.');
        }

        $this->container['returns_document_approval_status'] = $returns_document_approval_status;

        return $this;
    }

    /**
     * Gets returns_reference_document_type
     *
     * @return string|null
     */
    public function getReturnsReferenceDocumentType()
    {
        return $this->container['returns_reference_document_type'];
    }

    /**
     * Sets returns_reference_document_type
     *
     * @param string|null $returns_reference_document_type returns_reference_document_type
     *
     * @return self
     */
    public function setReturnsReferenceDocumentType($returns_reference_document_type)
    {
        if (is_null($returns_reference_document_type)) {
            array_push($this->openAPINullablesSetToNull, 'returns_reference_document_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returns_reference_document_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($returns_reference_document_type) && (mb_strlen($returns_reference_document_type) > 2)) {
            throw new \InvalidArgumentException('invalid length for $returns_reference_document_type when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 2.');
        }

        $this->container['returns_reference_document_type'] = $returns_reference_document_type;

        return $this;
    }

    /**
     * Gets returns_reference_document
     *
     * @return string|null
     */
    public function getReturnsReferenceDocument()
    {
        return $this->container['returns_reference_document'];
    }

    /**
     * Sets returns_reference_document
     *
     * @param string|null $returns_reference_document returns_reference_document
     *
     * @return self
     */
    public function setReturnsReferenceDocument($returns_reference_document)
    {
        if (is_null($returns_reference_document)) {
            array_push($this->openAPINullablesSetToNull, 'returns_reference_document');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returns_reference_document', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($returns_reference_document) && (mb_strlen($returns_reference_document) > 30)) {
            throw new \InvalidArgumentException('invalid length for $returns_reference_document when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 30.');
        }

        $this->container['returns_reference_document'] = $returns_reference_document;

        return $this;
    }

    /**
     * Gets returns_reference_document_item
     *
     * @return string|null
     */
    public function getReturnsReferenceDocumentItem()
    {
        return $this->container['returns_reference_document_item'];
    }

    /**
     * Sets returns_reference_document_item
     *
     * @param string|null $returns_reference_document_item returns_reference_document_item
     *
     * @return self
     */
    public function setReturnsReferenceDocumentItem($returns_reference_document_item)
    {
        if (is_null($returns_reference_document_item)) {
            array_push($this->openAPINullablesSetToNull, 'returns_reference_document_item');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returns_reference_document_item', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($returns_reference_document_item) && (mb_strlen($returns_reference_document_item) > 10)) {
            throw new \InvalidArgumentException('invalid length for $returns_reference_document_item when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 10.');
        }

        $this->container['returns_reference_document_item'] = $returns_reference_document_item;

        return $this;
    }

    /**
     * Gets rets_mgmt_proc_step_exec_status
     *
     * @return string|null
     */
    public function getRetsMgmtProcStepExecStatus()
    {
        return $this->container['rets_mgmt_proc_step_exec_status'];
    }

    /**
     * Sets rets_mgmt_proc_step_exec_status
     *
     * @param string|null $rets_mgmt_proc_step_exec_status Execution Step Status
     *
     * @return self
     */
    public function setRetsMgmtProcStepExecStatus($rets_mgmt_proc_step_exec_status)
    {
        if (is_null($rets_mgmt_proc_step_exec_status)) {
            array_push($this->openAPINullablesSetToNull, 'rets_mgmt_proc_step_exec_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rets_mgmt_proc_step_exec_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($rets_mgmt_proc_step_exec_status) && (mb_strlen($rets_mgmt_proc_step_exec_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $rets_mgmt_proc_step_exec_status when calling APICUSTOMERRETURNSRVACustomerReturnProcessStepType., must be smaller than or equal to 1.');
        }

        $this->container['rets_mgmt_proc_step_exec_status'] = $rets_mgmt_proc_step_exec_status;

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
     * Gets to_customer_return_item
     *
     * @return \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemType|null
     */
    public function getToCustomerReturnItem()
    {
        return $this->container['to_customer_return_item'];
    }

    /**
     * Sets to_customer_return_item
     *
     * @param \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemType|null $to_customer_return_item to_customer_return_item
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


