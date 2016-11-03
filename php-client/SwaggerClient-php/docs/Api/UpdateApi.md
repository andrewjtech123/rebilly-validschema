# Swagger\Client\UpdateApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminDraftOrdersidCompleteJsonPut**](UpdateApi.md#adminDraftOrdersidCompleteJsonPut) | **PUT** /admin/draft_orders/#{id}/complete.json | 
[**adminDraftOrdersidJsonPut**](UpdateApi.md#adminDraftOrdersidJsonPut) | **PUT** /admin/draft_orders/#{id}.json | Modify draft order


# **adminDraftOrdersidCompleteJsonPut**
> \Swagger\Client\Model\DraftOrder adminDraftOrdersidCompleteJsonPut($id, $payment_gateway_id, $payment_pending)



Mark a draft order as paid or pending payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UpdateApi();
$id = 56; // int | 
$payment_gateway_id = 789; // int | Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway.
$payment_pending = true; // bool | true/false

try {
    $result = $api_instance->adminDraftOrdersidCompleteJsonPut($id, $payment_gateway_id, $payment_pending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->adminDraftOrdersidCompleteJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **payment_gateway_id** | **int**| Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway. | [optional]
 **payment_pending** | **bool**| true/false | [optional]

### Return type

[**\Swagger\Client\Model\DraftOrder**](../Model/DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminDraftOrdersidJsonPut**
> \Swagger\Client\Model\DraftOrder adminDraftOrdersidJsonPut($id, $draft_order)

Modify draft order

You can modify an existing draft order. ### Example   Only showing the parameters needed to select a particular shipping rate as returned from     `GET /admin/draft_orders/#{id}/shipping_rates`       draft_order: {       shipping_line: {         handle: ,         phone:       }     }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UpdateApi();
$id = 56; // int | draft order id
$draft_order = new \Swagger\Client\Model\DraftOrder(); // \Swagger\Client\Model\DraftOrder | the draft order to modify.

try {
    $result = $api_instance->adminDraftOrdersidJsonPut($id, $draft_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->adminDraftOrdersidJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| draft order id |
 **draft_order** | [**\Swagger\Client\Model\DraftOrder**](../Model/\Swagger\Client\Model\DraftOrder.md)| the draft order to modify. | [optional]

### Return type

[**\Swagger\Client\Model\DraftOrder**](../Model/DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

