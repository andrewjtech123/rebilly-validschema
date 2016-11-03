# Swagger\Client\CreateApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminDraftOrdersJsonPost**](CreateApi.md#adminDraftOrdersJsonPost) | **POST** /admin/draft_orders.json | Create a draft order
[**adminDraftOrdersidSendInvoiceJsonPost**](CreateApi.md#adminDraftOrdersidSendInvoiceJsonPost) | **POST** /admin/draft_orders/#{id}/send_invoice.json | Send an invoice


# **adminDraftOrdersJsonPost**
> \Swagger\Client\Model\DraftOrder adminDraftOrdersJsonPost($draftorder)

Create a draft order

Create a draft order   ### About line items   There are two ways to add a line item:    * Supply a `variant_id`, `quantity` and (if applicable) `discount`   * Add a custom line item by supplying `title`, `price`, `taxable` and `quantity` (at a minimum). The array of line items on a draft order must not contain a `variant_id` more than once. The data copied over from a variant upon creation of a line item is never subsequently updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CreateApi();
$draftorder = new \Swagger\Client\Model\DraftOrder(); // \Swagger\Client\Model\DraftOrder | The draft order to create.

try {
    $result = $api_instance->adminDraftOrdersJsonPost($draftorder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateApi->adminDraftOrdersJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draftorder** | [**\Swagger\Client\Model\DraftOrder**](../Model/\Swagger\Client\Model\DraftOrder.md)| The draft order to create. |

### Return type

[**\Swagger\Client\Model\DraftOrder**](../Model/DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminDraftOrdersidSendInvoiceJsonPost**
> \Swagger\Client\Model\DraftOrderInvoice adminDraftOrdersidSendInvoiceJsonPost($id, $draft_order_invoice)

Send an invoice

“Minimal request” does not require any parameters to be sent (no request body at all or just an empty draft_order_invoice hash)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CreateApi();
$id = 56; // int | 
$draft_order_invoice = new \Swagger\Client\Model\DraftOrderInvoice(); // \Swagger\Client\Model\DraftOrderInvoice | draft_order_invoice to post.

try {
    $result = $api_instance->adminDraftOrdersidSendInvoiceJsonPost($id, $draft_order_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateApi->adminDraftOrdersidSendInvoiceJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **draft_order_invoice** | [**\Swagger\Client\Model\DraftOrderInvoice**](../Model/\Swagger\Client\Model\DraftOrderInvoice.md)| draft_order_invoice to post. | [optional]

### Return type

[**\Swagger\Client\Model\DraftOrderInvoice**](../Model/DraftOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

