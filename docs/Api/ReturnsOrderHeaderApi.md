# BeLenka\SAP\CustomerReturn\ReturnsOrderHeaderApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerReturnCustomerReturnDelete()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnDelete) | **DELETE** /A_CustomerReturn(&#39;{CustomerReturn}&#39;) | Deletes a specific returns order. |
| [**aCustomerReturnCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;) | Reads the header of a specific returns order. |
| [**aCustomerReturnCustomerReturnPatch()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnPatch) | **PATCH** /A_CustomerReturn(&#39;{CustomerReturn}&#39;) | Updates the header of a specific returns order. |
| [**aCustomerReturnCustomerReturnToCustomerReturnOverviewStatusGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnToCustomerReturnOverviewStatusGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_CustomerReturnOverviewStatus | Reads the customer return overview statuses of a specific returns order. |
| [**aCustomerReturnCustomerReturnToItemGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnToItemGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_Item | Reads all items of a specific returns order. |
| [**aCustomerReturnCustomerReturnToItemPost()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnToItemPost) | **POST** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_Item | Creates one or more items for a specific returns order. |
| [**aCustomerReturnCustomerReturnToPartnerGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnToPartnerGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_Partner | Reads the header-level business partners of a specific returns order. |
| [**aCustomerReturnCustomerReturnToPartnerPost()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnToPartnerPost) | **POST** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_Partner | Creates a header partner for a returns order. |
| [**aCustomerReturnCustomerReturnToPricingElementGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnToPricingElementGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_PricingElement | Reads the header-level pricing elements of a specific returns order. |
| [**aCustomerReturnCustomerReturnToRelatedObjectGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnToRelatedObjectGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_RelatedObject | Reads the related objects from a returns order header. |
| [**aCustomerReturnCustomerReturnToRelatedObjectPost()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnToRelatedObjectPost) | **POST** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_RelatedObject | Creates related objects for a returns order header. |
| [**aCustomerReturnCustomerReturnToTextGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnCustomerReturnToTextGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_Text | Reads the header-level texts of a specific returns order. |
| [**aCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnGet) | **GET** /A_CustomerReturn | Reads all returns order headers. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_CustomerReturn | Reads the returns order header for a specific item. |
| [**aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet) | **GET** /A_CustomerReturnItemPartner(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;)/to_CustomerReturn | Reads the returns order header for a specific item-level business partner. |
| [**aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet) | **GET** /A_CustomerReturnItemPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;)/to_CustomerReturn | Reads the returns order header for a specific item-level pricing element. |
| [**aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet) | **GET** /A_CustomerReturnItemRelatedObj(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;)/to_CustomerReturn | Reads the returns order header for a specific item-level related object. |
| [**aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet) | **GET** /A_CustomerReturnItemText(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;)/to_CustomerReturn | Reads the returns order header for a specific piece of item-level text. |
| [**aCustomerReturnPartnerCustomerReturnCustomerReturnPartnerFunctionPartnerFunctionToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnPartnerCustomerReturnCustomerReturnPartnerFunctionPartnerFunctionToCustomerReturnGet) | **GET** /A_CustomerReturnPartner(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;)/to_CustomerReturn | Reads the returns order header for a specific header-level business partner. |
| [**aCustomerReturnPost()**](ReturnsOrderHeaderApi.md#aCustomerReturnPost) | **POST** /A_CustomerReturn | Creates one or more returns order headers. |
| [**aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet) | **GET** /A_CustomerReturnPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;)/to_CustomerReturn | Reads the returns order header for a specific header-level pricing element. |
| [**aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet) | **GET** /A_CustomerReturnProcessStep(RetsMgmtProcess&#x3D;&#39;{RetsMgmtProcess}&#39;,RetsMgmtProcessItem&#x3D;&#39;{RetsMgmtProcessItem}&#39;,RetsMgmtProcItmQtySplit&#x3D;&#39;{RetsMgmtProcItmQtySplit}&#39;,RetsMgmtProcessStep&#x3D;&#39;{RetsMgmtProcessStep}&#39;,ReturnsDocumentType&#x3D;&#39;{ReturnsDocumentType}&#39;,ReturnsDocument&#x3D;&#39;{ReturnsDocument}&#39;,ReturnsDocumentItem&#x3D;&#39;{ReturnsDocumentItem}&#39;)/to_CustomerReturn | Reads the returns order header for a specific advanced returns process step. |
| [**aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet) | **GET** /A_CustomerReturnRelatedObject(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;)/to_CustomerReturn | Reads the returns order header for a specific related object. |
| [**aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnGet) | **GET** /A_CustomerReturnScheduleLine(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,ScheduleLine&#x3D;&#39;{ScheduleLine}&#39;)/to_CustomerReturn | Reads the returns order header for a specific schedule line. |
| [**aCustomerReturnTextCustomerReturnCustomerReturnLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet()**](ReturnsOrderHeaderApi.md#aCustomerReturnTextCustomerReturnCustomerReturnLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet) | **GET** /A_CustomerReturnText(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;)/to_CustomerReturn | Reads the returns order header for a specific piece of header-level text. |


## `aCustomerReturnCustomerReturnDelete()`

```php
aCustomerReturnCustomerReturnDelete($customer_return)
```

Deletes a specific returns order.

Deletes a specific returns order, which the consumer specifies by passing the returns order number.Deleting a header also deletes all related entities such as business partners, pricing elements, items, and so on.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return

try {
    $apiInstance->aCustomerReturnCustomerReturnDelete($customer_return);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |

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

## `aCustomerReturnCustomerReturnGet()`

```php
aCustomerReturnCustomerReturnGet($customer_return, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the header of a specific returns order.

Reads the header data of a specific returns order, which the consumer specifies by passing the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnCustomerReturnGet($customer_return, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
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

## `aCustomerReturnCustomerReturnPatch()`

```php
aCustomerReturnCustomerReturnPatch($customer_return, $modified_a_customer_return_type)
```

Updates the header of a specific returns order.

Updates the header data of a specific returns order, which the consumer specifies by passing the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$modified_a_customer_return_type = new \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnType(); // \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnType | New property values

try {
    $apiInstance->aCustomerReturnCustomerReturnPatch($customer_return, $modified_a_customer_return_type);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **modified_a_customer_return_type** | [**\BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnType**](../Model/ModifiedACustomerReturnType.md)| New property values | |

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

## `aCustomerReturnCustomerReturnToCustomerReturnOverviewStatusGet()`

```php
aCustomerReturnCustomerReturnToCustomerReturnOverviewStatusGet($customer_return, $select): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnOverviewStatusType
```

Reads the customer return overview statuses of a specific returns order.

Reads the processing status, logistical status, and refunding status from the header of a specific returns order, which the consumer specifies by passing the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerReturnCustomerReturnToCustomerReturnOverviewStatusGet($customer_return, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnToCustomerReturnOverviewStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnOverviewStatusType**](../Model/ACustomerReturnOverviewStatusType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnCustomerReturnToItemGet()`

```php
aCustomerReturnCustomerReturnToItemGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper1
```

Reads all items of a specific returns order.

Reads all item data of a specific returns order, which the consumer specifies by passing the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
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
    $result = $apiInstance->aCustomerReturnCustomerReturnToItemGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnToItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnCustomerReturnToItemPost()`

```php
aCustomerReturnCustomerReturnToItemPost($customer_return, $apicustomerreturnsrva_customer_return_item_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType
```

Creates one or more items for a specific returns order.

Creates item data for a specific returns order, which the consumer specifies by passing the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$apicustomerreturnsrva_customer_return_item_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnCustomerReturnToItemPost($customer_return, $apicustomerreturnsrva_customer_return_item_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnToItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **apicustomerreturnsrva_customer_return_item_type_create** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeCreate**](../Model/APICUSTOMERRETURNSRVACustomerReturnItemTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType**](../Model/ACustomerReturnItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnCustomerReturnToPartnerGet()`

```php
aCustomerReturnCustomerReturnToPartnerGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper2
```

Reads the header-level business partners of a specific returns order.

Reads business partner data from the header of a specific returns order, which the consumer specifies by passing the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
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
    $result = $apiInstance->aCustomerReturnCustomerReturnToPartnerGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnToPartnerGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper2**](../Model/Wrapper2.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnCustomerReturnToPartnerPost()`

```php
aCustomerReturnCustomerReturnToPartnerPost($customer_return, $apicustomerreturnsrva_customer_return_partner_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnPartnerType
```

Creates a header partner for a returns order.

Creates the partner data for a specific returns order header. Consumers must pass the key fields: returns order ID and partner function.The header partner data is relevant for all items for which no item-specific partners are maintained.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$apicustomerreturnsrva_customer_return_partner_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnPartnerTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnPartnerTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnCustomerReturnToPartnerPost($customer_return, $apicustomerreturnsrva_customer_return_partner_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnToPartnerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **apicustomerreturnsrva_customer_return_partner_type_create** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnPartnerTypeCreate**](../Model/APICUSTOMERRETURNSRVACustomerReturnPartnerTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnPartnerType**](../Model/ACustomerReturnPartnerType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
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
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnToPricingElementGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnCustomerReturnToRelatedObjectGet()`

```php
aCustomerReturnCustomerReturnToRelatedObjectGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper4
```

Reads the related objects from a returns order header.

Reads the data of related objects from the header of a specific returns order. Consumers must pass the returns order ID.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
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
    $result = $apiInstance->aCustomerReturnCustomerReturnToRelatedObjectGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnToRelatedObjectGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper4**](../Model/Wrapper4.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnCustomerReturnToRelatedObjectPost()`

```php
aCustomerReturnCustomerReturnToRelatedObjectPost($customer_return, $apicustomerreturnsrva_customer_return_related_object_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnRelatedObjectType
```

Creates related objects for a returns order header.

Creates the data of related objects for the header of a specific returns order. Consumers must pass returns order ID, related object type, and related object reference 1.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$apicustomerreturnsrva_customer_return_related_object_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnCustomerReturnToRelatedObjectPost($customer_return, $apicustomerreturnsrva_customer_return_related_object_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnToRelatedObjectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **apicustomerreturnsrva_customer_return_related_object_type_create** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreate**](../Model/APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnRelatedObjectType**](../Model/ACustomerReturnRelatedObjectType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnCustomerReturnToTextGet()`

```php
aCustomerReturnCustomerReturnToTextGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper5
```

Reads the header-level texts of a specific returns order.

Reads texts data from the header of a specific returns order, which the consumer specifies by passing the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
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
    $result = $apiInstance->aCustomerReturnCustomerReturnToTextGet($customer_return, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnCustomerReturnToTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper5**](../Model/Wrapper5.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnGet()`

```php
aCustomerReturnGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper
```

Reads all returns order headers.

Reads the header data of all returns orders in the system.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
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
    $result = $apiInstance->aCustomerReturnGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper**](../Model/Wrapper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet($customer_return, $customer_return_item, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific item.

Reads returns order header fields for a specific item. Consumer must pass the following key fields: returns order number and item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$customer_return_item = 'customer_return_item_example'; // string | Customer Return Item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet($customer_return, $customer_return_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **customer_return_item** | **string**| Customer Return Item | |
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

## `aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet()`

```php
aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet($customer_return, $customer_return_item, $partner_function, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific item-level business partner.

Reads returns order header fields for a specific item-level partner function. Consumers must pass the following key fields: returns order, item number, and item partner function.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales and Distribution Document Number
$customer_return_item = 'customer_return_item_example'; // string | Item number of the SD document
$partner_function = 'partner_function_example'; // string | Partner Function
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet($customer_return, $customer_return_item, $partner_function, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales and Distribution Document Number | |
| **customer_return_item** | **string**| Item number of the SD document | |
| **partner_function** | **string**| Partner Function | |
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
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
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet()`

```php
aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet($customer_return, $customer_return_item, $sd_doc_related_object_sequence_nmbr, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific item-level related object.

Reads the returns order header data for a specific item-level related object. Consumers must pass the returns order ID, returns order item number, and sequence number of the related object.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Order
$customer_return_item = 'customer_return_item_example'; // string | Sales Order Item
$sd_doc_related_object_sequence_nmbr = 'sd_doc_related_object_sequence_nmbr_example'; // string | Sequence Number of the Related Object of an SD Document
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet($customer_return, $customer_return_item, $sd_doc_related_object_sequence_nmbr, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Order | |
| **customer_return_item** | **string**| Sales Order Item | |
| **sd_doc_related_object_sequence_nmbr** | **string**| Sequence Number of the Related Object of an SD Document | |
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

## `aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet()`

```php
aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet($customer_return, $customer_return_item, $language, $long_text_id, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific piece of item-level text.

Reads returns order header fields for a specific piece of item-level text. Consumers must pass the returns order number, item number, language key, and text ID.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$customer_return_item = 'customer_return_item_example'; // string | Customer Return Item
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet($customer_return, $customer_return_item, $language, $long_text_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **customer_return_item** | **string**| Customer Return Item | |
| **language** | **string**| Language Key | |
| **long_text_id** | **string**| Text ID | |
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

## `aCustomerReturnPartnerCustomerReturnCustomerReturnPartnerFunctionPartnerFunctionToCustomerReturnGet()`

```php
aCustomerReturnPartnerCustomerReturnCustomerReturnPartnerFunctionPartnerFunctionToCustomerReturnGet($customer_return, $partner_function, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific header-level business partner.

Reads returns order header fields for a specific header-level partner function. Consumers must pass the following key fields: returns order number and partner function.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales and Distribution Document Number
$partner_function = 'partner_function_example'; // string | Partner Function
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnPartnerCustomerReturnCustomerReturnPartnerFunctionPartnerFunctionToCustomerReturnGet($customer_return, $partner_function, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnPartnerCustomerReturnCustomerReturnPartnerFunctionPartnerFunctionToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales and Distribution Document Number | |
| **partner_function** | **string**| Partner Function | |
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

## `aCustomerReturnPost()`

```php
aCustomerReturnPost($apicustomerreturnsrva_customer_return_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Creates one or more returns order headers.

Creates returns order headers by using deep insert requests.This means that consumers must create a header together with at least one of the following entities: header partner, header pricing element, item, item partner, and item pricing element.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apicustomerreturnsrva_customer_return_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnPost($apicustomerreturnsrva_customer_return_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apicustomerreturnsrva_customer_return_type_create** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnTypeCreate**](../Model/APICUSTOMERRETURNSRVACustomerReturnTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType**](../Model/ACustomerReturnType.md)

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
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
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
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
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet()`

```php
aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet($customer_return, $sd_doc_related_object_sequence_nmbr, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific related object.

Reads the returns order header data for a specific header-level related object. Consumers must pass the returns order ID and sequence number of the related object.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Order
$sd_doc_related_object_sequence_nmbr = 'sd_doc_related_object_sequence_nmbr_example'; // string | Sequence Number of the Related Object of an SD Document
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet($customer_return, $sd_doc_related_object_sequence_nmbr, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Order | |
| **sd_doc_related_object_sequence_nmbr** | **string**| Sequence Number of the Related Object of an SD Document | |
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

## `aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnGet()`

```php
aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnGet($customer_return, $customer_return_item, $schedule_line, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific schedule line.

Reads returns order header fields for a specific schedule line. Consumers must pass the following key fields: returns order number, item number, and schedule line number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Document
$customer_return_item = 'customer_return_item_example'; // string | Sales Document Item
$schedule_line = 'schedule_line_example'; // string | Schedule Line Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnGet($customer_return, $customer_return_item, $schedule_line, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Document | |
| **customer_return_item** | **string**| Sales Document Item | |
| **schedule_line** | **string**| Schedule Line Number | |
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

## `aCustomerReturnTextCustomerReturnCustomerReturnLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet()`

```php
aCustomerReturnTextCustomerReturnCustomerReturnLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet($customer_return, $language, $long_text_id, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnType
```

Reads the returns order header for a specific piece of header-level text.

Reads returns order header fields for a specific piece of header-level text.Consumers must pass the returns order number, language key, and text ID.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerReturnTextCustomerReturnCustomerReturnLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet($customer_return, $language, $long_text_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderHeaderApi->aCustomerReturnTextCustomerReturnCustomerReturnLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **language** | **string**| Language Key | |
| **long_text_id** | **string**| Text ID | |
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
