# Swagger\Client\DefaultApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminDraftOrdersidCheckoutJsonPost**](DefaultApi.md#adminDraftOrdersidCheckoutJsonPost) | **POST** /admin/draft_orders/#{id}/checkout.json | Create or retrieve existing checkout


# **adminDraftOrdersidCheckoutJsonPost**
> \Swagger\Client\Model\Checkout adminDraftOrdersidCheckoutJsonPost($id2, $id)

Create or retrieve existing checkout

To be used in Checkout API. Requires checkout scope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id2 = 56; // int | 
$id = "id_example"; // string | id of the draft order

try {
    $result = $api_instance->adminDraftOrdersidCheckoutJsonPost($id2, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->adminDraftOrdersidCheckoutJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | **int**|  |
 **id** | **string**| id of the draft order | [optional]

### Return type

[**\Swagger\Client\Model\Checkout**](../Model/Checkout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

