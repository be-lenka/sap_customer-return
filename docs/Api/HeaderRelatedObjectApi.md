# BeLenka\SAP\CustomerReturn\HeaderRelatedObjectApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerReturnCustomerReturnToRelatedObjectGet()**](HeaderRelatedObjectApi.md#aCustomerReturnCustomerReturnToRelatedObjectGet) | **GET** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_RelatedObject | Reads the related objects from a returns order header. |
| [**aCustomerReturnCustomerReturnToRelatedObjectPost()**](HeaderRelatedObjectApi.md#aCustomerReturnCustomerReturnToRelatedObjectPost) | **POST** /A_CustomerReturn(&#39;{CustomerReturn}&#39;)/to_RelatedObject | Creates related objects for a returns order header. |
| [**aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete()**](HeaderRelatedObjectApi.md#aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete) | **DELETE** /A_CustomerReturnRelatedObject(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;) | Deletes a specific related object from a returns order header. |
| [**aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet()**](HeaderRelatedObjectApi.md#aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet) | **GET** /A_CustomerReturnRelatedObject(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;) | Reads a specific related object from a returns order header. |
| [**aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet()**](HeaderRelatedObjectApi.md#aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet) | **GET** /A_CustomerReturnRelatedObject(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,SDDocRelatedObjectSequenceNmbr&#x3D;&#39;{SDDocRelatedObjectSequenceNmbr}&#39;)/to_CustomerReturn | Reads the returns order header for a specific related object. |
| [**aCustomerReturnRelatedObjectGet()**](HeaderRelatedObjectApi.md#aCustomerReturnRelatedObjectGet) | **GET** /A_CustomerReturnRelatedObject | Reads the related objects from the headers of all returns orders. |
| [**aCustomerReturnRelatedObjectPost()**](HeaderRelatedObjectApi.md#aCustomerReturnRelatedObjectPost) | **POST** /A_CustomerReturnRelatedObject | Creates a specific related object for a returns order header. |


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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderRelatedObjectApi(
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
    echo 'Exception when calling HeaderRelatedObjectApi->aCustomerReturnCustomerReturnToRelatedObjectGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderRelatedObjectApi(
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
    echo 'Exception when calling HeaderRelatedObjectApi->aCustomerReturnCustomerReturnToRelatedObjectPost: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete()`

```php
aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete($customer_return, $sd_doc_related_object_sequence_nmbr)
```

Deletes a specific related object from a returns order header.

Deletes the data of a related object from the header of a specific returns order. Consumers must pass the returns order ID and sequence number of the related object.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderRelatedObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales Order
$sd_doc_related_object_sequence_nmbr = 'sd_doc_related_object_sequence_nmbr_example'; // string | Sequence Number of the Related Object of an SD Document

try {
    $apiInstance->aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete($customer_return, $sd_doc_related_object_sequence_nmbr);
} catch (Exception $e) {
    echo 'Exception when calling HeaderRelatedObjectApi->aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales Order | |
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

## `aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet()`

```php
aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet($customer_return, $sd_doc_related_object_sequence_nmbr, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnRelatedObjectType
```

Reads a specific related object from a returns order header.

Reads the data of a related object from the header of a specific returns order. Consumers must pass the returns order ID and sequence number of the related object.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderRelatedObjectApi(
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
    $result = $apiInstance->aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet($customer_return, $sd_doc_related_object_sequence_nmbr, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderRelatedObjectApi->aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnRelatedObjectType**](../Model/ACustomerReturnRelatedObjectType.md)

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderRelatedObjectApi(
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
    echo 'Exception when calling HeaderRelatedObjectApi->aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnRelatedObjectGet()`

```php
aCustomerReturnRelatedObjectGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper4
```

Reads the related objects from the headers of all returns orders.

Reads the data of related objects from the headers of all returns orders in the system.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderRelatedObjectApi(
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
    $result = $apiInstance->aCustomerReturnRelatedObjectGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderRelatedObjectApi->aCustomerReturnRelatedObjectGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper4**](../Model/Wrapper4.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnRelatedObjectPost()`

```php
aCustomerReturnRelatedObjectPost($apicustomerreturnsrva_customer_return_related_object_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnRelatedObjectType
```

Creates a specific related object for a returns order header.

Creates the data of a related object for the header of a specific returns order. Consumers must pass the returns order ID, related object type, and related object reference 1.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\HeaderRelatedObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apicustomerreturnsrva_customer_return_related_object_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnRelatedObjectPost($apicustomerreturnsrva_customer_return_related_object_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeaderRelatedObjectApi->aCustomerReturnRelatedObjectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
