# BeLenka\SAP\CustomerReturn\ReturnsOrderItemApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerReturnCustomerReturnToItemGet()**](ReturnsOrderItemApi.md#aCustomerReturnCustomerReturnToItemGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_Item | Reads all items of a specific returns order. |
| [**aCustomerReturnCustomerReturnToItemPost()**](ReturnsOrderItemApi.md#aCustomerReturnCustomerReturnToItemPost) | **POST** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_Item | Creates one or more items for a specific returns order. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemDelete()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemDelete) | **DELETE** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;) | Deletes a specific returns order item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;) | Reads a specific returns order item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPatch()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPatch) | **PATCH** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;) | Update a specific returns order item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_CustomerReturn | Reads the returns order header for a specific item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_Partner | Reads the item-level business partners of a specific item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost) | **POST** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_Partner | Creates a header partner for a returns order. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPricingElementGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPricingElementGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_PricingElement | Reads the item-level pricing elements of a specific item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToProcessStepGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToProcessStepGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_ProcessStep | Reads the advanced returns process steps of a specific item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_RelatedObject | Reads the related objects of a specific returns order item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectPost()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectPost) | **POST** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_RelatedObject | Creates related objects for a specific returns order item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToScheduleLineGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToScheduleLineGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_ScheduleLine | Reads the schedule lines of a specific item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToSerialNumberGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToSerialNumberGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_SerialNumber | Reads the serial numbers of a specific item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToTextGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToTextGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_Text | Reads the item-level texts of a specific item. |
| [**aCustomerReturnItemGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemGet) | **GET** /A_CustomerReturnItem | Reads all returns order items. |
| [**aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet) | **GET** /A_CustomerReturnItemPartner(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific item-level business partner. |
| [**aCustomerReturnItemPost()**](ReturnsOrderItemApi.md#aCustomerReturnItemPost) | **POST** /A_CustomerReturnItem | Creates one or more returns order items. |
| [**aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnItemGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnItemGet) | **GET** /A_CustomerReturnItemPrcgElmnt(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PricingProcedureStep&#x3D;&#39;{PricingProcedureStep}&#39;,PricingProcedureCounter&#x3D;&#39;{PricingProcedureCounter}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific item-level pricing element. |
| [**aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnItemGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnItemGet) | **GET** /A_CustomerReturnItemRelatedObj(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific related object. |
| [**aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnItemGet()**](ReturnsOrderItemApi.md#aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnItemGet) | **GET** /A_CustomerReturnItemText(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific piece of item-level text. |
| [**aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnItemGet()**](ReturnsOrderItemApi.md#aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnItemGet) | **GET** /A_CustomerReturnProcessStep(RetsMgmtProcess&#x3D;&#39;{RetsMgmtProcess}&#39;,RetsMgmtProcessItem&#x3D;&#39;{RetsMgmtProcessItem}&#39;,RetsMgmtProcItmQtySplit&#x3D;&#39;{RetsMgmtProcItmQtySplit}&#39;,RetsMgmtProcessStep&#x3D;&#39;{RetsMgmtProcessStep}&#39;,ReturnsDocumentType&#x3D;&#39;{ReturnsDocumentType}&#39;,ReturnsDocument&#x3D;&#39;{ReturnsDocument}&#39;,ReturnsDocumentItem&#x3D;&#39;{ReturnsDocumentItem}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific advanced returns process step. |
| [**aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnItemGet()**](ReturnsOrderItemApi.md#aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnItemGet) | **GET** /A_CustomerReturnScheduleLine(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,ScheduleLine&#x3D;&#39;{ScheduleLine}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific schedule line. |


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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnCustomerReturnToItemGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnCustomerReturnToItemPost: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemDelete()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemDelete($customer_return, $customer_return_item)
```

Deletes a specific returns order item.

Deletes the data of a specific returns order item, which the consumer specifies by passing the returns order number and item number.Deleting an item also deletes all related entities such as item partner, item pricing element, and so on.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$customer_return_item = 'customer_return_item_example'; // string | Customer Return Item

try {
    $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemDelete($customer_return, $customer_return_item);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **customer_return_item** | **string**| Customer Return Item | |

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

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemGet()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemGet($customer_return, $customer_return_item, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType
```

Reads a specific returns order item.

Reads the data of a specific returns order item, which the consumer specifies by passing the returns order number and item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemGet($customer_return, $customer_return_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType**](../Model/ACustomerReturnItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPatch()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPatch($customer_return, $customer_return_item, $modified_a_customer_return_item_type)
```

Update a specific returns order item.

Updates the data of a specific returns order item, which the consumer specifies by passing the returns order number and item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$customer_return_item = 'customer_return_item_example'; // string | Customer Return Item
$modified_a_customer_return_item_type = new \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemType(); // \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemType | New property values

try {
    $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPatch($customer_return, $customer_return_item, $modified_a_customer_return_item_type);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **customer_return_item** | **string**| Customer Return Item | |
| **modified_a_customer_return_item_type** | [**\BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemType**](../Model/ModifiedACustomerReturnItemType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper6
```

Reads the item-level business partners of a specific item.

Reads the business partner data from a specific returns order item, which the consumer specifies by passing the returns order number and item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost($customer_return, $customer_return_item, $apicustomerreturnsrva_customer_return_item_partner_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemPartnerType
```

Creates a header partner for a returns order.

Creates the partner data for a specific returns order header. Consumers must pass the key fields: returns order ID and partner function.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$customer_return_item = 'customer_return_item_example'; // string | Customer Return Item
$apicustomerreturnsrva_customer_return_item_partner_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemPartnerTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemPartnerTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost($customer_return, $customer_return_item, $apicustomerreturnsrva_customer_return_item_partner_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **customer_return_item** | **string**| Customer Return Item | |
| **apicustomerreturnsrva_customer_return_item_partner_type_create** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemPartnerTypeCreate**](../Model/APICUSTOMERRETURNSRVACustomerReturnItemPartnerTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemPartnerType**](../Model/ACustomerReturnItemPartnerType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPricingElementGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToProcessStepGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectGet()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper9
```

Reads the related objects of a specific returns order item.

Reads the data of the related objects from a specific item. Consumers must pass the returns order ID and returns order item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectPost()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectPost($customer_return, $customer_return_item, $apicustomerreturnsrva_customer_return_item_related_obj_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemRelatedObjType
```

Creates related objects for a specific returns order item.

Creates the data of the related objects for a specific item. Consumers must pass the returns order ID, returns order item number, related object type, and related object reference 1.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$customer_return_item = 'customer_return_item_example'; // string | Customer Return Item
$apicustomerreturnsrva_customer_return_item_related_obj_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemRelatedObjTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemRelatedObjTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectPost($customer_return, $customer_return_item, $apicustomerreturnsrva_customer_return_item_related_obj_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **customer_return_item** | **string**| Customer Return Item | |
| **apicustomerreturnsrva_customer_return_item_related_obj_type_create** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemRelatedObjTypeCreate**](../Model/APICUSTOMERRETURNSRVACustomerReturnItemRelatedObjTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemRelatedObjType**](../Model/ACustomerReturnItemRelatedObjType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToScheduleLineGet()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToScheduleLineGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper10
```

Reads the schedule lines of a specific item.

Reads the schedule line data from a specific returns order item, which the consumer specifies by passing the returns order number and item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToScheduleLineGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToScheduleLineGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper10**](../Model/Wrapper10.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToSerialNumberGet()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToSerialNumberGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\CustomerReturn\Model\Wrapper11
```

Reads the serial numbers of a specific item.

Reads the serial numbers that are assigned to the individual products of a specific returns order item. Consumer must pass the following key fields: returns order number and item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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

try {
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToSerialNumberGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToSerialNumberGet: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper11**](../Model/Wrapper11.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToTextGet()`

```php
aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToTextGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper12
```

Reads the item-level texts of a specific item.

Reads the text data from a specific returns order item, which the consumer specifies by passing the returns order number and item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToTextGet($customer_return, $customer_return_item, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper12**](../Model/Wrapper12.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemGet()`

```php
aCustomerReturnItemGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper1
```

Reads all returns order items.

Reads all item data of all returns orders in the system.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnItemGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet()`

```php
aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet($customer_return, $customer_return_item, $partner_function, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType
```

Reads the returns order item for a specific item-level business partner.

Reads returns order item fields for a specific item-level partner function. Consumers must pass the following key fields: returns order number, item number, and item partner function.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet($customer_return, $customer_return_item, $partner_function, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType**](../Model/ACustomerReturnItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemPost()`

```php
aCustomerReturnItemPost($apicustomerreturnsrva_customer_return_item_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType
```

Creates one or more returns order items.

Creates items for existing returns orders by using deep insert requests. This means that consumers must create an item together with at least one of the following entities: item partner and item pricing element. Consumers must specify the returns order number in the payload.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apicustomerreturnsrva_customer_return_item_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnItemPost($apicustomerreturnsrva_customer_return_item_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnItemGet()`

```php
aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnItemGet($customer_return, $customer_return_item, $sd_doc_related_object_sequence_nmbr, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType
```

Reads the returns order item for a specific related object.

Reads the returns order item data for a specific item-level related object. Consumers must pass the returns order ID, item number, and sequence number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnItemGet($customer_return, $customer_return_item, $sd_doc_related_object_sequence_nmbr, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType**](../Model/ACustomerReturnItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnItemGet()`

```php
aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnItemGet($customer_return, $customer_return_item, $language, $long_text_id, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType
```

Reads the returns order item for a specific piece of item-level text.

Reads returns order item fields for a specific piece of item-level text. Consumers must pass the returns order number, item number, language key, and text ID.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnItemGet($customer_return, $customer_return_item, $language, $long_text_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType**](../Model/ACustomerReturnItemType.md)

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnItemGet()`

```php
aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnItemGet($customer_return, $customer_return_item, $schedule_line, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType
```

Reads the returns order item for a specific schedule line.

Reads returns order item fields for a specific schedule line. Consumers must pass the following key fields: returns order number, item number, and schedule line number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ReturnsOrderItemApi(
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
    $result = $apiInstance->aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnItemGet($customer_return, $customer_return_item, $schedule_line, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsOrderItemApi->aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemType**](../Model/ACustomerReturnItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
