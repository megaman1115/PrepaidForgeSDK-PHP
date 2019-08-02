# OpenAPI\Client\ProductsStocksApi

All URIs are relative to *https://api.prepaidforge.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findAllProducts**](ProductsStocksApi.md#findAllProducts) | **GET** /1.0/findAllProducts | 
[**findAllStocks**](ProductsStocksApi.md#findAllStocks) | **POST** /1.0/findStocks | 



## findAllProducts

> \OpenAPI\Client\Model\Product[] findAllProducts()



Retrieves all products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProductsStocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->findAllProducts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsStocksApi->findAllProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Product[]**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findAllStocks

> \OpenAPI\Client\Model\SimpleStockPojo[] findAllStocks($stock_request)



Find Stocks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: PrepaidforgeAPIToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-PrepaidForge-Api-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PrepaidForge-Api-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsStocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stock_request = new \OpenAPI\Client\Model\StockRequest(); // \OpenAPI\Client\Model\StockRequest | 

try {
    $result = $apiInstance->findAllStocks($stock_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsStocksApi->findAllStocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_request** | [**\OpenAPI\Client\Model\StockRequest**](../Model/StockRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SimpleStockPojo[]**](../Model/SimpleStockPojo.md)

### Authorization

[PrepaidforgeAPIToken](../../README.md#PrepaidforgeAPIToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

