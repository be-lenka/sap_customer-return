# BeLenka\SAP\CustomerReturn\ReturnProcessStepApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToProcessStepGet()**](ReturnProcessStepApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToProcessStepGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_ProcessStep | Reads the advanced returns process steps of a specific item. |
| [**aCustomerReturnProcessStepGet()**](ReturnProcessStepApi.md#aCustomerReturnProcessStepGet) | **GET** /A_CustomerReturnProcessStep | Reads all advanced returns process steps. |
| [**aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemGet()**](ReturnProcessStepApi.md#aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemGet) | **GET** /A_CustomerReturnProcessStep(RetsMgmtProcess&#x3D;&#39;{RetsMgmtProcess}&#39;,RetsMgmtProcessItem&#x3D;&#39;{RetsMgmtProcessItem}&#39;,RetsMgmtProcItmQtySplit&#x3D;&#39;{RetsMgmtProcItmQtySplit}&#39;,RetsMgmtProcessStep&#x3D;&#39;{RetsMgmtProcessStep}&#39;,ReturnsDocumentType&#x3D;&#39;{ReturnsDocumentType}&#39;,ReturnsDocument&#x3D;&#39;{ReturnsDocument}&#39;,ReturnsDocumentItem&#x3D;&#39;{ReturnsDocumentItem}&#39;) | Reads a specific advanced returns process step. |
| [**aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet()**](ReturnProcessStepApi.md#aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet) | **GET** /A_CustomerReturnProcessStep(RetsMgmtProcess&#x3D;&#39;{RetsMgmtProcess}&#39;,RetsMgmtProcessItem&#x3D;&#39;{RetsMgmtProcessItem}&#39;,RetsMgmtProcItmQtySplit&#x3D;&#39;{RetsMgmtProcItmQtySplit}&#39;,RetsMgmtProcessStep&#x3D;&#39;{RetsMgmtProcessStep}&#39;,ReturnsDocumentType&#x3D;&#39;{ReturnsDocumentType}&#39;,ReturnsDocument&#x3D;&#39;{ReturnsDocument}&#39;,ReturnsDocumentItem&#x3D;&#39;{ReturnsDocumentItem}&#39;)/to_CustomerReturn | Reads the returns order header for a specific advanced returns process step. |
| [**aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnItemGet()**](ReturnProcessStepApi.md#aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnItemGet) | **GET** /A_CustomerReturnProcessStep(RetsMgmtProcess&#x3D;&#39;{RetsMgmtProcess}&#39;,RetsMgmtProcessItem&#x3D;&#39;{RetsMgmtProcessItem}&#39;,RetsMgmtProcItmQtySplit&#x3D;&#39;{RetsMgmtProcItmQtySplit}&#39;,RetsMgmtProcessStep&#x3D;&#39;{RetsMgmtProcessStep}&#39;,ReturnsDocumentType&#x3D;&#39;{ReturnsDocumentType}&#39;,ReturnsDocument&#x3D;&#39;{ReturnsDocument}&#39;,ReturnsDocumentItem&#x3D;&#39;{ReturnsDocumentItem}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific advanced returns process step. |


## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToProcessStepGet()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToProcessStepGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper8
```

Reads the advanced returns process steps of a specific item.

Reads the process step data from a specific returns order item, which the consumer specifies by passing the returns order number and item number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnProcessStepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$customer_return_item = 'customer_return_item_example'; // string | Customer Return Item
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToProcessStepGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnProcessStepApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToProcessStepGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **customer_return_item** | **string**| Customer Return Item | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper8**](../Model/Wrapper8.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnProcessStepGet()`

```php
aCustomerReturnProcessStepGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper8
```

Reads all advanced returns process steps.

Reads process step data from all returns order items in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnProcessStepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnProcessStepGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnProcessStepApi->aCustomerReturnProcessStepGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper8**](../Model/Wrapper8.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemGet()`

```php
aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemGet($rets_mgmt_process, $rets_mgmt_process_item, $rets_mgmt_proc_itm_qty_split, $rets_mgmt_process_step, $returns_document_type, $returns_document, $returns_document_item, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnProcessStepType
```

Reads a specific advanced returns process step.

Reads a specific process step, which the consumer specifies by passing the following key fields: process number, process item number, process step, quantity split key of process item, returns document type, returns document number, and returns item number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnProcessStepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rets_mgmt_process = 'rets_mgmt_process_example'; // string | Process Identification Number
$rets_mgmt_process_item = 'rets_mgmt_process_item_example'; // string | Item Number
$rets_mgmt_proc_itm_qty_split = 'rets_mgmt_proc_itm_qty_split_example'; // string | Split Identification Number
$rets_mgmt_process_step = 'rets_mgmt_process_step_example'; // string | Step ID
$returns_document_type = 'returns_document_type_example'; // string | Document Type
$returns_document = 'returns_document_example'; // string | Document Number
$returns_document_item = 'returns_document_item_example'; // string | Document Item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemGet($rets_mgmt_process, $rets_mgmt_process_item, $rets_mgmt_proc_itm_qty_split, $rets_mgmt_process_step, $returns_document_type, $returns_document, $returns_document_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnProcessStepApi->aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rets_mgmt_process** | **string**| Process Identification Number | |
| **rets_mgmt_process_item** | **string**| Item Number | |
| **rets_mgmt_proc_itm_qty_split** | **string**| Split Identification Number | |
| **rets_mgmt_process_step** | **string**| Step ID | |
| **returns_document_type** | **string**| Document Type | |
| **returns_document** | **string**| Document Number | |
| **returns_document_item** | **string**| Document Item | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnProcessStepType**](../Model/ACustomerReturnProcessStepType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet()`

```php
aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet($rets_mgmt_process, $rets_mgmt_process_item, $rets_mgmt_proc_itm_qty_split, $rets_mgmt_process_step, $returns_document_type, $returns_document, $returns_document_item, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific advanced returns process step.

Reads returns order header fields for a specific process step. Consumers must pass the following key fields: process number, process item number, process step, quantity split key of process item, returns document type, returns document number, and returns item number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnProcessStepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rets_mgmt_process = 'rets_mgmt_process_example'; // string | Process Identification Number
$rets_mgmt_process_item = 'rets_mgmt_process_item_example'; // string | Item Number
$rets_mgmt_proc_itm_qty_split = 'rets_mgmt_proc_itm_qty_split_example'; // string | Split Identification Number
$rets_mgmt_process_step = 'rets_mgmt_process_step_example'; // string | Step ID
$returns_document_type = 'returns_document_type_example'; // string | Document Type
$returns_document = 'returns_document_example'; // string | Document Number
$returns_document_item = 'returns_document_item_example'; // string | Document Item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet($rets_mgmt_process, $rets_mgmt_process_item, $rets_mgmt_proc_itm_qty_split, $rets_mgmt_process_step, $returns_document_type, $returns_document, $returns_document_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnProcessStepApi->aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rets_mgmt_process** | **string**| Process Identification Number | |
| **rets_mgmt_process_item** | **string**| Item Number | |
| **rets_mgmt_proc_itm_qty_split** | **string**| Split Identification Number | |
| **rets_mgmt_process_step** | **string**| Step ID | |
| **returns_document_type** | **string**| Document Type | |
| **returns_document** | **string**| Document Number | |
| **returns_document_item** | **string**| Document Item | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType**](../Model/ACustomerReturnType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnItemGet()`

```php
aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnItemGet($rets_mgmt_process, $rets_mgmt_process_item, $rets_mgmt_proc_itm_qty_split, $rets_mgmt_process_step, $returns_document_type, $returns_document, $returns_document_item, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType
```

Reads the returns order item for a specific advanced returns process step.

Reads returns order item fields for a specific process step. Consumers must pass the following key fields: process number, process item number, process step, quantity split key of process item, returns document type, returns document number, and returns item number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\CustomerReturn\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnProcessStepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rets_mgmt_process = 'rets_mgmt_process_example'; // string | Process Identification Number
$rets_mgmt_process_item = 'rets_mgmt_process_item_example'; // string | Item Number
$rets_mgmt_proc_itm_qty_split = 'rets_mgmt_proc_itm_qty_split_example'; // string | Split Identification Number
$rets_mgmt_process_step = 'rets_mgmt_process_step_example'; // string | Step ID
$returns_document_type = 'returns_document_type_example'; // string | Document Type
$returns_document = 'returns_document_example'; // string | Document Number
$returns_document_item = 'returns_document_item_example'; // string | Document Item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnItemGet($rets_mgmt_process, $rets_mgmt_process_item, $rets_mgmt_proc_itm_qty_split, $rets_mgmt_process_step, $returns_document_type, $returns_document, $returns_document_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnProcessStepApi->aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rets_mgmt_process** | **string**| Process Identification Number | |
| **rets_mgmt_process_item** | **string**| Item Number | |
| **rets_mgmt_proc_itm_qty_split** | **string**| Split Identification Number | |
| **rets_mgmt_process_step** | **string**| Step ID | |
| **returns_document_type** | **string**| Document Type | |
| **returns_document** | **string**| Document Number | |
| **returns_document_item** | **string**| Document Item | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType**](../Model/ACustomerReturnItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
