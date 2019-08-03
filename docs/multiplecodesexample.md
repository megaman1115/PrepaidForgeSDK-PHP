```php
require_once(__DIR__ . '/vendor/autoload.php');

/**
* @param string $sku
* @param \OpenAPI\Client\Api\ProductsStocksApi $stockApi
* @param \OpenAPI\Client\Api\OrdersCodesApi $orderApi
* @param string[] $types
* @param int $amount
* @return array
* @throws \OpenAPI\Client\ApiException
*/
function purchaseCheapestStock($sku, $stockApi, $orderApi, $types, $maxAmount = 1)
{
   $purchasedItems = [];
   $stock_request = new \OpenAPI\Client\Model\StockRequest(["types" => $types, "skus" => [$sku]]);
   /** @var \OpenAPI\Client\Model\SimpleStockPojo[] $all_stocks_itunes */
   while (count($purchasedItems) < $maxAmount) {
       $all_stocks_itunes = array_filter($stockApi->findAllStocks($stock_request), function ($item) {
           /** @var \OpenAPI\Client\Model\SimpleStockPojo $item */
           return $item->getQuantity() > 0;
       });
       if (count($all_stocks_itunes) === 0) {
           return $purchasedItems;
       }
       $cheapestStock = array_reduce($all_stocks_itunes, function ($A, $B) {
           if ($A === null || $B === null) {
               return $A ?? $B;
           }
           return $A->getPurchasePrice() < $B->getPurchasePrice() ? $A : $B;
       });
       $custom_reference = "internal_" . $sku . count($purchasedItems) . time();
       $skuRequest = new \OpenAPI\Client\Model\SkuRequest([
           "sku" => $sku,
           'price' => $cheapestStock->getPurchasePrice(),
           'quantity' => 1,
           'custom_order_reference' => $custom_reference,
           'code_type' => $cheapestStock->getType()
       ]);
       $code = null;
       try{
           $code = $orderApi->createSingleOrder($skuRequest);
       } catch (Exception $e){
           echo $e;
       }
       array_push($purchasedItems, ['code' => $code, 'custom_order_reference' => $custom_reference]);
   }
   return $purchasedItems;
}


$merchantSignInRequest = new \OpenAPI\Client\Model\MerchantSignInRequest(['email' => "USERNAME", "password" => "PASSWORD"]);
// Use request to sign in and retrieve api_token
$apiKey = (new OpenAPI\Client\Api\UserApi(null, $configuration))->signInWithApi($merchantSignInRequest)["api_token"];
// Retrieve the default configuration and set the api-key for the X-PrepaidForge-Api-Token header
$configuration->setApiKey('X-PrepaidForge-Api-Token', $apiKey);
$productsStocksclient = new OpenAPI\Client\Api\ProductsStocksApi(null, $configuration);
$ordersCodesApiClient = new OpenAPI\Client\Api\OrdersCodesApi(null, $configuration);

try {
   var_dump(purchaseCheapestStock("iTunes-10-USD", $productsStocksclient, $ordersCodesApiClient, ["TEXT"], 10));
} catch (\OpenAPI\Client\ApiException $e) {
   echo $e;
}

```