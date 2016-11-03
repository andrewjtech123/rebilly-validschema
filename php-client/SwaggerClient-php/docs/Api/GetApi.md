# Swagger\Client\GetApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminDraftOrdersCountJsonGet**](GetApi.md#adminDraftOrdersCountJsonGet) | **GET** /admin/draft_orders/count.json | 
[**adminDraftOrdersJsonGet**](GetApi.md#adminDraftOrdersJsonGet) | **GET** /admin/draft_orders.json | 
[**adminDraftOrdersidJsonGet**](GetApi.md#adminDraftOrdersidJsonGet) | **GET** /admin/draft_orders/#{id}.json | 


# **adminDraftOrdersCountJsonGet**
> int adminDraftOrdersCountJsonGet()



Return count of draft orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GetApi();

try {
    $result = $api_instance->adminDraftOrdersCountJsonGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetApi->adminDraftOrdersCountJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminDraftOrdersJsonGet**
> \Swagger\Client\Model\DraftOrder adminDraftOrdersJsonGet($fields, $limit, $page)



Retrieve draft orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GetApi();
$fields = "fields_example"; // string | Comma-separated list of fields to include in the response
$limit = 789; // int | Page size
$page = 789; // int | Page to show

try {
    $result = $api_instance->adminDraftOrdersJsonGet($fields, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetApi->adminDraftOrdersJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Comma-separated list of fields to include in the response | [optional]
 **limit** | **int**| Page size | [optional]
 **page** | **int**| Page to show | [optional]

### Return type

[**\Swagger\Client\Model\DraftOrder**](../Model/DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminDraftOrdersidJsonGet**
> \Swagger\Client\Model\DraftOrder adminDraftOrdersidJsonGet($id)



Receive a single draft order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GetApi();
$id = 789; // int | draft order id

try {
    $result = $api_instance->adminDraftOrdersidJsonGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetApi->adminDraftOrdersidJsonGet: ', $e->getMessage(), PHP_EOL;
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

