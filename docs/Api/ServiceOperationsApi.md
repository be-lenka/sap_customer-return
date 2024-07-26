# BeLenka\SAP\CustomerReturn\ServiceOperationsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURN_SRV, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rejectApprovalRequestPost()**](ServiceOperationsApi.md#rejectApprovalRequestPost) | **POST** /rejectApprovalRequest | Rejects a specific returns order. |
| [**releaseApprovalRequestPost()**](ServiceOperationsApi.md#releaseApprovalRequestPost) | **POST** /releaseApprovalRequest | Approves a specific returns order. |


## `rejectApprovalRequestPost()`

```php
rejectApprovalRequestPost($customer_return): \BeLenka\SAP\CustomerReturn\Model\FunctionResult
```

Rejects a specific returns order.

Rejects the approval request for a specific returns order. Consumer must pass the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ServiceOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Value needs to be enclosed in single quotes

try {
    $result = $apiInstance->rejectApprovalRequestPost($customer_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOperationsApi->rejectApprovalRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Value needs to be enclosed in single quotes | |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\FunctionResult**](../Model/FunctionResult.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseApprovalRequestPost()`

```php
releaseApprovalRequestPost($customer_return): \BeLenka\SAP\CustomerReturn\Model\FunctionResult1
```

Approves a specific returns order.

Releases the approval request for a specific returns order. Consumer must pass the returns order number.

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


$apiInstance = new BeLenka\SAP\CustomerReturn\Api\ServiceOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return = 'customer_return_example'; // string | Value needs to be enclosed in single quotes

try {
    $result = $apiInstance->releaseApprovalRequestPost($customer_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOperationsApi->releaseApprovalRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return** | **string**| Value needs to be enclosed in single quotes | |

### Return type

[**\BeLenka\SAP\CustomerReturn\Model\FunctionResult1**](../Model/FunctionResult1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)