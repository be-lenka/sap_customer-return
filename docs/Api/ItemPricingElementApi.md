# BeLenka\SAP\CustomerReturn\ItemPricingElementApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPricingElementGet()**](ItemPricingElementApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPricingElementGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_PricingElement | Reads the item-level pricing elements of a specific item. |
| [**aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete()**](ItemPricingElementApi.md#aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete) | **DELETE** /A_CustomerReturnItemPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;) | Deletes a specific item-level pricing element. |
| [**aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet()**](ItemPricingElementApi.md#aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet) | **GET** /A_CustomerReturnItemPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;) | Reads a specific item-level pricing element. |
| [**aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch()**](ItemPricingElementApi.md#aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch) | **PATCH** /A_CustomerReturnItemPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;) | Updates a specific item-level pricing element. |
| [**aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet()**](ItemPricingElementApi.md#aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet) | **GET** /A_CustomerReturnItemPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;)/to_CustomerReturn | Reads the returns order header for a specific item-level pricing element. |
| [**aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnItemGet()**](ItemPricingElementApi.md#aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnItemGet) | **GET** /A_CustomerReturnItemPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific item-level pricing element. |
| [**aCustomerReturnItemPrcgElmntGet()**](ItemPricingElementApi.md#aCustomerReturnItemPrcgElmntGet) | **GET** /A_CustomerReturnItemPrcgElmnt | Reads all item-level pricing elements. |


## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPricingElementGet()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPricingElementGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper7
```

Reads the item-level pricing elements of a specific item.

Reads the pricing element data from a specific returns order item, which the consumer specifies by passing the returns order number and item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPricingElementApi(
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
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPricingElementGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPricingElementApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPricingElementGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper7**](../Model/Wrapper7.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete()`

```php
aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter)
```

Deletes a specific item-level pricing element.

Deletes a specific item-level pricing element, which the consumer specifies by passing the returns order number, item number, pricing procedure step, and pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$customer_return_item = 'customer_return_item_example'; // string | Condition item number
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter

try {
    $apiInstance->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter);
} catch (Exception $e) {
    echo 'Exception when calling ItemPricingElementApi->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
| **customer_return_item** | **string**| Condition item number | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet()`

```php
aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemPrcgElmntType
```

Reads a specific item-level pricing element.

Reads a specific item-level pricing element, which the consumer specifies by passing the returns order number, item number, pricing procedure step, and pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$customer_return_item = 'customer_return_item_example'; // string | Condition item number
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPricingElementApi->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
| **customer_return_item** | **string**| Condition item number | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemPrcgElmntType**](../Model/ACustomerReturnItemPrcgElmntType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch()`

```php
aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter, $modified_a_customer_return_item_prcg_elmnt_type)
```

Updates a specific item-level pricing element.

Updates a specific item-level pricing element, which the consumer specifies by passing the returns order number, item number, pricing procedure step, and pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$customer_return_item = 'customer_return_item_example'; // string | Condition item number
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$modified_a_customer_return_item_prcg_elmnt_type = new \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemPrcgElmntType(); // \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemPrcgElmntType | New property values

try {
    $apiInstance->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter, $modified_a_customer_return_item_prcg_elmnt_type);
} catch (Exception $e) {
    echo 'Exception when calling ItemPricingElementApi->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
| **customer_return_item** | **string**| Condition item number | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
| **modified_a_customer_return_item_prcg_elmnt_type** | [**\BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemPrcgElmntType**](../Model/ModifiedACustomerReturnItemPrcgElmntType.md)| New property values | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet()`

```php
aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific item-level pricing element.

Reads returns order header fields for a specific item-level pricing element.Consumers must pass the following key fields: returns order number, item number, item pricing procedure step, and item pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$customer_return_item = 'customer_return_item_example'; // string | Condition item number
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPricingElementApi->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
| **customer_return_item** | **string**| Condition item number | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
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

## `aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnItemGet()`

```php
aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnItemGet($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType
```

Reads the returns order item for a specific item-level pricing element.

Reads returns order item fields for a specific item-level pricing element.Consumers must pass the following key fields: returns order number, item number, item pricing procedure step, and item pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$customer_return_item = 'customer_return_item_example'; // string | Condition item number
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnItemGet($customer_return, $customer_return_item, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPricingElementApi->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
| **customer_return_item** | **string**| Condition item number | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
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

## `aCustomerReturnItemPrcgElmntGet()`

```php
aCustomerReturnItemPrcgElmntGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper7
```

Reads all item-level pricing elements.

Reads pricing element data from the all returns orders items in the system. The data includes fields such as pricing procedure counter, pricing procedure step, and more.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPricingElementApi(
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
    $result = $apiInstance->aCustomerReturnItemPrcgElmntGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPricingElementApi->aCustomerReturnItemPrcgElmntGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper7**](../Model/Wrapper7.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
