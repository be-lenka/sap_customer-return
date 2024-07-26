# BeLenka\SAP\CustomerReturn\ItemTextApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToTextGet()**](ItemTextApi.md#aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToTextGet) | **GET** /A_CustomerReturnItem(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;)/to_Text | Reads the item-level texts of a specific item. |
| [**aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDDelete()**](ItemTextApi.md#aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDDelete) | **DELETE** /A_CustomerReturnItemText(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Deletes a specific piece of item-level text. |
| [**aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDGet()**](ItemTextApi.md#aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDGet) | **GET** /A_CustomerReturnItemText(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Reads a specific piece of item-level text. |
| [**aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDPatch()**](ItemTextApi.md#aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDPatch) | **PATCH** /A_CustomerReturnItemText(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Updates a specific piece of item-level text. |
| [**aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet()**](ItemTextApi.md#aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet) | **GET** /A_CustomerReturnItemText(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;)/to_CustomerReturn | Reads the returns order header for a specific piece of item-level text. |
| [**aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnItemGet()**](ItemTextApi.md#aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnItemGet) | **GET** /A_CustomerReturnItemText(CustomerReturn&#x3D;&#39;{CustomerReturn}&#39;,CustomerReturnItem&#x3D;&#39;{CustomerReturnItem}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;)/to_CustomerReturnItem | Reads the returns order item for a specific piece of item-level text. |
| [**aCustomerReturnItemTextGet()**](ItemTextApi.md#aCustomerReturnItemTextGet) | **GET** /A_CustomerReturnItemText | Reads all item-level texts. |


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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemTextApi(
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
    echo 'Exception when calling ItemTextApi->aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToTextGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDDelete()`

```php
aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDDelete($customer_return, $customer_return_item, $language, $long_text_id)
```

Deletes a specific piece of item-level text.

Deletes a specific piece of text at the returns order item level, which the consumer specifies by passing the returns order number, item number, language key, and text ID.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$customer_return_item = 'customer_return_item_example'; // string | Customer Return Item
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID

try {
    $apiInstance->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDDelete($customer_return, $customer_return_item, $language, $long_text_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **customer_return_item** | **string**| Customer Return Item | |
| **language** | **string**| Language Key | |
| **long_text_id** | **string**| Text ID | |

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

## `aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDGet()`

```php
aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDGet($customer_return, $customer_return_item, $language, $long_text_id, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemTextType
```

Reads a specific piece of item-level text.

Reads a specific piece of text at the returns order item level, which the consumer specifies by passing the returns order number, item number, language key, and text ID.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemTextApi(
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
    $result = $apiInstance->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDGet($customer_return, $customer_return_item, $language, $long_text_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\ACustomerReturnItemTextType**](../Model/ACustomerReturnItemTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDPatch()`

```php
aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDPatch($customer_return, $customer_return_item, $language, $long_text_id, $modified_a_customer_return_item_text_type)
```

Updates a specific piece of item-level text.

Updates a specific piece of text at the returns order item level, which the consumer specifies by passing the returns order number, item number, language key, and text ID.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Customer Return
$customer_return_item = 'customer_return_item_example'; // string | Customer Return Item
$language = 'language_example'; // string | Language Key
$long_text_id = 'long_text_id_example'; // string | Text ID
$modified_a_customer_return_item_text_type = new \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemTextType(); // \BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemTextType | New property values

try {
    $apiInstance->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDPatch($customer_return, $customer_return_item, $language, $long_text_id, $modified_a_customer_return_item_text_type);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Customer Return | |
| **customer_return_item** | **string**| Customer Return Item | |
| **language** | **string**| Language Key | |
| **long_text_id** | **string**| Text ID | |
| **modified_a_customer_return_item_text_type** | [**\BeLenka\SAP\CustomerReturn\Model\ModifiedACustomerReturnItemTextType**](../Model/ModifiedACustomerReturnItemTextType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemTextApi(
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
    echo 'Exception when calling ItemTextApi->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemTextApi(
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
    echo 'Exception when calling ItemTextApi->aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnItemGet: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerReturnItemTextGet()`

```php
aCustomerReturnItemTextGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturn\Model\Wrapper12
```

Reads all item-level texts.

Reads text data from all returns order items in the system. The data includes text ID, actual text, language, and more.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ItemTextApi(
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
    $result = $apiInstance->aCustomerReturnItemTextGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemTextApi->aCustomerReturnItemTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturn\Model\Wrapper12**](../Model/Wrapper12.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
