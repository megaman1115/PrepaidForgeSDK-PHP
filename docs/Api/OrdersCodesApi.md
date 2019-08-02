# OpenAPI\Client\OrdersCodesApi

All URIs are relative to *http://localhost:8080/api-1.0-SNAPSHOT/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSingleOrder**](OrdersCodesApi.md#createSingleOrder) | **POST** /1.0/createOrder | 
[**getResponseOfSingleCodeRequest**](OrdersCodesApi.md#getResponseOfSingleCodeRequest) | **POST** /1.0/getResponseOfSingleCodeRequest | 



## createSingleOrder

> \OpenAPI\Client\Model\CodeDeliveryPojo createSingleOrder($sku_request)



creates order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: PrepaidforgeAPIToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-PrepaidForge-Api-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PrepaidForge-Api-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku_request = new \OpenAPI\Client\Model\SkuRequest(); // \OpenAPI\Client\Model\SkuRequest | 

try {
    $result = $apiInstance->createSingleOrder($sku_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersCodesApi->createSingleOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_request** | [**\OpenAPI\Client\Model\SkuRequest**](../Model/SkuRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CodeDeliveryPojo**](../Model/CodeDeliveryPojo.md)

### Authorization

[PrepaidforgeAPIToken](../../README.md#PrepaidforgeAPIToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getResponseOfSingleCodeRequest

> \OpenAPI\Client\Model\CodeDeliveryPojo getResponseOfSingleCodeRequest($sku_request)



Retrieve code using custom order reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: PrepaidforgeAPIToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-PrepaidForge-Api-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PrepaidForge-Api-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku_request = new \OpenAPI\Client\Model\SkuRequest(); // \OpenAPI\Client\Model\SkuRequest | 

try {
    $result = $apiInstance->getResponseOfSingleCodeRequest($sku_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersCodesApi->getResponseOfSingleCodeRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_request** | [**\OpenAPI\Client\Model\SkuRequest**](../Model/SkuRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CodeDeliveryPojo**](../Model/CodeDeliveryPojo.md)

### Authorization

[PrepaidforgeAPIToken](../../README.md#PrepaidforgeAPIToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

