# BeLenka\SAP\CustomerReturn\ItemPartnerApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet()**](ItemPartnerApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_Partner | Reads the item-level business partners of a specific item. |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost()**](ItemPartnerApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost) | **POST** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_Partner | Creates a header partner for a returns order. |
| [**aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionDelete()**](ItemPartnerApi.md#aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionDelete) | **DELETE** /A_CustomerReturnItemPartner(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Deletes a specific item-level business partner. |
| [**aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionGet()**](ItemPartnerApi.md#aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionGet) | **GET** /A_CustomerReturnItemPartner(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Reads a specific item-level business partner. |
| [**aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionPatch()**](ItemPartnerApi.md#aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionPatch) | **PATCH** /A_CustomerReturnItemPartner(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Updates a specific item-level business partner. |
| [**aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet()**](ItemPartnerApi.md#aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet) | **GET** /A_CustomerReturnItemPartner(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;)/to_CustomerReturn | Reads the returns order header for a specific item-level business partner. |
| [**aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet()**](ItemPartnerApi.md#aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet) | **GET** /A_CustomerReturnItemPartner(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific item-level business partner. |
| [**aCustomerReturnItemPartnerGet()**](ItemPartnerApi.md#aCustomerReturnItemPartnerGet) | **GET** /A_CustomerReturnItemPartner | Reads all item-level business partners. |
| [**aCustomerReturnItemPartnerPost()**](ItemPartnerApi.md#aCustomerReturnItemPartnerPost) | **POST** /A_CustomerReturnItemPartner | Creates a partner for a returns order item with a specific partner function. |


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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPartnerApi(
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
    echo 'Exception when calling ItemPartnerApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPartnerApi(
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
    echo 'Exception when calling ItemPartnerApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionDelete()`

```php
aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionDelete($customer_return, $customer_return_item, $partner_function)
```

Deletes a specific item-level business partner.

Deletes a specific item-level business partner, which the consumer specifies by passing the returns order number, item number, and partner function.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales and Distribution Document Number
$customer_return_item = 'customer_return_item_example'; // string | Item number of the SD document
$partner_function = 'partner_function_example'; // string | Partner Function

try {
    $apiInstance->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionDelete($customer_return, $customer_return_item, $partner_function);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerApi->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales and Distribution Document Number | |
| **customer_return_item** | **string**| Item number of the SD document | |
| **partner_function** | **string**| Partner Function | |

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

## `aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionGet()`

```php
aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionGet($customer_return, $customer_return_item, $partner_function, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemPartnerType
```

Reads a specific item-level business partner.

Reads a specific item-level business partner, which the consumer specifies by passing the returns order number, item number, and partner function.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPartnerApi(
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
    $result = $apiInstance->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionGet($customer_return, $customer_return_item, $partner_function, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerApi->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemPartnerType**](../Model/ACustomerReturnItemPartnerType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionPatch()`

```php
aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionPatch($customer_return, $customer_return_item, $partner_function, $modified_a_customer_return_item_partner_type)
```

Updates a specific item-level business partner.

Updates a specific item-level business partner, which the consumer specifies by passing the returns order number, item number, and partner function.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Sales and Distribution Document Number
$customer_return_item = 'customer_return_item_example'; // string | Item number of the SD document
$partner_function = 'partner_function_example'; // string | Partner Function
$modified_a_customer_return_item_partner_type = new \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemPartnerType(); // \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemPartnerType | New property values

try {
    $apiInstance->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionPatch($customer_return, $customer_return_item, $partner_function, $modified_a_customer_return_item_partner_type);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerApi->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Sales and Distribution Document Number | |
| **customer_return_item** | **string**| Item number of the SD document | |
| **partner_function** | **string**| Partner Function | |
| **modified_a_customer_return_item_partner_type** | [**\BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemPartnerType**](../Model/ModifiedACustomerReturnItemPartnerType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPartnerApi(
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
    echo 'Exception when calling ItemPartnerApi->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPartnerApi(
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
    echo 'Exception when calling ItemPartnerApi->aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemPartnerGet()`

```php
aCustomerReturnItemPartnerGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper6
```

Reads all item-level business partners.

Reads business partner data from all returns order items in the system. The data includes fields such as partner function, customer, contact person, and more.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPartnerApi(
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
    $result = $apiInstance->aCustomerReturnItemPartnerGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerApi->aCustomerReturnItemPartnerGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemPartnerPost()`

```php
aCustomerReturnItemPartnerPost($apicustomerreturnsrva_customer_return_item_partner_type_create): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemPartnerType
```

Creates a partner for a returns order item with a specific partner function.

Creates a partner with a specific partner function for a specific returns order item. Consumers must pass the key fields: returns order ID, item number, and partner function.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemPartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apicustomerreturnsrva_customer_return_item_partner_type_create = new \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemPartnerTypeCreate(); // \BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemPartnerTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerReturnItemPartnerPost($apicustomerreturnsrva_customer_return_item_partner_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPartnerApi->aCustomerReturnItemPartnerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
