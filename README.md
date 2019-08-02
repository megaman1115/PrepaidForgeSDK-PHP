# OpenAPIClient-php

The public api for prepaidforge

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/megaman1115/PrepaidForge-sdk-PHP.git"
    }
  ],
  "require": {
    "megaman1115/PrepaidForge-sdk-PHP": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: PrepaidforgeAPIToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-PrepaidForge-Api-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed



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



## Documentation for API Endpoints

All URIs are relative to *http://localhost:8080/api-1.0-SNAPSHOT/v1*

Class | Method | HTTP request | 
------------ | ------------- | ------------- | ------------- |
*OrdersCodesApi* | [**createSingleOrder**](docs/Api/OrdersCodesApi.md#createsingleorder) | **POST** /1.0/createOrder | 
*OrdersCodesApi* | [**getResponseOfSingleCodeRequest**](docs/Api/OrdersCodesApi.md#getresponseofsinglecoderequest) | **POST** /1.0/getResponseOfSingleCodeRequest | 
*ProductsStocksApi* | [**findAllProducts**](docs/Api/ProductsStocksApi.md#findallproducts) | **GET** /1.0/findAllProducts | 
*ProductsStocksApi* | [**findAllStocks**](docs/Api/ProductsStocksApi.md#findallstocks) | **POST** /1.0/findStocks | 
*UserApi* | [**signInWithApi**](docs/Api/UserApi.md#signinwithapi) | **POST** /1.0/signInWithApi | 

## Code purchase flow

step | step | link 
------------ | ------------- | ------------- 
1 | Retrieve API-key | [**signInWithApi**](docs/Api/UserApi.md#signinwithapi) |
2 | Retrieve stocks for item that you wish to purchase | [**findAllStocks**](docs/Api/ProductsStocksApi.md#findallstocks) |
3 | Create an order for retrieved stock | [**createSingleOrder**](docs/Api/OrdersCodesApi.md#createsingleorder) |


[**Detailed example**](docs/integration.md)



## Documentation For Models

 - [ApiSignInResponse](docs/Model/ApiSignInResponse.md)
 - [CodeDeliveryPojo](docs/Model/CodeDeliveryPojo.md)
 - [Image](docs/Model/Image.md)
 - [MerchantSignInRequest](docs/Model/MerchantSignInRequest.md)
 - [Money](docs/Model/Money.md)
 - [Product](docs/Model/Product.md)
 - [SimpleStockPojo](docs/Model/SimpleStockPojo.md)
 - [SkuRequest](docs/Model/SkuRequest.md)
 - [StockRequest](docs/Model/StockRequest.md)


## Documentation For Authorization



## PrepaidforgeAPIToken


- **Type**: API key
- **API key parameter name**: X-PrepaidForge-Api-Token
- **Location**: HTTP header

