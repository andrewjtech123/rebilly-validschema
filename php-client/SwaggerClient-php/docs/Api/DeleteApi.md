# Swagger\Client\DeleteApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminDraftOrdersidJsonDelete**](DeleteApi.md#adminDraftOrdersidJsonDelete) | **DELETE** /admin/draft_orders/#{id}.json | 


# **adminDraftOrdersidJsonDelete**
> \Swagger\Client\Model\DraftOrder adminDraftOrdersidJsonDelete($id)



Remove a draft order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DeleteApi();
$id = 789; // int | draft order id

try {
    $result = $api_instance->adminDraftOrdersidJsonDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeleteApi->adminDraftOrdersidJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| draft order id |

### Return type

[**\Swagger\Client\Model\DraftOrder**](../Model/DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

