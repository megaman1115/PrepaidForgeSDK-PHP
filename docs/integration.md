# Integration example
Please consult the [PrepaidForge integration guide](https://www.notion.so/korsit/PrepaidForge-API-Integration-b57e925dd11049228d74c04d62452499) for additional information
## Step 1 - Sign In
```php
    // Create sign-in request using email and password from https://app.prepaidforge.com
    $merchantSignInRequest = new \OpenAPI\Client\Model\MerchantSignInRequest(['email'=>"USERNAME", "password"=>"PASS"]);
```
```php
    // Use request to sign in and retrieve api_token
    $apiKey = (new OpenAPI\Client\Api\UserApi())->signInWithApi($merchantSignInRequest)["api_token"];
    
```
```php
    // Retrieve the default configuration and set the api-key for the X-PrepaidForge-Api-Token header
    $configuration = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-PrepaidForge-Api-Token', $apiKey);
```
## Step 2 - Find your product
```php
    // Create a new ApiClient using the retrieved configuration.
    $productsStocksclient = new OpenAPI\Client\Api\ProductsStocksApi(null, $configuration);
```
```php
    // Retrieve all available products from the Prepaidforge API
    $allProducts = $productsStocksclient->findAllProducts();
```
## Step 3 - Choose your stock
```php
    // Retrieve stocks (actual purchasable items) for required format using SKU retrieved in the $allProducts call
    $stock_request = new \OpenAPI\Client\Model\StockRequest(["types"=>['TEXT'], "skus"=>["iTunes-10-USD"]]);
    $all_stocks_itunes = $productsStocksclient->findAllStocks($stock_request);
```
## Step 4 - Order your code
```php
    // Create an order using information from the retrieved stock-item 
    $orders_codes_client = new OpenAPI\Client\Api\OrdersCodesApi(null, $configuration);
            $skuRequest = new \OpenAPI\Client\Model\SkuRequest([
            "sku" => "iTunes-10-USD",
            'price' => 8.6726,
            'quantity' => 1,
            'custom_order_reference' => "phpCustomOrderReference" ,
            'code_type' => "TEXT"
        ]);
    $codes = $orders_codes_client->createSingleOrder($skuRequest);
```
## Step 5 (optional) - Look up orders by (your own) order reference
```php
    $skuRequest = new SkuRequest([
        'custom_order_reference' => "phpCustomOrderReference" ,
    ]);

    $code = $orders_codes_client->getResponseOfSingleCodeRequest($skuRequest);
       
```

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)