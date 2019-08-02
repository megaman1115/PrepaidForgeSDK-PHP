# OpenAPI\Client\UserApi

All URIs are relative to *http://localhost:8080/api-1.0-SNAPSHOT/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**signInWithApi**](UserApi.md#signInWithApi) | **POST** /1.0/signInWithApi | 



## signInWithApi

> \OpenAPI\Client\Model\ApiSignInResponse signInWithApi($merchant_sign_in_request)



Sign in link for api users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_sign_in_request = new \OpenAPI\Client\Model\MerchantSignInRequest(); // \OpenAPI\Client\Model\MerchantSignInRequest | 

try {
    $result = $apiInstance->signInWithApi($merchant_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->signInWithApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_sign_in_request** | [**\OpenAPI\Client\Model\MerchantSignInRequest**](../Model/MerchantSignInRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiSignInResponse**](../Model/ApiSignInResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

