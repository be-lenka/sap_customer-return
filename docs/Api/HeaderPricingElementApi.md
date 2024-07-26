# BeLenka\SAP\CustomerReturn\HeaderPricingElementApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerReturnCustomerReturnToPricingElementGet()**](HeaderPricingElementApi.md#aCustomerReturnCustomerReturnToPricingElementGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_PricingElement | Reads the header-level pricing elements of a specific returns order. |
| [**aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete()**](HeaderPricingElementApi.md#aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete) | **DELETE** /A_CustomerReturnPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;) | Deletes a specific header-level pricing element. |
| [**aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet()**](HeaderPricingElementApi.md#aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet) | **GET** /A_CustomerReturnPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;) | Reads a specific header-level pricing element. |
| [**aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch()**](HeaderPricingElementApi.md#aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch) | **PATCH** /A_CustomerReturnPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;) | Updates a specific header-level pricing element. |
| [**aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet()**](HeaderPricingElementApi.md#aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet) | **GET** /A_CustomerReturnPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;)/to_CustomerReturn | Reads the returns order header for a specific header-level pricing element. |
| [**aCustomerReturnPrcgElmntGet()**](HeaderPricingElementApi.md#aCustomerReturnPrcgElmntGet) | **GET** /A_CustomerReturnPrcgElmnt | Reads all header-level pricing elements. |


## `aCustomerReturnCustomerReturnToPricingElementGet()`

```php
aCustomerReturnCustomerReturnToPricingElementGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper3
```

Reads the header-level pricing elements of a specific returns order.

Reads pricing element data from the header of a specific returns order, which the consumer specifies by passing the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnCustomerReturnToPricingElementGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aCustomerReturnCustomerReturnToPricingElementGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete()`

```php
aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete($customer_return, $pricing_procedure_step, $pricing_procedure_counter)
```

Deletes a specific header-level pricing element.

Deletes a specific header-level pricing element, which the consumer specifies by passing the returns order number, header pricing procedure step, and header pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter

try {
    $apiInstance->aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete($customer_return, $pricing_procedure_step, $pricing_procedure_counter);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
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

## `aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet()`

```php
aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet($customer_return, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnPrcgElmntType
```

Reads a specific header-level pricing element.

Reads a specific header-level pricing element, which the consumer specifies by passing the returns order number, header pricing procedure step, and header pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet($customer_return, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnPrcgElmntType**](../Model/ACustomerReturnPrcgElmntType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch()`

```php
aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch($customer_return, $pricing_procedure_step, $pricing_procedure_counter, $modified_a_customer_return_prcg_elmnt_type)
```

Updates a specific header-level pricing element.

Updates a specific header-level pricing element, which the consumer specifies by passing the returns order number, header pricing procedure step, and header pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$modified_a_customer_return_prcg_elmnt_type = new \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnPrcgElmntType(); // \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnPrcgElmntType | New property values

try {
    $apiInstance->aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch($customer_return, $pricing_procedure_step, $pricing_procedure_counter, $modified_a_customer_return_prcg_elmnt_type);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
| **pricing_procedure_step** | **string**| Step Number | |
| **pricing_procedure_counter** | **string**| Condition Counter | |
| **modified_a_customer_return_prcg_elmnt_type** | [**\BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnPrcgElmntType**](../Model/ModifiedACustomerReturnPrcgElmntType.md)| New property values | |

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

## `aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet()`

```php
aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet($customer_return, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific header-level pricing element.

Reads returns order header fields for a specific header-level pricing element. Consumers must pass the following key fields: returns order number, header pricing procedure step, and header pricing procedure counter.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderPricingElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$pricing_procedure_step = 'pricing_procedure_step_example'; // string | Step Number
$pricing_procedure_counter = 'pricing_procedure_counter_example'; // string | Condition Counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet($customer_return, $pricing_procedure_step, $pricing_procedure_counter, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
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

## `aCustomerReturnPrcgElmntGet()`

```php
aCustomerReturnPrcgElmntGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper3
```

Reads all header-level pricing elements.

Reads pricing element data from the headers of all returns orders in the system. The data includes fields such as pricing procedure step, pricing procedure counter, and more.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderPricingElementApi(
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
    $result = $apiInstance->aCustomerReturnPrcgElmntGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderPricingElementApi->aCustomerReturnPrcgElmntGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
