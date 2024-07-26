# BeLenka\SAP\CustomerReturn\ItemRelatedObjectApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectGet()**](ItemRelatedObjectApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_RelatedObject | Reads the related objects of a specific returns order item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectPost()**](ItemRelatedObjectApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectPost) | **POST** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_RelatedObject | Creates related objects for a specific returns order item. |
| [**aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete()**](ItemRelatedObjectApi.md#aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete) | **DELETE** /A_CustomerReturnItemRelatedObj(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;) | Deletes a specific related object from a specific returns order item. |
| [**aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet()**](ItemRelatedObjectApi.md#aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet) | **GET** /A_CustomerReturnItemRelatedObj(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;) | Reads a specific related object of a specific returns order item. |
| [**aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet()**](ItemRelatedObjectApi.md#aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet) | **GET** /A_CustomerReturnItemRelatedObj(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;)/to_CustomerReturn | Reads the returns order header for a specific item-level related object. |
| [**aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnItemGet()**](ItemRelatedObjectApi.md#aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnItemGet) | **GET** /A_CustomerReturnItemRelatedObj(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific related object. |
| [**aCustomerReturnItemRelatedObjGet()**](ItemRelatedObjectApi.md#aCustomerReturnItemRelatedObjGet) | **GET** /A_CustomerReturnItemRelatedObj | Reads the related objects of all returns order items. |
| [**aCustomerReturnItemRelatedObjPost()**](ItemRelatedObjectApi.md#aCustomerReturnItemRelatedObjPost) | **POST** /A_CustomerReturnItemRelatedObj | Creates a specific related object for a specific returns order item. |


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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemRelatedObjectApi(
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
    echo 'Exception when calling ItemRelatedObjectApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemRelatedObjectApi(
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
    echo 'Exception when calling ItemRelatedObjectApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToRelatedObjectPost: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete()`

```php
aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete($customer_return, $customer_return_item, $sd_doc_related_object_sequence_nmbr)
```

Deletes a specific related object from a specific returns order item.

Deletes the data for a related object from a specific item of a returns order. Consumers must pass the returns order ID, returns order item number, and sequence number of the related object.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemRelatedObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Order
$customer_return_item = 'customer_return_item_example'; // string | Sales Order Item
$sd_doc_related_object_sequence_nmbr = 'sd_doc_related_object_sequence_nmbr_example'; // string | Sequence Number of the Related Object of an SD Document

try {
    $apiInstance->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete($customer_return, $customer_return_item, $sd_doc_related_object_sequence_nmbr);
} catch (Exception $e) {
    echo 'Exception when calling ItemRelatedObjectApi->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Order | |
| **customer_return_item** | **string**| Sales Order Item | |
| **sd_doc_related_object_sequence_nmbr** | **string**| Sequence Number of the Related Object of an SD Document | |

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

## `aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet()`

```php
aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet($customer_return, $customer_return_item, $sd_doc_related_object_sequence_nmbr, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemRelatedObjType
```

Reads a specific related object of a specific returns order item.

Reads the data of a related object from a specific item of a returns order. Consumers must pass the returns order ID, returns order item number, and sequence number of the related object.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemRelatedObjectApi(
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
    $result = $apiInstance->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet($customer_return, $customer_return_item, $sd_doc_related_object_sequence_nmbr, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRelatedObjectApi->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemRelatedObjType**](../Model/ACustomerReturnItemRelatedObjType.md)

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemRelatedObjectApi(
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
    echo 'Exception when calling ItemRelatedObjectApi->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemRelatedObjectApi(
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
    echo 'Exception when calling ItemRelatedObjectApi->aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemRelatedObjGet()`

```php
aCustomerReturnItemRelatedObjGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper9
```

Reads the related objects of all returns order items.

Reads the data of related objects from the items of all returns orders in the system.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemRelatedObjectApi(
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
    $result = $apiInstance->aCustomerReturnItemRelatedObjGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRelatedObjectApi->aCustomerReturnItemRelatedObjGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemRelatedObjPost()`

```php
aCustomerReturnItemRelatedObjPost($apicustomerreturnsrva_customer_return_item_related_obj_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemRelatedObjType
```

Creates a specific related object for a specific returns order item.

Creates the data of a related object for a specific item of a returns order. Consumers must pass the returns order ID, returns order item number, related object type, and related object reference 1.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemRelatedObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apicustomerreturnsrva_customer_return_item_related_obj_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemRelatedObjTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemRelatedObjTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnItemRelatedObjPost($apicustomerreturnsrva_customer_return_item_related_obj_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemRelatedObjectApi->aCustomerReturnItemRelatedObjPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
